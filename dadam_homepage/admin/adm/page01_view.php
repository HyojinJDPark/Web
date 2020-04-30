<?
$sub_menu = "200900";
include_once("./_common.php");

auth_check($auth[$sub_menu], "r");

$sql_common = " from audition02 ";

$sql_search = " where  a_num='$_GET[num]' ";



$sql = " select * 
          $sql_common
          $sql_search
          $sql_order
         ";
//echo $sql; 
$link = sql_fetch($sql);
//$result = mysql_fetch_row($link);


$g4[title] = "서비스신청관리";
include_once("./admin.head.php");

$colspan = 6;
?>
<script language="javascript">
function imgwindow(img,width,hi)
{
	//window.open('http://wmadestar.com/03_audition02/file/'+img,'pup','toolbar=no,scrollbars=no,top=200,left=300,width='+width+',height='+hi);
	window.open('/03_audition/file/'+img+'');

}
</script>
  <!-- 이미지 및 텍스트 -->
			  <table width="93%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td  ><br>
                    <font color="#006666"></font>
					<form method=post name="sponsor" enctype="multipart/form-data" action="javascript:fwrite_check(document.sponsor);">
                    <table width="630" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#CCD18D">
                      <input type="hidden" name ="mode" value="write">
                      <tr>
                      	<td height="2" colspan="2"></td>
                      </tr>
                    
                      <tr>
                        <td width="139" height="30" bgcolor="#F7F4DB"  ><div align="center" class="table_title">신청인(회사명)</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
						  <!-- 성명 폼 -->
              <input name="a_name" type="text" class="input" size="15" value="<?=$link[a_name]?>"></td>
                        <!-- 성명 폼 -->
                      </tr> 
					  
					        <tr>
                      	<td height="1" colspan="2"></td>
                      </tr> 
					  

					  <!--주민번호-->
					     <tr>
                        <td width="139" height="30" bgcolor="#F7F4DB"  ><div align="center" class="table_title">주민등록번호</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
						  <!-- 성명 폼 -->
              <input name="a_h01" type="text" class="input" size="20"value="<?=$link[a_h01]?>"></td>
                        <!-- 성명 폼 -->
                      </tr>
					  <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>
					  <!--/주민번호-->
					  <!--연락처-->
                  
                                            <tr>
                        <td height="30" bgcolor="#F7F4DB"  ><div align="center" class="table_title">연락처(집,회사/휴대폰)</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
                          <input type="text" name="a_tel" class="input" size="13"value="<?=$link[a_tel]?>">
집(회사)
<input type="text" name="a_pon" class="input" size="13"value="<?=$link[a_pon]?>">
휴대폰</td>
                      </tr>
					   <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>
					  <!--/연락처-->
					    <!--이메일-->
					  <tr>
                        <td width="139" height="30" bgcolor="#F7F4DB"  ><div align="center" class="table_title">이메일</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
              <input name="a_email" type="text" class="input" size="50"value="<?=$link[a_email]?>"></td>
                      </tr>
					   <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>

					    <tr>
                        <td width="139" height="30" bgcolor="#F7F4DB"  ><div align="center" class="table_title">주소</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
						  <!-- 성명 폼 -->
              <input name="a_h02" type="text" class="input" size="50"value="<?=$link[a_h13]?>"></td>
                        <!-- 성명 폼 -->
                      </tr>
					 
                       <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>
					  <!--이메일-->
					    <!--메신저id-->
					     <tr>
                        <td width="139" height="30" bgcolor="#F7F4DB"  ><div align="center" class="table_title">신청서비스</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
						  <!-- 성명 폼 -->
              <input name="a_h02" type="text" class="input" size="30"value="<?=$link[a_h02]?>"></td>
                        <!-- 성명 폼 -->
                      </tr>
					  <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>

					
					  <!--메신저id-->
					    <!--계좌번호-->
                       <tr>
                        <td width="139" height="30" bgcolor="#F7F4DB"><div align="center" class="table_title">서비스대상자1</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;성명 <input name="a_h03" type="text" class="input" size="10"value="<?=$link[a_h03]?>">&nbsp;주민등록번호&nbsp;<input name="a_h04" type="text" class="input" size="20"value="<?=$link[a_h04]?>">&nbsp;신청자와의관계
              <input name="a_title" type="text" class="input" size="10"value="<?=$link[a_title]?>"></td>

			   </tr>
                       <tr>
                        <td width="139" height="30" bgcolor="#F7F4DB"><div align="center" class="table_title">2</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;성명 <input name="a_h05" type="text" class="input" size="10"value="<?=$link[a_h05]?>">&nbsp;주민등록번호&nbsp;<input name="a_h06" type="text" class="input" size="20"value="<?=$link[a_h06]?>">&nbsp;신청자와의관계
              <input name="a_h07" type="text" class="input" size="10"value="<?=$link[a_h07]?>"></td>

			    </tr>
                      <tr>
                        <td width="139" height="30" bgcolor="#F7F4DB"><div align="center" class="table_title">3</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;성명 <input name="a_h08" type="text" class="input" size="10"value="<?=$link[a_h08]?>">&nbsp;주민등록번호&nbsp;<input name="a_h09" type="text" class="input" size="20"value="<?=$link[a_h09]?>">&nbsp;신청자와의관계
              <input name="a_h10" type="text" class="input" size="10"value="<?=$link[a_h10]?>"></td>

                      </tr>
					   <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>

 <tr>
                        <td width="139" height="30" bgcolor="#F7F4DB"  ><div align="center" class="table_title">출퇴근유형</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
						  <!-- 성명 폼 -->
              <input name="a_h02" type="text" class="input" size="30"value="<?=$link[a_h11]?>"></td>
                        <!-- 성명 폼 -->
                      </tr>

					  <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>
 <tr>
                        <td width="139" height="30" bgcolor="#F7F4DB"  ><div align="center" class="table_title">서비스이용 시작일자</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
						  <!-- 성명 폼 -->
              <input name="a_h12" type="text" class="input" size="40"value="<?=$link[a_h12]?>">
			  			   
		
                        <!-- 성명 폼 -->
                      </tr>					
					  <!--/일일번역량-->
					  
					  <!--주소-->
                   <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>
                                            <tr>
                      <td height="30" bgcolor="#F7F4DB"  ><div align="center" class="table_title">서비스이용 종료일자</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
              <input type="text" name="a_addr" class="input" size="40"value="<?=$link[a_addr]?>">
                          <br></td>
                      </tr>   
 <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>

 <tr>
                        <td width="139" height="30" bgcolor="#F7F4DB"  ><div align="center" class="table_title">서비스이용시간</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
						  <!-- 성명 폼 -->
              <input name="a_h03" type="text" class="input" size="40"value="<?=$link[a_h03]?>">
			  			   
		
                        <!-- 성명 폼 -->
                      </tr>					
					  <tr> <td width="139"  bgcolor="#F7F4DB"  ><div align="center"class="table_title"></div></td>
					    
					  </tr>
					
                    
                      <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>
                      <tr>
                        <td width="139" height="100" bgcolor="#F7F4DB"><div align="center"><span class="table_title">특별히 하고싶은 말씀</span></div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
                           <textarea name="a_content" id="textarea" cols="90" rows="4"><?=$link[a_content]?></textarea>
                        </td>
                      </tr>
                      <tr>
                      	<td height="2" colspan="2"></td>
                     
                      </tr>
				<!-- 	<tr>
                        <td height="30" bgcolor="#F7F4DB"  ><div align="center" class="table_title">첨부파일1</div></td>
                        <td bgcolor="#FFFFFF">&nbsp;
                             <?
								if($link[a_profile1] ==""){
								echo "자료가 없습니다.";
								}else{
									$info1 = GetImageSize("../../03_audition/file/$link[a_profile1]");
									if($info1[0] > 500)
									{
										$width = "width=500";
									}
									?>
									<!--
									<a href="javascript:imgwindow('<?=$link[a_profile1]?>','<?=$info1[0]?>','<?=$info1[1]?>');"><img src='/03_audition02/file/<?=$link[a_profile1]?>' <?=$width?>></a>
									-->
						<!-- 			<a href="javascript:imgwindow('<?=$link[a_profile1]?>','<?=$info1[0]?>','<?=$info1[1]?>');"><?=$link[a_profile1]?></a>
								<?
								}
							 
							 ?>
							</td>
                      </tr>
                      <tr>
                      
					                       <tr>
                        <td height="30" bgcolor="#F7F4DB"  ><div align="center" class="table_title">첨부파일2</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
              <?
								if($link[a_profile2] ==""){
								echo "자료가 없습니다.";
								}else{
									$info2 = GetImageSize("../../03_audition/file/$link[a_profile2]");
									if($info2[0] > 500)
									{
										$width2 = "width=500";
									}
									echo "<a href=\"javascript:imgwindow('$link[a_profile2]','$info2[0]','$info2[1]');\">$link[a_profile2]</a>";
								}
							 
							 ?></td>
                      </tr>
                      <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>
                                          <tr> -->
               <!--         <td height="30" bgcolor="#F7F4DB"  ><div align="center" class="table_title">첨부파일3</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
              <?
								if($link[a_profile3] ==""){
								echo "자료가 없습니다.";
								}else{
									$info3 = GetImageSize("../../03_audition/file/$link[a_profile3]");
									if($info3[0] > 500)
									{
										$width3 = "width=500";
									}
									echo "<a href=\"javascript:imgwindow('$link[a_profile3]','$info3[0]','$info3[1]');\"'>$link[a_profile3]</a>";
								}
							 
							 ?></td>
                      </tr> -->
               <!--        <tr>
                      	<td height="1" colspan="2"></td>
                      </tr> -->
               <!--                             <tr>
                        <td height="30" bgcolor="#F7F4DB"  ><div align="center" class="table_title">자료사진(프로필4)</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
               <input type="file"  name="profile4" class=title style='height:25px;width:400PX'></td>
                      </tr>  
                      <tr>
                      	<td height="1" colspan="2"></td>
                      </tr> -->

                      </table>
					<br>
                    <div align="center">
                       
                          <a href="/admin/adm/page01_list.php"><img src="/images/btn_cancel.gif" width="64" height="30" border="0"></a></p>
                    </div>
                    </td>
                </tr>
  </form>
  
              </table>			  <!-- /이미지 및 텍스트 -->		    </td>

<?
include_once ("./admin.tail.php");
?>
