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
            <form enctype="multipart/form-data" method="post" action="{{route('companyPushFeedBack')}}">
                @csrf
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Firma İsmi</label>
                        <input value="{{old('name',$companyFeedBack->companyName)}}" name="companyName" class="form-control border-griy" id="exampleInputEmail1"
                               aria-describedby="emailHelp" placeholder="Firma Adı">
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Firma seç</label>
                        <select class="form-control select2 " name="company" id="exampleFormControlSelect1">
                            <option>Firma seçin</option>
                            @foreach($companies as $company)
                                <option
                                    value="{{$company->id}}" {{ old('company',$companyFeedBack->company) == $company->id ? 'selected' : '' }}>{{$company->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <input type="hidden" value="{{ $companyFeedBack->id }}" name="id" >



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
