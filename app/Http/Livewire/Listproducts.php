<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Product;

class Listproducts extends Component
{
    public $name;

    private $products;
    public $desejonotif = false;
    public  $lojaid;
    public function render()
    {

        $this->products = Product::where('user_id',$this->lojaid )->paginate(10);

        return view('livewire.listproducts',['products'=>$this->products]);
    }

    public function like(){


        $this->desejonotif = true;


    }
}
