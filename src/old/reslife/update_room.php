<?
	include_once("lib/conf.common.php");
	include_once("lib/class.cFaculty.php");

	$room = array();
	$room[] = "221B1";
	$room[] = "221B2";
	$room[] = "221C1";
	$room[] = "221C2";
	$room[] = "321B1";
	$room[] = "321B2";
	$room[] = "321C1";
	$room[] = "321C2";
	$room[] = "323B1";
	$room[] = "323B2";
	$room[] = "325B1";
	$room[] = "325B2";
	$room[] = "326B1";
	$room[] = "326B2";
	$room[] = "327B1";
	$room[] = "327B2";
	$room[] = "328B1";
	$room[] = "328B2";
	$room[] = "329B1";
	$room[] = "329B2";
	$room[] = "330B1";
	$room[] = "330B2";
	$room[] = "331B1";
	$room[] = "331B2";
	$room[] = "333B1";
	$room[] = "333B2";
	$room[] = "421B1";
	$room[] = "421B2";
	$room[] = "421C1";
	$room[] = "421C2";
	$room[] = "423B1";
	$room[] = "423B2";
	$room[] = "425B1";
	$room[] = "425B2";
	$room[] = "426B1";
	$room[] = "426B2";
	$room[] = "427B1";
	$room[] = "427B2";
	$room[] = "428B1";
	$room[] = "428B2";
	$room[] = "429B1";
	$room[] = "429B2";
	$room[] = "430B1";
	$room[] = "430B2";
	$room[] = "431B1";
	$room[] = "431B2";
	$room[] = "433B1";
	$room[] = "433B2";
	$room[] = "521B1";
	$room[] = "521B2";
	$room[] = "521C1";
	$room[] = "521C2";
	$room[] = "523B1";
	$room[] = "523B2";
	$room[] = "525B1";
	$room[] = "525B2";
	$room[] = "526B1";
	$room[] = "526B2";
	$room[] = "527B1";
	$room[] = "527B2";
	$room[] = "528B1";
	$room[] = "528B2";
	$room[] = "529B1";
	$room[] = "529B2";
	$room[] = "530B1";
	$room[] = "530B2";
	$room[] = "531B1";
	$room[] = "531B2";
	$room[] = "533B1";
	$room[] = "533B2";
	$room[] = "601B1";
	$room[] = "601B2";
	$room[] = "601C1";
	$room[] = "601C2";
	$room[] = "602B1";
	$room[] = "602B2";
	$room[] = "602C1";
	$room[] = "602C2";
	$room[] = "603B1";
	$room[] = "603B2";
	$room[] = "603C1";
	$room[] = "603C2";
	$room[] = "604B1";
	$room[] = "604B2";
	$room[] = "604C1";
	$room[] = "604C2";
	$room[] = "605B1";
	$room[] = "605B2";
	$room[] = "605C1";
	$room[] = "605C2";
	$room[] = "606B1";
	$room[] = "606B2";
	$room[] = "606C1";
	$room[] = "606C2";
	$room[] = "623B1";
	$room[] = "623B2";
	$room[] = "625B1";
	$room[] = "625B2";
	$room[] = "626B1";
	$room[] = "626B2";
	$room[] = "627B1";
	$room[] = "627B2";
	$room[] = "628B1";
	$room[] = "628B2";
	$room[] = "629B1";
	$room[] = "629B2";
	$room[] = "630B1";
	$room[] = "630B2";
	$room[] = "631B1";
	$room[] = "631B2";
	$room[] = "633B1";
	$room[] = "633B2";
	$room[] = "222";
	$room[] = "322";
	$room[] = "332";
	$room[] = "334";
	$room[] = "335";
	$room[] = "422";
	$room[] = "432";
	$room[] = "434";
	$room[] = "435";
	$room[] = "522";
	$room[] = "532";
	$room[] = "534";
	$room[] = "535";
	$room[] = "622";
	$room[] = "632";
	$room[] = "634";
	$room[] = "635";
	$room[] = "221";
	$room[] = "321";
	$room[] = "421";
	$room[] = "521";
	$room[] = "601";
	$room[] = "602";
	$room[] = "603";
	$room[] = "604";
	$room[] = "605";
	$room[] = "606";
	$room[] = "324";
	$room[] = "424";
	$room[] = "524";
	$room[] = "624";
	$room[] = "221A";
	$room[] = "222A";
	$room[] = "222B";
	$room[] = "222C";
	$room[] = "222D";
	$room[] = "321A";
	$room[] = "322A";
	$room[] = "322B";
	$room[] = "322C";
	$room[] = "322D";
	$room[] = "323A";
	$room[] = "325A";
	$room[] = "326A";
	$room[] = "327A";
	$room[] = "328A";
	$room[] = "329A";
	$room[] = "330A";
	$room[] = "331A";
	$room[] = "332A";
	$room[] = "332B";
	$room[] = "332C";
	$room[] = "332D";
	$room[] = "333A";
	$room[] = "334A";
	$room[] = "334B";
	$room[] = "334C";
	$room[] = "334D";
	$room[] = "335A";
	$room[] = "335B";
	$room[] = "335C";
	$room[] = "335D";
	$room[] = "421A";
	$room[] = "422A";
	$room[] = "422B";
	$room[] = "422C";
	$room[] = "422D";
	$room[] = "423A";
	$room[] = "425A";
	$room[] = "426A";
	$room[] = "427A";
	$room[] = "428A";
	$room[] = "429A";
	$room[] = "430A";
	$room[] = "431A";
	$room[] = "432A";
	$room[] = "432B";
	$room[] = "432C";
	$room[] = "432D";
	$room[] = "433A";
	$room[] = "434A";
	$room[] = "434B";
	$room[] = "434C";
	$room[] = "434D";
	$room[] = "435A";
	$room[] = "435B";
	$room[] = "435C";
	$room[] = "435D";
	$room[] = "521A";
	$room[] = "522A";
	$room[] = "522B";
	$room[] = "522C";
	$room[] = "522D";
	$room[] = "523A";
	$room[] = "525A";
	$room[] = "526A";
	$room[] = "527A";
	$room[] = "528A";
	$room[] = "529A";
	$room[] = "530A";
	$room[] = "531A";
	$room[] = "532A";
	$room[] = "532B";
	$room[] = "532C";
	$room[] = "532D";
	$room[] = "533A";
	$room[] = "534A";
	$room[] = "534B";
	$room[] = "534C";
	$room[] = "534D";
	$room[] = "535A";
	$room[] = "535B";
	$room[] = "535C";
	$room[] = "535D";
	$room[] = "601A";
	$room[] = "602A";
	$room[] = "603A";
	$room[] = "604A";
	$room[] = "605A";
	$room[] = "606A";
	$room[] = "622A";
	$room[] = "622B";
	$room[] = "622C";
	$room[] = "622D";
	$room[] = "623A";
	$room[] = "625A";
	$room[] = "626A";
	$room[] = "627A";
	$room[] = "628A";
	$room[] = "629A";
	$room[] = "630A";
	$room[] = "631A";
	$room[] = "632A";
	$room[] = "632B";
	$room[] = "632C";
	$room[] = "632D";
	$room[] = "633A";
	$room[] = "634A";
	$room[] = "634B";
	$room[] = "634C";
	$room[] = "634D";
	$room[] = "635A";
	$room[] = "635B";
	$room[] = "635C";
	$room[] = "635D";
	$room[] = "323";
	$room[] = "325";
	$room[] = "326";
	$room[] = "327";
	$room[] = "328";
	$room[] = "329";
	$room[] = "330";
	$room[] = "331";
	$room[] = "333";
	$room[] = "423";
	$room[] = "425";
	$room[] = "426";
	$room[] = "427";
	$room[] = "428";
	$room[] = "429";
	$room[] = "430";
	$room[] = "431";
	$room[] = "433";
	$room[] = "523";
	$room[] = "525";
	$room[] = "526";
	$room[] = "527";
	$room[] = "528";
	$room[] = "529";
	$room[] = "530";
	$room[] = "531";
	$room[] = "533";
	$room[] = "623";
	$room[] = "625";
	$room[] = "626";
	$room[] = "627";
	$room[] = "628";
	$room[] = "629";
	$room[] = "630";
	$room[] = "631";
	$room[] = "633";

	$rate = array();
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "DOUBLE1";
	$rate[] = "QUAD";
	$rate[] = "QUAD";
	$rate[] = "QUAD";
	$rate[] = "QUAD";
	$rate[] = "QUAD";
	$rate[] = "QUAD";
	$rate[] = "QUAD";
	$rate[] = "QUAD";
	$rate[] = "QUAD";
	$rate[] = "QUAD";
	$rate[] = "QUAD";
	$rate[] = "QUAD";
	$rate[] = "QUAD";
	$rate[] = "QUAD";
	$rate[] = "QUAD";
	$rate[] = "QUAD";
	$rate[] = "QUAD";
	$rate[] = "QUINT";
	$rate[] = "QUINT";
	$rate[] = "QUINT";
	$rate[] = "QUINT";
	$rate[] = "QUINT";
	$rate[] = "QUINT";
	$rate[] = "QUINT";
	$rate[] = "QUINT";
	$rate[] = "QUINT";
	$rate[] = "QUINT";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "SINGLE";
	$rate[] = "TRIPLE";
	$rate[] = "TRIPLE";
	$rate[] = "TRIPLE";
	$rate[] = "TRIPLE";
	$rate[] = "TRIPLE";
	$rate[] = "TRIPLE";
	$rate[] = "TRIPLE";
	$rate[] = "TRIPLE";
	$rate[] = "TRIPLE";
	$rate[] = "TRIPLE";
	$rate[] = "TRIPLE";
	$rate[] = "TRIPLE";
	$rate[] = "TRIPLE";
	$rate[] = "TRIPLE";
	$rate[] = "TRIPLE";
	$rate[] = "TRIPLE";
	$rate[] = "TRIPLE";
	$rate[] = "TRIPLE";
	$rate[] = "TRIPLE";
	$rate[] = "TRIPLE";
	$rate[] = "TRIPLE";
	$rate[] = "TRIPLE";
	$rate[] = "TRIPLE";
	$rate[] = "TRIPLE";
	$rate[] = "TRIPLE";
	$rate[] = "TRIPLE";
	$rate[] = "TRIPLE";
	$rate[] = "TRIPLE";
	$rate[] = "TRIPLE";
	$rate[] = "TRIPLE";
	$rate[] = "TRIPLE";
	$rate[] = "TRIPLE";
	$rate[] = "TRIPLE";
	$rate[] = "TRIPLE";
	$rate[] = "TRIPLE";
	$rate[] = "TRIPLE";

	$faculty = new cFaculty($mysqlhost, $mysqluser, $mysqlpass, $mysqldb, $facultyTable, $rate1Table, $payment1Table, $roomTable, $bookTable);
	$faculty->connectDatabase();

	for ($i = 0; $i < count($room); $i++) {
		if ($room[$i] && $rate[$i]) {
			//$flag = $faculty->isRoomCodeExist($room[$i]);
			$flag = $faculty->updateRoom($room[$i], $rate[$i]);
			if ($flag) echo "" . $room[$i] . " - Y<br>";
			else echo "" . $room[$i] . " - N<br>";
		}
	}

	$faculty->closeDatabase();
	unset($faculty);
?>