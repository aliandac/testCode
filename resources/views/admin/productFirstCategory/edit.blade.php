@extends('admin.layouts.master')
@section('title',' Ürün Ana   Kategori Güncelle')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                       Ürün Ana   Kategori Güncelle
                    </h3>
                </div>
            </div>
            @include('admin.layouts.partials.alert')
            @include('admin.layouts.partials.error')
            <form class="kt-form" method="post" action="{{route('FirstProductCategory.update',$FirstProductCategory->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="kt-portlet__body">
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Kategori Adı :</label>
                            <input type="text" class="form-control" name="title" id="select"  value="{{old('title',$FirstProductCategory->title)}}">
                        </div>
                    </div>
                    @foreach($product as $item)
                        <div class="col-md-3">
                            <label><input type="checkbox" class="check" {{ \App\Models\Product\FirstProductCategoryDetail::where('cId',$item->id)->where('firstId',$FirstProductCategory->id)->count()>0?'checked':'' }} name="category[]" value="{{ $item->id }}" /> {{ $item->name }} </label>
                        </div>
                    @endforeach
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label for="cat_id">Alt Slider :</label>
                            <select name="down_slider" id="down_slider" class="form-control">
                                <option value="0" {{ $FirstProductCategory->down_slider==0?'selected':'' }} >HAYIR</option>
                                <option value="1" {{ $FirstProductCategory->down_slider==1?'selected':'' }}  >EVET</option>
                            </select>
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Resim</label>
                            <div></div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image" id="customFile">
                                <label class="custom-file-label" for="customFile">Dosya Seç</label>
                            </div>
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>url :</label>
                            <input type="text" class="form-control" name="url" id="url"  value="{{old('title',$FirstProductCategory->url)}}">
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <button type="submit" class="btn btn-primary">Güncelle</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
@section('footer')
    <script>
        $('.select2').select2();
    </script>
    <script>
        $(document).ready(function(){
            $("#select").change(function(){
                test = convertToSlug($("#select").val())
                $('#seo_url').val(test)
            });
        });

        function convertToSlug(str) {
            str = str.replace(/^\s+|\s+$/g, ''); // trim
            str = str.toLowerCase();

            // remove accents, swap ñ for n, etc
            var from = "ãàáäâẽèéëêìíïîõòóöôùúüûñçşğı·/_,:;";
            var to   = "aaaaaeeeeeiiiiooooouuuuncsgi------";
            for (var i=0, l=from.length ; i<l ; i++) {
                str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
            }

            str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
                .replace(/\s+/g, '-') // collapse whitespace and replace by -
                .replace(/-+/g, '-'); // collapse dashes

            return str;
        };
    </script>
@endsection
