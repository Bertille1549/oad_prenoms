<?php

namespace App\Http\Controllers;

use App\Models\ANNEEPRENOM;
use Illuminate\Http\Request;
use App\Models\PRENOM;

class PrenomsController extends Controller
{
    //méthode liste
    function liste() {
        return response()->json(PRENOM::all());
    }

    // méthode prenomsAnnee
    // lister tous les prénoms d'une année
    function prenomsAnnee($idAnnee) {
        return response()->json(ANNEEPRENOM::find($idAnnee)->c_o_m_p_t_e_r_s()->get());
    }

}
