<html>

<head>
  <title>
    APS - Le mystérieux monde des antennes et des petites pattes
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
  <link href="{{ asset('css/pagestyle.css') }}" rel="stylesheet" />
</head>

<body>
  <header>
    @include('layouts.header') <!-- Inclusion du header -->
  </header>
  <div class="main-content">
    <div class="title-section">
      <h1>
        Le mystérieux monde <br> des antennes et des <br> petites pattes
      </h1>
    </div>
    <div class="description">
      <p>
        Différencier les écailles des plumes, les antennes des pattes et découvrir le monde fascinant des petites pattes.
      </p>
      <img alt="Image of small creatures with antennas and legs" height="200" src="https://storage.googleapis.com/a1aa/image/WR1NbQavcaI65-km7DwM3dypH7BuIgnKk0Dlw1ytAEE.jpg" width="300" />
    </div>
    <a class="cta-button" href="#">
      J'appelle pour réserver
    </a>
    <div class="tabs">
      <a class="active" href="#">
        Présentation
      </a>
      <a href="#">
        Prix
      </a>
    </div>
    <div class="content-section">
      <div class="left">
        <h2>
          Objectif pédagogique
        </h2>
        <p>
          Les enfants découvriront les différentes parties du corps des insectes et des arachnides, les différences entre les écailles et les plumes, et apprendront à identifier les différentes espèces.
        </p>
        <h2>
          Cahier des charges de l'animation
        </h2>
        <p>
          Matériel à prévoir :
        </p>
        <ul>
          <li>
            Selon le nombre de participants : 2 tables / 1 anim
          </li>
          <li>
            1 table / 7 enfants
          </li>
          <li>
            1 anim / 12 enfants
          </li>
        </ul>
        <p>
          Personnel :
        </p>
        <ul>
          <li>
            1 animateur par groupe de 12 enfants.
          </li>
          <li>
            Animateur de l'atelier : une personne de l'équipe d'Apprentis Passages pourra vous contacter pour définir les besoins spécifiques.
          </li>
        </ul>
        <h2>
          Prix
        </h2>
        <p>
          110€
        </p>
        <h2>
          Public
        </h2>
        <p>
          Tout public à partir du CE
        </p>
      </div>
      <div class="right">
        <h2>
          Autres Prestations
        </h2>
        <div class="other-services">
          <div class="service">
            <img alt="Atelier Origamis" height="100" src="https://storage.googleapis.com/a1aa/image/I0mSdMWpPSwaBwbyl9EDHTHbRxhXHgrxFcHXcU9SAS8.jpg" width="100" />
            <div class="info">
              <h3>
                Ateliers Origamis
              </h3>
              <br>
              Apprenez l'art de l'origami avec nos ateliers spécialisés.
              </br>
              <p>
                À partir de 90€
              </p>
            </div>
          </div>
          <div class="service">
            <img alt="Atelier Origamis" height="100" src="https://storage.googleapis.com/a1aa/image/I0mSdMWpPSwaBwbyl9EDHTHbRxhXHgrxFcHXcU9SAS8.jpg" width="100" />
            <div class="info">
              <h3>
                Ateliers Origamis
              </h3>
              <p>
                Apprenez l'art de l'origami avec nos ateliers spécialisés.
              </p>
              <p>
                À partir de 90€
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer">
    <div class="contact-info">
      <p>
        Nos coordonnées
      </p>
      <p>
        Chalet les Carlines Quartier les blancons 06450 Belvédère
      </p>
      <p>
        contact@apprentispassages.com +33 (0)6.52.25.17.66
      </p>
      <img alt="Contact Icon" height="50" src="https://storage.googleapis.com/a1aa/image/vT2NdQc2I82z5m7czAwv-1TG9GOdlba9zX3Qk62givs.jpg" width="50" />
    </div>
  </div>
  <footer>
    @include('layouts.footer') <!-- Inclusion du footer -->
  </footer>

</html>