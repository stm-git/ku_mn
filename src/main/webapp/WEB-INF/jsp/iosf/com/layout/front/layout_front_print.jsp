<%@ page language="java" contentType="text/html;charset=UTF-8" pageEncoding="UTF-8"%>
<%@ include file="../../sys/taglibs.jspf"%>
<%@ include file="../../sys/setCodes.jspf"%>
<c:set var="menu_cd" value="" />
<c:set var="depth1_nm" value="" />
<c:set var="depth1_nm_eng" value="" />
<c:set var="depth2_nm" value="" />
<c:set var="depth3_nm" value="" />
<c:choose>
	<c:when test="${!empty param.page }">
		<c:set var="menu_cd" value="${param.page }" />
	</c:when>
	<c:when test="${fn:contains(url, '/event') && param.sep_cd == 'C' }">
		<c:set var="menu_cd" value="m2.2" />
	</c:when>
	<c:when test="${fn:contains(url, '/board') && param.sep_cd == 'CONTEST' }">
		<c:set var="menu_cd" value="m3.3.1" />
	</c:when>
	<c:when test="${fn:contains(url, '/board') && param.sep_cd == 'HONOR' }">
		<c:set var="menu_cd" value="m3.3.2" />
	</c:when>
	<c:when test="${fn:contains(url, '/event') && empty param.sep_cd }">
		<c:set var="menu_cd" value="m3.6" />
	</c:when>
	<c:when test="${fn:contains(url, '/board') && param.sep_cd == 'ENT_NOTICE' }">
		<c:set var="menu_cd" value="m4.1" />
	</c:when>
	<c:when test="${fn:contains(url, '/board') && param.sep_cd == 'ENT_STATUS' }">
		<c:set var="menu_cd" value="m4.2" />
	</c:when>
	<c:when test="${fn:contains(url, '/mento') && !empty param.type }">
		<c:set var="menu_cd" value="m5.1" />
	</c:when>
	<c:when test="${(fn:contains(url, '/mento') && param.consult_type_cd == 'ON') || (fn:contains(url, '/board') && param.sep_cd == 'MENTOS') }">
		<c:set var="menu_cd" value="m5.2" />
	</c:when>
	<c:when test="${(fn:contains(url, '/mento') && param.consult_type_cd == 'OFF') }">
		<c:set var="menu_cd" value="m5.4" />
	</c:when>
	<c:when test="${fn:contains(url, '/board') && param.sep_cd == 'NOTICE' }">
		<c:set var="menu_cd" value="m6.1" />
	</c:when>
	<c:when test="${fn:contains(url, '/board') && param.sep_cd == 'IDEA' }">
		<c:set var="menu_cd" value="m5.3" />
	</c:when>
	<c:when test="${fn:contains(url, '/board') && param.sep_cd == 'NEWS' }">
		<c:set var="menu_cd" value="m6.2" />
	</c:when>
	<c:when test="${fn:contains(url, '/board') && param.sep_cd == 'EVENT' }">
		<c:set var="menu_cd" value="m6.3" />
	</c:when>
	<c:when test="${fn:contains(url, '/board') && param.sep_cd == 'SUCCESS' }">
		<c:set var="menu_cd" value="m6.5" />
	</c:when>
	<c:when test="${fn:contains(url, '/mypage') && sep_cd == 'MENTOS' }">
		<c:set var="menu_cd" value="mypage1.4.1" />
	</c:when>
	<c:when test="${fn:contains(url, '/mypage') && sep_cd == 'IDEA' }">
		<c:set var="menu_cd" value="mypage1.4.2" />
	</c:when>
	<c:when test="${fn:contains(url, '/user') }">
		<c:set var="menu_cd" value="index1.1.1" />
	</c:when>
	<c:when test="${fn:contains(url, '/search') }">
		<c:set var="menu_cd" value="index1.5" />
	</c:when>
</c:choose>
<c:choose>
	<c:when test="${fn:contains(menu_cd, 'm1') }">
		<c:set var="depth1_nm" value="KU????????????" />
		<c:set var="depth1_nm_eng" value="ABOUT KU CRIMSON START-UP SUPPORT FOUNDATION" />
		<c:set var="depth1_cd" value="1" />
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'm2') }">
		<c:set var="depth1_nm" value="????????????" />
		<c:set var="depth1_nm_eng" value="EDUCATION OF START-UP COMPANIES" />
		<c:set var="depth1_cd" value="2" />
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'm3') }">
		<c:set var="depth1_nm" value="????????????" />
		<c:set var="depth1_nm_eng" value="SUPPORT PROGRAMS FOR START-UP" />
		<c:set var="depth1_cd" value="3" />
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'm4') }">
		<c:set var="depth1_nm" value="????????????" />
		<c:set var="depth1_nm_eng" value="MOVE IN GUIDE OF START-UP COMPANIES" />
		<c:set var="depth1_cd" value="4" />
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'm5') }">
		<c:set var="depth1_nm" value="????????????" />
		<c:set var="depth1_nm_eng" value="COUNSELING FOR START-UP" />
		<c:set var="depth1_cd" value="5" />
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'm6') }">
		<c:set var="depth1_nm" value="????????????" />
		<c:set var="depth1_nm_eng" value="COMMUNITY" />
		<c:set var="depth1_cd" value="6" />
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'mypage') }">
		<c:set var="depth1_nm" value="???????????????" />
		<c:set var="depth1_nm_eng" value="MY PAGE" />
		<c:set var="depth1_cd" value="7" />
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'index') }">
		<c:set var="depth1_nm" value="????????? ?????????" />
		<c:set var="depth1_nm_eng" value="INDEX PAGE" />
		<c:set var="depth1_cd" value="8" />
	</c:when>
</c:choose>

<c:choose>
	<c:when test="${fn:contains(menu_cd, 'm1.1') }">
		<c:set var="depth2_nm" value="????????????" />
		<c:set var="depth3_nm" value="" />
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'm1.2') }">
		<c:set var="depth2_nm" value="??????????????????" />
		<c:set var="depth3_nm" value="" />
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'm1.3') }">
		<c:set var="depth2_nm" value="????????????" />
		<c:set var="depth3_nm" value="" />
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'm1.4') }">
		<c:set var="depth2_nm" value="??????????????????" />
		<c:set var="depth3_nm" value="" />
		<c:choose>
			<c:when test="${fn:contains(menu_cd, 'm1.4.1') }">
				<c:set var="depth3_nm" value="????????????????????????" />
			</c:when>
			<c:when test="${fn:contains(menu_cd, 'm1.4.2') }">
				<c:set var="depth3_nm" value="??????????????????" />
			</c:when>
			<c:when test="${fn:contains(menu_cd, 'm1.4.3') }">
				<c:set var="depth3_nm" value="?????????????????????" />
			</c:when>
			<c:when test="${fn:contains(menu_cd, 'm1.4.4') }">
				<c:set var="depth3_nm" value="???????????????????????????" />
			</c:when>
			<c:when test="${fn:contains(menu_cd, 'm1.4.5') }">
				<c:set var="depth3_nm" value="KU????????????" />
			</c:when>
			<c:when test="${fn:contains(menu_cd, 'm1.4.6') }">
				<c:set var="depth3_nm" value="???????????????" />
			</c:when>
		</c:choose>
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'm1.5') }">
		<c:set var="depth2_nm" value="??????????????????" />
		<c:set var="depth3_nm" value="" />
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'm2.1') }">
		<c:set var="depth2_nm" value="??????????????????" />
		<c:set var="depth3_nm" value="" />
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'm2.2') }">
		<c:set var="depth2_nm" value="?????????????????????" />
		<c:set var="depth3_nm" value="" />
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'm3.1') }">
		<c:set var="depth2_nm" value="???????????? ??????" />
		<c:set var="depth3_nm" value="" />
		<c:choose>
			<c:when test="${fn:contains(menu_cd, 'm3.1.1') }">
				<c:set var="depth3_nm" value="?????? ??? ????????????" />
			</c:when>
			<c:when test="${fn:contains(menu_cd, 'm3.1.2') }">
				<c:set var="depth3_nm" value="??????????????????" />
			</c:when>
		</c:choose>
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'm3.2') }">
		<c:set var="depth2_nm" value="???????????????" />
		<c:set var="depth3_nm" value="" />
		<c:choose>
			<c:when test="${fn:contains(menu_cd, 'm3.2.1') }">
				<c:set var="depth3_nm" value="??????????????? ??????" />
			</c:when>
			<c:when test="${fn:contains(menu_cd, 'm3.2.2') }">
				<c:set var="depth3_nm" value="?????????????????????" />
			</c:when>
			<c:when test="${fn:contains(menu_cd, 'm3.2.3') }">
				<c:set var="depth3_nm" value="?????????????????????" />
			</c:when>
		</c:choose>
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'm3.3') }">
		<c:set var="depth2_nm" value="????????????" />
		<c:set var="depth3_nm" value="" />
		<c:choose>
			<c:when test="${fn:contains(menu_cd, 'm3.3.1') }">
				<c:set var="depth3_nm" value="??????????????????" />
			</c:when>
			<c:when test="${fn:contains(menu_cd, 'm3.3.2') }">
				<c:set var="depth3_nm" value="???????????????" />
			</c:when>
		</c:choose>
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'm3.4') }">
		<c:set var="depth2_nm" value="????????? ????????? ??????" />
		<c:set var="depth3_nm" value="" />
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'm3.5') }">
		<c:set var="depth2_nm" value="???????????????" />
		<c:set var="depth3_nm" value="" />
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'm3.6') }">
		<c:set var="depth2_nm" value="?????? ?????????" />
		<c:set var="depth3_nm" value="" />
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'm4.1') }">
		<c:set var="depth2_nm" value="????????????" />
		<c:set var="depth3_nm" value="" />
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'm4.2') }">
		<c:set var="depth2_nm" value="???????????? ??? ??????" />
		<c:set var="depth3_nm" value="" />
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'm5.1') }">
		<c:set var="depth2_nm" value="???????????????" />
		<c:set var="depth3_nm" value="" />
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'm5.2') }">
		<c:set var="depth2_nm" value="???????????????" />
		<c:set var="depth3_nm" value="" />
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'm5.3') }">
		<c:set var="depth2_nm" value="??????????????????" />
		<c:set var="depth3_nm" value="" />
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'm5.4') }">
		<c:set var="depth2_nm" value="??????????????????" />
		<c:set var="depth3_nm" value="" />
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'm6.1') }">
		<c:set var="depth2_nm" value="????????????" />
		<c:set var="depth3_nm" value="" />
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'm6.2') }">
		<c:set var="depth2_nm" value="????????????" />
		<c:set var="depth3_nm" value="" />
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'm6.3') }">
		<c:set var="depth2_nm" value="????????????" />
		<c:set var="depth3_nm" value="" />
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'm6.4') }">
		<c:set var="depth2_nm" value="????????????" />
		<c:set var="depth3_nm" value="" />
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'm6.5') }">
		<c:set var="depth2_nm" value="??????????????????" />
		<c:set var="depth3_nm" value="" />
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'mypage1.1') }">
		<c:set var="depth2_nm" value="??????????????????" />
		<c:set var="depth3_nm" value="" />
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'mypage1.2') }">
		<c:set var="depth2_nm" value="??????????????????" />
		<c:set var="depth3_nm" value="" />
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'mypage1.3') }">
		<c:set var="depth2_nm" value="????????????????????????" />
		<c:set var="depth3_nm" value="" />
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'mypage1.4') }">
		<c:set var="depth2_nm" value="????????????" />
		<c:set var="depth3_nm" value="" />
		<c:choose>
			<c:when test="${fn:contains(menu_cd, 'mypage1.4.1') }">
				<c:set var="depth3_nm" value="????????????" />
			</c:when>
			<c:when test="${fn:contains(menu_cd, 'mypage1.4.2') }">
				<c:set var="depth3_nm" value="??????????????????" />
			</c:when>
			<c:when test="${fn:contains(menu_cd, 'mypage1.4.3') }">
				<c:set var="depth3_nm" value="??????????????????" />
			</c:when>
		</c:choose>
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'index1.1') }">
		<c:set var="depth2_nm" value="?????????" />
		<c:set var="depth3_nm" value="" />
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'index1.2') }">
		<c:set var="depth2_nm" value="????????????????????????" />
		<c:set var="depth3_nm" value="" />
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'index1.3') }">
		<c:set var="depth2_nm" value="???????????????????????????" />
		<c:set var="depth3_nm" value="" />
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'index1.4') }">
		<c:set var="depth2_nm" value="????????????" />
		<c:set var="depth3_nm" value="" />
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'index1.5') }">
		<c:set var="depth2_nm" value="????????????" />
		<c:set var="depth3_nm" value="" />
	</c:when>
</c:choose>

<c:set var="menu_name" value="${empty depth3_nm ? depth2_nm : depth3_nm }" />
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ko" xml:lang="ko">
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, target-densitydpi=medium-dpi" />
<title>??????????????? ??-PORTAL</title>
<%@include file="../../sys/metalibs.jspf" %>
<%@include file="../../sys/csslibs.jspf" %>
<link rel="stylesheet" type="text/css" href="${css_src}/iosf/front/layout/header.css" />
<link rel="stylesheet" type="text/css" href="${css_src}/iosf/front/layout/layout_sub.css" />
<link rel="stylesheet" type="text/css" href="${css_src}/iosf/front/layout/footer.css" />
<link type="text/css" rel="stylesheet" href="${css_src}/iosf/component/theme1/front/korean/common.css" />
<c:if test="${!fn:contains(menu_cd, 'index1') }">
<link type="text/css" rel="stylesheet" href="${css_src}/iosf/front/content/m1.css" />
</c:if>
<c:if test="${fn:contains(menu_cd, 'index1') }">
<link type="text/css" rel="stylesheet" href="${css_src}/iosf/front/content/index.css" />
</c:if>
<%@include file="../../sys/jslibs.jspf" %>
<script type="text/javascript" src="${js_src}/iosf/front/layout/layout_sub.js"></script>
<script type="text/javascript" src="${js_src}/iosf/component/theme1/front/korean/controller.js" charset="UTF-8"></script>
<script type="text/javascript" src="${js_src}/iosf/front/controller.js"></script>
</head>

<body>
	<div class="wrapper">
		<div class="subcontent">
			<div class="wrapper">
				<div class="subcontent-right">
					<div class="subcontent-right-title">${menu_name }</div>
					<div class="component-area">
						<tiles:insertAttribute name="content" />
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>