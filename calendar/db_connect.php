<?php
/* Database connection start */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


/*
mysql_connect('sql308.epizy.com', 'epiz_26496412', 'MAspVytRLHfONL5') or die('Could not connect the database : Username or password incorrect');
mysql_select_db('epiz_26496412_w790') or die ('No database found');
echo 'Database Connected successfully';

*/
/*
$servername = "sql308.epizy.com";
$username = "epiz_26496412";
$password = "MAspVytRLHfONL5";
$dbname = "epiz_26496412_w790";
$conn = mysql_connect('sql308.epizy.com', 'epiz_26496412', 'MAspVytRLHfONL5', 'epiz_26496412_w790') or die("Connection failed: " . mysql_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysql_connect_error());
 //   exit();
} */

?>
