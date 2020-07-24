<?php
/*
* MySQL Web Interface Version 0.8
* -------------------------------
* Developed By SooMin Kim (smkim@popeye.snu.ac.kr)
* License : GNU Public License (GPL)
* Homepage : http://popeye.snu.ac.kr/~smkim/mysql
*/

$HOSTNAME = 'localhost';

function logon()
{
    global $PHP_SELF;

    setcookie('mysql_web_admin_username');
    setcookie('mysql_web_admin_password');
    echo "<html>\n";
    echo "<head>\n";
    echo "<title>MySQL Web Interface</title>\n";
    echo "</head>\n";
    echo "<body>\n";
    echo "<table width=100% height=100%><tr><td><center>\n";
    echo "<table cellpadding=2><tr><td bgcolor=#a4a260><center>\n";
    echo "<table cellpadding=20><tr><td bgcolor=#ffffff><center>\n";
    echo "<h1>MySQL Web Interface</h1>\n";
    echo "<form action='$PHP_SELF'>\n";
    echo "<input type=hidden name=action value=logon_submit>\n";
    echo "<table cellpadding=5 cellspacing=1>\n";
    echo "<tr><td>Username </td><td> <input type=text 
name=username></td></tr>\n";
    echo "<tr><td>Password </td><td> <input type=password 
name=password></td></tr>\n";
    echo "</table><p>\n";
    echo "<input type=submit value='Enter'>\n";
    echo "<input type=reset value='Clear'><br>\n";
    echo "</form>\n";
    echo "</center></td></tr></table>\n";
    echo "</center></td></tr></table>\n";
    echo "<p><hr width=300>\n";
    echo "<font size=2>\n";
    echo "Copyleft &copy; since 1999,\n";
    echo "<a href='mailto:smkim76@icqmail.com'>SooMin Kim</a><br>\n";
    echo "<a href='http://popeye.snu.ac.kr/~smkim/mysql'>Hompage<a> is 
available<br>";
    echo "</font>\n";
    echo "</center></td></tr></table>\n";
    echo "</body>\n";
    echo "</html>\n";
}

function logon_submit()
{
    global $username, $password, $PHP_SELF;

    setcookie('mysql_web_admin_username', $username);
    setcookie('mysql_web_admin_password', $password);
    echo '<html>';
    echo '<head>';
    echo "<META HTTP-EQUIV=Refresh CONTENT='0; 
URL=$PHP_SELF?action=listDBs'>";
    echo '</head>';
    echo '</html>';
}

function echoQueryResult()
{
    global $queryStr, $errMsg;

    if ('' == $errMsg) {
        $errMsg = 'Success';
    }
    if ('' != $queryStr) {
        echo "<table cellpadding=5>\n";
        echo "<tr><td>Query</td><td>$queryStr</td></tr>\n";
        echo "<tr><td>Result</td><td>$errMsg</td></tr>\n";
        echo "</table><p>\n";
    }
}

function listDatabases()
{
    global $mysqlHandle, $PHP_SELF;

    echo "<h1>Database List</h1>\n";

    echo "<form action='$PHP_SELF'>\n";
    echo "<input type=hidden name=action value=createDB>\n";
    echo "<input type=text name=dbname>\n";
    echo "<input type=submit value='Create Database'>\n";
    echo "</form>\n";
    echo "<hr>\n";

    echo "<table cellspacing=1 cellpadding=5>\n";

    $pDB = mysql_list_dbs($mysqlHandle);
    $num = mysql_num_rows($pDB);
    for ($i = 0; $i < $num; ++$i) {
        $dbname = mysql_dbname($pDB, $i);
        echo "<tr>\n";
        echo "<td>$dbname</td>\n";
        echo "<td><a 
href='$PHP_SELF?action=listTables&dbname=$dbname'>Table</a></td>\n";
        echo "<td><a href='$PHP_SELF?action=dropDB&dbname=$dbname' 
onClick=\"return confirm('Drop Database 
\'$dbname\'?')\">Drop</a></td>\n";
        echo "<td><a 
href='$PHP_SELF?action=dumpDB&dbname=$dbname'>Dump</a></td>\n";
        echo "</tr>\n";
    }
    echo "</table>\n";
}

function createDatabase()
{
    global $mysqlHandle, $dbname, $PHP_SELF;

    mysql_create_db($dbname, $mysqlHandle);
    listDatabases();
}

function dropDatabase()
{
    global $mysqlHandle, $dbname, $PHP_SELF;

    mysql_drop_db($dbname, $mysqlHandle);
    listDatabases();
}

function listTables()
{
    global $mysqlHandle, $dbname, $PHP_SELF;

    echo "<h1>Table List</h1>\n";
    echo "<p class=location>$dbname</p>\n";
    echoQueryResult();
    echo "<form action='$PHP_SELF'>\n";
    echo "<input type=hidden name=action value=createTable>\n";
    echo "<input type=hidden name=dbname value=$dbname>\n";
    echo "<input type=text name=tablename>\n";
    echo "<input type=submit value='Create Table'>\n";
    echo "</form>\n";
    echo "<form action='$PHP_SELF'>\n";
    echo "<input type=hidden name=action value=query>\n";
    echo "<input type=hidden name=dbname value=$dbname>\n";
    echo "<input type=text size=40 name=queryStr>\n";
    //echo "<textarea cols=30 rows=3 name=queryStr></textarea><br>";
    echo "<input type=submit value='Query'>\n";
    echo "</form>\n";
    echo "<hr>\n";

    $pTable = mysql_list_tables($dbname);

    if (0 == $pTable) {
        $msg = mysql_error();
        echo "<h3>Error : $msg</h3><p>\n";

        return;
    }
    $num = mysql_num_rows($pTable);

    echo "<table cellspacing=1 cellpadding=5>\n";

    for ($i = 0; $i < $num; ++$i) {
        $tablename = mysql_tablename($pTable, $i);

        echo "<tr>\n";
        echo "<td>\n";
        echo "$tablename\n";
        echo "</td>\n";
        echo "<td>\n";
        echo "<a 
href='$PHP_SELF?action=viewSchema&dbname=$dbname&tablename=$tablename'>Schema</a>\n";
        echo "</td>\n";
        echo "<td>\n";
        echo "<a 
href='$PHP_SELF?action=viewData&dbname=$dbname&tablename=$tablename'>Data</a>\n";
        echo "</td>\n";
        echo "<td>\n";
        echo "<a 
href='$PHP_SELF?action=dropTable&dbname=$dbname&tablename=$tablename' 
onClick=\"return confirm('Drop Database \'$dbname\'?')\">Drop</a>\n";
        echo "</td>\n";
        echo "<td>\n";
        echo "<a 
href='$PHP_SELF?action=dumpTable&dbname=$dbname&tablename=$tablename'>Dump</a>\n";
        echo "</td>\n";
        echo "</tr>\n";
    }

    echo '</table>';
}

function createTable()
{
    global $mysqlHandle, $dbname, $tablename, $PHP_SELF, $queryStr,
$errMsg;

    $queryStr = "CREATE TABLE $tablename ( no INT )";
    mysql_select_db($dbname, $mysqlHandle);
    mysql_query($queryStr, $mysqlHandle);
    $errMsg = mysql_error();

    listTables();
}

function dropTable()
{
    global $mysqlHandle, $dbname, $tablename, $PHP_SELF, $queryStr,
$errMsg;

    $queryStr = "DROP TABLE $tablename";
    mysql_select_db($dbname, $mysqlHandle);
    mysql_query($queryStr, $mysqlHandle);
    $errMsg = mysql_error();

    listTables();
}

function viewSchema()
{
    global $mysqlHandle, $dbname, $tablename, $PHP_SELF, $queryStr,
$errMsg;

    echo "<h1>Table Schema</h1>\n";
    echo "<p class=location>$dbname &gt; $tablename</p>\n";

    echoQueryResult();

    echo "<a 
href='$PHP_SELF?action=addField&dbname=$dbname&tablename=$tablename'>Add 
Field</a> | \n";
    echo "<a 
href='$PHP_SELF?action=viewData&dbname=$dbname&tablename=$tablename'>View 
Data</a>\n";
    echo "<hr>\n";

    $pResult = mysql_db_query($dbname, "SHOW fields FROM $tablename");
    $num = mysql_num_rows($pResult);

    echo "<table cellspacing=1 cellpadding=5>\n";
    echo "<tr>\n";
    echo "<th>Field</th>\n";
    echo "<th>Type</th>\n";
    echo "<th>Null</th>\n";
    echo "<th>Key</th>\n";
    echo "<th>Default</th>\n";
    echo "<th>Extra</th>\n";
    echo "<th colspan=2>Action</th>\n";
    echo "</tr>\n";

    for ($i = 0; $i < $num; ++$i) {
        $field = mysql_fetch_array($pResult);
        echo "<tr>\n";
        echo '<td>' . $field['Field'] . "</td>\n";
        echo '<td>' . $field['Type'] . "</td>\n";
        echo '<td>' . $field['Null'] . "</td>\n";
        echo '<td>' . $field['Key'] . "</td>\n";
        echo '<td>' . $field['Default'] . "</td>\n";
        echo '<td>' . $field['Extra'] . "</td>\n";
        $fieldname = $field['Field'];
        echo "<td><a 
href='$PHP_SELF?action=editField&dbname=$dbname&tablename=$tablename&fieldname=$fieldname'>Edit</a></td>\n";
        echo "<td><a 
href='$PHP_SELF?action=dropField&dbname=$dbname&tablename=$tablename&fieldname=$fieldname' 
onClick=\"return confirm('Drop Field 
\'$fieldname\'?')\">Drop</a></td>\n";
        echo "</tr>\n";
    }
    echo "</table>\n";
}

function manageField($cmd)
{
    global $mysqlHandle, $dbname, $tablename, $fieldname, $PHP_SELF;

    if ('add' == $cmd) {
        echo "<h1>Add Field</h1>\n";
    } elseif ('edit' == $cmd) {
        echo "<h1>Edit Field</h1>\n";
        $pResult = mysql_db_query($dbname, "SHOW fields FROM $tablename");
        $num = mysql_num_rows($pResult);
        for ($i = 0; $i < $num; ++$i) {
            $field = mysql_fetch_array($pResult);
            if ($field['Field'] == $fieldname) {
                $fieldtype = $field['Type'];
                $fieldkey = $field['Key'];
                $fieldextra = $field['Extra'];
                $fieldnull = $field['Null'];
                $fielddefault = $field['Default'];
                break;
            }
        }
        $type = strtok($fieldtype, " (,)\n");
        if (strpos($fieldtype, '(')) {
            if ('enum' == $type | 'set' == $type) {
                $valuelist = strtok(" ()\n");
            } else {
                $M = strtok(" (,)\n");
                if (strpos($fieldtype, ',')) {
                    $D = strtok(" (,)\n");
                }
            }
        }
    }

    echo "<p class=location>$dbname &gt; $tablename</p>\n";
    echo "<form action=$PHP_SELF>\n";

    if ('add' == $cmd) {
        echo "<input type=hidden name=action value=addField_submit>\n";
    } elseif ('edit' == $cmd) {
        echo "<input type=hidden name=action value=editField_submit>\n";
        echo "<input type=hidden name=old_name value=$fieldname>\n";
    }
    echo "<input type=hidden name=dbname value=$dbname>\n";
    echo "<input type=hidden name=tablename value=$tablename>\n";

    echo "<h3>Name</h3>\n";
    echo "<input type=text name=name value=$fieldname><p>\n"; ?>

<h3>Type</h3>

<font size=2>
* `M' indicates the maximum display size.<br>
* `D' applies to floating-point types and indicates the number of 
digits 
following the decimal point.<br>
</font>

<table>
<tr>
<th>Type</th><th>&nbspM&nbsp</th><th>&nbspD&nbsp</th><th>unsigned</th><th>zerofill</th><th>binary</th>
</tr>
<tr>
<td><input type=radio name=type value="TINYINT" <?php if ('tinyint' ==
$type) {
        echo 'checked';
    } ?>>TINYINT (-128 ~ 127)</td>
<td align=center>O</td>
<td>&nbsp</td>
<td align=center>O</td>
<td align=center>O</td>
<td>&nbsp</td>
</tr>
<tr>
<td><input type=radio name=type value="SMALLINT" <?php if ('smallint' ==
$type
) {
        echo 'checked';
    } ?>>SMALLINT (-32768 ~ 32767)</td>
<td align=center>O</td>
<td>&nbsp</td>
<td align=center>O</td>
<td align=center>O</td>
<td>&nbsp</td>
</tr>
<tr>
<td><input type=radio name=type value="MEDIUMINT" <?php if ('mediumint' ==
$type) {
        echo 'checked';
    } ?>>MEDIUMINT (-8388608 ~ 8388607)</td>
<td align=center>O</td>
<td>&nbsp</td>
<td align=center>O</td>
<td align=center>O</td>
<td>&nbsp</td>
</tr>
<tr>
<td><input type=radio name=type value="INT" <?php if ('int' == $type) {
        echo
'checked';
    } ?>>INT (-2147483648 ~ 2147483647)</td>
<td align=center>O</td>
<td>&nbsp</td>
<td align=center>O</td>
<td align=center>O</td>
<td>&nbsp</td>
</tr>
<tr>
<td><input type=radio name=type value="BIGINT" <?php if ('bigint' == $type
) {
        echo 'checked';
    } ?>>BIGINT (-9223372036854775808 ~ 
9223372036854775807)</td>
<td align=center>O</td>
<td>&nbsp</td>
<td align=center>O</td>
<td align=center>O</td>
<td>&nbsp</td>
</tr>
<tr>
<td><input type=radio name=type value="FLOAT" <?php if ('float' == $type) {
        echo
'checked';
    } ?>>FLOAT</td>
<td align=center>O</td>
<td align=center>O</td>
<td>&nbsp</td>
<td align=center>O</td>
<td>&nbsp</td>
</tr>
<tr>
<td><input type=radio name=type value="DOUBLE" <?php if ('double' == $type
) {
        echo 'checked';
    } ?>>DOUBLE</td>
<td align=center>O</td>
<td align=center>O</td>
<td>&nbsp</td>
<td align=center>O</td>
<td>&nbsp</td>
</tr>
<tr>
<td><input type=radio name=type value="DECIMAL" <?php if ('decimal' ==
$type) {
        echo 'checked';
    } ?>>DECIMAL(NUMERIC)</td>
<td align=center>O</td>
<td align=center>O</td>
<td>&nbsp</td>
<td align=center>O</td>
<td>&nbsp</td>
</tr>
<tr>
<td><input type=radio name=type value="DATE" <?php if ('date' == $type) {
        echo
'checked';
    } ?>>DATE (1000-01-01 ~ 9999-12-31, YYYY-MM-DD)</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
</tr>
<tr>
<td><input type=radio name=type value="DATETIME" <?php if ('datetime' ==
$type
) {
        echo 'checked';
    } ?>>DATETIME (1000-01-01 00:00:00 ~ 9999-12-31 
23:59:59, 
YYYY-MM-DD HH:MM:SS)</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
</tr>
<tr>
<td><input type=radio name=type value="TIMESTAMP" <?php if ('timestamp' ==
$type) {
        echo 'checked';
    } ?>>TIMESTAMP (1970-01-01 00:00:00 ~ 
2106..., 
YYYYMMDD[HH[MM[SS]]])</td>
<td align=center>O</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
</tr>
<tr>
<td><input type=radio name=type value="TIME" <?php if ('time' == $type) {
        echo
'checked';
    } ?>>TIME (-838:59:59 ~ 838:59:59, HH:MM:SS)</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
</tr>
<tr>
<td><input type=radio name=type value="YEAR" <?php if ('year' == $type) {
        echo
'checked';
    } ?>>YEAR (1901 ~ 2155, 0000, YYYY)</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
</tr>
<tr>
<td><input type=radio name=type value="CHAR" <?php if ('char' == $type) {
        echo
'checked';
    } ?>>CHAR</td>
<td align=center>O</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td align=center>O</td>
</tr>
<tr>
<td><input type=radio name=type value="VARCHAR" <?php if ('varchar' ==
$type) {
        echo 'checked';
    } ?>>VARCHAR</td>
<td align=center>O</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td align=center>O</td>
</tr>
<tr>
<td><input type=radio name=type value="TINYTEXT" <?php if ('tinytext' ==
$type
) {
        echo 'checked';
    } ?>>TINYTEXT (0 ~ 255)</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
</tr>
<tr>
<td><input type=radio name=type value="TEXT" <?php if ('text' == $type) {
        echo
'checked';
    } ?>>TEXT (0 ~ 65535)</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
</tr>
<tr>
<td><input type=radio name=type value="MEDIUMTEXT" <?php if ('mediumtext' ==
$type) {
        echo 'checked';
    } ?>>MEDIUMTEXT (0 ~ 16777215)</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
</tr>
<tr>
<td><input type=radio name=type value="LONGTEXT" <?php if ('longtext' ==
$type
) {
        echo 'checked';
    } ?>>LONGTEXT (0 ~ 4294967295)</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
</tr>
<tr>
<td><input type=radio name=type value="TINYBLOB" <?php if ('tinyblob' ==
$type
) {
        echo 'checked';
    } ?>>TINYBLOB (0 ~ 255)</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
</tr>
<tr>
<td><input type=radio name=type value="BLOB" <?php if ('blob' == $type) {
        echo
'checked';
    } ?>>BLOB (0 ~ 65535)</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
</tr>
<tr>
<td><input type=radio name=type value="MEDIUMBLOB" <?php if ('mediumblob' ==
$type) {
        echo 'checked';
    } ?>>MEDIUMBLOB (0 ~ 16777215)</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
</tr>
<tr>
<td><input type=radio name=type value="LONGBLOB" <?php if ('longblob' ==
$type
) {
        echo 'checked';
    } ?>>LONGBLOB (0 ~ 4294967295)</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
<td>&nbsp</td>
</tr>
<tr>
<td><input type=radio name=type value="ENUM" <?php if ('enum' == $type) {
        echo
'checked';
    } ?>>ENUM</td>
<td colspan=5><center>value list</center></td>
</tr>
<tr>
<td><input type=radio name=type value="SET" <?php if ('set' == $type) {
        echo
'checked';
    } ?>>SET</td>
<td colspan=5><center>value list</center></td>
</tr>

</table>
<table>
<tr><th>M</th><th>D</th><th>unsigned</th><th>zerofill</th><th>binary</th><th>value 
list (ex: 'apple', 'orange', 'banana') </th></tr>
<tr>
<td align=center><input type=text size=4 name=M <?php if ('' != $M) {
        echo
"value=$M";
    } ?>></td>
<td align=center><input type=text size=4 name=D <?php if ('' != $D) {
        echo
"value=$D";
    } ?>></td>
<td align=center><input type=checkbox name=unsigned value="UNSIGNED" <?php
if (
strpos($fieldtype, 'unsigned')) {
        echo 'checked';
    } ?>></td>
<td align=center><input type=checkbox name=zerofill value="ZEROFILL" <?php
if (
strpos($fieldtype, 'zerofill')) {
        echo 'checked';
    } ?>></td>
<td align=center><input type=checkbox name=binary value="BINARY" <?php if (
strpos($fieldtype, 'binary')) {
        echo 'checked';
    } ?>></td>
<td align=center><input type=text size=60 name=valuelist <?php if (
''
!= $valuelist) {
        echo "value=\"$valuelist\"";
    } ?>></td>
</tr>
</table>


<h3>Flags</h3>
<table>
<tr><th>not null</th><th>default value</th><th>auto 
increment</th><th>primary key</th></tr>
<tr>
<td align=center><input type=checkbox name=not_null value="NOT NULL" <?php
if (
'YES' != $fieldnull) {
        echo 'checked';
    } ?>></td>
<td align=center><input type=text name=default_value <?php if (
'' !=
$fielddefault) {
        echo "value=$fielddefault";
    } ?>></td>
<td align=center><input type=checkbox name=auto_increment 
value="AUTO_INCREMENT" <?php if ('auto_increment' == $fieldextra) {
        echo
'checked';
    } ?>></td>
<td align=center><input type=checkbox name=primary_key value="PRIMARY 
KEY" 
<?php if ('PRI' == $fieldkey) {
        echo 'checked';
    } ?>></td>
</tr>
</table>

<p>

<?php
    if ('add' == $cmd) {
        echo "<input type=submit value='Add Field'>\n";
    } elseif ('edit' == $cmd) {
        echo "<input type=submit value='Edit Field'>\n";
    }
    echo "<input type=button value=Cancel onClick='history.back()'>\n";
    echo "</form>\n";
}

function manageField_submit($cmd)
{
    global $mysqlHandle, $dbname, $tablename, $old_name, $name, $type,
$PHP_SELF, $queryStr, $errMsg,
        $M, $D, $unsigned, $zerofill, $binary, $not_null, $default_value,
$auto_increment, $primary_key, $valuelist;

    if ('add' == $cmd) {
        $queryStr = "ALTER TABLE $tablename ADD $name ";
    } elseif ('edit' == $cmd) {
        $queryStr = "ALTER TABLE $tablename CHANGE $old_name $name ";
    }

    if ('' != $M) {
        if ('' != $D) {
            $queryStr .= "$type($M,$D) ";
        } else {
            $queryStr .= "$type($M) ";
        }
    } elseif ('' != $valuelist) {
        $valuelist = stripslashes($valuelist);
        $queryStr .= "$type($valuelist) ";
    } else {
        $queryStr .= "$type ";
    }

    $queryStr .= "$unsigned $zerofill $binary ";

    if ('' != $default_value) {
        $queryStr .= "DEFAULT '$default_value' ";
    }

    $queryStr .= "$not_null $auto_increment";

    mysql_select_db($dbname, $mysqlHandle);
    mysql_query($queryStr, $mysqlHandle);
    $errMsg = mysql_error();

    // key change
    $keyChange = false;
    $result = mysql_query("SHOW KEYS FROM $tablename");
    $primary = '';
    while ($row = mysql_fetch_array($result)) {
        if ('PRIMARY' == $row['Key_name']) {
            if ($row[Column_name] == $name) {
                $keyChange = true;
            } else {
                $primary .= ", $row[Column_name]";
            }
        }
    }
    if ('PRIMARY KEY' == $primary_key) {
        $primary .= ", $name";
        $keyChange = !$keyChange;
    }
    $primary = substr($primary, 2);
    if (true == $keyChange) {
        $q = "ALTER TABLE $tablename DROP PRIMARY KEY";
        mysql_query($q);
        $queryStr .= "<br>\n" . $q;
        $errMsg .= "<br>\n" . mysql_error();
        $q = "ALTER TABLE $tablename ADD PRIMARY KEY( $primary )";
        mysql_query($q);
        $queryStr .= "<br>\n" . $q;
        $errMsg .= "<br>\n" . mysql_error();
    }

    viewSchema();
}

function dropField()
{
    global $mysqlHandle, $dbname, $tablename, $fieldname, $PHP_SELF,
$queryStr,
$errMsg;

    $queryStr = "ALTER TABLE $tablename DROP COLUMN $fieldname";
    mysql_select_db($dbname, $mysqlHandle);
    mysql_query($queryStr, $mysqlHandle);
    $errMsg = mysql_error();

    viewSchema();
}

function viewData($queryStr)
{
    global $mysqlHandle, $dbname, $tablename, $PHP_SELF, $errMsg, $page,
$rowperpage, $orderby;

    echo "<h1>Data in Table</h1>\n";
    if ('' != $tablename) {
        echo "<p class=location>$dbname &gt; $tablename</p>\n";
    } else {
        echo "<p class=location>$dbname</p>\n";
    }

    $queryStr = stripslashes($queryStr);
    if ('' == $queryStr) {
        $queryStr = "SELECT * FROM $tablename";
        if ('' != $orderby) {
            $queryStr .= " ORDER BY $orderby";
        }
        echo "<a 
href='$PHP_SELF?action=addData&dbname=$dbname&tablename=$tablename'>Add 
Data</a> | \n";
        echo "<a 
href='$PHP_SELF?action=viewSchema&dbname=$dbname&tablename=$tablename'>Schema</a>\n";
    }

    $pResult = mysql_db_query($dbname, $queryStr);
    $errMsg = mysql_error();

    $GLOBALS[queryStr] = $queryStr;

    if (false == $pResult) {
        echoQueryResult();

        return;
    }
    if (1 == $pResult) {
        $errMsg = 'Success';
        echoQueryResult();

        return;
    }

    echo "<hr>\n";

    $row = mysql_num_rows($pResult);
    $col = mysql_num_fields($pResult);

    if (0 == $row) {
        echo 'No Data Exist!';

        return;
    }

    if ('' == $rowperpage) {
        $rowperpage = 20;
    }
    if ('' == $page) {
        $page = 0;
    } else {
        --$page;
    }
    mysql_data_seek($pResult, $page * $rowperpage);

    echo "<table cellspacing=1 cellpadding=2>\n";
    echo "<tr>\n";
    for ($i = 0; $i < $col; ++$i) {
        $field = mysql_fetch_field($pResult, $i);
        echo '<th>';
        echo "<a 
href='$PHP_SELF?action=viewData&dbname=$dbname&tablename=$tablename&orderby=" . $field->name . "'>" . $field->name . "</a>\n";
        echo "</th>\n";
    }
    echo "<th colspan=2>Action</th>\n";
    echo "</tr>\n";

    for ($i = 0; $i < $rowperpage; ++$i) {
        $rowArray = mysql_fetch_row($pResult);
        if (false == $rowArray) {
            break;
        }
        echo "<tr>\n";
        $key = '';
        for ($j = 0; $j < $col; ++$j) {
            $data = $rowArray[$j];

            $field = mysql_fetch_field($pResult, $j);
            if (1 == $field->primary_key) {
                $key .= '&' . $field->name . '=' . $data;
            }

            if (strlen($data) > 20) {
                $data = substr($data, 0, 20) . '...';
            }
            $data = htmlspecialchars($data);
            echo "<td>\n";
            echo "$data\n";
            echo "</td>\n";
        }

        if ('' == $key) {
            echo "<td colspan=2>no Key</td>\n";
        } else {
            echo "<td><a 
href='$PHP_SELF?action=editData&dbname=$dbname&tablename=$tablename$key'>Edit</a></td>\n";
            echo "<td><a 
href='$PHP_SELF?action=deleteData&dbname=$dbname&tablename=$tablename$key' 
onClick=\"return confirm('Delete Row?')\">Delete</a></td>\n";
        }
        echo "</tr>\n";
    }
    echo "</table>\n";

    echo "<font size=2>\n";
    echo "<form 
action='$PHP_SELF?action=viewData&dbname=$dbname&tablename=$tablename' 
method=post>\n";
    echo "<font color=green>\n";
    echo($page + 1) . '/' . (int) ($row / $rowperpage + 1) . ' page';
    echo "</font>\n";
    echo ' | ';
    if ($page > 0) {
        echo "<a 
href='$PHP_SELF?action=viewData&dbname=$dbname&tablename=$tablename&page=" . ($page);
        if ('' != $orderby) {
            echo "&orderby=$orderby";
        }
        echo "'>Prev</a>\n";
    } else {
        echo 'Prev';
    }
    echo ' | ';
    if ($page < ($row / $rowperpage) - 1) {
        echo "<a 
href='$PHP_SELF?action=viewData&dbname=$dbname&tablename=$tablename&page=" . ($page + 2);
        if ('' != $orderby) {
            echo "&orderby=$orderby";
        }
        echo "'>Next</a>\n";
    } else {
        echo 'Next';
    }
    echo ' | ';
    if ($row > $rowperpage) {
        echo "<input type=text size=4 name=page>\n";
        echo "<input type=submit value='Go'>\n";
    }
    echo "</form>\n";
    echo "</font>\n";
}

function manageData($cmd)
{
    global $mysqlHandle, $dbname, $tablename, $PHP_SELF;

    if ('add' == $cmd) {
        echo "<h1>Add Data</h1>\n";
    } elseif ('edit' == $cmd) {
        echo "<h1>Edit Data</h1>\n";
        $pResult = mysql_list_fields($dbname, $tablename);
        $num = mysql_num_fields($pResult);

        $key = '';
        for ($i = 0; $i < $num; ++$i) {
            $field = mysql_fetch_field($pResult, $i);
            if (1 == $field->primary_key) {
                if (1 == $field->numeric) {
                    $key .= $field->name . '=' . $GLOBALS[$field->name] . ' AND ';
                } else {
                    $key .= $field->name . "='" . $GLOBALS[$field->name] . "' AND ";
                }
            }
        }
        $key = substr($key, 0, strlen($key) - 4);

        mysql_select_db($dbname, $mysqlHandle);
        $pResult = mysql_query($queryStr = "SELECT * FROM $tablename WHERE 
$key", $mysqlHandle);
        $data = mysql_fetch_array($pResult);
    }

    echo "<p class=location>$dbname &gt; $tablename</p>\n";

    echo "<form action='$PHP_SELF' method=post>\n";
    if ('add' == $cmd) {
        echo "<input type=hidden name=action value=addData_submit>\n";
    } elseif ('edit' == $cmd) {
        echo "<input type=hidden name=action value=editData_submit>\n";
    }
    echo "<input type=hidden name=dbname value=$dbname>\n";
    echo "<input type=hidden name=tablename value=$tablename>\n";
    echo "<table cellspacing=1 cellpadding=2>\n";
    echo "<tr>\n";
    echo "<th>Name</th>\n";
    echo "<th>Type</th>\n";
    echo "<th>Function</th>\n";
    echo "<th>Data</th>\n";
    echo "</tr>\n";

    $pResult = mysql_db_query($dbname, "SHOW fields FROM $tablename");
    $num = mysql_num_rows($pResult);

    $pResultLen = mysql_list_fields($dbname, $tablename);

    for ($i = 0; $i < $num; ++$i) {
        $field = mysql_fetch_array($pResult);
        $fieldname = $field['Field'];
        $fieldtype = $field['Type'];
        $len = mysql_field_len($pResultLen, $i);

        echo '<tr>';
        echo "<td>$fieldname</td>";
        echo '<td>' . $field['Type'] . '</td>';
        echo "<td>\n";
        echo "<select name=${fieldname}_function>\n";
        echo "<option>\n";
        echo "<option>ASCII\n";
        echo "<option>CHAR\n";
        echo "<option>SOUNDEX\n";
        echo "<option>CURDATE\n";
        echo "<option>CURTIME\n";
        echo "<option>FROM_DAYS\n";
        echo "<option>FROM_UNIXTIME\n";
        echo "<option>NOW\n";
        echo "<option>PASSWORD\n";
        echo "<option>PERIOD_ADD\n";
        echo "<option>PERIOD_DIFF\n";
        echo "<option>TO_DAYS\n";
        echo "<option>USER\n";
        echo "<option>WEEKDAY\n";
        echo "<option>RAND\n";
        echo "</select>\n";
        echo "</td>\n";
        $value = htmlspecialchars($data[$i]);
        if ('add' == $cmd) {
            $type = strtok($fieldtype, " (,)\n");
            if ('enum' == $type || 'set' == $type) {
                echo "<td>\n";
                if ('enum' == $type) {
                    echo "<select name=$fieldname>\n";
                } elseif ('set' == $type) {
                    echo "<select name=$fieldname size=4 multiple>\n";
                }
                echo strtok("'");
                while ($str = strtok("'")) {
                    echo "<option>$str\n";
                    strtok("'");
                }
                echo "</select>\n";
                echo "</td>\n";
            } else {
                if ($len < 40) {
                    echo "<td><input type=text size=40 maxlength=$len 
name=$fieldname></td>\n";
                } else {
                    echo "<td><textarea cols=40 rows=3 maxlength=$len 
name=$fieldname></textarea>\n";
                }
            }
        } elseif ('edit' == $cmd) {
            $type = strtok($fieldtype, " (,)\n");
            if ('enum' == $type || 'set' == $type) {
                echo "<td>\n";
                if ('enum' == $type) {
                    echo "<select name=$fieldname>\n";
                } elseif ('set' == $type) {
                    echo "<select name=$fieldname size=4 multiple>\n";
                }
                echo strtok("'");
                while ($str = strtok("'")) {
                    if ($value == $str) {
                        echo "<option selected>$str\n";
                    } else {
                        echo "<option>$str\n";
                    }
                    strtok("'");
                }
                echo "</select>\n";
                echo "</td>\n";
            } else {
                if ($len < 40) {
                    echo "<td><input type=text size=40 maxlength=$len name=$fieldname 
value=\"$value\"></td>\n";
                } else {
                    echo "<td><textarea cols=40 rows=3 maxlength=$len 
name=$fieldname>$value</textarea>\n";
                }
            }
        }
        echo '</tr>';
    }
    echo "</table><p>\n";
    if ('add' == $cmd) {
        echo "<input type=submit value='Add Data'>\n";
    } elseif ('edit' == $cmd) {
        echo "<input type=submit value='Edit Data'>\n";
    }
    echo "<input type=button value='Cancel' onClick='history.back()'>\n";
    echo "</form>\n";
}

function manageData_submit($cmd)
{
    global $mysqlHandle, $dbname, $tablename, $fieldname, $PHP_SELF,
$queryStr,
$errMsg;

    $pResult = mysql_list_fields($dbname, $tablename);
    $num = mysql_num_fields($pResult);

    mysql_select_db($dbname, $mysqlHandle);
    if ('add' == $cmd) {
        $queryStr = "INSERT INTO $tablename VALUES (";
    } elseif ('edit' == $cmd) {
        $queryStr = "REPLACE INTO $tablename VALUES (";
    }
    for ($i = 0; $i < $num - 1; ++$i) {
        $field = mysql_fetch_field($pResult);
        $func = $GLOBALS[$field->name . '_function'];
        if ('' != $func) {
            $queryStr .= " $func(";
        }
        if (1 == $field->numeric) {
            $queryStr .= $GLOBALS[$field->name];
            if ('' != $func) {
                $queryStr .= '),';
            } else {
                $queryStr .= ',';
            }
        } else {
            $queryStr .= "'" . $GLOBALS[$field->name];
            if ('' != $func) {
                $queryStr .= "'),";
            } else {
                $queryStr .= "',";
            }
        }
    }
    $field = mysql_fetch_field($pResult);
    if (1 == $field->numeric) {
        $queryStr .= $GLOBALS[$field->name] . ')';
    } else {
        $queryStr .= "'" . $GLOBALS[$field->name] . "')";
    }

    mysql_query($queryStr, $mysqlHandle);
    $errMsg = mysql_error();

    viewData('');
}

function deleteData()
{
    global $mysqlHandle, $dbname, $tablename, $fieldname, $PHP_SELF,
$queryStr,
$errMsg;

    $pResult = mysql_list_fields($dbname, $tablename);
    $num = mysql_num_fields($pResult);

    $key = '';
    for ($i = 0; $i < $num; ++$i) {
        $field = mysql_fetch_field($pResult, $i);
        if (1 == $field->primary_key) {
            if (1 == $field->numeric) {
                $key .= $field->name . '=' . $GLOBALS[$field->name] . ' AND ';
            } else {
                $key .= $field->name . "='" . $GLOBALS[$field->name] . "' AND ";
            }
        }
    }
    $key = substr($key, 0, strlen($key) - 4);

    mysql_select_db($dbname, $mysqlHandle);
    $queryStr = "DELETE FROM $tablename WHERE $key";
    mysql_query($queryStr, $mysqlHandle);
    $errMsg = mysql_error();

    viewData('');
}

function dump()
{
    global $PHP_SELF, $USERNAME, $PASSWORD, $action, $dbname, $tablename;

    if ('dumpTable' == $action) {
        $filename = $tablename;
    } else {
        $filename = $dbname;
    }

    header("Content-disposition: filename=$filename.sql");
    header('Content-type: application/octetstream');
    header('Pragma: no-cache');
    header('Expires: 0');

    $pResult = mysql_query('show variables');
    while (1) {
        $rowArray = mysql_fetch_row($pResult);
        if (false == $rowArray) {
            break;
        }
        if ('basedir' == $rowArray[0]) {
            $bindir = $rowArray[1] . 'bin/';
        }
    }

    passthru($bindir . "mysqldump --user=$USERNAME --password=$PASSWORD 
$dbname 
$tablename");
}

function utils()
{
    global $PHP_SELF, $command;
    echo "<h1>Utilities</h1>\n";
    if ('' == $command || 'flush' == substr($command, 0, 5)) {
        echo "<hr>\n";
        echo "Show\n";
        echo "<ul>\n";
        echo "<li><a 
href='$PHP_SELF?action=utils&command=show_status'>Status</a>\n";
        echo "<li><a 
href='$PHP_SELF?action=utils&command=show_variables'>Variables</a>\n";
        echo "<li><a 
href='$PHP_SELF?action=utils&command=show_processlist'>Processlist</a>\n";
        echo "</ul>\n";
        echo "Flush\n";
        echo "<ul>\n";
        echo "<li><a 
href='$PHP_SELF?action=utils&command=flush_hosts'>Hosts</a>\n";
        if ('flush_hosts' == $command) {
            if (false != mysql_query('Flush hosts')) {
                echo '<font size=2 color=red>- Success</font>';
            } else {
                echo '<font size=2 color=red>- Fail</font>';
            }
        }
        echo "<li><a 
href='$PHP_SELF?action=utils&command=flush_logs'>Logs</a>\n";
        if ('flush_logs' == $command) {
            if (false != mysql_query('Flush logs')) {
                echo '<font size=2 color=red>- Success</font>';
            } else {
                echo '<font size=2 color=red>- Fail</font>';
            }
        }
        echo "<li><a 
href='$PHP_SELF?action=utils&command=flush_privileges'>Privileges</a>\n";
        if ('flush_privileges' == $command) {
            if (false != mysql_query('Flush privileges')) {
                echo '<font size=2 color=red>- Success</font>';
            } else {
                echo '<font size=2 color=red>- Fail</font>';
            }
        }
        echo "<li><a 
href='$PHP_SELF?action=utils&command=flush_tables'>Tables</a>\n";
        if ('flush_tables' == $command) {
            if (false != mysql_query('Flush tables')) {
                echo '<font size=2 color=red>- Success</font>';
            } else {
                echo '<font size=2 color=red>- Fail</font>';
            }
        }
        echo "<li><a 
href='$PHP_SELF?action=utils&command=flush_status'>Status</a>\n";
        if ('flush_status' == $command) {
            if (false != mysql_query('Flush status')) {
                echo '<font size=2 color=red>- Success</font>';
            } else {
                echo '<font size=2 color=red>- Fail</font>';
            }
        }
        echo "</ul>\n";
    } else {
        $queryStr = ereg_replace('_', ' ', $command);
        $pResult = mysql_query($queryStr);
        if (false == $pResult) {
            echo 'Fail';

            return;
        }
        $col = mysql_num_fields($pResult);

        echo "<p class=location>$queryStr</p>\n";
        echo "<hr>\n";

        echo "<table cellspacing=1 cellpadding=2 border=0>\n";
        echo "<tr>\n";
        for ($i = 0; $i < $col; ++$i) {
            $field = mysql_fetch_field($pResult, $i);
            echo '<th>' . $field->name . "</th>\n";
        }
        echo "</tr>\n";

        while (1) {
            $rowArray = mysql_fetch_row($pResult);
            if (false == $rowArray) {
                break;
            }
            echo "<tr>\n";
            for ($j = 0; $j < $col; ++$j) {
                echo '<td>' . htmlspecialchars($rowArray[$j]) . "</td>\n";
            }
            echo "</tr>\n";
        }
        echo "</table>\n";
    }
}

function header_html()
{
    global $PHP_SELF; ?>
<html>
<head>
<title>MySQL Web Interface</title>
<style type="text/css">
<!--
p.location {
	color: #11bb33;
	font-size: small;
}
h1 {
	color: #A4A260;
}
th {
	background-color: #BDBE42;
	color: #FFFFFF;
	font-size: x-small;
}
td {
	background-color: #DEDFA5;
	font-size: x-small;
}
form {
	margin-top: 0;
	margin-bottom: 0;
}
a {
	text-decoration:none;
	color: #848200;
	font-size:x-small;
}
a:link {
}
a:hover {
	background-color:#EEEFD5;
	color:#646200;
	text-decoration:none
}
//-->
</style>
</head>
<body>
<?php
}

function footer_html()
{
    global $mysqlHandle, $dbname, $tablename, $PHP_SELF, $USERNAME;

    echo "<hr>\n";
    echo "<font size=2>\n";
    echo "<font color=blue>[$USERNAME]</font> - \n";

    echo "<a href='$PHP_SELF?action=listDBs'>Database List</a> | \n";
    if ('' != $tablename) {
        echo "<a 
href='$PHP_SELF?action=listTables&dbname=$dbname&tablename=$tablename'>Table 
List</a> | ";
    }
    echo "<a href='$PHP_SELF?action=utils'>Utils</a> |\n";
    echo "<a href='$PHP_SELF?action=logout'>Logout</a>\n";
    echo "</font>\n";
    echo "</body>\n";
    echo "</html>\n";
}

//------------------------------------------------------ MAIN

if ('logon' == $action || '' == $action || 'logout' == $action) {
    logon();
} elseif ('logon_submit' == $action) {
    logon_submit();
} elseif ('dumpTable' == $action || 'dumpDB' == $action) {
    while (list($var, $value) = each($HTTP_COOKIE_VARS)) {
        if ('mysql_web_admin_username' == $var) {
            $USERNAME = $value;
        }
        if ('mysql_web_admin_password' == $var) {
            $PASSWORD = $value;
        }
    }
    $mysqlHandle = mysql_pconnect($HOSTNAME, $USERNAME, $PASSWORD);
    dump();
} else {
    while (list($var, $value) = each($HTTP_COOKIE_VARS)) {
        if ('mysql_web_admin_username' == $var) {
            $USERNAME = $value;
        }
        if ('mysql_web_admin_password' == $var) {
            $PASSWORD = $value;
        }
    }
    echo '<!--';
    $mysqlHandle = mysql_pconnect($HOSTNAME, $USERNAME, $PASSWORD);
    echo '-->';

    if (false == $mysqlHandle) {
        echo "<html>\n";
        echo "<head>\n";
        echo "<title>MySQL Web Interface</title>\n";
        echo "</head>\n";
        echo "<body>\n";
        echo "<table width=100% height=100%><tr><td><center>\n";
        echo "<h1>Wrong Password!</h1>\n";
        echo "<a href='$PHP_SELF?action=logon'>Logon</a>\n";
        echo "</center></td></tr></table>\n";
        echo "</body>\n";
        echo "</html>\n";
    } else {
        header_html();
        if ('listDBs' == $action) {
            listDatabases();
        } elseif ('createDB' == $action) {
            createDatabase();
        } elseif ('dropDB' == $action) {
            dropDatabase();
        } elseif ('listTables' == $action) {
            listTables();
        } elseif ('createTable' == $action) {
            createTable();
        } elseif ('dropTable' == $action) {
            dropTable();
        } elseif ('viewSchema' == $action) {
            viewSchema();
        } elseif ('query' == $action) {
            viewData($queryStr);
        } elseif ('addField' == $action) {
            manageField('add');
        } elseif ('addField_submit' == $action) {
            manageField_submit('add');
        } elseif ('editField' == $action) {
            manageField('edit');
        } elseif ('editField_submit' == $action) {
            manageField_submit('edit');
        } elseif ('dropField' == $action) {
            dropField();
        } elseif ('viewData' == $action) {
            viewData('');
        } elseif ('addData' == $action) {
            manageData('add');
        } elseif ('addData_submit' == $action) {
            manageData_submit('add');
        } elseif ('editData' == $action) {
            manageData('edit');
        } elseif ('editData_submit' == $action) {
            manageData_submit('edit');
        } elseif ('deleteData' == $action) {
            deleteData();
        } elseif ('utils' == $action) {
            utils();
        }

        mysql_close($mysqlHandle);
        footer_html();
    }
}

?>
