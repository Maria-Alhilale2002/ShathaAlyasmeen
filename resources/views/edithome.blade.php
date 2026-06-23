@if(session('success'))
    <div class="alert-success">
        <i class="bi bi-check-circle"></i>
        {{ session('success') }}
    </div>
@endif


<!DOCTYPE html>

<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تعديل الصفحة الرئيسية</title>


<link rel="stylesheet" href="{{asset('style.css')}}">
<link rel="stylesheet" href="{{asset('edit.css')}}">

<link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


</head>

<body>


<div class="admin-page">

    <div class="admin-header">
        <h1>
            <i class="bi bi-house-gear"></i>
            تعديل الصفحة الرئيسية
        </h1>

        <p>
            يمكنك تعديل جميع محتويات الصفحة الرئيسية من هنا
        </p>
    </div>

    <!-- HERO -->

    <form
    method="POST"  action="{{ route('home.update') }}" enctype="multipart/form-data">
    @csrf

    <div class="admin-card">

        <h2>قسم الهيرو</h2>

        <!-- <div class="form-group">
    <label>رابط الفيديو (اختياري)</label>
    <input type="text" id="heroVideoUrl" name="hero_video_link"
    value="{{ old('hero_video_link', $home->hero_video_link) }}"  placeholder="https://...">
</div> -->

<div class="form-group">
    <label>أو رفع فيديو من الجهاز</label>
    <input type="file" id="heroVideoFile"  name="hero_video_file"  accept="video/*">
</div>

        <div class="form-group">
            <label>العنوان الرئيسي</label>
            <textarea name="hero_title">{{ old('hero_title', $home->hero_title) }}</textarea>
        </div>

        <div class="form-group">
            <label>الوصف</label>
            <textarea name="hero_description">
            {{ old('hero_description', $home->hero_description) }}
        </textarea>
        </div>

        <div class="form-group">
            <label>نص الزر الأول</label>
            <input type="text" name="hero_btn1" value="{{ old('hero_btn1', $home->hero_btn1) }}">
        </div>

        <div class="form-group">
            <label>رابط الزر الأول</label>
            <input type="text" name="hero_btn1_link" value="{{ old('hero_btn1_link', $home->hero_btn1_link) }}">
        </div>

        <div class="form-group">
            <label>نص الزر الثاني</label>
            <input type="text"  name="hero_btn2" value="{{ old('hero_btn2', $home->hero_btn2) }}">
        </div>

        <div class="form-group">
            <label>رابط الزر الثاني</label>
            <input type="text" name="hero_btn2_link" value="{{ old('hero_btn2_link', $home->hero_btn2_link) }}">
        </div>

    </div>

    <!-- FEATURES -->

    <div class="admin-card">
        <h2>الميزة الأولى</h2>

        <div class="form-group">
            <label>الأيقونة</label>
            <textarea name="feature1_icon">
            {{ old('feature1_icon', $home->feature1_icon) }}
            </textarea>
        </div>

        <div class="form-group">
            <label>العنوان</label>
            <input type="text" name="feature1_title" value="{{ old('feature1_title', $home->feature1_title) }}">
        </div>

        <div class="form-group">
            <label>الوصف</label>
            <textarea name="feature1_description">
            {{ old('feature1_description', $home->feature1_description) }}
            </textarea>
        </div>
    </div>

    <div class="admin-card">
        <h2>الميزة الثانية</h2>

        <div class="form-group">
            <label>الأيقونة</label>
            <textarea name="feature2_icon">
            {{ old('feature2_icon', $home->feature2_icon) }}
            </textarea>
        </div>

        <div class="form-group">
            <label>العنوان</label>
            <input type="text" name="feature2_title" value="{{ old('feature2_title', $home->feature2_title) }}">
        </div>

        <div class="form-group">
            <label>الوصف</label>
            <textarea name="feature2_description">
            {{ old('feature2_description', $home->feature2_description) }}
            </textarea>
        </div>
    </div>

    <div class="admin-card">
        <h2>الميزة الثالثة</h2>

        <div class="form-group">
            <label>الأيقونة</label>
            <textarea name="feature3_icon">
            {{ old('feature3_icon', $home->feature3_icon) }}
            </textarea>
        </div>

        <div class="form-group">
            <label>العنوان</label>
            <input type="text" name="feature3_title" value="{{ old('feature3_title', $home->feature3_title) }}">
        </div>

        <div class="form-group">
            <label>الوصف</label>
            <textarea name="feature3_description">
            {{ old('feature3_description', $home->feature3_description) }}
            </textarea>
        </div>
    </div>

    <!-- SERVICES HEADER -->

    <div class="admin-card">

        <h2>قسم الخدمات</h2>

        <div class="form-group">
            <label>عنوان القسم</label>
<input
    type="text"
    name="section_services_title"
    value="{{ old('section_services_title', $home->section_services_title) }}">
        </div>

        <div class="form-group">
            <label>وصف القسم</label>
            <textarea
    name="section_services_description">{{ old('section_services_description', $home->section_services_description) }}</textarea>
        </div>

    </div>

    <!-- SERVICES -->

    <div class="admin-card">
        <h2>الخدمات</h2>

        <div class="services-admin-grid">

        <!-- الخدمة 1 -->

<input
    type="text"
    name="services_icon1"
    value="{{ old('services_icon1', $home->services_icon1) }}"
    placeholder="الأيقونة">

<input
    type="text"
    name="services_title1"
    value="{{ old('services_title1', $home->services_title1) }}"
    placeholder="اسم الخدمة">

<textarea
    name="services_description1">{{ old('services_description1', $home->services_description1) }}</textarea>


<!-- الخدمة 2 -->

<input
    type="text"
    name="services_icon2"
    value="{{ old('services_icon2', $home->services_icon2) }}"
    placeholder="الأيقونة">

<input
    type="text"
    name="services_title2"
    value="{{ old('services_title2', $home->services_title2) }}"
    placeholder="اسم الخدمة">

<textarea
    name="services_description2">{{ old('services_description2', $home->services_description2) }}</textarea>


<!-- الخدمة 3 -->

<input
    type="text"
    name="services_icon3"
    value="{{ old('services_icon3', $home->services_icon3) }}"
    placeholder="الأيقونة">

<input
    type="text"
    name="services_title3"
    value="{{ old('services_title3', $home->services_title3) }}"
    placeholder="اسم الخدمة">

<textarea
    name="services_description3">{{ old('services_description3', $home->services_description3) }}</textarea>


<!-- الخدمة 4 -->

<input
    type="text"
    name="services_icon4"
    value="{{ old('services_icon4', $home->services_icon4) }}"
    placeholder="الأيقونة">

<input
    type="text"
    name="services_title4"
    value="{{ old('services_title4', $home->services_title4) }}"
    placeholder="اسم الخدمة">

<textarea
    name="services_description4">{{ old('services_description4', $home->services_description4) }}</textarea>


<!-- الخدمة 5 -->

<input
    type="text"
    name="services_icon5"
    value="{{ old('services_icon5', $home->services_icon5) }}"
    placeholder="الأيقونة">

<input
    type="text"
    name="services_title5"
    value="{{ old('services_title5', $home->services_title5) }}"
    placeholder="اسم الخدمة">

<textarea
    name="services_description5">{{ old('services_description5', $home->services_description5) }}</textarea>


<!-- الخدمة 6 -->

<input
    type="text"
    name="services_icon6"
    value="{{ old('services_icon6', $home->services_icon6) }}"
    placeholder="الأيقونة">

<input
    type="text"
    name="services_title6"
    value="{{ old('services_title6', $home->services_title6) }}"
    placeholder="اسم الخدمة">

<textarea
    name="services_description6">{{ old('services_description6', $home->services_description6) }}</textarea>

        </div>

    </div>

    <div class="save-section">

        <button  type="submit" class="save-btn">

            <i class="bi bi-save"></i>

            حفظ التعديلات

        </button>

    </div>

</div>

</form>


<script>
    setTimeout(() => {
        const alert = document.querySelector('.alert-success');
        if (alert) {
            alert.style.transition = "0.5s";
            alert.style.opacity = "0";
            alert.style.transform = "translateX(-50%) translateY(-20px)";
            setTimeout(() => alert.remove(), 500);
        }
    }, 3000);
</script>
</body>

</html>
