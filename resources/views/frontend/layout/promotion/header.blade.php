<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/promotion/assets/css/style.css')}}">
    <link rel="shortcut icon" type="image/png" href="/images/settings/{{App\Models\Settings::where('key','fav-icon')->firstOrFail()->value}}"/>
    @yield('meta')
</head>
<body>
@php use App\Services\LogActivity;LogActivity::addToLog('promotion'); @endphp

    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{route('landing-promotion')}}"><img src="{{asset('css/promotion/assets/img/logo.png')}}" height="45px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample03">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" title="Tradeey'e Git" href="{{ route('home') }}">Tradeey'e Git</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" title="Reklam Alanlarımız" href="{{ route('promotion-banners') }}">Reklam Alanlarımız</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" title="Çözümlerimiz" href="" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Çözümlerimiz</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown03">
                            <a class="dropdown-item" title="Tradeey'de Reklam" href="{{route('landing-promotion','#tradeeyreklam')}}">Tradeey'de Reklam</a>
                            <a class="dropdown-item" title="Web Tasarım ve Tanıtım" href="{{route('landing-promotion','#webtasarim')}}">Web Tasarım ve Tanıtım</a>
                            <a class="dropdown-item" title="Banner Reklamları" href="{{route('landing-promotion','#bannerreklam')}}">Banner Reklamları</a>
                            <a class="dropdown-item" title="Google Reklamları" href="{{route('landing-promotion','#googlereklam')}}">Google Reklamları</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link register-button" title="Reklam Ver" href="{{ route('landing-promotion-form') }}">Reklam Ver</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

