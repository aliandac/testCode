@foreach($companies as $company)

<ul class="list-group">
    <li class="list-group-item">
        <strong> {{$company['name']}} </strong>
        <a style="float:right;" class="btn btn-info" href="{{route('Company_Profile',$company->id)}}">Güncelle</a>
        <a style="float:right;" class="btn btn-info mr-2" href="{{route('company-images',$company->id)}}">Fotoğraflar</a>

        @if( $company->active == 0 )
        <a style="float:right;" class="btn btn-primary mr-2" href="{{route('Company_Status',$company->id)}}">Aktif Et</a>
        @else
        <a style="float:right;" class="btn btn-dark text-warning mr-2" href="{{route('Company_Status',$company->id)}}">Pasif Et</a>
        @endif
        @if( $company->home_page == 0 )
            <a style="float:right;" class="btn btn-primary mr-2" href="{{route('HomePage_Status',$company->id)}}">Anasayfa Yap</a>
        @else
            <a style="float:right;" class="btn btn-dark text-warning mr-2" href="{{route('HomePage_Status',$company->id)}}">Anasayfa çıkart</a>
        @endif

    </li>
</ul>

@endforeach
