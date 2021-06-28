@extends('admin.layouts.master')
@section('title', $productSlider->title)
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Slayt Güncelle
                        </h3>
                    </div>
                </div>
                @include('admin.layouts.partials.alert')
                @include('admin.layouts.partials.error')
                {{-- $slide->getAttachment() --}}
                <form class="kt-form" method="post" action="{{route('product_slider.update', $productSlider->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="kt-portlet__body">
                        <div class="kt-section kt-section--first">
                            <div class="form-group">
                                <label>Başlık :</label>
                                <textarea type="text" id="content" class="form-control" name="title">{{old('title', $productSlider->title)}}</textarea>
                            </div>
                        </div>
                        <div class="kt-section kt-section--first">
                            <div class="form-group">
                                <label for="content">İçerik :</label>
                                <textarea type="text" id="content" class="form-control ckeditor" name="content">{{old('content', $productSlider->content)}}</textarea>
                            </div>
                        </div>
                        <div class="kt-section kt-section--first">
                            <div class="form-group">
                                <label for="cat_id">Kategori :</label>
                                <select name="category" id="category" class="form-control js-example-basic-single">
                                    <option value="0">AnaSayfa</option>
                                    @foreach( $productCategory as $value )
                                        <option value="{{$value->id}}" {{ $productSlider->category == $value->id?'selected':'' }}>{{$value->name}}</option>
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
                                        <option value="{{$value->id}}" {{ $productSlider->firstCategory == $value->id?'selected':'' }} >{{$value->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="kt-section kt-section--first">
                            <div class="row">
                                <div class="col-md-12">
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
                        </div>
                        <div class="kt-section kt-section--first">
                            <div class="form-group">
                                <label>Resim Alt :</label>
                                <input type="text" class="form-control" name="alt" value="{{old('alt',$productSlider->alt)}}">
                            </div>
                        </div>
                        <div class="kt-section kt-section--first">
                            <div class="form-group">
                                <label>Buton Metni :</label>
                                <input type="text" class="form-control" name="button_text" value="{{old('button_text',$productSlider->button_text)}}">
                            </div>
                        </div>
                        <div class="kt-section kt-section--first">
                            <div class="form-group">
                                <label>Buton Link :</label>
                                <input type="text" class="form-control" name="button_url" value="{{old('button_url',$productSlider->button_url)}}">
                            </div>
                        </div>
                        <div class="kt-section kt-section--first">
                            <div class="form-group">
                                <label for="category_id">Kategori :<span class="text-danger">*</span></label>
                                <select name="category_id"  class="form-control">
                                    @foreach( $slider_categories  as $value )
                                        <option  @if($value->id == $productSlider->category_id) selected="selected" @endif value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="kt-section kt-section--first">
                            <div class="form-group">
                                <label>1.Renk  :</label>
                                <input type="color" class="form-control" id="color" name="color_one" value="{{$productSlider->color_one}}">
                            </div>
                        </div>
                        <div class="kt-section kt-section--first">
                            <div class="form-group">
                                <label>2.Renk  :</label>
                                <input type="color" class="form-control" id="color" name="color_second" value="{{$productSlider->color_second}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <img src=" {{ asset( $productSlider->background )}}" class="rounded" style="width:250px;height:250px;border-radius:50%!important;">
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
        $('.js-example-basic-single').select2();
    </script>
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
