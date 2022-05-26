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

$config = [
    'data' => [
        [22, 'Dynalab', '+58 412.842.96.45', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
        [19, 'DrovenPlus', '+58 424.433.95.78', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
        [3, 'Suramericana de Aerosoles', '+58 412.845.23.23', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
    ],
    'order' => [[1, 'asc']],
    'columns' => [null, null, null, ['orderable' => false]],
];
@endphp

{{-- Minimal example / fill data using the component slot --}}
<x-adminlte-datatable id="table1" :heads="$heads">
    @foreach($config['data'] as $row)
        <tr>
            @foreach($row as $cell)
                <td>{!! $cell !!}</td>
            @endforeach
        </tr>
    @endforeach
</x-adminlte-datatable>

{{-- Compressed with style options / fill data using the plugin config --}}
<x-adminlte-datatable id="table2" :heads="$heads" head-theme="dark" :config="$config"
    striped hoverable bordered compressed/>
            </div>
          </div>

        
          
    
      
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop