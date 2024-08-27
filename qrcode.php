<?php
require_once 'connection.php';
require_once 'phpqrcode/qrlib.php';

$path = 'images/';
$qrcode = $path . time() . ".png";
$qrimage = time() . ".png";

if (isset($_POST['sbt-btn'])) {
    $qrtext = mysqli_real_escape_string($connection, $_POST['qrtext']);
    
    $query = "INSERT INTO qrcode (qrtext, qrimage) VALUES ('$qrtext', '$qrimage')";
    $result = mysqli_query($connection, $query);

    if ($result) {
        echo "<script>alert('Data saved successfully');</script>";
    } else {
        echo "<script>alert('Error saving data');</script>";
    }

    QRcode::png($qrtext, $qrcode, 'H', 4, 4);
    echo "<img src='" . $qrcode . "'>";
} else {
    echo "<script>alert('No data received');</script>";
}
?>
