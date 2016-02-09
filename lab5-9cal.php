<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
 <style type="text/css">

body {
				color: #404040;
				background-color: #f9f8f6;
				background-image: url("images/b5.jpg");
				background-position: center;
				font-family: Georgia, Times, serif;
				line-height: 1.4em;
				margin: 0px;
				
				}
 .h
 {
 width:860px;
 height:90px;
 background-image: url("images/m15.jpg");
 
 }
  .h1
 {
 width:860px;
 height:5px;
  background:#404040;
 
 }
  .f
 {
 width:860px;
 height:60px;
 background:#404040;
 clear: both;
 
 }
 .block1
 {
 width:860px;
 height:600px;
 background:#0E9F98;
 margin:40px;
border: 2px solid #000000;
background-color: #ffffff;
background-image: url("images/m1.jpg");

 }

 article {
				clear: both;
				overflow: auto;
				width: 100%;}
 hgroup {
				float: center;
				margin-top: 10px;
				
		}
 figure {
				float: left;
				width: 290px;
				height: 290px;
				padding: 5px;
				margin: 20px;
				border: 5px solid #eeeeee;}
.f1 {
				float: center;
				width: 400px;
				height: 320px;
				padding: 5px;
				margin: 20px;
				border: 5px solid #eeeeee;}
 footer {
				
				color: #ffffff;
				background-color: #aeaca8;
				height: 36px;
				background-image: url("images/m15.jpg");
				}
 </style>
 </head>
 <body>
 <center>

<div class="block1">
 <div class="h">
 <br>
 <h2>PROFILE</h2>
 </div>
 <div class="h1"></div>
 <br><br>
  <article>


					<div class="f1">
					<hgroup>
					 <p align = "left">
						  <?php
  $a = $_GET['a'];
  $b = $_GET['b'];
  $c = $_GET['c'];
  $d = $_GET['d'];
  $e = $_GET['e'];
  $f = $_GET['f'];
  $g = $_GET['g'];
  $h = $_GET['h'];
  $i = $_GET['i'];
  $j = $_GET['j'];
  $k = $_GET['k'];
  $l = $_GET['l'];
  $m = $g-543;
  $n = $_GET['n'];
  echo "ชื่อ : <i>  ";
  if ($a == "0") echo " นาย $b.</i><br/>";
  if ($a == "1") echo " นาง $b.</i><br/>";
  if ($a == "2") echo " นางสาว $b.</i><br/>";
  echo "อายุ : <i>  ";
  if ($c >= 100) echo " $c >Error</i><br/>";
  elseif ($c >= 60) echo " $c >Senior</i><br/>"; 
  elseif ($c >= 30) echo " $c >Middle-aged</i><br/>";
  elseif ($c >= 18) echo " $c >Teens </i><br/>";
  ?>
  <br>
  <?php
  echo "เพศ : <i>  ";
  if ($d == "01.png") echo " หญิง ";
  if ($d == "02.gif") echo " ชาย ";
  ?> 
   <img src="images/<?php echo $d;?>"><br>
<?php 
 echo "วันเกิด : " ;
  if ($f == "1") $f = "January";
  if ($f == "2") $f = "February";
  if ($f == "3") $f = "March";
  if ($f == "4") $f = "April";
  if ($f == "5") $f = "May";
  if ($f == "6") $f = "June";
  if ($f == "7") $f = "July";
  if ($f == "8") $f = "August";
  if ($f == "9") $f = "September";
  if ($f == "10") $f = "October";
  if ($f == "11") $f = "November";
  if ($f == "12") $f = "December";
  
  if ($e == "1") echo " 01/$f/$m </i><br/>";
  if ($e == "2") echo " 02/$f/$m </i><br/>";
  if ($e == "3") echo " 03/$f/$m </i><br/>";
  if ($e == "4") echo " 04/$f/$m </i><br/>";
  if ($e == "5") echo " 05/$f/$m </i><br/>";
  if ($e == "6") echo " 06/$f/$m </i><br/>";
  if ($e == "7") echo " 07/$f/$m </i><br/>";
  if ($e == "8") echo " 08/$f/$m </i><br/>";
  if ($e == "9") echo " 09/$f/$m </i><br/>";
  if ($e == "10") echo " 10/$f/$m </i><br/>";
  if ($e == "11") echo " 11/$f/$m </i><br/>";
  if ($e == "12") echo " 12/$f/$m </i><br/>";
  if ($e == "13") echo " 13/$f/$m </i><br/>";
  if ($e == "14") echo " 14/$f/$m </i><br/>";
  if ($e == "15") echo " 15/$f/$m </i><br/>";
  if ($e == "16") echo " 16/$f/$m </i><br/>";
  if ($e == "17") echo " 17/$f/$m </i><br/>";
  if ($e == "18") echo " 18/$f/$m </i><br/>";
  if ($e == "19") echo " 19/$f/$m </i><br/>";
  if ($e == "20") echo " 20/$f/$m </i><br/>";
  if ($e == "21") echo " 21/$f/$m </i><br/>";
  if ($e == "22") echo " 22/$f/$m </i><br/>";
  if ($e == "23") echo " 23/$f/$m </i><br/>";
  if ($e == "24") echo " 24/$f/$m </i><br/>";
  if ($e == "25") echo " 25/$f/$m </i><br/>";
  if ($e == "26") echo " 26/$f/$m </i><br/>";
  if ($e == "27") echo " 27/$f/$m </i><br/>";
  if ($e == "28") echo " 28/$f/$m </i><br/>";
  if ($e == "29") echo " 29/$f/$m </i><br/>";
  if ($e == "30") echo " 30/$f/$m </i><br/>";
  if ($e == "31") echo " 31/$f/$m </i><br/>";


  echo "สัญชาติ : <i> $h </i> <br/>";
  echo "เชื้อชาติ : <i> $i </i> <br/>";
  echo "ศาสนา : <i>  ";
  if ($j == "0") echo " พุทธ </i><br/>";
  if ($j == "1") echo " คริสต์</i><br/>";
  if ($j == "2") echo " อิสลาม</i><br/>";
  if ($j == "3") echo " พราหมณ์-ฮินดู</i><br/>";
  if ($j == "4") echo " ไม่มี</i><br/>";
  echo "ที่อยู่ : <i> $k </i> <br/>";
  echo "งานอดิเรก : <i> $l </i> <br/>";
  echo "สถานภาพ : <i>  ";
 if ($n == "1.gif") echo โสด;
 if ($n == "2.gif") echo สมรส;
 if ($n == "3.gif") echo หย่าร้าง;
 ?> 
 <img src="images/<?php echo $n;?>">

  

 
						
					</p>	
					</hgroup>
					</div>
  </article>
   
 <br><br>
<footer>
<div class="h1"></div>		

</footer>
  </div>
  </center>
 </body>
</html>
