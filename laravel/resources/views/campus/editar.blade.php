@extends('menu')

@section('titulo', 'Sistema de Localizacao - Cadastro de Cumpus')

@section('conteudo')

<div id="main" class="container-fluid">

    <h3 class="page-header">Editar Campus</h3>

    @if ($errors->any())
    <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
        <ol>{{ $error }}</ol>
        @endforeach
    </ul>
    @endif

    <form action="/campus/salvar" class="form-horizontal" method="post">
        {!! csrf_field()!!}
        <input type="hidden" name="id" size="15" value="<?php echo $campus->id; ?>"/>
        <fieldset>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Campus</label>
                <div class="col-md-4">
                    <input name="campus_nome" type="text" value="{{$campus->campus_nome}}" class="form-control input-md" required="">

                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Logradouro</label>
                <div class="col-md-4">
                    <input name="campus_logradouro" type="text" value="{{$campus->campus_logradouro}}" class="form-control input-md" required="">
                    
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Complemento</label>
                <div class="col-md-4">
                    <input name="campus_complemento" type="text" value="{{$campus->campus_complemento}}" class="form-control input-md" required="">
                    
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Cidade</label>
                <div class="col-md-4">
                    <input name="campus_cidade" type="text" value="{{$campus->campus_cidade}}" class="form-control input-md" required="">
                    
                </div>
                
                <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">UF</label>
                <div class="col-md-2">
                    <select name="campus_uf" class="form-control">
                       
                                <option value="AC" @if($campus->campus_uf == "AC") {{"selected"}} @endif> Acre</option>
                                <option value="AL" @if($campus->campus_uf == "AL") {{"selected"}} @endif> Alagoas</option>
                                <option value="AP" @if($campus->campus_uf == "AP") {{"selected"}} @endif>Amapá</option>
                                <option value="AM" @if($campus->campus_uf == "AM") {{"selected"}} @endif>Amazonas</option>
                                <option value="BA" @if($campus->campus_uf == "BA") {{"selected"}} @endif>Bahia</option>
                                <option value="CE" @if($campus->campus_uf == "CE") {{"selected"}} @endif>Ceará</option>
                                <option value="DF" @if($campus->campus_uf == "DF") {{"selected"}} @endif>Distrito Federal</option>
                                <option value="ES" @if($campus->campus_uf == "ES") {{"selected"}} @endif>Espirito Santo</option>
                                <option value="GO" @if($campus->campus_uf == "GO") {{"selected"}} @endif>Goiás</option>
                                <option value="MA" @if($campus->campus_uf == "MA") {{"selected"}} @endif>Maranhão</option>
                                <option value="MS" @if($campus->campus_uf == "MS") {{"selected"}} @endif>Mato Grosso do Sul</option>
                                <option value="MT" @if($campus->campus_uf == "MT") {{"selected"}} @endif>Mato Grosso</option>
                                <option value="MG" @if($campus->campus_uf == "MG") {{"selected"}} @endif>Minas Gerais</option>
                                <option value="PA" @if($campus->campus_uf == "PA") {{"selected"}} @endif>Pará</option>
                                <option value="PB" @if($campus->campus_uf == "PB") {{"selected"}} @endif>Paraíba</option>
                                <option value="PR" @if($campus->campus_uf == "PR") {{"selected"}} @endif>Paraná</option>
                                <option value="PE" @if($campus->campus_uf == "PE") {{"selected"}} @endif>Pernambuco</option>
                                <option value="PI" @if($campus->campus_uf == "PI") {{"selected"}} @endif>Piauí</option>
                                <option value="RJ" @if($campus->campus_uf == "RJ") {{"selected"}} @endif>Rio de Janeiro</option>
                                <option value="RN" @if($campus->campus_uf == "RN") {{"selected"}} @endif>Rio Grande do Norte</option>
                                <option value="RS" @if($campus->campus_uf == "RS") {{"selected"}} @endif>Rio Grande do Sul</option>
                                <option value="RO" @if($campus->campus_uf == "RO") {{"selected"}} @endif>Rondônia</option>
                                <option value="RR" @if($campus->campus_uf == "RR") {{"selected"}} @endif>Roraima</option>
                                <option value="SC" @if($campus->campus_uf == "SC") {{"selected"}} @endif>Santa Catarina</option>
                                <option value="SP" @if($campus->campus_uf == "SP") {{"selected"}} @endif>São Paulo</option>
                                <option value="SE" @if($campus->campus_uf == "Se") {{"selected"}} @endif>Sergipe</option>
                                <option value="TO" @if($campus->campus_uf == "TO") {{"selected"}} @endif>Tocantins</option>
                    </select>
                    
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