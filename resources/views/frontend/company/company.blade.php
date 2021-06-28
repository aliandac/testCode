@extends('frontend.layout.master')
@section('title', $company->name)

@section('meta')
    <link rel="stylesheet" href="{{asset('css/cursor.css')}}">
    <link rel="stylesheet" href="{{asset('css/tradeeystyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/company-slider.scss')}}">
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css"/>
    <link rel="stylesheet" href="{{asset('js/temp/toastr.min.css')}}">
@endsection

@section('content')
    @php use App\Services\LogActivity;LogActivity::addToLog('company',$company->name,$company->id); @endphp
@section('slider')
    <div class="company-heading-view">
        <div class="general-view" style="background: rgb(0,0,0);
            background: radial-gradient(circle, rgba(0,0,0,0.6587009803921569) 0%, rgba(0,0,0,0.8379726890756303) 55%);
                width: 100%;">
            <span></span> <!-- for dark-overlay on the bg -->
            <div class="container">
                <div class="row company-profile-head">
                    <div class="col-md-3 col-sm-3 col-xs-5">
                    <img src="{{asset($company->image)}}">
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-7">
                        <h2 style="font-weight: bold;color:white;">{{$company->name}}</h2>
                        <h5 style="text-transform: uppercase;font-family: 'Raleway', sans-serif;">
                            @isset($company->category)
                                <a style="color: #fdfdfd;">{{$company->category->name}} </a>
                            @endisset
                        </h5>
                    </div>

                    <div class="col-md-3 col-sm-3 company-profile-buttons">
                        @if(!$isUserBelongsToThisCompany)
                            <a href="#company-business" title="Firma Sahibi Misiniz?" role="tab" data-toggle="tab">
                                Firma Sahibi Misiniz?
                            </a>
                        @endif
                            <a href="#survey" role="tab" title="Anket" data-toggle="tab">Anket</a>
                        @if(!$isUserBelongsToThisCompany)
                                <a style="background: #DA4735 !important;color:#fff;" role="tab" href="#form-feed-back" title="Bu Firmayı Şikayet Et !" data-toggle="tab" id="modal-open" rel="modal:open"> Bu Firmayı Şikayet Et ! </a>
                        @endif
                    </div>
                </div>
            </div>
        </div> <!-- END .general-view -->

    </div>
@endsection
<div id="popup-main">
    <div id="pop-up">
        <i id='close-btn' class="fa fa-close"></i>
        <img src="{{asset($company->image)}}">
        <h4>{{$company->name}} anketine katılmak ister misiniz ?</h4>
        <a id="survey-button" class="popup-survey" href="#survey" title="ANKET"  role="tab" data-toggle="tab">ANKET</a>
    </div>
</div>

<div id="page-content">
    <div class="container">

        <div class="row">
            <div class="col-md-9 col-md-push-3">
                <div class="page-content company-profile">

                    <div class="tab-content">
                        <div class="tab-pane active" id="company-profile">
                            <div class="social-link text-right">
                                <ul class="list-inline">
                                    @if($company->facebook)
                                        <li><a target="_blank" href="{{$company->facebook}}" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                    @endif

                                    @if($company->twitter)
                                        <li><a target="_blank" href="{{$company->twitter}}" title="twitter"><i class="fa fa-twitter"></i></a></li>
                                    @endif

                                    @if($company->linkedin)
                                        <li><a target="_blank" href="{{$company->linkedin}}" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    @endif

                                    @if($company->instagram)
                                        <li><a target="_blank" href="{{$company->instagram}}" title="instagram"><i class="fa fa-instagram"></i></a></li>
                                    @endif
                                </ul>
                            </div>

                            <div class="text-right">
                                {!! $company->star->render !!} ({{$company->star->count}})
                            </div>

                            <div class="company-text">
                                <p>
                                    {!! $company->content !!}
                                </p>
                                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                <ins class="adsbygoogle"
                                     style="display:block; text-align:center;"
                                     data-ad-layout="in-article"
                                     data-ad-format="fluid"
                                     data-ad-client="ca-pub-7649491310163135"
                                     data-ad-slot="9238758940"></ins>
                                <script>
                                    (adsbygoogle = window.adsbygoogle || []).push({});
                                </script>
                            </div> <!-- end company-text -->
                            <div class="company-text" style="min-height: 300px;">
                                <span>Etiketler</span>
                                <ul class="tags-company">
                                @foreach ( $company->tags_as_array  as $value)
                                        <li class="col-md-2">
                                        <a href="{{route('company-tag',['tags'=>$value])}}" title="{{$value}}">{{$value}}</a>
                                        </li>
                                @endforeach
                                </ul>
                            </div> <!-- end company-text -->
                        </div> <!-- end .tab-pane -->

                        <div class="tab-pane" id="company-product">
                            <div class="company-product">
                                <h2 class="mb30">Fotoğraflarımız</h2>
                                <div class="row">
                                    <section id="gallery">
                                        <div id="image-gallery">
                                            @foreach($companyImages as $image)
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 image">
                                                    <div class="img-wrapper">
                                                        <a href="{{asset($image->url)}}" title="{{$image->name}}"><img src="{{asset($image->url)}}" class="img-responsive" alt="{{$image->name}}"></a>
                                                        <div class="img-overlay">
                                                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div><!-- End image gallery -->
                                    </section>
                                </div> <!-- end .row -->
                            </div> <!-- end .company-product -->
                        </div> <!-- end .tab-pane -->

                        <div class="tab-pane" id="company-video">
                            <div class="company-video">
                                <h2 class="mb30">Video</h2>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>
                                            <a target="_blank" href="{!! $company->video_url !!}" title="Videoya Git" style="padding:2%;border:1px solid blue;">Videoya Git</a>
                                        </p>
                                    </div>
                                </div> <!-- end .row -->
                            </div> <!-- end .company-product -->
                        </div> <!-- end .tab-pane -->

                        <div class="tab-pane" id="company-events">
                            <div class="company-events">
                                <h2 class="mb30">Etkinliklerimiz</h2>
                                @foreach($companyEvents  as $event)
                                    <div class="post-with-image">
                                        <div class="post-image">
                                            <img style="object-fit: cover" src="{{$event->image}}" alt="">
                                            <div style="float: right;position: absolute;right: 0;top: 0;">
                                                @if($event->is_event_today && !$event->cancel)
                                                    <a class="pull-right timeline-expire-date-button"
                                                       style="border-top-right-radius:0;border-top-left-radius:0;border-bottom-right-radius:0;border-bottom-left-radius:10px;color:white;padding: 10px;background: green">
                                                        Bu etkinlik bugün
                                                    </a>
                                                @endif

                                                @if($event->is_expire_date && !$event->cancel)
                                                    <a class="pull-right timeline-expire-date-button"
                                                       style="border-top-right-radius:0;border-top-left-radius:0;border-bottom-right-radius:0;border-bottom-left-radius:10px;color:white;padding: 10px;background: orange;">
                                                        {{$event->ago_time}} Bu etkinlik gerçekleşti
                                                    </a>
                                                @endif

                                                @if($event->cancel)
                                                    <a class="pull-right timeline-expire-date-button"
                                                       style="border-top-right-radius:0;border-top-left-radius:0;border-bottom-right-radius:0;border-bottom-left-radius:10px;color:white;padding: 10px;background: red">
                                                        Etkinlik iptal oldu
                                                    </a>
                                                @endif
                                            </div>
                                        </div>

                                        <h2 class="title"><a href="{{route('event-detail',$event->id)}}" title="{{$event->name}}">{{$event->name}}</a></h2>
                                        <p class="event-place">
                                            <a>{{$event->location}}</a> ·
                                            <a>{{$event->date}}
                                                · {{$event->day_name}}</a> ·
                                            <a>{{$event->time}}</a>
                                        </p>

                                        <p class="tag">
                                            <i class="fa fa-tag"></i>
                                            @foreach(explode(',',$event->tags) as $tag)
                                                <a href="{{route('events',['tags'=>$tag])}}" title="{{$tag}}">{{$tag}}</a>

                                            @endforeach
                                        </p>

                                    </div> <!-- end .post-with-image -->
                                @endforeach
                                @unset($event)

                            </div> <!-- end .company-events -->
                        </div> <!-- end .tab-pane -->

                        <div class="tab-pane" id="company-blog">

                            <div class="company-blog">
                                <h2 class="mb30">Haberlerimiz</h2>
                                <div class="blog-list">
                                    @foreach($companyBlogs as $blog)
                                        <div class="post-with-image">
                                            @can('user-can-delete-blog',$blog->id)
                                                <div style="    position: absolute;right:0;z-index: 9;">
                                                    <div class="dropdown comment-close comment-blog post-edit-btn">
                                                        <a class="btn dropdown-toggle" type="button"
                                                           data-toggle="dropdown">
                                                            <i class="fa fa-chevron-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a onclick="return confirm('Bu blog silinecek emin misiniz')"
                                                                   href="{{route('delete-blog',$blog->id)}}" title="Gönderiyi Kaldır">
                                                                    <i class="fa fa-times-circle">&nbsp;</i>
                                                                    <div class="texting"><span>Gönderiyi Kaldır</span>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li><a href="{{route('update_news',$blog->id)}}" title="Gönderiyi Düzenle">
                                                                    <i class="fa fa-pencil">&nbsp;</i>
                                                                    <div class="texting"><span>Gönderiyi Düzenle</span>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            @endcan

                                            @if(!empty($blog->image))
                                                <div class="post-image"
                                                     style="background-image: url({{asset('img/no-image.svg')}});">
                                                    <img src="{{$blog->image}}" alt="">
                                                    <div class="blog-details">
                                                        <div class="blog-title">

                                                            <div class="blog-pdetails">
                                                                <div class="name">

                                                                    <div class="company-category">
                                                                        @isset($blog->company->category)

                                                                        <a href="{{route('blogs',['category_id'=>$blog->category_id])}}" title="{{$blog->company->category->name}}">{{$blog->company->category->name}}
                                                                        </a>
                                                                        @endisset
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif

                                            <h2 class="title"><a href="{{ route('blog',$blog->id) }}" title="{{$blog->title}}">{{$blog->title}}</a></h2>
                                            <div class="time">{{$blog->time_ago}}</div>

                                            <p class="post">
                                                {!! createHashtagFromBlog($blog->short_context) !!}
                                            </p>

                                            <div class="blog-read-more">
                                                <a href="{{ route('blog',$blog->id) }}" title="Daha Fazla Oku">Daha Fazla Oku</a>
                                            </div>

                                            <p class="tag">
                                                <i class="fa fa-tag"></i>
                                                @foreach($blog->tags_as_array as $tag)
                                                    <a href="{{route('blogs',['tags'=>$tag])}}" title="{{$tag}}">{{$tag}}</a>
                                                @endforeach
                                            </p>
                                        </div> <!-- end .post-with-image -->

                                    @endforeach

                                </div> <!-- end .blog-list -->


                            </div> <!-- end .company-blog -->
                        </div> <!-- end .tab-pane -->

                        <div class="tab-pane" id="company-contact">

                            <div class="company-profile company-contact">

                                <h2>İletişim Bilgilerimiz</h2>

                                <div class="company-text">
                                    <p>
                                        {{$company->address_description}}
                                    </p>
                                </div> <!-- end company-text -->

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="contact-map-company">
                                            <iframe style="width:100%;height: 350px"
                                                    frameborder="0"
                                                    scrolling="no"
                                                    marginheight="0"
                                                    marginwidth="0"
                                                    src="https://maps.google.com/maps?q={{$company->latitude}},{{$company->longitude}}&hl=es;z=14&amp;output=embed">
                                            </iframe>
                                        </div> <!-- end .map-section -->
                                        <div class="address-details clearfix">
                                            <p>
                                                <span>{{$company->address}}</span>
                                            </p>
                                        </div>
                                        <div class="address-details clearfix">
                                            <i class="fa fa-location-arrow"></i>

                                            <p>
                                                <span><strong>Adres:</strong> {{$company->company_address}}</span>
                                            </p>
                                        </div>
                                        <div class="address-details clearfix">
                                            <i class="fa fa-phone"></i>

                                            <p>
                                                <span><strong>Telefon:</strong> <a href="tel:{{$company->first_phone}}" title="phone" > {{$company->first_phone}}</a></span>
                                                <span><strong>Fax:</strong> {{$company->fax_number}}</span>
                                                <a target="_blank" title="whatsaap" href="https://api.whatsapp.com/send?phone=&text={{ $company->company_whatsapp }}&source=&data=" data-action="share/whatsapp/share">  <span><strong>Whatsaap:</strong>  {{$company->company_whatsapp}}</span></a>
                                            </p>
                                        </div>

                                        <div class="address-details clearfix">
                                            <a href="mailto:{{$company->email}}" title="mail"> <i class="fa fa-envelope-o">

                                                </i>
                                            </a>

                                            <p>
                                                <span><strong>E-mail:</strong><a href="mailto:{{$company->email}}" title="email">{{$company->email}}</a></span>
                                                <span><span><strong>Website:</strong><a target="_blank" href="{{$company->website_url}}" title="{{$company->name}}"> {{$company->website_url}}</a></span></span>
                                            </p>
                                        </div>

                                        <h5>Çalışma Saatleri</h5>

                                        <div class="address-details clearfix">
                                            <i class="fa fa-clock-o"></i>

                                            <p>
                                                <span><strong>Saatler:</strong>
                                                    <span>{{$company->work_start_time}}   {{$company->work_finish_time}}</span>
                                                </span>
                                                <span><strong>Günler:</strong>
                                                    @foreach ( $company->working_days as $value )

                                    <span>{{ $value }}</span>


                                                        @endforeach
                                                    </span>

                                            </p>
                                        </div>

                                    </div> <!-- end main grid layout -->
                                </div> <!-- end .row -->

                            </div> <!-- end .company-contact -->
                        </div> <!-- end .tab-pane -->
                        <div class="tab-pane" id="company-document">
                            <div class="company-product">
                                <h2 class="mb30">Dökümanlar</h2>
                                <div class="row">
                                    <section id="gallery">
                                        <div id="image-gallery">
                                            @foreach($companyDocument as $document)
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 image">
                                                    <div class="img-wrapper">
                                                        <iframe src="{{ asset('images/pdf').'/'.$document->type.'/'.$document->url }}" width="100%" height="300px">
                                                        </iframe>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div><!-- End image gallery -->
                                    </section>
                                </div> <!-- end .row -->
                            </div> <!-- end .company-product -->
                        </div>
                        <div id="survey" class="tab-pane">

                            @include('frontend.survey.survey')

                        </div>

                        <div class="tab-pane" id="company-business" style="background: #fafafa !important;">
                            @include('frontend.company.company-owner')
                        </div> <!-- end .tab-pane -->

                    </div> <!-- end .tab-content -->
                </div> <!-- end .page-content -->

            </div> <!-- end .main-grid layout -->

            <div class="col-md-3 col-md-pull-9 category-toggle">
                <button class="sidebar-open profile"><i class="fa fa-chevron-right"><span>MENÜ</span></i></button>
                <div class="page-sidebar company-sidebar">

                    <ul class="company-category nav nav-tabs home-tab" role="tablist">
                        <li class="active">
                            <a href="#company-profile" role="tab" data-toggle="tab" title="Hızlı Görünüm"><i class="fa fa-newspaper-o"></i> Hızlı Görünüm</a>
                        </li>

                        <li>
                            <a href="#company-product" role="tab" data-toggle="tab" title="Fotoğraflar"><i class="fa fa-cubes"></i>Fotoğraflar</a>
                        </li>
                        <li>
                            <a href="#company-document" role="tab" data-toggle="tab" title="Döküman"><i class="fa fa-file-pdf-o"></i>Döküman</a>
                        </li>
                        <li>
                            <a href="#company-video" role="tab" data-toggle="tab" title=Video"><i class="fa fa-play"></i>Video</a>
                        </li>

                        <li>
                            <a href="#company-events" role="tab" data-toggle="tab" title="Etkinlikler"><i class="fa fa-list"></i>Etkinlikler</a>
                        </li>

                        <li>
                            <a href="#company-blog" role="tab" data-toggle="tab" title="Haberlerimiz"><i class="fa fa-keyboard-o"></i>Haberlerimiz</a>
                        </li>

                        <li>
                            <a href="#company-contact" role="tab" data-toggle="tab" title="İletişim"><i class="fa fa-envelope-o"></i>İletişim</a>
                        </li>

                        <li>
                            <a href="#survey" role="tab" data-toggle="tab" title="Anket"><i class="fa fa-keyboard-o"></i>Anket</a>
                        </li>

                        @if(!$isUserBelongsToThisCompany)
                        <li>
                            <a href="#company-business" role="tab" data-toggle="tab" title="Firma Sahibi Misiniz?">
                                <i class="fa fa-user"></i>Firma Sahibi Misiniz?
                            </a>
                        </li>

                        @endif

                        @if(!$isUserBelongsToThisCompany)
                        <li>
                            <a style="background: #DA4735" class="white-text" role="tab" href="#form-feed-back" title="Bu Firmayı Şikayet Et ! " data-toggle="tab" id="modal-open" rel="modal:open"> Bu Firmayı Şikayet Et ! </a>
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
                                <span style="left:40%;">{{$company->work_start_time}} - {{$company->work_finish_time}}</span>
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

        </div> <!-- end .row -->

    </div> <!-- end .container -->

</div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="{{ asset('js/company.js') }}"></script>
    <script src="{{asset('js/temp/toastr.min.js')}}"></script>
    <script src="{{asset('/js/toastr-app.js')}}"></script>

    <script>

    $('#send-survey-button').on('click', function () {
        let $array = [];
        $('.mm-survey-item input:checked').each(function (index, val) {
            $array.push($(this).val())
        });

        $.post("{{route('survey_save_post')}}", {
            _token: "{{csrf_token()}}",
            company_id: "{{$company->id}}",
            values: $array

        }, function (data) {
            if (data.status == true) {
                swal("", "Anket gönderilmiştir. Teşekkürler.", "success");
                location.reload();
            }
        });
    });

    $(document).ready(function () {
    $('#checkbox').on('click', function () {

        let status = $(this).is(':checked');
        if (status)
            $('#send').removeAttr('disabled');
        else
            $('#send').attr('disabled', 'disabled');
    });

    $('#send').on('click', function () {
        let formData = {
            id: $('#id').val(),
            name: $('#name').val(),
            phone: $('#phone').val(),
            email: $('#email').val(),
            message: $('#message').val(),

        };
        captchaLength = grecaptcha.getResponse();

        if (!captchaLength.length == 0) {
            if (validateEmail($('#email').val())) {
                $.post("{{route('company_complaint_post')}}", {
                    _token: "{{csrf_token()}}",
                    data: formData
                }, function (response) {
                    alert(response);
                    location.reload();
                })
            } else {
                alert('Lütfen geçerli bir email adresi giriniz....')
            }
        } else {
            alert('lütfen captchayı doğrula');
        }
    })
});

</script>

@if ( session()->has('message') )
<script>
    message("{{ session('message') }}","{{ session('type') }}")
</script>

@elseif( count( $errors ) )
<script>
    message("{{ $errors->first() }}","{{ 'warning' }}")
</script>

<script src="{{asset('js/temp/toastr.min.js')}}"></script>
<script src="{{asset('/js/toastr-app.js')}}"></script>
@endif

@endsection
