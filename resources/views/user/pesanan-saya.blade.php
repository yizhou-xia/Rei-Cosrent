@extends('layouts.main')

@section('title', 'Pesanan Saya - Rei Cosrent')

@section('styles')
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

    .orders-filter-panel {
        background: #ffffff;
        border: 1px solid rgba(148, 163, 184, 0.28);
        color: #141414;
    }

    [data-bs-theme="dark"] .orders-filter-panel {
        background: #0f172a;
        border-color: rgba(148, 163, 184, 0.28);
        color: #ffffff;
    }

    .orders-filter-panel .form-control,
    .orders-filter-panel .form-select {
        background-color: #ffffff;
        color: #141414;
        color-scheme: light;
        border-color: rgba(148, 163, 184, 0.35);
        min-height: 38px;
        padding: 0.4rem 0.65rem;
        font-size: 0.875rem;
    }

    [data-bs-theme="dark"] .orders-filter-panel .form-control,
    [data-bs-theme="dark"] .orders-filter-panel .form-select {
        background-color: rgba(255, 255, 255, 0.08);
        color: #ffffff;
        color-scheme: dark;
        border-color: rgba(148, 163, 184, 0.35);
    }

    .orders-filter-panel .form-select option {
        background-color: #ffffff;
        color: #141414;
    }

    [data-bs-theme="dark"] .orders-filter-panel .form-select option {
        background-color: #111827;
        color: #ffffff;
    }

    .orders-filter-panel .input-group-text {
        background-color: #ffffff;
        color: #5f6368;
        border-color: rgba(148, 163, 184, 0.35);
    }

    [data-bs-theme="dark"] .orders-filter-panel .input-group-text {
        background-color: rgba(255, 255, 255, 0.08);
        color: #cbd5e1;
        border-color: rgba(148, 163, 184, 0.35);
    }

    .orders-filter-actions {
        display: flex;
        gap: 0.5rem;
    }

    .orders-filter-actions .btn {
        flex: 1 1 0;
        min-height: 38px;
        padding: 0.4rem 0.65rem;
        font-size: 0.875rem;
        white-space: nowrap;
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

    #orderEditModal .modal-content,
    #orderEditModal .modal-body,
    #orderEditModal .modal-footer {
        background-color: #ffffff !important;
        color: #141414 !important;
    }

    [data-bs-theme="dark"] #orderEditModal .modal-content,
    [data-bs-theme="dark"] #orderEditModal .modal-body,
    [data-bs-theme="dark"] #orderEditModal .modal-footer {
        background-color: #0f172af5 !important;
        color: #ffffff !important;
    }

    #orderEditModal .modal-body label,
    #orderEditModal .modal-body .form-check-label,
    #orderEditModal .modal-body .form-control::placeholder,
    #orderEditModal .modal-body .form-text,
    #orderEditModal .modal-body strong,
    #orderEditModal .modal-body .form-check-input {
        color: #141414 !important;
    }

    [data-bs-theme="dark"] #orderEditModal .modal-body label,
    [data-bs-theme="dark"] #orderEditModal .modal-body .form-check-label,
    [data-bs-theme="dark"] #orderEditModal .modal-body .form-control::placeholder,
    [data-bs-theme="dark"] #orderEditModal .modal-body .form-text,
    [data-bs-theme="dark"] #orderEditModal .modal-body strong,
    [data-bs-theme="dark"] #orderEditModal .modal-body .form-check-input {
        color: #ffffff !important;
    }

    #orderEditModal .form-control {
        background-color: #ffffff !important;
        color: #141414 !important;
        border-color: rgba(148, 163, 184, 0.3) !important;
    }

    [data-bs-theme="dark"] #orderEditModal .form-control {
        background-color: rgba(255, 255, 255, 0.08) !important;
        color: #ffffff !important;
        border-color: rgba(148, 163, 184, 0.35) !important;
    }

    #orderEditModal .order-edit-date-input {
        box-sizing: border-box !important;
        width: 100% !important;
        max-width: 375px !important;
        height: 38px !important;
        min-height: 38px !important;
        padding: 0.35rem 0.75rem !important;
    }

    #orderEditModal .form-control:focus {
        background-color: #ffffff !important;
        color: #141414 !important;
        box-shadow: 0 0 0 0.15rem rgba(13, 110, 253, 0.25);
    }

    [data-bs-theme="dark"] #orderEditModal .form-control:focus {
        background-color: rgba(255, 255, 255, 0.1) !important;
        color: #ffffff !important;
    }

    .orders-table .order-actions-cell {
        min-width: 12rem;
        vertical-align: top;
    }

    .orders-table .order-actions {
        display: grid;
        gap: 0.5rem;
        min-width: 10.5rem;
    }

    .orders-table .order-actions .btn,
    .orders-table .order-actions form {
        width: 100%;
        margin: 0;
    }

    .orders-table .order-actions .btn {
        min-height: 2.35rem;
        white-space: normal;
        line-height: 1.25;
    }

    @media (max-width: 767.98px) {
        .orders-table .order-actions-cell {
            min-width: 11rem;
        }

        .orders-table .order-actions {
            min-width: 9.5rem;
            gap: 0.4rem;
        }

        .orders-table .order-actions .btn {
            min-height: 2.5rem;
            padding: 0.5rem 0.65rem;
            font-size: 0.8125rem;
        }
    }
@endsection

@section('content')
<section class="py-4">
    <div class="container">
        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2 mb-4">
            <h2 class="fw-bold mb-0">Pesanan Saya</h2>
            <div class="d-grid d-sm-block">
                <a href="{{ route('user.profile') }}" class="btn btn-outline-primary">
                    <i class="bi bi-arrow-left"></i> Kembali ke Profil
                </a>
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-circle"></i> {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if($pesanan->isEmpty())
            <div class="alert alert-info text-center" role="alert">
                Anda belum memiliki pesanan.
            </div>
        @else
            <div class="card orders-filter-panel mb-3">
                <div class="card-body">
                    <div class="row g-2 align-items-end">
                        <div class="col-12 col-lg-4">
                            <label for="search-user-pesanan" class="form-label mb-1">Cari Pesanan</label>
                            <input id="search-user-pesanan" type="search" class="form-control" placeholder="Cari nama kostum, status, catatan..." aria-label="Cari pesanan">
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <label for="sort-user-pesanan" class="form-label mb-1">Urutkan</label>
                            <select id="sort-user-pesanan" class="form-select">
                                <option value="">Urutan default</option>
                                <option value="name_asc">Nama Kostum A-Z</option>
                                <option value="name_desc">Nama Kostum Z-A</option>
                                <option value="date_desc">Tanggal Pemakaian Terbaru</option>
                                <option value="date_asc">Tanggal Pemakaian Terlama</option>
                                <option value="price_asc">Total Harga Termurah</option>
                                <option value="price_desc">Total Harga Termahal</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <label for="filter-status-user-pesanan" class="form-label mb-1">Status</label>
                            <select id="filter-status-user-pesanan" class="form-select">
                                <option value="">Semua Status</option>
                                <option value="proses">Proses</option>
                                <option value="revisi">Revisi</option>
                                <option value="diterima">Diterima</option>
                                <option value="selesai">Selesai</option>
                                <option value="dibatalkan">Dibatalkan</option>
                            </select>
                        </div>
                        <div class="col-12 col-lg-2 orders-filter-actions">
                            <button id="search-user-pesanan-button" type="button" class="btn btn-primary">
                                <i class="bi bi-search me-1" aria-hidden="true"></i> Cari
                            </button>
                            <button id="reset-user-pesanan" type="button" class="btn btn-secondary d-none">
                                <i class="bi bi-x-circle me-1" aria-hidden="true"></i> Reset
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table id="userPesananTable" class="table table-hover align-middle orders-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kostum</th>
                            <th>Tanggal Pemakaian</th>
                            <th>Tanggal Pemesanan</th>
                            <th>Total Harga</th>
                            <th>Status</th>
                            <th>Catatan Admin</th>
                            <th class="text-end">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pesanan as $index => $order)
                        <tr data-order-name="{{ strtolower((string) data_get($order, 'nama_kostum', '')) }}"
                            data-order-date="{{ data_get($order, 'tanggal_pemakaian', '') }}"
                            data-order-total="{{ (float) data_get($order, 'total_harga', 0) }}"
                            data-order-status="{{ data_get($order, 'status', '') }}">
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $order->nama_kostum ?? '-' }}</td>
                            <td>{{ $order->tanggal_pemakaian ? \Carbon\Carbon::parse($order->tanggal_pemakaian)->format('d M Y') : '-' }}</td>
                            <td>
                                @if($order->created_at)
                                    {{ \Carbon\Carbon::parse($order->created_at)->format('d M Y') }}<br>
                                    {{ \Carbon\Carbon::parse($order->created_at)->format('H:i:s') }}
                                @else
                                    -
                                @endif
                            </td>
                            <td>Rp {{ number_format((float) $order->total_harga, 0, ',', '.') }}</td>
                            <td>
                                @php
                                    $statusClass = [
                                        'proses' => 'bg-warning text-dark',
                                        'revisi' => 'bg-secondary',
                                        'selesai' => 'bg-success',
                                        'diterima' => 'bg-info text-dark',
                                        'dibatalkan' => 'bg-danger',
                                    ][$order->status] ?? 'bg-dark';
                                @endphp
                                <span class="badge {{ $statusClass }}">{{ ucfirst($order->status) }}</span>
                            </td>
                            <td>{{ $order->keterangan ?? '-' }}</td>
                            <td class="text-end order-actions-cell">
                                <div class="order-actions">
                                    <button type="button" class="btn btn-sm btn-outline-info w-100" data-bs-toggle="modal" data-bs-target="#orderDetailModal-{{ $order->id }}">
                                        <i class="bi bi-card-list"></i> Detail
                                    </button>

                                @php
                                    $hasBukti = false;
                                    $foundBuktiPath = null;

                                    if (isset($order->pembayaran_safe) && !empty($order->pembayaran_safe->bukti_pembayaran)) {
                                        $hasBukti = true;
                                    } elseif (session('uploaded_bukti_for') == $order->id && session('uploaded_bukti_path')) {
                                        $hasBukti = true;
                                    } else {
                                        try {
                                            $files = \Illuminate\Support\Facades\Storage::disk('public')->files('bukti_pembayaran');
                                            foreach ($files as $f) {
                                                if (\Illuminate\Support\Str::startsWith(basename($f), 'bukti_' . $order->id . '_')) {
                                                    $hasBukti = true;
                                                    $foundBuktiPath = $f;
                                                    break;
                                                }
                                            }
                                        } catch (\Exception $e) {
                                            $hasBukti = false;
                                        }
                                    }
                                @endphp

                                @if($hasBukti)
                                    @php
                                        $directBuktiUrl = null;
                                        $directExt = null;

                                        if (isset($order->pembayaran_safe) && !empty($order->pembayaran_safe->bukti_pembayaran)) {
                                            $directBuktiUrl = asset('storage/' . $order->pembayaran_safe->bukti_pembayaran);
                                            $directExt = strtolower(pathinfo($order->pembayaran_safe->bukti_pembayaran, PATHINFO_EXTENSION));
                                        } elseif (session('uploaded_bukti_for') == $order->id && session('uploaded_bukti_path')) {
                                            $directBuktiUrl = asset('storage/' . session('uploaded_bukti_path'));
                                            $directExt = strtolower(pathinfo(session('uploaded_bukti_path'), PATHINFO_EXTENSION));
                                        } elseif (!empty($foundBuktiPath)) {
                                            $directBuktiUrl = asset('storage/' . $foundBuktiPath);
                                            $directExt = strtolower(pathinfo($foundBuktiPath, PATHINFO_EXTENSION));
                                        }
                                    @endphp

                                @else
                                    @if($order->metode_pembayaran === 'COD')
                                        <span class="badge bg-success w-100">Pembayaran Tunai (COD)</span>
                                    @elseif($order->status === 'diterima')
                                        <a href="{{ route('pembayaran', ['id' => $order->id]) }}" class="btn btn-success btn-sm w-100">
                                            <i class="bi bi-cash-coin"></i> Lanjutkan ke Pembayaran
                                        </a>
                                    @endif
                                @endif

                                @if(in_array($order->status, ['proses', 'revisi']))
                                    <button type="button" class="btn btn-sm btn-outline-primary w-100 order-edit-button" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#orderEditModal"
                                        data-order-id="{{ $order->id }}"
                                        data-order-username="{{ $order->username }}"
                                        data-order-nomor_telepon="{{ $order->nomor_telepon }}"
                                        data-order-nomor_telepon_2="{{ $order->nomor_telepon_2 }}"
                                        data-order-tanggal_pemakaian="{{ $order->tanggal_pemakaian }}"
                                        data-order-tanggal_pengembalian="{{ $order->tanggal_pengembalian }}"
                                        data-order-metode_pembayaran="{{ $order->metode_pembayaran }}"
                                        data-order-kartu_identitas="{{ $order->kartu_identitas }}"
                                        data-order-pernyataan="{{ e($order->pernyataan ?? '') }}"
                                        data-order-nama_kostum="{{ $order->nama_kostum }}"
                                    >
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </button>
                                    <button type="button" class="btn btn-sm btn-outline-danger w-100" data-bs-toggle="modal" data-bs-target="#orderActionModal-{{ $order->id }}">
                                        <i class="bi bi-x-octagon"></i> Batalkan Pesanan
                                    </button>
                                @endif

                                @if($order->status === 'selesai')
                                    @php
                                        $hasUlasan = \App\Models\Ulasan::where('id', $order->id)->exists();
                                    @endphp
                                    <a href="{{ route('user.ulasan.form', $order->id) }}" class="btn btn-sm btn-outline-warning w-100">
                                        <i class="bi bi-star"></i> {{ $hasUlasan ? 'Edit Ulasan' : 'Beri Ulasan' }}
                                    </a>
                                @endif
                                </div>
                            </td>
                        </tr>

                        <!-- Detail Modal -->
                        <div class="modal fade" id="orderDetailModal-{{ $order->id }}" tabindex="-1" aria-labelledby="orderDetailLabel-{{ $order->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: #0d6efd; color: #fff;">
                                        <h5 class="modal-title" id="orderDetailLabel-{{ $order->id }}">Detail Pesanan</h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body" style="background-color: #ffffff; color: #141414;">
                                        @php
                                            $detailStatusClass = [
                                                'proses' => 'bg-warning text-dark',
                                                'revisi' => 'bg-secondary',
                                                'selesai' => 'bg-success',
                                                'diterima' => 'bg-info text-dark',
                                                'dibatalkan' => 'bg-danger',
                                            ][$order->status] ?? 'bg-dark';
                                        @endphp
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <div class="mb-2"><strong>Nama Kostum:</strong><br>{{ $order->nama_kostum ?? '-' }}</div>
                                                <div class="mb-2"><strong>Tanggal Pemakaian:</strong><br>{{ $order->tanggal_pemakaian ? \Carbon\Carbon::parse($order->tanggal_pemakaian)->format('d M Y') : '-' }}</div>
                                                <div class="mb-2"><strong>Tanggal Pemesanan:</strong><br>
                                                    @if($order->created_at)
                                                        {{ \Carbon\Carbon::parse($order->created_at)->format('d M Y') }}<br>
                                                        {{ \Carbon\Carbon::parse($order->created_at)->format('H:i:s') }}
                                                    @else
                                                        -
                                                    @endif
                                                </div>
                                                <div class="mb-2"><strong>Tanggal Update Pesanan:</strong><br>{{ $order->updated_at ? \Carbon\Carbon::parse($order->updated_at)->format('d M Y H:i') : '-' }}</div>
                                                <div class="mb-2"><strong>Tgl Kembali:</strong><br>{{ $order->tanggal_pengembalian ? \Carbon\Carbon::parse($order->tanggal_pengembalian)->format('d M Y') : '-' }}</div>
                                                <div class="mb-2"><strong>Total Harga:</strong><br>Rp {{ number_format((float) $order->total_harga, 0, ',', '.') }}</div>
                                                <div class="mb-2"><strong>Metode Pembayaran:</strong><br>{{ strtoupper((string) $order->metode_pembayaran) === 'COD' ? 'Tunai (COD)' : ($order->metode_pembayaran ?? '-') }}</div>
                                                @if(strtoupper((string) $order->metode_pembayaran) !== 'COD')
                                                    <div class="mb-2"><strong>Bukti Pembayaran:</strong><br>
                                                        @if(!empty($directBuktiUrl) && ($directExt ?? '') === 'pdf')
                                                            <a href="{{ $directBuktiUrl }}" target="_blank" rel="noopener" class="btn btn-sm btn-outline-primary mt-1">
                                                                <i class="bi bi-file-earmark-pdf"></i> Lihat PDF
                                                            </a>
                                                        @elseif(!empty($directBuktiUrl))
                                                            <img src="{{ $directBuktiUrl }}" alt="Bukti Pembayaran" class="img-fluid rounded mt-1" style="max-height: 220px; object-fit: contain;">
                                                        <!-- @else -->
                                                            <span class="text-muted">Belum tersedia</span>
                                                        @endif
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-2"><strong>Username:</strong><br>{{ $order->username }}</div>
                                                <div class="mb-2"><strong>Nomor Telepon:</strong><br>{{ $order->nomor_telepon }}</div>
                                                <div class="mb-2"><strong>Nomor Telepon 2:</strong><br>{{ $order->nomor_telepon_2 }}</div>
                                                <div class="mb-2"><strong>Alamat:</strong><br>{{ $order->alamat }}</div>
                                                <div class="mb-2"><strong>Kartu Identitas:</strong><br>{{ $order->kartu_identitas }}</div>
                                                <div class="mb-2"><strong>Catatan Admin:</strong><br>{{ $order->keterangan ?? '-' }}</div>
                                                <div class="mb-2"><strong>Status:</strong><br><span class="badge {{ $detailStatusClass }}">{{ ucfirst($order->status) }}</span></div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <strong>Foto Kartu Identitas:</strong>
                                                @if($order->foto_kartu_identitas)
                                                    <img src="{{ asset('storage/' . $order->foto_kartu_identitas) }}" alt="Foto Kartu Identitas" class="img-fluid rounded mt-2">
                                                @else
                                                    <div class="text-muted">Tidak tersedia</div>
                                                @endif
                                            </div>
                                            <div class="col-md-6">
                                                <strong>Selfie Kartu Identitas:</strong>
                                                @if($order->selfie_kartu_identitas)
                                                    <img src="{{ asset('storage/' . $order->selfie_kartu_identitas) }}" alt="Selfie Kartu Identitas" class="img-fluid rounded mt-2">
                                                @else
                                                    <div class="text-muted">Tidak tersedia</div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Action Modal (Batalkan pesanan) -->
                        @if(in_array($order->status, ['proses', 'revisi']))
                        <div class="modal fade" id="orderActionModal-{{ $order->id }}" tabindex="-1" aria-labelledby="orderActionLabel-{{ $order->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header modal-header-surface">
                                        <h5 class="modal-title" id="orderActionLabel-{{ $order->id }}"><i class="bi bi-x-octagon"></i> Batalkan Pesanan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="mb-3">Pesanan #{{ $order->id }} akan diubah statusnya menjadi dibatalkan. Data pesanan tetap tersimpan.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <form id="orderActionForm-{{ $order->id }}" method="POST" action="{{ route('user.pesanan.cancel', $order->id) }}">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">
                                                <i class="bi bi-check-circle"></i> Batalkan Pesanan
                                            </button>
                                        </form>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Batal</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Edit Pesanan Modal -->
            <div class="modal fade" id="orderEditModal" tabindex="-1" aria-labelledby="orderEditLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: #0d6efd; color: #fff;">
                            <h5 class="modal-title" id="orderEditLabel"><i class="bi bi-pencil-square"></i> Edit Pesanan</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form id="orderEditForm" method="POST" action="" enctype="multipart/form-data" data-base-action="{{ url('/pesanan-saya') }}/">
                            @csrf
                            <div class="modal-body" style="background-color: #ffffff; color: #141414;">
                                <input type="hidden" name="order_id" id="edit_order_id">
                                <input type="hidden" name="_method" value="POST">
                                <input type="hidden" name="pernyataan" id="edit_pernyataan">

                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Username</label>
                                        <input type="text" name="nama" id="edit_username" class="form-control border-secondary" required readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Nomor Telepon</label>
                                        <input type="text" name="nomor_telepon" id="edit_nomor_telepon" class="form-control border-secondary" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Nama Kostum</label>
                                        <input type="text" id="edit_nama_kostum" class="form-control border-secondary" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Nomor Telepon Pihak Kedua</label>
                                        <input type="text" name="nomor_telepon_2" id="edit_nomor_telepon_2" class="form-control border-secondary" required>
                                    </div>
                                </div>

                                <hr class="border-secondary">

                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Tanggal Pemakaian</label>
                                        <input type="date" name="tanggal_pemakaian" id="edit_tanggal_pemakaian" class="form-control border-secondary order-edit-date-input" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Tanggal Pengembalian</label>
                                        <input type="date" name="tanggal_pengembalian" id="edit_tanggal_pengembalian" class="form-control border-secondary order-edit-date-input" required>
                                    </div>
                                </div>

                                <div class="row g-3 mt-3">
                                    <div class="col-md-12">
                                        <label class="form-label">Kartu Identitas</label>
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="kartu_identitas" id="edit_identitas_pelajar" value="Kartu Pelajar" required>
                                                    <label class="form-check-label" for="edit_identitas_pelajar">Kartu Pelajar</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="kartu_identitas" id="edit_identitas_kia" value="KIA" required>
                                                    <label class="form-check-label" for="edit_identitas_kia">KIA</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="kartu_identitas" id="edit_identitas_ktm" value="KTM" required>
                                                    <label class="form-check-label" for="edit_identitas_ktm">KTM</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="kartu_identitas" id="edit_identitas_ktp" value="KTP" required>
                                                    <label class="form-check-label" for="edit_identitas_ktp">KTP</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="kartu_identitas" id="edit_identitas_lainnya" value="Lainnya" required>
                                                    <label class="form-check-label" for="edit_identitas_lainnya">Lainnya</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-3 mt-3">
                                    <div class="col-md-12">
                                        <label class="form-label">Metode Pembayaran</label>
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="metode_pembayaran" id="edit_pembayaran_qris" value="QRIS" required>
                                                    <label class="form-check-label" for="edit_pembayaran_qris">Non-tunai (QRIS)</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="metode_pembayaran" id="edit_pembayaran_cod" value="COD" required>
                                                    <label class="form-check-label" for="edit_pembayaran_cod">Tunai (COD)</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-3 mt-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Foto Kartu Identitas</label>
                                        <input type="file" name="foto_kartu_identitas" class="form-control border-secondary" accept="image/*">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Selfie Kartu Identitas</label>
                                        <input type="file" name="selfie_kartu_identitas" class="form-control border-secondary" accept="image/*">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer" style="background-color: #ffffff;">

                                <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>
@endsection

@section('scripts')
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Auto-dismiss success alert after 5 seconds
        const successAlert = document.querySelector('.alert-success');
        if (successAlert) {
            try {
                setTimeout(() => {
                    if (window.bootstrap && typeof window.bootstrap.Alert !== 'undefined') {
                        const instance = window.bootstrap.Alert.getOrCreateInstance(successAlert);
                        instance.close();
                    } else {
                        successAlert.remove();
                    }
                }, 5000);
            } catch (e) {}
        }

        const orderEditModal = document.getElementById('orderEditModal');
        if (orderEditModal) {
            orderEditModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                if (!button) return;

                const orderId = button.dataset.orderId;
                const baseAction = document.getElementById('orderEditForm').dataset.baseAction;
                const form = document.getElementById('orderEditForm');
                const action = baseAction + orderId + '/update';

                form.action = action;
                document.getElementById('edit_order_id').value = orderId || '';
                document.getElementById('edit_username').value = button.dataset.orderUsername || '';
                document.getElementById('edit_nomor_telepon').value = button.dataset.orderNomor_telepon || '';
                document.getElementById('edit_nomor_telepon_2').value = button.dataset.orderNomor_telepon_2 || '';
                document.getElementById('edit_pernyataan').value = button.dataset.orderPernyataan || '';
                document.getElementById('edit_nama_kostum').value = button.dataset.orderNama_kostum || '';
                document.getElementById('edit_tanggal_pemakaian').value = formatDateInputValue(button.dataset.orderTanggal_pemakaian || '');
                document.getElementById('edit_tanggal_pengembalian').value = formatDateInputValue(button.dataset.orderTanggal_pengembalian || '');

                const paymentValue = button.dataset.orderMetode_pembayaran || '';
                document.querySelectorAll('#orderEditForm input[name="metode_pembayaran"]').forEach(function (radio) {
                    radio.checked = radio.value === paymentValue;
                });

                const kartuValue = button.dataset.orderKartu_identitas || '';
                const kartuKnown = ['Kartu Pelajar','KIA','KTM','KTP'];
                const kartuButtons = document.querySelectorAll('#orderEditForm input[name="kartu_identitas"]');
                kartuButtons.forEach(function(radio) {
                    if (kartuKnown.includes(kartuValue)) {
                        radio.checked = radio.value === kartuValue;
                    } else {
                        radio.checked = radio.value === 'Lainnya';
                    }
                });
            });
        }

        function formatDateInputValue(value) {
            if (!value) {
                return '';
            }
            const normalized = value.split(' ')[0].split('T')[0];
            return normalized;
        }
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const table = document.getElementById('userPesananTable');
        const searchInput = document.getElementById('search-user-pesanan');
        const searchButton = document.getElementById('search-user-pesanan-button');
        const sortSelect = document.getElementById('sort-user-pesanan');
        const statusSelect = document.getElementById('filter-status-user-pesanan');
        const resetButton = document.getElementById('reset-user-pesanan');

        if (!table || !searchInput || !searchButton || !sortSelect || !statusSelect || !resetButton || !table.tBodies[0]) return;

        const tbody = table.tBodies[0];
        const originalRows = Array.from(tbody.rows);
        let hasAppliedFilter = false;

        function normalize(value) {
            return String(value || '').trim().toLowerCase();
        }

        function syncResetVisibility() {
            resetButton.classList.toggle('d-none', !hasAppliedFilter);
        }

        function hasActiveFilter() {
            return searchInput.value.trim() !== ''
                || sortSelect.value !== ''
                || statusSelect.value !== '';
        }

        function updateOrderRows() {
            const query = normalize(searchInput.value);
            const selectedStatus = normalize(statusSelect.value);
            const sortValue = sortSelect.value;
            const rows = originalRows.filter(function (row) {
                const rowText = normalize(row.textContent);
                const rowStatus = normalize(row.dataset.orderStatus);
                return rowText.includes(query) && (!selectedStatus || rowStatus === selectedStatus);
            });

            rows.sort(function (firstRow, secondRow) {
                const firstName = normalize(firstRow.dataset.orderName);
                const secondName = normalize(secondRow.dataset.orderName);
                const firstDate = firstRow.dataset.orderDate || '';
                const secondDate = secondRow.dataset.orderDate || '';
                const firstTotal = Number(firstRow.dataset.orderTotal || 0);
                const secondTotal = Number(secondRow.dataset.orderTotal || 0);

                switch (sortValue) {
                    case 'name_asc':
                        return firstName.localeCompare(secondName, 'id', { numeric: true });
                    case 'name_desc':
                        return secondName.localeCompare(firstName, 'id', { numeric: true });
                    case 'date_desc':
                        return secondDate.localeCompare(firstDate);
                    case 'date_asc':
                        return firstDate.localeCompare(secondDate);
                    case 'price_asc':
                        return firstTotal - secondTotal;
                    case 'price_desc':
                        return secondTotal - firstTotal;
                    default:
                        return originalRows.indexOf(firstRow) - originalRows.indexOf(secondRow);
                }
            });

            tbody.replaceChildren(...rows);
            rows.forEach(function (row, index) {
                if (row.cells[0]) row.cells[0].textContent = index + 1;
            });
            syncResetVisibility();
        }

        searchButton.addEventListener('click', function () {
            hasAppliedFilter = hasActiveFilter();
            updateOrderRows();
        });

        searchInput.addEventListener('keydown', function (event) {
            if (event.key === 'Enter') {
                event.preventDefault();
                hasAppliedFilter = hasActiveFilter();
                updateOrderRows();
            }
        });

        resetButton.addEventListener('click', function () {
            searchInput.value = '';
            sortSelect.value = '';
            statusSelect.value = '';
            hasAppliedFilter = false;
            updateOrderRows();
        });

        syncResetVisibility();
    });
</script>
@endsection
