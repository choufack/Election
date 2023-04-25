<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Participant
 * 
 * @property int $id
 * @property string $CNI
 * @property string $Nom
 * @property string $Prenom
 * @property int $Age
 * @property string $Sexe
 * @property string $Status
 * @property int $id_region
 * @property string $Login
 * @property string $Mdp
 * @property string $Etat
 * @property string|null $Email
 * @property string|null $Telephone
 * @property int $id_votes
 * 
 * @property Region $region
 * @property Vote $vote
 *
 * @package App\Models
 */
class Participant extends Model
{
	protected $table = 'participants';
	public $timestamps = false;

	protected $casts = [
		'Age' => 'int',
		'id_region' => 'int',
		'id_votes' => 'int'
	];

	protected $fillable = [
		'CNI',
		'Nom',
		'Prenom',
		'Age',
		'Sexe',
		'Status',
		'id_region',
		'Login',
		'Mdp',
		'Etat',
		'Email',
		'Telephone',
		'id_votes'
	];

	public function region()
	{
		return $this->belongsTo(Region::class, 'id_region');
	}

	public function vote()
	{
		return $this->belongsTo(Vote::class, 'id_votes');
	}
}
