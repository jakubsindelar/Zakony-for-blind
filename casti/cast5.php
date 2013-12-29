<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<font style='font-size: 35' color='blue'><center>Část pátá<BR>Inventarizace majetku a závazků<center></font>
<?php
include('paragrafy/cast5.php');
echo"<center><form method='POST' action='http://goa.braillnet.cz/projaws/casti/cast7.php'>
<select name='paragraf'>
<option>Vyber paragraf</option>
<option value='29'>Paragraf 29</option>
<option value='30'>Paragraf 30</option>
</select><BR><input type='submit' value='Zobraz paragraf'></center></form>"; //2 až 13 řádek formulář rozbalovací seznam
if(!isset($test) || is_null($test))
{echo"<a href='http://goa.braillnet.cz/projaws/'><BR>Zpět na výběr částí</a>";}
$paragraf = $_POST['paragraf'];//vytáhne data z vormuláře






if($paragraf == 29){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p29_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p29_1
<font color='red'><h4>(2)</h4></font>$p29_2
<font color='red'><h4>(3)</h4></font>$p29_3
<font color='red'><h4>(4)</h4></font>$p29_4
</b></center></td>
</tr>
</table></div>
";}




if($paragraf == 30){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p30_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p30_1
<font color='red'><h4>(2)</h4></font>$p30_2
<font color='red'><h4>(3)</h4></font>$p30_3
<font color='red'><h4>(4)</h4></font>$p30_4
<font color='red'><h4>(5)</h4></font>$p30_5
<font color='red'><h4>(6)</h4></font>$p30_6
<font color='red'><h4>(7)</h4></font>$p30_7


</b></center></td>
</tr>
</table></div>
";}
$test2 ='test';
$datum = date('Y');
if(!isset($testing) || is_null($testing))
{include('./info.php');echo $info;}
?>