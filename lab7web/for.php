<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOR</title>
</head>
<body>
    <h2>Perulangan For</h2>
    <?php
    echo "perulangan 1 sampai 10 <br />";
    for ($i=1; $i<=10; $i++) {
        echo "perulangan ke:" . $i . '<br />';
    }

    echo "perulangan menurun dari 10 ke 1 <br />";
    for ($i=10; $i>=1; $i--) {
        echo "perulangan ke: " . $i . '<br />';
    }
    ?>
</body>
</html>