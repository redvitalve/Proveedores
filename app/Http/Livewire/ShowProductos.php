<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;
use App\Models\Movimiento;

class ShowProductos extends Component
{
    public $search;
    public $sort='id';
    public $direction='desc';

    public $open= false;

    public $sku_provee, $barras, $nombre, $cantidad_empaque, $cantidad, $condicion, $moneda, $cbulto, $cunidad, $psugerido, $user_id;
    protected $listener = ['render'=>'render'];

    // protected $rules = [
    //     'sku_provee' => 'required|max:100',
    //     'barras' => 'required|min:10',
    //     'nombre' => 'required|min:5',
    //     'cantidad_empaque' => 'required|min:1',
    //     'condicion'=> 'required|min:1',
    //         'moneda'=> 'required|min:1',
    //         'cantidad'=> 'required|min:1',
    //         'cbulto'=> 'required|min:1',
    //         'cunidad'=> 'required|min:1',
    //         'psugerido'=> 'required|min:1',
    // ];

    // public function updated($propertyName){
    //     $this->validateOnly($propertyName);
    // }

    public function save (){

      //  $this->validate();

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
        $this->reset(['open', 'sku_provee', 'barras', 'nombre', 'cantidad_empaque', 'cantidad', 'condicion', 'moneda', 'cbulto', 'cunidad', 'psugerido', 'user_id']);

        $this->emitTo('show-products','render');
        $this->emit('alert', 'El Producto se creo satisfactoriamente');

    }

    // public function render()
    // {
    //     return view('livewire.create-product');
    // }

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
