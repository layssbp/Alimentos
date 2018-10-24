@extends('layout.base', ['current'=>'tipos'])

@section('body')
<div>
	<table>
		<tr>
			<th>Nome</th>
			<th>Id</th>
		</tr>
@foreach($tipos as $x)
		<tr>
			<td>{{$x -> nome}}</td>
			<td>{{$x -> id}}</td>
		<a class = "btn btn-outline-warning" href="/tipos/editar/{{$x->id}}">Editar</a>
        <a class = "btn btn-outline-danger" href="/tipos/deletar/{{$x->id}}">Excluir</a>
		</tr>
@endforeach
	</table>


</div>
@endsection