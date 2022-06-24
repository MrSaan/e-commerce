<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{
    use WithFileUploads;
    public $user;
    public $username;
    public $email;
    public $thumbnail;

    protected $rules = [
        'username' => 'required|min:5',
        'email' => 'required|email',
        'thumbnail' => 'image'
    ];

    public function render()
    {
        return view('livewire.user.profile');
    }

    public function save()
    {
        $this->validate();
        $record = User::find($this->user->id);
        $record->update([
            'username' => $this->username,
            'email' => $this->email,
            'thumbnail' => $this->thumbnail->store('photos')
        ]);
        session()->flash('success', 'Successfully updated.');
    }
}
