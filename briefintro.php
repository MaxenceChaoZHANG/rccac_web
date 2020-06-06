<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>RCCAC-Introduction</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/briefintro.css">
<script type="text/jscript" src="js/jquery.min.js"></script>
<script src="js/pdfobject.js"></script>

<style>
.pdfobject-container { height: 75rem; border: 1rem solid rgba(0,0,0,.1); }
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
		 <a target="_blank">Rockwell Collins CETC Avionics Co., Ltd</a>
			</div>

    </div>
		
		
		<div class="logo-search">
			<div class="header-logo">
				 <a href=""><img src="img/RCCAC2.jpg" style="margin-top=4px"></a>
			</div>
		
		</div>
			 
			 
			 
			 
	<div class="index-nav">
		<div class="index-nav-frame clearfix">
			
				<div class="index-nav-frame-line active" tabindex="-1">
					<a href="index.php" target="_self" style="color:white">Home</a>
					<div class="index-nav-frame-line-center">
					
					</div>
					<!--<div class="index-nav-frame-line-focus" tabindex="-1"></div>-->
				</div>
				
				<div class="index-nav-frame-line" tabindex="-1">
					<a href="briefintro.php" target="_self" style="color:white">Introduction</a>
					<div class="index-nav-frame-line-center">
						<div class="index-nav-frame-line-li">
							<a href="briefintro.php#intro" target="_self">Profile</a>
						</div>
						<div class="index-nav-frame-line-li">
							<a href="briefintro.php#culture" target="_self">Culture</a>
						</div>
						<div class="index-nav-frame-line-li">
							<a href="briefintro.php#certificate" target="_self">Certificate</a>
						</div>
					
					</div>
					<!--<div class="index-nav-frame-line-focus" tabindex="-1"></div>-->
				</div>
				
				<div class="index-nav-frame-line" tabindex="-1">
					<a href="announce.php" target="_self" style="color:white">Notice</a>
					<div class="index-nav-frame-line-center">
						
						
					</div>
					<!--<div class="index-nav-frame-line-focus" tabindex="-1"></div>-->
				</div>
				
				<div class="index-nav-frame-line" tabindex="-1">
					<a href="policyprocedure.php" target="_self" style="color:white">Procedure</a>
					<div class="index-nav-frame-line-center">
					<?php
					$list=scandir("./pdf/Procedure");
					$file_list =array();
					foreach($list as $v){  
						  if($v!='.' && $v!='..'){      
							   array_push($file_list,$v);  //子文件夹的目录地址
					  }
					  }
					
					
					foreach($file_list as $file){
					/*$files=substr($file,0,strlen($file)-4).'';*/
					echo "<div class='index-nav-frame-line-li'><a href='policyprocedure#' target='_self'>"."$file"."</a>	</div>";
					}
					?>
						
					
					</div>
					<!--<div class="index-nav-frame-line-focus" tabindex="-1"></div>-->
				</div>
				
				<div class="index-nav-frame-line" tabindex="-1">
					<a href="employee.php" target="_self" style="color:white">Employee</a>
					<div class="index-nav-frame-line-center">
				
					</div>
					<!--<div class="index-nav-frame-line-focus" tabindex="-1"></div>-->
				</div>
					
				<div class="index-nav-frame-line" tabindex="-1">
					Service
					<div class="index-nav-frame-line-center">
						
						<div class="index-nav-frame-line-li">
							<a href="https://sites.google.com/a/rccac.com/oa/home/e-leave?pli=1" target="_blank">E-Leave</a></div>
						<div class="index-nav-frame-line-li">
							<a href="https://apps.shared13-1corpjv.com/issues/secure/Dashboard.jspa" target="_blank">Time Charge</a></div>
							<div class="index-nav-frame-line-li">
							<a href="https://my600207.sapbyd.cn/" target="_blank">SAP</a></div>
					
					</div>
					<!--<div class="index-nav-frame-line-focus" tabindex="-1"></div>-->
				</div>
				
				
	  </div>
</div>

               

<div class="main-content">

<div class="left-content">
<div class="navi-title">Introduction</div>

<!--<div class="navi-itme">-->
<ul>
<li><span style="width=40px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-></span><a href="#intro" target="_self" style="color:white">Profile</a></li>
<li><span style="width=40px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-> </span><a href="#culture" target="_self" style="color:white">Culture</a></li>
<li><span style="width=40px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-></span><a href="#certificate" target="_self" style="color:white">Certificate</a></li>
</ul>
<!--</div>-->
</div>

<div class="right-content">

<div class="depart" id="intro">Profile</div>

<p><strong>Profile：</strong></p>
<p style="text-indent:2em">RCCAC is a Sino-foreign cooperative enterprise jointly established by China Electronics Technology Avionics Co., Ltd. and the global avionics technology leader Rockwell Collins on April 2, 2014.</p>
	<p style="text-indent:2em">At present, the company has undertaken the C919 project of China's large aircraft (one of the 16 major national science and technology projects), the research and development, pre-installation production and maintenance of communication navigation systems, the integration verification of the national new boat 700 avionics system and the pre-installation of communication navigation equipment. Production and maintenance tasks, as well as pre-installation production and maintenance of other domestic civil aircraft communication and navigation equipment.
	<p style="text-indent:2em">By introducing Rockwell Collins' advanced international avionics technology, the partner company will promote the development and prosperity of China's commercial aviation sector.</p>
	<p style="text-indent:2em">	
With the core values of integrity, teamwork, customer focus and leadership, the company is committed to becoming a highly trusted avionics solution provider that meets and exceeds the requirements of customers and investors.</p>




<div class="depart" id="culture">Culture</div>
<p><strong>Vision:</strong></p>
<p>  Committed to becoming a highly trusted avionics solution provider that meets and exceeds the needs of customers and investors</p>



<p><strong>Value:</strong></p>
<ul>
<li>Integrity</li>
<p> We adhere to high standards of ethical requirements, and we build and live up to each other's responsibilities.</p>
<li>Customer focus</li>
<p>  Comply with the commitment to customers, help customers succeed, and create the company's existence value.</p>
<li>Teamwork</li>
<p>  We understand the importance of teamwork in our industry. We support each other, cooperate with each other and work together.</p>
<li>Leadership</li>
<p>  We start from me, do not shirk our responsibilities, and do our best for the company.</p>
<li>Meticulous</li>
<p> The success of aviation products comes with careful and meticulous work. Every day, every day, we must do it with double seriousness.</p>
</ul>



<p><strong>Goal:</strong></p>
<p>  Committed to building an operational center for the design, integration, production and maintenance of Chinese civil aviation communication navigation systems.</p>



<div class="depart" id="certificate">Certificate</div>
<div id="example1">			</div>

		  <script>
		  PDFObject.embed("pdf/Certificate/145.pdf", "#example1");

		  </script>
</div>


</div>


	<div class="footer-botm">
			<p>Address : No. 9 Baichuan Road, High-tech Industry West Zone, Chengdu, China　　Post code : 611731</p>
			<p>E-mail : eng.intern@rccac.com　　Copyright : Rockwell Collins CETC Avionics Co., Ltd</p>
	</div>



</body>
</html>