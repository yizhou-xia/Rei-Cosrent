<?php $__env->startSection('title', 'Data Tanggal Pemesanan - Rei Cosrent'); ?>

<?php $__env->startSection('styles'); ?>
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
    :root {
        --booking-card-bg: #ffffff;
        --booking-card-border: rgba(37, 99, 235, 0.12);
        --booking-card-text: #141414;
        --booking-card-shadow: 0 12px 30px -12px rgba(16, 24, 40, 0.12);
        --booking-filter-bg: #ffffff;
        --booking-filter-text: #141414;
        --booking-filter-border: rgba(37, 99, 235, 0.12);
    }[data-bs-theme="dark"]{
        --booking-card-bg: #0f172a;
        --booking-card-border: rgba(96, 165, 250, 0.16);
        --booking-card-text: #ffffff;
        --booking-card-shadow: 0 18px 40px -22px rgba(0, 0, 0, 0.55);
        --booking-filter-bg: #0f172a;
        --booking-filter-text: #ffffff;
        --booking-filter-border: rgba(96, 165, 250, 0.16);
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

    .sheet-tabs .nav-link {
        border-radius: 999px;
        color: var(--brand-blue) !important;
        font-weight: 600;
    }

    .sheet-tabs .nav-link.active {
        background: var(--brand-blue);
        color: #fff !important;
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

    .booking-legend .badge {
        border-radius: 999px;
        padding: 0.5rem 0.75rem;
        font-weight: 600;
    }

    .booking-table-wrap {
        overflow-x: auto;
    }

    .booking-status-legend {
        display: flex;
        flex-wrap: wrap;
        gap: 0.75rem 1rem;
        align-items: center;
        margin-bottom: 1rem;
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
        border: 1px solid #eab308;
    }

    .booking-status-confirmed {
        background: #ef4444;
        border: 1px solid #dc2626;
    }

    .booking-status-completed {
        background: #22c55e;
        border: 1px solid #16a34a;
    }

    .booking-calendar-table th,
    .booking-calendar-table td {
        border-right: 1px solid var(--booking-card-border) !important;
    }

    .booking-calendar-table th:last-child,
    .booking-calendar-table td:last-child {
        border-right: 0 !important;
    }

    .booking-calendar-table .booking-slot-badge {
        display: block;
        width: 100%;
        min-width: 0;
        max-width: 100%;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        box-sizing: border-box;
    }

    .booking-calendar-table .booking-status-pending {
        background: #facc15 !important;
        color: #713f12 !important;
        border-color: #eab308 !important;
    }

    .booking-calendar-table .booking-status-confirmed {
        background: #ef4444 !important;
        color: #ffffff !important;
        border-color: #dc2626 !important;
    }

    .booking-calendar-table .booking-status-completed {
        background: #22c55e !important;
        color: #14532d !important;
        border-color: #16a34a !important;
    }

    .booking-filter-form {
        flex-wrap: wrap;
    }

    .booking-filter-form .form-select {
        min-width: 7rem;
        background-color: #ffffff !important;
        color: #141414 !important;
        border-color: rgba(100, 116, 139, 0.28) !important;
    }

    .booking-filter-card,
    .booking-filter-card .card-body {
        background-color: var(--booking-filter-bg) !important;
        color: var(--booking-filter-text) !important;
        border-color: var(--booking-filter-border) !important;
    }

    .booking-filter-card .card-body h5,
    .booking-filter-card .card-body p {
        color: var(--booking-filter-text) !important;
    }

    .booking-filter-card .form-select option {
        background-color: #ffffff !important;
        color: #141414 !important;
    }

    .booking-filter-submit {
        min-width: 7rem;
        min-height: 2.25rem;
        padding: 0.375rem 0.875rem;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        white-space: nowrap;
        border-radius: 0.5rem !important;
        font-weight: 600;
    }

    [data-bs-theme="dark"] .booking-filter-submit {
        color: #ffffff !important;
    }

    .booking-calendar-card,
    .booking-calendar-card .card-header,
    .booking-calendar-card .card-body {
        background-color: var(--booking-card-bg) !important;
        color: var(--booking-card-text) !important;
        border-color: var(--booking-card-border) !important;
    }

    .booking-calendar-card .card-header h5,
    .booking-calendar-card .card-body,
    .booking-calendar-card .card-body .text-muted {
        color: var(--booking-card-text) !important;
    }

    .booking-calendar-table-wrap {
        background-color: var(--booking-card-bg) !important;
    }

    .booking-calendar-table,
    .booking-calendar-table thead,
    .booking-calendar-table tbody,
    .booking-calendar-table tr,
    .booking-calendar-table th,
    .booking-calendar-table td {
        background-color: var(--booking-card-bg) !important;
        color: var(--booking-card-text) !important;
        border-color: var(--booking-card-border) !important;
    }

    .booking-calendar-table thead th {
        background-color: color-mix(in srgb, var(--booking-card-bg) 88%, #2563eb) !important;
        font-weight: 700;
        white-space: nowrap;
    }

    .booking-calendar-table tbody tr:hover td {
        background-color: color-mix(in srgb, var(--booking-card-bg) 92%, #2563eb) !important;
    }

    .booking-calendar-row,
    .booking-calendar-row td {
        background-color: var(--booking-card-bg) !important;
        color: var(--booking-card-text) !important;
        border-color: var(--booking-card-border) !important;
    }

    .booking-calendar-row:hover td {
        background-color: color-mix(in srgb, var(--booking-card-bg) 92%, #2563eb) !important;
    }

    .booking-calendar-table tbody td {
        min-height: 3.25rem;
        padding: 0.75rem 0.875rem;
        text-align: center;
        vertical-align: middle;
        white-space: nowrap;
    }

    .booking-calendar-table .booking-index-cell {
        color: var(--booking-card-text) !important;
        font-variant-numeric: tabular-nums;
        font-weight: 700;
    }

    .booking-calendar-table .booking-costume-cell {
        min-width: 11.25rem;
        text-align: left;
        font-weight: 700;
    }

    .booking-calendar-table .booking-empty-slot {
        color: var(--booking-card-text) !important;
        opacity: 0.45;
        font-weight: 600;
    }

    .booking-calendar-table .booking-slot-badge {
        min-width: 5.5rem;
        background: rgba(37, 99, 235, 0.14);
        color: #1d4ed8 !important;
        border: 1px solid rgba(37, 99, 235, 0.22);
        font-weight: 700;
    }

    [data-bs-theme="dark"] .booking-calendar-table .booking-slot-badge {
        background: rgba(96, 165, 250, 0.18);
        color: #ffffff !important;
        border-color: rgba(147, 197, 253, 0.3);
    }

    .booking-calendar-table .booking-slot-badge.booking-status-pending {
        min-width: 0;
        background: #facc15 !important;
        color: #713f12 !important;
        border-color: #eab308 !important;
    }

    .booking-calendar-table .booking-slot-badge.booking-status-confirmed {
        min-width: 0;
        background: #ef4444 !important;
        color: #ffffff !important;
        border-color: #dc2626 !important;
    }

    .booking-calendar-table .booking-slot-badge.booking-status-completed {
        min-width: 0;
        background: #22c55e !important;
        color: #14532d !important;
        border-color: #16a34a !important;
    }

    .booking-calendar-table .text-muted {
        color: var(--booking-card-text) !important;
        opacity: 0.65;
    }

    [data-bs-theme="dark"] .booking-calendar-table thead th {
        background-color: rgba(59, 130, 246, 0.18) !important;
    }

    [data-bs-theme="dark"] .booking-calendar-table tbody tr:hover td {
        background-color: rgba(59, 130, 246, 0.14) !important;
    }

    [data-bs-theme="dark"] .booking-calendar-row,
    [data-bs-theme="dark"] .booking-calendar-row td {
        background-color: #0f172a !important;
        color: #ffffff !important;
    }

    [data-bs-theme="light"] .booking-calendar-card,
    [data-bs-theme="light"] .booking-calendar-card .card-header,
    [data-bs-theme="light"] .booking-calendar-card .card-body,
    [data-bs-theme="light"] .booking-calendar-table-wrap,
    [data-bs-theme="light"] .booking-calendar-table,
    [data-bs-theme="light"] .booking-calendar-table thead,
    [data-bs-theme="light"] .booking-calendar-table tbody,
    [data-bs-theme="light"] .booking-calendar-table tr,
    [data-bs-theme="light"] .booking-calendar-table th,
    [data-bs-theme="light"] .booking-calendar-table td,
    [data-bs-theme="light"] .booking-calendar-row,
    [data-bs-theme="light"] .booking-calendar-row td {
        background-color: #ffffff !important;
    }

    [data-bs-theme="light"] .booking-calendar-table tbody td,
    [data-bs-theme="light"] .booking-calendar-table tbody tr.booking-calendar-row > td {
        background-color: #ffffff !important;
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

    .booking-filter-actions {
        display: flex;
        gap: 0.5rem;
        width: 100%;
    }

    .booking-filter-actions .btn {
        flex: 1 1 0;
        min-height: 2.25rem;
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

    .booking-calendar-table {
        table-layout: fixed;
        width: max-content;
        min-width: 100%;
    }

    .booking-calendar-table .booking-slot-label {
        display: block;
        width: 100%;
        min-width: 0;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    @media (max-width: 575.98px) {
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
        <div class="admin-page-header d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2 mb-4">
            <div>
                <h2 class="fw-bold mb-0">Data Tanggal Pemesanan</h2>

            </div>
            <div class="d-grid d-sm-block">
                <a href="<?php echo e(route('admin.profile')); ?>" class="btn btn-outline-primary"><i class="bi bi-arrow-left"></i> Kembali</a>
            </div>
        </div>

        <?php if(session('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert"><?php echo e(session('success')); ?><button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>
        <?php endif; ?>
        <?php if(session('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert"><?php echo e(session('error')); ?><button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>
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
                            <option value="<?php echo e($m); ?>" <?php echo e($m == $selectedMonth ? 'selected' : ''); ?>><?php echo e(DateTime::createFromFormat('!m', $m)->format('F')); ?></option>
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
                Proses verifikasi / revisi
            </span>
            <span class="booking-status-item">
                <span class="booking-status-dot booking-status-confirmed" aria-hidden="true"></span>
                Sudah diverifikasi / sudah bayar
            </span>
            <span class="booking-status-item">
                <span class="booking-status-dot booking-status-completed" aria-hidden="true"></span>
                Kostum sudah dikembalikan
            </span>
            <span class="booking-status-note">
                <strong>Keterangan:</strong>
                <span class="booking-status-note-line">Indikator kuning berarti kostum sedang dipesan dan belum melakukan pembayaran.</span>
                <span class="booking-status-note-line">Indikator merah berarti kostum sedang dipesan dan sudah melakukan pembayaran.</span>
                <span class="booking-status-note-line">Indikator hijau berarti kostum sudah dikembalikan dan dapat dipesan.</span>
            </span>
        </div>

            <hr>

        <div class="booking-calendar-section">
            <div class="booking-calendar-heading py-3">
                <h5 class="fw-bold mb-0"><?php echo e($namaBulan[$selectedMonth]); ?> <?php echo e($selectedYear); ?></h5>
                <div class="booking-month-navigation" aria-label="Navigasi bulan kalender">
                    <a href="<?php echo e(route('admin.data-tanggal', ['year' => $previousMonth->year, 'month' => $previousMonth->month])); ?>" class="btn btn-sm btn-outline-secondary" title="Bulan sebelumnya" aria-label="Bulan sebelumnya">
                        <i class="bi bi-chevron-left me-1" aria-hidden="true"></i> Sebelumnya
                    </a>
                    <a href="<?php echo e(route('admin.data-tanggal', ['year' => $nextMonth->year, 'month' => $nextMonth->month])); ?>" class="btn btn-sm btn-outline-secondary" title="Bulan berikutnya" aria-label="Bulan berikutnya">
                        Berikutnya <i class="bi bi-chevron-right ms-1" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="p-0">
                <div class="table-responsive booking-calendar-table-wrap">
                    <table class="table table-hover align-middle mb-0 orders-table booking-calendar-table" style="width: <?php echo e($calendarTableWidth); ?>px; max-width: none;">
                        <colgroup>
                            <col style="width: 60px;">
                            <col style="width: 180px;">
                            <?php $__currentLoopData = $dates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <col style="width: 90px;">
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </colgroup>
                        <thead>
                            <tr>
                                <th style="min-width: 60px; width: 60px;">No</th>
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
                                                <a href="<?php echo e(route('admin.data-pesanan', ['open_detail' => $booking['order_id']])); ?>" class="booking-slot-badge <?php echo e($booking['status_class']); ?> text-decoration-none" title="<?php echo e($booking['username']); ?> - Lihat detail pesanan" aria-label="<?php echo e($booking['username']); ?> - Lihat detail pesanan">
                                                    <span class="booking-slot-label"><?php echo e($booking['username']); ?></span>
                                                </a>
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

<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\rc3\resources\views\admin\data-tanggal.blade.php ENDPATH**/ ?>