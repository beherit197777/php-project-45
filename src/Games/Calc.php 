<?php

namespace BrainGames\Games;

use function BrainGames\runGame;

function calcGame(): void
{
    $rule = 'What is the result of the expression?';
    $roundsCount = 3;
    $questionsAndAnswers = [];

    $operations = ['+', '-', '*'];

    for ($i = 0; $i < $roundsCount; $i++) {
        $num1 = rand(1, 50);
        $num2 = rand(1, 50);
        $op = $operations[array_rand($operations)];
        $question = "$num1 $op $num2";
        // вычисляем правильный ответ
        switch ($op) {
            case '+':
                $answer = $num1 + $num2;
                break;
            case '-':
                $answer = $num1 - $num2;
                break;
            case '*':
                $answer = $num1 * $num2;
                break;
        }
        $questionsAndAnswers[] = [$question, (string)$answer];
    }

    runGame($rule, $questionsAndAnswers);
}
