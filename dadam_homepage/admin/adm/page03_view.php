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


$g4[title] = "�ڿ������û����";
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
                        <td width="139" height="30" bgcolor="#F7F4DB"><div align="center" class="table_title">����(��ü��)</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp; <input name="a1" type="text" class="input" size="20"value="<?=$link[a1]?>"></td>

                   <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>
<tr>
                        <td width="139" height="30" bgcolor="#F7F4DB"><div align="center" class="table_title">�ֹε�Ϲ�ȣ</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp; <input name="a11" type="text" class="input" size="20"value="<?=$link[a11]?>"></td></tr>
						 <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>
<tr>
  <td width="139" height="30" bgcolor="#F7F4DB"><div align="center" class="table_title">�� ��</div></td>
                  <td   bgcolor="#FFFFFF">&nbsp;        <input name="a2" type="text" class="input" size="20"value="<?=$link[a2]?>"></td>

						  <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>

<td width="139" height="30" bgcolor="#F7F4DB"><div align="center" class="table_title">��ȥ����</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp; 
						<input name="a3" type="text" class="input" size="20"value="<?=$link[a3]?>"></td>
						 <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>
<tr>
                        <td width="139" height="30" bgcolor="#F7F4DB"><div align="center" class="table_title">��ȭ(��)</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp; <input name="a12" type="text" class="input" size="20"value="<?=$link[a12]?>"></td></tr>
						 <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>


<tr>
                        <td width="139" height="30" bgcolor="#F7F4DB"><div align="center" class="table_title">�޴�����ȣ</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp; <input name="a13" type="text" class="input" size="20"value="<?=$link[a13]?>"></td></tr>
						 <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>

						<tr>
                        <td width="139" height="30" bgcolor="#F7F4DB"><div align="center" class="table_title">�ּ�</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp; <input name="a14" type="text" class="input" size="50"value="<?=$link[a14]?>"></td></tr>
						 <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>

<tr>
                        <td width="139" height="30" bgcolor="#F7F4DB"><div align="center" class="table_title">�̸���</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp; <input name="a15" type="text" class="input" size="20"value="<?=$link[a15]?>"></td></tr>
						 <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>
<tr>
<td width="139" height="30" bgcolor="#F7F4DB"><div align="center" class="table_title">�����з�</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp; 
						 <input name="a4" type="text" class="input" size="20"value="<?=$link[a4]?>">
                
                          </td></tr>
<tr>
                      	<td height="1" colspan="2"></td>
                      </tr>
						  <tr>
<td width="139" height="30" bgcolor="#F7F4DB"><div align="center" class="table_title">Ư��</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp; 
						
  <input name="a5" type="text" class="input" size="20"value="<?=$link[a5]?>">
                          </td></tr>



 <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>

  <td width="139" height="30" bgcolor="#F7F4DB"><div align="center" class="table_title">�ڰ���</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp; 
						 <input name="a6" type="text" class="input" size="20"value="<?=$link[a6]?>">
               
                          </td></tr>


<td width="139" height="30" bgcolor="#F7F4DB"><div align="center" class="table_title">����</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp; 
				
  <input name="a10" type="text" class="input" size="20"value="<?=$link[a10]?>">
                          </td></tr>
<tr>
                      	<td height="1" colspan="2"></td>
                      </tr>

                       <tr>
                        <td height="30" bgcolor="#F7F4DB"  ><div align="center" class="table_title">��������</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
<input name="a_agreement" type="text" class="input" size="20"value="<?=$link[a_agreement]?>"></td>


 <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>

                  <tr>
                        <td height="30" bgcolor="#F7F4DB"><div align="center" class="table_title">�������</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
<input name="a_size" type="text" class="input" size="20"value="<?=$link[a_size]?>"></td>

<tr>
                      	<td height="1" colspan="2"></td>
                      </tr>

					   <tr>
                        <td height="30" bgcolor="#F7F4DB"><div align="center" class="table_title">��������</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;  
<input name="a_body" type="text" class="input" size="20"value="<?=$link[a_body]?>"></td>

<tr>
                      	<td height="1" colspan="2"></td>
                      </tr>

                      <tr>
                        <td height="50" bgcolor="#F7F4DB"  ><div align="center" class="table_title">�������</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
                        �����Ⱓ <input name="a_school" type="text" class="input" size="42"value="<?=$link[a_school]?>"> ��) 2003��5��~2008��3��<br>&nbsp;&nbspȰ������ <input name="a7" type="text" class="input" size="42"value="<?=$link[a7]?>"></td>
                      </tr>  

<tr>
                      	<td height="1" colspan="2"></td>
                      </tr>

                      <tr>
                        <td height="70" bgcolor="#F7F4DB"  ><div align="center" class="table_title">�ڿ������û</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
                        ����Ⱓ <input name="a8" type="text" class="input" size="42"value="<?=$link[a8]?>">��)2003��5��~2008��3��<br>&nbsp;&nbsp���系�� <input name="a9" type="text" class="input" size="42"value="<?=$link[a9]?>"><br>&nbsp;&nbsp����ð� <input name="a_belong" type="text" class="input" size="42"value="<?=$link[a_belong]?>"></td>
                      </tr>  


						 
                  
                      <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>
                      <tr>
                        <td width="139" height="80" bgcolor="#F7F4DB"  ><div align="center"><span class="table_title">Ư�����</span></div></td>
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
