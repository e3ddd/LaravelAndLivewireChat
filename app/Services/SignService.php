<?php

namespace App\Services;

use App\Repositories\SignRepository;

class SignService
{

    private SignRepository $signRepository;

    public function __construct(SignRepository $signRepository)
    {
        $this->signRepository = $signRepository;
    }

    public function signIn($userEmail, $userPassword, $remember)
    {
        if($this->signRepository->authentication($userEmail, $userPassword, $remember)){
            session()->regenerate();
        }
    }

    /**
     * Sign up user
     * @param string|null $email
     * @param string|null $name
     * @param string|null $password
     * @param string|null $confirmPassword
     * @return void
     */
    public function signUp($email, $name, $password, $confirmPassword)
    {
        if($password !== $confirmPassword){
            throw new \RuntimeException('Passwords don\'t match !');
        }

        $this->signRepository->signUp($email, $name, $password);
    }
}
