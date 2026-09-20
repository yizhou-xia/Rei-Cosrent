<?php $__env->startSection('title', ($ulasan ? 'Edit' : 'Beri') . ' Ulasan - Rei Cosrent'); ?>

<?php $__env->startSection('styles'); ?>
    .review-form-card {
        --review-surface: #ffffff;
        --review-text: #141414;
        --review-border: rgba(37, 99, 235, 0.12);
        background-color: var(--review-surface) !important;
        color: var(--review-text) !important;
        border: 1px solid var(--review-border) !important;
    }

    [data-bs-theme="dark"] .review-form-card {
        --review-surface: #0f172a;
        --review-text: #ffffff;
        --review-border: rgba(96, 165, 250, 0.16);
    }

    .review-form-card .card-header,
    .review-form-card .card-body,
    .review-form-card .photo-slot,
    .review-form-card .photo-slot .card-body {
        background-color: var(--review-surface) !important;
        color: var(--review-text) !important;
        border-color: var(--review-border) !important;
    }

    .review-form-card .form-label,
    .review-form-card .form-check-label,
    .review-form-card .text-muted,
    .review-form-card small {
        color: var(--review-text) !important;
    }

    .review-form-card .form-control {
        background-color: var(--review-surface) !important;
        color: var(--review-text) !important;
        border-color: var(--review-border) !important;
    }

    .review-form-card .form-control::placeholder {
        color: color-mix(in srgb, var(--review-text) 58%, transparent) !important;
    }

    .review-form-card .form-control:focus {
        background-color: var(--review-surface) !important;
        color: var(--review-text) !important;
        border-color: #60a5fa !important;
        box-shadow: 0 0 0 0.2rem rgba(37, 99, 235, 0.2) !important;
    }

    .review-form-card .photo-slot {
        border: 1px solid var(--review-border) !important;
    }

    .review-form-card .photo-slot .card-body {
        padding: 0.5rem;
    }

    .review-form-card .review-image-preview {
        aspect-ratio: 1 / 1;
        cursor: pointer;
        height: auto;
        width: 100%;
        object-fit: cover;
    }

    .review-form-card .photo-slot label {
        font-size: 0.75rem;
        padding: 0.25rem;
    }
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="py-4">
    <div class="container">
        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2 mb-4">
            <h2 class="fw-bold mb-0"><?php echo e($ulasan ? 'Edit' : 'Beri'); ?> Ulasan</h2>
            <div class="d-grid d-sm-block">
                <a href="<?php echo e(route('user.pesanan')); ?>" class="btn btn-outline-primary">
                    <i class="bi bi-arrow-left"></i> Kembali ke Pesanan
                </a>
            </div>
        </div>

        <?php if(session('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-circle"></i> <?php echo e(session('error')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>

        <div class="row">
              <div class="col-12">
                <div class="card shadow-sm review-form-card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0"><i class="bi bi-star-fill"></i> <?php echo e($ulasan ? 'Edit Ulasan untuk Pesanan' : 'Beri Ulasan untuk Pesanan'); ?></h5>
                    </div>
                    <div class="card-body">

                        <form method="POST" action="<?php echo e($ulasan ? route('user.ulasan.update', $formulir->id) : route('user.ulasan.store', $formulir->id)); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php if($ulasan): ?>
                                <?php echo method_field('PUT'); ?>
                            <?php endif; ?>

                            <div class="mb-4">
                                <label class="form-label fw-bold">Rating <span class="text-danger">*</span></label>
                                <div class="rating-stars" id="ratingStars">
                                    <?php for($i = 1; $i <= 5; $i++): ?>
                                        <i class="bi bi-star<?php echo e(($ulasan && $ulasan->rating >= $i) ? '-fill text-warning' : ''); ?> fs-2" data-rating="<?php echo e($i); ?>" style="cursor: pointer;"></i>
                                    <?php endfor; ?>
                                </div>
                                <input type="hidden" name="rating" id="ratingInput" value="<?php echo e($ulasan->rating ?? ''); ?>" required>
                                <?php $__errorArgs = ['rating'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-danger small mt-1"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                    <div class="mb-4">
                                <label for="review" class="form-label fw-bold">Ulasan Anda</label>
                                <textarea class="form-control <?php $__errorArgs = ['review'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                          id="review"
                                          name="review"
                                          rows="5"
                                          placeholder="Ceritakan pengalaman Anda..."><?php echo e(old('review', $ulasan->review ?? '')); ?></textarea>
                                <?php $__errorArgs = ['review'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold">Foto (Opsional - Maksimal 5 foto)</label>
                                <div class="row row-cols-5 g-2">
                                    <?php for($i = 1; $i <= 5; $i++): ?>
                                        <div class="col">
                                            <div class="card h-100 photo-slot">
                                                <div class="card-body text-center">
                                                    <?php if($ulasan && $ulasan->{'gambar_' . $i}): ?>
                                                        <div class="position-relative mb-2">
                                                            <img src="<?php echo e(asset('storage/' . $ulasan->{'gambar_' . $i})); ?>"
                                                                 alt="Gambar <?php echo e($i); ?>"
                                                                 class="img-fluid rounded mb-2 review-image-preview"
                                                                id="preview_<?php echo e($i); ?>"
                                                                onclick="openReviewImage(this)"
                                                                role="button"
                                                                tabindex="0">
                                                            <button type="button"
                                                                    class="btn btn-sm btn-danger position-absolute top-0 end-0 m-2"
                                                                    onclick="deleteImage(<?php echo e($formulir->id); ?>, <?php echo e($i); ?>)">
                                                                <i class="bi bi-trash"></i>
                                                            </button>
                                                        </div>
                                                    <?php else: ?>
                                                        <div class="position-relative mb-2" id="preview_container_<?php echo e($i); ?>" style="display: none;">
                                                            <img src=""
                                                                 alt="Preview <?php echo e($i); ?>"
                                                                 class="img-fluid rounded mb-2 review-image-preview"
                                                                id="preview_<?php echo e($i); ?>"
                                                                onclick="openReviewImage(this)"
                                                                role="button"
                                                                tabindex="0">
                                                            <button type="button"
                                                                    class="btn btn-sm btn-danger position-absolute top-0 end-0 m-2"
                                                                    onclick="removeSelectedImage(<?php echo e($i); ?>)"
                                                                    aria-label="Hapus foto <?php echo e($i); ?>">
                                                                <i class="bi bi-trash"></i>
                                                            </button>
                                                        </div>
                                                    <?php endif; ?>
                                                    <label for="gambar_<?php echo e($i); ?>" class="btn btn-outline-secondary btn-sm w-100">
                                                        <i class="bi bi-image"></i> Pilih Foto <?php echo e($i); ?>

                                                    </label>
                                                    <input type="file"
                                                           class="d-none"
                                                           id="gambar_<?php echo e($i); ?>"
                                                           name="gambar_<?php echo e($i); ?>"
                                                           accept="image/jpeg,image/png,image/jpg"
                                                           onchange="previewImage(<?php echo e($i); ?>)">
                                                    <?php $__errorArgs = ['gambar_' . $i];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="text-danger small mt-1"><?php echo e($message); ?></div>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endfor; ?>
                                </div>
                                <small class="text-muted">Format: JPG, JPEG, PNG. Maksimal 2MB per foto.</small>
                            </div>

                            <?php if($ulasan && $ulasan->balasan): ?>
                                <div class="alert alert-success">
                                    <h6 class="fw-bold"><i class="bi bi-chat-left-text"></i> Balasan dari Admin:</h6>
                                    <p class="mb-0"><?php echo e($ulasan->balasan); ?></p>
                                </div>
                            <?php endif; ?>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="bi bi-check-circle"></i> <?php echo e($ulasan ? 'Update Ulasan' : 'Kirim Ulasan'); ?>

                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="reviewImageDetailModal" tabindex="-1" aria-labelledby="reviewImageDetailTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="reviewImageDetailTitle">Detail Gambar</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body text-center">
                <img id="reviewImageDetail" src="" alt="Detail Gambar" class="img-fluid rounded" style="max-height: 75vh; object-fit: contain;">
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    const stars = document.querySelectorAll('#ratingStars i');
    const ratingInput = document.getElementById('ratingInput');

    stars.forEach(star => {
        star.addEventListener('click', function() {
            const rating = this.getAttribute('data-rating');
            ratingInput.value = rating;

            stars.forEach(s => {
                const starRating = s.getAttribute('data-rating');
                if (starRating <= rating) {
                    s.classList.remove('bi-star');
                    s.classList.add('bi-star-fill', 'text-warning');
                } else {
                    s.classList.remove('bi-star-fill', 'text-warning');
                    s.classList.add('bi-star');
                }
            });
        });

        star.addEventListener('mouseenter', function() {
            const rating = this.getAttribute('data-rating');
            stars.forEach(s => {
                const starRating = s.getAttribute('data-rating');
                if (starRating <= rating) {
                    s.classList.add('text-warning');
                }
            });
        });

        star.addEventListener('mouseleave', function() {
            const currentRating = ratingInput.value;
            stars.forEach(s => {
                const starRating = s.getAttribute('data-rating');
                if (starRating > currentRating) {
                    s.classList.remove('text-warning');
                }
            });
        });
    });

    function previewImage(number) {
        const input = document.getElementById('gambar_' + number);
        const preview = document.getElementById('preview_' + number);
        const container = document.getElementById('preview_container_' + number);

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
                if (container) {
                    container.style.display = 'block';
                }
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    function openReviewImage(image) {
        const modal = document.getElementById('reviewImageDetailModal');
        const detailImage = document.getElementById('reviewImageDetail');

        if (!modal || !detailImage || !image.src) return;

        detailImage.src = image.src;
        bootstrap.Modal.getOrCreateInstance(modal).show();
    }

    function removeSelectedImage(number) {
        const input = document.getElementById('gambar_' + number);
        const preview = document.getElementById('preview_' + number);
        const container = document.getElementById('preview_container_' + number);

        if (input) input.value = '';
        if (preview) preview.src = '';
        if (container) container.style.display = 'none';
    }

    document.getElementById('reviewImageDetailModal')?.addEventListener('hidden.bs.modal', function() {
        document.getElementById('reviewImageDetail').src = '';
    });

    function deleteImage(formulirId, imageNumber) {
        if (confirm('Apakah Anda yakin ingin menghapus gambar ini?')) {
            fetch(`/ulasan/${formulirId}/delete-image/${imageNumber}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>',
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    location.reload();
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat menghapus gambar');
            });
        }
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\rc3\resources\views\user\ulasan.blade.php ENDPATH**/ ?>