<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kondisi IF</title>
</head>
<body>
    <h2>Kondisi IF</h2>
    <?php
    $nama_hari = date("1");
    if ($nama_hari == "sunday") {
        echo "Mingggu";
    } elseif ($nama_hari == "Monday") {
        echo "Senin";
    } else {
        echo "Selasa";
    }
    ?>
</body>
</html>