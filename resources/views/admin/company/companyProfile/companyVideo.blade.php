@extends('admin.layouts.master')
@section('title','Firma videoları')
@section('content')

    <div class="alert alert-light alert-elevate" role="alert">
        <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
        <div class="alert-text">
            Toplamda {{$companyVideo->total() }} firma bulunmaktadır.
        </div>
    </div>
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
            <span class="kt-portlet__head-icon">
                <i class="kt-font-brand flaticon2-line-chart"></i>
            </span>
                <h3 class="kt-portlet__head-title">
                    Firma videoları
                </h3>
            </div>
        </div>
        @include('admin.layouts.partials.alert')
        <div class="kt-portlet__body">
            {{$companyVideo->appends(request()->all())->render()}}

            <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Firma Adı</th>
                    <th>Onay Durumu</th>
                    <th colspan="2">İşlemler</th>
                </tr>
                </thead>
                <tbody>
                @if( $companyVideo->count() )
                    @foreach( $companyVideo as $value )
                        <tr>
                            <td tabindex="0">{{$value->id}}</td>
                            <td>{{$value->getCompany->name}}</td>
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
                                        <a href="https://www.youtube.com/watch?v={{$value->video}}" target="_blank" class="dropdown-item"><i class="la la-photo"></i>Gör</a>
                                        <a href="{{route('videoCompanyActiveAdmin',$value->id)}}" class="dropdown-item"><i class="la la-photo"></i>Aktif Et</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        {{$companyVideo->appends(request()->all())->render()}}
            <!--end: Datatable -->
        </div>
    </div>
@endsection


