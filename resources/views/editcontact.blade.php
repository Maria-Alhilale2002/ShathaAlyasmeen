<!DOCTYPE html>

<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تعديل معلومات التواصل - لوحة التحكم</title>

<!-- Fonts + Icons -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">

<!-- CSS -->
<link rel="stylesheet" href="{{ asset('style.css') }}">
<link rel="stylesheet" href="{{ asset('edit.css') }}">


</head>

<body>

<div class="admin-page">


<div class="admin-header">
    <h1>
        <i class="bi bi-telephone"></i>
        إدارة معلومات التواصل
    </h1>

    <p>
        يمكنك تعديل جميع بيانات التواصل الظاهرة في صفحة تواصل معنا
    </p>
</div>

@if(session('success'))
    <div class="success-alert">
        {{ session('success') }}
    </div>
@endif

<form method="POST" action="{{ route('contact.update') }}">
    @csrf

    <!-- العنوان -->
    <div class="admin-card">

        <h2>
            <i class="bi bi-geo-alt"></i>
            العنوان
        </h2>

        <div class="form-group">
            <label>المدينة</label>

            <input
                type="text"
                name="city"
                value="{{ old('city', $contact->city) }}">
        </div>

        <div class="form-group">
            <label>تفاصيل العنوان</label>

            <textarea
                name="address">{{ old('address', $contact->address) }}</textarea>
        </div>

    </div>

    <!-- أرقام الهاتف -->
    <div class="admin-card">

        <h2>
            <i class="bi bi-telephone"></i>
            أرقام الهاتف
        </h2>

        <div class="form-group">
            <label>رقم الهاتف الأساسي</label>

            <input
                type="text"
                name="phone1"
                value="{{ old('phone1', $contact->phone1) }}">
        </div>

        <div class="form-group">
            <label>رقم الهاتف الثاني</label>

            <input
                type="text"
                name="phone2"
                value="{{ old('phone2', $contact->phone2) }}">
        </div>

    </div>

    <!-- البريد الإلكتروني -->
    <div class="admin-card">

        <h2>
            <i class="bi bi-envelope"></i>
            البريد الإلكتروني
        </h2>

        <div class="form-group">
            <label>البريد الإلكتروني الأساسي</label>

            <input
                type="email"
                name="email1"
                value="{{ old('email1', $contact->email1) }}">
        </div>

        <div class="form-group">
            <label>بريد الدعم الفني</label>

            <input
                type="email"
                name="email2"
                value="{{ old('email2', $contact->email2) }}">
        </div>

    </div>

    <!-- واتساب -->
    <div class="admin-card">

        <h2>
            <i class="bi bi-whatsapp"></i>
            واتساب
        </h2>

        <div class="form-group">
            <label>رقم واتساب</label>

            <input
                type="text"
                name="whatsapp"
                value="{{ old('whatsapp', $contact->whatsapp) }}">
        </div>

    </div>

    <!-- زر الحفظ -->
    <div class="save-section">

        <button type="submit" class="save-btn">
            <i class="bi bi-save"></i>
            حفظ التعديلات
        </button>

    </div>

</form>

</div>

</body>
</html>
