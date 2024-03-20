<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index(Request $req){
        $contato = Contato::all();
        return view('form')->with("contato", $contato);
    }

    public function adicionar(Request $req){
        $contato = new Contato;
        $contato->nome = $req->nome;
        $contato->telefone = $req->telefone;
        $contato->origem = $req->origem;
        $contato->data_contato = $req->data_contato;
        $contato->save();
        return redirect()->back();
    }
}