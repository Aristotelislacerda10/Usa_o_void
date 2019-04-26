@extends('layout.site')

@section('titulo', 'contatos')

@section('conteudo')

    <h3>INDEX</h3>

    @foreach($contatos as $contato)
        <tr>
            <td>{{$contato['nome']}}</td>
            <td>{{$contato['tel']}}</td>
        </tr>
    @endforeach

    @endsection

