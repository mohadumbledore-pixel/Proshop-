@extends('layouts.app')

@section('content')
<div class="container min-vh-100 d-flex align-items-center justify-content-center">
    <div class="card shadow-lg p-4" style="max-width: 400px; width: 100%;">
        
        <!-- Logo -->
        <div class="text-center mb-4">
            <h1 class="text-primary fw-bold">ProShop</h1>
        </div>

        <h2 class="text-center mb-4">Connexion à ProShop</h2>

        <!-- Session Status -->
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                       name="email" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                       name="password" required>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                <label class="form-check-label" for="remember_me">Se souvenir de moi</label>
            </div>

            <!-- Submit -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <a href="{{ route('register') }}" class="text-primary">Créer un compte</a>
                <button type="submit" class="btn btn-primary">Connexion</button>
            </div>

            <!-- Forgot Password -->
            @if (Route::has('password.request'))
                <div class="text-center">
                    <a class="text-secondary" href="{{ route('password.request') }}">
                        Mot de passe oublié ?
                    </a>
                </div>
            @endif
        </form>
    </div>
</div>
@endsection
