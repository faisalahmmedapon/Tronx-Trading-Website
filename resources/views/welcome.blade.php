<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @vite(['resources/css/app.css' , 'resources/js/app.js'])
    <title>Live Chat</title>
</head>
<body>
<div class="container">
    <form action="#" method="post" id="message_form">
        <div class="row">
            <input type="hidden" id="auth_user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
            <div class="col-md-4 col-lg-4">
                <div class="show_chat_user">
                    <select class="form-select" multiple aria-label="multiple select example">
                        @foreach($users as $user)
                            <option class="form-control" name="username" id="username"
                                    value="{{$user->name}}">{{$user->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-8 col-lg-8">
                <div class="box box-primary direct-chat direct-chat-primary">
                    <div class=" chat-header d-flex justify-content-between">
                        <p>Chat With <span id="chat_with_user_name">  </span></p>
                        <p><span
                                id="auth_user_name"> My Name is: {{\Illuminate\Support\Facades\Auth::user()->name}} </span>
                        </p>
                    </div>
                    <div class="box-body">
{{--                        <h2>Chat Messages</h2>--}}



                        <div class="direct-chat-messages" id="messages">

                        </div>
                        <div class="" id="recent_messages">

                        </div>
                    </div>
                    <div class="box-footer">
                        <div class="input-group">
                            <input type="text" name="message" id="message" placeholder="Type Message ..."
                                      class="form-control"/>
                            <span class="input-group-btn">
                                <button type="submit" id="send_message" class="btn btn-primary text-black">Send</button>
                          </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
</body>
</html>
