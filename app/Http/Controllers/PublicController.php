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

        //$data = COMPTER::groupBy('PRENOM_ID')
        //$data = COMPTER::join('GENRE', 'COMPTER.genre_id', '=', 'GENRE.genre_id')
        //$data = COMPTER::all()
        $data = GENRE::join('COMPTER', 'GENRE.genre_id', '=', 'COMPTER.genre_id')
            ->get()
            //->concat($datas)
            //->groupBy('GENRE_ID')
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
        $chart = new SampleChart;
        $chart->title('Le genre le plus né en 1900 avec les prénoms en A');
        $chart->labels($data->keys());
        $chart->dataset('Le genre le plus né en 1900 avec les prénoms en A', 'pie', $data->values())
            // ajout colors
            //->color("rgb(255, 99, 132)")
            // on peut ajouter le bg color pour colorer "l'aire"
            ->color($borderColors)
            ->backgroundcolor($fillColors)
        ;
        // permet d'enlever la grille
        //$chart->minimalist(true);

        return view('home', [
            'chart' => $chart
        ]);
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
