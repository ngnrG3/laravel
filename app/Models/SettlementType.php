<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettlementType extends Model
{
    // use HasFactory;

    /**
     * hidden fields
     */
    protected $hidden = array('id', 'settlement_id', 'created_at', 'updated_at');
}
