<?php

namespace App\Http\Controllers;
use App\Models\Journal;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    public function index()
    {
        // Récupère les journaux triés par date (les plus récents en premier)
        $journals = Journal::latest()->get();

        // Transmet la variable $journals à la vue "journal.index"
        return view('journal.index', compact('journals'));
    }
}
