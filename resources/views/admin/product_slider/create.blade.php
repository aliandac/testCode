@extends('admin.layouts.master')
@section('title','Slayt Ekle')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Slayt Ekle
                        </h3>
                    </div>
                </div>
                @include('admin.layouts.partials.alert')
                @include('admin.layouts.partials.error')
                <form class="kt-form" method="post" action="{{route('product_slider.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="kt-portlet__body">
                        <div class="kt-section kt-section--first">
                            <div class="form-group">
                                <label>Başlık :</label>
                                <textarea type="text" id="content" class="form-control" name="title">{{old('title')}}</textarea>
                            </div>
                        </div>
                        <div class="kt-section kt-section--first">
                            <div class="form-group">
                                <label for="content">İçerik :</label>
                                <textarea type="text" id="content" class="form-control ckeditor" name="content">{{old('content')}}</textarea>
                            </div>
                        </div>
                        <div class="kt-section kt-section--first">
                            <div class="form-group">
                                <label for="cat_id">Kategori :</label>
                                <select name="category" id="category" class="form-control js-example-basic-single">
                                    <option value="0">Kategori Seç</option>
                                    @foreach( $productCategory as $value )
                                        <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="kt-section kt-section--first">
                            <div class="form-group">
                                <label for="cat_id">Birinci Kategori :</label>
                                <select name="firstCategory" id="firstCategory" class="form-control js-example-basic-single">
                                    <option value="0">Kategori Seç</option>
                                    @foreach( $firstCategory as $value )
                                        <option value="{{$value->id}}">{{$value->title}}</option>
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
                        <div class="kt-section kt-section--first">
                            <div class="form-group">
                                <label>Resim Alt :</label>
                                <input type="text" class="form-control" name="alt" value="{{old('alt')}}">
                            </div>
                        </div>
                        <div class="kt-section kt-section--first">
                            <div class="form-group">
                                <label>Buton Metni :</label>
                                <input type="text" class="form-control" name="button_text" value="{{old('button_text')}}">
                            </div>
                        </div>
                        <div class="kt-section kt-section--first">
                            <div class="form-group">
                                <label>Buton Link :</label>
                                <input type="text" class="form-control" name="button_url" value="{{old('button_url')}}">
                            </div>
                        </div>
                        <div class="kt-section kt-section--first">
                            <div class="form-group">
                                <label for="category_id">Kategori :<span class="text-danger">*</span></label>
                                <select name="category_id" class="form-control">
                                    @foreach( $slider_categories as $value )
                                        <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="kt-section kt-section--first">
                            <div class="form-group">
                                <label>Slay Arka Planın sadece renklerden oluşmasını istiyorsanız sadece renkleri
                                    seciniz.Eğer görselden oluşmasını istiyorsanız sadece görsel seciniz.</label>
                            </div>
                        </div>
                        <div class="kt-section kt-section--first">
                            <div class="form-group">
                                <label>1.Renk :<small>(Renkleri sıfırlamak için siyah rengi seciniz)</small></label>
                                <input type="color" class="form-control" id="color" name="color_one">
                            </div>
                        </div>
                        <div class="kt-section kt-section--first">
                            <div class="form-group">
                                <label>2.Renk :<small>(Renkleri sıfırlamak için siyah rengi seciniz)</small></label>
                                <input type="color" class="form-control" id="color" name="color_second">
                            </div>
                        </div>
                        <div class="kt-section kt-section--first">
                            <div class="form-group">
                                <label>Arka Plan Resmi <small>(Önerilen Boyut: 1920*540)</small></label>
                                <div></div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="background" id="customFile">
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
        $('.js-example-basic-single').select2();
    </script>

@endsection
