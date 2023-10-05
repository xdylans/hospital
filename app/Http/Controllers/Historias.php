<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\pacientes;
use Illuminate\Http\Request;

class Historias extends Controller
{

    public function index(Request $request)
    {
        $identifier = $request->input('id');
        $patient = pacientes::where('id', $identifier)->first();
        return view('historiasclinicas.index', compact('patient'));
    }

    
public function store(Request $request)
    {
        // Validar los datos del formulario
       

        // Calcular la edad a partir de la fecha de nacimiento
        
        // Crear un nuevo registro de paciente
        
        

        // Crear una nueva instancia del modelo HistoriaClinica y asignar los valores


      

        pacientes::create([
            'name' => $request['name'],
            'sexo' => $request['sexo'],
            'signos_vitales' => $request['signos_vitales']
        ]);

        // Redirigir o realizar otras acciones después de guardar
      return redirect()->route('historiasclinicas'); // Cambia 'nombre_de_la_ruta' por la ruta que desees redirigir.
    }
    public function create()
    {
        return view('historiasclinicas.create');
    }
}
