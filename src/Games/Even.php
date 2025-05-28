<?php

namespace BrainGames\Games;

use function cli\line;
use function cli\prompt;

function evenGame(): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');

    $roundsToWin = 3;

    for ($i = 0; $i < $roundsToWin; $i++) {
        $number = rand(1, 100);
        line("Question: $number");
        $userAnswer = prompt("Your answer");

        $correctAnswer = ($number % 2 === 0) ? 'yes' : 'no';

        if ($userAnswer !== 'yes' && $userAnswer !== 'no') {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return;
        }

        if ($userAnswer !== $correctAnswer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return;
        }

        line("Correct!");
    }

    line("Congratulations, %s!", $name);
}
