@extends('layouts.app')

@section('content')


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
