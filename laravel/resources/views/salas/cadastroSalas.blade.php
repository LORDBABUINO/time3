<html>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<form action="listar">

  <fieldset class="form-group" >
    <legend class="align-middle">Escolha o Campus</legend>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
        Asa Sul
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
        Asa Norte
      </label>
    </div>
    <div class="form-check disabled">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3">
        Ceilândia
      </label>
    </div>
  </fieldset>

  <fieldset class="form-group">
    <legend></legend>

    <div class="form-group">
      <label for="nomeDaSala">Nome da sala:</label>
      <input type="text" class="glyphicon glyphicon-align-left" id="nomeDaSala" name="nomeDaSala" placeholder="AA1">
    </div>
    <div class="form-group">
      <label for="descSala">Descrição da sala:</label>
      <textarea class="glyphicon glyphicon-align-left" id="descSala" name="descSala" rows="3" cols="20"></textarea>
    </div>

  </fieldset>

<input type="submit" class="btn btn-danger">
</form>

</html>
