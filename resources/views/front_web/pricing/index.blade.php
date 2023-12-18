@extends('front_web.layouts.app')
@section('title')
    {{ __('web.contact_us') }}
@endsection
@section('page_css')
    <style>
        .iti {
            display: block !important;
        }
    </style>
@endsection
@section('content')
    <div class="contactus-page">
        <section class="hero-section position-relative bg-light py-40">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6  text-center mb-lg-0 mb-md-5 mb-sm-4 ">
                        <div class="hero-content">
                            <h1 class=" text-secondary mb-3">
                                @lang('web.web_home.pricing_packages')
                            </h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb  justify-content-center mb-0">
                                    <li class="breadcrumb-item "><a href="{{ route('front.home') }}"
                                            class="fs-18 text-gray">{{ __('web.home') }} </a>
                                    </li>
                                    <li class="breadcrumb-item text-primary fs-18" aria-current="page">
                                        @lang('web.web_home.pricing_packages')</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- start pricing-packages-section -->
        @if (count($plans) > 0)
            <section class="pricing-packages-section py-50">
                <div class="container">
                    <section class="slider-test-section position-relative">
                        <div id="carouselExampleControl" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($plansArray as $key => $plans)
                                    <div class="carousel-item position-relative {{ $key == 0 ? 'active' : '' }}">
                                        <div class="row d-flex justify-content-center">
                                            @foreach ($plans as $plan)
                                                <div class="col-lg-4 col-sm-6 my-3">
                                                    <div class="pricing-plan-card card me-lg-2">
                                                        <div class="card-body text-center py-4 px-lg-5 px-sm-4">
                                                            <h4 class="mb-0">
                                                                {{ html_entity_decode(Str::limit($plan['name'], 50, '...')) }}
                                                            </h4>
                                                            <div
                                                                class="card-body-top text-center d-flex justify-content-center">
                                                                <h3 class="text-primary">
                                                                    {{ empty($plan['salary_currency']['currency_icon']) ? '$' : $plan['salary_currency']['currency_icon'] }}{{ $plan['amount'] }}
                                                                </h3>
                                                                <span class="text-gray mt-xl-4 mt-sm-3 mt-2 ms-1"> /
                                                                    {{ __('web.web_home.monthly') }}</span>
                                                            </div>
                                                            <div class="card-body-bottom">
                                                                <div
                                                                    class="text d-flex align-items-center justify-content-center my-4">
                                                                    <div class="check-box me-2">
                                                                        <i class="fa-solid fa-check text-danger"></i>
                                                                    </div>
                                                                    <span class="text-gray">
                                                                        {{ $plan['allowed_jobs'] . ' ' . ($plan['allowed_jobs'] > 1 ? __('messages.plan.jobs_allowed') : __('messages.plan.job_allowed')) }}</span>
                                                                </div>
                                                                @if (Auth::check() && Auth::user()->hasRole('Candidate'))
                                                                    <a href="#" class="btn btn-primary"
                                                                        data-turbo="false">{{ __('messages.pricing_table.get_started') }}</a>
                                                                @elseif(Auth::check() && Auth::user()->hasRole('Employer'))
                                                                    <a href="{{ route('manage-subscription.index') }}"
                                                                        class="btn btn-primary"
                                                                        data-turbo="false">{{ __('messages.pricing_table.get_started') }}</a>
                                                                @elseif(Auth::check() && Auth::user()->hasRole('Admin'))
                                                                    <a href="#" class="btn btn-primary d-none"
                                                                        data-turbo="false">{{ __('messages.pricing_table.get_started') }}</a>
                                                                @else
                                                                    <a href="{{ route('employer.register') }}"
                                                                        class="btn btn-primary"
                                                                        data-turbo="false">{{ __('messages.pricing_table.get_started') }}</a>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControl"
                                data-bs-slide="prev">
                                <i class="icon fa-solid fa-arrow-left text-danger border-danger"></i>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControl"
                                data-bs-slide="next">
                                <i class="icon fa-solid fa-arrow-right text-danger border-danger"></i>
                            </button>
                        </div>

                    </section>
                </div>
            </section>
        @endif
    </div>
@endsection
<script>
    var phoneNo = "{{ old('region_code') . old('phone_no') }}";
</script>
{{-- @section('page_scripts') --}}
{{--    <script> --}}
{{--        let isEdit = false --}}
{{--        var phoneNo = "{{ old('region_code').old('phone') }}" --}}
{{--        let utilsScript = "{{asset('assets/js/inttel/js/utils.min.js')}}" --}}
{{--    </script> --}}

{{--    <script src='https://www.google.com/rec aptcha/api.js'></script> --}}
{{-- @endsection --}}
