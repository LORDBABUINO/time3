@extends('base')

@section('titulo', 'Sistema de Localizacao - Cadastro de Cumpus')

@section('conteudo')

<div id="main" class="container-fluid">

    <h3 class="page-header">Cadastrar Campus</h3>

    @if ($errors->any())
    <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
        <ol>{{ $error }}</ol>
        @endforeach
    </ul>
    @endif

    <form action="/bibliografia/salvar" class="form-horizontal" method="post">
        {!! csrf_field()!!}
        <fieldset>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Campus</label>
                <div class="col-md-4">
                    <input name="campus" id="campus" type="text" class="form-control input-md" required="">
                    @if ($errors->has('campus'))
                    <span class="help-block">
                        <strong>{{ $errors->first('campus') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Logradouro</label>
                <div class="col-md-4">
                    <input name="logradouro" id="logradouro" type="text" class="form-control input-md" required="">
                    @if ($errors->has('logradouro'))
                    <span class="help-block">
                        <strong>{{ $errors->first('logradouro') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Complemento</label>
                <div class="col-md-6">
                    <input name="complemento" id="complemento" type="text" class="form-control input-md" required="">
                    @if ($errors->has('complemento'))
                    <span class="help-block">
                        <strong>{{ $errors->first('c') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Cidade</label>
                <div class="col-md-4">
                    <input name="isbn" id="isbn" type="text" class="form-control input-md" required="">
                    @if ($errors->has('isbn'))
                    <span class="help-block">
                        <strong>{{ $errors->first('isbn') }}</strong>
                    </span>
                    @endif
                </div>
                <label class="col-md-2 control-label" for="textinput">UF</label>
                <div class="col-md-1">
                    <input name="ano" id="ano" type="text" class="form-control input-md" maxlength="4" required="">
                    @if ($errors->has('ano'))
                    <span class="help-block">
                        <strong>{{ $errors->first('ano') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            
        </fieldset>

        <hr />

      <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-success">Salvar</button>
                <button type="reset" class="btn btn-warning">Limpar</button>
                <a href="{{ url('/') }}" class="btn btn-danger">Cancelar</a>
            </div>
        </div>

    </form>
</div>

@endsection

