<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8">
    <title>Chat Laravel Pusher | Poorvanshi's App</title>
    <link rel="icon" href="https://assets.edlin.app/favicon/favicon.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- JavaScript -->
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- End JavaScript -->

    <!-- CSS -->
    <link rel="stylesheet" href="/style.css">
    <!-- End CSS -->

</head>
<body>
    <div class="chat">
        <div class="top">
            <img src="/storage/app/public/IMG_5884.jpg" alt="Avatar">
            <div>
                <p>Poorvanshi</p>
                <small>Online</small>
            </div>
        </div>
        <div class="messages">
            @include('receive',['message' => 'Hey there!'])
        </div>
        <div class="bottom">
            <form>
                <input type="text" name="message" id="message" placeholder="Enter message..." autocomplete="off">
                <button type="submit"></button>
            </form>
        </div>
    </div>
</body>
<script>
    const pusher = new Pusher('{{config('broadcasting.connections.pusher.key')}}',{cluster: 'eu'});
    const channel = pusher.subscribe('public');

    //Recieve message
    channel.bind('chat', function (data){
        $.post("/receive",{
            _token: '{{csrf_token()}}',
            message: data.message,
        }).done(function (res){
            console.log(res);
            $(".message > .message").last().after(res);
            $(document).scrollTop($(document).height());
        });
    });

    //Broadcast message
    $("form").submit(function (event){
        event.preventDefault();

        $.ajax({
            url: "/broadcast",
            method: 'POST',
            headers: {
                'X-Socket-Id': pusher.connection.socket_id
            },
            data: {
                _token: '{{csrf_token()}}',
                message: $("form #message").val(),
            }
        }).done(function (res){
            $(".messages > .message").last().after(res);
            message: $("form #message").val('');
            $(document).scrollTop($(document).height());
        });
    });
</script>
</html>