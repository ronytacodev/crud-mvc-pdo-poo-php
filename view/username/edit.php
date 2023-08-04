<?php
include "c://xampp/htdocs/crud-mvc-pdo-poo-php/view/head/head.php";
require_once("c://xampp/htdocs/crud-mvc-pdo-poo-php/controller/usernameController.php");
$obj = new usernameController();

$id = $_GET["id"];
$user = $obj->show($id);
// print_r($user);
?>

<form action="update.php" method="POST" autocomplete="off">
    <h2>Modificando Registro</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $user[0] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo nombre</label>
        <div class="col-sm-10">
            <input type="text" name="nombre" class="form-control" id="inputPassword" value="<?= $user[1] ?>">
        </div>
    </div>
    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="show.php?id=<?= $user[0] ?>">Cancelar</a>
    </div>
</form>

<?php
include "c://xampp/htdocs/crud-mvc-pdo-poo-php/view/head/footer.php";
?>