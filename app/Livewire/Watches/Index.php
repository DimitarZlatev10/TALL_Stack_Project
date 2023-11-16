<?php

namespace App\Livewire\Watches;

use App\Models\Category;
use App\Models\Watch;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('All Watches')]
class Index extends Component
{
    use WithPagination;

    #[Url]
    public $search = '',
        $category = '',
        $perPage = '8',
        $sortByPrice = 'asc';

    public function resetFilters()
    {
        $this->search = '';
        $this->category = '';
        $this->perPage = '8';
        $this->sortByPrice = 'asc';
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function filterCategory($name)
    {
        $this->category = $name;
        $this->resetPage();
    }

    public function sort()
    {
        return view('livewire.watches.index', [
            'watches' => Watch::orderBy('price', $this->sortByPrice)
                ->where('title', 'like', '%' . $this->search . '%')
                ->where('category_id', $this->category)
                ->paginate($this->perPage),
            'categories' => Category::all(),
        ]);
    }

    public function render()
    {
        // dd(Watch::whereRelation('category', 'name', 'vitae')->get());
        if ($this->category == '') {
            return view('livewire.watches.index', [
                'watches' => Watch::orderBy('price', $this->sortByPrice)
                    ->where('title', 'like', '%' . $this->search . '%')
                    ->paginate($this->perPage),
                'categories' => Category::all(),
            ]);
        } else {
            return view('livewire.watches.index', [
                $this->resetPage(),
                'watches' => Watch::orderBy('price', $this->sortByPrice)
                    ->where('title', 'like', '%' . $this->search . '%')
                    // ->where('category_id', $this->category)
                    ->whereRelation('category', 'name', $this->category)
                    ->paginate($this->perPage),
                'categories' => Category::all(),
            ]);
        }
    }
}
