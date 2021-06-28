<span></span> <!-- for dark-overlay on the bg -->
<div class="container">
    <div class="row">
        @if( request()->segment(3) )
            @php
                $active = request()->segment(3);
            @endphp
        @else
            @php($active = "")
        @endif

        <div class="col-md-12 company_title_responsive">
            <h1 class="text-center" style="font-weight: bold;color:white;margin-top:12%;margin-bottom: 8%;">Firmalar - {{$get_country->name}}</h1>
            <ul class="companies-country-profile">
                <li class="{{ ( $categories[0]->slug == $active ) ? 'active':'' }}">
                    <a href="{{route('country-profil',['slug'=>$categories[0]->slug,'code'=>$country->country_code])}}">Ülke Profili</a>
                </li>
                <li class="{{ ( $categories[1]->slug == $active ) ? 'active':'' }}">
                    <a href="{{route('country-profil',['slug'=>$categories[1]->slug,'code'=>$country->country_code])}}">Pazar Bilgisi</a>
                </li>
                <li>
                    <a href="{{ route('companies-country',$country->country_code) }}">Firmaları Gör</a>
                </li>
            </ul>
        </div>
    </div>
</div>
