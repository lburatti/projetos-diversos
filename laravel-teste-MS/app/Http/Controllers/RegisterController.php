<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;

class RegisterController extends Controller
{
    public function index()
    {
        return view('list');
    }

    public function create()
    {
        return view('create');
    }
    
    public function createNew(Request $request)
    {
        $request->validate([
            'nome_completo' => 'required|min:10|max:50'
        ]);

        $register = Register::create([
            'nome_completo' => $request->input('nome_completo'),
        ]);

        return view('list')->with('register', $register);
    }

    public function edit($id)
    {
        $register = Register::find($id);
        return view('edit')->with('register', $register);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome_completo' => 'required|min:10|max:50'
        ]);

        $register = Register::find($id);

        $register->nome_completo = $request->input('nome_completo');
        
        $register->save();

        return view('list')->with('register', $register);
    }

    public function delete($id)
    {
        $register = Register::find($id);
        $register->delete();

        return redirect()->route('register.list')->with('alert-sucess', 'Cadastro excluido com sucesso');
    }
}
