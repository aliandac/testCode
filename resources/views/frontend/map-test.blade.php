@extends('frontend.layout.master')

@section('content')

@section('meta')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <meta name="description" content="{{App\Models\Settings::where('key','map-view-description')->firstOrFail()->value}}">
    <meta name="keywords" content="{{App\Models\Settings::where('key','map-view-keyword')->firstOrFail()->value}}">
    <meta property="og:title" content="{{App\Models\Settings::where('key','map-view-title')->firstOrFail()->value}}">
    <meta property="og:url" content="{{url()->current()}}">
    <meta property="og:image" content="{{ asset(setting('map-view-image')) }}" />
    <meta name="twitter:description" content="{{App\Models\Settings::where('key','map-view-description')->firstOrFail()->value}}">
    <meta name="twitter:title" content="{{ App\Models\Settings::where('key','map-view-title')->firstOrFail()->value }}">
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="{{url()->current()}}" />
    <meta property="twitter:img" content="{{ asset(setting('map-view-image')) }}" />
    <meta itemprop="name" content="{{App\Models\Settings::where('key','map-view-title')->firstOrFail()->value}}">
    <meta itemprop="description" content="{{App\Models\Settings::where('key','map-view-description')->firstOrFail()->value}}">

    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection
@section('title',App\Models\Settings::where('key','map-view-title')->firstOrFail()->value)


<div id="page-content">
    <div class="container">
        <div class="page-content bl-list">
            <div class="row" style="margin-top: 10px">
                <div class="col-md-12">
                    <h2 class="text-center" style="    padding-top: 60px;"><strong>ÜLKELERE GÖRE YEREL ve ULUSLARARASI ÜRETİCİ, SATICI, HİZMET FİRMALARINI İNCELE</strong></h2>
                    <p class="text-center">Ülke profili, pazar bilgileri ve İşadamlarının Pazarda Dikkat Etmesi Gereken Hususları görmek için ülke seç</p>
                </div>
                <div class="col-md-12">
                    <input type="text" id="myInput" class="homepage-country-search" onkeyup="myFunction()" placeholder="Ülke Adı Giriniz..." style="height:50px !important;" autocomplete="off">
                </div>
                <div class="col-md-12 homepage-country-list">



                    <ul id="myUL">
                        <ul id="myUL">
                            @foreach( App\Models\Country::all() as $value )
                                <li>
                                    <a href="{{ route('companies-country',$value->lower_code) }}" title="{{$value->name}}">
                                        <img src="{{ asset($value->image) }}" alt="{{$value->name}}"> {{$value->name}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>


                    </ul>


                    <script>
                        function myFunction() {
                            // Declare variables
                            var input, filter, ul, li, a, i, txtValue;
                            input = document.getElementById('myInput');
                            filter = input.value.toUpperCase();
                            ul = document.getElementById("myUL");
                            li = ul.getElementsByTagName('li');

                            // Loop through all list items, and hide those who don't match the search query
                            for (i = 0; i < li.length; i++) {
                                a = li[i].getElementsByTagName("a")[0];
                                txtValue = a.textContent || a.innerText;
                                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                    li[i].style.display = "";
                                } else {
                                    li[i].style.display = "none";
                                }
                            }
                        }
                    </script>

                </div>
                <div class="col-md-12 homepage-country-map" style="margin-top:10px;">
                    @include('frontend.map.map')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<link rel="stylesheet" href="{{asset('js/temp/toastr.min.css')}}">

@section('footer')
<script src="{{asset('js/temp/toastr.min.js')}}"></script>
<script src="{{asset('/js/toastr-app.js')}}"></script>

@if ( session()->has('message') )
<script>
    message("{{ session('message') }}","{{ session('type') }}")
</script>

@elseif( count( $errors ) )
<script>
    message("{{ $errors->first() }}","{{ 'warning' }}")
</script>
@endif


@endsection
