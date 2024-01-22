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

        if (Reserva::where('fecha_inicio', $request->input('fecha_inicio'))
            ->where('fecha_fin', $request->input('fecha_fin'))
            ->doesntExist()) {

            $request->validate([
                'nombre' => 'required|string',
                'fecha_inicio' => 'required|string', // Add appropriate validation rule
                'fecha_fin' => 'required|string',
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
        } else {
            return redirect('/reservas')->with('success', 'Reserva no creada, ya existe una reserva en esas fechas');
            
        }
 
    }

    
}
