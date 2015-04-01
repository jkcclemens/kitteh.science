<?php

namespace KittehScience\Http\Controllers;

use Config;
use View;

class ScienceFactsController extends Controller {

    /**
     * @return array
     */
    public function getAllFacts() {
        return $facts = Config::get('kitteh-facts.facts');
    }

    /**
     * @return string
     */
    public function getRandomFact() {
        $facts = $this->getAllFacts();
        return $facts[array_rand($facts)];
    }

    public function index() {
        return View::make('facts')->with('fact', $this->getRandomFact());
    }

}
