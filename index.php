<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<font style='font-size: 80' color='black'><center>Zákon o účetnictví<center></font>
<?php
error_reporting (E_ALL ^ E_NOTICE);
$test ='testování';
echo"<center><form method='POST'>
<select name='cast'>
<option>Vyber Část</option>
<option value='1'>Část 1</option>
<option value='2'>Část 2</option>
<option value='3'>Část 3</option>
<option value='4'>Část 4</option>
<option value='5'>Část 5</option>
<option value='6'>Část 6</option>
<option value='7'>Část 7</option>
</select><BR><input type='submit' value='Zobraz Část'></center></form>"; //2 až 13 řádek formulář rozbalovací seznam

$cast = $_POST['cast'];//vytáhne data z vormuláře






if($cast == 1){include('casti/cast1.php');}
if($cast == 2){include('casti/cast2.php');}
if($cast == 3){include('casti/cast3.php');}
if($cast == 4){include('casti/cast4.php');}
if($cast == 5){include('casti/cast5.php');}
if($cast == 6){include('casti/cast6.php');}
if($cast == 7){include('casti/cast7.php');}
$datum = date('Y');
if(!isset($test2) || is_null($test2))
{include('info.php');echo $info;}
$test_3 ='test3';

?>