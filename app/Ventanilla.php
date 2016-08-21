<?php namespace TurnosPonal;

use Illuminate\Database\Eloquent\Model;

class Ventanilla extends Model {

	protected $table = 'ventanillas';
	protected $fillable = ['ventanilla', 'tipoVentanillas_id'];

}
