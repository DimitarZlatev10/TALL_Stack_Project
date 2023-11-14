<?php

namespace App\Livewire\Watches;

use App\Models\Watch;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('All Watches')]
class Index extends Component
{
    public $search = '';

    public function render()
    {
        return view('livewire.watches.index', [
            'watches' => Watch::where('title', 'like', '%' . $this->search . '%')->get(),
        ]);
    }
}
