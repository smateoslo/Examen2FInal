<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Lavel;
use App\Models\Corporation;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'dni',
        'name',
        'lastname',
        'password',
        'phone',
        'email',
        'gender',
        'birth_date',
        'adress',
        'lavel_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function lavel(){
        return $this->belongsTo(Lavel::class);
    }
    public function corporation(){
        return $this->belongToMany(Corporation::class)->withPivot('fechainicio', 'fechafin', 'valoracionalumno', 'valoracioncentro');
    }
}
