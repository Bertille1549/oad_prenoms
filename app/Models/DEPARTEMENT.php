<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DEPARTEMENT
 * 
 * @property int $ID
 * @property int $DEPT_ID
 * @property string $DEPT
 * 
 * @property Collection|NAITRE[] $n_a_i_t_r_e_s
 *
 * @package App\Models
 */
class DEPARTEMENT extends Model
{
	protected $table = 'DEPARTEMENT';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'DEPT_ID' => 'int'
	];

	protected $fillable = [
		'DEPT_ID',
		'DEPT'
	];

	public function n_a_i_t_r_e_s()
	{
		return $this->hasMany(NAITRE::class, 'ID');
	}
}
