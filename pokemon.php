<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/flatly-bootstrap.min.css">
    <link rel="shortcut icon" href="./img/pokeball.png" type="image/x-icon">
</head>
<body>
    <?php require_once('./partials/menu.php'); ?>

    <div class="container">
        <div class="card mt-2">
            <div class="card-header bg-secondary text-white">
                <img src="./img/pikachu.png" alt="" height="50" width="50">
                &nbsp;&nbsp;Pokémon
            </div>
            <div class="card-body">
                <form action="./tabla.php" method="post" enctype="multipart/form-data">
                    <!-- Número de pokémon -->
                    <div class="form-group row">
                        <label for="inputNumero" class="col-sm-2 col-form-label">Número</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputNumero" name="inputNumero" 
                                    placeholder="Número del pokémon" maxlength="3" autofocus>
                        </div>
                    </div>
                    <!-- Nombre del pokémon -->
                    <div class="form-group row">
                        <label for="inputNombre" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputNombre" name="inputNombre" placeholder="Nombre del pokémon">
                        </div>
                    </div>
                    <!-- Región del pokémon -->
                    <div class="form-group row">
                        <label for="selectRegion" class="col-sm-2 col-form-label">Región</label>
                        <div class="col-sm-10">
                            <select name="selectRegion" id="selectRegion" class="custom-select" >
                                <option value="Kanto">Kanto</option>
                                <option value="Johto">Johto</option>
                                <option value="Hoenn">Hoenn</option>
                                <option value="Sinnoh">Sinnoh</option>
                                <option value="Teselia">Teselia</option>
                            </select>
                        </div>
                    </div>
                    <!-- Tipo de pokémon -->
                    <div class="form-group row">
                        <label for="checkTipo" class="col-sm-2 col-form-label">Tipo</label>
                        <div class="col-sm-10 pt-2">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="checkPlanta" name="checkTipo[]" value="Planta">
                                <label class="custom-control-label" for="checkPlanta">Planta</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="checkVeneno" name="checkTipo[]" value="Veneno">
                                <label class="custom-control-label" for="checkVeneno">Veneno</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="checkFuego" name="checkTipo[]" value="Fuego">
                                <label class="custom-control-label" for="checkFuego">Fuego</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="checkVolador" name="checkTipo[]" value="Volador">
                                <label class="custom-control-label" for="checkVolador">Volador</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="checkAgua" name="checkTipo[]" value="Agua"> 
                                <label class="custom-control-label" for="checkAgua">Agua</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="checkTierra" name="checkTipo[]" value="Eléctrico">
                                <label class="custom-control-label" for="checkTierra">Eléctrico</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="checkHada" name="checkTipo[]" value="Hada">
                                <label class="custom-control-label" for="checkHada">Hada</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="checkBicho" name="checkTipo[]" value="Bicho">
                                <label class="custom-control-label" for="checkBicho">Bicho</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="checkLucha" name="checkTipo[]" value="Lucha">
                                <label class="custom-control-label" for="checkLucha">Lucha</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="checkPsiquico" name="checkTipo[]" value="Psíquico">
                                <label class="custom-control-label" for="checkPsiquico">Psíquico</label>
                            </div>
                        </div>
                    </div>
                    <!-- Altura del pokémon -->
                    <div class="form-group row">
                        <label for="inputAltura" class="col-sm-2 col-form-label">Altura</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <input type="number" class="form-control" id="inputAltura" name="inputAltura" aria-describedby="addon-cm">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="addon-cm">cm</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Peso del pokémon -->
                    <div class="form-group row">
                        <label for="inputPeso" class="col-sm-2 col-form-label">Peso</label>
                        <div class="col-sm-10">
                           
                            <div class="input-group">
                                <input type="number" step="0.01" class="form-control" id="inputPeso" name="inputPeso" aria-describedby="addon-kg">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="addon-kg">Kg</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Evolución del pokémon -->
                    <div class="form-group row">
                        <label for="radioEvolucion" class="col-sm-2 col-form-label">Evolución</label>
                        <div class="col-sm-10 pt-2">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="radioSin" name="radioEvolucion" class="custom-control-input" value="Sin evolucionar" checked>
                                <label class="custom-control-label" for="radioSin">Sin evolucionar</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="radioPrimera" name="radioEvolucion" class="custom-control-input" value="Primera evolución">
                                <label class="custom-control-label" for="radioPrimera">Primera evolución</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="radioSegunda" name="radioEvolucion" class="custom-control-input" value="Segunda evolución">
                                <label class="custom-control-label" for="radioSegunda">Otras evoluciones</label>
                            </div>
                        </div>
                    </div>
                    <!-- Imagen del pokémon -->
                    <div class="form-group row">
                        <label for="selectRegion" class="col-sm-2 col-form-label">Imagen</label>
                        <div class="col-sm-10">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="fileLangHTML" name="fileLangHTML">
                                <label class="custom-file-label" for="fileLangHTML" data-browse="Elegir">Seleccionar Archivo</label>
                            </div>
                        </div>
                    </div>
                    <!-- Botones del formulario -->
                    <div class="float-right">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="submit" class="btn btn-primary">Aceptar</button>
                            <a href="" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </div>
                </form>
            </div>           
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>