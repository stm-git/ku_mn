<?
	include_once("../common/login_tpl.php");
	if ($log_flag) {
		if ((int)$ihouse_admin_info[grade] != 0 && (int)$ihouse_admin_info[grade] != 1 && (int)$ihouse_admin_info[grade] != 2 && (int)$ihouse_admin_info[grade] < 7) include_once("../common/check_auth_tpl.php");
		else {
			include_once("../common/facility_tpl.php");
			switch ($mode) {
				case "approval_y":
					if ($ihouse_admin_info[grade] == "9" || $ihouse_admin_info[grade] == "7" || $ihouse_admin_info[grade] == "2" || $ihouse_admin_info[grade] == "1" || $ihouse_admin_info[grade] == "0") {
						$flag = $facility->approveFacility($no, $ihouse_admin_info[grade], "Y");
						$msg = $facility->errorMessage;
						if (!$flag) $mode = "error";
					} else $mode = "no_auth";
					break;
				case "approval_n":
					if ($ihouse_admin_info[grade] == "9" || $ihouse_admin_info[grade] == "7" || $ihouse_admin_info[grade] == "2" || $ihouse_admin_info[grade] == "1" || $ihouse_admin_info[grade] == "0") {
						$flag = $facility->approveFacility($no, $ihouse_admin_info[grade], "N");
						$msg = $facility->errorMessage;
						if (!$flag) $mode = "error";
					} else $mode = "no_auth";
					break;
			}
			$facility->closeDatabase();
			unset($facility);
			if ($mode == "error") {
				echo "<script language=\"javascript\">";
				echo "alert(\"작업수행 중 오류가 발생하였습니다.\\n\\n나중에 다시 시도해 주세요.\");";
				echo "history.go(-1);";
				echo "</script>";
			} else if ($mode == "no_auth") {
				echo "<script language=\"javascript\">";
				echo "alert(\"결재에 관한 권한이 없습니다.\");";
				echo "history.go(-1);";
				echo "</script>";
			} else if ($mode == "approval_y" || $mode == "approval_n") {
				echo "<script langauage=\"javascript\">";
				echo "alert(\"$msg\");";
				echo "document.location.replace(\"fac_view.php?no=$no&page=$page&s_type=$s_type&s_text=$s_text&s_state=$s_state&s_grade=$s_grade&s_room=$s_room&s_year1=$s_year1&s_month1=$s_month1&s_day1=$s_day1&s_year2=$s_year2&s_month2=$s_month2&s_day2=$s_day2&sort1=$sort1&sort2=$sort2\");";
				echo "</script>";
			} else header("Location: fac_list.php");
		}
	}
?>