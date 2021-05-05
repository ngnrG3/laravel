<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FederalEntity extends Model
{
    // use HasFactory;

    protected $hidden = array('id', 'created_at', 'updated_at');
    
}
