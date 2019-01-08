<?php
require_once("dbtoolsV2.php");
//require_once("envoimail.php");
$texte_citation=lire_citation(3600);
$auteur_citation=lire_auteur_citation(3600);
$lien_citation=lire_lien_citation(3600);
$texte_roman=lire_texte_roman(3600);
$auteur_roman=lire_auteur_roman(3600);
$titre_roman=lire_titre_roman(3600);
$date_roman=lire_oeuvre_date_roman(3600);
$lien=lire_lien(3600);//86400

$bg_url = "images/bg/background".mt_rand(1,11).".jpg";

?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<!-- Global Site Tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114676763-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-114676763-1');
		</script>
		<!-- Global Site Tag (gtag.js) - Google Analytics -->

		<title>ILIOS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta http-equiv="refresh" content="3600">
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="icon" type="image/png" href="images/SUN_ILIOS.png" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

		<style>
		.Reste{
			font-family: 'Theo';
			font-size: 1.2rem;
			color: #ffffff;
			font-weight: 600;
			line-height: 1.5;
			margin: 0 0 1rem 0;
			letter-spacing: 0.1rem;
		}
		.Ilios{
			font-family: 'Vincent';
		  }
		  
		.custom-bg::after {
 			   background-image: url(<?php echo $bg_url; ?>) !important;
		}
		</style>

		<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/7a3b206b9c44d73f8cad2f650/b1be610fee8b76d74c36963c4.js");</script>
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

						<!-- Contact -->
<!--
 							<article id="contact">
								<h2 class="major">Contact</h2>
								<form method="post" action="#">
									<div class="field half first">
										<label for="name">Name</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field half">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" />
									</div>
 									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="4"></textarea>
									</div>
 									<ul class="actions">
										<li><input type="submit" value="Send Message" class="special" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
							</article> 
-->

				<header id="header">
					<div class="logo">
						<ul class="actions">
						<a href="#intro"><div align="center"><img src="images/SUN_ILIOS.png" width="110"/></div></a>
						</ul>
					</div>

					<div class="content">
						<div class="inner">
<!--
							<h1>Ton rayon de soleil intelligent,</h1> 
							<h1>tous les matins</h1>
-->
							<h2>«<?php echo $texte_citation; ?>»<br/></h2>
<!-- 							<span class="change"><h6><div align="right"><?php echo $auteur_citation; ?></div></h6></span>
 -->							<a class="change" href=<?php echo $lien_citation; ?>><h6><div align="right"><?php echo $auteur_citation; ?></div></h6></a>

						</div>
						<a href="#work"><div align="right"><img src="images/read.png" align="right" width="70"/></div></a>
						<a target="_blank" href=<?php echo $lien; ?>><div align="left"><img src="iliosvideo4.png" align="left" width="60"/></div></a>

<!--
							<div align="center">
								<a href="#intro"><img src="images/citation.png" width="30"/></a>
								<a href="#intro"><img src="images/defi.png" width="30"/></a>
								<a href="#intro"><img src="images/mot.png" width="30"/></a>
							</div>
-->
					</div>


				</header>

				<!-- Main -->
				<div id="main">

					<!-- Intro -->
					<article id="intro">
							<span class="image main"><div align="center"><img src="images/Ilios_logo2 copy.psd" alt="" /></div></span>

<!-- 						<a href="#intro"><div align="center"><img src="images/Ilios_logo2 copy.psd" width="600"/></div></a>
 -->						<h6><div align="center">Tous les matins, ton rayon de soleil.</div></h6>

						<div style="text-align: center">
							<span class="Reste">Te souviens-tu de la dernière lecture intéressante qui t'a fait porter un regard neuf sur ce qui t'entoure? De la sensation et du changement qu'elle a provoqués en toi? </span><br/><br/>
							<div style="text-align: justify"><span class="Ilios">J</span><span class="Reste">e m’appelle Ilios, ce qui signifie soleil en grec. Je m'engage à te proposer du contenu éclairant que j’aurai soigneusement choisi pour que tu puisses, tous les matins, voir le monde un peu différemment. </span><br/>
								<span class="Ilios">J</span><span class="Reste">e te propose donc de devenir ton rayon de soleil quotidien. De faire en sorte que l'anodin devienne merveilleux, le commun étonnant. Ainsi, à ton réveil, tu pourras lire ma citation préférée et lorsque tu as quelques minutes supplémentaires à t'accorder, ouvre le petit livre sous la citation pour découvrir une lecture incoutournable que je te recommande chaudement.</span><br/>
								<span class="Ilios">J</span><span class="Reste">e suis joueur, il arrivera donc de temps à autres que je te surprennes avec des petits défis pour te pousser à sortir de ta zone de confort, aller vers les autres, dans le but de savourer l'instant présent!</span><br/>
								<span class="Ilios">J</span><span class="Reste">e suis encore jeune, et peut être maladroit parfois, s'il te plaît écris-moi en cliquant sur la lettre un petit peu plus bas pour me faire part de tes coups de coeurs, recommendations et commentaires positifs ou negatifs! Je t'en remercie!  </span><br/><br/>
								<span class="Reste">À</span><span class="Reste">ujourd'hui est un jour magnifique, je te souhaite une journée ensoleillée de belles découvertes!</span><br/><br/>
							</div>
						</div>

 							
						<h6>  <div align="left">À bientôt.</div></h6>
						<h5><div align="right">Ilios </div></h5></br>

						<a href="#contact"><div align="center"><img src="images/Ilios_courriel.png" width="70"/></div></a>
						

<!--  						<a href="#contact"><div align="center"><img src="images/pencil.png" width="70" align="right"/></a>
						<a href="mailto:Ilios@ilios.io" align="center"><img src="images/Ilios_courriel.png" width="60" align="right"/></div></a> -->


						</article>


						<!-- Work -->
							<article id="work">
								<h5><center>Tes cinq minutes de lecture inspirantes</center></h5>
								<h2 class="major"></h2>



<!-- 								<h2 class="major">Le chat</h2>
								<h3><div align="right">de <u>188 contes à régler</u> par Jacques Sternberg (1988)</div></h3>
								<h3><div align="justify">On s'était si souvent demandé, et depuis longtemps, à quoi les chats pouvaient bien penser.
									 Tapis au plus profond de leur solitude, enroulés autour de leur chaleur, comme rejetés dans une autre dimension, distants, méprisants, ils avaient l'air de penser, certes.
									 Mais à quoi ?
									 Les hommes ne l'apprirent qu'assez tard. Au XXIe siècle seulement.<br/><br/>

									  Au début de ce siècle, en effet, on constata avec quelque étonnement que plus aucun chat ne miaulait. Les chats s'étaient tus. On n'en fit pas un drame. En fin de compte, les chats n'avaient jamais été tellement bavards : sans doute ne trouvaient-ils vraiment plus rien à dire à présent.<br/><br/>

									 Puis, plus tard, on releva un autre fait.

									 Plus singulier celui-là beaucoup plus singulier : les chats ne mouraient plus.

									 Quelques-uns mouraient évidemment par accident, écrasés par un véhicule, le plus souvent; ou emportés en bas âge par quelque maladie purement pernicieuse. Mais les autres évitaient la mort, lui échappaient, comme si cette fatale échéance n'avait plus existé pour eux.<br/><br/>

									 Cette énigme, personne ne la perça jamais.<br/><br/>

									 Leur secret était simple, pourtant. Les chats depuis qu'ils vivaient sur terre, n'étaient jamais sortis de leur indolence native pour accomplir, comme les hommes, mille petits tours savants. Ils avaient toujours laissé les hommes s'occuper de leur sort, leur procurer la nourriture, le confort et la chaleur artificielle. Eux, libérés de tout, avaient toujours vécu dans une sorte d'hibernation idéale, bien dosée, parfaitement mise au point, ne songeant qu'à mieux se concentrer, douillettement lovés dans leur bien-être.<br/><br/>

									 Les chats avaient eu beaucoup de temps pour penser. Ils avaient beaucoup pensé. Mais alors que les hommes pensaient à tort et à travers, au superflu de préférence, les chats, eux, n'avaient pensé qu'à l'essentiel, sans cesse, sans se laisser distraire. Ils n'avaient médité, inlassablement, au cours des siècles, qu'un seul problème.

									 Et à force d'y penser, ils l'avaient résolu.<br/><br/>

								</h3>
								<h5><div align="right">Jacques Sternberg</h5> -->
	
<!-- 							   <h2 class="major"><?php echo $titre_roman; ?></h2>
 -->							   <h2><?php echo $titre_roman; ?></h2>

                                        <h3><div align="right"><?php echo $date_roman; ?></div></h3>
                                        <h3><div align="justify"><?php echo $texte_roman; ?>

                                        </h3>
                                        <h5><div align="right"><?php echo $auteur_roman; ?></h5>

							</article>

						<!-- About -->
							<article id="about">
								<h2 class="major">About</h2>
								<span class="image main"><img src="images/pic03.jpg" alt="" /></span>
								<p>...</p>
							</article>

						<!-- Contact -->
							<article id="contact">
								<h2 class="major">Contact</h2>
								<form method="post" action=envoimail.php>
									<div class="field half first">
										<h3 label for="name">Nom</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field half">
										<h3 label for="email">Email</label>
										<input type="text" name="email" id="email" />
									</div>
									<div class="field">
										<h3 label for="message">Petit message?</label>
										<textarea name="message" id="message" rows="1"></textarea>
									</div>

								<h2 class="major">Une citation à partager?</h2>
									<div class="field half first">
										<h3 label for="name">Auteur(s):</label>
										<input type="text" name="auteurCitation" id="auteurCitation" />
									</div>
									<div class="field half">
<!-- 										<h3 label for="email">Citation(s)</label>
										<input type="text" name="email" id="email" /> -->
										<h3 label for="citation">Citation(s):</label>
										<textarea name="citation" id="citation" rows="2"></textarea>										
									</div>

								<h2 class="major">Ou un texte?</h2>
									<div class="field">
										<h3 label for="auteur">Auteur, Titre, date de parution...</label>
										<textarea name="auteurTexte" id="auteurTexte" rows="1"></textarea>
									</div>
									<div class="field">
										<h3 label for="texte">Texte</label>
										<textarea name="texte" id="texte" rows="3"></textarea>
									</div>


								<h2 class="major">Une vidéo?</h2>
									<div class="field">
										<h3 label for="lien">Lien(s)</label>
										<textarea name="lien" id="lien" rows="1"></textarea>
									</div>






									<ul class="actions">
										<li><input type="submit" value="Envoyer" class="special" /></li>
<!-- 										<li><input type="reset" value="Reset" /></li>
 -->									</ul>
								</form>
<!-- 								<ul class="icons">
									<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
								</ul> -->
							</article>

					</div>

				<!-- Footer -->
					<footer id="footer">
<!--
 						<p class="copyright">&copy; Untitled. Design: <a href="http://vpicouet.perso.centrale-marseille.fr/blog/index.html">T. Corboliou & V. Picouet</a>.</p>
 -->
					</footer>

			</div>

		<!-- BG -->
			<div id="bg" class="custom-bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>