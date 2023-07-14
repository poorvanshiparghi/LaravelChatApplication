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
        
        <form id="myForm" action="/submit-form" method="POST">
            <button type="submit" class="sender">Sender</button>
            <button type="submit" class="receiver">Receiver</button>
        </form>
    </div>
</body>
</html>
<script>
$(document).ready(function() {
    $("#myForm").submit(function(e) {
        e.preventDefault();
        // window.location.href = "/index";
        // window.open("/index", "_blank");
        myWindow=window.open("/index",'','width=700,height=500')
		//myWindow.document.write("<p>This is 'myWindow'</p>")
		myWindow.focus()
    });
});
</script>
