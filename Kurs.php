<?php

class Kurs
{
    public $id;
    public $naziv;
    public $opis;
    public $cena;
    public $autor_id;

    public function dodajKurs($naziv, $opis, $cena, $autor_id)
    {
        $connection = new mysqli("localhost", "root", "", "kursevi") or die("Connect failed: %s\n" . $connection->error);
        $query = "insert into kurs values (NULL, '$naziv', '$opis', '$cena', '$autor_id')";

        if ($connection->query($query)) {
            $connection->close();
            return true;
        } else {
            echo $query;
            $connection->close();
            return false;
        }
    }
}
