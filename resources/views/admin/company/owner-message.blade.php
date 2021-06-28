@extends('admin.layouts.master')
@section('title','Firma Mesaj Listesi')
@section('content')

    <div class="alert alert-light alert-elevate" role="alert">
        <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
        <div class="alert-text">
            Toplamda {{$messages->total() }} Mesaj Listesi bulunmaktadır.
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
            {{ $messages->links() }}
            <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Firma</th>
                    <th>İsim & Soyisim</th>
                    <th>Email</th>
                    <th>Telefon</th>
                    <th>Mesaj</th>
                    <th colspan="2">İşlemler</th>
                </tr>
                </thead>
                <tbody>
                @if( $messages->count() )
                    @foreach( $messages as $value )
                        <tr>
                            <td tabindex="0">{{$value->id}}</td>
                            <td>{{@$value->company->name}}</td>
                            <td>{{@$value->fullname}}</td>
                            <td>{{$value->email}}</td>
                            <td>{{$value->phone}}</td>
                            <td>{{$value->message}}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-secondary" type="button" data-toggle="dropdown" aria-expanded="false">
                                        <i class="la la-cog"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <form action="{{route('owner-message.destroy',$value->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="dropdown-item pl-3" type="submit"><i style="font-size:20px;" class="la la-trash"></i> Sil</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            {{ $messages->links() }}
            <!--end: Datatable -->
        </div>
    </div>

@endsection
