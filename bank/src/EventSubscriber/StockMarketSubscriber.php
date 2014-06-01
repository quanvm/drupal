<?php

namespace Drupal\bank\EventSubscriber;

use Drupal\bank\BankEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class StockMarketSubscriber implements EventSubscriberInterface {

  static function getSubscribedEvents() {
  	$events['bank.money_transfer'] = 'onMoneyTransfer';
  	return $events;
  }

	static function onMoneyTransfer(BankEvent $e) {
    drupal_set_message("{$e->getMount()} was transferred. Event thrown by Subscriber.");
  }

}
