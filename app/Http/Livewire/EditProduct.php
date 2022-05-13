<?php

namespace App\Http\Livewire;

use App\Models\producto;
use Livewire\Component;

class EditProduct extends Component
{
    public $producto;

    public function mount(producto $producto)
    {
        $this->producto = $producto;
    }
    public function render()
    {
        return view('livewire.edit-product');
    }
}
