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
    <div class="container">

        <h2 class="text-center" style="margin-top:15px;">Sortiranje kurseva</h2>

        <div id="tabela-sort">
        </div>

        <table class="table table-bordered" id="tabela-pocetna" style="margin-top: 40px;">
            <thead>
                <tr class="text-center">
                    <th id="id" value="desc">ID</th>
                    <th id="naziv" value="desc">Naziv</th>
                    <th id="opis" value="desc">Opis</th>
                    <th id="cena" value="desc">Cena</th>
                    <th id="ime" value="desc">Ime autora</th>
                    <th id="prezime" value="desc">Prezime autora</th>
                </tr>
            </thead>

            <tbody>
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

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="jquery.js"></script>
</body>

</html>