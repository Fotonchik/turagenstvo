
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<title>
Сайт туристической компании
</title>
      
</head>
<body>
    
    
    
    <?php
include ('tpl/header.php');
    ?>
<main class="flex">
<div class="row">
<div class="col">Актуальная информация о туре</div>
</div>
<div class="container-fluid">
    <?php
include('dbconnect.php');
    $label = 'id';
    $id = false;
    if (!empty($_GET[$label] ) ) {
        $id = $_GET[$label];
    }
    
    
    
$result=$mysqli->query("SELECT * FROM `tours` WHERE id = '$id'");
$myrow = $result->fetch_assoc();
    
$div = '<div id="row">';
$div .='<div class = "col">
<div class="tour">';

    
    $id = $myrow[id];
    $div.='<img src = '.$myrow[photo].'>';
    $div.='<p>'.$myrow[name].'</p>';
    $div.='<p>'.$myrow[programm].'</p>';
    $div.='</div></div>';
    $div.='</div>';
    echo $div;
    ?>
</div>
</main>
    <?php
    include ('tpl/footer.php');
    ?>
</body>
</html>