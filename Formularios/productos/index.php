<?php
include_once("../../config/conexion.php")
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Productos</title>
    <link rel="stylesheet" href="<?php echo base_url; ?>css/bootstrap.min.css">
</head>

<body>

    <!-- CODIGO DE NAVBAR RESPONSIVA -->
    <header>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container">
              
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mi-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mi-menu">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/productos/index.php">Seentencia</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/provedor/index.php">DetallesPreso</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/stock/index.php">Presos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- FIN CODIGO DE NAVBAR RESPONSIVA -->
    <div class="container-lg mt-5">
        <a href="crear.php" type="button" class="btn btn-outline-primary mb-3">
            <i class="fa-solid fa-cart-plus fa-beat"></i>
            NUEVO
        </a>
        <h1 class="text-center bg-danger text-light ">LISTADO DE SENTENCIA</h1>
        <div class="table-responsive-sm">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">IDPRESO</th>
                        <th scope="col">Causa</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">noCaso</th>
                        <th scope="col">Sentencia</th>
                        <th scope="col">TiempoSen</th>
                        <th scope="col">FechaN</th>
                        <th scope="col">NoCelda</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

           $sql = $conexion->query("SELECT * FROM tbl_sentencia");

                    while ($resultado = $sql->fetch_assoc()) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $resultado['idpreso'] ?></th>
                            <th scope="row"><?php echo $resultado['causasen'] ?></th>
                            <th scope="row"><?php echo $resultado['descripcion'] ?></th>
                            <th scope="row"><?php echo $resultado['noCaso'] ?></th>
                            <th scope="row"><?php echo $resultado['sentencia'] ?></th>
                            <th scope="row"><?php echo $resultado['tSentencia'] ?></th>
                            <th scope="row"> <?php echo $resultado['fechaN'] ?></th>
                            <th scope="row"> <?php echo $resultado['noCelda'] ?></th>
                            <th scope="row">
                                <a href="<?php echo base_url; ?>Formularios/productos/actualizar.php?Id=<?php echo $resultado['idpreso'] ?>" class="btn btn-outline-warning">
                                    <i class="fa-solid fa-pen-to-square fa-beat"></i>
                                </a>
                                <a href="<?php echo base_url; ?>CRUDP/eliminarDatos.php?Id=<?php echo $resultado['idpreso'] ?>" class="btn btn-outline-danger">
                                    <i class="fa-solid fa-trash fa-beat"></i>
                                </a>
                            </th>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>


    <script src="<?php echo base_url; ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url; ?>js/all.min.js"></script>

</body>

</html>