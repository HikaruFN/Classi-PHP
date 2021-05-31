<?php

    class Utente{

        public $nome_utente;

        public $cognome_utente;

        public $email_utente; //Deve diventare privata

        public $indirizzo; //Deve diventare privata

        protected $carrello = [];

        public function __construct($_nome, $_cognome){

            $this->nome_utente = $_nome; 

            $this->cognome_utente = $_cognome ;

        }

        public function getInfoDataUser(){

            return [

                'nome' => $this->nome_utente,

                'cognome' => $this->cognome_utente

            ];

        }

        public function addToCarrello($prodotto){

            $this->carrello[] = $prodotto; 

        }

        public function getCarrello(){

            return $this->carrello;

        }

    }


?>