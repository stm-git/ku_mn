<?
	include_once("lib/conf.common.php");
	include_once("lib/func.common.php");
	include_once("lib/class.cApplicant.php");
	include_once("lib/class.rFastTemplate.php");

	$no = array();
	//$no[] = "2006050002"; // �����
	$no[] = "2006050219";
	$no[] = "2006050235";
	$no[] = "2006050120";
	$no[] = "2006050034";
	$no[] = "2006050224";
	$no[] = "2006050313";
	$no[] = "2006050261";
	$no[] = "2006080006";
	$no[] = "2006080025";
	$no[] = "2006080016";
	$no[] = "2006080030";
	$no[] = "2006050041";
	$no[] = "2006070137";
	$no[] = "2006050276";
	$no[] = "2006050333";
	$no[] = "2006070101";
	$no[] = "2006070053";
	$no[] = "2006050191";
	$no[] = "2006070119";
	$no[] = "2006070032";
	$no[] = "2006050195";
	$no[] = "2006070115";
	$no[] = "2006070056";
	$no[] = "2006050327";
	$no[] = "2006070026";
	$no[] = "2006070009";
	$no[] = "2006050328";
	$no[] = "2006070131";
	$no[] = "2006070007";
	$no[] = "2006050330";
	$no[] = "2006050270";
	$no[] = "2006080018";
	$no[] = "2006070132";
	$no[] = "2006070125";
	$no[] = "2006050319";
	$no[] = "2006080022";
	$no[] = "2006080021";
	$no[] = "2006080017";
	$no[] = "2006080015";
	$no[] = "2006050073";
	$no[] = "2006050304";
	$no[] = "2006080034";
	$no[] = "2006050053";
	$no[] = "2006050148";
	$no[] = "2006050183";
	$no[] = "2006050171";
	$no[] = "2006050011";
	$no[] = "2006050021";
	$no[] = "2006050038";
	$no[] = "2006070107";
	$no[] = "2006050032";
	$no[] = "2006080040";
	$no[] = "2006050260";
	$no[] = "2006050137";
	$no[] = "2006050305";
	$no[] = "2006080005";
	$no[] = "2006080020";
	$no[] = "2006080019";
	$no[] = "2006080013";
	$no[] = "2006050244";
	$no[] = "2006050070";
	$no[] = "2006070001";
	$no[] = "2006050072";
	$no[] = "2006050043";
	$no[] = "2006050269";
	$no[] = "2006050024";
	$no[] = "2006060007";
	$no[] = "2006050112";
	$no[] = "2006050331";
	$no[] = "2006080035";
	$no[] = "2006050348";
	$no[] = "2006070124";
	$no[] = "2006070149";
	$no[] = "2006060006";
	$no[] = "2006050323";
	$no[] = "2006050288";
	$no[] = "2006050236";
	$no[] = "2006070122";
	$no[] = "2006070116";
	$no[] = "2006050194";
	$no[] = "2006050312";
	$no[] = "2006080038";
	$no[] = "2006090005";
	$no[] = "2006070114";
	$no[] = "2006090002";
	$no[] = "2006090003";
	$no[] = "2006070129";
	$no[] = "2006080028";
	$no[] = "2006080039";
	$no[] = "2006050076";
	$no[] = "2006050311";
	$no[] = "2006050314";
	$no[] = "2006050296";
	$no[] = "2006080003";
	$no[] = "2006050081";
	$no[] = "2006050071";
	$no[] = "2006050116";
	$no[] = "2006050037";
	$no[] = "2006050074";
	$no[] = "2006050002";
	$no[] = "2006050075";
	$no[] = "2006050287";
	$no[] = "2006050115";
	$no[] = "2006050229";
	$no[] = "2006050132";
	$no[] = "2006050131";
	$no[] = "2006050068";
	$no[] = "2006050259";
	$no[] = "2006050256";
	$no[] = "2006050154";
	$no[] = "2006080033";
	$no[] = "2006050185";
	$no[] = "2006050126";
	$no[] = "2006050164";
	$no[] = "2006050139";
	$no[] = "2006060004";
	$no[] = "2006070130";
	$no[] = "2006070048";
	$no[] = "2006050105";
	$no[] = "2006070059";
	$no[] = "2006050321";
	$no[] = "2006070112";
	$no[] = "2006070069";
	$no[] = "2006070123";
	$no[] = "2006050318";
	$no[] = "2006070159";
	$no[] = "2006070050";
	$no[] = "2006070028";
	$no[] = "2006050170";
	$no[] = "2006050031";
	$no[] = "2006050025";
	$no[] = "2006050168";
	$no[] = "2006050146";
	$no[] = "2006050018";
	$no[] = "2006070033";
	$no[] = "2006070034";
	$no[] = "2006050190";
	$no[] = "2006050118";
	$no[] = "2006050241";
	$no[] = "2006050286";
	$no[] = "2006070060";
	$no[] = "2006060014";
	$no[] = "2006050341";
	$no[] = "2006070144";
	$no[] = "2006070043";
	$no[] = "2006070016";
	$no[] = "2006070017";
	$no[] = "2006050353";
	$no[] = "2006070079";
	$no[] = "2006070126";
	$no[] = "2006070044";
	$no[] = "2006070041";
	$no[] = "2006050324";
	$no[] = "2006070089";
	$no[] = "2006070064";
	$no[] = "2006070019";
	$no[] = "2006070070";
	$no[] = "2006090004";
	$no[] = "2006050019";
	$no[] = "2006070147";
	$no[] = "2006070146";
	$no[] = "2006050008";
	$no[] = "2006090001";
	$no[] = "2006050237";
	$no[] = "2006050095";
	$no[] = "2006070143";
	$no[] = "2006070142";
	$no[] = "2006050178";
	$no[] = "2006070148";
	$no[] = "2006050013";
	$no[] = "2006050056";
	$no[] = "2006070085";
	$no[] = "2006050351";
	$no[] = "2006070083";
	$no[] = "2006070150";
	$no[] = "2006050214";
	$no[] = "2006070140";
	$no[] = "2006070061";
	$no[] = "2006070051";
	$no[] = "2006050329";
	$no[] = "2006050332";
	$no[] = "2006050336";
	$no[] = "2006050322";
	$no[] = "2006050084";
	$no[] = "2006050238";
	$no[] = "2006050097";
	$no[] = "2006070010";
	$no[] = "2006070013";
	$no[] = "2006070018";
	$no[] = "2006070021";
	$no[] = "2006050186";
	$no[] = "2006050316";
	$no[] = "2006050335";
	$no[] = "2006050239";
	$no[] = "2006050187";
	$no[] = "2006050188";
	$no[] = "2006050189";
	$no[] = "2006050167";
	$no[] = "2006050172";
	$no[] = "2006050223";
	$no[] = "2006050292";
	$no[] = "2006050295";
	$no[] = "2006070068";
	$no[] = "2006050005";
	$no[] = "2006050161";
	$no[] = "2006050303";
	$no[] = "2006050033";
	$no[] = "2006050242";
	$no[] = "2006080037";
	$no[] = "2006070040";
	$no[] = "2006070023";
	$no[] = "2006070022";
	$no[] = "2006070136";
	$no[] = "2006070128";
	$no[] = "2006070109";
	$no[] = "2006070065";
	$no[] = "2006070002";
	$no[] = "2006070006";
	$no[] = "2006070012";
	$no[] = "2006070111";
	$no[] = "2006070073";
	$no[] = "2006070049";
	$no[] = "2006070027";
	$no[] = "2006070104";
	$no[] = "2006070072";
	$no[] = "2006070158";
	$no[] = "2006070047";
	$no[] = "2006070054";
	$no[] = "2006070055";
	$no[] = "2006070139";
	$no[] = "2006070005";
	$no[] = "2006070004";
	$no[] = "2006070133";
	$no[] = "2006061545";
	$no[] = "2006050173";
	$no[] = "2006050059";
	$no[] = "2006050064";
	$no[] = "2006050339";
	$no[] = "2006050108";
	$no[] = "2006050253";
	$no[] = "2006050047";
	$no[] = "2006050048";
	$no[] = "2006050050";
	$no[] = "2006050222";
	$no[] = "2006050054";
	$no[] = "2006080014";
	$no[] = "2006070037";
	$no[] = "2006070035";
	$no[] = "2006070030";
	$no[] = "2006070155";
	$no[] = "2006070156";
	$no[] = "2006070157";
	$no[] = "2006050315";
	$no[] = "2006070088";
	$no[] = "2006070154";
	$no[] = "2006070113";
	$no[] = "2006070074";
	$no[] = "2006070127";
	$no[] = "2006070095";
	$no[] = "2006070134";
	$no[] = "2006070141";
	$no[] = "2006070038";
	$no[] = "2006070108";
	$no[] = "2006070117";
	$no[] = "2006070105";
	$no[] = "2006070135";
	$no[] = "2006070153";
	$no[] = "2006070086";
	$no[] = "2006070020";
	$no[] = "2006050252";
	$no[] = "2006070057";
	$no[] = "2006080036";
	$no[] = "2006070106";
	$no[] = "2006070024";
	$no[] = "2006070025";
	$no[] = "2006070071";
	$no[] = "2006070003";
	$no[] = "2006070090";
	$no[] = "2005120227"; // ���ȯ

	$applicant = new cApplicant($mysqlhost, $mysqluser, $mysqlpass, $mysqldb, $applicantTable, $rateTable, $periodTable, $roomTable, $priceTable, $preferenceTable, $paymentTable);
	$applicant->connectDatabase();

	$count = 0;
	for ($i = 0; $i < count($no); $i++) {
		$applicant->getApplicantInfo($no[$i]);
		$name = $applicant->personLastName . " - Family, " . $applicant->personFirstName . " - Given " . $applicant->personMiddleName . " - Middle";
		$from = "reslife@korea.ac.kr";
		$to = $applicant->personEmail;
		//$to = "ksh@intia.co.kr";
		//$to = "heeryun@korea.ac.kr";
		$subject = "[KU Residence Life] UPCOMING WINTER TERM RESIDENCE HALL APPLICATION";

		$msg = "If you would like to continue your stay in residence halls during the winter vacation, then you need to reapply.<br>\n";
		$msg .= "WINTER TERM APPLICATION WINDOW WILL BE OPEN: <font style=\"text-decoration:underline;\"><b>Monday, November 6 - Friday, November 10</b></font>. (Note: Spring 2007 residence hall application is available January 3 through 12.).<br><br>\n";
		$msg .= "After your application for winter 2007, you need to transfer your current term's deposit to winter 2007.<br>\n";
		$msg .= "Here is how you apply for winter and transfer your deposit:<br>\n";
		$msg .= "1) Apply for winter 2007: the application button is at the bottom of \"Application Procedure\" page<br>\n";
		$msg .= "2) Submit the application and <font style=\"text-decoration:underline;\">keep your application number</font><br>\n";
		$msg .= "3)	Go to \"Check Your Application\" page to transfer deposit<br>\n";
		$msg .= "<font style=\"text-decoration:underline;\">You are required to input your current term's application number(" . $no[$i] . ") and name(" . $name . ").</font><br>\n";
		$msg .= "4) Click on Deposit Refund/Transfer button on the bottom of your application<br>\n";
		$msg .= "5) Choose \"Change of Semester\"<br>\n";
		$msg .= "6) Select the application number for winter term (If you have more than one applications, then it will show all your applications. Make sure you select your choice of application.)<br>\n";
		$msg .= "7) Submit your transfer request<br>\n";
		$msg .= "After your completed application with deposit transfer is received, your room assignment will be on <b>November 29</b> and you will be billed for your room rate.<br>\n";
		$msg .= "The payment period is <b>December 5 - December 7, 2006</b>.<br>\n";
		$msg .= "For more information, please refer to residence life website at <a href=\"mailto:reslife@korea.ac.kr\">reslife.korea.ac.kr</a>.<br><br>\n";
		$msg .= "Thank you.\n";
		//$msg .= "Korea University<br>\n";
		//$msg .= "Anam Residence Life<br>\n";
		//$msg .= "International Residence<br>\n";
		//$msg .= "Fax: 82-2-926-3464<br>\n";
		//$msg .= "email: <a href=\"mailto:reslife@korea.ac.kr\">reslife@korea.ac.kr</a><br>\n";
		//$msg .= "<a href=\"http://reslife.korea.ac.kr\">http://reslife.korea.ac.kr</a>\n";

		$tpl = new rFastTemplate("../tpl/main");
		$tpl->define(array(main => "letter.html"));
		$tpl->assign(array(DOMAIN_URL => $web_http_url,
		                   MESSAGE    => $msg));
		$tpl->parse(FINAL, "main");
		$content = $tpl->GetTemplate(FINAL);
		$headers = "Reply-To: " . $from . "\n";
		$headers .= "From: " . $from . "\n";
		$headers .= "Content-Type: text/html; charset=euc-kr\n";
		$headers .= "Mime-Version: 1.0\n";
		$flag = mail($to, $subject, $content, $headers);
		unset($tpl);

		if ($flag) echo $no[$i] . " : success<br>";
		else echo $no[$i] . " : fail<br>";
		$count++;
	}

	echo $count;

	$applicant->closeDatabase();
	unset($applicant);
?>