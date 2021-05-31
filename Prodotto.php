<?php

    class Prodotto{

        public $tipo_prodotto;

        public $nome_prodotto;

        public $colore_prodotto;

        public $marca_prodotto;

        public $prezzo_prodotto;

        public $codice_prodotto; //Deve diventare privata

        public function __construct($_nome_prodotto, $_prezzo_prodotto){

            $this->nome_prodotto = $_nome_prodotto; 

            $this->prezzo_prodotto = $_prezzo_prodotto;

        }

        public function getInfoData(){

            return[

                'nome' => $this->nome_prodotto,

                'colore' => $this->colore_prodotto,

                'marca' => $this->marca_prodotto,

                'prezzo' => $this->prezzo_prodotto,

                'tipo_prodotto' => $this->tipo_prodotto
                
            ];

        }
      
    }

?>