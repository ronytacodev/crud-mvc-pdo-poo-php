<?php
require_once("c://xampp/htdocs/crud-mvc-pdo-poo-php/view/head/head.php");
require_once("c://xampp/htdocs/crud-mvc-pdo-poo-php/controller/usernameController.php");
$obj = new usernameController();
// print_r($obj->index());
$rows = $obj->index();
?>

<div class="mb-3">
    <a href="/crud-mvc-pdo-poo-php/view/username/create.php" class="btn btn-primary">Agregar nuevo usuario</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($rows) : ?>
            <?php foreach ($rows as $row) : ?>
                <tr>
                    <th><?= $row[0] ?></th>
                    <th><?= $row[1] ?></th>
                    <th>
                        <a href="/crud-mvc-pdo-poo-php/view/username/show.php?id=<?= $row[0] ?>" class="btn btn-primary">Ver</a>
                        <a href="edit.php?id=<?= $row[0] ?>" class="btn btn-success">Modificar</a>

                        <!-- Button trigger modal -->
                        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>

                    </th>
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
                                    <a href="delete.php?id=<?= $row[0] ?>" class="btn btn-danger">Eliminar</a>
                                    <!-- <button type="button">Eliminar</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </tr>
            <?php endforeach ?>
        <?php else : ?>
            <tr>
                <td colspan="3" class="text-center">No hay registros actualmente</td>
            </tr>

        <?php endif; ?>
    </tbody>
</table>

<?php
require_once("c://xampp/htdocs/crud-mvc-pdo-poo-php/view/head/footer.php");
?>