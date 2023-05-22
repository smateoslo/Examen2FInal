<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Corporation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'password',
        'phone',
        'email',
        'website',
    ];
    public function user(){
        return $this->belongToMany(User::class)->withPivot('fechainicio', 'fechafin', 'valoracionalumno', 'valoracioncentro');
    }
}
