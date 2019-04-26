<?php

namespace App\Http\Controllers\WebService;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Vendedor;

class VendedorController extends Controller
{
    public function buscaVendedor()
    {

        return Vendedor::all()->toJson();

    }

}
