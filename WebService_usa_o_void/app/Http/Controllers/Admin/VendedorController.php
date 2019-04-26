<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Vendedor;
use App\Estado;

class VendedorController extends Controller
{
    public function consultavendedor(){

        $registros = Vendedor::all();


        return view('admin.vendedor.consultavendedor', compact('registros'));
    }

    public function adicionar (){

        $listaestados = Estado::all('id','uf');



        return view('admin.vendedor._formVendedor', compact('listaestados'));
    }

    public function salvar(Request $req){

        $dados = $req->all();
        vendedor::create($dados);



        return redirect()->route('admin.vendedor.consultaVendedor');


    }
    public function deletar($id)
    {
        vendedor::find($id)->delete();

        return redirect()->route('admin.vendedor.consultaVendedor');

    }


}
