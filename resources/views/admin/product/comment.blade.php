@extends('admin.layouts.master')
@section('title','Ürün Yorum Listesi') 
@section('content') 

<div class="alert alert-light alert-elevate" role="alert">
    <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
    <div class="alert-text">
        Toplamda {{$comments->count()}} yorum bulunmaktadır.
    </div>
</div>
<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head kt-portlet__head--lg">
        <div class="kt-portlet__head-label">
            <span class="kt-portlet__head-icon">
                <i class="kt-font-brand flaticon2-line-chart"></i>
            </span>
            <h3 class="kt-portlet__head-title">
                Ürün Yorum Listesi
            </h3>
        </div>
    </div>
    @include('admin.layouts.partials.alert')
    <div class="kt-portlet__body">

        <!--begin: Datatable -->
        <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Ürün</th>
                    <th>İsim</th>
                    <th>Email</th>
                    <th>Yorum</th>
                    <th colspan="2">İşlemler</th>
                </tr>
            </thead>
            <tbody>
            @if( count( $comments ) )
            @foreach( $comments as $value )
            <tr>
                <td tabindex="0">{{$value->id}}</td>
                <td>{{App\Models\Product::where('id',$value->product_id)->firstOrFail()->title}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->comment}}</td>
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
                            @if( $value->active )
                            <a href="{{route('product-comment-active',$value->id)}}"  class="dropdown-item"><i class="la la-edit"></i>Pasif Yap</a>
                            @else
                            <a href="{{route('product-comment-active',$value->id)}}" class="dropdown-item"><i class="la la-edit"></i>Aktif Et</a>
                            @endif
                            <form action="{{route('product.destroy',$value->id)}}" method="post">
                                 @csrf
                                 @method('DELETE')
                                <button class="dropdown-item pl-3" type="submit"><i style="font-size:20px;" class="la la-trash"></i>Sil</button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
            @endif
            </tbody>
        </table>


        <!--end: Datatable -->
    </div>
</div>

@endsection