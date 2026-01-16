<?php
$num  = 10;
$var = "buongiorno";
$materie = ['informatica', 'tpsit', 'sistemi'];
$message = 'questo è un messaggio per js'
$myArray = [
        [
                'nome' => 'Enrico',
                'cognome' => 'Prearo',
                'media' => 7
        ],
        [
                'nome' => 'Marcello',
                'cognome' => 'Targa',
                'media' => 6
        ],
        [
                'nome' => 'Riccardo',
                'cognome' => 'Merlo',
                'media' => 8
        ]
];
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
<br>
<table class = "mytable">
    <tr>
        <?php foreach ($myArray[0] as $key => $_): ?>
            <th><?= ucfirst($key) ?></th>
        <?php endforeach; ?>
    </tr>
    <tbody>
    <?php foreach ($myArray as $studente): ?>
        <tr>
            <td><?= $studente['nome'] ?></td>
            <td><?= $studente['cognome'] ?></td>
            <td><?= $studente['media'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<br>
<script> message = <?= json_encode($message)?></script>
<script src="myscript.js"></script>
</body>
</html>

