@extends('admin.layouts.master')
@section('title','Ürün Resim Ekle')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Ürün Resim Ekle
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    <div class="kt-portlet__head-wrapper">
                        <div class="kt-portlet__head-actions">
                            &nbsp;
                            <a href="" class="btn btn-brand btn-elevate btn-icon-sm">
                                <i class="fa fa-undo-alt"></i>
                                Sayfayı Yenile
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @include('admin.layouts.partials.alert')
            @include('admin.layouts.partials.error')
            <form action="{{route('product-add-image',$product->id)}}" class="dropzone" method="post">
                @csrf
                <div class="fallback">
                    <input name="file" type="file" multiple />
                </div>
            </form>
        </div>
        <div class="container-fluid p-2 bg-dark" style="border-radius: 20px;">
            <div class="row ml-2 mr-2">
                @foreach( App\Models\ProductImages::where('product_id',$product->id)->get() as $value)
                <div class="col-md-3 image" id="{{$value->id}}" style="background:url(/frontend/images/product/product_extra_image/{{$value->image}}) no-repeat">
                    <span id="trash-{{$value->id}}"><i class="fa fa-trash-alt delete-image text-danger fa-2x"></i></span>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<style>

div.image {
    background-position: center center;
    border-radius: 20px;
    background-size: contain !important;
    height: 100%;
    min-height: 150px;
    margin-top: 10px;
}

i.delete-image {
    margin-top: 25%;
    margin-left: 35%;
}

i.delete-image:hover {
    padding: 3px;
    background:#FFDAD1;
    cursor: pointer;
}

</style>
@endsection
@section('footer')

<script>

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$("div.image span").hide();
var id;
$("div.image").mouseover(function(){
    id = $(this).attr('id');
    $("span#trash-"+id).show();
    $("span#trash-"+id).click(function(){
        $.ajax({
            type: 'GET',
            url : '/npanel/product-delete-image/'+id,
            success:function(e){
                if( e.statu ) {
                    $("div#"+id).hide(100)
                    id = null;
                }
            }
        });
    })

}).mouseout(function(){
    $("span#trash-"+id).hide();
    id = null;
});

</script>

@endsection