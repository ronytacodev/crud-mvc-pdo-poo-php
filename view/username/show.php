<?php
require_once("c://xampp/htdocs/crud-mvc-pdo-poo-php/view/head/head.php");
require_once("c://xampp/htdocs/crud-mvc-pdo-poo-php/controller/usernameController.php");
$obj = new usernameController();
$date = $obj->show($_GET["id"]);
?>

<h2 class="text-center">Detalles del registro</h2>
<div class="pb-3">
    <a href="index.php" class="btn btn-primary">Regresar</a>
    <a href="edit.php?id=<?= $date[0] ?>" class="btn btn-success">Actualizar</a>

    <!-- Button trigger modal -->
    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea eliminar el registro?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Una vez eliminado no se podrá recuperar el registro.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary|" data-bs-dismiss="modal">Cerrar</button>
                    <a href="delete.php?id=<?= $date[0] ?>" class="btn btn-danger">Eliminar</a>
                    <!-- <button type="button">Eliminar</button> -->
                </div>
            </div>
        </div>
    </div>
</div>

<table class="table container-fluid">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="col"><?= $date[0] ?></td>
            <td scope="col"><?= $date[1] ?></td>
        </tr>
    </tbody>
</table>

<?php
require_once("c://xampp/htdocs/crud-mvc-pdo-poo-php/view/head/footer.php");
?>