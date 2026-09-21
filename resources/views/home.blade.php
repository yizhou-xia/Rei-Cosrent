@extends('layouts.main')

@section('title', 'Rei Cosrent - Sewa Kostum Cosplay')

@section('styles')
    /* AiStarterKit-like visual tweaks for homepage only */
    :root {
        --ak-card-bg: #ffffff;
        --ak-card-border: rgba(37, 99, 235, 0.12);
        --ak-secondary-text: #141414;
        --ak-card-shadow: 0 12px 30px -12px rgba(16,24,40,0.12);
    }[data-bs-theme="dark"]{
        --ak-card-bg: #0f172a;
        --ak-card-border: rgba(96,165,250,0.16);
        --ak-secondary-text: #ffffff;
        --ak-card-shadow: 0 18px 40px -22px rgba(0,0,0,0.55);
    }

    .ak-hero {
        height: min(720px, calc(100svh - var(--nav-height, 72px)));
        min-height: 360px;
        box-sizing: border-box;
        padding: clamp(1.5rem, 5vh, 3rem) 0;
        position: relative;
        overflow: hidden;
        isolation: isolate;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background: #02050d;
        border-bottom-left-radius: 32px;
        border-bottom-right-radius: 32px;
    }
    .ak-hero-image {
        display: block;
        width: 75%;
        height: 75%;
        min-height: 100%;
        max-height: 100%;
        object-fit: cover;
        object-position: center;
        filter: blur(5px) saturate(1.0) brightness(1.0);
        transform: scale(1.035);
        position: relative;
        z-index: 1;
    }
    .ak-hero-media {
        order: 2;
        width: 100%;
        min-height: 50%;
        flex: 1 1 0;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        padding: clamp(.75rem, 2.2vh, 1.5rem) clamp(.5rem, 2vw, 2rem);
    }
    .ak-hero-content {
        position: relative;
        order: 1;
        z-index: 4;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        flex: 0 0 auto;
        margin-top: clamp(.75rem, 2.5vh, 1.5rem);
        padding: clamp(.75rem, 2vh, 1.25rem) 1rem clamp(.5rem, 1.5vh, 1rem);
        text-align: center;
        pointer-events: none;
        text-shadow: 0 2px 18px rgba(0, 0, 0, .9);
    }
    .ak-hero-content h1 {
        margin: 0 0 .65rem;
        color: #fff;
        font-size: clamp(1.45rem, 4vw, 3rem);
        font-weight: 800;
        letter-spacing: .02em;
    }
    .ak-hero-content p {
        max-width: 720px;
        margin: 0;
        color: #f8fafc;
        font-size: clamp(.8rem, 1.8vw, 1.25rem);
        text-shadow: 0 2px 12px rgba(0, 0, 0, .75);
    }
    .ak-hero-action {
        order: 3;
        position: relative;
        z-index: 4;
        pointer-events: auto;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: .5rem;
        margin: clamp(.75rem, 2vh, 1.25rem) 0 clamp(1.75rem, 5vh, 3rem);
        padding: .65rem 1.15rem;
        border: 1px solid rgba(191, 219, 254, .7);
        border-radius: 999px;
        background: rgba(15, 23, 42, .72);
        color: #fff;
        font-size: clamp(.78rem, 1.4vw, .95rem);
        font-weight: 700;
        text-decoration: none;
        box-shadow: 0 8px 24px rgba(2, 6, 23, .45);
        backdrop-filter: blur(8px);
        transition: background .2s ease, transform .2s ease, box-shadow .2s ease;
    }
    .ak-hero-action:hover,
    .ak-hero-action:focus-visible {
        background: rgba(37, 99, 235, .9);
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 12px 28px rgba(37, 99, 235, .35);
    }
    .ak-hero::after {
        content: '';
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at var(--ak-pointer-x, 50%) var(--ak-pointer-y, 50%), rgba(147, 197, 253, .16), transparent 28%);
        transition: background .2s ease-out;
        pointer-events: none;
        z-index: 3;
    }
    .ak-hero .ak-stars,
    .ak-hero .ak-meteors { position: absolute; inset: 0; pointer-events: none; overflow: hidden; }
    .ak-hero .ak-stars { z-index: 5; opacity: 1; background-image: radial-gradient(circle, rgba(255,255,255,1) 0 1.2px, transparent 1.8px), radial-gradient(circle, rgba(147,197,253,.95) 0 1.2px, transparent 1.8px), radial-gradient(circle, rgba(255,255,255,.9) 0 1.6px, transparent 2.2px); background-size: 137px 113px, 211px 179px, 317px 223px; background-position: 17px 21px, 83px 39px, 141px 7px; animation: ak-star-drift 18s linear infinite, ak-star-twinkle 3.4s ease-in-out infinite alternate; }
    .ak-hero .ak-meteors { z-index: 5; }
    .ak-hero .ak-meteor { position: absolute; top: -15%; left: var(--meteor-left); width: 3px; height: var(--meteor-length); border-radius: 999px; background: linear-gradient(to bottom, transparent, rgba(255,255,255,1) 55%, rgba(147,197,253,1)); box-shadow: 0 0 10px 3px rgba(147,197,253,.95); transform: rotate(35deg); animation: ak-meteor-fall var(--meteor-duration) linear var(--meteor-delay) infinite; opacity: 0; }
    @keyframes ak-star-drift { to { background-position: 57px 81px, 133px 99px, 191px 67px; } }
    @keyframes ak-star-twinkle { from { opacity: .55; } to { opacity: 1; } }
    @keyframes ak-meteor-fall { 0%, 72% { opacity: 0; transform: translate3d(0, -15vh, 0) rotate(35deg); } 76% { opacity: 1; } 100% { opacity: 0; transform: translate3d(-32vw, 115vh, 0) rotate(35deg); } }
    @media (prefers-reduced-motion: reduce) {
        .ak-hero .ak-stars, .ak-hero .ak-meteor { animation: none; }
    }
    @media (max-width: 575.98px) {
        .ak-hero { height: clamp(420px, 86svh, 680px); min-height: 420px; padding: 1.25rem 0; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px; }
        .ak-hero-content { margin-top: .65rem; padding-top: .75rem; }
        .ak-hero-content h1 { margin-bottom: .35rem; }
        .ak-hero-content p { max-width: 330px; }
        .ak-hero-action { margin-top: .75rem; margin-bottom: 1.25rem; }
        .ak-hero-media { padding: .75rem .2rem; }
        .ak-hero-image { width: 100%; height: auto; min-height: 0; max-height: 100%; object-fit: contain; transform: none; }
    }
    @media (min-width: 576px) and (max-width: 991.98px) {
        .ak-hero-image { width: 100%; height: auto; min-height: 0; max-height: 100%; object-fit: contain; transform: none; }
    }
    .ak-cta { display:inline-flex; align-items:center; gap:.75rem; padding: .7rem 1.25rem; border-radius:999px; color:#fff; background-image: linear-gradient(97deg, #2563eb 0%, #93c5fd 140.21%) !important; box-shadow: 0 12px 30px -12px rgba(37,99,235,0.5); text-decoration: none; background-size: 200% auto; background-position: 0% center; transition: background-position 0.6s ease-in-out; }
    .ak-cta:hover { background-image: linear-gradient(97deg, #93c5fd 0%, #2563eb 140.21%) !important; background-position: 100% center; color: #fff; text-decoration: none; }
    .ak-cta:focus { background-image: linear-gradient(97deg, #2563eb 0%, #93c5fd 140.21%) !important; color: #fff; text-decoration: none; }

    .ak-glow { position:absolute; right:-10%; top:-10%; width:700px; height:400px; filter: blur(60px); opacity: .35; pointer-events:none; z-index:0; background: radial-gradient(circle at 30% 30%, #2563eb 0%, rgba(37,99,235,0.25) 30%, transparent 60%), radial-gradient(circle at 70% 70%, #60a5fa 0%, rgba(96,165,250,0.18) 20%, transparent 50%); }

    /* Catalog cards: rounded, soft shadow, gradient border */
    .ak-catalog .card.category-card { border-radius:22px; overflow:visible; background: var(--ak-card-bg); border: 1px solid var(--ak-card-border); box-shadow: var(--ak-card-shadow); color: var(--ak-secondary-text); }
    .ak-catalog .card.category-card img { border-radius:16px; width: 100%; aspect-ratio: 1 / 1; object-fit:cover; }
    .ak-catalog .card.category-card { width: 100%; }
    .ak-catalog .catalog-grid > .col { min-width: 0; }
    .ak-catalog .catalog-card-info { min-width: 0; }
    .ak-catalog .catalog-card-info h5,
    .ak-catalog .catalog-card-info p { overflow-wrap: anywhere; }
    .ak-catalog .card-body h5 { color: var(--ak-secondary-text) !important; font-weight:700; }
    .ak-catalog .card-body p { color: var(--ak-secondary-text) !important; }
    .ak-catalog .catalog-card-info { text-align: left; }
    .ak-catalog .catalog-card-info h5 { text-align: center; }
    .ak-catalog .catalog-card-divider {
        width: 72%;
        margin: .55rem auto .65rem;
        border: 0;
        border-top: 1px solid var(--ak-card-border);
        opacity: 1;
    }
    @media (min-width: 1000px) {
        .ak-catalog .category-card {
            max-width: 250px;
            margin-right: auto;
            margin-left: auto;
        }
    }
    @media (max-width: 750px) {
        .ak-catalog .category-card {
            max-width: 350px;
            margin-right: auto;
            margin-left: auto;
        }
    }
    .ak-catalog .catalog-filter-card {
        background: var(--ak-card-bg);
        border: 1px solid var(--ak-card-border);
        box-shadow: var(--ak-card-shadow);
    }
    .ak-catalog {
        scroll-margin-top: calc(var(--nav-height, 72px) + 32px);
    }
    .ak-catalog.catalog-arrival {
        animation: ak-catalog-arrival .9s ease-out;
    }
    @keyframes ak-catalog-arrival {
        0% { background-color: rgba(37, 99, 235, .16); }
        100% { background-color: transparent; }
    }
    html {
        scroll-behavior: smooth;
    }
    .ak-catalog .catalog-filter-card .form-control,
    .ak-catalog .catalog-filter-card .form-select {
        background: var(--ak-card-bg);
        color: var(--ak-secondary-text);
        border-color: var(--ak-card-border);
    }
    .ak-catalog .catalog-filter-card .form-control::placeholder { color: var(--ak-secondary-text); opacity: .65; }
    .ak-catalog .alert,
    .ak-catalog .alert * { color: var(--ak-secondary-text) !important; }

    /* Profile card style */
    .ak-profile { background: transparent; }
    .ak-profile .profile-card { border-radius:18px; padding:1.25rem; box-shadow:0 24px 50px -24px rgba(16,24,40,0.2); background: var(--ak-card-bg); border: 1px solid var(--ak-card-border); color: var(--ak-secondary-text); }
    .ak-profile .profile-identity-card { height: 100%; padding: 1.5rem 1rem; border: 1px solid var(--ak-card-border); border-radius: 16px; background: color-mix(in srgb, var(--ak-card-bg) 88%, #0b1220 12%); box-shadow: 0 12px 28px -20px rgba(16,24,40,0.45); }
    .ak-profile .profile-card .text-muted,
    .ak-profile .profile-card .card-title,
    .ak-profile .profile-card h4,
    .ak-profile .profile-card h5 { color: var(--ak-secondary-text) !important; }
    .ak-profile .profile-card .profile-heading,
    .ak-profile .profile-card .profile-name {
        color: var(--brand-blue) !important;
    }
    .ak-profile .profile-card .profile-about {
        color: var(--ak-secondary-text) !important;
    }
    .ak-profile .text-primary { color: var(--ak-secondary-text) !important; }
    .ak-profile img.rounded-circle { width:130px; height:130px; object-fit:cover; border-radius:999px; }
    .ak-profile .profile-about-section { padding-bottom: 1.25rem; border-bottom: 1px solid var(--ak-card-border); }
    .ak-profile .profile-contact { margin-top: 1.25rem; }
    .ak-profile .profile-contact-list { display: flex; flex-direction: column; gap: .50rem; }
    .ak-profile .profile-contact-item { min-height: 50px; display: flex; align-items: flex-start; gap: .65rem; }
    .ak-profile .profile-contact-icon { width: 2.25rem; height: 2.25rem; flex: 0 0 2.25rem; display: inline-flex; align-items: center; justify-content: center; border-radius: 50%; background: rgba(37, 99, 235, .12); color: var(--brand-blue); font-size: 1.05rem; }
    .ak-profile .profile-contact-content { min-width: 0; }
    .ak-profile .profile-email-button { margin-top: .5rem; }

    /* Contact card */
    .ak-contact .card { border-radius:18px; box-shadow: 0 20px 40px -20px rgba(16,24,40,0.2); background: var(--ak-card-bg); border: 1px solid var(--ak-card-border); color: var(--ak-secondary-text); }
    .ak-contact .card-title,
    .ak-contact .contact-heading,
    .ak-contact .contact-label,
    .ak-contact .contact-value {
        color: var(--brand-blue) !important;
    }
    .ak-contact .card .text-muted { color: var(--ak-secondary-text) !important; }
    .ak-contact .text-secondary,
    .ak-contact .text-success,
    .ak-contact p,
    .ak-contact small,
    .ak-contact .list-group-item,
    .ak-contact .list-group-item p,
    .ak-contact .list-group-item small { color: var(--ak-secondary-text) !important; }

    /* Dark mode (follows your JS-driven data-bs-theme) */

    [data-bs-theme="dark"] .ak-hero::after {
        background: radial-gradient(circle at var(--ak-pointer-x, 50%) var(--ak-pointer-y, 50%), rgba(147, 197, 253, .2), transparent 28%);
    }

    [data-bs-theme="dark"] .ak-cta {
        background-image: linear-gradient(97deg, #2563eb 0%, #93c5fd 140.21%) !important;
        color: #fff !important;
    }
    [data-bs-theme="dark"] .ak-cta:hover {
        background-image: linear-gradient(97deg, #93c5fd 0%, #2563eb 140.21%) !important;
        background-position: 100% center;
        color: #fff !important;
    }

    html[data-bs-theme="light"] .ak-hero-content p,
    body[data-bs-theme="light"] .ak-hero-content p {
        color: #ffffff !important;
        text-shadow: 0 2px 12px rgba(0, 0, 0, .82) !important;
    }

    html[data-bs-theme="dark"] .ak-hero-content p,
    body[data-bs-theme="dark"] .ak-hero-content p {
        color: #ffffff !important;
        text-shadow: 0 2px 14px rgba(0, 0, 0, .95) !important;
    }
@endsection

@section('content')
    <!-- Hero -->
    <header class="ak-hero text-center">
        <div class="ak-hero-media">
            <img class="ak-hero-image" src="{{ asset('assets/img/Header Pic.png') }}" alt="Header">
        </div>
        <div class="ak-stars" aria-hidden="true"></div>
        <div class="ak-meteors" aria-hidden="true">
            <span class="ak-meteor" style="--meteor-left: 78%; --meteor-length: 110px; --meteor-duration: 5.5s; --meteor-delay: 1s;"></span>
            <span class="ak-meteor" style="--meteor-left: 62%; --meteor-length: 82px; --meteor-duration: 7s; --meteor-delay: 3.4s;"></span>
            <span class="ak-meteor" style="--meteor-left: 91%; --meteor-length: 130px; --meteor-duration: 6.5s; --meteor-delay: 5.2s;"></span>
            <span class="ak-meteor" style="--meteor-left: 42%; --meteor-length: 72px; --meteor-duration: 8s; --meteor-delay: 7s;"></span>
        </div>
        <div class="ak-hero-content">
            <h1>Platform Sewa Kostum Rei Cosrent</h1>
            <p>Menyewakan kostum secara real-time dengan fitur availability dan kalender pemesanan.</p>
        </div>
        <a id="scrollToKategori" class="ak-hero-action js-katalog-link" href="#kategori">
            <i class="bi bi-compass me-1" aria-hidden="true"></i>
            Jelajahi Katalog
        </a>
    </header>

    <!-- Katalog -->
    <section id="kategori" class="py-5 ak-catalog">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold section-title">Katalog Kostum</h2>
            <div class="card shadow-sm mb-4 search-card catalog-filter-card">
                <div class="card-body">
                    <form method="GET" action="{{ route('home') }}#kategori" class="row g-3 align-items-end">
                        <div class="col-md-5">
                            <label for="catalog-search" class="form-label">Pencarian</label>
                            <input type="search" id="catalog-search" name="search" class="form-control" value="{{ $catalogSearch ?? '' }}" placeholder="Cari nama, kategori, atau katalog...">
                        </div>
                        <div class="col-md-3">
                            <label for="catalog-category" class="form-label">Kategori</label>
                            <select id="catalog-category" name="category" class="form-select">
                                <option value="">Semua kategori</option>
                                @foreach($catalogCategories ?? [] as $category)
                                    <option value="{{ $category }}" {{ ($catalogCategory ?? '') === $category ? 'selected' : '' }}>{{ $category }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="catalog-sort" class="form-label">Urutkan</label>
                            <select id="catalog-sort" name="sort" class="form-select">
                                <option value="name_asc" {{ ($catalogSort ?? 'name_asc') === 'name_asc' ? 'selected' : '' }}>Nama A-Z</option>
                                <option value="name_desc" {{ ($catalogSort ?? '') === 'name_desc' ? 'selected' : '' }}>Nama Z-A</option>
                            </select>
                        </div>
                        <div class="{{ (($catalogSearch ?? '') !== '' || ($catalogCategory ?? '') !== '' || ($catalogSort ?? 'name_asc') !== 'name_asc') ? 'col-md-1' : 'col-md-2' }} d-grid">
                            <button type="submit" class="btn btn-primary"><i class="bi bi-search me-1" aria-hidden="true"></i> Cari</button>
                        </div>
                        @if(($catalogSearch ?? '') !== '' || ($catalogCategory ?? '') !== '' || ($catalogSort ?? 'name_asc') !== 'name_asc')
                            <div class="col-md-1 d-grid">
                                <a href="{{ route('home') }}#kategori" class="btn btn-secondary"><i class="bi bi-x-circle me-1" aria-hidden="true"></i> Reset</a>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
            @if(isset($katalog) && $katalog->count() > 0)
                <div class="row justify-content-center row-cols-2 row-cols-md-3 row-cols-lg-4 g-3 g-md-4 catalog-grid">
                    @foreach($katalog as $kategori)
                        <div class="col">
                            <a href="{{ url('/katalog_kostum?cat=' . urlencode(strtolower($kategori->name))) }}" class="text-decoration-none">
                                <div class="card category-card h-100 border-0">
                                    <div style="padding:1rem;">
                                        @php
                                            $imgRaw = $kategori->image ?? '';
                                            if (str_starts_with($imgRaw, 'http')) {
                                                $catImg = $imgRaw;
                                            } elseif (str_starts_with($imgRaw, '/storage/')) {
                                                $catImg = asset(ltrim($imgRaw, '/'));
                                            } elseif (str_starts_with($imgRaw, 'storage/')) {
                                                $catImg = asset($imgRaw);
                                            } elseif ($imgRaw) {
                                                $catImg = asset('storage/' . $imgRaw);
                                            } else {
                                                $catImg = null;
                                            }
                                        @endphp
                                        @if($catImg)
                                            <img src="{{ $catImg }}" class="w-100" style="aspect-ratio: 1/1; object-fit: cover; border-radius: 6px;" alt="{{ $kategori->name }}">
                                        @else
                                            <div class="w-100 d-flex align-items-center justify-content-center" style="aspect-ratio: 1/1; background:#f5f5f5; border-radius:6px;"><i class="bi bi-image" style="font-size:28px;color:#9aa0a6;"></i></div>
                                        @endif
                                    </div>
                                    <div class="card-body py-3 px-3 catalog-card-info">
                                        <h5 class="fw-bold">{{ $kategori->name }}</h5>
                                        <hr class="catalog-card-divider">
                                        <p class="small mb-1 fw-semibold">{{ $kategori->kategori ?: 'Kategori kostum' }}</p>
                                        <p class="small mb-0">{{ $kategori->description }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="alert alert-info text-center shadow-sm rounded-xl"><i class="bi bi-info-circle-fill me-2"></i>Tidak ada katalog yang tersedia.</div>
            @endif
        </div>
    </section>

    <!-- Profil -->
    <section id="profil" class="py-5 ak-profile">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold section-title">Profil Pengurus</h2>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="profile-card rounded-xl border-0 p-4">
                        @php
                            $profileAddress = 'Sukabumi, Jawa Barat';
                            $instagramHandle = ltrim(trim((string) optional($profile)->instagram), '@');
                            $instagramUrl = $instagramHandle !== '' ? 'https://www.instagram.com/' . $instagramHandle . '/' : null;
                        @endphp
                        <div class="row g-4 align-items-stretch">
                            <div class="col-md-4 text-center p-3">
                                <div class="profile-identity-card d-flex flex-column align-items-center justify-content-center">
                                    @if($profile && $profile->photo)
                                        <img src="{{ asset('storage/' . $profile->photo) }}" class="img-fluid rounded-circle border mb-3" alt="Foto Pengurus">
                                    @else
                                        <div class="mb-3"><i class="bi bi-person-circle text-primary" style="font-size: 150px;"></i></div>
                                    @endif
                                    <h4 class="fw-bold profile-name mb-1">{{ optional($profile)->name ?: 'Pengurus Rei Cosrent' }}</h4>
                                    <p class="text-muted mb-0">{{ optional($profile)->title ?: 'Pengurus' }}</p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="profile-about-section">
                                        <h5 class="card-title fw-bold profile-heading mb-3">Tentang Admin</h5>
                                        <p class="card-text text-muted profile-about mb-0">{!! nl2br(e(optional($profile)->vision ?: 'Informasi tentang pengurus Rei Cosrent.')) !!}</p>
                                    </div>
                                    <div class="profile-contact">
                                        <h5 class="card-title fw-bold profile-heading mb-3">Kontak Admin</h5>
                                        <div class="profile-contact-list">
                                            <div class="profile-contact-item"><i class="bi bi-geo-alt-fill profile-contact-icon" aria-hidden="true"></i><div class="profile-contact-content"><small class="contact-label d-block">Alamat</small><p class="contact-value fw-bold mb-0">{{ $profileAddress }}</p></div></div>
                                            <div class="profile-contact-item"><i class="bi bi-instagram profile-contact-icon" aria-hidden="true"></i><div class="profile-contact-content"><small class="contact-label d-block">Instagram</small><p class="contact-value fw-bold mb-1">{{ $instagramHandle !== '' ? '@' . $instagramHandle : '-' }}</p>@if($instagramUrl)<a href="{{ $instagramUrl }}" target="_blank" rel="noopener noreferrer" class="btn btn-success btn-sm rounded-pill"><i class="bi bi-box-arrow-up-right me-1" aria-hidden="true"></i> Buka Instagram</a>@endif</div></div>
                                            <div class="profile-contact-item"><i class="bi bi-envelope-fill profile-contact-icon" aria-hidden="true"></i><div class="profile-contact-content"><small class="contact-label d-block">Email Resmi</small><p class="contact-value fw-bold mb-0 text-break">{{ optional($profile)->email ?: '-' }}</p>@if(optional($profile)->email)<a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to={{ urlencode(optional($profile)->email) }}" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-sm rounded-pill profile-email-button"><i class="bi bi-envelope me-1" aria-hidden="true"></i> Kirim Email</a>@endif</div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
    <!-- Scroll Tengah Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const kategoriSection = document.getElementById('kategori');
            const hero = document.querySelector('.ak-hero');

            if (hero && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                hero.addEventListener('pointermove', function (event) {
                    const bounds = hero.getBoundingClientRect();
                    hero.style.setProperty('--ak-pointer-x', `${((event.clientX - bounds.left) / bounds.width) * 100}%`);
                    hero.style.setProperty('--ak-pointer-y', `${((event.clientY - bounds.top) / bounds.height) * 100}%`);
                });
            }

            // Scroll Tengah Function
            function scrollToCenter(element) {
                if (!element) return;
                element.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
            }

            // Keep non-catalog section links centered without intercepting catalog anchors.
            document.querySelectorAll('.nav-link[href*="#"]:not([href$="#kategori"])').forEach(link => {
                link.addEventListener('click', function (e) {
                    const href = this.getAttribute('href');
                    const hashIndex = href.indexOf('#');
                    if (hashIndex !== -1) {
                        const targetId = href.substring(hashIndex);
                        const targetElement = document.querySelector(targetId);
                        if (targetElement) {
                            e.preventDefault();
                            scrollToCenter(targetElement);
                        }
                    }
                });
            });

            document.querySelectorAll('.nav-link[href$="#kategori"], .js-katalog-link[href="#kategori"]').forEach(link => {
                link.addEventListener('click', function (event) {
                    if (!kategoriSection) return;
                    event.preventDefault();
                    history.replaceState(null, '', '#kategori');
                    kategoriSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    window.setTimeout(function () {
                        kategoriSection.classList.remove('catalog-arrival');
                        void kategoriSection.offsetWidth;
                        kategoriSection.classList.add('catalog-arrival');
                    }, 650);
                });
            });

            // Handle scrollTo parameter from other pages
            const urlParams = new URLSearchParams(window.location.search);
            const scrollTarget = urlParams.get('scrollTo');
            if(scrollTarget === 'kategori'){
                setTimeout(() => scrollToCenter(kategoriSection), 100);
            }

            // Handle hash on page load
            if (window.location.hash && window.location.hash !== '#kategori') {
                const targetElement = document.querySelector(window.location.hash);
                if (targetElement) {
                    setTimeout(() => scrollToCenter(targetElement), 100);
                }
            }
        });
    </script>
@endsection
