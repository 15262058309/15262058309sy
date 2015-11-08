<?php
//连接数据库函数
function alink($host,$user,$password,$db)
	{
	$links = mysql_connect($host,$user,$password);//三个参数：数据地址用户名密码
	mysql_query('set names utf8');
	if(!$links)
	{
		die('数据库连接失败');
	}
	else
	{
		echo('数据库连接成功');
	}
	if（）
	$r = mysql_select_db($db,$links);//选择数据库
	return $r;
	}
?>