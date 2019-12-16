<?php
	header('content-type:text/html;charset=utf-8');
	include('input.php');
	include('connect.php');
	$content = $_POST["content"];
	$user = $_POST["user"];

	$input = new input();

	//调用函数检查评论信息
	$is=$input->post($content);
	if ($is==false) {
		die('评论为空或含有敏感关键字');
	}
	//调用函数检查评论信息
	$is=$input->post($user);
	if ($is==false) {
		die('昵称为空或含有敏感关键字');
	}
	//将输入的数据存入数据库
	$time = time(); //获取当前时间戳
	//编写sql语句
	$sql = "INSERT INTO msgs(content,user,intime) VALUES ('{$content}','{$user}','{$time}')";
	//执行sql语句
	$is = $db -> query($sql);
	header("location:index.php");