@extends('layouts.app')

@section('content')

<!--breadcrumb-->
<div class="container">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb breadcrumb-right-arrow d-flex justify-content-end">
            <li class="breadcrumb-item"><a href="{{ url('') }}">@lang('Home')</a></li>
            <li class="breadcrumb-item"><a href="{{ url('product') }}">@lang('Products and Services')</a></li>
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
        @foreach($products as $product)
        @php
            $product = $product->translate(App::getLocale());
        @endphp
        <div class="row align-items-center">
            <div class="col-10 col-sm-6 col-md-5 col-lg-4 m-auto pb-5 pb-md-0">
                <img alt="image" class="img-fluid rounded-0" src="{{ asset('storage/'.$product->image) }}">
            </div>
            <div class="col-12 ml-md-auto col-md-7 col-lg-6 pb-5 pb-md-0">
                <h3>{{ $product->title }}</h3>
                <p><b>@lang('Model') :</b> {{ $product->gen }}</p>
                <p><b>@lang('Brand') :</b> {{ $product->brand }}</p>
                <p><b>@lang('Size') :</b> {{ $product->size }}</p>
                <p><b>@lang('Detail') :</b> {{ $product->body }}</p>
                <p><b>@lang('Price') :</b> {{ number_format($product->price, 2) }} บาท</p>
            </div>
        </div>
        <hr>
        @endforeach
    </div>
</section>

{!! $products->appends(@$_GET)->render() !!}
@endsection
