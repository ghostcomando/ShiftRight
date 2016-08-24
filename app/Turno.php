<?php namespace TurnosPonal;

use Illuminate\Database\Eloquent\Model;

class Turno extends Model {

	protected $table = 'turnos';
	protected $fillable = ['turno', 'tipoVentanilla_id', 'ventanilla_id', 'usuario_id'];

}
