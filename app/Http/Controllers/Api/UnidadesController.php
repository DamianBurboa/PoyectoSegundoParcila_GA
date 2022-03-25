<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Unidad;

class UnidadesController extends Controller
{
    public function index() {
        $unidades = Unidad::select('id', 'codigo', 'placa', 'marca', 'modelo', 'ano')->get();
        return $unidades;
    }
}
