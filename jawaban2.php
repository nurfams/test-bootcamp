<?php 

    function betweenDays($data1, $data2) {
        for ($i=$data1; $i <= $data2; $i++) { 
           echo $i . '<br>';
        }
    }

    betweenDays('2019-11-01', '2019-11-05');

?>