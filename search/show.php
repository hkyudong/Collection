<?php
header('Content-Type: text/html; charset=UTF-8');
require_once ("../config.php");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
</head>
<body>


<!--    -->
<!--Page按照id查询页面    -->
<div data-role="page" id="pageShowByID">
  <div data-role="header">
    <h1>移民数据查询</h1>
    <div data-role="navbar">
      <ul>
        <li><a href="#pageShowByID" class="ui-btn-active ui-state-persist" data-icon="home">按照数据id查询</a></li>
        <li><a href="#pageShowAll" data-icon="arrow-r">全部信息浏览查询</a></li>
        <li><a href="#pageSearch" data-icon="search">匹配搜索</a></li>
      </ul>
    </div>
  </div>

  <div data-role="content">
    <form method="get" action="ShowByID.php">
      <fieldset data-role="fieldcontain">
        <label for="ID_lab">选择数据ID</label>
        <select name="DATA_ID" id="data_id_select">
        	<?php
  
  				$con = mysql_connect($DB_HOST,$DB_USER,$DB_PASSWORD);
				if (!$con)
  				{
  					die('Could not connect: ' . mysql_error());
  				}
				mysql_select_db($DB_NAME, $con); 
				mysql_query("set names 'utf8'"); 
				$result = mysql_query('select ID from information');
				while($row = mysql_fetch_array($result))
  				{
  					echo '<option value="'.$row['ID'].'">'.$row['ID'].'</option>';
  				}

				mysql_close($con);
			?>
         <option value="0">我的上传</option>
        </select>
      </fieldset>
      <input type="submit" data-inline="true" value="提交">
  </div>

  <div data-role="footer">
    <h1>Powered by 于东</h1>
  </div>
</div> 

<!--Page全部信息浏览查询    -->
<div data-role="page" id="pageShowAll">
  <div data-role="header">
    <h1>移民数据查询</h1>
    <div data-role="navbar">
      <ul>
        <li><a href="#pageShowByID" data-icon="home">按照数据id查询</a></li>
        <li><a href="#pageShowAll" class="ui-btn-active ui-state-persist" data-icon="arrow-r">全部信息浏览查询</a></li>
        <li><a href="#pageSearch" data-icon="search">匹配搜索</a></li>
      </ul>
    </div>
  </div>

  <div data-role="content">
    <p>全部信息浏览查询</p>
  </div>

  <div data-role="footer">
    <h1>Powered by 于东</h1>
  </div>
</div> 


<!--Page匹配搜索    -->
<div data-role="page" id="pageSearch">
  <div data-role="header">
    <h1>移民数据查询</h1>
    <div data-role="navbar">
      <ul>
        <li><a href="#pageShowByID" data-icon="home">按照数据id查询</a></li>
        <li><a href="#pageShowAll" data-icon="arrow-r">全部信息浏览查询</a></li>
        <li><a href="#pageSearch" class="ui-btn-active ui-state-persist" data-icon="search">匹配搜索</a></li>
      </ul>
    </div>
  </div>

  <div data-role="content">
    <form method="get" action="Search.php">
      <div data-role="fieldcontain">
        <label for="search">搜索：</label>
        <input type="search" name="search" id="search" placeholder="搜索内容...">
      </div>
      <input type="submit" data-inline="true" value="提交">
    </form> 
  </div>

  <div data-role="footer">
    <h1>Powered by 于东</h1>
  </div>
</div> 



</body>
</html>
