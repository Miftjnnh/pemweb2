<?php
$profileArray = [
   [
        "nama" => "Miftahul Jannah",
        "kelas" => "TI06",
        "ipk" => 4,
        "sudah_lulus" => false 
   ], [
        "nama" => "Miftahul Jannah",
        "kelas" => "TI06",
        "ipk" => 4,
        "sudah_lulus" => false
   ]
];

foreach ($profileArray as $profile) {
    echo $profile['nama'];
}
    