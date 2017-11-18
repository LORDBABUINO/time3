


@extends('base')

@section('titulo', 'Cadastro de Salas')

@section('conteudo')


<form action="listar">
<div class="container">
<div class="row justify-content-center">
<div class="col-4">
    <fieldset class="form-group" >
    <legend class="align-middle">Cadastro de salas</legend>
        <div class="col-4">
            <label class="form-check-label">Selecione o campus: 
                <select id="campus_select" value="0" >
                    <option value="1">Asa Sul</option>
                    <option value="2">Asa Norte</option>
                    <option value="3">Oeste</option>
                </select>
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">Bloco: 
                <select id="campus_select" value="0" >
                    <option value="1">A</option>
                    <option value="2">B</option>
                    <option value="3">C</option>
                    <option value="4">A</option>
                    <option value="5">B</option>
                    <option value="6">C</option>
                </select>
            </label>
        </div>
    </fieldset>





    <fieldset class="form-group">
        <div class="form-check">
          <label class="form-check-label">Andar: 
              <select id="campus_select" value="0" >
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
              </select>
          </label>
        </div>

        <div class="form-group">
            <label for="nomeDaSala">Nome da sala:</label>
            <input type="text" class="glyphicon glyphicon-align-left" id="nomeDaSala" name="nomeDaSala" placeholder="AA1">
        </div>
        <div class="form-group">
            <label for="Capacidade">Capacidade:</label>
            <input class="glyphicon glyphicon-align-left" id="capacidade_sala" >
        </div>
    </fieldset>
    <a class="btn btn-danger" href="/home">Desistir</a>
    <input type="submit" class="btn btn-danger">
</div>
</div>
</div>
</form>
@endsection

