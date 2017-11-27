
@extends('base')

@section('titulo', 'Listar Salas')

@section('conteudo')


<form>

  <fieldset class="form-group" >
    <legend class="align-middle">Pesquise uma sala:</legend>
	<input type="text"\>
	<br>
	<input type="submit" class="btn btn-danger">

  </fieldset>

</form>

<fieldset class="form-group" >
	<legend class="align-middle"></legend>
	<table class="table table-striped">
		@if(Auth::check())
			<tr>
			<th>Nome da sala</th>
			<th>Campus</th>
			<th>Descricão breve</th>
			<th>Editar</th>
			<th>Remover</th>
			<th>Alterado Em</th>
			</tr>
			@foreach ($salas as $sala)
			<tr>
			<td>
			{{ $sala->nome }}
			</td>
			<td>
			{{ $sala->campus->nome}}
			<br>
			{{ $sala->bloco->nome}}
			</td>
			<td>
			{{ $sala->descricao }}
			</td>
			<td>
			<a href="/salas/remover/{{$sala->id}}" class="btn btn-default">Remover</a>
      </td>
      <td>
      <a href="/salas/editar/{{$sala->id}}" class="btn btn-default">Editar</a>
			</td>
			<td>
			{{ $sala->updated_at }}
			</td>
			</tr>
			@endforeach
		@else
			<a href='descricao'>IA2</a></td><td>Asa Sul</td><td>Vire a direita no predio vermelho
		@endif
	  </td></tr>


</table>
{{ $salas->links() }}
</fieldset>

@endsection
