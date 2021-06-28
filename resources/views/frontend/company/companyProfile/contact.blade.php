@extends('frontend.layout.master')
@section('title', $company->name)

@section('meta')
    <link rel="stylesheet" href="{{asset('css/cursor.css')}}">
    <link rel="stylesheet" href="{{asset('css/tradeeystyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/company-slider.scss')}}">
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css"/>
    <link rel="stylesheet" href="{{asset('js/temp/toastr.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/company-profile.css') }}">
@endsection
<style>
    @media screen and (min-width: 768px){
        .carousel-inner {
            height: 220px!important;
        }
    }
</style>
@section('content')
@section('slider')

@endsection
@include('frontend.company.companyProfile.layout.header')
<div id="popup-main">
    <div id="pop-up">
        <i id='close-btn' class="fa fa-close"></i>
        <img src="{{asset($company->image)}}">
        <h4>{{$company->name}} anketine katılmak ister misiniz ?</h4>
        <div class="row" style="    padding-top: 15px;">
            <div class="col-md-12">
                <a id="survey-button" class="popup-survey" href="{{route('MyCompanySlugSurvey',['slug'=> Str::slug($company->name) ,'id'=>$company->id])}}" title="ANKET">ANKET</a>
            </div>
        </div>
    </div>
</div>

<div id="page-content">
    <div class="container">

        <div class="row">
            @include('frontend.company.companyProfile.layout.top-menu')
            <div class="col-md-9 col-md-push-3">
                <div class="page-content company-profile">

                    <div class="company-profile company-contact" style="    background-color: #f3f3f3f3; margin-top: 15px;">

                        <h2>İletişim Bilgilerimiz</h2>

                        <div class="company-text">
                            <p>
                                {{$company->address_description}}
                            </p>
                        </div> <!-- end company-text -->

                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="contact-map-company">
                                    <iframe style="width:100%;height: 350px"
                                            frameborder="0"
                                            scrolling="no"
                                            marginheight="0"
                                            marginwidth="0"
                                            src="https://maps.google.com/maps?q={{$company->latitude}},{{$company->longitude}}&hl=es;z=14&amp;output=embed">
                                    </iframe>
                                </div> <!-- end .map-section -->
                                <div class="address-details clearfix">
                                    <p>
                                        <span>{{$company->address}}</span>
                                    </p>
                                </div>
                                <div class="address-details clearfix">
                                    <i class="fa fa-location-arrow"></i>

                                    <p>
                                        <span><strong>Adres:</strong> {{$company->company_address}}</span>
                                    </p>
                                </div>
                                <div class="address-details clearfix">
                                    <i class="fa fa-phone"></i>

                                    <p>
                                        <span><strong>Telefon:</strong> <a href="tel:{{$company->first_phone}}" title="phone" > {{$company->first_phone}}</a></span>
                                        <span><strong>Fax:</strong> {{$company->fax_number}}</span>
                                        <a target="_blank" title="whatsaap" href="https://api.whatsapp.com/send?phone=&text={{ $company->company_whatsapp }}&source=&data=" data-action="share/whatsapp/share">  <span><strong>Whatsaap:</strong>  {{$company->company_whatsapp}}</span></a>
                                    </p>
                                </div>

                                <div class="address-details clearfix">
                                    <a href="mailto:{{$company->email}}" title="mail"> <i class="fa fa-envelope-o">

                                        </i>
                                    </a>

                                    <p>
                                        <span><strong>E-mail:</strong><a href="mailto:{{$company->email}}" title="email">{{$company->email}}</a></span>
                                        <span><span><strong>Website:</strong><a target="_blank" href="{{$company->website_url}}" title="{{$company->name}}"> {{$company->website_url}}</a></span></span>
                                    </p>
                                </div>

                                <h5>Çalışma Saatleri</h5>

                                <div class="address-details clearfix">
                                    <i class="fa fa-clock-o"></i>

                                    <p>
                                                <span><strong>Saatler:</strong>
                                                    <span>{{$company->work_start_time}}   {{$company->work_finish_time}}</span>
                                                </span>
                                        <span><strong>Günler:</strong>
                                                    @foreach ( $company->working_days as $value )

                                                <span>{{ $value }}</span>


                                            @endforeach
                                                    </span>

                                    </p>
                                </div>

                            </div> <!-- end main grid layout -->
                        </div> <!-- end .row -->

                    </div> <!-- end .company-contact -->


                </div> <!-- end .page-content -->

            </div> <!-- end .main-grid layout -->

            @include('frontend.company.companyProfile.layout.left-menu')

        </div> <!-- end .row -->
<div class="row">
    <div class="company-text" style="min-height: 300px;">
        <span style="    font-size: 18px; font-weight: bold;">Etiketler</span>
        <ul class="tags-company">
            @foreach ( $company->tags_as_array  as $value)
                <li class="col-md-2 col-sm-3 col-xs-4">
                    <a href="{{route('company-tag',['tags'=>$value])}}" title="{{$value}}">{{$value}}</a>
                </li>
            @endforeach
        </ul>
    </div> <!-- end company-text -->
</div>
    </div> <!-- end .container -->

</div>
@endsection


@include('frontend.company.companyProfile.layout.scripts')
