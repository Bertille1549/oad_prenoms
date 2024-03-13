<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GENRE
 * 
 * @property int $GENRE_ID
 * @property string $GENRE
 * 
 * @property Collection|COMPTER[] $c_o_m_p_t_e_r_s
 *
 * @package App\Models
 */
class GENRE extends Model
{
	protected $table = 'GENRE';
	protected $primaryKey = 'GENRE_ID';
	public $timestamps = false;

	protected $fillable = [
		'GENRE'
	];

	public function c_o_m_p_t_e_r_s()
	{
		return $this->hasMany(COMPTER::class, 'GENRE_ID');
	}
}
