@extends('layout._includes.site_new')

@section('titulo', 'Cadastro de Produto')

@section('conteudo')


    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



    <h5 style="position: relative; left: 50%;">Cadastro de Produto</h5>




    <form class="" action="{{route('admin.produto.salvar')}}" method="post">
        {{csrf_field() }}

        <div class="container" >

            <div class="card-panel" style="position: relative; left: 12%; width: 1010px" >
                @if ($errors->any())
                    <div class="alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <div class="row">
                    <div class="col s12 m3">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Código</label>
                            <input type="text" class="form-control" name="cod_pro" disabled value="{{isset($registro->cod_pro) ? $registro->cod_pro : ''}}">

                        </div>
                    </div>

                    <div class="col s12 m3">
                        <div class="form-group">
                            <label>Cod. Barras 1</label>
                            <input type="text" name="cod_ean1" class="form-control"
                                   value="{{isset($registro->cod_ean1) ? $registro->cod_ean1 : ''}}">

                        </div>
                    </div>

                    <div class="col s12 m3">
                        <div class="input-field">
                            <label>Cod. Barras 2</label>
                            <input type="text" name="cod_ean2"
                                   value="{{isset($registro->cod_ean2) ? $registro->cod_ean2 : ''}}">

                        </div>
                    </div>

                    <div class="col s12 m3">
                        <select name="tipo_emb" class="browser-default"
                                style="width: 100px">
                            <option value="" disabled selected>Tipo Emb</option>
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

                <div class="col s12 m6">
                    <div class="input-field">
                        <label>Descrição do Produto</label>
                        <input type="text" name="descricao_pro"
                               value="{{isset($registro->descricao_pro) ? $registro->descricao_pro : ''}}">
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 m2">
                        <div class="input-field">
                            <label>Qtd. Estoque</label>
                            <input type="text" name="qtd_estoque"
                                   value="{{isset($registro->qtd_estoque) ? $registro->qtd_estoque : ''}}">

                        </div>
                    </div>

                    <div class="col s12 m3">
                        <div class="input-field">
                            <label>Cod. NCM</label>
                            <input type="text" name="ncm" value="{{isset($registro->ncm) ? $registro->ncm : ''}}">

                        </div>
                    </div>

                    <div class="col s12 m3">
                        <div class="input-field">
                            <label>Cod. CEST</label>
                            <input type="text" name="cest" value="{{isset($registro->cest) ? $registro->cest : ''}}">
                        </div>
                    </div>
                    <div class="col s12 m2">
                        <div class="input-field">
                            <label>Valor de Custo</label>
                            <input type="text" name="valor_custo"
                                   value="{{isset($registro->valor_custo) ? $registro->valor_custo : ''}}">
                        </div>
                    </div>
                    <div class="col s12 m2">
                        <div class="input-field">
                            <label>Valor de Venda</label>
                            <input type="text" name="valor_venda"
                                   value="{{isset($registro->valor_venda) ? $registro->valor_venda : ''}}">
                        </div>
                    </div>

                </div>

                    <div class="divider"></div>

                <div class="col s12 m6" id="app">
                    <div class="input-field">

                        <div class="panel panel-default">
                            <div class="autocomplete">
                                <autocomplete></autocomplete>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id_for" id="fornecedor_id">

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




        <button style="position: relative; left: 89%" class="btn blue">Cadastrar</button>


    </form>




@endsection

