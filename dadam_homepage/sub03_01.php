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
				<tr><td><img src="images/subpage3_1.jpg" width="175" height="45" alt=""></td></tr>
				<tr><td><a href="/sub03_01.php"><img src="images/subpage3_2.jpg" width="175" height="38" alt=""></td></tr>
				<tr><td><a href="/sub03_02.php"><img src="images/subpage3_3.jpg" width="175" height="29" alt=""></td></tr>
				<tr><td><a href="/sub03_03.php"><img src="images/subpage3_4.jpg" width="175" height="29" alt=""></td></tr>
				<tr><td><a href="/sub03_04.php"><img src="images/subpage3_5.jpg" width="175" height="29" alt=""></td></tr>
				<tr><td><img src="images/subpage3_6.jpg" width="175" height="27" alt=""></td></tr>
				<tr><td><img src="images/subpage_space.jpg" width="175" height="23" alt=""></td></tr>
				<tr><td><img src="images/call_center.jpg" width="175" height="189" alt=""></td></tr>
		   </table>
		</td>

		<td valign="top"><!-- 가운데 -->
		   <table cellspacing="0" cellpadding="0" border="0"width="803"align="center">
		    
		    
			  <tr>
			    <td align="center"><img src="/images/sub03_01_tit.gif"></td>
			 </tr>
			  <tr>
			    <td align="center"><img src="images/sub03_01_txt.gif"usemap="#Map3"></td>
			 </tr>
		   </table>
		    <!-- /가운데 -->
		</td>

		</tr>
	</table>
	<!-- /중간 -->
<map name="Map3">
  <area shape="rect" coords="300,960,450,1000" href="/page/page01.php">
  </map>
	<? include("icfile/bottom01.php");?>