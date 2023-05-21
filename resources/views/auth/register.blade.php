@extends('frontend.default')
@section('title', 'Registrasi')
@section('content')

    <div class="container py-3">
        <h2 class="text-capitalize text-center mb-2">Registrasi</h2>
        <div class="d-flex justify-content-center">
            <form class="w-50" action="{{ route('register') }}" method="POST">
                @csrf
                <div class="row mb-3 mb-3">
                    <div class="col d-flex align-items-center">
                        <i class="bi bi-person-circle fs-2 me-2"></i>
                        <div class="w-100 position-relative">
                            <input class="form-control h-full" id="first_name" name="name" autocomplete="off"
                                placeholder="your name" value="{{ old('name') }}">
                            @error('name')
                                <span class="register text-danger position-absolute top-100"
                                    data-error="{{ $message }}">{{ $message }}</span>
                            @enderror()
                        </div>
                    </div>

                </div>

                <div class="row mb-3">
                    <div class="col d-flex align-items-center">
                        <i class="bi bi-envelope-at-fill me-2 fs-2"></i>
                        <div class="position-relative w-100">
                            <input class="form-control" id="email" name="email" autocomplete="off"
                                placeholder="sma1.belga@gmail.com" type="email" value="{{ old('email') }}">
                            @error('email')
                                <span class="position-absolute top-100 register text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class=" row mb-3">
                    <div class="col d-flex align-items-center">
                        <i class="bi bi-lock-fill me-2 fs-2"></i>
                        <div class="position-relative w-100">
                            <input class="form-control" id="password" name="password" type="password"
                                placeholder="password" class="@error('password') invalid @enderror">
                            @error('password')
                                <span class="position-absolute top-100 register text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col d-flex align-items-center">
                        <i class="bi bi-lock-fill me-2 fs-2"></i>
                        <div class="position-relative w-100">
                            <input class="form-control" id="password_confirmation" placeholder="confirm password"
                                name="password_confirmation" autocomplete="off" type="password">
                            @error('password_confirmation')
                                <span class="text-danger position-absoulte top-100">{{ $message }}hai</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="w-25 btn btn-primary text-light">kirim</button>
                </div>
            </form>
        </div>
    </div>
@endsection
