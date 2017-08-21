<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css"> -->
    </head>
    <body>
        <?php
            $to = $_POST['mail'];
            $subject = "NAB Details";
            $msg = $_POST['bodymessage'];
            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // More headers
            $headers .= 'From: Jason <jasoncobalagi@gmail.com>' . "\r\n";
            // $headers .= 'Cc: yhngun@gmail.com' . "\r\n";
            // SEND IT !
            if (mail($to, $subject, $msg, $headers)) {
                echo "<h1> Email telah berhasil dikirim ke $to </h1><br>";
            }
        ?>
    </body>
</html>