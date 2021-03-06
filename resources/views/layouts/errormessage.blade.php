@if($errors->any())
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{$errors->first()}}
</div>
@endif

@if(session()->has('emessage'))
    <div class="alert alert-danger alert-dismissible show" role="alert">
        {{ session()->get('emessage') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif