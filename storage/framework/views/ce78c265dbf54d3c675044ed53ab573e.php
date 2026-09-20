<?php $__env->startSection('title', 'Lupa Password - Rei Cosrent'); ?>

<?php $__env->startSection('styles'); ?>
    body, section, .container, .row, .col-lg-5, .col-md-7,
    .card, .card-header, .card-body,
    form, .form-control, .form-label,
    .btn, .btn-primary, .btn-lg, .d-grid,
    .alert, .alert-success, .alert-danger,
    .mb-3, hr, p, a, small, h3, i,
    input, button, label, div {
        transition: background-color 0s ease, color 0s ease, border-color 0s ease, box-shadow 0s ease, transform 0s ease;
    }

    .form-control:focus {
        transition: border-color 0.15s ease, box-shadow 0.15s ease;
    }

    .password-wrapper {
        position: relative;
    }

    .password-toggle {
        position: absolute;
        right: 12px;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        cursor: pointer;
        color: var(--bs-secondary);
        padding: 0;
        font-size: 1.2rem;
        line-height: 1;
    }

    .password-toggle:hover {
        color: var(--bs-primary);
    }

    :root {
        --auth-card-bg: #ffffff;
        --auth-card-border: var(--bs-border-color);
        --auth-card-text: var(--brand-blue);
        --auth-input-bg: rgba(255, 255, 255, 0.92);
        --auth-input-text: var(--brand-blue);
        --auth-placeholder: rgba(15, 23, 42, 0.6);
        --auth-muted: var(--brand-blue);
    }[data-bs-theme="dark"]{
        --auth-card-bg: rgba(15, 23, 42, 0.95);
        --auth-card-border: rgba(96, 165, 250, 0.2);
        --auth-card-text: #ffffff;
        --auth-input-bg: rgba(15, 23, 42, 0.7);
        --auth-input-text: #ffffff;
        --auth-placeholder: rgba(255, 255, 255, 0.6);
        --auth-muted: #ffffff;
    }

    .auth-card {
        background: var(--auth-card-bg);
        border: 1px solid var(--auth-card-border) !important;
        color: var(--auth-card-text);
    }

    .auth-card .card-header {
        background-image: linear-gradient(97deg, #2563eb 0%, #93c5fd 140.21%);
        background-color: transparent;
        color: #ffffff;
        border-bottom: 1px solid rgba(255, 255, 255, 0.12);
    }

    .auth-card .card-header p {
        color: #ffffff !important;
    }

    .auth-card .form-control,
    .auth-card .form-select {
        background: var(--auth-input-bg);
        color: var(--auth-input-text);
        border-color: var(--auth-card-border);
    }

    .auth-card .form-control::placeholder {
        color: var(--auth-placeholder);
    }

    .auth-card,
    .auth-card p,
    .auth-card label,
    .auth-card .form-label,
    .auth-card a,
    .auth-card small {
        color: var(--auth-card-text) !important;
    }

    .auth-card .text-muted {
        color: var(--auth-muted) !important;
    }

    .auth-card .auth-footer,
    .auth-card .auth-footer a {
        color: #141414 !important;
    }
    [data-bs-theme="dark"] .auth-card .auth-footer,
    [data-bs-theme="dark"] .auth-card .auth-footer a {
        color: #ffffff !important;
    }
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card shadow-lg border-0 rounded-xl auth-card">
                    <div class="card-header text-center py-4 rounded-top">
                        <h3 class="mb-0 fw-bold">Lupa Password</h3>
                        <p class="mb-0 small">Masukkan email Anda untuk meminta reset password.</p>
                    </div>
                    <div class="card-body p-4">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="bi bi-check-circle"></i> <?php echo e(session('status')); ?>

                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        <?php endif; ?>

                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <form method="POST" action="<?php echo e(route('password.email')); ?>">
                            <?php echo csrf_field(); ?>

                            <div class="mb-3">
                                <label for="username" class="form-label fw-semibold">Username</label>
                                <input type="text" class="form-control" id="username" name="username" value="<?php echo e(old('username', $username ?? '')); ?>" placeholder="Masukkan username akun" required autofocus>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label fw-semibold">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?php echo e(old('email', $email ?? '')); ?>" placeholder="Masukkan email akun" required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label fw-semibold">Password Baru</label>
                                <div class="password-wrapper">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Minimal 8 karakter" required style="padding-right: 40px;">
                                    <button type="button" class="password-toggle" data-target="password" aria-label="Tampilkan password baru" onclick="togglePassword(this)">
                                        <i class="bi bi-eye" id="password-icon"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label fw-semibold">Konfirmasi Password Baru</label>
                                <div class="password-wrapper">
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Ulangi password baru" required style="padding-right: 40px;">
                                    <button type="button" class="password-toggle" data-target="password_confirmation" aria-label="Tampilkan konfirmasi password" onclick="togglePassword(this)">
                                        <i class="bi bi-eye" id="password_confirmation-icon"></i>
                                    </button>
                                </div>
                                <small class="text-muted">Password baru akan aktif setelah diverifikasi admin.</small>
                            </div>

                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="bi bi-shield-lock"></i> Kirim Permintaan Reset
                                </button>
                            </div>

                            <hr>

                            <p class="text-center mb-0 auth-footer">
                                Kembali ke <a href="<?php echo e(route('login')); ?>" class="text-decoration-none fw-semibold">Login</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const alerts = document.querySelectorAll('.alert');
        alerts.forEach(alert => {
            setTimeout(() => {
                const bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            }, 3000);
        });
    });

    function togglePassword(button) {
        const targetId = button.getAttribute('data-target');
        const field = document.getElementById(targetId);
        const icon = button.querySelector('i');
        if (!field) return;

        const isPassword = field.type === 'password';
        field.type = isPassword ? 'text' : 'password';
        if (icon) {
            icon.classList.toggle('bi-eye', !isPassword);
            icon.classList.toggle('bi-eye-slash', isPassword);
        }
        button.setAttribute('aria-label', isPassword ? 'Sembunyikan password' : 'Tampilkan password');
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\rc3\resources\views\auth\forgot-password.blade.php ENDPATH**/ ?>