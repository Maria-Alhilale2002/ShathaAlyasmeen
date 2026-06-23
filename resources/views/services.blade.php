<!DOCTYPE html>

<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
<title>مانقدمه  | شذى الياسمين</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<link
    href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700&family=Tajawal:wght@300;400;500;600;700&display=swap"
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
        <a href="/">الرئيسية</a>
        <a href="/services" class="active">الخدمات والأسعار</a>
        <a href="/about" >عن الشركة</a>
        <a href="/admin/contact">تواصل معنا</a>
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
        <a href="/">الرئيسية</a>
        <a href="/services"  class="active">الخدمات والأسعار</a>
        <a href="/about" >عن الشركة</a>
        <a href="/admin/contact">تواصل معنا</a>
    </div>

</div>

<div class="menu-overlay" id="menuOverlay"></div>


</header>

<div class="page-header">
    <div class="container">
        <h2>قائمة الخدمات والأسعار</h2>
        <p>أسعار تنافسية وجودة فاخرة تلبي متطلباتكم</p>
    </div>
</div>

<main class="container">

<div class="services-grid">

    @forelse($services as $service)

    <div class="service-pricing-card">

        <h3>{{ $service->title }}</h3>

        <div class="price-tag">
            {{ $service->price }}
        </div>

        <p>
            {{ $service->description }}
        </p>

        <a href="/admin/contact" class="btn btn-primary">
            اطلب الآن
        </a>

    </div>

    @empty

    <div style="text-align:center;width:100%;">
        لا توجد خدمات حالياً
    </div>

    @endforelse

</div>


</main>

<footer>

<div class="container footer-content">

    <div class="footer-section">
        <h3>شذى الياسمين</h3>
        <p>
            مغسلة ملابس فاخرة متخصصة في تقديم أفضل خدمات الغسيل والتنظيف الجاف.
        </p>
    </div>

    <div class="footer-section">
        <h3>الخدمات</h3>

        <ul>
            <li><a href="/services">غسيل الثياب</a></li>
            <li><a href="/services">غسيل العبايات</a></li>
            <li><a href="/services">التنظيف الجاف</a></li>
            <li><a href="/services">تنظيف السجاد</a></li>
        </ul>
    </div>

    <div class="footer-section">
        <h3>روابط مهمة</h3>

        <ul>
            <li><a href="/about">عن الشركة</a></li>
            <li><a href="/admin/contact">تواصل معنا</a></li>
        </ul>
    </div>

    <div class="footer-section">
        <h3>معلومات التواصل</h3>

        <ul>
            <li>📱 <span dir="ltr">{{ $contact?->phone1 ?? '+966 50 123 4567' }}</span></li>
            <li>📍 المملكة العربية السعودية</li>
        </ul>
    </div>

</div>

<div class="footer-bottom">
    <p>&copy; 2026 شذى الياسمين. جميع الحقوق محفوظة.</p>
    <p>By Eng.Maria_Alhilale</p>
</div>


</footer>
<script src="{{ asset('script.js') }}"></script>

</body>
</html>
