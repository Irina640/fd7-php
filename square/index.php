<form action="" style="">
    <label>a:</label>
    <input type="number" name="a" value="">
    <label>b:</label>
    <input type="number" name="b" value="">
    <label>c:</label>
    <input type="number" name="c" value="">
    <button type="submit">submit</button>
</form>

<?php
    if (isset($_GET['a']) &&
        isset($_GET['b']) &&
        isset($_GET['c'])
    ) {
        $a = $_GET['a'];
        $b = $_GET['b'];
        $c = $_GET['c']; 
        echo " Значения: a = $a, b= $b, c= $c <br/>";
     
        $discriminant = calcDiscriminant($a, $b, $c);
        echo "Дискриминант = $discriminant  <br/>";

        if ($discriminant > 0){
            $x1 = ifPositive($a, $b, $discriminant);
            $x2 = ifPositive($a, $b, -$discriminant);
        
        } elseif ($discriminant == 0){
             $x = ifZero($a, $b); 
             $x1 = $x;
             $x2 = $x;
        } else {
            echo "discriminant is negative";
            return;
        }
        echo "x1 = $x1, <br/> x2 = $x2";
    }
    else {
        echo "values are not set";
    }

    function calcDiscriminant($a, $b, $c) {
      return ($b ** 2) - (4 * $a * $c);
    }
    

    function ifZero($var1, $var2) {
      return -$var2 / (2 * $var1);
    }

    function ifPositive($a, $b, $discriminant) {
      return (-$b + sqrt($discriminant)) / (2 * $a);
    }

?>


