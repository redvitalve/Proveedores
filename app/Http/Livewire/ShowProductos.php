<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;
use App\Models\Movimiento;


class ShowProductos extends Component
{
    protected $listener = ['render'];

    public $search;
    public $sort='id';
    public $direction='desc';

    public $open= false;

     
   

    public function render()
    {
         $movimientos =Movimiento::all();
        $productos = Producto::where('nombre','like','%'. $this-> search .'%')
        ->orWhere('sku_provee','like','%'. $this-> search .'%')
        ->orderBy($this->sort, $this->direction)
        ->get();
        return view('livewire.show-productos',compact('productos', 'movimientos'));
    }

    public function order($sort){
        if($this->sort==$sort){
            if($this->direction=='desc'){
                $this->direction='asc';
               }   else {
                    $this->direction='desc';
                }
            }else{
                $this->sort = $sort;
                $this->direction = 'asc';
            }
        }
   
    }
