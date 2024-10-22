<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Lazy;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password as Pass;


class Register extends Component
{

    public $username;
    public $email;
    public $password;
    public $password_confirmation;


    public function rules()
    {
        return [
            'username' => 'required|string|min:5|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => ['required', Pass::min(5)->letters()->mixedCase()->symbols(), 'confirmed'],
            'password_confirmation' => 'required',
        ];
    }

    // Method to validate only the updated field in real-time
    public function updated($propertyName)
    {
        if (in_array($propertyName, ['password', 'password_confirmation'])) {
            $this->validate([
                'password' => ['required', Pass::min(5)->letters()->mixedCase()->symbols(), 'confirmed'],
                'password_confirmation' => 'required',
            ]);
        } else {
            $this->validateOnly($propertyName);
        }
    }

    public function register()
    {
        $this->validate();

        User::create([
            'username' => $this->username,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        auth()->attempt(['email' => $this->email,'username' => $this->username, 'password' => $this->password]);

        return redirect()->intended('dashboard');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
