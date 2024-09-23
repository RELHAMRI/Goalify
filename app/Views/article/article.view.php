<?php
require_once(__DIR__ . "/../partials/head.php");
?>
<h1><?= $article['title'] ?></h1>
<p><?= $article['content'] ?></p>
<p>Date de création : <?= $article['creation_date'] ?></p>
<?php
if (!empty($article['modification_date'])) {
?>
    <p>Date de modification : <?= $article['modification_date'] ?></p>
<?php
}
?>
<p>Créer par : <a href="/profile?id=<?= $article['user_id'] ?>"><?= $article['pseudo'] ?></a></p>
<?php
if (!empty($article['modification_date'])) {
    if ($_SESSION['user']['idUser'] == $article['user_id']) {
?>
    <p>Date de modification : <?= $article['modification_date'] ?></p>
    <a href="/editArticle?id=<?= $article['id'] ?>" class="btn colorYellow">Modifier</a>
<?php
    }
}
?>
<p>Créer par : <a href="/profile?id=<?= $article['user_id'] ?>"><?= $article['pseudo'] ?></a></p>

<?php
if ($_SESSION['user']['idUser'] == $article['user_id']) {
?>
    <a href="/editArticle?id=<?= $article['id'] ?>" class="btn">Modifier</a>
<?php
}
require_once(__DIR__ . "/../partials/footer.php");
?>