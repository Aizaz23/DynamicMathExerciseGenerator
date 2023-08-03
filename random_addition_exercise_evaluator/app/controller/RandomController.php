<?php

require_once __DIR__ . '/../service/RandomGeneratorService.php';

class RandomController
{
    private $randomGeneratorService;

    public function __construct()
    {
        $this->randomGeneratorService = new RandomGeneratorService();
    }

    public function displayExercise()
    {
        $exerciseText = $this->randomGeneratorService->generateExerciseText();
        include __DIR__ . '/../view/exercisegeneratorview.php';
    }
}