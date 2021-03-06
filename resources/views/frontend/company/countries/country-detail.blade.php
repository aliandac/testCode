@extends('frontend.layout.master')

@section('meta')
<meta name="description" content="{{ $country->description }}">
<meta name="keywords" content="{{ $country->keywords }}">
<meta property="og:title" content="{{ $category->title.' - '.$country->country_code }}">
<meta property="og:url" content="{{url()->current()}}">
<meta property="og:image" content="{{ config('app.url').$country->image }}" />
<meta name="twitter:description" content="{{ $country->description }}">
<meta name="twitter:title" content="{{ $category->title.' - '.$country->country_code }}">
<meta name="twitter:card" content="summary"/>
<meta name="twitter:site" content="{{url()->current()}}" />
<meta property="twitter:img" content="{{ config('app.url').$country->image }}" />
<meta itemprop="name" content="{{ $category->title.' - '.$country->country_code }}">
<meta itemprop="description" content="{{ $country->description }}">
@endsection

@section('title',$category->title.' - '.$country->country_code)
@section('content')
    @php use App\Services\LogActivity;LogActivity::addToLog('generalLog'); @endphp
@section('slider')
<div class="company-heading-view">
    <div class="general-view" style="background-image: url('{{asset($country->image)}}');background-size: cover;height: 50vh;width: 100%;">
    @include('frontend.layout.country')
@endsection
<div id="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-push-3">
                <div class="page-content">
                    <div class=" view-switch">
                        <div class="tab-content">
                            <div class="tab-pane active" id="category-book" style="background:#fff;">
                                <div class="country-detail-pagination"><a href="{{route('home')}}">Anasayfa</a> /
                                    <a href="/firmalar?country_code={{$country->country_code}}" title="{{$parent->title}}">{{$country->country_code}}</a> /
                                    {{$parent->title}}
                                </div>

                                <h2>{{$parent->title}}</h2>
                                <p>{!! $country->content !!}</p>

                            </div> <!-- end .tabe-pane -->

                        </div> <!-- end .tabe-content -->


                    </div> <!-- end .product-details -->
                </div> <!-- end .page-content -->
            </div>

            <div class="col-md-3 col-md-pull-9 category-toggle">

                <button class="sidebar-open"><i class="fa fa-chevron-right"><span>MEN??</span></i></button>

                <div class="page-sidebar">
                    <!-- Category accordion -->
                    <div id="categories">
                        <div class="single-category">
                            <ul class="nav nav-tabs accordion-tab" role="tablist">
                                <!-- category start -->
                                @if( request()->segment(4) )
                                    @php
                                        $active = request()->segment(4);
                                    @endphp
                                @else
                                    @php($active = "")
                                @endif
                                @foreach( $categories->where('slug',request()->segment(3)) as $value )
                                    @foreach( $value->parent as $value )
                                        <li class="{{ ( $value->slug == $active ) ? 'active':'' }}">

                                            <a href="{{route('country-profil-detail',
                                                                        [
                                                                        'slug'    => $category->slug,
                                                                        'parent'=>$value->slug,
                                                                        'code'=>$country->country_code])}}" title=" {{$value->title}}">

                                                {{$value->title}}
                                            </a>
                                        </li>
                                    @endforeach
                                @endforeach
                                <!-- category end-->
                            </ul>
                        </div> <!-- end .accordion -->
                    </div> <!-- end #categories -->

                    <div class="board">
                        <img src="{{asset('images/banner/square-banner.png')}}" alt="">
                    </div>


                </div> <!-- end .page-sidebar -->
            </div> <!-- end grid layout-->
        </div> <!-- end .row -->
    </div> <!-- end .container -->
</div>
@endsection
