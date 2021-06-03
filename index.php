<?php

session_start();
include ('tpl/header.php');
    ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<title>Сайт туристической компании</title>
<link rel="stylesheet" href="css/style.css">
<style>
.tour{
border: solid #007196;
margin: auto;
height: 100%;
display: flex;
flex-flow: row wrap;
}

.tour-img{
width: 250px;
height: 170px;
padding: 5px;
}

.tour p .tour img{
margin: 0 10px;
}

.btn{
margin-left: auto;
order: 999;
background-color: #66cdaa;
box-shadow: 20px 0 20px -20px #000 inset, -20px 0 20px -20px #000 inset;
color: white;
}
</style>
</head>
<body class="body-top">

    
    <!--
    
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body" style="max-width: 600px">
<form action="#" method="get" id="orderForm">
<div class="tour">
<label for="name" class="label">Выберите тур:</label>
<select id="inp1">
<option value="Крым" selected>Крым</option>
<option value="Кавказ">Кавказ</option>
<option value="Алтай">Алтай</option>
</select>
</div>
<div>
<div class="tour">
<label for="data" class="label">Выберите дату начала:</label>
<input type="date" id="inp2">
</div>
<div class="tour"><label for="number" class="label">Выберите количество участников</label>
<select name="" id="inp3">
<option value="1">1</option>
<option value="2" selected>2</option>
<option value="3">3</option>
<option value="4">4</option>
</select>
</div>
<div class="tour">
<label for="email" class="label">Ваш E-mail:</label>
<input type="email" id="inp4" class="input-xlarge" style="width: 150px;" required="required">
</div>
<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
<button type="submit" class="btn btn-primary" id="submit">Отправить</button>
</div>
</form>
</div>
</div>
</div>
</div>-->
    
    
    
    
    
    
<main class="flex">
<div class="row">
<div class="col">Актуальные направления путешествий</div>
</div>
<div class="container-fluid">
    <div id ="root">
    </div>
    
    
</div>
</main>
    <?php
    include ('tpl/footer.php');
    ?>
<script src="http://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>