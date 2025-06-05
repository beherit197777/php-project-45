<?php

namespace BrainGames\Games;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\ROUNDS_COUNT;

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
    $questionsAndAnswers = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $question = "$num1 $num2";
        $answer = (string)getGcd($num1, $num2);
        $questionsAndAnswers[] = [$question, $answer];
    }

    runGame($rule, $questionsAndAnswers);
}
