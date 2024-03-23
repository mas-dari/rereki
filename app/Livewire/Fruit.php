<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\FruitName;

class Fruit extends Component
{
    public $name;

    public function render()
    {
        return view('livewire.fruit');
    }
    public function submit()
    {
        FruitName::create([
            "name" => $this->name,
        ]);
 
        session()->flash('message', '保存したよ');
    }
    
}
