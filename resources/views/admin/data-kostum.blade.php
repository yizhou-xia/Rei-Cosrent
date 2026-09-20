@extends('layouts.main')

@section('title', 'Data Kostum - Rei Cosrent')

@section('styles')
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

/* === Kostum Filter (samakan dengan warna card-body) === */
.rc-kostum-card {
    --rc-kostum-tone: rgba(37, 99, 235, 0.06);
    --rc-kostum-border: rgba(37, 99, 235, 0.12);
    --rc-kostum-border-strong: rgba(37, 99, 235, 0.25);
    --rc-kostum-text: var(--bs-body-color);
}

.rc-kostum-card .rc-kostum-filter-control,
.rc-kostum-card .rc-kostum-filter-control.form-select {
    background-color: rgba(255, 255, 255, 0.35);
    border: 1px solid var(--rc-kostum-border);
    color: var(--rc-kostum-text);
    box-shadow: none;
}

/* select juga untuk default bootstrap focus-ring */
.rc-kostum-card .form-select:focus,
.rc-kostum-card .form-control:focus,
.rc-kostum-card .rc-kostum-filter-control:focus {
    border-color: var(--rc-kostum-border-strong);
    background-color: rgba(255, 255, 255, 0.55);
    box-shadow: 0 0 0 0.2rem rgba(37, 99, 235, 0.15);
    color: var(--rc-kostum-text);
}

.rc-kostum-card .rc-kostum-filter-control:hover {
    border-color: rgba(37, 99, 235, 0.20);
}

.rc-kostum-card .rc-kostum-filter-control::placeholder {
    color: rgba(108, 122, 137, 0.9);
}

/* Samakan tombol Cari dengan tone card */
.rc-kostum-card .btn-rc-kostum {
    background-color: rgba(37, 99, 235, 0.10) !important;
    border: 1px solid rgba(37, 99, 235, 0.18) !important;
    color: var(--rc-kostum-text) !important;
}
.rc-kostum-card .btn-rc-kostum:hover {
    background-color: rgba(37, 99, 235, 0.16) !important;
    border-color: rgba(37, 99, 235, 0.28) !important;
}

.rc-kostum-card .btn-rc-kostum:focus {
    box-shadow: 0 0 0 0.2rem rgba(37, 99, 235, 0.15) !important;
}

/* Dark theme */
[data-bs-theme="dark"] .rc-kostum-card .rc-kostum-filter-control,
[data-bs-theme="dark"] .rc-kostum-card .rc-kostum-filter-control.form-select {
    background-color: rgba(2, 6, 23, 0.25);
    color: var(--bs-body-color);
    border-color: rgba(37, 99, 235, 0.25);
}

[data-bs-theme="dark"] .rc-kostum-card .rc-kostum-filter-control:focus,
[data-bs-theme="dark"] .rc-kostum-card .form-control:focus,
[data-bs-theme="dark"] .rc-kostum-card .form-select:focus {
    background-color: rgba(2, 6, 23, 0.35);
    border-color: rgba(37, 99, 235, 0.45);
    box-shadow: 0 0 0 0.2rem rgba(37, 99, 235, 0.25);
}

[data-bs-theme="dark"] .rc-kostum-card .btn-rc-kostum {
    background-color: rgba(37, 99, 235, 0.16) !important;
    border: 1px solid rgba(37, 99, 235, 0.28) !important;
    color: var(--bs-body-color) !important;
}

[data-bs-theme="dark"] .rc-kostum-card .btn-rc-kostum:hover {
    background-color: rgba(37, 99, 235, 0.22) !important;
    border-color: rgba(37, 99, 235, 0.38) !important;
}

/* === table styles existing === */
table th {
    background-color: var(--bs-primary);
    color: white;
    text-align: center;
    font-size: 1.0rem;
}

table td {
    font-size: 0.95rem;
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
}

.kostum-status-form {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 0.35rem;
    min-height: 28px;
    padding: 0.2rem 0.3rem;
    border: 1px solid rgba(148, 163, 184, 0.24);
    border-radius: 999px;
    background: rgba(148, 163, 184, 0.06);
}

.action-buttons .kostum-status-form {
    display: flex;
}

.kostum-status-caption {
    min-width: 0;
    overflow: hidden;
    color: var(--bs-body-color);
    font-size: 0.65rem;
    font-weight: 600;
    line-height: 1.1;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.kostum-status-label {
    min-width: 24px;
    color: var(--bs-body-color);
    font-size: 0.65rem;
    font-weight: 700;
    text-align: left;
}

.kostum-status-switch {
    position: relative;
    display: inline-block;
    width: 28px;
    height: 16px;
    flex: 0 0 auto;
}

.kostum-status-switch input {
    width: 0;
    height: 0;
    opacity: 0;
}

.kostum-status-slider {
    position: absolute;
    inset: 0;
    cursor: pointer;
    border-radius: 999px;
    background: #94a3b8;
    transition: background-color 0.2s ease;
}

.kostum-status-slider::before {
    content: '';
    position: absolute;
    width: 12px;
    height: 12px;
    top: 2px;
    left: 2px;
    border-radius: 50%;
    background: #fff;
    box-shadow: 0 1px 3px rgba(15, 23, 42, 0.25);
    transition: transform 0.2s ease;
}

.kostum-status-switch input:checked + .kostum-status-slider {
    background: #198754;
}

.kostum-status-switch input:checked + .kostum-status-slider::before {
    transform: translateX(12px);
}

.kostum-status-switch input:focus-visible + .kostum-status-slider {
    outline: 3px solid rgba(13, 110, 253, 0.25);
    outline-offset: 2px;
}

[data-bs-theme="dark"] .kostum-status-form {
    border-color: rgba(148, 163, 184, 0.32);
    background: rgba(148, 163, 184, 0.1);
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

    .table img {
        max-width: 80px;
        height: auto;
    }

    .kostum-thumb {
        cursor: zoom-in;
        transition: transform .12s ease;
    }

    .kostum-thumb:hover {
        transform: scale(1.02);
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
    .modal-content .modal-body .form-floating > .form-control {
        background-color: #ffffff !important;
        color: var(--bs-body-color) !important;
    }

    .modal-content .modal-body .admin-gender-radio-group {
        display: flex;
        flex-wrap: wrap;
        gap: 0.9rem;
        margin-top: 0.25rem;
    }

    .modal-content .modal-body .admin-gender-radio-group .form-check {
        display: flex;
        align-items: center;
        gap: 0.6rem;
        padding: 0.38rem 0.7rem;
        border-radius: 999px;
        margin: 0;
        transition: background-color 0.15s ease, border-color 0.15s ease;
    }

    .modal-content .modal-body .admin-gender-radio-group .form-check:hover {
        background: rgba(13, 110, 253, 0.04);
    }

    .modal-content .modal-body .admin-gender-radio-group .form-check-input[type="radio"] {
        width: 1.1rem;
        height: 1.1rem;
        margin-top: 0;
        accent-color: #0d6efd;
        border: 1px solid rgba(148, 163, 184, 0.7);
        box-shadow: none;
        flex-shrink: 0;
    }

    .modal-content .modal-body .admin-gender-radio-group .form-check-input[type="radio"]:focus {
        box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.15);
    }

    .modal-content .modal-body .admin-gender-radio-group .form-check-label {
        cursor: pointer;
        color: var(--bs-body-color);
        font-weight: 500;
        margin-bottom: 0;
        line-height: 1.3;
    }

    [data-bs-theme="dark"] .modal-content .modal-body .admin-gender-radio-group .form-check:hover {
        background: rgba(96, 165, 250, 0.08);
    }

    [data-bs-theme="dark"] .modal-content .modal-body .admin-gender-radio-group .form-check-input[type="radio"] {
        accent-color: #60a5fa;
        border-color: rgba(148, 163, 184, 0.8);
    }
    .kostum-upload-grid {
        display: grid;
        grid-template-columns: repeat(5, minmax(0, 1fr));
        gap: 0.75rem;
    }

    .kostum-upload-card {
        display: flex;
        flex-direction: column;
        gap: 0.55rem;
        width: 100%;
        padding: 0.75rem 0.6rem;
        border: 1px solid rgba(148, 163, 184, 0.28);
        border-radius: 0.9rem;
        background: rgba(248, 250, 252, 0.9);
        color: var(--bs-body-color);
        margin: 0 auto;
    }

    .kostum-upload-preview-wrap {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        max-width: 150px;
        aspect-ratio: 1 / 1;
        margin: 0 auto;
        border-radius: 0.9rem;
        border: 1px dashed rgba(148, 163, 184, 0.44);
        background: rgba(255, 255, 255, 0.7);
        overflow: hidden;
    }

    .kostum-upload-preview {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .kostum-upload-empty {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100%;
        padding: 0.5rem;
        text-align: center;
        color: rgba(15, 23, 42, 0.7);
        font-weight: 500;
        font-size: 0.75rem;
        line-height: 1.3;
    }

    .kostum-upload-card .btn-outline-secondary {
        border-radius: 0.75rem;
        font-weight: 600;
        font-size: 0.75rem;
        padding: 0.5rem 0.45rem;
    }

    .kostum-upload-card small {
        font-size: 0.7rem;
        line-height: 1.3;
    }

    [data-bs-theme="dark"] .kostum-upload-card {
        background: rgba(15, 23, 42, 0.7);
        border-color: rgba(148, 163, 184, 0.25);
    }

    [data-bs-theme="dark"] .kostum-upload-preview-wrap {
        background: rgba(15, 23, 42, 0.75);
        border-color: rgba(148, 163, 184, 0.35);
    }

    [data-bs-theme="dark"] .kostum-upload-empty {
        color: rgba(255, 255, 255, 0.75);
    }

    @media (max-width: 767.98px) {
        .kostum-upload-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }

    .admin-costume-gallery {
        width: 100%;
    }

    .admin-costume-gallery-stage {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        aspect-ratio: 1 / 1;
        overflow: hidden;
        border-radius: 1rem;
        background: #f1f5f9;
    }

    .admin-costume-gallery-main {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .admin-costume-gallery-control {
        position: absolute;
        top: 50%;
        z-index: 2;
        width: 2.2rem;
        height: 2.2rem;
        padding: 0;
        border: 0;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transform: translateY(-50%);
        background: rgba(15, 23, 42, 0.78);
        color: #fff;
        box-shadow: 0 0.25rem 0.75rem rgba(15, 23, 42, 0.25);
    }

    .admin-costume-gallery-control:hover,
    .admin-costume-gallery-control:focus-visible {
        background: #2563eb;
        color: #fff;
    }

    .admin-costume-gallery-prev { left: 0.65rem; }
    .admin-costume-gallery-next { right: 0.65rem; }

    .admin-costume-gallery-thumbs {
        display: flex;
        gap: 0.45rem;
        margin-top: 0.6rem;
        overflow-x: auto;
        padding: 0.1rem 0.1rem 0.25rem;
    }

    .admin-costume-gallery-thumb {
        flex: 0 0 4rem;
        width: 4rem;
        height: 4rem;
        padding: 0;
        border: 2px solid transparent;
        border-radius: 0.6rem;
        overflow: hidden;
        background: #e2e8f0;
        opacity: 0.72;
    }

    .admin-costume-gallery-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .admin-costume-gallery-thumb:hover,
    .admin-costume-gallery-thumb.is-active {
        border-color: #2563eb;
        opacity: 1;
    }

    [data-bs-theme="dark"] .admin-costume-gallery-stage {
        background: #1e293b;
    }

    [data-bs-theme="dark"] .admin-costume-gallery-thumb {
        background: #334155;
    }

    @media (max-width: 767.98px) {
        .admin-costume-gallery-stage {
            max-width: 22rem;
            margin: 0 auto;
        }

        .admin-costume-gallery-thumb {
            flex-basis: 3.6rem;
            width: 3.6rem;
            height: 3.6rem;
        }
    }

    .rupiah-format::before {
        content: \"Rp\";
    }

    .admin-header-actions {
        display: flex;
        gap: 0.5rem;
        align-items: center;
    }

    @media (max-width: 575.98px) {
        .admin-header-actions {
            width: 100%;
        }

        .admin-header-actions .btn {
            flex: 1 1 0;
            min-width: 0;
            padding-left: 0.5rem;
            padding-right: 0.5rem;
            white-space: nowrap;
        }

        .action-buttons {
            min-width: 120px;
            gap: 0.35rem;
        }

        .orders-table th:last-child,
        .orders-table td:last-child {
            width: 120px;
            min-width: 120px;
            padding-left: 0.35rem;
            padding-right: 0.35rem;
        }

        .action-buttons .btn,
        .action-buttons .kostum-status-form {
            min-height: 28px;
        }

        .action-buttons .btn {
            padding: 0.2rem 0.25rem;
            font-size: 0.68rem;
        }

        .kostum-status-form {
            padding: 0.25rem 0.35rem;
        }
    }

@endsection

@section('content')
<section class="py-4">
    <div class="container">
        <div class="admin-page-header d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2 mb-4">
            <div>
                <h2 class="fw-bold mb-0">Data Kostum</h2>
                <p class="text-muted mb-0 small" style="color: var(--brand-blue) !important;">Kelola daftar kostum yang tersedia untuk disewa.</p>
            </div>
            <div class="admin-header-actions">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                    <i class="bi bi-plus-circle"></i> Tambah Kostum
                </button>
                <a href="{{ route('admin.profile') }}" class="btn btn-outline-primary">
                    <i class="bi bi-arrow-left"></i> Kembali
                </a>
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">{{ session('success') }}<button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">{{ session('error') }}<button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="card shadow-sm mb-4 rc-kostum-card" style="background-color: rgba(37, 99, 235, 0.06); border: 1px solid rgba(37, 99, 235, 0.12);">
            


            <div class="card mb-3" style="background-color: #ffffff; border: none;">
                <div class="card-body d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-3">
                    <div class="d-flex flex-column flex-lg-row align-items-lg-center gap-2 w-100">
                        <div class="input-group" style="background-color: #14141429; border-radius: 0.75rem; border: 1px solid rgba(148,163,184,0.35);">
                            <span class="input-group-text bg-transparent border-0"><i class="bi bi-search"></i></span>
                            <input id="search-admin-kostum" type="search" class="form-control border-0 bg-transparent" placeholder="Cari nama, judul, katalog, brand..." aria-label="Cari kostum">
                        </div>
                        <select id="sort-admin-kostum" class="form-select" style="background-color: #14141429; border: 1px solid rgba(148,163,184,0.35); color: #141414;">
                            <option value="">Urutkan data kostum</option>
                            <option value="1:string:asc">Nama A–Z</option>
                            <option value="1:string:desc">Nama Z–A</option>
                            <option value="4:string:asc">Judul A–Z</option>
                            <option value="4:string:desc">Judul Z–A</option>
                            <option value="6:string:asc">Jenis Kelamin A–Z</option>
                            <option value="6:string:desc">Jenis Kelamin Z–A</option>
                            <option value="7:string:asc">Ukuran A–Z</option>
                            <option value="7:string:desc">Ukuran Z–A</option>
                        </select>
                    </div>
                    <div class="col-md-3 text-md-end">
                        <button id="reset-admin-kostum" type="button" class="btn btn-light w-100">Reset Pencarian</button>
                    </div>
                </div>
            </div>

            @if($kostum->count() > 0)
                <div class="table-responsive">
                    <table id="adminKostumTable" class="table table-hover align-middle orders-table">
                        <thead>
                            <tr>
                                <th style="width: 50px;">No</th>
                                <th>Nama Kostum</th>
                                <th>Katalog</th>
                                <th>Kategori</th>
                                <th>Judul</th>
                                <th>Gambar</th>
                                <th>Jenis Kelamin</th>
                                <th>Ukuran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kostum as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_kostum }}</td>
                                <td>{{ $item->katalog ?: '-' }}</td>
                                <td>{{ $item->kategori ?: '-' }}</td>
                                <td>{{ $item->judul ?: '-' }}</td>
                                <td>
                                    @if(!empty($item->gambar1))
                                            @php
                                                $imgRaw = $item->gambar1 ?? '';
                                                if (str_starts_with($imgRaw, 'http')) {
                                                    $kostumImgSrc = $imgRaw;
                                                } elseif (str_starts_with($imgRaw, '/storage/')) {
                                                    $kostumImgSrc = asset(ltrim($imgRaw, '/'));
                                                } elseif (str_starts_with($imgRaw, 'storage/')) {
                                                    $kostumImgSrc = asset($imgRaw);
                                                } elseif ($imgRaw) {
                                                    $kostumImgSrc = asset('storage/' . $imgRaw);
                                                } else {
                                                    $kostumImgSrc = null;
                                                }
                                            @endphp
                                            <button type="button" class="btn p-0 border-0 bg-transparent js-kostum-image-preview" data-image-src="{{ $kostumImgSrc }}" data-image-title="Gambar Kostum: {{ $item->nama_kostum }}" aria-label="Lihat gambar kostum {{ $item->nama_kostum }}">
                                                <img src="{{ $kostumImgSrc }}" alt="{{ $item->nama_kostum }}" class="kostum-thumb" style="max-width:80px;">
                                            </button>
                                        @else
                                        <span class="text-muted">-</span>
                                    @endif
                                </td>
                                <td>{{ ucfirst($item->jenis_kelamin ?? '-') }}</td>
                                @php
                                    $sizes = array_filter(array_map('trim', preg_split('/[,&]/', $item->ukuran_kostum ?? '')));
                                    $order = ['XS'=>1,'S'=>2,'M'=>3,'L'=>4,'XL'=>5,'XXL'=>6,'XXXL'=>7];
                                    usort($sizes, function($a,$b) use ($order){
                                        $aKey = strtoupper($a); $bKey = strtoupper($b);
                                        $aR = $order[$aKey] ?? 999; $bR = $order[$bKey] ?? 999;
                                        return $aR === $bR ? strcasecmp($aKey,$bKey) : ($aR <=> $bR);
                                    });
                                @endphp
                                <td>{{ $sizes ? implode(' ', $sizes) : '-' }}</td>
                                <td>
                                    <div class="action-buttons">
                                        <form action="{{ route('admin.kostum.toggle', $item->id_kostum) }}" method="POST" class="kostum-status-form" title="{{ $item->is_active ? 'Kostum tampil di katalog publik' : 'Kostum disembunyikan dari katalog publik' }}">
                                            @csrf
                                            <span class="kostum-status-caption">Tampilkan kostum</span>
                                            <label class="kostum-status-switch" aria-label="{{ $item->is_active ? 'Sembunyikan kostum' : 'Tampilkan kostum' }}">
                                                <input type="hidden" name="status" value="active">
                                                <input type="checkbox" {{ $item->is_active ? 'checked' : '' }} onchange="this.form.submit()">
                                                <span class="kostum-status-slider"></span>
                                            </label>
                                            <span class="kostum-status-label">{{ $item->is_active ? 'On' : 'Off' }}</span>
                                        </form>
                                        <form action="{{ route('admin.kostum.toggle', $item->id_kostum) }}" method="POST" class="kostum-status-form" title="{{ $item->is_maintenance ? 'Kostum sedang maintenance' : 'Kostum tersedia untuk disewa' }}">
                                            @csrf
                                            <span class="kostum-status-caption">Maintenance</span>
                                            <label class="kostum-status-switch" aria-label="{{ $item->is_maintenance ? 'Matikan maintenance' : 'Aktifkan maintenance' }}">
                                                <input type="hidden" name="status" value="maintenance">
                                                <input type="checkbox" {{ $item->is_maintenance ? 'checked' : '' }} onchange="this.form.submit()">
                                                <span class="kostum-status-slider"></span>
                                            </label>
                                            <span class="kostum-status-label">{{ $item->is_maintenance ? 'On' : 'Off' }}</span>
                                        </form>
                                        @if(filled($item->exclude) && !is_null($item->harga_exclude))
                                            <form action="{{ route('admin.kostum.toggle', $item->id_kostum) }}" method="POST" class="kostum-status-form" title="{{ $item->is_exclude_active ? 'Sewa dengan exclude aktif' : 'Sewa dengan exclude nonaktif' }}">
                                                @csrf
                                                <span class="kostum-status-caption">Sewa Exclude</span>
                                                <label class="kostum-status-switch" aria-label="{{ $item->is_exclude_active ? 'Nonaktifkan sewa exclude' : 'Aktifkan sewa exclude' }}">
                                                    <input type="hidden" name="status" value="exclude">
                                                    <input type="checkbox" {{ $item->is_exclude_active ? 'checked' : '' }} onchange="this.form.submit()">
                                                    <span class="kostum-status-slider"></span>
                                                </label>
                                                <span class="kostum-status-label">{{ $item->is_exclude_active ? 'On' : 'Off' }}</span>
                                            </form>
                                        @endif
                                        <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal{{ $item->id_kostum }}" title="Detail">
                                            <i class="bi bi-eye"></i> Detail
                                        </button>
                                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id_kostum }}" title="Edit">
                                            <i class="bi bi-pencil"></i> Edit
                                        </button>
                                        <form action="{{ route('admin.kostum.delete', $item->id_kostum) }}" method="POST" style="display:inline;">
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus kostum ini?')" title="Hapus">
                                                <i class="bi bi-trash"></i> Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>

                            <!-- Modal Detail -->
                            <div class="modal fade" id="detailModal{{ $item->id_kostum }}" tabindex="-1">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary text-white">
                                            <h5 class="modal-title">Detail: {{ $item->nama_kostum }}</h5>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row g-3">
                                                <div class="col-md-5 text-center">
                                                    @php
                                                        $detailGalleryImages = [];
                                                        foreach (range(1, 5) as $imageSlot) {
                                                            $imageValue = $item->{'gambar' . $imageSlot} ?? null;
                                                            if (!$imageValue) {
                                                                continue;
                                                            }

                                                            if (str_starts_with($imageValue, 'http')) {
                                                                $detailImageSrc = $imageValue;
                                                            } elseif (str_starts_with($imageValue, '/storage/')) {
                                                                $detailImageSrc = asset(ltrim($imageValue, '/'));
                                                            } elseif (str_starts_with($imageValue, 'storage/')) {
                                                                $detailImageSrc = asset($imageValue);
                                                            } else {
                                                                $detailImageSrc = asset('storage/' . ltrim($imageValue, '/'));
                                                            }

                                                            $detailGalleryImages[] = [
                                                                'src' => $detailImageSrc,
                                                                'alt' => $item->nama_kostum . ' - Gambar ' . $imageSlot,
                                                            ];
                                                        }
                                                    @endphp
                                                    @if($detailGalleryImages)
                                                        <div class="admin-costume-gallery" data-admin-costume-gallery>
                                                            <div class="admin-costume-gallery-stage">
                                                                <button type="button" class="admin-costume-gallery-control admin-costume-gallery-prev" data-admin-gallery-prev aria-label="Gambar sebelumnya">
                                                                    <i class="bi bi-chevron-left"></i>
                                                                </button>
                                                                <img src="{{ $detailGalleryImages[0]['src'] }}" alt="{{ $detailGalleryImages[0]['alt'] }}" class="admin-costume-gallery-main" data-admin-gallery-main>
                                                                <button type="button" class="admin-costume-gallery-control admin-costume-gallery-next" data-admin-gallery-next aria-label="Gambar berikutnya">
                                                                    <i class="bi bi-chevron-right"></i>
                                                                </button>
                                                            </div>
                                                            <div class="admin-costume-gallery-thumbs" role="tablist" aria-label="Pilihan gambar kostum">
                                                                @foreach($detailGalleryImages as $imageIndex => $detailGalleryImage)
                                                                    <button type="button" class="admin-costume-gallery-thumb {{ $imageIndex === 0 ? 'is-active' : '' }}" data-admin-gallery-thumb aria-label="Tampilkan gambar {{ $imageIndex + 1 }}">
                                                                        <img src="{{ $detailGalleryImage['src'] }}" alt="{{ $detailGalleryImage['alt'] }}">
                                                                    </button>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    @else
                                                        <img src="{{ asset('assets/img/no-image.png') }}" alt="Tidak ada gambar" class="img-fluid rounded" style="aspect-ratio:1/1;object-fit:cover;">
                                                    @endif
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="row mb-2"><div class="col-5 text-muted">Nama Kostum</div><div class="col-7">: {{ $item->nama_kostum }}</div></div>
                                                    <div class="row mb-2"><div class="col-5 text-muted">Katalog</div><div class="col-7">: {{ $item->katalog ?: '-' }}</div></div>
                                                    <div class="row mb-2"><div class="col-5 text-muted">Kategori</div><div class="col-7">: {{ $item->kategori ?: '-' }}</div></div>
                                                    <div class="row mb-2"><div class="col-5 text-muted">Judul</div><div class="col-7">: {{ $item->judul ?: '-' }}</div></div>
                                                    @if(!empty($item->jenis_kelamin))
                                                        <div class="row mb-2"><div class="col-5 text-muted">Jenis Kelamin</div><div class="col-7">: {{ ucfirst($item->jenis_kelamin) }}</div></div>
                                                    @endif
                                                    @if(!empty($item->brand))
                                                        <div class="row mb-2"><div class="col-5 text-muted">Brand</div><div class="col-7">: {{ $item->brand }}</div></div>
                                                    @endif
                                                    <div class="row mb-2"><div class="col-5 text-muted">Harga Sewa</div><div class="col-7">: Rp {{ number_format((float)$item->harga_sewa, 0, ',', '.') }}</div></div>
                                                    <div class="row mb-2"><div class="col-5 text-muted">Durasi Penyewaan</div><div class="col-7">: {{ $item->durasi_penyewaan }}</div></div>
                                                    @php
                                                        $sizes = array_filter(array_map('trim', preg_split('/[,&]/', $item->ukuran_kostum ?? '')));
                                                        $order = ['XS'=>1,'S'=>2,'M'=>3,'L'=>4,'XL'=>5,'XXL'=>6,'XXXL'=>7];
                                                        usort($sizes, function($a,$b) use ($order){
                                                            $aKey = strtoupper($a); $bKey = strtoupper($b);
                                                            $aR = $order[$aKey] ?? 999; $bR = $order[$bKey] ?? 999;
                                                            return $aR === $bR ? strcasecmp($aKey,$bKey) : ($aR <=> $bR);
                                                        });
                                                    @endphp
                                                    <div class="row mb-2">
                                                        <div class="col-5 text-muted">Ukuran</div>
                                                        <div class="col-7">
                                                            @if($sizes)
                                                                @foreach($sizes as $size)
                                                                    <span class="badge bg-secondary me-1 mb-1">{{ $size }}</span>
                                                                @endforeach
                                                            @else
                                                                -
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2"><div class="col-5 text-muted">Include</div><div class="col-7">: {!! nl2br(e($item->include)) !!}</div></div>
                                                    <div class="row mb-2"><div class="col-5 text-muted">Exclude</div><div class="col-7">: {!! nl2br(e($item->exclude)) !!}</div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Edit -->
                            <div class="modal fade" id="editModal{{ $item->id_kostum }}" tabindex="-1">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header bg-warning text-white">
                                            <h5 class="modal-title">Edit Kostum</h5>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                        </div>
                                        <form method="POST" action="{{ route('admin.kostum.update') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <input type="hidden" name="id_kostum" value="{{ $item->id_kostum }}">
                                                
                                                <div class="mb-3">
                                                    <label class="form-label">Kategori</label>
                                                    <select name="kategori" class="form-select js-costume-category" required>
                                                        <option value="" disabled>Pilih kategori</option>
                                                        @foreach($kategori as $kat)
                                                            <option value="{{ $kat }}" {{ strtolower($kat) === strtolower($item->kategori ?? '') ? 'selected' : '' }}>{{ $kat }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Katalog</label>
                                                    <select name="katalog" class="form-select js-costume-catalog" required>
                                                        <option value="" disabled>Pilih katalog</option>
                                                        @foreach($katalogOptions as $catalogOption)
                                                            <option value="{{ $catalogOption->name }}" data-category="{{ $catalogOption->kategori }}" {{ strtolower($catalogOption->name) === strtolower($item->katalog ?? '') ? 'selected' : '' }}>{{ $catalogOption->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Nama Kostum</label>
                                                    <input type="text" name="nama_kostum" class="form-control" value="{{ $item->nama_kostum }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Judul</label>
                                                    <input type="text" name="judul" class="form-control" value="{{ $item->judul ?? '' }}" placeholder="Judul karakter" required>
                                                </div>
                                                
                                                <div class="mb-3">
                                                    <label class="form-label">Gambar Kostum (5 slot)</label>
                                                    <div class="kostum-upload-grid">
                                                        @foreach(range(1, 5) as $slot)
                                                            @php
                                                                $fieldName = 'gambar' . $slot;
                                                                $imageValue = $item->{$fieldName} ?? null;
                                                                $imageSrc = null;
                                                                if (!empty($imageValue)) {
                                                                    $imgRaw = $imageValue;
                                                                    if (str_starts_with($imgRaw, 'http')) {
                                                                        $imageSrc = $imgRaw;
                                                                    } elseif (str_starts_with($imgRaw, '/storage/')) {
                                                                        $imageSrc = asset(ltrim($imgRaw, '/'));
                                                                    } elseif (str_starts_with($imgRaw, 'storage/')) {
                                                                        $imageSrc = asset($imgRaw);
                                                                    } else {
                                                                        $imageSrc = asset('storage/' . $imgRaw);
                                                                    }
                                                                }
                                                            @endphp
                                                            <div class="kostum-upload-card">
                                                                <div class="kostum-upload-preview-wrap" id="editKostumPreviewWrap{{ $item->id_kostum }}_{{ $slot }}">
                                                                    @if($imageSrc)
                                                                        <img src="{{ $imageSrc }}" alt="Gambar {{ $slot }} kostum" class="kostum-upload-preview" id="editKostumPreview{{ $item->id_kostum }}_{{ $slot }}">
                                                                        <div class="kostum-upload-empty d-none" id="editKostumEmpty{{ $item->id_kostum }}_{{ $slot }}">Gambar {{ $slot }}</div>
                                                                    @else
                                                                        <div class="kostum-upload-empty" id="editKostumEmpty{{ $item->id_kostum }}_{{ $slot }}">Gambar {{ $slot }}</div>
                                                                        <img src="" alt="Preview gambar {{ $slot }}" class="kostum-upload-preview d-none" id="editKostumPreview{{ $item->id_kostum }}_{{ $slot }}">
                                                                    @endif
                                                                </div>
                                                                <label for="editGambar{{ $item->id_kostum }}_{{ $slot }}" class="btn btn-outline-secondary w-100 mb-0">
                                                                    <i class="bi bi-image"></i> Gambar {{ $slot }}
                                                                </label>
                                                                <input type="file" class="d-none js-kostum-upload-input" id="editGambar{{ $item->id_kostum }}_{{ $slot }}" name="{{ $fieldName }}" accept="image/*,.jpg,.jpeg,.png,.gif,.webp,.svg,.bmp,.tiff,.ico" data-preview-id="editKostumPreview{{ $item->id_kostum }}_{{ $slot }}" data-empty-id="editKostumEmpty{{ $item->id_kostum }}_{{ $slot }}" data-remove-id="remove_{{ $fieldName }}_{{ $item->id_kostum }}">
                                                                <button type="button" class="btn btn-outline-danger btn-sm js-remove-kostum-image {{ $imageSrc ? '' : 'd-none' }}" data-preview-id="editKostumPreview{{ $item->id_kostum }}_{{ $slot }}" data-empty-id="editKostumEmpty{{ $item->id_kostum }}_{{ $slot }}" data-file-input-id="editGambar{{ $item->id_kostum }}_{{ $slot }}" data-remove-input-id="remove_{{ $fieldName }}_{{ $item->id_kostum }}">
                                                                    <i class="bi bi-trash"></i> Hapus Gambar
                                                                </button>
                                                                <input type="hidden" name="remove_{{ $fieldName }}" id="remove_{{ $fieldName }}_{{ $item->id_kostum }}" value="0">
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <small class="text-muted d-block mt-2">Semua slot gambar bersifat opsional saat edit. Kosongkan jika tidak ingin mengganti.</small>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label d-block">Jenis Kelamin</label>
                                                    @php
                                                        $jk = strtolower($item->jenis_kelamin ?? '');
                                                    @endphp
                                                    <div class="admin-gender-radio-group">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jkPria{{ $item->id_kostum }}" value="Pria" {{ $jk === 'pria' ? 'checked' : '' }} required>
                                                            <label class="form-check-label" for="jkPria{{ $item->id_kostum }}">Pria</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jkWanita{{ $item->id_kostum }}" value="Wanita" {{ $jk === 'wanita' ? 'checked' : '' }} required>
                                                            <label class="form-check-label" for="jkWanita{{ $item->id_kostum }}">Wanita</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Brand</label>
                                                    <input type="text" name="brand" class="form-control" value="{{ $item->brand ?? '' }}" placeholder="Brand kostum" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Harga Sewa</label>
                                                    <input type="number" name="harga_sewa" class="form-control" value="{{ $item->harga_sewa }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Durasi Penyewaan</label>
                                                    <input type="text" name="durasi_penyewaan" class="form-control" value="{{ $item->durasi_penyewaan }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Ukuran Kostum</label>
                                                    <input type="text" name="ukuran_kostum" class="form-control" placeholder="Contoh: XS, S, M, L atau S,M,L" value="{{ old('ukuran_kostum', $item->ukuran_kostum ?? '') }}">
                                                    <small class="text-muted">Masukkan ukuran dipisah koma (contoh: XS, S, M, L).</small>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Include</label>
                                                    <textarea name="include" class="form-control" rows="3" required>{{ $item->include }}</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Exclude (Opsional)</label>
                                                    <textarea name="exclude" class="form-control" rows="3">{{ $item->exclude }}</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Harga Exclude (Opsional)</label>
                                                    <input type="number" name="harga_exclude" class="form-control" value="{{ $item->harga_exclude }}" min="0" step="0.01" placeholder="Contoh: 50000.00">
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
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                @if($search || $filter_kategori || $filter_jenis_kelamin || $filter_ukuran || ($sort && $sort !== 'id_asc'))
                    <div class="alert alert-warning text-center">
                        <i class="bi bi-search"></i> Pencarian tidak ditemukan. Coba ubah kata kunci atau reset filter.
                    </div>
                @else
                    <div class="alert alert-info text-center">
                        <i class="bi bi-info-circle"></i> Belum ada data kostum. Silakan tambahkan data baru.
                    </div>
                @endif
            @endif

        </div>
    </div>
</section>

<!-- Modal Preview Gambar Kostum (reusable) -->
<div class="modal fade" id="adminKostumImagePreviewModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="adminKostumImagePreviewTitle">Gambar Kostum</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img id="adminKostumImagePreviewImg" src="" alt="Preview Gambar Kostum" class="img-fluid rounded" style="max-height: 75vh; object-fit: contain;">
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="addModal" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Tambah Kostum Baru</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <form method="POST" action="{{ route('admin.kostum.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <select name="kategori" class="form-select js-costume-category" required>
                            @if($kategori && count($kategori) > 0)
                                <option value="" selected disabled>Pilih kategori</option>
                                @foreach($kategori as $kat)
                                    <option value="{{ $kat }}">{{ $kat }}</option>
                                @endforeach
                            @else
                                <option value="" disabled selected>Belum ada data kategori</option>
                            @endif
                        </select>
                        @if(!$kategori || count($kategori) == 0)
                            <small class="text-danger">Tambahkan kategori pada data katalog terlebih dahulu.</small>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Katalog</label>
                        <select name="katalog" class="form-select js-costume-catalog" required>
                            @if($katalogOptions && count($katalogOptions) > 0)
                                <option value="" selected disabled>Pilih katalog</option>
                                @foreach($katalogOptions as $catalogOption)
                                    <option value="{{ $catalogOption->name }}" data-category="{{ $catalogOption->kategori }}">{{ $catalogOption->name }}</option>
                                @endforeach
                            @else
                                <option value="" disabled selected>Belum ada data katalog</option>
                            @endif
                        </select>
                        @if(!$katalogOptions || count($katalogOptions) == 0)
                            <small class="text-danger">Tambahkan data katalog terlebih dahulu.</small>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Kostum</label>
                        <input type="text" name="nama_kostum" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Judul</label>
                        <input type="text" name="judul" class="form-control" placeholder="Judul karakter" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Gambar Kostum (5 slot)</label>
                        <div class="kostum-upload-grid">
                            @foreach(range(1, 5) as $slot)
                                <div class="kostum-upload-card">
                                    <div class="kostum-upload-preview-wrap" id="addKostumPreviewWrap{{ $slot }}">
                                        <div class="kostum-upload-empty" id="addKostumEmpty{{ $slot }}">Gambar {{ $slot }}</div>
                                        <img src="" alt="Preview gambar {{ $slot }}" class="kostum-upload-preview d-none" id="addKostumPreview{{ $slot }}">
                                    </div>
                                    <label for="addKostumImage{{ $slot }}" class="btn btn-outline-secondary w-100 mb-0">
                                        <i class="bi bi-image"></i> {{ $slot == 1 ? 'Gambar 1 (Wajib)' : 'Gambar ' . $slot }}
                                    </label>
                                    <input type="file" class="d-none js-kostum-upload-input" id="addKostumImage{{ $slot }}" name="gambar{{ $slot }}" accept="image/*,.jpg,.jpeg,.png,.gif,.webp,.svg,.bmp,.tiff,.ico" {{ $slot == 1 ? 'required' : '' }} data-preview-id="addKostumPreview{{ $slot }}" data-empty-id="addKostumEmpty{{ $slot }}">
                                    <button type="button" class="btn btn-outline-danger btn-sm js-remove-kostum-image d-none" data-preview-id="addKostumPreview{{ $slot }}" data-empty-id="addKostumEmpty{{ $slot }}" data-file-input-id="addKostumImage{{ $slot }}">
                                        <i class="bi bi-trash"></i> Hapus Gambar
                                    </button>
                                </div>
                            @endforeach
                        </div>
                        <small class="text-muted d-block mt-2">Minimal wajib 1 gambar (slot 1). Sisanya 4 gambar opsional.</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label d-block">Jenis Kelamin</label>
                        <div class="admin-gender-radio-group">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="addJkPria" value="Pria" required>
                                <label class="form-check-label" for="addJkPria">Pria</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="addJkWanita" value="Wanita" required>
                                <label class="form-check-label" for="addJkWanita">Wanita</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Brand</label>
                        <input type="text" name="brand" class="form-control" placeholder="Brand kostum" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Harga Sewa</label>
                        <input type="number" name="harga_sewa" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Durasi Penyewaan</label>
                        <input type="text" name="durasi_penyewaan" class="form-control" value="3 hari" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ukuran Kostum</label>
                        <input type="text" name="ukuran_kostum" class="form-control" placeholder="Contoh: XS, S, M, L atau S,M,L" value="{{ old('ukuran_kostum') }}" required>
                        <small class="text-muted">Masukkan ukuran dipisah koma (contoh: XS, S, M, L).</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Include</label>
                        <textarea name="include" class="form-control" rows="3" placeholder="Yang termasuk dalam paket" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Exclude (Opsional)</label>
                        <textarea name="exclude" class="form-control" rows="3" placeholder="Yang tidak termasuk"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Harga Exclude (Opsional)</label>
                        <input type="number" name="harga_exclude" class="form-control" min="0" step="0.01" placeholder="Contoh: 50000.00">
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

@endsection

@section('scripts')
<script>
    // Auto-hide alerts after 3 seconds
    document.addEventListener('DOMContentLoaded', function () {
        const alerts = document.querySelectorAll('.alert');
        alerts.forEach(alert => {
            setTimeout(() => {
                const bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            }, 3000);
        });

        function showAdminKostumImagePreview(src, title) {
            const img = document.getElementById('adminKostumImagePreviewImg');
            const titleEl = document.getElementById('adminKostumImagePreviewTitle');
            if (!img) return;

            img.src = src || '';
            if (titleEl) titleEl.textContent = title || 'Gambar Kostum';

            const modalEl = document.getElementById('adminKostumImagePreviewModal');
            if (!modalEl || !window.bootstrap) return;
            const modal = bootstrap.Modal.getOrCreateInstance(modalEl);
            modal.show();
        }

        document.querySelectorAll('.js-kostum-image-preview').forEach(btn => {
            btn.addEventListener('click', () => {
                const src = btn.getAttribute('data-image-src');
                const title = btn.getAttribute('data-image-title');
                showAdminKostumImagePreview(src, title);
            });
        });

        const modalEl = document.getElementById('adminKostumImagePreviewModal');
        if (modalEl) {
            modalEl.addEventListener('hidden.bs.modal', function () {
                const img = document.getElementById('adminKostumImagePreviewImg');
                if (img) img.src = '';
            });
        }

        document.querySelectorAll('[data-admin-costume-gallery]').forEach(function (gallery) {
            const mainImage = gallery.querySelector('[data-admin-gallery-main]');
            const thumbnails = Array.from(gallery.querySelectorAll('[data-admin-gallery-thumb]'));
            const previousButton = gallery.querySelector('[data-admin-gallery-prev]');
            const nextButton = gallery.querySelector('[data-admin-gallery-next]');
            const images = thumbnails.map(function (thumbnail) {
                const image = thumbnail.querySelector('img');
                return {
                    src: image ? image.src : '',
                    alt: image ? image.alt : ''
                };
            });
            let activeIndex = 0;

            function showGalleryImage(index) {
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
                    showGalleryImage(thumbnailIndex);
                });
            });

            if (previousButton) {
                previousButton.addEventListener('click', function () {
                    showGalleryImage(activeIndex - 1);
                });
            }

            if (nextButton) {
                nextButton.addEventListener('click', function () {
                    showGalleryImage(activeIndex + 1);
                });
            }

            showGalleryImage(0);
        });
    });

    // Single-image mode: no per-image deletion logic
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.js-costume-category').forEach(function (categorySelect) {
            const form = categorySelect.closest('form');
            const catalogSelect = form ? form.querySelector('.js-costume-catalog') : null;
            if (!catalogSelect) return;

            function syncCatalogOptions() {
                const selectedCategory = String(categorySelect.value || '').trim().toLowerCase();
                let selectedCatalogIsValid = false;

                Array.from(catalogSelect.options).forEach(function (option) {
                    if (!option.value) return;
                    const optionCategory = String(option.dataset.category || '').trim().toLowerCase();
                    const matches = selectedCategory !== '' && optionCategory === selectedCategory;
                    option.hidden = !matches;
                    option.disabled = !matches;
                    if (matches && option.selected) {
                        selectedCatalogIsValid = true;
                    }
                });

                if (!selectedCatalogIsValid) {
                    catalogSelect.value = '';
                }
            }

            categorySelect.addEventListener('change', syncCatalogOptions);
            syncCatalogOptions();
        });

        document.querySelectorAll('.js-kostum-upload-input').forEach(input => {
            input.addEventListener('change', function () {
                const file = this.files && this.files[0];
                const preview = document.getElementById(this.dataset.previewId);
                const emptyState = document.getElementById(this.dataset.emptyId);
                const removeInput = this.dataset.removeId ? document.getElementById(this.dataset.removeId) : null;
                const removeButton = document.querySelector('.js-remove-kostum-image[data-preview-id="' + this.dataset.previewId + '"]');

                if (!preview) return;

                if (file) {
                    const reader = new FileReader();
                    reader.onload = function (event) {
                        preview.src = event.target.result;
                        preview.classList.remove('d-none');
                        if (emptyState) {
                            emptyState.style.display = 'none';
                        }
                        if (removeInput) removeInput.value = '0';
                        if (removeButton) removeButton.classList.remove('d-none');
                    };
                    reader.readAsDataURL(file);
                    return;
                }

                preview.src = '';
                preview.classList.add('d-none');
                if (emptyState) {
                    emptyState.style.display = 'flex';
                }
                if (removeInput) removeInput.value = '1';
                if (removeButton) removeButton.classList.add('d-none');
            });
        });

        document.querySelectorAll('.js-remove-kostum-image').forEach(button => {
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

        const addFirstImage = document.getElementById('addKostumImage1');
        if (addFirstImage) {
            addFirstImage.addEventListener('change', function () {
                if (this.files && this.files[0]) {
                    this.setAttribute('aria-invalid', 'false');
                }
            });
        }

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

        initAdminTableSearchSort('adminKostumTable','search-admin-kostum','sort-admin-kostum','reset-admin-kostum');
    });
</script>
@endsection
