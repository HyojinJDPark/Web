<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="./css/jkoutlinemenu.css" />

<script type="text/javascript" src="./js/jkoutlinemenu.js">

/***********************************************
* Animated Outline Menu- by JavaScript Kit (www.javascriptkit.com)
* This notice must stay intact for usage
* Visit JavaScript Kit at http://www.javascriptkit.com/ for full source code
***********************************************/

</script>

	<table cellspacing="0" cellpadding="0" border="0" width="100%">
	<tr height="50">
		<td valign="bottom" align="right">
			<a href=""><img src="/images/logo.gif" border="0"></a>
		</td>
		<td align="right" valign="bottom"><?=outlogin("top"); // LOGIN?></td>
	</tr>
	<tr>
		<td colspan="2" align="right">
			<table border="0">
				<tr>
					<td align="right"><table cellspacing="0" cellpadding="0" border="0">
							<tr>
								<td><a href="http://www.seongsim.org"><img src="./images/menu_home_out.gif" border="0"></a></td>
								<td><a href="/sub01_01.php" id="introduce_top"><img src="./images/menu_introduce_out.gif" border="0"></a></td>
								<td><a href="/sub02_01.php" id="insurance_service_top"><img src="./images/menu_insurance_service_out.gif" border="0"></a></td>
								<td><a href="/sub03_01.php" id="application_top"><img src="./images/menu_application_out.gif" border="0"></a></td>
								<td><a href="/sub04_01.php" id="care_service_top"><img src="./images/menu_care_service_out.gif" border="0"></a></td>
								<td><a href="/sub05_01.php" id="employment_top"><img src="./images/menu_employment_out.gif" border="0"></a></td>
								<td><a href="/sub06_01.php" id="volunteer_top"><img src="./images/menu_volunteer_out.gif" border="0"></a></td>
								<td><a href="/admin/bbs/board.php?bo_table=gonggi" id="community_top"><img src="./images/menu_community_out.gif" border="0"></a></td>				
								<td><img src="./images/menu_end_out.gif" border="0"></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td height="20">
					</td>
				</tr>
			</table>
		</td>
    </tr>
	</table>
	
<!--Define HTML for all animated menus at the very end of the page (ie: right before </body> tag)!-->
	<div id="introduce" class="outlinemenu">
		<ul>
			<li><a href="/sub01_01.php">CEO�λ縻</a></li>
			<li><a href="/sub01_02.php">�������λ縻</a></li>
			<li><a href="/sub01_03.php">����Ұ�</a></li>
			<li><a href="/sub01_04.php">���ô±�</a></li>
		</ul>
	</div>

	<div id="insurance_service" class="outlinemenu">
		<ul>
			<li><a href="/sub02_01.php">���������Ұ�</a></li>
			<li><a href="/sub02_02.php">���񽺴��</a></li>
			<li><a href="/sub02_03.php">��������</a></li>
			<li><a href="/sub02_04.php">�����̿�����</a></li>
			<li><a href="/sub02_05.php">�����̿��û</a></li>
		</ul>
	</div>

	<div id="care_service" class="outlinemenu">
		<ul>
			<li><a href="/sub04_01.php">��ǰ�ȳ�</a></li>			
			<li><a href="/sub04_02.php">�̿��û</a></li>
		</ul>
	</div>

	<div id="application" class="outlinemenu">
		<ul>
			<li><a href="/sub03_01.php">�湮���</a></li>
			<li><a href="/sub03_02.php">�湮���</a></li>
			<li><a href="/sub03_03.php">�湮��ȣ</a></li>
			<li><a href="/sub03_04.php">�����뱸</a></li>
		</ul>
	</div>

	<div id="employment" class="outlinemenu">
		<ul>
			<li><a href="/sub05_01.php">��纸ȣ�������Ұ�</a></li>
			<li><a href="/sub05_02.php">ä��(����)�ȳ�</a></li>
		</ul>
	</div>

	<div id="volunteer" class="outlinemenu">
		<ul>
			<li><a href="/sub06_01.php">�Ŀ���û/�ڿ������û</a></li>
		</ul>
	</div>

	<div id="community" class="outlinemenu">
		<ul>
			<li><a href="/admin/bbs/board.php?bo_table=gonggi">��������</a></li>
			<li><a href="/admin/bbs/board.php?bo_table=gesipan">�Խ���</a></li>
			<li><a href="/admin/bbs/board.php?bo_table=QnA">�������亯</a></li>
			<li><a href="/admin/bbs/board.php?bo_table=backup">�ڷ��</a></li>
		</ul>
	</div>
	<!-- End Sub Menus container -->
</div>

<script type="text/javascript">
//jkoutlinemenu.definemenu("anchorid", "menuid", "mouseover|click", optional_width, optional_height)
jkoutlinemenu.definemenu("introduce_top", "introduce", "mouseover", 180)
jkoutlinemenu.definemenu("insurance_service_top", "insurance_service", "mouseover", 180)
jkoutlinemenu.definemenu("care_service_top", "care_service", "mouseover", 180)
jkoutlinemenu.definemenu("application_top", "application", "mouseover", 180)
jkoutlinemenu.definemenu("employment_top", "employment", "mouseover", 180)
jkoutlinemenu.definemenu("volunteer_top", "volunteer", "mouseover", 180)
jkoutlinemenu.definemenu("community_top", "community", "mouseover", 180)
</script>



