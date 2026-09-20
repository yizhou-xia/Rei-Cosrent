@extends('layouts.main')

@section('title', 'Data Katalog - Rei Cosrent')

@section('styles')

    .kostum-upload-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1rem;
    }

    .kostum-upload-card {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
        padding: 0.75rem;
        border: 1px solid rgba(148, 163, 184, 0.2);
        border-radius: 0.85rem;
        background: rgba(148, 163, 184, 0.04);
    }

    .kostum-upload-preview-wrap {
        position: relative;
        width: 100%;
        aspect-ratio: 1 / 1;
        border-radius: 0.75rem;
        overflow: hidden;
        border: 1px solid rgba(148, 163, 184, 0.18);
        background: rgba(15, 23, 42, 0.02);
        display: flex;
        align-items: center;
        justify-content: center;
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
        color: rgba(15, 23, 42, 0.5);
        font-size: 0.9rem;
        font-weight: 600;
        letter-spacing: 0.02em;
        text-align: center;
        padding: 1rem;
    }

    .kostum-upload-card .btn-outline-secondary,
    .kostum-upload-card .btn-outline-danger {
        width: 100%;
    }

    [data-bs-theme="dark"] .kostum-upload-card {
        background: rgba(148, 163, 184, 0.06);
        border-color: rgba(148, 163, 184, 0.18);
    }

    [data-bs-theme="dark"] .kostum-upload-preview-wrap {
        background: rgba(15, 23, 42, 0.45);
        border-color: rgba(148, 163, 184, 0.2);
    }

    [data-bs-theme="dark"] .kostum-upload-empty {
        color: rgba(255, 255, 255, 0.7);
    }

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

        .catalog-status-form {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.45rem;
            min-height: 28px;
            padding: 0.2rem 0.3rem;
            border: 1px solid rgba(148, 163, 184, 0.24);
            border-radius: 999px;
            background: rgba(148, 163, 184, 0.06);
        }

        .action-buttons .catalog-status-form {
            display: flex;
        }

        .catalog-status-switch {
            position: relative;
            display: inline-block;
            width: 28px;
            height: 16px;
            flex: 0 0 auto;
        }

        .catalog-status-switch input {
            width: 0;
            height: 0;
            opacity: 0;
        }

        .catalog-status-slider {
            position: absolute;
            inset: 0;
            cursor: pointer;
            border-radius: 999px;
            background: #94a3b8;
            transition: background-color 0.2s ease;
        }

        .catalog-status-slider::before {
            content: '';
            position: absolute;
                width: 12px;
                height: 12px;
                left: 2px;
                top: 2px;
            border-radius: 50%;
            background: #ffffff;
            box-shadow: 0 1px 3px rgba(15, 23, 42, 0.25);
            transition: transform 0.2s ease;
        }

        .catalog-status-switch input:checked + .catalog-status-slider {
            background: #198754;
        }

        .catalog-status-switch input:checked + .catalog-status-slider::before {
                transform: translateX(12px);
        }

        .catalog-status-switch input:focus-visible + .catalog-status-slider {
            outline: 3px solid rgba(13, 110, 253, 0.25);
            outline-offset: 2px;
        }

        .catalog-status-label {
            min-width: 24px;
            color: var(--bs-body-color);
            font-size: 0.65rem;
            font-weight: 700;
            text-align: left;
        }

        .catalog-status-caption {
            color: var(--bs-body-color);
            font-size: 0.65rem;
            font-weight: 600;
            white-space: nowrap;
        }

        [data-bs-theme="dark"] .catalog-status-form {
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

        .modal-content .modal-header {
            background-color: #0d6efd !important;
            color: #ffffff !important;
        }

        .modal-content .modal-body,
        .modal-content .modal-footer,
        .modal-content form {
            background-color: #ffffff !important;
        }

        /* Ensure form controls inside modals use the same dark surface */
        .modal-content .modal-body .form-control,
        .modal-content .modal-body .form-select,
        .modal-content .modal-body textarea,
        .modal-content .modal-body input,
        .modal-content .modal-body select,
        .modal-content .modal-body .form-check,
        .modal-content .modal-body .form-check-input,
        .modal-content .modal-body .form-floating > .form-control,
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

    /* Modal edit: teks menyesuaikan permukaan terang */
    #editModal *,
    #editModal *:not(i):not(button) {
        color: #141414 !important;
    }

    [data-bs-theme="dark"] #editModal *,
    [data-bs-theme="dark"] #editModal *:not(i):not(button) {
        color: #ffffff !important;
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

        .katalog-thumb {
            cursor: zoom-in;
            transition: transform .12s ease;
        }

        .katalog-thumb:hover {
            transform: scale(1.02);
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
                width: 120px;
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

            .orders-table th,
            .orders-table td {
                padding: 0.45rem 0.35rem;
                font-size: 0.875rem;
            }

            .orders-table th:first-child,
            .orders-table td:first-child {
                width: 30px;
                min-width: 30px;
            }

            .orders-table th:nth-child(2),
            .orders-table td:nth-child(2) {
                width: 32%;
                max-width: 105px;
                overflow-wrap: anywhere;
            }

            .orders-table th:nth-child(5),
            .orders-table td:nth-child(5) {
                width: 48px;
                min-width: 48px;
                text-align: center;
            }

            .orders-table td:nth-child(5) .js-katalog-image-preview,
            .orders-table td:nth-child(5) .katalog-thumb {
                width: 42px;
                max-width: 42px;
                height: 42px;
                object-fit: cover;
            }

            .action-buttons .btn,
            .action-buttons .catalog-status-form {
                min-height: 28px;
            }

            .action-buttons .btn {
                padding: 0.2rem 0.25rem;
                font-size: 0.68rem;
            }

            .catalog-status-form {
                justify-content: space-between;
                gap: 0.25rem;
                padding: 0.25rem 0.35rem;
            }

            .catalog-status-switch {
                width: 28px;
                height: 16px;
            }

            .catalog-status-slider::before {
                width: 12px;
                height: 12px;
                left: 2px;
                top: 2px;
            }

            .catalog-status-switch input:checked + .catalog-status-slider::before {
                transform: translateX(12px);
            }

            .catalog-status-label {
                min-width: 26px;
                font-size: 0.75rem;
            }

            .catalog-status-caption {
                min-width: 0;
                overflow: hidden;
                font-size: 0.75rem;
                line-height: 1.1;
                text-overflow: ellipsis;
            }
        }

@endsection

@section('content')
<section class="py-4">
    <div class="container">
        <div class="admin-page-header d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2 mb-4">
            <div>
                <h2 class="fw-bold mb-0">Data Katalog</h2>
                <p class="text-muted mb-0 small" style="color: var(--brand-blue) !important;">Kelola daftar katalog kostum yang tampil di halaman utama.</p>
            </div>
            <div class="admin-header-actions">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                    <i class="bi bi-plus-circle"></i> Tambah Katalog
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

        @if($katalog->count() > 0)
            <div class="card mb-3" style="background-color: #ffffff; border: none;">
                <div class="card-body d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-3">
                    <div class="d-flex flex-column flex-lg-row align-items-lg-center gap-2 w-100">
                        <div class="input-group" style="background-color: #14141429; border-radius: 0.75rem; border: 1px solid rgba(148,163,184,0.35);">
                            <span class="input-group-text bg-transparent border-0"><i class="bi bi-search"></i></span>
                            <input id="search-admin-katalog" type="search" class="form-control border-0 bg-transparent" placeholder="Cari nama katalog, kategori, deskripsi..." aria-label="Cari katalog">
                        </div>
                        <select id="sort-admin-katalog" class="form-select" style="background-color: #14141429; border: 1px solid rgba(148,163,184,0.35); color: #141414;">
                            <option value="">Urutkan data katalog</option>
                            <option value="1:string:asc">Nama Katalog A–Z</option>
                            <option value="1:string:desc">Nama Katalog Z–A</option>
                            <option value="2:string:asc">Deskripsi A–Z</option>
                            <option value="2:string:desc">Deskripsi Z–A</option>
                        </select>
                    </div>
                    <div class="col-md-3 text-md-end">
                        <button id="reset-admin-katalog" type="button" class="btn btn-light w-100">Reset Pencarian</button>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table id="adminKatalogTable" class="table table-hover align-middle orders-table">
                    <thead>
                        <tr>
                            <th style="width: 50px;">No</th>
                            <th>Nama Katalog</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($katalog as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ Str::limit($item->description, 50) }}</td>
                                <td>
                                    @if(!empty($item->image))
                                        @php
                                            $imgRaw = $item->image ?? '';
                                            if (str_starts_with($imgRaw, 'http')) {
                                                $katalogImageSrc = $imgRaw;
                                            } elseif (str_starts_with($imgRaw, '/storage/')) {
                                                $katalogImageSrc = asset(ltrim($imgRaw, '/'));
                                            } elseif (str_starts_with($imgRaw, 'storage/')) {
                                                $katalogImageSrc = asset($imgRaw);
                                            } elseif ($imgRaw) {
                                                $katalogImageSrc = asset('storage/' . $imgRaw);
                                            } else {
                                                $katalogImageSrc = null;
                                            }
                                        @endphp
                                        <button type="button" class="btn p-0 border-0 bg-transparent js-katalog-image-preview" data-image-src="{{ $katalogImageSrc }}" data-image-title="Gambar Katalog: {{ $item->name }}" aria-label="Lihat gambar katalog {{ $item->name }}">
                                            <img src="{{ $katalogImageSrc }}" alt="{{ $item->name }}" class="katalog-thumb" style="max-width:80px;">
                                        </button>
                                    @else
                                        <span class="text-muted">Tidak ada gambar</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="action-buttons">
                                        <form action="{{ route('admin.katalog.toggle', $item->id) }}" method="POST" class="catalog-status-form" title="{{ $item->is_active ? 'Katalog tampil di halaman publik' : 'Katalog disembunyikan dari halaman publik' }}">
                                            @csrf
                                            <span class="catalog-status-caption">Tampilkan katalog</span>
                                            <label class="catalog-status-switch" aria-label="{{ $item->is_active ? 'Matikan tampilan katalog' : 'Tampilkan katalog' }}">
                                                <input type="checkbox" {{ $item->is_active ? 'checked' : '' }} onchange="this.form.submit()">
                                                <span class="catalog-status-slider"></span>
                                            </label>
                                            <span class="catalog-status-label">{{ $item->is_active ? 'On' : 'Off' }}</span>
                                        </form>
                                        <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#detailKatalogModal{{ $item->id }}">
                                            <i class="bi bi-eye"></i> Detail
                                        </button>
                                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}">
                                            <i class="bi bi-pencil"></i> Edit
                                        </button>
                                        <form action="{{ route('admin.katalog.delete', $item->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus katalog ini?')">
                                                <i class="bi bi-trash"></i> Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>

                            <div class="modal fade" id="detailKatalogModal{{ $item->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary text-white">
                                            <h5 class="modal-title">Detail Katalog</h5>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row g-3">
                                                <div class="col-md-5 text-center">
                                                    @if(!empty($item->image))
                                                        <img src="{{ $katalogImageSrc }}" alt="{{ $item->name }}" class="img-fluid rounded" style="max-height:260px; object-fit:contain;">
                                                    @else
                                                        <span class="text-muted">Tidak ada gambar</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="mb-3"><strong>Nama Katalog:</strong><br>{{ $item->name }}</div>
                                                    <div class="mb-3"><strong>Kategori:</strong><br>{{ $item->kategori }}</div>
                                                    <div><strong>Deskripsi:</strong><br>{!! nl2br(e($item->description)) !!}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Edit -->
                            <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-warning text-white">
                                            <h5 class="modal-title">Edit Katalog</h5>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                        </div>
                                        <form method="POST" action="{{ route('admin.katalog.update') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <input type="hidden" name="id" value="{{ $item->id }}">
                                                
                                                <div class="mb-3">
                                                    <label class="form-label">Nama Katalog</label>
                                                    <input type="text" name="name" class="form-control" value="{{ $item->name }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Kategori</label>
                                                    <input type="text" name="kategori" class="form-control" value="{{ $item->kategori }}" placeholder="Contoh: Anime, Game, Movie" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Deskripsi</label>
                                                    <textarea name="description" class="form-control" rows="3" required>{{ $item->description }}</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Gambar Katalog (1:1)</label>
                                                    @php
                                                        $catalogImageSrc = null;
                                                        if (!empty($item->image)) {
                                                            $catalogImageRaw = $item->image;
                                                            if (str_starts_with($catalogImageRaw, 'http')) {
                                                                $catalogImageSrc = $catalogImageRaw;
                                                            } elseif (str_starts_with($catalogImageRaw, '/storage/')) {
                                                                $catalogImageSrc = asset(ltrim($catalogImageRaw, '/'));
                                                            } elseif (str_starts_with($catalogImageRaw, 'storage/')) {
                                                                $catalogImageSrc = asset($catalogImageRaw);
                                                            } else {
                                                                $catalogImageSrc = asset('storage/' . ltrim($catalogImageRaw, '/'));
                                                            }
                                                        }
                                                    @endphp
                                                    <div class="kostum-upload-grid">
                                                        <div class="kostum-upload-card">
                                                            <div class="kostum-upload-preview-wrap" id="editKatalogPreviewWrap{{ $item->id }}">
                                                                @if($catalogImageSrc)
                                                                    <img src="{{ $catalogImageSrc }}" alt="Gambar katalog {{ $item->name }}" class="kostum-upload-preview" id="editKatalogPreview{{ $item->id }}">
                                                                @else
                                                                    <div class="kostum-upload-empty" id="editKatalogEmpty{{ $item->id }}">Gambar Katalog</div>
                                                                    <img src="" alt="Preview gambar katalog" class="kostum-upload-preview d-none" id="editKatalogPreview{{ $item->id }}">
                                                                @endif
                                                            </div>
                                                            <label for="editKatalogImage{{ $item->id }}" class="btn btn-outline-secondary w-100 mb-0">
                                                                <i class="bi bi-image"></i> Pilih Gambar
                                                            </label>
                                                            <input type="file" class="d-none js-katalog-upload-input" id="editKatalogImage{{ $item->id }}" name="image" accept="image/*,.jpg,.jpeg,.png,.gif,.webp,.svg,.bmp,.tiff,.ico" data-preview-id="editKatalogPreview{{ $item->id }}" data-empty-id="editKatalogEmpty{{ $item->id }}" data-remove-id="remove_image_{{ $item->id }}">
                                                            <button type="button" class="btn btn-outline-danger btn-sm js-remove-katalog-image {{ $catalogImageSrc ? '' : 'd-none' }}" data-preview-id="editKatalogPreview{{ $item->id }}" data-empty-id="editKatalogEmpty{{ $item->id }}" data-file-input-id="editKatalogImage{{ $item->id }}" data-remove-input-id="remove_image_{{ $item->id }}">
                                                                <i class="bi bi-trash"></i> Hapus Gambar
                                                            </button>
                                                            <input type="hidden" name="remove_image" id="remove_image_{{ $item->id }}" value="0">
                                                        </div>
                                                    </div>
                                                    <small class="text-muted d-block mt-2">Unggah gambar baru atau hapus gambar lama saat edit katalog.</small>
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
                @if($search || $filter_kategori || ($sort && $sort !== 'id_desc'))
                    <div class="alert alert-warning text-center">
                        <i class="bi bi-search"></i> Pencarian tidak ditemukan. Coba ubah kata kunci atau reset.
                        <div class="mt-2">
                            <a href="{{ route('admin.data-katalog') }}" class="btn btn-sm btn-secondary">
                                <i class="bi bi-x-circle"></i> Reset Pencarian
                            </a>
                        </div>
                    </div>
                @else
                    <div class="alert alert-info text-center">
                        <i class="bi bi-info-circle"></i> Belum ada data katalog. Silakan tambahkan data baru.
                    </div>
                @endif
            @endif

        </div>
    </div>
</section>

<!-- Modal Preview Gambar Katalog (reusable) -->
<div class="modal fade" id="adminKatalogImagePreviewModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="adminKatalogImagePreviewTitle">Gambar Katalog</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img id="adminKatalogImagePreviewImg" src="" alt="Preview Gambar Katalog" class="img-fluid rounded" style="max-height: 75vh; object-fit: contain;">
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="addModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Tambah Katalog Baru</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <form method="POST" action="{{ route('admin.katalog.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Nama Katalog</label>
                        <input type="text" name="name" class="form-control" placeholder="Contoh: Judul Anime, Game, Movie" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <input type="text" name="kategori" class="form-control" placeholder="Contoh: Anime, Game, Movie" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea name="description" class="form-control" rows="3" placeholder="Deskripsi singkat katalog" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Gambar Katalog (1:1)</label>
                        <div class="kostum-upload-grid">
                            <div class="kostum-upload-card">
                                <div class="kostum-upload-preview-wrap" id="addKatalogPreviewWrap">
                                    <div class="kostum-upload-empty" id="addKatalogEmpty">Gambar Katalog</div>
                                    <img src="" alt="Preview gambar katalog" class="kostum-upload-preview d-none" id="addKatalogPreview">
                                </div>
                                <label for="addKatalogImage" class="btn btn-outline-secondary w-100 mb-0">
                                    <i class="bi bi-image"></i> Pilih Gambar
                                </label>
                                <input type="file" class="d-none js-katalog-upload-input" id="addKatalogImage" name="image" accept="image/*,.jpg,.jpeg,.png,.gif,.webp,.svg,.bmp,.tiff,.ico" required data-preview-id="addKatalogPreview" data-empty-id="addKatalogEmpty">
                                <button type="button" class="btn btn-outline-danger btn-sm js-remove-katalog-image d-none" data-preview-id="addKatalogPreview" data-empty-id="addKatalogEmpty" data-file-input-id="addKatalogImage">
                                    <i class="bi bi-trash"></i> Hapus Gambar
                                </button>
                            </div>
                        </div>
                        <small class="text-muted d-block mt-2">Pilih gambar untuk melihat preview sebelum simpan.</small>
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

        function showAdminKatalogImagePreview(src, title) {
            const img = document.getElementById('adminKatalogImagePreviewImg');
            const titleEl = document.getElementById('adminKatalogImagePreviewTitle');
            if (!img) return;

            img.src = src || '';
            if (titleEl) titleEl.textContent = title || 'Gambar Katalog';

            const modalEl = document.getElementById('adminKatalogImagePreviewModal');
            if (!modalEl || !window.bootstrap) return;
            const modal = bootstrap.Modal.getOrCreateInstance(modalEl);
            modal.show();
        }

        document.querySelectorAll('.js-katalog-image-preview').forEach(btn => {
            btn.addEventListener('click', () => {
                const src = btn.getAttribute('data-image-src');
                const title = btn.getAttribute('data-image-title');
                showAdminKatalogImagePreview(src, title);
            });
        });

        document.querySelectorAll('.js-katalog-upload-input').forEach(input => {
            input.addEventListener('change', function () {
                const file = this.files && this.files[0];
                const preview = document.getElementById(this.dataset.previewId);
                const emptyState = document.getElementById(this.dataset.emptyId);
                const removeInput = this.dataset.removeId ? document.getElementById(this.dataset.removeId) : null;
                const removeButton = document.querySelector('.js-remove-katalog-image[data-preview-id="' + this.dataset.previewId + '"]');

                if (!preview) return;

                if (file) {
                    const reader = new FileReader();
                    reader.onload = function (event) {
                        preview.src = event.target.result;
                        preview.classList.remove('d-none');
                        if (emptyState) {
                            emptyState.style.display = 'none';
                        }
                        if (removeInput) {
                            removeInput.value = '0';
                        }
                        if (removeButton) {
                            removeButton.classList.remove('d-none');
                        }
                    };
                    reader.readAsDataURL(file);
                    return;
                }

                preview.src = '';
                preview.classList.add('d-none');
                if (emptyState) {
                    emptyState.style.display = 'flex';
                }
                if (removeInput) {
                    removeInput.value = '1';
                }
                if (removeButton) {
                    removeButton.classList.add('d-none');
                }
            });
        });

        document.querySelectorAll('.js-remove-katalog-image').forEach(button => {
            button.addEventListener('click', function (event) {
                event.preventDefault();

                const preview = document.getElementById(this.dataset.previewId);
                const emptyState = document.getElementById(this.dataset.emptyId);
                const fileInput = document.getElementById(this.dataset.fileInputId);
                const removeInput = document.getElementById(this.dataset.removeInputId);

                if (preview) {
                    preview.src = '';
                    preview.classList.add('d-none');
                }
                if (emptyState) {
                    emptyState.style.display = 'flex';
                }
                if (fileInput) {
                    fileInput.value = '';
                }
                if (removeInput) {
                    removeInput.value = '1';
                }
                this.classList.add('d-none');
            });
        });

        const modalEl = document.getElementById('adminKatalogImagePreviewModal');
        if (modalEl) {
            modalEl.addEventListener('hidden.bs.modal', function () {
                const img = document.getElementById('adminKatalogImagePreviewImg');
                if (img) img.src = '';
            });
        }
    });
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

        initAdminTableSearchSort('adminKatalogTable','search-admin-katalog','sort-admin-katalog','reset-admin-katalog');
    });
</script>
@endsection
