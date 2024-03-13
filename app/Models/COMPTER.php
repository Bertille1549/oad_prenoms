<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class COMPTER
 * 
 * @property int $PRENOM_ID
 * @property int $ANNEE_ID
 * @property int $GENRE_ID
 * @property int $NOMBRE
 * 
 * @property ANNEEPRENOM $a_n_n_e_e_p_r_e_n_o_m
 * @property GENRE $g_e_n_r_e
 * @property PRENOM $p_r_e_n_o_m
 *
 * @package App\Models
 */
class COMPTER extends Model
{
	protected $table = 'COMPTER';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'PRENOM_ID' => 'int',
		'ANNEE_ID' => 'int',
		'GENRE_ID' => 'int',
		'NOMBRE' => 'int'
	];

	protected $fillable = [
		'NOMBRE'
	];

	public function a_n_n_e_e_p_r_e_n_o_m()
	{
		return $this->belongsTo(ANNEEPRENOM::class, 'ANNEE_ID');
	}

	public function g_e_n_r_e()
	{
		return $this->belongsTo(GENRE::class, 'GENRE_ID');
	}

	public function p_r_e_n_o_m()
	{
		return $this->belongsTo(PRENOM::class, 'PRENOM_ID');
	}
}
