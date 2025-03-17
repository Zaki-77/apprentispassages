<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link href="{{asset('css/header1.css')}}" rel="stylesheet" />
<header class="header1-header">
    <section id="header1-menuTop">
        <nav class="header1-menu header1-nav">
            <div class="nav-wrapper">
                <a href="#!" class="header1-brand-logo"><img src="imageicon/apprentispassages_logo_renard.png" alt="Apprentis Pas Sages"></a>
                <div class="text"> APS </div>
                <div class="subtext"> ApprentisPasSage </div>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#" rel="menuqsn">Qui sommes-nous ?</a></li>
                    <li><a href="#" rel="menud">Découvrir</a></li>
                    <li><a href="#" rel="menue">Explorer</a></li>
                    <li><a href="#"><i class="material-icons">search</i> Search</a></li>
                    <li><a href="#">Adhérer</a></li>
                    <li><a href="#"><i class="material-icons">mail_outline</i> Contact</a></li>
                </ul>
            </div>
        </nav>

        <section id="menuqsn" class="header1-sousmenu">
            <ul>
                <li><a href="#">L'association</a></li>
                <li><a href="#">Trombinoscope</a></li>
            </ul>
        </section>
        <section id="menud" class="header1-sousmenu">
            <ul>
                <li><a href="#">Nos prestations</a></li>
                <li><a href="#">Evénements</a></li>
                <li><a href="#">Actualités</a></li>
                <li><a href="#">Albums photos</a></li>
                <li><a href="#">Témoignages</a></li>
            </ul>
        </section>
        <section id="menue" class="header1-sousmenu">
            <h5>Nos coups de coeurs</h5>
            <ul>
                <li><a href="#">Sciences</a></li>
                <li><a href="#">Art et littérature</a></li>
                <li><a href="#">Ludique</a></li>
                <li><a href="#">Histoire</a></li>
                <li><a href="#">Divers</a></li>
            </ul>
        </section>
    </section>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{asset('js/headerjs.js')}}"></script>
</header>