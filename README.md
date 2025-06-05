### Hexlet tests and linter status:
[![Actions Status](https://github.com/beherit197777/php-project-45/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/beherit197777/php-project-45/actions)
# php-project-45

[![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=beherit197777_php-project-45&metric=alert_status)](https://sonarcloud.io/summary/new_code?id=beherit197777_php-project-45)
[![Bugs](https://sonarcloud.io/api/project_badges/measure?project=beherit197777_php-project-45&metric=bugs)](https://sonarcloud.io/summary/new_code?id=beherit197777_php-project-45)
[![Code Smells](https://sonarcloud.io/api/project_badges/measure?project=beherit197777_php-project-45&metric=code_smells)](https://sonarcloud.io/summary/new_code?id=beherit197777_php-project-45)
[![Duplicated Lines](https://sonarcloud.io/api/project_badges/measure?project=beherit197777_php-project-45&metric=duplicated_lines_density)](https://sonarcloud.io/summary/new_code?id=beherit197777_php-project-45)

Описание

**«Игры разума»** — набор из пяти консольных игр, построенных по принципу популярных мобильных приложений для прокачки мозга.  
Каждая игра задает вопросы, на которые нужно дать правильные ответы. После трёх правильных ответов считается, что игра пройдена.  
Неправильные ответы завершают игру и предлагают пройти её заново.

---

## Доступные игры

- **Калькулятор** — арифметические выражения, которые необходимо вычислить.
- **Прогрессия** — поиск пропущенного числа в последовательности.
- **Чёт/нечёт** — определение, является ли число чётным.
- **Наибольший общий делитель** — вычисление НОД двух чисел.
- **Простое число** — определение, является ли число простым.

---

## Установка и запуск

```bash
git clone https://github.com/beherit197777/php-project-45.git
cd php-project-45
make install


make brain-even         # игра: чёт/нечёт
make brain-calc         # калькулятор
make brain-gcd          # НОД
make brain-progression  # прогрессия
make brain-prime        # простое число

