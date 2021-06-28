@extends('frontend.layout.master')
@section('title',App\Models\Settings::where('key','product-title')->firstOrFail()->value)

@section('meta')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <meta name="description"
          content="{{App\Models\Settings::where('key','product-description')->firstOrFail()->value}}">
    <meta name="keywords" content="{{App\Models\Settings::where('key','product-keywords')->firstOrFail()->value}}">
    <meta property="og:title" content="{{App\Models\Settings::where('key','product-title')->firstOrFail()->value}}">
    <meta property="og:url" content="{{url()->current()}}">
    <meta property="og:image"
          content="{{config('app.url')}}/images/settings/{{ App\Models\Settings::where('key','product-image')->firstOrFail()->value }}"/>
    <meta name="twitter:description"
          content="{{App\Models\Settings::where('key','product-description')->firstOrFail()->value}}">
    <meta name="twitter:title" content="{{ App\Models\Settings::where('key','product-title')->firstOrFail()->value }}">
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="{{url()->current()}}"/>
    <meta property="twitter:img"
          content="{{config('app.url')}}/images/settings/{{ App\Models\Settings::where('key','product-image')->firstOrFail()->value }}"/>
    <meta itemprop="name" content="{{App\Models\Settings::where('key','product-title')->firstOrFail()->value}}">
    <meta itemprop="description"
          content="{{App\Models\Settings::where('key','product-description')->firstOrFail()->value}}">

    <link rel="stylesheet" href="{{asset('css/cursor.css')}}">
    <link rel="stylesheet" href="{{asset('css/product/product-menu.css')}}">
    <link rel="stylesheet" href="{{ asset('css/frontend/home/home.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/hb-slider/w3.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/hb-slider/hb-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/hb-slider/hb-media.css') }}">
@endsection
<style>
    .product-details .tab-pane .row {
        position: relative;
         padding-top: 0px !important;
    }
    @media (max-width: 390px) and (min-width: 200px){
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
    @php use App\Services\LogActivity;LogActivity::addToLog('products'); @endphp
@section('slider')
    <div class="company-heading-view">
        <div class="general-view">
        </div> <!-- END .general-view -->
    </div>
@endsection

    <!-- Slider Start -->

    @if(count($slider))

        <div class="hb-container" id="hb-container">
            <div class="hb-top">

                <div class="hb-top-title-area" id="hb-top-menu">
                    @php $className=0  @endphp
                    @foreach($slider_categories as $data)
                        <a href="javascript:void(0)"  id="first-slider-id" data-id="{{$data->id}}" data-name="{{$id}}"
                           class="hb-btn @if($className == 0 ) hbactive @endif  " onclick="sliderCategoryFunction({{$data->id}})">{{$data->name}}</a>
                        @php $className +=1;  @endphp
                    @endforeach
                </div>
            </div>
            <div id="exist"></div>
        </div>
        <!-- Web Slider End -->

        <!-- Mobile Slider Start -->
        <div class="hb-container-mobile" style=" padding-top: 34px;">
            <div class="hb-mobile-slider-buttons">
                @php $b=0; @endphp
                @foreach($slider_categories as $data)
                    <div class="hb-mobile-slider-buttons-single">
                        <a href="javascript:void(0)" @if($b==0)  id="first-slider-id-mobile" data-id="{{$data->id}}" data-name="{{$id}}"
                           @endif
                           onclick="sliderCategoryMobileFunction({{$data->id}},{{$id}})">{{$data->name}}</a>
                    </div>
                @endforeach
            </div>
            <div id="mobil-area"></div>
        </div>
        <!-- Mobile Slider End -->

@endif
<!-- Slider End -->


<div class="container page-breadcrumb">
    <div class="row"><a href="{{route('home')}}" title="Anasayfa">Anasayfa</a> / Ürünler</div>
</div>



<div id="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-push-3">
                <div class="page-content">
                    <div class="product-details view-switch">
                        <div class="tab-content">
                            <div class="" id="category-book">

                                <div class="row clearfix">
                                    @foreach($firstCategoryDetail->getDetail as $firstCategory)
                                    @if($firstCategory->getCategoryDetail->products->count() > 0 and $firstCategory->getCategoryDetail->active == 1 )
                                        <div class="row">
                                        <div class="col-md-10 col-sm-10" style="    height: 70px;">
                                            <h4 class="title-new" style="padding-top:15px "> {{$firstCategory->getCategoryDetail->name}}</h4>
                                            <span class="line"></span>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <a class="btn btn-tradeey-white" style="float: right" href="{{route('productFirstCategory',['slug'=>$firstCategory->getCategoryDetail->seo_url,'id'=>$firstCategory->getCategoryDetail->id])}}"> Tümünü Gör </a>
                                        </div>
                                        </div>
                                        <div class="row">
                                            @foreach($firstCategory->getCategoryDetail->getCampaign->take(10) as $campaign)
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
                                            <div class="row">
                                        @foreach($firstCategory->getCategoryDetail->products->take(12) as $product)
                                            <div class="col-md-2 col-sm-2 col-xs-6 item">
                                                @guest
                                                    <a href="{{ route('login-register') }}" class="heart-product"> <i class="fa fa-heart" ></i></a>
                                                @else
                                                    <a href="{{ route('favoriteAddProduct',$product->id) }}" class="heart-product"> <i class="fa fa-heart" ></i></a>
                                                @endguest
                                                <a href="{{route('product',['slug'=>Str::slug($product->name) ,'id'=>$product->id])}}" class="aHover" title="{{ $product->name }}">
                                                    <div class="card item-card-product ">
                                                        @if($product->getCategory->type == 1)
                                                            <img src="{{asset('img/onsekizarti.png')}}"
                                                                 class="img-new"  alt="{{$product->name}}">
                                                        @else
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
                                        @endif
                                @endforeach
                                </div> <!-- end .row -->
                            </div> <!-- end .tabe-pane -->

                        </div> <!-- end .tabe-content -->
                    </div> <!-- end .product-details -->
                </div> <!-- end .page-content -->
            </div>
            <div class="col-md-3 col-md-pull-9 category-toggle">
                {{--<button><i class="fa fa-chevron-right"></i></button>--}}
                <button class="sidebar-open"><i class="fa fa-chevron-right"><span>MENÜ</span></i></button>

                <div class="page-sidebar">

                    <!-- Category accordion -->
                    <div id="categories">
                        <div class="accordion">
                            <ul class="nav nav-tabs accordion-tab" role="tablist">
                                <li class="active">
                                    @foreach($firstCategoryDetail->getDetail  as $child)
                                        @if($child->getCategoryDetail->active==1)
                                        <div>
                                            <a class="sub-category" href="{{route('productFirstCategory',['slug'=>$child->getCategoryDetail->seo_url,'id'=>$child->getCategoryDetail->id])}}" title="{{$child->getCategoryDetail->name}}">
                                                {{$child->getCategoryDetail->name}}
                                            </a>
                                        </div>
                                        @endif
                                    @endforeach
                                </li>
                                <!-- category end-->
                            </ul>
                        </div> <!-- end .accordion -->
                    </div> <!-- end #categories -->
                </div> <!-- end .page-sidebar -->
            </div> <!-- end grid layout-->
        </div> <!-- end .row -->
    </div> <!-- end .container -->
</div>


@endsection

@section('scripts')

    <script>


        $(function () {
            $('.toggle-menu').click(function () {
                $('.exo-menu').toggleClass('display');

            });

        });
        $(function () {

            var fonts = ['Aradığınız Ürün', 'Aradığınız Marka', 'Aradığınız Ekipman', 'Aradığınız Mazeme'];
            var time = setInterval(function () {
                var newFont = fonts[Math.floor(Math.random() * fonts.length)];
                $('#p').attr('placeholder', newFont);
            }, 1000);

        });

    </script>

    <!-- Hb Slider -->
    <script type="text/javascript" src="{{ asset('js/hb-slider/hb-main.js') }}"></script>
    <script src="https://use.fontawesome.com/249adc889a.js"></script>
    <script>

        function sliderCategoryFunction(id) {
            var category = document.getElementById('first-slider-id').dataset.name;
            $.post("{{route('productSliderCategories')}}",
                {
                    _token: "{{csrf_token()}}",
                    id: id,
                    category: category
                }, function (data) {
                    $('#exist').html();
                    $('#exist').html(data);
                    $("#mehmet-1").trigger("click");
                });

        }

        function sliderCategoryMobileFunction(id) {
            var category = document.getElementById('first-slider-id').dataset.name;
            $.post("{{route('productSliderCategoriesMobile')}}",
                {
                    _token: "{{csrf_token()}}",
                    id: id,
                    category: category
                }, function (data) {
                    $('#mobil-area').html();
                    $('#mobil-area').html(data);
                });
        }

        window.onload = function () {
            var data_id = document.getElementById('first-slider-id').dataset.id;
            var category = document.getElementById('first-slider-id').dataset.name;
            $.post("{{route('productSliderCategories')}}",
                {
                    _token: "{{csrf_token()}}",
                    id: data_id,
                    category: category
                }, function (data) {
                    $('#exist').html();
                    $('#exist').html(data);
                    $("#mehmet-1").trigger("click");
                });

            var data_id_mobile = document.getElementById('first-slider-id-mobile').dataset.id;
            var data_category_mobile = document.getElementById('first-slider-id-mobile').dataset.name;
            $.post("{{route('productSliderCategoriesMobile')}}",
                {
                    _token: "{{csrf_token()}}",
                    id: data_id_mobile,
                    category: data_category_mobile
                }, function (data) {
                    $('#mobil-area').html();
                    $('#mobil-area').html(data);
                });
        }

        // slider top menu hover
        var header = document.getElementById("hb-top-menu");
        var btns = header.getElementsByClassName("hb-btn");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function () {
                var current = document.getElementsByClassName("hbactive");
                current[0].className = current[0].className.replace(" hbactive", "");
                this.className += " hbactive";
            });
        }

    </script>
@endsection
