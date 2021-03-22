<?php
$servername='bkhqgwqtj27ym1ju7dmn-mysql.services.clever-cloud.com';
$username='u35qzso7dkdvcfbb';
$password='U8VSwxsc7UmHsKDDNrCi';
$dbname = "bkhqgwqtj27ym1ju7dmn";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>