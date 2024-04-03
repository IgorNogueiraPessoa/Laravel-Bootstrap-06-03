<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    //select padrao
    public function index(Request $req){
        $contato = Contato::all();
        return view('form')->with("contato", $contato);
    }

    public function listar(Request $req){
        $contato = Contato::all();
        return view('list')->with("contato", $contato);
    }

    public function adicionar(Request $req){
        $contato = new Contato;
        $contato->nome = $req->nome;
        $contato->telefone = $req->telefone;
        $contato->origem = $req->origem;
        $contato->data_contato = $req->data_contato;
        $contato->observacao = $req->observacao;
        $contato->save();
        return redirect()->back();
    }

    //select * from where....
    public function editar(Request $req){
        $contato = Contato::find($req->id);
        return view('editar')->with("contato", $contato);
    }

    public function atualizar(Request $req){
        $contato = Contato::find($req->id);
        $contato->update(
        [
            "nome" => $req->nome,
            "telefone" => $req->telefone,
            "origem" => $req->origem,
            "data_contato" => $req->data_contato,
            "observacao" => $req->observacao
        ]    
        );
        return redirect()->back();
    }

    public function excluir(Request $req){
        $contato = Contato::find($req->id);
        $contato->delete();
        return redirect()->back();
    }
}