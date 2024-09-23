<?php

if(isset($_GET['id'])){
    $idArticle = $_GET['id'];

    $query = "SELECT `article`.`title`, `article`.`content`,  `article`.`creation_date`, `article`.`modification_date`, `user`.`pseudo` AS `user_id`
    FROM  `article`
    INNER JOIN `user` ON `article`.`id_user` = `user`.id
    WHERE `article`.`id` = :id_article";

    $queryStatement = $mysqlClient->prepare($query);
    $queryStatement->bindValue(':id_article', $idArticle);
    $queryStatement->execute();
    $article = $queryStatement->fetchAll();
}

require_once (__DIR__ . '/../Views/article/article.views.php');