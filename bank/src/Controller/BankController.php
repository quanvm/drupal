<?php

namespace Drupal\bank\Controller;

use Drupal\bank\BankEvent;

class BankController {

  public function eventDispatcher() {
    $event_dispatcher = \Drupal::service('event_dispatcher');

    $bankEvent = new BankEvent();
    $bankEvent->setMount(100);

    $event_dispatcher->dispatch('bank.money_transfer', $bankEvent);

    return array('#markup' => 'Money was transferred');
  }
}
