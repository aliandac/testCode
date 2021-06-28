@if(count( $errors ))
    <div class="row">
        <div class="col-md-12">
            <div class="alert-danger alert">
                <ul class="list-group">
                    @foreach( $errors->all() as $error )
                        <li style="list-style-type:none">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif