<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<title>Регистрация</title>
</head>
<body>
    
    <?php
include ('tpl/header.php');
    ?>
    <main class = "flex">
<h2>Регистрация</h2>
<form action = "save_user.php" method = "post">
<p>
<label>Ваше имя:<br></label>
<input name = "name" type = "text" size = "15" maxlength =
"15">
</p>
<p>
<label>Ваш логин:<br></label>
    <input name = "login" type = "text" size = "15" maxlength = "15">
</p>
<p>
<label>Ваш пароль: <br></label>
<input name = "pass" type = "password" size = "15"
maxlength = "15">
</p>
<p>
<input type = "submit" name = "submit" value = "Зарегистрироваться">
</p>
</form></main>
    
    <?php
include ('tpl/footer.php');
    ?>
</body>
</html>