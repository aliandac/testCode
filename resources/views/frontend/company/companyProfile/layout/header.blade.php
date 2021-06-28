
@php use App\Services\LogActivity;LogActivity::addToLog('company',$company->name,$company->id); @endphp
<div class="company-heading-view">
    <div class="general-view" style="background: rgb(252,200,0);
background: linear-gradient(267deg, rgba(252,200,0,1) 35%, rgba(255,255,255,1) 100%);
                width: 100%;">
        <span></span> <!-- for dark-overlay on the bg -->
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-5">
                    <img src="{{asset($company->image)}}" alt="{{$company->name}}" style="width: 100%;">
                </div>
                <div class="col-md-9 col-sm-9 col-xs-7">
                    <div class="col-md-9 col-md-offset-3 company-name-header-col" >
                        <div class="text-right">
                            {!! $company->star->render !!} ({{$company->star->count}})
                        </div>
                        <h2 class="company-name-header">{{$company->name}}</h2>
                        <h5 class="company-kategory-header">
                            @isset($company->category)
                                <a href="{{ route('SubCategory',['title' => $company->category->seo_url,'id'=>$company->category->id]) }}" style="color: #fdfdfd;">{{$company->category->name}} </a>
                            @endisset
                        </h5>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="social-link text-right">
                            <ul class="list-inline">
                                @if($company->facebook)
                                    <li style="border: 1px solid #2050b3;    font-size: 20px;"><a style="color: #2050b3;" target="_blank"
                                                                            href="{{$company->facebook}}"
                                                                            title="facebook"><i
                                                class="fa fa-facebook"></i></a></li>
                                @endif

                                @if($company->twitter)
                                    <li style="border: 1px solid #00b9ff;    font-size: 20px;"><a style="color: #00b9ff;" target="_blank"
                                                                            href="{{$company->twitter}}"
                                                                            title="twitter"><i
                                                class="fa fa-twitter"></i></a></li>
                                @endif

                                @if($company->linkedin)
                                    <li style="border: 1px solid #007dbb;    font-size: 20px;"><a style="color: #007dbb;" target="_blank"
                                                                            href="{{$company->linkedin}}"
                                                                            title="linkedin"><i
                                                class="fa fa-linkedin"></i></a></li>
                                @endif

                                @if($company->instagram)
                                    <li style="border: 1px solid #405DE6;    font-size: 20px;"><a style="color: #405DE6;" target="_blank"
                                                                            href="{{$company->instagram}}"
                                                                            title="instagram"><i
                                                class="fa fa-instagram"></i></a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- END .general-view -->

</div>
