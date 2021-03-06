<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/icon" href="favicon.ico">
  <script src="js/date.js"></script>
</head>

<body class="container">
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5 border-bottom">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img id="img" src="img/logo.png" alt="" width="30" height="24">
          Papillons.com
        </a>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Accueil
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#lesaviezvous">Le saviez-vous ?</a></li>
              <li><a class="dropdown-item" href="#carousel">Quelques espèces</a></li>
              <li><a class="dropdown-item" href="#apprendre">Galerie</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/chenilles.php">Chenilles</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Contact
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="pages/a-propos.php">À propos</a></li>
              <li><a class="dropdown-item" href="pages/contact.php">Formulaire de contact</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <main>
    <section>
      <!--Texte d'intro et présentation du site-->
      <h2 id="lesaviezvous">Le saviez-vous ?</h2>
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <p>Le papillon fait partie de la famille de Lépidoptères (Lepidoptera) qui sont un ordre d'insectes holométaboles dont la forme adulte (ou imago) est communément appelée papillon, dont la larve est appelée chenille, et la nymphe chrysalide.
              Il s'agit d'un des ordres d'insectes les plus répandus et les plus largement connus dans le monde, comprenant entre 155 100 et 174 233 espèces décrites (dont près de 7 000 en Europe et 5 000 en France) réparties dans 136 familles et 43 super-familles. Les plus anciennes traces fossiles de papillons montrent que ces insectes ailés vivaient déjà sur la planète il y a 201 millions d’années, aux côtés des premiers dinosaures.</p>
          </div>
          <div class="row">
            <div class="accordion mb-3" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Combien d'espèces en Europe ?
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Il existe <strong>7000 espèces</strong> de papillons en Europe.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Quelle est la durée de vie des papillons ?
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Le papillon pouvant atteindre l'âge le plus avancé est le papillon citron, qui, grâce à une période d'hibernation de novembre jusqu'au printemps suivant, peut dépasser les 10 mois de vie.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Combien de temps dure la transformation du papillon ?
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    La durée du processus varie selon les espèces mais, en moyenne, au bout d'environ 2 semaines, le papillon émerge de sa chrysalide.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Button trigger modal -->
          <div class="row mb-2 m-auto">
            <button type="button" class="btn btn-primary bg-info d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Bonus le saviez-vous
            </button>
          </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bonus le saviez-vous</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Un papillon Belle-Dame vit entre 15 et 29 jours</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary bg-info" data-bs-dismiss="modal">Retour</button>
              </div>
            </div>
          </div>
        </div>
        <!--carte-->
        <div class="col-md-6">
          <div class="card m-auto" style="width: 18rem;">
            <img src="img/Zygaena_transalpina.jpg" class="card-img-top" alt="Zygaena_transalpina">
            <div class="card-body">
              <h5 class="card-title text-center">Le processus de transformation</h5>
              <p class="card-text text-center">Trouvez plus d'informations sur le processus de transformation des chenilles en papillon, toutes espèces confondues. </p>
              <a href="pages/chenilles.php" class="btn btn-primary bg-info d-flex justify-content-center">Découvrir</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Carroussel-->
    <section class="slider">
      <h2 id="carousel">Quelques espèces de papillons</h2>
      <div id="carouselExampleDark" class="carousel carousel-white slide w-75 h-75 m-auto" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="2000">
            <img src="img/Aglais_urticae.jpg" class="d-block w-100" alt="Aglais urticae">
            <div class="carousel-caption d-none d-md-block">
              <h5>Aglais Urticae</h5>
              <p>La Petite tortue ou Vanesse de l'ortie, Aglais urticae, est une espèce de lépidoptères de la famille des Nymphalidae. Elle est largement répandue en Europe, et sa chenille se nourrit d'orties.</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="img/Glaucopsyche_alexis.jpg" class="d-block w-100" alt="Glaucopsyche alexis">
            <div class="carousel-caption d-none d-md-block">
              <h5>Glaucopsyche alexis</h5>
              <p>L’Azuré des cytises (Glaucopsyche alexis) est un insecte lépidoptère de la famille des Lycaenidae, de la sous-famille des Polyommatinae, du genre Glaucopsyche.</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="img/Melanargia_galathea.jpg" class="d-block w-100" alt="Melanargia galathea">
            <div class="carousel-caption d-none d-md-block">
              <h5>Melanargia galathea</h5>
              <p>Le Demi-deuil (Melanargia galathea), est une espèce de lépidoptères (papillons) appartenant à la famille des Nymphalidae, à la sous-famille des Satyrinae, à la tribu des Satyrini et au genre Melanargia.</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="img/Melitea_diamina.jpg" class="d-block w-100" alt="Melanargia galathea">
            <div class="carousel-caption d-none d-md-block">
              <h5>Melitea diamina</h5>
              <p>La Mélitée noirâtre, Damier noir ou Argynne dictynne (Melitaea diamina) est une espèce de lépidoptères (papillons) appartenant à la famille des Nymphalidae, à la sous-famille des Nymphalinae, à la tribu des Melitaeini, et au genre Melitaea.</p>
            </div>
          </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
  </main>

  <section class="container">
    <h2 id="apprendre" class="mt-4 text-center">Apprenez-en plus !</h2>
    <div class="card-group">
      <div class="card m-3 border">
        <img src="img/Lysandra_bellargus.jpg" class="card-img-top rounded-3" alt="Lysandra bellargus">
        <div class="card-body">
          <h5 class="card-title text-center">Lysandra bellargus</h5>
          <p class="card-text text-center">L’Azuré bleu céleste ou Bel-Argus (Lysandra bellargus) est une espèce de lépidoptères (papillons) de la famille des Lycaenidae et de la sous-famille des Polyommatinae.</p>
        </div>
      </div>
      <div class="card m-3 border">
        <img src="img/Lycaena_virgaureae.jpg" class="card-img-top rounded-3" alt="Lycaena virgaureae">
        <div class="card-body">
          <h5 class="card-title text-center">Lycaena virgaureae</h5>
          <p class="card-text text-center">Le Cuivré de la verge-d'or (Lycaena virgaureae) est une espèce paléarctique de lépidoptères (papillons) de la famille des Lycaenidae et de la sous-famille des Lycaeninae.</p>
        </div>
      </div>
      <div class="card m-3 border">
        <img src="img/Zygaena_transalpina.jpg" class="card-img-top rounded-3" alt="Zygaena transalpina">
        <div class="card-body">
          <h5 class="card-title text-center">Zygaena transalpina</h5>
          <p class="card-text text-center">Zygaena transalpina, la Zygène transalpine, est une espèce d'insectes lépidoptères de la famille des Zygaenidae et de la sous-famille des Zygaeninae.</p>
        </div>
      </div>
    </div>
  </section>
  <footer class="py-3 my-4">
    <div class="row">
      <ul class="nav justify-content-center border-bottom border-top pb-3 mb-3">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Accueil</a></li>
        <li class="nav-item"><a href="pages/chenilles.php" class="nav-link px-2 text-muted">Papillons en chenille</a></li>
        <li class="nav-item"><a href="pages/contact.php" class="nav-link px-2 text-muted">Contact</a></li>
        <li class="nav-item"><a href="pages/a-propos.php" class="nav-link px-2 text-muted">À propos</a></li>
      </ul>
    </div>

    <div class="row">
      <ul class="nav d-flex-row justify-content-center border-bottom pb-3 mb-3">
        <li class="m-2"><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a></li>
        <li class="m-2"><a href="https://www.twitter.com/"><i class="fa-brands fa-twitter"></i></a></li>
        <li class="m-2"><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a></li>
        <li class="m-2"><a href="https://www.pinterest.com/"><i class="fa-brands fa-pinterest"></i></a></li>
      </ul>
    </div>
    <div class="row">
      <button class="btn btn-primary w-25 bg-info d-block m-auto" onClick="datedujour()"> Date du jour !</button>
      <p class="text-center text-muted">© 2022 papillons.com, Inc</p>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/3a4f104350.js" crossorigin="anonymous"></script>
</body>

</html>