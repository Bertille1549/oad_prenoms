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
 * @property Collection|PRENOM[] $p_r_e_n_o_m_s
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

	public function p_r_e_n_o_m_s()
	{
		return $this->hasMany(PRENOM::class, 'GENRE_ID');
	}
}
