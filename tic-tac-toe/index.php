<link rel="stylesheet" href="style.css">



<div class="container">
<?php
    for($row = 0; $row <3; $row++){
        for($col = 0; $col <3; $col++){
            echo "<a href=\"#\">$row/$col</a>";
        }
    }
?>
</div>



<br/>
<br/>
<br/>

<div class="container">
<?php for($row = 2; $row >=0; $row--): ?>
    <?php for($col = 2; $col >=0; $col--): ?>
        <a href="#"><?=$row . "/" . $col; ?></a>
    <?php endfor;?>
<?php endfor;?>
</div>

<br/>
<br/>
<br/>


<?php 

$entries = [
 ['' ,'x', ''],
 ['x','', '' ],
 ['' ,'', 'x'],
];

// $test = [
//     ["a", "b", "c"],
//     ["d", "d", "d"],
//     ["v", "v", "v"]
// ];

?>

<div class="container">
<?php for($row = 0; $row <3; $row++): ?>
    <?php for($col = 0; $col <3; $col++): ?>
        <a href="#"><?=$entries[$row][$col]; ?></a>
    <?php endfor;?>
<?php endfor;?>
</div>

<pre><?=print_r($entries, true)?></pre>