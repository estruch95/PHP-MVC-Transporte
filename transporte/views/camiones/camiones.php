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
        <br/>
        <a href="index.php?c=camion&a=nuevoCamion" class="btn btn-primary" tabindex="-1" role="button">Insertar nuevo camión</a>
        <br/><br/>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Matricula</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Potencia</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data["camiones"] as $camion) { ?>
                <tr>
                    <td><?php echo $camion['matricula']; ?></td>
                    <td><?php echo $camion['modelo']; ?></td>
                    <td><?php echo $camion['potencia']; ?></td>
                    <td><?php echo $camion['tipo']; ?></td>
                    <td><a href="index.php?c=camion&a=modificaCamion&id=<?php echo $camion['matricula']; ?>" class="btn btn-primary" role="button">Modificar</a></td>
                    <td><a href="index.php?c=camion&a=eliminaCamion&id=<?php echo $camion['matricula']; ?>" class="btn btn-danger" role="button">Eliminar</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>


    </div>

    
</body>
</html>