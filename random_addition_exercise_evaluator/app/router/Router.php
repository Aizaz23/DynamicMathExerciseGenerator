<?php

class Router
{
    public function route($url)
    {
        switch ($url){
            case '/':
                require_once __DIR__ . '/../controller/RandomController.php';
                require_once __DIR__ . '/../service/RandomGeneratorService.php';
                $randomController = new RandomController();
                $randomController->displayExercise();
                break;
        }
    }

}