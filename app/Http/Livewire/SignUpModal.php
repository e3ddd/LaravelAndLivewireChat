<?php

namespace App\Http\Livewire;

use App\Services\SignService;
use Livewire\Component;

class SignUpModal extends Component
{
    public $name;
    public $email;
    public $password;
    public $confirmPassword;



    public function signUp(SignService $signService)
    {
        $signService->signUp($this->email, $this->name, $this->password, $this->confirmPassword);
        $this->email = '';
        $this->name = '';
        $this->password = '';
        $this->confirmPassword = '';
    }

    public function render()
    {
        return view('livewire.sign-up-modal')->layout('sign-component');
    }
}
