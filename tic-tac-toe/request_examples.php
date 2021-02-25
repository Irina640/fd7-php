<link rel="stylesheet"
 href="style.css.php?color=gold&bg=grey&size=30">

<h2>#1 &lt;Link&gt;</h2>

<a href="response_examples.php?a=3&b=6">#2&lt;a&gt; ( method get)</a>
<!-- 3 -->
<form action="response_examples.php" method ="get">
<input type="hidden" name ="a" value = "7">
<input type="hidden" name ="b" value = "19">
<button type = "submit">#3 GET cal</button>
</form>
<!-- 4 -->
<form action="response_examples.php" method ="post">
<input type="hidden" name ="a" value = "7">
<input type="hidden" name ="b" value = "19">
<button type = "submit">#4 POST concatenate</button>
</form>

<!-- 5 -->
<form action="response_examples.php?a=7&b=2" method ="post">
<input type="hidden" name ="a" value = "12">
<button type = "submit">#5 POST calc</button>
</form>

<!-- 6 -->
<form action="response_examples.php?a=8&b=5" method ="post">
<input type="hidden" name ="next" value = "request_examples.php">
<button type = "submit">#6 POST calc with header</button>
</form>