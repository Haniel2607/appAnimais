<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animais extends Model
{
    use HasFactory;
    protected $primaryKey = 'idAnimal';
    protected $fillable = [
        'nomeAnimal',
        'habitatNatural',
        'dietaAnimal',
        'statusConservacao'
    ];
}
