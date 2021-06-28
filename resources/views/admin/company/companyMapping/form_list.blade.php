@extends('admin.layouts.master')
@section('title',"Merkez Form Listesi")
@section('content')

    <div class="alert alert-light alert-elevate" role="alert">
        <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
        <div class="alert-text">
            Toplamda {{$formList->count()}} slayt bulunmaktadır.
        </div>
    </div>
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                    <i class="kt-font-brand flaticon2-line-chart"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                    Merkez Form Listesi
                </h3>
            </div>
        </div>
        @include('admin.layouts.partials.alert')
        <div class="kt-portlet__body">
            {{ $formList->links() }}
            <!--begin: Datatable -->
                <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Firma Adı</th>
                        <th>Yetkili Adı</th>
                        <th>Telefon</th>
                        <th>Mail</th>
                        <th>Mesaj</th>
                        <th>Durum</th>
                        <th colspan="2">İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if( $formList->count() )
                        @foreach( $formList as $value )
                            <tr>
                                <td tabindex="0">{{$value->id}}</td>
                                <td>{{$value->company_name}}</td>
                                <td>{{$value->authorized_name}}</td>
                                <td>{{$value->phone}}</td>
                                <td>{{$value->mail}}</td>
                                <td>{{$value->message}}</td>
                                @if ( $value->active )
                                    <td class="font-weight-bold text-success">Görüşüldü</td>
                                @else
                                    <td class="font-weight-bold text-warning">Görüşülmedi</td>
                                @endif
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary" type="button" data-toggle="dropdown" aria-expanded="false">
                                            <i class="la la-cog"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            @if( $value->active )
                                                <a href="{{route('virtualFair-formActive',$value->id)}}" class="dropdown-item"><i class="la la-close"></i>Görüşülmedi</a>
                                            @else
                                                <a href="{{route('virtualFair-formActive',$value->id)}}" class="dropdown-item"><i class="la la-check"></i>Görüşüldü</a>
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
            {{ $formList->links() }}
        </div>
    </div>

@endsection

<style>
    i {
        cursor: pointer;
    }
    </style>

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
        url : '/admin/slide-order',
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
        url : '/admin/slide-order',
        data: {'id':id,'statu':1},
        success: function(e) {
            $("strong#"+id).text(e.rank);
        }
    });
});

</script>
@endsection
