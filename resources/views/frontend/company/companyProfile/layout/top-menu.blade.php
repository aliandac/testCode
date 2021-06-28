<div class="col-md-12 mobil-menu" style="text-align: center">
    <a href="{{route('MyCompanySlug',['slug'=> Str::slug($company->name) ,'id'=>$company->id])}}">
        <div class="col-md-2"
             style="    background-color: #f3f3f3;  height: 50px;  padding-top: 9px; font-size: 17px;font-weight: bold; border: 4px solid #fff;">
            <i class="fa fa-home"></i>
        </div>
    </a>
    <a href="{{route('MyCompanyProduct',['slug'=> Str::slug($company->name) ,'id'=>$company->id])}}">
        <div class="col-md-2"
             style=" background-color: #f3f3f3;  height: 50px;  padding-top: 9px; font-size: 17px;font-weight: bold; border: 4px solid #fff;">
            ÜRÜNLER
        </div>
    </a>
    <a href="{{route('MyCompanySlugAboutMe',['slug'=> Str::slug($company->name) ,'id'=>$company->id])}}">
        <div class="col-md-2"
             style="   background-color: #f3f3f3;  height: 50px;  padding-top: 9px; font-size: 17px;font-weight: bold; border: 4px solid #fff;">
            HAKKIMIZDA
        </div>
    </a>
    <a href="{{route('MyCompanySlugDemand',['slug'=> Str::slug($company->name) ,'id'=>$company->id])}}">
        <div class="col-md-2"
             style="    background-color: #f3f3f3;  height: 50px;  padding-top: 9px; font-size: 17px;font-weight: bold; border: 4px solid #fff;">
            TALEPLER
        </div>
    </a>
    <a href="{{route('MyCompanySlugDocument',['slug'=> Str::slug($company->name) ,'id'=>$company->id])}}">
        <div class="col-md-2"
             style="   background-color: #f3f3f3;  height: 50px;  padding-top: 9px; font-size: 17px;font-weight: bold; border: 4px solid #fff;">
            DÖKÜMANLAR
        </div>
    </a>
    <a href="{{route('MyCompanyCv',['slug'=> Str::slug($company->name) ,'id'=>$company->id])}}">
        <div class="col-md-2"
             style="   background-color: #f3f3f3;  height: 50px;  padding-top: 9px; font-size: 17px;font-weight: bold; border: 4px solid #fff;">
            İŞ İLANLARI
        </div>
    </a>
</div>
