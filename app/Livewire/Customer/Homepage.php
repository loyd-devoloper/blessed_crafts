<?php

namespace App\Livewire\Customer;

use App\Enums\StatusEnum;
use Livewire\Component;
use Livewire\Attributes\Title;

class Homepage extends Component
{

    #[Title('Homepage')]
    public function render()
    {

        return view('livewire.customer.homepage');
    }
}
