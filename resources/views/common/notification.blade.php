@if (Session::has('notification'))
    <div class="alert alert-success">
        <strong>Success!</strong> {{ Session::get('notification') }}
    </div>
@endif