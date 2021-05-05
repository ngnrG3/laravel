<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settlement extends Model
{
    // use HasFactory;
    
    /**
     * hidden fields
     */
    protected $hidden = array('id', 'municipality_id', 'zip_code_id', 'created_at', 'updated_at');

    /**
     * Get the settlement_type associated with the Settlement
     *
     */
    public function settlement_type()
    {
        return $this->hasOne(SettlementType::class);
    }
}
