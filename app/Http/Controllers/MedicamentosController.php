<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicamento; // Asegúrate de importar el modelo Medicamento si no lo has hecho

class MedicamentosController extends Controller
{
    public function index()
{
    $medicamentos = Medicamento::all();
    return view('medicamentos.index' , compact('medicamentos'));
}

    public function create()
{
    return view('medicamentos.create');
}

public function store(Request $request)
{


    Medicamento::create([
        'medicamento' => $request->input('medicamento'),
        'uso' => $request->input('uso'),
    ]);

}
    
}

