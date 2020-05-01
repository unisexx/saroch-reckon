@extends('layouts.app')

@section('content')

<!--breadcrumb-->
<div class="container">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb breadcrumb-right-arrow d-flex justify-content-end">
            <li class="breadcrumb-item"><a href="{{ url('') }}">@lang('Home')</a></li>
            <li class="breadcrumb-item"><a href="{{ url('product') }}">@lang('Product')</a></li>
            <li class="breadcrumb-item active">{{ $product_category->title }}</li>
        </ol>
    </nav>
</div>
<!--breadcrumb-->

<section class="fdb-block">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-left">
                <h2>@lang('Product list') : {{ $product_category->title }}</h2>
            </div>
        </div>
    </div>
</section>

<section class="fdb-block">
    <div class="container">
        @foreach($products as $key=>$product)
        @php
            $product = $product->translate(App::getLocale());
        @endphp
        <div class="row product-carousel pt-3">
            <div class="col-12 col-sm-12 col-md-5 col-lg-5 m-auto pb-5 pb-md-0">

                {{-- image carousel --}}
                @php $images = json_decode($product->image); @endphp
                @if($images)
                <div id="slider{{ $key }}">
                    <div id="myCarousel{{ $key }}" class="carousel slide shadow">
                        <!-- main slider carousel items -->
                        <div class="carousel-inner text-center">
                            @foreach($images as $imgkey => $image)
                            <div class="{{ $imgkey == 0 ? 'active' : '' }} carousel-item" data-slide-number="{{$imgkey}}">
                                <img src="@if( !filter_var($image, FILTER_VALIDATE_URL)){{ Voyager::image( $image ) }}@else{{ $image }}@endif" height="300" class="img-fluid">
                            </div>
                            @endforeach
                            <a class="carousel-control-prev" href="#myCarousel{{ $key }}" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#myCarousel{{ $key }}" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!-- main slider carousel nav controls -->


                        <ul class="carousel-indicators list-inline mx-auto border px-2">
                            @foreach($images as $imgkey => $image)
                            <li class="list-inline-item {{ $imgkey == 0 ? 'active' : '' }}">
                                <a id="carousel-selector-{{$imgkey}}" class="selected" data-slide-to="{{$imgkey}}" data-target="#myCarousel{{ $key }}">
                                    <img src="@if( !filter_var($image, FILTER_VALIDATE_URL)){{ Voyager::image( $image ) }}@else{{ $image }}@endif" class="img-fluid" style="max-width: 60px;">
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif

            </div>
            <div class="col-12 ml-md-auto col-md-7 col-lg-6 pb-5 pb-md-0">
                <h3>{{ $product->title }}</h3>
                <p><b>@lang('Model') :</b> {{ $product->gen }}</p>
                <p><b>@lang('Brand') :</b> {{ $product->brand }}</p>
                <p><b>@lang('Size') :</b> {{ $product->size }}</p>
                <p><b>@lang('Detail') :</b> {!! $product->body !!}</p>
                <p><b>@lang('Contain') :</b> {{ $product->contain }}</p>
            </div>
        </div>
        <hr>
        @endforeach
    </div>
</section>

{!! $products->appends(@$_GET)->render() !!}
@endsection

@push('css')
<style>
.product-carousel .list-inline {
    white-space:nowrap;
    overflow-x:auto;
}

.product-carousel .carousel-indicators {
    position: static;
    left: initial;
    width: initial;
    margin-left: initial;
}

.product-carousel .carousel-indicators > li {
    width: initial;
    height: initial;
    text-indent: initial;
}

.product-carousel .carousel-indicators > li.active img {
    opacity: 0.7;
}
</style>
@endpush