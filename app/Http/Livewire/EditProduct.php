<?php

namespace App\Http\Livewire;

use App\Models\producto;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditProduct extends Component
{
    
    use WithFileUploads;
    public $open = false;
    public $producto, $imagen, $identificador;

    protected $rules =[
        'producto.nombre'=>'required',
        'producto.barras'=>'required',
    ];

    public function mount(producto $producto)
    {
        $this->producto = $producto;
    }

    public function save(){
        $this->producto->save();

        $this->reset(['open', 'barras', 'nombre', 'imagen']);

        $this->identificador = rand();
        $this->emitTo('show-productos', 'render');
        $this->emit('alert', 'Se modifico satisfactoriamente');
    }
    public function render()
    {
        return view('livewire.edit-product');
    }
}
