<?
$sub_menu = "200900";
include_once("./_common.php");

auth_check($auth[$sub_menu], "r");

$sql_common = " from audition ";

$sql_search = " where  a_num='$_GET[num]' ";



$sql = " select * 
          $sql_common
          $sql_search
          $sql_order
         ";
//echo $sql; 
$link = sql_fetch($sql);
//$result = mysql_fetch_row($link);


$g4[title] = "�Ի�������û����";
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
                        <td width="139" height="30" bgcolor="#F7F4DB"  ><div align="center" class="table_title">�� ��</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
						  <!-- ���� �� -->
              <input name="a_name" type="text" class="input" size="15" value="<?=$link[a_name]?>"></td>
                        <!-- ���� �� -->
                      </tr>
                      <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>

					  <tr>
                        <td width="139" height="30" bgcolor="#F7F4DB"  ><div align="center" class="table_title">�ֹε�Ϲ�ȣ</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
              <!-- �����о� -->
                          
                           <input name="a_kind" type="text" class="input" size="15"value="<?=$link[a_kind]?>"></td>
                        <!-- �����о� -->
                      </tr>
                      <tr>
                      	<td height="1" colspan="2"></td>
                   
               
				                       <tr>
                        <td height="30" bgcolor="#F7F4DB"  ><div align="center" class="table_title">����ó(��,�޴���)</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
                          <input type="text" name="a_tel" class="input" size="15"value="<?=$link[a_tel]?>">
��(ȸ��) /
<input type="text" name="a_pon" class="input" size="15"value="<?=$link[a_pon]?>">
(�޴���)</td>
                      </tr>

 <tr>
                      	<td height="1" colspan="2"></td>
                      </tr> 
					  <tr>
                        <td width="139" height="30" bgcolor="#F7F4DB"  ><div align="center" class="table_title">�̸���</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
              <input name="a_email" type="text" class="input" size="50"value="<?=$link[a_email]?>"></td>
                      </tr>

 <tr>
                      	<td height="1" colspan="2"></td>
                      </tr> 
                         <tr>
                      <td height="30" bgcolor="#F7F4DB"  ><div align="center" class="table_title">�ּ�</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
              <input type="text" name="a_addr" class="input" size="50"value="<?=$link[a_addr]?>">
                          <br></td>

                      <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>
                       <tr>
                        <td height="30" bgcolor="#F7F4DB"  ><div align="center" class="table_title">�����о�</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
                           <input name="a_agreement" type="text" class="input" size="15" value="<?=$link[a_agreement]?>"></td>
                        
                      </tr>
                      <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>
					  <td height="30" bgcolor="#F7F4DB"><div align="center" class="table_title">��������</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
						<input name="a_size" type="text" class="input" size="15" value="<?=$link[a_size]?>"></td>
                      <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>
<td height="30" bgcolor="#F7F4DB"><div align="center" class="table_title">�ٹ�����</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;  
<input name="a_body" type="text" class="input" size="15" value="<?=$link[a_body]?>"></td>
<tr>
                      	<td height="1" colspan="2"></td>
                      </tr>

					     <td height="30" bgcolor="#F7F4DB"  ><div align="center" class="table_title">�ǹ����</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
<input name="a_school" type="text" class="input" size="15" value="<?=$link[a_school]?>"></td>
	<td height="1" colspan="2"></td>
                      </tr>
					  <td height="1" colspan="2"></td>
                      </tr>

<td height="30" bgcolor="#F7F4DB"  ><div align="center" class="table_title">��纸ȣ�� �ڰ�������</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
<input name="a_belong" type="text" class="input" size="15" value="<?=$link[a_belong]?>"></td>
<tr>
 <td height="1" colspan="2"></td>
                      </tr>

  <td width="139" height="30" bgcolor="#F7F4DB"  ><div align="center" class="table_title">��ȸ������ �ڰ�������</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
<input name="a_title" type="text" class="input" size="15" value="<?=$link[a_title]?>"></td>
<tr>
 <td height="1" colspan="2"></td>
                      </tr>

                   
					
                
                  <!--                          <tr>
                        <td height="30" bgcolor="#F7F4DB"  ><div align="center" class="table_title">�ڷ����(������4)</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
               <?
								if($link[a_profile4] ==""){
								echo "�ڷᰡ �����ϴ�.";
								}else{
									$info4 = GetImageSize("../../03_audition/file/$link[a_profile1]");
									if($info4[0] > 500)
									{
										$width4 = "width=500";
									}
									echo "<a href=\"javascript:imgwindow('$link[a_profile4]','$info4[0]','$info4[1]');\">$link[a_profile4]</a>";
								}
							 
							 ?></td> -->
                  
                      <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>
                      <tr>
                        <td width="139" height="150" bgcolor="#F7F4DB"  ><div align="center"><span class="table_title">Ư���� �ϰ���� ����</span></div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
                          <textarea name="a_content" id="textarea" cols="60" rows="8"><?=$link[a_content]?></textarea>
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
                          <a href="/admin/adm/page02_list.php"><img src="/images/btn_cancel.gif" width="64" height="30" border="0"></a></p>
                    </div>
                    </td>
                </tr>
 
              </table>

<?
include_once ("./admin.tail.php");
?>
