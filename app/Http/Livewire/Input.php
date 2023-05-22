<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class Input extends Component
{
    public $message;

    public function send()
    {
        $user_id = auth()->user()->id;

        $message = new Message();

        if($this->message == null){
            return;
        }

        $message->message = $this->message;
        $message->user_id = $user_id;

        try {
            $message->save();
        }catch (\RuntimeException $e){
            throw new $e;
        }

        $this->message = '';

    }

    public function render()
    {
        return view('livewire.input')->layout('index');
    }
}
