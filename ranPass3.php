<!DOCTYPE html>
<html>
<head>

	<meta charset='utf-8'>
	<title>XKVCD Human Password Generator</title>

	<link rel='stylesheet' href='styles.css' type='text/css'>

<?php
error_reporting(E_ALL);	#Report Errors, Warnings, and Notices
ini_set('display_errors', 1);	#Display errors on page 
?>

<?php #int rand ( int $min , int $max ) ?>

</head>

	<body>
		
		<h1>
			XKVCD Human Password Generator:
		</h1>
		
		<h2>
			Human passwords for human people<br>
		</h2>

		<?php

			// function multiexplode ($delimiters,$string) {
			    
			//     $ready = str_replace($delimiters, $delimiters[0], $string);
			//     $launch = explode($delimiters[0], $ready);
			//     return  $launch;
			// }

			// $List1 = file_get_contents('http://www.paulnoll.com/Books/Clear-English/words-01-02-hundred.html');
			// $Array1 = explode("<li>", $List1);

//			$Array_1 = explode("</li>", $Array1);

			// 	for( ($j=65; $j<=90; $j++) && ($j=97; $j<=122; $j++) ) {
			// 	echo "&#$".$j.";";
			// }

				// for ($j=1;$j<=1;$j++) {
					for ($a=1;$a<9;$a++){
					$URL=('http://www.paulnoll.com/Books/Clear-English/words-0'.$a.'-0'.($a+1).'-hundred.html');
					$a=$a+1;
					$List1 = file_get_contents($URL);
					$Array1 = explode("<li>", $List1);
						for($i=1;$i<130;$i++){
						echo $Array1[$i];
						}

					}
				// }

				// for($i=1;$i<130;$i++){
				// echo $Array1[$i];




					// for ($j=0;$j<=10;$j++)
					// if (substr($Array1[$i],$j,$j)=="<") {
					// 	echo substr($Array1[$i],0,$j-1);
					// } else if (substr($Array1[$i],$j,$j)!="<") {
					// 	break;
					// }


		?>

<!-- 		<p>
			<?php
//			$Page = file_get_contents('http://www.paulnoll.com/Books/Clear-English/words-01-02-hundred.html');
//			$a = serialize($Page);
//			$b = preg_match_all("/[\w]/", $Page);
//			print_r($b);
//			$b = 

			$List1 = file_get_contents('http://www.paulnoll.com/Books/Clear-English/words-01-02-hundred.html');
			$a = serialize(preg_match_all("/(.*)\w(?)/", $List1, $Arrays, PREG_SET_ORDER));

			for ($i=25;$i<643;$i++){ 
//				if ($Arrays[$i] = "1.") {

				print_r ($Arrays[$i]);
//				}


			// $aList = preg_split(" \w ",$Arrays[$i]);
			// print_r($aList);
			}
			?>
		</p>
 -->

<!-- 		<?php
		// Create a stream
		$opts = array(
		  'http'=>array(
		    'method'=>"GET",
		    'header'=>"Accept-language: en\r\n" .
		              "Cookie: foo=bar\r\n"
		  )
		);

		$context = stream_context_create($opts);

		// Open the file using the HTTP headers set above
		$file = file_get_contents('http://www.paulnoll.com/Books/Clear-English/words-01-02-hundred.html', false, $context);
		?>
 -->
	</body>
</html>