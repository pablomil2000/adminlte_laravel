@extends('admin.layout')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="login-box">
                    <div class="login-logo">
                        <a href="../../index2.html"><b>Admin</b>LTE</a>
                    </div>
                    <!-- /.login-logo -->
                    <div class="card">
                        <div class="card-body login-card-body">
                            <p class="login-box-msg">Sign in to start your session</p>
        
                            <form method="POST" action="{{ route('login') }}" arial-label="{{ __('Login') }}">
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
        
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
        
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control{{ $errors->has('password') ? 'is-invalid' :'' }}" placeholder="Password" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <div class="icheck-primary">
                                            <input type="checkbox" id="remember">
                                            <label for="remember">
                                                Remember Me
                                            </label>
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-4">
                                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </form>
        
                            <!-- /.social-auth-links -->
        
                            <p class="mb-1">
                                <a href="{{ Route('password.request') }}">I forgot my password</a>
                            </p>
                            
                        </div>
                        <!-- /.login-card-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
