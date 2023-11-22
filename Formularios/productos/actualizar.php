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
                        <h5 class="card-title text-center">ACTUALIZAR PROVEDOR</h5>
                        <form action="<?php echo base_url; ?>CRUDP/editarDatos.php" method="post">
                            <?php
                            include_once("../../config/conexion.php");

                            $sql = "SELECT * FROM tbl_sentencia WHERE idpreso =" . $_REQUEST['Id'];
                            $resultado = $conexion->query($sql);

                            $row = $resultado->fetch_assoc();
                            ?>
                            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $row['idpreso'] ?>">
                            <div class="mb-3">
                                <label for="causasen" class="form-label">causasen</label>
                                <input type="text" class="form-control" id="causasen" name="causasen" placeholder="tSentencia del provedor" required>
                            </div>
                            <div class="mb-3">
                                <label for="descripcion" class="form-label">descripcion</label>
                                <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="tSentencia del Contacto" required>
                            </div>
                            <div class="mb-3">
                                <label for="noCaso" class="form-label">noCaso</label>
                                <input type="text" class="form-control" id="noCaso" name="noCaso" placeholder="noCaso" required>
                            </div>
                            <div class="mb-3">
                                <label for="sentencia" class="form-label">sentencia</label>
                                <input type="text" class="form-control" id="sentencia" name="sentencia" placeholder="sentencia" required>
                            </div>
                            <div class="mb-3">
                                <label for="tSentencia" class="form-label">tSentencia</label>
                                <input type="text" class="form-control" id="tSentencia" name="tSentencia" placeholder="tSentencia" required>
                            </div>
                            <div class="mb-3">
                                <label for="fechaN" class="form-label">FECHAN</label>
                                <input type="date" class="form-control" id="fechaN" name="fechaN" placeholder="fechaN" required>
                            </div>
                            <div class="mb-3">
                                <label for="noCelda" class="form-label">noCelda</label>
                                <input type="text" class="form-control" id="noCelda" name="noCelda" placeholder="noCelda" required>
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
    <script src="../../js/fontawesome.js"></script>

</body>

</html>