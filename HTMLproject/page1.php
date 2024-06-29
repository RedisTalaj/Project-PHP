
<?php
    session_start();
	if (isset($_SESSION['username']) && $_SESSION['username'] == 'admin') {
		// user is logged in, display the link
		echo "<a href='delete.php'>Manage User's Data</a>";
	} 
?>
<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style/StyleSheet.css">
	<link rel="stylesheet" type="text/css" href="style/mainsheet.css">
	<style type="text/css">
		button{
			font-family: fantasy;
			width: 100px;
			height: 50px;
			background-color: rgb(140, 140, 140);
			float: right;
			border-color: rgb(140, 140, 140);
			box-shadow: unset;
			box-decoration-break: unset;
		}
		.main2{
			border: 1px solid;
			background-color: rgb(140, 140, 140);
			text-align: center;
			width: auto;
			height: 50px;
			margin-top: 400px;
			padding: 10px;
			margin-right: unset;
			margin-left: unset;
			border-style: unset;
		}
		.p1{
			font-size: 30px;
			color:antiquewhite;
			font-family: Arial, Helvetica, sans-serif;
		}
	</style>
	<script>
		$(document).ready(function() {
			var isLoggedIn = "<?php echo isset($_SESSION['username']) ? 'true' : 'false'; ?>";
			if (isLoggedIn == "true") {
				$('.button').hide();
				$('.button1').hide();
				$('.header1').hide();
			} else {
				$('.logout').hide();
				$('.header').hide();
			}
		});
	</script>
</head>
<body>
	<div class="maincontainer">
		<div style="max-width: auto;">
			<div>
				<h1 class="main">Sport Times<button class="button" onclick="document.location='login.php'">Log in<button class="logout" onclick="document.location='logout.php'">Log out</button><button class="button1" onclick="document.location='signup.php'">Sign Up</button></h1>
				<br></br>
				<div class="header">
					<center>
						<a href="page2.html" target="_self">Footboll Bota</a>
						<a href="page3.html" target="_self">Kampionate</a>
						<a href="page4.html" target="_self">Kuqezi</a>
						<a href="SPORT TIMES.html" target="_blank">Sporte te tjera</a>
						<a href="#V1">Video/Audio</a>
					</center>
	            </div>
				<div class="header1">
					<center>
						<p class="p1">Log in or Sign up to view more information</p>
					</center>
	            </div>
				<br></br>
				<br></br>
				<div class="main">
					<div class="container">
						<img class="pic1" src="images/sport1.png">
						<p><b>Nuk vjen Skënder Gega dhe as Shpëtim Duro, Partizani zyrtarizon trajnerin e ri pas largimit të Ilir Dajës</b></p>
						<p>Partizani ka gjetur trajnerin e ri në këtë vit 2022 pas largimit të Ilir Dajës. Të kuqtë i kanë besuar Dritan Mehmetit, për të gjetur zgjidhjen brenda shtëpisë së tyre. Kështu janë mbyllur të gjitha aludimet për afrimin e Skënder Gegës apo Shpëtim Duros.Trajneri Mehmeti ka zhvilluar seancën e parë stërvitore me skuadrn në ambientet e “Football Republic”. Përgatitja po bëhet për përballjen ndaj Egnatias, atje ku kërkohet ndryshimi i rezultateve negative.</p>
						<br/>  
						<img class="pic4" src="images/sport7.png">
						<p><b>Menaxheri Adrian Aliaj flet për Mërgim Vojvodën te Torino: Ia doli si Cancelo i Manchester City</b></p>
						<p>Mërgim Vojvoda ka shkëlqyer në këto ndeshje të fundit të Serisë A. Trajneri Juric e ka përshtatur në krahun e majtë, megjithëse mbrojtësi shqiptar ka luajtur gjatë gjithë karrierës së tij në të djathtin. Por Vojvoda po rezulton më mirë në këtë rol të ri, duke dhënë asist në elitën e futbollit shqiptar. Në një intervistë për mediat italiane, menaxheri i tij Adrian Aliaj e ka krahasuar me Cancelon e Manchester City.“Kur Juric filloi ta provonte në të majtë, folëm shumë për të së bashku. I thashë të merrte një shembull nga Cancelo i Manchester Cityt, një nga skuadrat më të forta në botë, i cili është djathtas, por di të përshtatet shumë mirë në të majtë, duke hyrë në fushë për të gjuajtur ose krosuar me këmbën e djathtë. Tani për tani ai po ia del mbanë”, tha Aliaj.</p>     			
					</div>
					<div class="second">
						<img class="pic2" src="images/sport2.png" >
						<p><b>Ekskluzive/ Vendimi i çuditshëm në Kinë për futbollin, e pëson edhe Luga: Tani duhet të qëndroj me bluze të gjata në verë</b></p>
						<p>Në Kinë kanë marrë një vendim të çuditshëm për futbollin dhe për vazhdimësinë. Autoritet kanë vendosur që të gjithë sportistët dhe trajnerët të cilët kanë tatuazhe nuk mund të punojnë në këtë shtet. Ndërsa për personat që janë aktualisht pjesë e futbollit të Kinës duhet që t’i mbulojnë tatuazhet nëse munden, në të kundërt duhet t’i heqin ato me lazer. Albi Alla dhe Ergys Luga e pësojnë nga ky rregull i ri. “Sport Ekspres” ka kontaktuar me trajnerin që punon te moshat e Guangzhou që tregon gjithë situatën:“Na ka ardhur njoftimi, ne që jemi trajnerë e pësojmë të parët sepse duhet të jemi shembulli. Duhet të detyrohemi që t’i fshijmë tatuazhet sepse edhe gjatë seancave stërvitore do të jetë duke drejtuar ekipin dhe po konsiderohet si mungesë kulture këtu nëse dikush ka tatuazhe. Personalisht unë kam tre tatuazhe dhe dy prej tyre janë në vende të dukshme gjatë verës. Në qytetin e Guangzhou është dimër i shkurtër dhe verë e gjatë, prandaj duhet të qëndrojë me mëngë të gjata, e cila është shumë e vështirë për kushtet klimaterike. Në të kundërt, duhet që ta heq tatuazhin me lazer. Edhe në ekip kam futbolliste me tatuazhe. Personalisht ky vendim më duket i çuditshme pasi në Europë nuk e quajnë tabu”, ka thënë Luga.</p>
						<br/>
						<img class="pic3" src="images/sport3.png">
						<p><b>“Eh ju shqiptarët, jeni kritikë”! Reja e ka dëshirën e 2022 për Armando Brojën dhe tregon telefonatën me Armand Dukën: Çfarë thua, vërtet?</b></p>
						<p>Reja ka dhënë intervistën e parë për vitin 2022 për “Top Channel”, atje ku ka bërë një analizë të vitit që lamë pas. Kur flitet për dëshirën e tij më të madhe në këtë vit, Reja përmend Armando Brojën. Trajneri italian ka ritheksuar se nuk ka asnjë dyshim të vetëm për cilësitë e këtij djaloshi, por përsërit se duhet të rregullojë sjelljen dhe veprimet e tij që të ketë harmoni në grup. Ndërkohë sa i përket miqësores me Spanjën që ka siguruar Shqipëria së fundmi, Reja tregoi telefonatën me presidentin e FSHF, Armand Duka, duke u habitur nga arritja e dakortësimit.
							“Unë mund t’i jap një notë 10-të stafit tim, sepse po bëjmë një punë shumë të mirë me ekipet zinxhire të kombëtares duke filluar me përzgjedhje lojtarësh që nga mosha 12-13 vjeç. Ndërsa sa i përket lojtarëve dhe skuadrës mund t’i japë një notë 8. Jemi një ekip kompetitiv me skuadra si Polonia apo Hungaria sepse për skuadra si Franca apo Anglia që luajnë në nivele shumë të larta dhe për objektiva madhor nuk jemi ende.
							Kritikat për humbjen ndaj Anglisë? Ehh ju shqiptarët jeni shumë kritik, por tani jam mësuar edhe me këtë gjë. Por të luash kundër Anglisë që nuk di nga tja fillosh me emrat, ata janë skuadra më e mirë në botë për momentin.Në fund të fundit dua ti them shqiptarëve atyre më kritikëve që edhe ndeshje si këto ndodhin, por do të përpiqemi të përmirësohemi në të ardhmen. Objektivi ynë ashtu si na e ka kërkuar edhe presidenti Duka është që të jemi gati për eliminatoret e 2024-s.</p>
						</div>
						<a style="border-top: unset;border-bottom: unset;font-size: 200%;" href="https://sportekspres.com/"><b>More->SportEkspres</b></a>
					</div>
				</div>
				<div class="audio">
					<h1 class="video">Video/Audio</h1>
					<div class="main1">
						<center>
							<div class="container1" id="V1">
								<video class="video1" src="videoaudio/video1.mp4" type="video/mp4" width="400px" height="200px" controls ></video>
								<p><b>Incidente gjatë ndeshjes Memaliaj</b></p>
								<br/>
								<audio controls src="videoaudio/audio1.mp3" type="audio/mpeg" class="audio1"></audio>
								<p><b>Incidente gjatë ndeshjes Memaliaj</b></p>
							</div>
							<div class="second1">
								<video class="video2" src="videoaudio/video2.mp4" type="video/mp4" width="400px" height="200px" controls ></video>
								<p><b>Kombetarja ne prag te ndeshjes me Andorren</b></p>
								<br/>
								<audio controls src="videoaudio/audio2.mp3" type="audio/mpeg" class="audio2"></audio>
								<p><b>Futbolli ende pa date per rinisje</b></p>
							</div>
							<div class="third1"> 
								<video class="video3" src="videoaudio/video3.mp4" type="video/mp4" width="400px" height="200px" controls ></video>
								<p><b>Rinisin ndeshjet e futbollit ne karantine</b></p>
								<br/>
								<audio controls src="videoaudio/audio3.mp3" type="audio/mpeg" class="audio3"></audio>
								<p><b>Futboll, liga vazhdon bojkotin</b></p>
							</div>
						</center>
					</div>  
				</div>
			</div>
		</div>
	</body>
</html>