<?php

namespace BrainGames\Games;

use function BrainGames\Engine\runGame;
use const BrainGames\Engine\ROUNDS_COUNT;

function runCalcGame(): void
{
    $rule = 'What is the result of the expression?';
    $questionsAndAnswers = [];

    $operators = ['+', '-', '*'];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $number1 = rand(1, 20);
        $number2 = rand(1, 20);
        $operator = $operators[array_rand($operators)];

        // Вычисляем правильный ответ
        switch ($operator) {
            case '+':
                $correctAnswer = (string)($number1 + $number2);
                break;
            case '-':
                $correctAnswer = (string)($number1 - $number2);
                break;
            case '*':
                $correctAnswer = (string)($number1 * $number2);
                break;
        }

        $question = "{$number1} {$operator} {$number2}";
        $questionsAndAnswers[] = [$question, $correctAnswer];
    }

    runGame($rule, $questionsAndAnswers);
}
