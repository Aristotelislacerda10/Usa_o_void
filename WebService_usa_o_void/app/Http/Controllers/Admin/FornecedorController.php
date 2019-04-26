<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\fornecedor;
use App\Estado;

class FornecedorController extends Controller
{
    public function consultafornecedor(){

        $registros = Fornecedor::all();


        return view('admin.fornecedor.consultafornecedor', compact('registros'));
    }

    public function adicionar (){

        $listaestados = Estado::all('id','uf');



        return view('admin.fornecedor._formFornecedor', compact('listaestados'));
    }

    public function salvar(Request $req){

        $dados = $req->all();
        fornecedor::create($dados);



        return redirect()->route('admin.fornecedor.consultaFornecedor');


    }

    public function deletar($id)
    {
        fornecedor::find($id)->delete();

        return redirect()->route('admin.fornecedor.consultaFornecedor');

    }
}
