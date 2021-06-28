@foreach($companies2 as $company)

    <ul class="list-group">
        <li class="list-group-item">
            <strong style="color: red;"> {{$company['title']}} </strong>
            <a style="float:right;" class="btn btn-info" href="{{route('productSliderFirstCategory',$company['id'])}}">Gör</a>


        </li>
    </ul>

@endforeach
@foreach($companies as $company)

<ul class="list-group">
    <li class="list-group-item">
        <strong> {{$company['name']}} </strong>
        <a style="float:right;" class="btn btn-info" href="{{route('product_slider.show',$company->id)}}">Gör</a>


    </li>
</ul>

@endforeach

