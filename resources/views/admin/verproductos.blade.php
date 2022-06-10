@extends('adminlte::page')
@section('title', 'Escritorio')

@section('content_header')
    <h1>Editar: {{$producto->nombre}}</h1>
@stop

@section('content')
    <p>---</p>
    <div class="container">
        
        <div class="mb-2 md:flex col-12 md:justify-center md:items-center ">
            <div class="p-5 bg-white rounded-lg shadow-lg col-12 md:flex">
                <form action="registro" method="post">
                    <div class="parent">
                        <div class="div1"><label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-">
                            Producto
                        </label><br>
                        <input type="text" class="col-12" value="{{$producto->nombre}}" placeholder="Nombre del producto">
                        <br><br></div>
                        <div class="div2"><label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-">
                            SKU Proveedor
                        </label><br>
                        <input type="text" class="col-12" value="{{$producto->sku_provee}}" placeholder="SKU Proveedor">
                        <br><br></div>
                        <div class="div3"><label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-">
                            SKU redvital®
                        </label><br>
                        <input type="text" class="col-12" value="{{$producto->sku_redvital}}" placeholder="SKU redvital®">
                        <br><br></div>
                        <div class="div4"><img src="{{Storage::url($producto->imagen)}}" alt="Productos" width="250px" class="rounded-md"/></div>
                        <div class="div5"><label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 px-2  " for="grid-">
                            Categoria
                        </label><br>
                        <select class="block  w-full bg-gray-400 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:border-gray-500" style="
                        background-color: #eee;" id="grid-state" value="{{$producto->categoria}}">
                            <option value="{{$producto->categoria}}">{{$producto->categoria}}</option>
                            <option value="ALIMENTOS">ALIMENTOS</option>
                            <option value="BIODYNAMICS">BIODYNAMICS</option>
                            <option value="COSMETICOS Y BELLEZA">COSMETICOS Y BELLEZA</option>
                            <option value="CUIDADO E HIGIENE PERSONAL">CUIDADO E HIGIENE PERSONAL</option>
                            <option value="DERMATOLOGIA Y ESTETICA">DERMATOLOGIA Y ESTETICA</option>
                            <option value="EQUIPOS MEDICOS">EQUIPOS MEDICOS</option>
                            <option value="INSTRUMENTAL">INSTRUMENTAL</option>
                            <option value="INSUMOS MEDICO">INSUMOS MEDICO</option>
                            <option value="MEDICAMENTOS">MEDICAMENTOS</option>
                            <option value="MATERNITY, BABY & CHILD">MATERNITY, BABY & CHILD</option>
                            <option value="MISCELANEOS">MISCELANEOS</option>
                            <option value="ODONTOLOGIA">ODONTOLOGIA</option>
                            <option value="HOGAR">HOGAR</option>
                            <option value="SPA">SPA</option>
                            <option value="SPORT & FITNESS">SPORT & FITNESS</option>
                            <option value="VESTIMENTA">VESTIMENTA</option>
                            <option value="VETERINARIA">VETERINARIA</option>
                            <option value="VITAMINAS, MINERALES Y SUPLEMENTOS">VITAMINAS, MINERALES Y SUPLEMENTOS</option>
                          </select>
                        </div>

            
            
            
            
            
            </div>
        </div>
        
    </div>
   
        
             
@stop

@section('css')

    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/redvital.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


