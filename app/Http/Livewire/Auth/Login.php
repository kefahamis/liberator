<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{

    public $email = '';
    public $password = '';
    public $remember_me = false;
    
    protected $rules = [
        'email' => 'required|email:rfc,dns',
        'password' => 'required|min:6',
    ];

    
    //This mounts the default credentials for the admin. Remove this section if you want to make it public.
    // public function mount()
    // {
    //     if (auth()->user()) {
    //         // return redirect()->intended('/dashboard');

    //         switch (Auth::user()->role) {
    //             case 1:
    //                 $this->redirectTo = '/admin';
    //                 return $this->redirectTo;
    //                 break;
    //             case 2:
    //                 $this->redirectTo = '/hr';
    //                 return $this->redirectTo;
    //                 break;
    //             case 3:
    //                 $this->redirectTo = '/staff';
    //                 return $this->redirectTo;
    //                 break;
    //             default:
    //                 $this->redirectTo = '/login';
    //                 return $this->redirectTo;
    //         }

    //     }
    //     $this->fill([
    //         'email' => 'hamiskf@gmail.com',
    //         'password' => 'secret',
    //     ]);
    // }

    public function login()
    {
        $credentials = $this->validate();
        if (auth()->attempt(['email' => $this->email, 'password' => $this->password], $this->remember_me)) {
            $user = User::where(['email' => $this->email])->first();
            auth()->login($user, $this->remember_me);
            return redirect()->intended('/dashboard');
        } else {
            return $this->addError('email', trans('auth.failed'));
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
