@extends('admin.layouts.master')
@section('title', 'Merkeze Firma Düzenle')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                           {{ $company->name }}  Firmalarını Düzenle
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-wrapper">
                            <div class="kt-portlet__head-actions">
                                <a href="{{route('CompanyMappingCreate',$company->id)}}" class="btn btn-primary pull-right">Merkeze Firma Ekle</a>
                            </div>
                        </div>
                    </div>
                </div>
                @include('admin.layouts.partials.alert')
                @include('admin.layouts.partials.error')
                {{-- $slide->getAttachment() --}}
                <div class="kt-portlet__body">
                {{ $companyMapping->links() }}
                <!--begin: Datatable -->
                    <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Merkez Adı</th>
                            <th colspan="2">İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if( $companyMapping->count() )
                            @foreach( $companyMapping as $value )
                                <tr>
                                    <td tabindex="0">{{$value->id}}</td>
                                    <td>{!! $value->getCompany->name !!}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary" type="button" data-toggle="dropdown" aria-expanded="false">
                                                <i class="la la-cog"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <form action="{{route('company-mapping.destroy',$value->id)}}" method="post">
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
                    {{ $companyMapping->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <script>
      $("input#button_is_active").click(function () {
        if ($(this).is(':checked') === true) {
          $(".buttondiv").show(500);
        } else {
          $(".buttondiv").hide(500);
        }
      });
    </script>
@endsection
