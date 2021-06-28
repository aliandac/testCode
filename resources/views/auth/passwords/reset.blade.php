@extends('frontend.layout.master')
@section('title','Tradeey Giriş Yap / Kayıt OL')
@section('content')
@section('slider')
    <div class="company-heading-view">
            <div class="general-view" style="background-image: url('{{asset('img/company-heading-bg.jpg')}}');
                    background-size: cover;
                    height: 50vh;
                    width: 100%;">
                <span></span> <!-- for dark-overlay on the bg -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12" >
                            <h1 class="text-center " style="font-weight: bold;color:white;margin-top:12%;margin-bottom: 8%;">Giriş Yap / Kayıt Ol</h1>

                        </div>
                    </div>
                </div>
            </div> <!-- END .general-view -->

    </div>
@endsection
    <div id="page-content">
        <div class="container">
            <div class="page-content">
                @foreach( $errors->all() as $error)
                    <div class="alert-danger" style="color:#000000;background: #c7254e38;padding: 3%;width: 100%;">
                        {{$error}}
                    </div>
                @endforeach
                <div class="contact-us">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <h3 class="register-title-color text-center"><strong>ŞİFRENİZİ DEĞİŞTİRİN</strong></h3>
                            <br>
                            <div class="contact-form pass-form">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <center><h5>Şifrenizi Sıfırlayın</h5></center>
                                            </div>
                                        </div>
                                        <form action="{{ route('password.update') }}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input style="width: 100%!important;" value="{{$email}}" type="email" name="email" placeholder="Email Adresi" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input style="width: 100%!important;" type="password" name="password" placeholder="Yeni Şifre" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input style="width: 100%!important;" type="password" name="password_confirmation" placeholder="Yeni Şifre Tekrar" class="form-control" required>
                                                </div>
                                            </div>
                                            <input type="hidden" name="token" value="{{$token}}">
                                            <div class="row">
                                                <div class="col-md-12 mt-2">
                                                    <input style="width: 100%!important;" type="submit" class="btn btn-default btn-block" value="Şifremi Sıfırla">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end main grid layout -->
                    </div> <!-- end .row -->

                </div> <!-- end .about-us -->
            </div> <!-- end .page-content -->
        </div> <!-- end .container -->

    </div> <!-- end #page-content -->

@endsection



@section('scripts')

    <script>
        loginEmail="{{old('email')}}";
        loginPassword="{{old('password')}}";
    </script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="{{asset('vue/register-form.js')}}"></script>
    <script src="{{asset('vue/login-form.js')}}"></script>

@endsection

@section('meta')
    <link rel="stylesheet" href="{{asset('css/cursor.css')}}">
@endsection
