@extends('frontend.layout.master')
@section('title','Firmalar - '.$country->country_code)
@section('meta')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <meta name="description" content="{{ $country->description }}">
    <meta name="keywords" content="{{ $country->keywords }}">
    <meta property="og:title" content="{{'Firmalar - '.$country->country_code}}">
    <meta property="og:url" content="{{url()->current()}}">
    <meta property="og:image" content="{{config('app.url').$country->image}}" />
    <meta name="twitter:description" content="{{ $country->description }}">
    <meta name="twitter:title" content="{{ 'Firmalar - '.$country->country_code }}">
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="{{url()->current()}}" />
    <meta property="twitter:img" content="{{config('app.url').$country->image }}" />
    <meta itemprop="name" content="{{'Firmalar - '.$country->country_code}}">
    <meta itemprop="description" content="{{ $country->description }}">
    <link rel="stylesheet" href="{{ asset('css/company.css') }}">
    <link rel='stylesheet' id='cityrama_qodef_google_fonts-css' href='https://fonts.googleapis.com/css?family=Montserrat%3A300%2C400%2C500%2C600%2C700%2C800&#038;subset=latin-ext&#038;ver=1.0.0' type='text/css' media='all'/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('css/cursor.css')}}">

@endsection
@section('content')
    @php use App\Services\LogActivity;LogActivity::addToLog('generalLog'); @endphp
@section('slider')
<div class="company-heading-view">
    <div class="general-view" style="background-image: url('{{asset($country->image)}}');background-size: cover;height: 50vh;width: 100%;">
    @include('frontend.layout.country')
@endsection

<div id="modal">
    <div v-if="modalStatus" @click="modalStatus=false" class="focus-bg">
        <button @click="modalStatus=false"><i class="fa fa-times"></i></button>
    </div>
</div>

<div class="portfolio" id="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="container" id="app">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <autocomplete>

                                </autocomplete>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="tab-pane active" id="company-portfolio">
                    <div class="portfolio-grid">
                        <div class="row">
                            <div class="container">
                                @php $ad = ad()->countryAd( 'UUL' , $get_country->id ); @endphp
                                @if ( $ad )
                                <div class="col-md-6">
                                    <div class="board horizontal">
                                        <a href="{{ $ad->url }}" title="{{ $ad->url }}">
                                            <img src="{{asset($ad->image)}}">
                                        </a>
                                    </div>
                                </div>
                                @endif

                                @php $ad = ad()->countryAd( 'UUR' , $get_country->id ); @endphp
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
                            @foreach($companies as $company)
                                <div class="col-lg-2 col-md-2 col-2 col-sm-3">
                                    <div class="card card-block card-block-background">
                                        <a class="link" href="{{route('MyCompanySlug',['slug'=> Str::slug($company->name) ,'id'=>$company->id])}}" title="{{$company->name}}">
                                            <div class="text-right companies-star" >{!! $company->star->render !!}</div>
                                            <img class="card-block-img" src="{{asset($company->image)}}" >
                                            <div class="portfolio-over">
                                                <div class="company-content">
                                                    @isset($company->country->image)
                                                        <img class="flag" src="{{asset($company->country->image)}}">
                                                    @endisset
                                                    <h6>
                                                        <a class="card-title"
                                                           href="{{route('MyCompanySlug',['slug'=> Str::slug($company->name) ,'id'=>$company->id])}}" title="{{$company->name}}">{{$company->name}}</a>
                                                    </h6>

                                                    <span class="company-categories">
                                                        @if(isset($company->category_id) && isset($company->category))
                                                            <a class="card-text"
                                                               href="{{route('MyCompanySlug',['slug'=> Str::slug($company->name) ,'id'=>$company->id])}}" title=" {{$company->category->name}}">
                                                                {{$company->category->name}}
                                                            </a>
                                                        @endif
                                                    </span>
                                                    <br>
                                                    <a href="{{route('MyCompanySlug',['slug'=> Str::slug($company->name) ,'id'=>$company->id])}}"title="Detay" style="color:red">
                                                        <button class="btn btn-info"
                                                                style="margin-top:10px;background:#e74c3c;color:white">
                                                            Detay
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                        @endforeach<!-- end .company-portfolio -->
                        </div>
                    </div> <!-- end .tab-pane -->
                </div> <!-- end .tab-content -->
            </div> <!-- end .page-content -->
            <div class="col-md-12 page paginate-number">
                {{$companies->appends(request()->all())->onEachSide(4)->render()}}
            </div>

            </div>

        <div class="container">
            <div class="row">
                @php $ad = ad()->countryAd( 'UAL' , $get_country->id ); @endphp
                @if ( $ad )
                <div class="col-md-6">
                    <div class="board horizontal">
                        <a href="{{ $ad->url }}" title="{{ $ad->url }}">
                            <img src="{{asset($ad->image)}}">
                        </a>
                    </div>
                </div>
                @endif

                @php $ad = ad()->countryAd( 'UAR' , $get_country->id ); @endphp
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
            <!-- end .main-grid layout -->
        </div> <!-- end .row -->

    </div> <!-- end .container -->

</div> <!-- end #page-content -->

@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>

    <script>

        Vue.component('autocomplete', {
            template: '<div class="companies-search"><input id="search" autocomplete="on" v-bind:class="focusBgOpen" type="text" placeholder="Anahtar kelimeler..." class="form-control" @focus="modal.modalStatus=true" v-model="searchquery" v-on:keyup="autoComplete" class="form-control"><div class="panel-footer" v-if="data_results.length"><ul class="list-group"><li>@{{total}} adet bulundu @{{time}} ms sürede</li><li class="list-group-item" v-for="result in data_results"><div class="left"><a v-bind:href="createHrefLink(result)"><img  v-bind:src="result._source.doc.image" alt=""></a></div><div class="right"><a class="title" v-html="show(result)" v-bind:href="createHrefLink(result)"></a><span class="category"><a>@{{result._source.doc.category}}</a></span> <i><a>@{{result._source.doc.city}} / @{{result._source.doc.country}}</a></i></div></li></ul></div></div>',
            data: function () {
                return {
                    searchquery: '',
                    data_results: [],
                    focusBgOpen: 'focus-bg-open focuson',
                    time: '',
                    total: ''

                }
            },
            methods: {
                autoComplete() {
                    this.data_results = [];
                    if (this.searchquery.length > 0) {
                        axios.post("{{route('fetch_companies_with_elastic_search')}}", {
                            _token: "{{csrf_token()}}",
                            query: this.searchquery
                        }).then(response => {
                            console.log(response.data.data);
                            this.time = response.data.time;
                            this.total = response.data.total;
                            this.data_results = response.data.data;
                        });
                    }
                },
                show(result) {
                    console.log(result);
                    if (typeof result.highlight == 'undefined')
                        return result._source.name;

                    return result.highlight.name[0];

                },
                createHrefLink(result) {
                    return "{{url('/firma')}}/" + result._source.doc.id
                }
            },

        });

        const app = new Vue({
            el: '#app',
        });

        const modal = new Vue({
            el: "#modal",
            data: {
                modalStatus: false
            }
        });

    </script>

    <script>

        let search = document.querySelector('#search');

        console.log(search);

        $array = [
            'Yazılım firmaları....',
            'Kadıköy yemek firmaları...',
            'Parke istanbul zeytinburnu...',
            'Elektrik firmaları...',
            'İzmir su firmaları...',
            'Tesktil üreticileri...',
            'İhracat ithalatcılar...',
            'Su tamiratı ankara',
            'Doğalgaz tamiratı...',
            'İhracat firmaları istanbul...'
        ];


        let $i = 0;
        let $index = 0;

        setInterval(function () {
            let $text = $array[$index];
            if ($text.length < $i) {
                $i = 0;
                $index++;
                if ($index === $array.length) {
                    $index = 0;
                    $i = 0;
                }
            } else {
                $i++;
            }
            search.setAttribute('placeholder', $text.substring(0, $i));
        }, 100);
    </script>
    <script>
        $(document).ready(function () {
            $('#search').focus('#modal', function (e) {
                $('.companies-search').removeClass('focuson');
                $('.companies-search').addClass('focusout');
                $(".companies-search").css({'z-index':'99999999999'});
                $("body").css({'overflow':'hidden'});
            }).focusout(function(){
                $('.companies-search').addClass('focuson');
                $('.companies-search').removeClass('focusout');
            });

            $('#modal').click(function() {
                app.data_results=[];
                $("body").css({'overflow':'auto'});
                $("#search").val('');
                $(".companies-search").css({'z-index':'999'});
            });

            $('body:not(.companies-search)').click(function(e){
                $(".panel-footer").hide();
            });
        });

    </script>

@endsection
