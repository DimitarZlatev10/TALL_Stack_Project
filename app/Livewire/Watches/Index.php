<?php

namespace App\Livewire\Watches;

use App\Models\Watch;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.watches.index', [
            'watches' => Watch::all(),
        ]);
    }
}
