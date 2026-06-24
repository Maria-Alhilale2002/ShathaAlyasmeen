@include('layouts.header', [
    'pageTitle' => 'شذى الياسمين | مغسلة الملابس الفاخرة',
    'activePage' => 'services'
])

<div class="page-header">
    <div class="container">
        <h2>قائمة الخدمات والأسعار</h2>
        <p>أسعار تنافسية وجودة فاخرة تلبي متطلباتكم</p>
    </div>
</div>

<main class="container">

<div class="services-grid">

    @forelse($services as $service)

    <div class="service-pricing-card">

        <h3>{{ $service->title }}</h3>

        <div class="price-tag">
            {{ $service->price }}
        </div>

        <p>
            {{ $service->description }}
        </p>

        <a href="/admin/contact" class="btn btn-primary">
            اطلب الآن
        </a>

    </div>

    @empty

    <div style="text-align:center;width:100%;">
        لا توجد خدمات حالياً
    </div>

    @endforelse

</div>


</main>

@include('layouts.footer')