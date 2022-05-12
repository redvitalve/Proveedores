<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;
use App\Models\Movimiento;
use Livewire\WithFileUploads;

class CreateProduct extends Component
{
    public $open= false;

    use WithFileUploads;

    public $sku_provee, $barras, $nombre, $cantidad_empaque, $cantidad, $condicion, $moneda, $cbulto, $cunidad, $psugerido, $user_id, $imagen;
    // protected $listener = ['render'=>'render'];

    protected $rules = [
        'sku_provee' => 'required|max:4',
        'barras' => 'required|max:4',
        'nombre' => 'required',
        'cantidad_empaque' => 'required',
        'condicion'=> 'required',
            'moneda'=> 'required',
            'cantidad'=> 'required',
            'cbulto'=> 'required',
            'cunidad'=> 'required',
            'psugerido'=> 'required'
        ];

        public function updated($propertyName){
            $this->validateOnly($propertyName);
        }

    public function save (){

        $this->validate();
        $imagen = $this->imagen->store('productos');

        Producto::create([
        'sku_provee' => $this->sku_provee,
        'barras' => $this->barras,
        'nombre' => $this->nombre,
        'cantidad_empaque' => $this->cantidad_empaque,
        'status'=>"N",
        'user_id' => $this->user_id,
        'imagen' => $imagen
        ]);

        Movimiento::create([
            'sku_provee'=> $this->sku_provee,
            'condicion'=> $this->condicion,
            'moneda'=> $this->moneda,
            'cantidad'=> $this->cantidad,
            'cbulto'=> $this->cbulto,
            'cunidad'=> $this->cunidad,
            'psugerido'=> $this->psugerido
        ]);

        $this->reset(['open', 'sku_provee', 'barras', 'nombre', 'cantidad_empaque', 'cantidad', 'condicion', 'moneda', 'cbulto', 'cunidad', 'psugerido', 'user_id', 'imagen']);

        $this->emitTo('show-products','render');
        $this->emit('alert', 'El Producto se creo satisfactoriamente');


    }

    public function render()
    {
        return view('livewire.create-product');
    }
}
