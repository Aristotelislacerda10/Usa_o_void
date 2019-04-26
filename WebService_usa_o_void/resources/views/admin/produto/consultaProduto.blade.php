@extends('layout._includes.site_new')

@section('titulo', 'Produtos')

@section('conteudo')




    <div class="container">

    <form action="{{url('/produto/busca')}}"  method="POST">
        <div class="row; center">
            <h5 >Consulta de Produtos</h5>
        </div>
            <div style="position: relative; left: 12%; width: 300px" >
              {{csrf_field()}}
              <input type="text" class="form-control" placeholder="PESQUISAR" name="descricao_pro">
          </div>


    </form>

    </div>
    <a style="position: relative; left: 86.65%" class="btn blue" href="{{route('admin.produto._formProduto')}}">Cadastrar novo</a>




    <div class="card"  style="width: 1030px; position: relative; left: 23%;">



        <table class="centered card">
            <thead>
            <tr>
                <th>Código</th>
                <th>Cód. Barras</th>
                <th>Descrição</th>
                <th>Preço Venda</th>
                <th>ação</th>
            </tr>
            </thead>

            <tbody>
            @foreach($registros as $registro)
                <tr>
                    <td>{{$registro->cod_pro }}</td>
                    <td>{{$registro->cod_ean1 }}</td>
                    <td>{{$registro->descricao_pro }}</td>
                    <td>R$ {{$registro->valor_venda }}</td>
                    <td>
                        <a class="btn light-blue" href="{{route('admin.produto._formProduto', $registro->id)}}">Editar</a>
                        <a onclick="AlertaProduto()" class="btn red" href="{{route('admin.produto.deletar', $registro->id)}}">Deletar</a>

                        <script>
                            function AlertaProduto() {
                                alert("Produto deletado com sucesso");
                            }
                        </script>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="row" align="center">

        <ul class="pagination">
            {{$registros->links()}}
        </ul>


    </div>

    <script type="text/javascript">

        export default {
        data: function() {
            return {
                buscar:''
            }
        }
        }
    </script>






@endsection

