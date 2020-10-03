<?php 

    function hitung($a) {
        for ($i=0; $i < count($a); $i++) {
        $hitung = $a[0] + $a[1] + $a[2] + $a[3] + $a[4];
        $hasil = $hitung - $a[$i];
        echo $hasil . "<br>";
       }
       var_dump($hasil);
    }

    hitung(array(1,2,3,4,5));
?>