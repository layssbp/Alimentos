@extends('layout.base', ["current"=>"tipos"])

@section('body')
<form action="/tipos" method="POST">
  <div class="form-group">
    <label for="nome">Insira o nome do Tipo</label>
    <input type="text" class="form-control" id="nome" name="nomeTipo" placeholder="Tipo do alimento">
  </div>
  <button type="submit" class="btn btn-primary">CADASTRAR</button>
</form>
@endsection