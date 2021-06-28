@extends('admin.layouts.master')
@section('title','Firma Feed Back Detail')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Firma Feed Back Mesaj FirmaDetail
                    </h3>
                </div>
            </div>
            @include('admin.layouts.partials.alert')
            @include('admin.layouts.partials.error')
            <form enctype="multipart/form-data" method="post" action="{{route('companyPushFeedBackMessageStore')}}">
                @csrf
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Firma İsmi</label>
                        <input value="{{old('name',$companyFeedBack->companyName)}}" name="companyName" class="form-control border-griy" id="exampleInputEmail1"
                               aria-describedby="emailHelp" placeholder="Firma Adı">
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Firma Mesajı</label>
                        <textarea class="form-control border-griy" rows="5" style="width: 100%"
                                  name="description" placeholder="Firma Mesajı ">{{old('description',$companyFeedBack->companyMessage)}}</textarea>
                    </div>
                    <input type="hidden" name="id" value="{{ $companyFeedBack->id }}"  >
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Mesaj Durumu</label>
                        <select class="form-control select2 " name="status" id="exampleFormControlSelect1">
                                <option value="0" {{ $companyFeedBack->status == 0 ? 'selected':'' }} >Firma Yanıtı Bekleniyor</option>
                                <option value="1" {{ $companyFeedBack->status == 1 ? 'selected':'' }}>Firma Yanıtladı</option>
                                <option value="2" {{ $companyFeedBack->status == 2 ? 'selected':'' }}>Firma Sorunu Çözdü</option>
                                <option value="3" {{ $companyFeedBack->status == 3 ? 'selected':'' }}>Firma Sorunu Çözemedi</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12" style="margin-top: 15px">

                    <button type="submit" class="btn btn-primary submit-button">Firmaya ekle</button>
                </div>

            </form>

        </div>
    </div>
</div>
@endsection
@section('footer')

    <script>
        $('.select2').select2();
    </script>
@endsection
