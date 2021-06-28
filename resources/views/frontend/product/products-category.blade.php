@extends('frontend.layout.master')
@section('title',$category->name )

@section('meta')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <meta name="description" content="{{$category->description}}">
    <meta name="keywords" content="{{$category->keywords}}">
    <meta property="og:title" content="{{$category->name}}">
    <meta property="og:url" content="{{url()->current()}}">
    <meta property="og:image" content="{{config('app.url').'/'.$category->image}} "/>
    <meta name="twitter:description" content="{{$category->description}}">
    <meta name="twitter:title" content="{{ $category->name }}">
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="{{url()->current()}}"/>
    <meta property="twitter:img" content="{{config('app.url').'/'.$category->image}}"/>
    <meta itemprop="name" content="{{$category->name}}">
    <meta itemprop="description" content="{{$category->description}}">

    <link rel="stylesheet" href="{{asset('css/cursor.css')}}">
    <link rel="stylesheet" href="{{asset('css/product/product-menu.css')}}">
    <link rel="stylesheet" href="{{ asset('css/frontend/home/home.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/hb-slider/w3.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/hb-slider/hb-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/hb-slider/hb-media.css') }}">
@endsection
<style>
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
    @php use App\Services\LogActivity;LogActivity::addToLog('productCategory'); @endphp
@section('slider')
    <div class="company-heading-view">
        <div class="general-view">
        </div> <!-- END .general-view -->
    </div>
@endsection

@if($category->type == 1)
    <div id="hvbkj" class="jfhbr gsjyg"
         style="width: 100%; position: absolute; z-index: 99; background: url(http://4.bp.blogspot.com/-umEcTsf9E68/T88dV-Lvb3I/AAAAAAAALDg/OLT-JamRQ-Y/s1600/black+transparent.png); height: 100%; top: -52px">
        <center>
            <div
                style="border-bottom: medium none; position: relative; border-left: medium none; padding-bottom: 0px; margin: 10% 0px 0px; padding-left: 0px; width: 543px; padding-right: 0px; background: url(http://3.bp.blogspot.com/-dgO-9CliiBU/T88bueqR6TI/AAAAAAAALDQ/nFQE1ZWe204/s1600/cats.png) no-repeat; height: 293px; overflow: hidden; border-top: medium none; border-right: medium none; padding-top: 0px; -webkit-box-shadow: 0px 0px 20px #822; box-shadow: 0px 0px 20px #822; -webkit-border-radius: 14px; border-radius: 14px">
                <a target="_self"
                   style="border-bottom: #8b0000 2px outset; position: absolute; border-left: #8b0000 2px outset; line-height: 30px; background-color: #d40000; width: 80px; bottom: 12px; display: block; font-family: Tahoma, Arial, sans-serif; height: 30px; color: #fff; font-size: 19px; border-top: #8b0000 2px outset; font-weight: normal; border-right: #8b0000 2px outset; text-decoration: none; left: 40px; -webkit-border-radius: 6px; border-radius: 6px"
                   href="https://tradeey.com">&Ccedil;ıkış</a><a
                    onclick="document.getElementById('hvbkj').style.display='none';"
                    style="border-bottom: #8b0000 2px outset; position: absolute; border-left: #8b0000 2px outset; line-height: 30px; background-color: #d40000; width: 340px; bottom: 12px; display: block; font-family: Tahoma, Arial, sans-serif; height: 30px; color: #fff; font-size: 19px; border-top: #8b0000 2px outset; right: 40px; font-weight: normal; border-right: #8b0000 2px outset; text-decoration: none; -webkit-border-radius: 6px; border-radius: 6px"
                    href="javascript:void(0)">18 Yaşından B&uuml;y&uuml;ğ&uuml;m, Siteye Gir</a></div>
        </center>
    </div>
@endif


<!-- Slider Start -->
<!--
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
    -->
    <!-- Mobile Slider End -->

@endif
<!-- Slider End -->
<div class="container page-breadcrumb">
    <div class="row"><a href="{{route('home')}}" title="Anasayfa">Anasayfa</a> / <a href="{{ route('products') }}"
                                                                                    title="Ürünler"> Ürünler</a>
        / {{ $category->name }} </div>
</div>

<div class="container">
    <div class="row">
        @php $ad = ad()->generalAd('TUL'); @endphp
        @if ( $ad )
            <div class="col-md-6">
                <div class="board horizontal">
                    <a href="{{ $ad->url }}" title="{{ $ad->url }}">
                        <img src="{{asset($ad->image)}}">
                    </a>
                </div>
            </div>
        @endif

        @php $ad = ad()->generalAd('TUR'); @endphp
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

<div id="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-content">
                    <div class="product-details view-switch">
                        <div class="tab-content">
                            <div class="" id="category-book">

                                <div class="row clearfix">

                                    <!-- talepler donngu bas-->

                                    @foreach($products as $product)
                                        <div class="col-md-2 col-sm-2  col-xs-6 item">
                                            @guest
                                                <a href="{{ route('login-register') }}" class="heart-product"> <i
                                                        class="fa fa-heart"></i></a>
                                            @else
                                                <a href="{{ route('favoriteAddProduct',$product->id) }}"
                                                   class="heart-product"> <i class="fa fa-heart"></i></a>
                                            @endguest
                                            <a href="{{route('product',['slug'=>Str::slug($product->name) ,'id'=>$product->id])}}"
                                               class="aHover" title="{{ $product->name }}">
                                                <div class="card item-card-product ">
                                                    @if(isset($product->firstImage->api))
                                                        @if($product->firstImage->api==1)
                                                            <img src="{{$product->firstImage->images}}"
                                                                 class="img-new" alt="{{$product->name}}">
                                                        @else
                                                            @if($product->getImage->count() > 0)
                                                                @if($product->oneImage == null)
                                                                    <img src="{{$product->firstImage->images}}"
                                                                         class="img-new" alt="{{$product->name}}">
                                                                @else
                                                                    <img src="{{$product->oneImage->images}}"
                                                                         class="img-new" alt="{{$product->name}}">
                                                                @endif
                                                            @else
                                                                @if(isset($item->firstImage->images))
                                                                    <img src="{{$product->firstImage->images}}"
                                                                         class="img-new" alt="{{$product->name}}">
                                                                @else
                                                                    <img src="{{asset('img/noimage.png')}}"
                                                                         class="img-new" alt="{{$product->name}}">
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
                                                            <br>
                                                            <del> <span style="    font-size: 15px;
    line-height: 18px;
    color: #484848;
    font-weight: bold;">{{$product->price}} ₺</span></del>
                                                            <span class="real-price"
                                                                  style="color: red; font-size: 15px;"> %{{ $product->discount }}</span>
                                                        </div>
                                                    @else
                                                        <div class="col-md-12" style="margin: 15px 0px;">
                                        <span style="    font-size: 22px;
    line-height: 18px;
    color: #484848;
    font-weight: bold;">{{$product->price}} ₺</span>
                                                        </div>
                                                    @endif
                                                    <div class="col-md-12 hidden-btn">
                                                        <button class="btn btn-tradeey"> Detay</button>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                @endforeach
                                <!-- talepler donnguson -->
                                    <div class="col-md-12 paginate-number">
                                        {{ $products->appends(request()->all())->render() }}
                                    </div>

                                </div> <!-- end .row -->
                                <div class="row">
                                    @php $ad = ad()->generalAd('TAL'); @endphp
                                    @if ( $ad )
                                        <div class="col-md-6">
                                            <div class="board horizontal">
                                                <a href="{{ $ad->url }}" title="{{ $ad->url }}">
                                                    <img src="{{asset($ad->image)}}">
                                                </a>
                                            </div>
                                        </div>
                                    @endif

                                    @php $ad = ad()->generalAd('TAR'); @endphp
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
            $.post("{{route('productDetailCategorySliderCategories')}}",
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
            $.post("{{route('productDetailCategorySliderCategoriesMobile')}}",
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
            $.post("{{route('productDetailCategorySliderCategories')}}",
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
            $.post("{{route('productDetailCategorySliderCategoriesMobile')}}",
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
