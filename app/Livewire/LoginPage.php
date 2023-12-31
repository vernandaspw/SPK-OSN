<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class LoginPage extends Component
{
    public $username;
    public $password;
    public $rememberMe = true;

    public function render()
    {

        return view('livewire.login-page');
    }

    public function login()
    {
        $akun = User::where('username', $this->username)->first();
        if (!$akun) {
            session()->flash('message', 'Username salah');
            return;
        }
        if (!Hash::check($this->password, $akun->password)) {
            session()->flash('message', 'Password salah');
            return;
        }
        if (!$akun->isaktif) {
            session()->flash('message', 'akun tidak aktif');
            return;
        }
        auth()->login($akun, $this->rememberMe);

        return $this->redirect('/', navigate: true);
    }
}
