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
        $qtdfornecedores = Fornecedor::count();
        $qtdvendedores = Vendedor::count();
        $qtdprodutos = Produto::count();

        return view('home', compact('qtdclientes','qtdfornecedores','qtdvendedores','qtdprodutos'));
    }


}
