<!DOCTYPE html>

<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
<title>تواصل معنا  | شذى الياسمين</title>

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
        <a href="/about" >عن الشركة</a>
        <a href="/admin/contact"  class="active">تواصل معنا</a>
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
        <a href="/about" >عن الشركة</a>
        <a href="/admin/contact"  class="active">تواصل معنا</a>
    </div>

</div>

<div class="menu-overlay" id="menuOverlay"></div>


</header>

<!-- العنوان -->
<div class="page-header">
    <div class="container">
        <h1>تواصل معنا</h1>
        <p>نحن هنا للإجابة على استفساراتك وخدمتك على مدار الساعة</p>
    </div>
</div>

@php
    $contact = $contact ?? null;
@endphp

<main class="contact-wrapper">
    <div class="container">
        <div class="contact-grid">

            <!-- معلومات التواصل -->
            <div class="contact-info">

                <h3>معلومات التواصل</h3>
                <p>تواصل معنا عبر أي من القنوات التالية، وسنكون سعداء بخدمتك</p>

                <!-- العنوان -->
                <div class="info-item">
                    <div class="info-icon">
                        <i class="bi bi-geo-alt"></i>
                    </div>

                    <div class="info-details">
                        <h4>العنوان</h4>
                        <p>
                            {{ $contact?->city ?? 'الدمام , المملكة العربية السعودية' }} <br>
                            {{ $contact?->address ?? 'شارع الأمير محمد بن فهد ' }}
                        </p>
                    </div>
                </div>

                <!-- الهاتف -->
                <div class="info-item">
                    <div class="info-icon">
                        <i class="bi bi-telephone"></i>
                    </div>

                    <div class="info-details">
                        <h4>رقم الهاتف</h4>

                        <p dir="ltr">{{ $contact?->phone1 ?? '+966 50 123 4567' }}</p>

                        @if(!empty($contact?->phone2))
                            <p dir="ltr">{{ $contact->phone2 ?? '+966 13 456 7890' }}</p>
                        @endif
                    </div>
                </div>

                <!-- البريد -->
                <div class="info-item">
                    <div class="info-icon">
                        <i class="bi bi-envelope"></i>
                    </div>

                    <div class="info-details">
                        <h4>البريد الإلكتروني</h4>

                        <p dir="ltr">{{ $contact?->email1 ?? 'info@shatha.com' }}</p>

                        @if(!empty($contact?->email2))
                            <p dir="ltr">{{ $contact->email2 ?? 'support@shatha.com' }}</p>
                        @endif
                    </div>
                </div>

                <!-- واتساب -->
                <div class="info-item">
                    <div class="info-icon">
                        <i class="bi bi-whatsapp"></i>
                    </div>

                    <div class="info-details">
                        <h4>واتساب</h4>

                        <p dir="ltr">{{ $contact?->whatsapp ?? '+966 50 123 4567' }}</p>
                    </div>
                </div>

            </div>

            <!-- نموذج التواصل -->
            <div class="contact-form">
                <h3>أرسل لنا رسالة</h3>
                <p>املأ النموذج التالي وسنرد عليك في أقرب وقت</p>

                <form>
                    <div class="form-group">
                        <label>الاسم</label>
                        <input type="text" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>الجوال</label>
                        <input type="tel" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>البريد</label>
                        <input type="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>الرسالة</label>
                        <textarea class="form-control" rows="5"></textarea>
                    </div>

                    <button class="btn btn-primary">إرسال</button>
                </form>
            </div>

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

</body>
</html>