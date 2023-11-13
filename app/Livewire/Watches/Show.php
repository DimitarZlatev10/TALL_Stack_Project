<?php

namespace App\Livewire\Watches;

use App\Models\Watch;
use Livewire\Component;

class Show extends Component
{
    public Watch $watch;
    public function render()
    {
        return view('livewire.watches.show');
    }
}
