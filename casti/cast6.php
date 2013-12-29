<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<font style='font-size: 35' color='blue'><center>Část šestá<BR>Úschova účetních záznamů<center></font>
<?php
include('paragrafy/cast6.php');
echo"<center><form method='POST' action='http://goa.braillnet.cz/projaws/casti/cast6.php'>
<select name='paragraf'>
<option>Vyber paragraf</option>
<option value='31'>Paragraf 31</option>
<option value='32'>Paragraf 32</option>

</select><BR><input type='submit' value='Zobraz paragraf'></center></form>"; //2 až 13 řádek formulář rozbalovací seznam
if(!isset($test) || is_null($test))
{echo"<a href='http://goa.braillnet.cz/projaws/'><BR>Zpět na výběr částí</a>";}
$paragraf = $_POST['paragraf'];//vytáhne data z vormuláře






if($paragraf == 31){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p31_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p31_1
<font color='red'><h4>(2)</h4></font>$p31_2
<font color='red'><h4>(3)</h4></font>$p31_3
<font color='red'><h4>(4)</h4></font>$p31_4
</b></center></td>
</tr>
</table></div>
";}




if($paragraf == 32){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p33a_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p32_1
<font color='red'><h4>(2)</h4></font>$p32_2
<font color='red'><h4>(3)</h4></font>$p32_3
<font color='red'><h4>(4)</h4></font>$p32_4
</b></center></td>
</tr>
</table></div>
";}
$test2 ='test';
$datum = date('Y');
if(!isset($testing) || is_null($testing))
{include('./info.php');echo $info;}
?>