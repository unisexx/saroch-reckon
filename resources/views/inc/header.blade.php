@php
    $contact = \App\Contact::firstOrFail();
@endphp

<header class="top-header">
    <div class="container">
        <nav class="navbar navbar-expand-md">
            <div class="col">
                <a class="navbar-brand" href="{{ url('') }}">
                    <img src="{{ asset('storage/'.setting('site.logo')) }}" height="30" alt="image">
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav3"
                aria-controls="navbarNav3" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav3">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('') }}" contenteditable="false">@lang('Home') <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('about') }}" contenteditable="false">@lang('About Us')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('product') }}" contenteditable="false">@lang('Products and Services')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('video') }}" contenteditable="false">@lang('Clip Video')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('article') }}" contenteditable="false">@lang('Article')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('contact') }}" contenteditable="false">@lang('Contact')</a>
                    </li>
                </ul>
                &nbsp;
                    <a href="{{ url('change/th') }}"><img src="{{ asset('app-assets/imgs/thai.jpg') }}"></a>
                &nbsp;&nbsp;
                    <a href="{{ url('change/en') }}"><img src="{{ asset('app-assets/imgs/eng.jpg') }}"></a>
                &nbsp;&nbsp;
                    <a href="{{ $contact->facebook }}" target="_blank"><i class="fab fa-facebook fa-2x" style="color:#3b5998;"></i></a>
            </div>
        </nav>
    </div>
</header>
