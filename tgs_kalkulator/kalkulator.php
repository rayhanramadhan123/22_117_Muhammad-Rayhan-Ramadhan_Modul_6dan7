<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CALCULATOR</title>
    <link rel="stylesheet" href="tampilan.css">
  </head>
  <body>
    <div class="kalkulator">
      <h2 class="judul" style="padding: 0px 105px">
          Kalkulator
      </h2>

<?php
        if(isset($_POST['hitung'])){
            $angka1 = $_POST['angka1'];
            $angka2 = $_POST['angka2'];
            $hasil = "";
            $operasi = $_POST['operasi'];
            switch ($operasi){
                case 'tambah' :
                    $hasil = $angka1 + $angka2;
                    break;
                case 'kurang' :
                    $hasil = $angka1 - $angka2;
                    break;
                case 'kali' :
                    $hasil = $angka1 * $angka2;
                    break;
                case 'bagi' :
                    $hasil = $angka1 / $angka2;
                    break;
            }
        }
    ?>

    
      <form method="post">
          <input type="text" name="angka1" class="bilangan1" autocomplete="off" placeholder="Masukkan angka ">
          <input type="text" name="angka2" class="bilangan2" autocomplete="off" placeholder="Masukkan angka ">
          <select name="operasi" class="oprs">
              <option value=""></option>
              <option value="tambah">+</option>
              <option value="kurang">-</option>
              <option value="kali">x</option>
              <option value="bagi">/</option>
          </select>
          <input type="submit" name="hitung" value="hitung" class="tombol">
      </form>
      <input type="text" name="hasil" value="<?= $hasil; ?>" class="hasil">
    </div>
  </body>
</html>