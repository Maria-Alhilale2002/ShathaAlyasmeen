<!DOCTYPE html>

<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">

<meta name="description" content="{{ $about->page_description }}">

<title>عن الشركة | شذى الياسمين</title>

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
        <a href="/services">الخدمات والأسعار</a>
        <a href="/about" class="active">عن الشركة</a>
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
        <a href="/services">الخدمات والأسعار</a>
        <a href="/about" class="active">عن الشركة</a>
        <a href="/admin/contact">تواصل معنا</a>
    </div>

</div>

<div class="menu-overlay" id="menuOverlay"></div>


</header>

<!-- PAGE HEADER -->

<div class="page-header">

<div class="container">

    <h1>{{ $about->page_title ?:'عن شذى الياسمين'}}</h1>

    <p>{{ $about->page_description ?:'نحن هنا لنقدم لك تجربة فاخرة في العناية بملابسك'}}</p>

</div>

</div>

<main>

<!-- ABOUT US -->

<section class="container about-section">

    <div class="about-content">

        <h2>من نحن؟</h2>

        <p>
            {!! nl2br(e($about->about_paragraph1 ??' تأسست مغسلة شذى الياسمين لتحدث ثورة في مفهوم العناية بالملابس والمفروشات.
                    نجمع بين عراقة الضيافة العربية وأحدث التكنولوجيات الأوتوماتيكية الصديقة للأقمشة والبيئة،
                    لنوفر لكم تجربة تنظيف مثالية تعيد لملابسكم إشراقتها وجمالها الطبيعي مع رائحة زكية تدوم طويلاً.')) !!}
        </p>

        <p>
            {!! nl2br(e($about->about_paragraph2 ??' نفتخر بكوننا الخيار الأول للعائلات التي تبحث عن الجودة والاحترافية في غسيل الملابس.
                    فريقنا المدرب بعناية يستخدم أحدث المعدات والمنظفات الآمنة لضمان أفضل النتائج.')) !!}
        </p>

    </div>

</section>

<!-- VISION & MISSION -->

<section class="vision-mission">

    <div class="container">

        <div class="vision-mission-grid">

            <!-- VISION -->

            <div class="vision-card">

                <div class="icon-wrapper">
                    <i class="bi {{ $about->vision_icon ?? 'bi-eye' }}"></i>
                </div>

                <h3>رؤيتنا</h3>

                <p>
                    {{ $about->vision_text ?:'أن نكون الوجهة الأولى للعناية الفاخرة بالملابس في المملكة، وأن نرسخ معايير جديدة للجودة
                            والابتكار في مجال خدمات الغسيل والتنظيف الجاف، لنصبح علامة فارقة في عالم الضيافة والنظافة.' }}
                </p>

            </div>

            <!-- MISSION -->

            <div class="mission-card">

                <div class="icon-wrapper">
                    <i class="bi {{ $about->mission_icon ?? 'bi-bullseye'}}"></i>
                </div>

                <h3>رسالتنا</h3>

                <p>
                    {{ $about->mission_text ?:'تقديم خدمات غسيل وتنظيف استثنائية تجمع بين التكنولوجيا المتطورة واللمسة الإنسانية، مع
                            الالتزام بأعلى معايير النظافة والعناية بالبيئة، لضمان راحة عملائنا وسعادتهم الدائمة.'}}
                </p>

            </div>

        </div>

    </div>

</section>


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
