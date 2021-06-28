@extends('frontend.layout.master')
@section('title',$product->name)

@section('meta')
    <link rel="stylesheet" href="https://unpkg.com/xzoom/dist/xzoom.css">
    <link rel="stylesheet" href="{{ asset('css/product/product.css') }}">
@endsection
@section('content')

    @php use App\Services\LogActivity;LogActivity::addToLog('product',$product->name,$product->id); @endphp
@section('slider')
    <div class="company-heading-view">
        <div class="general-view" style="background: rgb(0,0,0);
            background: radial-gradient(circle, rgba(0,0,0,0.6587009803921569) 0%, rgba(0,0,0,0.8379726890756303) 55%);
                height: 50vh;
                width: 100%;">
            <span></span> <!-- for dark-overlay on the bg -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 company_title_responsive">
                        <h1 class="text-center"
                            style="font-weight: bold;color:white;margin-top:12%;margin-bottom: 8%;">{{$product->name}}</h1>
                    </div>
                </div>
            </div>
        </div> <!-- END .general-view -->

    </div>
@endsection
<div class="container page-breadcrumb">
    <div class="row"><a href="{{route('home')}}" title="Anasayfa">Anasayfa</a> / <a href="{{route('products')}}"
                                                                                    title="Ürünler">Ürünler</a> / <a
            href="{{route('productCategory',['slug'=>$product->getCategory->seo_url,'id'=>$product->getCategory->id])}}"
            title="{{$product->getCategory->name}}">{{$product->getCategory->name}}</a> / {{$product->name}}</div>
</div>
<div id="page-content">
    <div class="container">
        <div class="page-content bl-list">
            <div class="row">
                <div class="col-md-5"
                     style="text-align: center; border: 1px solid #e2e2e2 ; padding: 10px; margin-bottom: 15px;">
                    <div class="xzoom-container">
                        @if(isset($product->firstImage->api))
                        @if($product->firstImage->api==1)
                            <img class="xzoom image-zoom-slider" id="xzoom-default" width="100%"
                                 src="{{ asset($product->firstImage->images) }}"
                                 xoriginal="{{ asset($product->firstImage->images) }}"/>
                        @else
                        @if($product->getImage->count() > 0)
                            @if($product->oneImage == null)
                                <img class="xzoom image-zoom-slider" id="xzoom-default" width="100%"
                                     src="{{ asset($product->firstImage->images) }}"
                                     xoriginal="{{ asset($product->firstImage->images) }}"/>
                            @else
                                <img class="xzoom image-zoom-slider" id="xzoom-default" width="100%"
                                     src="{{ asset($product->oneImage->images) }}"
                                     xoriginal="{{ asset($product->oneImage->images) }}"/>
                            @endif
                        @else
                            @if(isset($item->firstImage->images))
                                <img class="xzoom image-zoom-slider" id="xzoom-default" width="100%"
                                     src="{{ asset($product->firstImage->images) }}" s
                                     xoriginal="{{ asset($product->firstImage->images) }}"/>
                            @else
                                <img class="xzoom image-zoom-slider" id="xzoom-default" width="100%"
                                     src="{{asset('img/noimage.png')}}" xoriginal="{{asset('img/noimage.png')}}"/>
                            @endif
                        @endif
                        @endif
                        @endif
                        <div class="xzoom-thumbs">
                            @php $order = 0; @endphp
                            @foreach($product->getImage as $image)
                            @if( $image->api==1)
                                    <a href="{{ $image->images }}"><img class="xzoom-gallery image-zoom-smail"
                                                                               width="80" src="{{ $image->images }}"
                                                                               @if($order == 0 ) xpreview="{{ $image->images }}"
                                                                               @endif title="{{$product->name}}"></a>
                                @else
                                <a href="{{ asset($image->images) }}"><img class="xzoom-gallery image-zoom-smail"
                                                                           width="80" src="{{ asset($image->images) }}"
                                                                           @if($order == 0 ) xpreview="{{ asset($image->images) }}"
                                                                           @endif title="{{$product->name}}"></a>
                                @endif
                                @php $order++ @endphp
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-1">
                    <div class="row" style="border: 1px solid #e2e2e2; padding: 5px;">
                        <div class="col-md-10">
                            <div class="col-md-12">
                                <h1>{{$product->name}}</h1>
                            </div>
                            <div class="col-md-12" style="word-break: break-word;">
                                <span class="small-desc">{{  substr($product->name , 0, 70) }}</span>
                            </div>

                            @if(isset($product->discount))
                            <div class="col-md-12">
                                <del> <span class="real-price" style="color: #cccaca; font-size: 18px;"> {{ $product->price }} TL</span> </del> <span class="real-price" style="color: red; font-size: 18px;" > %{{ $product->discount }}</span> <br>
                                <span class="real-price"> {{number_format((float)$product->price - ($product->price * $product->discount / 100), 2, '.', '')}} ₺</span>
                            </div>
                            @else
                                <div class="col-md-12">
                                    <span> </span> <span class="real-price"> {{ $product->price }} ₺</span>
                                </div>
                                @endif
                        </div>
                        <div class="col-md-2">

                        </div>
                        <div class="col-md-12">
                            <span class="seller"> Satıcı : <span> <a
                                        href="{{route('MyCompanySlug',['slug'=> Str::slug($product->getCompany->name) ,'id'=>$product->getCompany->id])}}"> {{$product->getCompany->small_name}} </a></span></span>
                        </div>
                        @if(isset($product->product_url))
                        <div class="col-md-12" style="text-align: center" >
                            <a href="{{ $product->product_url }}" title="" class="btn btn-tradeey-white" >Mağazaya Git</a>
                        </div>
                        @endif
                    </div>

                    <div class="row right-content">
                        <div class="col-md-12">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <span class="font-weight-title ">Ürün Bilgileri</span>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <span class="float-right-all">  <a href="#detay">Tüm Özellikler</a></span>
                            </div>
                        </div>
                        <div class="col-md-12 content-product">
                            {!! $product->content !!}
                        </div>
                    </div>
                    <div class="row right-tags">
                        <div class="col-md-12">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <span class="font-weight-title ">Etiketler</span>
                            </div>
                        </div>
                        <div class="col-md-12 ">
                            <div class="row">
                                <ul class="tags">
                                @foreach($product->tags_as_array as $tag)
                                        <li> <a class="tag" href="{{route('productTag',['tags'=>$tag])}}"
                                                title="{{$tag}}">{{$tag}}</a></li>

                                @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <h1> Firmanın Diğer Ürünleri </h1>
                <div class="col-md-12" style="    margin-top: 15px;">
                            @foreach($products as $item)
                                <div class="col-md-2">
                                    <a href="{{route('product',['slug'=>Str::slug($item->name) ,'id'=>$item->id])}}" title="{{ $item->name }}">
                                        <div class="pad15">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    @if(isset($item->firstImage->api))
                                                        @if( $item->firstImage->api == 1)
                                                            <img src="{{$item->firstImage->images}}" width="100%"
                                                                 class="img-new"  alt="{{$item->name}}">
                                                        @else
                                                    @if($item->getImage->count() > 0)
                                                        @if($item->oneImage == null)
                                                            <img src="{{$item->firstImage->images}}" alt="{{ $item->name }}" class=" product-image-slider">
                                                        @else
                                                            <img src="{{$item->oneImage->images}}" alt="{{ $item->name }}" class=" product-image-slider">
                                                        @endif
                                                    @else
                                                        @if(isset($item->firstImage->images))
                                                            <img src="{{$item->firstImage->images}}" alt="{{ $item->name }}" class=" product-image-slider">
                                                        @else
                                                            <img src="{{asset('img/noimage.png')}}" alt="{{ $item->name }}"
                                                                 class=" product-image-slider">
                                                        @endif
                                                    @endif
                                                    @endif
                                                    @endif
                                                </div>
                                                <div class="col-md-12 text-align-center " >
                                                    <h1 class="one-title">{{$item->name}}</h1>
                                                </div>
                                                <div class="col-md-12 text-align-center">
                                                    @if(isset($item->discount))
                                                        <div class="one-price" >
                                        <span style="    font-size: 22px;
    line-height: 18px;
    color: #484848;
    font-weight: bold;">{{number_format((float)$item->price - ($item->price * $item->discount / 100), 2, '.', '')}} ₺</span>
                                                            <br> <del> <span style="    font-size: 15px;
    line-height: 18px;
    color: #484848;
    font-weight: bold;">{{$item->price}} ₺</span></del><span class="real-price" style="color: red; font-size: 15px;" > %{{ $item->discount }}</span>
                                                        </div>
                                                    @else
                                                        <div class="one-price">
                                        <span style="    font-size: 22px;
    line-height: 18px;
    color: #484848;
    font-weight: bold;">{{$item->price}} ₺</span>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                            @endforeach

                </div>
            </div>
        </div>
        <div class="row">
            @if($product->pdf != null)
                <h1> Diğer Özellikleri </h1>
                <div class="col-md-12">
                    <iframe src="{{ asset('images/product/pdf').'/'.$product->pdf}}"
                            width="100%" height="300px">
                    </iframe>
                </div>
            @endif
        </div>

    </div> <!-- end .grid-layout -->
</div> <!-- end .page-content -->


{{--<modal>
    <div id="modal" class="modal" style="max-width:65%;padding: 0 !important;">
        <img style="width:100% !important;" id="modal_image" src="" alt="">
        <a href="#" rel="modal:close"> </a>

        <button style="margin-left:1px" class="btn blue white-text radius" id="back"><-</button>
        <button class="btn blue white-text radius" id="next">-></button>
    </div>
</modal>--}}


@endsection

@section('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>



    <script src="https://unpkg.com/xzoom/dist/xzoom.min.js"></script>
    <script src="https://hammerjs.github.io/dist/hammer.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/js/foundation.min.js"></script>

    <script>
        (function ($) {
            $(document).ready(function () {
                $('.xzoom, .xzoom-gallery').xzoom({zoomWidth: 400, title: true, tint: '#333', Xoffset: 15});
                $('.xzoom2, .xzoom-gallery2').xzoom({position: '#xzoom2-id', tint: '#ffa200'});
                $('.xzoom3, .xzoom-gallery3').xzoom({
                    position: 'lens',
                    lensShape: 'circle',
                    sourceClass: 'xzoom-hidden'
                });
                $('.xzoom4, .xzoom-gallery4').xzoom({tint: '#006699', Xoffset: 15});
                $('.xzoom5, .xzoom-gallery5').xzoom({tint: '#006699', Xoffset: 15});

                //Integration with hammer.js
                var isTouchSupported = 'ontouchstart' in window;

                if (isTouchSupported) {
                    //If touch device
                    $('.xzoom, .xzoom2, .xzoom3, .xzoom4, .xzoom5').each(function () {
                        var xzoom = $(this).data('xzoom');
                        xzoom.eventunbind();
                    });

                    $('.xzoom, .xzoom2, .xzoom3').each(function () {
                        var xzoom = $(this).data('xzoom');
                        $(this).hammer().on("tap", function (event) {
                            event.pageX = event.gesture.center.pageX;
                            event.pageY = event.gesture.center.pageY;
                            var s = 1, ls;

                            xzoom.eventmove = function (element) {
                                element.hammer().on('drag', function (event) {
                                    event.pageX = event.gesture.center.pageX;
                                    event.pageY = event.gesture.center.pageY;
                                    xzoom.movezoom(event);
                                    event.gesture.preventDefault();
                                });
                            }

                            xzoom.eventleave = function (element) {
                                element.hammer().on('tap', function (event) {
                                    xzoom.closezoom();
                                });
                            }
                            xzoom.openzoom(event);
                        });
                    });

                    $('.xzoom4').each(function () {
                        var xzoom = $(this).data('xzoom');
                        $(this).hammer().on("tap", function (event) {
                            event.pageX = event.gesture.center.pageX;
                            event.pageY = event.gesture.center.pageY;
                            var s = 1, ls;

                            xzoom.eventmove = function (element) {
                                element.hammer().on('drag', function (event) {
                                    event.pageX = event.gesture.center.pageX;
                                    event.pageY = event.gesture.center.pageY;
                                    xzoom.movezoom(event);
                                    event.gesture.preventDefault();
                                });
                            }

                            var counter = 0;
                            xzoom.eventclick = function (element) {
                                element.hammer().on('tap', function () {
                                    counter++;
                                    if (counter == 1) setTimeout(openfancy, 300);
                                    event.gesture.preventDefault();
                                });
                            }

                            function openfancy() {
                                if (counter == 2) {
                                    xzoom.closezoom();
                                    $.fancybox.open(xzoom.gallery().cgallery);
                                } else {
                                    xzoom.closezoom();
                                }
                                counter = 0;
                            }

                            xzoom.openzoom(event);
                        });
                    });

                    $('.xzoom5').each(function () {
                        var xzoom = $(this).data('xzoom');
                        $(this).hammer().on("tap", function (event) {
                            event.pageX = event.gesture.center.pageX;
                            event.pageY = event.gesture.center.pageY;
                            var s = 1, ls;

                            xzoom.eventmove = function (element) {
                                element.hammer().on('drag', function (event) {
                                    event.pageX = event.gesture.center.pageX;
                                    event.pageY = event.gesture.center.pageY;
                                    xzoom.movezoom(event);
                                    event.gesture.preventDefault();
                                });
                            }

                            var counter = 0;
                            xzoom.eventclick = function (element) {
                                element.hammer().on('tap', function () {
                                    counter++;
                                    if (counter == 1) setTimeout(openmagnific, 300);
                                    event.gesture.preventDefault();
                                });
                            }

                            function openmagnific() {
                                if (counter == 2) {
                                    xzoom.closezoom();
                                    var gallery = xzoom.gallery().cgallery;
                                    var i, images = new Array();
                                    for (i in gallery) {
                                        images[i] = {src: gallery[i]};
                                    }
                                    $.magnificPopup.open({items: images, type: 'image', gallery: {enabled: true}});
                                } else {
                                    xzoom.closezoom();
                                }
                                counter = 0;
                            }

                            xzoom.openzoom(event);
                        });
                    });

                } else {
                    //If not touch device

                    //Integration with fancybox plugin
                    $('#xzoom-fancy').bind('click', function (event) {
                        var xzoom = $(this).data('xzoom');
                        xzoom.closezoom();
                        $.fancybox.open(xzoom.gallery().cgallery, {padding: 0, helpers: {overlay: {locked: false}}});
                        event.preventDefault();
                    });

                    //Integration with magnific popup plugin
                    $('#xzoom-magnific').bind('click', function (event) {
                        var xzoom = $(this).data('xzoom');
                        xzoom.closezoom();
                        var gallery = xzoom.gallery().cgallery;
                        var i, images = new Array();
                        for (i in gallery) {
                            images[i] = {src: gallery[i]};
                        }
                        $.magnificPopup.open({items: images, type: 'image', gallery: {enabled: true}});
                        event.preventDefault();
                    });
                }
            });
        })(jQuery);
    </script>
@endsection

