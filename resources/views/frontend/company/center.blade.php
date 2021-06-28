@extends('frontend.layout.master')
@section('title',$company->name)
@section('meta')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <meta name="description" content="{{$company->description}}">
    <meta property="og:title" content="{{$company->name}}">
    <meta property="og:url" content="{{url()->current()}}">
    <meta property="og:image" content="{{ asset($company->image) }}" />
    <meta name="twitter:description" content="{{$company->description}}">
    <meta name="twitter:title" content="{{ $company->name}}">
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="{{url()->current()}}" />
    <meta property="twitter:img" content="{{ asset($company->image) }}" />
    <meta itemprop="name" content="{{$company->name}}">
    <meta itemprop="description" content="{{$company->description}}">
    <link rel="stylesheet" href="{{asset('js/temp/toastr.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/owl-carousel/owlcarousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl-carousel/owlcarousel/assets/owl.theme.default.min.css')}}">


    <link rel="stylesheet" href="{{ asset('css/center.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <style>
        @media screen and (min-width: 768px){
            .carousel-inner {
                height: 400px !important;
            }
        }
    </style>
@endsection
@section('content')
    @php use App\Services\LogActivity;LogActivity::addToLog('center',$company->name,$company->id); @endphp
@section('slider')
    <div style="height: 70px;width:100%"></div>
@endsection


<div class="container-fluid" style="background:silver;border-bottom:5px solid ffab03;">
    <div class="row" style="background-color: #ffffff">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
            @if($slider->count() > 0)

                <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        @php $i = 0; @endphp
                        @foreach($slider as $item)
                            <div class="item {{ $i == 0 ? 'active':'' }}">
                                <img src="{{ asset($item->image) }}" alt="{{ $company->name }}" style="width:100%;object-fit: contain;">
                            </div>
                            @php $i++ @endphp
                        @endforeach
                    </div>
                @else
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="{{ asset('images/company/slider/0.jpg') }}" alt="{{ $company->name }}" style="width:100%;">
                        </div>
                        <div class="item ">
                            <img src="{{ asset('images/company/slider/1.jpg') }}" alt="{{ $company->name }}" style="width:100%;">
                        </div>
                        <div class="item ">
                            <img src="{{ asset('images/company/slider/2.jpg') }}" alt="{{ $company->name }}" style="width:100%;">
                        </div>
                        <div class="item ">
                            <img src="{{ asset('images/company/slider/3.jpg') }}" alt="{{ $company->name }}" style="width:100%;">
                        </div>
                    </div>
            @endif

            <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="col-md-12">
                <div class="row">
                        <a href="#about" title="Hakkında"  class="col-md-2 col-sm-3 col-xs-6 menu">
                            <span> Hakkında  </span>
                        </a>
                    <a href="#foto" title="Dökümanlar"   class="col-md-2 col-sm-3 col-xs-6 menu">
                        <span> Görseller  </span>
                    </a>
                    <a href="#demands" title="Talepler"   class="col-md-2 col-sm-3 col-xs-6 menu">
                        <span> Talepler  </span>
                    </a>
                    <a href="#news" title="Haberler"  class="col-md-2 col-sm-3 col-xs-6 menu">
                        <span> Haberler  </span>
                    </a>
                    <a href="#companies" title="Firmalar"  class="col-md-2 col-sm-3 col-xs-6 menu">
                        <span> Firmalar  </span>
                    </a>
                    <a href="#content" title="İletişim"  class="col-md-2 col-sm-3 col-xs-6 menu">
                        <span> İletişim  </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="about">
        <div class="col-md-12">
            <div class="col-md-12 about-title">
                Hakkında
            </div>
            <div class="col-md-12 about-content">
                {!! $company->content !!}

            </div>
        </div>
    </div>
    <div class="row" id="foto">
        <div class="col-md-12 about-title">
            Görseller
        </div>
        <div class="col-md-12 about-content">
            @foreach($companyImages as $image)
                <div class="col-md-3">
                    <img src="{{asset($image->url)}}" style="width: 100%;object-fit: cover;" alt="{{$image->name}}">
                </div>
            @endforeach
        </div>
    </div>
    <div class="row" id="companies">
        <div class="col-md-12 about-title">
            Firmalar
        </div>
        <div class="col-md-12">
            @foreach($companyMapping as $companies)
                <a href="{{route('MyCompanySlug',['slug'=> Str::slug($companies->getCompany->name) ,'id'=>$companies->getCompany->id])}}" title="{{$companies->getCompany->name}}" >
                    <div class="col-md-4" style="background-color: #f3f3f3f3;    border: 3px solid #fff;">
                        <div class="col-md-12">
                            <img src="{{ asset($companies->getCompany->image)}}" alt="{{$companies->getCompany->name}}" style="    width: 100%;
    object-fit: contain;
    height: 80px;
    top: 42px;
    transition: all 0.3s;">
                        </div>
                        <div class="col-md-12" style="text-align: center;">
                            @isset($companies->company->category)

                                <a href="{{route('blogs',['category_id'=>$companies->category_id])}}" title="{{$companies->company->category->name}}">{{$companies->company->category->name}}
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
                            <span> {{$companies->getCompany->name}}</span>
                        </div>
                        <div class="col-md-12" style="text-align: center" >
                            <a href="{{route('MyCompanySlug',['slug'=> Str::slug($companies->getCompany->name) ,'id'=>$companies->getCompany->id])}}" class="btn btn-tradeey-white" > Detay</a>
                        </div>
                    </div>
                </a>

            @endforeach
        </div>
        <div class="col-md-12 about-title">
            <a  href="{{ route('CenterCompanyListMapping',['slug' => Str::slug($company->name) ,'id'=>$company->id ]) }}" target="_blank" class="btn btn-tradeey-white" > Tüm Firmaları Gör  </a>
        </div>
    </div>
    <div class="row" id="demands">
        <div class="col-md-12 about-title">
            Taleplerimiz
        </div>
        <div class="col-md-12">
            @if($companyDemand->count() > 0)
                @foreach($companyDemand as $item)
                    @if ( $demandblocking )
                        <a href="{{ route('demand',$item->id) }}" title="{{$item->title}}" >
                            @endif
                            @if ( !$demandblocking )
                                <a class="sweet-alert-btn cursor-pointer">
                                    @endif
                                    <div class="col-md-3" style="background-color: #f3f3f3f3;    border: 3px solid #fff;">
                                        <div class="col-md-12">
                                            <img src="{{ asset($item->img_url ) }}" alt="{{ $item->title }}" style="    width: 100%;
    object-fit: contain;
    height: 80px;
    top: 42px;
    transition: all 0.3s;">
                                        </div>
                                        <div class="col-md-12" style="    overflow: hidden;
    line-height: 24px;
    display: -webkit-box;
    width: 100%;
    -webkit-line-clamp: 2;
    line-clamp: 2;
    -webkit-box-orient: vertical;
    height: 44px;
    font-size: 14px;
    text-align: center;" >
                                            <span> {{ $item->title }}</span>
                                        </div>
                                        <div class="col-md-12" style="text-align: center" >
                                            @if ( $demandblocking )
                                                <a href="{{route('demand',$item->id)}}" class="btn btn-tradeey-white" > Detay</a>
                                            @endif
                                            @if ( !$demandblocking )
                                                <a class="sweet-alert-btn cursor-pointer btn btn-tradeey-white">Detay</a>
                                            @endif
                                        </div>
                                    </div>
                                </a>
                                @endforeach
                            @else
                                <div class="col-md-12" style="text-align: center; padding-top: 40px;">
                                    <span style="font-size: 25px;  font-weight: bold;">Firmanın Ürünlerini Görmek İstediğinizi Firmaya Bildirin </span>
                                    <form role="form" enctype="multipart/form-data" action="{{ route('infoCompanyMail') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{$company->id}}" name="company">
                                        <button   type="submit" class="btn btn-tradeey-white">Bildirim Gönder</button>
                                    </form>
                                </div>
                    @endif
        </div>
    </div>
    <div class="row" id="news">
        <div class="col-md-12 about-title">
            Haberler
        </div>
        <div class="col-md-12">
            @if($companyBlogs->count() > 0)
                @foreach($companyBlogs as $blog)
                    <a href="{{ route('blog',$blog->id) }}" title="asd" >
                        <div class="col-md-4" style="background-color: #f3f3f3f3;    border: 3px solid #fff;">
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
                    <span style="font-size: 25px;  font-weight: bold;">Firmanın Ürünlerini Görmek İstediğinizi Firmaya Bildirin </span>
                    <form role="form" enctype="multipart/form-data" action="{{ route('infoCompanyMail') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{$company->id}}" name="company">
                        <button   type="submit" class="btn btn-tradeey-white">Bildirim Gönder</button>
                    </form>
                </div>
            @endif
        </div>
    </div>
    <div class="row" id="content">
        <div class="col-md-12 about-title" >
            İletişim
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-map-company">
                        <iframe style="width:100%;height: 350px"
                                frameborder="0"
                                scrolling="no"
                                marginheight="0"
                                marginwidth="0"
                                src="https://maps.google.com/maps?q={{$company->latitude}},{{$company->longitude}}&hl=es;z=14&amp;output=embed">
                        </iframe>
                    </div> <!-- end .map-section -->
                </div>
                <div class="col-md-6" style="padding: 15px">
                    <div class="col-md-12">
                        <div class="social-link text-right">
                            <ul class="list-inline">
                                @if($company->facebook)
                                    <li style="border: 1px solid #2050b3;"><a style="color: #2050b3;" target="_blank"
                                                                              href="{{$company->facebook}}"
                                                                              title="facebook"><i
                                                class="fa fa-facebook"></i></a></li>
                                @endif

                                @if($company->twitter)
                                    <li style="border: 1px solid #00b9ff;"><a style="color: #00b9ff;" target="_blank"
                                                                              href="{{$company->twitter}}"
                                                                              title="twitter"><i
                                                class="fa fa-twitter"></i></a></li>
                                @endif

                                @if($company->linkedin)
                                    <li style="border: 1px solid #007dbb;"><a style="color: #007dbb;" target="_blank"
                                                                              href="{{$company->linkedin}}"
                                                                              title="linkedin"><i
                                                class="fa fa-linkedin"></i></a></li>
                                @endif

                                @if($company->instagram)
                                    <li style="border: 1px solid #405DE6;"><a style="color: #405DE6;" target="_blank"
                                                                              href="{{$company->instagram}}"
                                                                              title="instagram"><i
                                                class="fa fa-instagram"></i></a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12"><strong>Adres</strong></div>
                    <div class="col-md-12">
                            <span> {{$company->company_address}}</span>
                    </div>
                    <div class="col-md-12"><strong>Telefon:</strong></div>
                    <div class="col-md-12">
                            <span><a href="tel:{{$company->first_phone}}" title="phone" > {{$company->first_phone}}</a></span>
                    </div>
                    <div class="col-md-12"><strong>Fax</strong></div>
                    <div class="col-md-12">
                        <span>{{$company->fax_number}}</span>
                    </div>
                    <div class="col-md-12"><strong>Whatsaap</strong> </div>
                    <div class="col-md-12">
                        <a target="_blank" title="whatsaap" href="https://api.whatsapp.com/send?phone=&text={{ $company->company_whatsapp }}&source=&data=" data-action="share/whatsapp/share">  <span> {{$company->company_whatsapp}}</span></a>
                    </div>
                    <div class="col-md-12"><strong>E-mail</strong> </div>
                    <div class="col-md-12">
                        <a href="mailto:{{$company->email}}" title="email">{{$company->email}}</a>
                    </div>
                    <div class="col-md-12"><strong>Website</strong> </div>
                    <div class="col-md-12">
                        <a target="_blank" href="{{$company->website_url}}" title="{{$company->name}}"> {{$company->website_url}}</a>
                    </div>

                    <h5>Çalışma Saatleri</h5>
                    <div class="col-md-12"><strong>Saatler</strong> </div>
                    <div class="col-md-12">
                        <span>{{$company->work_start_time}}   {{$company->work_finish_time}}</span>
                    </div>
                    <div class="col-md-12"><strong>Günler</strong> </div>
                    <div class="col-md-12">
                        @foreach ( $company->working_days as $value )
                            <span>{{ $value }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="company-text" >
                <span style="    font-size: 18px; font-weight: bold;">Etiketler</span>
                <ul class="tags-company">
                    @foreach ( $company->tags_as_array  as $value)
                        <li class="col-md-2">
                            <a href="{{route('company-tag',['tags'=>$value])}}" title="{{$value}}">{{$value}}</a>
                        </li>
                    @endforeach
                </ul>
            </div> <!-- end company-text -->
        </div>
    </div>
</div>
    </div>
</div>








<!-- OUR PARTNER SLIDER BEGIN -->

<!-- END OUR PARTNER SLIDER -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>

<script type="text/javascript">
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 5,
        spaceBetween: 20,
        freeMode: true,
        autoplay: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            500: {
                slidesPerView: 1,
                spaceBetween: 15,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            992: {
                slidesPerView: 4,
                spaceBetween: 15,
            },
            1024: {
                slidesPerView: 5,
                spaceBetween: 15,
            },
        }
    });

</script>
    <script src="{{asset('css/owl-carousel/vendors/highlight.js')}}"></script>
    <script src="{{asset('js/carousel.js')}}"></script>
<script>

    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }

    carousel('.banner-carousel');

</script>

@php
    $message = "Talepleri Görüntülemek İçin Kayıt Olmanız Gerekmektedir.";
@endphp

@auth
    @php
        $message = "Talepleri Görüntülemek İçin Uygun Paketi Seçip Satın Almanız Gerekmektedir.";
    @endphp
@endauth

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script src="{{asset('/js/sweet.js')}}"></script>
<script>

    $("a.sweet-alert-btn").click(function(){
        sweetMessage('Bilgi',"{!! $message !!}",'warning');
    });

</script>
@endsection

@section('footer')
<script src="{{asset('js/temp/toastr.min.js')}}"></script>
<script src="{{asset('/js/toastr-app.js')}}"></script>

<script src="{{asset('css/owl-carousel/vendors/highlight.js')}}"></script>
<script src="{{asset('css/owl-carousel/js/app.js')}}"></script>

<script src="{{asset('css/owl-carousel/vendors/jquery.min.js')}}"></script>
<script src="{{asset('css/owl-carousel/owlcarousel/owl.carousel.js')}}"></script>

@if ( session()->has('message') )
<script>
    message("{{ session('message') }}","{{ session('type') }}")
</script>
@endif

@endsection
