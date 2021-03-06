<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>Home</title>

	<link rel="stylesheet" type="text/css" href="assets/css/progress-circle.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<section id="head">
		<div class="grid-container" id="headGrid">
			<div class="grid-item" id="headLeft">
				<img src="./assets/image/me.jpg" alt="Kier Escuadro" id="hlImg">
			</div>
			<div class="grid-item" id="headRight">
				<div class="grid-container name" id="headGridtop">
					<div class="grid-item">
						<h1 id="myname">Kier Nichol Escuadro</h1>
					</div>
					<div class="grid-item text-center" id="downloadCV">
						<span><i class="fas fa-download fa-2x"></i></span>
					</div>
				</div>
				<div class="grid-container" id="profession">
					<h3>Web Developer</h3>
				</div>
				<div class="grid-container text-center" id="headGridbott">
					<div class="grid-item" id="cv">
						<a href="./assets/file/EscuadroKierNichol.docx" class="homeLinkout"><span><i class="fas fa-user-graduate" download></i> RESUME</span></a>
					</div>
					<div class="grid-item" id="portfolio">
						<a href="./portfolio/index.php" target="_blank" class="homeLinkout"><span><i class="fas fa-toolbox"></i></span> PORTFOLIO</a>
					</div>
					<!-- Add linkout here -->
				</div>
			</div>
		</div>
	</section>	
	<section id="body">
		<div class="grid-container" id="bodySection">
			<div class="grid-item">
				Nagiisip pa ng ilalagay dito
			</div>
			<div class="grid-item" id="bodyRight">
				<div class="grid-container" id="bodyPersonalHead">
					<div class="grid-item" id="bodyPerHead">
						<h3>PERSONAL INFO</h3>
					</div>
					<div class="grid-item">
						<div class="grid-container" id="bodyPersonalDetails">
							<div class="grid-item" id="bodyPerInfo">
								<p>NAME:</p>
								<p>BIRTH DATE:</p>
								<p>ADDRESS:</p>
								<p>PHONE:</p>
								<p>EMAIL:</p>
							</div>					
							<div class="grid-item">
								<p>Kier Nichol P. Escuadro</p>
								<p>October 31, 1992</p>
								<p>West Kamias, QC.</p>
								<p>0995-008-5674</p>
								<p>knpescuadro@gmail.com</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
	<section id="footer">
		<div class="grid-container" id="footerSection">
			<div class="grid-item" id="footerLeft">
				<h5>RECENT WORK</h5>
				<ul>
					<li><i class="fa fa-angle-double-right"></i> QA Engineer at ABS-CBN</li>
					<li><i class="fa fa-angle-double-right"></i> QA Engineer at EastWest Bank</li>
				</ul>
			</div>
			<div class="grid-item" id="footerRight">
				<h5>RECENT PROFESSIONAL SKILLS</h5>
				<label>PHP</label>
				<div class="progress-circle progress-63"><span id="PHP">63</span></div>
				<label>Laravel</label>
				<div class="progress-circle progress-51"><span id="PHP">51</span></div>
			</div>
		</div>
	</section>
</body>
</html>