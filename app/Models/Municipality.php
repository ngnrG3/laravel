<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    // use HasFactory;

    /**
     * hidden fields
     */
    protected $hidden = array('id', 'federal_entity_id', 'created_at', 'updated_at');

}
