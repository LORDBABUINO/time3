@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Cadastrar Grade</div>

        <div class="panel-body">
          @if (session('status'))
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
          @endif

          {{Form::open()}}

          <div class="form-group">
            {{Form::label('Semestre Atual:')}}
            {{Form::text('semestre', null,
                          array('required',
                                'class' => 'form-control',
                                'placeholder' => '3'
                                ))}}
          </div>
          <div class="form-group">
            {{Form::label('Curso:')}}
            {{Form::select('curso', array('' => 'Selecione um Curso'), array('required',
                  'class' => 'form-control'
                  ))}}
          </div>
          <div class="form-group">
            {{Form::label('disciplina:')}}
            {{Form::select('disciplina', array('' => 'Selecione uma Disciplina'))}}
          </div>
          <div class="form-group">
            {{Form::label('Dias de Aula:')}}
            </br>
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
          <div class="form-group">
            {{Form::label('Turno:')}}
            </br>
            {{Form::label('Matutino:')}}
            {{Form::radio('turno', 'matutino')}}
            {{Form::label('Vespertino:')}}
            {{Form::radio('turno', 'vespertino')}}
            {{Form::label('Noturno:')}}
            {{Form::radio('turno', 'noturno')}}
          </div>
          <div class="form-group">
            {{Form::label('Campus:')}}
            {{Form::select('campus', array('' => 'Selecione um Campus'))}}
          </div>
          <div class="form-group">
            {{Form::label('Bloco:')}}
            {{Form::select('bloco', array('' => 'Selecione um Bloco'))}}
          </div>
          <div class="form-group">
            {{Form::label('Sala:')}}
            {{Form::select('sala', array('' => 'Selecione uma Sala'))}}
          </div>
            <button>Salvar</button>
            <button>Cancelar</button>
          {{Form::close()}}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
