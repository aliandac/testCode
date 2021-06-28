@extends('frontend.mail.layout.master')

@section('mail-content')

    <p>
        Aşağıdaki linki tıklayarak şifrenizi değiştirebilirsiniz.
    </p>
    
    {{$actionUrl}}

@endsection