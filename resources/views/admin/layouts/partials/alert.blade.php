@if( session()->has('message') )
<div class="alert alert-{{session('type')}} fade show" role="alert">
    <div class="alert-icon"><i class="fa fa-check-circle"></i></div>
    <div class="alert-text">{{session('message')}}</div>
    <div class="alert-close">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="la la-close"></i></span>
        </button>
    </div>
</div>
@endif