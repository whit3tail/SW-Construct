<!DOCTYPE html PUBLIC "ver.1.0.1" >

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ใบสั่งอาหาร โต๊ะ  <?php echo $_POST['no'];?> | ก๋วยเตี๋ยวต้มยำบ้านลายจุดข้างวัง</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>ใบสั่งอาหาร</a></h1>
<h2>หมายเลขโต๊ะของท่าน คือ <?php echo $_POST['no'];?></h2>
<form id="form_917172" class="appnitro"  method="post" action="complete.php">
<?php
$detail = $_POST['detail'];
$no =  $_POST['no'];
For ($a=1;$a<=$detail;$a++)
{
echo "
<hr><li id=\"li_2\" >
<h3>---------------------------------- ท่านที่ $a --------------------------------------- </h3>
		<label class=\"description\" for=\"element_2\">ระบุเส้น </label>
		<div>
		<select class=\"element select medium\" id=\"element_2\" name=\"noodle$a\"> 
			<option value=\"1\" selected=\"selected\">เลือกเส้น</option>
<option value=\"เส้นเล็ก\" >เส้นเล็ก</option>
<option value=\"เส้นใหญ่\" >เส้นใหญ่</option>
<option value=\"เส้นหมี่\" >เส้นหมี่</option>
<option value=\"วุ้นเส้น\" >วุ้นเส้น</option>
<option value=\"บะหมี่เหลือง\" >บะหมี่เหลือง</option>

		</select>
		</div> 
		</li>		
		<li id=\"li_5\" >
		<label class=\"description\" for=\"element_5\">ใส่ </label>
		<span>
			<input id=\"element_5_1\" name=\"aaa$a\" class=\"element checkbox\" type=\"checkbox\" value=\"ทั้งหมด\" checked=\"checked\"/>
<label class=\"choice\" for=\"element_5_1\">ทั้งหมด</label>
<input id=\"element_5_2\" name=\"aaa$a\" class=\"element checkbox\" type=\"checkbox\" value=\"หมู\" />
<label class=\"choice\" for=\"element_5_2\">หมู</label>
<input id=\"element_5_3\" name=\"aaa$a\" class=\"element checkbox\" type=\"checkbox\" value=\"ลูกชิ้น\" />
<label class=\"choice\" for=\"element_5_3\">ลูกชิ้น</label>
<input id=\"element_5_4\" name=\"aaa$a\" class=\"element checkbox\" type=\"checkbox\" value=\"หมูสับ\" />
<label class=\"choice\" for=\"element_5_4\">หมูสับ</label>
<input id=\"element_5_5\" name=\"aaa$a\" class=\"element checkbox\" type=\"checkbox\" value=\"ตับลวก\" />
<label class=\"choice\" for=\"element_5_5\">ตับลวก</label>

		</span> 
		</li>		<li id=\"li_6\" >
		<label class=\"description\" for=\"element_6\">ก็วยเตี๋ยว </label>
		<span>
			<input id=\"element_6_1\" name=\"plus$a\" class=\"element checkbox\" type=\"checkbox\" value=\"35\" checked=\"checked\"/>
<label class=\"choice\" for=\"element_6_1\">ธรรมดา (35 บาท )</label>

<input id=\"element_6_1\" name=\"plus$a\" class=\"element checkbox\" type=\"checkbox\" value=\"35\" checked=\"checked\"/>
<label class=\"choice\" for=\"element_6_1\">เกาเหลา (35 บาท )</label>

<input id=\"element_6_2\" name=\"plus$a\" class=\"element checkbox\" type=\"checkbox\" value=\"50\" />
<label class=\"choice\" for=\"element_6_2\">พิเศษ ไข่มะตูม (+15 บาท)</label>
<input id=\"element_6_3\" name=\"plus$a\" class=\"element checkbox\" type=\"checkbox\" value=\"60\" />
<label class=\"choice\" for=\"element_6_2\">พิเศษ ไข่มะตูม 2 ฟอง (+25 บาท)</label>
<input id=\"element_6_3\" name=\"plus$a\" class=\"element checkbox\" type=\"checkbox\" value=\"50\" />
<label class=\"choice\" for=\"element_6_3\">พิเศษ เพิ่มกุ้ง (+15 บาท)</label>
<input id=\"element_6_4\" name=\"plus$a\" class=\"element checkbox\" type=\"checkbox\" value=\"50\" />
<label class=\"choice\" for=\"element_6_4\">พิเศษ เพิ่มปลาหมึก (+15 บาท)</label>

		</span> 
		</li>		<li id=\"li_7\" >
		<label class=\"description\" for=\"element_7\">รสชาติ </label>
		<span>
			<input id=\"element_7_1\" name=\"rod$a\" class=\"element checkbox\" type=\"checkbox\" value=\"เผ็ด\" checked=\"checked\"/>
<label class=\"choice\" for=\"element_7_1\">เผ็ด</label>
<input id=\"element_7_2\" name=\"rod$a\" class=\"element checkbox\" type=\"checkbox\" value=\"ไม่เผ็ด\" />
<label class=\"choice\" for=\"element_7_2\">ไม่เผ็ด</label>
<input id=\"element_7_3\" name=\"rod$a\" class=\"element checkbox\" type=\"checkbox\" value=\"น้ำใส\" />
<label class=\"choice\" for=\"element_7_3\">น้ำใส</label>

		</span> 
		</li><input type=\"hidden\"  value=\"$a\" name=\"a\"/><input type=\"hidden\"  value=\"$no\" name=\"no\"/><hr>";
}



			
	?>				
<h3>---------------------------------------ทอปปิ้ง ---------------------------------------</h3>

		<li id="li_3" >
		<label class="description" for="element_3">กุ้ง (ตัวละ 15 บาท) </label>
		<div>
			<input id="element_3" name="kung" class="element text medium" type="text" maxlength="255" value=""/> 

		</div> 
		</li>		
        <li id="li_3" >
		<label class="description" for="element_2">ไข่ยางมะตูม(ฟองละ 15 บาท) </label>
		<div>
			<input id="element_3" name="kung" class="element text medium" type="text" maxlength="255" value=""/> 

		</div> 
		</li>
        <li id="li_4" >
		<label class="description" for="element_4">หมึก (ตัวละ 15 บาท) </label>
		<div>
			<input id="element_4" name="mux" class="element text medium" type="text" maxlength="255" value=""/> 

		</div> 
		</li>		
			</ul>
			<li class="buttons">
			    
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
		</form>	
		<div id="footer">
	
		</div>
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>
