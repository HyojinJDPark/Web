<? 
$g4_path = "./admin"; 
include_once("$g4_path/common.php"); 
include_once("$g4[path]/lib/latest.lib.php"); 
include_once("$g4[path]/lib/outlogin.lib.php"); 
include_once("$g4[path]/head.sub.php"); 

?>
<html>
<head>
<title>성심복지센터 홈페이지에 오신것을 환영합니다.</title>
<meta http-equiv='Content-Type' content='text/html; charset=euc-kr'>
<LINK href="/css/css.css" type=text/css rel=stylesheet>
<script src="/js/flash.js" type="text/javascript"></script>
</head>

<body>
<table cellspacing="0" cellpadding="0" border="0" width="100%">
<tr>
	<td align="center">

	<!-- 상단 -->
	<table cellspacing="0" cellpadding="0" border="0" width="1000">
	<tr>
		<td>
			<?
			include_once("admin/common_menu_top.php"); 
			?>
		</td>
    </tr>
	</table>
	<!-- /상단 -->

	
	<!-- 중간 -->
	<table cellspacing="0" cellpadding="0" border="0"width="1000">
	<tr>
		<td valign="top"><!-- 좌측 -->
		   <table cellspacing="0" cellpadding="0" border="0" >
				<tr><td><img src="images/subpage4_1.jpg" width="175" height="45" alt=""></td></tr>
				<tr><td><a href="/sub04_01.php"><img src="images/subpage4_2.jpg" width="175" height="38" alt=""></td></tr>
				<tr><td><a href="/sub04_02.php"><img src="images/subpage4_3.jpg" width="175" height="29" alt=""></td></tr>
				<tr><td><img src="images/subpage4_4.jpg" width="175" height="85" alt=""></td></tr>
				<tr><td><img src="images/subpage_space.jpg" width="175" height="23" alt=""></td></tr>
				<tr><td><img src="images/call_center.jpg" width="175" height="189" alt=""></td></tr>
		   </table>
		</td>

		<td valign="top"><!-- 가운데 -->
		   <table cellspacing="0" cellpadding="0" border="0"width="803"align="center">
		    
		    
			  <tr>
			    <td align="center"><img src="/images/sub04_01_tit.gif"></td>
			 </tr>
			  <tr>
			    <td align="center"><img src="/images/sub04_01_txt.gif"></td>
			 </tr>
		   </table>
		    <!-- /가운데 -->
		</td>

		</tr>
	</table>
	<!-- /중간 -->

	<? include("icfile/bottom01.php");?>