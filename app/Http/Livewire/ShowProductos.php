<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;

use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;


class ShowProductos extends Component
{

    use WithPagination;
    protected $listener = ['render => render'];

    public $search;
    public $sort = 'id';
    public $direction = 'desc';

    public $open = false;


    public function updatingSearch()
    {
        $this->resetPage();
    }

   
    public function render()
    {
        // $productos= Producto::where('team_id','1')->get();
        // return view('livewire.show-productos', compact('productos'));

        $empresa=Auth::user()->currentTeam->id;

        $productos = Producto::where('team_id','=',$empresa)
            ->Where('nombre', 'like', '%' . $this->search . '%')
            ->orWhere('sku_provee', 'like', '%' . $this->search . '%')         
            ->orderBy($this->sort, $this->direction)
            ->paginate(20);
        return view('livewire.show-productos', compact('productos'));
    }

    public function order($sort)
    {
        if ($this->sort == $sort) {
            if ($this->direction == 'desc') {
                $this->direction = 'asc';
            } else {
                $this->direction = 'desc';
            }
        } else {
            $this->sort = $sort;
            $this->direction = 'asc';
        }
    }
}
