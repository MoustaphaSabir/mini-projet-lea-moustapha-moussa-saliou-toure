<?php
    // Paramètres de connexion
    $serveur = "localhost";
    $utilisateur = "root";
    $mot_de_passe = "";
    $base_de_donnees = "boulangerie-patisserie";
    // Établir la connexion
    $connexion = mysqli_connect($serveur, $utilisateur,
    $mot_de_passe, $base_de_donnees);
    // Vérifier la connexion
    if (!$connexion) {
    die("Échec de la connexion : " . mysqli_connect_error());
    } else {
    echo "Connexion réussie à la base de données.";
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Boulangerie">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../styles/reset.css">
    <link rel="stylesheet" href="../styles/boulangerie.css">
    <title>Boulangerie</title>
</head>
<body>
    <header>
        <div class="contenairlien">
            <nav><a href="../index.php">Accueil</a></nav>
            <nav><a href="../pages/boulangerie.php">Boulangerie</a></nav>
            <nav><a href="../pages/chocolaterie.php">Chocolaterie</a></nav>
            <nav><a href="../pages/patisserie.php">Patisserie</a></nav>
            <nav><a href="../pages/formulaire.php">Contact</a></nav>
        </div>
   </header>
   <main>
        <div class="contenair-boulangerie">
            <div class="block1">
                <div class="text">
                    <h1 class="titre">Boulangerie :</h1>
                    <h4>DES PAINS CLASSIQUES ET SPÉCIAUX FAITS MAISON</h4>
                    <hr>
                    <p>Tous les pains, baguettes et viennoiseries que nous proposons à la Boulangerie d’Ymare sont pétris et cuits sur place. Certaines recettes 
                    sont uniques, élaborées par nos artisans boulangers.</p>
                    <p>La farine de blé utilisée est une farine Label Rouge. Elle est fabriquée avec du blé cultivé en France et transformé en région parisienne dans le Vexin. Ceci vous garantit une qualité gustative du pain et une chaîne d’approvisionnement courte. Quand au beurre 
                    utilisé dans nos viennoiseries, c’est un beurre AOP.</p>
                    <p>Nous proposons des baguettes et pains blancs classiques, mais également un large choix de pains spéciaux. Ceux-ci peuvent varier en fonction des saisons, de l’envie de notre équipe
                    boulangère et de l’attente de notre clientèle.</p>
                    <p>Le pain est cuit tout au long de la journée pour vous assurer du pain
                    frais quelle que soit l’heure de votre passage</p>
                </div>
                <div class="images1intro">
                    <img src="../images/imagesBoulangerie/images1intro.jpg" alt="images1intro">
                </div>
            </div>
            <section class="section-1">
                <h2>NOS PAINS SPÉCIAUX</h2>
                <hr>
                <p class="paragraphe">Les pains spéciaux permettent d’agrémenter les repas des grandes occasions ou simplement de varier les saveurs. Les pains suivants 
                sont actuellement disponibles dans notre boulangerie d’Ymare :</p>
                <div class="imagesContenair1">
                    <?php
                            
                        // mysqli_close($connexion);
                        // Exécuter une requête SELECT

                            // Vérifier si la requête a réussi
                            // Exécuter une requête SELECT
                        $sql = "SELECT * FROM boulangerie";
                        $boulangeries = mysqli_query($connexion, $sql);                
                    ?>

                    <?php if($boulangeries) : ?>
                        <?php foreach($boulangeries as $boulangerie) : ?>
                            <figure>
                                <img src="..<?php echo $boulangerie['url_image'] ?>" alt="<?= $boulangerie['titre_image'] ?>">
                                <figcaption><strong><?= $boulangerie['titre_image'] ?></strong>
                                <?= $boulangerie['description_image'] ?>
                                </figcaption>
                            </figure>
                        <?php endforeach ?>
                        <!-- fermeture du foreach -->
                    <?php endif ?>
                    <!-- <figure>
                        <img src="/images/imagesBoulangerie/boulangerie_le-pavé-du-boulanger.jpg" alt="">
                        <figcaption><strong>Le pavé du boulanger</strong>
                            Farine de blé, farine de seigle, céréales et levain
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="/images/imagesBoulangerie/boulangerie_le-maïs.jpg" alt="boulangerie_le-maïs">
                        <figcaption><strong>Le pain du soleil</strong>
                            Farine de blé, de maïs, graines de tournesol
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="/images/imagesBoulangerie/boulangerie_le-nordik.jpg" alt="boulangerie_le-nordik">
                            <figcaption><strong>Le pain 6 céréales</strong>
                        Farine de blé, de seigle et d’avoine, mélange de graines
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="/images/imagesBoulangerie/boulangerie_le-mueslie.jpg" alt="boulangerie_le-mueslie">
                        <figcaption><strong>Le muesli</strong>
                        Pain de mie avec un mélange de fruits secs et fruits confits
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="/images/imagesBoulangerie/boulangerie_le-chia-peps.jpg" alt="boulangerie_le-chia-peps">
                        <figcaption><strong>Le chia pep’s</strong>
                            farine de blé, farine de maïs, graines de courge, de tournesol et de chia
                        </figcaption>
                    </figure> -->
                </div>
            </section>
            <section class="section-2">
                <h2>NOS BAGUETTES SPÉCIALES</h2>
                <hr>
                <p>En plus de la baguette classique,
                    découvrez nos baguettes originales pour varier les saveurs</p>
            <div class="imagesContenair2">
            <figure>
                <img src="../images/imagesBaguettes/boulangerie_la-cesame (1).jpg" alt="boulangerie_la-cesame">
                <figcaption><strong>La sésame</strong>
                    Baguette de tradition roulée dans du sésame
                </figcaption>
            </figure>
            <figure>
                <img src="../images/imagesBaguettes/boulangerie_la-croustilliante.jpg" alt="boulangerie_la-croustilliante">
                <figcaption><strong>La croustillante</strong>
                    Baguette pétrie avec de la semoule de blé dur
                </figcaption>
            </figure>
            <figure>
                <img src="../images/imagesBaguettes/boulangerie_la-graine.jpg" alt="boulangerie_la-graine">
                <figcaption><strong>La graine</strong>
                    Baguette de tradition avec un mélange de graines
                </figcaption>
            </figure>
            <figure>
                <img src="../images/imagesBaguettes/boulangerie_la-cesame (1).jpg" alt="boulangerie_la-cesame">
                <figcaption><strong>La pavot</strong><br>
                    Baguette de tradition avec un mélange de graines
                </figcaption>
            </figure>
            </div>
            </div>
         </section>
       </div>
      </div>
    </main>
    <footer>
        <div class="container">
            <div class="adresse">
                <h3 class="ho">Horaires :</h3>
                <p><strong>Du Lundi au Vendredi :</strong></p>
                <p>7h-30 à 13h-00b et 14h à 19h-30</p>
                <p><strong>Samedi :</strong></p>
                <p>7h-30 à 13h-00b et 14h à 19h-30</p>
                <p><strong>Dimanche et jours fériés :</strong></p>
                <p>7h-00 à 13h-00</p>
            </div>
        <img src="../images/imagesAcceuil/logo.jpg" alt="logo de l'entreprise" class="logo">
        <div class="boulangerie">
        <div class="poitou">
            <h3>Boulangerie-Patisserie LE MOULIN :</h3>
            <p>6 Av. Galilée, Bd Louis Braille</strong></p>
            <p><strong>86360 Chasseneuil-du-Poitou</strong></p>
            <p><strong>Tel : 0605954351</strong></p>
            <br>
            <h3>CONTACT :</h3>
            <a href=".. /pages/formulaire.html" class="contact" >Envoyez-nous un message !</a>
        </div>   
    </footer>
</body>
</html>