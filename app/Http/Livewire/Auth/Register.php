<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;

class Register extends Component
{
    public $username;
    public $email;
    public $password;

    protected $rules = [
        'username' => 'required|min:5',
        'email' => 'required|email',
        'password' => 'required'
    ];

    public function render()
    {
        return view('livewire.auth.register')
            ->layout('pages.register');
    }

    public function updated($attributes)
    {
        $this->validateOnly($attributes);
    }

    public function saveAccount()
    {

        // real time validation
        $data = $this->validate();
        $newAccount = User::create($data);

        // login User
        auth()->login($newAccount);
        return redirect('/')->with('success', 'Your account has been created!');

        // !real time
        // $this->validate();
        // User::create([
        //     'username' => $this->username,
        //     'email' => $this->email,
        //     'password' => $this->password
        // ]);
    }
}
