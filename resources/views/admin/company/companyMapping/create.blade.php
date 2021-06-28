@extends('admin.layouts.master')
@section('title','Merkeze Firma Ekle')
@section('content')
<style>
    .bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
        width: 100% !important;
    }
    .dropdown-menu {
        width: 100% !important;
        min-width: 0px !important;
    }
</style>
    <div class="row">
        <div class="col-lg-12">
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Merkeze Firma Ekle
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-wrapper">
                            <div class="kt-portlet__head-actions">
                                <a href="{{route('company-mapping.edit',$id)}}" class="btn btn-primary pull-right">Merkeze Firmalarını Gör</a>
                            </div>
                        </div>
                    </div>
                </div>
                @include('admin.layouts.partials.alert')
                @include('admin.layouts.partials.error')
                <form class="kt-form" method="post" action="{{route('company-mapping.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="kt-portlet__body">



                        <div class="kt-section kt-section--first">
                            <div class="form-group">
                                <label for="cat_id">Seçilecek Firmalar :</label>
                                <select class="selectpicker" multiple data-live-search="true" name="company[]" style="width: 100%">
                                    @foreach($companies as $item)
                                    <option value="{{ $item->id }}" >{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                                <input type="hidden" name="area" value="{{ $id }}">
                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <button type="submit" class="btn btn-primary">Ekle</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
