@include('layouts.header', [
    'pageTitle' => 'شذى الياسمين | مغسلة الملابس الفاخرة',
    'activePage' => 'about'
])

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

@include('layouts.footer')