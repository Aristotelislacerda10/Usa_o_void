@extends('layout._includes.site_new')

@section('titulo', 'Produtos')

@section('conteudo')


    <p class="text-center">Consulta de Produtos</p>

    <form action="{{url('/produto/busca')}}" method="POST">

        <div style="position: relative; left: 16%; width: 300px">
            {{csrf_field()}}
            <input type="text" class="form-control" placeholder="PESQUISAR" name="descricao_pro">
        </div>
    </form>

    <a style="position: relative; left: 87%" class="btn btn-dark"
       href="{{route('admin.produto._formProduto')}}">Cadastrar novo</a>
    <div class="row">
        <h5></h5>
    </div>

    <div class="card" style="width: 1110px; position: relative; left: 16%;">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Cód. Barras</th>
                <th scope="col">Descrição</th>
                <th scope="col">Preço Venda</th>
                <th scope="col">ação</th>
                <th scope="col">
            </thead>

            <tbody>
            @foreach($registros as $registro)
                <tr>
                    <td>{{$registro->cod_pro }}</td>
                    <td>{{$registro->cod_ean1 }}</td>
                    <td width="530">{{$registro->descricao_pro }}</td>
                    <td>R$ {{$registro->valor_venda }}</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm"
                                href="{{route('admin.produto._formProduto', $registro->id)}}">Editar
                        </button>
                        <a onclick="AlertaProduto()"
                           class="btn btn-danger btn-sm" href="{{route('admin.produto.deletar', $registro->cod_pro)}}">Deletar</a>

                        <script>
                            function AlertaProduto() {
                                alert("Produto excluido com sucesso");
                            }
                        </script>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="container">
        <div class="" style="position: absolute; left: 50%">
            {{ $registros->links() }}
        </div>
    </div>
@endsection

