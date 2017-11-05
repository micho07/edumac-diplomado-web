
<?php
    $name = $_POST ["formName"];
    $tel = $_POST ["formTel"];
    $email = $_POST ["formEmail"];
    $url = $_POST ["formUrl"];
    $gender = $_POST ["formGender"];
    $hobbieRun = $_POST ["formRun"];
    $hobbieRead = $_POST ["formRead"];
    $hobbieSwim = $_POST ["formSwim"];
    $nationality = $_POST ["formNationality"];
    $message = $_POST ["formMessage"];

    $customMessage = "Hola, mi nombre es " . $name . " y mi telefono es " . $tel . ".";

    echo $customMessage;
    ?>