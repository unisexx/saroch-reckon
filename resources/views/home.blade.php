@extends('layouts.app')

@section('content')


{{-- Clip Video & Product Category --}}
<section class="fdb-block">
    <div class="container">
        <div class="d-flex justify-content-around">
            <a href="{{ url('video') }}">
                <div class="pl-5 pr-5" style="max-width:300px;">
                    <img alt="image" class="img-fluid" src="{{ asset('app-assets/imgs/people/clip.jpg') }}">
                    <div align="center">@lang('Clip Video')</div>
                </div>
            </a>
            <a href="{{ url('product') }}">
                <div class="pl-5 pr-5" style="max-width:300px;">
                    <img alt="image" class="img-fluid" src="{{ asset('app-assets/imgs/people/download.jpg') }}">
                    <div align="center">@lang('Product Category')</div>
                </div>
            </a>
        </div>
    </div>
</section>
{{-- Clip Video & Product Category --}}



{{-- เกี่ยวกับเรา --}}
<section class="fdb-block">
    <div class="container">
        <div class="fdb-box">
            <div class="row align-items-center justify-content-center">
                <div>
                    <img alt="image" width="250" src="{{ asset('storage/'.$about->image) }}">
                </div>

                <div class="col-12 col-md-9 ml-auto mr-auto mt-3 mt-md-0">
                    <p>{!! $about->home_body !!}</p>
                </div>
            </div>
        </div>
    </div>
    <div id="product"></div>
</section>
{{-- เกี่ยวกับเรา --}}


{{-- Product Category --}}
<section class="fdb-block">
    <div class="container">
        <div>
            <div>
                <h2 class="mb-3">@lang('Products and Services')</h2>
            </div>
        </div>
        @foreach( $product_categories->chunk(3) as $chunk )
        <div class="row">
            @foreach($chunk as $product_category)
                <div class="col-md-8 col-lg-4 mb-5">
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
{{-- Product Category --}}


{{-- บทความที่น่าสนใจ --}}
<section class="fdb-block">
    <div class="container">
        <div>
            <div>
                <h2 class="mb-3">@lang('Interesting articles')</h2>
            </div>
        </div>
        <div class="row text-center">
        @foreach( $articles as $article )
            <div class="col-md-6 mb-4 mt-2">
                <a href="{{ url('article/detail/'.$article->id) }}">
                <div class="fdb-box fdb-touch">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <img alt="image" class="img-fluid rounded" src="{{ asset('storage/'.$article->image) }}">
                        </div>
                        <div class="col-8">
                            <h3><strong>{{ $article->title }}</strong></h3>
                            <p>{{ $article->excerpt }}</p>
                        </div>
                    </div>
                </div>
                </a>
            </div>
        @endforeach
        </div>
        </div>
    <div id="contact"></div>
</section>
{{-- บทความที่น่าสนใจ --}}


@include('inc.contact-form')

@endsection
