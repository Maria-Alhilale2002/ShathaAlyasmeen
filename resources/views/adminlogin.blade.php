<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>تسجيل دخول الأدمن</title>

    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('edit.css') }}">
</head>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul style="margin:0;padding-right:20px;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<body>

<div class="admin-page">

    <div class="admin-card">

        <h1>تسجيل دخول الأدمن</h1>

        @if(session('error'))
            <div class="error-alert">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="/secret-admin-login">

            @csrf

            <div class="form-group">
                <label>البريد الإلكتروني</label>
                <input type="email" name="email" required>
            </div>

            <div class="form-group">
                <label>كلمة المرور</label>
                <input type="password" name="password" required>
            </div>

            <button class="save-btn">
                تسجيل الدخول
            </button>

        </form>

        <br>

        <a href="/reset-password">
            إعادة تعيين كلمة المرور
        </a>

    </div>

</div>

</body>
</html>