<?php

namespace Drupal\bank;

use Symfony\Component\EventDispatcher\Event;

class BankEvent extends Event {
  private $mount;

  public function getMount() {
    return $this->mount;
  }

  public function setMount($mount) {
    $this->mount = $mount;
  }
}
