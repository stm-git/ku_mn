<?
	include_once("lib/conf.common.php");
	include_once("lib/func.common.php");
	include_once("lib/class.cApplicant.php");
	include_once("lib/class.rFastTemplate.php");

	$no = array();
	$no[] = "2006010092";
	$no[] = "2006010104";
	$no[] = "2006010089";
	$no[] = "2006010094";
	$no[] = "2006010093";
	$no[] = "2006010107";
	$no[] = "2006010115";
	$no[] = "2006010109";
	$no[] = "2006010117";
	$no[] = "2006010065";
	$no[] = "2006010105";
	$no[] = "2006010095";
	$no[] = "2006010100";
	$no[] = "2006010103";
	$no[] = "2006010111";
	$no[] = "2006010126";
	$no[] = "2006010140";
	$no[] = "2005120083";
	$no[] = "2005120056";
	$no[] = "2005120044";
	$no[] = "2005120043";
	$no[] = "2005110058";
	$no[] = "2005110150";
	$no[] = "2005120140";
	$no[] = "2005120137";
	$no[] = "2005110142";
	$no[] = "2005110082";
	$no[] = "2006010121";
	$no[] = "2006010055";
	$no[] = "2006010049";
	$no[] = "2006010053";
	$no[] = "2006010079";
	$no[] = "2006010031";
	$no[] = "2006010013";
	$no[] = "2005110078";
	$no[] = "2005110153";
	$no[] = "2005110108";
	$no[] = "2005120069";
	$no[] = "2005110104";
	$no[] = "2006010025";
	$no[] = "2005120212";
	$no[] = "2006010108";
	$no[] = "2006010054";
	$no[] = "2005110230";
	$no[] = "2005120072";
	$no[] = "2005110145";
	$no[] = "2005120015";
	$no[] = "2005110257";
	$no[] = "2006010012";
	$no[] = "2005110229";
	$no[] = "2005120094";
	$no[] = "2005120154";
	$no[] = "2005120023";
	$no[] = "2005120049";
	$no[] = "2005110086";
	$no[] = "2005120124";
	$no[] = "2006010106";
	$no[] = "2006010020";
	$no[] = "2005120110";
	$no[] = "2005120135";
	$no[] = "2005110073";
	$no[] = "2005110138";
	$no[] = "2005120032";
	$no[] = "2006010078";
	$no[] = "2005120016";
	$no[] = "2006010110";
	$no[] = "2005120136";
	$no[] = "2005120041";
	$no[] = "2005110057";
	$no[] = "2005110154";
	$no[] = "2005110130";
	$no[] = "2005110071";
	$no[] = "2005110099";
	$no[] = "2005120103";
	$no[] = "2005110060";
	$no[] = "2005110148";
	$no[] = "2005120042";
	$no[] = "2005110085";
	$no[] = "2005110139";
	$no[] = "2005120093";
	$no[] = "2005120039";
	$no[] = "2005120050";
	$no[] = "2005120130";
	$no[] = "2005120084";
	$no[] = "2006010151";
	$no[] = "2006010091";
	$no[] = "2006010027";
	$no[] = "2006010118";
	$no[] = "2006010062";
	$no[] = "2006010058";
	$no[] = "2006010044";
	$no[] = "2006010029";
	$no[] = "2005120082";
	$no[] = "2005120081";
	$no[] = "2005110133";
	$no[] = "2005120079";
	$no[] = "2005110134";
	$no[] = "2006010160";
	$no[] = "2005110244";
	$no[] = "2005120077";
	$no[] = "2005120076";
	$no[] = "2005120148";
	$no[] = "2005120107";
	$no[] = "2005120096";
	$no[] = "2005120134";
	$no[] = "2005120066";
	$no[] = "2005120034";
	$no[] = "2005120028";
	$no[] = "2005120045";
	$no[] = "2005110066";
	$no[] = "2005120150";
	$no[] = "2005120057";
	$no[] = "2005120021";
	$no[] = "2005120106";
	$no[] = "2005110076";
	$no[] = "2006010064";
	$no[] = "2005110065";
	$no[] = "2005120025";
	$no[] = "2006010072";
	$no[] = "2006010059";
	$no[] = "2005120102";
	$no[] = "2005110176";
	$no[] = "2005110114";
	$no[] = "2005120111";
	$no[] = "2005120055";
	$no[] = "2005110083";
	$no[] = "2006010035";
	$no[] = "2006010024";
	$no[] = "2005120040";
	$no[] = "2006010128";
	$no[] = "2006010030";
	$no[] = "2005120100";
	$no[] = "2006010114";
	$no[] = "2006010076";
	$no[] = "2006010019";
	$no[] = "2006010039";
	$no[] = "2006010028";
	$no[] = "2006010033";
	$no[] = "2006010145";
	$no[] = "2005120020";
	$no[] = "2006010122";
	$no[] = "2006010023";
	$no[] = "2005120131";
	$no[] = "2005120139";
	$no[] = "2005120075";
	$no[] = "2005120074";
	$no[] = "2005120108";
	$no[] = "2005120054";
	$no[] = "2005120005";
	$no[] = "2005110238";
	$no[] = "2005110179";
	$no[] = "2005110177";
	$no[] = "2006010004";
	$no[] = "2005120224";
	$no[] = "2005120133";
	$no[] = "2005110197";
	$no[] = "2005110178";
	$no[] = "2005110135";
	$no[] = "2005120085";
	$no[] = "2005120071";
	$no[] = "2005110175";
	$no[] = "2006010052";
	$no[] = "2005120024";
	$no[] = "2005110196";
	$no[] = "2006010016";
	$no[] = "2005120159";
	$no[] = "2005110243";
	$no[] = "2006010124";
	$no[] = "2006010074";
	$no[] = "2006010073";
	$no[] = "2005120165";
	$no[] = "2005120109";
	$no[] = "2005120070";
	$no[] = "2005110256";
	$no[] = "2005110255";
	$no[] = "2005110249";
	$no[] = "2005120151";
	$no[] = "2005120027";
	$no[] = "2005110137";
	$no[] = "2005120101";
	$no[] = "2005120068";
	$no[] = "2005110152";
	$no[] = "2006010066";
	$no[] = "2005120008";
	$no[] = "2005120036";
	$no[] = "2005110239";
	$no[] = "2005110170";
	$no[] = "2006010142";
	$no[] = "2005110237";
	$no[] = "2005110151";
	$no[] = "2006010032";
	$no[] = "2005120132";
	$no[] = "2005110181";
	$no[] = "2006010125";
	$no[] = "2006010123";

	$no[] = "2005120229";

	$applicant = new cApplicant($mysqlhost, $mysqluser, $mysqlpass, $mysqldb, $applicantTable, $rateTable, $periodTable, $roomTable, $priceTable, $preferenceTable, $paymentTable);
	$applicant->connectDatabase();

	$count = 0;
	for ($i = 0; $i < count($no); $i++) {
		$applicant->getApplicantInfo($no[$i]);
		$from = "reslife@korea.ac.kr";
		$to = $applicant->personEmail;
		$subject = "[KU Residence Life] ATTN: Important Notice";
		$msg = "Residence Life office noted that some applicants received an error message on February 3. ";
		$msg .= "The error message contains NO TITLE and has NO relations with your room assignment and residence hall fee due information. ";
		$msg .= "The message was sent due to technical difficulties and should be disregarded immediately.<br><br>\n";
		$msg .= "Your room assignment and residence hall fee due information was entitled  Room Assigment & Payment Information.<br><br>\n";
		$msg .= "We apoligize for the confusion and look forward to your arrival for Spring 2006!.";

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