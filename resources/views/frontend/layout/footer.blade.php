@if(!session('policy')  )
<div class="row" style="    z-index: 999999999;
    position: fixed;
    bottom: 3px;
    font-size: 13px;
    background-color: white;
    left: 10px;
    font-weight: bold;">
    <div class="col-md-12">
        <form role="form" enctype="multipart/form-data" action="{{ route('storeSessionData') }}" method="POST" >
            @csrf
            <input type="hidden" name="policy" value="policy" >
            <span style="    font-size: 10px;">
        Sitemizde ve uygulamamızda çerezler kullanılmaktadır.  <a href="https://tradeey.com/web-sitesi-ceraz-politikasi" target="_blank" style="color: red">Buradan</a> İnceleye Bilirsiniz.. <button type="submit" style="color: deepskyblue"> Kapat </button> <br>
</span>
        </form>
    </div>
</div>
@endif

<div class="social-media-share">
    <i class="fa fa-share-alt">
        <div class="socials">
            <a target="_blank" title="facebook" href=https://www.facebook.com/sharer.php?u={{ request()->url() }}><i class="fa fa-facebook"></i></a>
            <a target="_blank" title="twitter" href="https://twitter.com/intent/tweet?url={{ request()->url() }}"><i class="fa fa-twitter"></i></a>
            <a target="_blank" title="whatsaap" href="https://api.whatsapp.com/send?phone=&text={{ request()->url() }}&source=&data=" data-action="share/whatsapp/share"><i class="fa fa-whatsapp"></i></a>
        </div>
    </i>
</div>
<footer id="footer">

    <div class="welcome-tradeey">
        <i class="fa fa-envelope"><a href="{{route('welcomeTradeey')}}"></a></i>
        <div class="messagebox"><a href="{{ route('welcomeTradeey') }}">tradeey.com sizi arasın<b>formu doldur!</b></a></div>
    </div>

    <!--<div class="main-footer" style="background:url({{asset('img/footer-bg.jpg')}});background-position: top center;background-size: cover;">-->
    <div class="main-footer" style="background-color: black;">
        <!--<div style="position:absolute;top:0;width: 100%;"><img src="{{asset('img/footer-bg-light.png')}}" style="width: 20%;margin: auto;display: block;" alt="{{config('app.name')}}"> </div>-->
        <!--<div style="position:absolute;bottom:0;width: 100%;"><img src="{{asset('img/footer-bg-bottom.png')}}" style="width: 100%;margin: auto;display: block;" alt="{{config('app.name')}}"> </div>-->
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                <div class="col-md-6 col-sm-6 ">
                    {{-- <div class="popular-categories">

                     </div>--}}
                    <ul style="margin:0;padding:0;">
                        <li style="line-height: 1.5"><h3>Hakkımızda</h3>
                          {!!  App\Models\Settings::where('key','contact')->firstOrFail()->value !!}
                        </li>
                    </ul>
                </div> <!-- end Grid layout-->
                <div class="col-md-6 col-sm-6  footer_comparate">
                    <ul style="margin:0;padding:0;">
                        <li>
                            <h3>Kurumsal</h3>
                        </li>
                        <li><a href="{{route('policy')}}" title="Yasal Uyarı ve Bildiri" >Yasal Uyarı ve Bildiri</a></li>
                        <li><a href="{{route('personal_data_security')}}" title="Kişisel Verilerin Korunması ve İşlenmesi">Kişisel Verilerin Korunması ve İşlenmesi</a></li>
                        <li><a href="{{route('our_policy')}}" title="Politikamız">Politikamız</a></li>
                        <li><a href="{{route('term_of_use')}}" title="Site Kullanım Şartları ve Uyarılar">Site Kullanım Şartları ve Uyarılar</a></li>
                        <li><a href="{{route('terms_used_foreign_trade')}}" title="Dış Ticarette Kullanılan Terimler">Dış Ticarette Kullanılan Terimler</a></li>
                        <li><a href="{{route('privacySecurity')}}" title="{{App\Models\Settings::where('key','privacy_security_title')->firstOrFail()->value}}">{{App\Models\Settings::where('key','privacy_security_title')->firstOrFail()->value}}</a></li>
                        <li><a href="{{route('salePrivacy')}}" title="{{App\Models\Settings::where('key','sale_privacy_title')->firstOrFail()->value}}">{{App\Models\Settings::where('key','sale_privacy_title')->firstOrFail()->value}}</a></li>
                        <li><a href="{{route('warrantyAndReturn')}}" title="{{App\Models\Settings::where('key','warranty_and_return_title')->firstOrFail()->value}} ">{{App\Models\Settings::where('key','warranty_and_return_title')->firstOrFail()->value}} </a></li>
                        <li><a href="{{route('deliveryCondition')}}" title="{{App\Models\Settings::where('key','delivery_condition_title')->firstOrFail()->value}}">{{App\Models\Settings::where('key','delivery_condition_title')->firstOrFail()->value}}</a></li>
                        <li><a href="{{route('orderChase')}}" title="{{App\Models\Settings::where('key','order_chase_title')->firstOrFail()->value}}">{{App\Models\Settings::where('key','order_chase_title')->firstOrFail()->value}}</a></li>
                        <li><a href="{{route('transferNotification')}}" title="{{App\Models\Settings::where('key','transfer_notification_title')->firstOrFail()->value}}">{{App\Models\Settings::where('key','transfer_notification_title')->firstOrFail()->value}}</a></li>
                        {{-- <li><a href="{{route('website_template')}}">Web Sitesi Şablonları</a></li> --}}

                    </ul>
                </div> <!-- end Grid layout-->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                <div class="col-md-6 col-sm-6  footer-popular-brands" >

                    <ul style="line-height: 1.5;margin:0;padding:0;">
                        <h3>Popüler Markalar</h3>
                        @foreach($popularCompanies as $popularCompany)
                        <li><a href="{{route('MyCompanySlug',['slug'=> Str::slug($popularCompany->name) ,'id'=>$popularCompany->company_id])}}" title="{{$popularCompany->name}}">{{$popularCompany->name}}</a></li>
                        @endforeach


                    </ul>
                </div> <!-- end Grid layout-->
                <div class="col-md-6 col-sm-6  clearfix footer-popular-categories">
                    <ul style="margin:0;padding:0;">
                        <h3>Popüler Kategoriler</h3>
                        @foreach($popularCategories as $popularCategory)
                        <li><a href="{{route('companies-category',$popularCategory->id)}}" title="{{$popularCategory->name}}">{{$popularCategory->name}}</a></li>
                        @endforeach

                    </ul>
                </div> <!-- end .popular-categories-->
                    </div>
                </div>
            </div> <!-- end Grid layout-->


                <div class="row separator">
                    <div class="col-md-6">
                        <div class="row">
                    <div class="col-md-6 col-sm-6 ">
                        <div class="">
                            <h3>İletişim</h3>

                            <p>Telefon: {{ $contact['phone'] }}</p>
                            <a href="mailto:{{ $contact['email'] }}" title="email">Email: {{ $contact['email'] }}</a>
                            <ul class="list-inline" style="margin:0;padding:0;">
                                <li><a target="_blank" href="{{ $contact['facebook'] }}" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a target="_blank" href="{{ $contact['twitter'] }}" title="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a target="_blank" href="{{ $contact['instagram'] }}" title="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a target="_blank" title="whatsapp" href="https://api.whatsapp.com/send?phone={{ replace(' ','',$contact['phone']) }}&text=&source=&data="><i class="fa fa-whatsapp"></i></a></li>
                                <li><a target="_blank" title="youtube" href="{!!  App\Models\Settings::where('key','youtube')->firstOrFail()->value !!}"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div> <!-- end .newsletter-->
                    </div>
                    <div class="col-md-6 col-sm-6 footer-fast-access">
                        <div class="">
                            <ul style="margin:0;padding:0;">
                                <h3>Hızlı Erişim</h3>
                                <li><a title="Hakkımızda" href="{{route('about_me')}}">Hakkımızda</a></li>
                                <li><a title="Şirket Bilğileri" href="{{route('companyInfo')}}">Şirket Bilğileri</a></li>
                                <li><a title="SSS" href="{{route('faq')}}">SSS</a></li>
                                <li><a title="Firmalar" href="{{route('companies')}}">Firmalar</a></li>
                                <li><a title="Blog" href="{{route('general-news')}}">Blog</a></li>
                                <li><a title="Etkinlikler" href="{{route('events')}}">Etkinlikler</a></li>
                                <li><a title="İletişim" href="{{route('contact-index')}}">İletişim</a></li>
                                @auth
                                @if(isset(auth()->user()->company))
                                <li><a title="Fiyatlandırma" href="{{route('packages')}}">Fiyatlandırma</a></li>
                                    @endif
                                    @endauth
                            </ul>
                        </div>
                    </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                    <div class="col-md-6 col-sm-6 footer-activity">
                        <ul style="margin:0;padding:0;">
                            <h3>Bu Haftaki Etkinlikler</h3>
                            @foreach($activityOfWeeks as $activityOfWeek)
                                <li><a title="{{$activityOfWeek->name}}" href="{{route('event-detail',$activityOfWeek->id)}}">{{$activityOfWeek->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="newsletter footer-mail">
                            <h3>Bültene Abone olun </h3>
                            <form action="{{route('subscribe')}}" name="Form" onsubmit="return validateForm()"  method="POST">
                                @csrf
                                <input type="Email" name="email" placeholder="E-posta adresiniz">
                                <button><i class="fa fa-plus"></i></button>
                            </form>
                        <img src="{{asset('img/payment.png')}}" alt="{{config('app.name')}}" style="width:100%;max-width: 280px;margin: 7px auto;display: block;">
                        <img src="{{asset('img/yasad_logo.png')}}" alt="{{config('app.name')}}" style="max-width: 260px;margin: 7px auto;display: block;">
                        </div>
                    </div>
                        </div>
                    </div>

            </div> <!-- end Grid layout-->
        </div> <!-- end .row -->
    </div> <!-- end .container -->
    </div> <!-- end .main-footer -->


    <div class="copyright pt-3">
        <div class="container">
            <p>COPYRIGHT © <a href="/" title="tradeey" >TRADEEY</a> BİR <a target="_blank" title="NACAR REKLAM PAZARLAMA İÇ VE DIŞ TİC. LTD. ŞTİ." href="https://www.nacarforeigntrade.com/">NACAR REKLAM PAZARLAMA İÇ VE DIŞ TİC. LTD. ŞTİ. </a>KURULUŞUDUR.</p>

        </div> <!-- END .container -->
    </div> <!-- end .copyright-->
</footer> <!-- end #footer -->


</div> <!-- end #main-wrapper -->

<!-- Scripts -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
<script src="{{asset('js/jquery.ba-outside-events.min.js')}}"></script>
<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="{{asset('js/gomap.js')}}"></script>
<script type="text/javascript" src="{{asset('js/gmaps.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.js')}}"></script>
<script src="{{asset('js/jquery.placeholder.min.js')}}"></script>
@yield('vue')
<script src="{{asset('js/select2.min.js')}}"></script>
<script src="{{asset('js/map/geo.position.js')}}"></script>
<script>

    function getGeoPosition() {
        let geoPosition=new GeoPosition('latitude_position','longitude_position');
        geoPosition.geoPosition()
    }
    function geoPoint() {
        let geoPosition=new GeoPosition('latitude_position','longitude_position');
        geoPosition.geoPosition()
    }
</script>
<script>

    // Get the input field
    var input = document.querySelector("#q,#search");

    // Execute a function when the user releases a key on the keyboard
    input.addEventListener("keyup", function(event) {
        // Number 13 is the "Enter" key on the keyboard
        if (event.keyCode === 13) {
            // Cancel the default action, if needed
            // Trigger the button element with a click
            this.parent.form.submit();
        }
    });
</script>

{{--<script src="{{asset('js/media.match.min.js')}}"></script>--}}
<script type="text/javascript"
        src="{{ asset('translate_code/js/translate/test.js') }}"></script>

<script src="{{asset('js/scripts.js')}}"></script>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'tr',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
            autoDisplay: false,
            includedLanguages: ''
        }, 'google_translate_element');
    }
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-148345414-3"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-148345414-3');
</script>

<script language="Javascript">
    function validateForm() {
        var a = document.forms["Form"]["email"].value;
        if (a == null || a == "") {
            return false;
        }
    }
</script>

@yield('footer')
@yield('scripts')

</body>
</html>
