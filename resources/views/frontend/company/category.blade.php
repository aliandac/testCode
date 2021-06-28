@extends('frontend.layout.master')
@section('title',$category->category_title)
@section('meta')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <meta name="description" content="{{ $category->seo_description }}">
    <meta name="keywords" content="{{ $category->seo_keywords }}">
    <meta property="og:title" content="{{ $category->category_title }}">
    <meta property="og:url" content="{{url()->current()}}">
    <meta property="og:image" content="{{config('app.url').$category->image}}" />
    <meta name="twitter:description" content="{{ $category->seo_description }}">
    <meta name="twitter:title" content="{{ $category->category_title }}">
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="{{url()->current()}}" />
    <meta property="twitter:img" content="{{config('app.url').$category->image}}" />
    <meta itemprop="name" content="{{ $category->category_title }}">
    <meta itemprop="description" content="{{ $category->seo_description }}">
    <link rel="stylesheet" href="{{ asset('css/company.css') }}">
    <link rel='stylesheet' id='cityrama_qodef_google_fonts-css' href='https://fonts.googleapis.com/css?family=Montserrat%3A300%2C400%2C500%2C600%2C700%2C800&#038;subset=latin-ext&#038;ver=1.0.0' type='text/css' media='all'/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('css/cursor.css')}}">

    <link rel="stylesheet" href="{{asset('css/owl-carousel/owlcarousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl-carousel/owlcarousel/assets/owl.theme.default.min.css')}}">

@endsection
@section('content')
    @php use App\Services\LogActivity;LogActivity::addToLog('companyCategory',$category->category_title,$category->id); @endphp
@section('slider')
        <div class="company-heading-view">
            <div class="general-view" style="background-image: url('{{asset( $category->cover_image )}}'); background-size: cover; width: 100%;background-position: center;">
                <span></span> <!-- for dark-overlay on the bg -->
                <div class="container-fluid" style="-moz-backdrop-filter: blur(4px);-o-backdrop-filter: blur(4px);-webkit-backdrop-filter: blur(4px);backdrop-filter: blur(4px);background: #00000082;">
                    <div class="row">
                        <div class="company_title_responsive">
                            <div class="owl-carousel owl-theme owl-head" style="padding-top:50px;">
                                @foreach ( $slides as $value )
                                <div class="item">
                                    <div class="item-content">
                                    <i class="fa fa-info" alt="Sponsorlu İçerik" title="Sponsorlu İçerik"></i>
                                    <a href="{{ $value->url }}" title="{{ $value->title }}">
                                        <img class="cursor-pointer" src="{{ $value->image }}" alt="{{ $value->alt }}">
                                        <div class="item-info">
                                            <div class="item-title" title="{{ $value->title }}">{{ $value->title }}</div>
                                            <div class="item-click">İncele <i class="fa fa-chevron-right"></i></div>
                                        </div>
                                    </a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- END .general-view -->
        </div>
@endsection

<div class="container page-breadcrumb">
    <div class="row"><a href="{{route('home')}}" title="Anasayfa">Anasayfa</a> / {{$category->category_title}}</div>
</div>

<div id="modal">
    <div v-if="modalStatus" @click="modalStatus=false" class="focus-bg">
        <button @click="modalStatus=false"><i class="fa fa-times"></i></button>
    </div>
</div>


<div class="portfolio" id="page-content">
    <div class="container">
        <div class="row image_slider">

            @php $s = 0 @endphp
            @foreach ( $slides_down as $value )
                @if($s == 0)
                    <div class="col-md-4 col-sm-4 main_slider">

                        <a href="{{ $value->button_url }}">
                            <img width="100%" height="100%"  src="{{asset($value->image)}}"
                                 alt="{{ $value->alt }}"/>
                        </a>

                    </div>
                    @php $s++ @endphp
                @else
                    <div class="col-md-2 col-sm-4 counter_slider">
                        <a href="{{ $value->button_url }}">
                            <img width="100%" height="100%" src="{{asset($value->image)}}"
                                 alt="{{ $value->alt }}"/>
                        </a>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    <div class="container-fluid">


        <div class="container-fluid">
            <div class="col-md-12 ">
                <div class="tab-pane active" id="company-portfolio">
                    <div class="portfolio-grid">
                        <div class="row">
                            <div class="container">
                                @php $ad = ad()->categoryAd('FKUL', request()->id); @endphp
                                @if ( $ad )
                                <div class="col-md-6">
                                    <div class="board horizontal">
                                        <a href="{{ $ad->url }}" title="{{ $ad->url }}">
                                            <img src="{{asset($ad->image)}}">
                                        </a>
                                    </div>
                                </div>
                                @endif

                                @php $ad = ad()->categoryAd('FKUR', request()->id); @endphp
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
                            @if ( $companies->count() )
                            @foreach($companies as $company)
                                <div class="col-lg-2 col-md-2 col-2 col-xs-6 col-sm-3">
                                    <div class="card card-block card-block-background">
                                        <a class="link" href="{{route('MyCompanySlug',['slug'=> Str::slug($company->name) ,'id'=>$company->id])}}" title="{{$company->name}}">
                                            <div class="text-right companies-star" >{!! $company->star->render !!}</div>
                                            <img  class="card-block-img" src="{{asset($company->image)}}">
                                            <div class="portfolio-over">
                                                <div class="company-content">
                                                    @isset($company->country->image)
                                                        <img class="flag" src="{{asset($company->country->image)}}">
                                                    @endisset
                                                    <h6>
                                                        <a class="card-title" href="{{route('MyCompanySlug',['slug'=> Str::slug($company->name) ,'id'=>$company->id])}}" title="{{$company->name}}">{{$company->name}}</a>
                                                    </h6>
                                                    <span class="company-categories">
                                                        @if(isset($company->category_id) && isset($company->category))
                                                            <a class="card-text"
                                                               href="{{route('MyCompanySlug',['slug'=> Str::slug($company->name) ,'id'=>$company->id])}}" title="{{$company->category->name}}">
                                                                {{$company->category->name}}
                                                            </a>
                                                        @endif
                                                    </span>
                                                    <br>
                                                    <a href="{{route('MyCompanySlug',['slug'=> Str::slug($company->name) ,'id'=>$company->id])}}"style="color:red" title="Detay">
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
                            @endforeach <!-- end .company-portfolio -->
                            @else
                            <h4 style="text-align:center">
                                Bu kategoride henüz eklenmiş bir firma yok.
                                Firmanızı eklemek için <a style="color:#3498db" href="{{ route('store_new_company') }}" title="Tradeey">tıklayınız</a>
                            </h4>
                            @endif
                        </div>
                    </div> <!-- end .tab-pane -->
                </div> <!-- end .tab-content -->
            </div> <!-- end .page-content -->
            <div class="col-md-12 page paginate-number">
                {{$companies->appends(request()->all())->onEachSide(4)->render()}}
            </div>
            <div class="row">
                <div class="col-md-6">
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
                <div class="col-md-6">
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
            </div>

        </div>
            <div class="container">
                <div class="row">
                    @php $ad = ad()->categoryAd('FKAL', request()->id); @endphp
                    @if ( $ad )
                    <div class="col-md-6">
                        <div class="board horizontal">
                            <a href="{{ $ad->url }}" title="{{ $ad->url }}">
                                <img src="{{asset($ad->image)}}">
                            </a>
                        </div>
                    </div>
                    @endif

                    @php $ad = ad()->categoryAd('FKAR', request()->id); @endphp
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

<script src="{{asset('css/owl-carousel/vendors/highlight.js')}}"></script>
<script src="{{asset('css/owl-carousel/js/app.js')}}"></script>

<script src="{{asset('css/owl-carousel/vendors/jquery.min.js')}}"></script>
<script src="{{asset('css/owl-carousel/owlcarousel/owl.carousel.js')}}"></script>

@endsection
