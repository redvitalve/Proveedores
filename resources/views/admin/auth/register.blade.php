@extends('adminlte::page')
@section('title', 'Registro de Proveedores')

@section('content_header')
    <h1>Registro de Proveedores</h1>
@stop
@section('content')
<div class="container bg-white">
    <div class="flex mb-2 md:w-1/12">
        <form>
            <div class="flex mb-4">
                <label for="name" id="name" class="control-label">Nombre de Contacto</label>
                <input type="text" class="form-control" id="name" placeholder="Nombre de Contacto" />
            </div>
            <div class="flex mb-4 md:w-1/2">
                <label for="email" id="email" class="control-label">Correo</label>
                <input type="email" class="form-control" id="email" placeholder="Correo" />
            </div>
            <div class="flex mb-4 sm:w-1/2">
                <label for="phone" id="phone" class="control-label">Telefono</label>
                <input type="text" class="p-3 form-control" id="phone" placeholder="Telefono" />
            </div>
        </form>
    </div>
</div>
@stop
