<?php

    // Yang diketahui
    $tabungan1 = 150000;
    $bunga = "12.5 %";
    $bunga2 = 12.5 / 100;

    // Operasi matematika untuk menghitung total tabungan setahun
    $bunga1tahun = $tabungan1 * $bunga2;
    $tabungan2 = $tabungan1 + $bunga1tahun;

    // Menampilkan output ke dalam browser
    echo "Tabungan Awal = Rp $tabungan1 <br>";
    echo "Bunga Setahun = $bunga <br>";
    echo "Total Tabungan Setahun = ? <br>";
    echo "Jawaban : bs = $tabungan1 x $bunga <br>
    &emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&nbsp; = $bunga1tahun <br>
    &emsp;&emsp;&emsp;&emsp;&nbsp;ts = $tabungan1 + $bunga1tahun <br>
    &emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&nbsp; = $tabungan2 <br><br>";
    echo "Jadi total tabungan Defan setelah 1 tahun adalah Rp $tabungan2.";

?>