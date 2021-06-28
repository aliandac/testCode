<!doctype html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <script data-ad-client="ca-pub-7649491310163135" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="publisher" content="V1 2020" />
    <title>@yield('title')</title>

    <!-- Stylesheets -->
    <link href="{{asset('css/select2.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/social-media.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/tradeeystyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}" >
    <link rel="stylesheet" href="{{asset('css/nav-kategori.css')}}" >
    <link rel="shortcut icon" type="image/png" href="{{ asset(setting('fav-icon')) }}"/>
    <!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700,600,800%7COpen+Sans:400italic,400,600,700'
          rel='stylesheet' type='text/css'>
    <link rel='stylesheet' id='cityrama_qodef_google_fonts-css' href='https://fonts.googleapis.com/css?family=Montserrat%3A300%2C400%2C500%2C600%2C700%2C800&#038;subset=latin-ext&#038;ver=1.0.0' type='text/css' media='all'/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Global site tag (gtag.js) - Google Ads: 614461599 --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-614461599"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-614461599'); </script>
    <!-- Global site tag (gtag.js) - Google Ads: 614461599 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-614461599"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-614461599');
    </script>

    <script>
        function gtag_report_conversion(url) {
            var callback = function () {
                if (typeof(url) != 'undefined') {
                    window.location = url;
                }
            };
            gtag('event', 'conversion', {
                'send_to': 'AW-614461599/iuqBCPS719cBEJ_h_6QC',
                'event_callback': callback
            });
            return false;
        }
    </script>
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1524793201035590');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=1524793201035590&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->
    <!--[if IE 9]>-->
<!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-P3N5JT9');</script>
    <!-- End Google Tag Manager -->
    <!--[endif]-->
    @yield('meta')
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(64566652, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/64566652" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</head>

<body id="scrooltop"  onload="geoPoint()">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P3N5JT9"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="scrooltop"><a class="scroolingtop" title="tradeey" href="#scrooltop"><i class="fa fa-chevron-up"></i></a></div>

<div id="main-wrapper">
    <header id="header">
        <div class="header-top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" style="text-align: center;padding-bottom: 20px;">
                        <a href="{{route('welcomeTradeey')}}" title="Biz Sizi Arayalım " style="font-size: 10px; font-weight: bold; border-right: 1px solid;   padding-left: 2px;" > Biz Sizi Arayalım </a>
                        <a href="{{ route('CompanyComplaintFeedBack') }}" title="Firma Şikayet Et" style="font-size: 10px; border-right: 1px solid;  font-weight: bold; padding-left: 2px; " > Firma Şikayet Et </a>
                        <a href="{{ route('productCampaign') }}" title="Kampanyalar" style="font-size: 10px; font-weight: bold; padding-left: 2px; " > Kampanyalar </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-4 col-xs-12">
                        <div class="row">
                            <div class="col-md-6"><a href="{{route('home')}}" title="{{config('app.name')}}"><img src="{{asset('img/logo-1.png')}}" alt="{{config('app.name')}}" height="34px"></a></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-8 col-xs-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class=" header-translate text-center">
                                    <div class="goggle-translate-elemnt-title" id="google_translate_element"></div>
                                </div>

                                @guest
                                    <div class="header-language">
                                        <a href="#" title="tradeey">
                                            <span><i class="fa fa-user"></i></span>
                                            <i class="fa fa-chevron-down"></i>
                                        </a>
                                        <ul class="list-unstyled" style="width: max-content;">
                                            <li class="active"><a href="{{route('login-register')}}" title="Giriş Yap" class="">Giriş Yap<i
                                                        class="fa fa-sign-in" style="font-size: 15px;padding-left: 7px"></i></a></li>
                                            <li class="active"><a href="{{route('login-register')}}" title="Üye Ol" class="">Üye Ol <i class="fa fa-user" style="font-size: 15px;padding-left: 7px"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="free-add">
                                        <a href="{{route('login-register')}}" title=" Ücretsiz Kayıt Ol" class="">
                                            Ücretsiz Kayıt Ol <i class="fa fa-plus" style="font-size: 15px;padding-left: 7px"></i></a>
                                    </div>
                                @endguest

                                @guest
                                @else

                                            @can('is-admin')
                                                <div class="header-language">
                                        <a href="#" title="tradeey">
                                            <span><i class="fa fa-user"></i> {{ auth()->user()->name  }}</span>
                                            <i class="fa fa-chevron-down"></i>
                                        </a>
                                        <ul class="list-unstyled" style="width: max-content;">
                                                <li class="active"><a href="{{route('admin')}}" title="Admin Paneline Git">Admin Paneline Git</a></li>
                                                <li class="active"><a href="{{route('create_user')}}" title="Profile Git">Profile Git</a></li>
                                                <li class="active"><a href="{{ route('custom_logout') }}" title="Çıkış Yap">Çıkış Yap</a></li>

                                        </ul>
                                                </div>
                                            @else
                                        @auth
                                            @if(\App\User::findOrFail(auth()->user()->id)->franchisingCompany)
                                                <a href="{{route('franchisingPanel',app()->getLocale())}}" style="padding: 10px 0; margin-top: 5px;position: relative; margin-right: 20px;  font-weight: 700;  float: right;" title="Panelim">Panelim</a>
                                            @else

                                                <a href="{{route('create_user')}}" style="padding: 10px 0; margin-top: 5px;position: relative; margin-right: 20px;  font-weight: 700;  float: right;" title="Panelim">Panelim</a>
                                                @endif
                                        @endauth
                                                @endcan
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- HEADER SEARCH SECTION -->
        @if( applyActiveCssClass(['companies','company'],'bg-color') )
        <div class="header-search slider-home">
            <div class="header-search-bar">
                <form action="{{route('search')}}" method="get">
                    <div class="container">
                        <div class="search-value">
                            <div class="keywords category-menu" >
                                <!-- Açılır Menü Başlangıç-->
                                <div class="navbar navbar-default navbar-fixed-top" role="navigation">
                                    <div class="container" style="width: 100%;">
                                        <div class="collapse navbar-collapse">
                                            <ul class="nav navbar-nav">
                                                <li class="dropdown-menu1">
                                                    <a href="#" class="dropdown-toggle first-a" data-toggle="dropdown"> <i class="fa fa-align-justify"></i> Kategoriler <b class="caret"></b></a>
                                                    <ul class="dropdown-menu multi-level">
                                                        @php
                                                           $categories = \App\Models\Category::where('parent_id',0)->orderBy('rank')->where('active',1)->take(11)->get();
                                                            @endphp
                                                        @foreach($categories as $item)
                                                            <li class="divider"></li>
                                                        <li class="dropdown-submenu">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $item->name }}</a>

                                                            <ul class="dropdown-menu">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <h3 class="dropdown-menu-h1"><a href="{{ route('CategoriesIndex',['title'=>$item->seo_url,'id'=>$item->id]) }}">{{ $item->name }}</a></h3>
                                                                        <div class="row">
                                                                            @foreach( \App\Models\Category::where('parent_id',$item->id)->orderBy('rank')->where('active',1)->take(22)->get() as $value)
                                                                            <div class="col-md-6 one-colon"><a href="{{ route('SubCategory',['title' => $value->seo_url,'id'=>$value->id]) }}" title="{{$value->short_name}}"><i class="fa fa-circle" aria-hidden="true"></i> {{ $value->name }}</a></div>
                                                                            @endforeach
                                                                            <div class="col-md-12">
                                                                                <a class="dropdown-sub-all-category" href="{{ route('CategoriesIndex',['title'=>$item->seo_url,'id'=>$item->id]) }}">Tüm Kategoriler</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </ul>
                                                        </li>
                                                        @endforeach
                                                        <a href="{{ route('AllCategory') }}" class="dropdown-a-all-categoriy">Tüm Kategoriler</a>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Açılır Menü Sonu-->
                            </div>
                            <div class="keywords search-up">
                                <input type="hidden"  id="longitude_position" name="longitude_position" value="28">
                                <input type="hidden" id="latitude_position" name="latitude_position" value="41">
                                <div class="row">
                                    <div class="col-md-3 col-sm-4" style="padding: 0px;">
                                        <select id="inputState" name="type" class="form-control" style="min-height: 40px;">
                                            <option value="0" selected>Firma İsmine Göre Ara</option>
                                            <option value="1"> Yakınımda Ara</option>
                                        </select>
                                    </div>
                                    <div class="col-md-9 col-sm-8" style="padding: 0px;">
                                        <input id="q" onfocus="getGeoPosition()" type="text" name="q" value="{{old('q',request('q'))}}" style="    border: 1px solid;min-height: 40px;" class="form-control" placeholder="Sitede ara">
                                        <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="keywords search-bar-login" >
                                @guest
                                <a href="{{route('login-register')}}">   <span class=" login-search " >Giriş Yap</span> </a>
                                <a href="{{route('login-register')}}">  <span class=" register-search">Kayıt ol </span></a>
                                @endguest
                            </div>

                        </div>
                    </div> <!-- END .CONTAINER -->
                </form>
            </div> <!-- END .header-search-bar -->

            @yield('slider')
        </div> <!-- END .SEARCH and slide-section -->
        @else

            <div class="header-search slider-home">
                <div class="header-search-bar">
                    <form action="{{route('productSearch')}}" method="get">
                        <div class="container">
                            <div class="search-value">
                                <div class="keywords category-menu" >
                                    <!-- Açılır Menü Başlangıç-->
                                    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
                                        <div class="container" style="width: 100%;">
                                            <div class="collapse navbar-collapse">

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Açılır Menü Sonu-->
                                </div>
                                <div class="keywords search-up">
                                    <input type="hidden"  id="longitude_position" name="longitude_position" value="28">
                                    <input type="hidden" id="latitude_position" name="latitude_position" value="41">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-4" style="padding: 0px;">
                                            <select id="inputState" name="type" class="form-control" style="min-height: 40px;">
                                                <option value="0" selected>Tümünü Ara</option>
                                                @foreach( \App\Models\City::where('country_id','247')->get() as $city)
                                                    <option value="{{ $city->id }}"> {{ $city->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-9 col-sm-8" style="padding: 0px;">
                                            <input id="q" onfocus="getGeoPosition()" type="text" name="p" value="{{old('p',request('p'))}}" style="    border: 1px solid;min-height: 40px;" class="form-control" placeholder="Ürün, kategori veya marka ara">
                                            <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="keywords search-bar-login" >

                                </div>

                            </div>
                        </div> <!-- END .CONTAINER -->
                    </form>
                </div> <!-- END .header-search-bar -->

                @yield('slider')
            </div> <!-- END .SEARCH and slide-section -->
        @endif

        <div class="header-nav-bar home-slide">
            <div class="container-full">
                <nav>

                    <button><i class="fa fa-bars"></i></button>

                    <ul class="primary-nav list-unstyled left-menu-full">
                        <li class="{{applyActiveCssClass(['home'],'bg-color')}}" title="ANASAYFA"><a
                                    href="{{route('home')}}">ANASAYFA</a></li>
                        <li class="{{applyActiveCssClass(['products','product','productSearch','productCategory','productFirstCategory','productTag'],'bg-color')}}"><a
                                href="{{route('products')}}" title="Ürünler">Ürünler</a></li>
                       <!-- <li class="{{applyActiveCssClass(['virtualFairCategories','virtualFairCompany','virtualFairDetail','demandFormVirtualFair'],'bg-color')}}"><a
                                href="{{route('virtualFairCategories')}}" title="ONLINE FUARLAR">ONLINE FUARLAR</a></li>-->
                        <li class="{{applyActiveCssClass(['Maps','Maps'],'bg-color')}}"><a
                                href="{{route('Maps')}}" title=" ÜLKELER"> ÜLKELER</a></li>
                        <li class="{{applyActiveCssClass(['companies','company'],'bg-color')}}" ><a title="FİRMALAR"
                                    href="{{route('companies')}}">FİRMALAR</a></li>
                        <li class="{{applyActiveCssClass(['blogs','blog'],'bg-color')}}">
                            <a href="{{route('blogs')}}" title="FİRMA HABERLERİ">FİRMA HABERLERİ</a></li>
                        <!--<li class="{{applyActiveCssClass(['machines','machine'],'bg-color')}}"><a
                                href="{{route('machines')}}" title=" MAKİNELER"> MAKİNELER</a></li>-->
                        <li class="{{applyActiveCssClass(['packageNotLogin'],'bg-color')}}">
                            <a href="{{route('packageNotLogin')}}" title="PAKETLER">PAKETLER</a></li>
                        <li class="{{applyActiveCssClass(['demands','demand','demand_search_full_text_search'],'bg-color')}}">
                            <a href="{{route('demands')}}" title="TALEPLER">TALEPLER</a></li>
                        <li class="{{applyActiveCssClass(['faq','sss'],'bg-color')}}"><a
                                href="{{route('faq')}}" title=" SIK SORULAN SORULAR"> SSS</a></li>
                      <!--  <li class="{{applyActiveCssClass(['bids','bid'],'bg-color')}}"><a href="{{route('bids')}}" title="İHALELER">İHALELER</a>
                        </li>-->
                       <!-- <li class="{{applyActiveCssClass(['workingPerson','workingPersonDetail','ApplicationAddCv','ApplicationAddCvSearch'],'bg-color')}}"><a
                                href="{{route('workingPerson')}}" title=" KARİYER"> KARİYER</a></li>-->

                    </ul>
                </nav>
            </div> <!-- end .header-nav-bar -->
        </div> <!-- end .container -->
    </header> <!-- end #header -->
