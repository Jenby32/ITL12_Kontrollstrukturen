<?php
    function getPrimeNumbers($value) {
        $flag = false;
        $array = "";
        for ($i = 2; $i < $value; $i++) {
            $temp = 0;
            for ($j = 2; $j <= $i/2; $j++) {
                if($i % $j == 0) {
                    $temp++;
                    $flag = true;
                }
            }

            if($temp == 0) {
                echo "$i<br/>";
            }
        }
    }

    function logExcercise() {
        for ($i = 1; $i <= 100; $i++) {
            $starStr = "";
            $repeat = 10*log($i);
            for($j = 1; $j < $repeat; $j++) {
                $starStr .= "*";
            }
            echo "$starStr<br/>";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $zahl1 = $_POST["zahl1"];
        getPrimeNumbers($zahl1);
        logExcercise();
    }
?>

<form action="" method="post">
    <label for="zahl1">Zahl:</label><br>
    <input type="text" id="zahl1" name="zahl1"><br>
    <input type="submit" value="Absenden">
</form>