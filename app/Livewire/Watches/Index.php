<?php

namespace App\Livewire\Watches;

use App\Models\Category;
use App\Models\Watch;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('All Watches')]
class Index extends Component
{
    use WithPagination;
    public $search = '';
    public $category = '';
    public $perPage = '';
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        if ($this->category == '') {
            return view('livewire.watches.index', [
                // 'watches' => Watch::where('title', 'like', '%' . $this->search . '%')->paginate($this->perPage),
                'watches' => Watch::where('title', 'like', '%' . $this->search . '%')->paginate($this->perPage),
                'categories' => Category::all(),
            ]);
        } else {
            return view('livewire.watches.index', [
                // 'watches' => Watch::where('title', 'like', '%' . $this->search . '%')->paginate($this->perPage),
                'watches' => Watch::where('title', 'like', '%' . $this->search . '%')
                    ->where('category_id', $this->category)
                    ->paginate($this->perPage),
                'categories' => Category::all(),
            ]);
        }
    }
}
