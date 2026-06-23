<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>إدارة الخدمات</title>

    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('edit.css') }}">
</head>

<body>

{{-- SUCCESS MESSAGE --}}
@if(session('success'))
    <div id="successMessage" class="success-alert">
        {{ session('success') }}
    </div>
@endif


<div class="admin-page">

    {{-- HEADER --}}
    <div class="admin-header">
        <h1>إدارة الخدمات</h1>

        <div style="display:flex; gap:10px; margin-top:10px;">
            <button class="add-btn" onclick="setMode('add')">إضافة خدمة</button>
            <button class="edit-btn" onclick="goToEdit()">تعديل الخدمات</button>
        </div>
    </div>

    {{-- ================= ADD MODE ================= --}}
    <div id="addBox" class="admin-card">

        <h2>إضافة خدمة جديدة</h2>

        <form method="POST" action="{{ route('services.store') }}">
            @csrf

            <div class="form-group">
                <label>اسم الخدمة</label>
                <input type="text" name="title">
            </div>

            <div class="form-group">
                <label>السعر</label>
                <input type="text" name="price">
            </div>

            <div class="form-group">
                <label>الوصف</label>
                <textarea name="description"></textarea>
            </div>

            <button class="save-btn">إضافة</button>
        </form>

    </div>

    {{-- ================= EDIT MODE (TABLE) ================= --}}
    <div id="editBox">

        <table class="admin-table" id="servicesTable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>اسم الخدمة</th>
                    <th>السعر</th>
                    <th>الوصف</th>
                    <th>الإجراءات</th>
                </tr>
            </thead>

            <tbody>

            @foreach($services as $service)

                <tr>
                    <td>{{ $service->id }}</td>

                    <td>
                        <form method="POST" action="{{ route('services.update', $service->id) }}">
                            @csrf
                            @method('PUT')
                            <input type="text" name="title" value="{{ $service->title }}">
                    </td>

                    <td>
                            <input type="text" name="price" value="{{ $service->price }}">
                    </td>

                    <td>
                            <input type="text" name="description" value="{{ $service->description }}">
                    </td>

                    <td style="display:flex; gap:8px; justify-content:center;">

                            <button class="save-btn">تعديل</button>
                        </form>

                        <form method="POST" action="{{ route('services.delete', $service->id) }}">
                            @csrf
                            @method('DELETE')

                            <button class="delete-btn"
                                    onclick="return confirm('هل تريد الحذف؟')">
                                حذف
                            </button>
                        </form>

                    </td>
                </tr>

            @endforeach

            </tbody>
        </table>

    </div>

</div>

{{-- ================= JS ================= --}}
<script>
function setMode(mode) {

    const addBox = document.getElementById('addBox');
    const editBox = document.getElementById('editBox');

    if (mode === 'add') {
        addBox.style.display = 'block';
        editBox.style.display = 'none';
    }

    if (mode === 'edit') {
        addBox.style.display = 'none';
        editBox.style.display = 'block';
    }
}

/* زر تعديل احترافي */
function goToEdit() {

    setMode('edit');

    setTimeout(() => {
        const table = document.getElementById('servicesTable');

        table.scrollIntoView({ behavior: 'smooth' });

        // تمييز بسيط
        table.classList.add('highlight');

        setTimeout(() => {
            table.classList.remove('highlight');
        }, 1000);

    }, 200);
}

/* إخفاء رسالة النجاح */
setTimeout(() => {
    const msg = document.getElementById('successMessage');

    if (msg) {
        msg.style.transition = "0.5s";
        msg.style.opacity = "0";

        setTimeout(() => msg.remove(), 500);
    }
}, 3000);

/* الوضع الافتراضي */
setMode('edit');
</script>

</body>
</html>