@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">{{ __('Vérifiez votre adresse e-mail ') }}</h4>
                <hr>
                @if (session('resent'))
                <p>{{ __(' le lien de vérification a été envoyé à votre adresse e-mail, Veuillez vérifier votre boîte de réception.') }}</p>
                @endif
                <p> {{ __('Avant de procéder, Veuillez vérifier votre e-mail') }} <strong>{{Auth::user()->email}}</strong>{{ __(' pour le lien de la vérification .') }}</p>
                                    <p>{{ __('Si vous n\'avez pas reçu l\'e-mail:') }}</p>
            </div>
            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('cliquez ici pour un autre lien ') }}</button>.
          </form>
        </div>
    </div>
</div>
@endsection
