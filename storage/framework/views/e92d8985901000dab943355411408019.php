<?php $__env->startSection('title', 'Data Denda & Kerusakan - Rei Cosrent'); ?>

<?php $__env->startSection('styles'); ?>
    /* Make muted nickname/text and modal detail denda text white */
    .text-muted,
    .text-muted * { color: #141414 !important; }
    [data-bs-theme="dark"] .text-muted,
    [data-bs-theme="dark"] .text-muted * { color: #cbd5e1 !important; }


    /* Admin dropdown colors */


    .form-select, select, .dropdown-menu {
        background-color: #ffffff !important;
        color: #141414 !important;
        border-color: rgba(148, 163, 184, 0.12) !important;
    }

    .form-select option, select option {
        background-color: #ffffff;
        color: #141414;
    }

    [data-bs-theme="dark"] .form-select,
    [data-bs-theme="dark"] select,
    [data-bs-theme="dark"] .dropdown-menu {
        background-color: rgba(255, 255, 255, 0.08) !important;
        color: #ffffff !important;
        border-color: rgba(148, 163, 184, 0.35) !important;
    }

    [data-bs-theme="dark"] .form-select option,
    [data-bs-theme="dark"] select option {
        background-color: #111827;
        color: #ffffff;
    }


    /* Admin search input styles */
    .input-group .form-control[type="search"], input[type="search"], .card-body .input-group input.form-control {
        background-color: #ffffff !important;
        color: #141414 !important;
        border-color: rgba(148, 163, 184, 0.12) !important;
    }

    [data-bs-theme="dark"] .input-group .form-control[type="search"],
    [data-bs-theme="dark"] input[type="search"],
    [data-bs-theme="dark"] .card-body .input-group input.form-control {
        background-color: rgba(255, 255, 255, 0.08) !important;
        color: #ffffff !important;
        border-color: rgba(148, 163, 184, 0.35) !important;
    }

    table th { background-color: var(--bs-primary); color: #fff; text-align: center; }
    .action-buttons {
        display: grid;
        grid-template-columns: minmax(120px, 1fr);
        gap: 0.25rem;
        width: 100%;
        min-width: 120px;
    }

    .action-buttons form {
        display: contents;
    }

    .action-buttons .btn {
        width: 100%;
        min-height: 28px;
        padding: 0.2rem 0.3rem;
        font-size: 0.7rem;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.35rem;
        white-space: nowrap;
    }
    .thumb { max-width:100px; max-height:80px; object-fit:cover; }
    .denda-upload-preview-wrap {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        aspect-ratio: 1 / 1;
        min-height: 0;
        margin-bottom: 0.5rem;
        border: 1px dashed rgba(148, 163, 184, 0.44);
        background: rgba(248, 250, 252, 0.9);
        overflow: hidden;
    }
    .denda-upload-preview { width: 100%; height: 100%; aspect-ratio: 1 / 1; object-fit: contain; display: block; cursor: zoom-in; }
    .denda-upload-empty { display: flex; align-items: center; justify-content: center; width: 100%; height: 100%; color: rgba(15, 23, 42, 0.7); }
    [data-bs-theme="dark"] .denda-upload-preview-wrap { background: rgba(15, 23, 42, 0.7); }
    [data-bs-theme="dark"] .denda-upload-empty { color: rgba(255, 255, 255, 0.75); }
    .page-title { color: #141414; transition: color 0s ease; }

    .bukti-thumb {
        width: 72px;
        height: 72px;
        object-fit: cover;
        border: 1px solid var(--bs-border-color);
        border-radius: 0;
        cursor: zoom-in;
        transition: transform .12s ease;
    }

    .bukti-thumb:hover { transform: scale(1.02); }

    .orders-table {
        background: var(--bs-body-bg);
        color: var(--bs-body-color);
        border: 1px solid rgba(148, 163, 184, 0.18);
        border-radius: 0;
        overflow: hidden;
    }

    .orders-table thead th {
        background: rgba(37, 99, 235, 0.08);
        color: var(--bs-body-color);
        border-bottom: 1px solid rgba(148, 163, 184, 0.22);
        font-weight: 700;
        white-space: nowrap;
    }

    .orders-table tbody td {
        background: var(--bs-body-bg);
        color: var(--bs-body-color);
        border-color: rgba(148, 163, 184, 0.14);
        vertical-align: middle;
    }

    .orders-table thead th,
    .orders-table tbody td {
        border-right: 1px solid rgba(148, 163, 184, 0.14);
    }

    .orders-table thead th:last-child,
    .orders-table tbody td:last-child {
        border-right: 0;
    }

    .orders-table tbody tr:hover td {
        background: rgba(37, 99, 235, 0.04);
    }

    [data-bs-theme="dark"] .orders-table {
        border-color: rgba(148, 163, 184, 0.24);
    }

    .modal-content .modal-header {
        background-color: #0d6efd !important;
        color: #ffffff !important;
    }

    .modal-content .modal-body,
    .modal-content .modal-footer,
    .modal-content form {
        background-color: #ffffff !important;
    }

    .modal-content .modal-body .form-control,
    .modal-content .modal-body .form-select,
    .modal-content .modal-body textarea,
    .modal-content .modal-body input,
    .modal-content .modal-body select,
    .modal-content .modal-body .form-check,
    .modal-content .modal-body .form-check-input,
    .modal-content .modal-body .form-floating > .form-control {
        background-color: #ffffff !important;
        color: var(--bs-body-color) !important;
    }
    .modal-content .modal-body .form-control:focus,
    .modal-content .modal-body textarea:focus,
    .modal-content .modal-body input:focus,
    .modal-content .modal-body .form-select:focus,
    .modal-content .modal-body .form-control[readonly],
    .modal-content .modal-body .form-control[disabled] {
        background-color: #ffffff !important;
        color: var(--bs-body-color) !important;
        border-color: rgba(148, 163, 184, 0.12) !important;
        box-shadow: none !important;
    }

    .modal-content .modal-body ::placeholder {
        color: rgba(148, 163, 184, 0.6) !important;
    }

    [data-bs-theme="dark"] .orders-table thead th {
        background: rgba(59, 130, 246, 0.16);
        border-bottom-color: rgba(148, 163, 184, 0.22);
    }

    [data-bs-theme="dark"] .orders-table tbody td {
        background: rgba(15, 23, 42, 0.96);
        border-color: rgba(148, 163, 184, 0.16);
    }

    [data-bs-theme="dark"] .orders-table thead th,
    [data-bs-theme="dark"] .orders-table tbody td {
        border-right-color: rgba(148, 163, 184, 0.16);
    }

    [data-bs-theme="dark"] .orders-table tbody tr:hover td {
        background: rgba(59, 130, 246, 0.14);
    }[data-bs-theme="dark"] .page-title{ color: #a855f7; }
    [data-bs-theme="light"] .page-title { color: #141414; }

    #dendaBuktiFotoPreviewModal .modal-dialog {
        max-width: min(92vw, 760px);
    }

    #dendaBuktiFotoPreviewModal {
        z-index: 1070;
    }

    #dendaBuktiFotoPreviewModal + .modal-backdrop,
    .modal-backdrop.denda-preview-backdrop {
        z-index: 1065;
    }

    #dendaBuktiFotoPreviewModal .modal-body {
        padding: 1rem;
    }

    #dendaBuktiFotoPreviewImg {
        display: block;
        width: auto;
        max-width: 100%;
        max-height: 78vh;
        margin: 0 auto;
        object-fit: contain;
    }
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="py-4">
    <div class="container">
        <div class="admin-page-header d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2 mb-4">
            <div>
                <h2 class="fw-bold mb-0">Data Denda & Kerusakan</h2>
                <p class="text-muted mb-0 small">Kelola denda dan laporan kerusakan kostum.</p>
            </div>
            <div class="d-flex gap-2">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                    <i class="bi bi-plus-circle"></i> Tambah Denda
                </button>
                <a href="<?php echo e(route('admin.profile')); ?>" class="btn btn-outline-primary">
                    <i class="bi bi-arrow-left"></i> Kembali
                </a>
            </div>
        </div>

        <?php if(session('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert"><?php echo e(session('success')); ?><button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>
        <?php endif; ?>
        <?php if(session('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert"><?php echo e(session('error')); ?><button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>
        <?php endif; ?>

        <?php if(count($dendas) > 0): ?>
        <div class="card mb-3" style="background-color: #ffffff; border: none;">
            <div class="card-body d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-3">
                    <div class="d-flex flex-column flex-lg-row align-items-lg-center gap-2 w-100">
                        <div class="input-group" style="background-color: #14141429; border-radius: 0.75rem; border: 1px solid rgba(148,163,184,0.35);">
                            <span class="input-group-text bg-transparent border-0"><i class="bi bi-search"></i></span>
                            <input id="search-admin-denda" type="search" class="form-control border-0 bg-transparent" placeholder="Cari nama, nama kostum, jenis denda, status..." aria-label="Cari denda">
                        </div>
                        <select id="sort-admin-denda" class="form-select" style="background-color: #14141429; border: 1px solid rgba(148,163,184,0.35); color: #141414;">
                        <option value="">Urutkan data denda</option>
                        <option value="1:string:asc">Nama A–Z</option>
                        <option value="1:string:desc">Nama Z–A</option>
                        <option value="2:string:asc">Nama Kostum A–Z</option>
                        <option value="2:string:desc">Nama Kostum Z–A</option>
                        <option value="3:string:asc">Status A–Z</option>
                        <option value="3:string:desc">Status Z–A</option>
                    </select>

                    <select id="filter-admin-denda-tahun" class="form-select" style="background-color: #14141429; border: 1px solid rgba(148,163,184,0.35); color: #141414; min-width: 130px;">
                        <option value="">Semua Tahun</option>
                    </select>

                    <select id="filter-admin-denda-bulan" class="form-select" style="background-color: #14141429; border: 1px solid rgba(148,163,184,0.35); color: #141414; min-width: 130px;">
                        <option value="">Semua Bulan</option>
                    </select>
                </div>
                <div class="col-md-3 text-md-end">
                    <button id="reset-admin-denda" type="button" class="btn btn-light w-100">Reset Pencarian</button>
                </div>
            </div>
        <?php endif; ?>

            <?php
                // Build a map of registered usernames -> nama_kostum for selects/datalists
                $nameMap = [];
                if (isset($formulir) && is_iterable($formulir)) {
                    foreach ($formulir as $f) {
                        $nameMap[$f->username] = $f->nama_kostum ?? '';
                    }
                }
                $blockedDendaUsers = $blockedDendaUsers ?? [];
            ?>

            <?php if(count($dendas) > 0): ?>
            <div class="table-responsive">
                <table id="adminDendaTable" class="table table-hover align-middle orders-table">
                    <thead>
                        <tr>
                            <th style="width: 50px;">No</th>
                            <th>Username</th>
                            <th>Nama Kostum</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $dendas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr id="denda-row-<?php echo e($item->id); ?>" data-nama="<?php echo e(e($item->nama)); ?>" data-nama_kostum="<?php echo e(e($item->nama_kostum)); ?>" data-jenis_denda="<?php echo e(e($item->jenis_denda)); ?>" data-keterangan="<?php echo e(e($item->keterangan)); ?>" data-jumlah_denda="<?php echo e($item->jumlah_denda); ?>" data-date="<?php echo e($item->created_at ? $item->created_at->toDateString() : ''); ?>">
                            <td class="text-center"><?php echo e($loop->iteration); ?></td>
                            <td class="field-nama"><?php echo e($item->nama); ?></td>
                            <td class="field-nama_kostum"><?php echo e($item->nama_kostum); ?></td>
                            <?php
                                $st = strtolower($item->status ?? '');
                                $statusClassMap = [
                                    'proses' => 'bg-warning text-dark',
                                    'revisi' => 'bg-secondary',
                                    'diterima' => 'bg-info text-dark',
                                    'selesai' => 'bg-success',
                                    'dibatalkan' => 'bg-secondary',
                                    'belum lunas' => 'bg-warning text-dark',
                                    'lunas' => 'bg-success text-white',
                                ];
                                $statusIconMap = [
                                    'proses' => 'bi-clock',
                                    'revisi' => 'bi-pencil-square',
                                    'diterima' => 'bi-person-check',
                                    'selesai' => 'bi-check-circle',
                                    'dibatalkan' => 'bi-x-circle',
                                    'belum lunas' => 'bi-exclamation-circle',
                                    'lunas' => 'bi-check2',
                                ];
                                $badgeClass = $statusClassMap[$st] ?? 'bg-dark text-white';
                                $badgeIcon = $statusIconMap[$st] ?? 'bi-info-circle';
                            ?>
                            <td class="field-status text-center"><span class="badge <?php echo e($badgeClass); ?>"><i class="bi <?php echo e($badgeIcon); ?> me-1"></i> <?php echo e(ucfirst($item->status)); ?></span></td>
                            <td>
                                <div class="action-buttons" id="action-buttons-<?php echo e($item->id); ?>">
                                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#dendaDetailModal-<?php echo e($item->id); ?>" title="Detail">
                                        <i class="bi bi-eye"></i> Detail
                                    </button>
                                    <?php if($st !== 'lunas'): ?>
                                        <button class="btn btn-sm btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#editModal<?php echo e($item->id); ?>"><i class="bi bi-pencil"></i> Edit</button>
                                    <?php endif; ?>
                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo e($item->id); ?>"><i class="bi bi-trash"></i> Hapus</button>
                                </div>
                            </td>
                        </tr>


                        <!-- Detail Modal -->
                        <?php
                            $buktiFotos = collect([
                                $item->bukti_foto_1 ?? null,
                                $item->bukti_foto_2 ?? null,
                                $item->bukti_foto_3 ?? null,
                                $item->bukti_foto_4 ?? null,
                                $item->bukti_foto_5 ?? null,
                            ])->filter()->values();
                        ?>
                        <div class="modal fade" id="dendaDetailModal-<?php echo e($item->id); ?>" tabindex="-1" aria-labelledby="dendaDetailLabel-<?php echo e($item->id); ?>" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary text-white">
                                        <h5 class="modal-title" id="dendaDetailLabel-<?php echo e($item->id); ?>">
                                            <i class="bi bi-card-list"></i> Detail Denda
                                        </h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <div class="mb-2"><strong>Username:</strong><br><?php echo e($item->nama ?? '-'); ?></div>
                                                <div class="mb-2"><strong>Nama Kostum:</strong><br><?php echo e($item->nama_kostum ?? '-'); ?></div>
                                                <div class="mb-2"><strong>Status:</strong><br><?php echo e($item->status ?? '-'); ?></div>
                                                <div class="mb-2"><strong>Dibuat:</strong><br><?php echo e($item->created_at ? $item->created_at->format('d M Y H:i') : '-'); ?></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-2"><strong>Jenis Denda:</strong><br><?php echo e($item->jenis_denda ?? '-'); ?></div>
                                                <div class="mb-2"><strong>Keterangan:</strong><br><?php echo nl2br(e($item->keterangan)); ?></div>
                                                <div class="mb-2"><strong>Jumlah Denda:</strong><br>Rp<?php echo e($item->jumlah_denda ? number_format($item->jumlah_denda,0,',','.') : '-'); ?></div>
                                            </div>
                                        </div>

                                        <hr>
                                        <?php
                                            $displayBuktiPath = null;
                                            $displayExt = null;
                                            $foundBuktiPath = null;
                                            try {
                                                $files = \Illuminate\Support\Facades\Storage::disk('public')->files('denda');
                                                foreach ($files as $file) {
                                                    if (\Illuminate\Support\Str::startsWith(basename($file), 'bukti_denda_' . $item->id . '_')) {
                                                        $foundBuktiPath = $file;
                                                        break;
                                                    }
                                                }
                                            } catch (\Exception $e) {
                                                $foundBuktiPath = null;
                                            }

                                            if (!empty($item->bukti_pembayaran)) {
                                                $displayBuktiPath = asset('storage/' . $item->bukti_pembayaran);
                                                $displayExt = strtolower(pathinfo($item->bukti_pembayaran, PATHINFO_EXTENSION));
                                            } elseif ($foundBuktiPath) {
                                                $displayBuktiPath = asset('storage/' . $foundBuktiPath);
                                                $displayExt = strtolower(pathinfo($foundBuktiPath, PATHINFO_EXTENSION));
                                            }
                                        ?>
                                        <div>
                                            <strong>Bukti Pembayaran:</strong>
                                            <?php if($displayBuktiPath): ?>
                                                <div class="mt-2">
                                                    <?php if($displayExt === 'pdf'): ?>
                                                        <embed src="<?php echo e($displayBuktiPath); ?>" type="application/pdf" width="100%" height="420px" />
                                                    <?php else: ?>
                                                        <img src="<?php echo e($displayBuktiPath); ?>" alt="Bukti Pembayaran Denda" class="img-fluid rounded" style="max-height:420px; object-fit:contain; width:100%;" onerror="this.outerHTML = '<a href=\'<?php echo e($displayBuktiPath); ?>\' target=\'_blank\' class=\'btn btn-outline-secondary\'>Download / Lihat File</a>'">
                                                    <?php endif; ?>
                                                </div>
                                            <?php else: ?>
                                                <div class="text-muted mt-2">Belum ada bukti pembayaran untuk denda ini.</div>
                                            <?php endif; ?>
                                        </div>

                                        <hr>
                                        <div>
                                            <strong>Bukti Foto:</strong>
                                            <?php if($buktiFotos->isNotEmpty()): ?>
                                                <div class="row g-2 mt-1">
                                                    <?php $__currentLoopData = $buktiFotos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="col-6 col-md-4 col-lg-3">
                                                            <button type="button" class="btn p-0 border-0 bg-transparent w-100 d-block" onclick="showDendaBuktiFotoPreview('<?php echo e(asset('storage/' . $bf)); ?>')" aria-label="Lihat bukti foto">
                                                                <img src="<?php echo e(asset('storage/' . $bf)); ?>" alt="Bukti Foto" class="img-fluid rounded" style="max-height:160px; object-fit:cover; width:100%; cursor:pointer;" onerror="this.outerHTML = '<a href=\'<?php echo e(asset('storage/' . $bf)); ?>\' target=\'_blank\' class=\'btn btn-outline-secondary btn-sm\'>Lihat File</a>'">
                                                            </button>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            <?php else: ?>
                                                <div class="text-muted mt-1">Tidak tersedia</div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Edit Modal -->
                        <div class="modal fade" id="editModal<?php echo e($item->id); ?>" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary text-white">
                                        <h5 class="modal-title">Edit Denda</h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                    </div>
                                    <form method="POST" action="<?php echo e(route('admin.denda.update', $item->id)); ?>" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <div class="modal-body">
                                            <div class="row g-3">
                                                <div class="col-md-6">
                                                    <label class="form-label">Nama</label>
                                                    <div class="d-flex gap-2">
                                                        <select id="edit-nama-select-<?php echo e($item->id); ?>" class="form-select" style="max-width: 45%;" onchange="editSelectChange(<?php echo e($item->id); ?>)">
                                                            <option value="">-- Pilih dari daftar --</option>
                                                            <?php $__currentLoopData = $nameMap; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n => $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e(e($n)); ?>" <?php echo e($item->nama == $n ? 'selected' : ''); ?>><?php echo e($n); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                        <div style="flex:1">
                                                            <input id="edit-nama-input-<?php echo e($item->id); ?>" name="nama" class="form-control" list="formulir-names-<?php echo e($item->id); ?>" placeholder="Atau ketik untuk mencari nama..." value="<?php echo e(e($item->nama)); ?>" autocomplete="off" oninput="editInputChange(<?php echo e($item->id); ?>)">
                                                            <datalist id="formulir-names-<?php echo e($item->id); ?>">
                                                                <?php $__currentLoopData = $nameMap; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n => $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e(e($n)); ?>"></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </datalist>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Nama Kostum</label>
                                                    <input type="text" id="edit-nama-kostum-<?php echo e($item->id); ?>" name="nama_kostum" class="form-control" value="<?php echo e(e($item->nama_kostum)); ?>">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Jenis Denda</label>
                                                    <input type="text" name="jenis_denda" class="form-control" value="<?php echo e(e($item->jenis_denda)); ?>">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Jumlah Denda (angka)</label>
                                                    <input type="number" step="0.01" name="jumlah_denda" class="form-control" value="<?php echo e($item->jumlah_denda); ?>">
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label">Keterangan</label>
                                                    <textarea name="keterangan" class="form-control" rows="4"><?php echo e(e($item->keterangan)); ?></textarea>
                                                </div>
                                                <?php $__currentLoopData = range(1, 5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php
                                                        $fieldName = 'bukti_foto_' . $slot;
                                                        $imageValue = $item->{$fieldName} ?? null;
                                                        $previewId = 'editDendaPreview' . $item->id . '_' . $slot;
                                                        $emptyId = 'editDendaEmpty' . $item->id . '_' . $slot;
                                                        $inputId = 'editDendaImage' . $item->id . '_' . $slot;
                                                        $removeId = 'remove_' . $fieldName . '_' . $item->id;
                                                    ?>
                                                    <div class="col-md-6">
                                                        <label class="form-label">Foto Bukti <?php echo e($slot); ?> (opsional)</label>
                                                        <div class="denda-upload-preview-wrap" id="<?php echo e($previewId); ?>-wrap">
                                                            <?php if($imageValue): ?>
                                                                <img src="<?php echo e(asset('storage/' . $imageValue)); ?>" alt="Preview foto bukti <?php echo e($slot); ?>" class="denda-upload-preview" id="<?php echo e($previewId); ?>">
                                                                <div class="denda-upload-empty d-none" id="<?php echo e($emptyId); ?>">Foto Bukti <?php echo e($slot); ?></div>
                                                            <?php else: ?>
                                                                <div class="denda-upload-empty" id="<?php echo e($emptyId); ?>">Foto Bukti <?php echo e($slot); ?></div>
                                                                <img src="" alt="Preview foto bukti <?php echo e($slot); ?>" class="denda-upload-preview d-none" id="<?php echo e($previewId); ?>">
                                                            <?php endif; ?>
                                                        </div>
                                                        <label for="<?php echo e($inputId); ?>" class="btn btn-outline-secondary w-100 mb-2"><i class="bi bi-image"></i> Pilih Gambar</label>
                                                        <input type="file" name="<?php echo e($fieldName); ?>" id="<?php echo e($inputId); ?>" class="d-none js-denda-upload-input" accept="image/*" data-preview-id="<?php echo e($previewId); ?>" data-empty-id="<?php echo e($emptyId); ?>" data-remove-id="<?php echo e($removeId); ?>">
                                                        <button type="button" class="btn btn-outline-danger btn-sm js-remove-denda-image <?php echo e($imageValue ? '' : 'd-none'); ?>" data-preview-id="<?php echo e($previewId); ?>" data-empty-id="<?php echo e($emptyId); ?>" data-file-input-id="<?php echo e($inputId); ?>" data-remove-input-id="<?php echo e($removeId); ?>"><i class="bi bi-trash"></i> Hapus Gambar</button>
                                                        <input type="hidden" name="remove_<?php echo e($fieldName); ?>" id="<?php echo e($removeId); ?>" value="0">
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-warning">Simpan Perubahan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Delete Modal -->
                        <div class="modal fade" id="deleteModal<?php echo e($item->id); ?>" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary text-white">
                                        <h5 class="modal-title">Hapus Data</h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                    </div>
                                    <form method="POST" action="<?php echo e(route('admin.denda.destroy', $item->id)); ?>">
                                        <?php echo csrf_field(); ?>
                                        <div class="modal-body">
                                            <p>Anda yakin ingin menghapus data denda ini?</p>
                                            <div><strong><?php echo e($item->nama); ?></strong> - <span class="text-muted"><?php echo e($item->nama_kostum); ?></span></div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <?php else: ?>
                <div class="alert alert-info text-center"><i class="bi bi-info-circle"></i> Belum ada data denda.</div>
            <?php endif; ?>

        </div>
    </div>
</section>

    <!-- Bukti Foto Preview Modal (must be inside content section) -->
    <div class="modal fade" id="dendaBuktiFotoPreviewModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Bukti Foto</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="dendaBuktiFotoPreviewImg" src="" alt="Preview" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>

<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Tambah Data Denda / Kerusakan</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
                            <form id="addDendaForm" method="POST" action="<?php echo e(route('admin.denda.store')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Nama (pilih dari formulir)</label>
                            <?php
                                $nameMap = [];
                                if (isset($formulir) && is_iterable($formulir)) {
                                    foreach ($formulir as $f) {
                                        if (!isset($nameMap[$f->username])) {
                                            $nameMap[$f->username] = $f->nama_kostum ?? '';
                                        }
                                    }
                                }
                            ?>
                            <div class="d-flex gap-2">
                                <select id="add-nama-select" class="form-select" style="max-width: 45%;">
                                    <option value="">-- Pilih dari daftar --</option>
                                    <?php $__currentLoopData = $nameMap; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n => $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e(e($n)); ?>"><?php echo e($n); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <div style="flex:1">
                                    <input id="add-nama-input" name="nama" class="form-control" list="formulir-names" placeholder="Atau ketik untuk mencari nama..." autocomplete="off">
                                    <datalist id="formulir-names">
                                        <?php $__currentLoopData = $nameMap; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n => $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e(e($n)); ?>"></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </datalist>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Nama Kostum</label>
                            <input type="text" id="add-nama-kostum" name="nama_kostum" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Jenis Denda</label>
                            <input type="text" name="jenis_denda" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Jumlah Denda (angka)</label>
                            <input type="number" step="0.01" name="jumlah_denda" class="form-control">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Keterangan</label>
                            <textarea name="keterangan" class="form-control" rows="4"></textarea>
                        </div>
                        <?php $__currentLoopData = range(1, 5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $fieldName = 'bukti_foto_' . $slot;
                                $previewId = 'addDendaPreview' . $slot;
                                $emptyId = 'addDendaEmpty' . $slot;
                                $inputId = 'addDendaImage' . $slot;
                            ?>
                            <div class="col-6 col-lg">
                                <label class="form-label">Foto Bukti <?php echo e($slot); ?> (opsional)</label>
                                <div class="denda-upload-preview-wrap" id="<?php echo e($previewId); ?>-wrap">
                                    <div class="denda-upload-empty" id="<?php echo e($emptyId); ?>">Foto Bukti <?php echo e($slot); ?></div>
                                    <img src="" alt="Preview foto bukti <?php echo e($slot); ?>" class="denda-upload-preview d-none" id="<?php echo e($previewId); ?>">
                                </div>
                                <label for="<?php echo e($inputId); ?>" class="btn btn-outline-secondary w-100 mb-2"><i class="bi bi-image"></i> Pilih Gambar</label>
                                <input type="file" name="<?php echo e($fieldName); ?>" id="<?php echo e($inputId); ?>" class="d-none js-denda-upload-input" accept="image/*" data-preview-id="<?php echo e($previewId); ?>" data-empty-id="<?php echo e($emptyId); ?>">
                                <button type="button" class="btn btn-outline-danger btn-sm w-100 js-remove-denda-image d-none" data-preview-id="<?php echo e($previewId); ?>" data-empty-id="<?php echo e($emptyId); ?>" data-file-input-id="<?php echo e($inputId); ?>"><i class="bi bi-trash"></i> Hapus Gambar</button>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <!-- Note: status kept minimal; bukti foto opsional -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    document.addEventListener('DOMContentLoaded', function(){
        const alerts = document.querySelectorAll('.alert-dismissible');
        alerts.forEach(a => setTimeout(()=> new bootstrap.Alert(a).close(), 3000));

        document.querySelectorAll('.js-denda-upload-input').forEach(input => {
            input.addEventListener('change', function () {
                const file = this.files && this.files[0];
                const preview = document.getElementById(this.dataset.previewId);
                const emptyState = document.getElementById(this.dataset.emptyId);
                const removeInput = this.dataset.removeId ? document.getElementById(this.dataset.removeId) : null;
                const removeButton = document.querySelector('.js-remove-denda-image[data-preview-id="' + this.dataset.previewId + '"]');
                if (!preview) return;

                if (file) {
                    const reader = new FileReader();
                    reader.onload = function (event) {
                        preview.src = event.target.result;
                        preview.classList.remove('d-none');
                        if (emptyState) emptyState.style.display = 'none';
                        if (removeInput) removeInput.value = '0';
                        if (removeButton) removeButton.classList.remove('d-none');
                    };
                    reader.readAsDataURL(file);
                    return;
                }

                preview.src = '';
                preview.classList.add('d-none');
                if (emptyState) emptyState.style.display = 'flex';
                if (removeInput) removeInput.value = '1';
                if (removeButton) removeButton.classList.add('d-none');
            });
        });

        document.querySelectorAll('.js-remove-denda-image').forEach(button => {
            button.addEventListener('click', function () {
                const preview = document.getElementById(this.dataset.previewId);
                const emptyState = document.getElementById(this.dataset.emptyId);
                const fileInput = document.getElementById(this.dataset.fileInputId);
                const removeInput = this.dataset.removeInputId ? document.getElementById(this.dataset.removeInputId) : null;
                if (preview) {
                    preview.src = '';
                    preview.classList.add('d-none');
                }
                if (emptyState) emptyState.style.display = 'flex';
                if (fileInput) fileInput.value = '';
                if (removeInput) removeInput.value = '1';
                this.classList.add('d-none');
            });
        });

        document.querySelectorAll('[id^="addDendaPreview"]').forEach(preview => {
            preview.addEventListener('click', function () {
                if (!this.src || this.classList.contains('d-none')) return;
                showDendaBuktiFotoPreview(this.src);
            });
        });
    });
</script>
<script>
    function showDendaBuktiFotoPreview(src) {
        const img = document.getElementById('dendaBuktiFotoPreviewImg');
        if (!img) return;
        img.src = src;

        const modalEl = document.getElementById('dendaBuktiFotoPreviewModal');
        if (!modalEl || !window.bootstrap) return;
        const parentModal = document.getElementById('addModal');
        const isNestedPreview = parentModal && parentModal.classList.contains('show');
        modalEl.classList.toggle('denda-nested-preview', isNestedPreview);
        const modal = bootstrap.Modal.getOrCreateInstance(modalEl);
        modal.show();

        if (isNestedPreview) {
            window.setTimeout(function () {
                const backdrops = document.querySelectorAll('.modal-backdrop');
                const backdrop = backdrops[backdrops.length - 1];
                if (backdrop) backdrop.classList.add('denda-preview-backdrop');
            }, 0);
        }
    }

    document.addEventListener('DOMContentLoaded', function () {
        const modalEl = document.getElementById('dendaBuktiFotoPreviewModal');
        if (!modalEl) return;
        modalEl.addEventListener('hidden.bs.modal', function () {
            const img = document.getElementById('dendaBuktiFotoPreviewImg');
            if (img) img.src = '';
            modalEl.classList.remove('denda-nested-preview');
            document.querySelectorAll('.modal-backdrop.denda-preview-backdrop').forEach(backdrop => {
                backdrop.classList.remove('denda-preview-backdrop');
            });
        });
    });
</script>
<script>
    // Edit modal helpers
    window.adminDendaNameMap = <?php echo json_encode($nameMap ?? [], 15, 512) ?>;
    window.adminDendaBlockedUsers = <?php echo json_encode($blockedDendaUsers ?? [], 15, 512) ?>;
    function editSelectChange(id) {
        const nameMap = window.adminDendaNameMap || {};
        const sel = document.getElementById('edit-nama-select-' + id);
        const input = document.getElementById('edit-nama-input-' + id);
        const kostum = document.getElementById('edit-nama-kostum-' + id);
        if (!sel || !input) return;
        const val = sel.value || '';
        input.value = val;
        if (val && nameMap[val] !== undefined && kostum) {
            kostum.value = nameMap[val] || '';
        }
    }

    function editInputChange(id) {
        const nameMap = window.adminDendaNameMap || {};
        const input = document.getElementById('edit-nama-input-' + id);
        const kostum = document.getElementById('edit-nama-kostum-' + id);
        if (!input) return;
        const val = input.value || '';
        if (val && nameMap[val] !== undefined && kostum) {
            kostum.value = nameMap[val] || '';
        }
    }
</script>
<script>
    // Auto-fill nama_kostum in Add Modal based on selected formulir name
    (function(){
        const nameMap = window.adminDendaNameMap || {};
        const blockedUsers = window.adminDendaBlockedUsers || {};
        const input = document.getElementById('add-nama-input');
        const select = document.getElementById('add-nama-select');
        const kostumInput = document.getElementById('add-nama-kostum');
        const addForm = document.getElementById('addDendaForm');

        function normalizedName(value) {
            return String(value || '').trim().toLowerCase();
        }

        function syncCostume(value) {
            const normalized = normalizedName(value);
            if (kostumInput) {
                kostumInput.value = blockedUsers[normalized] ? '' : (nameMap[value] || '');
            }
        }

        function showBlockedMessage(value) {
            if (blockedUsers[normalizedName(value)]) {
                alert('Denda belum dapat ditambahkan karena pengembalian user masih diproses atau ditolak.');
                return true;
            }
            return false;
        }

        if (select && input) {
            select.addEventListener('change', function(){
                const val = this.value || '';
                input.value = val; // mirror into input
                syncCostume(val);
            });
        }
        if (input && kostumInput) {
            // when user selects from datalist or types exact name
            input.addEventListener('input', function(){
                const val = this.value || '';
                syncCostume(val);
            });

            // also support blur: if exact match found on blur, fill
            input.addEventListener('blur', function(){
                const val = this.value || '';
                syncCostume(val);
            });
        }

        if (addForm) {
            addForm.addEventListener('submit', function (event) {
                if (showBlockedMessage(input ? input.value : '')) {
                    event.preventDefault();
                }
            });
        }
    })();
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        function normalizeText(value) {
            return String(value || '').trim().toLowerCase();
        }

        function parseDateValue(value) {
            const text = String(value || '').trim();
            if (!text) return 0;
            const parsed = Date.parse(text);
            if (!Number.isNaN(parsed)) return parsed;
            const months = {jan:0,feb:1,mar:2,apr:3,may:4,jun:5,jul:6,aug:7,sep:8,oct:9,nov:10,dec:11};
            const parts = text.replace(/,/g, '').split(/\s+/);
            if (parts.length >= 3) {
                const day = parseInt(parts[0], 10);
                const month = months[parts[1].slice(0,3).toLowerCase()] ?? 0;
                const year = parseInt(parts[2], 10);
                if (!Number.isNaN(day) && !Number.isNaN(year)) {
                    return new Date(year, month, day).getTime();
                }
            }
            return 0;
        }

        function parseCurrencyValue(value) {
            const text = String(value || '');
            const digits = text.replace(/[^\d.-]/g, '');
            const parsed = parseFloat(digits);
            return Number.isNaN(parsed) ? 0 : parsed;
        }

        function compareValues(a, b, type, direction) {
            let result = 0;
            if (type === 'date') {
                result = parseDateValue(a) - parseDateValue(b);
            } else if (type === 'currency' || type === 'numeric') {
                result = parseCurrencyValue(a) - parseCurrencyValue(b);
            } else {
                result = normalizeText(a).localeCompare(normalizeText(b), undefined, { numeric: true, sensitivity: 'base' });
            }
            return direction === 'desc' ? -result : result;
        }

        function initAdminTableSearchSort(tableId, searchId, sortId, resetId) {
            const table = document.getElementById(tableId);
            const searchInput = document.getElementById(searchId);
            const sortSelect = document.getElementById(sortId);
            const resetButton = resetId ? document.getElementById(resetId) : null;
            if (!table || !searchInput || !sortSelect) return;

            const tbody = table.tBodies[0];
            if (!tbody) return;
            const rows = Array.from(tbody.rows);

            function updateRows() {
                const query = normalizeText(searchInput.value);
                const [colIndex, type, direction] = sortSelect.value.split(':');
                let filtered = rows.filter(row => normalizeText(row.textContent).includes(query));
                if (colIndex !== undefined && colIndex !== '' && type && direction) {
                    const index = parseInt(colIndex, 10);
                    filtered.sort((a, b) => compareValues(
                        a.cells[index]?.textContent || '',
                        b.cells[index]?.textContent || '',
                        type,
                        direction
                    ));
                }
                tbody.innerHTML = '';
                filtered.forEach(row => tbody.appendChild(row));
            }

            searchInput.addEventListener('input', updateRows);
            sortSelect.addEventListener('change', updateRows);
            if (resetButton) {
                resetButton.addEventListener('click', () => {
                    searchInput.value = '';
                    sortSelect.value = '';
                    updateRows();
                });
            }
            updateRows();
        }

        // Apply Tahun/Bulan filter + Search/Sort
        const yearSelect = document.getElementById('filter-admin-denda-tahun');
        const monthSelect = document.getElementById('filter-admin-denda-bulan');
        const table = document.getElementById('adminDendaTable');
        const searchInput = document.getElementById('search-admin-denda');
        const sortSelect = document.getElementById('sort-admin-denda');
        const resetButton = document.getElementById('reset-admin-denda');

        if (table && searchInput && sortSelect && resetButton && yearSelect && monthSelect) {
            const tbody = table.tBodies[0];
            const originalRows = tbody ? Array.from(tbody.rows) : [];

            const years = new Set();
            const months = new Set();
            originalRows.forEach(tr => {
                const d = tr.getAttribute('data-date') || '';
                const parts = d ? d.split('-') : [];
                if (parts.length >= 2) {
                    if (parts[0]) years.add(parts[0]);
                    if (parts[1]) months.add(parts[1]);
                }
            });

            const sortedYears = Array.from(years).sort((a,b)=>parseInt(a,10)-parseInt(b,10));
            yearSelect.innerHTML = '<option value="">Semua Tahun</option>';
            sortedYears.forEach(y => yearSelect.insertAdjacentHTML('beforeend', `<option value="${y}">${y}</option>`));

            const monthOrder = ['01','02','03','04','05','06','07','08','09','10','11','12'];
            const bulanName = { '01':'Januari','02':'Februari','03':'Maret','04':'April','05':'Mei','06':'Juni','07':'Juli','08':'Agustus','09':'September','10':'Oktober','11':'November','12':'Desember' };
            monthSelect.innerHTML = '<option value="">Semua Bulan</option>';
            monthOrder.forEach(m => {
                if (months.has(m)) monthSelect.insertAdjacentHTML('beforeend', `<option value="${m}">${bulanName[m]}</option>`);
            });

            function updateRows() {
                const query = normalizeText(searchInput.value);
                const yearVal = yearSelect.value;
                const monthVal = monthSelect.value;

                let filtered = originalRows.filter(row => {
                    const d = row.getAttribute('data-date') || '';
                    const parts = d ? d.split('-') : [];
                    const y = parts.length >= 1 ? parts[0] : '';
                    const m = parts.length >= 2 ? parts[1] : '';
                    const okYear = (!yearVal) || (y === yearVal);
                    const okMonth = (!monthVal) || (m === monthVal);
                    return okYear && okMonth;
                }).filter(row => normalizeText(row.textContent).includes(query));

                const sortParts = (sortSelect.value || '').split(':');
                const colIndex = sortParts[0];
                const type = sortParts[1];
                const direction = sortParts[2];
                if (colIndex !== undefined && colIndex !== '' && type && direction) {
                    const index = parseInt(colIndex, 10);
                    filtered.sort((a, b) => compareValues(
                        a.cells[index]?.textContent || '',
                        b.cells[index]?.textContent || '',
                        type,
                        direction
                    ));
                }

                tbody.innerHTML = '';
                filtered.forEach(r => tbody.appendChild(r));
            }

            searchInput.addEventListener('input', updateRows);
            sortSelect.addEventListener('change', updateRows);
            yearSelect.addEventListener('change', updateRows);
            monthSelect.addEventListener('change', updateRows);

            resetButton.addEventListener('click', () => {
                searchInput.value = '';
                sortSelect.value = '';
                yearSelect.value = '';
                monthSelect.value = '';
                updateRows();
            });

            updateRows();
        }
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\rc3\resources\views\admin\data-denda.blade.php ENDPATH**/ ?>