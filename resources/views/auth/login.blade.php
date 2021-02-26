@extends('layouts.app')

@section('content')

    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h1>Login Administrator</h1>
                        <div>
                            <input id="email" type="email" class="form-control input-login @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                        <div>

                            <input id="password" type="password" class="form-control input-login @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                        <div>
{{--                            <a class="btn btn-default submit" href="/">Masuk</a>--}}
                            <button type="submit" class="btn btn-default submit">
                                Masuk
                            </button>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <h1>SIAP ADMINISTRATOR!</h1>
                                <p>©2021 All Rights Reserved</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>

        </div>
    </div>

@endsection
