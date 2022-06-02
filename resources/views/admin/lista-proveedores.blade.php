@extends('adminlte::page')
@section('title', 'Lista Proveedores')

@section('content_header')
    <h1>Listado de Proveedores</h1>
@stop

@section('content')
   
    <div class="container">

        <div class="row">
            {{-- Setup data for datatables --}}
@php
$heads = [
    'ID',
    'Empresas',
    ['label' => 'Telefonos', 'width' => 40],
    ['label' => 'Acciones', 'no-export' => true, 'width' => 5],
];

$btnEdit = '<button class="mx-1 shadow btn btn-xs btn-default text-primary" title="Editar">
                <i class="fa fa-lg fa-fw fa-pen"></i>
            </button>';
$btnDelete = '<button class="mx-1 shadow btn btn-xs btn-default text-danger" title="Eliminar">
                  <i class="fa fa-lg fa-fw fa-trash"></i>
              </button>';
$btnDetails = '<button class="mx-1 shadow btn btn-xs btn-default text-teal" title="Detalles">
                   <i class="fa fa-lg fa-fw fa-eye"></i>
               </button>';
               

@endphp

{{-- Minimal example / fill data using the component slot --}}
<x-adminlte-datatable id="table1" :heads="$heads">
    @foreach($teams as $team)
 
       
       
        </tr>
    @endforeach
</x-adminlte-datatable>

{{-- Compressed with style options / fill data using the plugin config --}}


          <table style="width:100%">
            
            @foreach($teams as $team)
            <tr>
                <th style="width:150px">{{ $team->id }}</th>
                <th>{{ $team->name }}</th>
                <th>+58 412.842.96.45</th> 
                <th style="width:150px"><button class="mx-1 shadow btn btn-xs btn-default text-primary" title="Editar">
                    <i class="fa fa-lg fa-fw fa-pen"></i>
                </button><button class="mx-1 shadow btn btn-xs btn-default text-danger" title="Eliminar">
                    <i class="fa fa-lg fa-fw fa-trash"></i>
                </button><button class="mx-1 shadow btn btn-xs btn-default text-teal" title="Detalles">
                    <i class="fa fa-lg fa-fw fa-eye"></i>
                </button></th> 
            </tr>
            @endforeach
          </table>       
          
    
      
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop