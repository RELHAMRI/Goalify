<?php
    require_once(__DIR__ . "/partials/head.php");
    if(isset($_SESSION['user'])){
        ?>
            <h1>Bienvenue <?= $_SESSION['user']['pseudo'] ?></h1>
        <?php
    }else {
?>
    <h1>Bienvenue à toi !</h1>
    <main>
        <section id="hero">
            <h2>Suivez toute l'actualité du football en direct !</h2>
            <p>Les dernières nouvelles, scores en direct, et bien plus encore.</p>
        </section>

        <section id="actu">
            <h2>Dernières Actualités</h2>
            <article>
                <h3>Victoire éclatante du PSG contre l'OM</h3>
                <p>Le Paris Saint-Germain s'impose face à Marseille dans un match spectaculaire avec un score de 3-1.</p>
            </article>
            <article>
                <h3>Mercato : Mbappé reste au PSG</h3>
                <p>Malgré les rumeurs, Kylian Mbappé a confirmé son engagement avec le PSG pour la saison à venir.</p>
            </article>
        </section>

        <section id="calendrier">
            <h2>Prochains Matchs</h2>
            <ul>
                <li>PSG vs Lyon - 20 septembre 2024</li>
                <li>OM vs Nice - 21 septembre 2024</li>
                <li>Barcelone vs Real Madrid - 22 septembre 2024</li>
            </ul>
        </section>
    </main>
<?php
}
    include_once(__DIR__ . "/partials/footer.php");
?>
    


