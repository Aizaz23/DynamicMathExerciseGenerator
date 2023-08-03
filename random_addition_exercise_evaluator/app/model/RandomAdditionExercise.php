<?php

class RandomAdditionExercise {
    private $a;
    private $b;
    private $correctAnswer;

    public function __construct()
    {
        $this->generateRandomExercise();
    }

    private function generateRandomExercise()
    {
        $this->a = random_int(0, 1000);
        $this->b = random_int(0, 1000);
    }

    public function getExerciseText()
    {
        return "{$this->a} + {$this->b}";
    }

}
