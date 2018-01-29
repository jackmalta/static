<?php
  class Conta
  {
    public $numero;
    public $saldo = 900;
    public $limite;
    static $contador;

    function __Construct()
    {
      self::$contador++;
    }

    static function criaConta()
    {
      return new Conta();
    }

    function exibir()
    {
      $this->numero = self::$contador;
    }
  }

 ?>
