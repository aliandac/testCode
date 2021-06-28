@extends('admin.layouts.master')
@section('title','Ürün Ana Kategori Ekle')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Ürün Ana  Kategori Ekle
                    </h3>
                </div>
            </div>
            @include('admin.layouts.partials.alert')
            @include('admin.layouts.partials.error')
            <form class="kt-form" method="post" action="{{route('FirstProductCategory.store')}}" enctype="multipart/form-data">
            @csrf
                <div class="kt-portlet__body">
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Kategori Adı :</label>
                            <input type="text" class="form-control" name="title" id="select"  value="{{old('title')}}">
                        </div>
                    </div>

                    @foreach($product as $item)
                        <div class="col-md-3">
                            <label><input type="checkbox" class="check" name="category[]" value="{{ $item->id }}" /> {{ $item->name }} </label>
                        </div>
                    @endforeach

                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label for="cat_id">Alt Slider :</label>
                            <select name="down_slider" id="down_slider" class="form-control">
                                <option value="0" >HAYIR</option>
                                <option value="1">EVET</option>
                            </select>
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Resim</label>
                            <div></div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image" id="customFile">
                                <label class="custom-file-label" for="customFile">Dosya Seç</label>
                            </div>
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Url :</label>
                            <input type="text" class="form-control" name="url" id="url"  value="{{old('title')}}">
                        </div>
                    </div>
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
@section('footer')
@endsection
