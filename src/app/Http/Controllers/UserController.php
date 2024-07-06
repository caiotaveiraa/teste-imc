<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function __construct(
        private UserService $service
    ) {}

    public function index()
    {
        try {
            return $this->service->index();
        } catch (\Throwable $th) {
            Log::error($th->getMessage());

            return redirect('/')->with('error', 'Erro interno, contate o administrador do sistema.');
        }
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(StoreUserRequest $request)
    {
        try {
            return $this->service->store($request->validated());
        } catch (\Throwable $th) {
            Log::error($th->getMessage());

            return redirect('/')->with('error', 'Erro interno, contate o administrador do sistema.');
        }
    }

    public function edit(int $id)
    {
        try {
            return $this->service->edit($id);
        } catch (\Throwable $th) {
            Log::error($th->getMessage());

            return redirect('/')->with('error', 'Erro interno, contate o administrador do sistema.');
        }
    }

    public function update(Request $request, int $id)
    {
        try {
            return $this->service->update($id, $request->all());
        } catch (\Throwable $th) {
            Log::error($th->getMessage());

            return redirect('/')->with('error', 'Erro interno, contate o administrador do sistema.');
        }
    }

    public function destroy(int $id)
    {
        try {
            return $this->service->destroy($id);
        } catch (\Throwable $th) {
            Log::error($th->getMessage());

            return redirect('/')->with('error', 'Erro interno, contate o administrador do sistema.');
        }
    }
}
