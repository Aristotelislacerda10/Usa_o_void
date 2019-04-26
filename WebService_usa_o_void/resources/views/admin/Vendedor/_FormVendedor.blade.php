@extends('layout._includes.site_new')

@section('titulo', 'Cadastro de Cliente')

@section('conteudo')



    <h5 style="position: relative; left: 50%;">Cadastro de Vendedor</h5>


    <div class="container" >
        <div class="card-panel" style="position: relative; left: 12%; width: 1010px" >

            <form class="" action="{{route('admin.vendedor.salvar')}}" method="post">
                {{csrf_field() }}

                <div class="row">

                    <div class="col s12 m2">
                        <p>
                            <label>
                                <input class="with-gap" name="vendedor_ativo" type="radio"
                                       value="A" checked />
                                <span>Ativo</span>
                            </label>
                        </p>
                    </div>
                    <div class="col s12 m2">
                        <p>
                            <label>
                                <input class="with-gap" name="vendedor_ativo"
                                       type="radio" value="I" />
                                <span>Inativo</span>
                            </label>
                        </p>
                    </div>

                    <div class="col s12 m3">
                      <div class="input-field">

                        <input style="width: 200px" type="text" name="comicao_avista" value="{{isset($registro->comicao_avista) ? $registro->comicao_avista : ''}}">
                        <label>Comissão À Vista</label>
                      </div>
                    </div>

                    <div class="col s12 m3">
                        <div class="input-field">

                            <input style="width: 200px" type="text" name="comicao_aprazo" value="{{isset($registro->comicao_aprazo) ? $registro->comicao_aprazo : ''}}">
                            <label>Comissão À prazo</label>
                        </div>
                    </div>




                </div>

                <div class="input-field">

                    <input type="text" name="nome_ven" value="{{isset($registro->nome_ven) ? $registro->nome_ven : ''}}">
                    <label>Nome</label>
                </div>

                <div class="row">
                    <div class="col s12 m6">
                        <div class="input-field">
                            <input type="text" name="cpf_ven" value="{{isset($registro->cpf_ven) ? $registro->cpf_ven : ''}}">
                            <label>CPF</label>
                        </div>
                    </div>

                    <div class="col s12 m6">
                        <div class="input-field">
                            <input type="text" name="rg_ven" value="{{isset($registro->rg_ven) ? $registro->rg_ven : ''}}">
                            <label>RG</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 m3">
                        <div class="input-field">
                            <input type="text" name="cep_ven" value="{{isset($registro->cep_ven) ? $registro->cep_ven : ''}}">
                            <label>CEP</label>
                        </div>
                    </div>

                    <div class="col s12 m6">
                        <div class="input-field">

                            <input type="text" name="endereco_ven" value="{{isset($registro->endereco_ven) ? $registro->endereco_ven : ''}}">
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

