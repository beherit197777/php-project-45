<?php

namespace BrainGames\Games;

use function BrainGames\runGame;

function getGcd(int $a, int $b): int
{
    while ($b !== 0) {
        [$a, $b] = [$b, $a % $b];
    }
    return $a;
}

function gcdGame(): void
{
    $rule = 'Find the greatest common divisor of given numbers.';
    $roundsCount = 3;
    $questionsAndAnswers = [];

    for ($i = 0; $i < $roundsCount; $i++) {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $question = "$num1 $num2";
        $answer = (string)getGcd($num1, $num2);
        $questionsAndAnswers[] = [$question, $answer];
    }

    runGame($rule, $questionsAndAnswers);
}
