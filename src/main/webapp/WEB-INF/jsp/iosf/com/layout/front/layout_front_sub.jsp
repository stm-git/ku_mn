<%@ page language="java" contentType="text/html;charset=UTF-8" pageEncoding="UTF-8"%>
<%@ include file="../../sys/taglibs.jspf"%>
<%@ include file="../../sys/setCodes.jspf"%>
<c:choose>
	<c:when test="${fn:contains(url, '/common') }">
		<c:set var="menu_cd" value="${page }" />
		<c:choose>
			<c:when test="${page == 'privacy' }">
				<c:set var="menu_cd" value="m0.2" />
			</c:when>
			<c:when test="${page == 'nonemail' }">
				<c:set var="menu_cd" value="m0.3" />
			</c:when>
		</c:choose>
	</c:when>
	<c:when test="${fn:contains(url, '/card') }">
		<c:set var="menu_cd" value="m1.3" />
	</c:when>
	<c:when test="${fn:contains(url, '/mobile') }">
		<c:set var="menu_cd" value="m2.3" />
	</c:when>
	<c:when test="${fn:contains(url, '/entrance') }">
		<c:set var="menu_cd" value="m3.2" />
	</c:when>
	<c:when test="${fn:contains(url, '/notice') }">
		<c:set var="menu_cd" value="m4.1" />
	</c:when>
	<c:when test="${fn:contains(url, '/faq') }">
		<c:set var="menu_cd" value="m4.2" />
	</c:when>
	<c:when test="${fn:contains(url, '/comm') }">
		<c:set var="menu_cd" value="m4.3" />
	</c:when>
	<c:when test="${fn:contains(url, '/ask') }">
		<c:set var="menu_cd" value="m5.1" />
	</c:when>
	<c:when test="${fn:contains(url, '/login') }">
		<c:set var="menu_cd" value="m0.1" />
	</c:when>
</c:choose>
<c:set var="depth1_nm" value="" />
<c:set var="depth2_nm" value="" />
<c:set var="depth3_nm" value="" />
<c:choose>
	<c:when test="${fn:contains(menu_cd, 'm1') }">
		<c:set var="depth1_nm" value="실물 신분증" />
		<c:choose>
			<c:when test="${fn:contains(menu_cd, 'm1.1.1') }">
				<c:set var="depth2_nm" value="이용 안내" />
				<c:set var="depth3_nm" value="학생증/신분증 소개" />
			</c:when>
			<c:when test="${fn:contains(menu_cd, 'm1.2.1') }">
				<c:set var="depth2_nm" value="신청 안내" />
				<c:set var="depth3_nm" value="신입생 예약신청 안내" />
			</c:when>
			<c:when test="${fn:contains(menu_cd, 'm1.3') }">
				<c:set var="depth2_nm" value="발급 내역 조회" />
			</c:when>
		</c:choose>
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'm2') }">
		<c:set var="depth1_nm" value="모바일 신분증" />
		<c:choose>
			<c:when test="${fn:contains(menu_cd, 'm2.1.1') }">
				<c:set var="depth2_nm" value="가입 및 발급 절차" />
				<c:set var="depth3_nm" value="모바일 신분증 가입절차" />
			</c:when>
			<c:when test="${fn:contains(menu_cd, 'm2.1.2') }">
				<c:set var="depth2_nm" value="가입 및 발급 절차" />
				<c:set var="depth3_nm" value="모바일 신분증 발급절차" />
			</c:when>
			<c:when test="${fn:contains(menu_cd, 'm2.2') }">
				<c:set var="depth2_nm" value="이용 안내" />
			</c:when>
			<c:when test="${fn:contains(menu_cd, 'm2.3') }">
				<c:set var="depth2_nm" value="발급 내역 조회" />
			</c:when>
		</c:choose>
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'm3') }">
		<c:set var="depth1_nm" value="건물 출입 안내" />
		<c:choose>
			<c:when test="${fn:contains(menu_cd, 'm3.1') }">
				<c:set var="depth2_nm" value="건물 출입 이용 안내" />
			</c:when>
			<c:when test="${fn:contains(menu_cd, 'm3.2') }">
				<c:set var="depth2_nm" value="출입 권한 조회" />
			</c:when>
		</c:choose>
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'm4') }">
		<c:set var="depth1_nm" value="커뮤니티" />
		<c:choose>
			<c:when test="${fn:contains(menu_cd, 'm4.1') }">
				<c:set var="depth2_nm" value="공지사항" />
			</c:when>
			<c:when test="${fn:contains(menu_cd, 'm4.2') }">
				<c:set var="depth2_nm" value="자주묻는 질문" />
			</c:when>
			<c:when test="${fn:contains(menu_cd, 'm4.3') }">
				<c:set var="depth2_nm" value="자유게시판" />
			</c:when>
		</c:choose>
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'm5') }">
		<c:set var="depth1_nm" value="민원 안내" />
		<c:choose>
			<c:when test="${fn:contains(menu_cd, 'm5.1') }">
				<c:set var="depth2_nm" value="1:1 문의" />
			</c:when>
		</c:choose>
	</c:when>
	<c:when test="${fn:contains(menu_cd, 'm0') }">
		<c:set var="depth1_nm" value="인덱스 페이지" />
		<c:choose>
			<c:when test="${fn:contains(menu_cd, 'm0.1') }">
				<c:set var="depth2_nm" value="로그인" />
			</c:when>
			<c:when test="${fn:contains(menu_cd, 'm0.2') }">
				<c:set var="depth2_nm" value="개인정보처리방침" />
			</c:when>
			<c:when test="${fn:contains(menu_cd, 'm0.3') }">
				<c:set var="depth2_nm" value="이메일무단수집거부" />
			</c:when>
		</c:choose>
	</c:when>
</c:choose>
<!DOCTYPE html>
<html lang="${language }">
<head>
	<%@include file="../../sys/metalibs.jspf" %>
	<%@include file="../../sys/csslibs.jspf" %>
	<%@include file="../../sys/jslibs.jspf" %>
</head>

<body>

	<tiles:insertAttribute name="header" />	

    <!-- center -->
    <div id="container">
        <div class="sub-visual">
            <div class="wrap">
                <h2 class="htitle">${depth1_nm }</h2>
                <span class="subtext">KU SMART CARD & MOBILE-ID</span>
            </div>
        </div>
        <div class="center-box">
            <div class="wrap">
                <!-- group 1-->
                <div class="left-panel">
                    <div class="left-top">
                        <span>${depth1_nm }</span>
                    </div>
                    <ul class="left-menu">
						<c:choose>
							<c:when test="${fn:contains(menu_cd, 'm1') }">
		                        <li class="withsub ${fn:contains(menu_cd, 'm1.1') ? 'on' : '' }">
		                            <a href="#">이용 안내</a>
		                            <ul>
		                                <li class="${fn:contains(menu_cd, 'm1.1.1') ? 'on' : '' }"><a href="${configs.CONTEXT }/front/common/m1.1.1">학생증/신분증 소개</a></li>
		                                <!-- <li><a href="javascript:alert('준비중입니다');">국제학생증 소개</a></li> -->
		                            </ul>
		                        </li>
		                        <li class="withsub ${fn:contains(menu_cd, 'm1.2') ? 'on' : '' }">
		                            <a href="#">신청 안내</a>
		                            <ul>
		                                <li class="${fn:contains(menu_cd, 'm1.2.1') ? 'on' : '' }"><a href="${configs.CONTEXT }/front/common/m1.2.1">신입생 예약신청 안내</a></li>
		                                <!-- <li><a href="javascript:alert('준비중입니다');">비대면 금융신청 안내</a></li> -->
		                            </ul>
		                        </li>
		                        <li><a href="${configs.CONTEXT }/front/card">발급 내역 조회</a></li>
							</c:when>
							<c:when test="${fn:contains(menu_cd, 'm2') }">
		                        <li class="withsub ${fn:contains(menu_cd, 'm2.1') ? 'on' : '' }">
		                            <a href="#">가입 및 발급 절차</a>
		                            <ul>
		                                <li class="${fn:contains(menu_cd, 'm2.1.1') ? 'on' : '' }"><a href="${configs.CONTEXT }/front/common/m2.1.1">모바일 신분증 가입절차</a></li>
		                                <li class="${fn:contains(menu_cd, 'm2.1.2') ? 'on' : '' }"><a href="${configs.CONTEXT }/front/common/m2.1.2">모바일 신분증 발급절차</a></li>
		                            </ul>
		                        </li>
		                        <li class="${fn:contains(menu_cd, 'm2.2') ? 'on' : '' }"><a href="${configs.CONTEXT }/front/common/m2.2">이용 안내</a></li>
		                        <li class="${fn:contains(menu_cd, 'm2.3') ? 'on' : '' }"><a href="${configs.CONTEXT }/front/mobile">발급 내역 조회</a></li>
							</c:when>
							<c:when test="${fn:contains(menu_cd, 'm3') }">
		                        <li class="${fn:contains(menu_cd, 'm3.1') ? 'on' : '' }"><a href="${configs.CONTEXT }/front/common/m3.1">건물 출입 이용 안내</a></li>
		                        <li class="${fn:contains(menu_cd, 'm3.2') ? 'on' : '' }"><a href="${configs.CONTEXT }/front/entrance">출입 권한 조회</a></li>
							</c:when>
							<c:when test="${fn:contains(menu_cd, 'm4') }">
		                        <li class="${fn:contains(menu_cd, 'm4.1') ? 'on' : '' }"><a href="${configs.CONTEXT }/front/notice">공지사항</a></li>
		                        <li class="${fn:contains(menu_cd, 'm4.2') ? 'on' : '' }"><a href="${configs.CONTEXT }/front/faq">자주묻는 질문</a></li>
		                        <%-- <li class="${fn:contains(menu_cd, 'm4.3') ? 'on' : '' }"><a href="${configs.CONTEXT }/front/comm">자유게시판</a></li> --%>
							</c:when>
							<c:when test="${fn:contains(menu_cd, 'm5') }">
		                        <li class="${fn:contains(menu_cd, 'm5.1') ? 'on' : '' }"><a href="${configs.CONTEXT }/front/ask">1:1 문의</a></li>
							</c:when>
							<c:when test="${fn:contains(menu_cd, 'm0') }">
		                        <li class="${fn:contains(menu_cd, 'm0.1') ? 'on' : '' }"><a href="${configs.CONTEXT }/front/${isUser ? 'logout' : 'login' }">${isUser ? '로그아웃' : '로그인' }</a></li>
		                        <li class="${fn:contains(menu_cd, 'm0.2') ? 'on' : '' }"><a href="https://www.korea.ac.kr/mbshome/mbs/university/subview.jsp?id=university_090300000000" target="_blank">개인정보처리방침</a></li>
		                        <li class="${fn:contains(menu_cd, 'm0.3') ? 'on' : '' }"><a href="${configs.CONTEXT }/front/common/nonemail">이메일무단수집거부</a></li>
							</c:when>
						</c:choose>
                    </ul>
                </div>
                <div class="right-panel">
                    <div class="right-panel-top">
                        <h3 class="page-title">${empty depth3_nm ? depth2_nm : depth3_nm }</h3>
                        <ul class="navi">
                            <li class="home"><a href="/">&nbsp;</a></li>
                            <li>${depth1_nm }</li>
                            <li>${depth2_nm }</li>
                            <li class="${empty depth3_nm ? 'hide' : '' }">${depth3_nm }</li>
                        </ul>
                    </div>
                    <div class="component-area">

                        <tiles:insertAttribute name="content" />

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //center -->

	<tiles:insertAttribute name="footer" />
</body>
</html>