<!DOCTYPE html>
<html>
<head>
    <title>Laravel Chat Application</title>
    <link rel="icon" href="/images/favicon.png"/>
    <link rel="stylesheet" href="/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

</head>
<body class="home_body">
    <div>
        
        <form id="myForm" action="javascript:void(0);" method="POST">
            <button type="submit" class="sender">First User</button>
            <button type="submit" class="receiver">Second User</button>
        </form>
    </div>
</body>
</html>
<script>
$(document).ready(function() {
    $(".sender").click(function() {
        var avatar = '/images/user_1.gif';
        myWindow=window.open("/index?name=Jessica&avatar=" + avatar,'',"width=" + screen.width / 2 + ",height=" + screen.height)
    });
    $(".receiver").click(function() {
        var avatar = '/images/user_2.gif';
        myWindow=window.open("/index?name=Jose&avatar=" + avatar,'',"width=" + screen.width / 2 + ",height=" + screen.height)
    });
});
</script>
