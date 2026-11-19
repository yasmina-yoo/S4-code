
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Yasmina Zougam</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">
        <div class="logo">YZ</div>
        <nav class="nav">
            <a href="#accueil">Accueil</a>
            <a href="#apropos">À propos</a>
            <a href="#projets">Projets</a>
        </nav>
    </header>
    <main>
        <section class="hero" id="accueil">
            <div class="hero-text">
                <p class="welcome">BIENVENUE SUR MON PORTFOLIO</p>
                <h1>
                    Bonjour, je suis
                    <span>Yasmina <br>Zougam</span>
                </h1>
                <p>
                    Étudiante en développement web.
                    Je crée des interfaces web simples et modernes
                    et j'aime apprendre de nouvelles choses.
                </p>
                <div class="hero-buttons">
                    <a href="#projets" class="button">
                        Découvrir mes projets
                    </a>
                    <a href="#" class="button contact-button">
                        Me contacter
                    </a>
                </div>
            </div>
            <div class="hero-image">
                <img src="image/ME.jpg" alt="Photo de Yasmina">
            </div>
        </section>
        <section class="about" id="apropos">
            <h2>À propos de moi</h2>
            <p>
                Je suis Yasmina Zougam, étudiante en développement web.
                Je suis passionnée par la création de sites web.
                J'aime apprendre de nouvelles choses et réaliser des projets.
            </p>
            <div class="about-skills">
                <span>HTML</span>
                <span>CSS</span>
                <span>JavaScript</span>
                <span>Figma</span>
            </div>
        </section>
        <section class="projects" id="projets">
            <h2>Mes projets</h2>
            <p class="section-description">
                Découvrez quelques projets et idées sur lesquels je travaille.
            </p>
            <div class="projects-list">
                <?php foreach ($projets as $projet){?>
                <article class="card">
                    <div class="card-content">
                        <p class="category">
                            <?= $projet ['categorie']; ?>
                        </p>
                        <h3> 
                            <?= $projet ['nom']; ?>
                        </h3>
                        <p>
                           <?= $projet ['description']; ?>
                        </p>
                        <?php if ($projet ['disponible']){?>
                        <a href="#">
                            Voir le projet →
                        </a>
                        <?php } else {?>
                        <p> projet en cours</p>
                        <?php } ?>
                    </div>
                </article>
               <?php }?>
            </div>
        </section>
    </main>
    <footer class="footer">
        <p>© 2026 Yasmina Zougam - Mon Portfolio</p>
    </footer>
</body>
</html>