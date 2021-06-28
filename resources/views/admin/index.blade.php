@extends('admin.layouts.master')
@section('title','Admin Panel')

@section('site-details')

        <input id="company" type="text" name="company">
        <button id="button">ara</button>


    <div id="exist"></div>
    <br>

{{--<div class="row">
	<div class="col-xl-4 col-lg-4 order-lg-2 order-xl-1">
		<div class="kt-portlet kt-portlet--height-fluid">
			<div class="kt-widget14">
				<div class="kt-widget14__header">
					<h3 class="kt-widget14__title">
						Blog Sayısı
					</h3>
					<span class="kt-widget14__desc">
						Aktif Blog Sayısı
					</span>
				</div>
				<div class="kt-widget14__content">
					<div class="kt-widget14__chart">
						<div id="kt_chart_revenue_change" style="height: 150px; width: 150px;">
							<svg height="150" version="1.1" width="150" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.65625px; top: -0.015625px;">
								<desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.2.0</desc>
								<defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>
								<path fill="none" stroke="#34bfa3" d="M75,118.33333333333334A43.333333333333336,43.333333333333336,0,0,0,117.85251574201737,68.56263467263734" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path>
								<path fill="#34bfa3" stroke="#ffffff" d="M75,121.33333333333334A46.333333333333336,46.333333333333336,0,0,0,120.8192283703109,68.11697091920455L134.3342525658702,66.08672493134401A60,60,0,0,1,75,135Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
								<path fill="none" stroke="#fd3995" d="M117.85251574201737,68.56263467263734A43.333333333333336,43.333333333333336,0,0,0,82.89188458674082,32.39136313554092" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path>
								<path fill="#fd3995" stroke="#ffffff" d="M120.8192283703109,68.11697091920455A46.333333333333336,46.333333333333336,0,0,0,83.43824582736133,29.441534429539914L85.92722481241034,16.003425879979744A60,60,0,0,1,134.3342525658702,66.08672493134401Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
								<path fill="none" stroke="#5d78ff" d="M82.89188458674082,32.39136313554092A43.333333333333336,43.333333333333336,0,1,0,74.98638643205842,118.33333119491907" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path><path fill="#5d78ff" stroke="#ffffff" d="M83.43824582736133,29.441534429539914A46.333333333333336,46.333333333333336,0,1,0,74.98544395427786,121.333331046875L74.97957964808764,139.9999967923786A65,65,0,1,1,86.83782688011121,11.087044703311392Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
								<text x="75" y="65" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="15px" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 15px; font-weight: 800;" font-weight="800" transform="matrix(0.9848,0,0,0.9848,1.1364,1.1515)" stroke-width="1.0153846153846153">
									<tspan dy="6" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Blog</tspan>
								 </text>
									<text x="75" y="85" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="14px" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 14px;" transform="matrix(0.9028,0,0,0.9028,7.3015,7.4861)" stroke-width="1.1076923076923078">
										<tspan dy="5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">{{App\Models\Blog::where('active',1)->coun}}</tspan>
										</text>
							</svg>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--end:: Widgets/Revenue Change-->
	</div>
	<div class="col-xl-4 col-lg-4 order-lg-2 order-xl-1">
		<div class="kt-portlet kt-portlet--height-fluid">
			<div class="kt-widget14">
				<div class="kt-widget14__header">
					<h3 class="kt-widget14__title">
						Ürünler
					</h3>
					<span class="kt-widget14__desc">
						Aktif Ürün Sayısı
					</span>
				</div>
				<div class="kt-widget14__content">
					<div class="kt-widget14__chart">
						<div id="kt_chart_revenue_change" style="height: 150px; width: 150px;">
							<svg height="150" version="1.1" width="150" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.65625px; top: -0.015625px;">
								<desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.2.0</desc>
								<defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>
								<path fill="none" stroke="#34bfa3" d="M75,118.33333333333334A43.333333333333336,43.333333333333336,0,0,0,117.85251574201737,68.56263467263734" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path>
								<path fill="#34bfa3" stroke="#ffffff" d="M75,121.33333333333334A46.333333333333336,46.333333333333336,0,0,0,120.8192283703109,68.11697091920455L134.3342525658702,66.08672493134401A60,60,0,0,1,75,135Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
								<path fill="none" stroke="#fd3995" d="M117.85251574201737,68.56263467263734A43.333333333333336,43.333333333333336,0,0,0,82.89188458674082,32.39136313554092" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path>
								<path fill="#fd3995" stroke="#ffffff" d="M120.8192283703109,68.11697091920455A46.333333333333336,46.333333333333336,0,0,0,83.43824582736133,29.441534429539914L85.92722481241034,16.003425879979744A60,60,0,0,1,134.3342525658702,66.08672493134401Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
								<path fill="none" stroke="#5d78ff" d="M82.89188458674082,32.39136313554092A43.333333333333336,43.333333333333336,0,1,0,74.98638643205842,118.33333119491907" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path><path fill="#5d78ff" stroke="#ffffff" d="M83.43824582736133,29.441534429539914A46.333333333333336,46.333333333333336,0,1,0,74.98544395427786,121.333331046875L74.97957964808764,139.9999967923786A65,65,0,1,1,86.83782688011121,11.087044703311392Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
								<text x="75" y="65" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="15px" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 15px; font-weight: 800;" font-weight="800" transform="matrix(0.9848,0,0,0.9848,1.1364,1.1515)" stroke-width="1.0153846153846153">
									<tspan dy="6" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Ürünler</tspan>
								 </text>
									<text x="75" y="85" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="14px" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 14px;" transform="matrix(0.9028,0,0,0.9028,7.3015,7.4861)" stroke-width="1.1076923076923078">
										<tspan dy="5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">{{App\Models\Product::where('active',1)->count()}}</tspan>
										</text>
							</svg>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end:: Widgets/Revenue Change-->
	</div>
	<div class="col-xl-4 col-lg-4 order-lg-2 order-xl-1">
		<div class="kt-portlet kt-portlet--height-fluid">
			<div class="kt-widget14">
				<div class="kt-widget14__header">
					<h3 class="kt-widget14__title">
						Toplam Mesajlar
					</h3>
					<span class="kt-widget14__desc">
                        Gelen Mesaj Sayısı
					</span>
				</div>
				<div class="kt-widget14__content">
					<div class="kt-widget14__chart">
						<div id="kt_chart_revenue_change" style="height: 150px; width: 150px;">
							<svg height="150" version="1.1" width="150" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.65625px; top: -0.015625px;">
								<desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.2.0</desc>
								<defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>
								<path fill="none" stroke="#34bfa3" d="M75,118.33333333333334A43.333333333333336,43.333333333333336,0,0,0,117.85251574201737,68.56263467263734" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path>
								<path fill="#34bfa3" stroke="#ffffff" d="M75,121.33333333333334A46.333333333333336,46.333333333333336,0,0,0,120.8192283703109,68.11697091920455L134.3342525658702,66.08672493134401A60,60,0,0,1,75,135Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
								<path fill="none" stroke="#fd3995" d="M117.85251574201737,68.56263467263734A43.333333333333336,43.333333333333336,0,0,0,82.89188458674082,32.39136313554092" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path>
								<path fill="#fd3995" stroke="#ffffff" d="M120.8192283703109,68.11697091920455A46.333333333333336,46.333333333333336,0,0,0,83.43824582736133,29.441534429539914L85.92722481241034,16.003425879979744A60,60,0,0,1,134.3342525658702,66.08672493134401Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
								<path fill="none" stroke="#5d78ff" d="M82.89188458674082,32.39136313554092A43.333333333333336,43.333333333333336,0,1,0,74.98638643205842,118.33333119491907" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path><path fill="#5d78ff" stroke="#ffffff" d="M83.43824582736133,29.441534429539914A46.333333333333336,46.333333333333336,0,1,0,74.98544395427786,121.333331046875L74.97957964808764,139.9999967923786A65,65,0,1,1,86.83782688011121,11.087044703311392Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
								<text x="75" y="65" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="15px" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 15px; font-weight: 800;" font-weight="800" transform="matrix(0.9848,0,0,0.9848,1.1364,1.1515)" stroke-width="1.0153846153846153">
									<tspan dy="6" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Mesaj</tspan>
								 </text>
									<text x="75" y="85" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="14px" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 14px;" transform="matrix(0.9028,0,0,0.9028,7.3015,7.4861)" stroke-width="1.1076923076923078">
										<tspan dy="5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">{{App\Models\Message::count()}}</tspan>
										</text>
							</svg>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end:: Widgets/Revenue Change-->
	</div>
</div>--}}
        <a href="{{route('cache_clear')}}" class="btn btn-info waves-effect waves-light" type="submit">Cache Temizle</a>
@endsection

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script>
    $('document').ready(function () {
        $('#button').on('click',function () {
            var company=$('#company').val();
            $.post("{{route('company_find_by_name')}}",{_token:"{{csrf_token()}}",company:company},function (data) {

                console.log(data)
                $('#exist').html();
                $('#exist').html(data);
            });
        })
    });
</script>
