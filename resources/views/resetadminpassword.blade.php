<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>إعادة تعيين كلمة المرور</title>

    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('edit.css') }}">
</head>

<body>
    @if(session('success'))
<div id="successMessage" class="success-alert">
    <i class="bi bi-check-circle-fill"></i>
    {{ session('success') }}
</div>
@endif

<div class="admin-page">

    <div class="admin-card">

        <h1>إعادة تعيين كلمة المرور</h1>

        <form method="POST" action="/reset-password">

            @csrf

            <div class="form-group">
                <label>البريد الإلكتروني</label>
                <input type="email" name="email" required>
            </div>

            <div class="form-group">
                <label>كلمة المرور الحالية</label>
                <input type="password" name="old_password" required>
            </div>

            <div class="form-group">
                <label>كلمة المرور الجديدة</label>
                <input type="password" name="new_password" required>
            </div>

            <button class="save-btn">
                حفظ كلمة المرور الجديدة
            </button>

        </form>

    </div>

</div>
<script>
setTimeout(() => {

    const msg = document.getElementById('successMessage');

    if(msg){

        msg.style.transition = "0.5s";
        msg.style.opacity = "0";

        setTimeout(() => {
            msg.remove();
        }, 500);
    }

}, 3000);
</script>
</body>
</html>