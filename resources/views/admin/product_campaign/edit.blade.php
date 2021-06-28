@extends('admin.layouts.master')
@section('title', 'Kampanya Güncelle')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Kampanya Güncelle
                        </h3>
                    </div>
                </div>
                @include('admin.layouts.partials.alert')
                @include('admin.layouts.partials.error')
                {{-- $slide->getAttachment() --}}
                <form class="kt-form" method="post" action="{{route('product_campaign.update', $productCampaign->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="kt-portlet__body">
                        <div class="kt-section kt-section--first">
                            <div class="form-group">
                                <label for="content">İçerik :</label>
                                <textarea type="text" id="content" class="form-control ckeditor" name="content">{{old('content', $productCampaign->content)}}</textarea>
                            </div>
                        </div>
                        <div class="kt-section kt-section--first">
                            <div class="form-group">
                                <label for="cat_id">Kategori :</label>
                                <select name="category" id="category" class="form-control js-example-basic-single">
                                    <option value="0">Kategori Seç</option>
                                    @foreach( $productCategory as $value )
                                        <option value="{{$value->id}}" {{ $productCampaign->category == $value->id?'selected':'' }}>{{$value->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="kt-section kt-section--first">
                            <div class="form-group">
                                <label for="cat_id">Firma :</label>
                                <select name="company" id="company" class="form-control js-example-basic-single">
                                    <option value="0">Firma Seç </option>
                                    @foreach( $company as $value )
                                        <option value="{{$value->id}}" {{ $productCampaign->company == $value->id?'selected':'' }}>{{$value->name}}</option>
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
