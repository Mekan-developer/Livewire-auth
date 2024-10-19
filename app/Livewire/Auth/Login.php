<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password as Pass;

class Login extends Component
{
    public $email;
    public $password;

    public function rules()
    {
        return [
            'email' => 'required',
            'password' => 'required',
        ];
    }

    // Method to validate only the updated field in real-time
    public function updated($propertyName)
    {
        if ($propertyName === 'password') {
            $this->validateOnly($propertyName);
        } else {
            $this->validateOnly($propertyName);
        }
    }

    public function login()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect()->intended('dashboard');
        } else {
            session()->flash('error', 'Invalid credentials');
        }
        $this->reset('email','password');        
    }

    public function render()
    {
        return view('livewire.auth.login');
    }


    public function clearError()
    {
        session()->forget('error');
    }
}
