@extends('admin.layouts.master')
@section('title','Firma Fotoğraf Ekle')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Firma Fotoğraf Ekle
                    </h3>
                </div>
            </div>
            @include('admin.layouts.partials.alert')
            @include('admin.layouts.partials.error')
            <form enctype="multipart/form-data" method="post" action="{{route('store-image-to-company',$company->id)}}">
                @csrf
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Fotoğraf Seçin</label>
                        <input name="image[]" multiple type="file" class="form-control border-griy">
                    </div>

                    <input name="company_id" type="hidden" value="{{ $company->id }}" class="form-control border-griy">
                </div>

                <div class="col-md-12" style="margin-top: 15px">
                    <button type="submit" class="btn btn-primary submit-button">Ekle</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection