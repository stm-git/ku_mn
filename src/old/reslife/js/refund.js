var xmlHttp;
var total_attach = 1024 * 1024 * 5;

function createXMLHttpRequest() {
	if (window.ActiveXObject) xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
	else if (window.XMLHttpRequest) xmlHttp = new XMLHttpRequest();
}

function clearPeriod(obj, kind) {
	while (obj.childNodes.length > 0) {
		obj.removeChild(obj.childNodes[0]);
	}
	var option = document.createElement("option");
	option.setAttribute("value", "");
	if (kind == "new") option.appendChild(document.createTextNode("Select which semester you would like to change to."));
	else option.appendChild(document.createTextNode("Select the last session you lived in residence hall."));
	obj.appendChild(option);
}

function refreshPeriod(kind) {
	var URL = "../../src/apply/re_json.php?type=deposit&kind=" + kind;
	createXMLHttpRequest();
	xmlHttp.open("GET", URL, false);
	xmlHttp.onreadystatechange = handlePeriod;
	xmlHttp.send(null);
}

function handlePeriod() {
	if (xmlHttp.readyState == 4 && xmlHttp.status == 200) updatePeriod();
}

function updatePeriod() {
	var obj_old = document.getElementById("old_period");
	var obj_new = document.getElementById("new_period");
	var option = null;
	clearPeriod(obj_old, "old");
	clearPeriod(obj_new, "new");
	var jsonData = xmlHttp.responseText;
	var jsonObject = eval('(' + jsonData + ')');
	for (var i = 0; i < jsonObject.period.length; i++) {
		option = document.createElement("option");
		option.setAttribute("value", jsonObject.period[i].code);
		option.appendChild(document.createTextNode(jsonObject.period[i].name + ": " + jsonObject.period[i].sdate + " - " + jsonObject.period[i].edate));
		obj_old.appendChild(option);
		option = document.createElement("option");
		option.setAttribute("value", jsonObject.period[i].code);
		option.appendChild(document.createTextNode(jsonObject.period[i].name + ": " + jsonObject.period[i].sdate + " - " + jsonObject.period[i].edate));
		obj_new.appendChild(option);
	}
}

function sortList(val) {
	var dir = "ASC";
	if (document.RefundForm.sort2.value == "ASC") dir = "DESC";
	document.RefundForm.sort1.value = val;
	document.RefundForm.sort2.value = dir;
	document.RefundForm.action = "../../src/apply/re_list.php";
	document.RefundForm.submit();
}

function gotoList() {
	document.RefundForm.action = "../../src/apply/re_list.php";
	document.RefundForm.submit();
}

function gotoPage(page) {
	if (page != "") {
		document.RefundForm.page.value = page;
		document.RefundForm.action = "../../src/apply/re_list.php";
		document.RefundForm.submit();
	}
}

function viewList() {
	document.RefundForm.s_type.value = "";
	document.RefundForm.s_text.value = "";
	document.RefundForm.action = "../../src/apply/re_list.php";
	document.RefundForm.submit();
}

function viewRefund(no) {
	if (no != "") {
		document.RefundForm.no.value = no;
		document.RefundForm.action = "../../src/apply/re_view.php";
		document.RefundForm.submit();
	}
}

function checkSearchRefund(Form) {
	var sdate, edate;
	Form.s_period.value = getSelectedValue(Form.list_period);
	if (Form.s_year1.value && Form.s_month1.value && Form.s_day1.value) sdate = Form.s_year1.value + Form.s_month1.value + Form.s_day1.value;
	if (Form.s_year2.value && Form.s_month2.value && Form.s_day2.value) edate = Form.s_year2.value + Form.s_month2.value + Form.s_day2.value;
	if (!(Form.s_period.value || (Form.s_year1.value && Form.s_month1.value && Form.s_day1.value) || (Form.s_year2.value && Form.s_month2.value && Form.s_day2.value) || Form.s_text.value)) {
		alert("???????????? ???????? ?????? ????????.");
		return false;
	}
	if (sdate && edate && sdate > edate) {
		alert("?????????? ???????? ????????.");
		return false;
	}
	return true;
}

function searchRefund(Form) {
	if (checkSearchRefund(Form)) {
		document.RefundForm.action = "../../src/apply/re_list.php";
		document.RefundForm.submit();
	}
}

function postRefund(mode) {
	document.RefundForm.mode.value = mode;
	document.RefundForm.action = "../../src/apply/re_post.php";
	document.RefundForm.submit();
}

function checkRefundInfo(Form) {
	if (Form.student.value == "") {
		alert("?????? ??????????.");
		Form.student.focus();
		return false;
	}
	if (Form.kind.value == "L") {
		if (Form.student.value.length != 8) {
			alert("?????? ?????? 8?????????? ??????.");
			Form.student.focus();
			return false;
		}
	} else {
		if (Form.student.value.length != 10) {
			alert("?????? ?????? 10?????????? ??????.");
			Form.student.focus();
			return false;
		}
	}
	if (Form.fname.value == "" || Form.lname.value == "") {
		alert("?????? ??????????.");
		Form.fname.focus();
		return false;
	}
	if (Form.dob_yy.value == "" || Form.dob_mm.value == "" || Form.dob_dd.value == "") {
		alert("?????????? ??????????.");
		Form.dob_yy.focus();
		return false;
	}
	if (!checkEmail(Form.email)) return false;
	if (Form.vacate_flag[1].checked && (Form.vacate_yy.value == "" || Form.vacate_mm.value == "" || Form.vacate_dd.value == "")) {
		alert("???????? ??????????.");
		Form.vacate_yy.focus();
		return false;
	}
	if (!Form.dorm[0].checked && !Form.dorm[1].checked) {
		alert("???????? ??????????.");
		Form.dorm[0].focus();
		return false;
	}
	if (Form.room.value == "") {
		alert("???????? ??????????.");
		Form.room.focus();
		return false;
	}
	if (Form.old_period.value == "") {
		alert("???? ?????? ?????? ??????????.");
		Form.old_period.focus();
		return false;
	}
	if (Form.refund_flag[1].checked && Form.new_period.value == "") {
		alert("???? ?????? ?????? ??????????.");
		Form.new_period.focus();
		return false;
	}
	if (Form.refund_flag[0].checked) {
		if (Form.method_type[0].checked) {
			if (Form.method_info1.value == "") {
				alert("???? ?????? ??????????.");
				Form.method_info1.focus();
				return false;
			}
			if (Form.method_info2.value == "") {
				alert("???? ?????? ??????????.");
				Form.method_info2.focus();
				return false;
			}
			if (Form.method_info3.value == "") {
				alert("???? ?????? ??????????.");
				Form.method_info3.focus();
				return false;
			}
			if (Form.reason.value == "") {
				alert("???? ?????? ??????????.");
				Form.reason.focus();
				return false;
			}
			if (Form.photo.value && !checkPhoto(Form.photo)) return false;
			calculateFileSize(Form.photo, document.getElementById('photo_size'), Form.total_photo);
			if (Form.total_photo.value >= total_attach) {
				alert("?????? ?? ???? ?????? ???? " + Math.round(total_attach / 1024) + " KB(" + Math.round(total_attach / 1024 / 1024) + " MB)???? ??????????.");
				Form.photo.focus();
				return false;
			}
			if (Form.mode.value == "edit" && Form.pht_del.checked) {
				var flag = confirm("???????? ?????????? ???? ?????????????");
				if (!flag) return false;
			}
		} else if (Form.method_type[1].checked) {
			if (Form.method_info4.value == "") {
				alert("???? ?????? ??????????.");
				Form.method_info4.focus();
				return false;
			}
			if (Form.method_info6.value == "") {
				alert("?????????????? ??????????.");
				Form.method_info6.focus();
				return false;
			}
			if (Form.method_info5.value == "") {
				alert("?????? ??????????.");
				Form.method_info5.focus();
				return false;
			}
			if (Form.addr_city.value == "") {
				alert("??/??/???? ??????????.");
				Form.addr_city.focus();
				return false;
			}
			if (Form.addr_country.value == "") {
				alert("?????? ??????????.");
				Form.addr_country.focus();
				return false;
			}
		} else if (Form.method_type[2].checked) {
			if (Form.method_info7.value == "") {
				alert("???????? ??????????.");
				Form.method_info7.focus();
				return false;
			}
			if (Form.method_info8.value == "") {
				alert("?????????? ??????????.");
				Form.method_info8.focus();
				return false;
			}
			if (Form.addr_line4.value == "") {
				alert("???? ?????? ??????????.");
				Form.addr_line4.focus();
				return false;
			}
			if (Form.method_info9.value == "") {
				alert("?????????? ??????????.");
				Form.method_info9.focus();
				return false;
			}
			if (Form.method_info10.value == "") {
				alert("?????? ?????? ??????????.");
				Form.method_info10.focus();
				return false;
			}
			if (Form.method_info11.value == "") {
				alert("?????? ?????????? ??????????.");
				Form.method_info11.focus();
				return false;
			}
			if (Form.addr_line5.value == "") {
				alert("?????? ?????? ??????????.");
				Form.addr_line5.focus();
				return false;
			}
			if (Form.method_info12.value == "") {
				alert("?????? ?????????? ??????????.");
				Form.method_info12.focus();
				return false;
			}
			if (Form.addr_country1.value == "") {
				alert("?????? ??????????.");
				Form.addr_country1.focus();
				return false;
			}
			Form.method_info1.value = Form.method_info7.value;
			Form.method_info2.value = Form.method_info8.value;
			Form.method_info3.value = Form.method_info9.value;
			Form.method_info4.value = Form.method_info10.value;
			Form.method_info5.value = Form.method_info11.value;
			Form.method_info6.value = Form.method_info12.value;
			Form.addr_line2.value = Form.addr_line4.value;
			Form.addr_line3.value = Form.addr_line5.value;
			Form.addr_country.value = Form.addr_country1.value;
		}
	}
	return true;
}

function submitRefund(Form) {
	if (checkRefundInfo(Form)) Form.submit();
}

function deleteRefund(no) {
	if (no == "") no = getSelectedValue(document.RefundForm.list_no);
	if (no == "") alert("???????? ???????? ????????.");
	else {
		var flag = confirm("???????? ???????? ???? ?????????????");
		if (flag) {
			document.RefundForm.mode.value = "del";
			document.RefundForm.no.value = no;
			document.RefundForm.method = "post";
			document.RefundForm.action = "../../src/apply/re_action.php";
			document.RefundForm.submit();
		}
	}
}

function approveRefundList() {
	if (document.RefundForm.app_yy.value == "" || document.RefundForm.app_mm.value == "" || document.RefundForm.app_dd.value == "") {
		alert("???????? ??????????.");
		document.RefundForm.app_yy.focus();
		return;
	}
	var no = getSelectedValue(document.RefundForm.list_no);
	if (no == "") alert("???????? ???????? ????????.");
	else {
		var flag = confirm("???????? ???????? ???? ?????????????");
		if (flag) {
			document.RefundForm.mode.value = "app_list";
			document.RefundForm.no.value = no;
			document.RefundForm.method = "post";
			document.RefundForm.action = "../../src/apply/re_action.php";
			document.RefundForm.submit();
		}
	}
}

function approveRefund(val) {
	if (val == "Y") {
		if (document.RefundForm.price.value == "") {
			alert("?????? ??????????.");
			document.RefundForm.price.focus();
			return;
		} else if (!checkNumber(document.RefundForm.price.value)) {
			alert("?????? ?????? ??????????????.");
			document.RefundForm.price.focus();
			return;
		}
		if (document.RefundForm.price1.value == "") {
			alert("?????? ??????????.");
			document.RefundForm.price1.focus();
			return;
		} else if (!checkNumber(document.RefundForm.price1.value)) {
			alert("?????? ?????? ??????????????.");
			document.RefundForm.price1.focus();
			return;
		}
		if (document.RefundForm.price2.value == "") {
			alert("?????? ??????????.");
			document.RefundForm.price2.focus();
			return;
		} else if (!checkNumber(document.RefundForm.price2.value)) {
			alert("?????? ?????? ??????????????.");
			document.RefundForm.price2.focus();
			return;
		}
		if (document.RefundForm.app_yy.value == "" || document.RefundForm.app_mm.value == "" || document.RefundForm.app_dd.value == "") {
			alert("???????? ??????????.");
			document.RefundForm.app_yy.focus();
			return;
		}
	}
	if (document.RefundForm.no.value) {
		var temp = "??????";
		if (val == "Y") temp = "????";
		else if (val == "C") temp = "????";
		var flag = confirm("???????? ???????? " + temp + " ?????????????");
		if (flag) {
			document.RefundForm.approve.value = val;
			document.RefundForm.mode.value = "app";
			document.RefundForm.method = "post";
			document.RefundForm.action = "../../src/apply/re_action.php";
			document.RefundForm.submit();
		}
	}
}

function downloadExcel() {
	if (!document.RefundForm.purpose.value) {
		alert("?????????? ??????????.");
		document.RefundForm.purpose.focus();
		return;
	} else {
		document.RefundForm.action = "../../src/apply/re_excel.php";
		document.RefundForm.submit();
	}
}

function showPhotoList() {
	if (!document.RefundForm.purpose.value) {
		alert("?????????? ??????????.");
		document.RefundForm.purpose.focus();
		return;
	} else {
		PHOTO_LIST = window.open('', 'PHOTO_LIST','resizable=no,scrollbars=yes,status=no,width=900,height=600');
		PHOTO_LIST.focus();
		document.RefundForm.target = "PHOTO_LIST";
		document.RefundForm.action = "../../src/popup/re_photo.php";
		document.RefundForm.submit();
	}
}