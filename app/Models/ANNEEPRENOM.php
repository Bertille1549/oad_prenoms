<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ANNEEPRENOM
 * 
 * @property int $ANNEE_ID
 * @property string $ANNEE
 * 
 * @property Collection|COMPTER[] $c_o_m_p_t_e_r_s
 *
 * @package App\Models
 */
class ANNEEPRENOM extends Model
{
	protected $table = 'ANNEE_PRENOM';
	protected $primaryKey = 'ANNEE_ID';
	public $timestamps = false;

	protected $fillable = [
		'ANNEE'
	];

	public function c_o_m_p_t_e_r_s()
	{
		return $this->hasMany(COMPTER::class, 'ANNEE_ID');
	}
}
