<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ใบเสร็จ | ก๋วยเตี๋ยวต้มยำบ้านลายจุดข้างวัง</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>ใบสั่งอาหาร</a></h1>
					<div class="form_description">
			<h2>ก๋วยเตี๋ยวต้มยำบ้านลายจุดข้างวัง</h2>
			<p>น้ำซุปรสเข้ม เพิ่มการปรุงต้มยำแบบเราเอง น้ำมะนำวแท้ๆ พริกเผาเข้มข้น ถั่วบดทำเอง</p>
		</div>						
				<p>
<h2>รายการอาหารที่สั่ง โต๊ะที่  <?php echo $_POST['no'];?> มีดังนี้</h2> 
<table width="98%">
<tr bgcolor="#999999" height='40' >
<td align='center'><strong>ลำดับที่ </strong></td>
<td align='center'><strong>รายการอาหาร </strong></td>
<td align='center'><strong>ราคา (บาท)</strong></td>
</tr>
<?php

For ($b=1;$b<=$_POST['a'];$b++)
{
	?>
<tr bgcolor="#FFFFF" height='40' >
<td align='center'><? echo $b; ?></td>
<td align='center'><? echo $_POST['noodle'.$b.'']; ?> <? echo $_POST['aaa'.$b.'']; ?> <? echo $_POST['rod'.$b.'']; ?></td>
<td align='center'><? echo $_POST['plus'.$b.'']; ?></td>
</tr>
<? } 
$kung = $_POST['kung']*55;
$mux = $_POST['mux']*55;
$c = $b;
$c = $c++;
echo "<tr bgcolor=\"#FFFFF\" height='40' >
<td align='center'>$c</td>
<td align='center'>กุ้ง</td>
<td align='center'>$kung</td>
</tr>";
$d = $c+1;
echo "<tr bgcolor=\"#FFFFF\" height='40' >
<td align='center'>$d</td>
<td align='center'>ปลาหมึก</td>
<td align='center'>$mux</td>
</tr>"
;

	
	
	
	?>
<tr bgcolor="#999999" height='40' >
<td align='center'><strong>รวม </strong></td>
<td align='center'><strong>   </strong></td>
<td align='center'><strong><?php
For ($b=1;$b<=$_POST['a'];$b++)
{
$sum = $_POST['plus'.$b.'']+$_POST['plus'.$b.''];
}
$sum = $sum+$mux+$kung;

echo $sum;?> </strong></td>
</tr>
</table>

				</p>




		<div id="footer">
		
		</div>
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>