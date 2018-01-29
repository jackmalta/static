<?php
  require 'Conta.php';

  $conta1 = Conta::criaConta();
  Conta::criaConta();
  Conta::criaConta();
  Conta::criaConta();
  Conta::criaConta();
  echo $conta1->saldo . PHP_EOL;

  echo Conta::$contador . PHP_EOL;

 ?>
