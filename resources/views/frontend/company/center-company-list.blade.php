@extends('frontend.layout.master')

@section('content')

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
    <link rel="stylesheet" href="{{ asset('css/frontend/category/first-category.css') }}">
@endsection
@section('title',$company->name)

@section('slider')
    <div class="company-heading-view">

    </div>
@endsection

@php use App\Services\LogActivity;LogActivity::addToLog('centerCompanyList',$company->name,$company->id); @endphp
<div class="container page-breadcrumb" style="padding: 40px 25px;">
    <div class="row"><a href="{{route('home')}}" title="Anasayfa">Anasayfa</a> / <a href="{{route('MyCompanySlug',['slug'=> Str::slug($company->name) ,'id'=>$company->id])}}" title="{{$company->name}} ">{{$company->name}} </a> / Firmaları</div>
</div>


<div id="page-content">
    <div class="container">
        <div class="row">
            <div class="page-content bl-list">
                <div class="row">
                    <div class="col-md-12">
                        <hr>
                        @if ( $companies->count() )
                            @foreach($companies as $item)
                                <a href="{{route('MyCompanySlug',['slug'=> Str::slug($item->getCompany->name) ,'id'=>$item->getCompany->id])}}" title="{{$item->getCompany->name}}">
                                    <div class="card w-75 card-border">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-2 col-sm-2 col-xs-4">
                                                    @isset($item->getCompany->country->image)
                                                        <img class="flag" src="{{asset($item->getCompany->country->image)}}">
                                                    @endisset
                                                        <div class="text-right companies-stars" >{!! $item->getCompany->star->render !!}</div>
                                                    <img class="company-images" src="{{asset($item->getCompany->image)}}">
                                                </div>
                                                <div class="col-md-9 col-sm-10 col-xs-8">

                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <h5 class="card-title">{{$item->getCompany->name}}</h5>
                                                            <span class="card-text">
                                                                 @if(isset($item->getCompany->category_id) && isset($item->getCompany->category))
                                                                   <b> <a class="card-text"
                                                                       href="{{route('MyCompanySlug',['slug'=> Str::slug($item->getCompany->name) ,'id'=>$item->getCompany->id])}}" title="{{$item->getCompany->category->name}}">
                                                                {{$item->getCompany->category->name}}
                                                            </a> <br></b>
                                                                @endif
                                                            </span>
                                                            <span class="content-company">  {!! $item->getCompany->content !!}</span>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="left-content">{{ $item->getCompany->city->name }} / {{ $item->getCompany->country->name }}</span>
                                                            <span class="left-content">  <b>Mail :</b> <a href="mailto:{{$item->getCompany->email}}" title="email">{{$item->getCompany->email}}</a> </span>
                                                            <span class="button-detail" style="float: right"> <a href="{{route('MyCompanySlug',['slug'=> Str::slug($item->getCompany->name) ,'id'=>$item->getCompany->id])}}" title="{{$item->getCompany->name}}" class="btn btn-tradeey"> Detay</a> </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach <!-- end .company-portfolio -->
                        @else
                            <h4 style="text-align:center">
                                Bu kategoride henüz eklenmiş bir firma yok.
                                Firmanızı eklemek için <a style="color:#3498db" href="{{ route('store_new_company') }}"
                                                          title="Tradeey">tıklayınız</a>
                            </h4>
                        @endif
                    </div>
                </div>
                <div class="col-md-12 page paginate-number">
                    {{$companies->appends(request()->all())->onEachSide(4)->render()}}
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
                message("{{ session('message') }}", "{{ session('type') }}")
            </script>

        @elseif( count( $errors ) )
            <script>
                message("{{ $errors->first() }}", "{{ 'warning' }}")
            </script>
@endif


@endsection
