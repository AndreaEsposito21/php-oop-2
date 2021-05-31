<?php 
    class Game {
        public $titolo;

        public $genere

        public $editore;

        public $sviluppatore;

        public $valutazione = 75;

        public $pegi = 16;

        public function __construct($_titolo, $_genere) {
            $this->titolo = $_titolo;
            $this->genere = $_genere;
        }

        public function getInfoData() {
            return [
                'titolo' => $this->titolo,
                'genere' => $this->genere,
                'sviluppatore' => $this->sviluppatore,
                'editore' => $this->editore,
                'valutazione' => $this->valutazione,
                'pegi' => $this->pegi
            ];
        }
    }
?>