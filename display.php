<?php
$file = "data.json";

if (file_exists($file)) {
    $data = json_decode(file_get_contents($file), true);

    foreach ($data as $user) {
        echo "First Name: " . $user['firstname'] . "<br>";
        echo "Last Name: " . $user['lastname'] . "<br>";
        echo "Email: " . $user['email'] . "<br>";
        echo "Password: " . $user['password'] . "<br><br>";
    }
} else {
    echo "No data found";
}
?>
