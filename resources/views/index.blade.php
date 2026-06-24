@include('layouts.header', [
    'pageTitle' => 'شذى الياسمين | مغسلة الملابس الفاخرة',
    'activePage' => 'home'
])


<!-- ================= HERO ================= -->
 <main>
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

@include('layouts.footer')