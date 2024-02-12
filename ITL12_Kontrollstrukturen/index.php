<?php

    // define function to get all primenumbers
    function getPrimeNumbers($value) {
        // first iteration to iterate through every number till passed argument value
        for ($i = 2; $i < $value; $i++) {
            // create kind of a flag
            $temp = 0;
            // implement function to determine whether the number is prime or not
            for ($j = 2; $j <= $i/2; $j++) {
                if($i % $j == 0) {
                    $temp++;
                }
            }

            // if flag is still zero then number is prime
            if($temp == 0) {
                echo "$i<br/>";
            }
        }
    }

    // function for the log excercise
    function logExcercise() {
        // iterate from 1 to 100
        for ($i = 1; $i <= 100; $i++) {
            // create a str for the stars
            $starStr = "";
            // a variable which holds the nummber -> log(i) times the factor
            $repeat = 10*log($i);
            // iterate from 1 to the repeat number and add n times *
            for($j = 1; $j < $repeat; $j++) {
                $starStr .= "*";
            }
            echo "$starStr<br/>";
        }
    }

    // every post request - button click - the 2 functions gets calles
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