<!DOCTYPE html>
<html>
<head>
    <title>Laravel Chat Application</title>

    <link rel="stylesheet" href="/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

</head>
<body class="home_body">
    <div>
        <h1>Welcome to the Laravel Chat Application</h1>
        <button class="start_chat" id="start_chat">Start Chatting</button>
    </div>
</body>
</html>
<script>
$(document).ready(function() {
  $("#start_chat").click(function() {
    $.ajax({
      url: "/PusherController/index",
      method: "POST",
    });
  });
});
</script>
