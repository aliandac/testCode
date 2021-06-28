@extends('frontend.layout.master')
@section('title',App\Models\Settings::where('key','virtual-fair-company-title')->firstOrFail()->value)
@section('meta')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <meta name="description" content="{{App\Models\Settings::where('key','virtual-fair-company-description')->firstOrFail()->value}}">
    <meta name="keywords" content="{{App\Models\Settings::where('key','virtual-fair-company-keywords')->firstOrFail()->value}}">
    <meta property="og:title" content="{{App\Models\Settings::where('key','virtual-fair-company-title')->firstOrFail()->value}}">
    <meta property="og:url" content="{{url()->current()}}">
    <meta property="og:image" content="{{ asset(setting('virtual-fair-company-image')) }}" />
    <meta name="twitter:description" content="{{App\Models\Settings::where('key','virtual-fair-company-description')->firstOrFail()->value}}">
    <meta name="twitter:title" content="{{ App\Models\Settings::where('key','virtual-fair-company-title')->firstOrFail()->value }}">
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="{{url()->current()}}" />
    <meta property="twitter:img" content="{{ asset(setting('virtual-fair-company-image')) }}" />
    <meta itemprop="name" content="{{App\Models\Settings::where('key','virtual-fair-company-title')->firstOrFail()->value}}">
    <meta itemprop="description" content="{{App\Models\Settings::where('key','virtual-fair-company-description')->firstOrFail()->value}}">
    <link rel="stylesheet" href="{{ asset('css/company.css') }}">
    <link rel='stylesheet' id='cityrama_qodef_google_fonts-css' href='https://fonts.googleapis.com/css?family=Montserrat%3A300%2C400%2C500%2C600%2C700%2C800&#038;subset=latin-ext&#038;ver=1.0.0' type='text/css' media='all'/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('css/cursor.css')}}">

    <link rel="stylesheet" href="{{asset('css/owl-carousel/owlcarousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl-carousel/owlcarousel/assets/owl.theme.default.min.css')}}">

@endsection
@section('content')
@section('slider')
    <div class="company-heading-view">
        <div class="general-view">
            <span></span> <!-- for dark-overlay on the bg -->
        </div> <!-- END .general-view -->
    </div>
@endsection


<div class="container page-breadcrumb">
    <div class="row"><a href="{{route('home')}}" title="Anasayfa">Anasayfa</a> / Fuar Katılımcı Firmaları </div>
</div>




<div class="portfolio" id="page-content">
    <div class="container-fluid">



            <div class="container-fluid">
                <div class="col-md-12 ">
                    <div class="tab-pane active" id="company-portfolio">
                        <div class="portfolio-grid">
                            <div class="row">
                                @foreach($companies as $company)
                                    <div class="col-lg-2 col-md-2 col-2 col-sm-3 col-xs-6" style="padding:0;">
                                        <div class="card card-block card-block-background">
                                            @if(isset($company->getVirtualFair))
                                            <a class="link" href="https://tradeey.com/game/?id={{$company->getVirtualFair->getCategory[0]->category}}" target="_blank" title="{{$company->name}}">
                                                @endif
                                                <div class="text-right companies-star" >{!! $company->star->render !!}</div>
                                                <img  class="card-block-img" src="{{asset($company->image)}}" >
                                                <div class="portfolio-over">
                                                    <div class="company-content">
                                                        @isset($company->country->image)
                                                            <img class="flag" src="{{asset($company->country->image)}}" alt="{{$company->name}}">
                                                        @endisset
                                                        <h6>
                                                            @if(isset($company->getVirtualFair))
                                                            <a class="card-title"
                                                               href="https://tradeey.com/game/?id={{$company->getVirtualFair->getCategory[0]->category}}" target="_blank" title="{{$company->name}}">{{$company->name}}</a>
                                                            @endif
                                                        </h6>
                                                        <span class="company-categories">
                                                        @if(isset($company->category_id) && isset($company->category))
                                                                @if(isset($company->getVirtualFair))
                                                                <a class="card-text"
                                                                   href="https://tradeey.com/game/?id={{$company->getVirtualFair->getCategory[0]->category}}" target="_blank" title="{{$company->category->name}}">
                                                                {{$company->category->name}}
                                                            </a>
                                                                @endif
                                                            @endif
                                                    </span>
                                                        <br>
                                                            @if(isset($company->getVirtualFair))
                                                        <a href="https://tradeey.com/game/?id={{$company->getVirtualFair->getCategory[0]->category}}" target="_blank" style="color:red" title="Detay">
                                                            @endif
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
        </div>
        <!-- end .main-grid layout -->
    </div> <!-- end .row -->

</div> <!-- end .container -->

</div> <!-- end #page-content -->

@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>


    <script src="{{asset('css/owl-carousel/vendors/highlight.js')}}"></script>
    <script src="{{asset('css/owl-carousel/js/app.js')}}"></script>

    <script src="{{asset('css/owl-carousel/vendors/jquery.min.js')}}"></script>
    <script src="{{asset('css/owl-carousel/owlcarousel/owl.carousel.js')}}"></script>


@endsection
