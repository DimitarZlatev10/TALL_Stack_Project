<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Register Page')]
class Register extends Component
{
    public $email, $password, $repeatPassword, $name;

    public function register()
    {
        $v = $this->validate([
            'name' => 'required|min:2',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'password' => 'required|min:6',
        ]);

        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ];

        $user = User::create($data);

        auth()->login($user);

        return redirect('/')->with('success', 'You have been succesfully registered');
    }
    public function render()
    {
        return view('livewire.register');
    }
}
