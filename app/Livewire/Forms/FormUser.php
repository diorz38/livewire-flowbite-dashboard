<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\Component;

class FormUser extends Form
{
    public ?User $user;

    #[Locked]
    public $id;

    public $name;

    public $email;

    public $roles;

    public $password;


    public function setUser(User $user)
    {
        $this->user = $user;

        $this->name = $user->name;
        $this->email = $user->email;
        $this->roles = $user->roles;
        // $this->password = $user->password;
    }

    public function store()
    {
        $validated = $this->validate([
            'name' => 'required|string|max:255|min:4',
            'email' => 'required|email|unique:users,email',
            'roles' => 'required',
            'password' => 'sometimes',
        ]);
        dd($this->all());

        User::create([
            'name' => $validated->name,
            'email' => $validated->email,
            'password' => Hash::make($validated->password),
        ]);

        $this->user->syncRoles($this->roles);

        $this->reset();
    }

    public function update()
    {
        $validated = $this->validate([
            'name' => 'required|string|max:255|min:4',
            'email' => 'required|email|unique:users,email'.$this->user->id,
            'roles' => 'required',
            'password' => 'sometimes',
        ]);

        if(!empty($this->password) || $this->password != ""){
            $this->password = Hash::make($this->password);
            $this->user->update($this->except(['user', 'id','roles']));
        }else{
            $this->user->update($this->except(['user', 'id','roles', 'password']));
        }
        $this->user->syncRoles($this->roles);

    }
}
