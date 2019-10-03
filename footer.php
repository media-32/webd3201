<html>

<body>

<?php
/*This is to output the copyright symball*/
/*I would have put this in the functions.php but it was vausing a problem because I also had the functions.php called on the other pages*/
    function display_CopyRight()
    {
        echo "&copy;2019";
    }
?>

<div style="position:absolute; right:0; bottom:0;">

<?php
require "functions.php";
display_CopyRight();
?>

<a href="http://validator.w3.org/check?uri=referer"> <img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" /> </a>
</div>

</body>

</html>