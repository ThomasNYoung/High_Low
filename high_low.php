<?php
 

$playAgain = true;
$keepGoing = true;
echo $randomNumber;
 
do{
$randomNumber = mt_rand(0,100);
	
	fwrite(STDOUT, "guess a number\n") . PHP_EOL;
	  
	$winner = "you win\n";

	$higher = "guess higher\n";

	$lower = "guess lower\n";

	do{

		$guess = fgets(STDIN);


	 // $keepGoing = true;
	 
	 	
	 	if($guess < $randomNumber) {
	 		echo "guess higher\n";
	 	}else if( $guess > $randomNumber){
	 		echo "lower\n";
	 	}else if($guess == $randomNumber){
	 		echo "you win\n";
	 		$keepGoing = false;
	 		// $playAgain = false;
	 	}
	
	} while ($keepGoing);

 	if($keepGoing == false){
	 	fwrite(STDOUT, "would you like to play again? (Y/N)\n");
	 	$userResponse = trim(fgets(STDIN));
	 	if ($userResponse == "N"){
	 		$playAgain = false;
	 	}else{
	 		$keepGoing = true;
	 	}
 	}

} while ($playAgain);

 
?>