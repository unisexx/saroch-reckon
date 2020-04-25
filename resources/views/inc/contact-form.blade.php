<section class="fdb-block bg-dark" style="background-image: url({{ asset('app-assets/imgs/hero/blue.svg') }});">
    <div class="container">
        <div class="row text-center justify-content-center">
            <div class="col-12 col-md-8 col-lg-7">
                <h2>@lang('Contact Us')</h2>
            </div>
        </div>

        <div class="row pt-4">
            <div class="col-12">
                <form method="post" action="{{ url('contact/save') }}">
                {{ csrf_field() }}
                    <div class="row">
                        <div class="col-12 col-md">
                            <input name="name" type="text" class="form-control" placeholder="@lang('Name')">
                        </div>
                        <div class="col-12 col-md mt-4 mt-md-0">
                            <input name="email" type="text" class="form-control" placeholder="@lang('Email')">
                        </div>
                        <div class="col-12 col-md mt-4 mt-md-0">
                            <input name="tel" type="text" class="form-control" placeholder="@lang('Phone (Optional)')">
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col">
                            <input name="subject" type="text" class="form-control" placeholder="@lang('Subject')">
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col">
                            <textarea class="form-control" name="message" rows="3" placeholder="@lang('How can we help?')"></textarea>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col text-center">
                            <button type="submit" class="btn btn-dark">@lang('Submit')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


@push('js')
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\ContactRequest') !!}
@endpush