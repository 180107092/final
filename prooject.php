<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="project-regis.css">
</head>
<body>
	<div class="one">
		<a href="C:\Users\Lenovo\Desktop\veb\project\html\project-shap.html" class="two">Главная</a>
		<a href="C:\Users\Lenovo\Desktop\veb\project\html\project-2.html" class="two">Смотреть работы</a>
		<a href="C:\Users\Lenovo\Desktop\veb\project\html\project-regis.html" class="two">Войти/Регистрация</a>
	</div>	
	<div id="box">
		<div class="left">
			<h1>Регистрация</h1>
			<form action="project.php" method="post">
				<input type="text" name="login" id="login" placeholder="Логин"/>
				<input type="text" name="name" id="name" placeholder="Имя"/>
				<input type="password" name="password" id="pass" placeholder="Пароль"/>
				<input type="submit" name="supmit" value="Sing me up"/>
			</form>
		</div>
		<div class="right">
			<h1>Войти</h1>
			<input type="text" name="login" id="login" placeholder="Логин"/>
			<input type="password" name="password" id="pass" placeholder="Пароль"/>
			<input type="submit" name="supmit" value="Sing in"/>

		</div>
</body>
</html>