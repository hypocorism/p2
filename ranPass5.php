<!DOCTYPE html>
<html>
<head>
	<link href='http://fonts.googleapis.com/css?family=Michroma|Federo|Patrick+Hand+SC|Schoolbell|Walter+Turncoat|Architects+Daughter|Chewy|Julius+Sans+One|Kranky|Alegreya+SC:400,700|Donegal+One' rel='stylesheet' type='text/css'>
	<link rel='stylesheet' href='css/styles.css' type='text/css'>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>XKVCD Human Password Generator</title>
    <script src="js/vendor/modernizr.js"></script>
</head>

<?php
error_reporting(E_ALL);	#Report Errors, Warnings, and Notices
ini_set('display_errors', 1);	#Display errors on page 
?>

<?php #int rand ( int $min , int $max ) ?>

	<body>
		
		<h1>
			XKVCD Human Password Generator:

		</h1>
		
		<h2>
			Human passwords for human people<br>
		</h2>

		<h5>Based on the ideas presented on <a href="http://xkcd.com/936/">http://xkcd.com/936/</a></h5>
		<img src="img/password_strength.png";>

			<h3>Now let's get you an easy to remember password!<br />
				Pick out what you would like your password to have:</h3>

			<form method='POST' action='ranPass5.php'>
			<p>
			How many random words?
			<select name="nWs">
		        <option value="1">1</option>
		        <option value="2">2</option>
		        <option value="3">3</option>
		        <option value="4">4</option>
		        <option value="5">5</option>
		        <option value="6">6</option>
		        <option value="7">7</option>
		        <option value="8">8</option>
		        <option value="9">9</option>
		        <option value="10">10</option>
		        <option value="11">11</option>
		        <option value="12">12</option>				 
		        <option value="13">13</option>
		        <option value="14">14</option>
		        <option value="15">15</option>
		        <option value="16">16</option>				           
		        <option value="17">17</option>
		        <option value="18">18</option>
		        <option value="19">19</option>
		        <option value="20">20</option>
		        <input type='submit'>
			</select>


<?php
# $nW stands for "Number of Words"; Its value is passed in by the user. $wN stands for "Word Number".
$wN=$_POST["nWs"];
// unset($_POST["nWs"]);
?>

			<form method='POST' action='ranPass5.php'>
			<p>	
			How many random numbers at the beginning? (Single Digits)
			<select name="nNs1">
		        <option value="0">0</option>				
		        <option value="1">1</option>
		        <option value="2">2</option>
		        <option value="3">3</option>
		        <option value="4">4</option>
		        <option value="5">5</option>
		        <option value="6">6</option>
		        <option value="7">7</option>
		        <option value="8">8</option>
		        <option value="9">9</option>
		        <option value="10">10</option>
		        <option value="11">11</option>
		        <option value="12">12</option>				 
		        <option value="13">13</option>
		        <option value="14">14</option>
		        <option value="15">15</option>
		        <option value="16">16</option>				           
		        <option value="17">17</option>
		        <option value="18">18</option>
		        <option value="19">19</option>
		        <option value="20">20</option>
		        <input type='submit'>		        
		    </select>
			</p>


<?php
# $nNs1 stands for "Number of Numbers"; Its value is passed in by the user. $nN1 stands for "Number Number".
$nN1=$_POST["nNs1"];
// echo $nN;
?>
			<form method='POST' action='ranPass5.php'>
			<p>	
			How many random numbers at the end? (Single Digits)
			<select name="nNs2">
		        <option value="0">0</option>				
		        <option value="1">1</option>
		        <option value="2">2</option>
		        <option value="3">3</option>
		        <option value="4">4</option>
		        <option value="5">5</option>
		        <option value="6">6</option>
		        <option value="7">7</option>
		        <option value="8">8</option>
		        <option value="9">9</option>
		        <option value="10">10</option>
		        <option value="11">11</option>
		        <option value="12">12</option>				 
		        <option value="13">13</option>
		        <option value="14">14</option>
		        <option value="15">15</option>
		        <option value="16">16</option>				           
		        <option value="17">17</option>
		        <option value="18">18</option>
		        <option value="19">19</option>
		        <option value="20">20</option>
		        <input type='submit'>		        
		    </select>
			</p>


<h2>Your brand new Human-Friendly Password:</h2>

<div>
<?php
# $nNs2 stands for "Number of Numbers"; Its value is passed in by the user. $nN2 stands for "Number Number".
$nN2=$_POST["nNs2"];
// echo $nN2;



			if ($nN1>0){
				for ($Nums=1;$Nums<=$nN1;$Nums++){
				$RandN1 = rand(0,9);
				echo $RandN1;
				}
			}





// <!-- <form method='POST' action='ranPass5.php'>
//     Enter 5 contestants<br>
//     <input type='text' name='contestant1'><br>
//     <input type='text' name='contestant2'><br>
//     <input type='text' name='contestant3'><br>
//     <input type='text' name='contestant4'><br>
//     <input type='text' name='contestant5'><br>
//     <input type='submit' value='Pick a winner!'><br>
// </form> -->


// $x= "<pre>". print_r($_POST)."</pre>"; 
// echo $x;

// echo $_POST["nWs"];


// echo 'Hello ' . htmlspecialchars($_POST["name"]) . '!';

// foreach ($_POST as $key=>$value) {
// 	$nWs[$value]='sdfds';
// }




			for ($Words=1;$Words<=$wN;$Words++){
				$RandW = rand(1,1040);
				$a = floor($RandW/130)+1;
				$i= $RandW % 130;

				while ($a<16) {
					if ($a%2==0){
						$a++;
					}
					if (($a>0) && ($a<9)){
					$URL=('http://www.paulnoll.com/Books/Clear-English/words-0'.$a.'-0'.($a+1).'-hundred.html');
					}	else if (($a>=9) && ($a<10)){
					$URL=('http://www.paulnoll.com/Books/Clear-English/words-0'.$a.'-'.($a+1).'-hundred.html');
					}	else if (($a>=11) && ($a<16)){
					$URL=('http://www.paulnoll.com/Books/Clear-English/words-'.$a.'-'.($a+1).'-hundred.html');
					}
					break;
				}

				$List = file_get_contents($URL);
				$Array = explode("<li>", $List);
					echo $Array[$i];
			}




			if ($nN2>0){
				for ($Nums=1;$Nums<=$nN2;$Nums++){
				$RandN2 = rand(0,9);
				echo $RandN2;
				}
			}
?>
</div>


<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

   
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>


	</body>
</html>
