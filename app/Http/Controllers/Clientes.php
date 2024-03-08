<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Cliente;


class Clientes extends Controller
{
    public function index(){
        $clientes = Cliente::all();

        return view('cliente.index',['clientes'=>$clientes]);
    }

    public function create(){
        return view('cliente.create',[]);
    }

    public function store(Request $request){
        $cliente = new Cliente;
        $cliente->nome = $request->nome;
        $cliente->cpf = $request->cpf;
        $cliente->whatsapp = $request->whatsapp;
        $cliente->email = $request->email;
        $cliente->obs = $request->obs;


        $cliente->save();

        return redirect('/')->with('msg','Cliente cadastrado com sucesso.');
    }

    public function show($id){
        $cliente = Cliente::findOrFail($id);

        return view('cliente.show', ['cliente'=>$cliente]);
    }

    public function edit($id){
        $cliente = Cliente::findOrFail($id);

        return view('cliente.edit', ['cliente' => $cliente ]);
    }

    public function update(Request $request){
        $data = $request->all();
        
        Cliente::findOrFail($request->id)->update($data);

        return redirect('/')->with('msg', 'Cliente atualizado com sucesso!');
    }
}
