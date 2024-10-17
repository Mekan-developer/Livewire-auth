<?php

namespace App\Livewire\Dashboard;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Home extends Component
{

    public function logOut()
    {
        Auth::logout(); // Laravel's built-in logout function
        session()->invalidate(); // Invalidate the current session
        session()->regenerateToken(); // Regenerate the CSRF token for security

        return redirect('/'); // Redirect to home or login page
    }

    public function render()
    {
        return view('livewire.dashboard.home');
    }
}
