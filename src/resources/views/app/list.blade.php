@extends('layouts.app-layout')
@section('resource-title', 'Usuários')
@section('dashboard-content')

<div class="table-responsive full-width">
    @if (session('error'))
        <div class="alert alert-danger mt-2">
            {{ session('error') }}
        </div>

        {{ session()->forget('error') }}
    @endif

    @if (session('success'))
        <div class="alert alert-success mt-2">
            {{ session('success') }}
        </div>

        {{ session()->forget('success') }}
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Nome</th>
                <th class="text-center">Email</th>
                <th class="text-center">Telefone</th>
                <th class="text-center">Peso (kg)</th>
                <th class="text-center">Altura (cm)</th>
                <th class="text-center">Mensagem</th>
                <th class="text-center">IMC</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            @if (! empty($users))
                @foreach ($users as $user)
                    <tr>
                        <td class="text-center">{{ $user['id'] }}</td>
                        <td class="text-center">{{ $user['name'] }}</td>
                        <td class="text-center">{{ $user['email'] }}</td>
                        <td class="text-center">{{ $user['phone'] }}</td>
                        <td class="text-center">{{ $user['weight'] }}</td>
                        <td class="text-center">{{ $user['height'] }}</td>
                        <td class="text-center">{{ $user['message'] }}</td>
                        <td class="text-center">{{ $user['imc'] }}</td>
                        <td class="text-center">
                            <form action="{{ route('users.destroy', $user['id']) }}" method="POST">
                                <a href="{{ route('users.edit', $user['id']) }}" class="btn btn-primary">Editar</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>

    @if (empty($users))
        <div class="alert alert-danger mt-2">
            Não existem usuários cadastrados.
        </div>
    @endif
</div>

<style>
    .full-width {
        width: 121.5%;
    }
</style>

@endsection
