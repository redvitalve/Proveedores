@extends('adminlte::page')
@section('title', 'Registro de Proveedores')

@section('content_header')
    <h1>Registro de Proveedores</h1>
@stop
@section('content')
<div class="mb-2 md:flex col-8 md:justify-center md:items-center ">
    <div class="p-5 bg-white rounded-lg shadow-sm col-8">
        <form>
            <div class="mb-4">
                <label for="name" lass="control-label">Nombre de Contacto</label>
                <input type="text" class="form-control" name="name" placeholder="Nombre de Contacto" />
                @error('name')
                    <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg"> colocar nombre</p>
                @enderror
            </div>
            <div class="mb-4 md:w-1/2">
                <label for="email" class="control-label">Correo</label>
                <input type="email" class="form-control" name="email" placeholder="Correo" />
            </div>
            <div class="mb-4 sm:w-1/2">
                <label for="phone" class="control-label">Telefono</label>
                <input type="text" class="p-3 form-control" name="phone" placeholder="Telefono" />
            </div>
            <div class="mb-4 sm:w-1/2">
                <label for="empresa" class="control-label">Nombre de la Empresa</label>
                <input type="text" class="p-3 form-control" name="empresa" placeholder="Nombre de la Empresa" />
            </div>
            <div class="button-2 sm:w-1/2">
                Guardar
            </div>
        </form>
    </div>
</div>
@stop
