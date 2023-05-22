<div>
    <div class="row sending">
        <div class="col">
            <textarea wire:model="message" name="" id="" cols="72" rows="1"></textarea>
        </div>
        <div class="col">
            <button class="sendBtn" wire:click="send({{auth()->user()->id ?? null}})">Send</button>
        </div>
    </div>
</div>
