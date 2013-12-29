<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<font style='font-size: 35' color='blue'><center>Část druhá<BR>Rozsah vedení účetnictví, účetní doklady, účetní zápisy a účetní knihy<center></font>
<?php
include('paragrafy/cast2.php');
echo"<center><form method='POST' action='http://goa.braillnet.cz/projaws/casti/cast2.php'>
<select name='paragraf'>
<option>Vyber paragraf</option>
<option value='9'>Paragraf 9</option>
<option value='10'>Paragraf 10</option>
<option value='11'>Paragraf 11</option>
<option value='12'>Paragraf 12</option>
<option value='13'>Paragraf 13</option>
<option value='15'>Paragraf 13a</option>
<option value='14'>Paragraf 14</option>
<option value='16'>Paragraf 16</option>
<option value='17'>Paragraf 17</option>
</select><BR><input type='submit' value='Zobraz paragraf'></center></form>"; //2 až 13 řádek formulář rozbalovací seznam
if(!isset($test) || is_null($test))
{echo"<a href='http://goa.braillnet.cz/projaws/'><BR>Zpět na výběr částí</a>";}
$paragraf = $_POST['paragraf'];//vytáhne data z vormuláře






if($paragraf == 9){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p9_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p9_1
<font color='red'><h4>(2)</h4></font>$p9_2
<font color='red'><h4>(3)</h4></font>$p9_3
<font color='red'><h4>(1)</h4></font>$p9_4
<font color='red'><h4>(2)</h4></font>$p9_5
</b></center></td>
</tr>
</table></div>
";}




if($paragraf == 10){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p10_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p10_1
</b></center></td>
</tr>
</table></div>
";}

if($paragraf == 11){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p11_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p11_1
<font color='red'><h4>(2)</h4></font>$p11_2
</b></center></td>
</tr>
</table></div>
";}



if($paragraf == 12){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p12_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p12_1
<font color='red'><h4>(2)</h4></font>$p12_2
<font color='red'><h4>(3)</h4></font>$p12_3
</b></center></td>
</tr>
</table></div>
";}

if($paragraf == 13){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p13_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p13_1
<font color='red'><h4>(2)</h4></font>$p13_2
<font color='red'><h4>(3)</h4></font>$p13_3
</b></center></td>
</tr>
</table></div>
";}

if($paragraf == 15){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p13a_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p13a_1
<font color='red'><h4>(2)</h4></font>$p13a_2
<font color='red'><h4>(3)</h4></font>$p13a_3
</b></center></td>
</tr>
</table></div>
";}
if($paragraf == 14){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p14_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p14_1
<font color='red'><h4>(2)</h4></font>$p14_2
<font color='red'><h4>(3)</h4></font>$p14_3
</b></center></td>
</tr>
</table></div>
";}






if($paragraf == 16){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p16_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p16_1
<font color='red'><h4>(2)</h4></font>$p16_2
</b></center></td>
</tr>
</table></div>
";}


if($paragraf == 17){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p17_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p17_1
<font color='red'><h4>(2)</h4></font>$p17_2
<font color='red'><h4>(3)</h4></font>$p17_3
<font color='red'><h4>(4)</h4></font>$p17_4
<font color='red'><h4>(5)</h4></font>$p17_5
</b></center></td>
</tr>
</table></div>
";}
$test2 ='test';
$datum = date('Y');
if(!isset($testing) || is_null($testing))
{include('./info.php');echo $info;}
?>