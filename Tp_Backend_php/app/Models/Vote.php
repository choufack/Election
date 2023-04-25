<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Vote
 * 
 * @property int $id
 * @property Carbon $Date
 * 
 * @property Collection|Bulletin[] $bulletins
 * @property Collection|Election[] $elections
 * @property Collection|Participant[] $participants
 *
 * @package App\Models
 */
class Vote extends Model
{
	protected $table = 'votes';
	public $timestamps = false;

	protected $casts = [
		'Date' => 'datetime'
	];

	protected $fillable = [
		'Date'
	];

	public function bulletins()
	{
		return $this->hasMany(Bulletin::class, 'id_votes');
	}

	public function elections()
	{
		return $this->hasMany(Election::class, 'id_votes');
	}

	public function participants()
	{
		return $this->hasMany(Participant::class, 'id_votes');
	}
}
