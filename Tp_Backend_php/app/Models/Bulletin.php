<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Bulletin
 * 
 * @property int $id
 * @property string $Couleur
 * @property string $Photo
 * @property int $id_votes
 * 
 * @property Vote $vote
 *
 * @package App\Models
 */
class Bulletin extends Model
{
	protected $table = 'bulletins';
	public $timestamps = false;

	protected $casts = [
		'id_votes' => 'int'
	];

	protected $fillable = [
		'Couleur',
		'Photo',
		'id_votes'
	];

	public function vote()
	{
		return $this->belongsTo(Vote::class, 'id_votes');
	}
}
