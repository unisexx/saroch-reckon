@extends('layouts.app')

@section('content')

<!--breadcrumb-->
<div class="container">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb breadcrumb-right-arrow d-flex justify-content-end">
            <li class="breadcrumb-item"><a href="{{ url('') }}">@lang('Home')</a></li>
            <li class="breadcrumb-item active">@lang('Interesting articles')</li>
        </ol>
    </nav>
</div>
<!--breadcrumb-->


<section class="fdb-block">
    <div class="container">
        <div class="row text-center">
            <div class="col-12 text-left">
                <h2>@lang('Interesting articles')</h2>
            </div>
        </div>

        @foreach( $articles->chunk(4) as $chunk )
        <div class="row text-center">
            @foreach($chunk as $article)
            @php
                $article = $article->translate(App::getLocale());
            @endphp
                <div class="col-md-6 mt-5">
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
        @endforeach

    </div>
</section>

{!! $articles->appends(@$_GET)->render() !!}

@endsection
