@php
    $about = \App\About::with('translations')->firstOrFail()->translate(App::getLocale());
@endphp

<section class="fdb-block" style="background-image: url({{ asset('app-assets/imgs/shapes/6.svg') }});">
    <div class="container">
        <div class="fdb-box-aboutus">
            <h2>{{ $about->title2 }}</h2>
            <span class="lato-font">{!! $about->body2 !!}</span>
        </div>
    </div>
    <div id="product"></div>
</section>