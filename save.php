<?php
$file = "data.json";

// Get form data
$data = [
    "firstname" => $_POST['firstname'],
    "lastname" => $_POST['lastname'],
    "email" => $_POST['email'],
    "password" => $_POST['password']
];

// Read existing data
if (file_exists($file)) {
    $current_data = json_decode(file_get_contents($file), true);
} else {
    $current_data = [];
}

// Add new data
$current_data[] = $data;

// Save back to file
file_put_contents($file, json_encode($current_data, JSON_PRETTY_PRINT));

echo "Data saved successfully!";
?>
