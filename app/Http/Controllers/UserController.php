<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {

        $users = User::all();
            return view('admin.usuarios', \compact('users'));

    }

    public function create()
    {
        return view('admin.create-users');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'password' => 'required|string|min:6,max:255',
            ]);
    
            User::create($request->all());
    
            return redirect()->route('usuarios.index')
                             ->with('success', 'Categoria criada com sucesso!');
        }
    }

    public function show(User $user)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
            $user = User::findOrFail($id);
            return view('admin.update-users', \compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'password' => 'required|string|min:6,max:255',
        ]);
        
        $user = User::findOrFail($id);
        $user->update($request->all());

        return redirect()->route('usuarios.index')
                         ->with('success', 'Usuário atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('usuarios.index')
                         ->with('success', 'User deletado com sucesso.');
    }

}
