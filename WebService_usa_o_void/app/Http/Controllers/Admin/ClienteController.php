<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cliente;
use App\Estado;
use App\Http\Requests\StoreClienteRequest;

class ClienteController extends Controller
{
    public function consultacliente()
    {
        $registros = Cliente::paginate(6);
        $qtdclientes = Cliente::count();


        return view('admin.clientes.consultacliente', compact('registros', 'qtdclientes'));

    }

    public function adicionar()
    {

        $listaestados = Estado::all('id', 'uf');


        return view('admin.clientes._formCliente', compact('listaestados'));
    }

    public function salvar(StoreClienteRequest $req)
    {

        $dados = $req->all();
        Cliente::create($dados);


        return redirect()->route('admin.clientes.consultacliente');


    }

    public function editar($id)
    {
        $registro = Cliente::find($id);
        $listaestados = Estado::all('id', 'uf');
        return view('admin.clientes._formEditar', compact('registro', 'listaestados'));

    }

    public function atualizar(StoreClienteRequest $req, $id)
    {
        $dados = $req->all();

        Cliente::find($id)->update($dados);
        Estado::find($id)->update($dados);

        return redirect()->route('admin.clientes.consultacliente');

    }

    public function deletar($id)
    {
        Cliente::find($id)->delete();

        return redirect()->route('admin.clientes.consultacliente');


    }

    public function BuscaCliente(Request $request)
    {

        $registros = Cliente::where('nome_cli', 'LIKE', '%' . $request->nome_cli . '%')->paginate();

        //dd($produtos);
        return view('admin.clientes.consultaCliente', compact('registros'));

    }


}
