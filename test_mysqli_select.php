<?php
	header('content-type:text/html;charset=UTF-8');
	// //预定义数据连接参数
	// $host = '127.0.0.1';
	// $user = 'root';
	// $pwd = '';
	// $dbname = 'phpm_board';
	// //连接数据库
	// $db = new mysqli($host,$user,$pwd,$dbname);
	// //检查是否连接成功
	// if($db -> connect_errno != 0){
	// 	echo "连接失败！";
	// 	echo $db -> connect_error;
	// }
	// //设定数据库数据传输的编码
	// $db -> query("SET NAMES UTF8");
	include('connect.php');

	//编写sql语句查询
	$sql = "SELECT * FROM msgs ORDER BY id DESC";
	//执行sql 语句
	$mysqli_result = $db -> query($sql);
	//获取返回值
	if($mysqli_result===false){
		echo "SQL错误";
		//停止执行代码
		exit;
	}
	//用while获取数据
	while($row = $mysqli_result -> fetch_array(MYSQLI_ASSOC)){
		//将数据对象保存到数组$rows[]变为二维数组
		$rows[] = $row;
	}