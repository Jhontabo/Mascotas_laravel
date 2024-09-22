<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mascota;

class MascotaController extends Controller
{
    //
    public function index()
    {
        // Obtener todos los registros de la tabla 'mascotas'
        $mascotas = Mascota::all();

        // Pasar los registros a la vista
        return view('mascotas.index', compact('mascotas'));
    }
}
