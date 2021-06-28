@extends('admin.layouts.master')
@section('title','Ürün Ana Kategoriler')
@section('content')

<div class="alert alert-light alert-elevate" role="alert">
    <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
    <div class="alert-text">
        Toplamda {{$firstCategory->count()}} kategoriniz bulunmaktadır.
    </div>
</div>
<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head kt-portlet__head--lg">
        <div class="kt-portlet__head-label">
            <span class="kt-portlet__head-icon">
                <i class="kt-font-brand flaticon2-line-chart"></i>
            </span>
            <h3 class="kt-portlet__head-title">
                Ürün Ana Kategoriler
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-wrapper">
                <div class="kt-portlet__head-actions">
                    &nbsp;
                    <a href="{{route('FirstProductCategory.create')}}" class="btn btn-brand btn-elevate btn-icon-sm">
                        <i class="la la-plus"></i>
                       Ürün Kategori Ekle
                    </a>
                </div>
            </div>
        </div>
    </div>
    @include('admin.layouts.partials.alert')
    <div class="kt-portlet__body">
        {{ $firstCategory->links() }}
        <!--begin: Datatable -->
        <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
            <thead>
                <tr>
                    <th>#</th>
                    <th>İsim</th>
                    <th>Sıra</th>
                    <th>Durumu</th>
                    <th colspan="2">İşlemler</th>
                </tr>
            </thead>
            <tbody>
            @if( count( $firstCategory ) )
            @foreach( $firstCategory as $value )
            <tr>
                <td tabindex="0">{{$value->id}}</td>
                <td>{{$value->title}}</td>
                <td> <span><i id="minus" data-value="{{$value->id}}" class="fa-minus-circle fa text-info mr-2" style="font-size:20px"></i></span>
                    <strong style="font-size:20px" id="{{$value->id}}">{{$value->order}}</strong>
                    <span><i id="plus" data-value="{{$value->id}}" class="fa-plus-circle fa text-info ml-2" style="font-size:20px"></i></span> </td>
                @if( $value->active )
                    <td class="text-success font-weight-bold">Aktif</td>
                @else
                    <td class="text-warning font-weight-bold">Pasif</td>
                @endif
                <td>
                    <div class="dropdown">
                        <button class="btn btn-secondary" type="button" data-toggle="dropdown" aria-expanded="false">
                            <i class="la la-cog"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a href="{{route('FirstProductCategory.edit',$value->id)}}" class="dropdown-item"><i class="la la-edit"></i>Güncelle</a>
                            @if( $value->active )
                            <a href="{{route('firstProductCategoryActive',$value->id)}}" class="dropdown-item"><i class="la la-close"></i>Pasif Et</a>
                            @else
                            <a href="{{route('firstProductCategoryActive',$value->id)}}" class="dropdown-item"><i class="la la-check"></i>Aktif Et</a>
                            @endif
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
            @endif
            </tbody>
        </table>
        {{ $firstCategory->links() }}
        <!--end: Datatable -->
    </div>
</div>
<style>
    i {
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

        $("i#minus").click(function(){
            var id = $(this).attr('data-value');
            $.ajax({
                type: 'POST',
                url : '/admin/productCategory/product-first-order',
                data: {'id':id,'statu':0},
                success: function(e) {
                    $("strong#"+id).text(e.rank);
                }
            });
        });

        $("i#plus").click(function(){
            var id = $(this).attr('data-value');
            $.ajax({
                type: 'POST',
                url : '/admin/productCategory/product-first-order',
                data: {'id':id,'statu':1},
                success: function(e) {
                    $("strong#"+id).text(e.rank);
                }
            });
        });

    </script>
@endsection
