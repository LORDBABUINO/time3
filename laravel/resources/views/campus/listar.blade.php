@extends('base')

@section('titulo', 'Campus Listar')

@section('conteudo')


<div class="flex-center position-ref full-height">
            
               


<table class="table table-bordered">

    <div class="table-responsive col-md-13">

        <thead>
            <tr>
                <th>Codigo</th>
                <th>Campus</th>
                <th>Logradouro</th>
                <th>Complemento</th>
                <th>Cidade</th>
                <th>UF</th>
                <th class="actions">Ações</th>





        <tbody>
            @foreach($campuss as $campuss)
            <tr>
                <td>{{$campuss->id}}</td>
                <td>{{$campuss->campus_nome}}</td>
                <td>{{$campuss->campus_logradouro}}</td>
                <td>{{$campuss->campus_complemento}}</td>
                <td>{{$campuss->campus_cidade}}</td>
                <td>{{$campuss->campus_uf}}</td>

                <td><a class="btn btn-warning btn-xs" href="/campus/editar/<?php echo $campuss->id; ?>">Editar</a>
                    <a class="btn btn-danger btn-xs" href= >Excluir</a>


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

        <a href="/campus/criar" class="btn btn-success">Novo Registro</a>
        <a href="{{ url('/') }}" class="btn btn-danger">Cancelar</a>

    </div>
</div> 

@endsection
