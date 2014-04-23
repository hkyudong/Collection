<?php
header('Content-Type: text/html; charset=UTF-8');
session_start(); 
$_SESSION['id'] = rand(1,100);
//数据库连接相关
  require_once ("../config.php");
  $con = mysql_connect($DB_HOST,$DB_USER,$DB_PASSWORD);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db($DB_NAME, $con); 
mysql_query("set names 'utf8'"); 

$file=fopen("log.txt","a");
//$total=0;

// 数据处理代码
//$imgURL =array('','','','');

  if ($_FILES["file"]["error"] > 0){
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
  }else{
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists("upload/" . $_FILES["file"]["name"])){
      echo $_FILES["file"]["name"] . " already exists. ";
    }else{
      $num = $_POST["imgNum"];
      //fputs($file,$num);
      $_SESSION['imgURL'.$num] = "upload/" . $num . ".jpg";
      move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $num . ".jpg");
      //插入数据库
      //echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
    }
  }
 
  if(!isset($_SESSION['mt'])){
        $_SESSION['mt'] = $_POST["mt"];
    }
  if(!isset($_SESSION['ty'])){
        $_SESSION['ty'] = $_POST["ty"];
    }
  if(!isset($_SESSION['jy'])){
        $_SESSION['jy'] = $_POST["jy"];
    }
  if(!isset($_SESSION['zfwt_sm'])){
        $_SESSION['zfwt_sm'] = $_POST["zfwt_sm"];
    }
  
  fputs($file,$_SESSION['mt']);
  fputs($file,$_SESSION['ty']);
  fputs($file,$_SESSION['jy']);
  fputs($file,$_SESSION['zfwt_sm']);

  //fputs($file,"序号：". $_SESSION['imgURL'][0].$_SESSION['imgURL'][1].$_SESSION['imgURL'][2].$DB_NAME);
  


function CheckNum(){
  for ($i=1; $i<=4 ; $i++) { 
   //$file=fopen("log.txt","a");
   //$tmpurl=$_SESSION['imgURL'.(string)$i];
   //fputs($file,'imgURL'.(string)$i.':'.$tmpurl);
   fclose($file);
    if (!$_SESSION['imgURL'.(string)$i]) {
      return 0;
    }
  }
  return 1;

}
 if (CheckNum()) {
    //$mt = $_SESSION['id'];
    $mt = $_SESSION['mt'];
    $ty = $_SESSION['ty'];
    $jy = $_SESSION['jy'].'我真的在测试';
    $zfwt_sm = $_SESSION['zfwt_sm'];
    $imgURL[0] = $_SESSION['imgURL1'];
    $imgURL[1] = $_SESSION['imgURL2'];
    $imgURL[2] = $_SESSION['imgURL3'];
    $imgURL[3] = $_SESSION['imgURL4'];

    mysql_query("INSERT INTO information (mt, ty, jy, zfwt_sm, imgURL1, imgURL2, imgURL3, imgURL4) 
      VALUES ('$mt', '$ty', '$jy', '$zfwt_sm', '$imgURL[0]', '$imgURL[1]', '$imgURL[2]', '$imgURL[3]')");
  
    session_destroy();
  }

  fclose($file);
  mysql_close($con);
?>