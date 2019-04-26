@extends('layout._includes.site_new')

@section('titulo', 'Cadastro de Fornecedor')

@section('conteudo')



    <h5 style="position: relative; left: 50%;">Cadastro de Fornecedor</h5>


    <div class="container" >
        <div class="card-panel" style="position: relative; left: 12%; width: 1010px" >

            <form class="" action="{{route('admin.fornecedor.salvar')}}" method="post">
                {{csrf_field() }}

                <div class="row">
                    <div class="col s12 m3">
                        <select name="fisica_juridica" class="browser-default"
                                style="width: 200px">
                            <option value="" disabled selected>Tipo de Pessoa</option>
                            <option value="F">Física</option>
                            <option value="J">Jurídica</option>
                        </select>
                    </div>
                    <div class="col s12 m3">
                        <select name="indicador_ie" class="browser-default"
                                style="width: 200px">
                            <option value="" disabled selected>Indicador de IE</option>
                            <option value="0">Contribuinte</option>
                            <option value="1">Isento</option>
                            <option value="2">Não Contribuinte</option>
                        </select>
                    </div>




                    <div class="col s12 m2">
                        <p>
                            <label>
                                <input class="with-gap" name="cliente_ativo" type="radio"
                                       value="A" checked />
                                <span>Cliente Ativo</span>
                            </label>
                        </p>
                    </div>
                    <div class="col s12 m2">
                        <p>
                            <label>
                                <input class="with-gap" name="cliente_ativo"
                                       type="radio" value="I" />
                                <span>Cliente Inativo</span>
                            </label>
                        </p>
                    </div>
                </div>





                <div class="input-field">

                    <input type="text" name="nome_for" value="{{isset($registro->nome_for) ? $registro->nome_for : ''}}">
                    <label>Nome</label>
                </div>

                <div class="row">
                    <div class="col s12 m6">
                        <div class="input-field">
                            <input type="text" name="cnpj_for" value="{{isset($registro->cnpj_for) ? $registro->cnpj_for : ''}}">
                            <label>CNPJ</label>
                        </div>
                    </div>

                    <div class="col s12 m6">
                        <div class="input-field">
                            <input type="text" name="insc_estadual" value="{{isset($registro->insc_estadual) ? $registro->insc_estadual : ''}}">
                            <label>Insc. Estadual</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 m3">
                        <div class="input-field">
                            <input type="text" name="cep_for" value="{{isset($registro->cep_for) ? $registro->cep_for : ''}}">
                            <label>CEP</label>
                        </div>
                    </div>

                    <div class="col s12 m6">
                        <div class="input-field">

                            <input type="text" name="endereco_for" value="{{isset($registro->endereco_for) ? $registro->endereco_for : ''}}">
                            <label>Endereço</label>
                        </div>
                    </div>

                    <div class="col s12 m3">
                        <div class="input-field">
                            <input type="text" name="numero_end" value="{{isset($registro->numero_end) ? $registro->numero_end : ''}}">
                            <label>Número</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 m3">
                        <div class="input-field">
                            <input type="text" name="cidade" value="{{isset($registro->cidade) ? $registro->cidade : ''}}">
                            <label>Cidade</label>
                        </div>
                    </div>

                    <div class="col s12 m3">
                        <div class="input-field">

                            <input type="text" name="bairro" value="{{isset($registro->bairro) ? $registro->bairro : ''}}">
                            <label>Bairro</label>
                        </div>
                    </div>

                    <div class="col s12 m3">
                        <div class="input-field">
                            <input type="text" name="ibge" value="{{isset($registro->ibge) ? $registro->ibge : ''}}">
                            <label>IBGE</label>
                        </div>
                    </div>

                    <div class="col s12 m3">
                        <select name="estado" class="browser-default"
                                style="width: 100px">
                            <option value="" disabled selected>UF</option>

                            @foreach($listaestados as $listaestado)

                                <option value="{{$listaestado->id}}">{{$listaestado->uf}}</option>

                            @endforeach
                        </select>
                    </div>




                </div>
                <div class="row">
                    <div class="col s12 m6">
                        <div class="telefone input-field">
                            <input type="text" id="fone" name="fone" value="{{isset($registro->fone) ? $registro->fone : ''}}">
                            <label>Fone</label>
                        </div>
                    </div>

                    <div class="col s12 m6">
                        <div class="input-field">
                            <input type="text"  name="email" value="{{isset($registro->email) ? $registro->email : ''}}">
                            <label>Email</label>
                        </div>
                    </div>
                </div>




                <button class="btn blue">Cadastrar</button>

            </form>



        </div>
    </div>






@endsection

