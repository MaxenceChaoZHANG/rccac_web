<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title><?php $name=substr($_GET['name'],0,strlen($_GET['name'])-4);
                                           echo "Notice:"."$name" ?></title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/view.css">
<script type="text/jscript" src="js/jquery.min.js"></script>
<script src="js/pdfobject.js"></script>

<style>
.pdfobject-container { height: 75rem; border: 1rem solid rgba(0,0,0,.1);width:auto; }
</style>
</head>

<body>


  <div class="header-info">
        <div class="header-time" id="div-time" >
				<script>
				window.onload=function(){
				//定时器每秒调用一次fnDate()
					setInterval(function(){
					fnDate();
					},1000);
				}
				//js 获取当前时间
				function fnDate(){
				var oDiv=document.getElementById("div-time");
				var date=new Date();
				var year=date.getFullYear();//当前年份
				var month=date.getMonth();//当前月份
				var data=date.getDate();//天
				var day=date.getDay(); //获取当前星期X(0-6,0代表星期天)
				var weekday=new Array(7)
				weekday[0]="Sunday"
				weekday[1]="Monday"
				weekday[2]="Tuesday"
				weekday[3]="Wednesday"
				weekday[4]="Thursday"
				weekday[5]="Friday"
				weekday[6]="Saturday" 
				var time=fnW((month+1))+"/"+fnW(data)+"/"+year+"   "+weekday[day];
				oDiv.innerHTML=time;
				}
				//补位 当某个字段不是两位数时补0
				function fnW(str){
				var num;
				str>10?num=str:num=str;
				return num;
				}
				</script>
	       </div>
				
			<div class="header-language" >
			  <a target="_blank">Rockwell Collins CETC Avionics Co., Ltd</a>	</div>

</div>
		
		
		<div class="logo-search">
			<div class="header-logo">
				 <a href=""><img src="img/RCCAC2.jpg" style="margin-top=4px"></a>
			</div>

		</div>
			 
			 
			        

<div class="main-content">

                <div class="announce"><?php  $name=substr($_GET['name'],0,strlen($_GET['name'])-4);
                                           echo "$name  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
										   echo "<span>".$_GET['date']."</span>" ; ?>
				</div>

<div id="example1">			</div>

</div>


</div>



	<div class="footer-botm">

			
			<p>Address : No. 9 Baichuan Road, High-tech Industry West Zone, Chengdu, China　　Post code : 611731</p>
			<p>E-mail : eng.intern@rccac.com　　Copyright : Rockwell Collins CETC Avionics Co., Ltd</p>

	</div>
			
	<?php 
		echo  "<script>";
		  
		echo  "PDFObject.embed('pdf/Notice/$_GET[name]', '#example1');";
		  
		
		echo "</script>";
		  
	?>
		  



</body>
</html>