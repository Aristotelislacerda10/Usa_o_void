@extends('layout._includes.site_new')

@section('titulo', 'Vendedores')

@section('conteudo')


    <div class="container" >
        <h5 style="position: relative; left: 50%;">Consulta de Vendedor</h5>

    </div>
    <div style="position: relative; left: 87.3%">
        <a class="btn blue" href="{{route('admin.vendedor._formVendedor')}}">Cadastrar novo</a>
    </div>

    <div class="card" style="width: 1040px; position: relative; left: 23%;">
        <table class="centered card">
            <thead>
            <tr>
                <th>Código</th>
                <th>CPF</th>
                <th>Nome</th>
                <th>Comissão(%)</th>
                <th>ação</th>
            </tr>
            </thead>

            <tbody>
            @foreach($registros as $registro)
                <tr>
                    <td>{{$registro->id }}</td>
                    <td>{{$registro->cpf_ven }}</td>
                    <td>{{$registro->nome_ven }}</td>
                    <td>{{$registro->comicao_avista }}</td>
                    <td>
                        <a class="btn light-blue" href="#">Editar</a>
                        <a class="btn red" href="{{route('admin.vendedor.deletar', $registro->id)}}">Deletar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>







@endsection

