<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipoasiento extends Model
{

    use HasFactory;

    protected $primaryKey = 'idtipoasiento';
    public $timestamps = false;
}
