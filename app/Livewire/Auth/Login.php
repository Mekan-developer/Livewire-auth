<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Lazy;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password as Pass;

#[Lazy()]
class Login extends Component
{
    public $login='';
    public $password='', $showPassword = false;
    public $remember=false;


    public function togglePasswordVisibility()
    {
        $this->showPassword = !$this->showPassword;
    }
    public function placeholder(){
        return view('livewire.placeholders.login');
    }
    public function rules()
    {       
        return  [
            'login' => 'required|min:5',
            'password' => ['required', Pass::min(5)->letters()->mixedCase()->symbols()]
        ];
    }


    // Validate updated fields in real-time
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitLogin()
    {

        $credentials = $this->validate();
        $loginType = filter_var($this->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        // Create credentials array based on the login type
        $credentials = [
            $loginType => $this->login,
            'password' => $this->password,
        ];

        if (Auth::attempt($credentials,$this->remember)) {
            session()->regenerate();  // Prevent session fixation
            return redirect()->intended('dashboard');
        } else {
            $this->addError('error', 'These credentials do not match our records.');  // Show error to user
        }
        $this->reset('password');    
          
    }

    public function render()
    {
        return view('livewire.auth.login');
    }

    // asdad
    // public function username()
    // {
    //     $login_type = filter_var(request()->input("login"), FILTER_VALIDATE_EMAIL) ? "email" : "username";

    //     request()->merge([
    //         $login_type => request()->input("login")
    //     ]);
        
    //     return $login_type;
    // }
    // ewqewqeq


    public function clearError()
    {
        session()->forget('error');
    }
}
