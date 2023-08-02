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
        $this->correctAnswer = $this->a + $this->b;
    }

    public function getExerciseText()
    {
        return "{$this->a} + {$this->b}";
    }

    public function evaluateAnswer($userAnswer)
    {
        $userAnswer = (int) $userAnswer;
        return $userAnswer === $this->correctAnswer;
    }
}
?>
