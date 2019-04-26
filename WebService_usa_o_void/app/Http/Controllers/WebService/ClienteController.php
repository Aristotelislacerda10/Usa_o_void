<?php

namespace App\Http\Controllers\WebService;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Cliente;

class ClienteController extends Controller
{
    public function buscaCliente(){

        return Cliente::all()->toJson();
    }

}
