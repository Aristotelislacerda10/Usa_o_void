@extends('layout._includes.site_new')

@section('titulo', 'Notas Fiscais')

@section('conteudo')



    <h5 class="center">Consulta de Notas Fiscais</h5>



    <a style="position: relative; left: 86%" class="btn blue" href="{{route('admin.nfe._formNotaFiscal')}}">Nova Nota</a>




    <div class="card"  style="width: 1030px; position: relative; left: 23%;">


        <table class="centered card">
            <thead>
            <tr>
                <th>NRº NFE</th>
                <th>Nome/Razão Social</th>
                <th>Data Emissão</th>
                <th>Status NFe</th>
                <th>Valor R$</th>
            </tr>
            </thead>

            <tbody>
            @foreach($registros as $registro)
                <tr>
                    <td>{{$registro->numero_nf }}</td>
                    <td>{{$registro->cliente_nota->nome_cli }}</td>
                    <td>{{$registro->created_at}}</td>
                    <td>{{$registro->status_nf }}</td>
                    <td>{{$registro->valor_total_nf }}</td>
                    <td>
                        <a class="btn light-green" href="">Vizualizar</a>
                    </td>

                </tr>
            @endforeach
            </tbody>

        </table>
    </div>







@endsection

