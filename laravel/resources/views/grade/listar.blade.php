@extends('menu')

@section('titulo', 'Grade Listar')

@section('conteudo')


<div class="flex-center position-ref full-height">

  <table class="table table-bordered">

    <div class="table-responsive col-md-13">

      <thead>
        <tr>
          <th>Codigo</th>
          <th>Semestre</th>
          <th>Curso</th>
          <th>Disciplina</th>
          <th>Dias de Aula</th>
          <th>Turnos</th>
          <th>Campus</th>
          <th>Bloco</th>
          <th>Sala</th>
          <th class="actions">Ações</th>

          <tbody>
            @foreach($grades as $grade)
            <tr>
              <td>{{$grade->id}}</td>
              <td>{{$grade->grade_semestre}}</td>
              <td>{{$grade->grade_curso}}</td>
              <td>{{$grade->grade_disciplina}}</td>
              <td>{{$grade->grade_dia}}</td>
              <td>{{$grade->grade_turnos}}</td>
              <td>{{$campus[$grade->grade_campus]}}</td>
              <td>{{$bloco[$grade->grade_bloco]}}</td>
              <td>{{$sala[$grade->grade_sala]}}</td>
              <td>
                <a class="btn btn-warning btn-xs" href="/grade/editar/<?php echo $grade->id; ?>">Editar</a>
                <a class="btn btn-danger btn-xs" href="/grade/remover/<?php echo $grade->id; ?>" onclick="return confirm('Deseja remover a disciplina <?php echo$grade->grade_disciplina; ?>?');">Remover</a>
              </td>
            </tr>
            @endforeach
          </tr>
        </tbody>
      </tr>
    </thead>

  </div>
</table>

<div class="row">
  <div class="col-md-12">

    <a href="/grade/criar" class="btn btn-success">Novo Registro</a>
    <a href="{{ url('/') }}" class="btn btn-danger">Cancelar</a>

  </div>
</div>

@endsection
