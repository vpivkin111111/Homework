<html>
<body>
<meta charset="UTF-8">
<form action="" method="GET">
	<input name="$a $b -$a-$b" value="<?php if (isset($_GET['name'])) echo $_GET['name' ]; ?>">
	<textarea name="message">
		</form>
<?php

	/*Если форма была отправлена и город не пустой:
		if (!empty($_GET['city'])) {
		$city=$_GET['city'];
		echo'Ваш город: '.$city;
	}*/
	/*Если форма была отправлена и город не пустой:
	if (isset($_GET['city'])) {
		$city=strip_tags($_GET['city']);
		echo'Ваш город: '.$city;
	}
	Если город пустой - покажем форму*/
	
	/*Если форма была отправлена и город не пустой:
	if (isset($_GET['city'])) {
		$city=strip_tags($_GET['city']);
		echo'Ваш город: '.$city;
	}*/
	
    /*if (isset($_GET['name'])) {
    $name = $_GET['name'];
    echo 'Hello, '. $name;
    }*/
    /*if (isset($_GET['name']) and isset($_GET['age']) and isset($_GET['text'])) {
    $name = strip_tags($_GET['name']);
    $age = strip_tags($_GET['age']);
    $text = strip_tags($_GET['text']);
    echo 'Hello, ' . $name . ', ' . $age . '<br>Your message: ' . $text;
}*/  
        /*if (isset($_GET['age'])) {
		$age = strip_tags($_GET['age']);
		echo 'Ваш возраст: '.$age.'лет';
	}*/
        /*if (isset($_GET['submit'])) {
		$login = 'user';
		$pass = '123456';
		$formLogin = trim($_GET['login']);
		$formPass = trim($_GET['pass']);
		if ($login == $formLogin and $pass == $formPass) {
			echo 'Доступ разрешен!';
		} else {
			echo 'Доступ запрещен!';
		}
	}*/
        /*if (isset($_GET['submit'])) {
		$name = $_GET['name'];
		echo $name;
	}*/
	if (isset($_GET['message'])) echo $_GET['message']; ?>
	</textarea>
	<input type="submit">
?>	
</body>
</html>