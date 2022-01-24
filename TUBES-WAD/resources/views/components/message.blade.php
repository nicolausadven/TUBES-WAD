@if (session()->has('success'))

    <div class="alert alert-primary alert-success fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <strong>{{ Session::get('success') }}</strong>

    </div>

@endif


@if (session()->has('errors'))

    <div class="alert alert-danger alert-dismissible show fade">

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <div class="col-12">
        <div class="alert alert-primary alert-danger fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <strong>{{ Session::get('errors') }}</strong>
        </div>
    </div>

@endif

