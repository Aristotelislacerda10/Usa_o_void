@extends('layout._includes.site_new')

@section('titulo', 'Cadastro de produto')

@section('conteudo')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <div class="row">
        <h8>_</h8>
    </div>

    @if ($errors->any())
        <div class="alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="form-horizontal" style="position: relative; left: 15%; width: 1130px"
          action="{{route('admin.produto.salvar')}}" method="post">
        {{csrf_field() }}


        <div class="panel panel-primary">
            <div class="card">
                <div class="card-header bg-dark" style=" font-size: 18px; color: white; font-weight: bold">
                    Cadastro de Produto
                </div>


                <div class="container">
                    <div class="container">
                        <h8>-</h8>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-3 form-group">
                            <label for="id">Código interno</label>
                            <input type="text" class="form-control" name="cod_pro"
                                   value="{{isset($registro->cod_pro) ? $registro->cod_pro : ''}}" id="cod_pro">
                        </div>
                        <div class="col-3 form-group">
                            <label for="cod_barra">Cod. Barras 1</label>
                            <input type="text" class="form-control" name="cod_ean1"
                                   value="{{isset($registro->cod_ean1) ? $registro->cod_ean1 : ''}}" id="cod_ean1">
                        </div>
                        <div class="col-3 form-group">
                            <label for="cod_barra2">Cod. Barras 2</label>
                            <input type="text" class="form-control" name="cod_ean2"
                                   value="{{isset($registro->cod_ean2) ? $registro->cod_ean2 : ''}}" id="cod_ean2">
                        </div>
                        <div class="col-3">
                            <label for="cod_barra2">Tipo de Embalagem</label>
                            <select name="tipo_emb" class="custom-select"
                                    style="width: 200px">
                                <option value="UN">UN</option>
                                <option value="CX">CX</option>
                                <option value="MT">MT</option>
                                <option value="PC">PC</option>
                                <option value="KG">KG</option>
                                <option value="LT">LT</option>
                                <option value="M2">M2</option>
                                <option value="M3">M3</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col form-group">
                            <label for="desc">Descrição do Produto</label>
                            <input type="text" class="form-control" name="nome_cli"
                                   value="{{isset($registro->descricao_pro) ? $registro->descricao_pro : ''}}" id="descricao_pro">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-2 form-group">
                            <label for="estoque">Qtd. Estoque</label>
                            <input type="text" class="form-control" name="qtd_estoque"
                                   value="{{isset($registro->qtd_estoque) ? $registro->qtd_estoque : ''}}" id="qtd_estoque">
                        </div>
                        <div class="col-3 form-group">
                            <label for="ncm">Cod. NCM</label>
                            <input type="text" class="form-control" name="bairro"
                                   value="{{isset($registro->ncm) ? $registro->ncm : ''}}" id="ncm">
                        </div>
                        <div class="col-3 form-group">
                            <label for="cest">Cod. CEST</label>
                            <input type="text" class="form-control" name="cest"
                                   value="{{isset($registro->cest) ? $registro->cest : ''}}" id="cest">
                        </div>
                        <div class="col-2 form-group">
                            <label for="custo">Valor de Custo</label>
                            <input type="text" class="form-control" name="valor_custo"
                                   value="{{isset($registro->valor_custo) ? $registro->valor_custo : ''}}" id="valor_custo">
                        </div>
                        <div class="col-2 form-group">
                            <label for="custo">Valor de Venda</label>
                            <input type="text" class="form-control" name="valor_venda"
                                   value="{{isset($registro->valor_venda) ? $registro->valor_venda : ''}}" id="valor_venda">
                        </div>

                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col form-group" id="app">
                                <div class="panel panel-default">
                                    <div class="autocomplete">
                                        <autocomplete></autocomplete>
                                    </div>
                                </div>
                        </div>
                        <input type="hidden" name="id_for" id="fornecedor_id">

                    </div>
                </div>

            </div>
        </div>
        <script type="text/javascript">

            Vue.component('autocomplete', {
                template:
                    '<div>' + '<label>Fornecedor</label>' +
                    '<input type="text" placeholder="Digite aqui o fornecedor"' +
                    'v-model="searchquery" v-on:keyup="autoComplete" class="form-control">' +
                    '<div class="panel-footer"' +
                    'v-if="data_results.length">' +
                    '<ul class="list-group">' +
                    '<li @click="setFornecedor(result.id)" class="list-group-item"' + 'v-for="result in data_results">@{{ result.nome_for}}</li>' +
                    '</ul>' +
                    '</div>' +
                    '</div>',
                data: function () {
                    return {
                        searchquery: '',
                        data_results: [],
                    }
                },
                methods: {
                    autoComplete(){
                        this.data_results = [];
                        if(this.searchquery.length > 2){
                            axios.get('/fornecedor/autocompleteSearch/'+ this.searchquery).then(response => {
                                console.log(response);
                                this.data_results = response.data;
                            });
                        }
                    },
                    setFornecedor(id){
                        $("#fornecedor_id").val(id);
                    }
                },
            })


            const app = new Vue({
                el: '#app'
            });
        </script>
        <div class="panel panel-primary">
            <div class="card">
                <div class="card-header bg-dark" style=" font-size: 18px; color: white; font-weight: bold">
                    Informações Tributarias
                </div>


            </div>
        </div>



        <div class="container">
            -
        </div>
        <button type="submit" style="left:1000px" class="btn btn-dark">Cadastrar</button>


    </form>

@endsection

