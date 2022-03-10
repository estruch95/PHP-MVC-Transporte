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

        <form id="nuevo_camion" name="nuevo_camion" method="post" action="index.php?c=camion&a=insertarCamion" autocomplete="off">

            Matricula: <input type="text" class="form-control" name="matricula" required><br/>
            Modelo: <input type="text" class="form-control" name="modelo" required><br/>
            Potencia: <input type="text" class="form-control" name="potencia" required><br/>
            Tipo: <input type="text" class="form-control" name="tipo" required><br/><br/>
            <button id="insertar_camion" name="insertar_camion"type="submit" class="btn btn-primary">Crear nuevo camión</button>

        </form>

    </div>

    
</body>
</html>