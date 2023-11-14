<?php

namespace App\Livewire\Watches;

use App\Models\Watch;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('All Watches')]
class Index extends Component
{
    use WithPagination;
    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.watches.index', [
            'watches' => Watch::where('title', 'like', '%' . $this->search . '%')->paginate(12),
        ]);
    }
}
