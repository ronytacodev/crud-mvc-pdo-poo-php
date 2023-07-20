<?php
    require_once("c://xampp/htdocs/crud-mvc-pdo-poo-php/controller/usernameController.php");
    $obj = new usernameController();
    $obj->delete($_GET["id"]);
