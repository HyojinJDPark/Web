<?
$sub_menu = "200900";
include_once("./_common.php");

auth_check($auth[$sub_menu], "r");

$sql_common = " from audition03 ";

$sql_search = " where  a_num='$_GET[num]' ";



$sql = " select * 
          $sql_common
          $sql_search
          $sql_order
         ";
//echo $sql; 
$link = sql_fetch($sql);
//$result = mysql_fetch_row($link);


$g4[title] = "자원봉사신청관리";
include_once("./admin.head.php");

$colspan = 6;
?>
<script language="javascript">
function imgwindow(img,width,hi)
{
	//window.open('http://wmadestar.com/03_audition/file/'+img,'pup','toolbar=no,scrollbars=no,top=200,left=300,width='+width+',height='+hi);
	window.open('/03_audition/file/'+img+'');

}
</script>
 <table width="630" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#CCD18D">
                      <input type="hidden" name ="mode" value="write">
                      <tr>
                      	<td height="2" colspan="2"></td>
                      </tr>
                    
                         </tr>
                      <tr>
                        <td width="139" height="30" bgcolor="#F7F4DB"  ><div align="center" class="table_title">성 명</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
						  <!-- 성명 폼 -->
              <input name="a_name" type="text" class="input" size="15" value="<?=$link[a_name]?>"></td>
                        <!-- 성명 폼 -->
                      </tr>
                      <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>

					  <tr>
                        <td width="139" height="30" bgcolor="#F7F4DB"  ><div align="center" class="table_title">주민등록번호</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
              <!-- 지원분야 -->
                          
                           <input name="a_kind" type="text" class="input" size="15"value="<?=$link[a_kind]?>"></td>
                        <!-- 지원분야 -->
                      </tr>
                      <tr>
                      	<td height="1" colspan="2"></td>
                   
               
				                       <tr>
                        <td height="30" bgcolor="#F7F4DB"  ><div align="center" class="table_title">연락처(집,휴대폰)</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
                          <input type="text" name="a_tel" class="input" size="15"value="<?=$link[a_tel]?>">
집(회사) /
<input type="text" name="a_pon" class="input" size="15"value="<?=$link[a_pon]?>">
(휴대폰)</td>
                      </tr>

 <tr>
                      	<td height="1" colspan="2"></td>
                      </tr> 
					  <tr>
                        <td width="139" height="30" bgcolor="#F7F4DB"  ><div align="center" class="table_title">이메일</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
              <input name="a_email" type="text" class="input" size="50"value="<?=$link[a_email]?>"></td>
                      </tr>

 <tr>
                      	<td height="1" colspan="2"></td>
                      </tr> 
                         <tr>
                      <td height="30" bgcolor="#F7F4DB"  ><div align="center" class="table_title">주소</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
              <input type="text" name="a_addr" class="input" size="50"value="<?=$link[a_addr]?>">
                          <br></td>

                      <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>

<tr>
                        <td width="139" height="30" bgcolor="#F7F4DB"><div align="center" class="table_title">성명(단체명)</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp; <input name="a1" type="text" class="input" size="20"value="<?=$link[a1]?>"></td>

                   <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>
<tr>
                        <td width="139" height="30" bgcolor="#F7F4DB"><div align="center" class="table_title">주민등록번호</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp; <input name="a11" type="text" class="input" size="20"value="<?=$link[a11]?>"></td></tr>
						 <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>
<tr>
  <td width="139" height="30" bgcolor="#F7F4DB"><div align="center" class="table_title">성 별</div></td>
                  <td   bgcolor="#FFFFFF">&nbsp;        <input name="a2" type="text" class="input" size="20"value="<?=$link[a2]?>"></td>

						  <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>

<td width="139" height="30" bgcolor="#F7F4DB"><div align="center" class="table_title">결혼유무</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp; 
						<input name="a3" type="text" class="input" size="20"value="<?=$link[a3]?>"></td>
						 <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>
<tr>
                        <td width="139" height="30" bgcolor="#F7F4DB"><div align="center" class="table_title">전화(집)</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp; <input name="a12" type="text" class="input" size="20"value="<?=$link[a12]?>"></td></tr>
						 <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>


<tr>
                        <td width="139" height="30" bgcolor="#F7F4DB"><div align="center" class="table_title">휴대폰번호</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp; <input name="a13" type="text" class="input" size="20"value="<?=$link[a13]?>"></td></tr>
						 <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>

						<tr>
                        <td width="139" height="30" bgcolor="#F7F4DB"><div align="center" class="table_title">주소</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp; <input name="a14" type="text" class="input" size="50"value="<?=$link[a14]?>"></td></tr>
						 <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>

<tr>
                        <td width="139" height="30" bgcolor="#F7F4DB"><div align="center" class="table_title">이메일</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp; <input name="a15" type="text" class="input" size="20"value="<?=$link[a15]?>"></td></tr>
						 <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>
<tr>
<td width="139" height="30" bgcolor="#F7F4DB"><div align="center" class="table_title">최종학력</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp; 
						 <input name="a4" type="text" class="input" size="20"value="<?=$link[a4]?>">
                
                          </td></tr>
<tr>
                      	<td height="1" colspan="2"></td>
                      </tr>
						  <tr>
<td width="139" height="30" bgcolor="#F7F4DB"><div align="center" class="table_title">특기</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp; 
						
  <input name="a5" type="text" class="input" size="20"value="<?=$link[a5]?>">
                          </td></tr>



 <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>

  <td width="139" height="30" bgcolor="#F7F4DB"><div align="center" class="table_title">자격증</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp; 
						 <input name="a6" type="text" class="input" size="20"value="<?=$link[a6]?>">
               
                          </td></tr>


<td width="139" height="30" bgcolor="#F7F4DB"><div align="center" class="table_title">종교</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp; 
				
  <input name="a10" type="text" class="input" size="20"value="<?=$link[a10]?>">
                          </td></tr>
<tr>
                      	<td height="1" colspan="2"></td>
                      </tr>

                       <tr>
                        <td height="30" bgcolor="#F7F4DB"  ><div align="center" class="table_title">참여동기</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
<input name="a_agreement" type="text" class="input" size="20"value="<?=$link[a_agreement]?>"></td>


 <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>

                  <tr>
                        <td height="30" bgcolor="#F7F4DB"><div align="center" class="table_title">참여경로</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
<input name="a_size" type="text" class="input" size="20"value="<?=$link[a_size]?>"></td>

<tr>
                      	<td height="1" colspan="2"></td>
                      </tr>

					   <tr>
                        <td height="30" bgcolor="#F7F4DB"><div align="center" class="table_title">참여형태</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;  
<input name="a_body" type="text" class="input" size="20"value="<?=$link[a_body]?>"></td>

<tr>
                      	<td height="1" colspan="2"></td>
                      </tr>

                      <tr>
                        <td height="50" bgcolor="#F7F4DB"  ><div align="center" class="table_title">봉사경험</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
                        참여기간 <input name="a_school" type="text" class="input" size="42"value="<?=$link[a_school]?>"> 예) 2003년5월~2008년3월<br>&nbsp;&nbsp활동내용 <input name="a7" type="text" class="input" size="42"value="<?=$link[a7]?>"></td>
                      </tr>  

<tr>
                      	<td height="1" colspan="2"></td>
                      </tr>

                      <tr>
                        <td height="70" bgcolor="#F7F4DB"  ><div align="center" class="table_title">자원봉사신청</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
                        봉사기간 <input name="a8" type="text" class="input" size="42"value="<?=$link[a8]?>">예)2003년5월~2008년3월<br>&nbsp;&nbsp봉사내용 <input name="a9" type="text" class="input" size="42"value="<?=$link[a9]?>"><br>&nbsp;&nbsp봉사시간 <input name="a_belong" type="text" class="input" size="42"value="<?=$link[a_belong]?>"></td>
                      </tr>  


						 
                  
                      <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>
                      <tr>
                        <td width="139" height="80" bgcolor="#F7F4DB"  ><div align="center"><span class="table_title">특기사항</span></div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
                          <textarea name="a_content" id="textarea" cols="90" rows="4"><?=$link[a_content]?></textarea>
                        </td>
                      </tr>
                      <tr>
                      	<td height="2" colspan="2"></td>
                      </tr>

                    
                      <tr>
                      	<td height="2" colspan="2"></td>
                      </tr>
                      </table>
                    <div align="center">
                        <p>
                         &nbsp;&nbsp;
                          <a href="/admin/adm/page03_list.php"><img src="/images/btn_cancel.gif" width="64" height="30" border="0"></a></p>
                    </div>
                    </td>
                </tr>
 
              </table>

<?
include_once ("./admin.tail.php");
?>
