@extends('admin.layouts.master')
@section('title','Paket Tanımla')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Paket Tanımla
                        </h3>
                    </div>
                </div>
                @include('admin.layouts.partials.alert')
                @include('admin.layouts.partials.error')
                <form class="kt-form" method="post" action="{{route('packageSetCompanyPost')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="kt-portlet__body">
                        <div class="kt-section kt-section--first">
                            <div class="form-group">
                                <label for="parent">Paketler :</label>
                                <select name="package" id="package" class="form-control select2">
                                    @foreach($packages as $package)
                                        <option value="{{ $package->id }}">{{ $package->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="hidden" value="{{ $company->id }}" name="company">
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
