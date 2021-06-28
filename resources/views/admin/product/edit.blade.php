@extends('admin.layouts.master')
@section('title',$product->title)
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Ürün Güncelle
                    </h3>
                </div>
            </div>
            @include('admin.layouts.partials.alert')
            @include('admin.layouts.partials.error')
            <form class="kt-form" method="post" action="{{route('product.update',$product->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                <div class="kt-portlet__body">
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Başlık :</label>
                            <input type="text" class="form-control" name="title" value="{{$product->title}}">
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>İçerik :</label>
                            <textarea type="text" class="form-control ckeditor" name="content">{{$product->content}}</textarea>
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label for="cat_id">Ürün Kategorisi :</label>
                            <select name="cat_id" id="cat_id" class="form-control">
                                @foreach( App\Models\ProductCategory::all() as $value )
                                <option value="{{$value->id}}" {{ ( $value->id == $product->cat_id ) ? 'selected':'' }} >{{$value->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label for="price">Fiyat :</label>
                            <input type="text" class="form-control" name="price" id="price" value="{{$product->price}}">
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label for="avalability">Stok Durumu :</label>
                            <input type="text" class="form-control" name="avalability" id="avalability" value="{{$product->avalability}}">
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label for="quantity">Adet :</label>
                            <input type="number" class="form-control" name="quantity" id="quantity" value="{{$product->quantity}}">
                        </div> 
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Açıklama :</label>
                            <textarea type="text" class="form-control" name="description">{{$product->description}}</textarea>
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Anahtar Kelimeler :</label>
                            <input type="text" class="form-control" name="keywords" value="{{$product->keywords}}">
                        </div>
                    </div>
					<div class="form-group">
						<img src="/frontend/images/product/thumbnail/{{$product->image}}" class="rounded" style="width:250px;height:250px;border-radius:50%!important;">
					</div>
                    <div class="row">
                        <div class="col-md-6">
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
                                    <input type="text" class="form-control" name="alt" value="{{$product->alt}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-group">
                            @foreach( $product->feature as $value )
                                <li class="list-group-item" id="feature-{{$value->id}}">{{ $value->title}}  <i data-id="{{$value->id}}"  id="trash" class="fa text-danger float-right p-2 fa-trash-alt"></i> </li>
                            @endforeach
                            </ul>
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
                        <button type="submit" class="btn btn-primary">Güncelle</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('footer')
<script>

$("button#feature").on('click',function(){
    $("button#feature").after(
        "<div class='kt-section kt-section--first'>"+
            "<div class='form-group'>"+
                "<label>Boyut  :</label>"+
                "<input type='text' class='form-control' name='features[]'>"+
            "</div>"+
        "</div>"
    );
});

$("i#trash").click(function(){
    var data_id = $(this).attr('data-id');
    $.ajax({
        type: 'GET',
        url: '/npanel/product-feature-delete/'+data_id,
        success:function(e){
            if(e.statu) {
                $("ul li#feature-"+data_id).fadeOut(500);
            }  
        }
    });
});

</script>

<style>
    i#trash {
        cursor: pointer;
    }
    i#trash:hover {
        background-color:#1C1C1C;
        border-radius: 10px; 
    }
</style>
@endsection