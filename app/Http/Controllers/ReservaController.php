<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;

class ReservaController extends Controller
{
    public function index()
    {
        // Obtener todas las reservas
        $reservas = Reserva::all();

        // Retornar vista con las reservas
        return view('reservas.index', compact('reservas'));
    }

    public function create()
    {
        // Retornar vista con el formulario de reserva
        return view('reservas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'fecha_inicio' => 'required|string|', // Agregar regla de validación para días de la semana
            'fecha_fin' => 'required|string|',
            'telefono' => 'required|string',
            'email' => 'required|string|email',
            'servicio' => 'required|string',
        ]);
    
        Reserva::create([
            'nombre' => $request->input('nombre'),
            'fecha_inicio' => $request->input('fecha_inicio'),
            'fecha_fin' => $request->input('fecha_fin'),
            'telefono' => $request->input('telefono'),
            'email' => $request->input('email'),
            'servicio' => $request->input('servicio'),

        ]);
    
        return redirect('/reservas')->with('success', 'Reserva creada correctamente');
    }


    public function verificarDisponibilidad(Request $request)
    {
        $fecha = $request->input('fecha_inicio');
        $hora = $request->input('fecha_fin');

        // Formatea la fecha según el formato de tu base de datos
        $formattedFecha = date('m/d/Y', strtotime($fecha));

        // Consulta la base de datos para verificar la disponibilidad
        $reservas = Reserva::where('fecha_inicio', $formattedFecha)
            ->where('fecha_fin', $hora)
            ->count();

        // Devuelve la disponibilidad (true si está disponible, false si está ocupado)
        return response()->json(['disponible' => $reservas == 0]);
    }
    
}
