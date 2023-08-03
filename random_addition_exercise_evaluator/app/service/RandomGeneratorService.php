<?php

require_once __DIR__ . '/../model/RandomAdditionExercise.php';

class RandomGeneratorService
{
    private $randomAdditionExercise;

    public function __construct()
    {
        $this->randomAdditionExercise = new RandomAdditionExercise();
    }

    public function generateExerciseText(): string
    {
        return $this->randomAdditionExercise->getExerciseText();
    }

}

