<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\NivelAceite;

class NivelesAceiteController extends Controller
{
    public function index() {
        $nivelesAceite = NivelAceite::select('id', 'nivel')->get();
        return $nivelesAceite;
    }
}
