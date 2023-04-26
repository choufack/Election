<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
 *
 * 
 * @property Region $region
 
 *
 * @package App\Models
 */
class Participant extends Model
{
	use Hasfactory;
	protected $table = 'participant';
	public $timestamps = false;

	protected $casts = [
		'Age' => 'int',
		'id_region' => 'int',
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
	];

	public function region()
	{
		return $this->belongsTo(Region::class, 'id_region');
	}

	
}
