@extends('templates.main', ['titulo' => "Login"])
<!-- Preenche o conteúdo da seção "titulo" -->
@section('titulo') Login @endsection
<!-- Preenche o conteúdo da seção "conteudo" -->
@section('conteudo')        
        
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->


            
            <div class="row">
                <div class="col" >
                    <div class="form-floating mb-3">
                        <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                        <x-label for="email" :value="__('Email')" />
                    </div>
                </div>
            </div>


            <!-- Password -->
            
            <div class="row">
                <div class="col" >
                    <div class="form-floating mb-3">
                        <x-input id="password" class="form-control"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />
                        <x-label for="password" :value="__('Senha')" />
                        
                    </div>
                </div>
            </div>

    
            <div class="row">
                <div class="col" >
                    <div class="form-floating mb-3">
                        <div class="col-auto">
                            <x-button class="btn btn-success mt-15">
                                {{ __('entrar') }}
                            </x-button>
                        </div>
                    
                        <div class="col-auto">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Esqueceu sua senha?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                    
                </div>
            </div>

        
        

            
        </form>

@endsection

