@include('layouts.header', [
    'pageTitle' => 'شذى الياسمين | مغسلة الملابس الفاخرة',
    'activePage' => 'contact'
])

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

                <form  id="contactForm">
                    <div class="form-group">
                        <label>الاسم</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>الجوال</label>
                        <input type="tel" name="phone" class="form-control" required>

                    </div>

                    <div class="form-group">
                        <label>البريد</label>
                        <input type="email" name="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>الرسالة</label>
                        <textarea name="message" class="form-control" rows="5"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">إرسال</button>
                </form>
            </div>

        </div>
    </div>
</main>

<script>
document.getElementById("contactForm").addEventListener("submit", function(e) {
    e.preventDefault();

    let name = document.querySelector('[name="name"]').value;
    let phone = document.querySelector('[name="phone"]').value;
    let email = document.querySelector('[name="email"]').value;
    let message = document.querySelector('[name="message"]').value;

    // تحقق بسيط
    if (!name || !phone || !message) {
        alert("يرجى تعبئة الاسم والجوال والرسالة");
        return;
    }

    let whatsappNumber = "967778274221";

    let text =
`مرحباً، لدي طلب من موقع شذى الياسمين:

👤 الاسم: ${name}
📱 الجوال: ${phone}
📧 البريد: ${email}
📝 الرسالة: ${message}`;

    let url = "https://wa.me/" + whatsappNumber + "?text=" + encodeURIComponent(text);

    window.open(url, "_blank");
});
</script>

@include('layouts.footer')