<?php
error_reporting(0);
session_start();
header('Content-type:application/json;charset=utf-8');
require('./config/conn.php');

$data = array(
	'name' => $_REQUEST['name'],
	'sex' => $_REQUEST['sex'],
	'age' => $_REQUEST['age']
);

$id = $conn -> insert ('teacher', $data);

if($id){
	echo '{"type":true, "msg":"添加成功", "url":"/"}';
}else{
	echo '{"type":false, "msg":"添加失败", "url":"/"}';
}
?>