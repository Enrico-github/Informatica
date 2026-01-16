<?php
$num  = 10;
$var = "buongiorno";
$materie = ['informatica', 'tpsit', 'sistemi'];
$message = 'questo è un messaggio per js'
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link href = mystyle.css rel="stylesheet">
<script></script>
<body>
<p>ciao</p>
<p><?php echo $var ?>
<p><?=$var ?>
<?php foreach ($materie as $item): ?>
<hr>
<p><?=$item ?>
<?php endforeach;?>
<?php if ($num < 8): ?>
<p>il numero è più piccolo di 8</p>
<?php elseif ($num > 8): ?>
<p>il numero è maggiore di 8</p>
<?php endif;?>
<button id="mybutton">premi</button>
<script> message = <?= json_encode($message)?></script>
<script src="myscript.js"></script>
</body>
</html>

