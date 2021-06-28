@extends('admin.layouts.master')
@section('title','Firma Anket Listesi')
@section('content')

    <div class="alert alert-light alert-elevate" role="alert">
        <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
        <div class="alert-text">
            Toplamda {{$survey->count() }} firma bulunmaktadır.
        </div>
    </div>
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
            <span class="kt-portlet__head-icon">
                <i class="kt-font-brand flaticon2-line-chart"></i>
            </span>
                <h3 class="kt-portlet__head-title">
                    Firma Listesi
                </h3>
            </div>
        </div>
        @include('admin.layouts.partials.alert')
        <div class="kt-portlet__body">
            {{$survey->appends(request()->all())->render()}}

            <input id="company" class="form-control" placeholder="Firma Ara..." type="text" name="company">
                <div id="exist"></div>
            <br>
            <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Firma Adı</th>
                    <th>Puan</th>
                    <th>IP</th>
                    <th>Yıldız</th>
                    <th colspan="2">İşlemler</th>
                </tr>
                </thead>
                <tbody>
                @if( $survey->count() )
                    @foreach( $survey as $value )
                        <tr>
                            <td tabindex="0">{{$value->company_id}}</td>
                            <td>{!! $value->company->name ?? '<strong class="text-danger">Firma Bulunamadı</strong>' !!}</td>
                            <td>{!! $value->score ?? '<strong class="text-danger">Firma Bulunamadı</strong>' !!}</td>
                            <td>{{ $value->ip }}</td>
                            <td class="companies-star">{!! $value->company->star->render ?? '<strong class="text-danger">Anket Bulunamadı</strong>' !!}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-secondary" type="button" data-toggle="dropdown" aria-expanded="false">
                                        <i class="la la-cog"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a href="{{route('company-images',$value->id)}}" class="dropdown-item"><i class="la la-photo"></i>Fotoğraflar</a>
                                        <a href="{{route('store-image-to-company',$value->id)}}" class="dropdown-item"><i class="la la-photo"></i>Fotoğraf Ekle</a>
                                        <a href="{{route('Company_Profile',$value->id)}}" class="dropdown-item"><i class="la la-edit"></i>Güncelle</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        {{$survey->appends(request()->all())->render()}}
            <!--end: Datatable -->
        </div>
    </div>
@endsection

<style>
    .star-checked {
    color: #e67e22 !important;
}

</style>