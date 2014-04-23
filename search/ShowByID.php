<?php
header('Content-Type: text/html; charset=UTF-8');

//数据库连接相关
  require_once ("../config.php");
  $con = mysql_connect($DB_HOST,$DB_USER,$DB_PASSWORD);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db($DB_NAME, $con); 
mysql_query("set names 'utf8'");


$showID = $_GET["DATA_ID"];
echo $_GET["DATA_ID"];
//$showID = 48;
$result = mysql_query("select * from information where ID = '$showID' ");

$row = mysql_fetch_array($result);
echo '数据id：'.$row['ID'];
echo "<br />";
echo '当前搬迁进程：'.$row['mt'];
echo "<br />";

echo '影响搬迁进度的因素：'.$row['ty'];
echo "<br />";

echo '其他原因：'.$row['jy'];
echo "<br />";

echo '<img src="'.'http://192.168.191.1/xundian/upload/'.$row['imgURL1'].'" width="200" height="200">';
echo '<img src="'.'http://192.168.191.1/xundian/upload/'.$row['imgURL2'].'" width="200" height="200">';
echo '<img src="'.'http://192.168.191.1/xundian/upload/'.$row['imgURL3'].'" width="200" height="200">';
echo '<img src="'.'http://192.168.191.1/xundian/upload/'.$row['imgURL4'].'" width="200" height="200">';



echo "<br />";
echo '照片文字说明：'.$row['zfwt_sm'];
echo "<br />";
mysql_close($con);

?>