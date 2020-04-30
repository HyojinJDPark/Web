<?
$sub_menu = "200900";
include_once("./_common.php");

auth_check($auth[$sub_menu], "r");

$sql_common = " from audition04 ";

$sql_search = " where  a_num='$_GET[num]' ";



$sql = " select * 
          $sql_common
          $sql_search
          $sql_order
         ";
//echo $sql; 
$link = sql_fetch($sql);
//$result = mysql_fetch_row($link);


$g4[title] = "후원신청관리";
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
  <td width="139" height="30" bgcolor="#F7F4DB"><div align="center" class="table_title">생년월일</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp; 
						  <input name="a2" type="text" class="input" size="20"value="<?=$link[a2]?>">  
						  <input name="a3" type="text" class="input" size="20"value="<?=$link[a3]?>">  
                         </td>
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
                      	<td height="1" colspan="2"></td>
                      </tr>

  <td width="139" height="30" bgcolor="#F7F4DB"><div align="center" class="table_title">직 업</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp; 
						 <input name="a4" type="text" class="input" size="20"value="<?=$link[a4]?>">
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 직장명
  <input name="a5" type="text" class="input" size="20"value="<?=$link[a5]?>">
                          </td></tr>

						      <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>

  <td width="139" height="30" bgcolor="#F7F4DB"><div align="center" class="table_title">직장전화</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp; 
						 <input name="a6" type="text" class="input" size="20"value="<?=$link[a6]?>">
                 &nbsp;&nbsp;&nbsp; 직장FAX
  <input name="a10" type="text" class="input" size="20"value="<?=$link[a10]?>">
                          </td></tr>

                   <tr>
                      	<td height="3" colspan="2"></td>
                      </tr>

                       <tr>
                        <td height="30" bgcolor="#F7F4DB"  ><div align="center" class="table_title">후원종류</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
                         <input name="a_agreement" type="text" class="input" size="20"value="<?=$link[a_agreement]?>">
                         </td>  
                      </tr> 
                  <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>

                  <tr>
                        <td height="30" bgcolor="#F7F4DB"><div align="center" class="table_title">납부방법</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
                         <input name="a_size" type="text" class="input" size="20"value="<?=$link[a_size]?>">
  
						 </td>  
 </td>
                      </tr>  


<tr>
                      	<td height="1" colspan="2"></td>
                      </tr>

					   <tr>
                        <td height="205" bgcolor="#F7F4DB"><div align="center" class="table_title">자동이체신청</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;  
						&nbsp;&nbsp;&nbsp;은행명 <input name="a_body" type="text" class="input" size="20"value="<?=$link[a_body]?>">
						<br> &nbsp;&nbsp;계좌번호 <input name="a_school" type="text" class="input" size="20"value="<?=$link[a_school]?>">&nbsp;&nbsp;예금주 <input name="a7" type="text" class="input" size="20"value="<?=$link[a7]?>"><br>&nbsp;&nbsp;주민번호/사업자번호&nbsp;<input name="a8" type="text" class="input" size="39"value="<?=$link[a8]?>">
						<br>&nbsp;&nbsp;이체일자 /  
                          <input name="a9" type="text" class="input" size="20"value="<?=$link[a9]?>">
						<br>&nbsp;&nbsp;이체금액 <input name="a_belong" type="text" class="input" size="20"value="<?=$link[a_belong]?>"> 원정
						<br><br>CMS[금융거래정보의 제공 동의서]
<br>본 신청과 관련하여 본인은 다음 금융거래정보(거래은행명, 계좌번호)를 출금이체 신규 신청하는 때로부터 해지 신청할 때까지 상기 수납기관 에 제공하는 것에 대하여 「금융실명거래 및 비밀보장에 관한 긴급제정 경제명령」의 규정에 따라 동의합니다.
</td>
                      </tr>  


                      

                      <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>
       
                      <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>
                      <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>
                      <tr>
                        <td width="139" height="150" bgcolor="#F7F4DB"  ><div align="center"><span class="table_title">특기사항</span></div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
                           <textarea name="a_content" id="textarea" cols="60" rows="8"><?=$link[a_content]?></textarea>
                        </td>
                      </tr>
                      <tr>
                      	<td height="2" colspan="2"></td>
                     
                      </tr>
					
                      <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>
                      </table>
                    <div align="center">
                        <p>
                         &nbsp;&nbsp;
                          <a href="/admin/adm/page04_list.php"><img src="/images/btn_cancel.gif" width="64" height="30" border="0"></a></p>
                    </div>
                    </td>
                </tr>
 
              </table>

<?
include_once ("./admin.tail.php");
?>
