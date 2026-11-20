
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventFlow</title>
    <link rel="stylesheet" href="css/accueil.css">
</head>

<body>

    <header>
        <div class="logo">EventFlow</div>

        <nav class="nav">
            <a href="#">Accueil</a>
            <a href="#">Événements</a>
            <a href="#">À propos</a>
        </nav>

        <div class="buttons">
            <a href="#" class="login">Se connecter</a>
            <a href="#" class="signup">S'inscrire</a>
        </div>
    </header>

    <main>

        <section class="hero">

            <div class="hero-text">

                <span class="welcome">Bienvenue sur EventFlow</span>

                <h1>Créez et gérez des <span>événements</span> avec inscriptions</h1>

                <p>Trouvez des événements qui vous inspirent, inscrivez-vous en quelques clics et vivez des expériences uniques.</p>

                <a href="#" class="discover">Découvrir les événements →</a>

            </div>

            <div class="hero-image">
                <img src="image/btys.jpg" alt="Événement">
            </div>

        </section>


        <section class="popular">

            <div class="section-title">
                <h2>Événements populaires</h2>
                <a href="#">Voir tous les événements →</a>
            </div>

            <div class="cards">

                <?php foreach ($evenements as $evenement) { ?>

                    <article class="card">

                        <img src="<?php echo $evenement["image"]; ?>" alt="Événement">

                        <div class="card-content">

                            <span><?php echo $evenement["categorie"]; ?></span>

                            <h3><?php echo $evenement["titre"]; ?></h3>

                            <p><?php echo $evenement["date"]; ?></p>

                            <p><?php echo $evenement["ville"]; ?></p>

                            <?php if ($evenement["statut"] == "Ouvert") { ?>

                                <a href="#">Voir les détails →</a>

                            <?php } else { ?>

                                <p>Inscriptions complètes</p>

                            <?php } ?>

                        </div>

                    </article>

                <?php } ?>

            </div>

        </section>


        <section class="how">

            <h2>Comment ça marche ?</h2>

            <p>En quelques étapes simples, trouvez et participez à vos événements préférés.</p>

            <div class="steps">

                <article class="step">
                    <h3>⌕</h3>
                    <h4>Recherchez un événement</h4>
                    <p>Parcourez notre sélection ou utilisez la barre de recherche.</p>
                </article>

                <div class="arrow">→</div>

                <article class="step">
                    <h3>♙</h3>
                    <h4>Inscrivez-vous</h4>
                    <p>Remplissez le formulaire d'inscription en quelques clics.</p>
                </article>

                <div class="arrow">→</div>

                <article class="step">
                    <h3>▣</h3>
                    <h4>Profitez de l'événement</h4>
                    <p>Recevez votre confirmation et vivez une belle expérience !</p>
                </article>

            </div>

        </section>

    </main>


    <footer class="footer">

        <div class="logo">EventFlow</div>

        <nav class="footer-nav">
            <a href="#">Accueil</a>
            <a href="#">Événements</a>
            <a href="#">À propos</a>
            <a href="#">Contact</a>
        </nav>

        <p>© 2025 EventFlow. Tous droits réservés.</p>

    </footer>

</body>
</html>
