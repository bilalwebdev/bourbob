<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BourbonFlavor extends Model
{
    use HasFactory;
    protected $fillable = ['bourbon_id', 'flavor_id', 'dominant'];
}
