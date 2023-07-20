<?php
    require_once("c://xampp/htdocs/crud-mvc-pdo-poo-php/controller/usernameController.php");
    $obj = new usernameController();
    $obj->update($_POST["id"], $_POST["nombre"]);
