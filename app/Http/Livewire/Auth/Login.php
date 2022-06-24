<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required'
    ];

    public function render()
    {
        return view('livewire.auth.login');
    }

    public function store()
    {   
        $attributes = $this->validate();
        if (auth()->attempt($attributes)) {
            // session generate | defense 
            session()->regenerate();
            return redirect('/')->with('success', 'Welcome Back!');
        }

        throw ValidationException::withMessages([
            'email' => 'Your provided credential could not be verified.'
        ]);
    }
}
