<div>
    <a class="cursor-pointer" alt="Modificar" wire:click="$set('open',true)">
        <i class="fas fa-edit "></i>
    </a>


    <x-jet-dialog-modal wire:model="open" class="m-auto">

        <x-slot name="title">
            
            <h1>Editar el Producto {{$producto->nombre}}</h1>
        </x-slot>

        <x-slot name="content">
            <div wire:loading wire:target="imagen"class="flex p-4 mb-4 text-sm bg-red-600 border text-yellow-700 rounded-lg dark:bg-yellow-200 dark:text-yellow-800" role="alert">
                <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                <div>
                  <span class="font-medium text-yellow-100">IMAGEN CARGANDO:</span> Espere un momento.
                </div>
            </div>

              <div class="flex px-8 py-12">
                <div class="relative overflow-x-auto shadow-md flex">
                    <div class="w-2/3">






                        {{-- <form action="{{route('dashboard')}}" method="post" encrypted="multipart/form-data" class="w-full max-w-lg">
                    @csrf --}}
                        
                            <div class="mb-4">
                                <x-jet-label value="Nombre del producto"/>
                                    <x-jet-input wire:model="producto.nombre" type="text" class="w-full"/>
                            </div>
                            <div class="mb-4">
                                <x-jet-label value="Codigo de Barra"/>
                                    <x-jet-input wire:model="producto.barras" type="text" class="w-full"/>
                            </div>
                            <div class="mb-4 flex px-5 m-4">
                                <div>
                                    <x-jet-label value="Moneda"/>
                                    <x-jet-input type="text" class="w-2/5 px-5 m-4"/>
                                </div>
                                <div>
                                    <x-jet-label value="Precio"/>
                                    <x-jet-input type="text" class="w-2/5"/>
                                </div>
                            </div>
                            <div class="flex flex-wrap">
                                <input type="file" class="appearance-none block  bg-gray-200 text-gray-700 border border-gray-200 rounded py-6 px-6 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" wire:model="imagen" id="{{$identificador}}">
                                <x-jet-input-error for="imagen"/>
                            </div>
                    </div>
                    
                    <div class="w-1/3">
                        <div class="flex flex-wrap -mx-3 mb-6">
                            @if ($imagen)
                                <img class='mb-4' src="{{$imagen->temporaryUrl()}}">
                            @else
                                <img src="{{Storage::url($producto->imagen)}}" alt="producto"/>
                            @endif
                        </div>
                    </div> 
                </div>
                
              </div>

        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire: click="set('open',false)">
                Cancelar
            </x-jet-secundary-button>

            <x-jet-button wire:click="save">
                Actualizar Producto
            </x-jet-button>

        </x-slot>


    </x-jet-dialog-modal>



</div>
