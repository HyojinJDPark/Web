<?
$g4_path ="../admin";
include_once("$g4_path/common.php");
$mode = $_POST[mode];
if($mode =="write"){
// 디렉토리가 없다면 생성합니다. (퍼미션도 변경하구요.)
@mkdir("/file", 0707);
@chmod("/file", 0707);

$filename1 = $_FILES[profile1][name];
$tmp_file1 = $_FILES[profile1][tmp_name];
$filesize1 = $_FILES[profile1][size];
$filetype1 = strtolower(array_pop(explode('.', $filename1))) ;
$filename2 = $_FILES[profile2][name];
$tmp_file2 = $_FILES[profile2][tmp_name];
$filesize2 = $_FILES[profile2][size];
$filetype2 = strtolower(array_pop(explode('.', $filename2))) ;
$filename3 = $_FILES[profile3][name];
$tmp_file3 = $_FILES[profile3][tmp_name];
$filesize3 = $_FILES[profile3][size];
$filetype3 = strtolower(array_pop(explode('.', $filename3))) ;
$filename4 = $_FILES[profile4][name];
$tmp_file4 = $_FILES[profile4][tmp_name];
$filesize4 = $_FILES[profile4][size];
$filetype4 = strtolower(array_pop(explode('.', $filename4))) ;

$sql = " select max(a_num) as maxnum 
          from audition
         ";
//echo $sql; 
$max_num = sql_fetch($sql);
if($max_num[maxnum] =="")
	{
		$maxnum= "1";
	}else{
		$maxnum= $max_num[maxnum];
	}
//echo $maxnum;
//exit;
if($filename1 <> ""){
$filename1t =$maxnum."_1.".$filetype1;
if(!move_uploaded_file($tmp_file1, "./file/$filename1t")){
			print "파일 업로드 공격의 가능성이 있습니다!1\n";
		}
}
if($filename2 <> ""){
//echo $tmp_file1;
$filename2t =$maxnum."_2.".$filetype2;
if(!move_uploaded_file($tmp_file2, "./file/$filename2t")){
			print "파일 업로드 공격의 가능성이 있습니다!2\n";
		}
}
if($filename3 <> ""){
//echo $tmp_file1;
$filename3t =$maxnum."_3.".$filetype3;
if(!move_uploaded_file($tmp_file3, "./file/$filename3t")){
			print "파일 업로드 공격의 가능성이 있습니다!3\n";
		}
}
if($filename4 <> ""){
//echo $tmp_file1;
$filename4t =$maxnum."_4.".$filetype4;
if(!move_uploaded_file($tmp_file4, "./file/$filename4t")){
					print "파일 업로드 공격의 가능성이 있습니다!4\n";
		}
}
/*foreach ($_FILES["profile"]["error"] as $key => $error) {
    if ($error = UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["profile"]["tmp_name"][$key];
        $name = $_FILES["profile"]["name"][$key];
        move_uploaded_file($tmp_name, "./file/$name");
    }
}*/



//$filename$t = $_FILES[$prof][name];

//echo $upload[image][$t];


$sql = " insert into audition values(";
$sql .="'','$_POST[a_kind]','$_POST[a_name]',";
$sql .="'$_POST[a_year]','$_POST[a_month]','$_POST[a_day]',";
$sql .="'$_POST[a_size]','$_POST[a_body]','$_POST[a_agreement]',";
$sql .="'$_POST[a_syear]','$_POST[a_school]','$_POST[a_belong]',";
$sql .="'$filename1t','$filename2t','$filename3t',";
$sql .="'$filename4t','$_POST[a_tel]','$_POST[a_pon]',";
$sql .="'$_POST[a_addr]','$_POST[a_email]','$_POST[a_title]',";
$sql .="'$_POST[a_content]',now(),'N','')";
//echo $sql;
sql_query($sql);


	
?>
<script language='JavaScript'>
alert("입사원서 신청이 되셨습니다 연락드리겠습니다.");
location.href='/';
</script>
 <?
 
exit;
}

?>
<script language="javascript">
function fwrite_check(f) {
	if(f.a_kind.value==""){
		alert('서비스종류를 선택하세요!');
		f.a_kind.focus();
		return;
	}
	if (f.a_name.value=="")
	{
		alert('성명을 입력하세요!');
		f.a_name.focus();
		return;
	}
//	if (f.a_year.value=="")
//	{
//		alert('출생년을 선택하세요!');
//		f.a_year.focus();
//		return;
//	}
	
//	if (f.profile1.value=="" && f.profile2.value==""&&f.profile3.value==""&&f.profile4.value=="")
//	{
//		alert("자료사진은 하나라도 등록 하셔야 합니다");
//		f.profile1.focus();
//		return;
	//	totalpro += totalpro;
//	}
//	}
	f.action = 'page02.php';
	//alert(totalpro);
}
</script>



<? include("../icfile/top14.php");?>
					     <tr>
						    <td> <!-- 공간 -->
			  <!-- 이미지 및 텍스트 -->
			  <table width="93%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td  ><br>
                    <!-- <font color="#006666">※ 신청서 양식을 작성하여 보내주시면 빠른 시간 안에 메일이나 전화로 상담해 드리겠습니다.</font> -->
					<form method=post name="sponsor" enctype="multipart/form-data" action="javascript:fwrite_check(document.sponsor);">
					<!-- 회원정보 뿌려지는부분시작 -->
					<input name="a_name" type="hidden" class="input" size="15" value='<? echo $member[mb_name] ?>'>
					<input name="a_kind" type="hidden" class="input" size="15" value='<? echo $member[mb_birth] ?>'>
					<input name="a_tel" type="hidden" class="input" size="15" value='<? echo $member[mb_tel] ?>'>
					<input name="a_pon" type="hidden" class="input" size="15" value='<? echo $member[mb_hp] ?>'>
					<input name="a_email" type="hidden" class="input" size="15" value='<? echo $member[mb_email] ?>'>
					<input name="a_addr" type="hidden" class="input" size="15" value='<? echo $member[mb_addr1]." ".$member[mb_addr2] ?>'>
                   	<!-- 회원정보 뿌려지는부분끝 -->
                    <table width="630" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#CCD18D">
                      <input type="hidden" name ="mode" value="write">
                      <tr>
                      	<td height="2" colspan="2"></td>
                      </tr>
                    
                     
              <!-- 지원분야 -->
                          
                                             </td>
                        <!-- 지원분야 -->
                      </tr>
                         <tr>
                      	<td height="1" colspan="2"></td>
                      </tr> 
                     
                    <tr>
                   <!--     <td height="30" bgcolor="#F7F4DB"  ><div align="center" class="table_title">출생년도</div></td> 
                        <td   valign="middle" bgcolor="#FFFFFF">&nbsp; 
                          <select name="a_year" size="1" class="select" >
                            <option value="" selected>선택</option>
                            <option value="2009">2009 </option>
                            <option value="2008">2008</option>
                            <option value="2007">2007</option>
                            <option value="2006">2006</option>
                            <option value="2005">2005</option>
                            <option value="2004">2004</option>
                            <option value="2003">2003</option>
                            <option value="2002">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>
                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                            <option value="1993">1993</option>
                            <option value="1992">1992</option>
                            <option value="1991">1991</option>
                            <option value="1990">1990</option>
                            <option value="1989">1989</option>
                            <option value="1988">1988</option>
                            <option value="1987">1987</option>
                            <option value="1986">1986</option>
                            <option value="1985">1985</option>
                            <option value="1984">1984</option>
                            <option value="1983">1983</option>
                            <option value="1982">1982</option>
                            <option value="1981">1981</option>
                            <option value="1980">1980</option>
                            <option value="1979">1979</option>
                            <option value="1978">1978</option>
                            <option value="1977">1977</option>
                            <option value="1976">1976</option>
                            <option value="1975">1975</option>
                            <option value="1974">1974</option>
                            <option value="1973">1973</option>
                            <option value="1972">1972</option>
                            <option value="1971">1971</option>
                            <option value="1970">1970</option>
                                                    </select>
                          년 

                          <select name="a_month" size="1" class="select">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                          </select>

                          월 
                          
                          <select name="a_day" size="1" class="select">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                                                    </select>
                          일                        </td>
                    </tr>
                      <tr>
                      	<td height="1" colspan="2"></td>
                      </tr> -->
                   
                   <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>
                       <tr>
                        <td height="30" bgcolor="#F7F4DB"  ><div align="center" class="table_title">지원분야</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;

                         <input name="a_agreement" type="radio" id="radio" value=" 장기요양보험서비스" checked>
                         장기요양보험서비스 / 
                          <input type="radio" name="a_agreement" id="radio2" value="실버케어서비스"> 
                          실버케어서비스 / 
                          <input type="radio" name="a_agreement" id="radio3" value="기타도우미"> 
                         기타도우미</td>  
                      </tr> 
                  <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>

                  <tr>
                        <td height="30" bgcolor="#F7F4DB"><div align="center" class="table_title">구직형태</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
 
  <input name="a_size" type="radio" id="radio4" value=" 요양보호사" checked>
                         
                          요양보호사 / 
                          <input type="radio" name="a_size" id="radio5" value="사회복지사"> 
                         사회복지사/
						  <input type="radio" name="a_size" id="radio6" value="일반시터"> 
                         일반시터</td>  
 </td>
                      </tr>  


<tr>
                      	<td height="1" colspan="2"></td>
                      </tr>

					   <tr>
                        <td height="30" bgcolor="#F7F4DB"><div align="center" class="table_title">근무형태</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;  
 <input name="a_body" type="radio" id="radio7" value=" 출퇴근" checked>
                         
                          출퇴근 / 
                          <input type="radio" name="a_body" id="radio8" value="입주(24시간)"> 
                         입주(24시간)/
						  <input type="radio" name="a_body" id="radio9" value="혼합"> 
                         혼합</td>
                      </tr>  

<tr>
                      	<td height="1" colspan="2"></td>
                      </tr>

                      <tr>
                        <td height="30" bgcolor="#F7F4DB"  ><div align="center" class="table_title">실무경력</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
              
            
              <input name="a_school" type="radio" id="radio10" value=" 1년" checked>
                         
                          1년 / 
                          <input type="radio" name="a_school" id="radio11" value="2년"> 
                         2년/
						  <input type="radio" name="a_school" id="radio12" value="3년"> 
                         3년 /
						  
                          <input type="radio" name="a_school" id="radio13" value="3년이상"> 
                         3년이상/
						  <input type="radio" name="a_school" id="radio14" value="없음"> 
                         없음</td>
                      </tr>  
                      <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>
        <tr>
                        <td height="30" bgcolor="#F7F4DB"  ><div align="center" class="table_title">요양보호사 자격증유무</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;

                          <input type="radio"name="a_belong" id="radio15" value="1급" checked>
                          1급 / 
                          <input type="radio" name="a_belong" id="radio16" value="2급"> 
                          2급 /
						   <input type="radio" name="a_belong" id="radio17" value="없음"> 
                          없음
						
                      </tr>  
                  
                   
              
                      <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>
                      <tr>
                        <td width="139" height="30" bgcolor="#F7F4DB"  ><div align="center" class="table_title">사회복지사 자격증유무</div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
            
			   <input name="a_title" type="radio" id="radio18" value=" 1급" checked>
                         
                          1급 / 
                          <input type="radio" name="a_title" id="radio19" value="2급"> 
                         2급/
						  <input type="radio" name="a_title" id="radio20" value="3급"> 
                         3급 /
					     <input type="radio" name="a_title" id="radio21" value="없음"> 
                         없음 </td>
						 
                      </tr>
                      <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>
                      <tr>
                      	<td height="1" colspan="2"></td>
                      </tr>
                      <tr>
                        <td width="139" height="150" bgcolor="#F7F4DB"  ><div align="center"><span class="table_title">특별히 하고싶은 말씀</span></div></td>
                        <td   bgcolor="#FFFFFF">&nbsp;
                          <textarea name="a_content" id="textarea" cols="60" rows="8"></textarea>
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
                          <input name="image" type="image" src="../images/btn_confirm.gif" onFocus="this.blur();"
                style="cursor:pointer;border:0;">&nbsp;&nbsp;
                          <a href="/index.php"><img src="/images/btn_cancel.gif" width="64" height="30" border="0"></a></p>
                    </div>
                    </td>
                </tr>
  </form>
  
              </table>			  <!-- /이미지 및 텍스트 -->		    </td>
  
			<? include("../icfile/bottom02.php");?>