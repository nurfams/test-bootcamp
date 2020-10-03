<?php 
    function cetak_gambar($data) {
        if ($data % 2 === 0) {
            echo "error";
        } else {
        for ($i=0; $i < $data; $i++) { 
            for ($a=0; $a < $data; $a++) { 
                if ($a % 2 == 1) {
                    echo "=";
                } else {
                    echo "*";
                }
            }
            echo "<br>";
        }
    }
}
    cetak_gambar(5);
    // bingung
?>