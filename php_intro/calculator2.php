
<form action="" method="get">
    <label>number1: </label>
    <input type="number" name="number-1">
    <label>operation: </label>
    <select name="operator" id="">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="**">^</option>
    </select>
    <label>number2: </label>
    <input type="number" name="number-2">
    <button type="submit">submit</button>
</form>



<?php
 $n1 = "";
 $n2 = "";
 $operator = "";
 $allowed_operations = ['+' => '+', '-' => '-','*' => '*','/' => '/','**' => '^']
//  $allowed_operations = ['+', '-','*','/' ,'**']


if (array_key_exists('number-1', $_GET) &&
    array_key_exists('number-2', $_GET) &&
    array_key_exists('operator', $_GET)
) {
    $n1 = $_GET['number-1'];
    $n2 = $_GET['number-2'];
    $operator = $_GET['operator'];
    if (isValueInt($n1) &&
        isValueInt($n2) &&
        array_key_exists($operator,$allowed_operations )
    ) {
        switch ($operator) {
            case '+':
                $result = $n1 + $n2;
                break;
            case '-':
                $result = $n1 - $n2;
                break;
            case '*':
                $result = $n1 * $n2;
                break;
            case '/':
                $mod = $n1 % $n2;
                $result = ($n1 -$mod) / $n2 . "+" . $mod . "/" . $n2;
                break;  
            case '**':
                $result = $n1 ** $n2;
                break; 
            default :
                $result = "unknown";
        }
        echo "$n1 $operator $n2 = $result";
    }

    else {
         echo "wrong field values";
    }

}
else {
 echo 'please set values';
}

function isValueInt($value) {
    if ((int) $value > 0 || $value === "0") {
        return true;
    }
    return false;
}
?>

<form action="" method="get">
    <label>number1: </label>
    <input type="number" name="number-1" value="<?=$n1; ?>">
    <label>operation: </label>
    <select name="operator" id="">
        <?php
            foreach($allowed_operations as $key => $opr) {
                $selected = $operator === $key ? 'selected' : '';
                echo "<option value='$key' $selected>$opr</option>";
            }
        ?>
        <!-- <option value="+"<?php echo $operator=== "+" ? "selected" : '';?> >+</option>
        <option value="-"<?php echo $operator=== "-" ? "selected" : '';?>>-</option>
        <option value="*" <?php echo $operator=== "*" ? "selected" : '';?>>*</option>
        <option value="/" <?php echo $operator=== "/" ? "selected" : '';?>>/</option>
        <option value="**"<?php echo $operator=== "**" ? "selected" : '';?>>^</option> -->
    </select>
    <label>number2: </label>
    <input type="number" name="number-2" value="<?=$n2; ?>">
    <button type="submit">submit</button>
</form>
<br>
<a href="calculator2.php">reload</a>

<?php
switch ($i):
    case 0:
        echo "i равно 0";
        break;
    case 1:
        echo "i равно 1";
        break;
    case 2:
        echo "i равно 2";
        break;
    default:
    ?>
    <h1>не равно to 0, 1 или 2</h1>
        <?php
endswitch;
?>

<?php
$a = 4;
  if ($a <= 5 && $a>=2) {
      echo $a . "{2:5}"
  }
  elseif ( $a <=6 && $a >5){
      echo "{5:6}";
  }
?>

