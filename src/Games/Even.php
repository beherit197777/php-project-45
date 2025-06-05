<?php

namespace BrainGames\Games;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\ROUNDS_COUNT;

function runEvenGame(): void
{
    $rule = 'Answer "yes" if the number is even, otherwise answer "no".';
    $questionsAndAnswers = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $number = rand(1, 100);
        $correctAnswer = $number % 2 === 0 ? 'yes' : 'no';
        $questionsAndAnswers[] = [$number, $correctAnswer];
    }

    runGame($rule, $questionsAndAnswers);
}
