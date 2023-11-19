<?php

namespace App\Livewire;

use App\Models\Cart as CartModel;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Your Cart')]
class Cart extends Component
{
    // public $cartItems;

    // public function mount()
    // {
    //     $this->updateCart();
    // }

    // public function updateCart()
    // {
    //     $this->cartItems = CartModel::with('watch')->where('user_id', auth()->user()->id)->get();
    // }

    public function render()
    {
        // $this->cartItems = CartModel::with('watch')->where('user_id', auth()->user()->id)->get();
        return view('livewire.cart', [
            'cartItems' => CartModel::with('watch')->where('user_id', auth()->user()->id)->get(),
        ]);
    }
}
