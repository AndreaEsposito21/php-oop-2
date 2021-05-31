<?php 
    require_once __DIR__ . '/Game.php';

    class Boardgame extends Game {
        // override
        public $valutazione = 75;
        public $pegi = 14;
    }
?>