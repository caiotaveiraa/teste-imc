@extends('layouts.app-layout')
@section('resource-title', '')
@section('dashboard-content')

<div class="container">
    <div class="d-flex justify-content-center align-items-center custom">
        <div class="col-md-6">
        <h3 class="text-center mb-4">Cadastrar usuário</h3>
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('users.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="phone">Telefone</label>
                            <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" required autofocus>
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="weight">Peso (kg)</label>
                            <input id="weight" type="weight" class="form-control @error('weight') is-invalid @enderror" name="weight" required autofocus>
                            @error('weight')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="height">Altura (cm)</label>
                            <input id="height" type="height" class="form-control @error('height') is-invalid @enderror" name="height" required autofocus>
                            @error('height')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="message">Mensagem</label>
                            <input id="message" type="message" class="form-control @error('message') is-invalid @enderror" name="message" required autofocus>
                            @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">
                                Cadastrar
                            </button>
                        </div>

                        @if (session('error'))
                            <div class="alert alert-danger mt-2">
                                {{ session('error') }}
                            </div>

                            {{ session()->forget('error') }}
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .custom {
        min-height: 90vh;
        margin-left: 300px;
        margin-top: -50px;
    }
</style>

@endsection
