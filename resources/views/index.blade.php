<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <style>
        body {
            background: #dff2ff;
        }

        ::-webkit-scrollbar {
            width: 0px;
            background: transparent;
        }

        textarea:focus, input:focus{
            outline: none;
        }

        input:-webkit-autofill {
            color: #ffffff !important;
        }

        .openChat {
            padding-top: 5px;
            font-size: 14px;
        }

        .openChat:hover {
            transition: 0.5s;
            text-decoration: underline;
        }

        .chat {
            background: #ffff;
            border: 1px solid silver;
            box-shadow: 1px 1px 1px;
            min-width: 500px;
            height: 600px;
            margin-top: 50px;
            overflow-y: auto;
        }

        .sendField {
            margin-top: 15px;
        }

        .userList {
            background: #363d44;
            color: #fff;
            margin-top: 52px;
            box-shadow: 2px 2px 2px;
        }

        .sign {
            border-bottom: 1px solid #ffff;
        }

        .userListItem {
            margin-left: 10px;
            margin-top: 10px;
        }

        .sendBtn {
            margin-left: -15%;
            background: #ffff;
            padding: 3px 20px 2px 20px;
            border: 2px solid #0f6674;
            color: #0f6674;
            border-radius: 5px;
        }

        .sendBtn:hover {
            cursor: pointer;
            background: #0f6674;
            color: #fff;
            border: none;
            transition: 0.5s;
        }

        .message {
            margin-right: 50px;
            min-width: 20px;
            padding: 5px;
            border-radius: 20px;
            border: 1px solid silver;
            max-width: 500px;
        }

        .messageRecipient{
            min-width: 20px;
            padding: 5px;
            border-radius: 20px;
            border: 1px solid silver;
            margin-left: 50px;
            max-width: 500px;
        }

        .modal {
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            z-index: 2;
            background: rgba(0,0,0,0.5);
            position: fixed;
            display: flex;
        }

        .modal_item {
            padding: 30px;
            margin: auto;
            background: white;
            border-radius: 12px;
            min-height: 50px;
            min-width: 300px;
        }

        button {
            background: #ffff;
            padding: 5px 20px 5px 20px;
            border: 2px solid #0f6674;
            color: #0f6674;
            border-radius: 5px;
        }

        button:hover {
            cursor: pointer;
            background: #0f6674;
            color: #fff;
            transition: 0.5s;
        }

        span {
            cursor: pointer;
        }

    </style>
    @livewireStyles
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-4">
        </div>
        <div class="col-4 chat" id="chatWidow">
            @livewire('chat-component')
        </div>
        <div class="col-2 userList">
            @livewire('users-list')
        </div>
    </div>
    <div class="row sendField">
        <div class="col ml-2 d-flex justify-content-center">
            @livewire('input')
        </div>
    </div>
</div>
@livewireScripts
</body>
</html>
