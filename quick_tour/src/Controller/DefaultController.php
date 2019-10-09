<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class DefaultController {
    public function index() {
        return new Response("<h1>Hello!</h1>");
    }

    public function greeting() {
        $greetings = ["Hello", "Bonjour", "مرحبا"];

        return new Response($greetings[array_rand($greetings)]);
    }
}