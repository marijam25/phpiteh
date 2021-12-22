<?php

$connection = new mysqli("localhost", "root", "", "kursevi") or die("Connect failed: %s\n" . $connection->error);
$query = "delete from kurs where id=" . $_GET['id'];

if ($connection->query($query)) {
    echo "<script type='text/javascript'>alert('Kurs obrisan!'); location='index.php'</script>";
} else {
    echo "<script type='text/javascript'>alert('Kurs nije obrisan!'); ";
}
