<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Asignatura') }}
        </h2>
    </x-slot>
<style>
    /* Estilos para el formulario de creación de asignatura */
*{
    background-color: bisque;
    color:black;
}
    .form-container {
    max-width: 500px;
    margin: auto;
    padding: 20px;
    border-radius: 8px;
    background-color: gray;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.form-title {
    font-size: 1.5rem;
    font-weight: bold;
    color: hotpink;
    margin-bottom: 20px;
}

.form-input {
    width: 100%;
    padding: 10px;
    border-radius: 4px;
    border: 1px solid #cbd5e0;
    margin-bottom: 15px;
    transition: border-color 0.3s ease;
}

.form-input:focus {
    border-color: #4a90e2;
    outline: none;
}

.form-label {
    font-size: 1rem;
    color: #4a5568;
    font-weight: bold;
    margin-bottom: 8px;
    display: block;
}

.btn-submit {
    background-color: salmon;
    color: black;
    padding: 12px 20px;
    border-radius: 4px;
    font-weight: bold;
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
            <!-- Formulario de creación de asignatura -->
            <form action="{{ route('asignaturas.store') }}" method="POST">
                @csrf

                <!-- Campos del formulario -->
                <div class="mb-4">
                    <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" class="form-input">
                </div>

                <div class="mb-4">
                    <label for="aula" class="block text-gray-700 text-sm font-bold mb-2">Aula:</label>
                    <input type="text" name="aula" id="aula" class="form-input">
                </div>

                <div class="mb-4">
                    <label for="profesor" class="block text-gray-700 text-sm font-bold mb-2">Profesor:</label>
                    <input type="text" name="profesor" id="profesor" class="form-input">
                </div>

                <!-- Botón de enviar formulario -->
                <div class="mt-4">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">Crear</button>
                </div>
            </form>
        </div>
    </div>
</div>

</x-app-layout>
