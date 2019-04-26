@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')


    <div class="container" >
        <h3 class="center">Tabela de cursos</h3>
        <div class="row" style="width: 1000px">
            <a class="btn blue" href="{{route('admin.cursos.adicionar')}}">Adicionar</a>
        </div>
    </div>
    <div class="row" style="width: 1000px">
        <table class="centered card">
            <thead>
                <tr>
                <th>id</th>
                <th>títulos</th>
                <th>descrição</th>
                <th>imagem</th>
                <th>publicado</th>
                <th>ação</th>
                </tr>
            </thead>

            <tbody>
            @foreach($registros as $registro)
                <tr>
                <td>{{$registro->id }}</td>
                <td>{{$registro->titulo }}</td>
                <td>{{$registro->descricao }}</td>
                <td> <img width="70" src="{{asset($registro->imagem)}}" alt="{{$registro->titulo }}" /></td>
                    <td>{{$registro->publicado }}</td>
                    <td>
                        <a class="btn deep-orange" href="{{route('admin.cursos.editar', $registro->id)}}">Editar</a>
                        <a class="btn red" href="{{route('admin.cursos.deletar', $registro->id)}}">Deletar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
          </div>


@endsection

