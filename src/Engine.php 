<?php

namespace BrainGames;

use function cli\line;
use function cli\prompt;

/**
 * $rule — строка с правилами
 * $questionsAndAnswers — массив [["вопрос", "ответ"], ...]
 */
function runGame(string $rule, array $questionsAndAnswers): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($rule);

    foreach ($questionsAndAnswers as [$question, $correctAnswer]) {
        line("Question: %s", $question);
        $userAnswer = prompt('Your answer');

        if ((string)$userAnswer !== (string)$correctAnswer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return;
        }
        line('Correct!');
    }
    line('Congratulations, %s!', $name);
}
