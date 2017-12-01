@extends('menu')

@section('titulo', 'Sistema de Localizacao - Cadastro de Grade')

@section('conteudo')
<div id="main" class="container-fluid">

  <h3 class="page-header">Editar de Grade</h3>

  @if ($errors->any())
  <ul class="alert alert-danger">
      @foreach($errors->all() as $error)
      <ol>{{ $error }}</ol>
      @endforeach
  </ul>
  @endif

  {{Form::open(['url' => '/grade/salvar', 'class' => 'form-horizontal'])}}
  {!! csrf_field()!!}
  {{Form::hidden('id', $grade->grade_id)}}
  <div class="form-group">
    {{Form::label(
      'semestre',
      'Semestre Atual:',
      ['class' => 'col-md-2 control-label']
    )}}
    <div class="col-md-4">
      {{Form::number(
        'semestre',
        $grade->grade_semestre,
        ['class' => 'form-control']
      )}}
    </div>
  </div>
  <div class="form-group">
    {{Form::label(
      'curso',
      'Curso:',
      ['class' => 'col-md-2 control-label']
    )}}
    <div class="col-md-4">
      {{Form::text(
        'curso',
        $grade->grade_curso,
        ['class' => 'form-control col-md-4']
      )}}
    </div>
  </div>
  <div class="form-group">
    {{Form::label(
      'disciplina',
      'Disciplina:',
      ['class' => 'col-md-2 control-label']
    )}}
    <div class="col-md-4">
      {{Form::text(
        'disciplina',
        $grade->grade_disciplina,
        ['class' => 'form-control col-md-4']
      )}}
    </div>
  </div>
  <div class="form-group">
    {{Form::label(
      'aula',
      'Dias de Aula:',
      ['class' => 'col-md-2 control-label']
    )}}
    <div class="col-md-8">
      @foreach($WEEK as $label => $value)
        <div class="col-sm-2">
          {{Form::label($value, $label . ':')}}
          {{Form::checkbox(
            'dia',
            $value,
            null,
            ['id' => $value])
          }}
        </div>
      @endforeach
    </div>
  </div>
  <div class="form-group">
    {{Form::label(
      'turno',
      'Turno:',
      ['class' => 'col-md-2 control-label']
    )}}
    <div class="col-md-4">
      @foreach($TURNS as $label => $value)
        <div class="col-sm-4">
          {{Form::label($value, $label . ':')}}
          {{Form::radio(
            'turnos',
            $value,
            $grade->grade_dia,
            ['id' => $value]
          )}}
        </div>
      @endforeach
    </div>
  </div>
  <div class="form-group">
    {{Form::label(
      'campus',
      'Campus:',
      ['class' => 'col-md-2 control-label']
    )}}
    <div class="col-md-4">
      {{Form::select(
        'campus',
        $campus,
        $grade->grade_campus,
        ['class' => 'form-control col-md-4']
      )}}
    </div>
  </div>
  <div class="form-group">
    {{Form::label(
      'bloco',
      'Bloco:',
      ['class' => 'col-md-2 control-label']
    )}}
    <div class="col-md-4">
      {{Form::select(
        'bloco',
        $bloco,
        $grade->grade_bloco,
        ['class' => 'form-control col-md-4']
      )}}
    </div>
  </div>
  <div class="form-group">
    {{Form::label(
      'sala',
      'Sala:',
      ['class' => 'col-md-2 control-label']
    )}}
    <div class="col-md-4">
      {{Form::select(
        'sala',
        $sala,
        $grade->grade_sala,
        ['class' => 'form-control col-md-4']
      )}}
    </div>
  </div>
    <div class="col-md-12">
      {{Form::submit('Salvar', ['class' => 'btn btn-success'])}}
      {{Form::reset('Limpar', ['class' => 'btn btn-warning'])}}
      <a href="{{ url('/grade/listar') }}" class="btn btn-danger">Cancelar</a>
    </div>

  {{Form::close()}}
</div>
@endsection
