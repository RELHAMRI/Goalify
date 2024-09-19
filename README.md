Cahier des charges - Forum

Goalify

1. Contexte du projet

Le projet consiste à développer un forum de football avec une interface moderne et intuitive, 
adaptée aux attentes actuelles des utilisateurs en matière d’expérience numérique. 
Ce forum permettra aux fans de football de discuter de l’actualité des matchs, des joueurs, 
et des transferts dans un environnement visuellement attractif et ergonomique. 
Le design reflète une expérience utilisateur immersive, avec un mode sombre et des éléments graphiques modernes.


2. Objectifs du projet

Créer une plateforme communautaire moderne pour les passionnés de football.
Offrir une interface ergonomique avec des fonctionnalités simples mais efficaces pour maximiser l’engagement.
Proposer une expérience utilisateur visuelle attrayante en utilisant des tendances graphiques actuelles telles que le mode sombre et des éléments de design minimalistes.

3. Cible

Le forum s’adresse aux fans de football de tout âge, 
qu’ils soient amateurs de ligues nationales ou internationales.
Il vise une audience digitale habituée à des interfaces modernes et attrayantes, appréciant l'ergonomie et la fluidité des interactions en ligne.

4. Fonctionnalités attendues

Inscription et connexion : Les utilisateurs peuvent s'inscrire avec un email et un mot de passe, ou via des services d'authentification sociale (optionnel).
Discussions par catégories : Organisation des discussions par catégories avec des titres clairs comme "Actualités de la Premier League", "Transferts de joueurs" et "Résumés de matchs".
Affichage en mode carte : Les discussions sont présentées sous forme de cartes, chacune avec un titre, un avatar de l’utilisateur, et un nombre de commentaires. Les cartes sont dynamiques avec des animations douces.
Mode sombre et palette de couleurs moderne : Utilisation de couleurs sombres (bleu marine, noir) avec des touches de vert néon pour accentuer les éléments importants.
Réactivité et optimisation mobile : Un design entièrement responsive, offrant une expérience fluide sur mobile et tablette, avec des boutons et icônes bien adaptés pour les écrans tactiles.
Modération simplifiée : Système simple pour signaler et modérer les contenus, avec des outils basiques de gestion pour l'administrateur.

5. Desgin et ergonomie

Mode sombre : Palette de couleurs centrée sur des nuances de bleu foncé et vert néon, qui sont à la mode dans les interfaces utilisateurs modernes.
Interface minimaliste : Utilisation d’icônes et de boutons épurés, avec des animations légères pour rendre l’expérience plus dynamique.
Navigation intuitive : Barre de navigation fixe en haut avec des sections claires (Accueil, Catégories, Matchs en direct, Connexion).
Affichage en grille : Les discussions sont organisées en cartes avec des bords arrondis pour une apparence moderne et engageante.

6. Technologies utilisées

Backend : PHP (Laravel) ou Node.js (Express), pour une gestion efficace des données utilisateurs et des discussions.
Frontend : HTML5, CSS3, et un peu de JavaScript, avec un framework comme Vue.js ou React pour l’interactivité.
Base de données : MySQL ou SQLite, pour une gestion simple et légère.
Design : Utilisation de CSS Grid et Flexbox pour un layout flexible et minimaliste.

7. Hébergement et déploiement

Hébergement web : Le forum doit être hébergé sur un serveur avec une capacité suffisante pour soutenir une croissance continue d’utilisateurs.
Nom de domaine : Acheter un nom de domaine en lien avec le thème football


8. Planning

Étude et design : 2 semaines pour créer le wireframe et le prototype.
Développement des fonctionnalités de base : 6 semaines pour construire les fonctionnalités principales (inscription, création de discussions, navigation).
Test et débogage : 2 semaines pour les tests utilisateurs et les ajustements finaux.
Lancement du forum : 3ème mois après le début du projet.

9. Budget estimé

Développement web : 5 000 € à 10 000 €, en fonction de la complexité des fonctionnalités ajoutées.
Hébergement annuel : 300 € à 800 €, pour un hébergement cloud de base.
Maintenance : 1 000 € annuels pour la maintenance et les mises à jour.

10. Conclusion

Le forum de football sera un espace moderne et minimaliste, conçu pour répondre aux attentes des utilisateurs en matière de simplicité et d'efficacité. 
Grâce à une interface légère et épurée, l’expérience sera fluide et agréable, tout en restant visuellement attractive et fonctionnelle.

-Faire un joli formulaire
-Changer le tableau d'erreurs en clé => valeur
La clé doit être le nom du champ la valeur le texte
-Afficher dans votre formulaire l'erreur sous le bon champ
Exemple :
<label for="mail">E-mail</label>
<input type="email" name="mail" id="mail">
    <?php if(isset($arrayError['mail'])){
    ?
        <p class='text-danger'><?= $arrayError['mail'] ?></p>
        <?php
    }    ?>
    