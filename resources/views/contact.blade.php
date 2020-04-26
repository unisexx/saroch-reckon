@extends('layouts.app')

@section('content')

<!--breadcrumb-->
<div class="container">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb breadcrumb-right-arrow d-flex justify-content-end">
            <li class="breadcrumb-item"><a href="{{ url('') }}">@lang('Home')</a></li>
            <li class="breadcrumb-item active">@lang('Contact')</li>
        </ol>
    </nav>
</div>
<!--breadcrumb-->

<!-- Testimonials 2 -->
<section class="fdb-block">
    <div class="container">
        <div class="row text-center">
            <div class="col-12 text-left">
                <h2>{{ $contact->title }}</h2>
                {!! $contact->body !!}
            </div>
        </div>
</section>

@include('inc.contact-form')


@endsection
