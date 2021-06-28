@extends('admin.layouts.master')
@section('title',"Kampanya Listesi")
@section('content')

    <div class="alert alert-light alert-elevate" role="alert">
        <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
        <div class="alert-text">
            Toplamda {{$ProductCampaign->count()}} slayt bulunmaktadır.
        </div>
    </div>
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                    <i class="kt-font-brand flaticon2-line-chart"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                    Kampanyalar
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <div class="kt-portlet__head-actions">
                        &nbsp;
                        <a href="{{route('product_campaign.create')}}" class="btn btn-brand btn-elevate btn-icon-sm">
                            <i class="la la-plus"></i>
                            Kampanya Ekle
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.layouts.partials.alert')
        <div class="kt-portlet__body">
            {{ $ProductCampaign->links() }}
            <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                <thead>
                <tr>
                    <th>#</th>
                    <th>İçerik</th>
                    <th>Resim</th>
                    <th>Sıra</th>
                    <th>Kategori</th>
                    <th>Firma</th>
                    <th>Aktiflik</th>
                    <th>İşlemler</th>
                </tr>
                </thead>
                <tbody>
                @if( $ProductCampaign->count() )
                    @foreach( $ProductCampaign as $value )
                        <tr>
                            <td>{{$value->id}}</td>
                            <td>{!! $value->content !!}</td>
                            <td><img src="{{ asset( $value->image ) }}" width="150" height="75"></td>
                            <td> <span><i id="minus" data-value="{{$value->id}}" class="fa-minus-circle fa text-info mr-2" style="font-size:20px"></i></span>
                                <strong style="font-size:20px" id="{{$value->id}}">{{$value->rank}}</strong>
                                <span><i id="plus" data-value="{{$value->id}}" class="fa-plus-circle fa text-info ml-2" style="font-size:20px"></i></span> </td>
                            <td>{!! $value->getCategory->name !!}</td>
                            @if(isset($value->getCompany->name))
                            <td> {!! $value->getCompany->name !!} </td>
                            @else
                                <td> Firma Yok</td>
                                @endif
                            @if ( $value->active )
                                <td class="font-weight-bold text-success">Aktif</td>
                                @else
                                <td class="font-weight-bold text-warning">Pasif</td>
                            @endif
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-secondary" type="button" data-toggle="dropdown" aria-expanded="false">
                                        <i class="la la-cog"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a href="{{route('product_campaign.edit',$value->id)}}" class="dropdown-item"><i class="la la-edit"></i>Güncelle</a>
                                        @if( $value->active )
                                            <a href="{{route('productCampaignActive',$value->id)}}" class="dropdown-item"><i class="la la-close"></i>Pasif Yap</a>
                                        @else
                                            <a href="{{route('productCampaignActive',$value->id)}}" class="dropdown-item"><i class="la la-check"></i>Aktif Et</a>
                                        @endif
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <!--end: Datatable -->
            {{ $ProductCampaign->links() }}
        </div>
    </div>

@endsection

<style>
    i {
        cursor: pointer;
    }
    </style>

@section('footer')
    <script src="{{ asset('/admin-asset/admin/vendors/custom/datatables/datatables.bundle.js') }}"></script>
    <script>
        $('#kt_table_1').DataTable();
    </script>

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
        url : '/admin/productCategory/product-campaign-order',
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
        url : '/admin/productCategory/product-campaign-order',
        data: {'id':id,'statu':1},
        success: function(e) {
            $("strong#"+id).text(e.rank);
        }
    });
});

</script>
@endsection
