<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<font style='font-size: 35' color='blue'><center>Část první<BR>Obecná ustanovení<center></font>
<?php
include('paragrafy/cast1.php');
echo"<center><form method='POST' action='http://goa.braillnet.cz/projaws/casti/cast1.php'>
<select name='paragraf'>
<option>Vyber paragraf</option>
<option value='1'>Paragraf 1</option>
<option value='2'>Paragraf 2</option>
<option value='3'>Paragraf 3</option>
<option value='4'>Paragraf 4</option>
<option value='5'>Paragraf 5</option>
<option value='6'>Paragraf 6</option>
<option value='7'>Paragraf 7</option>
<option value='8'>Paragraf 8</option>
</select><BR><input type='submit' value='Zobraz paragraf'><BR></center></form>"; //2 až 13 řádek formulář rozbalovací seznam
if(!isset($test) || is_null($test))
{echo"<a href='http://goa.braillnet.cz/projaws/'><BR>Zpět na výběr částí</a>";}

$paragraf = $_POST['paragraf'];//vytáhne data z vormuláře






if($paragraf == 1){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p1_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p1_1
<font color='red'><h4>(2)</h4></font>$p1_2
<font color='red'><h4>(3)</h4></font>$p1_3
<font color='red'><h4>(4)</h4></font>$p1_4
</b></center></td>
</tr>
</table></div>
";}




if($paragraf == 2){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p2_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p2_1

</b></center></td>
</tr>
</table></div>
";}





if($paragraf == 3){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p3_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p3_1
<font color='red'><h4>(2)</h4></font>$p3_2
<font color='red'><h4>(3)</h4></font>$p3_3
</b></center></td>
</tr>
</table></div>
";}




if($paragraf == 4){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p4_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p4_1
<font color='red'><h4>(2)</h4></font>$p4_2
<font color='red'><h4>(3)</h4></font>$p4_3
<font color='red'><h4>(4)</h4></font>$p4_4
<font color='red'><h4>(5)</h4></font>$p4_5
<font color='red'><h4>(6)</h4></font>$p4_6
<font color='red'><h4>(7)</h4></font>$p4_7
<font color='red'><h4>(8)</h4></font>$p4_8
<font color='red'><h4>(9)</h4></font>$p4_9
<font color='red'><h4>(10)</h4></font>$p4_10
<font color='red'><h4>(11)</h4></font>$p4_11
<font color='red'><h4>(12)</h4></font>$p4_12
<font color='red'><h4>(13)</h4></font>$p4_13
<font color='red'><h4>(14)</h4></font>$p4_14
<font color='red'><h4>(15)</h4></font>$p4_15
</b></center></td>
</tr>
</table></div>
";}





if($paragraf == 5){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p5_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p5_1
<font color='red'><h4>(2)</h4></font>$p5_2
</b></center></td>
</tr>
</table></div>
";}




if($paragraf == 6){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p6_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p6_1
<font color='red'><h4>(2)</h4></font>$p6_2
<font color='red'><h4>(3)</h4></font>$p6_3
<font color='red'><h4>(4)</h4></font>$p6_4

</b></center></td>
</tr>
</table></div>
";}


if($paragraf == 7){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p7_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p7_1
<font color='red'><h4>(2)</h4></font>$p7_2
<font color='red'><h4>(3)</h4></font>$p7_3
<font color='red'><h4>(4)</h4></font>$p7_4
<font color='red'><h4>(5)</h4></font>$p7_5
<font color='red'><h4>(6)</h4></font>$p7_6
</b></center></td>
</tr>
</table></div>
";}






if($paragraf == 8){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p8_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p8_1
<font color='red'><h4>(2)</h4></font>$p8_2
<font color='red'><h4>(3)</h4></font>$p8_3
<font color='red'><h4>(4)</h4></font>$p8_4
<font color='red'><h4>(5)</h4></font>$p8_5
<font color='red'><h4>(6)</h4></font>$p8_6
</b></center></td>
</tr>
</table></div>
";}
$test2 ='test';
$datum = date('Y');
if(!isset($testing) || is_null($testing))
{include('info.php');echo $info;}

?>