@extends('admin.layouts.master')
@section('title','Ürün Ekle')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Ürün Ekle
                    </h3>
                </div>
            </div>
            @include('admin.layouts.partials.alert')
            @include('admin.layouts.partials.error')
            <form class="kt-form" method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
            @csrf
                <div class="kt-portlet__body">
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Başlık :</label>
                            <input type="text" class="form-control" name="title" value="{{old('title')}}">
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>İçerik :</label>
                            <textarea type="text" class="form-control ckeditor" name="content">{{old('content')}}</textarea>
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label for="cat_id">Ürün Kategorisi :</label>
                            <select name="cat_id" id="cat_id" class="form-control">
                                @foreach( App\Models\ProductCategory::all() as $value )
                                <option value="{{$value->id}}">{{$value->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label for="price">Fiyat :</label>
                            <input type="text" class="form-control" name="price" id="price" value="{{old('price')}}">
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label for="avalability">Stok Durumu :</label>
                            <input type="text" class="form-control" name="avalability" id="avalability" value="{{old('avalability')}}">
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label for="quantity">Adet :</label>
                            <input type="number" class="form-control" name="quantity" id="quantity" value="{{old('quantity')}}">
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Açıklama :</label>
                            <textarea type="text" class="form-control" name="description">{{old('description')}}</textarea>
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Anahtar Kelimeler :</label>
                            <input type="text" class="form-control" name="keywords" value="{{old('keywords')}}">
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
                            <label>Alt :</label>
                            <input type="text" class="form-control" name="alt" value="{{old('alt')}}">
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <button id="feature" type="button" class="btn btn-success">Boyut Gir</button>
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

<script>
var data = 0;
$("button#feature").on('click',function(){
    data++;
    $("button#feature").after(
        "<div class='kt-section kt-section--first'>"+
            "<div class='form-group'>"+
                "<label>Boyut  :</label>"+
                "<input type='text' class='form-control' name='features[]'>"+
            "</div>"+
        "</div>"
    );
});

</script>

@endsection