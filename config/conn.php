<?php
$real_path = str_replace("\\", "/", dirname(__FILE__));
date_default_timezone_set('Asia/Shanghai');

define('DB_HOST', 'localhost');  	                 // 数据库服务器地址
define('DB_USER', 'root');  		                   // 数据库用户名
define('DB_PWD', '12345678');	                     // 数据库密码
define('DB_NAME', 'school');  		                 // 数据库名称
define('DB_PORT', '3306');  		                   // 数据库端口

require 'class.MysqliDb.php';

$conn = new MysqliDb (DB_HOST, DB_USER, DB_PWD, DB_NAME, DB_PORT);
?>