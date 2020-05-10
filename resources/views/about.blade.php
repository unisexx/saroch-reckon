@extends('layouts.app')

@section('title')
    @lang('About Us') - reckonthai.com
@endsection

@section('content')

<!--breadcrumb-->
<div class="container">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb breadcrumb-right-arrow d-flex justify-content-end">
            <li class="breadcrumb-item"><a href="{{ url('') }}">@lang('Home')</a></li>
            <li class="breadcrumb-item active">@lang('About Us')</li>
        </ol>
    </nav>
</div>
<!--breadcrumb-->

<!-- Testimonials 2 -->
<section class="fdb-block">
    <div class="container">
        <div class="fdb-box-aboutus">
            <h2>{{ $about->title }}</h2>
            <span class="EucrosiaUPC-font">{!! $about->body !!}</span>
        </div>
    </div>
    <div id="product"></div>
</section>

@include('inc.slogan')


@endsection
