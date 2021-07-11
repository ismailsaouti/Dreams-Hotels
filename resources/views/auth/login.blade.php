@extends('layouts.app')

@section('content')
    <div class="te">
    <div class="row">
    <div class="title" >
     <h2 style="color: rgb(245,162,28) ;">Se connecter ou créer un compte </h2>
    </div>
    </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="{{ Route('login') }}" class="active" id="login-form-link">Se connecter</a>
                            </div>
                            <div class="col-xs-6">
                                <a href="{{ Route('register') }}" id="">S'inscrire</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                    <form id="login-form" method="POST" action="{{ route('login') }}"> 
                                        @csrf
                                       
                                            <div class="form-group">
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        

                                        <div class="form-group">
                                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder="Mot de passe" required autocomplete="current-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-6 offset-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Souviens-moi') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Se connecter') }}
                                                </button>

                                                @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Mot de passe oublié?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
@endsection




