<?php

namespace App\Http\Controllers\Site;

use App\Fornecedor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cliente;
use App\Vendedor;
use App\Produto;

class HomeController extends Controller
{
    public function index(){
        $qtdclientes = Cliente::all()->count();
        $qtdfornecedores = Fornecedor::all()->count();
        $qtdvendedores = Vendedor::all()->count();
        $qtdprodutos = Produto::all()->count();

        return view('home', compact('qtdclientes','qtdfornecedores','qtdvendedores','qtdprodutos'));
    }


}
