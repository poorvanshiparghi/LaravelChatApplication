<!DOCTYPE html>
<html>
<head>
    <title>Laravel Chat Application</title>
    <link rel="icon" href="/images/chat_favicon.png"/>
    <link rel="stylesheet" href="/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

</head>
<body class="home_body">
    <div>
        <h1>Welcome to the Laravel Chat Application</h1>
        
        <form id="myForm" action="/submit-form" method="POST">
            <button type="submit" class="start_chat" id="start_chat">Start Chatting</button>
        </form>
    </div>
</body>
</html>
<script>
$(document).ready(function() {
    $("#myForm").submit(function(e) {
        e.preventDefault();
        window.location.href = "/index";
    });
});
</script>
