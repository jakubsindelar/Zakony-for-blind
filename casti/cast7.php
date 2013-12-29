<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<font style='font-size: 35' color='blue'><center>Část sedmá<BR>Účetní záznam<center></font>
<?php
include('paragrafy/cast7.php');
echo"<center><form method='POST' action='http://goa.braillnet.cz/projaws/casti/cast7.php'>
<select name='paragraf'>
<option>Vyber paragraf</option>
<option value='33'>Paragraf 33</option>
<option value='41'>Paragraf 33a</option>
<option value='34'>Paragraf 34</option>
<option value='35'>Paragraf 35</option>
<option value='36'>Paragraf 36</option>
<option value='37'>Paragraf 37</option>
<option value='42'>Paragraf 37a</option>
<option value='43'>Paragraf 37b</option>
<option value='38'>Paragraf 38</option>
<option value='44'>Paragraf 38a</option>
<option value='39'>Paragraf 39</option>
<option value='40'>Paragraf 40</option>

</select><BR><input type='submit' value='Zobraz paragraf'></center></form>"; //2 až 13 řádek formulář rozbalovací seznam
if(!isset($test) || is_null($test))
{echo"<a href='http://goa.braillnet.cz/projaws/'><BR>Zpět na výběr částí</a>";}
$paragraf = $_POST['paragraf'];//vytáhne data z vormuláře






if($paragraf == 33){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p33_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p33_1
<font color='red'><h4>(2)</h4></font>$p33_2
<font color='red'><h4>(3)</h4></font>$p33_3
<font color='red'><h4>(4)</h4></font>$p33_4
<font color='red'><h4>(5)</h4></font>$p33_5
<font color='red'><h4>(5)</h4></font>$p33_6
<font color='red'><h4>(7)</h4></font>$p33_7
<font color='red'><h4>(8)</h4></font>$p33_8
<font color='red'><h4>(9)</h4></font>$p33_9
</b></center></td>
</tr>
</table></div>
";}




if($paragraf == 41){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p33a_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p33a_1
<font color='red'><h4>(2)</h4></font>$p33a_2
<font color='red'><h4>(3)</h4></font>$p33a_3
<font color='red'><h4>(4)</h4></font>$p33a_4
<font color='red'><h4>(5)</h4></font>$p33a_5
<font color='red'><h4>(5)</h4></font>$p33a_6
<font color='red'><h4>(7)</h4></font>$p33a_7
<font color='red'><h4>(8)</h4></font>$p33a_8
<font color='red'><h4>(9)</h4></font>$p33a_9
<font color='red'><h4>(10)</h4></font>$p33a_10



</b></center></td>
</tr>
</table></div>
";}





if($paragraf == 34){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p34_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p34_1
<font color='red'><h4>(2)</h4></font>$p34_2


</b></center></td>
</tr>
</table></div>
";}





if($paragraf == 35){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p35_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p35_1
<font color='red'><h4>(2)</h4></font>$p35_2
<font color='red'><h4>(3)</h4></font>$p35_3
<font color='red'><h4>(4)</h4></font>$p35_4
<font color='red'><h4>(5)</h4></font>$p35_5
<font color='red'><h4>(6)</h4></font>$p35_6
<font color='red'><h4>(7)</h4></font>$p35_7


</b></center></td>
</tr>
</table></div>
";}






if($paragraf == 36){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p36_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p36_1
<font color='red'><h4>(2)</h4></font>$p36_2
<font color='red'><h4>(3)</h4></font>$p36_3


</b></center></td>
</tr>
</table></div>
";}









if($paragraf == 37){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p37_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p37_1
<font color='red'><h4>(2)</h4></font>$p37_2
<font color='red'><h4>(3)</h4></font>$p37_3
<font color='red'><h4>(4)</h4></font>$p37_4
<font color='red'><h4>(5)</h4></font>$p37_5
<font color='red'><h4>(6)</h4></font>$p37_6
<font color='red'><h4>(7)</h4></font>$p37_7
<font color='red'><h4>(8)</h4></font>$p37_8
<font color='red'><h4>(9)</h4></font>$p37_9


</b></center></td>
</tr>
</table></div>
";}









if($paragraf == 42){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p37a_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p37a_1



</b></center></td>
</tr>
</table></div>
";}











if($paragraf == 43){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p37b_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p37b_1
<font color='red'><h4>(2)</h4></font>$p37b_2
</b></center></td>
</tr>
</table></div>
";}








if($paragraf == 38){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p38_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p38_1
<font color='red'><h4>(2)</h4></font>$p38_2


</b></center></td>
</tr>
</table></div>
";}







if($paragraf == 44){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p38a_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p38a_1


</b></center></td>
</tr>
</table></div>
";}










if($paragraf == 39){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p39_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p39_1


</b></center></td>
</tr>
</table></div>
";}











if($paragraf == 40){echo"<div align='center'>
<table border='1' width='100%' style='border-width: 0px'>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 80pt'color='#0066ff'>$p40_name</b></center></td>
</tr>
<tr>
<td style='border-style: none; border-width: medium'><center><b><font style='font-size: 50pt'color='black'>
<font color='red'><h4>(1)</h4></font>$p40_1
</b></center></td>
</tr>
</table></div>
";}
$test2 ='test';
$datum = date('Y');
if(!isset($testing) || is_null($testing))
{include('./info.php');echo $info;}
?>