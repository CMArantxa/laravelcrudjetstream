<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Delete Asignatura') }}
        </h2>
    </x-slot>
<style>
    /* Estilos para el formulario de creación de asignatura */
*{
    background-color: blueviolet;
    color:aliceblue;
}
    .form-input {
    border: 1px solid #cbd5e0;
    border-radius: 0.25rem;
    padding: 0.5rem;
    width: 100%;
    transition: border-color 0.3s ease;
}

.form-input:focus {
    border-color: #4a90e2;
    outline: none;
}

.form-label {
    color: #4a5568;
    font-size: 0.875rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
    display: block;
}

.btn-submit {
    background-color: salmon;
    color:black;
    padding: 0.5rem 1rem;
    border-radius: 0.25rem;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-submit:hover {
    background-color: steelblue;
}

</style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <!-- Formulario de edición de asignatura -->
                <form action="{{ route('asignaturas.delete', $asignatura->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Campos del formulario -->
                    <div class="mb-4">
                        <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" value="{{ $asignatura->nombre }}" class="form-input">
                    </div>

                    <div class="mb-4">
                        <label for="aula" class="block text-gray-700 text-sm font-bold mb-2">Aula:</label>
                        <input type="text" name="aula" id="aula" value="{{ $asignatura->aula }}" class="form-input">
                    </div>

                    <div class="mb-4">
                        <label for="profesor" class="block text-gray-700 text-sm font-bold mb-2">Profesor:</label>
                        <input type="text" name="profesor" id="profesor" value="{{ $asignatura->profesor }}" class="form-input">
                    </div>

                    <!-- Botón de enviar formulario -->
                    <div class="mt-4">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Borrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
