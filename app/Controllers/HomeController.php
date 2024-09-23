<?php
    var_dump($_SESSION['user']);
    $query = "SELECT `id`, `title`, `description`, `creation_date` FROM `subject`";
    $queryStatement = $mysqlClient->prepare($query);
    $queryStatement->execute();
    $subjects = $queryStatement->fetchAll();
require_once(__DIR__ . '/../Views/home.view.php');