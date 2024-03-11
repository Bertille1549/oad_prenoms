<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class NOMBREPRENOMAN
 * 
 * @property int $NOMBRE_ID
 * @property int $NOMBRE
 * 
 * @property Collection|COMPTER[] $c_o_m_p_t_e_r_s
 *
 * @package App\Models
 */
class NOMBREPRENOMAN extends Model
{
	protected $table = 'NOMBRE_PRENOM_AN';
	protected $primaryKey = 'NOMBRE_ID';
	public $timestamps = false;

	protected $casts = [
		'NOMBRE' => 'int'
	];

	protected $fillable = [
		'NOMBRE'
	];

	public function c_o_m_p_t_e_r_s()
	{
		return $this->hasMany(COMPTER::class, 'NOMBRE_ID');
	}
}
