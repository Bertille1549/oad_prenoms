<?php

namespace App\Http\Controllers;

use App\Models\COMPTER;
use App\Models\GENRE;
use App\Models\PRENOM;
use Illuminate\Http\Request;
use App\Charts\test_1;
use App\Charts\SampleChart;
use App\Models;


class PublicController extends Controller
{
    // méthode home
    // affiche la page d'accueil
    public function home() {
        return view('home');
    }

    // méthode statistics
    public function statistics() {
        // Graphe genre
        $dataG = GENRE::join('COMPTER', 'GENRE.genre_id', '=', 'COMPTER.genre_id')
            ->get()
            ->groupBy('GENRE')
            ->map(function ($item) {
                // Retourne le nb de personne de genre
                return count($item);
            });

        // Construction du graphique
        // Choix des couleurs
        $borderColors = [
            "rgba(255, 99, 132, 1.0)",
            "rgba(22,160,133, 1.0)",
            "rgba(255, 205, 86, 1.0)",
            "rgba(51,105,232, 1.0)",
            "rgba(244,67,54, 1.0)",
            "rgba(34,198,246, 1.0)",
            "rgba(153, 102, 255, 1.0)",
            "rgba(255, 159, 64, 1.0)",
            "rgba(233,30,99, 1.0)",
            "rgba(205,220,57, 1.0)"
        ];
        $fillColors = [
            "rgba(255, 99, 132, 0.2)",
            "rgba(22,160,133, 0.2)",
            "rgba(255, 205, 86, 0.2)",
            "rgba(51,105,232, 0.2)",
            "rgba(244,67,54, 0.2)",
            "rgba(34,198,246, 0.2)",
            "rgba(153, 102, 255, 0.2)",
            "rgba(255, 159, 64, 0.2)",
            "rgba(233,30,99, 0.2)",
            "rgba(205,220,57, 0.2)"

        ];
        // les diff types de graphes
        // pie, line, bar
        $chartGenre = new SampleChart;
        $chartGenre->title('Le genre le plus né en 1900 et en 1920');
        $chartGenre->labels($dataG->keys());
        $chartGenre->dataset('Le genre le plus né en 1900 et en 1920', 'pie', $dataG->values())
            // ajout colors
            ->color($borderColors)
            ->backgroundcolor($fillColors)
        ;


        // Graphe prénoms
        $dataP = PRENOM::join('COMPTER', 'PRENOM.prenom_id', '=', 'COMPTER.prenom_id')
            ->get()
            ->groupBy('PRENOM')
            ->take(10)
            ->map(function ($item) {
                // Retourne le nb de personne de genre
                return count($item);
            });
        $chartP = new SampleChart;
        $chartP->title('Les 10 prénoms les plus données en 1900 et en 1920');
        $chartP->labels($dataP->keys());
        $chartP->dataset('Les 10 prénoms les plus données en 1900 et en 1920', 'pie', $dataP->values())
            // ajout colors
            ->color($borderColors)
            ->backgroundcolor($fillColors)
        ;

        // On retourne la vue
        return view('home', compact('chartGenre', 'chartP'));
    }

    //méthode liste
    // liste des prénoms
    public function liste() {
        $prenoms = PRENOM::all();

        // on retourne la vue
        return view('prenom.liste', [
            'prenoms' => $prenoms
        ]);
    }
}
