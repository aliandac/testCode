@extends('admin.layouts.master')
@section('title','Firma Feed back ')
@section('content')

    <div class="alert alert-light alert-elevate" role="alert">
        <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
        <div class="alert-text">
            Toplamda {{$CompanyFeedBacks->total() }} firma bulunmaktadır.
        </div>
    </div>
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
            <span class="kt-portlet__head-icon">
                <i class="kt-font-brand flaticon2-line-chart"></i>
            </span>
                <h3 class="kt-portlet__head-title">
                    Firma Feed back
                </h3>
            </div>
        </div>
        @include('admin.layouts.partials.alert')
        <div class="kt-portlet__body">
            {{$CompanyFeedBacks->appends(request()->all())->render()}}
            <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Firma Adı</th>
                    <th>Firma İtirazı</th>
                    <th>İtiraz Durumu</th>
                    <th colspan="2">İşlemler</th>
                </tr>
                </thead>
                <tbody>
                @if( $CompanyFeedBacks->count() )
                    @foreach( $CompanyFeedBacks as $value )
                        <tr>
                            <td tabindex="0">{{$value->id}}</td>
                            <td>{{$value->companyName}}</td>
                            <td>{!! $value->objectionMessage !!}</td>
                            @if( $value->active )
                                <td class="text-success font-weight-bold">Aktif</td>
                            @else
                                <td class="text-warning font-weight-bold">İtirazı Kabul Edilmiş</td>
                            @endif
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-secondary" type="button" data-toggle="dropdown" aria-expanded="false">
                                        <i class="la la-cog"></i>
                                    </button>
                                    @if($value->active==1)
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a href="{{route('companyFeedBackInBackObjectionListDetail',$value->id)}}" class="dropdown-item"><i class="la la-photo"></i>Detay</a>
                                        <a href="{{route('companyFeedBackInBackActive',$value->id)}}" class="dropdown-item"><i class="la la-{{ $value->active?'close':'check' }}"></i>{{ $value->active?'İtirazı Kabul Et':'Aktif Et' }}</a>
                                    </div>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        {{$CompanyFeedBacks->appends(request()->all())->render()}}
            <!--end: Datatable -->
        </div>
    </div>
@endsection
