@extends('admin.layouts.master')
@section('title',$category->name)
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Kategori Güncelle
                    </h3>
                </div>
            </div>
            @include('admin.layouts.partials.alert')
            @include('admin.layouts.partials.error')
            <form class="kt-form" method="post" action="{{route('category.update',$category->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="kt-portlet__body">
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Kategori Adı :</label>
                            <input type="text" class="form-control" name="name" id="select"  value="{{old('category_title',$category->name)}}">
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Seo Açıklama :</label>
                            <textarea type="text" class="form-control" name="seo_description">{{old('seo_description',$category->seo_description)}}</textarea>
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Seo Anahtar Kelimeler :</label>
                            <input type="text" class="form-control" name="seo_keywords" value="{{old('seo_keywords',$category->seo_keywords)}}">
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Seo Url :</label>
                            <input type="text" class="form-control" name="seo_url" id="seo_url"  value="{{old('seo_url',$category->seo_url)}}">
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Anasayfa Resmi</label>
                            <div></div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="category_title_en" id="category_title_en">
                                <label class="custom-file-label" for="customFile">Dosya Seç</label>
                            </div>
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Kategori Logo</label>
                            <div></div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image" id="customFile">
                                <label class="custom-file-label" for="customFile">Dosya Seç</label>
                            </div>
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Kategori Resmi</label>
                            <div></div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="cover_image" id="customFile">
                                <label class="custom-file-label" for="customFile">Dosya Seç</label>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" value="{{ $category->id }}" name="id">
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label> Kategori :</label>
                            <select name="parent_id" id="parent_id" class="form-control">
                                <option value="0">Ana Kategori</option>
                                @foreach($categories as $value)
                                    <option {{ ( $value->id == $category->parent_id ) ? 'selected':'' }} value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Sanal Fuar Resmi</label>
                            <div></div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="virtual_image" id="customFile">
                                <label class="custom-file-label" for="customFile">Dosya Seç</label>
                            </div>
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label> Sanal Fuar İsim :</label>
                            <input type="text" class="form-control" name="virtual_title" id="virtual_title"  value="{{old('virtual_title',$category->virtual_title)}}">
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Sanal Fuar Slider Resmi</label>
                            <div></div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="virtual_back_image" id="customFile">
                                <label class="custom-file-label" for="customFile">Dosya Seç</label>
                            </div>
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label> Sanal Fuar Slider Başlık :</label>
                            <input type="text" class="form-control" name="virtual_back_title" id="virtual_back_title"  value="{{old('virtual_back_title',$category->virtual_back_title)}}">
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label> Sanal Fuar Slider Açıklama :</label>
                            <input type="text" class="form-control" name="virtual_back_content" id="virtual_back_content"  value="{{old('virtual_back_content',$category->virtual_back_content)}}">
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
