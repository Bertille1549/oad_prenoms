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
 * @property int $GENRE_ID
 * @property string $PRENOM
 * 
 * @property GENRE $g_e_n_r_e
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

	protected $casts = [
		'GENRE_ID' => 'int'
	];

	protected $fillable = [
		'GENRE_ID',
		'PRENOM'
	];

	public function g_e_n_r_e()
	{
		return $this->belongsTo(GENRE::class, 'GENRE_ID');
	}

	public function c_o_m_p_t_e_r_s()
	{
		return $this->hasMany(COMPTER::class, 'PRENOM_ID');
	}

	public function n_a_i_t_r_e_s()
	{
		return $this->hasMany(NAITRE::class, 'PRENOM_ID');
	}
}
