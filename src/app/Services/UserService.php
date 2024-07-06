<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserService
{
    public function index()
    {
        $users = User::all();

        foreach ($users as $key => $user) {
            if (empty($user['weight']) || empty($user['height'])) {
                continue;
            }

            $height = $user['height'] / 100;

            $imc = number_format(($user['weight'] / $height ** 2), 2);

            switch (true) {
                case $imc < 16.9 :
                    $users[$key]['imc'] = $imc . ' - Muito abaixo do peso';
                    break;

                case $imc > 17 && $imc < 18.4 :
                    $users[$key]['imc'] = $imc . ' - Abaixo do peso';
                    break;

                case $imc > 18.5 && $imc < 24.9 :
                    $users[$key]['imc'] = $imc . ' - Peso normal';
                    break;

                case $imc > 25 && $imc < 29.9 :
                    $users[$key]['imc'] = $imc . ' - Acima do peso';
                    break;

                case $imc > 30 && $imc < 34.9 :
                    $users[$key]['imc'] = $imc . ' - Obsidade grau 1';
                    break;

                case $imc > 35 && $imc < 40 :
                    $users[$key]['imc'] = $imc . ' - Obsidade grau 2';
                    break;

                case $imc > 40 :
                    $users[$key]['imc'] = $imc . ' - Obsidade grau 3';
                    break;
            }
        }

        return view('users.index', ['users' => $users]);
    }

    public function store(array $data)
    {
        $data['password'] = Hash::make(Str::random(10));

        User::create($data);

        return redirect('/users')->with('success', 'Usuário criado com sucesso!');
    }

    public function edit(int $id)
    {
        $user = User::find($id);

        return view('users.edit', ['user' => $user]);
    }

    public function update(int $id, array $data)
    {
        $user = User::find($id);

        $user->update($data);

        return redirect('/users')->with('success', 'Usuário atualizado com sucesso!');
    }

    public function destroy(int $id)
    {
        $user = User::find($id);

        $user->delete();

        return redirect('/users')->with('success', 'Usuário excluído com sucesso!');
    }
}
