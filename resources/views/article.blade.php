@extends('layouts.app')

@section('content')

<section class="fdb-block">
    <div class="container">
        <div class="row text-center">
            <div class="col-12 text-left">
                <h2>บทความที่น่าสนใจ</h2>
            </div>
        </div>

        @foreach( $articles->chunk(4) as $chunk )
        <div class="row text-center">
            @foreach($chunk as $article)
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
