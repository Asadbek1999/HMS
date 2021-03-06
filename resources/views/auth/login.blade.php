@extends('layouts.app')
@section('title')
Login
@endsection
@section('content')

<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    {{--Rasim joylashga div--}}

                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>


                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Hush kelibsiz aziz foydalanuvchi!</h1>
                            </div>


                            <form class="user" method="POST" action="{{ route('login') }}">
                                @csrf
                                {{--Email--}}
                                <div class="form-group">

                                    <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Login...">

                                    @if($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->frist('email') }}</strong>
                                    </span>
                                    @endif

                                </div>

                                {{--Password--}}
                                <div class="form-group">
                                    <input id="password" name="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" value="{{ old('password') }}" placeholder="Parol" autocomplete="current-password" required>

                                    @if($errors->has('password'))
                                        <span class="invalid-feedback " role="alert">
                                        <strong>{{$errors->frist('password')}}</strong>
                                    </span>
                                    @endif
                                </div>



                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="remember">Eslab qolish</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Login
                                </button>

                                <hr>
                            </form>

                            <div class="text-center">
                                @if (Route::has('password.request'))
                                    <a class="small" href="{{ route('password.request') }}">
                                        {{ __('Parolni unutdingizmi?')}}
                                    </a>
                                 @endif
                           </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection
