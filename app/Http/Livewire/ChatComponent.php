<?php

namespace App\Http\Livewire;

use App\Models\Message;
use App\Models\User;
use Carbon\Carbon;
use Carbon\CarbonImmutable;
use Livewire\Component;

class ChatComponent extends Component
{
    public $messages;

    public function mount()
    {
        $allMessages = Message::orderBy('created_at')->take(500)->get();

        $this->messages = collect([]);
        if($allMessages->isNotEmpty()){
            foreach ($allMessages as $message){
                $time = $message->created_at;
                $this->messages->push([
                    'id' => $message->id,
                    'name' => User::find($message->user_id)->name,
                    'user_id' => $message->user_id,
                    'message' => $message->message,
                    'created_at' => $time->format('H:i:s'),
                ]);
            }
        }
    }

    public function refresh()
    {
        $current = CarbonImmutable::now();

        $newMessages = Message::where('created_at', '>', $current->add(-1, 'seconds'))->get();

        if($newMessages->isEmpty()){
            return;
        }

        foreach ($newMessages as $key => $item){
                $this->messages->push([
                    'id' => $item->id,
                    'name' => User::find($item->user_id)->name,
                    'user_id' => $item->user_id,
                    'message' => $item->message,
                    'created_at' => $item->created_at->format('H:i:s'),
                ]);
        }


    }

    public function render()
    {
        $user_id = '';
        if(auth()->check()){
            $user_id = auth()->user()->id;
        }
        return view('livewire.chat-component', ['messages' => $this->messages, 'auth' => $user_id]);
    }
}
