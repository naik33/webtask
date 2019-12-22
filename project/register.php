<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Авторизация и регистрация</title>
	<link rel="stylesheet" type="text/css" href="stylereg.css">
</head>
<body>
	<form action="signup.php" method="post" enctype="multipart/form-data">
		<label>ФИО</label>
		<input type="text" name="full_name" placeholder="Введите свое полное имя">
		<label>Логин</label>
		<input type="text" name="login" placeholder="Введите свой логин">
		<label>Почта</label>
		<input type="email" name="email" placeholder="Введите адрес почты">
		<label>Изображение профиля</label>
		<input type="file" name="avatar">
		<label>Пароль</label>
		<input type="password" name="password" placeholder="Введите свой пароль">
		<label>Подтверждение пароля</label>
		<input type="password" name="password_confirm" placeholder="Подтвердите пароль">
		<button>Войти</button>
		<p>
			У вас есть аккаунт? - <a href="index.php">авторизуйтесь</a>!
		</p>
	</form>

</body>
</html>