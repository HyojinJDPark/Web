<?
include_once("./_common.php");

if (!$member[mb_id]) 
    alert("�α��� �� ȸ���� �����Ͻ� �� �ֽ��ϴ�.");

/*
if ($url)
    $urlencode = urlencode($url);
else
    $urlencode = urlencode($_SERVER[REQUEST_URI]);
*/

$g4[title] = "ȸ�� �н����� Ȯ��";
include_once("../../icfile/top11.php");

$member_skin_path = "$g4[path]/skin/member/$config[cf_member_skin]";
include_once("$member_skin_path/member_confirm.skin.php");

include_once("../../icfile/bottom02.php");
?>
