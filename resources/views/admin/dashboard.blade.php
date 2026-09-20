@extends('layouts.main')

@section('title', 'Dashboard Admin - Rei Cosrent')

@section('styles')
    :root {
        --admin-card-bg: #ffffff;
        --admin-card-border: rgba(37, 99, 235, 0.12);
        --admin-card-text: #141414;
        --admin-card-shadow: 0 12px 30px -12px rgba(16, 24, 40, 0.12);
        --admin-main-text: var(--brand-blue);
        --admin-sub-text: #141414;
        --admin-hero-bg: linear-gradient(135deg, rgba(248, 251, 255, 0.98), rgba(219, 234, 254, 0.92));
    }[data-bs-theme="dark"]{
        --admin-card-bg: #0f172a;
        --admin-card-border: rgba(96, 165, 250, 0.16);
        --admin-card-text: #ffffff;
        --admin-card-shadow: 0 18px 40px -22px rgba(0, 0, 0, 0.55);
        --admin-sub-text: #ffffff;
        --admin-hero-bg: linear-gradient(135deg, rgba(15, 23, 42, 0.98), rgba(30, 41, 59, 0.92));
    }

    .admin-surface-card {
        background: var(--admin-card-bg) !important;
        border: 1px solid var(--admin-card-border) !important;
        box-shadow: var(--admin-card-shadow) !important;
        color: var(--admin-sub-text) !important;
        border-radius: 1.25rem !important;
    }

    .admin-surface-card .card-header {
        background: transparent !important;
        color: var(--brand-blue) !important;
        border-bottom: 1px solid var(--admin-card-border) !important;
    }

    .admin-surface-card .card-body,
    .admin-surface-card p,
    .admin-surface-card small,
    .admin-surface-card td,
    .admin-surface-card th,
    .admin-surface-card label {
        color: var(--admin-sub-text) !important;
    }

    .admin-surface-card h1,
    .admin-surface-card h2,
    .admin-surface-card h3,
    .admin-surface-card h4,
    .admin-surface-card h5,
    .admin-surface-card h6,
    .admin-surface-card .data-card-value,
    .admin-surface-card .metric-value,
    .admin-surface-card .stats-table th {
        color: var(--admin-main-text) !important;
    }

    .admin-surface-card .text-muted {
        color: color-mix(in srgb, var(--admin-sub-text) 70%, transparent) !important;
    }

    .admin-title-blue {
        color: var(--admin-main-text) !important;
    }

    .admin-surface-card .table {
        color: var(--admin-sub-text) !important;
    }

    .admin-surface-card .table > :not(caption) > * > * {
        background: var(--admin-card-bg) !important;
        border-color: var(--admin-card-border) !important;
    }

    .admin-surface-card .btn-outline-secondary,
    .admin-surface-card .btn-outline-primary,
    .admin-surface-card .btn-outline-warning,
    .admin-surface-card .btn-outline-danger,
    .admin-surface-card .btn-primary,
    .admin-surface-card .btn-danger {
        border-radius: 999px;
    }

    .dashboard-hero {
        position: relative;
        overflow: hidden;
        background: var(--admin-hero-bg);
        border-radius: 1rem;
        padding: 1.25rem;
        color: var(--admin-main-text);
        margin-bottom: 2rem;
        box-shadow: var(--admin-card-shadow);
        border: 1px solid var(--admin-card-border);
    }

    .dashboard-overview-card {
        padding: 0.65rem;
    }

    .dashboard-overview-grid {
        display: grid;
        grid-template-columns: minmax(0, 1.5fr) minmax(220px, 0.8fr);
        gap: 0.65rem;
        align-items: stretch;
    }

    .quick-actions-panel {
        display: flex;
        flex-direction: column;
        justify-content: center;
        min-width: 0;
        padding: 0.25rem;
    }

    .dashboard-metric-row > .col {
        min-width: 0;
    }

    @media (min-width: 769px) {
        .dashboard-overview-card {
            padding: 0.65rem;
        }

        .dashboard-overview-grid {
            gap: 0.65rem;
        }

        .dashboard-hero {
            padding: 0.75rem;
        }

        .dashboard-hero h1 {
            font-size: 1.35rem;
            margin-bottom: 0.25rem;
        }

        .dashboard-hero p {
            margin-bottom: 0.5rem;
        }

        .hero-profile-summary {
            gap: 0.65rem;
            margin-top: 0.5rem;
            padding: 0.5rem;
        }

        .hero-profile-photo {
            width: 44px;
            height: 44px;
        }

        .hero-profile-name {
            font-size: 0.9rem;
        }

        .hero-profile-title {
            font-size: 0.8rem;
        }

        .quick-action-btn {
            min-height: 36px;
            padding: 0.45rem 0.65rem;
            font-size: 0.85rem;
        }
    }

    .dashboard-hero::before {
        content: '';
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 15% 20%, rgba(255,255,255,0.18), transparent 32%), radial-gradient(circle at 85% 80%, rgba(255,255,255,0.12), transparent 28%);
        pointer-events: none;
    }

    .dashboard-hero > * {
        position: relative;
        z-index: 1;
    }

    .dashboard-hero h1 {
        font-size: clamp(1.25rem, 2vw, 1.65rem);
        font-weight: 700;
        margin-bottom: 0.5rem;
    }

    .dashboard-hero p {
        color: var(--admin-sub-text);
        opacity: 0.95;
        margin-bottom: 1rem;
    }

    .hero-profile-summary {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-top: 1rem;
        padding: 0.75rem;
        border-radius: 12px;
        background: color-mix(in srgb, var(--admin-card-bg) 88%, #ffffff);
        backdrop-filter: blur(6px);
    }

    .hero-profile-photo {
        width: 56px;
        height: 56px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid color-mix(in srgb, var(--admin-card-border) 80%, #ffffff);
        flex-shrink: 0;
    }

    .hero-profile-name {
        font-size: 1rem;
        font-weight: 700;
        margin-bottom: 0.25rem;
    }

    .hero-profile-title,
    .hero-profile-vision {
        margin-bottom: 0.25rem;
        color: var(--admin-sub-text);
        opacity: 0.95;
    }

    .hero-btn {
        background: rgba(255, 255, 255, 0.2);
        border: 1px solid rgba(255, 255, 255, 0.3);
        color: white;
        padding: 0.5rem 1.5rem;
        border-radius: 8px;
        display: inline-block;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .hero-btn:hover {
        background: rgba(255, 255, 255, 0.3);
        color: white;
    }

    .metric-card {
        background: var(--admin-card-bg);
        border: 1px solid var(--admin-card-border);
        border-radius: 1.25rem;
        padding: 1.5rem;
        transition: all 0.3s ease;
        box-shadow: var(--admin-card-shadow);
        color: var(--admin-sub-text);
    }

    .metric-card:hover {
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transform: translateY(-2px);
    }

    .metric-row {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        justify-content: space-between;
        width: 100%;
    }

    .metric-row > .col-md-6,
    .metric-row > .col-lg-3 {
        flex: 1 1 0;
        max-width: none;
        padding-left: 0;
        padding-right: 0;
    }

    .metric-row .metric-card {
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .dashboard-content {
        width: min(100%, 1440px);
        margin-left: auto;
        margin-right: auto;
    }

    @media (max-width: 992px) {
        .metric-row > .col-md-6,
        .metric-row > .col-lg-3 {
            flex: 1 1 calc(50% - 0.5rem);
        }
    }

    @media (max-width: 576px) {
        .metric-row > .col-md-6,
        .metric-row > .col-lg-3 {
            flex: 1 1 100%;
        }
    }

    .metric-value {
        font-size: 1.875rem;
        font-weight: 700;
        color: var(--admin-main-text);
    }

    .metric-label {
        font-size: 0.875rem;
        color: color-mix(in srgb, var(--admin-sub-text) 70%, transparent);
        margin-top: 0.5rem;
    }

    .metric-change {
        font-size: 0.875rem;
        font-weight: 600;
        margin-top: 0.5rem;
    }

    .metric-change.positive {
        color: #10b981;
    }

    .metric-change.negative {
        color: #ef4444;
    }

    .ideas-carousel {
        border-radius: 1.25rem;
        background: linear-gradient(135deg, rgba(37, 99, 235, 0.9), rgba(96, 165, 250, 0.92));
        color: white;
        padding: 2rem;
        margin-bottom: 2rem;
        min-height: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .ideas-carousel h3 {
        margin-bottom: 1rem;
    }

    .chart-container {
        background: var(--admin-card-bg);
        border: 1px solid var(--admin-card-border);
        border-radius: 1.25rem;
        padding: 1.5rem;
        margin-bottom: 1.5rem;
        box-shadow: var(--admin-card-shadow);
        color: var(--admin-sub-text);
    }

    .chart-subtitle {
        font-size: 0.875rem;
        color: color-mix(in srgb, var(--admin-sub-text) 70%, transparent);
        margin-top: 0.25rem;
    }

    #periodDropdown {
        min-width: 170px;
        border-radius: 14px;
        border: 1px solid var(--admin-card-border);
        background: var(--admin-card-bg);
        color: var(--admin-sub-text);
        box-shadow: none;
    }

    #periodDropdown:focus {
        box-shadow: 0 0 0 0.2rem rgba(37, 99, 235, 0.15);
        border-color: rgba(37, 99, 235, 0.35);
    }

    .stats-table {
        background: var(--admin-card-bg);
        border: 1px solid var(--admin-card-border);
        border-radius: 12px;
        overflow: hidden;
        color: var(--admin-sub-text);
    }

    .stats-table th {
        background: color-mix(in srgb, var(--admin-card-bg) 92%, var(--brand-blue));
        border-bottom: 1px solid var(--admin-card-border);
        padding: 1rem;
        font-weight: 600;
        color: var(--admin-main-text);
        font-size: 0.875rem;
    }

    .stats-table td {
        padding: 1rem;
        border-bottom: 1px solid var(--admin-card-border);
    }

    .stats-table tbody tr:last-child td {
        border-bottom: none;
    }

    .stats-table tbody tr:hover {
        background-color: color-mix(in srgb, var(--admin-card-bg) 94%, var(--brand-blue));
    }

    .badge-success {
        background: #d1fae5;
        color: #065f46;
    }

    .badge-warning {
        background: #fef3c7;
        color: #92400e;
    }

    .badge-danger {
        background: #fee2e2;
        color: #991b1b;
    }

    .badge-info {
        background: #dbeafe;
        color: #1e40af;
    }

    .product-badge {
        display: inline-block;
        padding: 0.25rem 0.75rem;
        border-radius: 6px;
        font-size: 0.75rem;
        font-weight: 600;
    }

    .data-card {
        background: var(--admin-card-bg);
        border: 1px solid var(--admin-card-border);
        border-radius: 1.25rem;
        padding: 1.5rem;
        text-align: center;
        transition: all 0.3s ease;
        box-shadow: var(--admin-card-shadow);
        color: var(--admin-sub-text);
    }

    .data-card:hover {
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transform: translateY(-2px);
    }

    .quick-action-btn {
        min-height: 40px;
        padding: 0.6rem 0.8rem;
        border-radius: 10px;
        border: 1px solid rgba(37, 99, 235, 0.16);
        background: var(--admin-card-bg);
        color: var(--admin-main-text) !important;
        font-weight: 600;
        text-align: left;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        gap: 0.75rem;
    }

    .quick-action-btn:hover,
    .quick-action-btn:focus {
        background: color-mix(in srgb, var(--admin-card-bg) 92%, #ffffff);
        color: var(--admin-main-text) !important;
        box-shadow: 0 10px 20px rgba(16, 24, 40, 0.08);
    }

    .data-card-icon {
        font-size: 2.5rem;
        margin-bottom: 1rem;
        color: var(--brand-blue);
    }

    .data-card-value {
        font-size: 1.875rem;
        font-weight: 700;
        color: var(--admin-main-text);
    }

    /* Keep specific dashboard numeric displays using theme text (black/white depending on mode) */
    #totalOverallRevenue,
    #periodRevenueTotal,
    #periodOrdersTotal,
    #totalOverallOrders,
    #totalOverallDenda {
        color: var(--admin-sub-text) !important;
    }

    .data-card-label {
        font-size: 0.875rem;
        color: var(--brand-blue) !important;
        margin-top: 0.5rem;
    }

    .verification-metrics-card {
        padding: 0 !important;
    }

    .verification-metrics-card > h4 {
        padding: 0.7rem 1rem;
        margin: 0 !important;
    }

    .verification-metrics-card .dashboard-metric-row {
        padding: 0.7rem;
        --bs-gutter-x: 0.55rem;
        --bs-gutter-y: 0.55rem;
    }

    .verification-metrics-card .dashboard-metric-row > div:nth-child(n) { order: initial; }

    @media (max-width: 991.98px) {
        .verification-metrics-card .dashboard-metric-row > div:nth-child(n) {
            order: initial;
        }
    }

    .verification-metric-icon {
        width: 2.25rem;
        height: 2.25rem;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 0.75rem;
        background: rgba(37, 99, 235, 0.1);
        color: var(--brand-blue);
        font-size: 1.1rem;
        margin-bottom: 0.5rem;
    }

    .verification-metric-icon.warning {
        background: rgba(245, 158, 11, 0.14);
        color: #b45309;
    }

    .verification-metric-icon.success {
        background: rgba(16, 185, 129, 0.14);
        color: #047857;
    }

    .verification-metric-icon.danger {
        background: rgba(239, 68, 68, 0.14);
        color: #b91c1c;
    }

    /* Compact dashboard overview and order metrics. */
    .dashboard-overview-card {
        padding: 0.35rem !important;
        margin-bottom: 0.75rem !important;
    }

    .dashboard-overview-grid {
        gap: 0.35rem;
    }

    .dashboard-overview-card .dashboard-hero {
        padding: 0.55rem !important;
        margin-bottom: 0 !important;
        border-radius: 0.65rem !important;
    }

    .dashboard-overview-card .dashboard-hero h1 {
        font-size: 1.1rem;
        margin-bottom: 0.15rem;
    }

    .dashboard-overview-card .dashboard-hero p {
        font-size: 0.75rem;
        margin-bottom: 0;
    }

    .dashboard-overview-card .quick-actions-panel {
        padding: 0.15rem;
    }

    .dashboard-overview-card .quick-action-btn {
        min-height: 30px;
        padding: 0.3rem 0.5rem;
        font-size: 0.75rem;
    }

    .verification-metrics-card {
        padding: 0.55rem !important;
        margin-bottom: 0.75rem !important;
    }

    .verification-metrics-card > h5 {
        font-size: 0.95rem;
        margin-bottom: 0.45rem !important;
    }

    .verification-metrics-card .dashboard-metric-row {
        --bs-gutter-x: 0.45rem;
        --bs-gutter-y: 0.45rem;
    }

    .verification-metrics-card .data-card {
        display: grid;
        grid-template-columns: 2.25rem minmax(0, 1fr);
        grid-template-rows: auto auto auto;
        column-gap: 0.65rem;
        align-content: center;
        min-height: 7rem;
        padding: 0.65rem !important;
        border-radius: 0.7rem !important;
        text-align: left !important;
    }

    .verification-metrics-card .verification-metric-icon {
        width: 2.25rem;
        height: 2.25rem;
        font-size: 1.1rem;
        margin-bottom: 0.45rem;
        border-radius: 0.6rem;
        grid-row: 1 / span 3;
        margin: 0;
        align-self: center;
        justify-self: center;
    }

    .verification-metrics-card .data-card-label {
        font-size: 0.875rem;
        line-height: 1.2;
        margin-top: 0.25rem;
        align-self: end;
        overflow-wrap: anywhere;
    }

    .verification-metrics-card .data-card-value {
        font-size: 1.875rem;
        line-height: 1.2;
        align-self: center;
        white-space: nowrap;
    }

    .verification-metrics-card .metric-label {
        font-size: 0.875rem;
        margin-top: 0.25rem;
        align-self: start;
        min-height: 1rem;
    }

    .chart-plot-wrapper {
        width: 100%;
        min-height: 320px;
    }

    #ordersSortSelect {
        background: var(--admin-card-bg);
        border-color: var(--admin-card-border);
        color: var(--admin-sub-text);
    }

    #ordersSortSelect:focus {
        box-shadow: none;
        border-color: var(--brand-blue);
    }

    .btn-manage {
        background: var(--brand-blue);
        color: white;
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-block;
        margin-top: 1rem;
    }

    .btn-manage:hover {
        background: var(--brand-blue-hover);
        color: white;
        text-decoration: none;
    }

    .profile-hero {
        background: var(--admin-hero-bg);
        border-radius: 1.25rem;
        padding: 2rem;
        color: var(--admin-main-text);
        margin-bottom: 0.75rem;
        border: 1px solid var(--admin-card-border);
        box-shadow: var(--admin-card-shadow);
    }

    .profile-card {
        background: var(--admin-card-bg);
        border: 1px solid var(--admin-card-border);
        border-radius: 1.25rem;
        padding: 2rem;
        margin-bottom: 2rem;
        color: var(--admin-sub-text);
        box-shadow: var(--admin-card-shadow);
    }

    .profile-photo {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid #7c3aed;
        margin-bottom: 1rem;
    }

    .profile-name {
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--admin-main-text);
        margin-bottom: 0.5rem;
    }

    .profile-title {
        color: var(--brand-blue);
        font-weight: 600;
        margin-bottom: 1rem;
    }

    .profile-info-row {
        display: flex;
        align-items: flex-start;
        margin-bottom: 1.5rem;
        padding-bottom: 1.5rem;
        border-bottom: 1px solid var(--admin-card-border);
    }

    .profile-info-row:last-child {
        border-bottom: none;
        margin-bottom: 0;
        padding-bottom: 0;
    }

    .profile-info-icon {
        color: var(--brand-blue);
        font-size: 1.25rem;
        margin-right: 1rem;
        min-width: 30px;
    }

    .profile-info-label {
        font-size: 0.875rem;
        color: color-mix(in srgb, var(--admin-sub-text) 70%, transparent);
        margin-bottom: 0.25rem;
    }

    .profile-info-value {
        font-weight: 600;
        color: var(--admin-sub-text);
    }

    .location-progress {
        margin-bottom: 1.5rem;
    }

    .location-progress-label {
        display: flex;
        justify-content: space-between;
        font-size: 0.875rem;
        margin-bottom: 0.5rem;
        font-weight: 600;
    }

    .progress {
        height: 8px;
        border-radius: 4px;
        background: #e5e7eb;
    }

    .progress-bar {
        border-radius: 4px;
        background: var(--brand-blue);
    }

    @media (max-width: 768px) {
        .dashboard-overview-card .dashboard-hero {
            padding: 0.55rem !important;
        }

        .verification-metrics-card .data-card {
            padding: 0.55rem !important;
        }

        .dashboard-hero h1 {
            font-size: 1.5rem;
        }

        .metric-value {
            font-size: 1.5rem;
        }

        .stats-table th,
        .stats-table td {
            padding: 0.75rem 0.5rem;
            font-size: 0.875rem;
        }

        #pageWrapper {
            margin-left: 0;
        }

        .dashboard-content {
            padding-left: 0.25rem;
            padding-right: 0.25rem;
        }

        .app-sidebar {
            width: min(280px, calc(100vw - 1rem));
            transform: translateX(-100%);
            box-shadow: 0 12px 40px rgba(2, 6, 23, 0.18);
        }

        .app-sidebar.open {
            width: min(280px, calc(100vw - 1rem));
            transform: translateX(0);
        }

        body.admin-page .app-sidebar:not(.open) {
            width: min(280px, calc(100vw - 1rem));
            transform: translateX(-100%);
        }

        .app-sidebar .card-body {
            padding: 0.7rem 0.85rem !important;
        }

        .app-sidebar .d-grid {
            gap: 0.5rem !important;
        }

        .app-sidebar .menu-icon {
            font-size: 1.2rem;
        }

        body.admin-page:has(#layoutSidebarToggle) .navbar-brand {
            margin-left: 3rem;
        }

        #layoutSidebarToggle {
            width: 38px !important;
            height: 38px !important;
            left: 0.5rem !important;
            padding: 0 !important;
            font-size: 0.95rem;
        }

        .dashboard-hero,
        .chart-container,
        .data-card,
        .admin-surface-card {
            border-radius: 0.9rem !important;
        }

        .dashboard-hero,
        .profile-hero,
        .chart-container {
            padding: 1rem;
        }

        .hero-profile-summary {
            gap: 0.7rem;
            padding: 0.75rem;
        }

        .hero-profile-photo {
            width: 52px;
            height: 52px;
        }

        .quick-action-btn {
            min-height: 42px;
            padding: 0.6rem 0.75rem;
            font-size: 0.875rem;
        }

        .dashboard-overview-card {
            padding: 0.75rem;
        }

        .dashboard-overview-grid {
            grid-template-columns: 1fr;
            gap: 0.75rem;
        }

        .quick-actions-panel {
            padding: 0;
        }

        .dashboard-metric-row .data-card {
            padding: 0.65rem !important;
        }

        .dashboard-metric-row .data-card-value {
            font-size: 1.25rem;
        }

        #ordersSortSelect {
            width: 100% !important;
        }
    }

    [data-bs-theme="dark"] .dashboard-hero,
    [data-bs-theme="dark"] .profile-hero {
        box-shadow: 0 18px 40px -18px rgba(0, 0, 0, 0.55);
    }

    [data-bs-theme="dark"] .hero-profile-summary {
        background: rgba(255, 255, 255, 0.08);
    }
@endsection

@section('content')
<div id="pageWrapper">
    <section class="py-4">
        <div class="container-fluid dashboard-content">
            <!-- Hero Section -->
        <div class="chart-container admin-surface-card verification-metrics-card mb-4">
            <h4 class="fw-bold mb-0 admin-title-blue">Pesanan</h4>
            <div class="row dashboard-metric-row g-2 g-md-3">
                <div class="col-12 col-sm-6 col-xl">
                    <div class="data-card admin-surface-card h-100 p-3 text-start">
                        <span class="verification-metric-icon warning" aria-hidden="true"><i class="bi bi-hourglass-split"></i></span>
                        <div class="data-card-label fw-bold">Pesanan Perlu Diverifikasi</div>
                        <div class="data-card-value">{{ $pesanan_verifikasi_count ?? 0 }}</div>
                        <div class="metric-label">Status proses dan revisi</div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl">
                    <div class="data-card admin-surface-card h-100 p-3 text-start">
                        <span class="verification-metric-icon" aria-hidden="true"><i class="bi bi-arrow-repeat"></i></span>
                        <div class="data-card-label fw-bold">Pengembalian Perlu Diverifikasi</div>
                        <div class="data-card-value">{{ $pengembalian_verifikasi_count ?? 0 }}</div>
                        <div class="metric-label">Status proses</div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl">
                    <div class="data-card admin-surface-card h-100 p-3 text-start">
                        <span class="verification-metric-icon" aria-hidden="true"><i class="bi bi-bag-check"></i></span>
                        <div class="data-card-label fw-bold">Jumlah Seluruh Pesanan</div>
                        <div class="data-card-value">{{ $pesanan_count ?? 0 }}</div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl">
                    <div class="data-card admin-surface-card h-100 p-3 text-start">
                        <span class="verification-metric-icon" aria-hidden="true"><i class="bi bi-arrow-counterclockwise"></i></span>
                        <div class="data-card-label fw-bold">Jumlah Seluruh Pengembalian</div>
                        <div class="data-card-value">{{ $pengembalian_count ?? 0 }}</div>
                    </div>
                </div>
            </div>
            <h4 class="fw-bold mb-0 admin-title-blue mt-3">Pendapatan</h4>
            <div class="row dashboard-metric-row g-2 g-md-3">
                <div class="col-12 col-sm-6 col-xl">
                    <div class="data-card admin-surface-card h-100 p-3 text-start">
                        <span class="verification-metric-icon success" aria-hidden="true"><i class="bi bi-cash-stack"></i></span>
                        <div class="data-card-label fw-bold">Jumlah Pendapatan Harga</div>
                        <div class="data-card-value">Rp {{ number_format($total_revenue ?? 0, 0, ',', '.') }}</div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl">
                    <div class="data-card admin-surface-card h-100 p-3 text-start">
                        <span class="verification-metric-icon warning" aria-hidden="true"><i class="bi bi-receipt"></i></span>
                        <div class="data-card-label fw-bold">Jumlah Pendapatan Denda</div>
                        <div class="data-card-value">Rp {{ number_format($total_denda ?? 0, 0, ',', '.') }}</div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl">
                    <div class="data-card admin-surface-card h-100 p-3 text-start">
                        <span class="verification-metric-icon" aria-hidden="true"><i class="bi bi-wallet2"></i></span>
                        <div class="data-card-label fw-bold">Jumlah Harga + Denda</div>
                        <div class="data-card-value">Rp {{ number_format(($total_revenue ?? 0) + ($total_denda ?? 0), 0, ',', '.') }}</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Revenue Section -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="chart-container admin-surface-card p-0 overflow-hidden">
                    <div class="d-flex flex-column gap-3 px-4 py-3">
                        <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between gap-3">
                            <div>
                                <h4 id="revenueChartTitle" class="fw-bold mb-0 admin-title-blue" style="color: var(--brand-blue) !important;">Grafik Pendapatan Minggu Ini</h4>
                                <div class="chart-subtitle">Tampilkan grafik harga sewa dan jumlah pesanan berdasarkan periode terpilih.</div>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <label for="periodDropdown" class="visually-hidden">Pilih periode</label>
                                <select id="periodDropdown" class="form-select form-select-sm w-auto">
                                    <option value="day">Hari Ini</option>
                                    <option value="week" selected>Minggu Ini</option>
                                    <option value="month">Bulan Ini</option>
                                    <option value="year">Tahun Ini</option>
                                </select>
                            </div>
                        </div>
                        <div class="row row-cols-2 g-2 g-sm-3">
                            <div class="col">
                                <div class="data-card admin-surface-card h-100 p-3 text-start">
                                    <div class="data-card-label">Pendapatan Harga</div>
                                    <div class="data-card-value" id="periodRevenueTotal">Rp {{ number_format($total_revenue ?? 0, 0, ',', '.') }}</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="data-card admin-surface-card h-100 p-3 text-start">
                                    <div class="data-card-label">Jumlah Pesanan</div>
                                    <div class="data-card-value" id="periodOrdersTotal">{{ $pesanan_count ?? 0 }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-3 px-md-4 py-4">
                        <div class="row g-4">
                            <div class="col-12 col-lg-6">
                                <div class="admin-surface-card p-3 h-100">
                                    <h6 class="fw-semibold mb-3 admin-title-blue" style="color: var(--brand-blue) !important;">Grafik Harga</h6>
                                    <div class="chart-plot-wrapper" style="min-height: 320px;">
                                        <canvas id="revenueChart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="admin-surface-card p-3 h-100">
                                    <h6 class="fw-semibold mb-3 admin-title-blue" style="color: var(--brand-blue) !important;">Grafik Pesanan</h6>
                                    <div class="chart-plot-wrapper" style="min-height: 320px;">
                                        <canvas id="ordersChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div> <!-- End pageWrapper -->

<!-- Sidebar Navigation -->
<aside id="appSidebar" class="app-sidebar">
    <div class="d-flex align-items-center justify-content-between px-3 pt-3">
        <h5 class="mb-0">Kelola Data</h5>
    </div>
    <div class="p-3">
        <div class="d-grid gap-3">
            <a href="{{ route('admin.data-aturan') }}" aria-label="Data Aturan" class="card menu-card shadow-sm border-0 rounded-xl text-decoration-none">
                <div class="card-body p-3 d-flex align-items-center">
                    <div class="menu-icon me-3 mb-0"><i class="bi bi-file-earmark-text"></i></div>
                    <div class="flex-grow-1">
                        <h6 class="fw-semibold mb-0">Data Aturan</h6>
                    </div>
                </div>
            </a>

            <a href="{{ route('admin.data-tanggal') }}" aria-label="Data Tanggal" class="card menu-card shadow-sm border-0 rounded-xl text-decoration-none">
                <div class="card-body p-3 d-flex align-items-center">
                    <div class="menu-icon me-3 mb-0"><i class="bi bi-calendar2-week"></i></div>
                    <div class="flex-grow-1">
                        <h6 class="fw-semibold mb-0">Data Tanggal</h6>
                    </div>
                </div>
            </a>

            <a href="{{ route('admin.data-pengguna') }}" aria-label="Data Pengguna" class="card menu-card shadow-sm border-0 rounded-xl text-decoration-none">
                <div class="card-body p-3 d-flex align-items-center">
                    <div class="menu-icon me-3 mb-0"><i class="bi bi-people"></i></div>
                    <div class="flex-grow-1">
                        <h6 class="fw-semibold mb-0">Data Pengguna</h6>
                        <small class="text-muted">Total: {{ $users_count }}</small>
                    </div>
                </div>
            </a>
            
            <a href="{{ route('admin.data-katalog') }}" aria-label="Data Katalog" class="card menu-card shadow-sm border-0 rounded-xl text-decoration-none">
                <div class="card-body p-3 d-flex align-items-center">
                    <div class="menu-icon me-3 mb-0"><i class="bi bi-collection"></i></div>
                    <div class="flex-grow-1">
                        <h6 class="fw-semibold mb-0">Data Katalog</h6>
                        <small class="text-muted">Total: {{ $katalog_count }}</small>
                    </div>
                </div>
            </a>

            <a href="{{ route('admin.data-kostum') }}" aria-label="Data Kostum" class="card menu-card shadow-sm border-0 rounded-xl text-decoration-none">
                <div class="card-body p-3 d-flex align-items-center">
                    <div class="menu-icon me-3 mb-0"><i class="bi bi-box"></i></div>
                    <div class="flex-grow-1">
                        <h6 class="fw-semibold mb-0">Data Kostum</h6>
                        <small class="text-muted">Total: {{ $kostum_count }}</small>
                    </div>
                </div>
            </a>

            <a href="{{ route('admin.data-pesanan') }}" aria-label="Data Pesanan & Pembayaran" class="card menu-card shadow-sm border-0 rounded-xl text-decoration-none">
                <div class="card-body p-3 d-flex align-items-center">
                    <div class="menu-icon me-3 mb-0"><i class="bi bi-bag-check"></i></div>
                    <div class="flex-grow-1">
                        <h6 class="fw-semibold mb-0">Data Pesanan & Pembayaran</h6>
                        <small class="text-muted">Total: {{ $pesanan_count }}</small>
                    </div>
                </div>
            </a>

            <a href="{{ route('admin.data-pengembalian') }}" aria-label="Data Pengembalian" class="card menu-card shadow-sm border-0 rounded-xl text-decoration-none">
                <div class="card-body p-3 d-flex align-items-center">
                    <div class="menu-icon me-3 mb-0"><i class="bi bi-arrow-counterclockwise"></i></div>
                    <div class="flex-grow-1">
                        <h6 class="fw-semibold mb-0">Data Pengembalian</h6>
                        <small class="text-muted">Total: {{ $pengembalian_count }}</small>
                    </div>
                </div>
            </a>

            <a href="{{ route('admin.data-denda') }}" aria-label="Data Denda & Kerusakan" class="card menu-card shadow-sm border-0 rounded-xl text-decoration-none">
                <div class="card-body p-3 d-flex align-items-center">
                    <div class="menu-icon me-3 mb-0"><i class="bi bi-exclamation-triangle"></i></div>
                    <div class="flex-grow-1">
                        <h6 class="fw-semibold mb-0">Data Denda & Kerusakan</h6>
                        <small class="text-muted">Total: {{ $denda_count }}</small>
                    </div>
                </div>
            </a>

            <a href="{{ route('admin.data-ulasan') }}" aria-label="Data Ulasan" class="card menu-card shadow-sm border-0 rounded-xl text-decoration-none">
                <div class="card-body p-3 d-flex align-items-center">
                    <div class="menu-icon me-3 mb-0"><i class="bi bi-chat-square-text"></i></div>
                    <div class="flex-grow-1">
                        <h6 class="fw-semibold mb-0">Data Ulasan</h6>
                        <small class="text-muted">Total: {{ $ulasan_count }}</small>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="app-sidebar-footer">
            <a href="{{ route('admin.profile.settings') }}" aria-label="Profil Admin" class="card menu-card shadow-sm border-0 rounded-xl text-decoration-none mb-2">
            <div class="card-body p-3 d-flex align-items-center">
                <div class="menu-icon me-3 mb-0"><i class="bi bi-person"></i></div>
                <div class="flex-grow-1">
                    <h6 class="fw-semibold mb-0">Profil Admin</h6>
                </div>
            </div>
        </a>
        <a href="{{ route('admin.logout') }}" class="sidebar-logout text-decoration-none" aria-label="Logout">
            <i class="bi bi-box-arrow-right" aria-hidden="true"></i>
            <span>Logout</span>
        </a>
    </div>
</aside>

<!-- Sidebar Styles -->
<style>
    .app-sidebar {
        position: fixed;
        left: 0;
        top: var(--nav-height, 72px);
        height: calc(100vh - var(--nav-height, 72px));
        width: 56px; /* collapsed by default */
        max-width: 85vw;
        display: flex;
        flex-direction: column;
        background: var(--admin-card-bg);
        border-right: 1px solid var(--admin-card-border);
        transition: width 0.18s ease, box-shadow 0.18s ease, background-color 0.16s ease, border-color 0.16s ease;
        z-index: 1040;
        overflow-y: hidden;
        overflow-x: hidden;
        padding-bottom: 0;
    }
    .app-sidebar.open {
        width: 280px; /* expands when open */
        box-shadow: 0 12px 40px rgba(2,6,23,0.12);
    }

    /* Reserve space for collapsed sidebar by default so page is not covered */
    #pageWrapper {
        transition: margin-left 0.18s ease;
        margin-left: 56px;
    }
    #pageWrapper.shifted {
        margin-left: 320px;
        transition: margin-left 0.18s ease;
    }

    .app-sidebar .menu-card { 
        display: block; 
        width: 100%; 
        cursor: pointer;
        text-decoration: none !important;
        background: var(--admin-card-bg);
        border: 1px solid var(--admin-card-border) !important;
        transition: background-color 0.16s ease, border-color 0.16s ease, box-shadow 0.16s ease, color 0.16s ease;
    }
    .app-sidebar .menu-card:hover,
    .app-sidebar .menu-card:focus-visible {
        transform: none;
        background: color-mix(in srgb, var(--admin-card-bg) 92%, #2563eb);
        box-shadow: 0 4px 12px rgba(15, 23, 42, 0.12) !important;
    }
    .app-sidebar .card-body { 
        padding: 1rem !important; 
    }

    .app-sidebar > .p-3 {
        flex: 1 1 auto;
        min-height: 0;
        overflow-y: auto;
    }

    .app-sidebar-footer {
        flex: 0 0 auto;
        padding: 0.75rem;
        border-top: 1px solid var(--admin-card-border);
        background: var(--admin-card-bg);
    }

    .app-sidebar-footer .sidebar-logout {
        display: flex !important;
        align-items: center;
        justify-content: flex-start;
        gap: 0.75rem;
        width: 100%;
        min-height: 2.5rem;
        padding: 0.55rem 0.75rem;
        border: 1px solid rgba(220, 38, 38, 0.45);
        border-radius: 0.5rem;
        background: transparent;
        color: #dc2626;
        font-weight: 600;
        text-align: left;
    }

    .app-sidebar-footer .sidebar-logout:hover,
    .app-sidebar-footer .sidebar-logout:focus-visible {
        background: rgba(220, 38, 38, 0.1);
        color: #b91c1c;
    }
    .app-sidebar .menu-icon {
        font-size: 1.5rem;
        color: var(--bs-primary);
        margin-bottom: 0 !important;
    }
.app-sidebar h5 {
    }

    .app-sidebar .menu-card h6 {
        color: #141414 !important;
    }
    [data-bs-theme="dark"] .app-sidebar .menu-card h6 {
        color: #ffffff !important;
    }
    .app-sidebar .menu-card small {
        color: #141414 !important;
        opacity: 0.9;
    }
    [data-bs-theme="dark"] .app-sidebar .menu-card small {
        color: #ffffff !important;
    }

    /* fallback untuk elemen lain di sidebar */
    .app-sidebar small {
        color: var(--admin-sub-text);
        opacity: 0.8;
    }


    @media (max-width: 768px) {
        body.admin-page #pageWrapper {
            width: 100%;
            margin-left: 0 !important;
        }

        #pageWrapper.shifted {
            margin-left: 0 !important;
        }

        .dashboard-content {
            width: 100%;
            max-width: none;
            margin-left: auto;
            margin-right: auto;
        }
    }

    [data-bs-theme="dark"] .app-sidebar {
        background: var(--admin-card-bg);
        border-right: 1px solid var(--admin-card-border);
    }

    [data-bs-theme="dark"] .app-sidebar .menu-card {
        background: var(--admin-card-bg);
        border-color: var(--admin-card-border) !important;
    }

    [data-bs-theme="dark"] .app-sidebar .menu-card:hover {
        background: color-mix(in srgb, var(--admin-card-bg) 88%, #ffffff);
    }

    [data-bs-theme="dark"] .app-sidebar h6 {
        color: var(--admin-main-text);
    }

    [data-bs-theme="dark"] .app-sidebar small {
        color: var(--admin-sub-text);
    }

    /* Collapsed / icon-only sidebar: hide labels and totals, keep icons visible */
    .app-sidebar:not(.open) {
        width: 56px;
        transform: translateX(0);
        overflow-x: hidden;
        overflow-y: hidden;
        scrollbar-width: none;
    }

    .app-sidebar:not(.open)::-webkit-scrollbar {
        width: 0;
        height: 0;
    }

    .app-sidebar:not(.open) .menu-card .card-body {
        padding-left: 0.5rem !important;
        padding-right: 0.5rem !important;
        justify-content: center;
    }

    .app-sidebar:not(.open) .menu-icon {
        margin: 0 auto !important;
        display: block;
        font-size: 1.35rem;
    }

    .app-sidebar:not(.open) .menu-card .flex-grow-1,
    .app-sidebar:not(.open) .menu-card h6,
    .app-sidebar:not(.open) .menu-card small {
        display: none !important;
    }

    /* More refined collapsed appearance: center icons vertically, remove card chrome */
    .app-sidebar:not(.open) > .d-flex { /* hide the header/title when collapsed */
        display: none !important;
    }

    .app-sidebar:not(.open) .app-sidebar-footer {
        padding: 0.35rem 0;
    }

    .app-sidebar:not(.open) > .p-3 {
        overflow: hidden;
    }

    .app-sidebar:not(.open) .app-sidebar-footer .menu-card .card-body,
    .app-sidebar:not(.open) .app-sidebar-footer .sidebar-logout {
        width: 48px;
        height: 48px;
        margin: 0 auto;
        padding: 0.25rem !important;
        justify-content: center;
    }

    .app-sidebar:not(.open) .app-sidebar-footer .flex-grow-1,
    .app-sidebar:not(.open) .app-sidebar-footer .sidebar-logout span {
        display: none !important;
    }

    .app-sidebar:not(.open) .p-3 {
        padding: 0 !important;
    }

    .app-sidebar:not(.open) .d-grid {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
        align-items: center;
        padding: 0.75rem 0;
    }

    .app-sidebar:not(.open) .menu-card {
        background: transparent !important;
        box-shadow: none !important;
        border: none !important;
        width: auto;
    }

    .app-sidebar:not(.open) .menu-card .card-body {
        padding: 0.25rem !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        width: 48px;
        height: 48px;
    }

    .app-sidebar:not(.open) .menu-card:hover,
    .app-sidebar:not(.open) .menu-card:focus-visible {
        transform: none !important;
        box-shadow: none !important;
        background: rgba(37, 99, 235, 0.12) !important;
        border-radius: 0.65rem;
    }

    .app-sidebar:not(.open) .menu-icon {
        color: var(--brand-blue) !important;
    }

    [data-bs-theme="dark"] .app-sidebar:not(.open) .menu-card:hover,
    [data-bs-theme="dark"] .app-sidebar:not(.open) .menu-card:focus-visible {
        background: rgba(96, 165, 250, 0.18) !important;
    }

    /* Keep admin theme changes quick without affecting user pages. */
    body.admin-page .app-sidebar,
    body.admin-page .admin-surface-card,
    body.admin-page .metric-card,
    body.admin-page .site-footer {
        transition-duration: 0.16s;
    }
</style>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts@3.45.0/dist/apexcharts.min.js"></script>
<script>
    const statsEndpoint = @json(route('admin.stats'));

    // Initialize Charts
    document.addEventListener('DOMContentLoaded', function() {
        initializeCharts();
        initializePeriodFilters();
        fetchDashboardStats('week');
    });

    let latestDashboardData = null;
    let revenueChartInstance = null;
    let ordersChartInstance = null;

    function initializeCharts() {
        if (revenueChartInstance && ordersChartInstance) return;

        const revCanvas = document.getElementById('revenueChart');
        const ordersCanvas = document.getElementById('ordersChart');
        if (!revCanvas || !ordersCanvas) {
            console.warn('initializeCharts: missing revenueChart or ordersChart canvas');
            return;
        }

        const createCharts = () => {
            const revenueCtx = revCanvas.getContext('2d');
            const ordersCtx = ordersCanvas.getContext('2d');

            revenueChartInstance = new Chart(revenueCtx, {
                type: 'line',
                data: {
                    labels: [],
                    datasets: [
                        {
                            label: 'Jumlah Pendapatan',
                            data: [],
                            borderColor: '#7c3aed',
                            backgroundColor: 'rgba(124, 58, 237, 0.15)',
                            tension: 0.35,
                            fill: true,
                            pointRadius: 4,
                            pointBackgroundColor: '#7c3aed',
                            pointBorderColor: '#fff',
                            pointBorderWidth: 2,
                            yAxisID: 'yRevenue'
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    interaction: { mode: 'index', intersect: false },
                    plugins: { legend: { display: false } },
                    scales: {
                        yRevenue: {
                            type: 'linear',
                            position: 'left',
                            beginAtZero: true,
                            ticks: { callback: function(value) { try { return 'Rp ' + Number(value).toLocaleString('id-ID'); } catch (e) { return value; } } }
                        }
                    }
                }
            });

            ordersChartInstance = new Chart(ordersCtx, {
                type: 'line',
                data: {
                    labels: [],
                    datasets: [
                        {
                            label: 'Jumlah Pesanan',
                            data: [],
                            borderColor: '#10b981',
                            backgroundColor: 'rgba(16, 185, 129, 0.15)',
                            tension: 0.35,
                            fill: true,
                            pointRadius: 4,
                            pointBackgroundColor: '#10b981',
                            pointBorderColor: '#fff',
                            pointBorderWidth: 2,
                            borderWidth: 1
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    interaction: { mode: 'index', intersect: false },
                    plugins: { legend: { display: false } },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: { precision: 0 }
                        }
                    }
                }
            });

            console.log('initializeCharts: charts created');
            if (latestDashboardData && latestDashboardData.labels && latestDashboardData.datasets) {
                try {
                    revenueChartInstance.data.labels = latestDashboardData.labels;
                    revenueChartInstance.data.datasets[0].data = latestDashboardData.datasets.revenue || [];
                    revenueChartInstance.update();

                    ordersChartInstance.data.labels = latestDashboardData.labels;
                    ordersChartInstance.data.datasets[0].data = latestDashboardData.datasets.orders || [];
                    ordersChartInstance.update();
                } catch (e) {
                    console.error('initializeCharts: failed to apply latestDashboardData', e);
                }
            }
        };

        if (typeof Chart === 'undefined') {
            console.warn('initializeCharts: Chart not found, loading dynamically');
            const s = document.createElement('script');
            s.src = 'https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.js';
            s.onload = () => { console.log('Chart.js loaded dynamically'); createCharts(); };
            s.onerror = () => console.error('Failed to load Chart.js');
            document.head.appendChild(s);
        } else {
            createCharts();
        }
    }

    function updateRevenueTitle(period = 'week') {
        const titleEl = document.getElementById('revenueChartTitle');
        if (!titleEl) return;

        const titles = {
            day: 'Grafik Pendapatan Hari Ini',
            week: 'Grafik Pendapatan Minggu Ini',
            month: 'Grafik Pendapatan Bulan Ini',
            year: 'Grafik Pendapatan Tahun Ini'
        };

        titleEl.textContent = titles[period] || titles.week;
    }

    function initializePeriodFilters() {
        const periodDropdown = document.getElementById('periodDropdown');
        if (periodDropdown) {
            periodDropdown.addEventListener('change', function() {
                updateRevenueTitle(this.value || 'week');
                fetchDashboardStats(this.value || 'week');
            });
            updateRevenueTitle(periodDropdown.value || 'week');
        }
    }

    function fetchDashboardStats(period = 'week') {
        updateRevenueTitle(period);
        const statsUrl = new URL(statsEndpoint, window.location.origin);
        statsUrl.searchParams.set('period', period);

        fetch(statsUrl.toString(), {
            headers: {
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            credentials: 'same-origin',
            cache: 'no-store'
        })
            .then(async (response) => {
                console.log('fetchDashboardStats: http', response.status, response.statusText);
                try {
                    return await response.json();
                } catch (e) {
                    const txt = await response.text();
                    console.warn('fetchDashboardStats: invalid JSON response', txt);
                    return {};
                }
            })
            .then(data => {
                console.log('fetchDashboardStats: parsed data', data);
                // keep latest response to apply once chart exists
                latestDashboardData = data || null;
                // update totals safely (elements may have been removed)
                if (data.totals && data.totals.orders !== undefined) {
                    const periodOrdersEl = document.getElementById('periodOrdersTotal');
                    if (periodOrdersEl) periodOrdersEl.textContent = data.totals.orders;
                }
                if (data.totals && data.totals.revenue !== undefined) {
                    const periodRevenueEl = document.getElementById('periodRevenueTotal');
                    if (periodRevenueEl) periodRevenueEl.textContent = 'Rp ' + Number(data.totals.revenue).toLocaleString('id-ID');
                }

                if (revenueChartInstance && ordersChartInstance && data.labels && data.datasets) {
                    revenueChartInstance.data.labels = data.labels;
                    revenueChartInstance.data.datasets[0].data = data.datasets.revenue || [];
                    revenueChartInstance.update();

                    ordersChartInstance.data.labels = data.labels;
                    ordersChartInstance.data.datasets[0].data = data.datasets.orders || [];
                    ordersChartInstance.update();
                }

            })
            .catch(error => {
                console.log('Stats fetch error:', error);
            });
    }

</script>
@endpush

@endsection
