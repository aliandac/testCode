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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
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

                    <div class="company-profile company-contact" style="    background-color: #ffffffff; margin-top: 15px;">
                        @if($companyEvents->count() > 0 )
                        @foreach($companyEvents  as $event)
                            <div class="post-with-image" style="border-bottom: 3px solid #f3f3f3;">
                                <div class="post-image">
                                    <img style="object-fit: cover" src="{{$event->image}}" alt="">
                                    <div style="float: right;position: absolute;right: 0;top: 0;">
                                        @if($event->is_event_today && !$event->cancel)
                                            <a class="pull-right timeline-expire-date-button"
                                               style="border-top-right-radius:0;border-top-left-radius:0;border-bottom-right-radius:0;border-bottom-left-radius:10px;color:white;padding: 10px;background: green">
                                                Bu etkinlik bugün
                                            </a>
                                        @endif

                                        @if($event->is_expire_date && !$event->cancel)
                                            <a class="pull-right timeline-expire-date-button"
                                               style="border-top-right-radius:0;border-top-left-radius:0;border-bottom-right-radius:0;border-bottom-left-radius:10px;color:white;padding: 10px;background: orange;">
                                                {{$event->ago_time}} Bu etkinlik gerçekleşti
                                            </a>
                                        @endif

                                        @if($event->cancel)
                                            <a class="pull-right timeline-expire-date-button"
                                               style="border-top-right-radius:0;border-top-left-radius:0;border-bottom-right-radius:0;border-bottom-left-radius:10px;color:white;padding: 10px;background: red">
                                                Etkinlik iptal oldu
                                            </a>
                                        @endif
                                    </div>
                                </div>

                                <h2 class="title"><a href="{{route('event-detail',$event->id)}}" title="{{$event->name}}">{{$event->name}}</a></h2>
                                <p class="event-place">
                                    <a>{{$event->location}}</a> ·
                                    <a>{{$event->date}}
                                        · {{$event->day_name}}</a> ·
                                    <a>{{$event->time}}</a>
                                </p>

                                <p class="tag">
                                    <i class="fa fa-tag"></i>
                                    @foreach(explode(',',$event->tags) as $tag)
                                        <a href="{{route('events',['tags'=>$tag])}}" title="{{$tag}}">{{$tag}}</a>

                                    @endforeach
                                </p>

                            </div> <!-- end .post-with-image -->
                        @endforeach
                        @unset($event)
                        @else
                            <div class="col-md-12" style="text-align: center; padding-top: 40px;">
                                <span style="font-size: 25px;  font-weight: bold;">Firmanın Etkinliklerini Görmek İstediğinizi Firmaya Bildirin </span>
                                <form role="form" enctype="multipart/form-data" action="{{ route('infoCompanyMail') }}" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{$company->id}}" name="company">
                                    <button   type="submit" class="btn btn-tradeey-white">Bildirim Gönder</button>
                                </form>
                            </div>
                        @endif

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
