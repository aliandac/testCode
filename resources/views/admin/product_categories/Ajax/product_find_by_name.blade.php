@foreach($companies as $company)

<ul class="list-group">
    <li class="list-group-item">
        <strong> {{$company['name']}} </strong>
        <a style="float:right;" class="btn btn-info" href="{{route('product_category.edit',$company->id)}}">Güncelle</a>

        @if( $company->active == 0 )
        <a style="float:right;" class="btn btn-primary mr-2" href="{{route('product-company-category-active',$company->id)}}">Aktif Et</a>
        @else
        <a style="float:right;" class="btn btn-dark text-warning mr-2" href="{{route('product-company-category-active',$company->id)}}">Pasif Et</a>
        @endif

    </li>
</ul>

@endforeach
