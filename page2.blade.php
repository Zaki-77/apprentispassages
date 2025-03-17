<html>
 <head>
  <title>
   APS - Sciences et techniques
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <link href="{{ asset('css/pagestyle.css') }}" rel="stylesheet"/>
  </head>
 <body>
  <header>
  @include('layouts.header') <!-- Inclusion du header -->
  </header>
  <section class="search-section">
   <h1>
    Trouver une prestation
   </h1>
   <p>
    Nos formations/animsations ont toutes sortes de thèmes où se mêle art  <br>
     de rêver et rester en accord avec notre public et les dernières découvertes.
   </p>
   <div class="search-container">
    <input placeholder="Rechercher..." type="text"/>
    <button>
     <i class="fas fa-search">
     </i>
    </button>
    <img alt="Illustration of a person using a search bar" height="100" src="https://storage.googleapis.com/a1aa/image/qdSoW0dYG03rerak31cm1I9GWqv622SxpHwdtOkpmkw.jpg" width="100"/>
   </div>
  </section>
  <div class="content">
   <h2>
    Sciences et techniques
   </h2>
   <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum ligula et enim porttitor,<p> non ornare ligula rutrum. Nam non maximus erat. Praesent vel elit, blandit et, mollis tellus erat.</p>
   <div class="cartes-container">
    <div class="carte">
     <img alt="Image of antennas and small creatures" height="100" src="https://storage.googleapis.com/a1aa/image/L5BZgc1uZWJY54Aj2UN5oEdYaRw_ks5SQWv2b-RFhWo.jpg" width="150"/>
     <div class="carte-content">
      <h3>
       Le mystérieux monde des antennes et des petites pattes
      </h3>
      <p>
       La sympathique monde des antennes et des petites pattes. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      </p>
     </div>
     <div class="carte-price">
      À partir de 110€
     </div>
    </div>
    <div class="carte">
     <img alt="Image of origami workshop" height="100" src="https://storage.googleapis.com/a1aa/image/1PiY54-Jh90pR_Pe0ReoRAkUsEjzYBlJxfUDmVvNvKw.jpg" width="150"/>
     <div class="carte-content">
      <h3>
       Ateliers Origamis
      </h3>
      <p>
       Ateliers de fabrication de pliages en papier. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      </p>
     </div>
     <div class="carte-price">
      À partir de 90€
     </div>
    </div>
    <div class="carte">
     <img alt="Image of a person observing the universe" height="100" src="https://storage.googleapis.com/a1aa/image/ylxjOjAsMJZBH_tZC4KH3l5T_5YZegOsL0_Jq60Hm0Y.jpg" width="150"/>
     <div class="carte-content">
      <h3>
       La vie dans l'univers
      </h3>
      <p>
       Découverte de la vie dans l'univers. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      </p>
     </div>
     <div class="carte-price">
      À partir de 110€
     </div>
    </div>
    <div class="carte">
     <img alt="Image of a solar system model" height="100" src="https://storage.googleapis.com/a1aa/image/csPrdOnPUvEuIi2zs2PuwL6k-Xf12-U4xeD9rZ6v8sI.jpg" width="150"/>
     <div class="carte-content">
      <h3>
       Course dans le système solaire
      </h3>
      <p>
       Objectifs pédagogiques: découvrir le système solaire. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      </p>
     </div>
     <div class="carte-price">
      À partir de 90€
     </div>
    </div>
    <div class="carte">
     <img alt="Image of people observing the sky with a telescope" height="100" src="https://storage.googleapis.com/a1aa/image/TPO1LFgRVZksrOi9Cre1M70MPwMFcfDcO7_FCDfvGOY.jpg" width="150"/>
     <div class="carte-content">
      <h3>
       Observation à l'œil nu et au télescope
      </h3>
      <p>
       Observation du ciel à l'œil nu et au télescope. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      </p>
     </div>
     <div class="carte-price">
      À partir de 110€
     </div>
    </div>
    <div class="carte">
     <img alt="Image of the sky in China" height="100" src="https://storage.googleapis.com/a1aa/image/WRQwnu6YLpPe5FVTvT1hGVUUL3KuNrUSV6GaBTladnQ.jpg" width="150"/>
     <div class="carte-content">
      <h3>
       Le ciel en Chine
      </h3>
      <p>
       Présentation des constellations et des légendes du ciel en Chine. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      </p>
     </div>
     <div class="carte-price">
      À partir de 90€
     </div>
    </div>
   </div>
  </div>
  <footer>
    @include('layouts.footer') <!-- Inclusion du footer -->
  </footer>
 </body>
</html>