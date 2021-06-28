@foreach($companies as $company)

<ul class="list-group">
    <li class="list-group-item">
        <strong> {{$company['name']}} </strong>
        <a style="float:right;" class="btn btn-info" href="{{route('product',['slug'=>Str::slug($company->name) ,'id'=>$company->id])}}}">Gör</a>
        @if( $company->active == 0 )
        <a style="float:right;" class="btn btn-primary mr-2" href="{{route('product-company-active',$company->id)}}">Aktif Et</a>
        @else
        <a style="float:right;" class="btn btn-dark text-warning mr-2" href="{{route('product-company-active',$company->id)}}">Pasif Et</a>
        @endif
        @if( $company->home_type == 0 )
            <a style="float:right;" class="btn btn-primary mr-2" href="{{route('product-company-home_type',$company->id)}}">Anasayfa Yap</a>
        @else
            <a style="float:right;" class="btn btn-dark text-warning mr-2" href="{{route('product-company-home_type',$company->id)}}"> Anasayfadan al</a>
        @endif
        <form action="{{route('product_admin.destroy',$company->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-info" type="submit"><i style="font-size:20px;" class="la la-trash"></i>Sil</button>
        </form>

    </li>
</ul>

@endforeach
