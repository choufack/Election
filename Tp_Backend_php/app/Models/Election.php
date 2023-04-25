<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Election
 * 
 * @property int $id
 * @property Carbon $Date
 * @property string $Label
 * @property string $Description
 * @property string $Status
 * @property int $id_votes
 * 
 * @property Vote $vote
 *
 * @package App\Models
 */
class Election extends Model
{
	protected $table = 'elections';
	public $timestamps = false;

	protected $casts = [
		'Date' => 'datetime',
		'id_votes' => 'int'
	];

	protected $fillable = [
		'Date',
		'Label',
		'Description',
		'Status',
		'id_votes'
	];

	public function vote()
	{
		return $this->belongsTo(Vote::class, 'id_votes');
	}
}
