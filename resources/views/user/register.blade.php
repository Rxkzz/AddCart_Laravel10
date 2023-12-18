@extends('shop')
@section('scripts')
    

<section>
    <div class="container mt-5 pt-5 mb-4">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-6 m-auto">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <svg class="mx-auto my-3" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                          </svg>
                          @if($errors->any())
                          @foreach($errors->all() as $err)
                          <p class="alert alert-danger">{{ $err }}</p>
                          @endforeach
                          @endif
                          <form action="{{ route('register.action') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label>Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="name" value="{{ old('name') }}" />
                            </div>
                            <div class="mb-3">
                                <label>Username <span class="text-danger">*</span></label>
                                <input class="form-control" type="username" name="username" value="{{ old('username') }}" />
                            </div>
                            <div class="mb-3">
                                <label>Password <span class="text-danger">*</span></label>
                                <input class="form-control" type="password" name="password" />
                            </div>
                            <div class="mb-3">
                                <label>Password Confirmation<span class="text-danger">*</span></label>
                                <input class="form-control" type="password" name="password_confirm" />
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary">Register</button>
                                <a class="btn btn-danger" href="{{ route('home') }}">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><br><br>

@endsection