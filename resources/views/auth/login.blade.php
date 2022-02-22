@extends("theme.$theme.login")
@section('titulo')
    Login
@stop
@section('contenido')
<div class="login-box">
    <div class="login-logo">
        <!-- <b>FOGGY'S</b> -->
    </div>
    <div class="card p-3 bg-dark">
        <div class="card-body login-card-body bg-dark">
            <div class="row">
                <label class="login-box-msg col-12">Coloca tus datos para ingresar</label>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo">
                    <div class="input-group-append">
                        <div class="input-group-text bg-white">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">
                    <div class="input-group-append">
                        <div class="input-group-text bg-white">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-7 pt-2 icheck-primary">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>    
                        <label for="remember">
                            <span>Recordar</span>
                        </label>
                    </div>
                    <div class="col-5">
                        <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection