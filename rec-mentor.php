<?php
	include 'server.php';

	if (!isset($_SESSION['email'])) {
		header('location: index.php');
	}
?>

<!DOCTYPE html>
<html lang="zxx">
	
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>::.MeetUp-Career - Recommended Mentor(s).::</title>
		<link rel="shortcut icon" href="images/favicon.png">
		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
		<!-- Owl-coursel -->
		<link rel="stylesheet" type="text/css" href="css/owl-coursel/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="css/owl-coursel/owl.theme.css">
		<link rel="stylesheet" type="text/css" href="css/owl-coursel/owl.transitions.css">
		<!-- Font-awesome -->
		<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
		<!-- Animate -->
		<link rel="stylesheet" type="text/css" href="css/animate.css">
		<!-- Css -->
		<link rel="stylesheet" type="text/css" href="css/css.css">
		<!-- Style -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body id="education">
		<div class="preloader">
			<i class="fa fa-spinner"></i>
		</div>
		<header class="header-fixed">
			<div class="top-header bg-4f84c4">
				<div class="container">
					<div class="row">
						<div class="col-md-6 d-none d-md-block">
							<ul class="list-top">
								<li><i class="fa fa-phone m-r-5"></i>+234-706-3000-971</li>
								<li><i class="fa fa-envelope-o m-r-5"></i>info@meetupcareers.com</li>
							</ul>
						</div>
						<div class="col-md-6">
							<ul class="float-right list-top">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-google"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="main-header">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-xs-6 col-sm-3">
							<a href="index.php" class="logo">
								<img src="images/e-logo.jpg" alt="image">
							</a>
						</div>
						<div class="col-xs-4 col-sm-9 hidden-md hidden-lg">
							<nav id="holder_mn" class="menu-nav pull-right">
								<div class="menu-btn"></div>
								<ul class="menu">
									<li>
										<a href="index.php">Home</a>
									</li>
									<li>
										<a href="need-a-mentor.php">Search Mentor</a>
									</li>
									<li>
										<a href="need-a-mentor.php">Become a Mentor</a>
									</li>
									<li>
										<a href="#">I Need Data</a>
									</li>
									<li>
										<a href="#">Literature Review</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
		<section class="page-title">
			<div class="card"><br/><br/>
				<div class="card-img-overlay">
					<div class="container">
						<h1 class="card-title">Recommended Professionals</h1>
					</div>
				</div>
			</div>
		</section>


		<form style="margin-left: 36px; margin-right: 36px; margin-top: 32px;" action="rec-mentor.php" method="post">
			<div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputCity">Language</label>
						<select name="language" class="form-control" required>
						<option value="">----</option>
						<option value="Afar">Afar</option>
						<option value="Abkhazian">Abkhazian</option>
						<option value="Chinese">Chinese</option>
						<option value="Acoli">Acoli</option>
						<option value="Adyghe Adygei">Adyghe Adygei</option>
						<option value="Afro-Asiatic">Afro-Asiatic</option>
						<option value="Afrihili">Afrihili</option>
						<option value="Afrikaans">Afrikaans</option>
						<option value="Ainu">Ainu</option>
						<option value="Akan">Akan</option>
						<option value="Akkadian">Akkadian</option>
						<option value="Albanian">Albanian</option>
						<option value="Aleut">Aleut</option>
						<option value="Algonquian languages">Algonquian</option>
						<option value="Southern Altai">Southern Altai</option>
						<option value="Amharic">Amharic</option>
						<option value="English">English</option>
						<option value="Angika">Angika</option>
						<option value="Apache">Apache</option>
						<option value="Arabic">Arabic</option>
						<option value="Aramaic">Aramaic</option>
						<option value="Aragonese">Aragonese</option>
						<option value="Armenian"> Armenian </option>
						<option value="arn"> Mapudungun Mapuche </option>
						<option value="arp"> Arapaho </option>
						<option value="art"> Artificial languages </option>
						<option value="arw"> Arawak </option>
						<option value="asm"> Assamese </option>
						<option value="ast"> Asturian Bable Leonese Asturleonese </option>
						<option value="ath"> Athapascan languages </option>
						<option value="aus"> Australian languages </option>
						<option value="ava"> Avaric </option>
						<option value="ave"> Avestan </option>
						<option value="awa"> Awadhi </option>
						<option value="aym"> Aymara </option>
						<option value="aze"> Azerbaijani </option>
						<option value="bad"> Banda languages </option>
						<option value="bai"> Bamileke languages </option>
						<option value="bak"> Bashkir </option>
						<option value="bal"> Baluchi </option>
						<option value="bam"> Bambara </option>
						<option value="ban"> Balinese </option>
						<option value="baq"> Basque </option>
						<option value="bas"> Basa </option>
						<option value="bat"> Baltic languages </option>
						<option value="bej"> Beja Bedawiyet </option>
						<option value="bel"> Belarusian </option>
						<option value="bem"> Bemba </option>
						<option value="Bengali"> Bengali </option>
						<option value="ber"> Berber languages </option>
						<option value="bho"> Bhojpuri </option>
						<option value="bih"> Bihari languages </option>
						<option value="bik"> Bikol </option>
						<option value="bin"> Bini Edo </option>
						<option value="bis"> Bislama </option>
						<option value="bla"> Siksika </option>
						<option value="bnt"> Bantu (Other) </option>
						<option value="bos"> Bosnian </option>
						<option value="bra"> Braj </option>
						<option value="bre"> Breton </option>
						<option value="btk"> Batak languages </option>
						<option value="bua"> Buriat </option>
						<option value="bug"> Buginese </option>
						<option value="bul"> Bulgarian </option>
						<option value="bur"> Burmese </option>
						<option value="byn"> Blin Bilin </option>
						<option value="cad"> Caddo </option>
						<option value="cai"> Central American Indian languages </option>
						<option value="car"> Galibi Carib </option>
						<option value="cat"> Catalan Valencian </option>
						<option value="cau"> Caucasian languages </option>
						<option value="ceb"> Cebuano </option>
						<option value="cel"> Celtic languages </option>
						<option value="cha"> Chamorro </option>
						<option value="chb"> Chibcha </option>
						<option value="che"> Chechen </option>
						<option value="chg"> Chagatai </option>
						<option value="chi"> Chinese </option>
						<option value="chk"> Chuukese </option>
						<option value="chm"> Mari </option>
						<option value="chn"> Chinook jargon </option>
						<option value="cho"> Choctaw </option>
						<option value="chp"> Chipewyan Dene Suline </option>
						<option value="chr"> Cherokee </option>
						<option value="chu"> Church Slavic Old Slavonic Church Slavonic Old Bulgarian Old Church Slavonic </option>
						<option value="chv"> Chuvash </option>
						<option value="chy"> Cheyenne </option>
						<option value="cmc"> Chamic languages </option>
						<option value="cop"> Coptic </option>
						<option value="cor"> Cornish </option>
						<option value="cos"> Corsican </option>
						<option value="cpe"> Creoles and pidgins </option>
						<option value="cpf"> Creoles and pidgins </option>
						<option value="cpp"> Creoles and pidgins </option>
						<option value="cre"> Cree </option>
						<option value="Crimean Tatar Crimean Turkish"> Crimean Tatar Crimean Turkish </option>
						<option value="Creoles and pidgins"> Creoles and pidgins  </option>
						<option value="Kashubian"> Kashubian </option>
						<option value="Cushitic languages"> Cushitic languages </option>
						<option value="czech"> Czech </option>
						<option value="Dakota"> Dakota </option>
						<option value="danish"> Danish </option>
						<option value="dargwa"> Dargwa </option>
						<option value="Land Dayak languages"> Land Dayak languages </option>
						<option value="delaware"> Delaware </option>
						<option value="Slave (Athapascan)"> Slave (Athapascan) </option>
						<option value="dogrib"> Dogrib </option>
						<option value="dinka"> Dinka </option>
						<option value="Divehi Dhivehi Maldivian"> Divehi Dhivehi Maldivian </option>
						<option value="Dogri"> Dogri </option>
						<option value="Dravidian languages"> Dravidian languages </option>
						<option value="Lower Sorbian"> Lower Sorbian </option>
						<option value="Duala"> Duala </option>
						<option value="Dutch"> Dutch </option>
						<option value="Dutch Flemish"> Dutch Flemish </option>
						<option value="dyula"> Dyula </option>
						<option value="Dzongkha"> Dzongkha </option>
						<option value="Efik"> Efik </option>
						<option value="Egyptian (Ancient)"> Egyptian (Ancient) </option>
						<option value="Ekajuk"> Ekajuk </option>
						<option value="Elamite"> Elamite </option>
						<option value="English"> English </option>
						<option value="English"> English </option>
						<option value="Esperanto"> Esperanto </option>
						<option value="Estonian"> Estonian </option>
						<option value="Ewe"> Ewe </option>
						<option value="Ewondo"> Ewondo </option>
						<option value="Fang"> Fang </option>
						<option value="Faroese"> Faroese </option>
						<option value="Fanti"> Fanti </option>
						<option value="Fijian"> Fijian </option>
						<option value="Filipino Pilipino"> Filipino Pilipino </option>
						<option value="Finnish"> Finnish </option>
						<option value="Finno-Ugrian languages"> Finno-Ugrian languages </option>
						<option value="Fon"> Fon </option>
						<option value="French"> French </option>
						<option value="frr"> Northern Frisian </option>
						<option value="frs"> Eastern Frisian </option>
						<option value="fry"> Western Frisian </option>
						<option value="ful"> Fulah </option>
						<option value="fur"> Friulian </option>
						<option value="gaa"> Ga </option>
						<option value="gay"> Gayo </option>
						<option value="gba"> Gbaya </option>
						<option value="gem"> Germanic languages </option>
						<option value="geo"> Georgian </option>
						<option value="ger"> German </option>
						<option value="gez"> Geez </option>
						<option value="gil"> Gilbertese </option>
						<option value="gla"> Gaelic Scottish Gaelic </option>
						<option value="gle"> Irish </option>
						<option value="glg"> Galician </option>
						<option value="glv"> Manx </option>
						<option value="German"> German </option>
						<option value="gon"> Gondi </option>
						<option value="gor"> Gorontalo </option>
						<option value="got"> Gothic </option>
						<option value="grb"> Grebo </option>
						<option value="grc"> Greek </option>
						<option value="gre"> Greek </option>
						<option value="grn"> Guarani </option>
						<option value="gsw"> Swiss German Alemannic Alsatian </option>
						<option value="guj"> Gujarati </option>
						<option value="gwi"> Gwich'in </option>
						<option value="hai"> Haida </option>
						<option value="hat"> Haitian Haitian Creole </option>
						<option value="hau"> Hausa </option>
						<option value="haw"> Hawaiian </option>
						<option value="heb"> Hebrew </option>
						<option value="her"> Herero </option>
						<option value="hil"> Hiligaynon </option>
						<option value="him"> Himachali languages Western Pahari languages </option>
						<option value="Hindi"> Hindi </option>
						<option value="hit"> Hittite </option>
						<option value="hmn"> Hmong Mong </option>
						<option value="hmo"> Hiri Motu </option>
						<option value="hrv"> Croatian </option>
						<option value="hsb"> Upper Sorbian </option>
						<option value="hun"> Hungarian </option>
						<option value="hup"> Hupa </option>
						<option value="iba"> Iban </option>
						<option value="ibo"> Igbo </option>
						<option value="ice"> Icelandic </option>
						<option value="ido"> Ido </option>
						<option value="iii"> Sichuan Yi Nuosu </option>
						<option value="ijo"> Ijo languages </option>
						<option value="iku"> Inuktitut </option>
						<option value="ile"> Interlingue Occidental </option>
						<option value="ilo"> Iloko </option>
						<option value="ina"> Interlingua (International Auxiliary Language Association) </option>
						<option value="inc"> Indic languages </option>
						<option value="ind"> Indonesian </option>
						<option value="ine"> Indo-European languages </option>
						<option value="inh"> Ingush </option>
						<option value="ipk"> Inupiaq </option>
						<option value="ira"> Iranian languages </option>
						<option value="iro"> Iroquoian languages </option>
						<option value="ita"> Italian </option>
						<option value="Javanese"> Javanese </option>
						<option value="jbo"> Lojban </option>
						<option value="Japanese"> Japanese </option>
						<option value="jpr"> Judeo-Persian </option>
						<option value="jrb"> Judeo-Arabic </option>
						<option value="kaa"> Kara-Kalpak </option>
						<option value="kab"> Kabyle </option>
						<option value="kac"> Kachin Jingpho </option>
						<option value="kal"> Kalaallisut Greenlandic </option>
						<option value="kam"> Kamba </option>
						<option value="kan"> Kannada </option>
						<option value="kar"> Karen languages </option>
						<option value="kas"> Kashmiri </option>
						<option value="kau"> Kanuri </option>
						<option value="kaw"> Kawi </option>
						<option value="kaz"> Kazakh </option>
						<option value="kbd"> Kabardian </option>
						<option value="kha"> Khasi </option>
						<option value="khi"> Khoisan languages </option>
						<option value="khm"> Central Khmer </option>
						<option value="kho"> Khotanese Sakan </option>
						<option value="kik"> Kikuyu Gikuyu </option>
						<option value="kin"> Kinyarwanda </option>
						<option value="kir"> Kirghiz Kyrgyz </option>
						<option value="kmb"> Kimbundu </option>
						<option value="kok"> Konkani </option>
						<option value="kom"> Komi </option>
						<option value="kon"> Kongo </option>
						<option value="Korean"> Korean </option>
						<option value="kos"> Kosraean </option>
						<option value="kpe"> Kpelle </option>
						<option value="krc"> Karachay-Balkar </option>
						<option value="krl"> Karelian </option>
						<option value="kro"> Kru languages </option>
						<option value="kru"> Kurukh </option>
						<option value="kua"> Kuanyama Kwanyama </option>
						<option value="kum"> Kumyk </option>
						<option value="kur"> Kurdish </option>
						<option value="kut"> Kutenai </option>
						<option value="lad"> Ladino </option>
						<option value="Lahnda"> Lahnda </option>
						<option value="lam"> Lamba </option>
						<option value="lao"> Lao </option>
						<option value="lat"> Latin </option>
						<option value="lav"> Latvian </option>
						<option value="lez"> Lezghian </option>
						<option value="lim"> Limburgan Limburger Limburgish </option>
						<option value="lin"> Lingala </option>
						<option value="lit"> Lithuanian </option>
						<option value="lol"> Mongo </option>
						<option value="loz"> Lozi </option>
						<option value="ltz"> Luxembourgish Letzeburgesch </option>
						<option value="lua"> Luba-Lulua </option>
						<option value="lub"> Luba-Katanga </option>
						<option value="lug"> Ganda </option>
						<option value="lui"> Luiseno </option>
						<option value="lun"> Lunda </option>
						<option value="luo"> Luo (Kenya and Tanzania) </option>
						<option value="lus"> Lushai </option>
						<option value="mac"> Macedonian </option>
						<option value="mad"> Madurese </option>
						<option value="mag"> Magahi </option>
						<option value="mah"> Marshallese </option>
						<option value="mai"> Maithili </option>
						<option value="mak"> Makasar </option>
						<option value="mal"> Malayalam </option>
						<option value="man"> Mandingo </option>
						<option value="mao"> Maori </option>
						<option value="map"> Austronesian languages </option>
						<option value="Marathi"> Marathi </option>
						<option value="mas"> Masai </option>
						<option value="may"> Malay </option>
						<option value="mdf"> Moksha </option>
						<option value="mdr"> Mandar </option>
						<option value="men"> Mende </option>
						<option value="mga"> Irish </option>
						<option value="mic"> Mi'kmaq Micmac </option>
						<option value="min"> Minangkabau </option>
						<option value="mis"> Uncoded languages </option>
						<option value="mkh"> Mon-Khmer languages </option>
						<option value="mlg"> Malagasy </option>
						<option value="mlt"> Maltese </option>
						<option value="mnc"> Manchu </option>
						<option value="mni"> Manipuri </option>
						<option value="mno"> Manobo languages </option>
						<option value="moh"> Mohawk </option>
						<option value="mon"> Mongolian </option>
						<option value="mos"> Mossi </option>
						<option value="mul"> Multiple languages </option>
						<option value="mun"> Munda languages </option>
						<option value="mus"> Creek </option>
						<option value="mwl"> Mirandese </option>
						<option value="mwr"> Marwari </option>
						<option value="myn"> Mayan languages </option>
						<option value="myv"> Erzya </option>
						<option value="nah"> Nahuatl languages </option>
						<option value="nai"> North American Indian languages </option>
						<option value="nap"> Neapolitan </option>
						<option value="nau"> Nauru </option>
						<option value="nav"> Navajo Navaho </option>
						<option value="nbl"> Ndebele </option>
						<option value="nde"> Ndebele </option>
						<option value="ndo"> Ndonga </option>
						<option value="nds"> Low German Low Saxon German </option>
						<option value="nep"> Nepali </option>
						<option value="new"> Nepal Bhasa Newari </option>
						<option value="nia"> Nias </option>
						<option value="nic"> Niger-Kordofanian languages </option>
						<option value="niu"> Niuean </option>
						<option value="nno"> Norwegian Nynorsk Nynorsk </option>
						<option value="nob"> Bokmål </option>
						<option value="nog"> Nogai </option>
						<option value="non"> Norse </option>
						<option value="nor"> Norwegian </option>
						<option value="nqo"> N'Ko </option>
						<option value="nso"> Pedi Sepedi Northern Sotho </option>
						<option value="nub"> Nubian languages </option>
						<option value="nwc"> Classical Newari Old Newari Classical Nepal Bhasa </option>
						<option value="nya"> Chichewa Chewa Nyanja </option>
						<option value="nym"> Nyamwezi </option>
						<option value="nyn"> Nyankole </option>
						<option value="nyo"> Nyoro </option>
						<option value="nzi"> Nzima </option>
						<option value="oci"> Occitan (post 1500) Provençal </option>
						<option value="oji"> Ojibwa </option>
						<option value="ori"> Oriya </option>
						<option value="orm"> Oromo </option>
						<option value="osa"> Osage </option>
						<option value="oss"> Ossetian Ossetic </option>
						<option value="ota"> Turkish </option>
						<option value="oto"> Otomian languages </option>
						<option value="paa"> Papuan languages </option>
						<option value="pag"> Pangasinan </option>
						<option value="pal"> Pahlavi </option>
						<option value="pam"> Pampanga Kapampangan </option>
						<option value="pan"> Panjabi Punjabi </option>
						<option value="pap"> Papiamento </option>
						<option value="pau"> Palauan </option>
						<option value="peo"> Persian </option>
						<option value="per"> Persian </option>
						<option value="phi"> Philippine languages </option>
						<option value="phn"> Phoenician </option>
						<option value="pli"> Pali </option>
						<option value="pol"> Polish </option>
						<option value="pon"> Pohnpeian </option>
						<option value="Portuguese"> Portuguese </option>
						<option value="pra"> Prakrit languages </option>
						<option value="pro"> Provençal </option>
						<option value="pus"> Pushto Pashto </option>
						<option value="qaa-qtz"> Reserved for local use </option>
						<option value="que"> Quechua </option>
						<option value="raj"> Rajasthani </option>
						<option value="rap"> Rapanui </option>
						<option value="rar"> Rarotongan Cook Islands Maori </option>
						<option value="roa"> Romance languages </option>
						<option value="roh"> Romansh </option>
						<option value="rom"> Romany </option>
						<option value="rum"> Romanian Moldavian Moldovan </option>
						<option value="run"> Rundi </option>
						<option value="rup"> Aromanian Arumanian Macedo-Romanian </option>
						<option value="Russian"> Russian </option>
						<option value="sad"> Sandawe </option>
						<option value="sag"> Sango </option>
						<option value="sah"> Yakut </option>
						<option value="sai"> South American Indian (Other) </option>
						<option value="sal"> Salishan languages </option>
						<option value="sam"> Samaritan Aramaic </option>
						<option value="san"> Sanskrit </option>
						<option value="sas"> Sasak </option>
						<option value="sat"> Santali </option>
						<option value="scn"> Sicilian </option>
						<option value="sco"> Scots </option>
						<option value="sel"> Selkup </option>
						<option value="sem"> Semitic languages </option>
						<option value="sga"> Irish </option>
						<option value="sgn"> Sign Languages </option>
						<option value="shn"> Shan </option>
						<option value="sid"> Sidamo </option>
						<option value="sin"> Sinhala Sinhalese </option>
						<option value="sio"> Siouan languages </option>
						<option value="sit"> Sino-Tibetan languages </option>
						<option value="sla"> Slavic languages </option>
						<option value="slo"> Slovak </option>
						<option value="slv"> Slovenian </option>
						<option value="sma"> Southern Sami </option>
						<option value="sme"> Northern Sami </option>
						<option value="smi"> Sami languages </option>
						<option value="smj"> Lule Sami </option>
						<option value="smn"> Inari Sami </option>
						<option value="smo"> Samoan </option>
						<option value="sms"> Skolt Sami </option>
						<option value="sna"> Shona </option>
						<option value="snd"> Sindhi </option>
						<option value="snk"> Soninke </option>
						<option value="sog"> Sogdian </option>
						<option value="som"> Somali </option>
						<option value="son"> Songhai languages </option>
						<option value="sot"> Sotho </option>
						<option value="Spanish"> Spanish</option>
						<option value="srd"> Sardinian </option>
						<option value="srn"> Sranan Tongo </option>
						<option value="srp"> Serbian </option>
						<option value="srr"> Serer </option>
						<option value="ssa"> Nilo-Saharan languages </option>
						<option value="ssw"> Swati </option>
						<option value="suk"> Sukuma </option>
						<option value="sun"> Sundanese </option>
						<option value="sus"> Susu </option>
						<option value="sux"> Sumerian </option>
						<option value="swa"> Swahili </option>
						<option value="swe"> Swedish </option>
						<option value="syc"> Classical Syriac </option>
						<option value="syr"> Syriac </option>
						<option value="tah"> Tahitian </option>
						<option value="tai"> Tai languages </option>
						<option value="Tamil"> Tamil </option>
						<option value="tat"> Tatar </option>
						<option value="Telugu"> Telugu </option>
						<option value="tem"> Timne </option>
						<option value="ter"> Tereno </option>
						<option value="tet"> Tetum </option>
						<option value="tgk"> Tajik </option>
						<option value="tgl"> Tagalog </option>
						<option value="tha"> Thai </option>
						<option value="tib"> Tibetan </option>
						<option value="tig"> Tigre </option>
						<option value="tir"> Tigrinya </option>
						<option value="tiv"> Tiv </option>
						<option value="tkl"> Tokelau </option>
						<option value="tlh"> Klingon tlhIngan-Hol </option>
						<option value="tli"> Tlingit </option>
						<option value="tmh"> Tamashek </option>
						<option value="tog"> Tonga (Nyasa) </option>
						<option value="ton"> Tonga (Tonga Islands) </option>
						<option value="tpi"> Tok Pisin </option>
						<option value="tsi"> Tsimshian </option>
						<option value="tsn"> Tswana </option>
						<option value="tso"> Tsonga </option>
						<option value="tuk"> Turkmen </option>
						<option value="tum"> Tumbuka </option>
						<option value="tup"> Tupi languages </option>
						<option value="Turkish"> Turkish </option>
						<option value="tut"> Altaic languages </option>
						<option value="tvl"> Tuvalu </option>
						<option value="twi"> Twi </option>
						<option value="tyv"> Tuvinian </option>
						<option value="udm"> Udmurt </option>
						<option value="uga"> Ugaritic </option>
						<option value="uig"> Uighur Uyghur </option>
						<option value="ukr"> Ukrainian </option>
						<option value="umb"> Umbundu </option>
						<option value="und"> Undetermined </option>
						<option value="Urdu"> Urdu </option>
						<option value="uzb"> Uzbek </option>
						<option value="vai"> Vai </option>
						<option value="ven"> Venda </option>
						<option value="Vietnamese"> Vietnamese </option>
						<option value="Volapük"> Volapük </option>
						<option value="Votic"> Votic </option>
						<option value="Wakashan languages"> Wakashan languages </option>
						<option value="Walamo"> Walamo </option>
						<option value="war"> Waray </option>
						<option value="Waray"> Washo </option>
						<option value="Welsh"> Welsh </option>
						<option value="Sorbian languages"> Sorbian languages </option>
						<option value="Walloon"> Walloon </option>
						<option value="Wolof"> Wolof </option>
						<option value="Kalmyk Oirat"> Kalmyk Oirat </option>
						<option value="xhosa"> Xhosa </option>
						<option value="yao"> Yao </option>
						<option value="Yapese"> Yapese </option>
						<option value="Yiddish"> Yiddish </option>
						<option value="Yoruba"> Yoruba </option>
						<option value="Yupik languages"> Yupik languages </option>
						<option value="Zapotec"> Zapotec </option>
						<option value="Blissymbols Blissymbolics Bliss"> Blissymbols Blissymbolics Bliss </option>
						<option value="Zenaga"> Zenaga </option>
						<option value="Zhuang Chuang"> Zhuang Chuang </option>
						<option value="Zande languages"> Zande languages </option>
						<option value="Zulu"> Zulu </option>
						<option value="Zuni"> Zuni </option>
						<option value="No linguistic content Not applicable"> No linguistic content Not applicable </option>
						<option value="Zaza Dimili Dimli Kirdki Kirmanjki Zazaki"> Zaza Dimili Dimli Kirdki Kirmanjki Zazaki </option>
					</select>
                    </div>
                    <div class="col-sm-6">
                        <label for="inputAddressLine2">Field:</label>
                        <select name="field" class="form-control" required>
                        <option value="">----</option>
                        <option value="Botany">Botany </option>
                        <option value="Mechanical Engineering">Mechanical Engineering</option>
                        <option value="Chemical Engineering">Chemical Engineering</option>
                        <option value="Computer Engineering">Computer Engineering</option>
                        <option value="Human Medicine">Human Medicine</option>
                        <option value="Meteorology">Meteorology</option>
                        </select>
                    </div>
                </div>
                <button name="search" class="btn bg-4f84c4">Search</button>
		</form>



		<section class="thumb card-group-2 bg-f5">
			<form action="rec-mentor.php" method="get">
				<div class="container">	
				<div class="row">
					<?php 
						if(isset($_POST['search'])){ 
						$language = $_POST['language'];
						$field = $_POST['field'];

						$sql = "select * from professional_registration where language='$language' AND field='$field'";
						$query = mysqli_query($conn, $sql);

						while ($row = mysqli_fetch_array($query)) {
					?>
					<div class="col-md-4">
						<div class="card">
							<div class="shap-hexa shap-hexa-f5">
								<div class="shap-hexa shap-hexa-line">
									<i class="fa fa-graduation-cap"></i>
								</div>
							</div>
							<div class="card-body">
								<h4 class="card-title"><?php echo $row['title'].". ";?><?php echo $row['first_name'];?><?php echo " ". $row['last_name'];?></h4>
								<p><?php echo $row['field'];?></p>
								<p><b><?php echo $row['educational_level'];?></b></p>

								<button name="choose_mentor" class="btn bg-4f84c4"><?php echo $row['email'];?></button>


							</div>
						</div>
					</div>
					<?php
					}
				}
					?>

				</div>
			</div>
			</form>



			<!-- <div class="container">
				<h1 class="card-title">Recommended Teachers</h1>
			</div> -->
			<!-- <form action="rec-mentor.php" method="get">
				<div class="container">	
				<div class="row">
					<?php 
						for ($i=1; $i < 6; $i++) { 	
						$sql = "select * from teacher_registration where sn='$i'";
						$query = mysqli_query($conn, $sql);

						while ($row = mysqli_fetch_array($query)) {
					?>
					<div class="col-md-4">
						<div class="card">
							<div class="shap-hexa shap-hexa-f5">
								<div class="shap-hexa shap-hexa-line">
									<i class="fa fa-graduation-cap"></i>
								</div>
							</div>
							<div class="card-body">
								<h4 class="card-title"><?php echo $row['first_name'];?>.  <?php echo " ". $row['last_name'];?></h4>
								<p><?php echo $row['field'];?></p>
								<p><?php echo $row['email'];?></p>

								<button name="choose_mentor" class="btn bg-4f84c4">Choose Mentor</button>

							</div>
						</div>
					</div>
					<?php
					}
				}
					?>
			</div>
		</div>
	</form> -->

		</section>

		<footer>
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-md-4">
							<h3>Contact</h3>
							<p>Covenant Universtiy</p>
							<ul class="list">
								<li><a href="#">Sango Otta , Ogun State</a></li>
								<li><a href="#">+234-706-3000-971</a></li>
								<li><a href="#">info@meetupcareers.com</a></li>
							</ul>
						</div>
						<div class="col-sm-6 col-md-2">
							<h3>About</h3>
							<ul>
								<li><a href="about-us.html">About us</a></li>
								<li><a href="#">Mentors</a></li>
								<li><a href="#">Mentees</a></li>
								<li><a href="#">FAQs</a></li>
								<li><a href="#">Help center</a></li>
							</ul>
						</div>
						<div class="col-sm-6 col-md-2">
							<h3>Commulity</h3>
							<ul>
								<li><a href="#">Discussions</a></li>
								<li><a href="#">Events</a></li>
								<li><a href="#">Guidelines</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
						<div class="col-sm-6 col-md-4">
							<h3>Newsletter</h3>
							<p>Get latest updates and news from Meet-Up Career</p>
							<form class="form-group">
								<input type="text" class="form-control" placeholder="Enter your email">
								<a href="#" class="btn">Subscribe</a>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<p class="f-15">&nbsp;2019. All rights reserved - Meet-Up Careers| Designed by <a href="#">e-world</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- jQuery -->
		<script src="js/jquery/jquery-2.2.4.min.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap/popper.min.js"></script>
		<script src="js/bootstrap/bootstrap.min.js"></script>
		<!-- Owl-coursel -->
		<script src="js/owl-coursel/owl.carousel.js"></script>
		<!-- Script -->
		<script src="js/script.js"></script>
	</body>

</html>