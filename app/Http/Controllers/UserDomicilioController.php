<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserDomicilioController extends Controller
{
    public function getUers(Request $request){
        return response()->json(
            DB::table('user_domicilio')->select(
                'user_id',
                'domicilio',
                'numero_exterior',
                'colonia',
                'cp',
                'ciudad',
                'fecha_nacimiento',
                DB::raw('floor(DATEDIFF(CURDATE(),fecha_nacimiento) /365) as edad') 
            )
                ->get(),
            $status_code = 200
        );
    }
}
