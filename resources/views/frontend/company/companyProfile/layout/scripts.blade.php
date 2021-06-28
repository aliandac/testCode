
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="{{ asset('js/company.js') }}"></script>
    <script src="{{asset('js/temp/toastr.min.js')}}"></script>
    <script src="{{asset('/js/toastr-app.js')}}"></script>

    <script>

        $('#send-survey-button').on('click', function () {
            let $array = [];
            $('.mm-survey-item input:checked').each(function (index, val) {
                $array.push($(this).val())
            });

            $.post("{{route('survey_save_post')}}", {
                _token: "{{csrf_token()}}",
                company_id: "{{$company->id}}",
                values: $array

            }, function (data) {
                if (data.status == true) {
                    swal("", "Anket gönderilmiştir. Teşekkürler.", "success");
                    location.reload();
                }
            });
        });

        $(document).ready(function () {
            $('#checkbox').on('click', function () {

                let status = $(this).is(':checked');
                if (status)
                    $('#send').removeAttr('disabled');
                else
                    $('#send').attr('disabled', 'disabled');
            });

            $('#send').on('click', function () {
                let formData = {
                    id: $('#id').val(),
                    name: $('#name').val(),
                    phone: $('#phone').val(),
                    email: $('#email').val(),
                    message: $('#message').val(),

                };
                captchaLength = grecaptcha.getResponse();

                if (!captchaLength.length == 0) {
                    if (validateEmail($('#email').val())) {
                        $.post("{{route('company_complaint_post')}}", {
                            _token: "{{csrf_token()}}",
                            data: formData
                        }, function (response) {
                            alert(response);
                            location.reload();
                        })
                    } else {
                        alert('Lütfen geçerli bir email adresi giriniz....')
                    }
                } else {
                    alert('lütfen captchayı doğrula');
                }
            })
        });

    </script>

    @if ( session()->has('message') )
        <script>
            message("{{ session('message') }}","{{ session('type') }}")
        </script>

    @elseif( count( $errors ) )
        <script>
            message("{{ $errors->first() }}","{{ 'warning' }}")
        </script>

        <script src="{{asset('js/temp/toastr.min.js')}}"></script>
        <script src="{{asset('/js/toastr-app.js')}}"></script>
    @endif
    @php
        $message = "Talepleri Görüntülemek İçin Kayıt Olmanız Gerekmektedir.";
    @endphp

    @auth
        @php
            $message = "Talepleri Görüntülemek İçin Uygun Paketi Seçip Satın Almanız Gerekmektedir.";
        @endphp
    @endauth

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="{{asset('/js/sweet.js')}}"></script>
    <script>

        $("a.sweet-alert-btn").click(function(){
            sweetMessage('Bilgi',"{!! $message !!}",'warning');
        });

    </script>
@endsection
