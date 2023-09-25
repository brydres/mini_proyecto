<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    public function index()
    {
        return Asistencia::all();
    }
    public function asistenciaAlumno(Request $datosAsistencia)
    {
        $registroAsistencia = new Asistencia();
        $registroAsistencia->matricula_id = $datosAsistencia->matricula_id;
        $registroAsistencia->fecha_de_asistencia = $datosAsistencia->fecha_de_asistencia;
        $registroAsistencia->asistencia = $datosAsistencia->asistencia;
        $registroAsistencia->save();
        return "Se registro la asistencia correctamente";
    }
}