<?php

abstract class Question {}
class Single extends Question {}
class Multiple extends Question {}

// $input = 'single';

// switch ($input) {
//     case 'single':
//         $question = new Single();
//         break;
//     case 'multi':
//         $question = new Multiple();
//         break;
//     default:
//         throw new Exception(message: 'Invalid question type');
// }

// Match Expression 
$input = 'single';

$question = match ($input) {
    'single' => new Single(),
    'multi', 'multiple' => new Multiple(),
    default => throw new InvalidArgumentException(message: 'Invalid question type'),
};

var_dump($question);