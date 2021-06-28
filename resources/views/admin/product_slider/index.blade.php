@extends('admin.layouts.master')
@section('title',"Slayt Listesi")
@section('content')

    <div class="alert alert-light alert-elevate" role="alert">
        <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
        <div class="alert-text">
            Toplamda {{$slides->count()}} slayt bulunmaktadır.
        </div>
    </div>
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                    <i class="kt-font-brand flaticon2-line-chart"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                    Slider
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <div class="kt-portlet__head-actions">
                        &nbsp;
                        <a href="{{route('product_slider.index')}}" class="btn btn-brand btn-elevate btn-icon-sm">
                            <i class="la la-plus"></i>
                            Tümü
                        </a>
                        <a href="{{route('product_slider.create')}}" class="btn btn-brand btn-elevate btn-icon-sm">
                            <i class="la la-plus"></i>
                            Slider Ekle
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.layouts.partials.alert')
        <div class="kt-portlet__body">
            <input id="company" class="form-control" placeholder="Slider Ara..." type="text" name="company">
            <div id="exist"></div>
            <br>
            {{ $slides->links() }}
            <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Başlık</th>
                    <th>Resim</th>
                    <th>Kategory</th>
                    <th>Slider Kategory</th>
                    <th>Aktiflik</th>
                    <th>İşlemler</th>
                </tr>
                </thead>
                <tbody>
                @if( $slides->count() )
                    @foreach( $slides as $value )
                        <tr>
                            <td>{{$value->id}}</td>
                            <td>{!! $value->title !!}</td>
                            <td><img src="{{ asset( $value->image ) }}" width="150" height="75"></td>
                            @if($value->category!=0)
                            <td> {{ $value->getCategory->name }}  </td>
                            <td> {{ @$value->getSliderCategory->name }}  </td>
                            @else
                                <td> <span style="color: red;"> <b> {{ @$value->getFirstCategory->title }} </b> </span> </td>
                                <td> {{ @$value->getSliderCategory->name }}  </td>
                            @endif
                            @if ( $value->active )
                                <td class="font-weight-bold text-success">Aktif</td>
                                @else
                                <td class="font-weight-bold text-warning">Pasif</td>
                            @endif
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-secondary" type="button" data-toggle="dropdown" aria-expanded="false">
                                        <i class="la la-cog"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a href="{{route('product_slider.edit',$value->id)}}" class="dropdown-item"><i class="la la-edit"></i>Güncelle</a>
                                        @if( $value->active )
                                            <a href="{{route('productSliderActive',$value->id)}}" class="dropdown-item"><i class="la la-close"></i>Pasif Yap</a>
                                        @else
                                            <a href="{{route('productSliderActive',$value->id)}}" class="dropdown-item"><i class="la la-check"></i>Aktif Et</a>
                                        @endif
                                    </div>
                                    <form action="{{route('product_slider.destroy',$value->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="dropdown-item pl-3" type="submit"><i style="font-size:20px;" class="la la-trash"></i>Sil</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <!--end: Datatable -->
            {{ $slides->links() }}
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

                $.post("{{route('product_slider_find_by_name')}}",
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
