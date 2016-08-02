<?php
header("content-type:text/html;charset=utf-8");
if($_COOKIE["username"]){
	echo '欢迎你'.$_COOKIE["username"]."<a href='03_logout_cookie.php'>退出登录</a>";
}else {
	echo "<a href='03_login_cookie.php'>请登录</a>";
}