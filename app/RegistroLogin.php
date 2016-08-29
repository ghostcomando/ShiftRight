<?php

namespace TurnosPonal;

use Illuminate\Database\Eloquent\Model;

class RegistroLogin extends Model
{
    protected $table = 'registro_logins';
	protected $fillable = ['user_id', 'ventanilla_id'];
}
