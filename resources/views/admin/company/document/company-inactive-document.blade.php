@extends('admin.layouts.master')
@section('title','Firma Döküman Listesi')
@section('content')

    <div class="alert alert-light alert-elevate" role="alert">
        <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
        <div class="alert-text">
            Toplamda {{$document->total() }} Döküman bulunmaktadır.
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
            {{ $document->links() }}
            <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Firma</th>
                    <th>Resim</th>
                    <th>Onay Durumu</th>
                    <th>Tipi</th>
                    <th colspan="2">İşlemler</th>
                </tr>
                </thead>
                <tbody>
                @if( $document->count() )
                    @foreach( $document as $value )
                        <tr>
                            <td tabindex="0">{{$value->id}}</td>
                            <td>{{@$value->getCompany->name}}</td>
                            <td>
                                <a class="btn btn-primary" target="_blank" href="{{ asset('images/pdf').'/'.$value->type.'/'.$value->url  }}" >Gör</a>
                            </td>
                            @if( $value->active )
                                <td class="text-success font-weight-bold">Aktif</td>
                            @else
                                <td class="text-warning font-weight-bold">Pasif</td>
                            @endif
                            <td class=" font-weight-bold">{{ $value->type }}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-secondary" type="button" data-toggle="dropdown" aria-expanded="false">
                                        <i class="la la-cog"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        @if ( $value->active )
                                        <a href="{{route('active-company-document',$value->id)}}" class="dropdown-item"><i class="la la-edit"></i>Pasif Et</a>
                                        @else
                                        <a href="{{route('active-company-document',$value->id)}}" class="dropdown-item"><i class="la la-edit"></i>Aktif Et</a>
                                        @endif
                                        <a href="{{route('destroy-company-document',$value->id)}}" class="dropdown-item"><i class="la la-close"></i>Sil</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            {{ $document->links() }}
            <!--end: Datatable -->
        </div>
    </div>

@endsection
