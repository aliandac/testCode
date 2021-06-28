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

                    <div class="company-profile company-contact" style="    background-color: #f3f3f3f3; margin-top: 15px;">
                        @if($companyBlogs->count() > 0)
                        @foreach($companyBlogs as $blog)
                            <a href="{{ route('blog',$blog->id) }}" title="asd" >
                                <div class="col-md-3 col-sm-4 col-xs-6" style="background-color: #f3f3f3f3;    margin: 5px;  border: 2px solid #fcc800;">
                                    <div class="col-md-12">
                                        <img src="{{$blog->image}}" alt="{{$blog->title}}" style="    width: 100%;
    object-fit: contain;
    height: 80px;
    top: 42px;
    transition: all 0.3s;">
                                    </div>
                                    <div class="col-md-12" style="text-align: center;">
                                        @isset($blog->company->category)

                                            <a href="{{route('blogs',['category_id'=>$blog->category_id])}}" title="{{$blog->company->category->name}}">{{$blog->company->category->name}}
                                            </a>
                                        @endisset
                                    </div>
                                    <div class="col-md-12" style="    overflow: hidden;
    line-height: 24px;
    display: -webkit-box;
    width: 100%;
    -webkit-line-clamp: 2;
    font-weight: bold;
    line-clamp: 2;
    -webkit-box-orient: vertical;
    height: 44px;
    font-size: 17px;
    text-align: center;" >
                                        <span> {{$blog->title}}</span>
                                    </div>
                                    <div class="col-md-12" style="text-align: center;">
                                        <div class="time">{{$blog->time_ago}}</div>
                                    </div>
                                    <div class="col-md-12" style="text-align: center" >
                                        <a href="{{ route('blog',$blog->id) }}" class="btn btn-tradeey-white" > Detay</a>
                                    </div>
                                </div>
                            </a>

                        @endforeach
                            @else
                                <div class="col-md-12" style="text-align: center; padding-top: 40px;">
                                    <span style="font-size: 25px;  font-weight: bold;">Firmanın Yazılarını Görmek İstediğinizi Firmaya Bildirin </span>
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
