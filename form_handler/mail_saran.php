<?php
    // FIELDS ARAY
    $field = array(
        'name', 
        'email',
        'phone',
        'handphone',
        'komentar'
    );
    $error = false;
    foreach ($field as $f) {
        if (!isset($_POST[$f]) || $_POST[$f]==="") {
            $error = true;
        }
    }

    if ($error) {
        echo "<p align='center'>";
        echo "Masukan Data Dengan benar!";
        echo "</p>";
    }
    else {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $handphone = $_POST['handphone'];

        $to = 'cs@sinarmas-am.co.id';
        $from = $_POST['email'];
        $subject = "Comments from " . $name . '(' . $phone . '/' . $handphone . ')';
        $msg = $_POST['komentar'];
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: '. $name . '<'. $from .'>' . "\r\n";

        if (mail($to, $subject, $msg, $headers)) {
            echo "<h1> Email telah berhasil dikirim ke $to </h1><br>";
        }
    }
?>

