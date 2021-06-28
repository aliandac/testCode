@extends('admin.layouts.master')
@section('title','Firma Gücelleme')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Firma Profil
                        <br>
                        {{@$message}}
                    </h3>
                </div>
            </div>
            @include('admin.layouts.partials.alert')
            @include('admin.layouts.partials.error')
            <form class="kt-form" method="post" action="{{route('company_update_by_admin')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$company->id}}">
                <div class="kt-portlet__body">
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Firma ismi :</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name',$company->name) }}" required>
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Email :</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email',$company->email) }}" required>
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Facebook :</label>
                            <input type="text" class="form-control" name="facebook" value="{{ old('facebook',$company->facebook) }}">
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Twitter :</label>
                            <input type="text" class="form-control" name="twitter" value="{{ old('twitter',$company->twitter) }}">
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Linkedin :</label>
                            <input type="text" class="form-control" name="linkedin" value="{{ old('linkedin',$company->linkedin) }}">
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>İnstagram :</label>
                            <input type="text" class="form-control" name="instagram" value="{{ old('instagram',$company->instagram) }}">
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Firma Hakkında :</label>
                            <textarea class="form-control ckeditor" name="content" required>{{old('content',$company->content)}}</textarea>
                        </div>
                    </div>

                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Açıklama :</label>
                            <textarea class="form-control" name="description" required>{{old('description',$company->description)}}</textarea>
                        </div>
                    </div>

                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Firma Adresi:</label>
                            <textarea onblur="initMap(this.value)"  minlength="45" maxlength="250"  class="form-control" name="company_address">{{old('company_address',$company->company_address)}}</textarea>
                        </div>
                    </div>

                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <div id="map" style="width:100%;height:35vh;"></div>
                        </div>
                    </div>

                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label for="latitude">Enlem</label>
                            <input readonly type="text" id="latitude" name="latitude">
                        </div>
                    </div>

                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label for="longitude">Boylam</label>
                            <input readonly type="text" id="longitude" name="longitude">
                        </div>
                    </div>

                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Yetkili kişi :</label>
                            <input type="text" class="form-control" name="authorized_person" value="{{ old('authorized_person',$company->authorized_person) }}">
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>firmanın tanıtım video linki :</label>
                            <input type="text" class="form-control" name="video_url" value="{{ old('video_url',$company->video_url) }}">
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>firmanın tanıtım web sitesi :</label>
                            <input type="url" class="form-control" name="website_url" value="{{ old('website_url',$company->website_url) }}">
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>firmanın birincil telefonu :</label>
                            <input type="tel" class="form-control" name="first_phone" value="{{ old('first_phone',$company->first_phone) }}" required/>
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>firmanın ikincil telefonu :</label>
                            <input type="tel" class="form-control" name="second_phone" value="{{ old('second_phone',$company->second_phone) }}"/>
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>firmanın fax telefonu :</label>
                            <input type="tel" class="form-control" name="fax_number" value="{{ old('fax_number',$company->fax_number) }}"/>
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>firmanın whatsapp numarası:</label>
                            <input type="tel" class="form-control" name="company_whatsapp" value="{{ old('company_whatsapp',$company->company_whatsapp) }}">
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Pk :</label>
                            <input type="text" class="form-control" name="zip_code" value="{{ old('zip_code',$company->zip_code) }}"/>
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Etiket :</label>
                            <div class="tags-group" id="tags">
                                <div v-for="(item,index) in tagsArray" v-if="index>0" class="tag" v-on:submit.prevent> @{{item}} <i class="fa fa-close" v-on:click="deleteTag(index)"></i> </div>
                                <!--<input type="text" class="tag-form form-control border-griy" id="exampleInputEmail1" v-on:submit.prevent placeholder="tag,foo,bar,ihale..... " name="tags" v-on:keyup="addTag" v-model="tag" value="{{old('tags',$company->tags)}}">-->
                                <input type="text" class="tag-form form-control border-griy" id="exampleInputEmail1" v-on:submit.prevent placeholder="tag,foo,bar,ihale..... " name="tags" value="{{old('tags',$company->tags)}}">
                               <!-- <small id="emailHelp" class="form-text text-muted">
                                    <input type="hidden" name="tags" v-model="tags">
                                </small>-->
                            </div>
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label for="category_id"> Kategori :</label>1
                            <select name="category_id" id="category_id" class="form-control select2" required>
                                <option value="0">Ana Kategori</option>
                                @foreach($categories as $category)
                                    @if($category->parent_id!=0)
                                        <option value="{{ $category->id }}" {{old('category_id',$company->category_id)==$category->id ? 'selected':null}}>{{ $category->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label for="language_id"> Dil seçiniz :</label>
                            <select name="language_id" id="language_id" class="form-control select2">
                                <option value="0">Dil seçiniz</option>
                                @foreach($languages as $language)
                                    <option value="{{ $language->id }}" {{old('language_id',$company->language_id)==$language->id ? 'selected':null}}>{{ $language->name }}</option>

                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label for="user">Kullanıcı seç :</label>
                            <select name="user" id="user" class="form-control select2" required>
                                <option>Bir user seç</option>
                                <option value="0" {{old('user')==0 ? 'selected':null}}>Yeni kullanıcı oluştur(firmanın emaili ile)   </option>
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}" {{old('user',$company->user_id)==$user->id ? 'selected':null}}>{{ $user->name.' '.$user->email }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label for="type">Merkez :</label>
                                <select name="type" id="type" class="form-control select2">
                                    <option value="0" {{ $company->type == 0 ? 'selected':'' }}> HAYIR  </option>
                                    <option value="1" {{ $company->type == 1 ? 'selected':'' }}> EVET  </option>
                                </select>
                        </div>
                    </div>

                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label for="country_id">Ülke seç :</label>
                            <select name="country_id" id="country_id" class="form-control select2" required>
                                <option value="0">ülke seçiniz</option>
                                @foreach($countries as $country)
                                    <option value="{{ $country->id }}" {{old('country_id',$company->country_id) == $country->id ? 'selected':null}}>{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label for="city_id">Şehir seç :</label>
                            <select name="city_id" id="city_id" class="form-control select2" required>
                                <option value="0">Şehir seçiniz</option>
                                @foreach ( $cities as $value )
                                    <option value="{{ $value->id }}" {{ ( $value->id == $company->city_id ) ? 'selected':'' }}>{{ $value->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label for="work_days">Çalışma Günleri Seç :</label>
                            <select name="work_days[]" id="work_days" class="form-control select2" multiple>
                                @foreach( $days as $key => $value)
                                    <option value="{{$key}}" {{in_array($key,old('work_days',explode(',',$company->work_days)) ?? []) ? 'selected':null}}>{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Resim</label>
                            <div>
                                <img height="100"  width="100" src="{{$company->image}}" alt="">
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="file" id="customFile" accept="image/*">
                                <label class="custom-file-label" for="customFile">Dosya Seç</label>
                            </div>
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Açılış saati :</label>
                            <input type="time" class="form-control" name="work_start_time" value="{{ old('work_start_time',$company->work_start_time) }}"/>
                        </div>
                    </div>
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>kapanış saati :</label>
                            <input type="time" class="form-control" name="work_finish_time" value="{{ old('work_finish_time',$company->work_finish_time) }}"/>
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
        /**
         * get old input tags from laravel for vue js
         * @type {string}
         */
        let getOldTagsFromLaravel='{{old("tags",$company->tags)}}';
    </script>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="{{asset('vue/create_demand_tag.js')}}"></script>
    <script>
        $('.select2').select2();
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDL6V0Edl1OxRom34eXQRC2OGNwxMX5wk0"></script>
    <script src="{{asset('js/map/map.js')}}"></script>
    <script>
        initMap("{{$company->company_address}}");
    </script>

    <script>

        $('#country_id').change(function (e) {

            $('#city_id').html('');
            $.ajax({
                type: "POST",
                url: '{{ route('province_districts') }}',
                data: {_token: '{{ csrf_token() }}', country: $("#country_id option:selected").val()},
                success: function (result) {
                    console.log(result);
                    $.each(result.data, function (key, data) {
                        $('#city_id').append(`<option  value="${data.id}">${data.name}</option>`);
                    });
                }
            });

        });
        $('#city_id').change(function (e) {
            $('#district_id').html('');
            $.ajax({
                type: "POST",
                url: '{{ route('cities_districts') }}',
                data: {_token: '{{ csrf_token() }}', city_id: $("#city_id option:selected").val()},
                success: function (result) {
                    console.log(result);
                    $.each(result.data, function (key, data) {
                        $('#district_id').append(`<option  value="${data.id}">${data.name}</option>`);
                    });
                }
            });


        });


    </script>
@endsection
