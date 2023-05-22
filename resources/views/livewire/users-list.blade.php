@if($auth === [])
    <div class="sign pl-5 mt-3 pb-2">
        <div class="row" style="font-size: 16px; cursor: pointer;">
            <div class="col" wire:click="showModalIn">
                Sign In
            </div>
            @if($showIn)
                <div class="modal" wire:click="showModalIn">
                    <div wire:click.stop class="modal_item">
                        @livewire('sign-in-modal')
                    </div>
                </div>
            @endif
            <div class="col" wire:click="showModalUp">
                Sign Up
            </div>
            @if($showUp)
                <div class="modal" wire:click="showModalUp">
                    <div wire:click.stop class="modal_item">
                        @livewire('sign-up-modal')
                    </div>
                </div>
            @endif
        </div>
    </div>
@endif


@if($auth !== [])
<div class="row authUserListItem">
    <div class="col-3 mt-2 mr-1">
        <img src="/storage/images/avatar.png" width="60" height="60" alt="">
    </div>
    <div class="col mt-3">
        <div class="row">
            <div class="col pl-0">
                {{$auth['name']}}
            </div>
            <div class="col pr-0" wire:click="signOut" style="cursor:pointer;">
                Sign Out
            </div>
        </div>
        <div class="row">
            <small>{{$auth['email']}}</small>
        </div>
    </div>
</div>
@endif

@foreach($users as $user)
        <div class="row userListItem">
            <div class="col-2 mt-2 mr-1">
                <img src="/storage/images/avatar.png" width="30" height="30" alt="">
            </div>
            <div class="col mt-1">
                <div class="row">
                    {{$user['name']}}
                </div>
                <div class="row">
                    <small>{{$user['email']}}</small>
                </div>
            </div>
            @if($auth !== [])
                <div class="col">
                    <div class="row">
                        <span class="openChat" wire:click="openChat({{$user['id']}})">Send Message</span>
                    </div>
                </div>
            @endif
        </div>
@endforeach


