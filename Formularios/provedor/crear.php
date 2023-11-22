<?php
require_once("../../config/conexion.php");
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar</title>
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
                        <h5 class="card-title text-center">REGISTRAR PROVEDOR</h5>
                        <form action="<?php echo base_url; ?>CRUDC/insertarDatos.php" method="POST">
                            <div class="mb-3">
                                <label for="altura" class="form-label">ALTURA</label>
                                <input type="text" class="form-control" id="altura" name="altura" placeholder="Nombre del provedor" required>
                            </div>
                            <div class="mb-3">
                                <label for="compleccion" class="form-label">COMPLECCION</label>
                                <input type="text" class="form-control" id="compleccion" name="compleccion" placeholder="nombre del Contacto" required>
                            </div>
                            <div class="mb-3">
                                <label for="tes" class="form-label">TES</label>
                                <input type="text" class="form-control" id="tes" name="tes" placeholder="tes" required>
                            </div>
                            <div class="mb-3">
                                <label for="peso" class="form-label">PESO</label>
                                <input type="text" class="form-control" id="peso" name="peso" placeholder="peso" required>
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">NOMBRE</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="fechaN" class="form-label">FECHAN</label>
                                <input type="date" class="form-control" id="fechaN" name="fechaN" placeholder="fechaN" required>
                            </div>
                            <div class="mb-3">
                                <label for="condena" class="form-label">condena</label>
                                <input type="text" class="form-control" id="condena" name="condena" placeholder="condena" required>
                            </div>
                            <div class="text-center">
                                <a href="<?php echo base_url; ?>Formularios/provedor/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Guardar</button>
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