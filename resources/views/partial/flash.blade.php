@if (session('message'))
    <div class="alert alert-{{ session('alert-type') }} alert-dismissible fade show" role="alert" id="alert-message">
    {{ session('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if (session('status'))
    <div class="alert alert-{{ session('alert-type') }} alert-dismissible fade show" role="alert" id="alert-message">
        {{ session('status') }}
    </div>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
@endif


@if (session('resent'))
    <div class="alert alert-{{ session('alert-type') }} alert-dismissible fade show" role="alert" id="alert-message">
        {{ __('A fresh verification link has been sent to your email address.') }}
    </div>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
@endif
