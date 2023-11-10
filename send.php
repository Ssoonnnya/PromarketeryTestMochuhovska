<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $phone = test_input($_POST["phone"]);

    $data = array(
        'name' => $name,
        'email' => $email,
        'phone' => $phone
    );

    $jsonData = file_get_contents('data.json');
    $existingData = json_decode($jsonData, true);

    $existingData[] = $data;

    file_put_contents('data.json', json_encode($existingData));

    echo "Дані збережено!";
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
