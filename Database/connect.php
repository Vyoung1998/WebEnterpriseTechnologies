<?php
//connect here and print
$conn = mysqli_connect('82.197.82.93', 'u328920814_vicyoung', 'Vicyoung1998', 'u328920814_Victoria_Young' );

if(!$conn) {
    echo "Error: unable to connect to database:" . mysqli_connect_error();
    return  $conn;
} else {
    echo "Connected <br>";
}
?>


