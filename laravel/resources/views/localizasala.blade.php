@extends('base')

@section('titulo', 'Sistema de Localizacao - Localizar sala')

@section('conteudo')

<div id="main" class="container-fluid">

  <title>Localizar Salas</title>
</head>
<body>
  <!-- ----- Cabeçalho do sistema ----- -->
  <div class="row">
    <div class="col-md-12">
        <div class="col-md-3">

        </div>
        <div class="col-md-6">
          <h1><small> Sistema de Localização </small></h1>
        </div>
      </div>
  </div>
  <!-- ----- Fim do Cabeçalho do sistema ----- -->

  <div class="row">

</div>
    <div class="col-md-12">
      <div class="col-md-6">
        <label for="selectCampus">Campus</label>
        <select class="form-control" name="">
          <option value="">Selecionar</option>
        </select>
      </div>
      <br>

      <div class="col-md-6">
        <label for="selectBloco">Bloco</label>
        <select class="form-control" name="">
          <option value="">Selecionar</option>
        </select>
      </div>
    </div>

    <div class="col-md-12">
      <div class="col-md-6">
        <label for="selectSala">Salas</label>
        <select class="form-control" name="">
          <option value="">Selecionar</option>
        </select>
      </div>
      <div class="col-md-12">
        <button type="button" class="btn">Localizar
          <span class="glyphicon glyphicon-search"></span>
        </button>
      </div>

    </div>
    <div class="col-md-12">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Sala</th>

              <th>Orientação</th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <!-- ----- informação que vem do banco depois do formulario submetido. ----- -->
<input name="campus" id="campus" type="text" class="form-control input-md" required="">

              </td>
              <td>

                <!-- ----- informação que vem do banco depois do formulario submetido. ----- -->
<input name="campus" id="campus" type="text" class="form-control input-md" required="">

              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-md-12">
      <button type="button" class="btn btn-danger" name="Voltar"> Voltar </button>
    </div>
      <br>

@endsection
