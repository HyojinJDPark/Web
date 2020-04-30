<?
$sub_menu = "200900";
include_once("./_common.php");

auth_check($auth[$sub_menu], "r");

if($_GET[mode]=="del"){
	sql_query("delete from audition where a_num='$_GET[num]'");

?>
<script language='javascript'>
alert('삭제되었습니다');
location.href='page02_list.php?stx=<?=$_GET[stx]?>';
</script>
<?
	exit;
}

$sql_common = " from audition ";

$sql_search = " where (1) ";
if ($stx) {
    $sql_search .= " and ( ";
    switch ($sfl) {
        default : 
            $sql_search .= " ($sfl like '%$stx%') ";
            break;
    }
    $sql_search .= " ) ";
}

if (!$sst) {
    $sst  = "a_num";
    $sod = "desc";
}
$sql_order = " order by $sst $sod ";

$sql = " select count(*) as cnt
         $sql_common 
         $sql_search 
         $sql_order ";

$row = sql_fetch($sql);
$total_count = $row[cnt];

$rows = $config[cf_page_rows];
$total_page  = ceil($total_count / $rows);  // 전체 페이지 계산
if ($page == "") $page = 1; // 페이지가 없으면 첫 페이지 (1 페이지)
$from_record = ($page - 1) * $rows; // 시작 열을 구함

$sql = " select * 
          $sql_common
          $sql_search
          $sql_order
          limit $from_record, $rows ";
$result = sql_query($sql);

$listall = "<a href='$_SERVER[PHP_SELF]' class=tt>처음</a>";

$g4[title] = "입사지원신청관리";
include_once("./admin.head.php");

$colspan = 6;
?>
<script language='javascript'>
function del(num,stx)
{
	if(confirm('삭제 하시갰습니까?'))
	{
		location.href='page02_list.php?mode=del&num='+num+'&stx='+stx;
	}

}
</script>
<table width=100%>
<form name=fsearch method=get>
<tr>
    <td width=50% align=left><?=$listall?> (신청수 : <?=number_format($total_count)?>개)</td>
    <td width=50% align=right>
        <select name=sfl>
            <option value='a_name'>이름</option>
        </select>
        <input type=text name=stx required itemname='검색어' value='<?=$stx?>'>
        <input type=image src='<?=$g4[admin_path]?>/img/btn_search.gif' align=absmiddle></td>
</tr>
</form>
</table>

<table width=100% cellpadding=0 cellspacing=0>
<colgroup width=''>
<colgroup width=100>
<colgroup width=200>
<colgroup width=60>
<tr><td colspan='<?=$colspan?>' class='line1'></td></tr>
<tr class='bgcol1 bold col1 ht center'>
	<td>이름</td>
	<td>생년월일</td>
	<td>연락처</td>
	<td>비고</td>
	<td>신청날자</td>
</tr>
<tr><td colspan='<?=$colspan?>' class='line2'></td></tr>
<?
for ($i=0; $row=sql_fetch_array($result); $i++) {
  
    $s_del = "<a href=\"javascript:del('$row[a_num]','$stx');\"><img src='img/icon_delete.gif' border=0 title='삭제'></a>";
	//$s_profile1="<img src='http://blueswallow.kr/03_audition/file/$row[a_profile1]' width='50' height='50'>";
   //$info = GetImageSize("../../03_audition/file/$row[a_profile1]");
    echo "
    <tr class='list$list col1 ht center'>
        <td align=left>&nbsp;".$s_profile1."&nbsp;<a href='page02_view.php?num=$row[a_num]&stx=$stx'>".$row[a_name]."</a></td>
        <td>$row[a_kind]</td>
        <td>$row[a_tel]/$row[a_pon]</td>
        <td>$s_mod $s_del</td>
		<td>$row[a_date]</td>
    </tr>";

}

if ($i==0) 
    echo "<tr><td colspan='$colspan' height=100 align=center bgcolor='#FFFFFF'>자료가 없습니다.</td></tr>";

echo "<tr><td colspan='$colspan' class='line2'></td></tr>";
echo "</table>";

$pagelist = get_paging($config[cf_write_pages], $page, $total_page, "$_SERVER[PHP_SELF]?$qstr&page=");
if ($pagelist)
    echo "<table width=100% cellpadding=3 cellspacing=1><tr><td align=right>$pagelist</td></tr></table>\n";

if ($stx)
    echo "<script language='javascript'>document.fsearch.sfl.value = '$sfl';</script>\n";
?>

<script language='javascript'>
    document.fsearch.stx.focus();
</script>

<?
include_once ("./admin.tail.php");
?>
