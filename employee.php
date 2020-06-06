<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>RCCAC-Employee</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/employee.css">
<script type="text/jscript" src="js/jquery.min.js"></script>
<script src="js/pdfobject.js"></script>

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
			 
			 
			 
			 
	<div class="index-nav">
		<div class="index-nav-frame clearfix">
			
				<div class="index-nav-frame-line active" tabindex="-1">
					<a href="index.php" target="_self" style="color:white">Home</a>
					<div class="index-nav-frame-line-center">					</div>
					<!--<div class="index-nav-frame-line-focus" tabindex="-1"></div>-->
				</div>
				
				<div class="index-nav-frame-line" tabindex="-1">
					<a href="briefintro.php" target="_self" style="color:white">Introduction</a>
					<div class="index-nav-frame-line-center">
						<div class="index-nav-frame-line-li">
							<a href="briefintro.php#intro" target="_self">Profile</a>						</div>
						<div class="index-nav-frame-line-li">
							<a href="briefintro.php#culture" target="_self">Culture</a>						</div>
						<div class="index-nav-frame-line-li">
							<a href="briefintro.php#certificate" target="_self">Certificate</a>						</div>
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
						  if(substr($v, strrpos($v, '.') + 1)!="db"){     
							   array_push($file_list,$v);  //子文件夹的目录地址
							   }
					  }
					  }
					
					
					foreach($file_list as $file){
					/*$files=substr($file,0,strlen($file)-4).'';*/
					echo "<div class='index-nav-frame-line-li'><a href='policyprocedure.php#' target='_self'>"."$file"."</a></div>";
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
		<div class="navi-title">Employee</div>
	    <div class="menu">
	  
	  
	   <?php
		$list=scandir("./staff");
		$file_list =array();
		 foreach($list as $v){  
			if($v!='.' && $v!='..'){ 
			if(substr($v, strrpos($v, '.') + 1)!="db"){     
			array_push($file_list,$v); 
			} 
			  }
		}
		foreach($file_list as $file){

					 echo  "<div class='item'>";
					  echo   "<div class='dep'><span style='width=40px'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-></span><a href='#"."$file"."'>"."$file"."</a></div>";  
					  echo    "</div>";
					  }
     ?>
	   </div>
	
	</div>



		<div class="right-content">
		
				<?php
				echo "<div class='chart'>";
				$list=scandir("./organization chart");
				$file_list =array();
				 foreach($list as $v){  
					if($v!='.' && $v!='..'){ 
					{     
					array_push($file_list,$v);  
					}
					  }
				}
				foreach($file_list as $file){
							  echo "<div class='chart'>";
							  echo   "<img src='organization chart/"."$file"."'"."/>";  
							  echo    "</div>";
							  }
					echo  "</div>";
			  ?>
		
		
		
		<?php
		$list=scandir("./staff");
		$file_list =array();
				foreach($list as $v){  
					if($v!='.' && $v!='..'){ 
					if(substr($v, strrpos($v, '.') + 1)!="db"){     
					array_push($file_list,$v);  
					}
					  }
				}
				
				foreach($file_list as $file){
		
							 echo "<div class='depart' id='".$file."'>".$file."</div>";
					
							  echo "<div class='person'>";
						   
								$list2=scandir("./staff/".$file);
								$file_list2 =array();
								
								 foreach($list2 as $v2){  
									if($v2!='.' && $v2!='..'){
									if(substr($v2, strrpos($v2, '.') + 1)!="db"){      
									array_push($file_list2,$v2);  
									}
									  }
								 }
								 
								foreach($file_list2 as $file2){
											 echo  "<div class='pic'>";
											  echo   "<div class='photo'><img src="."'"."staff/".$file."/".$file2."'"."/></div>";
											  $files2=substr($file2,0,strlen($file2)-4);
											  $separ2=explode("+",$files2);
											  echo    "<div class='info'>";
													echo "<ul>";
													  echo "<li>"."$separ2[0]"."</li>";
													  echo "<li>"."$separ2[1]"."</li>";
													  echo "<li>"."$separ2[2]"."</li>";
													 echo "</ul>";
												echo "</div>" ;
											 echo "</div>";			
								} echo "</div>";
			}
		  ?>
		
		
     </div>
		
		  




<script type="text/javascript">
	$(function() {
		$("input[type=text]").change(function() {
		
		    $(".pic").css("background-color","white");
			var searchText = $(this).val().toUpperCase(); //获取输入的搜索内容
			var $searchUl = "";
			var searchLi=""; //预备对象，用于存储匹配出的li
			if(searchText != "") {
				//获取所有匹配的li
				$searchUl = $(".info ul").each(function() {
				
				    $searchLi=$(this).children().each(function(){
							var content=$(this).html().toUpperCase();
							if(content.indexOf(searchText)!=-1)
							{
							$(this).parent().parent().parent().css("background-color","#87CEEB");
						
							 $(window).scrollTop( $(this).offset().top);
							}
							
							})
				
				})
	
			}
			})

	
		$("input[type=submit]").click(function() {
			$("searchText").change();
		})
	})
</script>  



</div>
</div>





	<div class="footer-botm">
			<p>Address : No. 9 Baichuan Road, High-tech Industry West Zone, Chengdu, China　　Post code : 611731</p>
			<p>E-mail : eng.intern@rccac.com　　Copyright : Rockwell Collins CETC Avionics Co., Ltd</p>
	</div>



</body>
</html>