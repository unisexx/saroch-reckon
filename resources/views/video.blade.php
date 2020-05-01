@extends('layouts.app')

@section('content')

<!--breadcrumb-->
<div class="container">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb breadcrumb-right-arrow d-flex justify-content-end">
            <li class="breadcrumb-item"><a href="{{ url('') }}">@lang('Home')</a></li>
            <li class="breadcrumb-item active">@lang('Product Review')</li>
        </ol>
    </nav>
</div>
<!--breadcrumb-->

<section class="fdb-block">
    <div class="container">
        <div class="row text-center">
            <div class="col-12 text-left">
                <h2>@lang('Product Review')</h2>
            </div>
        </div>

        @foreach( $videos->chunk(4) as $chunk )
        <div class="row text-center">
            @foreach($chunk as $video)
            @php
                $video = $video->translate(App::getLocale());
            @endphp
            <div class="col-12 col-sm-6 mt-5">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ @getYoutubeId($video->youtube) }}?rel=0" allowfullscreen></iframe>
                </div>
                <h3><strong>{{ $video->title }}</strong></h3>
            </div>
            @endforeach 
        </div>
        @endforeach

    </div>
</section>

{!! $videos->appends(@$_GET)->render() !!}

@endsection
