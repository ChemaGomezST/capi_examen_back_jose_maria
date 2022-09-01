<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDomicilio extends Model
{
    use HasFactory;
    protected $table = 'user_domicilio';
    protected $primaryKey = 'user_id';
    public $incrementing = true;

    protected $fillable = [
        'user_id',
        'domicilio',
        'numero_exterior',
        'colonia',
        'cp',
        'ciudad',
        'fecha_nacimiento'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
