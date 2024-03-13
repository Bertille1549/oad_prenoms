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
use Illuminate\Pagination\CursorPaginator;

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

    public function liste() {
        $prenoms = PRENOM::take(15)->get();

        // on retourne la vue
        return view('prenom.liste', [
            'prenoms' => $prenoms
        ]);
    }
}
