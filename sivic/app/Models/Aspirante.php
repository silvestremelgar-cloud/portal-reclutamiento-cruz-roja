<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Aspirante extends Model
{
    protected $table = 'aspirantes';
    protected $fillable = [
        'nombres',
        'apellidos',
        'correo',
        'telefono'
    ];
}