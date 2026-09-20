<?php $__env->startSection('title', 'Pembayaran - Rei Cosrent'); ?>

<?php $__env->startSection('styles'); ?>
    .payment-card {
        background-color: #0f172a !important;
        color: #ffffff !important;
        border: 1px solid rgba(148, 163, 184, 0.18);
        border-radius: 1rem;
    }

    .payment-card .card-body {
        background-color: #0f172a !important;
        color: #ffffff !important;
    }

    .payment-card .card-title,
    .payment-card .payment-meta,
    .payment-card .payment-meta strong {
        color: #ffffff !important;
    }

    .payment-card .payment-detail-title {
        color: var(--brand-blue) !important;
    }

    .payment-card .payment-instruction-title {
        color: var(--brand-blue) !important;
    }

    .payment-card .card-body,
    .payment-card p,
    .payment-card li,
    .payment-card label,
    .payment-card .text-muted {
        color: inherit;
    }

    .qris-preview-trigger {
        display: inline-block;
        cursor: zoom-in;
    }

    .qris-preview-image {
        max-width: min(90vw, 520px);
        max-height: 75vh;
        object-fit: contain;
        background: #ffffff;
    }

    .qris-preview-modal .modal-content {
        background-color: #ffffff !important;
        color: #141414 !important;
        border-color: rgba(148, 163, 184, 0.24) !important;
    }

    .qris-preview-modal .modal-header {
        background-color: #0d6efd !important;
        color: #ffffff !important;
        border-color: #0d6efd !important;
    }

    .qris-preview-modal .modal-title {
        color: #ffffff !important;
    }

    .qris-preview-modal .modal-body {
        background-color: #ffffff !important;
        color: #141414 !important;
    }

    [data-bs-theme="dark"] .qris-preview-modal .modal-content {
        background-color: #0f172af5 !important;
        color: #ffffff !important;
        border-color: rgba(148, 163, 184, 0.28) !important;
    }

    [data-bs-theme="dark"] .qris-preview-modal .modal-header {
        background-color: #0d6efd !important;
        color: #ffffff !important;
        border-color: #0d6efd !important;
    }

    [data-bs-theme="dark"] .qris-preview-modal .modal-body {
        background-color: #0f172af5 !important;
        color: #ffffff !important;
    }

    .payment-card #bukti_pembayaran {
        background-color: #ffffff !important;
        border-color: rgba(37, 99, 235, 0.35) !important;
        color: #141414 !important;
    }

    .payment-card #bukti_pembayaran:focus {
        background-color: #ffffff !important;
        border-color: #60a5fa !important;
        color: #141414 !important;
        box-shadow: 0 0 0 0.25rem rgba(37, 99, 235, 0.2) !important;
    }

    .payment-card #bukti_pembayaran::file-selector-button {
        background-color: #eef4ff;
        border: 1px solid rgba(37, 99, 235, 0.35);
        color: #141414;
        font-weight: 600;
    }

    .payment-upload-preview {
        display: none;
        position: relative;
        margin-top: 0.75rem;
        padding: 0.75rem;
        border: 1px solid rgba(37, 99, 235, 0.25);
        border-radius: 0.75rem;
        background: rgba(37, 99, 235, 0.06);
    }

    .payment-upload-preview.is-visible {
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .payment-upload-preview-media {
        width: 96px;
        height: 72px;
        flex: 0 0 auto;
        border-radius: 0.5rem;
        object-fit: cover;
        border: 1px solid rgba(37, 99, 235, 0.25);
        background: #ffffff;
    }

    .payment-upload-preview-info {
        min-width: 0;
        flex: 1 1 auto;
    }

    .payment-upload-preview-name {
        display: block;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        font-weight: 600;
    }

    [data-bs-theme="dark"] .payment-upload-preview {
        background: rgba(96, 165, 250, 0.12);
        border-color: rgba(96, 165, 250, 0.35);
    }

    [data-bs-theme="dark"] .payment-upload-preview-media {
        background: #0f172a;
        border-color: rgba(96, 165, 250, 0.35);
    }

    [data-bs-theme="dark"] .payment-card #bukti_pembayaran {
        background-color: #0f172a !important;
        border-color: rgba(96, 165, 250, 0.42) !important;
        color: #e2e8f0 !important;
    }

    [data-bs-theme="dark"] .payment-card #bukti_pembayaran:focus {
        background-color: #0f172a !important;
        border-color: #60a5fa !important;
        color: #e2e8f0 !important;
    }

    [data-bs-theme="dark"] .payment-card #bukti_pembayaran::file-selector-button {
        background-color: #111827;
        border-color: rgba(96, 165, 250, 0.42);
        color: #e2e8f0;
    }

    [data-bs-theme="dark"] .payment-card {
        border-color: rgba(148, 163, 184, 0.24);
    }
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="py-4">
    <div class="container">
        <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center justify-content-between gap-2 mb-4">
            <h2 class="fw-bold mb-0">Pembayaran Pesanan</h2>
            <div class="d-grid d-sm-block">
                <a href="<?php echo e(route('user.pesanan')); ?>" class="btn btn-outline-primary">
                    <i class="bi bi-arrow-left"></i> Kembali ke Pesanan Saya
                </a>
            </div>
        </div>
        <div class="alert alert-info">
            Silakan lakukan pembayaran sesuai instruksi yang tertera di bawah ini.
        </div>
        <!-- Contoh konten pembayaran, silakan sesuaikan dengan kebutuhan -->
        <div class="card mb-4 payment-card">
            <div class="card-body">
                <?php
                    $orderId = null;
                    $nama_kostum = '-';
                    $total_harga = 0;
                    $metode_pembayaran = '-';

                    if (is_object($order)) {
                        $orderId = $order->id ?? null;
                        $nama_kostum = $order->nama_kostum ?? '-';
                        $total_harga = $order->total_harga ?? 0;
                        $metode_pembayaran = $order->metode_pembayaran ?? '-';
                    } elseif (is_array($order)) {
                        $orderId = $order['id'] ?? null;
                        $nama_kostum = $order['nama_kostum'] ?? '-';
                        $total_harga = $order['total_harga'] ?? 0;
                        $metode_pembayaran = $order['metode_pembayaran'] ?? '-';
                    }
                ?>
                <h5 class="card-title payment-detail-title">Detail Pembayaran</h5>
                <p class="mb-2 payment-meta"><strong>ID Pesanan:</strong> <?php echo e($orderId ?? '-'); ?></p>
                <p class="mb-2 payment-meta"><strong>Nama Kostum:</strong> <?php echo e($nama_kostum); ?></p>
                <p class="mb-2 payment-meta"><strong>Total Harga:</strong> Rp <?php echo e(number_format((float) $total_harga, 0, ',', '.')); ?></p>
                <p class="mb-2 payment-meta"><strong>Metode Pembayaran:</strong> <?php echo e($metode_pembayaran); ?></p>
                <hr>
                <h6 class="payment-instruction-title">Instruksi Pembayaran:</h6>
                <ul>
                    <li>Pembayaran transfer bank kirim ke rekening: <strong><?php echo e($profile->nomor_bank ?? ''); ?></strong></li>
                    <li>Pembayaran e-wallet kirim ke nomor: <strong><?php echo e($profile->nomor_ewallet ?? ''); ?></strong></li>
                    <li>
                        Untuk pembayaran QRIS, scan kode berikut:
                        <div class="mt-2">
                            <?php
                                $qrisSrc = null;
                                if (!empty($profile) && !empty($profile->qris)) {
                                    $qrisPath = (string) $profile->qris;
                                    $qrisSrc = str_starts_with($qrisPath, 'storage/')
                                        ? asset($qrisPath)
                                        : asset('storage/' . $qrisPath);
                                }
                            ?>

                            <?php if($qrisSrc): ?>
                                <button type="button" class="btn p-0 border-0 bg-transparent qris-preview-trigger" data-bs-toggle="modal" data-bs-target="#qrisPreviewModal" aria-label="Perbesar QRIS">
                                    <img
                                        id="qris_img"
                                        src="<?php echo e($qrisSrc); ?>"
                                        alt="QRIS"
                                        class="img-fluid rounded border"
                                        style="max-width: 260px;"
                                        onerror="this.closest('.qris-preview-trigger').classList.add('d-none'); document.getElementById('qris_fallback')?.classList.remove('d-none');">
                                </button>
                                <div id="qris_fallback" class="text-muted small d-none"><i class="bi bi-info-circle"></i> QRIS belum tersedia.</div>
                            <?php else: ?>
                                <div class="text-muted small"><i class="bi bi-info-circle"></i> QRIS belum tersedia.</div>
                            <?php endif; ?>
                        </div>
                    </li>
                    <li>Setelah transfer, upload bukti pembayaran di halaman ini.</li>
                </ul>
                <?php if(session('success')): ?>
                    <div class="alert alert-success"><?php echo e(session('success')); ?></div>
                <?php endif; ?>
                <?php if($orderId): ?>
                    <?php if(!empty($pembayaran) && !empty($pembayaran->bukti_pembayaran)): ?>
                        <div class="mb-3">
                            <a href="<?php echo e(asset('storage/' . $pembayaran->bukti_pembayaran)); ?>" target="_blank" class="btn btn-outline-primary">
                                <i class="bi bi-image"></i> Lihat Bukti Pembayaran
                            </a>
                        </div>
                    <?php endif; ?>

                    <form method="POST" action="<?php echo e(route('pembayaran.upload', $orderId)); ?>" enctype="multipart/form-data">
                <?php else: ?>
                    <div class="alert alert-warning">Tidak ada ID pesanan untuk mengunggah bukti pembayaran.</div>
                <?php endif; ?>
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="bukti_pembayaran" class="form-label">Upload Bukti Pembayaran</label>
                        <input type="file" class="form-control" id="bukti_pembayaran" name="bukti_pembayaran" accept="image/*,.pdf" required>
                        <div id="paymentUploadPreview" class="payment-upload-preview" aria-live="polite">
                            <img id="paymentUploadPreviewImage" class="payment-upload-preview-media d-none" src="" alt="Preview bukti pembayaran">
                            <embed id="paymentUploadPreviewPdf" class="payment-upload-preview-media d-none" type="application/pdf">
                            <div class="payment-upload-preview-info">
                                <span id="paymentUploadPreviewName" class="payment-upload-preview-name"></span>
                                <small class="text-muted">Preview bukti pembayaran</small>
                            </div>
                            <button type="button" id="removePaymentUpload" class="btn btn-outline-danger btn-sm" aria-label="Hapus bukti pembayaran">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Kirim Bukti Pembayaran</button>
                </form>
            </div>
        </div>
    </div>
</section>

<div class="modal fade qris-preview-modal" id="qrisPreviewModal" tabindex="-1" aria-labelledby="qrisPreviewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="qrisPreviewModalLabel">QRIS Pembayaran</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body text-center p-4">
                <?php if($qrisSrc): ?>
                    <img src="<?php echo e($qrisSrc); ?>" alt="QRIS Pembayaran Ukuran Besar" class="qris-preview-image rounded border">
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const input = document.getElementById('bukti_pembayaran');
        const preview = document.getElementById('paymentUploadPreview');
        const image = document.getElementById('paymentUploadPreviewImage');
        const pdf = document.getElementById('paymentUploadPreviewPdf');
        const name = document.getElementById('paymentUploadPreviewName');
        const removeButton = document.getElementById('removePaymentUpload');
        let objectUrl = '';

        if (!input || !preview || !image || !pdf || !name || !removeButton) return;

        function clearPreview() {
            input.value = '';
            image.src = '';
            pdf.src = '';
            image.classList.add('d-none');
            pdf.classList.add('d-none');
            name.textContent = '';
            preview.classList.remove('is-visible');
            if (objectUrl) {
                URL.revokeObjectURL(objectUrl);
                objectUrl = '';
            }
        }

        input.addEventListener('change', function () {
            const file = this.files && this.files[0];
            if (!file) {
                clearPreview();
                return;
            }

            if (objectUrl) URL.revokeObjectURL(objectUrl);
            objectUrl = URL.createObjectURL(file);
            image.classList.add('d-none');
            pdf.classList.add('d-none');

            if (file.type === 'application/pdf' || file.name.toLowerCase().endsWith('.pdf')) {
                pdf.src = objectUrl;
                pdf.classList.remove('d-none');
            } else if (file.type.startsWith('image/')) {
                image.src = objectUrl;
                image.classList.remove('d-none');
            } else {
                clearPreview();
                return;
            }

            name.textContent = file.name;
            preview.classList.add('is-visible');
        });

        removeButton.addEventListener('click', clearPreview);
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\rc3\resources\views\pembayaran.blade.php ENDPATH**/ ?>