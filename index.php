<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>ITEH Prvi Domaći</title>
</head>

<body>

    <a href="dodaj.php"><button class="btn btn-danger" style="width:300px; height:50px; border-radius:25px;
    margin-top:50px; margin-left: 850px;">Novi kurs</button></a>


    <div class="row row-cols-1 row-cols-md-3 g-4" style="margin-top: 5px;">

        <?php

        $query = "select kurs.id, kurs.naziv, kurs.opis, kurs.cena, autor.ime, autor.prezime from kurs kurs join autor autor on kurs.autor_id=autor.id";
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $db = "kursevi";
        $connection = new mysqli($hostname, $username, $password, $db) or die("Connect failed: %s\n" . $connection->error);
        $data = $connection->query($query);
        while ($red = mysqli_fetch_array($data)) :
        ?>

            <div class="card border-primary text-center" style="margin-right:20px; margin-left:150px; width: 380px;">
                <div class="card-body">
                    <h3 class="card-title"><?php echo $red['naziv']; ?></h3>
                    <h6 class="card-subtitle mb-2 text-muted">By: <?php echo $red['ime'] . " " . $red['prezime']; ?></h6>
                    <p class="card-text"><?php echo $red['opis'] ?></p>
                    <h5 class="card-subtitle mb-2">Price: <?php echo $red['cena'] ?> EUR</h5>
                    <a href="edit.php?id=<?php echo $red['id'] ?>"> <button type="button" class="btn btn-primary" name="button_edit">Edit</button></a>
                    <a href="delete.php?id=<?php echo $red['id'] ?>"> <button type="button" class="btn btn-danger" name="button_del">Delete</button></a>
                </div>
            </div>
        <?php endwhile; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>