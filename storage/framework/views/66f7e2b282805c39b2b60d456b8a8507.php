<?php $__env->startSection('title', 'Data Pengembalian - Rei Cosrent'); ?>

<?php $__env->startSection('styles'); ?>
    /* Make muted email text in pengembalian admin table + modal white */
    .text-muted { color: #141414 !important; }
    [data-bs-theme="dark"] .text-muted { color: #cbd5e1 !important; }

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


    table th {
        text-align: center;
    }
    .page-title {
        color: #141414;
        transition: color 0s ease;
    }[data-bs-theme="dark"] .page-title{
        color: #a855f7;
    }

    [data-bs-theme="light"] .page-title {
        color: #141414;
    }

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
        font-size: 0.95rem;
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
    }

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
        line-height: 1.2;
    }

    .action-buttons form:last-child .btn {
        grid-column: auto;
    }

    @media (max-width: 767.98px) {
        .orders-table th:last-child,
        .orders-table td:last-child {
            min-width: 120px;
            width: 120px;
        }

        .orders-table td:last-child .action-buttons {
            gap: 0.3rem;
            min-width: 0;
        }

        .orders-table td:last-child .action-buttons .btn {
            padding: 0.2rem 0.25rem;
            font-size: 0.68rem;
        }
    }

    .table-responsive { overflow-x: auto; }

    .thumb {
        width: 76px;
        height: 76px;
        object-fit: cover;
        border: 1px solid var(--bs-border-color);
        border-radius: 0.5rem;
        cursor: zoom-in;
    }

    .return-photo-detail-trigger {
        cursor: zoom-in;
    }

    .history-thumb {
        width: 100%;
        height: 120px;
        object-fit: cover;
        border-radius: 0;
        border: 1px solid rgba(148, 163, 184, 0.2);
    }

    .status-badge {
        display: inline-block;
        font-size: 0.75rem;
        line-height: 1.2;
        border-radius: 999px;
        padding: 0.35rem 0.7rem;
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="py-4">
    <div class="container">
        <div class="admin-page-header d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2 mb-4">
            <div>
                <h2 class="fw-bold mb-0">Data Pengembalian</h2>
                <p class="text-muted mb-0 small">Kelola verifikasi data pengembalian yang telah diisi user.</p>
            </div>
            <div class="d-grid d-sm-block">
                <a href="<?php echo e(route('admin.profile')); ?>" class="btn btn-outline-primary">
                    <i class="bi bi-arrow-left"></i> Kembali
                </a>
            </div>
        </div>

        <div class="small text-muted mb-3">
            Menunggu Verifikasi: <strong><?php echo e($pendingCount); ?></strong>
        </div>

        <?php if(session('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert"><?php echo e(session('success')); ?><button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>
        <?php endif; ?>
        <?php if(session('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert"><?php echo e(session('error')); ?><button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>
        <?php endif; ?>

        <?php if($pengembalianList->isNotEmpty()): ?>
        <div class="card mb-3" style="background-color: #ffffff; border: none;">
            <div class="card-body d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-3">
                    <div class="d-flex flex-column flex-lg-row align-items-lg-center gap-2 w-100">
                    <div class="input-group" style="background-color: #14141429; border-radius: 0.75rem; border: 1px solid rgba(148,163,184,0.35);">
                        <span class="input-group-text bg-transparent border-0"><i class="bi bi-search"></i></span>
                        <input id="search-admin-pengembalian" type="search" class="form-control border-0 bg-transparent" placeholder="Cari user, kostum, status, catatan..." aria-label="Cari pengembalian">
                    </div>
                    <select id="sort-admin-pengembalian" class="form-select" style="background-color: #14141429; border: 1px solid rgba(148,163,184,0.35); color: #141414;">
                        <option value="">Urutkan data pengembalian</option>
                        <option value="1:string:asc">Username A–Z</option>
                        <option value="1:string:desc">Username Z–A</option>
                        <option value="2:string:asc">Kostum A–Z</option>
                        <option value="2:string:desc">Kostum Z–A</option>
                        <option value="3:string:asc">Status A–Z</option>
                        <option value="3:string:desc">Status Z–A</option>
                        <option value="4:date:asc">Diajukan Terawal</option>
                        <option value="4:date:desc">Diajukan Terbaru</option>
                    </select>

                    <select id="filter-admin-pengembalian-tahun" class="form-select" style="background-color: #14141429; border: 1px solid rgba(148,163,184,0.35); color: #141414; min-width: 130px;">
                        <option value="">Semua Tahun</option>
                    </select>

                    <select id="filter-admin-pengembalian-bulan" class="form-select" style="background-color: #14141429; border: 1px solid rgba(148,163,184,0.35); color: #141414; min-width: 130px;">
                        <option value="">Semua Bulan</option>
                    </select>
                </div>
                    <div class="col-md-3 text-md-end">
                        <button id="reset-admin-pengembalian" type="button" class="btn btn-light w-100">Reset Pencarian</button>
                    </div>
                </div>
            </div>
        <?php endif; ?>
            <?php if($pengembalianList->isEmpty()): ?>
                <div class="alert alert-info text-center mb-0" role="alert">
                    <i class="bi bi-info-circle me-1"></i>
                    Belum ada data pengembalian untuk ditampilkan.
                </div>
            <?php else: ?>
            <div class="table-responsive">
                <table id="adminPengembalianTable" class="table table-hover align-middle orders-table">
                    <thead>
                        <tr style="background-color: rgba(37, 99, 235, 0.08); border-bottom: 2px solid rgba(37, 99, 235, 0.15);">
                            <th style="width: 50px; color: var(--bs-body-color);">No</th>
                            <th>Username</th>
                            <th>Nama Kostum</th>
                            <th>Status</th>
                            <th>Diajukan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $pengembalianList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $userName = $item->display_nama ?? '-';
                                    $kostumName = $item->display_kostum ?? '-';
                                    $catatanAdmin = $item->catatan_admin ?: '-';
                                    $buktiList = collect([$item->gambar1, $item->gambar2, $item->gambar3])->filter();
                                    $statusMap = [
                                        'proses' => ['Proses', 'bg-warning text-dark'],
                                        'ditolak' => ['Ditolak', 'bg-danger'],
                                        'diterima' => ['Diterima', 'bg-success'],
                                    ];
                                    $statusKey = $item->status ?: 'proses';
                                    $statusData = $statusMap[$statusKey] ?? [ucfirst(str_replace('_', ' ', (string) $statusKey)), 'bg-secondary'];
                                ?>
<tr data-date="<?php echo e($item->created_at ? $item->created_at->toDateString() : ''); ?>">
                                    <td class="fw-semibold"><?php echo e($index + 1); ?></td>
                                    <td class="text-start">
                                        <div class="fw-semibold"><?php echo e($userName); ?></div>
                                    </td>
                                    <td class="text-start">
                                        <div class="fw-semibold"><?php echo e($kostumName); ?></div>
                                    </td>
                                    <td>
                                        <span class="badge status-badge <?php echo e($statusData[1]); ?>"><?php echo e($statusData[0]); ?></span>
                                    </td>
                                    <td><?php echo e($item->created_at ? $item->created_at->format('d M Y H:i') : '-'); ?></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#imgModal-<?php echo e($item->id); ?>">
                                                <i class="bi bi-eye"></i> Detail
                                            </button>
                                            <?php if($statusKey !== 'diterima'): ?>
                                                <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#verifyModal-<?php echo e($item->id); ?>">
                                                    <i class="bi bi-shield-check"></i> Verifikasi
                                                </button>
                                            <?php endif; ?>
                                            <form method="POST" action="<?php echo e(route('admin.pengembalian.delete', $item->id)); ?>">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Yakin ingin menghapus data pengembalian ini?')">
                                                    <i class="bi bi-trash"></i> Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>

                                <div class="modal fade" id="imgModal-<?php echo e($item->id); ?>" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header bg-primary text-white">
                                                    <h5 class="modal-title">Detail Pengembalian</h5>
                                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <?php
                                                        $statusModalMap = [
                                                            'proses' => ['Proses', 'bg-warning text-dark'],
                                                            'ditolak' => ['Ditolak', 'bg-danger'],
                                                            'diterima' => ['Diterima', 'bg-success'],
                                                        ];
                                                        $statusModalData = $statusModalMap[$statusKey] ?? [ucfirst(str_replace('_', ' ', (string) $statusKey)), 'bg-secondary'];
                                                        $linkedFormulir = data_get($item, 'formulir');
                                                        $tanggalPakai = data_get($linkedFormulir, 'tanggal_pemakaian');
                                                        $tanggalKembali = data_get($linkedFormulir, 'tanggal_pengembalian');
                                                    ?>
                                                    <div class="row g-3 mb-3 text-start">
                                                        <div class="col-md-4">
                                                            <div class="small text-muted mb-1">Username</div>
                                                            <div class="fw-semibold"><?php echo e($userName); ?></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="small text-muted mb-1">Nama Kostum</div>
                                                            <div class="fw-semibold"><?php echo e($kostumName); ?></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="small text-muted mb-1">Tanggal Pengajuan</div>
                                                            <div class="fw-semibold"><?php echo e($item->created_at ? $item->created_at->format('d M Y H:i') : '-'); ?></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="small text-muted mb-1">Status</div>
                                                            <div><span class="badge status-badge <?php echo e($statusModalData[1]); ?>"><?php echo e($statusModalData[0]); ?></span></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="small text-muted mb-1">Tanggal Pakai</div>
                                                            <div class="fw-semibold"><?php echo e($tanggalPakai ? \Carbon\Carbon::parse($tanggalPakai)->format('d M Y') : '-'); ?></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="small text-muted mb-1">Tanggal Kembali</div>
                                                            <div class="fw-semibold"><?php echo e($tanggalKembali ? \Carbon\Carbon::parse($tanggalKembali)->format('d M Y') : '-'); ?></div>
                                                        </div>
                                                    </div>
                                                    <?php if($buktiList->isNotEmpty()): ?>
                                                        <div class="row g-3 mb-3">
                                                            <?php $__currentLoopData = $buktiList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $bukti): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <div class="col-6 col-md-4 text-center">
                                                                    <button type="button" class="btn p-0 border-0 bg-transparent return-photo-detail-trigger" data-photo-src="<?php echo e(asset('storage/' . $bukti)); ?>" data-photo-title="Bukti Pengembalian <?php echo e($index + 1); ?>" aria-label="Lihat detail bukti pengembalian <?php echo e($index + 1); ?>">
                                                                        <img src="<?php echo e(asset('storage/' . $bukti)); ?>" alt="Bukti <?php echo e($index + 1); ?>" class="img-fluid history-thumb">
                                                                    </button>
                                                                    <small class="d-block mt-2">Bukti <?php echo e($index + 1); ?></small>
                                                                </div>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </div>
                                                    <?php else: ?>
                                                        <div class="text-muted">Tidak ada bukti foto.</div>
                                                    <?php endif; ?>
                                                    <div class="text-start mt-3">
                                                        <div class="fw-semibold mb-2">Catatan User</div>
                                                        <div class="text-muted"><?php echo e($item->catatan ?: 'Tidak ada catatan.'); ?></div>
                                                        <hr>
                                                        <div class="fw-semibold mb-2">Catatan Admin</div>
                                                        <div class="text-muted"><?php echo e($catatanAdmin === '-' ? 'Belum ada catatan admin.' : $catatanAdmin); ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <div class="modal fade" id="verifyModal-<?php echo e($item->id); ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary text-white">
                                                <h5 class="modal-title">Verifikasi Pengembalian <?php echo e($kostumName); ?></h5>
                                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                            </div>
                                            <form method="POST" action="<?php echo e(route('admin.pengembalian.verifikasi', $item->id)); ?>">
                                                <?php echo csrf_field(); ?>
                                                <div class="modal-body">
                                                    <div class="row g-3 mb-3 text-start">
                                                        <div class="col-md-6">
                                                            <div class="small text-muted mb-1">User</div>
                                                            <div class="fw-semibold"><?php echo e($userName); ?></div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="small text-muted mb-1">Kostum</div>
                                                            <div class="fw-semibold"><?php echo e($kostumName); ?></div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 text-start">
                                                        <label class="form-label">Catatan Admin (Opsional)</label>
                                                        <textarea name="catatan_admin" class="form-control" rows="3" maxlength="255" placeholder="Contoh: Foto kedua kurang jelas, mohon upload ulang."></textarea>
                                                    </div>
                                                    <div class="alert alert-info mb-0 text-start">
                                                        Pilih <strong>Diterima</strong> untuk menyelesaikan pesanan, atau pilih <strong>Ditolak</strong> agar user mengajukan ulang data pengembalian.
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                    <button type="submit" name="aksi" value="revisi" class="btn btn-danger">Ditolak</button>
                                                    <button type="submit" name="aksi" value="setujui" class="btn btn-success">Diterima</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <?php endif; ?>
        </div>
    </div>
</section>

<div class="modal fade" id="adminReturnPhotoDetailModal" tabindex="-1" aria-labelledby="adminReturnPhotoDetailTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="adminReturnPhotoDetailTitle">Detail Foto</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body text-center">
                <img id="adminReturnPhotoDetailImage" src="" alt="Detail Foto" class="img-fluid rounded" style="max-height: 75vh; object-fit: contain;">
            </div>
        </div>
    </div>
</div>

<?php $__env->startSection('scripts'); ?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const photoModal = document.getElementById('adminReturnPhotoDetailModal');
        const photoImage = document.getElementById('adminReturnPhotoDetailImage');
        const photoTitle = document.getElementById('adminReturnPhotoDetailTitle');

        document.querySelectorAll('.return-photo-detail-trigger').forEach((trigger) => {
            trigger.addEventListener('click', function () {
                if (!photoModal || !photoImage) return;
                photoImage.src = this.dataset.photoSrc || '';
                if (photoTitle) photoTitle.textContent = this.dataset.photoTitle || 'Detail Foto';
                bootstrap.Modal.getOrCreateInstance(photoModal).show();
            });
        });

        photoModal?.addEventListener('hidden.bs.modal', function () {
            if (photoImage) photoImage.src = '';
        });

        function normalizeText(text) {
            return String(text || '').trim().toLowerCase();
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

        // initAdminTableSearchSort digantikan oleh filter Tahun/Bulan + Search/Sort

        const yearSelect = document.getElementById('filter-admin-pengembalian-tahun');
        const monthSelect = document.getElementById('filter-admin-pengembalian-bulan');
        const table = document.getElementById('adminPengembalianTable');
        const searchInput = document.getElementById('search-admin-pengembalian');
        const sortSelect = document.getElementById('sort-admin-pengembalian');
        const resetButton = document.getElementById('reset-admin-pengembalian');

        if (table && searchInput && sortSelect && resetButton && yearSelect && monthSelect) {
            const tbody = table.tBodies[0];
            const originalRows = tbody ? Array.from(tbody.rows) : [];


            // populate options from data-date attributes
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

                if (tbody) {
                    if (tbody) {
                        tbody.innerHTML = '';
                        filtered.forEach(r => tbody.appendChild(r));
                    }
                }
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
<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\rc3\resources\views\admin\data-pengembalian.blade.php ENDPATH**/ ?>