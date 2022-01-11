<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Boostrap-->
    <?php
            include("../../../../Boostrap_Thinks/boostrap.php");
    ?>
</head>
<body>
    <form action="db.php" method="post">
        <div class="position-relative">
        <div class="card mx-auto mt-4 " style="max-width: 470px; align-items:center;">
            <div class="card-body">
                <h5 class="card-title">Formulario carrusel</h5>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Titulo</label>
                    <input type="name" class="form-control" id="titulo" name="titulo">
                    <div id="emailHelp" class="form-text">Titulo solo con letras y menor a 15 caracteres.</div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <textarea class="form-control"  id="descripcion" name="descripcion" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Descripción</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Imagen</label>
                    <input class="form-control" type="file" id="imagen" name="imagen" multiple>
                    <div id="emailHelp" class="form-text">Descripción con una extension maxima a 30 caracteres.</div>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-secondary" type="submit">Button</button>
                    <div id="emailHelp" class="form-text mx-auto">
                        <?=isset($_COOKIE["correccion"]) ? $_COOKIE["correccion"] : "";?>

                    </div>
                </div>
                
                
            </div>
        </div>
    </form>
    <?php
    function mysql_levelUp(){
        return new mysqli("localhost","root","","levelup");
    }
    $mysql= mysql_levelUp();
    $select=$mysql->query('select titulo from carrusel');
    print_r($select);
    ?>
</body>
</html>