@extends('layouts.estructure-base')
@section('title','Home')
@section('content')
<header class="navbar">
    <span class="icon__nav" id="icon__nav"><i class="fa-sharp fa-solid fa-bars"></i></span>
    <h2 class="navbar__title">Logo</h2>
    <nav class="navbar__links">
        <a class="navbar__link" href="#home">Home</a>
        <a class="navbar__link" href="#objects">Objects</a>
        <a class="navbar__link" href="#service">Services</a>
        <a class="navbar__link" href="{{ route('login') }}">Log in</a>
    </nav>
   </header>
   <main>
    <section id="home" class="hero">
        <article data-aos="zoom-out-right" class="hero__container" >
            <h2 class="hero__title">TITLE</h2>
            <p class="hero__paragrap">HOLA Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae adipisci commodi impedit eum officia pariatur sint ducimus nam esse qui, molestiae adipisci commodi impedit eum officia pariatur sint ducimus nam esse qui.</p>
            <a class="hero__link" href="">Log in</a>
        </article>
        <div data-aos="fade-left" class="hero__img">
            <img  src="{{ asset('img/imageHero.svg') }}" alt="">
        </div>
    </section> 
    <!-- Objects -->
    <section id="objects" class="section" >
        <article class="object__container" >
            <article class="object" data-aos="fade-left">
                    <img class="object__image" src="{{ asset('img/Teacher.svg') }}" alt="" />
                    <div class="object__paragrap">
                        <h2>SUBTITLE</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores in excepturi ea cum enim facere sint repellat quibusdam, exercitationem non aliquid natus, dolorum ratione incidunt commodi optio, eos accusamus! Dolorum doloribus debitis alias quae. Amet praesentium suscipit nemo non facilis.</p>
                    </div>
            </article>
            <article class="object" data-aos="fade-right" >
                    <img class="object__image" src="{{ asset('img/Students.svg') }}" alt="" />
                    <div class="object__paragrap">
                        <h2>SUBTITLE</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores in excepturi ea cum enim facere sint repellat quibusdam, exercitationem non aliquid natus, dolorum ratione incidunt commodi optio, eos accusamus! Dolorum doloribus debitis alias quae. Amet praesentium suscipit nemo non facilis.</p>
                    </div>
            </article>
        </article>
    </section>
    <!-- Services -->
    <section id="service" >
        <article class="service__container">
            <h2 data-aos="fade-down" class="section__title">SERVICES</h2>
            <div class="cards">
                <div class="card" data-aos="fade-up">
                        <div class="card__iconbox">
                            <i class="fa-sharp fa-solid fa-folder-open"></i>
                        </div>
                        <h4 class="card__title">TITLE CARD</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est, ipsum.</p>
                </div>
                <div class="card" data-aos="fade-up">
                        <div class="card__iconbox">
                            <i class="fa-solid fa-file"></i>
                        </div>
                        <h4 class="card__title">TITLE CARD</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est, ipsum.</p>
                </div>
                <div class="card" data-aos="fade-up">
                        <div class="card__iconbox">
                            <i class="fa-solid fa-file-arrow-down"></i>
                        </div>
                        <h4 class="card__title">TITLE CARD</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est, ipsum.</p>
                </div>
                <div class="card" data-aos="fade-up">
                        <div class="card__iconbox">
                            <i class="fa-sharp fa-solid fa-user-shield"></i>
                        </div>
                        <h4 class="card__title">TITLE CARD</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est, ipsum.</p>
                </div>
                <div class="card" data-aos="fade-up">
                        <div class="card__iconbox">
                            <i class="fa-sharp fa-solid fa-laptop-file"></i>
                        </div>
                        <h4 class="card__title">TITLE CARD</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est, ipsum.</p>
                </div>
                <div class="card" data-aos="fade-up">
                        <div class="card__iconbox">
                            <i class="fa-solid fa-cube"></i>
                        </div>
                        <h4 class="card__title">TITLE CARD</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est, ipsum.</p>
                </div>
            </div>
        </article>
    </section>
   </main>
   <footer>
       <div class="contact" >
                <div class="social__media" >
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-whatsapp"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                </div>
                <div class="footer__navegation" >
                    <h4>Navegación</h4>
                    <a class="" href="#home">Home</a>
                    <a class="" href="#objects">Objects</a>
                    <a class="" href="#service">Services</a>
                    <a class="" href="#service">Login</a>
                </div>    
       </div>
       <hr />
       <p>&copy;2023 Todos los derechos reservados.</p>
   </footer>
@endsection