<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmitenteController extends Controller
{
    function dadosEmitente(){

        return view('admin.emitente.dadosemitente');
    }


}
