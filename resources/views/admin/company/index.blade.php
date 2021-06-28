@extends('admin.layouts.master')
@section('title','Firma Listesi')
@section('content')

    <div class="alert alert-light alert-elevate" role="alert">
        <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
        <div class="alert-text">
            Toplamda {{$company->total() }} firma bulunmaktadır.
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
            {{$company->appends(request()->all())->render()}}

            <input id="company" class="form-control" placeholder="Firma Ara..." type="text" name="company">
                <div id="exist"></div>
            <br>
            <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Firma Adı</th>
                    <th>Yetkili Adı</th>
                    <th>Adresi</th>
                    <th>Telefon</th>
                    <th>Onay Durumu</th>
                    <th colspan="2">İşlemler</th>
                </tr>
                </thead>
                <tbody>
                @if( $company->count() )
                    @foreach( $company as $value )
                        <tr>
                            <td tabindex="0">{{$value->id}}</td>
                            <td>{{$value->name}}</td>
                            <td>{{$value->authorized_person}}</td>
                            <td>{{$value->company_adress}}</td>
                            <td>{{$value->first_phone}}</td>
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
                                        <a href="{{route('company-images',$value->id)}}" class="dropdown-item"><i class="la la-photo"></i>Fotoğraflar</a>
                                        <a href="{{route('store-image-to-company',$value->id)}}" class="dropdown-item"><i class="la la-photo"></i>Fotoğraf Ekle</a>
                                        <a href="{{route('Company_Profile',$value->id)}}" class="dropdown-item"><i class="la la-edit"></i>Güncelle</a>
                                        <a href="{{route('Company_Status',$value->id)}}" class="dropdown-item"><i class="la la-{{ $value->active?'close':'check' }}"></i>{{ $value->active?'Pasif Et':'Aktif Et' }}
                                        </a>
                                        <a href="{{route('packageSetCompany',$value->id)}}" class="dropdown-item"><i class="la la-photo"></i>Paket Tanımla</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        {{$company->appends(request()->all())->render()}}
            <!--end: Datatable -->
        </div>
    </div>
@endsection

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script>

$('document').ready(function () {
        $('#company').on('keyup',function () {
            var company = $('#company').val();

            if ( company.length < 3 ) {
                $('#exist').html('');
                return false;
            }

            $.post("{{route('company_find_by_name')}}",
                {   _token:"{{csrf_token()}}",
                    company:company
                },function (data) {
                    console.log(data)
                $('#exist').html();
                $('#exist').html(data);
            });
        })
    });

</script>
