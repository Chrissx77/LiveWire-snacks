<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;


class UserList extends Component
{
    use WithPagination;
    public $name;
    public $email;
    public $password;

    public function createUser()
    {

        $this->validate(
            [
                'name' => 'required|min:2|max:20',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:5'
        
            ]
        );

        User::create([
            "name" => $this->name,
            "email" => $this->email,
            "password" => $this->password,
        ]);

        $this->reset(['name','email','password']);

        session()->flash('success','Utente aggiunto correttamente');
    }

    public function render()
    {

        $users = User::paginate(3);
        return view('livewire.user-list', [
            'users' => $users
        ]);
    }
}
