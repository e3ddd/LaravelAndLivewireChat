<?php

namespace App\Http\Livewire;

use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UsersList extends Component
{
    public $showUp = false;
    public $showIn = false;

    public function showModalIn()
    {
        $this->showIn = !$this->showIn;
    }

    public function showModalUp()
    {
        $this->showUp = !$this->showUp;
    }

    public function signOut()
    {
        return redirect('/signOut');
    }


    public function render()
    {
        $users = User::all();
        $newUsers = [];
        $authUser = [];
        foreach ($users as $user){
            if(isset(\auth()->user()->id)){
                if($user['id'] !== \auth()->user()->id){
                    $newUsers[] = [
                        'id' => $user['id'],
                        'email' => $user['email'],
                        'name' => $user['name'],
                    ];
                }else{
                    $authUser = [
                        'id' => $user['id'],
                        'email' => $user['email'],
                        'name' => $user['name'],
                    ];
                }
            }else{
                $newUsers[] = [
                    'id' => $user['id'],
                    'email' => $user['email'],
                    'name' => $user['name'],
                ];
            }
        }

        return view('livewire.users-list', ['users' => $newUsers, 'auth' => $authUser])->layout('index');
    }
}
