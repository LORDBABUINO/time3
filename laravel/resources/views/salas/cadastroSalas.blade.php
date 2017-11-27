


@extends('menu')

@section('titulo', 'Cadastro de Salas')

@section('conteudo')

@if ($errors->any())
    <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
        <ol>{{ $error }}</ol>
        @endforeach
    </ul>
@endif

<form method="post" action="/salas/salvar">
{!! csrf_field()!!}
<div class="container">
<div class="row justify-content-center">
<div class="col-4">
    <fieldset class="form-group" >
    <legend class="align-middle">Cadastro de salas</legend>
        <div class="col-4">
            <label class="form-check-label">Selecione o campus:
                <select id="campus_select" value="0" name="campus">
                    @foreach ($campus as $cmp)
                        <option value="{{ $cmp->id }}">{{ $cmp->campus_nome }}</option>
                    @endforeach
                </select>
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">Bloco:
                <select id="bloco_select" value="0" name="bloco" >
                    @foreach ($bloco as $blc)
                        <option value="{{ $blc->id }}">{{ $blc->nome }}</option>
                    @endforeach
                </select>
            </label>
        </div>
    </fieldset>





    <fieldset class="form-group">
        <!--
        <div class="form-check">
          <label class="form-check-label">Andar:
              <select id="campus_select" value="0" >
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
              </select>
          </label>
        </div>
        -->
        <div class="form-group">
            <label for="nomeDaSala">Nome da sala:</label>
            <input type="text" class="glyphicon glyphicon-align-left" id="nomeDaSala" name="nome" placeholder="AA1">
        </div>
        <div class="form-group">
            <label for="Capacidade">Descrição:</label>
            <input class="glyphicon glyphicon-align-left" name="descricao" id="desc" >
        </div>
    </fieldset>
    <a class="btn btn-danger" href="/home">Desistir</a>
    <input type="submit" class="btn btn-danger">
</div>
</div>
</div>
</form>
<form action="/blocos/cria" method="get">
    <input type="submit" value="Cria um bloco para teste">
</form>
@endsection
