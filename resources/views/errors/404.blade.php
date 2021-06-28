 <script>

     setTimeout(function(){
         window.location.href = '/';
     }, 5000);


 </script>

<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sayfa Bulunamadı | {{config('app.name')}}</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="icon" type="image/png" href="/images/settings/{{App\Models\Settings::where('key','fav-icon')->firstOrFail()->value}}" />

</head>
<body style="background: radial-gradient(circle, rgba(254,254,254,0.6474964985994398) 0%, rgba(254,208,0,1) 100%, rgba(0,0,0,1) 100%);">
<div class="container maintenance">
    <div class="row">
        <div class="col-md-12"><h1>Aradığınız sayfa değişmiş veya kaldırılmış olabilir :(</h1></div>
        <div class="col-md-12">
            <img src="{{asset('img/404.png')}}">
        </div>
        <div class="col-md-12"><p>
                <i class="fa fa-chevron-down"></i>
            </p></div>
        <div class="col-md-12"><a class="gohome" href="{{route('home')}}">Anasayfaya Dön</a></div>
    </div>
</div>
<div class="container homepage-highlight">
    <div class="row">
        @foreach ( \App\Models\Highlight::get() as $value )
            <div class="col-md-2 col-sm-4 col-xs-6">
                <a href="{{ $value->url }}">
                    <div class="highlight-item">
                        <img src="{{asset($value->image)}}" alt="{{ $value->alt }}">
                        <span class="title">{{ $value->title }}</span>
                        <div class="button">{{ $value->button_text }}</div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
