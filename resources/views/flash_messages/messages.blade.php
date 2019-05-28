@if(Session::has('info'))
    <div class="alert alert-info" role="alert">
        {{Session::get('info')}}
    </div>

@endif

@if(Session::has('error'))
    <div class="alert alert-danger">
        {{Session::get('error')}}
    </div>
@endif
