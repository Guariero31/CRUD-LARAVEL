<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use function Laravel\Prompts\alert;

class UserController extends Controller
{


    private User $objUser;

    public function __construct()
    {
        $this->objUser = new User();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = $this->objUser->all();
        return view('users.user', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.user_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $create = $this->objUser->create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => password_hash($request->input('password'), PASSWORD_DEFAULT),
        ]);
        if ($create) {
            return redirect()->to('/users')->with('success', 'Usuário cadastrado com sucesso!');

        }
        return redirect()->back()->with('success', 'Ocorreu um erro tente novamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //dd($user);
        return view('users.user_show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.user_edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->objUser->where('id', $id)->update($request->except(['_token', '_method']));
        if ($updated) {
            return redirect()->to('/users')->with('success', 'Atualizado com sucesso!');
        }
        return redirect()->back()->with('success', 'Ocorreu um erro tente novamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = $this->objUser->where('id', $id)->delete();

        if ($deleted) {
            return redirect()->back()->with('success', 'Usuário excluído com sucesso!');
        } else {
            return redirect()->back()->with('error', 'Ocorreu um erro ao excluir o usuário. Por favor, tente novamente.');
        }
    }

}
