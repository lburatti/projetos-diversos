<?php

// JSON TESTE (arrumar depois)
$file = file_get_contents("roundsTest.json");
$rounds = json_decode($file);

$isPlayer1 = true;
$cardsDrawn = [];
$cardsHandJoao = [];
$cardsHandMaria = [];
$joaoPoints = 0;
$mariaPoints = 0;

for ($i = 0; $i < count($rounds); $i++) {

    array_push($cardsDrawn, $rounds[$i]); // cartas sorteadas (geral)

    if ($isPlayer1) { // JOÃO

        $existsInArray = in_array($rounds[$i], $cardsHandJoao);
        $countJoao = count($cardsHandJoao);

        if ($existsInArray  && $countJoao <= 5) {
            $joaoPoints += 1;
        } elseif (!$existsInArray && $countJoao < 5) {
            array_push($cardsHandJoao, $rounds[$i]);
        } elseif (!$existsInArray && $countJoao == 5) {
            $equalCards = array_intersect($cardsHandJoao, $cardsDrawn);
            $discard = array_shift($equalCards);
            $key = array_search($discard, $cardsHandJoao);
            unset($cardsHandJoao[$key]);
            array_push($cardsHandJoao, $rounds[$i]);
        }

    } else { // MARIA

        $existsInArray = in_array($rounds[$i], $cardsHandMaria);
        $countMaria = count($cardsHandMaria);

        if ($existsInArray  && $countMaria <= 5) {
            $mariaPoints += 1;
        } elseif (!$existsInArray && $countMaria < 5) {
            array_push($cardsHandMaria, $rounds[$i]);
        } elseif (!$existsInArray && $countMaria == 5) {
            array_push($cardsHandMaria, $rounds[$i]);
            reset($cardsHandMaria);
            current($cardsHandMaria);
            $discard = array_shift($cardsHandMaria);
        }
    }

    $isPlayer1 = !$isPlayer1;
}

echo "Cartas na mão do João: <br>";
print_r($cardsHandJoao);
echo "<br>";
echo "Cartas na mão da Maria: <br>";
print_r($cardsHandMaria);
echo "<br>";

echo "Pontos de João: $joaoPoints <br>";
echo "Pontos de Maria: $mariaPoints <br>";
$countRounds = count($rounds);
echo "Rounds: $countRounds <br>";
