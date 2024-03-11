<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NAITRE
 * 
 * @property int $ID
 * @property int $PRENOM_ID
 * 
 * @property DEPARTEMENT $d_e_p_a_r_t_e_m_e_n_t
 * @property PRENOM $p_r_e_n_o_m
 *
 * @package App\Models
 */
class NAITRE extends Model
{
	protected $table = 'NAITRE';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int',
		'PRENOM_ID' => 'int'
	];

	public function d_e_p_a_r_t_e_m_e_n_t()
	{
		return $this->belongsTo(DEPARTEMENT::class, 'ID');
	}

	public function p_r_e_n_o_m()
	{
		return $this->belongsTo(PRENOM::class, 'PRENOM_ID');
	}
}
