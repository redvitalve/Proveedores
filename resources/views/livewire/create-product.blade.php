<div>
    <x-jet-button wire:click="$set('open', true)">
        Crear nuevo producto
    </x-jet-button>

    <x-jet-dialog-modal wire:model="open">
        
        <x-slot name="title">
            <h1>Crear nuevo producto</h1>
        </x-slot>

        <x-slot name="content">
            <form action="{{route('dashboard')}}" method="post" encrypted="multipart/form-data" class="w-full max-w-lg">
                @csrf
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-1/2 md:w-1/2 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        SKU
                      </label>
                      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="SKU del Proveedor"wire:model="sku_provee">
                      {{$sku_provee}}
                    </div>
                    <div class="w-1/2 md:w-1/2 px-3">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                        Codigo de Barra
                      </label>
                      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Codigo de Barra">
                    </div>
                  </div>
                  <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        Nombre del producto
                      </label>
                      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="Nombre del Producto">
                      
                    </div>
                  </div>
                  <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-1/3 md:w-1/3 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                        Cantidad del Empaque
                      </label>
                      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Cantidad del Empaque">
                    </div>
                    <div class="w-1/3 md:w-1/3 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Cantidades disponibles
                      </label>
                      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Cantidades Disponibles">
                    </div>
                    <div class="w-1/5 md:w-1/3 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                        Condición
                      </label>
                      <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option value="E">Excento</option>
                        <option value="G">Gravable</option>
                      </select>
                    </div>
                    <div class="w-1/6 md:w-1/3 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                        Moneda
                      </label>
                      <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option value="USD">USD</option>
                        <option value="VES">VES</option>
                      </select>
                    </div>
                    <div class="w-1/5 md:w-1/4 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Costo x Bulto
                      </label>
                      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Sin IVA">
                    </div>
                    <div class="w-1/5 md:w-1/4 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Costo x Unidad
                      </label>
                      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Sin IVA">
                    </div>
                    <div class="w-1/5 md:w-1/4 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Precio Sugerido
                      </label>
                      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Sugerido">
                    </div>
                  </div>
            </form>
        </x-slot>

        <x-slot name="footer">
          <x-jet-secondary-button wire:click="@set('open',false)">
            Cancelar
          </x-jet-secondary-button>
          <x-jet-button>
            Crear nuevo producto
          </x-jet-button>
        </x-slot>

    </x-jet-dialog-modal>
</div>
