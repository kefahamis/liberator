<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class Register extends Component
{

    public $email = '';
    public $password = '';
    public $passwordConfirmation = '';

    public function mount()
    {
        if (auth()->user()) {
            // return redirect()->intended('/dashboard');
            switch (Auth::user()->role) {
                case 1:
                    $this->redirectTo = '/admin';
                    return $this->redirectTo;
                    break;
                case 2:
                    $this->redirectTo = '/hr';
                    return $this->redirectTo;
                    break;
                case 3:
                    $this->redirectTo = '/staff';
                    return $this->redirectTo;
                    break;
                default:
                    $this->redirectTo = '/login';
                    return $this->redirectTo;
            }
        }
    }

    public function updatedEmail()
    {
        $this->validate(['email'=>'required|email:rfc,dns|unique:users']);
    }
    
    public function register()
    {
        $this->validate([
            'email' => 'required',
            'password' => 'required|same:passwordConfirmation|min:6',
        ]);

        $user = User::create([
            'email' =>$this->email,
            'password' => Hash::make($this->password),
            'remember_token' => Str::random(10),
        ]);

        auth()->login($user);

        return redirect('/profile');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
