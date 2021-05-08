<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ZipCode;
use App\Models\Municipality;
use App\Models\FederalEntity;

class ZipcodeController extends Controller
{
    /**
     * function to find information about a zipcode
     * 
     * @param string $zip_code zipcode to search
     * @return json with error message or information
     */
    function index(Request $request, $zip_code) {

        $zipcode = ZipCode::where('zip_code', $zip_code)
            ->with('settlements.settlement_type')
            ->first();
        
        // if zip_code does not exist
        if (!$zipcode) {
            return response()->json([
                'message' => "the zipcode $zip_code does not exist"
            ]);
        }

        // get municipality information
        $municipality = Municipality::find($zipcode->settlements[0]->municipality_id);
        // get federal entity information
        $federal_entity = FederalEntity::find($municipality->federal_entity_id);

        // return information
        $header = array (
            'Content-Type' => 'application/json; charset=UTF-8',
            'charset' => 'utf-8'
        );
        return response()->json(
            [
                'zip_code' => $zipcode->zip_code,
                'locality' => $zipcode->locality,
                'federal_entity' => $federal_entity,
                'settlements' => $zipcode->settlements,
                'municipality' => $municipality
            ],
            200,
            $header,
            JSON_UNESCAPED_UNICODE
        );
    }
}
