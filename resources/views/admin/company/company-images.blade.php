@extends('admin.layouts.master')
@section('title','Firma Fotoğraf Listesi')
@section('content')

    <div class="alert alert-light alert-elevate" role="alert">
        <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
        <div class="alert-text">
            Toplamda {{$images->total() }} Fotoğraf bulunmaktadır.
        </div>
    </div>
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
            <span class="kt-portlet__head-icon">
                <i class="kt-font-brand flaticon2-line-chart"></i>
            </span>
                <h3 class="kt-portlet__head-title">
                </h3>
            </div>
        </div>
        @include('admin.layouts.partials.alert')
        <div class="kt-portlet__body">
            {{ $images->links() }}
            <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Firma</th>
                    <th>Resim</th>
                    <th>Onay Durumu</th>
                    <th colspan="2">İşlemler</th>
                </tr>
                </thead>
                <tbody>
                @if( $images->count() )
                    @foreach( $images as $value )
                        <tr>
                            <td tabindex="0">{{$value->id}}</td>
                            <td>{{$company->name}}</td>
                            <td>
                                <img class="cursor-pointer" src="{{ asset($value->url) }}" alt="{{ $value->alt }}" width="100" height="100">
                            </td>
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
                                        @if ( $value->active )
                                        <a href="{{route('active-company-image',$value->id)}}" class="dropdown-item"><i class="la la-edit"></i>Pasif Et</a>
                                        @else
                                        <a href="{{route('active-company-image',$value->id)}}" class="dropdown-item"><i class="la la-edit"></i>Aktif Et</a>
                                        @endif
                                        <a href="{{route('destroy-company-image',$value->id)}}" class="dropdown-item"><i class="la la-close"></i>Sil</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            {{ $images->links() }}
            <!--end: Datatable -->
        </div>
    </div>

@endsection
