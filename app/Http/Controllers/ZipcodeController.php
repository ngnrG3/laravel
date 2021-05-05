<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ZipCode;
use App\Models\Municipality;
use App\Models\FederalEntity;

class ZipcodeController extends Controller
{
    /**
     * 
     */
    function index(Request $request, $zip_code) {

        $zipcode = ZipCode::where('zip_code', $zip_code)
            ->with('settlements.settlement_type')
            ->first();

        $municipality = Municipality::find($zipcode->settlements[0]->municipality_id)->first();
        $federal_entity = FederalEntity::find($municipality->federal_entity_id);

        return response()->json(
            [
                'zip_code' => $zipcode->zip_code,
                'locality' => $zipcode->locality,
                'federal_entity' => $federal_entity,
                'settlements' => $zipcode->settlements,
                'municipality' => $municipality
            ]
        );
    }
}
