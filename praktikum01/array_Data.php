<?php
$ns1 = ['id'=>1,'nim'=>'020304','uts'=>81,'uas'=>83,'tugas'=>85];
$ns2 = ['id'=>2,'nim'=>'01313','uts'=>67,'uas'=>65,'tugas'=>99];
$ns3 = ['id'=>3,'nim'=>'02435','uts'=>85,'uas'=>86,'tugas'=>70];
$ns4 = ['id'=>4,'nim'=>'0607','uts'=>95,'uas'=>85,'tugas'=>65];

$ar_nilai = [$ns1, $ns2 , $ns3, $ns4];

?> 

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="mystyle.css">
    <title>Tugas Pertemuan 1</title>
  </head>
  <body>
    <h1>Tugas Pertemuan 1</h1>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <table class="table">

    <tr>
      <th scope="col">No</th>
      <th scope="col">Nim</th>
      <th scope="col">UTS</th>
      <th scope="col">UAS</th>
      <th scope="col">TUGAS</th>
      <th scope="col">TUGAS AKHIR</th>
    </tr>



  <?php
  //cetak
  $nomor = 1;

  foreach($ar_nilai as $ns){
    $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas']) /3 ;
  ?>
  <tr>
    <td> <?= $nomor ?> </td>
    <td> <?= $ns ['nim'] ?> </td>
    <td> <?= $ns ['uts'] ?> </td>
    <td> <?= $ns ['uas'] ?> </td>
    <td> <?= $ns ['tugas'] ?> </td>
    <td> <?= number_format($nilai_akhir,2) ?> </td>
  </tr>
  <?php
  $nomor++ ;

  }
  ?>
    </body>
  </head>
</html>