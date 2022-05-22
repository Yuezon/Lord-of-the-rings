	<!DOCTYPE html>
<html>
<head>
	<title>Mordor</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="script/style_common.css">
	<link rel="stylesheet" type="text/css" href="script/style_mordor.css">
</head>
<body>

	<div class="top" style="background-image: url('./images/sauron_bg.png');">
		<h1>The Lord of the Ring</h1>
	</div>

	<div class="menu">
		<div class="menu_item"><a href="index_LOTR.html">The Shire</a></div>
		<div class="menu_item"><a href="Rivendell.html">Rivendell</a></div>
		<div class="menu_item"><a href="Rohan.html">Rohan</a></div>
		<div class="menu_item"><a href="Minas_Tirith.html">Minas Tirith</a></div>
		<div class="menu_item"><a href="#" style="color: #d87904;">Quizz</a></div>
	</div>

	<div class="popup"><input type="checkbox" id="closeBtn">
		<div class="onlyLbl"><label for="closeBtn" class="closeLbl">X</label></div>
		<figure class="caracter"><img src="images/nazgul.png"></figure>
		<div class="bubble">
			<div class="speech" style="animation-delay:5s;">So you're the "hero"...</div>
			<div class="speech" style="animation-delay:8s;">Do you think you can leave the mordor.. </div>
			<div class="speech" style="animation-delay:11s;">alive? Let's see if you manage to do that..</div>
		</div>
	</div>
	
	<div class="clear"></div>
		
	<a name="topofpage"></a>
	<div class="intro-title"><figure class="little"></figure>Time for your journey to start!</div>
	<div class="intro"><p>Many have been tempted by the power of the ring and perished along the way. It is time to test your knowledge and see if you would be able to bring the One Ring to Mordor and throw it into the flames of Mount Doom, or if you would never make it to the end.</p></div>

	<div class="elvish"><img src="images/elfic.png"></div>

	<div class="clear"></div>

<?php

if (!isset($_POST["soum"])) {
	
?>

<!-- FORMULAIRE (ancien .html) -->
<form method="POST">

<div class="quiz">

<div class="question">
	<p>State your name so we can mention it in history books!</p>
	<p><input type="text" name="heroname" id="Adventurer">

</div>

<div class="question1">
	<h2>Question 1</h2>
	<h3>Click on the friend you'll bring with you on this journey</h3>
	
<div class="friend">
<label>
	<input type="radio" name="friend" value="sam" >
	<img src="images/sam-quiz.jpg"><p>Sam</p>
</label>

<label>
	<input type="radio" name="friend" value="boromir" >
	<img src="images/boromir-quiz.jpg"><p>Boromir</p>
</label>

<label>
	<input type="radio" name="friend" value="gimli" >
	<img src="images/gimli-quiz.jpeg"><p>Gimli</p>
</label>

<label>
	<input type="radio" name="friend" value="gandalf" >
	<img src="images/gandalf-quiz.jpg"><p>Gandalf</p>
</label>

<label>
	<input type="radio" name="friend" value="saroumane" >
	<img src="images/saroumane-quiz.jpg"><p>Saroumane</p>
</label>

<label>
	<input type="radio" name="friend" value="golum" >
	<img src="images/golum-quiz.jpg"><p>Golum</p>
</label>
</div>	

</div>

<div class="question">
	<h2>Question 2</h2>
	<h3>What's the best time to leave for an adventure?</h3>
	<input type="radio" name="season" value="summer">Summer<br>
	<input type="radio" name="season" value="autumn">Autumn<br>
	<input type="radio" name="season" value="winter">Winter<br>
	<input type="radio" name="season" value="spring">Spring<br>
	<input type="radio" name="season" value="anytime">Anytime's the right time!<br>
	<input type="radio" name="season" value="home">I'd rather stay home<br>
</div>

<div class="question">
	<h2>Question 3</h2>
	<h3>You find a pretty ring on the on the ground. What do you do with it? </h3>
	<input type="radio" name="ring" value="keepittomyself">Keep it for myself<br>
	<input type="radio" name="ring" value="leaveitthere">Leave it there<br>
	<input type="radio" name="ring" value="giveback">Try to look for its owner to give it back<br>
	<input type="radio" name="ring" value="giveittosomeone">Pick it up and give it to someone else<br>
</div>

<div class="question">
	<h2>Question 4</h2>
	<h3>One of your friend falls prey to a herd of orcs. How would you react?</h3>
	<input type="radio" name="orc" value="blind">Get blindly into the fight to try and save them<br>
	<input type="radio" name="orc" value="help">Leave to get some help from one of your stronger friends<br>
	<input type="radio" name="orc" value="luck">Wish them luck and run away<br>
	<input type="radio" name="orc" value="idontknowthatperson">Tell the orcs you don't know that person and want nothing to do with him<br>
</div>

<div class="question">
	<h2>Question 5</h2>
	<h3>You obtain the power to turn invisble. What's your reaction?</h3>
	<input type="radio" name="power" value="cool">Very cool, so many things I can do with it!<br>
	<input type="radio" name="power" value="useful">That's a useful ability!<br>
	<input type="radio" name="power" value="bored">I had fun with it two times and got bored from it<br>
	<input type="radio" name="power" value="sucks">It sucks, I'd rather have a ring that makes me fly<br>
</div>

<div class="question">
	<h2>Question 6</h2>
	<h3>Your wizard friend always shows up late and throws random quotes that litteraly mean nothing to make up for it.</h3>
	<input type="radio" name="wizard" value="love">I love him that way ♥<br>
	<input type="radio" name="wizard" value="fireworks">It's annoying me but he's got nice fireworks so that's okay<br>
	<input type="radio" name="wizard" value="birthday">He's not invited to my 111<sup>th</sup> birthday party anymore<br>
	<input type="radio" name="wizard" value="anotherhobbit">He better look for another hobbit when he needs someone for an adventure<br>
</div>

<div class="clear"></div>

<input type="submit" name="soum" value="Let's go!">


</div>

<div class="gobackup">
	<figure class="little"></figure>
	<figure class="arrow"><a href="#topofpage" class="bouton"><img src="images/up-chevron.png"></a></figure>
	</div>


</form>
</body>
</html>


<!-- FIN FORMULAIRE (ancien .html) -->


<?php
exit();
}


// TRAITEMENT DES ERREURS
$erreur=0; // On indique une variable $erreur qui 'normalement' est égale à 0



if (empty($_POST['heroname'])){

	if ($erreur==0) {
		print "<div class=\"quiz\"><div class=\"question\">";
		print "<h2>We can't know if you're worthy if you don't answer this hero test!</h2><br/>";
		print "<img src=\"images/you-shall-not-pass.gif\" style=\"width:290px; margin-left:16%;\"><br/><br/>";
		}

	print "Don't you have a name?<br/><br/>";

	$erreur=1;
}


if(!isset($_POST["friend"])){
	
	if ($erreur==0) {
		print "<div class=\"quiz\"><div class=\"question\">";
		print "<h2>We can't know if you're worthy if you don't answer this hero test!</h2><br/>";
		print "<img src=\"images/you-shall-not-pass.gif\" style=\"width:290px; margin-left:16%;\"><br/><br/>";
		}

 print "<b>Answer Question 1!</b><br>
 You wouldn't think of leaving alone right?? Choose a friend for this journey!<br/><br/>";
 print "<img src=\"images/friend.gif\" style=\"width:270px; margin-left:16%;\"><br/><br/>";

 $erreur=1;
}

if(!isset($_POST["season"])){

	if ($erreur==0) {
		print "<div class=\"quiz\"><div class=\"question\">";
		print "<h2>We can't know if you're worthy if you don't answer this hero test!</h2><br/>";
		print "<img src=\"images/you-shall-not-pass.gif\" style=\"width:290px; margin-left:16%;\"><br/><br/>";
		}

	print "<b>Answer Question 2!</b><br>Choose the perfect time to leave on an adventure<br/><br/>";
	print "<img src=\"images/adventure.gif\" style=\"width:270px; margin-left:16%;\"><br/><br/>";

	$erreur=1;
}

if(!isset($_POST["ring"])){

	if ($erreur==0) {
		print "<div class=\"quiz\"><div class=\"question\">";
		print "<h2>We can't know if you're worthy if you don't answer this hero test!</h2><br/>";
		print "<img src=\"images/you-shall-not-pass.gif\" style=\"width:290px; margin-left:16%;\"><br/><br/>";
		}

	print "<b>Answer Question 3!</b><br>Choose what you would do with the One Ring in your hands<br/><br/>";
	print "<img src=\"images/precious-ring.gif\" style=\"width:270px; margin-left:16%;\"><br/><br/>";

	$erreur=1;
}

if(!isset($_POST["orc"])){

	if ($erreur==0) {
		print "<div class=\"quiz\"><div class=\"question\">";
		print "<h2>We can't know if you're worthy if you don't answer this hero test!</h2><br/>";
		print "<img src=\"images/you-shall-not-pass.gif\" style=\"width:290px; margin-left:16%;\"><br/><br/>";
		}

	print "<b>Answer Question 4!</b><br>We need to know how you'd react to extreme situations to see if you're right for the job<br/><br/>";
	print "<img src=\"images/aragorn-save.gif\" style=\"width:270px; margin-left:16%;\"><br/><br/>";

	$erreur=1;
 }

 if(!isset($_POST["power"])){

	if ($erreur==0) {
		print "<div class=\"quiz\"><div class=\"question\">";
		print "<h2>We can't know if you're worthy if you don't answer this hero test!</h2><br/>";
		print "<img src=\"images/you-shall-not-pass.gif\" style=\"width:290px; margin-left:16%;\"><br/><br/>";
		}

	print "<b>Answer Question 5!</b><br>What would you do with the power bestowed upon you?<br/><br/>";
	print "<img src=\"images/invisible.gif\" style=\"width:270px; margin-left:16%;\"><br/><br/>";

	$erreur=1;
 }

if(!isset($_POST["wizard"])){

	if ($erreur==0) {
		print "<div class=\"quiz\"><div class=\"question\">";
		print "<h2>We can't know if you're worthy if you don't answer this hero test!</h2><br/>";
		print "<img src=\"images/you-shall-not-pass.gif\" style=\"width:290px; margin-left:16%;\"><br/><br/>";
		}

	print "<b>Answer Question 6!</b><br>Choose how you'd react to your wizard friend being late!<br/><br/>";
	print "<img src=\"images/gandalf-late.gif\" style=\"width:270px; margin-left:16%;\"><br/><br/>";

	$erreur=1;
}

if ($erreur==1) { // Action si la variable d'erreur est égale à 1

	print "</div></div>";

	print "</body></html>";


	exit();
}


//ETAT DU MONDE
$heroname=$_POST["heroname"];

$soum=$_POST["soum"];
$friend=$_POST["friend"];
$season=$_POST["season"];
$ring=$_POST["ring"];
$orc=$_POST["orc"];
$power=$_POST["power"];
$wizard=$_POST["wizard"];



$reponse1=array("sam"=>"12", "boromir"=>"4", "gimli"=>"6", "gandalf"=>"8", "saroumane"=>"2", "golum"=>"0");

$reponse2=array("summer"=>"4", "autumn"=>"6", "winter"=>"0", "spring"=>"8", "anytime"=>"12", "home"=>"2");

$reponse3=array("keepittomyself"=>"2", "leaveitthere"=>"8", "giveback"=>"6", "giveittosomeone"=>"4");

$reponse4=array("blind"=>"2", "help"=>"10", "luck"=>"6", "idontknowthatperson"=>"4");

$reponse5=array("cool"=>"4", "useful"=>"8", "bored"=>"6", "sucks"=>"4");

$reponse6=array("love"=>"10", "fireworks"=>"8", "birthday"=>"4", "anotherhobbit"=>"2");

$result=$reponse1[$friend]+$reponse2[$season]+$reponse3[$ring]+$reponse4[$orc]+$reponse5[$power]+$reponse6[$wizard];

$moyenne=($result * 20) / 60;

print "<div class=\"quiz\"> <div class=\"result\">";


// AFFICHER RESULTATS 

if ($moyenne<=10) {

	print "<h2  style=\"text-align:center;\">Thanks for your application but..</h2>";

	print "<img src=\"images/gollum-falling.gif\" style=\"width:290px; margin-left:33%;\"><br/><br/>";

	print "I'm sorry to say this young <b>$heroname</b>..<br> But you would probably die before seeing even the gates of Mordor.. The power of the One Ring is way too strong for you, you would become a danger not only for yourself but for the whole Middle Earth. <br> I'm gonna look for another hobbit for this mission. ";
}

if($moyenne>10 && $moyenne<=15) {

	print "<h2  style=\"text-align:center;\">Not bad !</h2>";

	print "<img src=\"images/eagle.gif\" style=\"width:290px; margin-left:33%;\"><br/><br/>";
	
		print "<b>$heroname</b>.<br>
		You are somewhat ready to travel accross Middle Earth for this journey. However, you will need to rely heavily on your friends to make sure you don't lose your way and stay in line. Make sure to surround yourself with people strong enough to save you when you're helpless.";
	}

if($moyenne>15) {

	print "<h2 style=\"text-align:center;\">Congratulations !</h2>";

	print "<img src=\"images/bowing.gif\" style=\"width:290px; margin-left:33%;\"><br/><br/>";
	
	print "We found our hero! <b>$heroname</b> will be perfect for this job.<br> You are perfectly ready to take on this dangerous mission and save everyone's life. <br> Do not fear the orcs, harduous paths, deadly spiders or the scorching flames of Mount Doom, for Gandalf's eagles will come and save you when in a dire situation.";
}

print "</div></div>";
?>



</body>
</html>
