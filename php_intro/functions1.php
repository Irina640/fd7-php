<?php 
// function
function joinText ($a, $b) {
    echo "function executed";
    $output = $a . $b;
    return $output;
}

$f = "c";
echo "<h2>" . joinText($f, "d") . "</h2>";


function intoTag($text, $tagname) {
   //  return "<" . $tagname . ">" . $text . "</" . $tagname . ">";
   // короткая запись
    return "<$tagname>$text</$tagname>";
}

echo intoTag('test text','h3'); 
echo intoTag ( 'lorem ipsum text' . intoTag('THIS IS BOLD','strong') . 'ather text' , 'p' );
?>