@extends('layout._includes.site_new')

@section('titulo', 'Clientes')

@section('conteudo')


    <p class="text-center">Consulta de Clientes</p>

    <form action="{{url('/cliente/busca')}}" method="POST">


        <div style="position: relative; left: 16%; width: 300px">
            {{csrf_field()}}
            <input type="text" class="form-control" placeholder="PESQUISAR" name="nome_cli">
        </div>


    </form>


    <a style="position: relative; left: 87%" class="btn btn-dark"
       href="{{route('admin.clientes._formCliente')}}">Cadastrar novo</a>

    <div class="row">
        <h5></h5>
    </div>

    <div class="card" style="width: 1110px; position: relative; left: 16%;">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Código</th>
                <th scope="col">CNPJ</th>
                <th scope="col">Insc. Est.</th>
                <th scope="col">Nome</th>
                <th scope="col">ação</th>
                <th scope="col">
            </thead>

            <tbody>
            @foreach($registros as $registro)
                <tr>
                    <td>{{$registro->id }}</td>
                    <td>{{$registro->cnpj_cli }}</td>
                    <td>{{$registro->insc_estadual }}</td>
                    <td width="550">{{$registro->nome_cli }}</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm"
                                href="{{route('admin.clientes._formEditar', $registro->id)}}">Editar
                        </button>
                        <a onclick="AlertaCliente()"
                           class="btn btn-danger btn-sm" href="{{route('admin.clientes.deletar', $registro->id)}}">Deletar</a>

                        <script>
                            function AlertaCliente() {
                                alert("Cliente apagado com sucesso");
                            }
                        </script>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="container">
        <div class="row" style="position: relative; left: 50%">
            {{ $registros->links() }}
        </div>
    </div>

@endsection

