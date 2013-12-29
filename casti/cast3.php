<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<font style='font-size: 35' color='blue'><center>Část třetí<BR>Účetní závěrka<center></font>
<?php
include('paragrafy/cast3.php');
echo"<center><form method='POST' action='http://goa.braillnet.cz/projaws/casti/cast3.php'>
<select name='paragraf'>
<option>Vyber paragraf</option>
<option value='18'>Paragraf 18</option>
<option value='19'>Paragraf 19</option>
<option value='20'>Paragraf 20</option>
<option value='21'>Paragraf 21</option>
<option value='24'>Paragraf 21a</option>
<option value='22'>Paragraf 22</option>
<option value='23'>Paragraf 23</option>
<option value='25'>Paragraf 23a</option>
<option value='26'>Paragraf 23b</option>
</select><BR><input type='submit' value='Zobraz paragraf'></center></form>"; //2 až 13 řádek formulář rozbalovací seznam
if(!isset($test) || is_null($test))
{echo"<a href='http://goa.braillnet.cz/projaws/'><BR>Zpět na výběr částí</a>";}
$paragraf = $_POST['paragraf'];//vytáhne data z vormuláře






if($paragraf == 18){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p18_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p18_1
<font color='red'><h4>(2)</h4></font>$p18_2
<font color='red'><h4>(3)</h4></font>$p18_3
</b></center></td>
</tr>
</table></div>
";}




if($paragraf == 19){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p19_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p19_1
<font color='red'><h4>(2)</h4></font>$p19_2
<font color='red'><h4>(3)</h4></font>$p19_3
<font color='red'><h4>(4)</h4></font>$p19_4
<font color='red'><h4>(5)</h4></font>$p19_5
<font color='red'><h4>(6)</h4></font>$p19_6
<font color='red'><h4>(7)</h4></font>$p19_7
<font color='red'><h4>(8)</h4></font>$p19_8
<font color='red'><h4>(9)</h4></font>$p19_9
<font color='red'><h4>(10)</h4></font>$p19_10
<font color='red'><h4>(11)</h4></font>$p19_11
</b></center></td>
</tr>
</table></div>
";}

if($paragraf == 20){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p20_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p20_1
<font color='red'><h4>(2)</h4></font>$p20_2

</b></center></td>
</tr>
</table></div>
";}



if($paragraf == 21){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p21_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p20_1
<font color='red'><h4>(2)</h4></font>$p20_2
<font color='red'><h4>(3)</h4></font>$p20_3
<font color='red'><h4>(4)</h4></font>$p20_4
<font color='red'><h4>(5)</h4></font>$p20_5
<font color='red'><h4>(6)</h4></font>$p20_6
</b></center></td>
</tr>
</table></div>
";}

if($paragraf == 24){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p21a_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p21a_1
<font color='red'><h4>(2)</h4></font>$p21a_2
<font color='red'><h4>(3)</h4></font>$p21a_3
<font color='red'><h4>(4)</h4></font>$p21a_4
<font color='red'><h4>(5)</h4></font>$p21a_5
<font color='red'><h4>(6)</h4></font>$p21a_6
<font color='red'><h4>(7)</h4></font>$p21a_7
<font color='red'><h4>(8)</h4></font>$p21a_8
</b></center></td>
</tr>
</table></div>
";}

if($paragraf == 22){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p22_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p22_1
<font color='red'><h4>(2)</h4></font>$p22_2
<font color='red'><h4>(3)</h4></font>$p22_3
<font color='red'><h4>(4)</h4></font>$p22_4
<font color='red'><h4>(5)</h4></font>$p22_5
<font color='red'><h4>(6)</h4></font>$p22_6
<font color='red'><h4>(7)</h4></font>$p22_7
<font color='red'><h4>(8)</h4></font>$p22_8
</b></center></td>
</tr>
</table></div>
";}







if($paragraf == 25){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p23a_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p23a_1
<font color='red'><h4>(2)</h4></font>$p23a_2
</b></center></td>
</tr>
</table></div>
";}


if($paragraf == 26){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p23b_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p23b_1
<font color='red'><h4>(2)</h4></font>$p23b_2
<font color='red'><h4>(3)</h4></font>$p23b_3
<font color='red'><h4>(4)</h4></font>$p23b_4
<font color='red'><h4>(5)</h4></font>$p23b_5
</b></center></td>
</tr>
</table></div>
";}
  $test2 ='test';
$datum = date('Y');
if(!isset($testing) || is_null($testing))
{include('./info.php');echo $info;}
?>