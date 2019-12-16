<?php
	//预定义数据连接参数
	$host = '127.0.0.1';
	$dbuser = 'root';
	$pwd = '123456';
	$dbname = 'phpm_board';
	//连接数据库
	$db = new mysqli($host,$dbuser,$pwd,$dbname);
	//检查是否连接成功
	if($db -> connect_errno != 0){
		echo "连接失败！";
		echo $db -> connect_error;
	}
	//设定数据库数据传输的编码
	$db -> query("SET NAMES UTF8");