<?php

$kolona = $_POST['kolona'];
$order_by = $_POST['order_by'];

?>

<table class="table table-bordered" style="margin-top: 40px;">
    <thead>
        <tr class=" text-center">
            <th id="id" value="<?php
                                if ($order_by == 'asc') {
                                    echo 'desc';
                                } else {
                                    echo 'asc';
                                }
                                ?>">ID</th>
            <th id="naziv" value="<?php
                                    if ($order_by == 'asc') {
                                        echo 'desc';
                                    } else {
                                        echo 'asc';
                                    }
                                    ?>">Naziv</th>
            <th id="opis" value="<?php
                                    if ($order_by == 'asc') {
                                        echo 'desc';
                                    } else {
                                        echo 'asc';
                                    }
                                    ?>">Opis</th>
            <th id="cena" value="<?php
                                    if ($order_by == 'asc') {
                                        echo 'desc';
                                    } else {
                                        echo 'asc';
                                    }
                                    ?>">Cena</th>
            <th id="ime" value="<?php
                                if ($order_by == 'asc') {
                                    echo 'desc';
                                } else {
                                    echo 'asc';
                                }
                                ?>">Ime autora</th>
            <th id="prezime" value="<?php
                                    if ($order_by == 'asc') {
                                        echo 'desc';
                                    } else {
                                        echo 'asc';
                                    }
                                    ?>">Prezime autora</th>
        </tr>
    </thead>

    <tbody>
        <?php

        $query = "select kurs.id, kurs.naziv, kurs.opis, kurs.cena, autor.ime, autor.prezime from kurs kurs join autor autor on kurs.autor_id=autor.id order by " . $kolona . " " . $order_by . "";
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $db = "kursevi";
        $connection = new mysqli($hostname, $username, $password, $db) or die("Connect failed: %s\n" . $connection->error);
        $data = $connection->query($query);

        while ($red = mysqli_fetch_array($data)) :
        ?>
            <tr class="text-center">
                <td><?php echo $red['id']; ?></td>
                <td><?php echo $red['naziv'];  ?></td>
                <td><?php echo $red['opis'];  ?></td>
                <td><?php echo $red['cena'];  ?></td>
                <td><?php echo $red['ime']; ?></td>
                <td><?php echo $red['prezime']; ?></td>
            </tr>

        <?php endwhile; ?>

    </tbody>

</table>