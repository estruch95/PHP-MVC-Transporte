<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title><?php echo $data["titulo"]; ?></title>
</head>
<body>

    <div class="container">
        <br/>
        <h2><?php echo $data["titulo"]; ?></h2>
        <br/><br/>

        <form id="actualiza_camion" name="actualiza_camion" method="post" action="index.php?c=camion&a=actualizaCamion" autocomplete="off">
            <input type="hidden" id="id" name="id" value="<?php echo $data["id"]; ?>"/>
            Matricula: <input type="text" class="form-control" name="matricula" value="<?php echo $data["camion"]['matricula']; ?>" required><br/>
            Modelo: <input type="text" class="form-control" name="modelo" value="<?php echo $data["camion"]['modelo']; ?>" required><br/>
            Potencia: <input type="text" class="form-control" name="potencia" value="<?php echo $data["camion"]['potencia']; ?>" required><br/>
            Tipo: <input type="text" class="form-control" name="tipo" value="<?php echo $data["camion"]['tipo']; ?>" required><br/><br/>
            <button id="guardar_camion" name="guardar_camion"type="submit" class="btn btn-primary">Actualizar camión</button>

        </form>

    </div>

    
</body>
</html>