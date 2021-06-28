@extends('admin.layouts.master')
@section('title',$activity->name)
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Blog Güncelleme
                    </h3>
                </div>
            </div>
            @include('admin.layouts.partials.alert')
            @include('admin.layouts.partials.error')
            <form enctype="multipart/form-data" method="post" action="{{route('Activity_Updates')}}">
                @csrf
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Etkinlik Başlığı</label>
                        <input value="{{old('name',$activity->name)}}" name="name" class="form-control border-griy"
                               id="exampleInputEmail1"
                               aria-describedby="emailHelp" placeholder="Etkinlik başlığı giriniz">
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Etkinlik Acıklaması</label>
                        <textarea class="form-control border-griy" rows="5" style="width: 100%"
                                  name="description" placeholder="Etkinlik Acıklaması">{{old('description',$activity->discription)}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Firma seç</label>
                        <select class="form-control" name="company" id="exampleFormControlSelect1">
                            <option>Firma seçin</option>
                            @foreach($companies as $company)
                                <option
                                    value="{{$company->id}}" {{ old('company',$activity->company_id) == $company->id ? 'selected' : '' }}>{{$company->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <input type="hidden" value="{{ $activity->id }}" name="id" >
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Şehir/location</label>
                        <input class="form-control" type="text"  value="{{old('location',$activity->location)}}" name="location" placeholder="location">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">longitude</label>
                        <input class="form-control" type="text" name="longitude" value="{{old('longitude',$activity->longitude)}}" placeholder="longitude">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">latitude</label>
                        <input class="form-control" type="text" name="latitude" value="{{old('latitude',$activity->latitude)}}" placeholder="latitude">
                    </div>




                    <div class="form-group">
                        <label for="exampleInputEmail1" name="file"> Dosya Seç </label>
                        <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-cloud-upload"></i>&nbsp;Dosya Seç</button>
                            <input class="form-control" type="file" name="image" accept="image/*" placeholder="image">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Etkinlilk tarihi</label>
                        <input class="form-control" value="{{old('date',$activity->date)}}" type="date" name="date" placeholder="tarih">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Etkinlilk tarihi</label>
                        <input class="form-control"  type="time" value="{{old('time',$activity->time)}}" name="time" placeholder="zaman">
                    </div>
                    <div class="tags-group form-group" id="tags">
                        <label for="exampleInputEmail1">Tag Girin</label>
                        <div v-for="(item,index) in tagsArray" v-if="index>0"
                             class="tag" v-on:submit.prevent>
                            @{{item}} <i class="fa fa-close"
                                         v-on:click="deleteTag(index)"></i></div>
                        <input type="text" class="tag-form form-control border-griy" id="exampleInputEmail1" v-on:submit.prevent
                               placeholder="tag,foo,bar,ihale..... " name="tag" v-on:keyup="addTag" v-model="tag"
                               value="{{old('tags',$activity->tags)}}">
                        <small id="emailHelp" class="form-text text-muted">
                            <input type="hidden" name="tags" v-model="tags">
                        </small>
                    </div>
                </div>


                <div class="col-md-12" style="margin-top: 15px">

                    <button type="submit" class="btn btn-primary submit-button">Etkinlik ekle</button>
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
        /**
         * get old input tags from laravel for vue js
         * @type {string}
         */
        let getOldTagsFromLaravel='{{old("tags",$activity->tags)}}';
    </script>


    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="{{asset('vue/create_demand_tag.js')}}"></script>
    <script>
        $('#countriy').change(function (e) {
            $('#city').html('');
            $.ajax({
                type: "POST",
                url: '{{ route('province_districts') }}',
                data: {_token: '{{ csrf_token() }}', country: $("#countriy option:selected").val()},
                success: function (result) {
                    console.log(result);
                    $.each(result.data, function (key, data) {
                        $('#city').append(`<option  value="${data.id}">${data.name}</option>`);
                    });
                }
            });
        });
    </script>


@endsection
