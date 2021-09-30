{{-- // message en cas de succes --}}
@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <div class="container mx-auto">
            <strong>{{ $message }}</strong>
        </div>
    </div>
@endif

{{-- // message en cas de warning --}}
@if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-block">
        <div class="container mx-auto">
            <strong>{{ $message }}</strong>
        </div>
    </div>
@endif

{{-- // message en cas de warning --}}
@if ($message = Session::get('danger'))
    <div class="alert alert-danger alert-block">
        <div class="container mx-auto">
            <strong>{{ $message }}</strong>
        </div>
    </div>
@endif

{{-- // message en cas de errors --}}
@if ($errors->any())
    <div class="alert alert-danger alert-block">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
