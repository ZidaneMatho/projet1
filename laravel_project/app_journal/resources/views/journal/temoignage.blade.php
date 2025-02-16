@extends('welcome')
@section('title','temoignage')
@section('content')
@section('styles')
<style>
    /* Si une étoile est activée (note sélectionnée), elle devient jaune */
.star.text-yellow-500 {
    color: #f59e0b; /* Jaune */
    font-weight: bold; /* Étoile pleine */
}
</style>
@endsection
    <div class="max-w-2xl mx-auto my-10 bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center mb-4">Laissez votre temoignage</h2>

        <!-- Récupération des infos utilisateur -->
        @if(auth()->check())
            <div class="flex items-center mb-4">
                <img src="{{ auth()->user()->photo }}" alt="Photo de profil" class="w-12 h-12 rounded-full mr-3">
                <p class="text-lg font-semibold">{{ auth()->user()->name }}</p>
            </div>
        @else
            <div class="mb-4">
                <label class="block text-gray-700">Nom</label>
                <input type="text" name="nom" class="w-full p-2 border rounded-md">

                <label class="block text-gray-700 mt-2">Prénom</label>
                <input type="text" name="prenom" class="w-full p-2 border rounded-md">

                <label class="block text-gray-700 mt-2">Photo de profil (facultatif)</label>
                <input type="file" name="photo" class="w-full p-2 border rounded-full">
            </div>
        @endif
<!-- Notation par étoiles -->
<div class="mb-4">
    <p class="text-gray-700">Votre note :</p>
    <div class="flex">
        @for($i = 1; $i <= 5; $i++)
            <i class="fa-regular fa-star text-gray-400 text-xl cursor-pointer star" data-value="{{ $i }}"></i>
        @endfor
    </div>
</div>

<!-- Critères appréciés -->
<div class="mb-4">
    <p class="text-gray-700">Qu’appréciez-vous ?</p>
    <div class="flex flex-wrap gap-2">
        @foreach(['Bonne qualité', 'securité', 'Professionnel', 'Réactivité', 'Ponctualité'] as $critere)
            <button class="px-3 py-1 border rounded-lg text-gray-700 bg-gray-200 hover:bg-blue-300 criteria" data-value="{{ $critere }}">
                {{ $critere }}
            </button>
        @endforeach
    </div>
</div>

<!-- Champ de texte -->
<div class="mb-4">
    <label class="block text-gray-700">Partagez votre expérience</label>
    <textarea name="commentaire" class="w-full p-2 border rounded-md"></textarea>
</div>
<!-- Sélecteur de date -->
<div class="mb-4">
    <label class="block text-gray-700">Date de la visite</label>
    <input type="date" name="date" class="w-full p-2 border rounded-md" value="{{ date('Y-m-d') }}">
</div>

<!-- Boutons Publier / Annuler -->
<div class="flex justify-between">
    <button id="annuler" class="px-4 py-2 bg-red-500 text-white rounded-lg">Annuler</button>
    <button id="publier" class="px-4 py-2 bg-blue-500 text-white rounded-lg">Publier</button>
</div>
</div>

<script src="resources/js/temoigne.js"></script>

@endsection
