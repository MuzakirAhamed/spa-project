<?php

namespace App\Http\Livewire;


use Livewire\Component;

use App\Models\User;

class Contact extends Component
{
    // Input data
    public $name = '';
    public $email = '';
    public $message = '';

// Validation rules
    protected $rules = [
        'name' => 'required|string',
        'email' => 'required|email',
        'message' => 'required|string',
    ];

    // To save the data to db
    public function save()
    {
        $this->validate();
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);

        $this->redirect('/home');
    }
    public function render()
    {
        return view('livewire.contact');
    }
}
