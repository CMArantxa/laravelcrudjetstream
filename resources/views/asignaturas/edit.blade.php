<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Asignatura') }}
        </h2>
    </x-slot>
    <style>
    *{
        background-image: linear-gradient(45deg, rgba(219, 128, 223, 0.3) 25%, transparent 25%, transparent 75%, rgba(219, 128, 223, 0.3) 75%, rgba(219, 128, 223, 0.3));
            background-size: 100px 100px; /* Tamaño del patrón */
    }
    body {
    background-color: #db80df; /* Color de fondo del cuerpo */
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

header {
    background-color: #4a90e2; /* Color de fondo del encabezado */
    color: black;
    padding: 10px 0;
    text-align: center;
}

.form-container {
    max-width: 400px;
    margin: 20px auto; /* Añadido un espacio adicional desde arriba */
    padding: 20px;
    border-radius: 8px;
    background-color: #a639d8; /* Color de fondo del formulario */
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
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
    background-color: #4a90e2; /* Cambiado el color del botón */
    color:black;
    padding: 12px 20px;
    border: none; /* Eliminado el borde */
    border-radius: 4px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease;
    display: block; /* Hacer que el botón sea un elemento de bloque */
    width: 100%; /* Ajustar el ancho al 100% del contenedor */
}

.btn-submit:hover {
    background-color: #1ee2d2;
}
</style>
    <div class="form-container">
        <h2 class="form-title">Editar Asignatura</h2>
        <form action="{{ route('asignaturas.update', $asignatura->id) }}" method="POST">
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
                <button type="submit" class="btn-submit">Actualizar</button>
            </div>
        </form>
    </div>
</x-app-layout>
