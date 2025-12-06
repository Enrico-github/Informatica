<?php
$data = new DateTime();
echo 'ora di oggi' .$data -> format("H:i:s");
echo "<br>";
echo 'data di oggi' .$data -> format("d/m/y");
echo "<br>";
echo 'data e ora di oggi' .$data -> format("d/m/y H:i:s");
$data -> modify("+2 days");
echo '<br> data di oggi + 2 giorni' .$data -> format("d/m/y");
$data2 = new DateTime("-2 days");
echo '<br> data di oggi - 2 giorni' .$data -> format("d/m/y");
echo "<br>";
echo "differenza fra due date";
echo "<br>";
$data3 = new DateTime("2025/01/10");
$data4 = new DateTime("2025/01/15");
$diff = $data3 -> diff($data4);
echo $diff -> days;     //giorni
echo "<br>";
echo $diff -> y;    //anni
echo "<br>";
echo $diff -> m;    //mesi
echo "<br>";
echo $diff -> format("%y %m %d %h %i %s");  //stampa differenza in data e ora
echo "<br>";
$intervalTime = new DateInterval("P1Y3M4DT2H3M4S");
$newDate = $data3 -> add($intervalTime);
echo $newDate -> format("d/m/y h:i:s");
