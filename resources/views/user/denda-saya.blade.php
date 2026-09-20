@extends('layouts.main')

@section('title', 'Denda Saya - Rei Cosrent')

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

    [id^="dendaDetailModal-"] .denda-detail-columns {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 1rem;
    }

    [id^="dendaDetailModal-"] .denda-detail-column .denda-detail-item {
        min-width: 0;
        margin-bottom: 0.75rem;
    }

    [id^="dendaDetailModal-"] .denda-proof-section {
        margin-top: 1.25rem;
        padding-top: 1.25rem;
        border-top: 1px solid rgba(148, 163, 184, 0.24);
    }

    [id^="dendaDetailModal-"] .denda-proof-grid {
        margin-top: 0.75rem;
    }

    [id^="buktiModal-"] .modal-header,
    #userDendaBuktiFotoPreviewModal .modal-header {
        background-color: #0d6efd !important;
        color: #ffffff !important;
        border-color: #0d6efd !important;
    }

    [id^="buktiModal-"] .modal-title,
    #userDendaBuktiFotoPreviewModal .modal-title {
        color: #ffffff !important;
    }

    #userDendaBuktiFotoPreviewModal .modal-dialog {
        max-width: min(92vw, 760px);
    }

    #userDendaBuktiFotoPreviewModal .modal-body {
        padding: 1rem;
    }

    #userDendaBuktiFotoPreviewImg {
        display: block;
        width: auto;
        max-width: 100%;
        max-height: 78vh;
        margin: 0 auto;
        object-fit: contain;
    }

    [data-bs-theme="dark"] [id^="dendaDetailModal-"] .modal-content,
    [data-bs-theme="dark"] [id^="dendaDetailModal-"] .modal-body,
    [data-bs-theme="dark"] [id^="dendaDetailModal-"] .denda-detail-item,
    [data-bs-theme="dark"] [id^="buktiModal-"] .modal-content,
    [data-bs-theme="dark"] [id^="buktiModal-"] .modal-body {
        background-color: #0f172a !important;
        color: #ffffff !important;
        border-color: rgba(148, 163, 184, 0.28) !important;
    }

    [id^="buktiModal-"] .denda-proof-grid.proof-count-1 img {
        max-height: 360px !important;
    }

    [id^="buktiModal-"] .denda-proof-grid.proof-count-2 img {
        max-height: 260px !important;
    }

    [id^="buktiModal-"] .denda-proof-grid.proof-count-3 img,
    [id^="buktiModal-"] .denda-proof-grid.proof-count-4 img,
    [id^="buktiModal-"] .denda-proof-grid.proof-count-5 img {
        max-height: 180px !important;
    }

    [id^="dendaDetailModal-"] .denda-proof-grid img {
        display: block;
        width: 100% !important;
        height: auto !important;
        object-fit: contain !important;
        margin: 0 auto;
    }

    [id^="dendaDetailModal-"] .denda-proof-grid.proof-count-1 img {
        max-height: 360px !important;
    }

    [id^="dendaDetailModal-"] .denda-proof-grid.proof-count-2 img {
        max-height: 260px !important;
    }

    [id^="dendaDetailModal-"] .denda-proof-grid.proof-count-3 img,
    [id^="dendaDetailModal-"] .denda-proof-grid.proof-count-4 img,
    [id^="dendaDetailModal-"] .denda-proof-grid.proof-count-5 img {
        max-height: 180px !important;
    }

    @media (max-width: 767.98px) {
        [id^="dendaDetailModal-"] .denda-detail-columns {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 575.98px) {
        [id^="dendaDetailModal-"] .denda-detail-columns { gap: 0; }
    }
@endsection

@section('content')
<section class="py-4">
    <div class="container">
        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2 mb-4">
            <div>
                <h2 class="fw-bold mb-0">Denda Saya</h2>
            </div>
            <div class="d-grid d-sm-block">
                <a href="{{ route('user.profile') }}" class="btn btn-outline-primary">
                    <i class="bi bi-arrow-left"></i> Kembali ke Profil
                </a>
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">{{ session('success') }}<button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">{{ session('error') }}<button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>
        @endif

        @if(isset($dendas) && count($dendas) > 0)
            <div class="table-responsive">
                <table class="table table-hover align-middle orders-table">
                    <thead>
                        <tr>
                            <th>Nama Kostum</th>
                            <th>Jenis Denda</th>
                            <th class="d-none d-md-table-cell">Deskripsi</th>
                            <th>Jumlah</th>
                            <th>Status</th>
                            <th class="d-none d-md-table-cell">Dibuat</th>
                            <th class="text-end">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dendas as $d)
                        <tr>
                            <td>{{ $d->nama_kostum ?? '-' }}</td>
                            <td>{{ $d->jenis_denda ?? '-' }}</td>
                            <td class="d-none d-md-table-cell"><div style="max-height:120px;overflow:auto">{!! nl2br(e($d->keterangan)) !!}</div></td>
                            <td class="text-end">Rp{{ $d->jumlah_denda ? number_format($d->jumlah_denda,0,',','.') : '-' }}</td>
                            <td>
                                @php
                                    $statusClass = [
                                        'Belum Lunas' => 'bg-warning text-dark',
                                        'Lunas' => 'bg-success text-white'
                                    ][$d->status] ?? 'bg-secondary text-white';
                                @endphp
                                <span class="badge {{ $statusClass }}">{{ $d->status ? ucfirst($d->status) : '-' }}</span>
                            </td>
                            <td class="d-none d-md-table-cell text-center">{{ $d->created_at ? $d->created_at->format('d M Y') : '-' }}</td>
                            <td class="text-end">
                                <div class="d-grid gap-2">
                                    <button type="button" class="btn btn-sm btn-outline-info w-100" data-bs-toggle="modal" data-bs-target="#dendaDetailModal-{{ $d->id }}">
                                        <i class="bi bi-card-list"></i> Detail
                                    </button>

                                    @php
                                        $hasBukti = false;
                                        $foundBuktiPath = null;
                                        try {
                                            if (!empty($d->bukti_pembayaran)) {
                                                $hasBukti = true;
                                            } else {
                                                $files = \Illuminate\Support\Facades\Storage::disk('public')->files('denda');
                                                foreach ($files as $f) {
                                                    if (\Illuminate\Support\Str::startsWith(basename($f), 'bukti_denda_' . $d->id . '_')) {
                                                        $hasBukti = true;
                                                        $foundBuktiPath = $f;
                                                        break;
                                                    }
                                                }
                                            }
                                        } catch (\Exception $e) {
                                            $hasBukti = false;
                                        }
                                    @endphp

                                    @if($hasBukti)
                                        <button type="button" class="btn btn-sm btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#buktiModal-{{ $d->id }}">
                                            <i class="bi bi-eye"></i> Lihat Bukti
                                        </button>
                                    @else
                                        @if(strtolower($d->status) === strtolower('Belum Lunas'))
                                            <a href="{{ route('denda.bayar', $d->id) }}" class="btn btn-success btn-sm w-100">
                                                <i class="bi bi-cash-coin"></i> Bayar Denda
                                            </a>
                                        @endif
                                    @endif
                                </div>
                            </td>
                        </tr>

                        <!-- Detail Modal -->
                        @php
                            $detailBuktiFotos = collect([
                                $d->bukti_foto_1 ?? null,
                                $d->bukti_foto_2 ?? null,
                                $d->bukti_foto_3 ?? null,
                                $d->bukti_foto_4 ?? null,
                                $d->bukti_foto_5 ?? null,
                            ])->filter()->values();
                            $detailBuktiCount = $detailBuktiFotos->count();
                            $detailProofModalSize = $detailBuktiCount <= 1 ? 'modal-md' : ($detailBuktiCount === 2 ? 'modal-lg' : 'modal-xl');
                        @endphp
                        <div class="modal fade" id="dendaDetailModal-{{ $d->id }}" tabindex="-1" aria-labelledby="dendaDetailLabel-{{ $d->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary text-white">
                                        <h5 class="modal-title" id="dendaDetailLabel-{{ $d->id }}">Detail Denda</h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <div class="mb-2"><strong>Nama:</strong><br>{{ $d->nama ?? '-' }}</div>
                                                <div class="mb-2"><strong>Nama Kostum:</strong><br>{{ $d->nama_kostum ?? '-' }}</div>
                                                <div class="mb-2"><strong>Status:</strong><br>{{ $d->status ?? '-' }}</div>
                                                <div class="mb-2"><strong>Dibuat:</strong><br>{{ $d->created_at ? $d->created_at->format('d M Y H:i') : '-' }}</div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-2"><strong>Jenis Denda:</strong><br>{{ $d->jenis_denda ?? '-' }}</div>
                                                <div class="mb-2"><strong>Keterangan:</strong><br>{!! nl2br(e($d->keterangan)) !!}</div>
                                                <div class="mb-2"><strong>Jumlah Denda:</strong><br>Rp{{ $d->jumlah_denda ? number_format($d->jumlah_denda,0,',','.') : '-' }}</div>
                                            </div>
                                        </div>

                                        <hr>
                                        <div>
                                            <strong>Bukti Pembayaran:</strong>
                                            @php
                                                $detailBuktiPembayaranPath = null;
                                                $detailBuktiPembayaranExt = null;
                                                if (!empty($d->bukti_pembayaran)) {
                                                    $detailBuktiPembayaranPath = asset('storage/' . $d->bukti_pembayaran);
                                                    $detailBuktiPembayaranExt = strtolower(pathinfo($d->bukti_pembayaran, PATHINFO_EXTENSION));
                                                } elseif (!empty($foundBuktiPath)) {
                                                    $detailBuktiPembayaranPath = asset('storage/' . $foundBuktiPath);
                                                    $detailBuktiPembayaranExt = strtolower(pathinfo($foundBuktiPath, PATHINFO_EXTENSION));
                                                }
                                            @endphp
                                            @if($detailBuktiPembayaranPath)
                                                <div class="mt-2">
                                                    @if($detailBuktiPembayaranExt === 'pdf')
                                                        <embed src="{{ $detailBuktiPembayaranPath }}" type="application/pdf" width="100%" height="420px" />
                                                    @else
                                                        <img src="{{ $detailBuktiPembayaranPath }}" alt="Bukti Pembayaran Denda" class="img-fluid rounded" style="max-height:420px; object-fit:contain; width:100%;" onerror="this.outerHTML = '<a href=\'{{ $detailBuktiPembayaranPath }}\' target=\'_blank\' class=\'btn btn-outline-secondary\'>Download / Lihat File</a>'">
                                                    @endif
                                                </div>
                                            @else
                                                <div class="text-muted mt-2">Belum ada bukti pembayaran untuk denda ini.</div>
                                            @endif
                                        </div>

                                        <hr>
                                        <div>
                                            <strong>Foto Bukti:</strong>
                                            @if($detailBuktiCount > 0)
                                                <div class="row g-2 mt-1">
                                                    @foreach($detailBuktiFotos as $bf)
                                                        <div class="col-6 col-md-4 col-lg-3">
                                                            <button type="button" class="btn p-0 border-0 bg-transparent w-100 d-block" onclick="showUserDendaBuktiFotoPreview('{{ asset('storage/' . $bf) }}')" aria-label="Lihat foto bukti">
                                                                <img src="{{ asset('storage/' . $bf) }}" alt="Foto Bukti" class="img-fluid rounded" style="max-height:160px; object-fit:cover; width:100%; cursor:pointer;" onerror="this.outerHTML = '<a href=\'{{ asset('storage/' . $bf) }}\' target=\'_blank\' class=\'btn btn-outline-secondary btn-sm\'>Lihat File</a>'">
                                                            </button>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @else
                                                <div class="text-muted mt-1">Tidak tersedia</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Bukti Modal -->
                        <div class="modal fade" id="buktiModal-{{ $d->id }}" tabindex="-1" aria-labelledby="buktiModalLabel-{{ $d->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: #0d6efd; color: #ffffff;">
                                        <h5 class="modal-title" id="buktiModalLabel-{{ $d->id }}">Bukti Pembayaran</h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Tutup"></button>
                                    </div>
                                    <div class="modal-body" style="background-color: #ffffff; color: #141414;">
                                        @php
                                            $displayBuktiPath = null;
                                            $displayExt = null;
                                            if (!empty($d->bukti_pembayaran)) {
                                                $displayBuktiPath = asset('storage/' . $d->bukti_pembayaran);
                                                $displayExt = strtolower(pathinfo($d->bukti_pembayaran, PATHINFO_EXTENSION));
                                            } elseif (!empty($foundBuktiPath)) {
                                                $displayBuktiPath = asset('storage/' . $foundBuktiPath);
                                                $displayExt = strtolower(pathinfo($foundBuktiPath, PATHINFO_EXTENSION));
                                            }
                                        @endphp

                                        @if($displayBuktiPath)
                                            @if($displayExt === 'pdf')
                                                <embed src="{{ $displayBuktiPath }}" type="application/pdf" width="100%" height="600px" />
                                            @else
                                                <img src="{{ $displayBuktiPath }}" alt="Bukti Pembayaran" class="img-fluid rounded" style="max-height:600px; object-fit:contain; width:100%;" onerror="this.outerHTML = '<a href=\'{{ $displayBuktiPath }}\' target=\'_blank\' class=\'btn btn-outline-secondary\'>Download / Lihat File</a>'">
                                            @endif
                                        @else
                                            <div class="alert alert-secondary">Belum ada bukti pembayaran untuk denda ini.</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="alert alert-info text-center"><i class="bi bi-info-circle"></i> Belum ada data denda untuk akun Anda.</div>
        @endif
    </div>
</section>
<!-- Foto Bukti Preview Modal (inside content) -->
<div class="modal fade" id="userDendaBuktiFotoPreviewModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header modal-header-surface">
                <h5 class="modal-title">Foto Bukti</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img id="userDendaBuktiFotoPreviewImg" src="" alt="Preview" class="img-fluid rounded">
            </div>
        </div>
    </div>
</div>

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
    });
</script>
<script>
    function showUserDendaBuktiFotoPreview(src) {
        const img = document.getElementById('userDendaBuktiFotoPreviewImg');
        if (!img) return;
        img.src = src;

        const modalEl = document.getElementById('userDendaBuktiFotoPreviewModal');
        if (!modalEl || !window.bootstrap) return;
        const modal = bootstrap.Modal.getOrCreateInstance(modalEl);
        modal.show();
    }

    document.addEventListener('DOMContentLoaded', function () {
        const modalEl = document.getElementById('userDendaBuktiFotoPreviewModal');
        if (!modalEl) return;
        modalEl.addEventListener('hidden.bs.modal', function () {
            const img = document.getElementById('userDendaBuktiFotoPreviewImg');
            if (img) img.src = '';
        });
    });
</script>
@endsection

