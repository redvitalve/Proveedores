<?php

namespace App\Http\Livewire;

use App\Models\producto;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class EditProduct extends Component
{

    use WithFileUploads;
    public $open = false;
    public $producto,$sku_provee, $barras, $nombre, $cantidad_empaque, $cantidad, $condicion, $moneda, $cbulto, $cunidad, $psugerido, $user_id, $imagen, $identificador,$categoria;
    

    protected $rules = [
        'producto.nombre' => 'required',
        'producto.barras' => 'required',
        'producto.cantidad' => 'required',
        'producto.categoria' => 'required',
        'producto.cantidad_empaque' => 'required',
        'producto.condicion' => 'required',
        'producto.cbulto' => 'required',
        'producto.cunidad' => 'required',
        'producto.psugerido' => 'required',
        'producto.moneda' => 'required',
        'producto.sku_provee' => 'required',
    ];

    public function mount(producto $producto)
    {
        $this->producto = $producto;
    }

    public function save()
    {
        $this->producto->save();

        $this->reset(['open', 'barras', 'nombre', 'imagen', 'cantidad', 'categoria', 'cantidad_empaque', 'condicion', 
        'cbulto', 'cunidad', 'psugerido', 'moneda', 'sku_provee']);

        $this->identificador = rand();
        $this->emitTo('show-productos', 'render');
        $this->emit('alert', 'Se modifico satisfactoriamente');
    }
    public function render()
    {
        return view('livewire.edit-product');
    }
}
