<?php
namespace LTL\Observer\Interfaces;

use LTL\Observer\Interfaces\ObserverInterface;

interface SubjectInterface
{
    public function attach(ObserverInterface $observer);
    public function detach(ObserverInterface $observer);
    public function notify(string $event);
}
