@extends('frontend.layout.master')
@section('title',App\Models\Settings::where('key','campaign-title')->firstOrFail()->value)

@section('meta')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <meta name="description"
          content="{{App\Models\Settings::where('key','campaign-description')->firstOrFail()->value}}">
    <meta name="keywords" content="{{App\Models\Settings::where('key','campaign-keywords')->firstOrFail()->value}}">
    <meta property="og:title" content="{{App\Models\Settings::where('key','campaign-title')->firstOrFail()->value}}">
    <meta property="og:url" content="{{url()->current()}}">
    <meta property="og:image"
          content="{{config('app.url')}}/images/settings/{{ App\Models\Settings::where('key','campaign-image')->firstOrFail()->value }}"/>
    <meta name="twitter:description"
          content="{{App\Models\Settings::where('key','campaign-description')->firstOrFail()->value}}">
    <meta name="twitter:title" content="{{ App\Models\Settings::where('key','campaign-title')->firstOrFail()->value }}">
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="{{url()->current()}}"/>
    <meta property="twitter:img"
          content="{{config('app.url')}}/images/settings/{{ App\Models\Settings::where('key','campaign-image')->firstOrFail()->value }}"/>
    <meta itemprop="name" content="{{App\Models\Settings::where('key','campaign-title')->firstOrFail()->value}}">
    <meta itemprop="description"
          content="{{App\Models\Settings::where('key','campaign-description')->firstOrFail()->value}}">

    <link rel="stylesheet" href="{{asset('css/cursor.css')}}">
    <link rel="stylesheet" href="{{asset('css/product/product-menu.css')}}">
    <link rel="stylesheet" href="{{ asset('css/frontend/home/home.css') }}">


@endsection
<style>
    .product-details .tab-pane .row {
        position: relative;
        padding-top: 0px !important;
    }

    @media (max-width: 390px) and (min-width: 200px) {
        .carousel-inner .item .container .carousel-caption {
            position: absolute;
            right: 15%;
            bottom: 110px !important;
            left: 15%;
            z-index: 10;
            padding-top: 13px !important;
            padding-bottom: 5px !important;
            color: #fff;
            text-align: center;
            text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
        }

        .homepage-carousel .item a {
            background: #ffffff;
            color: #000;
            display: block;
            width: fit-content;
            float: right;
            padding: 5px 10px;
            font-weight: 700;
            font-size: 15px;
            margin-top: 0px !important;
        }
    }
</style>
@section('content')
    @php use App\Services\LogActivity;LogActivity::addToLog('campaign'); @endphp
@section('slider')
    <div class="company-heading-view">
        <div class="general-view">
        </div> <!-- END .general-view -->
    </div>
@endsection


<div class="container page-breadcrumb">
    <div class="row"><a href="{{route('home')}}" title="Anasayfa">Anasayfa</a> / Kampanyalar</div>
</div>


<div id="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-content">
                    <div class="product-details view-switch">
                        <div class="tab-content">
                            <div class="" id="category-book">

                                <div class="row clearfix">
                                    @foreach($firstCategory as $firstCategorys)
                                        @if($firstCategorys->campaign->count() > 0)
                                            <div class="row">
                                                <div class="col-md-10 col-sm-10" style="    height: 70px;">
                                                    <h4 class="title-new"
                                                        style="padding-top:15px "> {{$firstCategorys->name}}</h4>
                                                    <span class="line"></span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                @foreach($firstCategorys->campaign as $campaign)
                                                    @if($campaign->company == 0)
                                                    <a href="{{ route('category_campaign',$campaign->id) }}" style="margin-top: 10px ; ">
                                                        @else
                                                            <a href="{{ route('company_campaign',$campaign->id) }}" style="margin-top: 10px ; ">
                                                            @endif
                                                        <div class="col-md-6 col-sm-6" style="    padding-top: 3px;">
                                                            <div style=" position: absolute; left: 10%; top: 10%;"  >{!! $campaign->content !!}</div>
                                                            <img src="{{ asset($campaign->image) }}" width="100%" style="transition: 0.5s;
    cursor: pointer;
    padding: 5px;
    text-align: center;
    box-shadow: 1px 1px 4px #dcdee3;"
                                                                 alt="">
                                                        </div>
                                                    </a>
                                                @endforeach
                                            </div>
                                        @endif
                                    @endforeach
                                </div> <!-- end .row -->
                            </div> <!-- end .tabe-pane -->

                        </div> <!-- end .tabe-content -->
                    </div> <!-- end .product-details -->
                </div> <!-- end .page-content -->
            </div>
        </div> <!-- end .row -->
    </div> <!-- end .container -->
</div>


@endsection

@section('scripts')


@endsection
