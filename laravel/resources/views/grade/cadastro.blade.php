@extends('base')

@section('titulo', 'Cadastro de Grade')

@section('conteudo')
<div id="main" class="container-fluid">

  <h3 class="page-header">Cadastro de Grade</h3>

  @if ($errors->any())
  <ul class="alert alert-danger">
      @foreach($errors->all() as $error)
      <ol>{{ $error }}</ol>
      @endforeach
  </ul>
  @endif

  {{Form::open(array('url' => '/grade/salvar', 'class' => 'form-horizontal'))}}

  <div class="form-group">
    {{Form::label(
      'semestre-label',
      'Semestre Atual:',
      array('class' => 'col-md-2 control-label')
    )}}
    <div class="col-md-4">
      {{Form::text(
        'semestre',
        null,
        array('required', 'class' => 'form-control')
      )}}
    </div>
  </div>
  <div class="form-group">
    {{Form::label(
      'curso-label',
      'Curso:',
      array('class' => 'col-md-2 control-label')
    )}}
    <div class="col-md-4">
      {{Form::select(
        'curso',
        array('' => 'Selecione um Curso'),
        array('required', 'class' => 'form-control')
      )}}
    </div>
  </div>
  <div class="form-group">
    {{Form::label(
      'disciplina-label',
      'Disciplina:',
      array('class' => 'col-md-2 control-label')
    )}}
    <div class="col-md-4">
      {{Form::select(
        'disciplina',
        array('' => 'Selecione uma Disciplina')
      )}}
    </div>
  </div>
  <div class="form-group">
    {{Form::label(
      'aula-label',
      'Dias de Aula:',
      array('class' => 'col-md-2 control-label')
    )}}
    <div class="col-md-4">
      {{Form::label('Segunda:')}}
      {{Form::checkbox('S', 'segunda')}}
      {{Form::label('Terça:')}}
      {{Form::checkbox('T', 'terca')}}
      {{Form::label('Quarta:')}}
      {{Form::checkbox('Q', 'quarta')}}
      {{Form::label('Quinta:')}}
      {{Form::checkbox('Q', 'quinta')}}
      {{Form::label('Sexta:')}}
      {{Form::checkbox('S', 'sexta')}}
      {{Form::label('Sábado:')}}
      {{Form::checkbox('S', 'sabado')}}
    </div>
  </div>
  <div class="form-group">
    {{Form::label(
      'turno-label',
      'Turno:',
      array('class' => 'col-md-2 control-label')
    )}}
    <div class="col-md-4">
      {{Form::label('Matutino:')}}
      {{Form::radio('turno', 'matutino')}}
      {{Form::label('Vespertino:')}}
      {{Form::radio('turno', 'vespertino')}}
      {{Form::label('Noturno:')}}
      {{Form::radio('turno', 'noturno')}}
    </div>
  </div>
  <div class="form-group">
    {{Form::label(
      'campus-label',
      'Campus:',
      array('class' => 'col-md-2 control-label')
    )}}
    <div class="col-md-4">
      {{Form::select('campus', array('' => 'Selecione um Campus'))}}
    </div>
  </div>
  <div class="form-group">
    {{Form::label(
      'bloco',
      'Bloco:',
      array('class' => 'col-md-2 control-label')
    )}}
    <div class="col-md-4">
      {{Form::select('bloco', array('' => 'Selecione um Bloco'))}}
    </div>
  </div>
  <div class="form-group">
    {{Form::label(
      'sala-label',
      'Sala:',
      array('class' => 'col-md-2 control-label')
    )}}
    <div class="col-md-4">
      {{Form::select('sala', array('' => 'Selecione uma Sala'))}}
    </div>
  </div>
  {{Form::submit('Salvar', array('class' => 'btn btn-primary'))}}
  <a href="{{ url('/ata/listar') }}" class="btn btn-default">Cancelar</a>
  {{Form::close()}}
</div>
@endsection
