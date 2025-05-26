<?php

namespace BrainGames\Cli;

class Cli
{
    public function greetUser()
    {
        // Приветствие
        echo "Welcome to the Brain Games!\n";

        // Запрашиваем имя пользователя
        echo "May I have your name? ";
        $name = trim(fgets(STDIN));

        // Приветствуем пользователя
        echo "Hello, $name!\n";
    }
}
