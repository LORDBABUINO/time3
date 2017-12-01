@extends('base')

@section('titulo', 'Grade consulta')

@section('conteudo')
<h3 align="center" class="animacao">Consulta de Grade</h3>

    <form class="form-group animacao">
      <div>
          <label>Campus: </label>
          <select class="form-control">
              <option value="1">Asa Sul</option>
              <option value="2">Asa Norte</option>
              <option value="3">Oeste</option>
          </select>
      </div>

      <div>
          <label>Semestre: </label>
          <select class="form-control">
              <option value="1">1 Semestre</option>
              <option value="2">2 Semestre</option>
              <option value="3">3 Semestre</option>
              <option value="4">4 Semestre</option>
          </select>
      </div>
            <div>
                <label>Curso:</label>

        <div style="font-size: 18px; margin-bottom: 5px">
<select class="form-control">
              <option value="1">Análise em desenvolvimento de sistemas</option>
              <option value="2">Ciêcia da computação</option>
              <option value="3">Moda</option>
              <option value="2">Administração</option>
</select>
                  </div>

            </div>

            <label>Dia:</label><br>
            <div style="font-size: 18px; margin-bottom: 5px">
                <input type="radio" name="dia" value="seg"> Segunda-feira<br>
                <input type="radio" name="dia" value="ter"> Terça-feira<br>
                <input type="radio" name="dia" value="qua"> Quarta-feira<br>
                <input type="radio" name="dia" value="qui"> Quinta-feira<br>
                <input type="radio" name="dia" value="sex"> Sexta-feira<br>
                <input type="radio" name="dia" value="sab"> Sábado
            </div>
            <div style="float: center; clear: left; padding-top: 2%">
                <input type="submit" value="Pesquisar" class="btn btn-primary">
                <a class="btn btn-danger" href="/home">Cancelar</a>
            </div>

        </form><br>



    <div style="font-size: 15px; margin-bottom: 5px">
<label>Dia da semana</label>
      </div>
<tr>
    <div style="font-size: 12px; margin-bottom: 5px">
<input type="date" name="Segunda" >
      </div>
</tr>


  <table align="center" style="width:50%" border=1px>

<tr>
<th align="center">Disciplina</th>
<th align="center">Sala</th>
</tr>
<br>
<tr>
<td align="center">Projeto Integrador</td>
<td align="center">JB6</td>
</tr>
</table>


@endsection
