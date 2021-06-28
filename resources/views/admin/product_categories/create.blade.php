@extends('admin.layouts.master')
@section('title','Kategori Ekle')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Kategori Ekle
                    </h3>
                </div>
            </div>
            @include('admin.layouts.partials.alert')
            @include('admin.layouts.partials.error')
            <form class="kt-form" method="post" action="{{route('product_category.store')}}" enctype="multipart/form-data">
            @csrf
                <div class="kt-portlet__body">
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Kategori Adı :</label>
                            <input type="text" class="form-control" name="name" required="required" id="select"  value="{{old('name')}}">
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Seo Açıklama :</label>
                            <textarea type="text" class="form-control" required="required" name="description">{{old('description')}}</textarea>
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Seo Anahtar Kelimeler :</label>
                            <input type="text" class="form-control" required="required" name="keywords" value="{{old('keywords')}}">
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Seo Url :</label>
                            <input type="text" class="form-control" required="required" name="seo_url" id="seo_url"  value="{{old('seo_url')}}">
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label for="cat_id">+18 :</label>
                            <select name="type" id="type" class="form-control js-example-basic-single">
                                <option value="0">Hayır</option>
                                <option value="1">Evet</option>
                            </select>
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Kategori Resmi</label>
                            <div></div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" required="required" name="image" id="customFile">
                                <label class="custom-file-label" for="customFile">Dosya Seç</label>
                            </div>
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label> Kategori :</label>
                            <select name="parent_id" id="parent_id" class="form-control">
                                <option value="0">Ana Kategori</option>
                                @foreach($productCategory as $value)
                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <button type="submit" class="btn btn-primary">Ekle</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
@section('footer')

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
