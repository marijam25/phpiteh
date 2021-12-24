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
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div style="margin-left: 850px;">
            <a class="navbar-brand" href="index.php">Kursevi</a>
            <a class="navbar-brand" href="pretraga.php">Pretraga</a>
            <a class="navbar-brand" href="sortiranje.php">Sortiranje</a>
        </div>
    </nav>

    <div class="kurs-pretraga" style="margin-top: 30px; margin-left: 650px;">
        <label class="mx-3">Unesite kriterijum pretrage: </label>
        <input type="text" name="input-pretraga" id="input-pretraga">
    </div>

    <div id="rezultatPretrage">

    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="jquery.js"></script>
</body>

</html>