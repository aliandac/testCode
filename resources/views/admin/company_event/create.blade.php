@extends('admin.layouts.master')
@section('title','Ürün Kategorisi Ekle')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Ürün Kategorisi Ekle
                        </h3>
                    </div>
                </div>
                @include('admin.layouts.partials.alert')
                @include('admin.layouts.partials.error')
                <form class="kt-form" method="post" action="{{route('machine_category.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="kt-portlet__body">
                        <div class="kt-section kt-section--first">
                            <div class="form-group">
                                <label>Başlık :</label>
                                <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                            </div>
                        </div>
                        <div class="kt-section kt-section--first">
                            <div class="form-group">
                                <label for="parent">Üst Kategori :</label>
                                <select name="parent" id="parent" class="form-control select2">
                                    <option value="0">Ana Kategori</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
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
        $('.select2').select2();
    </script>
@endsection