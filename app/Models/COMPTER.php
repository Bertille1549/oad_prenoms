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
 * @property int $NOMBRE_ID
 * @property int $ANNEE
 * 
 * @property NOMBREPRENOMAN $n_o_m_b_r_e_p_r_e_n_o_m_a_n
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
		'NOMBRE_ID' => 'int',
		'ANNEE' => 'int'
	];

	protected $fillable = [
		'ANNEE'
	];

	public function n_o_m_b_r_e_p_r_e_n_o_m_a_n()
	{
		return $this->belongsTo(NOMBREPRENOMAN::class, 'NOMBRE_ID');
	}

	public function p_r_e_n_o_m()
	{
		return $this->belongsTo(PRENOM::class, 'PRENOM_ID');
	}
}
