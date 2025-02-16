@extends('welcome')
@section('title','journal')

@section('content')

        <p class="text-left">Bienvenu {{session('client')->pseudo}}</p>

    <div class="container">
        <!-- Message de bienvenue affiché après la redirection -->

        <h2>Écrire un nouveau journal</h2>

        <form id="journalForm" action="" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titre du journal</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Contenu</label>
                <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
@endsection
