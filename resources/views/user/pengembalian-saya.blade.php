@extends('layouts.main')

@section('title', 'Pengembalian Saya - Rei Cosrent')

@section('styles')
    .user-profile-card {
        background: #ffffff !important;
        border: 1px solid rgba(37, 99, 235, 0.12) !important;
        box-shadow: 0 12px 30px -12px rgba(16, 24, 40, 0.12) !important;
        color: #141414 !important;
        border-radius: 1.25rem !important;
    }[data-bs-theme="dark"] .user-profile-card{
        background: #0f172a !important;
        border-color: rgba(96, 165, 250, 0.16) !important;
        color: #ffffff !important;
        box-shadow: 0 18px 40px -22px rgba(0, 0, 0, 0.55) !important;
    }

    .user-profile-card .card-header {
        background: transparent !important;
        color: var(--brand-blue) !important;
        border-bottom: 1px solid rgba(37, 99, 235, 0.12) !important;
    }

    [data-bs-theme="dark"] .user-profile-card .card-header {
        border-bottom-color: rgba(96, 165, 250, 0.16) !important;
    }

    .user-profile-card .card-body,
    .user-profile-card p,
    .user-profile-card small,
    .user-profile-card h5,
    .user-profile-card td,
    .user-profile-card th,
    .user-profile-card label,
    .user-profile-card .text-muted {
        color: inherit !important;
    }

    .orders-table {
        background: var(--bs-body-bg);
        color: var(--bs-body-color);
        border: 1px solid rgba(148, 163, 184, 0.18);
        border-radius: 0;
        overflow: hidden;
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
    }[data-bs-theme="dark"] .orders-table thead th{
        background: rgba(59, 130, 246, 0.16);
        color: #ffffff;
        border-bottom-color: rgba(148, 163, 184, 0.22);
    }[data-bs-theme="dark"] .orders-table thead tr{
        background: #132645 !important;
        background-color: #132645 !important;
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

    .modal-content {
        background: #ffffff;
        color: #141414;
        border: 1px solid rgba(37, 99, 235, 0.12);
    }[data-bs-theme="dark"] .modal-content{
        background: #0f172a;
        color: #ffffff;
        border-color: rgba(96, 165, 250, 0.16);
    }

    .modal-header,
    .modal-footer {
        border-color: rgba(37, 99, 235, 0.12);
    }

    [data-bs-theme="dark"] .modal-header,
    [data-bs-theme="dark"] .modal-footer {
        border-color: rgba(96, 165, 250, 0.16);
    }

    .modal-body .form-control,
    .modal-body .form-select {
        background: #ffffff;
        color: #141414;
        border-color: rgba(37, 99, 235, 0.12);
    }

    .modal-body .form-control:focus,
    .modal-body .form-select:focus {
        background: #ffffff;
        color: #141414;
        border-color: rgba(37, 99, 235, 0.35);
        box-shadow: 0 0 0 0.2rem rgba(37, 99, 235, 0.12);
    }[data-bs-theme="dark"] .modal-body .form-control,
    [data-bs-theme="dark"] .modal-body .form-select{
        background: #0f172a;
        color: #ffffff;
        border-color: rgba(96, 165, 250, 0.16);
    }[data-bs-theme="dark"] .modal-body .form-control:focus,
    [data-bs-theme="dark"] .modal-body .form-select:focus{
        background: #0f172a;
        color: #ffffff;
        border-color: rgba(96, 165, 250, 0.35);
        box-shadow: 0 0 0 0.2rem rgba(96, 165, 250, 0.12);
    }

    .modal-body .form-control::file-selector-button {
        background: rgba(37, 99, 235, 0.08);
        color: #141414;
        border: 0;
        border-right: 1px solid rgba(37, 99, 235, 0.12);
        margin-right: 0.75rem;
    }

    [data-bs-theme="dark"] .modal-body .form-control::file-selector-button {
        background: rgba(96, 165, 250, 0.16);
        color: #ffffff;
        border-right-color: rgba(96, 165, 250, 0.16);
    }

    .history-card {
        cursor: pointer;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .history-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 24px -14px rgba(15, 23, 42, 0.22);
    }

    .history-row {
        padding: 0.85rem 0;
        border-bottom: 1px solid rgba(148, 163, 184, 0.14);
    }

    .history-row:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }

    [data-bs-theme="dark"] .history-row {
        border-bottom-color: rgba(148, 163, 184, 0.16);
    }

    .history-detail-btn {
        min-width: 92px;
        padding: 0.35rem 0.75rem;
        white-space: nowrap;
    }

    .return-photo-detail-trigger {
        cursor: zoom-in;
    }

    .status-badge {
        display: inline-block;
        font-size: 0.75rem;
        line-height: 1.2;
        border-radius: 999px;
        padding: 0.35rem 0.7rem;
    }

    .history-thumb {
        width: 100%;
        height: 120px;
        object-fit: cover;
        border-radius: 0;
        border: 1px solid rgba(148, 163, 184, 0.2);
    }

    .reapply-alert-title {
        font-size: 1.08rem;
        line-height: 1.35;
    }

    .reapply-alert-note {
        font-size: 0.98rem;
        line-height: 1.5;
    }

    .reapply-image-label {
        font-size: 0.95rem;
        font-weight: 600;
        margin-bottom: 0.45rem;
    }

    .reapply-guidance {
        display: block;
        font-size: 1.03rem;
        font-weight: 700;
        line-height: 1.6;
        margin-top: 1.15rem;
        margin-bottom: 0.9rem;
    }

    .return-page-note,
    .return-page-subnote {
        color: #141414 !important;
    }

    [data-bs-theme="dark"] .return-page-note,
    [data-bs-theme="dark"] .return-page-subnote {
        color: #ffffff !important;
    }

    .orders-table thead th {
        background: rgba(37, 99, 235, 0.08);
        color: #141414;
        border-bottom: 1px solid rgba(148, 163, 184, 0.22);
        font-weight: 700;
        white-space: nowrap;
    }

    [data-bs-theme="dark"] .orders-table thead th {
        background: rgba(59, 130, 246, 0.16);
        color: #ffffff;
        border-bottom-color: rgba(148, 163, 184, 0.22);
    }

    [id^="historyModal-"] .modal-content {
        background-color: #ffffff !important;
        color: #141414 !important;
        border: 1px solid rgba(148, 163, 184, 0.24) !important;
    }

    [id^="historyModal-"] .modal-header {
        background-color: #0d6efd !important;
        color: #ffffff !important;
        border-color: #0d6efd !important;
    }

    [id^="historyModal-"] .modal-title {
        color: #ffffff !important;
    }

    [id^="historyModal-"] .modal-body,
    [id^="historyModal-"] .modal-footer {
        background-color: #ffffff !important;
        color: #141414 !important;
        border-color: rgba(148, 163, 184, 0.24) !important;
    }

    [data-bs-theme="dark"] [id^="historyModal-"] .modal-content {
        background-color: #0f172af5 !important;
        color: #ffffff !important;
        border-color: rgba(148, 163, 184, 0.28) !important;
    }

    [data-bs-theme="dark"] [id^="historyModal-"] .modal-header {
        background-color: #0d6efd !important;
        color: #ffffff !important;
        border-color: #0d6efd !important;
    }

    [data-bs-theme="dark"] [id^="historyModal-"] .modal-body,
    [data-bs-theme="dark"] [id^="historyModal-"] .modal-footer {
        background-color: #0f172af5 !important;
        color: #ffffff !important;
        border-color: rgba(148, 163, 184, 0.28) !important;
    }

    [id^="historyModal-"] .modal-body .text-muted {
        color: #64748b !important;
    }

    [data-bs-theme="dark"] [id^="historyModal-"] .modal-body .text-muted {
        color: #cbd5e1 !important;
    }

    .return-upload-preview {
        display: none;
        align-items: center;
        gap: 0.75rem;
        margin-top: 0.65rem;
        padding: 0.65rem;
        border: 1px solid rgba(37, 99, 235, 0.2);
        border-radius: 0.65rem;
        background: rgba(37, 99, 235, 0.06);
    }

    .return-upload-preview.is-visible { display: flex; }

    .return-upload-preview img {
        width: 86px;
        height: 64px;
        flex: 0 0 auto;
        object-fit: cover;
        border-radius: 0.45rem;
        border: 1px solid rgba(37, 99, 235, 0.2);
    }

    .return-upload-preview-info {
        min-width: 0;
        flex: 1 1 auto;
    }

    .return-upload-preview-name {
        display: block;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        font-weight: 600;
    }

    [data-bs-theme="dark"] .return-upload-preview {
        background: rgba(96, 165, 250, 0.12);
        border-color: rgba(96, 165, 250, 0.3);
    }
@endsection

@section('content')
<section class="py-4">
    <div class="container">
        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2 mb-4 page-intro">
            <div>
                <h2 class="fw-bold mb-0">Pengembalian Kostum</h2>
                <p class="mb-0 return-page-note">Ajukan pengembalian untuk pesanan yang sudah diterima.</p>
            </div>
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

        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2 mb-3 section-intro">
            <div>
                <h5 class="fw-bold mb-0">Pesanan Siap Dikembalikan</h5>
                <p class="mb-0 return-page-subnote">Pesanan berstatus diterima yang sudah dibayar atau menggunakan COD dapat diajukan pengembalian.</p>
            </div>
        </div>

        @if($activeOrders->isEmpty())
            <div class="alert alert-info text-center" role="alert">
                Tidak ada pesanan yang sedang aktif untuk dikembalikan.
            </div>
        @else
            <div class="table-responsive mb-4">
                <table class="table table-hover align-middle orders-table">
                    <thead>
                        <tr>
                            <th>Nama Kostum</th>
                            <th>Tgl Pemesanan</th>
                            <th>Tgl Pakai</th>
                            <th>Tgl Kembali</th>
                            <th>Pengembalian</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($activeOrders as $order)
                            @php
                                $isReapplyOrder = data_get($order, 'pengembalian.status') === 'ditolak';
                                $returnStatus = strtolower((string) data_get($order, 'pengembalian.status'));
                                $canSubmitReturn = !$returnStatus || $returnStatus === 'ditolak';
                            @endphp
                            <tr>
                                <td>{{ $order->nama_kostum ?? '-' }}</td>
                                <td>
                                    @if($order->created_at)
                                        {{ \Carbon\Carbon::parse($order->created_at)->format('d M Y') }}<br>
                                        {{ \Carbon\Carbon::parse($order->created_at)->format('H:i:s') }}
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>{{ $order->tanggal_pemakaian ? \Carbon\Carbon::parse($order->tanggal_pemakaian)->format('d M Y') : '-' }}</td>
                                <td>{{ $order->tanggal_pengembalian ? \Carbon\Carbon::parse($order->tanggal_pengembalian)->format('d M Y') : '-' }}</td>
                                <td>
                                    <button type="button" class="btn btn-sm {{ $isReapplyOrder ? 'btn-outline-warning' : 'btn-outline-primary' }} w-100" data-bs-toggle="modal" data-bs-target="#returnModal-{{ $order->id }}" {{ $canSubmitReturn ? '' : 'disabled' }}>
                                        <i class="bi bi-arrow-counterclockwise"></i> {{ $isReapplyOrder ? 'Ajukan Ulang' : 'Ajukan' }}
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif

        <div class="row g-4">
            <div class="col-12 col-md-4">
                <div class="card user-profile-card border-0 h-100">
                    <div class="card-header py-3">
                        <h5 class="mb-0 fw-bold"><i class="bi bi-geo-alt"></i> Alamat Admin</h5>
                    </div>
                    <div class="card-body p-3 p-md-4">
                        <p class="mb-2 fw-semibold">{{ $profile_contact->name ?? 'Admin Rei Cosrent' }}</p>
                        <p class="mb-1 text-muted">{{ $profile_contact->address ?? 'Alamat admin belum tersedia.' }}</p>
                        <p class="mb-3 text-muted">{{ $profile_contact->phone ? 'No. Telepon: ' . $profile_contact->phone : 'Nomor telepon admin belum tersedia.' }}</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card user-profile-card border-0 h-100">
                    <div class="card-header py-3">
                        <h5 class="mb-0 fw-bold"><i class="bi bi-info-circle"></i> Panduan Pengembalian</h5>
                    </div>
                    <div class="card-body p-3 p-md-4">
                        <p class="mb-3">Ikuti aturan pengembalian yang berlaku sebelum mengajukan proses pengembalian kostum.</p>
                        <a href="{{ route('peraturan') }}" class="btn btn-outline-primary w-100 d-flex align-items-center justify-content-center gap-2">
                            <i class="bi bi-journal-text"></i> Lihat Peraturan
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card user-profile-card border-0 h-100">
                    <div class="card-header py-3">
                        <h5 class="mb-0 fw-bold"><i class="bi bi-clock-history"></i> Riwayat Pengembalian</h5>
                    </div>
                    <div class="card-body p-3 p-md-4">
                    @if($returnRequests->isEmpty())
                        <div class="text-muted">Belum ada pengajuan pengembalian.</div>
                    @else
                        <div>
                            @foreach($returnRequests->take(5) as $request)
                                @php
                                    $statusMap = [
                                        'proses' => ['Proses', 'bg-warning text-dark'],
                                        'ditolak' => ['Ditolak', 'bg-danger'],
                                        'diterima' => ['Diterima', 'bg-success'],
                                    ];
                                    $statusData = $statusMap[$request->status ?? 'proses'] ?? ['Proses', 'bg-secondary'];
                                    $pemesanName = data_get($request, 'formulir.nama', $request->snapshot_nama ?? '-');
                                    $kostumName = data_get($request, 'formulir.nama_kostum', $request->snapshot_nama_kostum ?? '-');
                                @endphp
                                <div class="history-row d-flex justify-content-between align-items-center gap-3">
                                    <div class="flex-grow-1">
                                        <div class="fw-semibold">{{ $pemesanName }}</div>
                                        <div class="small text-muted">Kostum: {{ $kostumName }}</div>
                                        <div class="mt-1">
                                            <span class="badge {{ $statusData[1] }}">{{ $statusData[0] }}</span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column gap-2">
                                        <button type="button" class="btn btn-sm btn-outline-info history-detail-btn" data-bs-toggle="modal" data-bs-target="#historyModal-{{ $request->id }}">
                                            <i class="bi bi-card-list"></i> Detail
                                        </button>
                                        @if(($request->status ?? '') === 'ditolak' && data_get($request, 'formulir.id'))
                                            @php
                                                $formulir = data_get($request, 'formulir');
                                                $g1 = $request->gambar1 ? asset('storage/' . $request->gambar1) : '';
                                                $g2 = $request->gambar2 ? asset('storage/' . $request->gambar2) : '';
                                                $g3 = $request->gambar3 ? asset('storage/' . $request->gambar3) : '';
                                            @endphp
                                            <button type="button"
                                                class="btn btn-sm btn-outline-primary reapply-btn"
                                                data-formulir-id="{{ data_get($formulir, 'id') }}"
                                                data-action="{{ route('user.pengembalian.submit', data_get($formulir, 'id')) }}"
                                                data-nama-kostum="{{ e(data_get($formulir, 'nama_kostum')) }}"
                                                data-tanggal-pemesanan="{{ data_get($formulir, 'created_at') }}"
                                                data-tanggal-pengembalian="{{ data_get($formulir, 'tanggal_pengembalian') }}"
                                                data-catatan="{{ e($request->catatan ?? '') }}"
                                                data-gambar1="{{ $g1 }}"
                                                data-gambar2="{{ $g2 }}"
                                                data-gambar3="{{ $g3 }}"
                                            >
                                                <i class="bi bi-arrow-counterclockwise"></i> Pengajuan Ulang
                                            </button>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@foreach($activeOrders as $order)
@php
    $latestPengembalian = data_get($order, 'pengembalian');
    $isReapplyOrder = $latestPengembalian && $latestPengembalian->status === 'ditolak';
@endphp
<div class="modal fade" id="returnModal-{{ $order->id }}" tabindex="-1" aria-labelledby="returnModalLabel-{{ $order->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #0d6efd !important; color: #ffffff !important; border-color: #0d6efd !important;">
                <h5 class="modal-title" id="returnModalLabel-{{ $order->id }}">Ajukan Pengembalian - {{ $order->nama_kostum ?? 'Kostum' }}</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('user.pengembalian.submit', $order->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    @if($isReapplyOrder)
                        <div class="alert alert-info">
                            <div class="fw-semibold reapply-alert-title mb-1">Pengajuan sebelumnya ditolak admin</div>
                            <div class="reapply-alert-note mb-2">Catatan admin: {{ data_get($latestPengembalian, 'catatan_admin') ?: 'Belum ada catatan admin.' }}</div>
                            <div class="row g-2">
                                @foreach(['gambar1', 'gambar2', 'gambar3'] as $imageField)
                                    @php
                                        $imagePath = data_get($latestPengembalian, $imageField);
                                        $imageLabel = preg_replace('/([a-zA-Z]+)(\d+)/', '$1 $2', ucfirst($imageField));
                                    @endphp
                                    <div class="col-md-4">
                                        <div class="reapply-image-label text-muted">{{ $imageLabel }} sebelumnya</div>
                                        @if($imagePath)
                                            <button type="button" class="btn p-0 border-0 bg-transparent return-photo-detail-trigger" data-photo-src="{{ asset('storage/' . $imagePath) }}" data-photo-title="{{ $imageLabel }} sebelumnya" aria-label="Lihat detail {{ $imageLabel }} sebelumnya">
                                                <img src="{{ asset('storage/' . $imagePath) }}" alt="Foto sebelumnya {{ $imageField }}" class="img-fluid history-thumb">
                                            </button>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="text-muted reapply-guidance">Unggah foto baru jika ingin mengganti, atau biarkan kosong untuk memakai foto sebelumnya.</div>
                    @endif
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <div class="small text-muted mb-1">Nama Kostum</div>
                            <div class="fw-semibold">{{ $order->nama_kostum ?? '-' }}</div>
                        </div>
                        <div class="col-md-6">
                            <div class="small text-muted mb-1">Tanggal Pemesanan</div>
                            <div class="fw-semibold">
                                @if($order->created_at)
                                    {{ \Carbon\Carbon::parse($order->created_at)->format('d M Y') }}<br>
                                    {{ \Carbon\Carbon::parse($order->created_at)->format('H:i:s') }}
                                @else
                                    -
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="small text-muted mb-1">Tanggal Pengembalian</div>
                            <div class="fw-semibold">{{ $order->tanggal_pengembalian ? \Carbon\Carbon::parse($order->tanggal_pengembalian)->format('d M Y') : '-' }}</div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold" for="gambar1_{{ $order->id }}">Gambar 1</label>
                        <input type="file" id="gambar1_{{ $order->id }}" name="gambar1" class="form-control" accept="image/*" {{ $isReapplyOrder ? '' : 'required' }}>
                        <div class="return-upload-preview" data-preview-for="gambar1_{{ $order->id }}">
                            <img src="" alt="Preview Gambar 1">
                            <div class="return-upload-preview-info"><span class="return-upload-preview-name"></span><small class="text-muted">Preview gambar</small></div>
                            <button type="button" class="btn btn-outline-danger btn-sm return-upload-remove" aria-label="Hapus Gambar 1"><i class="bi bi-trash"></i></button>
                        </div>
                        <div class="form-text">{{ $isReapplyOrder ? 'Opsional saat pengajuan ulang. Kosongkan jika foto lama masih dipakai.' : 'Wajib diisi. Foto kelengkapan kostum sebelum dikemas.' }}</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold" for="gambar2_{{ $order->id }}">Gambar 2</label>
                        <input type="file" id="gambar2_{{ $order->id }}" name="gambar2" class="form-control" accept="image/*" {{ $isReapplyOrder ? '' : 'required' }}>
                        <div class="return-upload-preview" data-preview-for="gambar2_{{ $order->id }}">
                            <img src="" alt="Preview Gambar 2">
                            <div class="return-upload-preview-info"><span class="return-upload-preview-name"></span><small class="text-muted">Preview gambar</small></div>
                            <button type="button" class="btn btn-outline-danger btn-sm return-upload-remove" aria-label="Hapus Gambar 2"><i class="bi bi-trash"></i></button>
                        </div>
                        <div class="form-text">{{ $isReapplyOrder ? 'Opsional saat pengajuan ulang. Kosongkan jika foto lama masih dipakai.' : 'Wajib diisi. Foto kostum yang sudah dikemas.' }}</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold" for="gambar3_{{ $order->id }}">Gambar 3</label>
                        <input type="file" id="gambar3_{{ $order->id }}" name="gambar3" class="form-control" accept="image/*">
                        <div class="return-upload-preview" data-preview-for="gambar3_{{ $order->id }}">
                            <img src="" alt="Preview Gambar 3">
                            <div class="return-upload-preview-info"><span class="return-upload-preview-name"></span><small class="text-muted">Preview gambar</small></div>
                            <button type="button" class="btn btn-outline-danger btn-sm return-upload-remove" aria-label="Hapus Gambar 3"><i class="bi bi-trash"></i></button>
                        </div>
                        <div class="form-text">Opsional.</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold" for="catatan_{{ $order->id }}">Catatan Pengembalian</label>
                        <textarea
                            id="catatan_{{ $order->id }}"
                            name="catatan"
                            class="form-control"
                            rows="4"
                            placeholder="Contoh: Kostum sudah saya kembalikan hari ini dalam kondisi baik.">{{ old('catatan', $isReapplyOrder ? (data_get($latestPengembalian, 'catatan') ?? '') : '') }}</textarea>
                        <div class="form-text">Opsional.</div>
                    </div>

                    <div class="alert alert-warning mb-0">
                        Setelah dikirim, status pesanan akan <strong>diverifikasi admin</strong>.
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-check-circle"></i> Kirim Pengembalian
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

@foreach($returnRequests->take(5) as $request)
<div class="modal fade" id="historyModal-{{ $request->id }}" tabindex="-1" aria-labelledby="historyModalLabel-{{ $request->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #0d6efd !important; color: #ffffff !important; border-color: #0d6efd !important;">
                <h5 class="modal-title" id="historyModalLabel-{{ $request->id }}">Detail Pengembalian</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if($request)
                    @php
                        $statusMap = [
                            'proses' => ['Proses', 'bg-warning text-dark'],
                            'ditolak' => ['Ditolak', 'bg-danger'],
                            'diterima' => ['Diterima', 'bg-success'],
                        ];
                        $statusData = $statusMap[$request->status ?? 'proses'] ?? ['Proses', 'bg-secondary'];
                        $pemesanName = data_get($request, 'formulir.nama', $request->snapshot_nama ?? '-');
                        $pemesanEmail = data_get($request, 'formulir.email', $request->snapshot_email);
                        $kostumName = data_get($request, 'formulir.nama_kostum', $request->snapshot_nama_kostum ?? '-');
                        $tanggalPemesanan = data_get($request, 'formulir.created_at');
                        $tanggalPakai = data_get($request, 'formulir.tanggal_pemakaian');
                        $tanggalKembali = data_get($request, 'formulir.tanggal_pengembalian');
                        $tanggalPengajuan = $request->created_at ? $request->created_at->format('d M Y H:i') : '-';
                    @endphp
                    <div class="row g-3 mb-3">
                        <div class="col-md-4">
                            <div class="small text-muted mb-1">Pemesan</div>
                            <div class="fw-semibold">{{ $pemesanName }}</div>
                            @if($pemesanEmail)
                                <div class="small text-muted">{{ $pemesanEmail }}</div>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <div class="small text-muted mb-1">Nama Kostum</div>
                            <div class="fw-semibold">{{ $kostumName }}</div>
                        </div>
                        <div class="col-md-4">
                            <div class="small text-muted mb-1">Tanggal Pemesanan</div>
                            <div class="fw-semibold">
                                @if($tanggalPemesanan)
                                    {{ \Carbon\Carbon::parse($tanggalPemesanan)->format('d M Y') }}<br>
                                    {{ \Carbon\Carbon::parse($tanggalPemesanan)->format('H:i:s') }}
                                @else
                                    -
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="small text-muted mb-1">Tanggal Pengajuan</div>
                            <div class="fw-semibold">{{ $tanggalPengajuan }}</div>
                        </div>
                        <div class="col-md-4">
                            <div class="small text-muted mb-1">Status</div>
                            <div><span class="badge status-badge {{ $statusData[1] }}">{{ $statusData[0] }}</span></div>
                        </div>
                        <div class="col-md-4">
                            <div class="small text-muted mb-1">Tanggal Pakai</div>
                            <div class="fw-semibold">{{ $tanggalPakai ? \Carbon\Carbon::parse($tanggalPakai)->format('d M Y') : '-' }}</div>
                        </div>
                        <div class="col-md-4">
                            <div class="small text-muted mb-1">Tanggal Kembali</div>
                            <div class="fw-semibold">{{ $tanggalKembali ? \Carbon\Carbon::parse($tanggalKembali)->format('d M Y') : '-' }}</div>
                        </div>
                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col-md-4">
                            @if($request->gambar1)
                                <button type="button" class="btn p-0 border-0 bg-transparent return-photo-detail-trigger" data-photo-src="{{ asset('storage/' . $request->gambar1) }}" data-photo-title="Gambar 1" aria-label="Lihat detail gambar 1">
                                    <img src="{{ asset('storage/' . $request->gambar1) }}" alt="Gambar 1" class="img-fluid history-thumb">
                                </button>
                            @endif
                        </div>
                        <div class="col-md-4">
                            @if($request->gambar2)
                                <button type="button" class="btn p-0 border-0 bg-transparent return-photo-detail-trigger" data-photo-src="{{ asset('storage/' . $request->gambar2) }}" data-photo-title="Gambar 2" aria-label="Lihat detail gambar 2">
                                    <img src="{{ asset('storage/' . $request->gambar2) }}" alt="Gambar 2" class="img-fluid history-thumb">
                                </button>
                            @endif
                        </div>
                        <div class="col-md-4">
                            @if($request->gambar3)
                                <button type="button" class="btn p-0 border-0 bg-transparent return-photo-detail-trigger" data-photo-src="{{ asset('storage/' . $request->gambar3) }}" data-photo-title="Gambar 3" aria-label="Lihat detail gambar 3">
                                    <img src="{{ asset('storage/' . $request->gambar3) }}" alt="Gambar 3" class="img-fluid history-thumb">
                                </button>
                            @endif
                        </div>
                    </div>
                    <div class="text-start mt-3">
                        <div class="fw-semibold mb-2">Catatan User</div>
                        <div class="text-muted">{{ $request->catatan ?: 'Tidak ada catatan.' }}</div>
                        <hr>
                        <div class="fw-semibold mb-2">Catatan Admin</div>
                        <div class="text-muted">{{ $request->catatan_admin ?: 'Belum ada catatan admin.' }}</div>
                    </div>
                @else
                    <div class="alert alert-info mb-0">Detail pengembalian belum tersedia.</div>
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
@endforeach

            <!-- Dynamic return modal used for Pengajuan Ulang when a specific return modal is not present -->
            <div class="modal fade" id="returnModalDynamic" tabindex="-1" aria-labelledby="returnModalDynamicLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: #0d6efd !important; color: #ffffff !important; border-color: #0d6efd !important;">
                            <h5 class="modal-title" id="returnModalDynamicLabel">Ajukan Pengembalian</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form id="returnModalDynamicForm" method="POST" action="" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div id="returnDynamicAlert" class="alert alert-info d-none"></div>

                                <div class="row g-3 mb-3">
                                    <div class="col-md-6">
                                        <div class="small text-muted mb-1">Nama Kostum</div>
                                        <div id="dynamicNamaKostum" class="fw-semibold">-</div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="small text-muted mb-1">Tanggal Pemesanan</div>
                                        <div id="dynamicTanggalPemesanan" class="fw-semibold">-</div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="small text-muted mb-1">Tanggal Pengembalian</div>
                                        <div id="dynamicTanggalKembali" class="fw-semibold">-</div>
                                    </div>
                                </div>

                                <div class="row g-3 mb-3" id="dynamicPreviousImagesRow">
                                    <!-- injected previous images -->
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold" for="dynamic_gambar1">Gambar 1</label>
                                    <input type="file" id="dynamic_gambar1" name="gambar1" class="form-control" accept="image/*" required>
                                    <div class="return-upload-preview" data-preview-for="dynamic_gambar1">
                                        <img src="" alt="Preview Gambar 1"><div class="return-upload-preview-info"><span class="return-upload-preview-name"></span><small class="text-muted">Preview gambar</small></div><button type="button" class="btn btn-outline-danger btn-sm return-upload-remove" aria-label="Hapus Gambar 1"><i class="bi bi-trash"></i></button>
                                    </div>
                                    <div class="form-text">Wajib diisi. Foto kelengkapan kostum sebelum dikemas.</div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold" for="dynamic_gambar2">Gambar 2</label>
                                    <input type="file" id="dynamic_gambar2" name="gambar2" class="form-control" accept="image/*" required>
                                    <div class="return-upload-preview" data-preview-for="dynamic_gambar2">
                                        <img src="" alt="Preview Gambar 2"><div class="return-upload-preview-info"><span class="return-upload-preview-name"></span><small class="text-muted">Preview gambar</small></div><button type="button" class="btn btn-outline-danger btn-sm return-upload-remove" aria-label="Hapus Gambar 2"><i class="bi bi-trash"></i></button>
                                    </div>
                                    <div class="form-text">Wajib diisi. Foto kostum yang sudah dikemas.</div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold" for="dynamic_gambar3">Gambar 3</label>
                                    <input type="file" id="dynamic_gambar3" name="gambar3" class="form-control" accept="image/*">
                                    <div class="return-upload-preview" data-preview-for="dynamic_gambar3">
                                        <img src="" alt="Preview Gambar 3"><div class="return-upload-preview-info"><span class="return-upload-preview-name"></span><small class="text-muted">Preview gambar</small></div><button type="button" class="btn btn-outline-danger btn-sm return-upload-remove" aria-label="Hapus Gambar 3"><i class="bi bi-trash"></i></button>
                                    </div>
                                    <div class="form-text">Opsional.</div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold" for="dynamic_catatan">Catatan Pengembalian</label>
                                    <textarea id="dynamic_catatan" name="catatan" class="form-control" rows="4" placeholder="Contoh: Kostum sudah saya kembalikan hari ini dalam kondisi baik."></textarea>
                                    <div class="form-text">Opsional.</div>
                                </div>

                                <div class="alert alert-warning mb-0">
                                    Setelah dikirim, status pesanan akan <strong>diverifikasi admin</strong>.
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-success">
                                    <i class="bi bi-check-circle"></i> Kirim Pengembalian
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
<div class="modal fade" id="userReturnPhotoDetailModal" tabindex="-1" aria-labelledby="userReturnPhotoDetailTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="userReturnPhotoDetailTitle">Detail Foto</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body text-center">
                <img id="userReturnPhotoDetailImage" src="" alt="Detail Foto" class="img-fluid rounded" style="max-height: 75vh; object-fit: contain;">
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const photoModal = document.getElementById('userReturnPhotoDetailModal');
        const photoImage = document.getElementById('userReturnPhotoDetailImage');
        const photoTitle = document.getElementById('userReturnPhotoDetailTitle');

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

        function clearReturnUpload(input, preview) {
            if (input._returnPreviewUrl) {
                URL.revokeObjectURL(input._returnPreviewUrl);
                input._returnPreviewUrl = '';
            }
            input.value = '';
            const image = preview ? preview.querySelector('img') : null;
            const name = preview ? preview.querySelector('.return-upload-preview-name') : null;
            if (image) image.removeAttribute('src');
            if (name) name.textContent = '';
            if (preview) preview.classList.remove('is-visible');
        }

        document.addEventListener('change', function (event) {
            const input = event.target;
            if (!input.matches('input[type="file"][name="gambar1"], input[type="file"][name="gambar2"], input[type="file"][name="gambar3"]')) return;

            const preview = document.querySelector('[data-preview-for="' + input.id + '"]');
            const image = preview ? preview.querySelector('img') : null;
            const name = preview ? preview.querySelector('.return-upload-preview-name') : null;
            const file = input.files && input.files[0];
            if (!file || !preview || !image || !name) return;

            if (!file.type.startsWith('image/')) {
                clearReturnUpload(input, preview);
                return;
            }

            if (input._returnPreviewUrl) URL.revokeObjectURL(input._returnPreviewUrl);
            input._returnPreviewUrl = URL.createObjectURL(file);
            image.src = input._returnPreviewUrl;
            name.textContent = file.name;
            preview.classList.add('is-visible');
        });

        document.addEventListener('click', function (event) {
            const button = event.target.closest('.return-upload-remove');
            if (!button) return;
            const preview = button.closest('.return-upload-preview');
            if (!preview) return;
            const input = document.getElementById(preview.dataset.previewFor);
            if (input) clearReturnUpload(input, preview);
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const alerts = document.querySelectorAll('.alert-success');
        alerts.forEach(alert => {
            setTimeout(() => {
                if (window.bootstrap && typeof window.bootstrap.Alert !== 'undefined') {
                    const instance = window.bootstrap.Alert.getOrCreateInstance(alert);
                    instance.close();
                } else {
                    alert.remove();
                }
            }, 5000);
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const submitUrlTemplate = "{{ route('user.pengembalian.submit', '%FORMULIR_ID%') }}";

        document.querySelectorAll('.reapply-btn').forEach(btn => {
            btn.addEventListener('click', function (e) {
                const formulirId = this.dataset.formulirId;
                if (!formulirId) {
                    alert('Formulir tidak ditemukan untuk pengajuan ulang.');
                    return;
                }

                // hide parent modal (history) if present
                let parentModal = this.closest('.modal');
                if (parentModal) {
                    try { const inst = bootstrap.Modal.getInstance(parentModal); if (inst) inst.hide(); } catch (err) {}
                }

                // if there's a specific return modal for the order, open it
                const specificModal = document.getElementById('returnModal-' + formulirId);
                if (specificModal) {
                    try { bootstrap.Modal.getOrCreateInstance(specificModal).show(); return; } catch (err) {}
                }

                // Otherwise, populate the dynamic modal with provided data attributes
                const namaKostum = this.dataset.namaKostum || '-';
                const tanggalPemesanan = this.dataset.tanggalPemesanan || '-';
                const tanggalKembali = this.dataset.tanggalPengembalian || '-';
                const prevG1 = this.dataset.gambar1 || '';
                const prevG2 = this.dataset.gambar2 || '';
                const prevG3 = this.dataset.gambar3 || '';
                const prevCatatan = this.dataset.catatan || '';

                // set title and fields
                document.getElementById('returnModalDynamicLabel').textContent = 'Ajukan Pengembalian - ' + namaKostum;
                document.getElementById('dynamicNamaKostum').textContent = namaKostum;
                document.getElementById('dynamicTanggalPemesanan').textContent = tanggalPemesanan;
                document.getElementById('dynamicTanggalKembali').textContent = tanggalKembali ? tanggalKembali : '-';
                document.getElementById('dynamic_catatan').value = prevCatatan;

                const imagesRow = document.getElementById('dynamicPreviousImagesRow');
                imagesRow.innerHTML = '';
                if (prevG1) imagesRow.insertAdjacentHTML('beforeend', '<div class="col-md-4"><div class="small text-muted mb-1">Gambar 1 sebelumnya</div><img src="'+prevG1+'" class="img-fluid history-thumb"/></div>');
                if (prevG2) imagesRow.insertAdjacentHTML('beforeend', '<div class="col-md-4"><div class="small text-muted mb-1">Gambar 2 sebelumnya</div><img src="'+prevG2+'" class="img-fluid history-thumb"/></div>');
                if (prevG3) imagesRow.insertAdjacentHTML('beforeend', '<div class="col-md-4"><div class="small text-muted mb-1">Gambar 3 sebelumnya</div><img src="'+prevG3+'" class="img-fluid history-thumb"/></div>');

                // update form action
                const form = document.getElementById('returnModalDynamicForm');
                form.action = submitUrlTemplate.replace('%FORMULIR_ID%', formulirId);

                // ensure required attributes for reapply: make gambar1/gambar2 optional if previous images exist?
                // We will keep fields required to encourage fresh photos; users can still submit without changing via backend handling.

                // show modal
                try { bootstrap.Modal.getOrCreateInstance(document.getElementById('returnModalDynamic')).show(); } catch (err) { console.error(err); alert('Gagal membuka modal pengajuan ulang.'); }
            });
        });
    });
</script>
@endsection