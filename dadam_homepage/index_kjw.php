<? 
$g4_path = "./admin"; 
include_once("$g4_path/common.php"); 
include_once("$g4[path]/lib/latest.lib.php"); 
include_once("$g4[path]/lib/outlogin.lib.php"); 
include_once("$g4[path]/head.sub.php"); 
include_once("$g4[path]/skin/latest/ssh_garo_scroll_gallery/inc_config.php"); 
?>
<html>
<head>
<title>���ɺ������� Ȩ�������� ���Ű��� ȯ���մϴ�.</title>
<meta http-equiv='Content-Type' content='text/html; charset=euc-kr'>
<LINK href="/css/css.css" type=text/css rel=stylesheet>
<script src="/js/flash.js" type="text/javascript"></script>
</head>

<body onLoad="runSlideShow()">
<table cellspacing="0" cellpadding="0" border="0" width="100%">
<tr>
	<td align="center">

	<!-- ��� -->
	<table cellspacing="0" cellpadding="0" border="0" width="1000">
	<tr>
		<td>
			<?
			include_once("admin/common_menu_top.php"); 
			?>
		</td>
    </tr>
	</table>
	<!-- /��� -->
	
	<!-- �߰� ���������÷���ȭ�� -->
    <TABLE width=100% cellpadding=0 cellspacing=0 border=0>
          <tr><TD align=center style="padding-top: 10px;"><img border=0 src="images/main_photo_2.jpg" name='SlideShow'></TD></tr>
    </TABLE>
    
    <!-- �߰� ���������÷���ȭ�� �� --> 
	
	<tr valign="top" align="center" height="10"><td></td></tr>
	<tr valign="top" align="center" height="10">
		<td>
			<table cellspacing="0" cellpadding="0" border="0">
			<tr valign="top">
				<td>
			    <!-- �Խ��� -->
				  <table cellspacing="0" cellpadding="0" border="0" width="10" height="126">
					<tr valign="top">
						<td>  
					     <!-- ���߰Խ��ǽ��� -->
						<table cellspacing="0" cellpadding="0" border="0" width="" height="">
							<tr>
								<td>
								<a href="/admin/bbs/board.php?bo_table=gonggi" onMouseOver="javascript:tabNewsAct('1')" onFocus="blur();"><img src="/images/new1-1.gif" name="tabNews1"></td>
								 <td><a href="/admin/bbs/board.php?bo_table=gesipan" onmouseOver="javascript:tabNewsAct('2')" onFocus="blur();"><img src="/images/new2-1.gif" name="tabNews2"></td>
								 <td><a href="/admin/bbs/board.php?bo_table=QnA" onmouseOver="javascript:tabNewsAct('3')" onFocus="blur();"><img src="/images/new3-1.gif" name="tabNews3"></td>
								 <td><a href="/admin/bbs/board.php?bo_table=backup" onmouseOver="javascript:tabNewsAct('4')" onFocus="blur();"><img src="/images/new4-1.gif" name="tabNews4"></td>
								 <td><a href="/admin/bbs/board.php?bo_table=gonggi"><img src="/images/more.gif"></a></td>
									
								 <div style="display:none;" id="tabNewsMore1"></div>
								 <div style="display:none;" id="tabNewsMore2"></div>
								 <div style="display:none;" id="tabNewsMore3"></div>
								 <div style="display:none;" id="tabNewsMore4"></div>
							</tr>
							<tr>
								<td colspan="5" valign="top" height="7"><IMG SRC="images/main_page_29.gif" border="0"  ALT=""></td>
							</tr>
							<tr>
					            <td height="0">
						            <div id="tabNewsLay1" style="position:absolute; height:51px; z-index:1; border: 0px dotted #ffffff; display:none;">
									<table border="0" cellspacing="0" cellpadding="0" width="400" height="5">
											<tr>
												<td>
													<?  
													echo latest("basic", "gonggi", 4, 43); 
													?>
												</td>
											</tr>
										</table>	
			            </div>

			            <div id="tabNewsLay2" style="position:absolute; height:51px; z-index:1; border: 0px dotted #ffffff; display:none;">
										<table border="0" cellspacing="0" cellpadding="0"width="400">
											<tr>
												<td><?  
												echo latest("basic", "gesipan", 4, 43); 
												?></td>
											</tr>
										</table>	
			            </div>

			            <div id="tabNewsLay3" style="position:absolute; height:51px; z-index:1; border: 0px dotted #ffffff; display:none;">
										<table border="0" cellspacing="0" cellpadding="0"width="400">
											<tr>
												<td><?  
												echo latest("basic", "QnA", 4, 43); 
												?></td>
											</tr>
										</table>	
			            </div>

									<div id="tabNewsLay4" style="position:absolute; height:51px; z-index:1; border: 0px dotted #ffffff; display:none;">
										<table border="0" cellspacing="0" cellpadding="0"width="400">
											<tr>
												<td><?  
												echo latest("basic", "backup", 4, 43); 
												?></td>
											</tr>
										</table>
			            </div>
									</td>
								</tr>
							</table>
							<!-- ���߰Խ��ǳ� -->
						 </td>
				  </tr>
				  </table>
	       <!-- /�Խ��� end-->
					<table cellspacing="0" cellpadding="0" border="0" height="10">
						<tr valign="top">
							<td>
								<IMG SRC="images/main_page_38.gif" border="0"  ALT="">
							</td>
						</tr>
						<tr>
							<td>
								<table cellspacing="0" cellpadding="0" border="0">
									<tr valign="bottom">
										<td><a href="/sub02_01.php"><IMG SRC="images/main_page_46.gif" border="0" ALT=""></td>
										<td><a href="/sub02_02.php"><IMG SRC="images/main_page_47.gif" border="0" ALT=""></td>
										<td><a href="/sub02_03.php"><IMG SRC="images/main_page_48.gif" border="0" ALT=""></td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td><IMG SRC="images/main_page_61.gif" border="0"  ALT=""></td>
						</tr>
						<tr>
							<td>
								<table cellspacing="0" cellpadding="0" border="0">
									<tr valign="top">
										<td><IMG SRC="images/main_page_69.gif" border="0"  ALT=""></td>
										<td><a href="/sub02_04.php"><IMG SRC="images/main_page_65.gif" border="0"  ALT=""></a></td>
										<td><a href="/sub02_05.php"><IMG SRC="images/main_page_66.gif" border="0"  ALT=""></a></td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
				<td width="6"></td>
				<td>
					<table cellspacing="0" cellpadding="0" border="0">
						<tr valign="top">
							<td colspan="4"><IMG SRC="images/main_page_26.gif" border="0"  ALT=""></td>
						</tr>
						<tr valign="top">
							<td><a href="/sub03_01.php"><IMG SRC="images/main_page_32.gif" border="0"  ALT=""></a></td>
							<td><a href="/sub03_02.php"><IMG SRC="images/main_page_33.gif" border="0"  ALT=""></a></td>
							<td><a href="/sub03_03.php"><IMG SRC="images/main_page_34.gif" border="0"  ALT=""></a></td>
							<td><a href="/sub03_04.php"><IMG SRC="images/main_page_35.gif" border="0"  ALT=""></a></td>
						</tr>
						<tr valign="top">
							<td height="10"></td>
						</tr>
					</table>
					<table cellspacing="0" cellpadding="0" border="0">
						<tr>
							<td valign="top">
								<IMG SRC="images/main_page_55.gif" border="0"  ALT="">
							</td>
							<td width="5"></td>
							<td valign="center">
								<table cellspacing="0" cellpadding="0" border="0">
									<tr valign="top">
										<td><a href="http://www.longtermcare.or.kr/portal/site/nydev/" target="_blank"><IMG SRC="images/main_page_58.gif" border="0" ALT=""></td>
										<td width="3"></td>
										<td><a href="http://www.anneline.co.kr" target="_blank"><IMG SRC="images/main_page_60.gif" border="0"  ALT=""></td>
									</tr>
									<tr valign="top">
										<td><a href="http://www.trueloves.co.kr" target="_blank"><IMG SRC="images/main_page_67.gif" border="0"  ALT=""></td>
										<td width="3"></td>
										<td><a href="http://www.catholic.or.kr" target="_blank"><IMG SRC="images/main_page_70.gif" border="0"  ALT=""></td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
				<td width="6"></td>
				<td>
					<table cellspacing="0" cellpadding="0" border="0">
						<tr valign="top">
							<td>
								<a href="/sub05_02.php"><IMG SRC="images/main_page_28.gif" border="0"  ALT=""></a>
							</td>
						</tr>
						<tr valign="top">
							<td height="8"></td>
						</tr>
					</table>
					<table cellspacing="0" cellpadding="0" border="0">
						<tr valign="top">
							<td>
								<IMG SRC="images/main_page_41.gif" border="0"  ALT="">
							</td>
						</tr>
						<tr valign="top">
							<td>
								<table cellspacing="0" cellpadding="0" border="0">
									<tr valign="top">
									    <td width="1"></td>
										<td><a href="/sub01_01.php"><IMG SRC="images/main_page_49.gif" border="0"  ALT=""></a></td>
										<td width="4"></td>
										<td><a href="/sub01_03.php"><IMG SRC="images/main_page_51.gif" border="0"  ALT=""></a></td>
										<td width="4"></td>
										<td><a href="/sub01_04.php"><IMG SRC="images/main_page_53.gif" border="0"  ALT=""></a></td>
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
	<!-- �߰� -->

	<!-- �ϴ� -->
	<? include("icfile/bottom01.php");?>

<!--Ȩ�������α׺м�-->
<script type="text/javascript"  charset="euc-kr" src="http://log.inside.daum.net/dwi_log/js/dwi.js"></script>
<script type="text/javascript" >
	_dwiPID="d-VJk-267";
	if(typeof(_dwiCatch) == "function") { _dwiCatch();}
</script>
<!--Ȩ�������α׺м�  ��-->

</body>
</html>

<!--���������̹���-->
<SCRIPT> 
var slideShowSpeed = 5000; 
var crossFadeDuration = 5; 
var Pic = new Array(); 
Pic[0] = "images/main_photo_2.jpg";
Pic[1] = "images/main_photo_3.jpg";
Pic[2] = "images/main_photo_1.jpg";
var j = 0; 
var p = Pic.length; 
function runSlideShow() { 
if (document.all) { 
document.images['SlideShow'].style.filter = "blendTrans(duration=5)";//duration:�̹��� �ٲ�� �ð� 
//document.images['SlideShow'].style.filter="blendTrans(duration="+crossFadeDuration+")";  
} 
if (document.all) { 
document.images['SlideShow'].filters.blendTrans.apply(); 
document.images['SlideShow'].filters.blendTrans.play(duration = crossFadeDuration); 
} 
document.images['SlideShow'].src = Pic[j]; 
if (j < (p - 1)) 
j++; 
else 
j = 0; 
setTimeout('runSlideShow()', slideShowSpeed); 
} 
window.onload = function() { 
runSlideShow(); 
}; 
</SCRIPT>   
<!--���������̹��� ��--> 

<!--�Խ��� �ѿ��� ��ũ�� ����--> 
<script>
	var tabNews_on = new Array() ;
	var tabNews_off = new Array() ;

	for (i=1; i<=4; i++){
		tabNews_on[i] = new Image() ;
		tabNews_on[i].src = "/images/new" + i + "-1.gif" ;
		tabNews_off[i] = new Image() ;
		tabNews_off[i].src = "/images/new" + i + ".gif" ;
	}

	var tabNewsImgName, tabNewsLayName ;

	function tabNewsAct() {
		for (i=1; i<=4; i++){
			tabNewsImgName = "tabNews" + i ;
			document.images[tabNewsImgName].src = tabNews_off[i].src ;
			tabNewsLayName = document.all["tabNewsLay"+i] ;
			tabNewsLayName.style.display = "none" ;
			tabNewsMoreName = document.all["tabNewsMore"+i];
			tabNewsMoreName.style.display = "none" ;
		}

		tabNewsImgName = "tabNews" + arguments[0] ;
		document.images[tabNewsImgName].src = tabNews_on[arguments[0]].src ;
		document.all["tabNewsLay"+arguments[0]].style.display = "" ;
		document.all["tabNewsMore"+arguments[0]].style.display = "" ;
	}

</script>				

<SCRIPT LANGUAGE=JAVASCRIPT>
	tabNewsAct('1');
</SCRIPT>
  <!--�Խ��� �ѿ��� ��ũ�� ��-->