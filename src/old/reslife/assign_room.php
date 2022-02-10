<?
	include_once("lib/conf.common.php");

	include_once("lib/class.cApplication.php");
	$application = new cApplication($mysqlhost, $mysqluser, $mysqlpass, $mysqldb, $studentTable, $applicantTable, $rateTable, $periodTable, $roomTable, $priceTable, $preferenceTable, $paymentTable, $accountTable, $refundTable);
	$application->connectDatabase();
	$application->facultyTableName = $facultyTable;
	$application->bookTableName = $bookTable;
	$application->rate1TableName = $rate1Table;

	$no = array();
	$no[] = "2009010075";
	$no[] = "2009010074";
	$no[] = "2009010072";
	$no[] = "2009010071";
	$no[] = "2009010070";
	$no[] = "2009010069";
	$no[] = "2009010068";
	$no[] = "2009010067";
	$no[] = "2009010065";
	$no[] = "2009010064";
	$no[] = "2009010063";
	$no[] = "2009010062";
	$no[] = "2009010061";
	$no[] = "2009010060";
	$no[] = "2009010059";
	$no[] = "2009010057";
	$no[] = "2009010056";
	$no[] = "2009010055";
	$no[] = "2009010054";
	$no[] = "2009010053";
	$no[] = "2009010052";
	$no[] = "2009010051";
	$no[] = "2009010050";
	$no[] = "2009010049";
	$no[] = "2009010048";
	$no[] = "2009010047";
	$no[] = "2009010046";
	$no[] = "2009010045";
	$no[] = "2009010044";
	$no[] = "2009010043";
	$no[] = "2009010042";
	$no[] = "2009010041";
	$no[] = "2009010040";
	$no[] = "2009010039";
	$no[] = "2009010038";
	$no[] = "2009010037";
	$no[] = "2009010036";
	$no[] = "2009010034";
	$no[] = "2009010032";
	$no[] = "2009010031";
	$no[] = "2009010030";
	$no[] = "2009010028";
	$no[] = "2009010026";
	$no[] = "2009010025";
	$no[] = "2009010024";
	$no[] = "2009010021";
	$no[] = "2009010019";
	$no[] = "2009010017";
	$no[] = "2009010016";
	$no[] = "2009010015";
	$no[] = "2009010014";
	$no[] = "2009010012";
	$no[] = "2009010011";
	$no[] = "2009010010";
	$no[] = "2009010008";
	$no[] = "2009010007";
	$no[] = "2009010006";
	$no[] = "2009010003";
	$no[] = "2008120362";
	$no[] = "2008120361";
	$no[] = "2008120360";
	$no[] = "2008120359";
	$no[] = "2008120358";
	$no[] = "2008120357";
	$no[] = "2008120355";
	$no[] = "2008120354";
	$no[] = "2008120353";
	$no[] = "2008120352";
	$no[] = "2008120351";
	$no[] = "2008120347";
	$no[] = "2008120345";
	$no[] = "2008120343";
	$no[] = "2008120342";
	$no[] = "2008120339";
	$no[] = "2008120333";
	$no[] = "2008120332";
	$no[] = "2008120331";
	$no[] = "2008120330";
	$no[] = "2008120329";
	$no[] = "2008120325";
	$no[] = "2008120324";
	$no[] = "2008120323";
	$no[] = "2008120319";
	$no[] = "2008120318";
	$no[] = "2008120317";
	$no[] = "2008120265";
	$no[] = "2008120263";
	$no[] = "2008120262";
	$no[] = "2008120254";
	$no[] = "2008120251";
	$no[] = "2008120249";
	$no[] = "2008120248";
	$no[] = "2008120242";
	$no[] = "2008120240";
	$no[] = "2008120237";
	$no[] = "2008120236";
	$no[] = "2008120234";
	$no[] = "2008120233";
	$no[] = "2008120232";
	$no[] = "2008120231";
	$no[] = "2008120229";
	$no[] = "2008120227";
	$no[] = "2008120225";
	$no[] = "2008120224";
	$no[] = "2008120223";
	$no[] = "2008120221";
	$no[] = "2008120220";
	$no[] = "2008120219";
	$no[] = "2008120218";
	$no[] = "2008120217";
	$no[] = "2008120216";
	$no[] = "2008120215";
	$no[] = "2008120214";
	$no[] = "2008120213";
	$no[] = "2008120212";
	$no[] = "2008120211";
	$no[] = "2008120209";
	$no[] = "2008120207";
	$no[] = "2008120205";
	$no[] = "2008120204";
	$no[] = "2008120203";
	$no[] = "2008120202";
	$no[] = "2008120199";
	$no[] = "2008120198";
	$no[] = "2008120197";
	$no[] = "2008120196";
	$no[] = "2008120195";
	$no[] = "2008120194";
	$no[] = "2008120193";
	$no[] = "2008120191";
	$no[] = "2008120190";
	$no[] = "2008120189";
	$no[] = "2008120188";
	$no[] = "2008120187";
	$no[] = "2008120186";
	$no[] = "2008120184";
	$no[] = "2008120182";
	$no[] = "2008120181";
	$no[] = "2008120180";
	$no[] = "2008120179";
	$no[] = "2008120177";
	$no[] = "2008120175";
	$no[] = "2008120173";
	$no[] = "2008120172";
	$no[] = "2008120171";
	$no[] = "2008120169";
	$no[] = "2008120168";
	$no[] = "2008120167";
	$no[] = "2008120166";
	$no[] = "2008120165";
	$no[] = "2008120164";
	$no[] = "2008120163";
	$no[] = "2008120162";
	$no[] = "2008120161";
	$no[] = "2008120160";
	$no[] = "2008120159";
	$no[] = "2008120158";
	$no[] = "2008120157";
	$no[] = "2008120156";
	$no[] = "2008120154";
	$no[] = "2008120153";
	$no[] = "2008120152";
	$no[] = "2008120151";
	$no[] = "2008120150";
	$no[] = "2008120149";
	$no[] = "2008120148";
	$no[] = "2008120147";
	$no[] = "2008120146";
	$no[] = "2008120145";
	$no[] = "2008120143";
	$no[] = "2008120142";
	$no[] = "2008120141";
	$no[] = "2008120140";
	$no[] = "2008120138";
	$no[] = "2008120137";
	$no[] = "2008120136";
	$no[] = "2008120134";
	$no[] = "2008120133";
	$no[] = "2008120131";
	$no[] = "2008120130";
	$no[] = "2008120129";
	$no[] = "2008120128";
	$no[] = "2008120127";
	$no[] = "2008120126";
	$no[] = "2008120124";
	$no[] = "2008120123";
	$no[] = "2008120122";
	$no[] = "2008120121";
	$no[] = "2008120119";
	$no[] = "2008120118";
	$no[] = "2008120117";
	$no[] = "2008120116";
	$no[] = "2008120114";
	$no[] = "2008120111";
	$no[] = "2008120110";
	$no[] = "2008120109";
	$no[] = "2008120108";
	$no[] = "2008120106";
	$no[] = "2008120105";
	$no[] = "2008120104";
	$no[] = "2008120103";
	$no[] = "2008120102";
	$no[] = "2008120101";
	$no[] = "2008120100";
	$no[] = "2008120099";
	$no[] = "2008120097";
	$no[] = "2008120096";
	$no[] = "2008120095";
	$no[] = "2008120094";
	$no[] = "2008120093";
	$no[] = "2008120092";
	$no[] = "2008120091";
	$no[] = "2008120090";
	$no[] = "2008120088";
	$no[] = "2008120087";
	$no[] = "2008120086";
	$no[] = "2008120085";
	$no[] = "2008120083";
	$no[] = "2008120082";
	$no[] = "2008120081";
	$no[] = "2008120080";
	$no[] = "2008120078";
	$no[] = "2008120077";
	$no[] = "2008120075";
	$no[] = "2008120074";
	$no[] = "2008120072";
	$no[] = "2008120073";
	$no[] = "2008120071";
	$no[] = "2008120070";
	$no[] = "2008120069";
	$no[] = "2008120068";
	$no[] = "2008120067";
	$no[] = "2008120066";
	$no[] = "2008120064";
	$no[] = "2008120063";
	$no[] = "2008120062";
	$no[] = "2008120061";
	$no[] = "2008120060";
	$no[] = "2008120059";
	$no[] = "2008120058";
	$no[] = "2008120057";
	$no[] = "2008120053";
	$no[] = "2008120052";
	$no[] = "2008120051";
	$no[] = "2008120050";
	$no[] = "2008120049";
	$no[] = "2008120048";
	$no[] = "2008120046";
	$no[] = "2008120044";
	$no[] = "2008120042";
	$no[] = "2008120041";
	$no[] = "2008120039";
	$no[] = "2008120038";
	$no[] = "2008120037";
	$no[] = "2008120036";
	$no[] = "2008120035";
	$no[] = "2008120034";
	$no[] = "2008120032";
	$no[] = "2008120031";
	$no[] = "2008120030";
	$no[] = "2008120029";
	$no[] = "2008120026";
	$no[] = "2008120025";
	$no[] = "2008120023";
	$no[] = "2008120022";
	$no[] = "2008120021";
	$no[] = "2008120020";
	$no[] = "2008120019";
	$no[] = "2008120018";
	$no[] = "2008120017";
	$no[] = "2008120016";
	$no[] = "2008120012";
	$no[] = "2008120011";
	$no[] = "2008120010";
	$no[] = "2008120009";
	$no[] = "2008120006";
	$no[] = "2008120004";
	$no[] = "2008120002";

	$room = array();
	$room[] = "431B2";
	$room[] = "331A";
	$room[] = "A111-3";
	$room[] = "A214-2";
	$room[] = "A111-2";
	$room[] = "A207-3";
	$room[] = "A111-1";
	$room[] = "A207-2";
	$room[] = "A207-1";
	$room[] = "A100-2";
	$room[] = "A100-1";
	$room[] = "330A";
	$room[] = "332B";
	$room[] = "535B";
	$room[] = "327A";
	$room[] = "334B";
	$room[] = "331A";
	$room[] = "525A";
	$room[] = "523A";
	$room[] = "535D";
	$room[] = "329A";
	$room[] = "535C";
	$room[] = "328A";
	$room[] = "334A";
	$room[] = "325A";
	$room[] = "324";
	$room[] = "535A";
	$room[] = "323A";
	$room[] = "332D";
	$room[] = "522D";
	$room[] = "522C";
	$room[] = "522B";
	$room[] = "333A";
	$room[] = "522A";
	$room[] = "332A";
	$room[] = "321C2";
	$room[] = "521A";
	$room[] = "534C";
	$room[] = "328B1";
	$room[] = "428A";
	$room[] = "A112-2";
	$room[] = "534D";
	$room[] = "622D";
	$room[] = "333B2";
	$room[] = "327B2";
	$room[] = "326A";
	$room[] = "603B2";
	$room[] = "332C";
	$room[] = "A102-2";
	$room[] = "433B1";
	$room[] = "428B2";
	$room[] = "525B1";
	$room[] = "325B2";
	$room[] = "432D";
	$room[] = "622B";
	$room[] = "628B1";
	$room[] = "628B2";
	$room[] = "A204-3";
	$room[] = "626B1";
	$room[] = "334C";
	$room[] = "323B1";
	$room[] = "627B1";
	$room[] = "323B2";
	$room[] = "425B2";
	$room[] = "622A";
	$room[] = "427B2";
	$room[] = "433B2";
	$room[] = "A211-2";
	$room[] = "526A";
	$room[] = "425B1";
	$room[] = "623A";
	$room[] = "428B1";
	$room[] = "532D";
	$room[] = "626B2";
	$room[] = "532C";
	$room[] = "435D";
	$room[] = "434D";
	$room[] = "321C1";
	$room[] = "630B1";
	$room[] = "625B1";
	$room[] = "525B2";
	$room[] = "A209-2";
	$room[] = "435C";
	$room[] = "A208-3";
	$room[] = "333B1";
	$room[] = "A208-2";
	$room[] = "421C2";
	$room[] = "326B2";
	$room[] = "A103-2";
	$room[] = "531A";
	$room[] = "A210-3";
	$room[] = "532A";
	$room[] = "A210-2";
	$room[] = "A209-1";
	$room[] = "331B2";
	$room[] = "A214-1";
	$room[] = "A211-1";
	$room[] = "A206-3";
	$room[] = "A213-1";
	$room[] = "603B1";
	$room[] = "327B1";
	$room[] = "604B1";
	$room[] = "602B2";
	$room[] = "326B1";
	$room[] = "526B1";
	$room[] = "A213-2";
	$room[] = "A209-3";
	$room[] = "530A";
	$room[] = "427B1";
	$room[] = "329B1";
	$room[] = "421C1";
	$room[] = "629B2";
	$room[] = "622C";
	$room[] = "632A";
	$room[] = "A203-2";
	$room[] = "604C1";
	$room[] = "604C2";
	$room[] = "321B1";
	$room[] = "628A";
	$room[] = "331B1";
	$room[] = "534B";
	$room[] = "527A";
	$room[] = "A210-1";
	$room[] = "434A";
	$room[] = "A101-1";
	$room[] = "A103-1";
	$room[] = "A205-2";
	$room[] = "A203-3";
	$room[] = "334D";
	$room[] = "629B1";
	$room[] = "603C2";
	$room[] = "426B2";
	$room[] = "A201-3";
	$room[] = "335A";
	$room[] = "521C2";
	$room[] = "521C1";
	$room[] = "A108-2";
	$room[] = "A213-3";
	$room[] = "601B2";
	$room[] = "603A";
	$room[] = "634B";
	$room[] = "602C1";
	$room[] = "330B1";
	$room[] = "AB02-1";
	$room[] = "A203-1";
	$room[] = "630B2";
	$room[] = "325B1";
	$room[] = "631B1";
	$room[] = "A202-3";
	$room[] = "533B2";
	$room[] = "AB02-2";
	$room[] = "322B";
	$room[] = "A202-2";
	$room[] = "A204-1";
	$room[] = "530B2";
	$room[] = "421B2";
	$room[] = "623B2";
	$room[] = "634A";
	$room[] = "A104-1";
	$room[] = "601C1";
	$room[] = "A112-3";
	$room[] = "A112-1";
	$room[] = "433A";
	$room[] = "633B1";
	$room[] = "631B2";
	$room[] = "633B2";
	$room[] = "625B2";
	$room[] = "434B";
	$room[] = "530B1";
	$room[] = "627B2";
	$room[] = "626A";
	$room[] = "434C";
	$room[] = "603C1";
	$room[] = "321A";
	$room[] = "A202-1";
	$room[] = "526B2";
	$room[] = "AB02-3";
	$room[] = "A204-2";
	$room[] = "623B1";
	$room[] = "A100-3";
	$room[] = "435B";
	$room[] = "534A";
	$room[] = "521B1";
	$room[] = "335C";
	$room[] = "A201-2";
	$room[] = "523B2";
	$room[] = "A113-3";
	$room[] = "A102-3";
	$room[] = "529A";
	$room[] = "321B2";
	$room[] = "523B1";
	$room[] = "633A";
	$room[] = "625A";
	$room[] = "A113-1";
	$room[] = "533A";
	$room[] = "432A";
	$room[] = "A104-3";
	$room[] = "604A";
	$room[] = "532B";
	$room[] = "602B1";
	$room[] = "AB01-3";
	$room[] = "529B2";
	$room[] = "A102-1";
	$room[] = "431A";
	$room[] = "A205-1";
	$room[] = "604B2";
	$room[] = "A108-3";
	$room[] = "AB01-1";
	$room[] = "426B1";
	$room[] = "A104-2";
	$room[] = "329B2";
	$room[] = "533B1";
	$room[] = "A103-3";
	$room[] = "531B1";
	$room[] = "601A";
	$room[] = "328B2";
	$room[] = "601C2";
	$room[] = "322C";
	$room[] = "629A";
	$room[] = "631A";
	$room[] = "635A";
	$room[] = "423B2";
	$room[] = "432B";
	$room[] = "632B";
	$room[] = "422A";
	$room[] = "422C";
	$room[] = "422B";
	$room[] = "427A";
	$room[] = "632C";
	$room[] = "632D";
	$room[] = "422D";
	$room[] = "421A";
	$room[] = "335D";
	$room[] = "635C";
	$room[] = "423B1";
	$room[] = "A105-1";
	$room[] = "423A";
	$room[] = "425A";
	$room[] = "426A";
	$room[] = "634C";
	$room[] = "634D";
	$room[] = "627A";
	$room[] = "432C";
	$room[] = "635B";
	$room[] = "521B2";
	$room[] = "529B1";
	$room[] = "A106-2";
	$room[] = "A101-3";
	$room[] = "330B2";
	$room[] = "528A";
	$room[] = "602C2";
	$room[] = "430A";
	$room[] = "AB01-2";
	$room[] = "A208-1";
	$room[] = "527B2";
	$room[] = "527B1";
	$room[] = "531B2";
	$room[] = "602A";
	$room[] = "A105-2";
	$room[] = "630A";
	$room[] = "A105-3";
	$room[] = "421B1";
	$room[] = "635D";
	$room[] = "A109-3";
	$room[] = "429A";
	$room[] = "A108-1";
	$room[] = "A206-2";
	$room[] = "A206-1";
	$room[] = "528B2";
	$room[] = "528B1";
	$room[] = "A109-2";
	$room[] = "A106-3";
	$room[] = "601B1";
	$room[] = "A205-3";
	$room[] = "A113-2";
	$room[] = "A106-1";
	$room[] = "A101-2";
	$room[] = "A109-1";

	for ($i = 0; $i < count($no); $i++) {
		if ($no[$i] && $room[$i]) {
			$mode = "";
			//if ($application->isRoomExist($no[$i], $room[$i])) $mode = "exist";
			//else if (!$application->isRoomAvailable($no[$i], $room[$i])) $mode = "book";
			//else {
				$flag = $application->assignRoom2($no[$i], $room[$i]);
				if ($flag) {
					$flag = $application->updateResidenceFee1($no[$i], $application->linkRateCode);
					$flag = $application->approveApplication($no[$i], "9", "Y");
				} else $mode = "error";
			//}
			echo $no[$i] . " - " . $flag . " - " . $mode . "<br>";
		}
	}

	$application->closeDatabase();
	unset($application);
?>