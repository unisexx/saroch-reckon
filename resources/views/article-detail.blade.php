@extends('layouts.app')

@section('title')
    {{ $article->title }} - reckonthai.com
@endsection

@section('content')

<!--breadcrumb-->
<div class="container">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb breadcrumb-right-arrow d-flex justify-content-end">
            <li class="breadcrumb-item"><a href="{{ url('') }}">@lang('Home')</a></li>
            <li class="breadcrumb-item active"><a href="{{ url('article') }}">@lang('Articles')</a></li>
            <li class="breadcrumb-item active">{{ $article->title }}</li>
        </ol>
    </nav>
</div>
<!--breadcrumb-->


<section class="fdb-block">
    <div class="container">
        <div class="row text-center">
            <div class="col-12 text-left">
                <h2>{{ $article->title }}</h2>
            </div>
        </div>

        <div class="container pt-2 mb-5">
            <div class="row justify-content-center">
                <div class="col-md-8"><img src="{{ asset('storage/'.$article->image) }}" alt=""
                        class="img-fluid mx-ato d-block"></div>
                <div class="col-md-12 mt-5">
                    <h3 class="title-article">{{ $article->title }}</h3>
                    {!! $article->body !!}
                </div>
            </div>
        </div>

    </div>
    </div>
</section>

@endsection
