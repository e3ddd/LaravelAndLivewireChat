<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignUpRequest;
use App\Services\SignService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignController extends Controller
{
    public function signIn(Request $request)
    {
    /** @var SignService $loginService */
    $loginService = app(SignService::class);
    $loginService->signIn($request->email, $request->password, $request->remember);
    return '/';
    }

    public function signOut(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        return redirect('/livewire');
    }

    /**
     * Registration
     */
    public function signUp(SignUpRequest $request)
    {
        /** @var SignService $registrationService */
        $registrationService = app(SignService::class);
        $registrationService->signUp($request->email, $request->name, $request->password, $request->confirmPassword);
    }

    public function checkUser()
    {
        if(Auth::check()){
            return true;
        }
    }
}
