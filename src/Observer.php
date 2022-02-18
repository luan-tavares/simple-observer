<?php

namespace LTL\Observer;

use LTL\Observer\Interfaces\ObserverInterface;
use LTL\Observer\Interfaces\SubjectInterface;

class Observer implements ObserverInterface
{
    public function update(SubjectInterface $subject, string $event): void
    {
        if (method_exists($this, $event)) {
            $this->{$event}($subject);
        }
    }
}
