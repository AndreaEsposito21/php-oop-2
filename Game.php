<?php 
    class Game {
        public $titolo;

        public $genere;

        public $editore;

        public $sviluppatore;

        public $valutazione = 75;

        public $pegi = 16;

        public function __construct($_titolo, $_genere, $_editore, $_sviluppatore) {
            $this->titolo = $_titolo;
            $this->genere = $_genere;
            $this->editore = $_editore;
            $this->sviluppatore = $_sviluppatore;
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