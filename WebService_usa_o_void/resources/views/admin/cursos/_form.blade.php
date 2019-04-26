<div class="row" style="width: 1000px">
<div class="input-field">

    <input type="text" name="titulo" value="{{isset($registro->titulo) ? $registro->titulo : ''}}">
    <label>Titulo</label>
</div>

<div class="input-field">

    <input type="text" name="descricao" value="{{isset($registro->descricao) ? $registro->descricao : ''}}">
    <label>Descrição</label>
</div>

<div class="input-field">

    <input type="text" name="valor" value="{{isset($registro->valor) ? $registro->valor : ''}}">
    <label>valor</label>
</div>

<div class="file-field input-field">
    <div class="btn blue">
        <spam>imagem</spam>
        <input type="file" name="imagem" >
    </div>

        <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
        </div>

</div>

@if(isset($registro->imagem))
<div class="input-field">
    <img width="150" src="{{asset('$registro->imagem')}}"/>

</div>
@endif

<div class="input-field">
    <p>
       <input type="checkbox" id="test5" name="publicado" {{isset($registro->publicado) && $registro->publicado == 'sim' ? 'checked' : ''}}  value="true" />
        <label for="test5">publicar ?</label>

    </p>
    <br> <br>

</div>
</div>
