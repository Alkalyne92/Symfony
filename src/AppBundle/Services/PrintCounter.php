<?php

namespace AppBundle\Services;

class PrintCounter {

  private $number;

  public function __construct($logger)
  {
    $this->number = 0;
    $this->$logger = $logger;
  }


  public function increase() {

    $this->logger->log('je suis entré dans increase');
    $this->number ++;

  }

}



 ?>
