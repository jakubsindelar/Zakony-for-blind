<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<font style='font-size: 35' color='blue'><center>Část čtvrtá<BR>Způsoby oceňování<center></font>
<?php
include('paragrafy/cast4.php');
echo"<center><form method='POST' action='http://goa.braillnet.cz/projaws/casti/cast5.php'>
<select name='paragraf'>
<option>Vyber paragraf</option>
<option value='24'>Paragraf 24</option>
<option value='25'>Paragraf 25</option>
<option value='26'>Paragraf 26</option>
<option value='27'>Paragraf 27</option>
<option value='28'>Paragraf 28</option>
</select><BR><input type='submit' value='Zobraz paragraf'></center></form>"; //2 až 13 řádek formulář rozbalovací seznam
if(!isset($test) || is_null($test))
{echo"<a href='http://goa.braillnet.cz/projaws/'><BR>Zpět na výběr částí</a>";}
$paragraf = $_POST['paragraf'];//vytáhne data z vormuláře






if($paragraf == 24){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p24_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p24_1
<font color='red'><h4>(2)</h4></font>$p24_2
<font color='red'><h4>(3)</h4></font>$p24_3
<font color='red'><h4>(4)</h4></font>$p24_4
<font color='red'><h4>(5)</h4></font>$p24_5
<font color='red'><h4>(6)</h4></font>$p24_6
<font color='red'><h4>(7)</h4></font>$p24_7
<font color='red'><h4>(8)</h4></font>$p24_8
</b></center></td>
</tr>
</table></div>
";}




if($paragraf == 25){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p25_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p25_1
<font color='red'><h4>(2)</h4></font>$p25_2
<font color='red'><h4>(3)</h4></font>$p25_3
<font color='red'><h4>(4)</h4></font>$p25_4
<font color='red'><h4>(5)</h4></font>$p25_5
</b></center></td>
</tr>
</table></div>
";}

if($paragraf == 26){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p26_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p26_1
<font color='red'><h4>(2)</h4></font>$p26_2
<font color='red'><h4>(3)</h4></font>$p26_3
<font color='red'><h4>(4)</h4></font>$p26_4
</b></center></td>
</tr>
</table></div>
";}



if($paragraf == 27){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p27_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p27_1
<font color='red'><h4>(2)</h4></font>$p27_2
<font color='red'><h4>(3)</h4></font>$p27_3
<font color='red'><h4>(4)</h4></font>$p27_4
<font color='red'><h4>(5)</h4></font>$p27_5
<font color='red'><h4>(6)</h4></font>$p27_6
<font color='red'><h4>(7)</h4></font>$p27_7
</b></center></td>
</tr>
</table></div>
";}

if($paragraf == 28){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p28_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p28_1
<font color='red'><h4>(2)</h4></font>$p28_2
<font color='red'><h4>(3)</h4></font>$p28_3
<font color='red'><h4>(4)</h4></font>$p28_4
<font color='red'><h4>(5)</h4></font>$p28_5
<font color='red'><h4>(6)</h4></font>$p28_6
</b></center></td>
</tr>
</table></div>
";}

$test2 ='test';
$datum = date('Y');
if(!isset($testing) || is_null($testing))
{include('./info.php');echo $info;}
?>