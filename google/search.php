<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $value = $_POST["searchValue"]; 

    if (!$value) {
        die("Can't find the search value");
    }

    $url = urlencode($value); 
    $googleurl = "https://www.google.com/search?q=" . $url;

    echo "Redirecting...........";
    header("Location: $googleurl"); 
    exit();
}
?>
