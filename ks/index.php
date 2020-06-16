<?php
$f='http://jt.ismicool.cn/douyin.txt';//已改为随机抖音接口 需要快手扭屁股接口换成https://jt.ismicool.cn/kuaishou.txt 接口持续更新
$a=file($f);  //把文件的所有内容获取到数组里面
$n=count($a); //获得总行数
$rnd=rand(0,$n);    //产生随机行号
$rnd_line=$a[$rnd]; //获得随机行
$tit = date('m 月 d 日')." - 小姐姐视频";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>随机小姐姐</title>
		<meta name=viewport content="width=device-width,anicital-scale=1">
		<link rel="stylesheet" href="css/bootstrap.css" />
        <meta name="referrer" content="never">
		<script src="https://cdn.bootcdn.net/ajax/libs/jquery/2.2.3/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/tv-beipy.js"/></script>
		<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
    <script>
        window.onload=function(){
            var script=document.createElement("script");
            script.setAttribute("type", "text/javascript");
            var num=Math.random();
            var _url="http://www.ckplayer.com/Public/ckplayer/x1/ckplayer.js?v="+num;
            script.setAttribute("src", _url);
            var heads = document.getElementsByTagName("head");
            
            if(heads.length) { 
                heads[0].appendChild(script);  
            }
        }
  </script>
		<style>
body{ text-align:center}
#divcss6{margin:0 auto;border:0px solid #000;width:100%;height:100%}
#n{margin:10px auto; width:100%; border:1px solid #CCC;font-size:12px; line-height:1000px;}
#n a{ padding:0 4px; color:#000}
</style>
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>
		<div class="container-fluid video-box">
			<div class="container ">
				<div class="tit-name">
					<span>欢迎观看：</span>
					<h1 id="tittext">第 <?=$rnd;?> 条视频</h1>
				</div><br><br>
	<div id="divcss6"><video width="80%" height="100%" controls="controls" autoplay="autoplay" loop="loop">
  <source src="<?=$rnd_line;?>" type="video/ogg">
  <source src="<?=$rnd_line;?>" type="video/mp4">
Your browser does not support the video tag.
</video></div><br>
<a href="javascript:location.reload()" style="padding:0em"><button  style="background-color: #3376f3;" type="button" class="btn btn-success btn-lg btn-block" onClick="dihejk()">随机个小姐姐</button></a>
<br><br><br><br><br>
		</div>