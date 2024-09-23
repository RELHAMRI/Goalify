<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goalify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/public/css/style.css">
</head>

<body>
    <header>
        <div class="logo">
            <img src="/public/img/Goalify__1_-removebg-preview.png" alt="Logo Goalify" width="100" height="100">
        </div>
        <nav>
            <ul>
                <?php
                if (isset($_SESSION['user'])) {
                ?>
                    <li><a href="/logout">Deconnexion</a></li>
                    <?php
                    if ($_SESSION['user']['role'] == "Admin") {
                    ?>
                        <li><a href="/users">Liste des utilisateurs</a></li>
                        <li><a href="/subject">Ajout d'un sujet</a></li>
                    <?php
                    }
                } else {
                    ?>
                    <li><a href="/register">Inscription</a></li>
                    <li><a href="/connection">Connexion</a></li>
                <?php
                }
                ?>
            </ul>
        </nav>
    </header>
    <div class="bg-football">