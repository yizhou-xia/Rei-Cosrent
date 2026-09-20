<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ConfigureAuthenticationSession
{
    public function handle(Request $request, Closure $next)
    {
        $session = $request->hasSession() ? $request->session() : null;
        $authenticated = $session && ($session->get('admin_logged_in') || $session->get('user_logged_in'));

        if ($authenticated) {
            $remembered = (bool) $session->get('auth_remember', false);
            $expiresAt = $session->get('auth_expires_at');

            if ($remembered && $expiresAt && now()->greaterThanOrEqualTo($expiresAt)) {
                $session->flush();
                return redirect()->route('login')->with('error', 'Sesi login telah berakhir. Silakan login kembali.');
            }

            config([
                'session.expire_on_close' => !$remembered,
                'session.lifetime' => $remembered ? 10080 : (int) config('session.lifetime', 120),
            ]);
        }

        return $next($request);
    }
}
