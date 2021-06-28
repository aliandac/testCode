@extends('admin.layouts.master')
@section('title','Ürün Listesi')
@section('content')

<div class="alert alert-light alert-elevate" role="alert">
    <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
    <div class="alert-text">
        Toplamda {{$products->count()}} ürün bulunmaktadır.
    </div>
</div>
<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head kt-portlet__head--lg">
        <div class="kt-portlet__head-label">
            <span class="kt-portlet__head-icon">
                <i class="kt-font-brand flaticon2-line-chart"></i>
            </span>
            <h3 class="kt-portlet__head-title">
                Ürün Listesi
            </h3>
        </div>
    </div>
    @include('admin.layouts.partials.alert')
    <div class="kt-portlet__body">
        <input id="company" class="form-control" placeholder="Ürün Ara..." type="text" name="company">
        <div id="exist"></div>
        <br>
        <!--begin: Datatable -->
        <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
            <thead>
                <tr>
                    <th>#</th>
                    <th>İsim</th>
                    <th>Fiyat</th>
                    <th>Resim</th>
                    <th>Aktiflik</th>
                    <th>Anasayfa</th>
                    <th>İşlemler</th>
                </tr>
            </thead>
            <tbody>
            @if( count( $products ) )
            @foreach( $products as $value )
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->price}}</td>
                @if(isset($product->firstImage->api))
                @if($value->firstImage->api==1)
                <td><img src="{{ @$value->firstImage->images }}" width="75" height="75"></td>
                    @endif
                @else
                    <td><img src="{{ asset(@$value->firstImage->images) }}" width="75" height="75"></td>
                    @endif
                @if( $value->active )
                <td class="text-success font-weight-bold">Aktif</td>
                @else
                <td class="text-warning font-weight-bold">Pasif</td>
                @endif
                @if( $value->home_type )
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
                            <a href="{{route('product',['slug'=>Str::slug($value->name) ,'id'=>$value->id])}}" target="_blank" class="dropdown-item"><i class="la la-eye"></i>Gör</a>
                            <a href="{{route('product-company-home_type',$value->id)}}" class="dropdown-item"><i class="la la-eye"></i>Anasayfa Yap</a>
                            @if( $value->active )
                            <a href="{{route('product-company-active',$value->id)}}"  class="dropdown-item"><i class="la la-edit"></i>Pasif Yap</a>
                            @else
                            <a href="{{route('product-company-active',$value->id)}}" class="dropdown-item"><i class="la la-edit"></i>Aktif Et</a>
                            @endif
                            <form action="{{route('product_admin.destroy',$value->id)}}" method="post">
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
    {{ $products->links() }}

        <!--end: Datatable -->
    </div>
</div>

@endsection

@section('footer')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <script>

        $('document').ready(function () {
            $('#company').on('keyup',function () {
                var company = $('#company').val();

                if ( company.length < 3 ) {
                    $('#exist').html('');
                    return false;
                }

                $.post("{{route('product_find_by_name')}}",
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

@endsection

