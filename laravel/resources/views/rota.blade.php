@extends('base')

@section('titulo', 'Cadastro de Rotas')

@section('conteudo')

<script src="/js/jquery-3.2.1.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        var campos_max = 10;   //max de 10 campos
        var x = 1; // campos iniciais
        $('#btn-add-participante').click(function (e) {
            e.preventDefault();     //prevenir novos clicks
            if (x < campos_max) {
                $('#participantes').append('<div class="clearfix"></div><div class="form-group"><label class="col-md-2 control-label"></label><div class="col-md-3">\
                    <input type="text" class="form-control" name="add_participante"></div>\
                    <button class="btn btn-danger" id="remover_campo">Remover</button>\
                    <div class="clearfix"></div></div>');
                x++;
            }
        });

        // Remover o div anterior
        $('#participantes').on("click", '#remover_campo', function (e) {
            e.preventDefault();
            $(this).parent('div').remove();
            x--;
        });
    });
</script>

<div id="main" class="container-fluid">

    <h3 class="page-header">Cadastro de Rotas</h3>

    @if ($errors->any())
    <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
        <ol>{{ $error }}</ol>
        @endforeach
    </ul>
    @endif

    <form action="/ata/salvar" class="form-horizontal" method="post">
        <fieldset>
            {!! csrf_field()!!}
            <!-- Text input-->

            
            
            <div class="form-group">
                <label class="col-md-2 control-label">Origem</label>
                <div class="col-md-4">
                    <select id="sede" name="sede" class="form-control" value="{{ old('sede') }}">
                        <option value="0">Selecione</option>
                        <option value="Campus Sul">TOTEM</option>
                        
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">Destino</label>
                <div class="col-md-4">
                    <select id="sede" name="sede" class="form-control" value="{{ old('sede') }}">
                        <option value="0">Selecione</option>
                        <option value="Campus Sul">Sala</option>
                        <option value="Campus Norte">Auditório</option>
                        <option value="Campus Oeste">Secretária</option>
                        <option value="Campus Oeste">FIES</option>
                    </select>
                </div>
            </div>


             <div class="form-group">
                <label class="col-md-2 control-label">Nome e Nº</label>  
                <div class="col-md-4">
                    <input id="assunto" type="text" name="assunto" placeholder="Inserir nome e número da sala" class="form-control" value="{{ old('assunto') }}">   
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">Orientação</label>
                <div class="col-md-4">                     
                    <textarea rows="8" class="form-control" name="deliberacao" id="deliberacao" value="{{ old('deliberacao') }}"></textarea>
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