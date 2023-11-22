<?php
require_once("../../config/conexion.php");
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar</title>
    <link rel="stylesheet" href="<?php echo base_url; ?>css/bootstrap.min.css">

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

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">ACTUALIZAR STOCK</h5>
                        <form action="<?php echo base_url; ?>CRUDM/editarDatos.php" method="post">
                            <?php
                            include_once("../../config/conexion.php");

                            $sql = "SELECT * FROM tbl_prisioneros WHERE idpreso =" . $_REQUEST['Id'];
                            $resultado = $conexion->query($sql);

                            $row = $resultado->fetch_assoc();
                            ?>
                            <input type="hidden" class="form-control" name="idpreso" id="idpreso" value="<?php echo $row['idpreso'] ?>">
                            <div class="mb-3">
                           
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="apellido" class="form-label">apellido</label>
                                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="apellido" value="<?php echo $row['apellido'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="fechaN" class="form-label">fechaN </label>
                                <input type="date" class="form-control" id="fechaN" name="fechaN" placeholder="fechaN " value="<?php echo $row['fechaN'] ?>">
                            </div>
                            
                            <div class="mb-3">
                                <label for="estado" class="form-label">estado</label>
                                <input type="text" class="form-control" id="estado" name="estado" placeholder="estado" value="<?php echo $row['estado'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="direccion" class="form-label">direccion</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="direccion " value="<?php echo $row['direccion'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="sexo" class="form-label">sexo</label>
                                <input type="text" class="form-control" id="sexo" name="sexo" placeholder="sexo " value="<?php echo $row['sexo'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="motEnc" class="form-label">MotivoEncierro</label>
                                <input type="text" class="form-control" id="motEnc" name="motEnc" placeholder="motEncierro" value="<?php echo $row['motEnc'] ?>">
                            </div>
                            <div class="text-center">
                                <a href="../productos/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Actualizar</button>
                            </div>
                          
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo base_url; ?>js/bootstrap.min.js"></script>

</body>

</html>