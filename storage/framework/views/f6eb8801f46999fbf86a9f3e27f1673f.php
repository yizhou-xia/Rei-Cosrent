<?php $__env->startSection('title', 'Formulir Penyewaan - Rei Cosrent'); ?>

<?php $__env->startSection('styles'); ?>
    :root {
        --rental-section-bg: #ffffff;
        --rental-section-text: #141414;
        --rental-muted-text: #5f6368;
        --rental-control-bg: #ffffff;
        --rental-control-text: #141414;
        --rental-control-border: rgba(37, 99, 235, 0.35);
        --rental-control-placeholder: rgba(20, 20, 20, 0.55);
        --rental-costume-bg: #eef4ff;
        --rental-costume-border: rgba(37, 99, 235, 0.2);
        --rental-info-bg: #e7f5ff;
        --rental-info-border: #9ec5fe;
    }

    [data-bs-theme="dark"] {
        --rental-section-bg: #111827;
        --rental-section-text: #e2e8f0;
        --rental-muted-text: #adb5bd;
        --rental-control-bg: #0f172a;
        --rental-control-text: #e2e8f0;
        --rental-control-border: rgba(96, 165, 250, 0.42);
        --rental-control-placeholder: rgba(226, 232, 240, 0.6);
        --rental-costume-bg: #0f172a;
        --rental-costume-border: rgba(96, 165, 250, 0.28);
        --rental-info-bg: rgba(13, 202, 240, 0.14);
        --rental-info-border: rgba(110, 223, 246, 0.45);
    }

    .form-section {
        background-color: var(--rental-section-bg);
        color: var(--rental-section-text);
        border-radius: 1rem;
        padding: 2rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .form-section h4 {
        color: var(--rental-section-text);
        margin-bottom: 1.5rem;
        padding-bottom: 0.5rem;
        border-bottom: 2px solid var(--rental-section-text);
    }

    .kostum-info {
        background-color: var(--rental-costume-bg);
        color: var(--rental-section-text);
        padding: 1rem;
        border-radius: 0.5rem;
        margin-bottom: 1rem;
        border: 1px solid var(--rental-costume-border);
    }

    .kostum-info-layout {
        display: grid;
        grid-template-columns: minmax(180px, 240px) minmax(0, 1fr);
        gap: 1.25rem;
        align-items: center;
    }

    .kostum-image-wrap {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 0;
    }

    .kostum-image {
        display: block;
        width: min(100%, 220px);
        height: auto;
        max-height: 260px;
        object-fit: contain;
    }

    .kostum-details {
        min-width: 0;
        overflow-wrap: anywhere;
    }

    .kostum-details h5,
    .kostum-details p {
        overflow-wrap: anywhere;
    }

    @media (max-width: 575.98px) {
        .kostum-info-layout {
            grid-template-columns: 1fr;
            gap: 1rem;
        }

        .kostum-image {
            width: min(100%, 240px);
            max-height: 240px;
        }
    }

    .kostum-info .text-muted {
        color: var(--rental-muted-text) !important;
    }

    /* Input form control */
    .form-control,
    textarea.form-control {
        background-color: var(--rental-control-bg) !important;
        border-color: var(--rental-control-border) !important;
        color: var(--rental-control-text) !important;
    }

    .form-control::placeholder {
        color: var(--rental-control-placeholder) !important;
    }

    .form-control:focus,
    textarea.form-control:focus {
        background-color: var(--rental-control-bg) !important;
        color: var(--rental-control-text) !important;
        border-color: #60a5fa !important;
        box-shadow: 0 0 0 0.25rem rgba(37, 99, 235, 0.2) !important;
    }

    /* Section content text colors (keep headings like h2/h4 unchanged)
       Light mode: dark text; Dark mode: light text */
    .form-section,
    .form-section label,
    .form-section .form-check-label,
    .form-section .alert,
    .form-section .alert p,
    .form-section .small,
    .form-section strong,
    .form-section p,
    .form-section .kostum-info,
    .form-section .form-control,
    textarea.form-control {
        color: var(--rental-section-text) !important;
    }

    [data-bs-theme="dark"] .form-section,
    [data-bs-theme="dark"] .form-section label,
    [data-bs-theme="dark"] .form-section .form-check-label,
    [data-bs-theme="dark"] .form-section .alert,
    [data-bs-theme="dark"] .form-section .alert p,
    [data-bs-theme="dark"] .form-section .small,
    [data-bs-theme="dark"] .form-section strong,
    [data-bs-theme="dark"] .form-section p,
    [data-bs-theme="dark"] .form-section .kostum-info,
    [data-bs-theme="dark"] .form-section .form-control,
    [data-bs-theme="dark"] textarea.form-control {
        color: var(--rental-section-text) !important;
    }

    /* Pernyataan isi - inherit section color */
    .form-section .alert-info p {
        color: inherit !important;
    }

    .form-section .alert-info {
        background-color: var(--rental-info-bg) !important;
        border-color: var(--rental-info-border) !important;
    }

    [data-bs-theme="dark"] .form-section .text-muted,
    [data-bs-theme="dark"] .form-section small.text-muted {
        color: var(--rental-muted-text) !important;
    }

    .form-control[type="file"]::file-selector-button {
        color: var(--rental-control-text);
        background-color: var(--rental-costume-bg);
        border-color: var(--rental-control-border);
    }

    .identity-upload-preview {
        display: none;
        position: relative;
        width: 100%;
        margin-top: 0.75rem;
        padding: 0.65rem;
        border: 1px solid var(--rental-control-border);
        border-radius: 0.75rem;
        background: var(--rental-costume-bg);
    }

    .identity-upload-preview.is-visible {
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .identity-upload-preview img {
        width: 84px;
        height: 64px;
        flex: 0 0 auto;
        border-radius: 0.5rem;
        object-fit: cover;
        border: 1px solid var(--rental-control-border);
    }

    .identity-upload-preview-info {
        min-width: 0;
        flex: 1 1 auto;
        overflow-wrap: anywhere;
    }

    .identity-upload-preview-name {
        display: block;
        overflow: hidden;
        font-size: 0.85rem;
        font-weight: 600;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .identity-upload-remove {
        flex: 0 0 auto;
    }

    @media (max-width: 575.98px) {
        .identity-upload-preview img {
            width: 72px;
            height: 56px;
        }

        .identity-upload-preview-name {
            font-size: 0.78rem;
        }

        .identity-upload-remove {
            padding: 0.35rem 0.5rem;
        }
    }

    .required-label::after {
        content: " *";
        color: red;
    }
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="py-4">
    <div class="container">
        <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center justify-content-between gap-2 mb-4">
            <h2 class="fw-bold mb-0">Formulir Penyewaan Kostum</h2>
            <div class="d-grid d-sm-block w-100" style="max-width: 220px;">
                <a href="<?php echo e(route('katalog.kostum', ['cat' => strtolower($kostum->kategori)])); ?>" class="btn btn-outline-primary w-100">
                    <i class="bi bi-arrow-left"></i> Kembali
                </a>
            </div>
        </div>

        <?php
            $currentUser = session('user_logged_in') ? App\Models\User::find(session('user_id')) : null;
            $alamatUser = trim((string) ($currentUser->alamat ?? ''));
        ?>

        <!-- Informasi Kostum -->
        <div class="form-section">
            <h4><i class="bi bi-info-circle"></i> Informasi Kostum</h4>
            <div class="kostum-info">
                <div class="kostum-info-layout">
                    <div class="kostum-image-wrap">
                        <?php
                            $img = $kostum->gambar1 ?? '';
                            $src = '';
                            if ($img) {
                                if (str_starts_with($img, 'http')) {
                                    $src = $img;
                                } elseif (str_starts_with($img, 'storage/')) {
                                    $src = asset($img);
                                } elseif (str_starts_with($img, 'public/')) {
                                    $src = asset(str_replace('public/', 'storage/', $img));
                                } elseif ($img) {
                                    $src = asset('storage/' . ltrim($img, '/'));
                                }
                            }
                        ?>
                        <?php if($src): ?>
                            <img src="<?php echo e($src); ?>" alt="<?php echo e($kostum->nama_kostum); ?>" class="kostum-image rounded">
                        <?php else: ?>
                            <img src="<?php echo e(asset('assets/img/no-image.png')); ?>" alt="Tidak ada gambar" class="kostum-image rounded">
                        <?php endif; ?>
                    </div>
                    <div class="kostum-details">
                        <h5 class="fw-bold"><?php echo e($kostum->nama_kostum); ?></h5>
                        <?php if($kostum->judul): ?>
                            <p class="text-muted mb-2"><?php echo e($kostum->judul); ?></p>
                        <?php endif; ?>
                        <p class="mb-1"><strong>Kategori:</strong> <?php echo e($kostum->kategori); ?></p>
                        <p class="mb-1"><strong>Brand:</strong> <?php echo e($kostum->brand ?: '-'); ?></p>
                        <p class="mb-1"><strong>Ukuran:</strong> <?php echo e($kostum->ukuran_kostum); ?></p>
                        <p class="mb-1"><strong>Harga Sewa:</strong> <span class="fw-bold">Rp <?php echo e(number_format((float)$kostum->harga_sewa, 0, ',', '.')); ?></span> / <?php echo e($kostum->durasi_penyewaan); ?></p>
                    </div>
                </div>
            </div>
        </div>

        <?php
            $formAlertMessage = session('error');
            if (!$formAlertMessage && $errors->any()) {
                $formAlertMessage = implode(' ', $errors->all());
            }
            if (!$formAlertMessage && session('user_logged_in') && $alamatUser === '') {
                $formAlertMessage = 'Alamat belum diisi. Lengkapi alamat pada profil sebelum mengirim formulir penyewaan.';
            }
        ?>
        <div id="rentalAvailabilityAlert" class="alert alert-warning d-flex align-items-center <?php echo e($formAlertMessage ? '' : 'd-none'); ?>" role="alert" aria-live="polite" data-server-alert="<?php echo e($formAlertMessage ? '1' : '0'); ?>">
            <i class="bi bi-clock-history me-2"></i>
            <span id="rentalAvailabilityMessage"><?php echo e($formAlertMessage); ?></span>
        </div>

        <!-- Form Penyewaan -->
        <form method="POST" action="<?php echo e(route('formulir.penyewaan.submit')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
                            <input type="hidden" name="id_kostum" value="<?php echo e($kostum->id_kostum); ?>">
            <input type="hidden" name="nama_kostum" value="<?php echo e($kostum->nama_kostum); ?>">

            <!-- Data Penyewa -->
            <div class="form-section">
                <h4><i class="bi bi-person-fill"></i> Data Penyewa</h4>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label required-label">Username</label>
                        <input type="text" name="username" class="form-control" value="<?php echo e(old('username', $currentUser->username ?? '')); ?>" required readonly autocomplete="username">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label required-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" value="<?php echo e(old('nama', $currentUser->nick_name ?? '')); ?>" required readonly autocomplete="name">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label required-label">Nomor Telepon</label>
                        <input type="text" name="nomor_telepon" class="form-control" value="<?php echo e(old('nomor_telepon', $currentUser->nomor_telepon ?? '')); ?>" required readonly autocomplete="tel">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label required-label">Nomor Telepon Pihak Kedua (Orang Tua/Wali/Tetangga/DLL)</label>
                        <input type="text" name="nomor_telepon_2" class="form-control" value="<?php echo e(old('nomor_telepon_2')); ?>" required placeholder="Contoh: 08xxx - Orang Tua" autocomplete="off">
                    </div>
                    <?php if(session('user_logged_in')): ?>
                        <div class="col-md-12">
                            <label class="form-label required-label" for="alamat">Alamat</label>
                            <input type="text" name="alamat" id="alamat" class="form-control" value="<?php echo e(old('alamat', $alamatUser)); ?>" required readonly>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Detail Penyewaan -->
            <div class="form-section">
                <h4><i class="bi bi-calendar-check"></i> Detail Penyewaan</h4>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label required-label">Tanggal Pemakaian</label>
                        <input type="date" name="tanggal_pemakaian" class="form-control" value="<?php echo e(old('tanggal_pemakaian')); ?>" min="<?php echo e(now()->toDateString()); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label required-label">Tanggal Pengembalian</label>
                        <input type="date" name="tanggal_pengembalian" class="form-control" value="<?php echo e(old('tanggal_pengembalian')); ?>" min="<?php echo e(now()->toDateString()); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label required-label">Harga Sewa</label>
                        <input type="number" name="harga_sewa" id="harga_sewa" class="form-control" value="<?php echo e(old('harga_sewa', $kostum->harga_sewa)); ?>" readonly>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label required-label">Ongkir</label>
                        <input type="number" name="ongkir" id="ongkir" class="form-control" value="<?php echo e(old('ongkir', 0)); ?>" readonly>
                    </div>
                    <?php if(filled($kostum->exclude) && !is_null($kostum->harga_exclude) && $kostum->is_exclude_active): ?>
                        <div class="col-md-12">
                            <div class="form-check form-switch p-3 rounded border" style="border-color: var(--rental-control-border) !important; background: var(--rental-costume-bg);">
                                <input class="form-check-input ms-0 me-2" type="checkbox" role="switch" name="sewa_exclude" id="sewa_exclude" value="1" <?php echo e(old('sewa_exclude') ? 'checked' : ''); ?> data-harga-exclude="<?php echo e($kostum->harga_exclude); ?>">
                                <label class="form-check-label fw-semibold" for="sewa_exclude">Sewa dengan Exclude (+Rp <?php echo e(number_format((float) $kostum->harga_exclude, 0, ',', '.')); ?>)</label>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="col-md-12">
                        <label class="form-label required-label">Total Harga</label>
                        <input type="number" name="total_harga" id="total_harga" class="form-control" value="<?php echo e(old('total_harga')); ?>" required min="0" step="0.01" readonly>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label required-label">Metode Pembayaran</label>
                        <div class="row g-3">
                            <div class="col-12 col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="metode_pembayaran" id="pembayaran_qris" value="QRIS" <?php echo e(old('metode_pembayaran') === 'QRIS' ? 'checked' : ''); ?> required>
                                    <label class="form-check-label" for="pembayaran_qris">
                                        Non-tunai (Transfer Bank, E-wallet, & QRIS)
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="metode_pembayaran" id="pembayaran_cod" value="COD" <?php echo e(old('metode_pembayaran') === 'COD' ? 'checked' : ''); ?> required>
                                    <label class="form-check-label" for="pembayaran_cod">
                                        Tunai (COD)
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Identitas -->
            <div class="form-section">
                <h4><i class="bi bi-card-heading"></i> Kartu Identitas</h4>
                <div class="row g-3">
                    <div class="col-md-12">
                        <label class="form-label required-label">Jenis Kartu Identitas</label>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="kartu_identitas" id="identitas_pelajar" value="Kartu Pelajar" <?php echo e(old('kartu_identitas') === 'Kartu Pelajar' ? 'checked' : ''); ?> required>
                                    <label class="form-check-label" for="identitas_pelajar">
                                        Kartu Pelajar
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="kartu_identitas" id="identitas_kia" value="KIA" <?php echo e(old('kartu_identitas') === 'KIA' ? 'checked' : ''); ?> required>
                                    <label class="form-check-label" for="identitas_kia">
                                        KIA (Kartu Identitas Anak)
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="kartu_identitas" id="identitas_ktm" value="KTM" <?php echo e(old('kartu_identitas') === 'KTM' ? 'checked' : ''); ?> required>
                                    <label class="form-check-label" for="identitas_ktm">
                                        KTM (Kartu Tanda Mahasiswa)
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="kartu_identitas" id="identitas_ktp" value="KTP" <?php echo e(old('kartu_identitas') === 'KTP' ? 'checked' : ''); ?> required>
                                    <label class="form-check-label" for="identitas_ktp">
                                        KTP (Kartu Tanda Penduduk)
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="kartu_identitas" id="identitas_lainnya" value="Lainnya" <?php echo e(old('kartu_identitas') === 'Lainnya' ? 'checked' : ''); ?> required>
                                    <label class="form-check-label" for="identitas_lainnya">
                                        Lainnya
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label required-label">Foto Kartu Identitas (NIK di sensor)</label>
                        <input type="file" name="foto_kartu_identitas" class="form-control file-input" data-max-size="5242880" accept="image/*" required>
                        <div class="identity-upload-preview" data-preview-for="foto_kartu_identitas">
                            <img src="" alt="Preview foto kartu identitas">
                            <div class="identity-upload-preview-info">
                                <span class="identity-upload-preview-name"></span>
                                <small class="text-muted">Preview foto kartu identitas</small>
                            </div>
                            <button type="button" class="btn btn-outline-danger btn-sm identity-upload-remove" aria-label="Hapus foto kartu identitas">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                        <small class="text-muted">Format: Bebas (Max 5MB)</small>
                        <div class="invalid-feedback d-block" id="foto_kartu_error" style="display: none;"></div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label required-label">Selfie dengan Kartu Identitas (NIK di sensor)</label>
                        <input type="file" name="selfie_kartu_identitas" class="form-control file-input" data-max-size="5242880" accept="image/*" required>
                        <div class="identity-upload-preview" data-preview-for="selfie_kartu_identitas">
                            <img src="" alt="Preview selfie kartu identitas">
                            <div class="identity-upload-preview-info">
                                <span class="identity-upload-preview-name"></span>
                                <small class="text-muted">Preview selfie kartu identitas</small>
                            </div>
                            <button type="button" class="btn btn-outline-danger btn-sm identity-upload-remove" aria-label="Hapus selfie kartu identitas">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                        <small class="text-muted">Format: Bebas (Max 5MB)</small>
                        <div class="invalid-feedback d-block" id="selfie_kartu_error" style="display: none;"></div>
                    </div>
                </div>
            </div>

            <!-- Pernyataan -->
            <div class="form-section">
                <h4><i class="bi bi-file-text"></i> Pernyataan</h4>
                <input type="hidden" name="pernyataan" id="pernyataan_hidden" value="">
                
                <div class="alert alert-info mb-3" style="background-color: var(--bs-info-bg); border-color: var(--bs-info-border-color);">
                    <p class="mb-0" style="white-space: pre-line;">Dengan ini Saya menyatakan bahwa:
1. Wajib Membayar Lunas
2. Menggunakan/Menjaga/Merawat Secara Baik
3. Mengembalikan Secara Tepat Waktu

Apabila Saya Melanggar maka:
1. Siap Bertanggung Jawab
2. Siap Ganti Rugi
3. Menerima Konsekuensi</p>
                </div>
                
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="agree" required>
                    <label class="form-check-label" for="agree">
                        Saya menyetujui semua ketentuan dan peraturan penyewaan kostum yang berlaku.
                    </label>
                </div>
            </div>

            <!-- Submit -->
            <div class="text-center">
                <button type="submit" class="btn btn-success btn-lg px-5">
                    <i class="bi bi-send"></i> Kirim Formulir
                </button>
            </div>
        </form>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    // Auto-hide only success and error alerts after 5 seconds, keep warning alerts visible
    document.addEventListener('DOMContentLoaded', function () {
        const alerts = document.querySelectorAll('.alert-success, .alert-danger');
        alerts.forEach(alert => {
            setTimeout(() => {
                const bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            }, 5000);
        });

        // Set pernyataan value
        const pernyataanHidden = document.getElementById('pernyataan_hidden');
        const pernyataan = `Dengan ini Saya menyatakan bahwa:
1. Wajib Membayar Lunas
2. Menggunakan/Menjaga/Merawat Secara Baik
3. Mengembalikan Secara Tepat Waktu

Apabila Saya Melanggar maka:
1. Siap Bertanggung Jawab
2. Siap Ganti Rugi
3. Menerima Konsekuensi`;
        
        pernyataanHidden.value = pernyataan;

    });

    // Validasi nomor telepon kedua tidak boleh sama dengan nomor telepon utama
    document.addEventListener('DOMContentLoaded', function () {
        const tel1 = document.querySelector('input[name="nomor_telepon"]');
        const tel2 = document.querySelector('input[name="nomor_telepon_2"]');
        if (tel1 && tel2) {
            function validateTel2() {
                if (tel1.value && tel2.value && tel1.value === tel2.value) {
                    tel2.setCustomValidity('Nomor telepon pihak kedua tidak boleh sama dengan nomor telepon utama!');
                } else {
                    tel2.setCustomValidity('');
                }
            }
            tel1.addEventListener('input', validateTel2);
            tel2.addEventListener('input', validateTel2);
        }
    });

    // Preview and validation for identity images
    function initializeIdentityUploadPreviews() {
        document.querySelectorAll('.file-input').forEach(input => {
            if (input.dataset.previewInitialized === 'true') return;
            input.dataset.previewInitialized = 'true';

            const preview = document.querySelector('[data-preview-for="' + input.name + '"]');
            const previewImage = preview ? preview.querySelector('img') : null;
            const previewName = preview ? preview.querySelector('.identity-upload-preview-name') : null;
            const removeButton = preview ? preview.querySelector('.identity-upload-remove') : null;

            function clearUpload() {
                input.value = '';
                input.classList.remove('is-invalid');
                if (previewImage) previewImage.removeAttribute('src');
                if (previewName) previewName.textContent = '';
                if (preview) preview.classList.remove('is-visible');
            }

            if (removeButton) removeButton.addEventListener('click', clearUpload);

            input.addEventListener('change', function () {
                const maxSize = parseInt(this.dataset.maxSize, 10);
                const file = this.files && this.files[0];
                const errorDiv = document.getElementById(this.name + '_error');

                if (!file) {
                    clearUpload();
                    return;
                }

                if (file.size > maxSize) {
                    if (errorDiv) {
                        errorDiv.style.display = 'block';
                        errorDiv.textContent = `Ukuran file terlalu besar. Maksimal: 5MB, Ukuran file Anda: ${(file.size / 1024 / 1024).toFixed(2)}MB`;
                    }
                    clearUpload();
                    this.classList.add('is-invalid');
                    return;
                }

                if (errorDiv) errorDiv.style.display = 'none';
                this.classList.remove('is-invalid');

                if (!preview || !previewImage || !previewName) return;

                const reader = new FileReader();
                reader.onload = function (event) {
                    previewImage.src = event.target.result;
                    previewName.textContent = file.name;
                    preview.classList.add('is-visible');
                };
                reader.readAsDataURL(file);
            });
        });
    }

    initializeIdentityUploadPreviews();
    document.addEventListener('DOMContentLoaded', initializeIdentityUploadPreviews);

    // Update total ketika harga berubah (fallback untuk display)
    document.addEventListener('DOMContentLoaded', function () {
        const hargaInput = document.getElementById('harga_sewa');
        const ongkirInput = document.getElementById('ongkir');
        const totalInput = document.getElementById('total_harga');
        const alamatInput = document.querySelector('input[name="alamat"]');
        const paymentInputs = document.querySelectorAll('input[name="metode_pembayaran"]');
        const excludeInput = document.getElementById('sewa_exclude');
        let calculatedOngkir = parseFloat(ongkirInput.value) || 0;

        function updateTotal() {
            const harga = parseFloat(hargaInput.value) || 0;
            const selectedPayment = document.querySelector('input[name="metode_pembayaran"]:checked');
            const hasAddress = alamatInput && alamatInput.value.trim() !== '';
            const ongkir = !hasAddress || (selectedPayment && selectedPayment.value === 'COD') ? 0 : calculatedOngkir;
            const hargaExclude = excludeInput && excludeInput.checked ? (parseFloat(excludeInput.dataset.hargaExclude) || 0) : 0;
            ongkirInput.value = ongkir;
            totalInput.value = harga + hargaExclude + ongkir;
        }

        paymentInputs.forEach(input => input.addEventListener('change', updateTotal));
        if (excludeInput) excludeInput.addEventListener('change', updateTotal);

        hargaInput.addEventListener('change', updateTotal);
        ongkirInput.addEventListener('change', updateTotal);
        updateTotal();

        // Fetch ongkir from alamat profil on page load
        function fetchOngkir() {
            if (!alamatInput || !alamatInput.value.trim()) {
                calculatedOngkir = 0;
                updateTotal();
                return;
            }

            fetch('<?php echo e(route('rajaongkir.shipping-cost')); ?>?address=' + encodeURIComponent(alamatInput.value.trim()))
                    .then(response => response.json())
                    .then(data => {
                        if (data && typeof data.ongkir !== 'undefined') {
                            calculatedOngkir = parseFloat(data.ongkir) || 0;
                            updateTotal();
                        } else {
                            calculatedOngkir = 0;
                            updateTotal();
                        }
                    })
                    .catch(err => {
                        console.error('Gagal mengambil ongkir:', err);
                        calculatedOngkir = 0;
                        updateTotal();
                    });
        }

        // Fetch on load
        fetchOngkir();
    });

    document.addEventListener('DOMContentLoaded', function () {
        const rentalForm = document.querySelector('form[action="<?php echo e(route('formulir.penyewaan.submit')); ?>"]');
        const alamatInput = document.querySelector('input[name="alamat"]');
        const startDateInput = document.querySelector('input[name="tanggal_pemakaian"]');
        const endDateInput = document.querySelector('input[name="tanggal_pengembalian"]');
        const availabilityAlert = document.getElementById('rentalAvailabilityAlert');
        const availabilityMessage = document.getElementById('rentalAvailabilityMessage');
        const availabilityAlertDuration = 10000;
        let availabilityRequest = 0;
        let availabilityAlertTimer = null;

            if (availabilityAlert && availabilityAlert.dataset.serverAlert === '1') {
            availabilityAlertTimer = setTimeout(hideAvailabilityAlert, availabilityAlertDuration);
            }

        function hideAvailabilityAlert() {
            if (availabilityAlertTimer) {
                clearTimeout(availabilityAlertTimer);
                availabilityAlertTimer = null;
            }
            if (availabilityAlert) availabilityAlert.classList.add('d-none');
        }

        function showPastDateAlert() {
            if (!availabilityAlert || !availabilityMessage) return;
            hideAvailabilityAlert();
            availabilityMessage.textContent = 'Tanggal pemakaian atau pengembalian tidak boleh menggunakan tanggal yang sudah lewat.';
            availabilityAlert.classList.remove('d-none');
            availabilityAlertTimer = setTimeout(hideAvailabilityAlert, availabilityAlertDuration);
        }

        function hasPastDate() {
            const today = <?php echo json_encode(now()->toDateString(), 15, 512) ?>;
            const startDate = startDateInput ? startDateInput.value : '';
            const endDate = endDateInput ? endDateInput.value : '';
            return (startDate && startDate < today) || (endDate && endDate < today);
        }

        function checkCostumeAvailability() {
            if (!startDateInput || !endDateInput || !availabilityAlert || !availabilityMessage) return;

            const startDate = startDateInput.value;
            const endDate = endDateInput.value;
            if (hasPastDate()) {
                showPastDateAlert();
                return;
            }

            if (!startDate || !endDate || endDate < startDate) {
                if (availabilityAlert.dataset.serverAlert !== '1') {
                    hideAvailabilityAlert();
                }
                return;
            }

            const requestId = ++availabilityRequest;
            const params = new URLSearchParams({
                id_kostum: '<?php echo e($kostum->id_kostum); ?>',
                tanggal_pemakaian: startDate,
                tanggal_pengembalian: endDate,
            });

            fetch('<?php echo e(route('formulir.penyewaan.availability')); ?>?' + params.toString(), {
                headers: { 'Accept': 'application/json' },
            })
                .then(response => response.json())
                .then(data => {
                    if (requestId !== availabilityRequest) return;
                    if (data.available) {
                        hideAvailabilityAlert();
                        return;
                    }

                    hideAvailabilityAlert();
                    availabilityMessage.textContent = data.message || 'Kostum sedang disewa user lain pada tanggal yang dipilih.';
                    availabilityAlert.classList.remove('d-none');
                    availabilityAlertTimer = setTimeout(hideAvailabilityAlert, availabilityAlertDuration);
                })
                .catch(() => {
                    if (requestId === availabilityRequest) hideAvailabilityAlert();
                });
        }

        if (startDateInput) startDateInput.addEventListener('change', checkCostumeAvailability);
        if (endDateInput) endDateInput.addEventListener('change', checkCostumeAvailability);
        checkCostumeAvailability();

        if (rentalForm && alamatInput) {
            rentalForm.addEventListener('submit', function (event) {
                if (hasPastDate()) {
                    event.preventDefault();
                    showPastDateAlert();
                    return;
                }

                if (!alamatInput.value.trim()) {
                    event.preventDefault();
                    alamatInput.classList.add('is-invalid');
                    alamatInput.focus();
                    alert('Alamat belum diisi. Lengkapi alamat pada profil sebelum mengirim formulir.');
                }
            });
        }
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\rc3\resources\views\formulir-penyewaan.blade.php ENDPATH**/ ?>