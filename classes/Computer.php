<?php

class Computer {
    public $marca;
    public $modello;
    public $processore = "M1";
    public $sistemaOperativo;
    public $ram;
    public $gpu;
    public $disco;
    private $prezzo;

    public function __construct($_marca, $_modello, $_processore, $_sistemaOperativo, $_ram, $_gpu, $_disco, $_prezzo)
    {
        $this->marca = $_marca;
        $this->modello = $_modello;
        $this->processore = $_processore;
        $this->sistemaOperativo = $_sistemaOperativo;
        $this->ram = $_ram;
        $this->gpu = $_gpu;
        $this->disco = $_disco;
        $this->prezzo = $_prezzo;
    }

    public function getNomeCompleto()
    {
        return "{$this->marca} {$this->modello}";
    }

    public function getPrezzo() 
    {
        if ( $this->marca == "Acer" ) {
            $this->prezzo -= $this->prezzo * 0.1;
        }
        return $this->prezzo;
    }
}