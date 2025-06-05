<?php

namespace BrainGames\Games;

use function BrainGames\Engine\runGame;
use const BrainGames\Engine\ROUNDS_COUNT;

function progressionGame(): void
{
    $rule = 'What number is missing in the progression?';
    $questionsAndAnswers = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $length = rand(5, 10);
        $start = rand(1, 50);
        $step = rand(2, 10);

        // Генерируем прогрессию
        $progression = [];
        for ($j = 0; $j < $length; $j++) {
            $progression[] = $start + $j * $step;
        }

        $hiddenIndex = rand(0, $length - 1);
        $correctAnswer = (string)$progression[$hiddenIndex];
        $progression[$hiddenIndex] = '..';

        $question = implode(' ', $progression);

        $questionsAndAnswers[] = [$question, $correctAnswer];
    }

    runGame($rule, $questionsAndAnswers);
}
