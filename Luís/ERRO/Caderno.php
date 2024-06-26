<?php
   class Caderno{
     public $tipo;
    public $cor;
    public $nfolhas;
    public $aberto;

    
    public function__construct ()
    {
        $this->tipo ="Espiral";
        $this->cor ="Azul";
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($t){
          $this->tipo = $t;
    }
    public function getTipo($c){
        return $this->cor;
    }
    public function setTipo(){ 
        $this->tipo = $c;
  }

   public function folhear(){
        if ($this->aberto==true){
           echo "<p>É possível folhear o caderno!</p>";
        } else {
            echo "<p>Não é possível folhear, estou fechado!</p>";
        }
    } 

    public function abrir(){
        $this->aberto=true;
    }

  public function fechar(){
      $this->aberto=false;
    }

   }
?>