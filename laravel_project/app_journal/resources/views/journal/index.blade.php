@extends('welcome')
@section('title','index')
@section('styles')
<style>
    @keyframes changeBackground {
        0% { background-image: url('/images/im1.jpg'); }
        16.67% { background-image: url('/images/im2.jpg'); }
    33.33% { background-image: url('/images/im4.jpg'); }
        50% { background-image: url('/images/im5.jpg'); }
        66.67% { background-image: url('/images/im3.jpg'); }
        83.33% { background-image: url('/images/im6.jpg'); }
        100% { background-image: url('/images/im1.jpg'); }
    }

    .dynamic-background {
        animation: changeBackground 20s infinite;
        background-size: cover;
        background-position: center;
    }
    #inscription_section {
    width: 100vw; /* Prend toute la largeur de la page */
    height: 130px; /* Ajuste la hauteur (tu peux modifier selon tes besoins) */
    background-color: rgba(255, 255, 255, 0.2); /* Blanc transparent */
    backdrop-filter: blur(10px); /* Effet de flou */
    position: relative; /* Permet de bien le positionner */
    }
    .stars{
        color: yellow;
    }
    .testimonial-section {
    position: relative;
    width: 100%;
    max-width: 600px;
    margin: auto;
    overflow: hidden;
    text-align: center;
}

.testimonial-wrapper {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.testimonial {
    min-width: 100%;
    box-sizing: border-box;
    padding: 20px;
    display: none;
}

.testimonial.active {
    display: block;
}
.testimonial-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    color: white;
    border: none;
    padding: 50px;
    cursor: pointer;
}

.testimonial-prev {
    left: 30px;
    padding: 30px;
}

.testimonial-next {
    right: 30px;
    padding: 30px;
}
</style>

@endsection
@section('content')
<header class="w-full py-4 bg-gray-800">
    <div class="container mx-auto flex justify-between items-center">
        <a href="#" class="text-white text-2xl font-bold"><span class="flex"><img src="/images/drawing-tablet_6636965 (1).png" alt="" class="w-10 h-10 mr-4">MonSite</span></a>
        <nav class="space-x-4">
            <a href="#" class="text-gray-300 hover:text-white">Accueil</a>
            <a href="#" class="text-gray-300 hover:text-white">Fonctionnalités</a>
            <a href="{{url('temoignage')}}" class="text-gray-300 hover:text-white">Témoignages</a>
            <a href="#" class="text-gray-300 hover:text-white">Contact</a>
        </nav>
    </div>
</header>


<section class="dynamic-background h-screen flex items-center justify-center text-center text-white w-full">
    <div class="text-center justify-center w-full h-full bg-black bg-opacity-50 ">
        <h1 class="text-4xl font-bold mt-48">Bienvenue sur MonSite</h1>
        <p class="text-lg mb-8">Votre journal intime en ligne, sécurisé et privé.</p>
        <a href="{{url('connexion')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-12 rounded">Commencer</a>
    </div>
</section>


<section class="w-full py-12 bg-gray-100">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-6">Fonctionnalités</h2>
        <div class="flex flex-wrap justify-center">
            <div class="w-full md:w-1/3 p-4">
                <h3 class="text-xl font-semibold mb-2">Journal privé ou public</h3>
                <p>Choisissez de garder vos écrits pour vous ou de les partager avec la communauté.</p>
            </div>
            <div class="w-full md:w-1/3 p-4">
                <h3 class="text-xl font-semibold mb-2">Multi-journaux</h3>
                <p>Créez différents journaux pour chaque aspect de votre vie.</p>
            </div>
            <div class="w-full md:w-1/3 p-4">
                <h3 class="text-xl font-semibold mb-2">Double protection</h3>
                <p>Vos données sont sécurisées par un mot de passe et un chiffrement de niveau militaire.</p>
            </div>
        </div>
    </div>
</section>


<section class="py-12">
    <div class="testimonial-section flex">
        <button class="testimonial-btn testimonial-prev" id="prevBtn">&#10094;</button>

        <div class="testimonial-wrapper flex px-28" id="testimonialSlider">
            <div class="testimonial active justify-center">
                <img src="/images/im1.jpg" alt="Jean Dupont"  class="ml-40 mb-4 rounded-full w-12 h-12">
                <h3>Lucrece</h3>
                <p>"Super site ! J’adore l’expérience utilisateur et la communauté."</p>
                <div class="stars">★★★★★</div>
            </div>
            <div class="testimonial">
                <img src="/images/im3.jpg" alt="Marie Curie" class="ml-40 mb-4 rounded-full w-12 h-12">
                <h3>Belange</h3>
                <p>"Très intuitif, facile à utiliser. Je recommande !"</p>
                <div class="stars">★★★★★</div>
            </div>
            <div class="testimonial">
                <img src="/images/im2.jpg" alt="Albert Einstein" class="ml-40 mb-4 rounded-full w-12 h-12">
                <h3>Zidane</h3>
                <p>"Une plateforme idéale pour partager ses idées."</p>
                <div class="stars">★★★★★</div>
            </div>
        </div>

        <button class="testimonial-btn testimonial-next" id="nextBtn">&#10095;</button>
    </div>

</section>
<section class="bg-blue-100 py-10 px-60 text-center" id="inscription_section">
    <h2 class="text-2xl font-bold text-blue-900">Je veux m'inscrire sur <span class="text-blue-600">MonSite</span></h2>
        <a href="{{ url('connexion') }}">
            <p class="text-gray-600 mt-2">Et créer mon journal en toute liberté !</p>
    </a>
</section>

<!-- Section alternée Images & Textes -->
<section class="py-10 space-y-10">
    <!-- Première ligne (Image à gauche) -->
    <div class="flex flex-col md:flex-row items-center">
        <img src="{{url('/images/im5.jpg') }}" alt="Écriture dans un journal" class="w-full md:w-1/2 rounded-lg shadow-md">
        <div class="w-full md:w-1/2 p-6">
            <h3 class="text-xl font-bold text-blue-900">Écrivez vos pensées librement</h3>
            <p class="text-white mt-2">
                Notez chaque jour vos expériences, vos émotions et vos rêves dans un espace sécurisé et intime.
            </p>
        </div>
    </div>

    <!-- Deuxième ligne (Image à droite) -->
    <div class="flex flex-col md:flex-row-reverse items-center">
        <img src="{{ url('/images/im6.jpg') }}" alt="Lecture d'un journal personnel" class="w-full md:w-1/2 rounded-lg shadow-md">
        <div class="w-full md:w-1/2 p-6">
            <h3 class="text-xl font-bold text-blue-900">Replongez dans vos souvenirs</h3>
            <p class="text-white mt-2">
                Relisez vos écrits passés et revivez les moments forts de votre vie avec émotion et nostalgie.
            </p>
        </div>
    </div>

    <!-- Troisième ligne (Image à gauche) -->
    <div class="flex flex-col md:flex-row items-center">
        <img src="{{ url('/images/im3.jpg') }}" alt="Écriture créative dans un carnet" class="w-full md:w-1/2 rounded-lg shadow-md">
        <div class="w-full md:w-1/2 p-6">
            <h3 class="text-xl font-bold text-blue-900">Exprimez votre créativité</h3>
            <p class="text-white mt-2">
                Ajoutez des citations, des dessins ou même des poèmes pour enrichir votre journal et le rendre unique.
            </p>
        </div>
    </div>
</section>
<div class="container mx-auto mt-10">
    <h2 class="text-2xl font-bold text-center mb-6">Journaux récents</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

  </div>
</div>
<footer class="bg-gray-800 text-white text-center py-6 w-full">
    <p>&copy; 2025 Mon Journal - Tous droits réservés</p>
</footer>
<script src="resources/js/index.js"></script>
@endsection


