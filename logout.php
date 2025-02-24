<?php
$valid = time() - (60*60*24);
setcookie("email", '', $valid);
echo '<META http-equiv="refresh" content="0.1;URL=userlogin.php">';
?>