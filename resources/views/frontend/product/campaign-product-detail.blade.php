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
    <div class="row"><a href="{{route('home')}}" title="Anasayfa">Anasayfa</a> / Kampanya</div>
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
                                            <div class="row">
                                                @foreach($productsDiscount as $product)
                                                    <div class="col-md-2 col-sm-2 col-xs-6 item">
                                                        @guest
                                                            <a href="{{ route('login-register') }}" class="heart-product"> <i class="fa fa-heart" ></i></a>
                                                        @else
                                                            <a href="{{ route('favoriteAddProduct',$product->id) }}" class="heart-product"> <i class="fa fa-heart" ></i></a>
                                                        @endguest
                                                        <a href="{{route('product',['slug'=>Str::slug($product->name) ,'id'=>$product->id])}}" class="aHover" title="{{ $product->name }}">
                                                            <div class="card item-card-product ">
                                                                @if(isset($product->firstImage->api))
                                                                    @if($product->firstImage->api==1)
                                                                        <img src="{{$product->firstImage->images}}"
                                                                             class="img-new"  alt="{{$product->name}}">
                                                                    @else
                                                                        @if($product->getImage->count() > 0)
                                                                            @if($product->oneImage == null)
                                                                                <img src="{{$product->firstImage->images}}"
                                                                                     class="img-new"  alt="{{$product->name}}">
                                                                            @else
                                                                                <img src="{{$product->oneImage->images}}"
                                                                                     class="img-new"  alt="{{$product->name}}">
                                                                            @endif
                                                                        @else
                                                                            @if(isset($item->firstImage->images))
                                                                                <img src="{{$product->firstImage->images}}"
                                                                                     class="img-new" alt="{{$product->name}}">
                                                                            @else
                                                                                <img src="{{asset('img/noimage.png')}}"
                                                                                     class="img-new"  alt="{{$product->name}}">
                                                                            @endif
                                                                        @endif
                                                                    @endif
                                                                @endif
                                                                <h5 class="item-card-title mt-3 mb-3">{{$product->name}}</h5>
                                                                @if(isset($product->discount))
                                                                    <div class="col-md-12" style="margin: 15px 0px;">
                                        <span style="    font-size: 22px;
    line-height: 18px;
    color: #484848;
    font-weight: bold;">{{number_format((float)$product->price - ($product->price * $product->discount / 100), 2, '.', '')}} ₺</span>
                                                                        <br> <del> <span style="    font-size: 15px;
    line-height: 18px;
    color: #484848;
    font-weight: bold;">{{$product->price}} ₺</span></del><span class="real-price" style="color: red; font-size: 15px;" > %{{ $product->discount }}</span>
                                                                    </div>
                                                                @else
                                                                    <div class="col-md-12" style="margin: 15px 0px;">
                                        <span style="    font-size: 22px;
    line-height: 18px;
    color: #484848;
    font-weight: bold;">{{$product->price}} ₺</span>
                                                                    </div>
                                                                @endif
                                                                <div class="col-md-12 hidden-btn"  >
                                                                    <button class="btn btn-tradeey"> Detay</button>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                @endforeach
                                            </div>
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
