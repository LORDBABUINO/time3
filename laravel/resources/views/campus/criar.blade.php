@extends('menu')

@section('titulo', 'Sistema de Localizacao - Cadastro de Campus')

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

    <form action="/campus/salvar" class="form-horizontal" method="post">
        {!! csrf_field()!!}
        <fieldset>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Campus</label>
                <div class="col-md-4">
                    <input name="campus_nome" type="text" class="form-control input-md" required="">

                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Logradouro</label>
                <div class="col-md-4">
                    <input name="campus_logradouro" type="text" class="form-control input-md" required="">

                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Complemento</label>
                <div class="col-md-4">
                    <input name="campus_complemento" type="text" class="form-control input-md" required="">

                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Cidade</label>
                <div class="col-md-4">
                    <input name="campus_cidade" type="text" class="form-control input-md" required="">

                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label" for="textinput">UF</label>
                    <div class="col-md-2">
                        <select name="campus_uf" class="form-control">

                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espirito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>

                    </div>
                </div>

            </div>

        </fieldset>



        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <button type="reset" class="btn btn-default">Limpar</button>
                <a href="/campus/listar" class="btn btn-default">Cancelar</a>
            </div>
        </div>

    </form>
</div>

@endsection
