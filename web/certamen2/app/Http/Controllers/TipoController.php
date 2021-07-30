<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lectura;

class TipoController extends Controller
{
    public function getTipos(){
        $tipos = ["Kilowatts", "Watts", "Temperatura"];
        return $tipos;
    }
    public function getLecturas(){
        $lecturas = Lectura::all();
        return $lecturas;
    }
    public function crearLectura(Request $request){
        $input = $request->all();
        $lectura = new Lectura();
        $lectura->fecha = $input["fecha"];
        $lectura->hora = $input["hora"];
        $lectura->medidor = $input["medidor"];
        $lectura->direccion = $input["direccion"];
        $lectura->valor = $input["valor"];
        $lectura->tipo = $input["tipo"];

        $lectura->save();
        return $lectura;
    }
}
