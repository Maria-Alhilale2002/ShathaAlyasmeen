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
            <li>
                📱
                <span dir="ltr">
                    {{ $contact?->phone1 ?? '+966 573 745 238' }}
                </span>
            </li>

            <li>📍 المملكة العربية السعودية</li>
        </ul>
    </div>

</div>

<div class="footer-bottom">
    <p>&copy; 2026 شذى الياسمين. جميع الحقوق محفوظة.</p>
    <p>By Eng.Maria_Alhilale</p>
</div>

</footer>

<script src="{{ asset('script.js') }}"></script>

</body>
</html>