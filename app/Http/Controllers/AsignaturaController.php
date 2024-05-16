<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    public function index()
    {
        $asignaturas = Asignatura::all();
        return view('asignaturas.index', compact('asignaturas'));
    }

    public function create()
    {
        return view('asignaturas.create');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|min:5|max:255',
            'aula' => 'required|string',
        ]);

        // Crear una nueva asignatura usando el método `create` del modelo
        Asignatura::create($request->all());

        // Redireccionar a la vista de listado de asignaturas
        return redirect()->route('asignaturas.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $asignatura = Asignatura::findOrFail($id);
        return view('asignaturas.edit', compact('asignatura'));
    }

    public function update(Request $request, string $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|min:5|max:255',
            'aula' => 'required|string',
            'profesor' => 'required|string',
        ]);

        // Buscar la asignatura por su ID
        $asignatura = Asignatura::findOrFail($id);

        // Actualizar los datos de la asignatura
        $asignatura->update($request->all());

        // Redireccionar a la vista de listado de asignaturas
        return redirect()->route('asignaturas.index');
    }

    public function destroy(string $id)
    {
        $asignatura = Asignatura::findOrFail($id);
        $asignatura->delete();
        return redirect()->route('asignaturas.index');
    }
}
