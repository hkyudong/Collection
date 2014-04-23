<?php  
//session_start(); 
//$_SESSION['id'] = rand(1,100);
?>

<!doctype html>
<html>

<head>
<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=2, minimum-scale=1"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>移民办移动数据采集系统</title>
<link href="demo.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/cordova.js" charset="utf-8"></script>
<script type="text/javascript" src="js/cameraAndupload.js" charset="utf-8"></script>
</head>

<body>
	<div class="question" id="question_2009130">

	<div class="content f14px">

	1、当前搬迁进程？（单选） 

	<span class="tip">(必选)</span>	</div>

	<div class="content line">

	<div class="nodetail"></div>	
	<table width="100%" border="0" cellpadding="0" cellspacing="0">

	<tr><td style="padding-right:20px;">

			<label><input type="radio" name="mt" value="已经搬迁完毕">

			<span class="option">已经搬迁完毕</span></label>

			</td>

		</tr>

	<tr><td width="430" style="padding-right:20px;">

			<label><input type="radio" name="mt" value="未开始搬迁">

			<span class="option">未开始搬迁</span></label>

			</td>

		</tr>

	<tr><td width="430" style="padding-right:20px;">

			<label><input type="radio" name="mt" value="正在搬迁程序中">

			<span class="option">正在搬迁程序中</span></label>

			</td>

		</tr>

	</table>

	</div>
	
	<div class="content f14px">

	2、影响搬迁进度的因素？

<span class="tip">(必选，最少1项)</span>	</div>

	<div class="content line">

	<div class="nodetail"></div>	
	<table width="100%" border="0" cellpadding="0" cellspacing="0">

	<tr><td width="430" style="padding-right:20px;">

			<label><input type="checkbox" name="ty" value="搬迁地点不满意"> 

			<span class="option">搬迁地点不满意</span></label>

			</td>

		</tr>

	<tr><td width="430" style="padding-right:20px;">

			<label><input type="checkbox"  name="ty" value="搬迁补偿不满意"> 

			<span class="option">搬迁补偿不满意</span></label>

			</td>

		</tr>

	<tr><td width="430" style="padding-right:20px;">

			<label><input type="checkbox"  name="ty" value="工作人员态度不满意"> 

			<span class="option">工作人员态度不满意</span></label>

			</td>

		</tr>

	<tr><td width="430" style="padding-right:20px;">

			<label><input type="checkbox"  name="ty" value="其他原因"> 

			<span class="option">其他原因</span></label>

			</td>

	</tr>
	</table>
	</div>
	<div class="content f14px">

		3、这里填写其他原因： 

	<span class="written"><span class="tip">(最少0</label>字，最多50</label>字)</span></div>

	<div class="content line">

	<tr>
		<td>
			&nbsp;<textarea class="multi_line" name="jy" id="jy" value="" ></textarea>

		</td>

	</tr>

	</table>

	</div>
	
	<div class="content f14px">

		4、照片1 

<span class="written"><span class="tip">(必须有照片)</span></div>

	<div class="content line">
	<table>
	<tr>
		<td>
			<button onclick="capturePhotoz();">拍照</button>
			<img style="display:none;width:130px;height:80px;" id="smallImagesz" class="imgshow" src="" />
		</td>
	</tr>

	</table>

	</div>
	
	<div class="content f14px">

		5、照片2

<span class="written"><span class="tip">(必须有照片)</span></div>

	<div class="content line">
	<table>
	<tr>
		<td>
			<button onclick="capturePhoto();">拍照</button>
			<img style="display:none;width:130px;height:80px;" class="imgshow"
			id="smallImage" src="" />
			<input type="hidden" name="hjbz" id="hjbz" value="" />
		</td>
	</tr>

	</table>

	</div>
	
	<div class="content f14px">
	6、照片3 

<span class="written"><span class="tip">(必须有照片)</span></div>

	<div class="content line">
	<table>
	<tr>
		<td>
			<button onclick="capturePhotosx();">拍照</button>
			<img style="display:none;width:130px;height:80px;" class="imgshow"
			id="smallImagesx" src="" />
		</td>
	</tr>
	</table>

	</div>
	
	<div class="content f14px">
	7、照片4

<span class="written"><span class="tip">(必须有照片和文字说明)</span></div>

	<div class="content line">
	<table>
	<tr>
		<td>
			<button onclick="capturePhotos();">拍照</button>
			<img style="display:none;width:130px;height:80px;" class="imgshow"
			id="smallImages" src="" />
			<input type="hidden" name="zfwt" id="zfwt" value="" />
		</td>
	</tr>
	
	<tr>
		<td>
			<label><span class="option">照片文字说明：</span></label>
		</td>

	</tr>
	
	<tr>
		<td>
			<textarea class="multi_line" name="zfwt_sm" id="zfwt_sm" value="" ></textarea>
		</td>

	</tr>

	</table>

	</div>
	
	<div align="center"><input type="button" id="" value=" 提 交 "  onclick="tj();"></div>
</div>

</body>
 <script type="text/javascript" charset="utf-8">
             
   			</script>
</html>