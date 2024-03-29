<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PRENOM
 *
 * @property int $PRENOM_ID
 * @property string $PRENOM
 *
 * @property Collection|COMPTER[] $c_o_m_p_t_e_r_s
 * @property Collection|NAITRE[] $n_a_i_t_r_e_s
 *
 * @package App\Models
 */
class PRENOM extends Model
{
	protected $table = 'PRENOM';
	protected $primaryKey = 'PRENOM_ID';
	public $timestamps = false;

	protected $fillable = [
		'PRENOM'
	];

	public function c_o_m_p_t_e_r_s()
	{
		return $this->hasMany(COMPTER::class, 'PRENOM_ID');
	}

	public function n_a_i_t_r_e_s()
	{
		return $this->hasMany(NAITRE::class, 'PRENOM_ID');
	}
}
