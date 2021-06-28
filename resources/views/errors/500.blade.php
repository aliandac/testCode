<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beklenmedik Teknik Hata | {{config('app.name')}}</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="icon" type="image/png" href="/images/settings/{{App\Models\Settings::where('key','fav-icon')->firstOrFail()->value}}" />

</head>
<body style="background: radial-gradient(circle, rgba(254,254,254,0.6474964985994398) 0%, rgba(254,208,0,1) 100%, rgba(0,0,0,1) 100%);">
<div class="container maintenance">
    <div class="row">
        <div class="col-md-12"><h1>Beklenmedik bir hata oluştu, teknik ekibimiz hatayı en kısa sürede çözecektir</h1></div>
        <div class="col-md-12">
            <img src="{{asset('img/500.png')}}">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a class="gohome" href="tel:{{ replace(' ', '', setting('contact-phone')) }}">{{ setting('contact-phone') }}</a>
            <a class="gohome" href="mailto:{{ setting('contact-email') }}">{{ setting('contact-email') }}</a>
        </div>
    </div>
</div>

