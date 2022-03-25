<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\InspeccionUnidad;

class InspeccionesUnidadController extends Controller
{
    public function store(Request $request) {
        $respuesta = array();
        $respuesta['exito'] = false;

        $nuevaInspeccionUnidad = new InspeccionUnidad();

        if ($request->input('id_unidad')){
            $nuevaInspeccionUnidad->id_unidad = $request->input('id_unidad');
        } else {
            $respuesta['mensaje'] = "El valor id_unidad es obligatorio";
            return response()->json($respuesta,400);
        }

        if ($request->input('id_nivel_gasolina')){
            $nuevaInspeccionUnidad->id_nivel_gasolina = $request->input('id_nivel_gasolina');
        } else {
            $respuesta['mensaje'] = "El valor id_nivel_gasolina es obligatorio";
            return response()->json($respuesta,400);
        }

        if ($request->input('id_nivel_aceite')){
            $nuevaInspeccionUnidad->id_nivel_aceite = $request->input('id_nivel_aceite');
        } else {
            $respuesta['mensaje'] = "El valor id_nivel_aceite es obligatorio";
            return response()->json($respuesta,400);
        }
       
        if ($request->input('nivel_aire_chofer_delantera') != NULL) {
            $nuevaInspeccionUnidad->nivel_aire_chofer_delantera = $request->input('nivel_aire_chofer_delantera');
        } else {
            $respuesta['mensaje'] = "El valor nivel_aire_chofer_delantera es obligatorio";
            return response()->json($respuesta,400);
        }

        if ($request->input('nivel_aire_chofer_trasera') != NULL) {
            $nuevaInspeccionUnidad->nivel_aire_chofer_trasera = $request->input('nivel_aire_chofer_trasera');
        } else {
            $respuesta['mensaje'] = "El valor nivel_aire_chofer_trasera es obligatorio";
            return response()->json($respuesta,400);
        }

        if ($request->input('nivel_aire_copiloto_delantera') != NULL) {
            $nuevaInspeccionUnidad->nivel_aire_copiloto_delantera = $request->input('nivel_aire_copiloto_delantera');
        } else {
            $respuesta['mensaje'] = "El valor nivel_aire_copiloto_delantera es obligatorio";
            return response()->json($respuesta,400);
        }

        if ($request->input('nivel_aire_copiloto_trasera') != NULL) {
            $nuevaInspeccionUnidad->nivel_aire_copiloto_trasera = $request->input('nivel_aire_copiloto_trasera');
        } else {
            $respuesta['mensaje'] = "El valor nivel_aire_copiloto_trasera es obligatorio";
            return response()->json($respuesta,400);
        }

        if ($request->input('fecha')){
            $nuevaInspeccionUnidad->fecha = $request->input('fecha');
        } else {
            $respuesta['mensaje'] = "El valor fecha es obligatorio";
            return response()->json($respuesta,400);
        }
        
        if ($request->input('observaciones')){
            $nuevaInspeccionUnidad->observaciones = $request->input('observaciones');
        } else {
            $respuesta['mensaje'] = "El valor observaciones es obligatorio";
            return response()->json($respuesta,400);
        }

        try {
            if ($nuevaInspeccionUnidad->save()) {
                $respuesta['exito'] = true;
            }
        }
        catch (\Exception $e) {
            $respuesta["mensaje"] = $e->getMessage();
            return response()->json($respuesta, 500);
        }

        return $respuesta;
    }
}
