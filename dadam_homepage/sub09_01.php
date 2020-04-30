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
				<tr><td><img src="images/subpage9_1.jpg" width="175" height="45" alt=""></td></tr>
				<tr><td><a href="/sub09_01.php"><img src="images/subpage9_2.jpg" width="175" height="38" alt=""></td></tr>
				<tr><td><img src="images/subpage9_3.jpg" width="175" height="114" alt=""></td></tr>
				<tr><td><img src="images/subpage_space.jpg" width="175" height="23" alt=""></td></tr>
				<tr><td><img src="images/call_center.jpg" width="175" height="189" alt=""></td></tr>
		   </table>
		</td>


		<td valign="top"><!-- 가운데 -->
			<table cellspacing="0" cellpadding="0" border="0" width="759" align="center">
		    <tr><td align="center"><img src="/images/sitemap02.gif"></td></tr>
			<tr>
				<td align="center" border="0" background="/images/site.gif" width="759" height="582">
				<table cellspacing="0" cellpadding="0" border="0" width="759" height="582" style="margin:30 0 0 30px;">
				<tr>
					<td>
						<table cellspacing="0" cellpadding="0" border="0" width="180px" height="194px" style="margin:0 0 0 30px;">
						<tr>
							<td valign="top">
								<table cellspacing="0" cellpadding="0" border="0" height="100" style="margin:30 0 0 30px;">
								<tr><td class="f01"style="padding:0 0 0 0px;"><a href="/sub01_01.php">CEO인사말</a></td></tr>
								<tr><td class="f01"style="padding:0 0 0 0px;"><a href="/sub01_02.php">센터장인사말</a></td></tr>
								<tr><td class="f01"style="padding:0 0 0 0px;"><a href="/sub01_03.php">기관소개</a></td></tr>
								<tr><td class="f01"style="padding:0 0 0 0px;"><a href="/sub01_04.php">오시는길</a></td></tr>
								</table>
							<td>
						</tr>
						</table>
					</td>
					<td>
						<table cellspacing="0" cellpadding="0" border="0" width="180px" height="194px" style="margin:0 0 0 10px;">
						<tr>
							<td valign="top">
								<table cellspacing="0" cellpadding="0" border="0" height="130" style="margin:30 0 0 30px;">
								<tr><td class="f01"style="padding:0 0 0 0px;"><a href="/sub02_01.php">서비스소개</a></td></tr>
								<tr><td class="f01"style="padding:0 0 0 0px;"><a href="/sub02_02.php">서비스대상</a></td</tr>
								<tr><td class="f01"style="padding:0 0 0 0px;"><a href="/sub02_03.php">서비스종류</a></td></tr>
								<tr><td class="f01"style="padding:0 0 0 0px;"><a href="/sub02_04.php">서비스이용절차</a></td></tr>
								<tr><td class="f01"style="padding:0 0 0 0px;"><a href="/sub02_05.php">서비스이용신청</a></td></tr>
								</table>
							<td>
						</tr>
						</table>
					</td>
					  <td>
						<table cellspacing="0" cellpadding="0" border="0" width="180px" height="194px" style="margin:0 0 0 0px;">
						<tr>
							<td valign="top">
								<table cellspacing="0" cellpadding="0" border="0"height="100" style="margin:30 0 0 30px;">
								<tr><td class="f01"style="padding:0 0 0 0px;"><a href="/sub03_01.php">방문요양</a></td></tr>
								<tr><td class="f01"style="padding:0 0 0 0px;"><a href="/sub03_02.php">방문목욕</a></td></tr>
								<tr><td class="f01"style="padding:0 0 0 0px;"><a href="/sub03_03.php">방문간호</a></td></tr>
								<tr><td class="f01"style="padding:0 0 0 0px;"><a href="/sub03_04.php">복지용구</a></td></tr>
								</table>
							<td>
						</tr>
						</table>
					</td>
				</tr>
	            <tr>
				  <td>
						<table cellspacing="0" cellpadding="0" border="0" width="180px" height="194px" style="margin:0 0 0 30px;">
						<tr>
							<td  valign="top">
								<table cellspacing="0" cellpadding="0" border="0"height="50" style="margin:30 0 0 0px;">
								<tr><td class="f01"style="padding:0 0 0 0px;"><a href="/sub08_01.php">간병/실버케어서비스 상품안내</a></td></tr>
								<tr><td class="f01"style="padding:0 0 0 0px;"><a href="/sub08_02.php">간병/실버케어서비스 이용신청</a></td></tr>
								</table>
							<td>
						</tr>
						</table>
					</td>
					<td>
						<table cellspacing="0" cellpadding="0" border="0" width="180px" height="194px" style="margin:0 0 0 30px;">
						<tr>
							<td  valign="top">
								<table cellspacing="0" cellpadding="0" border="0"height="50" style="margin:30 0 0 0px;">
								<tr><td class="f01"style="padding:0 0 0 0px;"><a href="/sub04_01.php">노인돌봄종합서비스 상품안내</a></td></tr>
								<tr><td class="f01"style="padding:0 0 0 0px;"><a href="/sub04_02.php">노인돌봄종합서비스 이용신청</a></td></tr>
								</table>
							<td>
						</tr>
						</table>
					</td>
					<td>
						<table cellspacing="0" cellpadding="0" border="0"width="180px" height="194px" style="margin:0 0 0 30px;">
						<tr>
							<td valign="top">
								<table cellspacing="0" cellpadding="0" border="0"height="50" style="margin:30 0 0 0px;">
								<tr><td class="f01"style="padding:0 0 0 0px;"><a href="/sub05_01.php">요양보호사제도소개</a></td></tr>
								<tr><td class="f01"style="padding:0 0 0 0px;"><a href="/sub05_02.php">채용(모집)안내</a></td></tr>
								</table>
							<td>
						</tr>
						</table>
					 </td>
				</tr>
                <tr>
				    <td>
						<table cellspacing="0" cellpadding="0" border="0"width="180px" height="194px" style="margin:0 0 0 30px;">
						<tr>
							<td valign="top">
								<table cellspacing="0" cellpadding="0" border="0" height="25" style="margin:10 0 0 20px;">
								<tr><td class="f01"style="padding:0 0 0 0px;"><a href="/sub06_01.php">후원신청/자원봉사신청</a></td></tr>
								</table>
							<td>
						</tr>
						</table>
					</td>
					<td>
						<table cellspacing="0" cellpadding="0" border="0"width="180px" height="194px" style="margin:0 0 0 30px;">
						<tr>
							<td valign="top">
								<table cellspacing="0" cellpadding="0" border="0" height="100" style="margin:10 0 0 20px;">
								<tr><td class="f01"style="padding:0 0 0 0px;"><a href="/admin/bbs/board.php?bo_table=gonggi">공지사항</a></td></tr>
								<tr><td class="f01"style="padding:0 0 0 0px;"><a href="/admin/bbs/board.php?bo_table=gesipan">게시판</a></td</tr>
								<tr><td class="f01"style="padding:0 0 0 0px;"><a href="/admin/bbs/board.php?bo_table=QnA">질문과답변</a></td></tr>
								<tr><td class="f01"style="padding:0 0 0 0px;"><a href="/admin/bbs/board.php?bo_table=backup">자료실</a></td></tr>
								</table>
							<td>
						   </tr>
						</table>
				    </td> 
				</tr>			
				</table>
		</td>
	</tr>
	</table>
    </td>		   
</tr>
</table>
	<? include("icfile/bottom01.php");?></font>