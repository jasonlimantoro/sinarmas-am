<?php
    // FIELDS ARAY
    $field = array(
        'name', 
        'email',
        'phone',
        'handphone',
        'kritik'
    );
    $error = false;
    foreach ($field as $f) {
        if (!isset($_POST[$f]) || $_POST[$f]==="") {
            $error = true;

        }

    }

    if ($error) {
        echo "<p align='center'>";
        echo "Tidak ada data tersedia";
        echo "<br>";
        echo "Masukan Data Dengan benar!";
        echo "</p>";
    }
    else {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $handphone = $_POST['handphone'];
        $kritik = $_POST['kritik'];

        $var_array = array($name, $email, $phone, $handphone, $kritik);

    }
?>

