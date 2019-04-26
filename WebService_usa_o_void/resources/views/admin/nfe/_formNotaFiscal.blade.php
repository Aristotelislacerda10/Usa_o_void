@extends('layout._includes.site_new')

@section('titulo', 'Nota Fiscal')

@section('conteudo')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.min.js"
            xmlns:v-bind="http://www.w3.org/1999/xhtml"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <div class="container">
        <div class="card-panel" style="position: relative; left: 12%; width: 1010px" >
            <p  style=" font-size: 12px">Dados da Nfe</p>
            <div class="row">
                <div class="col s12 m2">
                    <div class="input-field">
                        <label>Regime Tributário</label>
                        <input type="text" name="cod_pro" disabled value="Simples Nacional">

                    </div>
                </div>

                <div class="col s12 m3">
                    <label>Tipo de NF-e</label>
                    <select name="" class="browser-default" style="width: 140px">
                        <option value="Saída">Saída</option>
                        <option value="Entrada">Entrada</option>
                    </select>
                </div>

                <div class="col s12 m3">
                    <label>Finalidade da NF-e</label>
                    <select name="" class="browser-default" style="width: 140px">
                        <option value="1">Normal</option>
                        <option value="2">Complementar</option>
                        <option value="3">Ajuste</option>
                        <option value="4">Devolução</option>
                    </select>
                </div>
                    <div class="col s12 m2">
                        <div class="input-field">
                            <label>Série NFe</label>
                            <input style="width: 110px" type="text" name="cod_pro" disabled value="1">
                        </div>
                    </div>

                    <div class="col s12 m2">
                            <label>Número NFe</label>
                            <input style="width: 140px; font-size: 40px; color: red" type="text" name="cod_pro" disabled value="0001" text>
                    </div>
         </div>
            <div class="row">
                <div class="col s12 m1">
                    <div class="input-field">
                        <label>CFOP</label>
                        <input placeholder="Código" type="text" name="cod_pro"  value="">
                    </div>
                </div>
                <div class="col s12 m3">
                    <div class="input-field">
                        <label>Natureza da Operação</label>
                        <input placeholder="Descrição CFOP" type="text" name="cod_pro"  value="">
                    </div>
                </div>

                <div class="col s13 m3">
                    <label>Modalidade Frete</label>
                    <select name="" class="browser-default" style="width: 235px">
                        <option value="0">Frete por conta do Remetente</option>
                        <option value="2">Frete por conta do Destinatário</option>
                        <option value="3">Frete por conta de Terceiros</option>
                        <option value="4">Transp. Próprio por conta do Remetente</option>
                        <option value="5">Transp. Próprio por conta do Destinatário</option>
                        <option value="6">Sem Ocorrência de Transporte</option>
                    </select>
                </div>

            <div class="col s13 m2">
                <label>Forma de Pagamento</label>
                <select name="" class="browser-default" style="width: 150px">
                    <option value="1">À Vista</option>
                    <option value="2">À Prazo</option>
                    <option value="3">Sem Pagamento</option>
                </select>
            </div>

                <div class="col s13 m3">
                    <label>Indicador Presencial</label>
                    <select name="" class="browser-default" style="width: 210px">
                        <option value="1">Presencial</option>
                        <option value="2">Não se Aplica</option>
                        <option value="3">Internet</option>
                        <option value="4">Teleatendimento</option>
                        <option value="5">Entrega Domicilia</option>
                        <option value="6">Op.Fora Estabelecimento</option>
                        <option value="7">Outros</option>
                    </select>
                </div>
            </div>
            <div class="divider"></div>
            <p  style=" font-size: 12px">Cliente/Fornecedor</p>
            <div class="row">
                <div class="col s12 m3">
                    <div class="input-field">
                        <label>CPF/CNPJ</label>
                        <input placeholder="Digite o CNPJ" type="text" name="cod_pro" value="">
                    </div>
                </div>
                <div class="col s12 m9">
                    <div class="input-field">
                        <label>Nome/Razão Social</label>
                        <input placeholder="Razão Social" type="text" name="cod_pro"  value="">
                    </div>
                </div>



                <div class="row">
                    <div class="col s12">
                        <div class="ui-widget">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">textsms</i>
                                <label for="tags">Tags: </label>
                                <input  id="tags">
                            </div>
                        </div>
                    </div>
                </div>
        </div>
     </div>
   </div>

    <script>
        $( function() {
            var availableTags = [
                "ActionScript",
                "AppleScript",
                "Asp",
                "BASIC",
                "C",
                "C++",
                "Clojure",
                "COBOL",
                "ColdFusion",
                "Erlang",
                "Fortran",
                "Groovy",
                "Haskell",
                "Java",
                "JavaScript",
                "Lisp",
                "Perl",
                "PHP",
                "Python",
                "Ruby",
                "Scala",
                "Scheme"
            ];
            $( "#tags" ).autocomplete({
                source: availableTags
            });
        } );
    </script>


@endsection