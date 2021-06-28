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
    <link rel="stylesheet" href="{{ asset('css/frontend/home/home.css') }}">
@endsection
<style>
    @media screen and (min-width: 768px){
        .carousel-inner {
            height: 300px!important;
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

                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        @if($slider->count() > 0)

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            @php $i = 0; @endphp
                            @foreach($slider as $item)
                            <div class="item {{ $i == 0 ? 'active':'' }}">
                                @if( isset($item->button_url) )
                                <a href="{{ $item->button_url }}" style="position: absolute;
    margin-left: 15px;
    right: 70px;
    bottom: 15px;" class="btn btn-tradeey">{{$item->button}}</a>
                                @endif
                                <img src="{{ asset($item->image) }}" alt="{{ $company->name }}" style="width:100%;object-fit: contain;">
                            </div>
                                @php $i++ @endphp
                            @endforeach
                        </div>
                    @else
                            <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="{{ asset('images/company/slider/0.jpg') }}" alt="{{ $company->name }}" style="width:100%; object-fit: contain;">
                                    </div>
                                <div class="item ">
                                    <img src="{{ asset('images/company/slider/1.jpg') }}" alt="{{ $company->name }}" style="width:100%;object-fit: contain;">
                                </div>
                                <div class="item ">
                                    <img src="{{ asset('images/company/slider/2.jpg') }}" alt="{{ $company->name }}" style="width:100%;object-fit: contain;">
                                </div>
                                <div class="item ">
                                    <img src="{{ asset('images/company/slider/3.jpg') }}" alt="{{ $company->name }}" style="width:100%;object-fit: contain;">
                                </div>
                            </div>
                            @endif

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="fa fa-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Önceki</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="fa fa-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Sonraki</span>
                        </a>
                    </div>

                    @if($product->count() > 0)
                    <div class="col-md-12">
                            <div class="col-md-12"><span style="    font-size: 18px; font-weight: bold;"> ÜRÜNLER <a href="{{route('MyCompanyProduct',['slug'=> Str::slug($company->name) ,'id'=>$company->id])}}" class="btn btn-tradeey-white" style="float: right; padding: 2px; padding-left: 5px; padding-right: 5px; " >Tüm Ürünleri</a> </span>
                            <hr>
                            </div>
                        <div class="row">
                            @foreach($product as $item)

                                <div class="col-md-2 col-sm-2 col-xs-6 item">
                                    @guest
                                        <a href="{{ route('login-register') }}" class="heart-product"> <i class="fa fa-heart" ></i></a>
                                    @else
                                        <a href="{{ route('favoriteAddProduct',$item->id) }}" class="heart-product"> <i class="fa fa-heart" ></i></a>
                                    @endguest
                                    <a href="{{route('product',['slug'=>Str::slug($item->name) ,'id'=>$item->id])}}" class="aHover" title="{{ $item->name }}">
                                        <div class="card item-card-product ">
                                            @if(isset($item->firstImage->api))
                                                @if($item->firstImage->api==1)
                                                    <img src="{{$item->firstImage->images}}"
                                                         class="img-new"  alt="{{$item->name}}">
                                                @else
                                                    @if($item->getImage->count() > 0)
                                                        @if($item->oneImage == null)
                                                            <img src="{{$item->firstImage->images}}"
                                                                 class="img-new"  alt="{{$item->name}}">
                                                        @else
                                                            <img src="{{$item->oneImage->images}}"
                                                                 class="img-new"  alt="{{$item->name}}">
                                                        @endif
                                                    @else
                                                        @if(isset($item->firstImage->images))
                                                            <img src="{{$item->firstImage->images}}"
                                                                 class="img-new" alt="{{$item->name}}">
                                                        @else
                                                            <img src="{{asset('img/noimage.png')}}"
                                                                 class="img-new"  alt="{{$item->name}}">
                                                        @endif
                                                    @endif
                                                @endif
                                            @endif
                                            <h5 class="item-card-title mt-3 mb-3">{{$item->name}}</h5>
                                            @if(isset($item->discount))
                                                <div class="col-md-12" style="margin: 15px 0px;">
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
                                                <div class="col-md-12" style="margin: 15px 0px;">
                                        <span style="    font-size: 22px;
    line-height: 18px;
    color: #484848;
    font-weight: bold;">{{$item->price}} ₺</span>
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
                    </div>
                        @endif
                    <div class="col-md-12 col-sm-12 col-xs-12" style="    padding-top: 25px;">
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- yatay deneme -->
                        <ins class="adsbygoogle"
                             style="display:block"
                             data-ad-client="ca-pub-7649491310163135"
                             data-ad-slot="1680188348"
                             data-ad-format="auto"
                             data-full-width-responsive="true"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
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
