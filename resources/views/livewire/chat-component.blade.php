<div wire:poll.1000ms="refresh">
    <div class="row chatMessages" id="chatWidow">
        <div class="col">
            @foreach($messages as $key => $message)
                @if($message['user_id'] !== $auth)
                    <div class="row p-2">
                        <div class="col-1">
                            <img src="/storage/images/avatar.png" width="30" height="30" alt="">
                        </div>
                        <div class="col-2 p-0 ml-3">
                            <div class="row">
                                <small>{{$message['name']}}:</small>
                            </div>
                            <div class="row">
                                <small>{{$message['created_at']}}</small>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="messageRecipient">
                            {{$message['message']}}
                        </div>
                    </div>
                @endif
                @if($message['user_id'] === $auth)
                    <div class="row p-2">
                        <div class="col"></div>
                        <div class="col-2" style="margin-right: -50px;">
                            <div class="row">
                                <small>:{{$message['name']}}</small>
                            </div>
                            <div class="row">
                                <small>{{$message['created_at']}}</small>
                            </div>
                        </div>
                        <div class="col-1">
                            <img src="/storage/images/avatar.png" width="30" height="30" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col"></div>
                        <div class="row">
                            <div class="col message">
                                {{$message['message']}}
                            </div>
                        </div>
                    </div>
                    @endif
            @endforeach
        </div>
    </div>
    <div id="lastMessage"></div>
</div>
<script>
    document.getElementById('lastMessage').scrollIntoView()
</script>
