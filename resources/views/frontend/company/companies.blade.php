@extends('frontend.layout.master')
@section('title',App\Models\Settings::where('key','company-title')->firstOrFail()->value)
@section('meta')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <meta name="description" content="{{App\Models\Settings::where('key','company-description')->firstOrFail()->value}}">
    <meta name="keywords" content="{{App\Models\Settings::where('key','company-keywords')->firstOrFail()->value}}">
    <meta property="og:title" content="{{App\Models\Settings::where('key','company-title')->firstOrFail()->value}}">
    <meta property="og:url" content="{{url()->current()}}">
    <meta property="og:image" content="{{ asset(setting('company-image')) }}" />
    <meta name="twitter:description" content="{{App\Models\Settings::where('key','company-description')->firstOrFail()->value}}">
    <meta name="twitter:title" content="{{ App\Models\Settings::where('key','company-title')->firstOrFail()->value }}">
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="{{url()->current()}}" />
    <meta property="twitter:img" content="{{ asset(setting('company-image')) }}" />
    <meta itemprop="name" content="{{App\Models\Settings::where('key','company-title')->firstOrFail()->value}}">
    <meta itemprop="description" content="{{App\Models\Settings::where('key','company-description')->firstOrFail()->value}}">
    <link rel="stylesheet" href="{{ asset('css/company.css') }}">
    <link rel='stylesheet' id='cityrama_qodef_google_fonts-css' href='https://fonts.googleapis.com/css?family=Montserrat%3A300%2C400%2C500%2C600%2C700%2C800&#038;subset=latin-ext&#038;ver=1.0.0' type='text/css' media='all'/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('css/cursor.css')}}">

    <link rel="stylesheet" href="{{asset('css/owl-carousel/owlcarousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl-carousel/owlcarousel/assets/owl.theme.default.min.css')}}">

@endsection
@section('content')
    @php use App\Services\LogActivity;LogActivity::addToLog('companies'); @endphp
@section('slider')
    <div class="company-heading-view">
        <div class="general-view">
            <span></span> <!-- for dark-overlay on the bg -->
            <div class="container-fluid">
                <div class="row">
                    <div class="company_title_responsive">
                        <div class="owl-carousel owl-theme owl-head" style="padding-top:50px;background: rgb(0,0,0); background: radial-gradient(circle, rgba(0,0,0,0.6587009803921569) 0%, rgba(0,0,0,0.8379726890756303) 55%);">
                            @foreach ( $slides as $value )
                                <div class="item">
                                    <div class="item-content">
                                        <i class="fa fa-info" alt="Sponsorlu İçerik" title="Sponsorlu İçerik"></i>
                                        <a href="{{ $value->url }}" title="{{ $value->title }}">
                                            <img class="cursor-pointer" src="{{ asset($value->image) }}" alt="{{ $value->alt }}">
                                            {{-- <img src="{{ config('app.url').$value->image}}" title="{{$value->title}}" alt="{{$value->title}}"> --}}
                                            <div class="item-info">
                                                <div class="item-title" title="{{ $value->title }}">{{ $value->title }}</div>
                                                <div class="item-click">İncele <i class="fa fa-chevron-right"></i></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- END .general-view -->
    </div>
@endsection


<div class="container page-breadcrumb">
    <div class="row"><a href="{{route('home')}}" title="Anasayfa">Anasayfa</a> / Firmalar</div>

</div>


<div id="page-content" class="home-slider-content full-scren-nano">
    <div class="container">
        <div class="home-with-slide">
            <div class="row" style="background:white">
                <div class="col-md-3 category-toggle">
                    <button class="sidebar-open"><i class="fa fa-chevron-right"><span>KATEGORİLER</span></i></button>
                    <div class="page-sidebar">
                        <!-- Category accordion -->
                        <div id="categories">
                            <div class="accordion category-list">
                                <ul class="nav nav-tabs">
                                    <li class="category_button {{ request('id') == null ? 'active':'' }} "
                                        data-value="0">
                                        <a href="{{route('AllCategory')}}" title="Tüm Kategoriler">Tüm Kategoriler</a>
                                    </li>
                                    @foreach( $categories as $value)
                                        <li class="category_button {{ ( isset( request()->id ) ) ? request()->id == $value->id ? 'active':'':null }}"
                                            data-value="{{ $value->id  }}">
                                            <a href="anasayfa/kategori/{{$value->seo_url}}/{{$value->id}}"
                                               title="{{$value->name}}">
                                                {{$value->name}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div> <!-- end .accordion -->
                        </div> <!-- end #categories -->
                        <div class="board">
                            @php
                                $aka = ad()->generalAd('AKA');
                            @endphp
                            @if ( $aka )
                                <a href="{{ $aka->url }}" title="{{ $aka->url }}" target="_blank">
                                    <img src="{{ asset( $aka->image ) }}" alt="{{ $aka->url }}">
                                </a>
                            @endif
                        </div>
                    </div> <!-- end .page-sidebar -->
                </div> <!-- end grid layout-->
            </div> <!-- end .row -->
        </div> <!-- end .home-with-slide -->
    </div> <!-- end .container -->
</div>  <!-- end #page-content -->

<div class="portfolio" id="page-content">
    <div class="container">
        <div class="row image_slider">

            @php $s = 0 @endphp
            @foreach ( $slides_down as $value )
                @if($s == 0)
                    <div class="col-md-4 col-sm-4 main_slider">

                        <a href="{{ $value->button_url }}">
                            <img width="100%" height="100%"  src="{{asset($value->image)}}"
                                 alt="{{ $value->alt }}"/>
                        </a>

                    </div>
                    @php $s++ @endphp
                @else
                    <div class="col-md-2 col-sm-4 col-xs-6 counter_slider">
                        <a href="{{ $value->button_url }}">
                            <img width="100%" height="100%" src="{{asset($value->image)}}"
                                 alt="{{ $value->alt }}"/>
                        </a>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    <div class="container-fluid">

        <div class="row">


            <div class="container-fluid">
                <div class="col-md-12 ">
                    <div class="tab-pane active" id="company-portfolio">
                        <div class="portfolio-grid">
                            <div class="row">
                                <div class="container">
                                    @php $ad = $ad = ad()->generalAd( 'FUL' ); @endphp
                                    @if ( $ad )
                                    <div class="col-md-6">
                                        <div class="board horizontal">
                                            <a href="{{ $ad->url }}" title="{{ $ad->url }}">
                                                <img src="{{asset($ad->image)}}">
                                            </a>
                                        </div>
                                    </div>
                                    @endif
                                    @php $ad = ad()->generalAd('FUR'); @endphp
                                    @if ( $ad )
                                    <div class="col-md-6">
                                        <div class="board horizontal">
                                            <a href="{{ $ad->url }}" title="{{ $ad->url }}">
                                                <img src="{{asset($ad->image)}}">
                                            </a>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                @foreach($companies as $company)
                                    <div class="col-lg-2 col-md-2 col-2 col-sm-3 col-xs-6" style="padding:0;">
                                        <div class="card card-block card-block-background">
                                            <a class="link" href="{{route('MyCompanySlug',['slug'=> Str::slug($company->name) ,'id'=>$company->id])}}" title="{{$company->name}}">
                                                <div class="text-right companies-star" >{!! $company->star->render !!}</div>
                                                <img  class="card-block-img" src="{{asset($company->image)}}" >
                                                <div class="portfolio-over">
                                                    <div class="company-content">
                                                        @isset($company->country->image)
                                                            <img class="flag" src="{{asset($company->country->image)}}" alt="{{$company->name}}">
                                                        @endisset
                                                        <h6>
                                                            <a class="card-title"
                                                               href="{{route('MyCompanySlug',['slug'=> Str::slug($company->name) ,'id'=>$company->id])}}" title="{{$company->name}}">{{$company->name}}</a>
                                                        </h6>
                                                        <span class="company-categories">
                                                        @if(isset($company->category_id) && isset($company->category))
                                                                <a class="card-text"
                                                                   href="{{route('MyCompanySlug',['slug'=> Str::slug($company->name) ,'id'=>$company->id])}}" title="{{$company->category->name}}">
                                                                {{$company->category->name}}
                                                            </a>
                                                            @endif
                                                    </span>
                                                        <br>
                                                        <a href="{{route('MyCompanySlug',['slug'=> Str::slug($company->name) ,'id'=>$company->id])}}" style="color:red" title="Detay">
                                                            <button class="btn btn-info"
                                                                    style="margin-top:10px;background:#e74c3c;color:white">
                                                                Detay
                                                            </button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach<!-- end .company-portfolio -->
                            </div>
                        </div> <!-- end .tab-pane -->
                    </div> <!-- end .tab-content -->
                </div> <!-- end .page-content -->
                <div class="col-md-12 page paginate-number">
                    {{$companies->appends(request()->all())->onEachSide(4)->render()}}
                </div>
            </div>

            <div class="container">
                <div class="row">
                    @php $ad = ad()->generalAd('FAL'); @endphp
                    @if ( $ad )
                    <div class="col-md-6">
                        <div class="board horizontal">
                            <a href="{{ $ad->url }}" title="{{ $ad->url }}">
                                <img src="{{asset($ad->image)}}">
                            </a>
                        </div>
                    </div>
                    @endif
                    @php $ad = ad()->generalAd('FAR'); @endphp
                    @if ( $ad )
                    <div class="col-md-6">
                        <div class="board horizontal">
                            <a href="{{ $ad->url }}" title="{{ $ad->url }}">
                                <img src="{{asset($ad->image)}}">
                            </a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- end .main-grid layout -->
    </div> <!-- end .row -->

</div> <!-- end .container -->

</div> <!-- end #page-content -->

@endsection

@section('scripts')






    <script src="{{asset('css/owl-carousel/vendors/highlight.js')}}"></script>

    <script src="{{asset('css/owl-carousel/vendors/jquery.min.js')}}"></script>
    <script src="{{asset('css/owl-carousel/owlcarousel/owl.carousel.js')}}"></script>


@endsection
