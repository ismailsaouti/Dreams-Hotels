@extends('layouts.app')
@section('content')              
<div class="row">
            <div class="row">
                <div class="title" >
                    <h2 style="color: rgb(245,162,28) ;">Se connecter ou créer un compte</h2>
                </div>
            </div>
            <div class="col-md-6 col-md-offset-3">
                            <?php //validate_user_registration()?>
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="{{ Route('login') }}">Se connecter</a>
                            </div>
                            <div class="col-xs-6">
                                <a href="{{ Route('register') }}" class="active" id="">S'inscrire</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                    <div class="form-group">
                                            <input type="text" name="name" id="last_name" class="form-control" placeholder="Prénom"  required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="last_name" id="last_name" tabindex="1" class="form-control" placeholder="Nom" value=""  required >
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="phone" id="phone" tabindex="1" class="form-control" placeholder="Téléphone" value="" a required>
                                    </div> 
                                    <div class="form-group">
                                        <input  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div> 
                                    <div class="form-group">
                                        <input  type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Mot de passe">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div> 
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="confirmer">
                                    </div> 
                                     <div class="form-group"> <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="S'inscrire">
                                            </div>
                                        </div>
                                     </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection 
