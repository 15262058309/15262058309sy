<?php
//�������ݿ⺯��
function alink($host,$user,$password,$db)
	{
	$links = mysql_connect($host,$user,$password);//�������������ݵ�ַ�û�������
	mysql_query('set names utf8');
	if(!$links)
	{
		die('���ݿ�����ʧ��');
	}
	else
	{
		echo('���ݿ����ӳɹ�');
	}
	if����
	$r = mysql_select_db($db,$links);//ѡ�����ݿ�
	return $r;
	}
?>