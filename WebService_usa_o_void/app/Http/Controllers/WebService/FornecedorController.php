<?php

namespace App\Http\Controllers\WebService;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Fornecedor;

class FornecedorController extends Controller
{
    public function buscaFornecedor(){

        return Fornecedor::all()->toJson();
    }
}
