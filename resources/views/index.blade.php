<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Laravel Chat Application</title>
    <link rel="icon" href="/images/favicon.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- JavaScript -->
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.js"></script>
    <!-- End JavaScript -->

    <!-- CSS -->
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.css" />
    <!-- End CSS -->

</head>
<body class="index_body">
    <div class="chat">
        <div class="top">
            <img src="<?php echo $_GET['avatar'];?>" height="80px" width="80px" alt="Avatar">
            <div>
                <p><?php echo $_GET['name'];?></p>
                <small>Online</small>
            </div>
        </div>
        <div class="messages">
            @include('receive',['message' => '👋  Hey there! Welcome to Laravel chat application. 🤩😍🤑'])
        </div>
        <div class="bottom">
            <form>
                <input type="hidden" name="avatar" id="avatar" value="<?php echo $_GET['avatar'];?>">
                <div class="row">
                    <div class="col-sm-10">
                        <input type="text" name="message" id="message" placeholder="Message" autocomplete="off" class="myCustomCss">
                    </div>
                    <div class="col-sm-2">
                        <button type="submit"><i class="fa fa-paper-plane fa-lg"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
<script>
    const pusher = new Pusher('{{config('broadcasting.connections.pusher.key')}}',{cluster: 'us2'});
    const channel = pusher.subscribe('public');
    var avatar = '';
    if ($('#avatar').val() == '/images/user_1.gif') {
        avatar = '/images/user_1.jpg';
    } else {
        avatar = '/images/user_2.jpg';
    }
    var avatar2 = '';
    if ($('#avatar').val() == '/images/user_2.gif') {
        avatar2 = '/images/user_1.jpg';
    } else {
        avatar2 = '/images/user_2.jpg';
    }
    //Recieve message
    channel.bind('chat', function (data) {
        $.post("/receive", {
        _token:  '{{csrf_token()}}',
        message: data.message,
        avatar2: avatar2
        })
        .done(function (res) {
        $(".messages > .message").last().after(res);
        $(document).scrollTop($(document).height());
        });
    });


    //Broadcast message
    $("form").submit(function (event){
        event.preventDefault();
        
        $.ajax({
            url: "/broadcast?avatar=" + avatar,
            method: 'POST',
            headers: {
                'X-Socket-Id': pusher.connection.socket_id
            },
            data: {
                _token: '{{csrf_token()}}',
                message: $("form #message").val(),
                avatar: avatar
            }
        }).done(function (res){
            $(".messages > .message").last().after(res);
            $("form #message").val('');
            $(document).scrollTop($(document).height());
        });
    });
    $('#message').emojioneArea({
        pickerPosition: 'bottom'
    });
</script>
</html>