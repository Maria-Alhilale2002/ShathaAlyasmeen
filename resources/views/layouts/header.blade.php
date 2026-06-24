<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">

    <title>{{ $pageTitle ?? 'مغسلة شذى الياسمين' }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700&family=Tajawal:wght@300;400;500;600;700&display=swap"
      rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>

<header>

    <div class="container navbar">

        <div class="logo">
            <i class="bi bi-soap"></i>
            شذى الياسمين
        </div>

        <nav class="nav-links">

            <a href="/"
               class="{{ ($activePage ?? '') == 'home' ? 'active' : '' }}">
                الرئيسية
            </a>

            <a href="/services"
               class="{{ ($activePage ?? '') == 'services' ? 'active' : '' }}">
                الخدمات والأسعار
            </a>

            <a href="/about"
               class="{{ ($activePage ?? '') == 'about' ? 'active' : '' }}">
                عن الشركة
            </a>

            <a href="/admin/contact"
               class="{{ ($activePage ?? '') == 'contact' ? 'active' : '' }}">
                تواصل معنا
            </a>

        </nav>

        <button class="menu-toggle" id="menuToggle">
            <i class="bi bi-list"></i>
        </button>

    </div>

    <div class="mobile-menu" id="mobileMenu">

        <button class="close-menu" id="closeMenu">
            <i class="bi bi-x"></i>
        </button>

        <div class="mobile-nav-links">

            <a href="/"
               class="{{ ($activePage ?? '') == 'home' ? 'active' : '' }}">
                الرئيسية
            </a>

            <a href="/services"
               class="{{ ($activePage ?? '') == 'services' ? 'active' : '' }}">
                الخدمات والأسعار
            </a>

            <a href="/about"
               class="{{ ($activePage ?? '') == 'about' ? 'active' : '' }}">
                عن الشركة
            </a>

            <a href="/admin/contact"
               class="{{ ($activePage ?? '') == 'contact' ? 'active' : '' }}">
                تواصل معنا
            </a>

        </div>

    </div>

    <div class="menu-overlay" id="menuOverlay"></div>

</header>