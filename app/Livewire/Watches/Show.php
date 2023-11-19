<?php

namespace App\Livewire\Watches;

use App\Models\Cart;
use App\Models\Watch;
use Livewire\Component;

class Show extends Component
{
    public Watch $watch;

    public $alreadyAdded;

    public function mount()
    {
        $this->isAlreadyAdded();
    }

    public function isAlreadyAdded()
    {
        if (auth()->user()) {
            $this->alreadyAdded = Cart::where('user_id', auth()->user()->id)
                ->where('watch_id', $this->watch->id)
                ->first();
        }
    }
    public function addToCart()
    {
        Cart::create([
            'user_id' => auth()->user()->id,
            'watch_id' => $this->watch->id,
        ]);
        $this->alreadyAdded = true;
        return redirect()->with('success', 'item successfully added to your cart!');
    }

    public function removeFromCart()
    {
        Cart::where('user_id', auth()->user()->id)
            ->where('watch_id', $this->watch->id)->delete();
        $this->alreadyAdded = false;
        return redirect()->with('success', 'item successfully removed from your cart!');
    }

    public function render()
    {
        return view('livewire.watches.show');
    }
}
