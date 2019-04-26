<?php

namespace App\Http\Controllers\WebService;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Produto;

class ProdutoController extends Controller
{
    public function buscaProduto()
    {

        return Produto::all()->toJson();

    }

    public function qtdProduto(){

        $qtdclientes = Produto::count();


        return response()->json($qtdclientes,200);

    }


}
