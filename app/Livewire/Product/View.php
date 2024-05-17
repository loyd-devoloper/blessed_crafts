<?php

namespace App\Livewire\Product;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class View extends Component
{

    public function mount($name)
    {

    }
    public function render()
    {
        return view('livewire.product.view');
    }
}
