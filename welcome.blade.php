<link href="{{asset('css/pagestyle.css')}}" rel="stylesheet" />
</head>

<body>
    @include('layouts.header') <!-- Inclusion du header -->
    <header>
        <section>
            <div class="hero">
                <div class="booktopleft">
                    <img src="imageicon/book.png" alt="">
                </div>
                <img src="imageicon/Header2.png" alt="">
                <fieldset>
                    <h5>
                        <div class="booktitle">
                            <img src="imageicon/book.png" alt="">
                        </div>
                        L'Asie s'invite
                    </h5>
                    <p>Événement d'échanges dédié à la culture asiatique.</p>
                    <span>voir l'article</span>
                </fieldset>
            </div>
            <div>
            <h3>
            Notre association, fondée en  <br>2013, œuvre pour la diffusion de la culture, notamment la culture <br> scientifique dans la vallée de la Vesubie et au-delà.
        </h3>
        <p>
        Découvrez nos actions et rejoignez-nous pour faire la différence.
    </p>
    <div class="cta-buttons">
        <a href="{{ url('/page2') }}">
            Adhérer
        </a>
        <a href="{{ url('/page3') }}">
            Découvrir plus de l'association
        </a>
        </div>
        </section>
        
        
    
    
    </div>
    </div>
    </section>
    </header>
    <section>
        <h2 class="section-title">
            Que peut faire l'association pour vous ?
        </h2>
        <div class="cards-container">
            <div class="cards">
                <div class="card">
                    <img alt="Person holding a microscope" height="150" src="https://storage.googleapis.com/a1aa/image/5a4wPvjcKWk2GuCqsOvY2ZDPsKv5zZ4M99lZWyGophU.jpg" width="200" />
                    <h3>
                        Ateliers scientifiques
                    </h3>
                    <p>
                        Participez à nos ateliers pour découvrir la science de manière ludique.
                    </p>
                </div>
                <div class="card">
                    <img alt="Group of people in a workshop" height="150" src="https://storage.googleapis.com/a1aa/image/FZHGSGbMQ0aBKHshI_UJcQGllgFaNSryWZLGulbICng.jpg" width="200" />
                    <h3>
                        Conférences et débats
                    </h3>
                    <p>
                        Assistez à nos conférences et débats sur des sujets variés.
                    </p>
                </div>
                <div class="card">
                    <img alt="Person planting a tree" height="150" src="https://storage.googleapis.com/a1aa/image/szEJNvo88cZ-BUorGTVAFVcl9sWMkRTGyZlhf74xSZo.jpg" width="200" />
                    <h3>
                        Actions environnementales
                    </h3>
                    <p>
                        Rejoignez-nous pour des actions en faveur de l'environnement.
                    </p>
                </div>
                <div class="card">
                    <img alt="Children playing" height="150" src="https://storage.googleapis.com/a1aa/image/Rc63ue0B32PAKj7GyycoZmFtdzkcMf55Xuq5Aq-Dhdw.jpg" width="200" />
                    <h3>
                        Activités pour enfants
                    </h3>
                    <p>
                        Des activités éducatives et amusantes pour les enfants.
                    </p>
                </div>
                <div class="card">
                    <img alt="Children studying" height="150" src="https://storage.googleapis.com/a1aa/image/1G9ySo2X0CMOe7XfLXRDZ6NAuudWtjejCl1VH8FqzDE.jpg" width="200" />
                    <h3>
                        Soutien scolaire
                    </h3>
                    <p>
                        Aidez vos enfants à réussir avec notre soutien scolaire.
                    </p>
                </div>
            </div>
            <div class="newsletter" style="margin-top: -200px; margin-right: -20px;">
                <h2>
                    Recevez par email toute l'actualité de l'association
                </h2>
                <input placeholder="Votre email" type="email" />
                <button>
                    S'inscrire
                </button>
            </div>
        </div>
    </section>
    <section class="partners">
        <h2 class="section-title">
            Nos Partenaires
        </h2>
        <div class="partners-container">
            <img alt="Partner 1" height="50" src="https://storage.googleapis.com/a1aa/image/zmmWpuRnJWiPMUnasmRD6Uki7Wxl5w7T60ZuCeyzAvA.jpg" width="100" />
            <img alt="Partner 2" height="50" src="https://storage.googleapis.com/a1aa/image/yRXLTdMl9i27diXp_ignIlfd56cDtatXoDIBIZ5c0s4.jpg" width="100" />
            <img alt="Partner 3" height="50" src="https://storage.googleapis.com/a1aa/image/EMoeD1P6X5cM_azP1AUb1PiwATGvvHUFLzX9TdOEsOg.jpg" width="100" />
            <img alt="Partner 4" height="50" src="https://storage.googleapis.com/a1aa/image/9VGaa29x0y2RshZo8iKTpiunjAD3pdaWcd-VUeoiILI.jpg" width="100" />
            <img alt="Partner 5" height="50" src="https://storage.googleapis.com/a1aa/image/1G9ySo2X0CMOe7XfLXRDZ6NAuudWtjejCl1VH8FqzDE.jpg" width="100" />
        </div>
    </section>
    <section class="testimonials">
        <h2>
            Témoignages
        </h2>
        <div class="testimonial-container">
            <div class="testimonial">
                <img alt="Person 1" height="50" src="https://storage.googleapis.com/a1aa/image/1i3I-2XX8SFX_2_SvzVzWFFLkugSmQca6YTSdSEi_CQ.jpg" width="50" />
                <h4>
                    John Doe
                </h4>
                <p>
                    ★★★★★
                </p>
                <p>
                    Une expérience incroyable avec l'association. J'ai appris tellement de choses nouvelles.
                </p>
            </div>
            <div class="testimonial">
                <img alt="Person 2" height="50" src="https://storage.googleapis.com/a1aa/image/k3ZG9wPVKJ5zo-x2lj5FUTdnxZiOwpm4IEpQiRPwmyk.jpg" width="50" />
                <h4>
                    Jane Smith
                </h4>
                <p>
                    ★★★★★
                </p>
                <p>
                    Les ateliers sont très bien organisés et les intervenants sont passionnés.
                </p>
            </div>
            <div class="testimonial">
                <img alt="Person 3" height="50" src="https://storage.googleapis.com/a1aa/image/JvOPmE_Pf8lQxkeVDeiGMebBgZICUNfrE2IuxbTA50Q.jpg" width="50" />
                <h4>
                    Emily Johnson
                </h4>
                <p>
                    ★★★★★
                </p>
                <p>
                    Je recommande vivement cette association à tous ceux qui veulent en savoir plus sur la science.
                </p>
            </div>
        </div>
    </section>
</body>
<footer>
    @include('layouts.footer') <!-- Inclusion du footer -->
</footer>
<script src="{{asset('js/page1js.js')}}"></script>
</body>

</html>