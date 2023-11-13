<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Login Page')]
class Login extends Component
{
    public $email, $password;
    public function login()
    {
        $v = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt($v)) {
            session()->regenerate();
            return redirect('/')->with('success', 'You have sucessfully logged in!');
        }

        return back()->with(['error' => 'Wrong email or password']);
    }
    public function render()
    {
        return view('livewire.login');
    }
}
