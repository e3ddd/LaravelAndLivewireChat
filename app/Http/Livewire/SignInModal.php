<?php

namespace App\Http\Livewire;

use App\Services\SignService;
use Livewire\Component;

class SignInModal extends Component
{
    public $email;
    public $password;

    public $error;
    public function signIn(SignService $signService)
    {
        try {
            $signService->signIn($this->email, $this->password, null);
        }catch (\RuntimeException $e){
             $this->error = $e->getMessage();
        }
        return redirect('/livewire');
    }

    public function render()
    {
        return view('livewire.sign-in-modal', ['error' => $this->error]);
    }
}
