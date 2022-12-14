<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BourbonAroma extends Model
{
    use HasFactory;
    protected $fillable = ['bourbon_id', 'aroma_id', 'dominant'];
}
