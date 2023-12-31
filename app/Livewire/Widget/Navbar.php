<?php

namespace App\Livewire\Widget;

use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.widget.navbar');
    }

    function logout() {
        auth()->logout();
        session()->flush();

        return $this->redirect('login', navigate: true);
    }
}
