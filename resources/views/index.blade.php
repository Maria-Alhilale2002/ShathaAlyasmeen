<!DOCTYPE html>

<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
<title>مغسلة شذى الياسمين</title>

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
        <a href="/" class="active">الرئيسية</a>
        <a href="/services">الخدمات والأسعار</a>
        <a href="/about">عن الشركة</a>
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
        <a href="/" class="active">الرئيسية</a>
        <a href="/services">الخدمات والأسعار</a>
        <a href="/about" >عن الشركة</a>
        <a href="/admin/contact">تواصل معنا</a>
    </div>

</div>

<div class="menu-overlay" id="menuOverlay"></div>


</header>


<!-- ================= HERO ================= -->
<section class="hero-video-section">

    <video class="hero-background-video" autoplay muted loop playsinline>

    @if(!empty($home->hero_video_file))
        <source src="{{ asset($home->hero_video_file) }}" type="video/mp4">
    @else
        <source src="{{ asset('videos/video_2026-06-15_01-21-01.mp4') }}" type="video/mp4">
    @endif

    متصفحك لا يدعم تشغيل الفيديو
</video>

    <div class="hero-overlay"></div>

    <div class="hero-content-overlay">

        <h1>
            {!! nl2br(e(
                $home->hero_title
                ?: 'عناية فائقة بملابسك
               ونظافة تدوم كالياسمين'
            )) !!}
        </h1>

        <p>
            {{ $home->hero_description ?: 'نقدم في مغسلة شذى الياسمين خدمات تنظيف وغسيل فاخرة تناسب تطلعاتكم باستخدام أحدث التقنيات الصديقة للبيئة. جودة تضاهي رائحة الياسمين العطرة.' }}
        </p>

        <div style="display:flex;gap:15px;justify-content:center;flex-wrap:wrap;">

            <a href="{{ $home->hero_btn1_link ?: '/services' }}"
               class="btn btn-primary">

                {{ $home->hero_btn1 ?: 'استكشف خدماتنا' }}
            </a>

            <a href="{{ $home->hero_btn2_link ?: '/admin/contact' }}"
               class="btn btn-secondary">

                {{ $home->hero_btn2 ?: 'اطلب الخدمة الآن' }}
            </a>

        </div>

    </div>

</section>

<!-- ================= FEATURES ================= -->
<div class="container">

    <div class="features">

        <div class="feature-card">

            {!! $home->feature1_icon ?: '<i class="bi bi-bag"></i>' !!}

            <h3>
                {{ $home->feature1_title ?: 'غسيل وكوي احترافي' }}
            </h3>

            <p>
                {{ $home->feature1_description ?: 'نضمن الحفاظ على جودة الأنسجة والألوان لتبدو ملابسك جديدة دائماً.' }}
            </p>

        </div>

        <div class="feature-card">

            {!! $home->feature2_icon ?: '<i class="bi bi-truck"></i>' !!}

            <h3>
                {{ $home->feature2_title ?: 'خدمة التوصيل السريع' }}
            </h3>

            <p>
                {{ $home->feature2_description ?: 'نصلك أينما كنت لاستلام وتسليم الملابس بكل سهولة وأمان.' }}
            </p>

        </div>

        <div class="feature-card">

            {!! $home->feature3_icon ?: '<i class="bi bi-magic"></i>' !!}

            <h3>
                {{ $home->feature3_title ?: 'إزالة البقع المستعصية' }}
            </h3>

            <p>
                {{ $home->feature3_description ?: 'تقنيات متطورة ومواد تنظيف آمنة وفعالة لإزالة أصعب البقع.' }}
            </p>

        </div>

    </div>

</div>
<!-- ================= SERVICES ================= -->
<section class="services-section">

    <div class="container">

        <div class="section-header">
            <h2>{{ $home->section_services_title ?: 'خدماتنا المتنوعة'}}</h2>
            <p>{{ $home->section_services_description ?: 'نوفر مجموعة شاملة من خدمات الغسيل المتخصصة لجميع أنواع الملابس والمنسوجات'}}</p>
        </div>

        <div class="services-grid">

    <!-- غسيل الثياب -->
    <div class="service-card">
        {!! $home->services_icon1 ?: '<i class="bi bi-person-badge service-icon"></i>' !!}
        <h3>{{ $home->services_title1 ?:'غسيل الثياب'}}</h3>
        <p>{{ $home->services_description1?:'غسيل متخصص للثياب التقليدية مع الحفاظ على الجودة والألوان' }}</p>
    </div>

    <!-- غسيل العبايات -->
    <div class="service-card">
        {!! $home->services_icon2 ?: '<i class="bi bi-handbag service-icon"></i>' !!}
        <h3>{{ $home->services_title2 ?:'غسيل عبايات'}}</h3>
        <p>{{ $home->services_description2 ?:'عناية فائقة بالعبايات الفاخرة باستخدام أحدث التقنيات' }}</p>
    </div>

    <!-- التنظيف الجاف -->
    <div class="service-card">
        {!! $home->services_icon3 ?: '<i class="bi bi-droplet service-icon"></i>' !!}
        <h3>{{ $home->services_title3 ?:'التنظيف الجاف'}}</h3>
        <p>{{ $home->services_description3 ?:'خدمة التنظيف الجاف للملابس الحساسة والفاخرة'}}</p>
    </div>

    <!-- تنظيف السجاد -->
    <div class="service-card">
        {!! $home->services_icon4 ?: '<i class="bi bi-house-heart service-icon"></i>' !!}
        <h3>{{ $home->services_title4 ?:' تنظيف السجاد'}}</h3>
        <p>{{ $home->services_description4 ?:'تنظيف عميق للسجاد والبطانيات بمعايير عالية'}}</p>
    </div>

    <!-- تنظيف الأحذية -->
    <div class="service-card">
        {!! $home->services_icon5 ?: '<i class="bi bi-stars service-icon"></i>' !!}
        <h3>{{ $home->services_title5 ?:'تنظيف الأحذية'}}</h3>
        <p>{{ $home->services_description5 ?:'تنظيف وصيانة متخصصة لجميع أنواع الأحذية'}}</p>
    </div>

    <!-- التوصيل -->
    <div class="service-card">
        {!! $home->services_icon6 ?: '<i class="bi bi-truck service-icon"></i>' !!}
        <h3>{{ $home->services_title6 ?:'توصيل مجاني'}}</h3>
        <p>{{ $home->services_description6 ?:'خدمة استلام وتوصيل مجانية من وإلى باب منزلك'}}</p>
    </div>

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