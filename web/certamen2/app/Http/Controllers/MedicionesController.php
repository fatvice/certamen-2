<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicionesController extends Controller
{
    public function getMediciones(){
        $mediciones = ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10"];
        return $mediciones;
    }
}
