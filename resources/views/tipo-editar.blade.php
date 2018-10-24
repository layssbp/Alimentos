@extends('layout.base', ['current'=>'tipos'])

@section('body')
<form action = "/tipos/editar/{{$tipo->id}}" method="POST">
	<div class = "form-group">        
    	<label for="nome">Editar</label>
    	<input type = "text" value = "{{tipo$->nome}}"class = "form-control" name="nomeTipo" id = "nome">
    </div>
    <button type="submit" class = "btn btn-outline-success btn-sm">Salvar</button>
    <button type="cancel" class = "btn btn-outline-danger btn-sm">Cancelar</button>
</form>
@endsection