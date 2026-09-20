<?php $__env->startSection('title', 'Tanggal Pemesanan - Rei Cosrent'); ?>

<?php $__env->startSection('styles'); ?>
    :root {
        --booking-card-bg: #ffffff;
        --booking-card-border: rgba(37, 99, 235, 0.12);
        --booking-card-text: #141414;
        --booking-card-shadow: 0 12px 30px -12px rgba(16, 24, 40, 0.12);
    }[data-bs-theme="dark"]{
        --booking-card-bg: #0f172a;
        --booking-card-border: rgba(96, 165, 250, 0.16);
        --booking-card-text: #ffffff;
        --booking-card-shadow: 0 18px 40px -22px rgba(0, 0, 0, 0.55);
    }

    .booking-surface-card {
        background: var(--booking-card-bg) !important;
        border: 1px solid var(--booking-card-border) !important;
        box-shadow: var(--booking-card-shadow) !important;
        color: var(--booking-card-text) !important;
        border-radius: 1.25rem !important;
    }

    .booking-surface-card .card-header {
        background: transparent !important;
        border-bottom: 1px solid var(--booking-card-border) !important;
    }

    .booking-surface-card .text-muted,
    .booking-surface-card p,
    .booking-surface-card small,
    .booking-surface-card label,
    .booking-surface-card th,
    .booking-surface-card td,
    .booking-surface-card h1,
    .booking-surface-card h2,
    .booking-surface-card h3,
    .booking-surface-card h4,
    .booking-surface-card h5,
    .booking-surface-card h6 {
        color: var(--booking-card-text) !important;
    }

    .booking-content-card {
        background: var(--booking-card-bg);
        border: 1px solid var(--booking-card-border);
        border-radius: 1.25rem;
        box-shadow: var(--booking-card-shadow);
        color: var(--booking-card-text);
        padding: 1.25rem;
    }

    .booking-content-card hr {
        border-color: var(--booking-card-border);
        margin: 1.25rem 0;
        opacity: 1;
    }

    .sheet-tabs .nav-link {
        border-radius: 999px;
        color: var(--brand-blue) !important;
        font-weight: 600;
    }

    .sheet-tabs .nav-link.active {
        background: var(--brand-blue);
        color: #fff !important;
    }

    .booking-table {
        color: var(--booking-card-text);
        background: var(--booking-card-bg);
    }

    .booking-table thead th {
        position: sticky;
        top: 0;
        z-index: 1;
        background: color-mix(in srgb, var(--booking-card-bg) 90%, var(--brand-blue));
        color: var(--brand-blue) !important;
        white-space: nowrap;
        vertical-align: middle;
        border-bottom: 1px solid var(--booking-card-border) !important;
    }

    .booking-table tbody td {
        vertical-align: middle;
        background: var(--booking-card-bg);
        border-color: var(--booking-card-border) !important;
    }

    .booking-group-row td {
        background: color-mix(in srgb, var(--booking-card-bg) 88%, var(--brand-blue)) !important;
        color: var(--brand-blue) !important;
        font-weight: 700;
    }

    .booking-slot-input {
        min-width: 150px;
        border-radius: 999px;
    }

    .booking-slot-badge {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-height: 38px;
        padding: 0.5rem 0.75rem;
        border-radius: 999px;
        background: rgba(37, 99, 235, 0.08);
        color: var(--brand-blue);
        font-size: 0.875rem;
        white-space: nowrap;
    }

    .booking-status-legend {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        gap: 0.75rem 1rem;
        align-items: center;
        padding: 0.25rem 0;
    }

    .booking-status-item {
        display: inline-flex;
        align-items: center;
        gap: 0.45rem;
        font-size: 0.875rem;
        font-weight: 600;
    }

    .booking-status-note {
        flex-basis: 100%;
        color: var(--booking-card-text);
        font-size: 0.875rem;
    }

    .booking-status-note strong,
    .booking-status-note-line {
        display: block;
    }

    .booking-status-dot {
        width: 0.8rem;
        height: 0.8rem;
        border-radius: 50%;
        flex: 0 0 auto;
    }

    .booking-status-pending {
        background: #facc15;
        color: #713f12;
        border-color: #eab308;
    }

    .booking-status-confirmed {
        background: #ef4444;
        color: #ffffff;
        border-color: #dc2626;
    }

    .booking-status-completed {
        background: #22c55e;
        color: #14532d;
        border-color: #16a34a;
    }

    .booking-legend .badge {
        border-radius: 999px;
        padding: 0.5rem 0.75rem;
        font-weight: 600;
    }

    .booking-table-wrap {
        overflow-x: auto;
    }

    .booking-filter-form {
        display: flex;
        flex-direction: column;
        align-items: stretch;
        gap: 0.5rem;
        width: 24rem;
    }

    .booking-filter-form select {
        width: 100%;
        min-width: 0;
    }

    .booking-filter-card,
    .booking-filter-card .card-body,
    .booking-calendar-card,
    .booking-calendar-card .card-header,
    .booking-calendar-card .card-body {
        background: var(--booking-card-bg) !important;
        color: var(--booking-card-text) !important;
        border-color: var(--booking-card-border) !important;
    }

    .booking-filter-card .card-body h5,
    .booking-filter-card .card-body p,
    .booking-calendar-card .card-header h5 {
        color: var(--booking-card-text) !important;
    }

    .booking-filter-form .form-select {
        min-width: 7rem;
        background: var(--booking-card-bg) !important;
        color: var(--booking-card-text) !important;
        border-color: var(--booking-card-border) !important;
    }

    .booking-filter-submit {
        min-height: 2.25rem;
        font-weight: 600;
    }

    .booking-filter-actions {
        display: flex;
        gap: 0.5rem;
        width: 100%;
    }

    .booking-filter-actions .btn {
        flex: 1 1 0;
        min-height: 2.25rem;
    }

    .booking-calendar-table-wrap {
        background: var(--booking-card-bg) !important;
        overflow-x: auto;
    }

    .booking-calendar-heading {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 1rem;
    }

    .booking-month-navigation {
        display: inline-flex;
        gap: 0.5rem;
        margin-left: auto;
    }

    .booking-month-navigation .btn {
        height: 2.25rem;
        min-width: 7.5rem;
        padding: 0.35rem 0.65rem;
        white-space: nowrap;
    }

    .booking-calendar-table,
    .booking-calendar-table thead,
    .booking-calendar-table tbody,
    .booking-calendar-table tr,
    .booking-calendar-table th,
    .booking-calendar-table td {
        background: var(--booking-card-bg) !important;
        color: var(--booking-card-text) !important;
        border-color: var(--booking-card-border) !important;
    }

    .booking-calendar-table {
        table-layout: fixed;
        width: max-content;
        min-width: 100%;
    }

    .booking-calendar-table th,
    .booking-calendar-table td {
        border-right: 1px solid var(--booking-card-border) !important;
    }

    .booking-calendar-table th:last-child,
    .booking-calendar-table td:last-child {
        border-right: 0 !important;
    }

    .booking-calendar-table thead th {
        background: color-mix(in srgb, var(--booking-card-bg) 88%, #2563eb) !important;
        font-weight: 700;
        white-space: nowrap;
    }

    .booking-calendar-table tbody td {
        min-height: 3.25rem;
        padding: 0.75rem 0.7rem;
        text-align: center;
        vertical-align: middle;
        white-space: nowrap;
    }

    .booking-calendar-row:hover td {
        background: color-mix(in srgb, var(--booking-card-bg) 92%, #2563eb) !important;
    }

    .booking-calendar-table .booking-costume-cell {
        min-width: 11.25rem;
        text-align: left;
        font-weight: 700;
    }

    .booking-calendar-table .booking-index-cell {
        font-weight: 700;
        font-variant-numeric: tabular-nums;
    }

    .booking-calendar-table .booking-empty-slot {
        opacity: 0.45;
        font-weight: 600;
    }

    .booking-calendar-table .booking-slot-badge {
        display: block;
        box-sizing: border-box;
        width: 100%;
        min-width: 0;
        max-width: 100%;
        vertical-align: middle;
        background: rgba(37, 99, 235, 0.14);
        color: #1d4ed8 !important;
        border: 1px solid rgba(37, 99, 235, 0.22);
        font-weight: 700;
    }

    .booking-calendar-table .booking-slot-label {
        display: block;
        width: 100%;
        min-width: 0;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    [data-bs-theme="dark"] .booking-calendar-table .booking-slot-badge {
        background: rgba(96, 165, 250, 0.18);
        color: #ffffff !important;
        border-color: rgba(147, 197, 253, 0.3);
    }

    .booking-calendar-table .booking-slot-badge.booking-status-pending {
        background: #facc15 !important;
        color: #713f12 !important;
        border-color: #eab308 !important;
    }

    .booking-calendar-table .booking-slot-badge.booking-status-confirmed {
        background: #ef4444 !important;
        color: #ffffff !important;
        border-color: #dc2626 !important;
    }

    .booking-calendar-table .booking-slot-badge.booking-status-completed {
        background: #22c55e !important;
        color: #14532d !important;
        border-color: #16a34a !important;
    }

    @media (max-width: 575.98px) {
        .booking-calendar-heading {
            align-items: stretch;
            flex-direction: column;
        }

        .booking-month-navigation {
            width: 100%;
            margin-left: 0;
        }

        .booking-month-navigation .btn {
            flex: 1 1 0;
            min-width: 0;
        }

        .booking-status-legend {
            flex-direction: column;
            align-items: flex-start;
            gap: 0.65rem;
        }

        .booking-status-note {
            flex-basis: auto;
        }

        .booking-filter-form {
            width: 100%;
        }

        .booking-filter-form select {
            width: 100%;
            min-height: 40px;
        }
    }
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php
    $namaBulan = [
        1 => 'Januari',
        2 => 'Februari',
        3 => 'Maret',
        4 => 'April',
        5 => 'Mei',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'Agustus',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember',
    ];
    $calendarMonth = \Carbon\Carbon::create($selectedYear, $selectedMonth, 1);
    $previousMonth = $calendarMonth->copy()->subMonth();
    $nextMonth = $calendarMonth->copy()->addMonth();
    $calendarTableWidth = 240 + (count($dates) * 90);
?>
<section class="py-5">
    <div class="container">
        <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center justify-content-between gap-2 mb-4">
            <div>
                <h2 class="fw-bold mb-0">Tanggal Pemesanan</h2>
            </div>
            <?php if($isAdmin): ?>
                <div class="d-grid d-sm-block w-100" style="max-width: 220px;">
                    <a href="<?php echo e(route('admin.profile')); ?>" class="btn btn-outline-primary w-100"><i class="bi bi-arrow-left"></i> Kembali</a>
                </div>
            <?php endif; ?>
        </div>

        <?php if(session('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle"></i> <?php echo e(session('success')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>

        <?php if(session('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-circle"></i> <?php echo e(session('error')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>

        <div class="booking-content-card">
            <div class="booking-filter-section">
            <div class="d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-3">
                <div>
                    <h5 class="fw-bold mb-1">Pilih Tahun & Bulan</h5>
                    <p class="mb-0">Tampilkan kalender booking berdasarkan tahun dan bulan yang dipilih.</p>
                </div>
                <form method="GET" class="booking-filter-form">
                    <label class="visually-hidden">Tahun</label>
                    <select name="year" class="form-select form-select-sm">
                        <?php $__currentLoopData = $years; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $y): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($y); ?>" <?php echo e($y == $selectedYear ? 'selected' : ''); ?>><?php echo e($y); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <label class="visually-hidden">Bulan</label>
                    <select name="month" class="form-select form-select-sm">
                        <?php $__currentLoopData = range(1,12); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($m); ?>" <?php echo e($m == $selectedMonth ? 'selected' : ''); ?>><?php echo e($namaBulan[$m]); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <div class="booking-filter-actions">
                        <button class="btn btn-sm btn-primary booking-filter-submit" type="submit">
                            <i class="bi bi-funnel me-1" aria-hidden="true"></i> Tampilkan
                        </button>
                        <button class="btn btn-sm btn-outline-secondary booking-filter-reset" type="button" title="Reset tanggal ke tahun dan bulan saat ini" aria-label="Reset tanggal ke tahun dan bulan saat ini">
                            <i class="bi bi-arrow-clockwise me-1" aria-hidden="true"></i> Reset tanggal
                        </button>
                    </div>
                </form>
                </div>
        </div>

                <hr>

            <div class="booking-status-legend" aria-label="Indikator status booking">
            <span class="booking-status-item">
                <span class="booking-status-dot booking-status-pending" aria-hidden="true"></span>
                Proses verifikasi
            </span>
            <span class="booking-status-item">
                <span class="booking-status-dot booking-status-confirmed" aria-hidden="true"></span>
                Sudah diverifikasi
            </span>
            <span class="booking-status-item">
                <span class="booking-status-dot booking-status-completed" aria-hidden="true"></span>
                Kostum sudah dikembalikan
            </span>
            <span class="booking-status-note">
                <strong>Keterangan:</strong>
                <span class="booking-status-note-line">Indikator kuning berarti kostum sedang dipesan dan belum melakukan pembayaran.</span>
                <span class="booking-status-note-line">Indikator merah berarti kostum sedang dipesan dan sudah melakukan pembayaran.</span>
                <span class="booking-status-note-line">Indikator hijau berarti kostum sudah kembalikan dan dapat dapat dipesan.</span>
            </span>
        </div>

            <hr>

        <div class="booking-calendar-section">
            <div class="booking-calendar-heading py-3">
                <h5 class="fw-bold mb-0"><?php echo e($namaBulan[$selectedMonth]); ?> <?php echo e($selectedYear); ?></h5>
                <div class="booking-month-navigation" aria-label="Navigasi bulan kalender">
                    <a href="<?php echo e(route('tanggal.pemesanan', ['year' => $previousMonth->year, 'month' => $previousMonth->month])); ?>" class="btn btn-sm btn-outline-secondary" title="Bulan sebelumnya" aria-label="Bulan sebelumnya">
                        <i class="bi bi-chevron-left me-1" aria-hidden="true"></i> Sebelumnya
                    </a>
                    <a href="<?php echo e(route('tanggal.pemesanan', ['year' => $nextMonth->year, 'month' => $nextMonth->month])); ?>" class="btn btn-sm btn-outline-secondary" title="Bulan berikutnya" aria-label="Bulan berikutnya">
                        Berikutnya <i class="bi bi-chevron-right ms-1" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="p-0">
                <div class="booking-table-wrap booking-calendar-table-wrap">
                    <table class="table table-hover align-middle mb-0 booking-table booking-calendar-table" style="width: <?php echo e($calendarTableWidth); ?>px; max-width: none;">
                        <colgroup>
                            <col style="width: 60px;">
                            <col style="width: 180px;">
                            <?php $__currentLoopData = $dates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <col style="width: 90px;">
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </colgroup>
                        <thead>
                            <tr>
                                <th style="min-width: 60px;">No</th>
                                <th style="min-width: 180px;">Nama Kostum</th>
                                <?php $__currentLoopData = $dates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <th style="min-width: 90px;"><?php echo e(\Carbon\Carbon::parse($d)->format('d')); ?></th>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $kostums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="booking-calendar-row">
                                    <td class="booking-index-cell"><?php echo e($index + 1); ?></td>
                                    <td class="booking-costume-cell"><?php echo e($k->nama_kostum); ?></td>
                                    <?php $__currentLoopData = $dates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <td>
                                            <?php if(isset($bookingMap[$k->nama_kostum][$d])): ?>
                                                <?php ($booking = $bookingMap[$k->nama_kostum][$d]); ?>
                                                <span class="booking-slot-badge <?php echo e($booking['status_class']); ?>" title="<?php echo e($booking['username']); ?>" aria-label="<?php echo e($booking['username']); ?>"><span class="booking-slot-label"><?php echo e($booking['username']); ?></span></span>
                                            <?php else: ?>
                                                <span class="booking-empty-slot">-</span>
                                            <?php endif; ?>
                                        </td>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const resetButton = document.querySelector('.booking-filter-reset');
        const yearSelect = document.querySelector('.booking-filter-form select[name="year"]');
        const monthSelect = document.querySelector('.booking-filter-form select[name="month"]');
        const filterForm = document.querySelector('.booking-filter-form');

        if (!resetButton || !yearSelect || !monthSelect || !filterForm) {
            return;
        }

        resetButton.addEventListener('click', function () {
            const currentDate = new Date();
            yearSelect.value = String(currentDate.getFullYear());
            monthSelect.value = String(currentDate.getMonth() + 1);
            filterForm.submit();
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\rc3\resources\views\tanggal-pemesanan.blade.php ENDPATH**/ ?>