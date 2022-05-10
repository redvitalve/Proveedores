<div>
    <x-slot name="header">
        <h2 class='font-semibold text-xl text-gray-800 leading-tight'>
            {{ __('Productos') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="p-4 ">
                <label for="table-search" class="sr-only">Buscar</label>
                <div class="relative mt-1 flex items-center ">
                    
                    <input type="text" id="table-search" class= "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-9 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model="search" placeholder="Buscar..." mr-4 >
                @livewire('create-product')</div>
                
                <div class="py-6">
            </div>
            @if($productos->count())

            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 cursor-pointer" wire:click="order('nombre')">
                            Nombre del Producto
                            
                            @if ($sort == 'nombre')
                                @if ($direction == 'asc')
                                    <i class="fa fa-sort-alpha-up-alt float-right mt-1"></i>
                                @else
                                    <i class="fa fa-sort-alpha-down-alt float-right mt-1"></i>
                                @endif
                            @else
                            <i class="fa fa-sort float-right mt-1"></i>
                            @endif
                        </th>
                        <th scope="col" class="px-6 py-3 cursor-pointer" wire:click="order('sku_provee')">
                            SKU Proveedor
                            @if ($sort == 'sku_provee')
                                @if ($direction == 'asc')
                                    <i class="fa fa-sort-alpha-up-alt float-right mt-1"></i>
                                @else
                                    <i class="fa fa-sort-alpha-down-alt float-right mt-1"></i>
                                @endif
                            @else
                            <i class="fa fa-sort float-right mt-1"></i>
                            @endif
                        </th>
                        <th scope="col" class="px-6 py-3 cursor-pointer">
                            Categoria
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Precio unitario ($)
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Editar</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productos as $producto)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                           {{$producto->nombre}}
                        </th>
                        <td class="px-6 py-4">
                            {{$producto->sku_provee}}
                        </td>
                        <td class="px-6 py-4">
                            Medicina
                        </td>
                        <td class="px-6 py-4">
                            {{$producto->id}}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                        </td>
                    </tr>
                    @endforeach
                  
                </tbody>
            </table>
           
        </div> 
        

        {{-- {{$productos}} --}}
        {{-- <h1>Hola Mundo</h1> --}}
    </div>
    @else
        <div class="px-6 py4">
            No se consiguio ningun resultado por la busqueda
        </div>
            @endif
</div>