<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SignRepository
{
    /**
     * Authentication user
     * @param string|null $userEmail
     * @param string|null $userPassword
     * @param string|null $remember
     * @return bool
     */
    public function authentication($userEmail, $userPassword, $remember)
    {
        if($userEmail === null){
            throw new \RuntimeException('E-mail required');
        }

        if($userPassword === null){
            throw new \RuntimeException('Password required');
        }

        $credentials  = [
            'email' => $userEmail,
            'password' => $userPassword,
        ];

        $success = Auth::attempt($credentials, $remember);

        if(!$success){
            throw new \RuntimeException('Something went wrong');
        }
        return  $success;
    }

    /**
     * Sign up
     * @param string|null $email
     * @param string|null $name
     * @param string|null $password
     * @param string|null $userPixel
     * @return void
     */
    public function signUp($email, $name, $password)
    {
        if ($email === null) {
            throw new \RuntimeException('Email required !');
        }

        if ($name === null) {
            throw new \RuntimeException('Name required !');
        }

        if ($password === null) {
            throw new \RuntimeException('Password required !');
        }

        $user = new User();

        $user->email = $email;
        $user->password = Hash::make($password);
        $user->name = $name;

        $user->save();

        Auth::login($user);

        event(new Registered($user));
    }
}
