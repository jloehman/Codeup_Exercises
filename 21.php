<?php

$person1 = 'Me';
$person2 = 'You';


$purse = 1;

$deck = [
'Spades' => [2,3,4,5,6,7,8,9,10,'Jack','Queen','King','Ace'],
'Hearts' => [2,3,4,5,6,7,8,9,10,'Jack','Queen','King','Ace'],
'Diamonds' => [2,3,4,5,6,7,8,9,10,'Jack','Queen','King','Ace'],
'Clubs' => [2,3,4,5,6,7,8,9,10,'Jack','Queen','King','Ace']
];


while((count($deck['Spades']) + count($deck['Hearts']) + count($deck['Clubs']) +count($deck['Diamonds']))>20 && ($purse > 0)){

	$playertotal = 0;
	$dealertotal = 0;
	$playerhand = [];
	$playersuit = [];
	$dealerhand = [];
	$dealersuit = [];


	echo "How much would you like to bet? ";
	$bet = trim(fgets(STDIN));
	if($bet<1){
		break;
	}


	for($i=1;$i<=4;$i++) {


		$suit = array_rand($deck);
		$card = $deck["$suit"][array_rand($deck["$suit"])];

		echo "$card of $suit\n";


		if(count($playerhand)<2) {
			$playerhand[] = $card;
			$playersuit[] = $suit;

			switch ($card) {
				case 'Jack':
				$playertotal += 10;
				break;
				case 'Queen':
				$playertotal += 10;
				break;
				case 'King':
				$playertotal += 10;
				break;
				case 'Ace':
				if($playertotal > 10) {
					$playertotal += 1;
				} else {
					$playertotal += 11;
				}
				break;
				default:
				$playertotal += ($card);
				break;
			}
		} else {
			$dealerhand[] = $card;
			$dealersuit[] = $suit;
			switch ($card) {
				case 'Jack':
				$dealertotal += 10;
				break;
				case 'Queen':
				$dealertotal += 10;
				break;
				case 'King':
				$dealertotal += 10;
				break;
				case 'Ace':
				if($dealertotal > 10) {
					$dealertotal += 1;
				} else {
					$dealertotal += 11;
				}
				break;
				default:
				$dealertotal += ($card);
				break;
			}
		}

		// Remove the card from the deck using the value of its index
		switch ($card) {
			case 'Jack':
			unset($deck[$suit][9]);
			break;
			case 'Queen':
			unset($deck[$suit][10]);
			break;
			case 'King':
			unset($deck[$suit][11]);
			break;
			case 'Ace':
			unset($deck[$suit][12]);
			break;
			default:
			unset($deck[$suit][$card]);
			break;
		}
	}


	// show PLayer's cards
	echo "You have the ";
	for ($i=0; $i <count($playerhand); $i++) { 
		echo $playerhand[$i] . " of " . $playersuit[$i];
		if($i< count($playerhand)-1)
			echo " and ";
	}
	echo " in your hand.\n";

	if($playertotal == 21) {
		echo "21!! Winner!!\n";
		$purse += (2* $bet);
		break;
	}

	// Dealer blackjack?

	if($dealertotal == 21) {
		echo "Dealer Wins.\n";
		$purse -= $bet;
		break;
	}

	if($playertotal > $dealertotal) {
		echo "You win!\n";
		$purse += $bet;
	} elseif($dealertotal < $playertotal) {
		echo "You lose.\n";
		$purse -= $bet;
	}




}

echo "There are " . (count($deck['Spades']) + count($deck['Hearts']) + count($deck['Clubs']) + count($deck['Diamonds'])) . " cards left in the deck.\n";




echo "Done.\n";

?>