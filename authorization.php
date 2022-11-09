<?php
require 'db.php'
$Login = $_POST['Login'];
$Password = $_POST['Password'];
$query = "SELECT * FROM users WHERE Login = '".Login. "' AND Password='".Password."'";
$result = mysqli_query($link, $query);
$user = mysqli_fetch_assoc($result);

if(!empty($user)) {
	echo 'авторизация успешна';
} else {
echo 'ошибка';
}
?>