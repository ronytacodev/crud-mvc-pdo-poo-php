<?php
require_once("c://xampp/htdocs/crud-mvc-pdo-poo-php/view/head/head.php");
?>

<form action="store.php" method="POST" autocomplete="off" class="col-4">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre del usuario</label>
        <input type="text" name="nombre" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="index.php" class="btn btn-danger">Cancelar</a>
</form>

<?php
require_once("c://xampp/htdocs/crud-mvc-pdo-poo-php/view/head/footer.php");
?>