<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class PasswordResetController extends Controller
{
    public function requestForm(Request $request)
    {
        if (session('admin_logged_in')) {
            return redirect()->route('admin.dashboard');
        }
        if (session('user_logged_in')) {
            return redirect()->route('home');
        }

        $email = $request->query('email', old('email'));
        $username = $request->query('username', old('username'));
        $approved = false;

        if ($email) {
            $user = User::where('email', $email)->first();
            $approved = $user && Schema::hasColumn('users', 'password_reset_requested_at') && Schema::hasColumn('users', 'password_reset_approved_at') &&
                $user->password_reset_requested_at && $user->password_reset_approved_at;
        }

        return view('auth.forgot-password', [
            'email' => $email,
            'username' => $username,
            'approved' => $approved,
        ]);
    }

    public function sendResetLink(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [
            'password.confirmed' => 'Konfirmasi password tidak cocok.',
            'password.min' => 'Password minimal 8 karakter.',
        ]);

        if (!Schema::hasColumn('users', 'password_reset_pending_hash')) {
            return back()->with('error', 'Fitur reset password belum siap. Jalankan migration terlebih dahulu.')->withInput();
        }

        $user = User::where('username', $request->input('username'))
            ->where('email', $request->input('email'))
            ->first();

        if (!$user) {
            return back()->withErrors(['username' => 'Username dan email tidak cocok.'])->withInput();
        }

        $user->forceFill([
            'password_reset_requested_at' => now(),
            'password_reset_approved_at' => null,
            'password_reset_pending_hash' => Hash::make($request->input('password')),
        ])->save();

        return redirect()->route('login')->with('success', 'Permintaan ganti password berhasil dikirim. Tunggu verifikasi admin.');
    }

    public function resetForm(Request $request, string $token)
    {
        if (session('admin_logged_in')) {
            return redirect()->route('admin.dashboard');
        }
        if (session('user_logged_in')) {
            return redirect()->route('home');
        }

        return view('auth.reset-password', [
            'token' => $token,
            'email' => $request->query('email'),
        ]);
    }

    public function reset(Request $request)
    {
        $request->validate([
            'token' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [
            'password.confirmed' => 'Konfirmasi password tidak cocok.',
            'password.min' => 'Password minimal 8 karakter.',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password),
                    'remember_token' => Str::random(60),
                ])->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('success', 'Password berhasil direset. Silakan login.')
            : back()->withErrors(['email' => __($status)])->withInput($request->only('email'));
    }

    public function resetApproved(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [
            'password.confirmed' => 'Konfirmasi password tidak cocok.',
            'password.min' => 'Password minimal 8 karakter.',
        ]);

        $user = User::where('email', $request->input('email'))->first();
        if (!$user || !Schema::hasColumn('users', 'password_reset_requested_at') || !Schema::hasColumn('users', 'password_reset_approved_at') ||
            !$user->password_reset_requested_at || !$user->password_reset_approved_at) {
            return back()->withErrors(['email' => 'Permintaan reset password belum disetujui atau tidak ditemukan.']);
        }

        $user->forceFill([
            'password' => Hash::make($request->input('password')),
            'remember_token' => Str::random(60),
            'password_reset_requested_at' => null,
            'password_reset_approved_at' => null,
            'password_reset_pending_hash' => null,
        ])->save();

        return redirect()->route('login')->with('success', 'Password berhasil direset. Silakan login.');
    }
}
