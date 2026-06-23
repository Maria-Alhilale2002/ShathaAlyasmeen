<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="لوحة التحكم الإدارية - شذى الياسمين">
    <title>لوحة التحكم - شذى الياسمين</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700&family=Tajawal:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>

    <div class="dashboard-container">
        <aside class="sidebar">
            <div class="sidebar-brand"><i class="bi bi-soap"></i> لوحة الإدارة</div>
            <nav class="sidebar-menu">
                <a href="#" class="sidebar-item active"><i class="bi bi-graph-up"></i> إدارة المحتوى</a>
                <a href="/services" class="sidebar-item"><i class="bi bi-bell"></i> الخدمات</a>
                <a href="/" class="sidebar-item"><i class="bi bi-house"></i> عرض الموقع</a>
            </nav>
        </aside>

        <main class="main-content">
        <header class="dashboard-header">
        <div>
          <h1><i class="bi bi-speedometer2"></i>
            لوحة تحكم شذى الياسمين</h1>
          <p>إدارة محتوى الموقع وتعديل الصفحات بسهولة</p>
        </div>
        </header>

            <div class="content-management">
    <h3>إدارة محتوى الموقع</h3>

    <table class="admin-table">
        <thead>
            <tr>
                <th>#</th>
                <th>القسم</th>
                <th>الإجراء</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>الرئيسية</td>
                <td>
                    <button class="edit-btn" onclick="window.location.href='/admin/home/edit'">
                        <i class="bi bi-pencil-square"></i>
                        تعديل
                    </button>
                </td>
            </tr>

            <tr>
    <td>2</td>
    <td>الخدمات</td>

    <td style="display:flex; gap:10px; justify-content:center;">

        <!-- تعديل -->
        <button
            class="edit-btn"
            onclick="window.location.href='/admin/services/edit'">

            <i class="bi bi-pencil-square"></i>
            تعديل
        </button>

        <!-- إضافة
        <button
            class="add-btn"
            onclick="window.location.href='/admin/services/edit'">

            <i class="bi bi-plus-circle"></i>
            إضافة
        </button> -->

    </td>
</tr>
     
            <tr>
                <td>3</td>
                <td>من نحن</td>
                <td>
                    <button class="edit-btn" onclick="window.location.href='admin/about/edit'">
                        <i class="bi bi-pencil-square"></i>
                        تعديل
                    </button>
                </td>
            </tr>

            <tr>
                <td>4</td>
                <td>التواصل</td>
                <td>
                    <button class="edit-btn" onclick="window.location.href='admin/contact/edit'">
                        <i class="bi bi-pencil-square"></i>
                        تعديل
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>