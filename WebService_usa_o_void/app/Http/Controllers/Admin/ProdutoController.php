<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Produto;
use App\Fornecedor;

class ProdutoController extends Controller
{
    public function consultaproduto()
    {
            $registros = Produto::paginate(5);


        return view('admin.produto.consultaProduto', compact('registros'));

    }

    public function adicionar (){


        return view('admin.produto._formProduto');
    }
    public function salvar(Request $req){

        $dados = $req->all();
        Produto::create($dados);



        return redirect()->route('admin.produto.consultaProduto');


    }

    public function BuscaProduto(Request $request){

        $registros = Produto::where('descricao_pro','LIKE','%' . $request->descricao_pro . '%')->paginate();

      //dd($produtos);
      return view('admin.produto.consultaProduto', compact('registros'));

    }

    public function autocompleteSearch($texto){

        $data = Fornecedor::where('nome_for','LIKE',"%{$texto}%")->get();
        return response()->json($data);
    }


}
