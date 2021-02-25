<link rel="stylesheet" href="style.css">

<?php
if (
    array_key_exists('nr', $_GET) &&
    is_numeric($_GET['nr'])
   
) {
    $result = $_GET['nr'];
    echo "$result";
    echo "<br>";
}
?>

<div class="container">
<?php

    for($nr = 1; $nr <= 9; $nr++){
        echo "<a href=\"?nr=$result$nr\">$nr</a>";
    }
    echo "<a href=\"#\">*</a>";
    echo "<a href=\"#\">0</a>";
    echo "<a href=\"#\">#</a>";
?>
</div>


