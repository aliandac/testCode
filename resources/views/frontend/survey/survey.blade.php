@if($isUserBelongsToThisCompany)

@if ( auth()->user()->companies()->count() )
    @php
        $companies = (array)auth()->user()->companies()->pluck('id');
        $companies = array_shift( $companies );
    @endphp
@endif

@if ( in_array( $company->id , $companies ) )
<div class="row">
    <div class="col-md-12 text-center" style="margin-top:20px">
        <h2>
            {!! $company->star->render !!}
        </h2>

        <h4>
            <img src="/img/anket.svg" width="40" height="40">
            Firma için  <span style="color:red">{{$company->star->count}}</span> adet oylama yapıldı.
            <span style="color:red">{{$company->star->short_average}}</span> puan aldı
        </h4>

        <div> @include('frontend.survey.graph') </div>
    </div>
</div>
@else
<div class="row">
    <div class="col-md-12 text-center" style="margin-top:20px">
        @if ( $statisticsblocking )
        <h2>
            {!! $company->star->render !!}
        </h2>

        <h4>
            <img src="/img/anket.svg" width="40" height="40">
            Firmanız için  <span style="color:red">{{$company->star->count}}</span> adet oylama yapıldı.
            <span style="color:red">{{$company->star->short_average}}</span> puan aldı
        </h4>

        <div> @include('survey.graph') </div>
        @endif

        @if ( !$statisticsblocking )
            <div class="alert alert-danger">
                Paketiniz İstatistikleri görüntülemek için uygun değildir.
            </div>
        @endif
    </div>
</div>
@endif

@else

<div class="mm-survey" id="go-up">

    <div class="mm-survey-progress">
        <div class="mm-survey-progress-bar mm-progress"></div>
    </div>

    <div class="mm-survey-results">
        <div class="mm-survey-results-container">
            <h3 class="mm-survey-results-score"></h3>
            <ul class="mm-survey-results-list"></ul>
        </div>
        <div class="mm-survey-results-controller">
            <div class="mm-back-btn">
                <button>Geri</button>
            </div>
        </div>
    </div>


    <div class="mm-survey-bottom">
        <div class="mm-survey-container">
            @php($i=0)
            @php($index=$i)
            @foreach($questions as $quiz)


                <div class="mm-survey-page {{$i==0 ? 'active':null}}" data-page="{{$i+1}}">
                    <div class="mm-survery-content">
                        <div class="mm-survey-question">
                            <p>{{$quiz->title}}?</p>
                        </div>
                        <div class="mm-survey-item">
                            <input type="radio" id="radio0{{$index+=1}}" data-item="{{$i+1}}" name="radio{{$i+1}}"
                                   value="1"/>
                            <label for="radio0{{$index}}"><span></span>
                                <p>Çok Kötü</p></label>
                        </div>
                        <div class="mm-survey-item">
                            <input type="radio" id="radio0{{$index+=1}}" data-item="{{$i+1}}" name="radio{{$i+1}}"
                                   value="2"/>
                            <label for="radio0{{$index}}"><span></span>
                                <p>Kötü</p></label>
                        </div>
                        <div class="mm-survey-item">
                            <input type="radio" id="radio0{{$index+=1}}" data-item="{{$i+1}}" name="radio{{$i+1}}"
                                   value="3"/>
                            <label for="radio0{{$index}}"><span></span>
                                <p>Orta</p></label>
                        </div>
                        <div class="mm-survey-item">
                            <input type="radio" id="radio0{{$index+=1}}" data-item="{{$i+1}}" name="radio{{$i+1}}"
                                   value="4"/>
                            <label for="radio0{{$index}}"><span></span>
                                <p>İyi</p></label>
                        </div>
                        <div class="mm-survey-item">
                            <input type="radio" id="radio0{{$index+=1}}" data-item="{{$i+1}}" name="radio{{$i+1}}"
                                   value="5"/>
                            <label for="radio0{{$index}}"><span></span>
                                <p>Çok İyi</p></label>
                        </div>
                    </div>
                </div>

                @php($i++)

            @endforeach
        </div>

        <div class="mm-survey-controller">
            <div class="mm-prev-btn">
                <button>GERİ</button>
            </div>
            <div class="mm-next-btn">
                <a disabled="true" href="#go-up">İLERİ</a>
            </div>
            <div class="mm-finish-btn">
                <button id="send-survey-button">GÖNDER</button>
            </div>
        </div>
    </div>
</div>
@endif
