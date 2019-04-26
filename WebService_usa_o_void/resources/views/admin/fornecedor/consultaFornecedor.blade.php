@extends('layout._includes.site_new')

@section('titulo', 'Fornecedores')

@section('conteudo')


    <div class="container" >
        <h5 style="position: relative; left: 50%;">Consulta de Fornecedor</h5>

    </div>
    <div style="position: relative; left: 87.3%">
        <a class="btn blue" href="{{route('admin.fornecedor._formFornecedor')}}">Cadastrar novo</a>
    </div>

    <div class="card" style="width: 1040px; position: relative; left: 23%;">
        <table class="centered card">
            <thead>
            <tr>
                <th>Código</th>
                <th>CNPJ</th>
                <th>Insc. Est.</th>
                <th>Nome</th>
                <th>ação</th>
            </tr>
            </thead>

            <tbody>
            @foreach($registros as $registro)
                <tr>
                    <td>{{$registro->id }}</td>
                    <td>{{$registro->cnpj_for }}</td>
                    <td>{{$registro->insc_estadual }}</td>
                    <td>{{$registro->nome_for }}</td>
                    <td>
                        <a class="btn light-blue" href="#">Editar</a>
                        <a class="btn red" href="{{route('admin.fornecedor.deletar', $registro->id)}}">Deletar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>







@endsection

