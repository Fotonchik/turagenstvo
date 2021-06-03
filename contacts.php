<!DOCTYPE html>
<html>
<head>
<meta http-equiv = "Content-Type"
content = "text/html; charset = utf-8">
<title>
Сайт туристической компании
</title>
<style>
div#content {
width: 80%;
border: none;
margin: auto;}
header, footer {
padding: 1em;
color: white;
background-color: #007196;
clear: left;
text-align: center;
}
nav {
height: 40px;
border: solid #333;
padding: 1em;
text-align: center;
}
nav a {
text-decoration: none;
padding: 1em;
}
#main {
padding: 1em;}
div #logo img{
width: 200px;
height: 150px;
float: left;
}
table {
width: 80%;
margin: auto;}
table td{
text-align: left;
border: 2px solid red;}
</style>

</head>
<body>
<div id = "content">
<header>
<div id = "logo">
<img src = "logo.jpg">
</div>
<div id = "name">
<h1>ПУТЕШЕСТВУЙ С НАМИ!</h1>
</div>
</header>
<nav>
<a href = "index.php">
Главная страница
</a>
<a href = "tour.php">
Наши туры
</a>
<a href = "contacts.php">
О нас
</a>
</nav>
<div id = "main">
<p>
Наш адрес: г. Белогорск, ул. Ракетная, 18.
</p>
<p>
Для связи с нами заполните форму:
</p>
<form method = "get" action = "#">
<!-- Начало таблицы -->

<?php
include("dbconnect.php");
$result = $mysqli->query("SELECT * FROM remarks");
$table = "<table>";
$k = 1;
while ($myrow = $result->fetch_assoc()) {
$table.="<tr>";
$table.="<td>".$myrow['tema']."</td>";
$table.="<td>".$myrow['text']."</td>";
$table.="</tr>";
$k++;
}
$table.="</table>";
echo $table;
?>
</div>
</div>
<footer>
Это сайт, предназначенный для обучения
</footer>
</div>
</body>
</html>