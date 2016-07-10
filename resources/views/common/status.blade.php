@if (Session::has('success'))
    <div class="flash alert alert-success" role="alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <p>{{ Session::get('success') }}</p>
    </div>
@endif

@if ($errors->any())
    <div class="flash alert alert-danger" role="alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        @foreach ( $errors->all() as $error )
            <p>
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> <span class="sr-only">Error:</span> {{ $error }}
            </p>
        @endforeach
    </div>
@endif