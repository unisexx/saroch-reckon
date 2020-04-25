@extends('layouts.app')

@section('content')

<section class="fdb-block">
    <div class="container">
        <div class="row text-center">
            <div class="col-12 text-left">
                <h2>บทความน่าสนใจ</h2>
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
