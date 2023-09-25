<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index()
    {
        return Usuario::all();
    }
    public function getByID($id)
    {
        return Usuario::find($id);;
    }
    public function showMaestros()
    {
        $filtro = 1;
        return Usuario::where('rango', $filtro)->get();
    }
    public function showAlumnos()
    {
        $filtro = 2;
        return Usuario::where('rango', $filtro)->get();
    }
    public function create(Request $datosEnPost)
    {
        $nuevoUsuario = new Usuario();
        $nuevoUsuario->nombre = $datosEnPost->nombre;
        $nuevoUsuario->correo = $datosEnPost->correo;
        $nuevoUsuario->rango = $datosEnPost->rango;
        $nuevoUsuario->usuario_activo = $datosEnPost->usuario_activo;
        $nuevoUsuario->save();
        return "Se creó el nuevo usuario";
    }
    public function update(Request $datosEnPut, $id)
    {
        $usuarioPorActualizar = Usuario::find($id);
        $usuarioPorActualizar->nombre = $datosEnPut->nombre;
        $usuarioPorActualizar->correo = $datosEnPut->correo;
        $usuarioPorActualizar->rango = $datosEnPut->rango;
        $usuarioPorActualizar->usuario_activo = $datosEnPut->usuario_activo;
        $usuarioPorActualizar->save();
        return "El usuario con id " . $id . " ,ha sido actualizado";
    }
    public function destroy($id)
    {
        $estado = Usuario::find($id);
        $estado->usuario_activo = false;
        $estado->save();

        return "El Usuario ha cambiado de estado";
    }
}