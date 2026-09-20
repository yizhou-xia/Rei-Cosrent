@php
    // SweetAlert on logout flash
    $logoutMessage = session('logout_message');
    $adminProfile = class_exists(\App\Models\ProfileContact::class) ? \App\Models\ProfileContact::find(1) : null;
    $adminProfilePhoto = $adminProfile->photo ?? session('admin_profile_photo');
    $adminProfilePhotoSrc = $adminProfilePhoto
        ? (str_starts_with($adminProfilePhoto, 'storage/') ? asset($adminProfilePhoto) : asset('storage/' . $adminProfilePhoto))
        : null;
@endphp
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Rei Cosrent')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        :root {
            --brand-blue: #141414;
            --brand-blue-hover: #3a3a3a;
            --app-page-bg: #dedede;
            --app-surface: #b4b4b4;
            --app-surface-strong: #b4b4b4;
            --app-border: rgba(20, 20, 20, 0.16);
            --footer-secondary-text: #141414;
            --bs-primary: var(--brand-blue);
            --bs-secondary: var(--brand-blue);
            --bs-link-color: var(--brand-blue);
            --bs-link-hover-color: var(--brand-blue-hover);
            --bs-body-color: var(--brand-blue);
            --bs-emphasis-color: var(--brand-blue);
            --bs-body-bg: var(--app-page-bg);
            --bs-tertiary-bg: var(--app-surface-strong);
            --bs-border-color: var(--app-border);
            --nav-height: 72px;
        }

        [data-bs-theme="dark"] {
            --brand-blue: #e2e8f0;
            --brand-blue-hover: #ffffff;
            --app-page-bg: #0b1220;
            --app-surface: rgba(15, 23, 42, 0.96);
            --app-surface-strong: #111827;
            --app-border: rgba(96, 165, 250, 0.18);
            --footer-secondary-text: #ffffff;
        }

        html, body {
            background: var(--app-page-bg) !important;
            color: var(--brand-blue) !important;
        }

        body,
        p,
        small,
        label,
        .form-label,
        .nav-link,
        .dropdown-item,
        .navbar-brand,
        .section-title,
        .contact-title,
        .blue-title,
        .footer-desc,
        .site-footer,
        .site-footer h6,
        .site-footer .small,
        .site-footer .footer-links a,
        .text-muted,
        .text-body-secondary,
        .text-secondary {
            color: var(--brand-blue) !important;
        }

        /* Gradient button style dari aistarterkit */
        .btn-primary, .btn, .gradient-btn {
            background-image: linear-gradient(97deg, #2563eb 0%, #93c5fd 140.21%) !important;
            background-color: transparent !important;
            color: #ffffff !important;
            border: none !important;
            background-size: 200% auto;
            background-position: 0% center;
            transition: background-position 0.6s ease-in-out, transform 0.3s ease !important;
            will-change: background-position, transform;
            font-weight: 600;
        }

        .btn-primary:hover, .btn:hover, .gradient-btn:hover {
            background-image: linear-gradient(97deg, #93c5fd 0%, #2563eb 140.21%) !important;
            background-position: 100% center !important;
            background-color: transparent !important;
            color: #ffffff !important;
        }

        .btn-primary:focus, .btn:focus, .gradient-btn:focus {
            background-image: linear-gradient(97deg, #2563eb 0%, #93c5fd 140.21%) !important;
            background-color: transparent !important;
            color: #ffffff !important;
            box-shadow: 0 0 0 0.25rem rgba(37, 99, 235, 0.25) !important;
        }

        /* Dark mode - tombol tetap sama */
        [data-bs-theme="dark"] .btn-primary,
        [data-bs-theme="dark"] .btn,
        [data-bs-theme="dark"] .gradient-btn {
            background-image: linear-gradient(97deg, #2563eb 0%, #93c5fd 140.21%) !important;
            background-color: transparent !important;
            color: #ffffff !important;
            border: none !important;
        }

        [data-bs-theme="dark"] .btn-primary:hover,
        [data-bs-theme="dark"] .btn:hover,
        [data-bs-theme="dark"] .gradient-btn:hover {
            background-image: linear-gradient(97deg, #93c5fd 0%, #2563eb 140.21%) !important;
            background-position: 100% center !important;
            background-color: transparent !important;
            color: #ffffff !important;
        }

        .btn-success {
            background-image: linear-gradient(97deg, #2563eb 0%, #93c5fd 140.21%) !important;
            background-color: transparent !important;
            color: #ffffff !important;
            border: none !important;
            background-size: 200% auto;
            background-position: 0% center;
            transition: background-position 0.6s ease-in-out, transform 0.3s ease !important;
        }

        .btn-success:hover {
            background-image: linear-gradient(97deg, #93c5fd 0%, #2563eb 140.21%) !important;
            background-position: 100% center !important;
            background-color: transparent !important;
            color: #ffffff !important;
        }

        [data-bs-theme="dark"] .btn-success,
        [data-bs-theme="dark"] .btn-success:hover {
            background-image: linear-gradient(97deg, #2563eb 0%, #93c5fd 140.21%) !important;
            background-color: transparent !important;
            color: #ffffff !important;
            border: none !important;
        }

        .hero-section {
            position: relative;
            overflow: hidden;
            padding: 50px 0;
            min-height: 10vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            background: linear-gradient(135deg, rgba(11, 18, 32, 0.2), rgba(37, 99, 235, 0.2));
            border-bottom: 5px solid var(--bs-primary);
            transition: background 0s ease, color 0s ease;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            inset: 0;
            background: url("{{ asset('assets/img/Header Pic.png') }}") center/cover no-repeat;
            filter: blur(3px) saturate(1.05);
            transform: scale(1.02);
        }

        .hero-section::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(11, 18, 32, 0.42), rgba(37, 99, 235, 0.28));
        }

        .hero-section > * {
            position: relative;
            z-index: 1;
        }

        .hero-section .subheading {
            font-size: 1.5rem;
            font-weight: 400;
            color: #e0e0e0;
            line-height: 1.6;
        }

        [data-bs-theme="dark"] .hero-section {
            color: #f8f9fa;
        }

        .category-card, .profile-card, .card {
            transition: all 0s ease;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .rounded-xl { border-radius: 1.5rem !important; }

        /* -------- Global responsive polish (applies to all pages) -------- */
        html, body {
            overflow-x: hidden;
        }

        section[id], [id].scroll-offset {
            scroll-margin-top: calc(var(--nav-height, 72px) + 16px);
        }

        img, svg, video, canvas {
            max-width: 100%;
            height: auto;
        }

        /* Keep content comfortably padded on small screens */
        .container {
            padding-left: 1rem;
            padding-right: 1rem;
        }

        /* Avoid iOS zoom on inputs */
        @media (max-width: 575.98px) {
            input, select, textarea {
                font-size: 16px !important;
            }
        }

        /* Reduce excessive vertical padding on mobile */
        @media (max-width: 575.98px) {
            .py-5 {
                padding-top: 2.5rem !important;
                padding-bottom: 2.5rem !important;
            }
        }

        /* Responsive hero typography & spacing */
        .hero-section {
            padding: clamp(2rem, 6vw, 3.5rem) 0;
        }
        .hero-section .display-3 {
            font-size: clamp(2rem, 5vw, 3.5rem);
        }
        .hero-section .subheading {
            font-size: clamp(1rem, 2.2vw, 1.5rem);
        }

        /* Cards/buttons scale nicely on mobile */
        @media (max-width: 575.98px) {
            .btn-lg {
                padding: 0.65rem 1.1rem;
                font-size: 1rem;
            }
            .rounded-xl {
                border-radius: 1.1rem !important;
            }
        }

        /* Tables should never overflow the viewport */
        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        @media (max-width: 575.98px) {
            .table {
                font-size: 0.875rem;
            }
            .table > :not(caption) > * > * {
                padding: 0.5rem;
            }
        }

        /* Helpers: full-width on mobile, auto on md+ */
        @media (min-width: 768px) {
            .w-md-auto {
                width: auto !important;
            }
        }

        /* Modals: avoid edge-to-edge on small screens */
        @media (max-width: 575.98px) {
            .modal-dialog {
                margin: 0.75rem;
            }
            .modal-footer {
                flex-wrap: wrap;
                gap: 0.5rem;
            }
            .modal-footer .btn {
                flex: 1 1 auto;
            }
        }

        /* Button groups inside table cells */
        .action-buttons {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }
        @media (max-width: 575.98px) {
            .action-buttons {
                flex-direction: column;
                align-items: stretch;
            }
        }

        /* Admin sidebar layout: never shift content on small screens */
        @media (max-width: 991.98px) {
            #pageWrapper.shifted {
                margin-left: 0 !important;
            }
        }

        /* Fluid heading typography so large text never overflows small screens */
        h1 { font-size: clamp(1.5rem, 4vw + 0.5rem, 2.5rem); }
        h2 { font-size: clamp(1.3rem, 3vw + 0.4rem, 2rem); }
        h3 { font-size: clamp(1.15rem, 2vw + 0.4rem, 1.75rem); }

        /* Long emails/names/notes wrap instead of forcing horizontal overflow */
        .table td, .table th, .card-body, .modal-body, .costume-card-body {
            word-break: break-word;
            overflow-wrap: break-word;
        }

        /* Keep the navbar brand from crowding the toggler/sidebar button on narrow screens */
        .navbar-brand span {
            max-width: 46vw;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            display: inline-block;
            vertical-align: middle;
        }

        /* Extra-small phones: tighten gutters a little further */
        @media (max-width: 400px) {
            .container, .container-fluid {
                padding-left: 0.85rem;
                padding-right: 0.85rem;
            }
        }

        body, .hero-section, .category-card, .profile-card, .card, .navbar, section, footer {
            transition: all 0s ease;
        }

        .section-title,
        .contact-title,
        .blue-title {
            color: var(--brand-blue) !important;
            transition: color 0s ease;
        }

        #theme-icon {
            transition: transform 0.5s ease, opacity 0.5s ease;
        }

        #theme-icon.spin {
            transform: rotate(180deg);
            opacity: 0.6;
        }

        .navbar-brand span {
            font-size: 1.5rem !important;
            font-weight: 750 !important;
            vertical-align: middle;
            color: var(--brand-blue) !important;
        }

        .navbar-toggler {
            border: none !important;
            padding: 0.25rem 0.5rem !important;
        }

        .navbar-toggler:focus {
            box-shadow: none !important;
            outline: none !important;
        }

        @media (max-width: 991.98px) {
            .navbar.ak-navbar {
                padding: 0.35rem 0.65rem;
            }

            .navbar.ak-navbar .navbar-brand img {
                width: 36px;
                height: 36px;
            }

            .navbar.ak-navbar .navbar-brand span {
                max-width: 52vw;
                font-size: 1.15rem !important;
            }

            .navbar.ak-navbar .navbar-collapse {
                max-height: calc(100dvh - var(--nav-height, 56px));
                overflow-y: auto;
                padding: 0.25rem 0 0.5rem;
            }

            .navbar.ak-navbar .navbar-collapse .nav-center {
                width: 100%;
                align-items: stretch !important;
                gap: 0;
                padding: 0;
                background: transparent;
            }

            .navbar.ak-navbar .navbar-collapse .nav-center .nav-link {
                padding: 0.35rem 0.6rem;
                font-size: 0.82rem;
                line-height: 1.25;
            }

            .navbar.ak-navbar .navbar-collapse > .navbar-nav:last-child {
                align-items: stretch !important;
                gap: 0.15rem;
            }

            .navbar.ak-navbar .navbar-collapse > .navbar-nav:last-child .nav-item {
                margin-left: 0 !important;
            }

            .navbar.ak-navbar .navbar-collapse #themeToggleBtn {
                width: 36px;
                height: 36px;
            }

            .navbar.ak-navbar .navbar-account-controls {
                position: absolute;
                top: 0.35rem;
                right: 0.65rem;
                z-index: 3;
                display: flex;
                flex-direction: row;
                align-items: center !important;
                gap: 0.2rem;
                transform: none;
            }

            .navbar.ak-navbar .navbar-account-controls .nav-item {
                margin-left: 0 !important;
            }

            .navbar.ak-navbar .navbar-account-controls .account-profile-link {
                padding: 0.25rem 0.5rem;
            }

            .navbar.ak-navbar .navbar-toggler {
                position: static;
                margin-left: auto;
                margin-right: 5.5rem;
                transform: none;
            }

            .navbar.ak-navbar .navbar-toggler.is-wrapped {
                display: flex;
                flex-basis: 100%;
                width: 100%;
                margin-left: auto !important;
                margin-right: auto !important;
                justify-content: center;
                margin-top: 0.35rem !important;
            }
        }

        .navbar.ak-navbar .navbar-account-controls {
            display: flex;
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            align-items: center;
            gap: 0.55rem;
            z-index: 3;
        }

        .navbar.ak-navbar .account-profile-item {
            border-left: 1px solid var(--bs-border-color);
            padding-left: 0.55rem;
        }

        .navbar.ak-navbar .account-profile-link {
            width: 44px !important;
            height: 44px !important;
            padding: 0 !important;
            justify-content: center !important;
        }

        .navbar.ak-navbar .account-profile-link > div {
            width: 40px !important;
            height: 40px !important;
        }

        .navbar.ak-navbar .account-profile-link > i {
            font-size: 1.75rem;
        }

        @media (max-width: 991.98px) {
            .navbar.ak-navbar > .container-fluid > .navbar-account-controls,
            .navbar.ak-navbar > .container > .navbar-account-controls {
                display: flex !important;
                position: absolute !important;
                top: 0.35rem !important;
                right: 0.65rem !important;
                width: auto !important;
                height: auto !important;
                flex-direction: row !important;
                align-items: center !important;
                gap: 0.45rem !important;
                transform: none !important;
                margin: 0 !important;
            }

            .navbar.ak-navbar > .container-fluid > .navbar-account-controls .nav-item,
            .navbar.ak-navbar > .container > .navbar-account-controls .nav-item {
                margin: 0 !important;
            }
        }

        [data-bs-theme="dark"] .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        /* AiStarterKit-like navbar visuals (presentation only) */
        .navbar.ak-navbar {
            background: var(--app-surface) !important;
            backdrop-filter: none;
            box-shadow: 0 8px 30px rgba(15, 23, 42, 0.08);
            padding: 0.5rem 1rem;
            border-bottom: 1px solid var(--bs-border-color);
        }

        [data-bs-theme="dark"] .navbar.ak-navbar {
            background: var(--app-surface) !important;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.28);
        }

        .ak-nav-btn {
            border-radius: 999px;
            padding: .5rem 1rem;
            font-weight: 600;
            font-size: 0.875rem;
            color: var(--brand-blue) !important;
            background: transparent;
            transition: all 0.12s ease-in-out;
            border: none;
        }

        .ak-nav-btn:hover {
            transform: none;
            background: rgba(37, 99, 235, 0.08);
            border-color: transparent;
            color: var(--brand-blue) !important;
        }

        [data-bs-theme="dark"] .ak-nav-btn:hover {
            background: rgba(96, 165, 250, 0.14);
        }

        .ak-cta-btn {
            background-image: linear-gradient(97deg, #2563eb 0%, #93c5fd 140.21%) !important;
            color: #fff !important;
            border: none !important;
            background-size: 200% auto;
            background-position: 0% center;
            transition: background-position 0.6s ease-in-out, transform 0.3s ease !important;
            will-change: background-position, transform;
        }

        .ak-cta-btn:hover {
            background-image: linear-gradient(97deg, #93c5fd 0%, #2563eb 140.21%) !important;
            background-position: 100% center !important;
            color: #fff !important;
            border: none !important;
        }

        .ak-cta-btn:focus {
            background-image: linear-gradient(97deg, #2563eb 0%, #93c5fd 140.21%) !important;
            color: #fff !important;
            border: none !important;
            box-shadow: 0 0 0 0.25rem rgba(37, 99, 235, 0.25) !important;
        }

        [data-bs-theme="dark"] .ak-cta-btn {
            background-image: linear-gradient(97deg, #2563eb 0%, #93c5fd 140.21%) !important;
            color: #fff !important;
            border: none !important;
        }

        [data-bs-theme="dark"] .ak-cta-btn:hover {
            background-image: linear-gradient(97deg, #93c5fd 0%, #2563eb 140.21%) !important;
            background-position: 100% center !important;
            color: #fff !important;
        }

        .ak-icon-btn {
            width: 44px;
            height: 44px;
            border-radius: 999px;
            border: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: rgba(242, 244, 247, 1);
            color: rgba(102, 112, 133, 1);
        }

        [data-bs-theme="dark"] .ak-icon-btn {
            background: rgba(255,255,255,0.05);
            color: rgba(255,255,255,0.7);
        }

        .ak-icon-btn:hover {
            background: rgba(229, 231, 235, 1);
            color: rgba(31, 41, 55, 1);
        }

        [data-bs-theme="dark"] .ak-icon-btn:hover {
            background: rgba(255,255,255,0.1);
            color: rgba(255,255,255,0.95);
        }

        .nav-center {
            background: rgba(239, 246, 255, 0.95);
            border-radius: 999px;
            padding: 0.25rem;
            gap: 0.25rem;
        }

        [data-bs-theme="dark"] .nav-center {
            background: rgba(30, 41, 59, 0.9);
        }

        .ak-theme-icon {
            width: 20px;
            height: 20px;
            display: block;
        }

        .ak-theme-sun { display: none; }
        .ak-theme-moon { display: block; }

        [data-bs-theme="dark"] .ak-theme-sun { display: block; }
        [data-bs-theme="dark"] .ak-theme-moon { display: none; }

        /* Center the middle pill like the reference header */
        @media (min-width: 992px) {
            .navbar.ak-navbar .container-fluid.container {
                display: grid;
                grid-template-columns: 1fr auto 1fr;
                align-items: center;
                column-gap: 1rem;
                gap: 1rem;
            }

            .navbar.ak-navbar .navbar-brand {
                justify-self: start;
            }

            .navbar.ak-navbar .navbar-nav.nav-center {
                justify-self: center;
            }

            .navbar.ak-navbar .navbar-collapse {
                justify-self: end;
            }
        }

        .navbar .nav-link.active, .navbar .nav-link.show {
            background: rgba(37, 99, 235, 0.12);
            border-radius: 999px;
        }

        [data-bs-theme="dark"] .navbar .nav-link.active, 
        [data-bs-theme="dark"] .navbar .nav-link.show {
            background: rgba(96, 165, 250, 0.2);
        }

        /* Footer: AiStarterKit-like presentation */
        .site-footer {
            background: var(--app-surface-strong) !important;
            color: var(--brand-blue) !important;
            padding: 4rem 0 2.5rem;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-top: 1px solid var(--bs-border-color);
        }

        [data-bs-theme="dark"] .site-footer {
            background: var(--app-surface-strong) !important;
            color: var(--brand-blue) !important;
            border-top: 1px solid rgba(96, 165, 250, 0.16);
        }

        /* Shared dark-mode surface for modal bodies/footers styled per-page with inline colors */
        [data-bs-theme="dark"] .modal-content,
        [data-bs-theme="dark"] .modal-body,
        [data-bs-theme="dark"] .modal-footer {
            background-color: #0f172af5 !important;
            color: #ffffff !important;
        }

        [data-bs-theme="dark"] .modal-body .text-muted,
        [data-bs-theme="dark"] .modal-footer .text-muted {
            color: #cbd5e1 !important;
        }

        [data-bs-theme="dark"] .modal-body label,
        [data-bs-theme="dark"] .modal-body .form-label,
        [data-bs-theme="dark"] .modal-body .form-check-label,
        [data-bs-theme="dark"] .modal-body strong,
        [data-bs-theme="dark"] .modal-body small,
        [data-bs-theme="dark"] .modal-body .fw-bold,
        [data-bs-theme="dark"] .modal-body th,
        [data-bs-theme="dark"] .modal-body td {
            color: #ffffff !important;
        }

        [data-bs-theme="dark"] .modal-body .form-control,
        [data-bs-theme="dark"] .modal-body .form-select {
            background-color: rgba(255, 255, 255, 0.08) !important;
            color: #ffffff !important;
            border-color: rgba(148, 163, 184, 0.35) !important;
        }

        /* Shared admin surface, form, table, modal, and responsive rules. */
        body.admin-page {
            --admin-page-bg: var(--app-page-bg);
            --admin-surface: #ffffff;
            --admin-surface-strong: #ffffff;
            --admin-text: var(--brand-blue);
            --admin-muted: #5f6b7a;
            --admin-border: rgba(100, 116, 139, 0.25);
            --admin-control-bg: #ffffff;
            --admin-control-border: rgba(100, 116, 139, 0.28);
            --admin-table-head: rgba(37, 99, 235, 0.1);
            --admin-table-hover: rgba(37, 99, 235, 0.06);
        }

        [data-bs-theme="dark"] body.admin-page {
            --admin-surface: #0f172a;
            --admin-surface-strong: #111827;
            --admin-muted: #cbd5e1;
            --admin-border: rgba(148, 163, 184, 0.28);
            --admin-control-bg: rgba(255, 255, 255, 0.07);
            --admin-control-border: rgba(148, 163, 184, 0.35);
            --admin-table-head: rgba(59, 130, 246, 0.18);
            --admin-table-hover: rgba(59, 130, 246, 0.14);
        }

        body.admin-page .card,
        body.admin-page .card-header,
        body.admin-page .card-body,
        body.admin-page .card-footer {
            background-color: var(--admin-surface) !important;
            color: var(--admin-text) !important;
            border-color: var(--admin-border) !important;
        }

        body.admin-page .form-control,
        body.admin-page .form-select,
        body.admin-page textarea,
        body.admin-page input[type="file"] {
            background-color: var(--admin-control-bg) !important;
            color: var(--admin-text) !important;
            border-color: var(--admin-control-border) !important;
        }

        body.admin-page .form-control::placeholder {
            color: var(--admin-muted) !important;
            opacity: 1;
        }

        body.admin-page .form-control:focus,
        body.admin-page .form-select:focus,
        body.admin-page textarea:focus {
            border-color: #2563eb !important;
            box-shadow: 0 0 0 0.2rem rgba(37, 99, 235, 0.2) !important;
        }

        body.admin-page .admin-table-wrap,
        body.admin-page .table-responsive {
            border: 1px solid var(--admin-border);
            border-radius: 0.65rem;
            background: var(--admin-surface);
        }

        body.admin-page .orders-table,
        body.admin-page .admin-table {
            --bs-table-bg: var(--admin-surface);
            --bs-table-color: var(--admin-text);
            --bs-table-border-color: var(--admin-border);
            min-width: 720px;
            margin-bottom: 0;
            color: var(--admin-text);
            border-color: var(--admin-border);
        }

        body.admin-page .card,
        body.admin-page .card-header,
        body.admin-page .card-body,
        body.admin-page .card-footer,
        body.admin-page .admin-table-wrap,
        body.admin-page .table-responsive,
        body.admin-page table,
        body.admin-page table thead,
        body.admin-page table tbody,
        body.admin-page table tbody tr,
        body.admin-page table tbody td {
            background-color: var(--admin-surface) !important;
            color: var(--admin-text) !important;
            border-color: var(--admin-border) !important;
        }

        body.admin-page table thead th {
            background-color: var(--admin-table-head) !important;
            color: var(--admin-text) !important;
            border-color: var(--admin-border) !important;
        }

        body.admin-page table tbody tr:hover td {
            background-color: var(--admin-table-hover) !important;
        }

        body.admin-page .orders-table thead th,
        body.admin-page .admin-table thead th {
            background: var(--admin-table-head) !important;
            color: var(--admin-text) !important;
            border-color: var(--admin-border) !important;
            vertical-align: middle;
        }

        body.admin-page .orders-table tbody td,
        body.admin-page .admin-table tbody td {
            background: var(--admin-surface) !important;
            color: var(--admin-text) !important;
            border-color: var(--admin-border) !important;
            vertical-align: middle;
        }

        body.admin-page .orders-table tbody tr:hover td,
        body.admin-page .admin-table tbody tr:hover td {
            background: var(--admin-table-hover) !important;
        }

        body.admin-page .page-title {
            color: var(--admin-text) !important;
        }

        body.admin-page table:not(.table-borderless) thead th {
            background: var(--admin-table-head) !important;
            color: var(--admin-text) !important;
            border-color: var(--admin-border) !important;
        }

        body.admin-page table:not(.table-borderless) tbody td {
            background: var(--admin-surface) !important;
            color: var(--admin-text) !important;
            border-color: var(--admin-border) !important;
        }

        body.admin-page .modal-content {
            background: var(--admin-surface-strong) !important;
            color: var(--admin-text) !important;
            border: 1px solid var(--admin-border) !important;
        }

        body.admin-page .modal-footer,
        body.admin-page .modal-header:not([class*="bg-"]) {
            background: var(--admin-surface-strong) !important;
            color: var(--admin-text) !important;
            border-color: var(--admin-border) !important;
        }

        body.admin-page .modal-header[class*="bg-"] {
            color: #ffffff !important;
        }

        body.admin-page .modal-body {
            background: var(--admin-surface) !important;
            color: var(--admin-text) !important;
        }

        body.admin-page .modal-body .form-label,
        body.admin-page .modal-body label,
        body.admin-page .modal-body .form-text,
        body.admin-page .modal-body .text-muted,
        body.admin-page .modal-body small {
            color: var(--admin-muted) !important;
        }

        @media (max-width: 767.98px) {
            body.admin-page section > .container,
            body.admin-page section > .container-fluid {
                padding-right: 0.75rem;
                padding-left: 0.75rem;
            }

            body.admin-page .admin-page-header {
                align-items: stretch !important;
            }

            body.admin-page .admin-page-header .btn {
                width: 100%;
            }

            body.admin-page .table-responsive {
                margin-right: -0.25rem;
                margin-left: -0.25rem;
            }

            body.admin-page .modal-dialog {
                margin: 0.5rem;
            }

            body.admin-page .modal-body {
                max-height: calc(100vh - 10rem);
                overflow-y: auto;
            }
        }

        .site-footer .footer-logo { display:flex; align-items:center; gap:.75rem; }
        .site-footer .footer-desc { opacity: .9; max-width: 360px; color: var(--footer-secondary-text) !important; }
        .site-footer .footer-col { padding: 0.25rem 1rem; }
        .site-footer .footer-links a { color: inherit !important; opacity: .85; text-decoration:none; display:block; margin-bottom: .4rem; }
        .site-footer .footer-links a:hover { opacity: 1; text-decoration:underline; }
        .site-footer .subscribe-input { max-width: 420px; display:flex; gap: .5rem; }
        .site-footer .subscribe-input input { flex: 1; border-radius: 999px; padding: .6rem .9rem; border: 1px solid rgba(96,165,250,0.18); background: rgba(255,255,255,0.02); color: inherit; }
        .site-footer .subscribe-input .btn { border-radius: 999px; padding: .55rem .9rem; }
        .site-footer .text-muted { color: var(--footer-secondary-text) !important; }
        .site-footer .social-icons a { margin-right: .5rem; opacity: .9; }
        .site-footer .social-icons a.facebook { color: #1877f2; }
        .site-footer .social-icons a.instagram { color: #e1306c; }
        .site-footer .social-icons a.twitter { color: #1d9bf0; }
        .site-footer .social-icons a:hover { opacity: 1; }

        /* Ensure sidebar toggle is always on top and interactive in all themes */
        .sidebar-toggle-btn {
            z-index: 2100 !important;
            pointer-events: auto !important;
            display: inline-flex !important;
            align-items: center;
            justify-content: center;
            position: fixed !important;
            top: 14px !important;
            transform: none !important;
        }

        /* Make icon visible in dark mode */
        [data-bs-theme="dark"] .sidebar-toggle-btn {
            color: #ffffff !important;
            background-color: rgba(0,0,0,0.45) !important;
            border-color: rgba(255,255,255,0.08) !important;
        }

        html.no-transition,
        html.no-transition *,
        html.no-transition *::before,
        html.no-transition *::after,
        body.no-transition,
        body.no-transition *,
        body.no-transition *::before,
        body.no-transition *::after {
            transition: none !important;
        }

        /* Sticky footer */
        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            display: flex;
            flex-direction: column;
            background-color: var(--app-page-bg) !important;
        }

        [data-bs-theme="dark"] body {
            background-color: var(--app-page-bg) !important;
        }

        body > nav + * {
            flex: 1 0 auto;
        }

        footer {
            flex-shrink: 0;
        }

        /* Neutral modal header surface (consistent across admin pages; adapts to light/dark) */
        .modal-header-surface {
            background-color: var(--app-surface);
            color: var(--brand-blue);
            border-bottom: 1px solid var(--bs-border-color);
        }

        .modal-header-surface .btn-close {
            filter: var(--bs-btn-close-filter, none);
        }

        @yield('styles')

        /* Final admin overrides: keep per-view legacy rules from breaking the shared theme. */
        body.admin-page .card,
        body.admin-page .card-header,
        body.admin-page .card-body,
        body.admin-page .card-footer {
            background-color: var(--admin-surface) !important;
            color: var(--admin-text) !important;
            border-color: var(--admin-border) !important;
        }

        body.admin-page .form-control,
        body.admin-page .form-select,
        body.admin-page select,
        body.admin-page textarea,
        body.admin-page input[type="file"] {
            background-color: var(--admin-control-bg) !important;
            color: var(--admin-text) !important;
            border-color: var(--admin-control-border) !important;
        }

        body.admin-page .form-select option,
        body.admin-page select option {
            background-color: var(--admin-surface-strong) !important;
            color: var(--admin-text) !important;
        }

        body.admin-page .page-title {
            color: var(--admin-text) !important;
        }

        body.admin-page .orders-table,
        body.admin-page .admin-table {
            background-color: var(--admin-surface) !important;
            color: var(--admin-text) !important;
            border-color: var(--admin-border) !important;
        }

        body.admin-page .orders-table thead th,
        body.admin-page .admin-table thead th,
        body.admin-page table:not(.table-borderless) thead th {
            background-color: var(--admin-table-head) !important;
            color: var(--admin-text) !important;
            border-color: var(--admin-border) !important;
        }

        body.admin-page .orders-table tbody td,
        body.admin-page .admin-table tbody td,
        body.admin-page table:not(.table-borderless) tbody td {
            background-color: var(--admin-surface) !important;
            color: var(--admin-text) !important;
            border-color: var(--admin-border) !important;
        }

        body.admin-page .card,
        body.admin-page .card-header,
        body.admin-page .card-body,
        body.admin-page .card-footer,
        body.admin-page .admin-table-wrap,
        body.admin-page .table-responsive,
        body.admin-page table,
        body.admin-page table thead,
        body.admin-page table tbody,
        body.admin-page table tbody tr,
        body.admin-page table tbody td {
            background-color: var(--admin-surface) !important;
            color: var(--admin-text) !important;
            border-color: var(--admin-border) !important;
        }

        body.admin-page table thead th {
            background-color: var(--admin-table-head) !important;
            color: var(--admin-text) !important;
            border-color: var(--admin-border) !important;
        }

        body.admin-page table tbody tr:hover td {
            background-color: var(--admin-table-hover) !important;
        }

        body.admin-page .modal-content,
        body.admin-page .modal-footer,
        body.admin-page .modal-header:not([class*="bg-"]) {
            background-color: var(--admin-surface-strong) !important;
            color: var(--admin-text) !important;
            border-color: var(--admin-border) !important;
        }

        body.admin-page .modal-header[class*="bg-"] {
            color: #ffffff !important;
        }

        body.admin-page .modal-body {
            background-color: var(--admin-surface) !important;
            color: var(--admin-text) !important;
        }

        body.admin-page .modal-content .modal-body .form-control,
        body.admin-page .modal-content .modal-body .form-select,
        body.admin-page .modal-content .modal-body textarea,
        body.admin-page .modal-content .modal-body input,
        body.admin-page .modal-content .modal-body select {
            background-color: var(--admin-control-bg) !important;
            color: var(--admin-text) !important;
            border-color: var(--admin-control-border) !important;
        }

        body.admin-page .modal-content .modal-body ::placeholder {
            color: var(--admin-muted) !important;
            opacity: 1;
        }

        body.admin-page .modal-content .modal-body label,
        body.admin-page .modal-content .modal-body .form-label,
        body.admin-page .modal-content .modal-body .form-text,
        body.admin-page .modal-content .modal-body .text-muted,
        body.admin-page .modal-content .modal-body small {
            color: var(--admin-muted) !important;
        }

        body.admin-page.theme-switching *,
        body.admin-page.theme-switching *::before,
        body.admin-page.theme-switching *::after {
            transition: none !important;
            animation: none !important;
        }

        body.admin-page .admin-surface-card {
            background-color: var(--admin-card-bg, var(--admin-surface)) !important;
            color: var(--admin-sub-text, var(--admin-text)) !important;
            border-color: var(--admin-card-border, var(--admin-border)) !important;
        }

        body.admin-page .app-sidebar .menu-card {
            background-color: var(--admin-card-bg, var(--admin-surface)) !important;
            color: var(--admin-card-text, var(--admin-text)) !important;
            border-color: var(--admin-card-border, var(--admin-border)) !important;
        }

        body.admin-page .app-sidebar .menu-card .card-body {
            background-color: transparent !important;
        }

        body.admin-page .booking-calendar-card,
        body.admin-page .booking-calendar-card .card-header,
        body.admin-page .booking-calendar-card .card-body {
            background-color: var(--booking-card-bg) !important;
            color: var(--booking-card-text) !important;
            border-color: var(--booking-card-border) !important;
        }

        body.admin-page .booking-filter-card,
        body.admin-page .booking-filter-card .card-body {
            background-color: var(--booking-filter-bg) !important;
            color: var(--booking-filter-text) !important;
            border-color: var(--booking-filter-border) !important;
        }

        body.admin-page .booking-filter-card h5,
        body.admin-page .booking-filter-card p {
            color: var(--booking-filter-text) !important;
        }

        body.admin-page .booking-filter-card .form-select,
        body.admin-page .booking-filter-card .form-select option {
            background-color: var(--booking-filter-bg) !important;
            color: var(--booking-filter-text) !important;
            border-color: var(--booking-filter-border) !important;
        }

        body.admin-page .booking-calendar-table-wrap,
        body.admin-page .booking-calendar-table,
        body.admin-page .booking-calendar-table thead,
        body.admin-page .booking-calendar-table tbody,
        body.admin-page .booking-calendar-table tr,
        body.admin-page .booking-calendar-table th,
        body.admin-page .booking-calendar-table td {
            background-color: var(--booking-card-bg) !important;
            color: var(--booking-card-text) !important;
            border-color: var(--booking-card-border) !important;
        }

        body.admin-page .booking-calendar-table thead th {
            background-color: color-mix(in srgb, var(--booking-card-bg) 88%, #2563eb) !important;
        }

        body.admin-page .booking-calendar-table tbody tr:hover td {
            background-color: color-mix(in srgb, var(--booking-card-bg) 92%, #2563eb) !important;
        }

        body.admin-page .booking-calendar-row,
        body.admin-page .booking-calendar-row td {
            background-color: var(--booking-card-bg) !important;
            color: var(--booking-card-text) !important;
            border-color: var(--booking-card-border) !important;
        }

        body.admin-page .site-footer {
            background-color: var(--app-surface-strong) !important;
            color: var(--brand-blue) !important;
            border-top-color: var(--app-border) !important;
            transition: none !important;
        }

        @media (max-width: 767.98px) {
            body.admin-page .admin-page-header .btn {
                width: 100%;
            }

            body.admin-page .modal-dialog {
                margin: 0.5rem;
            }

            body.admin-page .action-buttons {
                display: flex !important;
                flex-direction: column !important;
                align-items: center !important;
                gap: 0.35rem !important;
                width: auto !important;
                min-width: 0 !important;
            }

            body.admin-page .action-buttons .btn {
                width: 128px !important;
                min-width: 128px !important;
                max-width: 128px !important;
                height: 34px !important;
                min-height: 34px !important;
                max-height: 34px !important;
                padding: 0.3rem 0.5rem !important;
                font-size: 0.75rem !important;
                line-height: 1.2 !important;
            }

            body.admin-page .action-buttons .action-cell {
                width: 100%;
                min-height: 32px;
            }

            body.admin-page .action-buttons .action-cell .btn {
                align-self: center;
            }
        }
    </style>
    <script>
        // Apply saved theme immediately (anti-FOUC) and suppress transitions on load
        (function() {
            const root = document.documentElement;
            const saved = localStorage.getItem('rc-theme') || 'light';
            root.setAttribute('data-bs-theme', saved);
            root.classList.add('no-transition');

            window.addEventListener('DOMContentLoaded', function () {
                if (document.body) {
                    document.body.setAttribute('data-bs-theme', saved);
                    document.body.classList.add('no-transition');
                }
                setTimeout(() => {
                    root.classList.remove('no-transition');
                    if (document.body) document.body.classList.remove('no-transition');
                }, 50);
            });
        })();
    </script>
</head>
<body data-bs-theme="light" class="{{ request()->routeIs('home') ? 'homepage' : '' }} {{ request()->routeIs('admin.*') ? 'admin-page' : '' }}">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top shadow-sm ak-navbar" style="background-color: var(--bs-body-bg); width: calc(100% - 17px); right: 0;">
        <div class="container-fluid container">
            <!-- Sidebar toggle (only for admin on admin.profile to avoid showing globally) -->
            @if(session('admin_logged_in') && request()->routeIs('admin.profile'))
            <button id="layoutSidebarToggle" type="button" aria-controls="appSidebar" aria-expanded="false" class="sidebar-toggle-btn btn btn-primary d-flex align-items-center justify-content-center" aria-label="Toggle sidebar" style="position:absolute; left:8px; top:50%; transform:translateY(-50%); width:44px; height:44px; border-radius:8px;">
                <i class="bi bi-list"></i>
            </button>
            @endif

            <a class="navbar-brand fw-bold text-primary" href="{{ route('home') }}">
                <img src="{{ asset('assets/img/Water Mark.png') }}" alt="Logo Rei Cosrent" width="48" height="48" class="me-2">
                <span>Rei Cosrent</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Desktop-centered nav (matches AiStarterKit header behavior) -->
            <ul class="navbar-nav nav-center d-none d-lg-flex align-items-center">
                <li class="nav-item"><a class="nav-link fw-semibold ak-nav-btn" href="{{ request()->routeIs('home') ? '#kategori' : route('home') . '#kategori' }}">Katalog</a></li>
                <li class="nav-item"><a class="nav-link fw-semibold ak-nav-btn" href="{{ request()->routeIs('home') ? '#profil' : route('home') . '#profil' }}">Profil</a></li>
                <li class="nav-item"><a class="nav-link fw-semibold ak-nav-btn" href="{{ request()->routeIs('home') ? '#kontak' : route('home') . '#kontak' }}">Informasi</a></li>
                <li class="nav-item"><a class="nav-link fw-semibold ak-nav-btn" href="{{ route('peraturan') }}">Aturan</a></li>
                <li class="nav-item ms-lg-2">
                    <a class="nav-link fw-semibold d-flex align-items-center gap-2 ak-nav-btn" href="{{ route('tanggal.pemesanan') }}">
                        Lihat Tanggal
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav mb-0 align-items-center navbar-account-controls">
                <li class="nav-item d-flex align-items-center">
                    <button type="button" id="themeToggleBtn" class="ak-icon-btn" aria-label="Ubah mode gelap/terang" title="Ubah mode gelap/terang">
                        <i class="bi bi-moon-stars-fill ak-theme-icon ak-theme-moon"></i>
                        <i class="bi bi-sun-fill ak-theme-icon ak-theme-sun"></i>
                    </button>
                </li>
                @if(session('admin_logged_in'))
                    <li class="nav-item account-profile-item">
                        <a class="nav-link fw-semibold d-flex align-items-center gap-2 ak-nav-btn account-profile-link" href="{{ route('admin.profile') }}" aria-label="Profil admin">
                            @if($adminProfilePhotoSrc)
                                <div style="width: 32px; height: 32px; border-radius: 50%; background-size: cover; background-position: center; background-image: url('{{ $adminProfilePhotoSrc }}'); border: 1px solid var(--bs-border-color);"></div>
                            @else
                                <i class="bi bi-person-badge"></i>
                            @endif
                        </a>
                    </li>
                @elseif(session('user_logged_in'))
                    <li class="nav-item account-profile-item">
                        <a class="nav-link fw-semibold d-flex align-items-center gap-2 ak-nav-btn account-profile-link" href="{{ route('user.profile') }}" aria-label="Profil pengguna">
                            @if(session('user_gambar_profil'))
                                <div style="width: 32px; height: 32px; border-radius: 50%; background-size: cover; background-position: center; background-image: url('{{ asset('storage/' . session('user_gambar_profil')) }}'); border: 1px solid var(--bs-border-color);"></div>
                            @else
                                <i class="bi bi-person-circle"></i>
                            @endif
                        </a>
                    </li>
                @elseif(!session('admin_logged_in') && !session('user_logged_in'))
                    <li class="nav-item">
                        <a class="nav-link fw-semibold ak-nav-btn" href="{{ route('login') }}">Login</a>
                    </li>
                @endif
            </ul>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav nav-center mx-auto mb-2 mb-lg-0 align-items-center d-lg-none">
                    <li class="nav-item"><a class="nav-link fw-semibold ak-nav-btn" href="{{ request()->routeIs('home') ? '#kategori' : route('home') . '#kategori' }}">Katalog</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold ak-nav-btn" href="{{ request()->routeIs('home') ? '#profil' : route('home') . '#profil' }}">Profil</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold ak-nav-btn" href="{{ request()->routeIs('home') ? '#kontak' : route('home') . '#kontak' }}">Informasi</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold ak-nav-btn" href="{{ route('peraturan') }}">Aturan</a></li>
                    <li class="nav-item ms-lg-2">
                        <a class="nav-link fw-semibold d-flex align-items-center gap-2 ak-nav-btn" href="{{ route('tanggal.pemesanan') }}">
                            Lihat Tanggal
                        </a>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row gy-4">
                <div class="col-md-8 footer-col">
                    <div class="footer-logo mb-2">
                        <img src="{{ asset('assets/img/Water Mark.png') }}" alt="Logo" width="48" height="48">
                        <div>
                            <strong>Rei Cosrent</strong>
                        </div>
                    </div>
                    <div class="footer-desc small">Sewa kostum cosplay Impian Anda!</div>
                </div>

                <div class="col-md-4 footer-col text-md-end">
                    <h6 class="mb-2">Berlangganan</h6>
                    @if(session('admin_logged_in') || session('user_logged_in'))
                        <p class="small text-muted">Terima Kasih sudah bergabung dengan kami.</p>
                    @else
                        <p class="small text-muted">Bergabunglah dengan kami sekarang.</p>
                        <a href="{{ route('register') }}" class="btn btn-primary btn-sm rounded-pill">
                            <i class="bi bi-person-plus me-1"></i> Register Sekarang
                        </a>
                    @endif
                </div>
            </div>

            <hr class="my-4" style="opacity:.06;">

            <div class="row">
                <div class="col text-center small">
                    &copy; 2025 Rei Cosrent. Hak Cipta Dilindungi.
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Adjust body padding for fixed navbar -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const nav = document.querySelector('nav.navbar.fixed-top');
            if (!nav) return;
            const root = document.documentElement;
            const navbarBrand = nav.querySelector('.navbar-brand');
            const navbarToggler = nav.querySelector('.navbar-toggler');
            const navbarAccountControls = nav.querySelector('.navbar-account-controls');

            const updateNavbarTogglePosition = () => {
                if (!navbarBrand || !navbarToggler || !navbarAccountControls) return;

                const isMobile = window.matchMedia('(max-width: 991.98px)').matches;
                navbarToggler.classList.remove('is-wrapped');

                if (!isMobile) return;

                const brandRect = navbarBrand.getBoundingClientRect();
                const togglerRect = navbarToggler.getBoundingClientRect();
                const controlsRect = navbarAccountControls.getBoundingClientRect();
                const spacing = 12;
                const needsWrappedRow = togglerRect.left < brandRect.right + spacing
                    || togglerRect.right > controlsRect.left - spacing;

                navbarToggler.classList.toggle('is-wrapped', needsWrappedRow);
            };

            const setNavHeight = () => {
                updateNavbarTogglePosition();
                const navHeight = nav.offsetHeight || 72;
                root.style.setProperty('--nav-height', navHeight + 'px');
                document.body.style.paddingTop = navHeight + 'px';
            };
            setNavHeight();
            window.addEventListener('resize', setNavHeight);

            const sidebarToggle = document.getElementById('layoutSidebarToggle');
            const sidebar = document.getElementById('appSidebar');
            const pageWrapper = document.getElementById('pageWrapper');
            const footer = document.querySelector('footer');

            if (sidebarToggle && sidebar) {
                sidebarToggle.addEventListener('click', function () {
                    const isOpen = sidebar.classList.toggle('open');
                    if (pageWrapper) {
                        pageWrapper.classList.toggle('shifted', isOpen);
                    }
                    if (footer) {
                        footer.classList.toggle('shifted', isOpen);
                    }
                    sidebarToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
                });
            }
        });
    </script>

    @if(!empty($logoutMessage))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'Logout Berhasil!',
                text: @json($logoutMessage),
                showConfirmButton: false,
                timer: 2000
            });
        });
    </script>
    @endif

    @if(session('success'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'Login Berhasil!',
                text: @json(session('success')),
                showConfirmButton: false,
                timer: 2000
            });
        });
    </script>
    @endif

    <!-- Dark mode toggle -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const themeToggleBtn = document.getElementById('themeToggleBtn');
            if (themeToggleBtn) {
                themeToggleBtn.addEventListener('click', function () {
                    const isDark = document.documentElement.getAttribute('data-bs-theme') === 'dark';
                    const next = isDark ? 'light' : 'dark';
                    const isAdminPage = document.body && document.body.classList.contains('admin-page');
                    if (isAdminPage) {
                        document.body.classList.add('theme-switching');
                        document.documentElement.classList.add('theme-switching');
                    }
                    localStorage.setItem('rc-theme', next);
                    document.documentElement.setAttribute('data-bs-theme', next);
                    document.body.setAttribute('data-bs-theme', next);

                    if (isAdminPage) {
                        requestAnimationFrame(function () {
                            document.body.classList.remove('theme-switching');
                            document.documentElement.classList.remove('theme-switching');
                        });
                    }
                });
            }

            // ensure no-transition classes are removed after initial load
            document.documentElement.classList.remove('no-transition');
            if (document.body) document.body.classList.remove('no-transition');
        });
    </script>

    @if((session('admin_logged_in') || session('user_logged_in')) && !session('auth_remember'))
    <script>
        (function () {
            const tabSessionKey = 'rc3_auth_tab_active';

            if (sessionStorage.getItem(tabSessionKey)) {
                return;
            }

            sessionStorage.setItem(tabSessionKey, '1');
            fetch(@json(route('logout')), {
                method: 'GET',
                credentials: 'same-origin',
                keepalive: true,
            }).finally(function () {
                window.location.replace(@json(route('login')));
            });
        }());
    </script>
    @endif

    @yield('scripts')
    @stack('scripts')
</body>
</html>
