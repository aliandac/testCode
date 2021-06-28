<div class="col-md-3 col-md-pull-9 category-toggle">
    <button class="sidebar-open profile"><i class="fa fa-chevron-right"><span>MENÜ</span></i></button>
    <div class="page-sidebar company-sidebar">

        <ul class="company-category nav nav-tabs home-tab" role="tablist">
            @if(isset($company->getVirtualFair))
            <li>
                <a href=" https://tradeey.com/game/?id={{$company->getVirtualFair->getCategory[0]->category}}" target="_blank" title="Fotoğraflar"><i
                        class="fa fa-first-order"></i>Fuarı Görmek İçin Tıklayın</a>
            </li>
            @endif
            <div class="mobile-left">
                <li style="border-bottom: 1px solid #e9e9e9;text-align: center;">
                    <a href="{{route('MyCompanySlug',['slug'=> Str::slug($company->name) ,'id'=>$company->id])}}">
                            <i class="fa fa-home"></i>
                    </a>
                </li>
                <li style="border-bottom: 1px solid #e9e9e9;text-align: center;">
                    <a href="{{route('MyCompanyProduct',['slug'=> Str::slug($company->name) ,'id'=>$company->id])}}">

                            ÜRÜNLER

                    </a>
                </li>
                <li style="border-bottom: 1px solid #e9e9e9;text-align: center;">
                    <a href="{{route('MyCompanySlugAboutMe',['slug'=> Str::slug($company->name) ,'id'=>$company->id])}}">

                            HAKKIMIZDA

                    </a>
                </li>
                <li style="border-bottom: 1px solid #e9e9e9;text-align: center;">
                    <a href="{{route('MyCompanySlugDemand',['slug'=> Str::slug($company->name) ,'id'=>$company->id])}}">

                            TALEPLER

                    </a>
                </li>
                <li style="border-bottom: 1px solid #e9e9e9;text-align: center;">
                    <a href="{{route('MyCompanySlugDocument',['slug'=> Str::slug($company->name) ,'id'=>$company->id])}}">

                            DÖKÜMANLAR

                    </a>
                </li>
                <li style="border-bottom: 1px solid #e9e9e9;text-align: center;">
                    <a href="{{route('MyCompanyCv',['slug'=> Str::slug($company->name) ,'id'=>$company->id])}}">

                            İŞ İLANLARI

                    </a>
                </li>
            </div>
            <li>
                <a href="{{route('MyCompanySlugPhoto',['slug'=> Str::slug($company->name) ,'id'=>$company->id])}}" title="Fotoğraflar"><i
                        class="fa fa-cubes"></i>Firma Görselleri</a>
            </li>
            <li>
                <a href="{{route('MyCompanySlugEvent',['slug'=> Str::slug($company->name) ,'id'=>$company->id])}}"  title="Etkinlikler"><i
                        class="fa fa-list"></i>Etkinlikler</a>
            </li>
            <li>
                <a href="{{route('MyCompanySlugNews',['slug'=> Str::slug($company->name) ,'id'=>$company->id])}}"  title="Haberlerimiz"><i
                        class="fa fa-keyboard-o"></i>Haberler</a>
            </li>
            <li>
                <a href="{{route('MyCompanySlugVideo',['slug'=> Str::slug($company->name) ,'id'=>$company->id])}}" title=Video"><i
                        class="fa fa-play"></i>Video</a>
            </li>
            <li>
                <a href="{{route('MyCompanySlugContact',['slug'=> Str::slug($company->name) ,'id'=>$company->id])}}"  title="İletişim"><i
                        class="fa fa-envelope-o"></i>İletişim</a>
            </li>
                @if($company->FeedBackList->count() > 0)
                <li>
                    <a href="{{route('CompanyProfileFeedBackList',['slug'=> Str::slug($company->name) ,'id'=>$company->id])}}"  title="İletişim"><i
                            class="fa fa-eye"></i>Firma Şikayet Listesi</a>
                </li>
                @endif
            @if(!$isUserBelongsToThisCompany)
                <li>
                    <a href="{{route('MyCompanySlugOwner',['slug'=> Str::slug($company->name) ,'id'=>$company->id])}}"  title="Firma Sahibi Misiniz?">
                        <i class="fa fa-user"></i>Firma Sahibi Misiniz?
                    </a>
                </li>

            @endif

            @if(!$isUserBelongsToThisCompany)
            <li>
                <a href="{{route('MyCompanySlugSurvey',['slug'=> Str::slug($company->name) ,'id'=>$company->id])}}" title="Anket"><i
                        class="fa fa-keyboard-o"></i>Anket</a>
            </li>
                <li>
                    <a style="background: #DA4735" class="white-text" role="tab" href="#form-feed-back"
                       title="Bu Firmayı Şikayet Et ! " data-toggle="tab" id="modal-open" rel="modal:open">
                        Bu Firmayı Şikayet Et ! </a>
                </li>

            @endif
        </ul>

        <div id="form-feed-back" class="modal company-modal">
            @include('frontend.forms.form_feed_back')
        </div>

        <div class="contact-details">
            {{-- <h2>Bize Ulaşın</h2>--}}

            <address>
                {{$company->address}}
            </address>

            <ul class="list-unstyled">

                <li>
                    <strong>Telefon</strong>
                    <span>{{$company->first_phone}}</span>
                </li>

                <li>
                    <strong>Fax</strong>
                    <span>{{$company->fax_number}}</span>
                </li>

                <li>
                    <strong>E-mail</strong>
                    <span><a href="mailto:{{$company->email}}" title="mail">{{$company->email}}</a></span>
                </li>

            </ul>
        </div>

        <div class="opening-hours">
            <h2>Çalışma</h2>

            <ul class="list-unstyled w-100">
                <li>
                    <strong>Saatler :</strong>
                    <span
                        style="left:40%;">{{$company->work_start_time}} - {{$company->work_finish_time}}</span>
                </li>

                <li>

            </ul>

            <strong>Günler :</strong>
            <ul class="list-unstyled w-100">
                @foreach ( $company->working_days as $value )

                    <li style="padding:10px;"><span style="left:40%;">{{ $value }}</span></li>

                @endforeach
            </ul>


        </div>

    </div> <!-- end .page-sidebar -->

</div> <!-- end .main-grid layout -->
