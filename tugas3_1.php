<?php

    // Yang di ketahui 
    $jarak = 360;
    $kecepatan = 90;
    $menit = 60;

    // Operasi matematika menghitung lama perjalanan
    $waktuJam = 360 / 90;
    $waktuMenit = $waktuJam * 60;

    // Menampilkan hasil ke dalam browser
    echo "Jarak kota A - Z = 360 km <br>";
    echo "Kecepatan motor = 90 km/jam <br>";
    echo "Waktu tempuh = ? <br>";
    echo "Jawaban : t = $jarak km : $kecepatan km/jam <br>
    &emsp;&emsp;&emsp;&emsp;&ensp; = $waktuJam jam <br>
    &emsp;&emsp;&emsp;&nbsp; tm = $waktuJam x $menit <br>
    &emsp;&emsp;&emsp;&emsp;&ensp; = $waktuMenit menit <br><br>";
    echo "Jadi lama perjalanan yang harus ditempuh adalah $waktuMenit menit.";
    
?>