<?php

namespace BrainGames\Games;

use function BrainGames\runGame;

// Проверка, является ли число простым
function isPrime(int $num): bool
{
    if ($num < 2) {
        return false;
    }
    for ($i = 2, $limit = (int)sqrt($num); $i <= $limit; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

function primeGame(): void
{
    $rule = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $roundsCount = 3;
    $questionsAndAnswers = [];

    for ($i = 0; $i < $roundsCount; $i++) {
        $number = rand(2, 100);
        $correctAnswer = isPrime($number) ? 'yes' : 'no';
        $questionsAndAnswers[] = [$number, $correctAnswer];
    }

    runGame($rule, $questionsAndAnswers);
}
