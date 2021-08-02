<html>
<?php
    $message_sent = false;
    if(isset($_POST['user_email'])&& $_POST['user_email'] != ''){
        if(filter_var($_POST['user_email'],FILTER_VALIDATE_EMAIL)&& $_POST['user_message']!=''){
            $userName = $_POST['user_name'];
            $userEmail = $_POST['user_email'];
            $phoneNumer = $_POST['phone_number'];
            $userMessage = $_POST['user_message'];
            $lastName = $_POST['user_last'];
            $to = "devdavey@devdavey.com";
            $subject = "message from site";
            $body = "";
            $body .= "From: ".$userName. "\r\n";
            $body .= "Company: ".$lastName. "\r\n";
            $body .= "Phone: ".$phoneNumer. "\r\n";
            $body .= "Email: ".$userEmail. "\r\n";
            $body .= "Message: ".$userMessage. "\r\n";
            mail($to,$subject,$body);

            $message_sent = true;
        }
    }
?>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
</head> 
<body>
<?php
if($message_sent):
?>
<div class="container">
    <div class="row mt-5">
        <div class="col text-center">
        <h5 class="">Message Sent</h5>
        <a class="btn btn-outline-primary" href="https://devdavey.com">Return Home</a>
        </div>
    </div>
</div>    


<?php
else:
?>
<div class="row">
    <div class="col text-center">
<h5>Message Not Sent Try Again Please!</h5>
<a class="btn btn-outline-primary" href="https://devdavey.com">Return Home</a>
</div>
</div>
<?php
endif;
?>

</body>
</html>