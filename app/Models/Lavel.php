<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Lavel extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
    ];
    public function user(){
        return $this->hasMany(User::class);
    }
}
