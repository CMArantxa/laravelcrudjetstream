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

        //alternativas a compact
        //return view('students.index')->with('students', $students);
        //return view('students.index', ['students' => $students]);
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
            'aula' => 'required|integer|min:1',
        ]);

         // Crear un nuevo estudiante usando el método `create` del modelo
        Asignatura::create($request->all());

        // Redireccionar a la vista de listado de estudiantes
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
            'aula' => 'required',
        ]);

        // Buscar el estudiante por su ID
        $asignatura = Asignatura::findOrFail($id);

        // Actualizar los datos del estudiante
        $asignatura->update($request->all());

        // Redireccionar a la vista de listado de estudiantes
        return redirect()->route('asignaturas.index');
    }

    public function destroy(string $id)
    {
        $asignatura = Asignatura::findOrFail($id);

        $asignatura->delete();

        return redirect()->route('asignatura.index');
    }
}

