<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;
use App\Models\Movimiento;

class CreateProduct extends Component
{
    public $open= false;

    public $sku_provee, $barras, $nombre, $cantidad_empaque, $cantidad, $condicion, $moneda, $cbulto, $cunidad, $psugerido;

    protected $rules = [
        'sku_provee' => 'required|max:100',
        'barras' => 'required|min:10',
        'nombre' => 'required|min:5',
        'cantidad_empaque' => 'required|min:1',
        'condicion'=> 'required|min:1',
            'moneda'=> 'required|min:1',
            'cantidad'=> 'required|min:1',
            'cbulto'=> 'required|min:1',
            'cunidad'=> 'required|min:1',
            'psugerido'=> 'required|min:1'
    ];

    public function save (){

          $this->validate();

        Producto::create([
        'sku_provee' => $this->sku_provee,
        'barras' => $this->barras,
        'nombre' => $this->nombre,
        'cantidad_empaque' => $this->cantidad_empaque,
        'status'=>"N",
        'user_id' => $this->user_id
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

    }

    public function render()
    {
        return view('livewire.create-product');
    }
}
