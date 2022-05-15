# Lab7Web
**Nama	 : Siti Latifah** <br>
**NIM	   : 312010321** <br>
**Kelas	 : TI.20.A2** <br>
**Matkul : Pemrograman Web** <br>

# BELAJAR PHP
## Instal XAMPP
1. Unduh XAMPP dari https://www.apachefriends.org/download.html
2. Uji coba apakah server sudah berkerja dengan baik
http://127.0.0.1 atau http://localhost
3. Dokumen Website
Semua file website tempatkan di direktori: \xampp\htdocs\

## MEMULAI PHP
Buat folder lab7_php_dasar pada root directory web server (c:\xampp\htdocs)
![Screenshot (277)](https://user-images.githubusercontent.com/73010098/168457906-fd446589-0553-4de0-9511-803dc61c79e2.png)

Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL:
http://localhost/lab7_php_dasar/
![Screenshot (241)](https://user-images.githubusercontent.com/73010098/168457918-67354c15-7295-48eb-a0c7-45986f3edcf9.png)

## PHP DASAR
Buat file baru dengan nama php_dasar.php pada directory tersebut. Kemudian buat
kode seperti berikut.
``` php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
        echo "Hello World";
    ?><br>

<!-- Variabel PHP  -->
<h1>Menggunakan Variabel</h1>
<?php
    $nim = "312010321";
    $nama = 'Siti Latifah';
    echo "NIM : " . $nim . "<br>";
    echo "Nama : $nama";
?>

</body>
</html>
```
## OUTPUT
Kemudian untuk mengakses hasilnya melalui URL:
http://localhost/lab7_php_dasar/php_dasar.php
![Screenshot (259)](https://user-images.githubusercontent.com/73010098/168458076-ab1825ac-15b4-4a4f-808c-a7c8f283d630.png)

## Predefine Variable 
Buat File PHP dengan nama latihan2.php 
``` php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar 2</title>
</head>
<body>
    <!-- Predefine variabel -->
    <h1>Predefine Variabel</h1>
    <?php
        echo 'Selamat Datang ' . @$_GET['nama'];
    ?>
</body>
</html>
```

## OUTPUT
Kemudian untuk mengakses hasilnya melalui URL:
http://localhost/lab7_php_dasar/Lab7Web/lab7web/latihan%202.php?nama=latifah
![Screenshot (279)](https://user-images.githubusercontent.com/73010098/168458339-f2eba4fe-5987-46e3-8537-047d89fe1f8e.png)

## Membuat Form Input
``` php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>
<body>
<h2>Form Input</h2>
<form method="post">
    <label>Nama: </label> 
    <input type="text" name="nama">
    <input type="submit" value="kirim">
</form>

<?php
echo 'Selamat Datang ' . @$_POST['nama'];
?>
</body>
</html>
```

## OUTPUT
Kemudian Masukan Nama
![Screenshot (263)](https://user-images.githubusercontent.com/73010098/168458394-bf709e51-5a7d-4693-865b-4014fee681e4.png)

## OPERATOR PADA PHP
``` php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator</title>
</head>
<body>
    <h2>Operator</h2>
    <?php
    $gaji = 1000000;
    $pajak = 0.1;
    $thp = $gaji - ($gaji*$pajak);
    echo "Gaji sebelum pajak = Rp. $gaji <br>";
    echo "gaji yang dibawa pulang = Rp. $thp";
    ?>
    
</body>
</html>
```

## OUTPUT
![Screenshot (264)](https://user-images.githubusercontent.com/73010098/168458464-4499d659-b5cd-441a-8b19-3ec89ddf701a.png)

## KONDISI IF
``` php
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
```
## OUTPUT
![Screenshot (265)](https://user-images.githubusercontent.com/73010098/168458505-b0e061d9-8a08-4306-a8c8-2e1f7d87920e.png)

## KONDISI SWITCH
``` php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <h2>Kondisi Switch</h2>
    <?php
    $nama_hari = date("1");
    switch ($nama_hari) {
        case "sunday";
            echo "Minggu";
            break;
        case "Monday";
            echo "Senin";
            break;
        case "Tuesday";
            echo "Selasa";
            break;
        default:
        echo "Sabtu";
    }
    ?>
    
</body>
</html>
```
## OUTPUT
![Screenshot (266)](https://user-images.githubusercontent.com/73010098/168458545-eba8d90a-2ffa-4c10-aaa9-54e9485e6896.png)

## PERULANGAN FOR
``` php
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
```
## OUTPUT
![Screenshot (267)](https://user-images.githubusercontent.com/73010098/168458583-e07be35e-56cc-4256-ba20-93388f38d07e.png)

## PERULANGAN WHILE
``` php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WHILE</title>
</head>
<body>
    <h2>perulangan While</h2>
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    $i=1;
    while ($i<=10) {
        echo "perulangan ke: " . $i . '<br />';
        $i++;
    }
    ?>
</body>
</html>
```
## OUTPUT
![Screenshot (268)](https://user-images.githubusercontent.com/73010098/168458618-7cd4da1f-78ce-4255-812b-323e6a9fadb5.png)

## PERULANGAN DOWHILE
``` php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOWHILE</title>
</head>
<body>
    <h2>Perulangan Dowhile</h2>
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    $i=1;
    do {
        echo "perulangan ke: " . $i . '<br />';
        $i++;
    } while ($i<=10);
    ?>
</body>
</html>
```
## OUTPUT
![Screenshot (269)](https://user-images.githubusercontent.com/73010098/168458658-ab123525-7047-41d1-a63b-ebad6be5111b.png)

## TUGAS
![Screenshot (270)](https://user-images.githubusercontent.com/73010098/168458673-1cdeecb8-b93d-4995-9535-4264ca6e5235.png)

Buatlah File PHP dengan nama FORM INPUT DATA.php seperti contoh dibawah ini :
``` php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form input data</title>
</head>
<body>
    <h2>Data Diri</h2>
    <form method="POST">
        <fieldset>
        <legend>Form Input data</legend>
        <p>
            <label>Nama :</label>
            <input type="text" name="nama" placeholder="Masukan Nama " />
        </p>
        <p>
            <label>Tanggal Lahir :</label>
            <input type="date" name="tgl_lahir" />
        </p>
        <p>
            <label>Pekerjaan :</label>
            <select name="pekerjaan">
                <option value="Web Developer">Web Developer</option>
                <option value="Karyawan Swasta">Karyawan Swasta</option>
                <option value="Guru">Guru</option>
                <option value="Dan Lainnya">Dan Lainnya</option>
            </select>
        </p>
        <p>
            <label>Gaji :</label>
            <select name="gaji">
                <option value="2.000.000 s/d 3.500.000">2.000.000 s/d 3.500.000</option>
                <option value="3.500.000 s/d 7.000.000">3.500.000 s/d 7.000.000</option>
                <option value="7.000.000 s/d 10.000.000">7.000.000 s/d 10.000.000</option>
                <option value="Dan Lainnya">Dan Lainnya</option>
            </select>
        </p>
        <p>
            <input type="submit" name="submit" value="Kirim" />
        </p>
        </fieldset>
    </form>

    <fieldset>
    <legend>Hasil</legend>
    <?php
    $nama = @$_POST['nama'];
    $tgl_lahir = @$_POST['tgl_lahir'];
    $pekerjaan = @$_POST['pekerjaan'];
    $gaji = @$_POST['gaji'];

    $tanggal_lahir = new DateTime(@$_POST['tgl_lahir']);
    $sekarang = new DateTime("today");
    if ($tanggal_lahir > $sekarang) { 
    $umur = "0";
    }
    $umur = $sekarang->diff($tanggal_lahir)->y;
    
    echo "Nama = $nama <br>";
    echo "Umur = $umur tahun <br>";
    echo "Pekerjaan = $pekerjaan <br>";
    echo "Gaji = $gaji <br>";
    ?>
    </fieldset>
</body>
</html>
```
## OUTPUT
Lalu Isi Form dibawah ini
![Screenshot (275)](https://user-images.githubusercontent.com/73010098/168458751-e2abd609-1277-422c-84a5-30a875c90225.png)

Maka akan Muncul hasil Seperti Dibawah ini
![Screenshot (274)](https://user-images.githubusercontent.com/73010098/168458808-d67c79da-d841-46db-8e62-ea3c996a0087.png)







