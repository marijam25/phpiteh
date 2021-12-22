<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <form method="post" class="text-center" style="width: 500px; margin-left:650px; margin-top:50px;">
        <div class="mb-3">
            <label for="naziv" class="form-label">Naziv</label>
            <input type="text" class="form-control" name="naziv" id="naziv">
        </div>
        <div class="mb-3">
            <label for="opis" class="form-label">Opis</label>
            <input type="text" class="form-control" name="opis" id="opis">
        </div>
        <div class="mb-3">
            <label for="cena" class="form-label">Cena</label>
            <input type="number" class="form-control" name="cena" id="cena">
        </div>
        <div class="form-group mb-3">
            <label for="autor" class="form-label">Autor</label>
            <select class="form-select" name="autor" id="autor">
                <?php
                $query = "select * from autor";
                $hostname = "localhost";
                $username = "root";
                $password = "";
                $db = "kursevi";
                $connection = new mysqli($hostname, $username, $password, $db) or die("Connect failed: %s\n" . $connection->error);
                $data = $connection->query($query);

                while ($red = mysqli_fetch_array($data)) :
                ?>
                    <option class="text-center" value="<?php echo $red['id']; ?>"><?php echo $red['ime'] . " " . $red['prezime']; ?></option>
                <?php endwhile; ?>
            </select>
        </div>
        <button type="submit" name="sacuvaj" class="btn btn-primary">Sacuvaj</button>
    </form>

    <?php
    require 'Kurs.php';

    if (isset($_POST['sacuvaj'])) {

        $kurs = new Kurs();
        if ($kurs->dodajKurs($_POST['naziv'], $_POST['opis'], $_POST['cena'], $_POST['autor'])) {
            echo "<script type='text/javascript'>alert('Kurs sacuvan u bazi!'); location='index.php'</script>";
        } else {
            echo "<script type='text/javascript'>alert('Kurs nije sacuvan!');";
        }
    }
    ?>


</body>

</html>