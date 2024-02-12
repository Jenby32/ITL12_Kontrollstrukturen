<?php
    function getPrimeNumber($value) {
        $flag = false;
        for ($i = 2; $i < $value; $i++) {
            if($value % $i == 0) {
                $flag = true;
            }
        }

        return $flag;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $zahl1 = $_POST["zahl1"];
        $isPrime =  getPrimeNumber($zahl1);
        echo "<script>console.log($isPrime);</script>";
        echo $isPrime;
    }
?>

<form action="" method="post">
    <label for="zahl1">Zahl:</label><br>
    <input type="text" id="zahl1" name="zahl1"><br>
    <input type="submit" value="Absenden">
</form>