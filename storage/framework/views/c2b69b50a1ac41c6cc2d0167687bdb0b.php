<?php $__env->startSection('title', ($catalog ? ($catalog->name . ' - Katalog Kostum') : 'Katalog Tidak Ditemukan')); ?>

<?php $__env->startSection('styles'); ?>

    :root {
        --catalog-title-color: #141414;

        --catalog-card-bg: #ffffff;
        --catalog-card-border: rgba(37, 99, 235, 0.12);
        --catalog-text: #141414;
        --catalog-muted: rgba(11, 11, 11, 0.6);
        --catalog-modal-bg: #ffffff;
        --catalog-modal-text: #141414;
        --catalog-modal-muted: rgba(11, 11, 11, 0.7);
        --catalog-modal-border: rgba(37, 99, 235, 0.12);
        --catalog-modal-header-bg: #ffffff;

        --catalog-filter-bg: #ffffff;
        --catalog-filter-text: #141414;
        --catalog-filter-muted: #5f6368;
        --catalog-filter-border: rgba(20, 20, 20, 0.18);
        --catalog-filter-focus: rgba(37, 99, 235, 0.22);
        --catalog-filter-button-text: #ffffff;
    }[data-bs-theme="dark"]{
        --catalog-title-color: #ffffff;
        --catalog-card-bg: #0f172a;
        --catalog-card-border: rgba(96, 165, 250, 0.16);
        --catalog-text: #ffffff;
        --catalog-muted: rgba(255, 255, 255, 0.7);
        --catalog-modal-bg: #0f172a;
        --catalog-modal-text: #ffffff;
        --catalog-modal-muted: rgba(255, 255, 255, 0.7);
        --catalog-modal-border: rgba(96, 165, 250, 0.16);
        --catalog-modal-header-bg: #0b1220;

        --catalog-filter-bg: #111827;
        --catalog-filter-text: #f8fafc;
        --catalog-filter-muted: #cbd5e1;
        --catalog-filter-border: rgba(148, 163, 184, 0.38);
        --catalog-filter-focus: rgba(96, 165, 250, 0.3);
        --catalog-filter-button-text: #ffffff;
    }

    /* Light theme: force neutral modal surface + readable text inside the costume detail modal */
    [data-bs-theme="light"] .costume-modal .modal-content {
        background: var(--catalog-modal-bg) !important;
        color: var(--catalog-modal-text) !important;
    }

    [data-bs-theme="light"] .costume-modal .modal-header {
        background: var(--catalog-modal-header-bg) !important;
        color: var(--catalog-modal-text) !important;
        border-bottom: 1px solid var(--catalog-modal-border) !important;
    }

    [data-bs-theme="light"] .costume-modal .modal-title {
        color: var(--brand-blue) !important;
        font-weight: 700;
    }

    [data-bs-theme="light"] .costume-modal .modal-body * {
        color: var(--catalog-modal-text) !important;
    }

    [data-bs-theme="light"] .costume-modal .modal-body .text-muted,
    [data-bs-theme="light"] .costume-modal .modal-body .text-secondary,
    [data-bs-theme="light"] .costume-modal .modal-body .text-body-secondary {
        color: var(--catalog-modal-muted) !important;
    }

    /* Custom colors requested by admin */
    .jk-pria { color: #2563eb !important; }
    .jk-wanita { color: #ec4899 !important; }
    .kostum-price { color: #16a34a !important; font-weight: 700; }
    .kostum-brand { color: inherit !important; }
    .kostum-rating {
        color: #f59e0b !important;
        font-size: 0.78rem;
        line-height: 1;
        white-space: nowrap;
    }

    .kostum-rating-count {
        color: var(--catalog-muted) !important;
        font-size: 0.68rem;
        margin-left: 0.2rem;
    }

    .kostum-availability-maintenance {
        background-color: #dc2626 !important;
        color: #ffffff !important;
    }

    .kostum-availability-rented {
        background-color: #facc15 !important;
        color: #422006 !important;
    }
    .costume-modal .modal-body .label-col { color: var(--catalog-modal-muted) !important; }

    [data-bs-theme="light"] .costume-modal .modal-footer {
        background: var(--catalog-modal-bg) !important;
        color: var(--catalog-modal-text) !important;
        border-top: 1px solid var(--catalog-modal-border) !important;
    }

    .costume-modal .modal-title {
        color: var(--brand-blue) !important;
        -webkit-text-fill-color: var(--brand-blue) !important;
    }

    .costume-modal .modal-footer .btn {
        background-image: linear-gradient(97deg, #2563eb 0%, #93c5fd 140.21%) !important;
        background-color: transparent !important;
        color: #ffffff !important;
        -webkit-text-fill-color: #ffffff !important;
        border: none !important;
        background-size: 200% auto;
        background-position: 0% center;
        transition: background-position 0.6s ease-in-out, transform 0.3s ease !important;
        will-change: background-position, transform;
    }

    .costume-modal .modal-footer .btn:hover {
        background-image: linear-gradient(97deg, #93c5fd 0%, #2563eb 140.21%) !important;
        background-position: 100% center !important;
        background-color: transparent !important;
        color: #ffffff !important;
    }

    .costume-modal .modal-footer .btn:focus {
        background-image: linear-gradient(97deg, #2563eb 0%, #93c5fd 140.21%) !important;
        background-color: transparent !important;
        color: #ffffff !important;
        box-shadow: 0 0 0 0.25rem rgba(37, 99, 235, 0.25) !important;
    }

    .catalog-title-main {
        color: var(--brand-blue) !important;
    }


    .search-card {
        background: var(--catalog-filter-bg);
        color: var(--catalog-filter-text);
        border: 1px solid var(--catalog-filter-border);
    }

    .admin-form-alert {
        border-color: #dc2626 !important;
        background-color: var(--catalog-card-bg) !important;
        color: var(--catalog-text) !important;
    }

    .search-card .card-body,
    .search-card .form-label,
    .search-card .text-muted,
    .search-card .form-text {
        color: var(--catalog-filter-text) !important;
    }

    .search-card .form-control,
    .search-card .form-select {
        color: var(--catalog-filter-text) !important;
        background-color: var(--catalog-filter-bg) !important;
        border-color: var(--catalog-filter-border) !important;
        color-scheme: light;
    }

    [data-bs-theme="dark"] .search-card .form-control,
    [data-bs-theme="dark"] .search-card .form-select {
        color-scheme: dark;
    }

    .search-card .form-control::placeholder {
        color: var(--catalog-filter-muted) !important;
        opacity: 1;
    }

    .search-card .form-control:focus,
    .search-card .form-select:focus {
        border-color: var(--brand-blue) !important;
        box-shadow: 0 0 0 0.2rem var(--catalog-filter-focus) !important;
    }

    .search-card .btn-primary {
        color: var(--catalog-filter-button-text) !important;
        border-color: var(--brand-blue) !important;
    }

    .costume-card {
        overflow: hidden;
        background-color: var(--catalog-card-bg);
        color: var(--brand-blue) !important;
        transition: all 0s ease;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        position: relative;
        border: 1px solid var(--catalog-card-border);
    }

    .costume-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    .costume-thumb {
        aspect-ratio: 1 / 1;
        background: var(--bs-secondary-bg, #f8f9fa);
        overflow: hidden;
        transition: background-color 0s ease;
        border-radius: 1.5rem 1.5rem 0 0;
    }

    .costume-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .costume-card-body {
        background-color: transparent;
        color: var(--brand-blue) !important;
        transition: background-color 0s ease, color 0s ease;
    }

    .costume-card-body .fw-bold,
    .costume-card-body .text-secondary,
    .costume-card-body .kostum-brand {
        color: #141414 !important;
    }

    [data-bs-theme="dark"] .costume-card-body .fw-bold,
    [data-bs-theme="dark"] .costume-card-body .text-secondary,
    [data-bs-theme="dark"] .costume-card-body .kostum-brand {
        color: #ffffff !important;
    }

    .costume-card-body .text-secondary {
        color: #141414 !important;
        transition: color 0s ease;
    }

    [data-bs-theme="dark"] .costume-card-body .text-secondary {
        color: #ffffff !important;
    }

    /* Dark-theme costume modal rules (avoid overriding light mode) */
    [data-bs-theme="dark"] .costume-modal .modal-content {
        --bs-body-color: var(--catalog-modal-text);
        --bs-emphasis-color: var(--catalog-modal-text);
        --bs-secondary-color: var(--catalog-modal-muted);
        --bs-body-bg: var(--catalog-modal-bg);
        --bs-border-color: var(--catalog-modal-border);
        background: var(--catalog-modal-bg) !important;
        color: var(--catalog-modal-text) !important;
        border: 1px solid var(--catalog-modal-border);
    }

    [data-bs-theme="dark"] .costume-modal .modal-header {
        background: var(--catalog-modal-header-bg) !important;
        color: var(--catalog-modal-text) !important;
        border-bottom: 1px solid var(--catalog-modal-border);
    }

    [data-bs-theme="dark"] .costume-modal .modal-title {
        color: var(--brand-blue) !important;
    }

    [data-bs-theme="dark"] .costume-modal .modal-body {
        color: var(--catalog-modal-text) !important;
    }

    [data-bs-theme="dark"] .costume-modal .modal-body * {
        color: var(--catalog-modal-text) !important;
    }

    [data-bs-theme="dark"] .costume-modal .modal-body .text-muted,
    [data-bs-theme="dark"] .costume-modal .modal-body .text-secondary,
    [data-bs-theme="dark"] .costume-modal .modal-body .text-body-secondary {
        color: var(--catalog-modal-muted) !important;
    }

    [data-bs-theme="dark"] .costume-modal .modal-footer {
        background: var(--catalog-modal-bg) !important;
        color: var(--catalog-modal-text) !important;
        border-top: 1px solid var(--catalog-modal-border);
    }
    
    /* Extra overrides: force opaque modal surface & correct text in light mode */
    [data-bs-theme="light"] .costume-modal.show .modal-content,
    [data-bs-theme="light"] .costume-modal .modal-content {
        background-color: var(--catalog-modal-bg) !important;
        background-image: none !important;
        background: var(--catalog-modal-bg) !important;
        color: var(--catalog-modal-text) !important;
        opacity: 1 !important;
        background-clip: padding-box !important;
    }

    [data-bs-theme="light"] .costume-modal .modal-content::before,
    [data-bs-theme="light"] .costume-modal .modal-content::after {
        background: none !important;
    }

    /* Detail modal rows text, matched to the light modal background */
    .costume-modal .modal-body .row.g-3,
    .costume-modal .modal-body .row.g-3 * {
        color: #141414 !important;
    }

    [data-bs-theme="dark"] .costume-modal .modal-body .row.g-3,
    [data-bs-theme="dark"] .costume-modal .modal-body .row.g-3 * {
        color: #ffffff !important;
    }

    [data-bs-theme="light"] .costume-modal .text-secondary,
    [data-bs-theme="light"] .costume-modal .text-muted,
    [data-bs-theme="light"] .costume-modal .text-body-secondary {
        color: var(--catalog-modal-muted) !important;
    }

    /* Keep the costume detail modal consistent with the order detail modal. */
    .costume-modal .modal-content,
    .costume-modal .modal-body,
    .costume-modal .modal-footer {
        background-color: #ffffff !important;
        color: #141414 !important;
    }

    .costume-modal .modal-header {
        background-color: #0d6efd !important;
        color: #ffffff !important;
        border-bottom-color: rgba(13, 110, 253, 0.35) !important;
    }

    .costume-modal .modal-title,
    .costume-modal .modal-header .btn-close {
        color: #ffffff !important;
        -webkit-text-fill-color: #ffffff !important;
    }

    .costume-modal .modal-body .row.g-3,
    .costume-modal .modal-body .row.g-3 .col-7 {
        color: #141414 !important;
    }

    [data-bs-theme="dark"] .costume-modal .modal-content,
    [data-bs-theme="dark"] .costume-modal .modal-body,
    [data-bs-theme="dark"] .costume-modal .modal-footer {
        background-color: #0f172af5 !important;
        color: #ffffff !important;
    }

    [data-bs-theme="dark"] .costume-modal .modal-header {
        background-color: #0d6efd !important;
        color: #ffffff !important;
    }

    [data-bs-theme="dark"] .costume-modal .modal-body .row.g-3,
    [data-bs-theme="dark"] .costume-modal .modal-body .row.g-3 .col-7 {
        color: #ffffff !important;
    }

    .costume-modal .modal-content {
        border: 0 !important;
        border-radius: 0.75rem;
        overflow: hidden;
        box-shadow: 0 1rem 3rem rgba(15, 23, 42, 0.2);
    }

    .costume-modal .modal-header {
        padding: 1rem 1.25rem;
    }

    .costume-modal .modal-body {
        padding: 1.25rem;
    }

    .costume-modal .modal-body .col-md-5 img {
        width: 100%;
        max-height: 28rem;
        object-fit: cover;
        background: #f1f5f9;
        box-shadow: 0 0.25rem 0.75rem rgba(15, 23, 42, 0.12);
    }

    .costume-modal .modal-body .col-md-7 > .row.mb-2 {
        margin-right: 0;
        margin-left: 0;
        padding: 0.55rem 0;
        border-bottom: 1px solid rgba(148, 163, 184, 0.2);
    }

    .costume-modal .modal-body .col-md-7 > .row.mb-2:last-child {
        border-bottom: 0;
    }

    .costume-modal .modal-body .col-md-7 > .row.mb-2 .col-5 {
        color: #64748b !important;
        font-weight: 600;
    }

    .costume-modal .modal-body .col-md-7 > .row.mb-2 .col-7 {
        color: #141414 !important;
    }

    .costume-modal .modal-footer {
        gap: 0.5rem;
        padding: 0.875rem 1.25rem;
        border-top: 1px solid rgba(148, 163, 184, 0.2) !important;
    }

    [data-bs-theme="dark"] .costume-modal .modal-content {
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.35);
    }

    [data-bs-theme="dark"] .costume-modal .modal-body .col-md-5 img {
        background: #1e293b;
    }

    .costume-gallery {
        width: 100%;
    }

    .costume-gallery-stage {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        aspect-ratio: 1 / 1;
        overflow: hidden;
        border-radius: 1.25rem;
        background: #f1f5f9;
    }

    .costume-gallery-main {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .costume-gallery-control {
        position: absolute;
        top: 50%;
        z-index: 2;
        width: 2.25rem;
        height: 2.25rem;
        padding: 0;
        border: 0;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transform: translateY(-50%);
        background: rgba(15, 23, 42, 0.78);
        color: #ffffff;
        box-shadow: 0 0.25rem 0.75rem rgba(15, 23, 42, 0.25);
    }

    .costume-gallery-control:hover,
    .costume-gallery-control:focus-visible {
        background: #2563eb;
        color: #ffffff;
    }

    .costume-gallery-prev { left: 0.75rem; }
    .costume-gallery-next { right: 0.75rem; }

    .costume-gallery-thumbs {
        display: flex;
        gap: 0.5rem;
        margin-top: 0.65rem;
        overflow-x: auto;
        padding: 0.1rem 0.1rem 0.25rem;
    }

    .costume-gallery-thumb {
        flex: 0 0 4.25rem;
        width: 4.25rem;
        height: 4.25rem;
        padding: 0;
        border: 2px solid transparent;
        border-radius: 0.65rem;
        overflow: hidden;
        background: #e2e8f0;
        opacity: 0.72;
    }

    .costume-gallery-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .costume-gallery-thumb:hover,
    .costume-gallery-thumb.is-active {
        border-color: #2563eb;
        opacity: 1;
    }

    [data-bs-theme="dark"] .costume-gallery-stage {
        background: #1e293b;
    }

    [data-bs-theme="dark"] .costume-gallery-thumb {
        background: #334155;
    }

    @media (max-width: 767.98px) {
        .costume-gallery-stage {
            max-width: 22rem;
            margin: 0 auto;
        }

        .costume-gallery-thumb {
            flex-basis: 3.75rem;
            width: 3.75rem;
            height: 3.75rem;
        }
    }

    [data-bs-theme="dark"] .costume-modal .modal-body .col-md-7 > .row.mb-2 {
        border-bottom-color: rgba(148, 163, 184, 0.2);
    }

    [data-bs-theme="dark"] .costume-modal .modal-body .col-md-7 > .row.mb-2 .col-5 {
        color: #cbd5e1 !important;
    }

    [data-bs-theme="dark"] .costume-modal .modal-body .col-md-7 > .row.mb-2 .col-7 {
        color: #ffffff !important;
    }

    /* Final contrast rules: light modal body must never use light text. */
    [data-bs-theme="light"] .costume-modal .modal-body,
    [data-bs-theme="light"] .costume-modal .modal-body * {
        color: #141414 !important;
    }

    [data-bs-theme="light"] .costume-modal .modal-body .text-muted,
    [data-bs-theme="light"] .costume-modal .modal-body .col-5 {
        color: #64748b !important;
    }

    [data-bs-theme="light"] .costume-modal .modal-body .col-7 {
        color: #141414 !important;
    }

    [data-bs-theme="light"] .costume-modal .modal-header,
    [data-bs-theme="light"] .costume-modal .modal-header *,
    [data-bs-theme="light"] .costume-modal .modal-footer .btn {
        color: #ffffff !important;
        -webkit-text-fill-color: #ffffff !important;
    }

    [data-bs-theme="light"] .costume-modal .modal-header {
        background-color: #0d6efd !important;
        border-bottom-color: #0d6efd !important;
    }

    [data-bs-theme="dark"] .costume-modal .modal-header {
        background-color: #0d6efd !important;
        border-bottom-color: #0d6efd !important;
    }

    [data-bs-theme="light"] .costume-modal .modal-header .modal-title,
    [data-bs-theme="dark"] .costume-modal .modal-header .modal-title {
        color: #ffffff !important;
        -webkit-text-fill-color: #ffffff !important;
    }
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="py-4">
        <div class="container">
            <?php
                $catalogTitle = $catalog ? 'Katalog Kostum ' . $catalog->name : 'Katalog tidak ditemukan';
                $catalogDescription = $catalog && $catalog->description ? trim($catalog->description) : '';
                $showDescription = $catalog && $catalogDescription !== '' && strcasecmp($catalogDescription, $catalogTitle) !== 0;
            ?>
            <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center justify-content-between gap-2 mb-3">
                <div>
                    <h2 class="fw-bold mb-0 catalog-title-main"><?php echo e($catalogTitle); ?></h2>
                </div>
                <div class="d-grid d-sm-block w-100" style="max-width: 220px;">
                    <a href="<?php echo e(route('home')); ?>#kategori" class="btn btn-outline-primary w-100"><i class="bi bi-arrow-left"></i> Kembali</a>
                </div>
            </div>
            <div id="adminFormAlert" class="card admin-form-alert border-danger d-none mb-4" role="alert">
                <div class="card-body d-flex align-items-start gap-3">
                    <i class="bi bi-exclamation-triangle-fill text-danger fs-4" aria-hidden="true"></i>
                    <div>
                        <h5 class="mb-1">Akses formulir terbatas</h5>
                        <p class="mb-0">Admin tidak bisa mengakses formulir, login sebagai user untuk mengakses formulir.</p>
                    </div>
                    <button type="button" class="btn-close ms-auto" id="closeAdminFormAlert" aria-label="Tutup"></button>
                </div>
            </div>
            <?php if(!$catalog): ?>
                <div class="alert alert-warning rounded-3">Katalog tidak ditemukan. <a href="<?php echo e(route('home')); ?>#kategori" class="alert-link">Kembali ke beranda</a>.</div>
            <?php else: ?>


                <!-- Pencarian & Filter (tanpa pencarian kategori) -->
                <div class="card shadow-sm mb-4 search-card">
                    <div class="card-body">
                        <form method="GET" action="<?php echo e(route('katalog.kostum')); ?>" class="row g-3 align-items-end">
                            <input type="hidden" name="cat" value="<?php echo e(request('cat')); ?>">
                            <div class="col-md-5">
                                <label class="form-label">Pencarian</label>
                                <input type="text" name="search" class="form-control" placeholder="Cari nama atau brand..." value="<?php echo e($search ?? ''); ?>">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-select">
                                    <option value="">Semua</option>
                                    <option value="Pria" <?php echo e(($filter_jenis_kelamin ?? '') === 'Pria' ? 'selected' : ''); ?>>Pria</option>
                                    <option value="Wanita" <?php echo e(($filter_jenis_kelamin ?? '') === 'Wanita' ? 'selected' : ''); ?>>Wanita</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Ukuran</label>
                                <select name="ukuran" class="form-select">
                                    <option value="">Semua</option>
                                    <?php $__currentLoopData = $ukuran; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $uk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($uk); ?>" <?php echo e(($filter_ukuran ?? '') === $uk ? 'selected' : ''); ?>><?php echo e($uk); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Urutkan</label>
                                <select name="sort" class="form-select">
                                    <option value="id_desc" <?php echo e(($sort ?? '') === 'id_desc' ? 'selected' : ''); ?>>Terbaru</option>
                                    <option value="id_asc" <?php echo e(($sort ?? '') === 'id_asc' ? 'selected' : ''); ?>>Terlama</option>
                                    <option value="nama_asc" <?php echo e(($sort ?? '') === 'nama_asc' ? 'selected' : ''); ?>>Nama A - Z</option>
                                    <option value="nama_desc" <?php echo e(($sort ?? '') === 'nama_desc' ? 'selected' : ''); ?>>Nama Z - A</option>
                                    <option value="harga_asc" <?php echo e(($sort ?? '') === 'harga_asc' ? 'selected' : ''); ?>>Harga Termurah</option>
                                    <option value="harga_desc" <?php echo e(($sort ?? '') === 'harga_desc' ? 'selected' : ''); ?>>Harga Termahal</option>
                                    <option value="rating_asc" <?php echo e(($sort ?? '') === 'rating_asc' ? 'selected' : ''); ?>>Rating Terendah</option>
                                    <option value="rating_desc" <?php echo e(($sort ?? '') === 'rating_desc' ? 'selected' : ''); ?>>Rating Tertinggi</option>
                                </select>
                            </div>
                            <div class="col-md-1 d-grid">
                                <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i> Cari</button>
                            </div>
                        </form>
                        <?php if($search || $filter_jenis_kelamin || $filter_ukuran || ($sort && $sort !== 'id_desc')): ?>
                            <div class="mt-2">
                                <a href="<?php echo e(route('katalog.kostum', ['cat' => request('cat')])); ?>" class="btn btn-sm btn-secondary">
                                    <i class="bi bi-x-circle"></i> Reset Pencarian
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <?php if($kostum->isEmpty()): ?>
                    <?php if($search || $filter_jenis_kelamin || $filter_ukuran || ($sort && $sort !== 'id_desc')): ?>
                        <div class="alert alert-warning rounded-3 text-center">
                            <i class="bi bi-search"></i> Pencarian tidak ditemukan. Coba ubah kata kunci atau reset.
                        </div>
                    <?php else: ?>
                        <div class="alert alert-info rounded-3 text-center">
                            <i class="bi bi-info-circle"></i> Belum ada data kostum untuk katalog ini.
                        </div>
                    <?php endif; ?>
                <?php else: ?>
                    <div class="row g-3 row-cols-2 row-cols-md-4 row-cols-lg-5">
                        <?php
                            $isAdmin = session('admin_logged_in') || (auth()->check() && ((isset(auth()->user()->is_admin) && auth()->user()->is_admin) || (isset(auth()->user()->role) && auth()->user()->role === 'admin')));
                        ?>
                        <?php $__currentLoopData = $kostum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $galleryImages = [];
                            $cardImageSrc = '';
                            foreach (range(1, 5) as $imageSlot) {
                                $imageValue = $k->{'gambar' . $imageSlot} ?? null;
                                if (!$imageValue) {
                                    continue;
                                }

                                if (str_starts_with($imageValue, 'http')) {
                                    $imageSrc = $imageValue;
                                } elseif (str_starts_with($imageValue, 'storage/')) {
                                    $imageSrc = asset($imageValue);
                                } elseif (str_starts_with($imageValue, 'public/')) {
                                    $imageSrc = asset(str_replace('public/', 'storage/', $imageValue));
                                } else {
                                    $imageSrc = asset('storage/' . ltrim($imageValue, '/'));
                                }

                                if ($imageSlot === 1) {
                                    $cardImageSrc = $imageSrc;
                                }

                                $galleryImages[] = [
                                    'src' => $imageSrc,
                                    'alt' => $k->nama_kostum . ' - Gambar ' . $imageSlot,
                                ];
                            }
                            $src = $cardImageSrc;
                        ?>
                        <div class="col">
                            <a href="#" class="card costume-card rounded-xl h-100 border-0 shadow-sm d-block text-decoration-none text-reset" data-bs-toggle="modal" data-bs-target="#detailModal<?php echo e($k->id_kostum); ?>">
                                <div class="position-relative overflow-hidden costume-thumb">
                                    <?php if($src): ?>
                                        <img src="<?php echo e($src); ?>" alt="<?php echo e($k->nama_kostum); ?>">
                                    <?php else: ?>
                                        <img src="<?php echo e(asset('assets/img/no-image.png')); ?>" alt="Tidak ada gambar">
                                    <?php endif; ?>
                                </div>
                                <div class="card-body py-2 px-3 costume-card-body">
                                    <div class="text-center">
                                        <div class="fw-bold" style="font-size:1.0rem;"><?php echo e($k->nama_kostum); ?></div>
                                        <?php if(!empty($k->judul)): ?>
                                            <div class="text-secondary" style="font-size:0.75rem;"><?php echo e($k->judul); ?></div>
                                        <?php endif; ?>
                                    </div>
                                    <?php
                                        $sizes = array_filter(array_map('trim', preg_split('/[,&]/', (string)$k->ukuran_kostum)));
                                        $order = ['XS'=>1,'S'=>2,'M'=>3,'L'=>4,'XL'=>5,'XXL'=>6,'XXXL'=>7];
                                        usort($sizes, function($a,$b) use ($order){
                                            $aKey = strtoupper($a); $bKey = strtoupper($b);
                                            $aR = $order[$aKey] ?? 999; $bR = $order[$bKey] ?? 999;
                                            return $aR === $bR ? strcasecmp($aKey,$bKey) : ($aR <=> $bR);
                                        });
                                    ?>
                                    <div class="d-flex align-items-center mt-1 gap-2 flex-wrap" style="color: inherit;">
                                        <div class="d-flex gap-1 flex-wrap">
                                            <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($size !== ''): ?>
                                                    <span class="badge" style="background:#374151;color:#fff;font-size:0.65rem;padding:4px 8px;border-radius:6px;"><?php echo e($size); ?></span>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                        <?php if(!empty($k->jenis_kelamin)): ?>
                                            <?php
                                                $jk = strtolower($k->jenis_kelamin);
                                                $jkIcon = $jk === 'pria' ? 'bi-gender-male' : ($jk === 'wanita' ? 'bi-gender-female' : 'bi-gender-ambiguous');
                                            ?>
                                            <span class="jenis-kelamin jk-<?php echo e($jk); ?>" style="font-size:0.75rem;white-space:nowrap;"><i class="bi <?php echo e($jkIcon); ?>"></i> <?php echo e($k->jenis_kelamin); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <p class="mb-2 mt-2 kostum-price" style="font-size:0.8rem;">
                                        <strong class="kostum-price">Rp <?php echo e(number_format((float)$k->harga_sewa, 0, ',', '.')); ?></strong> / <span class="kostum-price"><?php echo e($k->durasi_penyewaan); ?></span>
                                    </p>
                                    <?php
                                        $averageRating = (float) ($k->average_rating ?? 0);
                                        $ratingCount = (int) ($k->rating_count ?? 0);
                                    ?>
                                    <div class="kostum-rating d-flex align-items-center mb-1" aria-label="Rating <?php echo e(number_format($averageRating, 1)); ?> dari 5 dari <?php echo e($ratingCount); ?> ulasan">
                                        <span aria-hidden="true">
                                            <?php for($star = 1; $star <= 5; $star++): ?>
                                                <?php if($averageRating >= $star): ?>
                                                    <i class="bi bi-star-fill"></i>
                                                <?php elseif($averageRating >= ($star - 0.5)): ?>
                                                    <i class="bi bi-star-half"></i>
                                                <?php else: ?>
                                                    <i class="bi bi-star"></i>
                                                <?php endif; ?>
                                            <?php endfor; ?>
                                        </span>
                                        <span class="kostum-rating-count"><?php echo e($ratingCount ? number_format($averageRating, 1) . ' (' . $ratingCount . ')' : 'Belum ada rating'); ?></span>
                                    </div>
                                    <p class="mb-1 kostum-brand" style="font-size:0.75rem; font-weight: 600;"><i class="bi bi-tag"></i> <?php echo e($k->brand ?: '-'); ?></p>
                                    <?php if($k->is_maintenance): ?>
                                        <span class="badge kostum-availability-maintenance mt-1"><i class="bi bi-tools"></i> Maintenance</span>
                                    <?php elseif($k->is_currently_rented ?? false): ?>
                                        <span class="badge kostum-availability-rented mt-1"><i class="bi bi-clock-history"></i> Sedang Disewa</span>
                                    <?php else: ?>
                                        <span class="badge bg-success mt-1"><i class="bi bi-check-circle"></i> Tersedia untuk disewa</span>
                                    <?php endif; ?>
                                </div>
                            </a>
                        </div>

                        <div class="modal fade costume-modal" id="detailModal<?php echo e($k->id_kostum); ?>" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Detail Kostum</h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row g-3">
                                            <div class="col-md-5 text-center">
                                                <?php if($galleryImages): ?>
                                                    <div class="costume-gallery" data-gallery>
                                                        <div class="costume-gallery-stage">
                                                            <button type="button" class="costume-gallery-control costume-gallery-prev" data-gallery-prev aria-label="Gambar sebelumnya">
                                                                <i class="bi bi-chevron-left"></i>
                                                            </button>
                                                            <img src="<?php echo e($galleryImages[0]['src']); ?>" alt="<?php echo e($galleryImages[0]['alt']); ?>" class="costume-gallery-main" data-gallery-main>
                                                            <button type="button" class="costume-gallery-control costume-gallery-next" data-gallery-next aria-label="Gambar berikutnya">
                                                                <i class="bi bi-chevron-right"></i>
                                                            </button>
                                                        </div>
                                                        <div class="costume-gallery-thumbs" role="tablist" aria-label="Pilihan gambar kostum">
                                                            <?php $__currentLoopData = $galleryImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imageIndex => $galleryImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <button type="button" class="costume-gallery-thumb <?php echo e($imageIndex === 0 ? 'is-active' : ''); ?>" data-gallery-thumb data-gallery-index="<?php echo e($imageIndex); ?>" aria-label="Tampilkan gambar <?php echo e($imageIndex + 1); ?>">
                                                                    <img src="<?php echo e($galleryImage['src']); ?>" alt="<?php echo e($galleryImage['alt']); ?>">
                                                                </button>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </div>
                                                    </div>
                                                <?php else: ?>
                                                    <img src="<?php echo e(asset('assets/img/no-image.png')); ?>" alt="Tidak ada gambar" class="img-fluid rounded" style="aspect-ratio:1/1;object-fit:cover;">
                                                <?php endif; ?>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="row mb-2"><div class="col-5 text-muted">Nama Kostum</div><div class="col-7">: <?php echo e($k->nama_kostum); ?></div></div>
                                                <div class="row mb-2"><div class="col-5 text-muted">Judul</div><div class="col-7">: <?php echo e($k->judul ?: '-'); ?></div></div>
                                                <div class="row mb-2"><div class="col-5 text-muted">Kategori</div><div class="col-7">: <?php echo e($k->kategori); ?></div></div>
                                                <?php if(!empty($k->jenis_kelamin)): ?>
                                                    <div class="row mb-2"><div class="col-5 text-muted">Jenis Kelamin</div><div class="col-7">: <?php echo e($k->jenis_kelamin); ?></div></div>
                                                <?php endif; ?>
                                                <?php if(!empty($k->brand)): ?>
                                                    <div class="row mb-2"><div class="col-5 text-muted">Brand</div><div class="col-7">: <?php echo e($k->brand); ?></div></div>
                                                <?php endif; ?>
                                                <div class="row mb-2"><div class="col-5 text-muted">Harga Sewa</div><div class="col-7">: Rp <?php echo e(number_format((float)$k->harga_sewa, 0, ',', '.')); ?></div></div>
                                                <div class="row mb-2"><div class="col-5 text-muted">Durasi Penyewaan</div><div class="col-7">: <?php echo e($k->durasi_penyewaan); ?></div></div>
                                                <div class="row mb-2"><div class="col-5 text-muted">Ukuran</div><div class="col-7">: <?php echo e($k->ukuran_kostum); ?></div></div>
                                                <div class="row mb-2"><div class="col-5 text-muted">Include</div><div class="col-7">: <?php echo nl2br(e($k->include)); ?></div></div>
                                                <div class="row mb-2"><div class="col-5 text-muted">Exclude</div><div class="col-7">: <?php echo nl2br(e($k->exclude)); ?></div></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="<?php echo e(route('tanggal.pemesanan')); ?>" class="btn btn-outline-primary">
                                            <i class="bi bi-calendar3"></i> Lihat Tanggal
                                        </a>
                                        <a href="<?php echo e(route('lihat-ulasan', ['id_kostum' => $k->id_kostum])); ?>" class="btn btn-outline-warning">
                                            <i class="bi bi-star"></i> Lihat Ulasan
                                        </a>
                                        <?php if($k->is_maintenance): ?>
                                            <button type="button" class="btn btn-secondary" disabled>
                                                <i class="bi bi-tools"></i> Sedang Maintenance
                                            </button>
                                        <?php elseif(session('user_logged_in') || auth()->check()): ?>
                                            <?php if($isAdmin): ?>
                                                <button type="button" class="btn btn-success btn-admin-block">
                                                    <i class="bi bi-clipboard-check"></i> Isi Formulir Penyewaan
                                                </button>
                                            <?php else: ?>
                                                <a href="<?php echo e(route('formulir.penyewaan', ['id_kostum' => $k->id_kostum])); ?>" class="btn btn-success">
                                                    <i class="bi bi-clipboard-check"></i> Isi Formulir Penyewaan
                                                </a>
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <button type="button" class="btn btn-success btn-guest-isi" data-login-url="<?php echo e(route('login')); ?>" data-bs-toggle="modal" data-bs-target="#guestLoginModal">
                                                <i class="bi bi-clipboard-check"></i> Isi Formulir Penyewaan
                                            </button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </section>
    <!-- Modal: Guest must login -->
    <div class="modal fade" id="guestLoginModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="background-color: var(--catalog-modal-bg) !important; background-image: none !important; background: var(--catalog-modal-bg) !important; color: var(--catalog-modal-text) !important; opacity: 1 !important; border: 1px solid var(--catalog-modal-border) !important;">
                <div class="modal-header" style="background: var(--catalog-modal-header-bg) !important; color: var(--catalog-modal-text) !important; border-bottom: 1px solid var(--catalog-modal-border) !important;">
                    <h5 class="modal-title" style="color: var(--catalog-modal-text) !important;">Perlu Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="color: var(--catalog-modal-text) !important;">
                    Anda harus login untuk mengisi formulir penyewaan. Masuk sekarang atau daftar jika belum punya akun.
                </div>
                <div class="modal-footer" style="background: var(--catalog-modal-bg) !important; color: var(--catalog-modal-text) !important; border-top: 1px solid var(--catalog-modal-border) !important;">
                    <a href="<?php echo e(route('login')); ?>" id="guestLoginModalLoginBtn" class="btn btn-primary">Masuk</a>
                    <a href="<?php echo e(route('register')); ?>" class="btn btn-primary">Daftar</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var guestModal = document.getElementById('guestLoginModal');
            if (guestModal) {
                guestModal.addEventListener('show.bs.modal', function (event) {
                    var button = event.relatedTarget;
                    var loginUrl = button ? button.getAttribute('data-login-url') || '<?php echo e(route('login')); ?>' : '<?php echo e(route('login')); ?>';
                    var loginBtn = document.getElementById('guestLoginModalLoginBtn');
                    if (loginBtn) loginBtn.setAttribute('href', loginUrl);
                });
            }
            
            var adminFormAlert = document.getElementById('adminFormAlert');
            var closeAdminFormAlert = document.getElementById('closeAdminFormAlert');
            document.querySelectorAll('.btn-admin-block').forEach(function (button) {
                button.addEventListener('click', function () {
                    if (!adminFormAlert) return;
                    adminFormAlert.classList.remove('d-none');
                    adminFormAlert.scrollIntoView({ behavior: 'smooth', block: 'center' });
                });
            });

            if (closeAdminFormAlert && adminFormAlert) {
                closeAdminFormAlert.addEventListener('click', function () {
                    adminFormAlert.classList.add('d-none');
                });
            }

            document.querySelectorAll('[data-gallery]').forEach(function (gallery) {
                var mainImage = gallery.querySelector('[data-gallery-main]');
                var thumbnails = Array.from(gallery.querySelectorAll('[data-gallery-thumb]'));
                var previousButton = gallery.querySelector('[data-gallery-prev]');
                var nextButton = gallery.querySelector('[data-gallery-next]');
                var images = thumbnails.map(function (thumbnail) {
                    var image = thumbnail.querySelector('img');
                    return {
                        src: image ? image.src : '',
                        alt: image ? image.alt : ''
                    };
                });
                var activeIndex = 0;

                function showImage(index) {
                    if (!images.length || !mainImage) return;
                    activeIndex = (index + images.length) % images.length;
                    mainImage.src = images[activeIndex].src;
                    mainImage.alt = images[activeIndex].alt;
                    thumbnails.forEach(function (thumbnail, thumbnailIndex) {
                        thumbnail.classList.toggle('is-active', thumbnailIndex === activeIndex);
                    });
                }

                thumbnails.forEach(function (thumbnail, thumbnailIndex) {
                    thumbnail.addEventListener('click', function () {
                        showImage(thumbnailIndex);
                    });
                });

                if (previousButton) {
                    previousButton.addEventListener('click', function () {
                        showImage(activeIndex - 1);
                    });
                }

                if (nextButton) {
                    nextButton.addEventListener('click', function () {
                        showImage(activeIndex + 1);
                    });
                }

                showImage(0);
            });

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\rc3\resources\views\katalog-kostum.blade.php ENDPATH**/ ?>