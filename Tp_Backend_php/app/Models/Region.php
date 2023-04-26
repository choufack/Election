<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Region
 * 
 * @property int $id
 * @property string|null $Label
 * 
 * @property Collection|Participant[] $participants
 *
 * @package App\Models
 */
class Region extends Model
{
	use HasFactory;
	protected $table = 'region';
	public $timestamps = false;

	protected $fillable = [
		'Label'
	];

	public function participants()
	{
		return $this->hasMany(Participant::class, 'id_region');
	}
}
