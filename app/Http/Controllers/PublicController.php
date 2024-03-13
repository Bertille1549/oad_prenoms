<?php

namespace App\Http\Controllers;

use App\Models\PRENOM;
use Illuminate\Http\Request;
use App\Charts\test_1;
use App\Charts\SampleChart;
use App\Models;
use Illuminate\Support\Facades\DB;
// pour la pagination
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;


class PublicController extends Controller
{
    // méthode home
    // affiche la page d'accueil
    public function home() {
        return view('home');
    }

    // méthode statistics
    public function statistics() {

        //$chart = new test_1();
        //$chart->labels(['One', 'Two', 'Three']);

        //return view('welcome');

        //$data =
    }

    //méthode liste
    // liste des prénoms
    public function liste() {
        //$prenoms = PRENOM::listePrenoms($page);
        //$prenoms = PRENOM::query()->paginate(15,'PRENOM', 'page');
        //$prenoms = PRENOM::all()->take(15)->all();
        //$totalPages = PRENOM::all()->count()/15;
        $prenoms = PRENOM::all();

        // on retourne la vue
        return view('prenom.liste', [
            'prenoms' => $prenoms
            //'page' => $page
            //'totalPages' =>$totalPages

        ]);
    }
}
