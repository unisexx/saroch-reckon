@extends('layouts.app')

@section('content')

<!--breadcrumb-->
<div class="container">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb breadcrumb-right-arrow d-flex justify-content-end">
            <li class="breadcrumb-item"><a href="{{ url('') }}">@lang('Home')</a></li>
            <li class="breadcrumb-item active">@lang('Products and Services')</li>
        </ol>
    </nav>
</div>
<!--breadcrumb-->


<section class="fdb-block">
    <div class="container">

        <h2>@lang('Products and Services')</h2>

        @foreach( $product_categories->chunk(3) as $chunk )
        <div class="row">
            @foreach($chunk as $product_category)
            @php
                $product_category = $product_category->translate(App::getLocale());
            @endphp
                <div class="col-md-8 col-lg-4 mt-5">
                    <a href="{{ url('product-category/'. $product_category->id) }}">
                    <div class="fdb-box">
                        <div class="row no-gutters align-items-center">
                            <div class="col-12 ml-auto">
                                <img alt="image" class="img-fluid rounded" src="{{ asset('storage/'.$product_category->image) }}">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                                <p align="center">{{ $product_category->title }}</p>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            @endforeach 
        </div>
        @endforeach

    </div>
</section>


@endsection
