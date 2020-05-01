<footer class="fdb-block footer-small bg-dark">
    <div class="container">
        <div class="row text-center align-items-center">
            <div class="col">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('') }}">@lang('Home')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('about') }}" target="_blank">@lang('About Us')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('product') }}">@lang('Product')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('video') }}" target="_blank">@lang('Product Review')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('article') }}">@lang('Article')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('contact') }}">@lang('Contact')</a>
                    </li>
                </ul>

                <p class="h5 mt-5">© 2020 RECKON</p>
            </div>
        </div>
    </div>
</footer>
<a style="display:scroll;position:fixed;bottom:15px;right:10px;" class="backtotop" href="#" rel="nofollow" title="Back to Top"><img style="border:0;" src="{{ asset('app-assets/imgs/top.jpg') }}" width="48"/></a>