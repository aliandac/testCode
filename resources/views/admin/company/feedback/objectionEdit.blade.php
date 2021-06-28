@extends('admin.layouts.master')
@section('title','Firma Feed Back Detail')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Firma Feed Back Detail
                    </h3>
                </div>
            </div>
            @include('admin.layouts.partials.alert')
            @include('admin.layouts.partials.error')

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Şikayet Başlıgı</label>
                        <input value="{{old('name',$companyFeedBack->messageTitle)}}" name="name" class="form-control border-griy" id="exampleInputEmail1"
                               aria-describedby="emailHelp" placeholder="Etkinlik başlığı giriniz">
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Şikayet Acıklaması</label>
                        <textarea class="form-control border-griy" rows="5" style="width: 100%"
                                  name="description" placeholder="Etkinlik Acıklaması">{{old('description',$companyFeedBack->message)}}</textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Şikayet Firması</label>
                        <input class="form-control" type="text"  value="{{old('location',$companyFeedBack->companyName)}}" name="location" placeholder="location">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Şikayet Kişi İsmi</label>
                        <input class="form-control" type="text" name="longitude" value="{{old('longitude',$companyFeedBack->name)}}" placeholder="longitude">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Şikayet Kişi Mail</label>
                        <input class="form-control" type="text" name="latitude" value="{{old('latitude',$companyFeedBack->email)}}" placeholder="latitude">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Şikayet Kişi Telefonu</label>
                        <input class="form-control" type="text" name="latitude" value="{{old('latitude',$companyFeedBack->phone)}}" placeholder="latitude">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Firma Cevabı</label>
                        <textarea class="form-control border-griy" rows="5" style="width: 100%"
                                  name="description" placeholder="">{{old('description',$companyFeedBack->companyMessage)}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword">Firma İtirazı Durumu= {{ $companyFeedBack->companyMessageActive==1?'Aktif':'Pasif' }}</label>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Firma İtirazı</label>
                        <textarea class="form-control border-griy" rows="5" style="width: 100%"
                                  name="description" placeholder="">{{old('description',$companyFeedBack->objectionMessage)}}</textarea>
                    </div>

                </div>

        </div>
    </div>
</div>
@endsection
