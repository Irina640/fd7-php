<?php
 $entries = [
    ['','',''],
    ['','',''],
    ['','',''],
   ];
   
   // 1
    for ($r = 0; $r < 3; $r++) {
        for ($c = 0; $c < 3; $c++) {
            $entries[$r][$c] = 'x';
        }
    }
    output($entries);
    echo "<br>";
    // 2
    for ($r = 0; $r < 3; $r++) {
         
        for ($c = 0; $c < 3; $c++) {
            if ($c == 0){
                $entries[$r][$c] = '0';
            } else {
                $entries[$r][$c] = 'x';
            }
        }
    }

    output($entries);
    echo "<br>";

    echo "3:";
    for ($r = 0; $r < 3; $r++) {
        
        for ($c = 0; $c < 3; $c++) {
            if ($r == 1 && $c == 1){
                $entries[$r][$c] = '0';
            } else {
                $entries[$r][$c] = 'x';
            }
        }
    }
    output($entries);
    echo "<br>";
    
    echo "4:";
    for ($r = 0; $r < 3; $r++) {
        for ($c = 0; $c < 3; $c++) {
            if ( $r == 1 ){
                $entries[$r][$c] = '0';
            } else {
                $entries[$r][$c]= 'x';
            }
        }
    }
    output($entries);
    echo "<br>";
    
    echo "5:";
    for ($r = 0; $r < 3; $r++){
        for ($c = 0; $c < 3; $c++) {
            if ($r == 2 && ($c == 1 || $c == 2)){
                $entries[$r][$c] = '0';
            } else {
                $entries[$r][$c]= 'x';
            }
        }
    }
    output($entries);
    echo "<br>";
    
  
     
    echo "6:";
    for ($r = 0; $r < 3; $r++) {
        for ($c = 0; $c < 3; $c++) {
            if ($r == 1 && $c == 1 ){
                $entries[$r][$c] = '0';
            } elseif ($r == 1 && $c == 2){
                $entries[$r][$c] = '0';
            } elseif ($r == 2 && $c == 1){
                $entries[$r][$c] = '0';
            } elseif ($r == 2 && $c == 2){
                $entries[$r][$c] = '0';
            } else {
                $entries[$r][$c]= 'x';
            }
        }
    }
    output($entries);
    echo "<br>";

    echo "6a:";
    for ($r = 0; $r < 3; $r++) {
        for ($c = 0; $c < 3; $c++) {
            if (($r == 1 || $r == 2 ) && ($c == 1 || $c == 2)){
                $entries[$r][$c] = '0';
            } else {
                $entries[$r][$c]= 'x';
            }
        }
    }
    output($entries);
    echo "<br>";
    
    echo "6b:";
    for ($r = 0; $r < 3; $r++) {
        for ($c = 0; $c < 3; $c++) { 
            if ($r != 0 && $c != 0){
                $entries[$r][$c] = '0';
            } else {
                $entries[$r][$c]= 'x';
            }
        }
    }
    output($entries);
    echo "<br>";
    
    echo "7:"; 
    for ($r = 0; $r < 3; $r++) {
        for ($c = 0; $c < 3; $c++) {
            if ($r == 0 && $c == 1){
                $entries[$r][$c] = '0';
            } elseif ($r == 1){
                $entries[$r][$c] = '0';
            } elseif ($r == 2 && $c == 1){
                $entries[$r][$c] = '0';
            } else {
                $entries[$r][$c]= 'x';
            }
        }
    }
    output($entries);
    echo "<br>";

    echo "7a:";  
    for ($r = 0; $r < 3; $r++) {
        for ($c = 0; $c < 3; $c++) {
            if (($r == 0 || $r == 2) && $c == 1){
                $entries[$r][$c] = '0';
            } elseif ($r == 1){
                $entries[$r][$c] = '0';
            } else {
                $entries[$r][$c]= 'x';
            }
        }
    }
    output($entries);
    echo "<br>";
    
    echo "7b:";  
    for ($r = 0; $r < 3; $r++) {
        for ($c = 0; $c < 3; $c++) {
            if ($r == 1 || $c == 1){
                $entries[$r][$c] = '0';
            } else {
                $entries[$r][$c]= 'x';
            }
        }
    }
    output($entries);
    echo "<br>";
    
    echo "8:"; 
    for ($r = 0; $r < 3; $r++) {
        for ($c = 0; $c < 3; $c++) {
            if ($r == 0 && $c == 0){
                $entries[$r][$c] = 'x';
            } elseif ($r == 1){
                $entries[$r][$c] = 'm';
            } elseif ($r == 2 && $c == 0){
                $entries[$r][$c] = 'x';
            } else {
                $entries[$r][$c]= '0';
            }
        }
    }
    output($entries);
    echo "<br>";

    echo "8a:"; //  2 conditions 
    for ($r = 0; $r < 3; $r++) {
        for ($c = 0; $c < 3; $c++) {
            if (($r == 0 || $r == 2) && $c == 0){
                $entries[$r][$c] = 'x';
            } elseif ($r == 1){
                $entries[$r][$c] = 'm';
            } else {
                $entries[$r][$c]= '0';
            }
        }
    }
    output($entries);
    echo "<br>";
    
    echo "9:"; // todo
   for ($r = 0; $r < 3; $r++) {
        for ($c = 0; $c < 3; $c++) {
            if ($r == 0 && $c == 0){
                $entries[$r][$c] = '6';
            } elseif ($r == 0 && $c ==2){
                $entries[$r][$c] = '5';
            } elseif ($r == 1 && $c == 0){
                $entries[$r][$c] = '4';
            } elseif ($r == 1 && $c == 2){
                $entries[$r][$c] = '3';
            } elseif ($r == 2 && $c == 0){
                $entries[$r][$c] = '2';
            } elseif ($r == 2 && $c == 2){
                $entries[$r][$c] = '1';
            } else {
                $entries[$r][$c]= '0';
            }
        }
    }
    output($entries);
    echo "<br>";

    echo "9a:"; // todo
    for ($r = 2; $r >= 0; $r--){
        for ($c = 2; $c >= 0; $c--){
            if ($r == 0 && $c == 0){
                $entries[$r][$c] = '6';
            } elseif ($r == 0 && $c ==2){
                $entries[$r][$c] = '5';
            } elseif ($r == 1 && $c == 0){
                $entries[$r][$c] = '4';
            } elseif ($r == 1 && $c == 2){
                $entries[$r][$c] = '3';
            } elseif ($r == 2 && $c == 0){
                $entries[$r][$c] = '2';
            } elseif ($r == 2 && $c == 2){
                $entries[$r][$c] = '1';
            } else {
                $entries[$r][$c]= '0';
            }
        }
    }
    output($entries);
    echo "<br>";

   // 10    
   for ($r = 0; $r < 3; $r++) {
        for ($c = 0; $c < 3; $c++) {
            if ($r == 0 && $c == 0){
                $entries[$r][$c] = '8';
            } elseif ($r == 0 && $c ==2){
                $entries[$r][$c] = '5';
            } elseif ($r == 1 && $c == 0){
                $entries[$r][$c] = '3';
            } elseif ($r == 1 && $c == 2){
                $entries[$r][$c] = '2';
            } elseif ($r == 2 && $c == 0){
                $entries[$r][$c] = '1';
            } elseif ($r == 2 && $c == 2){
                $entries[$r][$c] = '1';
            } else {
                $entries[$r][$c]= '0';
            }
        }
    }
    output($entries);
    echo "<br>";


?>

<pre><?=print_r($entries, true)?></pre>
<?php function output($entries) { ?>
    <table>
        <?php for($row = 0; $row < 3; $row++): ?>
            <tr>
            <?php for($col = 0; $col < 3; $col++): ?>
                <td><?=$entries[$row][$col];?></td>
            <?php endfor;?>
            </tr>
        <?php endfor;?>
    </table>
<?php } ?>

<div style="width:100px; display:inline-block;">
    <h1>1)</h1>
    <?php
    $entries = [
        ['x', 'x', 'x'],
        ['x', 'x', 'x'],
        ['x', 'x', 'x']
    ];
    output($entries);?>
</div>

<div style="width:100px; display:inline-block;">
    <h1>2)</h1>
    <?php
    $entries = [
        ['0', 'x', 'x'],
        ['0', 'x', 'x'],
        ['0', 'x', 'x']
    ];
    output($entries);?>
</div>

<div style="width:100px; display:inline-block;">
    <h1>3)</h1>
    <?php
    $entries = [
        ['x', 'x', 'x'],
        ['x', '0', 'x'],
        ['x', 'x', 'x']
    ];
    output($entries);?>
</div>

<div style="width:100px; display:inline-block;">
    <h1>4)</h1>
    <?php
    $entries = [
        ['x', 'x', 'x'],
        ['0', '0', '0'],
        ['x', 'x', 'x']
    ];
    output($entries);?>
</div>

<div style="width:100px; display:inline-block;">
    <h1>5)</h1>
    <?php
    $entries = [
        ['x', 'x', 'x'],
        ['x', 'x', 'x'],
        ['x', '0', '0']
    ];
    output($entries);?>
</div>

<div style="width:100px; display:inline-block;">
    <h1>6)</h1>
    <?php
    $entries = [
        ['x', 'x', 'x'],
        ['x', '0', '0'],
        ['x', '0', '0']
    ];
    output($entries);?>
</div>

<div style="width:100px; display:inline-block;">
    <h1>7)</h1>
    <?php
    $entries = [
        ['x', '0', 'x'],
        ['0', '0', '0'],
        ['x', '0', 'x']
    ];
    output($entries);?>
</div>

<div style="width:100px; display:inline-block;">
    <h1>8)</h1>
    <?php
    $entries = [
        ['x', '0', '0'],
        ['m', 'm', 'm'],
        ['x', '0', '0']
    ];
    output($entries);?>
</div>

<div style="width:100px; display:inline-block;">
    <h1>9)</h1>
    <?php
    $entries = [
        ['6', '0', '5'],
        ['4', '0', '3'],
        ['2', '0', '1']
    ];
    output($entries);?>
</div>

<div style="width:100px; display:inline-block;">
    <h1>10)</h1>
    <?php
    $entries = [
        ['8', '0', '5'],
        ['3', '0', '2'],
        ['1', '0', '1']
    ];
    output($entries);?>
</div>