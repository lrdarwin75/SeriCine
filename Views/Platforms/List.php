<?php
include_once(__DIR__ . '/../Templates/Header.php');
require_once(__DIR__ . '/../../Controllers/PlatformController.php');
?>

<!-- Contenido -->
<div class="container mt-4">
    <div class="card">
        <div class="card-header text-center">
            <h1>LISTADO DE PLATAFORMAS</h1>
            <p>Se podra crear, actualizar o borrar/suspender una plataforma</p>
        </div>
        <div class="card-body">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-success" href="View.php">
                    <i class="bi bi-file-earmark-plus"></i>
                    Nuevo registro
                </a>
            </div>
            <?php
            $platformList = listPlatforms();
            if (count($platformList) > 0) {
            ?>
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($platformList as $platform) {
                            $status = $platform->getStatus();  
                        ?>
                            <tr>
                                <td><?php echo $platform->getId(); ?> </td>
                                <td><?php echo $platform->getName(); ?></td>
                                <td><?php echo $status; ?> </td>
                                <td>
                                    <?php 
                                        if($status == 'Activa')
                                        {
                                    ?>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a class="btn btn-primary" href="View.php?id=<?php echo $platform->getId(); ?>">
                                                    Editar
                                                </a>
                                                &nbsp;&nbsp;
                                                <a class="btn btn-danger" href="Activate.php?id=<?php echo $platform->getId(); ?>">
                                                    Desactivar
                                                </a>
                                            </div>    
                                    <?php 
                                        } else
                                        {     
                                    ?>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a class="btn btn-primary" href="View.php?id=<?php echo $platform->getId(); ?>">
                                                    Editar
                                                </a>
                                                &nbsp;&nbsp;
                                                <a class="btn btn-success" href="Activate.php?id=<?php echo $platform->getId(); ?>">
                                                    Activar
                                                </a>
                                            </div>
                                    <?php 
                                        }     
                                    ?>        
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            <?php
            } else {
            ?>
                <div class="alert alert-danger" role="alert">
                    No existen registros
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<!-- Fin Contenido -->

<?php
    
    include_once(__DIR__ . '/../Templates/Footer.php');
?>