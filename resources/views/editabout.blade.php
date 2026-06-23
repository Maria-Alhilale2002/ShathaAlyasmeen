<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>تعديل صفحة عن الشركة</title>

    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('edit.css') }}">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

<div class="admin-page">

    <div class="admin-header">
        <h1>تعديل صفحة عن الشركة</h1>
        <p>تحكم كامل في المحتوى والنصوص والأيقونات</p>
    </div>

    @if(session('success'))
        <div class="success-alert">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('about.update') }}">
        @csrf

        <!-- رأس الصفحة -->

        <div class="admin-card">

            <h2>رأس الصفحة</h2>

            <div class="form-group">
                <label>العنوان الرئيسي</label>
                <input
                    type="text"
                    name="page_title"
                    value="{{ old('page_title', $about->page_title) }}">
            </div>

            <div class="form-group">
                <label>الوصف</label>
                <textarea
                    name="page_description">{{ old('page_description', $about->page_description) }}</textarea>
            </div>

        </div>

        <!-- من نحن -->

        <div class="admin-card">

            <h2>قسم من نحن</h2>

            <div class="form-group">
                <label>عنوان القسم</label>
                <input
                    type="text"
                    name="about_title"
                    value="{{ old('about_title', $about->about_title) }}">
            </div>

            <div class="form-group">
                <label>الفقرة الأولى</label>
                <textarea
                    name="about_paragraph1">{{ old('about_paragraph1', $about->about_paragraph1) }}</textarea>
            </div>

            <div class="form-group">
                <label>الفقرة الثانية</label>
                <textarea
                    name="about_paragraph2">{{ old('about_paragraph2', $about->about_paragraph2) }}</textarea>
            </div>

        </div>

        <!-- الرؤية -->

        <div class="admin-card">

            <h2>الرؤية</h2>

            <div class="form-group">
                <label>الأيقونة</label>
                <input
                    type="text"
                    name="vision_icon"
                    value="{{ old('vision_icon', $about->vision_icon) }}"
                    placeholder='<i class="bi bi-eye"></i>'>
            </div>

            <div class="form-group">
                <label>عنوان الرؤية</label>
                <input
                    type="text"
                    name="vision_title"
                    value="{{ old('vision_title', $about->vision_title) }}">
            </div>

            <div class="form-group">
                <label>نص الرؤية</label>
                <textarea
                    name="vision_text">{{ old('vision_text', $about->vision_text) }}</textarea>
            </div>

        </div>

        <!-- الرسالة -->

        <div class="admin-card">

            <h2>الرسالة</h2>

            <div class="form-group">
                <label>الأيقونة</label>
                <input
                    type="text"
                    name="mission_icon"
                    value="{{ old('mission_icon', $about->mission_icon) }}"
                    placeholder='<i class="bi bi-bullseye"></i>'>
            </div>

            <div class="form-group">
                <label>عنوان الرسالة</label>
                <input
                    type="text"
                    name="mission_title"
                    value="{{ old('mission_title', $about->mission_title) }}">
            </div>

            <div class="form-group">
                <label>نص الرسالة</label>
                <textarea
                    name="mission_text">{{ old('mission_text', $about->mission_text) }}</textarea>
            </div>

        </div>

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