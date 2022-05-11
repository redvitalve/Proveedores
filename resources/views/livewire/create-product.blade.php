<x-jet-button wire:click="$set('open', true)">
  Crear nuevo producto
</x-jet-button>

<x-jet-dialog-modal wire:model="open">
  
  <x-slot name="title">
      <h1>Crear nuevo producto</h1>
  </x-slot>

  <x-slot name="content">
      {{-- <form action="{{route('dashboard')}}" method="post" encrypted="multipart/form-data" class="w-full max-w-lg">
          @csrf --}}
          <div class="flex flex-wrap -mx-3 mb-6">
            {{-- @if ($imagen)
              <img class='mb-4' src="{{$imagen->temporaryUrl()}}">
            @endif --}}
              <div class="w-1/2 md:w-1/2 px-3 mb-6 md:mb-0">
                <input type="text" value="{{ Auth::user()->id }}" class="hidden" wire:model.defer="user_id">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                  SKU
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="SKU del Proveedor" wire:model.defer="sku_provee">
                {{$sku_provee}}
                <x-jet-input-error for ="sku_provee">
              </div>
              <div class="w-1/2 md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                  Codigo de Barra
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Codigo de Barra" wire:model.defer="barras">
                {{$barras}}
                <x-jet-input-error for ="barras">
              </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                  Nombre del producto
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="Nombre del Producto" wire:model.defer="nombre">
                {{$nombre}}
                <x-jet-input-error for ="nombre">
              </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-2">
              <div class="w-1/3 md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                  Cantidad del Empaque
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Cantidad del Empaque" wire:model.defer="cantidad_empaque">
                {{$cantidad_empaque}}
                <x-jet-input-error for ="cantidad_empaque">
              </div>
              <div class="w-1/3 md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                  Cantidades disponibles
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Cantidades Disponibles" wire:model.defer="cantidad">
                {{$cantidad}}
                <x-jet-input-error for ="cantidad">
              </div>
              <div class="w-1/5 md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                  Condición
                </label>
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state" wire:model.defer="condicion">
                  <option value="se">Seleccione</option>
                  <option value="E">Excento</option>
                  <option value="G">Gravable</option>
                </select>
                {{$condicion}}
                <x-jet-input-error for ="condicion">
              </div>
              <div class="w-1/6 md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                  Moneda
                </label>
                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state" wire:model.defer="moneda">
                  <option value="se">Seleccione</option>
                  <option value="USD">USD</option>
                  <option value="VES">VES</option>
                </select>
                {{$moneda}}
                <x-jet-input-error for ="moneda">
              </div>
              <div class="w-1/5 md:w-1/4 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state" wire:model.defer="cantidad_empaque">
                  Costo x Bulto
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Sin IVA" wire:model.defer="cbulto">
                {{$cbulto}}
                <x-jet-input-error for ="cbulto">
              </div>
              <div class="w-1/5 md:w-1/4 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state" wire:model.defer="cantidad_empaque">
                  Costo x Unidad
                </label>
                {{$cunidad}}
                <x-jet-input-error for ="cunidad">
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Sin IVA" wire:model.defer="cunidad">
              </div>
              <div class="w-1/5 md:w-1/4 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                  Precio Sugerido
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Sugerido" wire:model.defer="psugerido">
                {{$psugerido}}
                <x-jet-input-error for ="psugerido">
              </div>
              <div></div>
                <input type="file" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" wire:model.defer="imagen">
              
            </div>
      {{-- </form> --}}
  </x-slot>

  <x-slot name="footer">
    <x-jet-secondary-button wire:click="$set('open', false)">
      Cancelar
    </x-jet-secondary-button>
    <x-jet-button  wire:click="save">
      Crear nuevo producto
    </x-jet-button>
    {{-- <span wire:loading>Cargando...</span> --}}
  </x-slot>

</x-jet-dialog-modal>
</div>
