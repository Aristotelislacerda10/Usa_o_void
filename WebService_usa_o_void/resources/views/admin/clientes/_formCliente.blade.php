@extends('layout._includes.site_new')

@section('titulo', 'Cadastro de Cliente')

@section('conteudo')


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
          action="{{route('admin.clientes.salvar')}}" method="post">
        {{csrf_field() }}


        <div class="panel panel-primary">
            <div class="card">
                <div class="card-header bg-dark" style=" font-size: 18px; color: white; font-weight: bold">
                    Cadastro de Cliente
                </div>


                <div class="container">
                    <div class="container">
                        <h8>-</h8>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-3">
                            <select name="fisica_juridica" class="custom-select"
                                    style="width: 200px">
                                <option value="" disabled selected>Tipo de Pessoa</option>
                                <option value="F">Física</option>
                                <option value="J">Jurídica</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <select name="indicador_ie" class="custom-select"
                                    style="width: 200px">
                                <option value="" disabled selected>Indicador de IE</option>
                                <option value="0">Contribuinte</option>
                                <option value="1">Isento</option>
                                <option value="2">Não Contribuinte</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <select name="cliente_ativo" class="custom-select"
                                    style="width: 200px">
                                <option value="ativo">Cliente Ativo</option>
                                <option value="inativo">Cliente Inativo</option>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="container">
                    -
                </div>


                <div class="container">
                    <div class="row">
                        <div class="col-3 form-group">
                            <label for="cnpj">CPF/CNPJ</label>
                            <input type="text" class="form-control" name="cnpj_cli"
                                   value="{{isset($registro->cnpj_cli) ? $registro->cnpj_cli : ''}}" id="cnpj">
                        </div>
                        <div class="col form-group">
                            <label for="razao_social">Nome/Razão Social</label>
                            <input type="text" class="form-control" name="nome_cli"
                                   value="{{isset($registro->nome_cli) ? $registro->nome_cli : ''}}" id="razao_social">
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="row">
                        <div class="col-3 form-group">
                            <label for="insc_estadual">Insc. Estadual</label>
                            <input type="text" class="form-control" name="insc_estadual"
                                   value="{{isset($registro->insc_estadual) ? $registro->insc_estadual : ''}}"
                                   id="insc_estadual">
                        </div>
                        <div class="col-3 form-group">
                            <label for="exampleFormControlInput1">CEP</label>
                            <input type="text" class="form-control" name="cep_cli" id="cep_cli"
                                   value="{{isset($registro->cep_cli) ? $registro->cep_cli : ''}}">
                        </div>
                        <div class="col-5 form-group">
                            <label for="endereco_cli">Endereço</label>
                            <input type="text" class="form-control" name="endereco_cli"
                                   value="{{isset($registro->endereco_cli) ? $registro->endereco_cli : ''}}">
                        </div>

                        <div class="col-1 form-group">
                            <label for="exampleFormControlInput1">Numero</label>
                            <input type="text" class="form-control" name="numero_end"
                                   value="{{isset($registro->numero_end) ? $registro->numero_end : ''}}">
                        </div>


                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-3 form-group">
                            <label for="cidade1">Cidade</label>
                            <input type="text" class="form-control" name="cidade"
                                   value="{{isset($registro->cidade) ? $registro->cidade : ''}}" id="cidade">
                        </div>

                        <div class="col-3 form-group">
                            <label for="estado1">Estado</label>
                            <select name="estado" class="custom-select">
                                <option value="" disabled selected>UF</option>

                                @foreach($listaestados as $listaestado)

                                    <option value="{{$listaestado->id}}">{{$listaestado->uf}}</option>

                                @endforeach

                            </select>
                        </div>

                        <div class="col-3 form-group">
                            <label for="bairro">Bairro</label>
                            <input type="text" class="form-control" name="bairro"
                                   value="{{isset($registro->bairro) ? $registro->bairro : ''}}" id="bairro">
                        </div>
                        <div class="col-3 form-group">
                            <label for="endereco_cli">IBGE</label>
                            <input type="text" class="form-control" name="ibge"
                                   value="{{isset($registro->ibge) ? $registro->ibge : ''}}" id="ibge">
                        </div>

                    </div>
                </div>


                <div class="container">
                    <div class="row">

                        <div class="col-3 form-group">
                            <label for="fone">Fone/Celular</label>
                            <input type="text" class="form-control" name="fone" id="telefone"
                                   value="{{isset($registro->fone) ? $registro->fone : ''}}">
                        </div>

                        <div class="col-3 form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email"
                                   value="{{isset($registro->email) ? $registro->email : ''}}" id="email">
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            -
        </div>
        <button type="submit" style="left:1000px" class="btn btn-dark">Cadastrar</button>


    </form>






    <script type="text/javascript">
        $(document).ready(function () {
            $('.telefone').mask('(00) 0 0000-0000');

            $("#cnpj_cli").keydown(function () {
                try {
                    $("#cnpj_cli").unmask();
                } catch (e) {
                }

                var tamanho = $("#cnpj_cli").val().length;

                if (tamanho <= 11) {
                    $("#cnpj_cli").mask("999.999.999-99");
                } else if (tamanho > 11) {
                    $("#cnpj_cli").mask("99.999.999/9999-99");
                }

                // ajustando foco
                var elem = this;
                setTimeout(function () {
                    // mudo a posição do seletor
                    elem.selectionStart = elem.selectionEnd = 10000;
                }, 0);
                // reaplico o valor para mudar o foco
                var currentValue = $(this).val();
                $(this).val('');
                $(this).val(currentValue);
            });
        });
    </script>

@endsection

