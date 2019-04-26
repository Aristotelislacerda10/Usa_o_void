<?php

namespace App\Http\Controllers\Admin;

use App\Nfe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NfeController extends Controller
{
    public function consultanotafiscal()
    {
        $registros = Nfe::paginate(5);
        $qtdclientes = Nfe::count();

        return view('admin.nfe.consultanotafiscal', compact('registros','qtdclientes'));

    }

    public function nova_nota_fiscal(){


        return view('admin.nfe._formNotaFiscal');
    }

}
