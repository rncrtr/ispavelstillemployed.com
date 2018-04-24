<?php
$quips = array();
$quips[] = "Pavel is in rare form today.";
$quips[] = "Survery Says...yes.";
$quips[] = "Until you open his office, Pavel is both employed and unemployed, like that famous cat.";
$quips[] = "Oh no, Pavel watched Oprah. YOU get a sarcastic comment, and YOU get a sarcastic comment, and YOU get a sarcastic comment...";
$quips[] = "It is said Pavel is russian. Have you ever seen him move quickly?";
$quips[] = "Who wants to know?";
$quips[] = "That is an unconfirmed rumor, but for now we will assume he is.";
$quips[] = "If rumors are to be believed, Pavel owns a magic button that does what he wishes, cloaking, time manipulation, teleportation, and generating sarcasm.";
$quips[] = "If not, Pavel has the experience and skills to be the next Santa Claus. Especially the decorum and diplomacy needed for the job.";
$quips[] = "So long as Natalia does not assassinate him anytime soon.";
$quips[] = "Well, someone needs to fire Joe at least once this week.";
$quips[] = "You do the math.";
$quips[] = "Pavel is in the kiddie pool at the moment. Please leave a message, or some vodka in his office, and he will get back to you soon.";
$quips[] = "Wait, maybe it is Suresh who is still employed? No Pavel. No Suresh. Well, they both look similar and are so good looking, it is hard to tell.";
$quips[] = "PavelBot activated. Employment get.";
$quips[] = "To Pavel or not to Pavel, that is the question.";
$quips[] = "Does a hockey stick?";
$quips[] = "As long as Pavel doesn't get in a car accident";
$quips[] = "As long as Pavel isn't hit by a fellow employee";
$quips[] = "Pavel is lost somewhere in Spectrum, one app, or miniguide";
$quips[] = "for the love of vodka, stop asking that question";
$quips[] = "Could you ask me later? I'm in my one on one with Pavel right now";
$quips[] = "I hear no complaints or sarcastic comments at the moment";
$quips[] = "Pavel is an enigma wrapped in a mystery, wrapped in a REST API call";
$quips[] = "Pavel is drawn to developers like a moth to the complexity of a flame";
$quips[] = "Pavel is well known for distracting players with his good looks in youth hockey arenas";
$quips[] = "Pavel lives by a code of ethics consisting of sarcasm, chrono-shaming employees who show up late to his meetings, and ritualistic weekly firings of canadian-americans";
$quips[] = "Pavel considers himself the only true half-blood prince in the whole company";
$quips[] = "There is a rumor that Pavel has used jenkins to get expensive dinner reservations downtown, a skill most developers don't know is even possible";
$quips[] = "Pavel does not play favorites, UNLESS you display undying loyalty, pick up his dry-cleaning, and surrender your firstborn to his service upon legal employment age, maybe...";

$quips = array_shuffle($quips);

function array_shuffle($array){
  // shuffle using Fisher-Yates
  $i = count($array);
 
  while(--$i){
  $j = mt_rand(0,$i);
    if($i != $j){
      // swap items
      $tmp = $array[$j];
      $array[$j] = $array[$i];
      $array[$i] = $tmp;
    }
  }     
  return $array;
}
?>
<?php
  $bg = array('pavel1.png', 'pavel2.png', 'pavel3.png', 'pavel4.png', 'pavel5.png', 'pavel6.png'); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>
<!DOCTYPE html>
<html>
<head>
<title>Is Pavel Still Employed?</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<style type="text/css">
<!--
*{color: #FFFFFF !important;}
body{
background: url(images/<?php echo $selectedBg; ?>);

}
-->
</style>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
    <div id="container-fluid">
    	
    	<div class="row">
    		<div class="col-md-12" style="text-align: center;">	
    			<h1>Is Pavel still employed?</h1>
    		</div>
    	</div>
    	<div class="row">
    		<div class="col-md-10 col-md-offset-1" style="min-height: 400px; font-family: 'Open Sans',Tahoma, sans-serif; font-size: 60px; font-weight: bold; text-align: center;">	
    	    		<?php echo $quips[0]; ?><br />
    		</div>
    	</div>	
    	<div class="row">
    		<div class="col-md-12" style="text-align: center;">
    		<br />
    		<br />
    		<small>this website is equipping with Pavel Refreshing Technology (hit F5 or CMD+R for more...)</small>
    		</div>
    	</div>
    </div>
</body>
</html>